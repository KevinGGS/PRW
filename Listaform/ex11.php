<?php
$p = $_GET['prontuario'];
$n = $_GET['nome'];
$i = $_GET['idade'];
$pe = $_GET['periodo'];
$m = $_GET['modulo'];

if($p == "") 
{
    echo "O prontuario não foi inserido";
} 
else 
{
    echo "O prontuário é: " . $p;
}
echo "<br>";

if($n == "") 
{
    echo "O nome não foi inserido";
}
 else 
{
    echo "O nome é: " . $n;
}
echo "<br>";
if($i >= 15 && $i <= 75) 
{
    echo "A idade é: " . $i;
} 
else {
    echo "A idade deve ser entre 15 e 75 anos";
}
echo "<br>";

if($pe == "Vespertino" || $pe == "V" || $pe == "Noturno" || $pe == "N") 
{
    if($pe == "Vespertino" || $pe == "V") 
    {
       $pe = "Vespertino";
    } 
    else
    {
         $pe = "Noturno";
     }
    echo "O período é: " . $pe;
} 
else 
{
    echo "O período deve ser V-Vespertino ou N-Noturno";
}
echo "<br>";
if($m >= 1 && $m <= 4) 
{
    echo "O módulo é: " . $m;
} 
else 
{
    echo "O módulo deve ser entre 1 e 4";
}
?>