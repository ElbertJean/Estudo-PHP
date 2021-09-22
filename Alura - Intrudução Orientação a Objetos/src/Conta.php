<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct (string $cpfTitular, string $nomeTitular)
    {
        $this -> cpfTitular = $cpfTitular;
        $this -> validaNomeTitular($nomeTitular);
        $this -> nomeTitular = $nomeTitular;
        $this -> saldo = 0;
    }



    public function sacar(float $valorASacar){
        if ($valorASacar > $this -> saldo){
            echo "Saldo indisponível para saque." . "\n";
            return;
        }
        
        $this -> saldo -= $valorASacar;  
    }

    public function depositar(float $valorADepositar){
        if ($valorADepositar < 0) {
            echo "Valor inválido para depósito" . "\n";
            return;
        }
        
        $this -> saldo += $valorADepositar;
    }

    public function transferir (float $valorATransferir, Conta $contaDestino) {
        if ($valorATransferir > $this -> saldo){
            echo "Não foi possível realizar a transferência, por favor, verifique seu saldo atual \n\n";
            return;
        }
       
        $this -> sacar ($valorATransferir);
        $contaDestino -> depositar ($valorATransferir);
    }

    public function recuperarSaldoTitular () : float {
        return $this -> saldo;
    }

    public function recuperarCpfTitular () : string {
        return $this -> cpfTitular;
    }

    public function recuperarNomeTitular () :string {
        return $this -> nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) <5){
            echo "O nome precisa conter pelo menos 5 caracteres";
            exit ();
        }
    }
}
