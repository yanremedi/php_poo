<?php
class Carro {
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->setVelocidade($velocidade); // usa validação já no início
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade) {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Erro: Velocidade inválida ({$novaVelocidade} km/h).<br>";
        }
    }
}

$meuCarro = new Carro("Senai-Mobile", 0);

$meuCarro->setVelocidade(150);  // válido
$meuCarro->setVelocidade(5000); // inválido
$meuCarro->setVelocidade(-60);  // inválido

echo "Modelo: " . $meuCarro->getModelo() . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>