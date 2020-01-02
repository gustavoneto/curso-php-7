<?php

$a = 10;

// & antes do $variavel é passagem de parâmetro por referência (&$a)
// ou seja, o que acontece na função, é mudado dentro da variável (ponteiro)
function trocaValores($a){

    $a += 50;
    return $a;

}

echo trocaValores($a);

?>