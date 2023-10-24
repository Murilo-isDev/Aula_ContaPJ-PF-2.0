<?php

require "Conta.php";
require_once "ContaPF.php";
require_once "ContaPJ.php";

$c1 = new ContaPJ();

$c1->setNumeroConta(23423534);
$c1->setNomeTitular("José");
$c1->setSaldo(1000);


$c1->setLimiteEmprestimo(5000);
$c1->dados();
echo "-----------------------------Depois--------------------- :  <br>";

$c1->SolicitarEmprestimo(1000);
$c1->PagarEmprestimo(500);

$c1->MostrarLimite();
$c1->mostrarSaldo();

echo "-------------------------------------------------- <br>";

$c2 = new ContaPF();

$c2->setNumeroConta(8080);
$c2->setNomeTitular("Gareth de Rívia");
$c2->setSaldo(1000);
$c2->setRendimento(0.1);

$c2->dados();
$c2->mostrarSaldo();
$c2->render();
$c2->mostrarSaldo();

echo "-------------------------------------------------- <br>";

$c3 = new ContaPJ();

$c3->setNumeroConta(9090);
$c3->setNomeTitular("Ieniffer de Vengenberg");
$c3->setSaldo(10000);


$c3->setLimiteEmprestimo(5000);
$c3->dados();
echo "-----------------------------Depois--------------------- :  <br>";

$c3->SolicitarEmprestimo(1000);
$c3->PagarEmprestimo(500);

$c3->MostrarLimite();
$c3->mostrarSaldo();

?>