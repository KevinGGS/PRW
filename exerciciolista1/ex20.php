<?php

$x = fgets(STDIN);
$a = (int)($x / 365);
$m = (int)(($x % 365) / 30);
$d = (int)(($x % 365) % 30);
echo "$a ano(s)\n";
echo "$m mes(es)\n";
echo "$d dia(s)\n";

?>
