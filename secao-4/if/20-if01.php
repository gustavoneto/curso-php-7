<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// Se a condição não for verdade, ele ignora:
if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) { // Caso a condição do if for falsa:

    echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

?>