<?php

$R = fgets(STDIN);
$pi = 3.14159;
$VOLUME = ((4.0/3)*$pi*($R*$R*$R));
$VOLUME = number_format($VOLUME, 3, ".", "");
echo "VOLUME = " . $VOLUME . "\n";


?>
