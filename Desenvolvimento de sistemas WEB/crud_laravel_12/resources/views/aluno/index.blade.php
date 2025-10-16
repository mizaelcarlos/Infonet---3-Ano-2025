@extends('layouts.app')
@section('title', 'Listar alunos')
@section('content')
    <h1>Lista de alunos
        @guest
            pública
        @endguest
    </h1>
    @auth
     <a class="btn btn-primary" href="{{ route('aluno.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr class="table-warning">
                <td>{{ $aluno->matricula }}</td>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->email }}</td>
                <td>{{ $aluno->data_nascimento }}</td>
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('aluno.edit',$aluno->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('aluno.show',$aluno->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('aluno.destroy',$aluno->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
