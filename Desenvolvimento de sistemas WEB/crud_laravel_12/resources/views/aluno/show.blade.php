@extends('layouts.app')
@section('title', 'Dados do aluno')
@section('content')
    <h1>Dados do Aluno</h1>
    <p>Matrícula: {{ $aluno->matricula }}</p>
     <p>Nome: {{ $aluno->nome }}</p>
    <p>Email: {{ $aluno->email }}</p>
    <p>Data de nascimento: {{ $aluno->data_nascimento }}</p>
    <p>Telefone: {{ $aluno->contatoAluno->telefone }}</p>
    <img src="{{ asset($aluno->foto) }}" alt="" style="max-width: 400px">

    <div>
        <h1>Alunos que fazem aniversário da data de 15/10/2025</h1>
        @foreach ($alunos_niver_1510 as $aluno)
            <p>Nome: {{ $aluno->nome }}</p>
        @endforeach
    </div>
@endsection
