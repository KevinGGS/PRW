<?php

$alunos = array("Murilo","Ricardo","Cassio","Joao");
print_r($alunos);
echo "\n";
echo "Quantidade de elementos :".count($alunos)."\n";
echo "<hr>";
for($x = 0; $x < count($alunos); $x++){
echo "Aluno na posição $x: ".$alunos[$x]."\n";
echo "quantidade de aracteres: ".strlen($alunos[$x])."\n";
echo "<hr>";
}
?>