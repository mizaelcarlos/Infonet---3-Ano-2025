<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
