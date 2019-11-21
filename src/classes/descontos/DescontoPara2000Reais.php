<?php


class DescontoPara2000Reais extends HelperDesconto implements Desconto
{

    private $proximoDesconto;

    public function calculaDesconto(Orcamento $orcamento)
    {
        if ($orcamento->getValorOrcamento() >= 2000) {
            return $orcamento->getValorOrcamento() * 0.2;
        }

        return $this->ReturnObjetoProximoDesconto($this->proximoDesconto, $orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}
