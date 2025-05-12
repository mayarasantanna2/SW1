<?php
    class conta{
        public $nome;
        public $cpf;
        private $saldo;

        public function sacar($valor){
            if($this->saldo < $valor){
                return  "saldo insufisciente";
            }
            
            else{
                $this->saldo = $this->saldo - $valor;
                $texto = "Saque realizado. Seu saldo atual é de: R$" . $this->saldo;
            return $texto;
            }

            return $this->saldo;
        }

        public function depositar($valor){
            $this->saldo += $valor; 
            $texto = "Deposito realizado. Seu saldo atual é de: R$" . $this->saldo;
            return $texto;
        }

        public function mostrarsaldo(){
            echo "nome do cliente: " . $this->nome . "<br>";
            echo "cpf do cliente: " . $this->cpf . "<br>";
            echo "saldo: R$ " . $this->saldo . "<br>";
        }


    }
?>