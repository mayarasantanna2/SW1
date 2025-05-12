<?php
    include_once 'conta.class.php';

    $conta1 = new conta();

    $conta1->nome = "a";
    $conta1->cpf = "123.123";

    $conta1->mostrarsaldo();

    echo "<hr>";

    echo $conta1->depositar(500);

    echo "<hr>";

    $conta1->mostrarsaldo();

    echo "<hr>";

    echo $conta1->sacar(600);





?>