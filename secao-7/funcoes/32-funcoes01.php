<?php

// Parametros que não tem valor padrão coloque sempre a esquerda para evitar erros.
function ola($texto="mundo", $periodo="Bom dia") {

    return "Olá $texto! $periodo! <br>";

}

echo ola(); // Se existem dois parâmetros e apenas 1 com valor padrão, é obrigado passar o que não tem valor
echo ola("você", "Boa noite");
echo ola("Gustavo", "Boa tarde");
echo ola("João", "");

?>