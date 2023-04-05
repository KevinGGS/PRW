<?php

$coelhos = 0;
$ratos = 0;
$sapos = 0;
$t = 0;

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $ent = explode(" ", fgets(STDIN));
    $q = intval($ent[0]);
    $tipo = trim($ent[1]);
    
    switch ($tipo) {
        case 'C':
            $coelhos += $q;
            break;
        case 'R':
            $ratos += $q;
            break;
        case 'S':
            $sapos += $q;
            break;
    }
    
    $t += $q;
}

$pC = ($coelhos / $t) * 100;
$pR = ($ratos / $t) * 100;
$pS = ($sapos / $t) * 100;

echo "Total: $t cobaias\n";
echo "Total de coelhos: $coelhos\n";
echo "Total de ratos: $ratos\n";
echo "Total de sapos: $sapos\n";
echo "Percentual de coelhos: " . number_format($pC, 2) . " %\n";
echo "Percentual de ratos: " . number_format($pR, 2) . " %\n";
echo "Percentual de sapos: " . number_format($pS, 2) . " %\n";

?>
