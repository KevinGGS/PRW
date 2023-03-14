<?php 
$x = fgets(STDIN);

if ($x <= 2000) {
    echo "Isento\n";
} 
else if ($x <= 3000) {
    $ir = ($x - 2000) * 0.08;
    echo "R$ " . number_format($ir, 2, '.', '') . "\n";
} 
else if ($x <= 4500) {
    $ir = 1000 * 0.08 + ($x - 3000) * 0.18;
    echo "R$ " . number_format($ir, 2, '.', '') . "\n";
} 
else {
    $ir = 1000 * 0.08 + 1500 * 0.18 + ($x - 4500) * 0.28;
    echo "R$ " . number_format($ir, 2, '.', '') . "\n";
}
?>