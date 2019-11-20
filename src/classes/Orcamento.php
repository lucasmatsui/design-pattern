<?php 

class Orcamento
{
    private $valor;
    private $produtos;

    function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->produtos = array();
    }

    public function addProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function getAllProdutos()
    {
        return $this->produtos;
    }
    public function getValorOrcamento()
    {
        return $this->valor;
    }
}