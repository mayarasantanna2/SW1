<?php
include_once 'Lampada.Class.php';

$lamp01 = new Lampada();

$lamp01->Fabricante = "OSRAM";
$lamp01->Tensao = 110;
$lamp01->Potencia = 50;
$lamp01->Cor = "Branca";

$lamp01->MostrarDados();

echo "<hr>";

$lamp01->Ligar();
$lamp01->MostrarDados();



?>