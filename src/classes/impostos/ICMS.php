<?php

class ICMS extends TemplatesDeImpostoCondicional
{
    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    public function condicionalTaxacaoMaxima(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() > 500;
    }

    public function taxarMaximo(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() * 0.15;
    }

    public function taxarMinimo(Orcamento $orcamento) 
    {
        return $orcamento->getValorOrcamento() * 0.05;
    }
}