<?php
 require_once 'Bebida.php';
class Refrigerante extends Bebida{
    private $retornavel; 

    public function __construct($nome,$preco,$retornavel)
    {
        parent::__construct($nome,$preco);
        $this->retornavel = $retornavel;
    }
 
    public function getRetornavel()
    {
        return $this->retornavel;
    }
    public function setRetornavel($retornavel)
    {
        $this->retornavel = $retornavel;
    }
    public function mostrarBebida()
    {
        $mostra = "Nome: {$this->getNome()} </br> Preço: R$ {$this->getPreco()} </br> Retorável: {$this->retornavel}";
        return $mostra;
    }
    public function verificaPreco($preco)
    {
      $valida = "Caro!";
      if($preco < 5){
          $valida = "Dentro do orçamento!";
      }
      return $valida;
    }

}
?>