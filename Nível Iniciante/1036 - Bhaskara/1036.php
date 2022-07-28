<?php
/* O algoritmo funciona, para realizar o cálculo, porém, ainda está inacabado para as condicionais de retorno dos erros*/
$entrada = explode(" ", fgets(STDIN));
$a = floatval($entrada[0]) ;
$b = floatval($entrada[1]) ;
$c = floatval($entrada[2]) ;

if($a === 0) {
    die("Impossivel calcular");
}

$delta = ($b*$b)-((4*$a)*$c);
$x1 = number_format( (-$b + sqrt ($delta)) / (2 * $a), 5, '.', '');
$x2 = number_format((-$b - sqrt ($delta)) / (2 * $a), 5, '.', '');

echo "R1 = " . $x1 . PHP_EOL, "R2 = " . $x2 .  PHP_EOL;