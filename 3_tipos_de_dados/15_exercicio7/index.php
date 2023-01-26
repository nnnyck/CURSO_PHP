Crie um array associativo com características de uma pessoa;
faça um if cehcando se ela é maior de idade e imprima uma mensagem, caso seja.

<?php

    $pessoa = ['nome'   => 'Nyckolas',
               'idade'  => 18,
               'altura' => '175cm'
              ];
    
    $maioridade = 18;

    // desafio
    if($pessoa['idade'] >= $maioridade) {
        echo "Ele é maior de idade";
    }

?>