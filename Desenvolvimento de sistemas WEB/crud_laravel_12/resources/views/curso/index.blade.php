@extends('layouts.app')
@section('title', 'Listar cursos')
@section('content')
    <h1>Lista de cursos</h1>
    <a class="btn btn-primary" href="{{ route('curso.create') }}">Cadastrar</a>
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr class="table-warning">
                <td>{{ $curso->nome }}</td>
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('curso.show',$curso->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('curso.destroy',$curso->id) }}" method="post">
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
