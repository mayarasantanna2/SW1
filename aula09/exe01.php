<?php
    include_once 'Pessoa.class.php';
    
    //CRIAR UM OBJETO - INSTANCIA DA CLASSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    //var_dump($fulano);
    
    // ATRIBUIR VALORES
    $fulano->Nome = 'Fulano de Carvalho';
    $fulano->Peso = 60;
    $fulano->Altura = 1.75;

    $ciclano->Nome = 'Ciclano de Carvalho';
    $ciclano->Peso = 150;
    $ciclano->Altura = 1.55;

    // CHAMANDO POR METODO DA CLASSE PESSOA
    $fulano->MostrarDados();
    $fulano->Apresentar();

    $ciclano->MostrarDados();
    $ciclano->Apresentar();
   
?>