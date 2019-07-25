<?php

require_once('config.php');

// gera id de sessão diferentes a cada atualização:
session_regenerate_id();

echo session_id();

var_dump('$_SESSION')

?>