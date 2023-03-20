<?php

$A = fgets(STDIN);
$B = fgets(STDIN);
$C = number_format($A / $B, 3, '.', '');
echo "$C km/l\n";

?>
