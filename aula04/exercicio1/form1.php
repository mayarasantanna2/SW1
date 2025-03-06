<?php

$nome = $_GET ['cxnome'];
$n1 = $_GET ['cxn1'];
$n2 = $_GET ['cxn2'];
$n3 = $_GET ['cxn3'];

$media = ($n1*$n2*$n3)/3;

if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3) && ($n1<10) && ($n2<10) && ($n3<10)) {
    echo "$nome, sua média final é: $media";
}

else{
    echo "Insira apenas números de 0 a 10";
}

?>