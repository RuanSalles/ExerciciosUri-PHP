<?php

$km = (int) fgets(STDIN);
$combustivel = (float) fgets(STDIN);

$consumo = number_format(round($km / $combustivel, 3, PHP_ROUND_HALF_EVEN), 3, '.', '');

print "$consumo km/l\n";
