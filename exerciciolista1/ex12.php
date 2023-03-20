<?php

$X = fgets(STDIN);
$N = explode(' ', $X);
$A = $N[0];
$B = $N[1];
$C = $N[2];

$at = ($A * $C) / 2;
$ac = 3.14159 * pow($C, 2);
$atrap = (($A + $B) * $C) / 2;
$aquad = pow($B, 2);
$ar = $A * $B;

echo "TRIANGULO: " . number_format($at, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($ac, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($atrap, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($aquad, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($ar, 3, '.', '') . "\n";
?>