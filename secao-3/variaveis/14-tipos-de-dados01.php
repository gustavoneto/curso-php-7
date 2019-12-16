<?php

// $anoNascimento = 1990;
// $nomeCompleto = "";

// $1nome = "João"; // variável não pode começar com número.
// $%nome = "João"; // variável não começa com caracter especial, apenas underline.
$nome1 = "João";
$sobrenome = "Rangel";
$nomeCompleto = $nome1 . " " . $sobrenome; // concatenação
echo $nomeCompleto;
exit;

echo $nome1;
echo "<br/>";

// limpar a variável:
unset($nome1);

// verificar se a variável existe e printar SÓ se ela existir:
if(isset ($nome1)){

    echo $nome1;

}

?>