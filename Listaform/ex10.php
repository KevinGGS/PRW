<?php

$p = $_GET['pequeno'];
$m = $_GET['media'];
$g = $_GET['grande'];

$total = (($p * 10) + ($m * 12) + ($g * 15));

echo "O valor arrecadado: R$" . $total . ",00";
?>