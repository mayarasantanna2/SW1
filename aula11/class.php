<?php

    class Produto {
        private $Nome;
        private $Preço;
        private $Quantidade;

        public function __construct($nome,$preco=0,$qtde=0){
            $this->Nome = $Nome;
            $this->Preco = $Preco;
            $this->Qtde = $Qtde;
        }

        public function getnome(){
            return $this->nome;
        }

        public function setnome($nome){
            $this->Nome = $Nome;
        }

        public function getpreco(){
            return $this->preco;
        }

        public function setpreco($valor){
            $this->Preco = $Valor;
        }

        public function adicionarestoque($Qtde){
            if($Qtde>0){
                $this->Qtde += $Qtde;
            }else{
                echo "Digite um valor valido";
            }
        }
        public function mostrardetalhes(){
            echo "Nome do produto:" . $this->Nome = $Nome . "<br>";
        }

    }

?>