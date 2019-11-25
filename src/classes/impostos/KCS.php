<?php

//Classe exemplo, sem extender o template
class KCS extends Imposto
{
    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValorOrcamento() * 0.2 + $this->calculaOutroImposto($orcamento);
    }
}