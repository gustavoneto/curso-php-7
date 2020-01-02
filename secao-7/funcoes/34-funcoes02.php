<?php

function soma(int ...$valores):string{

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(20, 30);
echo "<br>";
echo soma(1.5, 3.2); // só funciona se o tipo for float
echo "<br>";

?>