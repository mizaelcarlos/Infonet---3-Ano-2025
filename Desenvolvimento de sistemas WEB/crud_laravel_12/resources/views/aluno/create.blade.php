@extends('layouts.app')
@section('title', 'Cadastrar aluno')
@section('content')
    <h1>Cadastro de Aluno</h1>
    <form action="{{ route('aluno.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="matricula" class="form-label">Matrícula</label>
                <input type="text" class="form-control" name="matricula" id="matricula">
            </div>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="col-md-6">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Turma: </label>
                <select class="form-control" name="turma_id" id="turma_id">
                    <option value="">Selecione</option>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->descricao }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
