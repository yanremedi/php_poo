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

    public function publicFunc(){
        echo "Métado Público<br>";
    }

    public function protectedFunc(){
        echo "Métado Protegido<br>";
    }

    public function privateFunc(){
        echo "Métado Privado<br>";
    }
}

$teste = new Visibilidade (1, 2, 3);

echo "Atribuindo Public = $teste->varPublic";
// echo "Atribuindo Protected = $teste->varProtected";
// echo "Atribuindo Private = $teste->varPrivate";

echo "<br>";

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();