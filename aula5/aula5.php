<?php 
//AULA 5 - LAÇO DE REPETIÇÃO FOR/WHILE
    echo "eai man <br>";


    //todo laço de repetição tem inicio, meio e fim.

    //FOR
    //++ equivale a i = i +1
    //i += 2;


    for ($i=0; $i <= 100; $i++) { 
        if ($i == 5) {
            break;
        }
        echo "valor de i = $i <br>";
    }

    echo '<br>';
    for ($i=0; $i <= 20; $i++) { 
        if ($i == 5) {
            continue;
        }
        echo "valor de i = $i <br>";
    }