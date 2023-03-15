<?php

$nota = readline();

echo "$nota\n";

$resultado = (int)($nota / 100);
echo "$resultado nota(s) de R$ 100,00\n";
$nota %= 100;

$resultado = (int)($nota / 50);
echo "$resultado nota(s) de R$ 50,00\n";
$nota %= 50;

$resultado = (int)($nota / 20);
echo "$resultado nota(s) de R$ 20,00\n";
$nota %= 20;

$resultado = (int)($nota / 10);
echo "$resultado nota(s) de R$ 10,00\n";
$nota %= 10;

$resultado = (int)($nota / 5);
echo "$resultado nota(s) de R$ 5,00\n";
$nota %= 5;

$resultado = (int)($nota / 2);
echo "$resultado nota(s) de R$ 2,00\n";
$nota %= 2;

$resultado = $nota;
echo "$resultado nota(s) de R$ 1,00\n";

?>
