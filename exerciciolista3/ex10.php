<?php
$x = intval(fgets(STDIN));

for($i = 1; $i <= $x; $i++) 
{
    $val = explode(" ", fgets(STDIN));
    $media = ($val[0] * 2 + $val[1] * 3 + $val[2] * 5) / 10;

    echo number_format($media, 1, '.', '') . "\n";
}
?>