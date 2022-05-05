<?php
 require_once 'Bebida.php';
class Vinho extends Bebida{
    private $safra;
    private $tipo;

    public function getSafra()
    {
        return $this->safra;
    }
    public function setSafra($safra)
    {
        this->safra = $safra;
    }
    public function getTpo()
    {
        return $this->tipo;
    }
    public function setipo($tipo)
    {
        this->tipo = $tipo;
    }
    public function mostraBebida()
    {
      return 'Nome: '. this->nome . '</br> Preço: '. this->preco .'</br>Safra: '. this->safra .'</br>Tipo: '. this->tipo.;
    }
    public function verificaPreco($preco)
    {
      $valida = false;
      if($preco < 25){
          $valida = true;
      }
      return $valida;
    }

}
?>