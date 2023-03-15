<?php

$a = intval(trim(fgets(STDIN)));
$b = intval(trim(fgets(STDIN)));
$soma = 0;

if ($a > $b) {
    $aux = $a;
    $a = $b;
    $b = $aux;
}

for ($i = $a + 1; $i < $b; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo $soma . "\n";

?>
