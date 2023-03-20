<?php

$A = fgets(STDIN);
$B = fgets(STDIN);
$N = explode(' ', $A);
$N2 = explode(' ', $B);
$x1 = $N[0];
$y1 = $N[1];
$x2 = $N2[0];
$y2 = $N2[1];
$D = (sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2)));
echo number_format($D, 4, '.', '') . "\n";

?>
