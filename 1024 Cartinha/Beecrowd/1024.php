<?php

function mdc($a, $b)
{
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}

$numTestes = (int) fgets(STDIN);

for ($i = 0; $i < $numTestes; $i++) {
    list($a, $b) = sscanf(fgets(STDIN), "%d %d");
    $resultado = mdc($a, $b);
    echo "$resultado\n";
}
