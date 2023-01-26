<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2){
      echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao(){
      
      $teste = "xsxs";

      echo "$teste local <br>"
    }

      funcao();
      function testandoGlobal(){
        
        $teste = "xsxs";
        
        echo "$teste global função <br>";
      }


?>