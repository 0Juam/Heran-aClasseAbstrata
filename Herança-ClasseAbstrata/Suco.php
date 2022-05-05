<?php
 require_once 'Bebida.php';
class Suco extends Bebida{
    private $sabor;

    public function getSabor()
    {
        return $this->sabor;
    }
    public function setSafra($sabor)
    {
        this->sabor = $sabor;
    }
    public function mostraBebida()
    {
      return 'Nome: '. this->nome . '</br> Preço: '. this->preco .'</br>Sabor: '. this->sabor .;
    }
    public function verificaPreco($preco)
    {
      $valida = false;
      if($preco < 2.5){
          $valida = true;
      }
      return $valida;
    }

}
?>