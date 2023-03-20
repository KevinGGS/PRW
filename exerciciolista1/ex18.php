<?php

$valor = intval(fgets(STDIN));
$n = array(100, 50, 20, 10, 5, 2, 1);
echo "$valor\n";
foreach ($n as $nota) {
$quantidade_n = intval($valor / $nota);
$nota = number_format($nota, 2, ",", "");
echo $quantidade_n . " nota(s) de R$ " . $nota . "\n";
$valor = $valor % $nota;
}
?>
