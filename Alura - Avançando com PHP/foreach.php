<?php

$contasCorrentes = [
    12345678910 => [
        "titular" => "Elbert", 
        "saldo" => 1000
    ], 
    12345623410 => [
        "titular" => "Jhonny", 
        "saldo" => 7000
    ], 
    12345672210 => [
        "titular" => "João", 
        "saldo" => 1800
    ]
];

foreach ($contasCorrentes as $indice => $valor) {
    echo "CPF: " . $indice . " : " . $valor["titular"] . "\n";
}