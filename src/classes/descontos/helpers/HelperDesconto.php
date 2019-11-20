<?php 

class HelperDesconto
{
    public function ReturnProximoDescontoOuZero(
        Desconto $proximoDesconto, 
        Orcamento $orcamento
    ) {
        if(!empty($proximoDesconto)) {
            return $proximoDesconto->calculaDesconto($orcamento);
        }

        return 0;
    }
}