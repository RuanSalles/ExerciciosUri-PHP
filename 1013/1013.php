<?php

$entrada = explode(' ', fgets(STDIN));
$maior = 0;
for($i = 0; $i < count($entrada); $i++) {
    if(abs($entrada[$i]) > abs($maior)) {
        (int) $maior = number_format($entrada[$i], 0, '.', '');
    }
}

print "$maior eh o maior\n";