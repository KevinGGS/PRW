<?php
 
$x = fgets(STDIN);
$y = explode(" ", $x);
$a1 = $y[0];
$b1 = $y[1];
$a2 = $y[2];
$b2 = $y[3];
$t = $b - $a;

$mi = $a1*60+$b1;
$mf = $a2*60+$b2;

if ($mi < $mf) {
    $d = $mf - $mi;
} else 
{
    $d = (24 * 60 - $mi) + $mf;
}

$h = intval($d / 60);
$m = $d % 60;

echo "O JOGO DUROU " . $horas . " HORA(S) E " . $minutos . " MINUTO(S)\n";
?>
