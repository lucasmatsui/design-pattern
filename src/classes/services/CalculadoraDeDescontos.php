<?php 


class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento)
    {
        $Desconto5Produtos = new Desconto5Produtos();
        $DescontoPara500Reais = new DescontoPara500Reais();
        $DescontoPara2000Reais = new DescontoPara2000Reais();
        
        $Desconto5Produtos->setProximoDesconto($DescontoPara500Reais);
        $DescontoPara500Reais->setProximoDesconto($DescontoPara2000Reais);

        $valorDesconto = $Desconto5Produtos->calculaDesconto($orcamento);

        return $valorDesconto;
    }
}