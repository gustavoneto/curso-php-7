<?php

require_once("config.php");

// limpa variáveis de sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy();

?>