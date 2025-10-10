@extends('layouts.app')
@section('title', 'Dados do turma')
@section('content')
    <h1>Dados do Turma</h1>
     <p>Descrição: {{ $turma->descricao }}</p>
     <p>Curso: {{ $turma->curso->nome }}</p>
@endsection
