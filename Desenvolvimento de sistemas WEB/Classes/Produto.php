<?php
class Produto
{
    private $preco;
    private $descricao;
    private $desconto;

    public function setPreco($valor)
    {
        $this->preco = $valor;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

$produtoNovo = new Produto();
$produtoNovo->setPreco(10);
echo $produtoNovo->getPreco();
