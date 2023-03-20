<?php
$n = fgets(STDIN);
$v = explode(' ', $n);

$a = $v[0];
$b = $v[1];
$c = $v[2];

$m = ($a + $b + abs($a - $b)) / 2;

$m = ($m + $c + abs($m - $c)) / 2;

echo "$m eh o maior\n";
?>
