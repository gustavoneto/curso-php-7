<?php

$nome = (int)$_GET["a"];
var_dump($nome);

echo "<br/>";

// Pegando o IP do usuário:
// $_SERVER pega a informações do ambiente, não só do usuário
// $ip = $_SERVER["REMOTE_ADDR"]; // acessando do localhost para o localhost
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>