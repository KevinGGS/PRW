<?php
//Tabuada 

$n = intval(fgets(STDIN));

for($i = 1; $i <= 10; $i++) 
{
    $tab = $i * $n;
    echo $i . " x " . $n . " = " . $tab . "\n";
}

?>