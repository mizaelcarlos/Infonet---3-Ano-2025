@extends('layouts.app')
@section('title', 'Listar turmas')
@section('content')
    <h1>Lista de turmas</h1>
    <a class="btn btn-primary" href="{{ route('turma.create') }}">Cadastrar</a>
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Descricao</th>
            <th>Curso</th>
            <th>Quantidade de alunos</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($turmas as $turma)
            <tr class="table-warning">
                <td>{{ $turma->descricao }}</td>
                <td>{{ $turma->curso->nome }}</td>
                <td>{{ $turma->alunos_count }}</td>
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('turma.edit',$turma->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('turma.show',$turma->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('turma.destroy',$turma->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
