<?php

while(true) {
    $input = fgets(STDIN);
    $nums = explode(' ', $input);
    $m = intval($nums[0]);
    $n = intval($nums[1]);

    if ($m <= 0 || $n <= 0) {
        break;
    }

    $sum = 0;
    $seq = '';
    for ($i=min($m, $n); $i<=max($m, $n); $i++) {
        $seq .= "{$i} ";
        $sum += $i;
    }
    echo "{$seq}Sum={$sum}\n";
}
?>
