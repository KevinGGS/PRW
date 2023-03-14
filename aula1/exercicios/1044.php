<?php

$x = fgets(STDIN);

$y = explode(" ", $x);

$a = $y[0];
$b = $y[1];

if ($a % $b == 0 || $b % $a == 0) 
{
    echo "Sao Multiplos" . "\n";
} 
else 
{
    echo "Nao sao Multiplos" . "\n";
}

?>