<?php
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $mensage = trim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));
    $new_mensage = "";
    for ($j = 0; $j < strlen($mensage); $j++) {
        $ascii_code = ord($mensage[$j]);
        $ascii_code -= $deslocamento;
        if ($ascii_code < 65) {
            $ascii_code += 26;
        }
        $new_mensage .= chr($ascii_code);
    }
    echo "$new_mensage\n";
}
?>
