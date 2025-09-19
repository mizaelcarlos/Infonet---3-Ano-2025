<?php
class Pessoa
{
    public $nome;
    public $idade;

    // public function __construct($nome, $idade)
    // {
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    // }

    public function saudacao()
    {
        echo 'Olá seja bem vindo ' . $this->nome;
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = 'Mizael';
// $pessoa1->idade = 30;
// $pessoa1->saudacao();

// $pessoa1 = new Pessoa('Mizael', 30);
// $pessoa1->saudacao();
