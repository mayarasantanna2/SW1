<?php

$l = $_POST ['login'];
$s = $_POST ['senha'];

if(($l == "etec") && ($s == "informatica")){
    echo "Logado com sucesso!";
}
else{
    echo "Login ou senha incorretos";
}

?>