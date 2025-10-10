<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aluno', AlunoController::class);
Route::resource('curso', CursoController::class);
Route::resource('turma', TurmaController::class);
Route::get('contato/aluno', [AlunoController::class, 'contato']);
