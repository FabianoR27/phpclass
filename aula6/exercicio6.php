<?php 
//EXERCICIO 6: EXERCICIO 5 USANDO WHILE

    //exercício 1
    echo '<h1>NÚMEROS PARES:</h1>';
    $i = 0;
    while ($i < 100) {
        $i = $i + 2;
        echo "valor = $i <br>";
    }
    echo "<br>";
    echo "<hr>";
    echo "<br>";


    //exercicio 2
    echo '<h1>NÚMEROS PRIMOS:</h1>';
    $n = 2; //inicia o contador

    while ($n <= 100) {
        $d = 0; //variavel para contar divisores

        $i = 1; //inicializa o contador para verificar divisibilidade

        while ($i <= $n) {
            if ($n % $i == 0) {
                $d ++;
            }
            $i ++;
        }

        if ($d == 2) {
            echo $n . " ";
        }
        $n ++; // incrementa para verificar o proximo numero
    }



    echo "<br>";
    echo "<hr>";
    echo "<br>";


    //exercicio 3
    echo '<h1>SOMA DE TODOS OS NÚMEROS DO 4 AO 533</h1>';

    $a = 4;
    $soma = 0;
    while ($a <= 533) {
        $soma += $a  ++;
    }
    echo "valor = $soma <br>";

    
    echo "<br>";
    echo "<hr>";
    echo "<br>";


    //exercicio 4
    echo '<h1>TABUADA DO 0 AO 400</h1>';

    $n = 0;
    $i = 0;
    $resultado = 0;

    while ($n < 400) {
        $n = $n + 1;
        $i = 0;

        while ( $i < 10) {
            $i = $i +1;
            $resultado = $i * $n;
            echo "$i x $n = $resultado<br>";

        }
        
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        }
