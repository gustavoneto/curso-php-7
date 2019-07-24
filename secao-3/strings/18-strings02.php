<?php

$nome = "joão rangel";

echo $nome;
echo "<br/>";
$nome = strtoupper($nome);
echo $nome;
echo "<br/>";
$nome = strtolower($nome);
echo $nome;
echo "<br/>";
echo ucfirst($nome); // Transforma a primeira letra da primeira palavra em maiúscula.
echo "<br/>";
$nome = ucwords($nome); // Transforma as primeiras letras de cada palavra como maiúsculas.
echo $nome;


?>