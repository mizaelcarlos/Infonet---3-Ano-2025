<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $table = 'aluno';
    protected $fillable = ['matricula', 'nome', 'email', 'data_nascimento', 'foto'];
    public $timestamps = false;

    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'turma_aluno', 'aluno_id', 'turma_id');
    }

    public function contatoAluno()
    {
        return $this->hasOne(ContatoAluno::class);
    }
}
