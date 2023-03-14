<?php

$x = fgets(STDIN);
$y = explode(" ", $x);
$a = $y[0];
$b = $y[1];
$c = $y[2];

if ($a < $b + $c && $b < $a + $c && $c < $a + $b) 
{
    $P = number_format($a + $b + $c, 1, '.', '');

    echo "Perimetro = " . $P . "\n";
} 
else 
{
    $A = number_format((($a + $b) * $c) / 2, 1, '.', '');
    echo "Area = " . $A . "\n";
}
?>