<?php 

abstract class TemplatesDeImpostoCondicional extends Imposto
{
    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }
    
    public final function calcula(Orcamento $orcamento)
    {
        if ($this->condicionalTaxacaoMaxima($orcamento)) {
            return  $this->taxarMaximo($orcamento) + $this->calculaOutroImposto($orcamento);
        }

        return $this->taxarMinimo($orcamento) + $this->calculaOutroImposto($orcamento);
    }


    public abstract function condicionalTaxacaoMaxima(Orcamento $orcamento);
    public abstract function taxarMaximo(Orcamento $orcamento);
    public abstract function taxarMinimo(Orcamento $orcamento);
}