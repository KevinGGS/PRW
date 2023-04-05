<?php
$n = intval(fgets(STDIN));
$a = 0;
$b = 1;
$fib = "$a $b";
for ($i = 2; $i < $n; $i++) 
{
    $c = $a + $b;
    $fib .= " $c";
    $a = $b;
    $b = $c;
}
echo "$fib\n";
?>  