<?php

while (true) {
    $max_speed = readline();
    if (!$max_speed) break;

    $velocities = explode(' ', readline());
    $max_violation = max($velocities) - $max_speed;

    if ($max_violation < 1) {
        echo "0\n";
    } elseif ($max_violation < 11) {
        echo "1\n";
    } elseif ($max_violation < 21) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}
