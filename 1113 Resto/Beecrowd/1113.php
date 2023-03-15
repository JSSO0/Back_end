<?php

do {
    fscanf(STDIN, "%d %d", $x, $y);

    if ($x < $y) {
        echo "Crescente\n";
    } elseif ($x > $y) {
        echo "Decrescente\n";
    }
} while ($x != $y);

?>
