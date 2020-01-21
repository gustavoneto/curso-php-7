<?php

/**
 * Y é o ano todo, y é só os últimos digitos.
 * H é a hora em formato 24h. h é formato 12h.
 */ 
echo date("d/m/Y H:i");

echo "<br>";

/**
 * Timestamp é uma marca tempora. Marca o início de 01/01/1970 00:00:00 da Era Unix.
 * Ele não é uma representação linear nem uma representação verdadeira do tempo UTC, por 
 * não considerar os segundos bissextos.
 */
echo time();