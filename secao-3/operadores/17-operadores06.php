<?php

// operador null coalesce. Veio a partir do php 7.
// Trata valores nulos. Ele ignora os valores nulos até achar algum valor e printa o primeiro.
$a = null;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;

?>