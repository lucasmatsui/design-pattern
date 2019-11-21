<?php

class ISS extends TemplatesDeImpostoCondicional
{
    // public function calcula(Orcamento $orcamento)
    // {   
    //     if ($orcamento->getValorOrcamento() > 300) {
    //         return $orcamento->getValorOrcamento() * 0.15;
    //     }

    //     return $orcamento->getValorOrcamento() * 0.1;
    // }

    public function condicionalTaxacaoMaxima(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() > 300;
    }

    public function taxarMaximo(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() * 0.15;
    }

    public function taxarMinimo(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() * 0.1;
    }
}