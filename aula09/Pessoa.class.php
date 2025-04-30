<?php
    class Pessoa{
        //ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;    

        //METODOS
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
            echo "<hr>";
        }
        public function Apresentar(){
            echo "Olá meu nome é ". $this->Nome.", eu peso ". $this->Peso. "KG, e tenho ". $this->Altura. " de altura";
            echo "<hr>";
        }
    }
?>