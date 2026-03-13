<?php

class
{
    public $nome;
    public $saldo;

    function __construct($nome, $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    function incrementarSaldo($valor)
    {
        $this-> = $this->saldo + $valor;
    }
}