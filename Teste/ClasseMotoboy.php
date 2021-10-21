<?php

require "ClasseLoja.php";

class Motoboy{
    private $idMoto;
    //o fator de exclusividade começará em 0

    public function __construct($idMoto){
        $this->idMoto = $idM;
    
    //id
    public function setIdMoto($idM){
        $this->idMoto = $idM;
    }

    public function mostraDados($idM){
        $idM;
        $valor;
        if ($idM=0){
            echo "O motoboy é o motoboy 1 ",/n;
            echo "O número de pedidos é 2 "/n;
            echo "Os pedidos são da loja 2 "/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,50,5,2);
        }
        if ($idM=1){
            echo "O motoboy é o motoboy ",$id,/n;
            echo "O número de pedidos é 2 ",/n;
            echo "Os pedidos são da loja 2 ",/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,50,5,5,2);
        }
        if ($idM=2){
            echo "O motoboy é o motoboy ",$id,/n;
            echo "O número de pedidos é 2 ",/n;
            echo "Os pedidos são da loja 3",/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,50,15,15,2);
        }
        if ($idM=3){
            echo "O motoboy é o motoboy ",$id,/n;
            echo "O número de pedidos é 2 ",/n;
            echo "Os pedidos são da lojas 2 e 3 ",/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,100,5,15,2);
        }
        if ($idM=4){
            echo "O motoboy é o motoboy ",$id,/n;
            echo "O número de pedidos é 2 ",/n;
            echo "Os pedidos são da loja 1 ",/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,50,5,5,2);
        }
        if ($idM=5){
            echo "O motoboy é o motoboy ",$id,/n;
            echo "O número de pedidos é 2 ",/n;
            echo "Os pedidos são da loja 2 e 3 ",/n;
            echo "E ele deve ganhar: ", $valor->pagamento(50,50,5,5,3);
        }
        else{
            echo "Este motoboy não existe";
        }
    }
}

?>