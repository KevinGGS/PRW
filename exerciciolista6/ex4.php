<?php

for ($i = 0; $i < 20; $i++) {
  fscanf(STDIN, "%d", $N[$i]);
}

for ($i = 0; $i < 10; $i++) {
  $temp = $N[$i];
  $N[$i] = $N[19 - $i];
  $N[19 - $i] = $temp;
}

for ($i = 0; $i < 20; $i++) {
  printf("N[%d] = %d\n", $i, $N[$i]);
}

?>