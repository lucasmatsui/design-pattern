<?php 

class Produto
{
    private $nome;
    private $valor;

    function __construct($novoNome, $novoValor)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
    }

    public function getNomeProduto()
    {
        return $this->nome;
    }

    public function getValorProduto()
    {
        return $this->valor;
    }
}