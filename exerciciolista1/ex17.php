<?php

$l1 = fgets(STDIN);
$l2 = fgets(STDIN);

$kml = 12;
$l = ($l1 * $l2) / $kml;
$l = number_format($l, 3, '.', '');
echo "$l\n";

?>
