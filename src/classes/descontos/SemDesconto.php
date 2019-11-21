<?php

class SemDesconto implements Desconto
{
    public function calculaDesconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        return;
    }
}