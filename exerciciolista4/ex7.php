<?php

$Idades = 0;
$qP = 0;
while (true) 
{
    $i = intval(fgets(STDIN));

    if ($i < 0) 
    {
        break;
    }
    $Idades += $i;
    $qP++;
}
$mI = $sI / $qP;
echo number_format($mI, 2, '.', '') . "\n";

?>  