<?php

class ContaBancaria
{
    private $saldo = 0;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}

$contaSesi = new ContaBancaria();
$contaSesi->depositar(100);
$contaSesi->depositar(250);
echo $contaSesi->verSaldo();
