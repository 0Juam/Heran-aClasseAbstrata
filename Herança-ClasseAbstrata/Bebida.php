<?php
abstract class Bebida{
    private $nome;
    private $preco; 

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->nome = $preco;
    }
    abstract function mostrarBebida();
    abstract function verificaPreco($preco);
}
?>