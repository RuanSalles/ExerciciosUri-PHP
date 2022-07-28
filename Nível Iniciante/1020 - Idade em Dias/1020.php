<?php

$entrada = fgets(STDIN);
$anos = 0;
$meses = 0;
$dias = 0;

while ($entrada > 0){
    switch($entrada){
        case $entrada > 365;
        $anos =  (int) ($entrada/365);
        $entrada %= 365;
        break;
        case $entrada > 30;
        $meses = (int) ($entrada/30);
        $entrada %= 30;
        break;
        case $entrada <= 30;
        $dias = $entrada;
        $entrada = 0;
        break;
    }
}

echo $anos . " ano(s)\n";
echo $meses . " mes(es)\n";
echo $dias . " dia(s)\n";
