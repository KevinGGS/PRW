<?php

$p1 = explode(" ", readline());
$c1 = $p1[0];
$np1 = $p1[1];
$vup1 = $p1[2];

$p2 = explode(" ", readline());
$cp2 = $p2[0];
$np2 = $p2[1];
$vup2 = $p2[2];

$vt = $np1 * $vup1 + $np2 * $vup2;

echo "VALOR A PAGAR: R$ " . number_format($vt, 2, ".", "") . "\n";

?>
