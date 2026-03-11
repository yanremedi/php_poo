<?php

function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

$peso = 77; $altura = 1.85;

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25) {
        return "Peso normal";
    } elseif ($imc < 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

$imc = calcularIMC($peso, $altura);
$classificacao = classificarIMC($imc);

echo "Peso: $peso kg\n";
echo "Altura: $altura m\n";
echo "IMC: " . number_format($imc, 2) . "\n";
echo "Classificação: $classificacao";
