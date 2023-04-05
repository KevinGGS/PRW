<?php
// Seuquência S II

$s = 0;

for ($i = 1, $j = 1; $i <= 39; $i += 2, $j *= 2) 
{
    $s += $i/$j;
}

echo number_format($s, 2, '.', '') . "\n";
?>  