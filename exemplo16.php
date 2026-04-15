<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPtivate = $varPrivate;
    }
}

$teste = new Visibilidade (1, 2, 3);
echo "Atribuindo Public = $teste->varPublic";
echo "Atribuindo Protected = $teste->varProtected";
echo "Atribuindo Private = $teste->varPrivate";