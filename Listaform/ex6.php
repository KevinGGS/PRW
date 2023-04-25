<?php

$n = $_GET['nome'];
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$f = $_GET['freq'];

$media = ($n1 + $n2) / 2;
if($media >= 5){
    if($f >= 75)
    {
        echo "Aluno $n aprovado";
    }else
    {
        echo "Aluno $n reprovado por frequencia";
    }
}
else
{
    echo "Aluno $n reprovado por nota";
}
?>