<?php

$valor1 = readline();
$valor2 = readline();
$valor3 = readline();

if ($valor1 >= $valor2 && $valor1 >= $valor3) {
    echo "$valor1 eh o maior\n";
} elseif ($valor2 >= $valor1 && $valor2 >= $valor3) {
    echo "$valor2 eh o maior\n";
} else {
    echo "$valor3 eh o maior\n";
}

?>
