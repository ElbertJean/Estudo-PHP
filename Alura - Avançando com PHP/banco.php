<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . "\n";
}

function sacar ($conta, $valorASacar){
    if ($valorASacar> $conta["saldo"]){
        exibeMensagem("Você não pode sacar");
    } else {
        $conta["saldo"] -= $valorASacar;
    }

    return $conta;
}

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

$contasCorrentes["123.456.789-10"] = sacar($contasCorrentes["123.456.789-10"], 1000);
$contasCorrentes["123.456.234-10" ] = sacar($contasCorrentes["123.456.234-10" ], 1000);

foreach ($contasCorrentes as $indice => $valor) {
    echo "CPF: " . $indice . " : " . $valor["titular"] . " | Saldo : " . $valor["saldo"] . "\n";
}