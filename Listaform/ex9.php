<?php
$nome = $_GET['nome'];
$hora = $_GET['hora'];

if ($hora <= 12.00) 
{
    echo "Bom dia $nome";
} 
elseif ($hora <= 18.00) 
{
    echo "Boa tarde $nome";
} 
else 
{
    echo "Boa noite $nome";
}
?>