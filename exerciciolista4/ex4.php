<?php
//Ultrapassando Z

$x = intval(fgets(STDIN));
$z = intval(fgets(STDIN));

while ($z <= $x) {
    $z = intval(fgets(STDIN));
}

$soma = $x;
$conta = 1;

while ($soma < $z) {
    $soma += $x + $conta;
    $conta++;
}

echo $conta . "\n";
?>  