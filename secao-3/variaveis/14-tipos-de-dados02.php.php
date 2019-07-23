<?php

// Tipos básicos de variáveis:
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

// ================================

// Tipos compostos:
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];
echo "<br/>";

$nascimento = new DateTime();
// var_dump($nascimento); // ver o tipo de dado, o tamanho e o valor dentro da variável

// =================================

// Tipos expeciais:
$arquivo = fopen("14 - exemplo02.php", "r"); // abrir um arquivo
// var_dump($arquivo);

// deixando a variável com valo nulo:
$nulo = null; // variável nula é menor que variável vazia. Null é ausência de valor, não existe.
$vazio = ""; // vazio foi iniciado e já existe na memória.

?>