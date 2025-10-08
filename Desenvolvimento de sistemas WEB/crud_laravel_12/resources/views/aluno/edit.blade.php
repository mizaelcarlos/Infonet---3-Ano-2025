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
        <button type="submit">Salvar</button>
    </form>
@endsection
