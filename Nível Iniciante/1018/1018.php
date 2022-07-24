<?php

$notas = [100, 50, 20, 10, 5, 2, 1];

$entrada = fgets(STDIN);

print $entrada;

for($i = 0; $i < count($notas); $i++) {
    $cedulas = $entrada / $notas[$i];
    $entrada %= $notas[$i];

    print (int) $cedulas . " nota(s) de R$ " . $notas[$i] . ",00\n";

}
