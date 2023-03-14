<?php
 
$sal = fgets(STDIN);

if ($sal >= 0 && $sal <=400.0) {
   $saln =  ($sal * 0.15)+$sal;
   echo "Novo salario: " . number_format($sal, 2, '.', '');
   echo "Reajuste ganho: " . number_format(($saln - $sal), 2, '.', '');
   echo "Em percentual: 15 %";
} 
else if($sal >= 400.01 && $sal <=800.0) {
    $saln =  ($sal * 0.12)+$sal;
    echo "Novo salario: " . number_format($sal, 2, '.', '');
    echo "Reajuste ganho: " . number_format(($saln - $sal), 2, '.', '');
    echo "Em percentual: 12 %";
 } 
 else if($sal >= 800.01 && $sal <=1200.0) {
    $saln =  ($sal * 0.10)+$sal;
    echo "Novo salario: " . number_format($sal, 2, '.', '');
    echo "Reajuste ganho: " . number_format(($saln - $sal), 2, '.', '');
    echo "Em percentual: 10 %";
 } 
 else if($sal >= 1200.01 && $sal <=2000.0) {
    $saln =  ($sal * 0.07)+$sal;
    echo "Novo salario: " . number_format($sal, 2, '.', '');
    echo "Reajuste ganho: " . number_format(($saln - $sal), 2, '.', '');
    echo "Em percentual: 7 %";
 } 
 else {
    $saln =  ($sal * 0.04)+$sal;
    echo "Novo salario: " . number_format($sal, 2, '.', '');
    echo "Reajuste ganho: " . number_format(($saln - $sal), 2, '.', '');
    echo "Em percentual: 4 %";
 } 

?>
