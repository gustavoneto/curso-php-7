<?php

/**
 * Funções sempre retornam algum valor utilizando o 'return'. 
 * Função sem return não está errado, porém é chamada de subrotina, ou seja
 * só executa alguma coisa.
 */

function ola() {

    return "Olá mundo!<br>"; // função retornando uma string

}

echo ola();

$frase = ola();
echo strlen($frase);

// ========  SUB ROTINA ========

/*
function ola() {

    echo "Olá mundo!<br>"; // função subrotina

}

ola()
*/

?>