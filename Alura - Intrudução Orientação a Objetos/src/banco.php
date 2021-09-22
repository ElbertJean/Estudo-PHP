<?php

require_once './Conta.php';

$primeiraConta = new Conta ();
$primeiraConta -> depositar (500);
$primeiraConta -> sacar (300);
$primeiraConta -> definirCpfTitular ('442.531.798-00');
$primeiraConta -> definirNomeTitular ('Elbert Jean dos Santos');

echo $primeiraConta -> recuperarNomeTitular ();
echo "\n";
echo $primeiraConta -> recuperarCpfTitular ();
echo "\n";
echo $primeiraConta -> recuperarSaldoTitular ();