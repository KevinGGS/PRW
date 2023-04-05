<?php
$c = 0;

for ($i = 0; $i < 6; $i++) {
  $n = intval(fgets(STDIN));
  if ($n % 2 == 0) {
    $c++;
  }
}
echo "$c valores pares\n";
?>