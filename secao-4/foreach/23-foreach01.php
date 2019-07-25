<?php

$meses = array (

    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"

);

// Utilizando FOR:
/*
for ($i = 0; $i <= 11; $i++) {

    $mes = $meses[$i];
    echo $mes ."<br/>";
}
*/

// Utilizando FOREACH:
foreach ($meses as $mes) { // Ele vai percorrer o array com o MESES e pegar cada MES.

    echo "O mês é ". $mes ."<br>";
}

/*
// Para saber o índice:
foreach ($meses as $index => $mes) { // Ele vai percorrer o array com o MESES e pegar cada MES.

    echo "O indice é ". $index ."<br>";
    echo "O mês é ". $mes ."<br><br>";
}
*/


?>