<?php

require "ClasseMotoboy.php";

class Loja{
    private $idLoja;
    private $pedidos;
    private $precoPedido1;
    private $precoPedido2;
    private $taxa1;
    private $taxa2;

    public __construct($idLoja,$pedidos,$precoPedido1,$taxa1,$taxa2){
        $this->idLoja = $idLoja;
        $this->pedidos = $pedidos;
        $this->precoPedido1 = $precoPedido1;
        $this->precoPedido2 = $precoPedido2;
        $this->taxa1 = $taxa1;
        $this->taxa2 = $taxa2;
    }

    public function setIdLoja(){
        $this->idLoja = $idLoja;
    }
    public function getIdLoja(){
        return $this->idLoja;
    }
    
    public function pagamento($precoPedido1,$precoPedido2,$taxa1,$taxa2,$valorFixo){
        $valor = ($precoPedido1*$taxa1+2)+($precoPedido2*$taxa2+2);
        return $valor;
    }
}
?>
