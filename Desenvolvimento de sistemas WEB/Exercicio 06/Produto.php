<?php
class Produto
{
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function calcularEstoque()
    {
        return $this->preco * $this->quantidade;
    }

    public function exibirDados()
    {
        return "Nome: $this->nome, Preco: $this->preco, Quantidade: $this->quantidade";
    }
}

$produto1 = new Produto('Notebook', 3500, 10);
$produto1->getNome();
$produto1->setPreco(3600);
$produto1->calcularEstoque();
$produto1->exibirDados();
