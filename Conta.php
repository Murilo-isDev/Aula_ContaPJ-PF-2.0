<?php
abstract Class Conta
{

    // Atributos = Caracaterísticas
    private $numeroConta;
    private $nomeTitular;
    private $saldo = 0; 

    public function getNumeroConta(){
      return $this->getNumeroConta;
    }
    public function setNumeroConta($numero){
      $this->numeroConta = $numero;

    }


    public function getNomeTitular(){
      return $this->nomeTitular;
    }
    public function setNomeTitular($nome){
      $this->nomeTitular = $nome;
    }


    public function getSaldo(){
      return $this->saldo;
    }
    public function setSaldo($saldo){
      $this->saldo = $saldo;
    }

    // Métodos
    public function dados(){
      echo "Numero da Conta:" .$this->numeroConta . "<br> ";
      echo "Nome do Titular:" .$this->nomeTitular . "<br>";
      echo "Saldo :" .$this->saldo. "<br>";
    }

    public function depositar ($saldo){
      $this->saldo += $saldo;
      echo "O valor do saldo após o depósito ficou: $this->saldo<br>";
      
    }

    public function sacar ($saldo){
      if($saldo > 0){
        if ($saldo > $this->saldo){
          echo "Saque negado, o valor que quer ser sacado é maior que o saldo atual <br>";
        }
  
        else{
          echo "Saque aprovado, o valor sacado foi $saldo, o banco cobra R$2,00 de taxa para sacar <br>";
          $this->saldo = $this->saldo - ($saldo +2);
        }
      }

    }
    public function mostrarSaldo(){
      echo "O saldo atual é: $this->saldo<br>";
    }

}

?>