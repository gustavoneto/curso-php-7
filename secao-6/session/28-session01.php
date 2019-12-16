<?php

require_once("config.php");

session_start(); // agora as sessões estão funcionando

// a session é igual a um array superglobal
$_SESSION['nome'] = 'Hcode';

?>