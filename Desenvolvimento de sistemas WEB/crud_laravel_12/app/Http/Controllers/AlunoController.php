<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\ContatoAluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        $alunos_nome_inicia_gu = Aluno::where('nome', 'like', '%Gu%')->get();
        $aluno_id_maior_10 = Aluno::where('id', '>', 10)->count();
        $aluno2 = Aluno::where('id', '>', 10)
            ->where('nome', 'like', 'F%')->get();
        $aluno = Aluno::whereDate('data_nascimento', '<', '2006-01-01');
        return view('aluno.index', compact('alunos', 'aluno_id_maior_10', 'aluno2'));
    }

    public function contato()
    {
        return view('aluno.contato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turmas = Turma::all();
        return view('aluno.create', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extensao_arquivo = $request->foto->getClientOriginalExtension();
        $foto = $nome_arquivo . '-' . time() . '.' . $extensao_arquivo;

        $request->foto->move(public_path('imagens'), $foto);

        $aluno = Aluno::create([
            'matricula' => $request->matricula,
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'foto' => 'imagens/' . $foto
        ]);

        $aluno->turmas()->attach($request->turma_id);

        $aluno->contatoAluno()->create([
            'telefone' => $request->telefone
        ]);

        return redirect()->route('aluno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::find($id);
        $alunos_niver_1510 = Aluno::where('data_nascimento', '2025-10-15')->get();
        return view('aluno.show', compact('aluno', 'alunos_niver_1510'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();
        return view('aluno.edit', compact('aluno', 'turmas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto = null;
        if ($request->hasFile('foto')) {
            $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
            $extensao_arquivo = $request->foto->getClientOriginalExtension();
            $foto = $nome_arquivo . '-' . time() . '.' . $extensao_arquivo;

            $request->foto->move(public_path('imagens'), $foto);
        }

        $aluno = Aluno::find($id);
        $aluno->update([
            'matricula' => $request->matricula,
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'foto' => 'imagens/' . isset($foto) ? $foto : $aluno->foto
        ]);

        $aluno->turmas()->syncWithoutDetaching($request->turma_id);

        if ($aluno->contatoAluno) {
            $aluno->contatoAluno->update([
                'telefone' => $request->telefone
            ]);
        } else {
            $aluno->contatoAluno()->create([
                'telefone' => $request->telefone
            ]);
        }


        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);
        $id_contato_aluno = $aluno->contatoAluno->id;
        $contato_aluno = ContatoAluno::find($id_contato_aluno);
        $contato_aluno->delete();
        $aluno->delete();
        return redirect()->route('aluno.index');
    }
}
