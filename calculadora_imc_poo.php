<?php

function calcularIMC($peso, $altura, $nome) {
    return $peso / ($altura * $altura);
}

$peso = 77; $altura = 1.85; $nome = "João";

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

$imc = calcularIMC($peso, $altura, $nome);
$classificacao = classificarIMC($imc);

echo "Nome: $nome \n" . "<br>";
echo "Peso: $peso kg\n" ."<br>";
echo "Altura: $altura m\n". "<br>";
echo "IMC: " . number_format($imc, 2) . "\n" ."<br>";
echo "Classificação: $classificacao";
