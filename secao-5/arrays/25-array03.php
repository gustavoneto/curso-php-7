<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome' => 'João',
    'Idade' => 20
));

array_push($pessoas, array(
    'Nome' => 'Glaucio',
    'Idade' => 25
));

print_r($pessoas);

// print_r($pessoas[0]); // retorna o primeiro array
// print_r($pessoas[0]['Nome']); // retorna apenas o nome do primeiro array

?>