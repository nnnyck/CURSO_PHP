<?php

    echo 'Imprimindo um texto com aspas simples <br>';
    echo "imprimindo um texto com aspas duplas <br>";

    $str = "Nyckolas";

    if(is_string($str)) {
        echo "É uma string <br>";
    }

    if(is_string("n")) {
        echo "É uma string 2 <br>";
    }
?>