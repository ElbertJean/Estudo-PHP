<?php

require_once './Conta.php';

$primeiraConta = new Conta ("442.531.798-00" , "Elbert Jean dos Santos");

$primeiraConta -> depositar (500);
$primeiraConta -> sacar (300);

echo $primeiraConta -> recuperarNomeTitular (). "\n";
echo $primeiraConta -> recuperarCpfTitular (). "\n";
echo $primeiraConta -> recuperarSaldoTitular ();
