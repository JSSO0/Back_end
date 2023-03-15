<?php
  $i = 0;
  $a = 0;
  $b = 0;
  $cont = 0;
  $contimpar = 0;
  $a1 = 0;
  $b1 = 0;

  fscanf(STDIN, "%d", $a);
  fscanf(STDIN, "%d", $b);

  if ($a > $b){
    $a1 = $b;
    $b1 = $a;
  } else {
    $a1 = $a;
    $b1 = $b;
  }

  for ($i = $a1 + 1; $i < $b1; $i++){
    if ($i % 2 != 0){
      $cont++;
      $contimpar += $i;
    }
  }

  echo "DEBUG: " . $contimpar . "\n";
  echo "Quantidade de impares: " . $cont . "\n";
?>
