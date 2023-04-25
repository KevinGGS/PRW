<?php
$pront = $_GET['pront'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$periodo = $_GET['periodo'];
$modulo = $_GET['modulo'];

if($pront == "") {
    echo "O campo prontuário não foi preenchido";
} else {
    echo "O prontuário é: " . $pront;
}
echo "<br>";
if($nome == "") {
    echo "O campo nome não foi preenchido";
} else {
    echo "O nome é: " . $nome;
}
echo "<br>";
if($idade >= 15 && $idade <= 75) {
    echo "A idade é: " . $idade;
} else {
    echo "A idade deve ser entre 15 e 75 anos";
}
echo "<br>";
if($periodo == "Vespertino" || $periodo == "V" || $periodo == "Noturno" || $periodo == "N") {
    if($periodo == "Vespertino" || $periodo == "V") {
       $periodo = "Vespertino";
    } else{
         $periodo = "Noturno";
     }
    echo "O período é: " . $periodo;
} else {
    echo "O período deve ser V-Vespertino ou N-Noturno";
}
echo "<br>";
if($modulo >= 1 && $modulo <= 4) {
    echo "O módulo é: " . $modulo;
} else {
    echo "O módulo deve ser entre 1 e 4";
}
?>