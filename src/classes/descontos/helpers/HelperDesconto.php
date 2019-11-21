<?php 

class HelperDesconto
{
    public function ReturnObjetoProximoDesconto(
        Desconto $proximoDesconto, 
        Orcamento $orcamento
    ) {
        if( ! empty($proximoDesconto)) {
            return $proximoDesconto->calculaDesconto($orcamento);
        }
    }
}