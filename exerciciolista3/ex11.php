<?php
$m;
$p;

for($i = 1; $i <= 100; $i++) 
{
    $n = intval(fgets(STDIN));
    
    if ($n > $m) {
        $m = $n;
        $p = $i;
    }
}
echo $m . "\n" . $p . "\n";
?>