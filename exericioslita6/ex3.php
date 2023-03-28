<?php

for ($i = 0; $i < 100; $i++) {
  fscanf(STDIN, "%f", $A[$i]);
}

for ($i = 0; $i < 100; $i++) {
  if ($A[$i] <= 10) {
    printf("A[%d] = %.1f\n", $i, $A[$i]);
  }
}

?>
