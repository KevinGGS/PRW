<?php

$A = fgets(STDIN);
$B = fgets(STDIN);
$MEDIA;
$MEDIA = ((($A*3.5)+($B*7.5))/11);
$MEDIA = number_format($MEDIA, 5, ".", "");
echo "MEDIA = " . $MEDIA . "\n";

?>
