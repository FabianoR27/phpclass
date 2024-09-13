<?php 
//EXERCICIO 6: EXERCICIO 5 USANDO WHILE

    //exercício 1
    echo '<h1>NÚMEROS PARES:</h1>';
    $i = 0;
    while ($i <= 100) {
        echo "valor = $i <br>";
        $i = $i + 2;
    }
    echo "<br>";
    echo "<hr>";
    echo "<br>";


    //exercicio 2
    echo '<h1>NÚMEROS PRIMOS:</h1>';
    $i = 0;
    $n = 0;
    $d = 0;



    echo "<br>";
    echo "<hr>";
    echo "<br>";


    //exercicio 3
    echo '<h1>SOMA DE TODOS OS NÚMEROS DO 4 AO 533</h1>';

    $a = 4;
    $soma = 0;
    while ($a <= 533) {
        echo "valor = $soma <br>";
        $soma += $a  ++;
    }
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
