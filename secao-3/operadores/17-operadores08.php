<?php

// importância do parentese:
// $resultado = 10 + 3 / 2; // imprime 11,5 pois a divisão vem primeiro que soma.
// $resultado = (10 +3) /2; // imprime 6,5 pois a soma veio primiero que a divisão por estar dentro de parênteses.

// $resultado = (10 +3) /2 > 5 && 10 + 5 < 3; // 6,5 > 5? true E 15 < 3? false. Imprime false.
                                              // Imprime true quando todos forem true.

$resultado = (10 +3) /2 > 5 || 10 + 5 < 3; // 6,5 > 5? true OU 15 < 3? false. Imprime true.
                                           // Imprime true quando algum for true.
                                           
var_dump($resultado); // utiliza var_dump para imprimir o resultado pois é comparação de tipo.

?>