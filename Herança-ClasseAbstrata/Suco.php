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
    public function mostraBebida()
    {
      return 'Nome: '. $this->nome . '</br> Preço: '. $this->preco .'</br>Sabor: '. $this->sabor;
    }
    public function verificaPreco($preco)
    {
      $valida = "Caro!";
      if($preco < 2.5){
          $valida = "Dentro do orçamento!";
      }
      return $valida;
    }

}
?>