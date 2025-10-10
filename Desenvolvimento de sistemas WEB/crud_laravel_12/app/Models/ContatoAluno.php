<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoAluno extends Model
{
    protected $table = 'contato_aluno';
    protected $fillable = ['aluno_id', 'telefone'];
    public $timestamps = false;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
