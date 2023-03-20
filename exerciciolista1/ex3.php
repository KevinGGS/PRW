<?php
$area;
$n = 3.14159;
$raio = fgets(STDIN);
$area = ($n*($raio*$raio));
$area = number_format($area, 4, ".", "");
echo "A=" . $area . "\n";
?>
