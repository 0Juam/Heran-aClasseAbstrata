<?php
 require_once 'Bebida.php';
class Vinho extends Bebida{
    private $safra;
    private $tipo; 

    public function __construct($nome,$preco,$safra,$tipo)
    {
        parent::__construct($nome,$preco);
        $this->safra = $safra;
        $this->tipo = $tipo;
    }

    public function getSafra()
    {
        return $this->safra;
    }
    public function setSafra($safra)
    {
        $this->safra = $safra;
    }
    public function getTpo()
    {
        return $this->tipo;
    }
    public function setipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function mostrarBebida()
    {
     $mostra = "Nome: {$this->getNome()} </br> Preço: R$ {$this->getPreco()} </br> Safra: {$this->safra} </br> Tipo: {$this->tipo}";
     return $mostra;
    }
    public function verificaPreco($preco)
    {
      $valida = "Caro!";
      if($preco < 25){
          $valida = "Dentro do orçamento!";
      }
      return $valida;
    }


}
?>