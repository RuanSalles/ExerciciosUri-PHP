<?php

$n = 3.14159;
$raio = fgets(STDIN);

$resultado = ($raio * $raio) * $n;

echo "A=" . number_format($resultado, 4, '.', '') . PHP_EOL;