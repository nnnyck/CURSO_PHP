<?php

    $a = "teste";
    $b = 12.6;

    if(is_float($a)) {
        echo "É uma float <br>";
    }

    if(is_float($b)) {
        echo "É uma float 2 <br>";
    }

    if(is_float(6565.63)) {
        echo "É uma float 3 <br>";
    }
    
    if(is_float("teste")) {
        echo "É uma float 4 <br>";
    }
?>