<?php

$n = fgets(STDIN);
$sf = fgets(STDIN);
$vv = fgets(STDIN);
$TOTAL = number_format($sf+($vv*0.15), 2, ".", "");

echo "TOTAL = R$ " . $TOTAL . "\n";

?>
