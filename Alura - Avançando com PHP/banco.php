<?php

//include "funcoes.php";
//require "funcoes.php"";
require_once "funcoes.php";

$contasCorrentes = [
    "123.456.789-10" => [
        "titular" => "Elbert", 
        "saldo" => 1000
    ], 
    "123.456.234-10" => [
        "titular" => "Jhonny", 
        "saldo" => 300
    ], 
    "123.456.722-10" => [
        "titular" => "João", 
        "saldo" => 1800
    ]
];

unset ($contasCorrentes["123.456.722-10"]);

titularComLetrasMaiusculas($contasCorrentes["123.456.234-10"]);

$contasCorrentes["123.456.789-10"] = depositar($contasCorrentes["123.456.789-10"], 1000);
$contasCorrentes["123.456.234-10" ] = sacar($contasCorrentes["123.456.234-10" ], 200);

foreach ($contasCorrentes as $indice => $valor) {
    //list ("titular" => $titular , "saldo" => $saldo) = $valor;
    ["titular" => $titular , "saldo" => $saldo]  = $valor;

    exibeMensagem("CPF: $indice");
    exibeMensagem("Titular: $titular");
    exibeMensagem("Saldo $saldo");
    exibeMensagem("");
    //exibeMensagem("CPF: $indice : {$valor["titular"]} | Saldo : {$valor["saldo"]}");
    //Também pode se utilizar sem as chaves, basta utilizar o parâmetro sem aspas dentro do conchetes
    //exibeMensagem("CPF: $indice : $valor[titular] | Saldo : $valor[saldo]");
}