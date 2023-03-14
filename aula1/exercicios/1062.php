<?php

$n1 = explode(' ', readline());
$n2 = explode(' ', readline());

$di = intval($n1[1]);
$hi = intval($n2[0]);
$mi = intval($n2[2]);
$si = intval($n2[4]);

$n1 = explode(' ', readline());
$n2 = explode(' ', readline());

$df = intval($n1[1]);
$hf = intval($n2[0]);
$mf = intval($n2[2]);
$sf = intval($n2[4]);

$totalsegi = $di * 86400 + $hi * 3600 + $mi * 60 + $si;
$totalsegf = $df * 86400 + $hf * 3600 + $mf * 60 + $sf;

$ds = $totalsegf - $totalsegi;

$dd = intval($ds / 86400);
$ds %= 86400;

$dh = intval($ds / 3600);
$ds %= 3600;

$dm = intval($ds / 60);
$ds %= 60;

echo "$dd dia(s)";
echo "$dh hora(s)";
echo "$dm minuto(s)";
echo "$ds segundo(s)";
?>