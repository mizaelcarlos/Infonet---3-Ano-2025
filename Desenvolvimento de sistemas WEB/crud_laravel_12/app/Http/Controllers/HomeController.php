<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;

class HomeController extends Controller
{
    public function listarPublicacoes()
    {
        $avaliacao = Avaliacao::find(1);
        return view('home', compact('avaliacao'));
    }
}
