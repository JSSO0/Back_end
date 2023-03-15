<?php
$leds = array(6 => 6, 2 => 5, 5 => 5, 5 => 4, 4 => 5, 5 => 6, 3 => 7, 7 => 6, 6 => 6, 6 => 5);
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $numero = trim(fgets(STDIN));
    $total_leds = 0;
    for ($j = 0; $j < strlen($numero); $j++) {
        $total_leds += $leds[intval($numero[$j])];
    }
    echo "$total_leds leds\n";
}
?>
