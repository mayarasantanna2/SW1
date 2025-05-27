<?php
include_once "produto.class.php";

$produto1 = new produto("Refrigerante",13.50,15);

$produto1->adicionarestoque(10);
$produto1->removerestoque(8);
$produto1->mostrardetalhes();





?>