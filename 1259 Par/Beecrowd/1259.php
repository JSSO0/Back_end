<?php
$n = intval(fgets(STDIN));
$pares = array();
$impares = array();
for ($i = 0; $i < $n; $i++) {
    $numero = intval(fgets(STDIN));
    if ($numero % 2 == 0) {
        array_push($pares, $numero);
    } else {
        array_push($impares, $numero);
    }
}
sort($pares);
sort($impares, SORT_DESC);
foreach ($pares as $par) {
    echo "$par\n";
}
foreach ($impares as $impar) {
    echo "$impar\n";
}
?>
