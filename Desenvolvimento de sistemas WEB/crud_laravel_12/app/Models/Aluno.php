<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $table = 'aluno';
    protected $fillable = ['matricula', 'nome', 'email', 'data_nascimento', 'foto'];
    public $timestamps = false;
}
