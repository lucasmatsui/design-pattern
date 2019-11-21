<?php 

abstract class TemplatesDeImpostoCondicional implements Imposto
{
    public final function calcula(Orcamento $orcamento)
    {
        if ($this->condicionalTaxacaoMaxima($orcamento)) {
            return  $this->taxarMaximo($orcamento);
        }

        return $this->taxarMinimo($orcamento);
    }


    public abstract function condicionalTaxacaoMaxima(Orcamento $orcamento);
    public abstract function taxarMaximo(Orcamento $orcamento);
    public abstract function taxarMinimo(Orcamento $orcamento);
}