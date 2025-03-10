<?php

$n1 = $_GET ['1'];
$n2 = $_GET ['2'];
$n3 = $_GET ['3']; 

if (($n1 > $n2) && ($n1>$n3)) {
    echo "$n1 é o maior número ";
}

if (($n2 > $n1) && ($n2>$n3)) {
    echo "$n2 é o maior número ";
}
if (($n3 > $n1) && ($n3>$n2)) {
    echo "$n3 é o maior número";
}
?>