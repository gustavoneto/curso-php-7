<?php

$nome = "Glaucio";

function teste(){

    // global para a variável nome ser acessada pela função teste
    global $nome;
    echo $nome;

}

function teste2(){

    // exemplo de escopo
    $nome = "João";
    echo $nome . " agora no teste2";

}

teste();

?>