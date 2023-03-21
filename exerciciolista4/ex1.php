<?php

$A = fgets(STDIN);
$B = explode(" ", $A);
$x = $B[0];
$y = $B[1];

for ($i = 1; $i <= $y; $i++) {

    echo $i;

    if ($i % $x == 0) {

        echo "\n";

    } 
    else {

        echo " ";
    
    }
}
?>  