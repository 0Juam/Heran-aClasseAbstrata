<?php
 require_once 'Bebida.php';
class Suco extends Bebida{
    private $sabor; 

    public function __construct($nome,$preco,$sabor)
    {
        parent::__construct($nome,$preco);
        $this->sabor = $sabor;
    }

    public function getSabor()
    {
        return $this->sabor;
    }
    public function setSafra($sabor)
    {
        $this->sabor = $sabor;
    }
    public function mostrarBebida()
    {
        $mostraSuco = "Nome: {$this->getNome()} </br> Preço: R$ {$this->getPreco()} </br> Sabor: {$this->sabor}";
        return $mostraSuco;
    }
    public function verificaPreco($preco)
    {
      $valida = "Caro!";
      if($preco < 2.50){
          $valida = "Dentro do orçamento!";
      }
      return $valida;
    }

}
?>