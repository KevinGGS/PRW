<?php
$p = $_GET['pasta'];
$q = $_GET['quantidade'];

for ($i=1; $i <= $q; $i++) 
{ 
    echo "<img src='$p/$i.jpg' width='150px' height='100px'><br>";
}
?>