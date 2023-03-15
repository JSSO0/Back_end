<?php

while (($n = intval(trim(fgets(STDIN)))) !== false)

{
    $vetor = array();
    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d", $velocidade);
        $vetor[] = $velocidade;
    }

    $maior = $vetor[0];
    for ($i = 1; $i < $n; $i++) {
        if ($vetor[$i] > $maior)
            $maior = $vetor[$i];
    }

    if ($maior < 10)
        printf("1\n");
    else if ($maior >= 10 && $maior < 20)
        printf("2\n");
    else if ($maior >= 20)
        printf("3\n");
}

?>