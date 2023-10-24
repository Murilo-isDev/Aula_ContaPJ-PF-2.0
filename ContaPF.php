<?php

require_once "Conta.php";

class ContaPF extends Conta{
    private $rendimento;

    public function render(){
        //$this->setSaldo() += $this->saldo * $this->rendimento;
        $saldo = $this->getSaldo() + ($this->getSaldo() * $this->rendimento);
        $this->setSaldo($saldo);
    }

    public function getRendimento(){
        return $this->rendimento;
    }

    public function setRendimento($valor){
        $this->rendimento = $valor;
    }

}

?>