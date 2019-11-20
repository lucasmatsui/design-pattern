<?php

class ICMS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValorOrcamento() * 0.05;
    }
}