<?php
$p = 0;
$s = 0;
for($i = 1; $i <= 6; $i++)
    {
        $a = fgets(STDIN);
        if($a > 0)
        {
            $p++;
            $s += $a;
        }
    }
echo "$p valores positivos\n";
echo number_format($s / $p, 1) "\n";
?> 