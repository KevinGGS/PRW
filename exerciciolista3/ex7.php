<?php
//Par ou impar
$x = intval(fgets(STDIN));

for($i = 0; $i < $x; $i++) {
  $n = intval(fgets(STDIN));
  if($n == 0) {
    echo "NULL\n";
  } 
  else 
  {
    if($n % 2 == 0) 
    {
      echo "EVEN ";
    } 
    else {
      echo "ODD ";
    }
    if($n > 0) 
    {
      echo "POSITIVE\n";
    } else {
      echo "NEGATIVE\n";
    }
  }
}
?>