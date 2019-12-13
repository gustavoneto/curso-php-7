<?php

/**
 * Require: obriga a inclusão do arquivo, que ele exista e que ele esteja correto;
 * Include: tenta funcionar mesmo que o arquivo não exista o que contenha erros. Porém
 * ele dá acesso ao include path (uma pasta que pode-se mapear no sistema operacional) e
 * fazer um repositório de arquivos. Também permite um include dinâmico e trazer a url 
 * como include (péssima prática, é melhor fazer por API). 
 */


include "19-include01.php";
// require "19-include01.php"; // Se o arquivo não estiver, a execução dá erro, diferente do include.
require_once "19-include01.php"; // Verifica se o arquivo já foi incluído. Se sim, não inclui, evitando erros.

$resultado = somar(10, 20);
echo $resultado;

?>