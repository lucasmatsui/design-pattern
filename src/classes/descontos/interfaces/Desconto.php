<?php

interface Desconto
{
    public function calculaDesconto(Orcamento $orcamento);
    public function setProximoDesconto(Desconto $desconto);
}