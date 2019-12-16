<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";

$q = strpos($frase, "mãe"); // Imprime 17, digitos até chegar na palavra mãe.
var_dump($q);
echo "<br/>";

$texto = substr($frase, 0, $q); // Pega o valor de $frase, pega da posição 0 até $q(posição 17).
var_dump($texto);

echo "<br/>";

// strlen retorna o tamanho de uma string.
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>