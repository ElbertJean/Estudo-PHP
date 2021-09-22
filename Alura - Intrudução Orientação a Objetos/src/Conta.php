<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0 ;

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

    public function definirCpfTitular (string $cpf) : void {
        $this -> cpfTitular = $cpf;
    }

    public function recuperarCpfTitular () : string {
        return $this -> cpfTitular;
    }

    public function definirNomeTitular (string $nome) : void {
        $this -> nomeTitular = $nome;
    }

    public function recuperarNomeTitular () :string {
        return $this -> nomeTitular;
    }




}
