<?php

// antes do php 7, não tinha como colocar valor array para constante.
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

// caso queira que a constante seja case insensitive, passe 'true' como parâmetro depois do array.
// Não é uma boa prática, pois há um senso de que constante é sempre maiúscula.

print_r(BANCO_DE_DADOS);

?>