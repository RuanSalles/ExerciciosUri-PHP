<?php

$horas = fgets(STDIN);
$distancia = fgets(STDIN);

$resultado = ($horas*$distancia)/12;

print number_format($resultado, 3, '.', '') . PHP_EOL;
