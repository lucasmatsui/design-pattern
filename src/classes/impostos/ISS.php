<?php

class ISS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {   
        return $orcamento->getValorOrcamento() * 0.1;
    }
}