<?php

$H = fgets(STDIN);
$horas = (int)($H / 3600);
$minutos = (int)(($H % 3600) / 60);
$segundos = (int)(($H % 3600) % 60);
echo "$horas:$minutos:$segundos\n";


?>
