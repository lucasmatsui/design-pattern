<?php 

class HelperDesconto
{
    public function ReturnObjetoProximoDesconto(
        Desconto $proximoDesconto, 
        Orcamento $orcamento
    ) {
        if( ! is_null($proximoDesconto)) {
            return $proximoDesconto->calculaDesconto($orcamento);
        }
    }
}