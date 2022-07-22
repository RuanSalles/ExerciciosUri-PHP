<?php

$vendedor = fgets(STDIN);
$salario = fgets(STDIN);
$vendas = fgets(STDIN);

$bonus = $vendas * 0.15;
$result = number_format(round($salario + $bonus, 2, PHP_ROUND_HALF_EVEN), 2, '.', '');

print "TOTAL = R$ $result" . PHP_EOL;