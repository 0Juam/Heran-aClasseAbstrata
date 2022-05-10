<?php
 require_once 'Bebida.php';
class Suco extends Bebida{
    private $retornavel;

    public function __construct($nome,$preco,$retornavel)
    {
        parent::__construct($nome,$preco);
        $this->safra = $retornavel;
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
      return 'Nome: '. $this->nome . '</br> Preço: '. $this->preco .'</br>Retornaval: '. $this->retornavel;
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