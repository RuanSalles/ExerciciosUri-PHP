<?php

$primeiraEntrada = explode(' ', fgets(STDIN));
$segundaEntrada = explode(' ', fgets(STDIN));

$qtdPeca1 = $primeiraEntrada[1];
$valorPeca1 = $primeiraEntrada[2];

$qtdPeca2 = $segundaEntrada[1];
$valorPeca2 = $segundaEntrada[2];

$result = number_format(round(($valorPeca1 * $qtdPeca1) + ($valorPeca2 * $qtdPeca2), 2, PHP_ROUND_HALF_EVEN), 2, '.', '');

print "VALOR A PAGAR: R$ $result" . PHP_EOL;