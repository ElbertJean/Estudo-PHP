<?php

class Conta 
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}

$primeiraConta = new Conta ();
$primeiraConta->cpfTitular = "123.456.789-00";
$primeiraConta->nomeTitular = "Elbin";
$primeiraConta->saldo = "500";

$segundaConta = new Conta ();
$segundaConta->cpfTitular = "060.027.668-63";
$segundaConta->nomeTitular = "Tia Nice";
$segundaConta->saldo = "5500";

print_r ($primeiraConta);
print_r ($segundaConta);