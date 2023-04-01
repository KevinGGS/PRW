<?php

$V = intval(fgets(STDIN));

$N = array($V);

for ($i = 1; $i < 10; $i++) {
    $N[$i] = $N[$i-1] * 2;
}

for ($i = 0; $i < 10; $i++) {
    echo "N[$i] = " . $N[$i] . "\n";
}