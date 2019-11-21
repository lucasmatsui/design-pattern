<?php

//Classe exemplo, sem extender o template
class KCS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValorOrcamento() * 0.2;
    }
}