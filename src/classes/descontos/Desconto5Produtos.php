<?php 

class Desconto5Produtos extends HelperDesconto implements Desconto
{
    private $proximoDesconto;

    public function calculaDesconto(Orcamento $orcamento)
    {
        if (count($orcamento->getAllProdutos()) >= 5) {
            return $orcamento->getValorOrcamento() * 0.1;
        }

        return $this->ReturnObjetoProximoDesconto($this->proximoDesconto, $orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}