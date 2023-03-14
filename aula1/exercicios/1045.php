<?php
// Tipo de Triângulos

$e = readline();
$x = explode(" ", $e);
sort($x); 

if (($x[2] >= $x[1] + $x[0])) {
  echo "NAO FORMA TRIANGULO\n";
} 

  else if ($x[2]*$x[2] == $x[1]*$x[1] + $x[0]*$x[0]) {
    echo "TRIANGULO RETANGULO\n";
  }
 else if ($x[2]*$x[2] > $x[1]*$x[1] + $x[0]*$x[0]) {
    echo "TRIANGULO OBTUSANGULO\n";
  }
 else if ($x[2]*$x[2] < $x[1]*$x[1] + $x[0]*$x[0]) {
    echo "TRIANGULO ACUTANGULO\n";
  }
 else if ($x[2] == $x[1] && $x[1] == $x[0]) {
    echo "TRIANGULO EQUILATERO\n";
  }
 else if (($x[2] == $x[1] && $x[1] != $x[0]) || ($x[2] == $x[0] && $x[0] != $x[1]) || ($x[1] == $x[0] && $x[0] != $x[2])) {
    echo "TRIANGULO ISOSCELES\n";
  }
?>