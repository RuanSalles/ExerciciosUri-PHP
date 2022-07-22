<?php
/* Captura dos valores no terminal */
$esfera = fgets(STDIN);
$pi = 3.14159;
/* Potenciação Base * Expoente */
$potencia = pow($esfera, 3);
/* Calculo resultado respeitando a precedência */
$resultado = (4/3.0)*$pi*$potencia;
/* Saída do programa */
echo  "VOLUME = ". round($resultado, 3) . PHP_EOL;
