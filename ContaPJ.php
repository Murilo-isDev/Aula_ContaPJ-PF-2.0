<?php

require_once "Conta.php";

    class ContaPJ extends Conta{

    private $LimiteEmprestimo;

    public function getLimiteEmprestimo(){
        return $this->LimiteEmprestimo;
    }

    public function setLimiteEmprestimo($valor){
        $this->LimiteEmprestimo = $valor;
    }
    

    public function SolicitarEmprestimo($valor){
       
        $this->LimiteEmprestimo = $this->LimiteEmprestimo - $valor;

        $emprestimo = $this->getSaldo() + $valor;
        $this->setSaldo($emprestimo);

    }


    public function PagarEmprestimo($valor){
    
        $emprestimo = $this->getLimiteEmprestimo() + $valor;
        $this->setLimiteEmprestimo($emprestimo);

    }
    public function MostrarLimite(){
        echo "O Limite de Empréstimo atual é : $this->LimiteEmprestimo <br>";

    }

    // public function imprimir(){
    //  parent::imprimir();
    // echo "Rendimento:" .this->rendimento. "<br>" ; 
    //   } issso pra adicionar mais coisas ao método imprimir do Dênis é diferente do meu. 

}

?>