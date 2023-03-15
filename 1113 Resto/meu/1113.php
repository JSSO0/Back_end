<?php

$num1 = readline();
$num2 = readline();

while ($num1 != $num2) {

  if ($num1 > $num2) {
    echo "Crescente\n";
  } else {
    echo "Decrescente\n";
  }

  $num1 = readline();
  $num2 = readline();
}

?>