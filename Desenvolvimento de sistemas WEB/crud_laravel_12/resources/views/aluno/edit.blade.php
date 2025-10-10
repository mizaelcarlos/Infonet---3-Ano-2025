@extends('layouts.app')
@section('title', 'Editar aluno')
@section('content')
    <h1>Editar Aluno</h1>
    <form action="{{  route("aluno.update",$aluno->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Matrícula</label>
        <input type="text" name="matricula" id="matricula" value="{{ $aluno->matricula }}">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}">
        <label for="">Email</label>
        <input type="text" name="email" id="email" value="{{ $aluno->email }}">
        <label for="">Datas de nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento" value="{{ $aluno->data_nascimento }}">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" id="foto">
        <img src="{{ asset($aluno->foto) }}" alt="" style="max-width: 400px">
        <label for="">Turma: </label>
        <select name="turma_id" id="turma_id">
            <option value="">Selecione</option>
            @foreach ($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->descricao }}</option>
            @endforeach
        </select>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $aluno->contatoAluno?->telefone }}">
            </div>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
