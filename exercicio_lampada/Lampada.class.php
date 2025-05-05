<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

    public function Ligar(){

    }
    public function Desligar(){

    }
    public function MostrarDados(){
        echo "Fabricante: " . $this->Fabricante . "<br>";
        echo "Tensão: " . $this->Tensao . "<br>";
        echo "Potencia: " . $this->Potencia . "<br>";
        echo "Cor: " . $this->Cor . "<br>";
        if($this->Status == true){
            echo "esta ligada? : Sim ";
        }else{
            echo "esta ligada? : nao";
        }
    }
}

?>