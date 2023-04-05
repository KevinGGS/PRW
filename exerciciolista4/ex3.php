<?php

$entrada = explode(' ', fgets(STDIN));

$n = intval($entrada[count($entrada) - 1]);
$a = intval($entrada[0]);
$soma = 0;

for($i = 0; $i < $n; $i++) 
{
    $soma +=  $a + $i;
}
echo "$soma\n";

?>