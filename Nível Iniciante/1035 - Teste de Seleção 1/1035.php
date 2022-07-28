<?php

$entrada = explode(" ", fgets(STDIN));
$A = intval($entrada[0]) ;
$B = intval($entrada[1]);
$C = intval($entrada[2]);
$D = intval($entrada[3]);

if(
    $B > $C
     AND
      $D > $A 
      AND 
       $C + $D > $A + $B
      AND
       $C > 0
      AND 
       $D > 0
      AND 
       $A%2 == 0 ) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}


