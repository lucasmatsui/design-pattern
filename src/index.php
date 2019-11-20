<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require 'classes/Orcamento.php';
require 'classes/services/CalculadoraDeImpostos.php';
require 'classes/impostos/interfaces/Imposto.php';
require 'classes/impostos/ICMS.php';
require 'classes/impostos/ISS.php';
require 'classes/impostos/KCS.php';
require 'classes/Produto.php';
require 'classes/services/CalculadoraDeDescontos.php';
require 'classes/descontos/helpers/HelperDesconto.php';
require 'classes/descontos/interfaces/Desconto.php';
require 'classes/descontos/Desconto5Produtos.php';
require 'classes/descontos/DescontoPara500Reais.php';
require 'classes/descontos/DescontoPara2000Reais.php';


$orcamento = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo "<div><b>5% do orçamento é:</b> {$calculadora->calcula($orcamento, new ICMS())}</div>";
echo "<div><b>10% do orçamento é:</b>  {$calculadora->calcula($orcamento, new ISS())}</div>";
echo "<div><b>20% do orçamento é:</b> {$calculadora->calcula($orcamento, new KCS())}</div>";
echo "<hr/>";

// Descontos 
echo "Testes de Desconto: <br/>";

$orcamento->addProduto(new Produto('Tijolo', 500));


$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo $calculadoraDeDescontos->calculaDesconto($orcamento);