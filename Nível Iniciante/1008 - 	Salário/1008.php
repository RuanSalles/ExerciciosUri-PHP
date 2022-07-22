<?php

$valorDaHora = fgets(STDIN);
$horas = fgets(STDIN);
$valorHora = round(fgets(STDIN), 2);

$salario = $horas*$valorHora;

echo "NUMBER = " . $valorDaHora;
echo "SALARY = U$ " . number_format($salario, 2, '.', '') . PHP_EOL;
