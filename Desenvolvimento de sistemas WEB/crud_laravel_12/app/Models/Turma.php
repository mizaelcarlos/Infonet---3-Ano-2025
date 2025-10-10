<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';
    protected $fillable = ['descricao', 'curso_id'];
    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'turma_aluno', 'turma_id', 'aluno_id');
    }
}
