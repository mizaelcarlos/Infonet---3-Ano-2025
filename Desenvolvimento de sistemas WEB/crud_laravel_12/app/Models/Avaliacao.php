<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacao';
    protected $fillable = ['likes', 'deslike', 'publicao_id'];
    public $timestamps = false;
}
