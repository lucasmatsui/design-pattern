<?php 

class DescontoPara500Reais extends HelperDesconto implements Desconto
{
    private $proximoDesconto;

    public function calculaDesconto(Orcamento $orcamento)
    {
        if ($orcamento->getValorOrcamento() >= 500 
            && $orcamento->getValorOrcamento() < 2000
        ) {
            return $orcamento->getValorOrcamento() * 0.05;
        }

        return $this->ReturnObjetoProximoDesconto($this->proximoDesconto, $orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}