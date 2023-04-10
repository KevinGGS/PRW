<?php

$N = intval(fgets(STDIN));

for($i = 0; $i < $N; $i++) 
{
    $Man = trim(fgets(STDIN));
    $x = strlen($Man);

    for($j = 0; $j < $x; $j++) 
    {
        if (ctype_alpha($Man[$j])) {
            $Man[$j] = chr(ord($Man[$j]) + 3);
        }
    }

    for($j = 0; $j < $x / 2; $j++) 
    {
        $auto = $Man[$j];
        $Man[$j] = $Man[$x - 1 - $j];
        $Man[$x - 1 - $j] = $auto;
    }

    for($j = intval($x / 2); $j < $x; $j++) 
    {
        $Man[$j] = chr(ord($Man[$j]) - 1);
    }

    echo $Man . PHP_EOL;
}
?>