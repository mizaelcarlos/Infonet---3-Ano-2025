@extends('layouts.app')
@section('title', 'Cadastrar turma')
@section('content')
    <h1>Cadastro de Turma</h1>
    <form action="{{ route('turma.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao">
            </div>
            <div class="col-md-6">
                <label for="curso_id" class="form-label">Curso</label>
                <select class="form-control" name="curso_id" id="curso_id">
                    <option value="">Selecione</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
