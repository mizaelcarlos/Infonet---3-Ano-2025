<?php
include 'Produto.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$produto = new Produto($nome, $preco, $quantidade);
echo $produto->calcularEstoque();
echo $produto->exibirDados();
