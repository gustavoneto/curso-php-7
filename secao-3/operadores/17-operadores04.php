<?php

$a = 55.0;
$b = 55;

var_dump($a > $b);
echo "<br/>";
var_dump($a < $b);
// var_dump($a = $b); // atribuição! Para comparação é == (comparação de valor)
echo "<br/>";
var_dump($a == $b); // comparar o valor
echo "<br/>";
var_dump($a === $b); // restritamente igual(comparação de igualdade de identidade)
echo "<br/>";
var_dump($a != $b); // comparação de diferença
echo "<br/>";
var_dump($a !== $b);

?>