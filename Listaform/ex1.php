<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $condicao = $_GET['termos'];

    switch($condicao){

        case 'soma':
            $result = $n1 + $n2;
            break;

        case 'sub':
            $result = $n1 - $n2;
            break;

        case 'div':
            $result = $n1 / $n2;
            break;

        case 'mult':
            $result = $n1 *  $n2;
            break;
    }

    echo "$result";
?>