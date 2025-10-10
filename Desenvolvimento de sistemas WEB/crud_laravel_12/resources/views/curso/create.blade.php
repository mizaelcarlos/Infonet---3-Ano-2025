@extends('layouts.app')
@section('title', 'Cadastrar aluno')
@section('content')
    <h1>Cadastro de Curso</h1>
    <form action="{{ route('curso.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
