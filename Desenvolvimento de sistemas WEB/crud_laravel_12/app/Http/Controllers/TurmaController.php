<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::withCount('alunos')->get();
        return view('turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('turma.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Turma::create($request->all());

        return redirect()->route('turma.index');
    }

    public function cadastrar(Request $request)
    {
        $turma = Turma::create($request->all());

        return response()->json($turma);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = Turma::find($id);
        return view('turma.show', compact('turma'));
    }

    public function consultar(string $id)
    {
        $turma = Turma::find($id);
        return response()->json($turma);
    }

    /**
     * Show the form for editing the specified resource.''
     */
    public function edit(string $id)
    {
        $turma = Turma::find($id);
        $cursos = Curso::all();
        return view('turma.edit', compact('turma', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = Turma::find($id);
        $turma->update($request->all());
        return redirect()->route('turma.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::find($id);
        $turma->delete();
        return redirect()->route('turma.index');
    }
}
