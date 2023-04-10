<?php
    $n = readline();
    while($n>0)
    {
        $linha = readline();
        $c = strlen($linha);
        $led=0;
        for($i = 0; $i< $c; $i++){
            $pess = $linha[$i];
            switch($pess){
                case 0:
                    $led+=6;
                    break;
                case 1:
                    $led+=2;
                    break;
                case 2:
                    $led +=5;
                    break;
                case 3:
                    $led +=5;
                    break;
                case 4:
                    $led +=4;
                    break;
                case 5:
                    $led += 5;
                    break;
                case 6:
                    $led +=6;
                    break;
                case 7:
                    $led += 3;
                    break;
                case 8:
                    $led += 7;
                    break;
                case 9:
                    $led +=6;
                    break;
            }
        }
        echo"$led leds\n";
        $n--;
    }
?>