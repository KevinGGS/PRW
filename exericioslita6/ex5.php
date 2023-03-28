<?php

function fibonacci($n) {
  $fib = [0, 1];
  for ($i = 2; $i <= $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
  }
  return $fib[$n];
}

fscanf(STDIN, "%d", $t);

for ($i = 0; $i < $t; $i++) {
  fscanf(STDIN, "%d", $n);
  $fibonacci = fibonacci($n);
  printf("Fib(%d) = %d\n", $n, $fibonacci);
}

?>