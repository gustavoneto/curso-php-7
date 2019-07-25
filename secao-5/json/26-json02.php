<?php

$json = '[{"Nome":"Jo\u00e3o","Idade":20},{"Nome":"Glaucio","Idade":25}]';
$data = json_decode($json, true);
var_dump($data);

?>