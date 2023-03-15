<?php

while (true) {
  // Lê a hora de início e hora final do jogo
  fscanf(STDIN, "%d %d %d %d", $hora_i, $minuto_i, $hora_f, $minuto_f);

  // Verifica se a entrada indica o fim do jogo
  if ($hora_i == 0 && $minuto_i == 0 && $hora_f == 0 && $minuto_f == 0) {
    break;
  }

  // Converte a hora de início e hora final para minutos
  $tempo_i= $hora_i * 60 + $minuto_i;
  $tempo_f = $hora_f * 60 + $minuto_fl;

  // Calcula o tempo total de jogo em minutos
  if ($tempo_f <= $tempo_i) {
    $tempo_ttl = 1440 - $tempo_i + $tempo_f;
  } else {
    $tempo_tol = $tempo_f - $tempo_i;
  }

  // Exibe o tempo total de jogo em minutos
  echo $tempo_ttl . "\n";
}

?>
