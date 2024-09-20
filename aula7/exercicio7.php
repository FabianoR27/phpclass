<?php 
    //exercício 7

    $numeros = [true, 55, 75, 3, false, 59, 8, 'F', 34, 688];
    $total_pares = 0;
    $total_impares = 0;
    $soma_numeros = 0;
    $total_booleanos = 0;
    $total_strings = 0;

    foreach ($numeros as $elementos) {
        if (is_numeric($elementos)) {
            if ($elementos % 2 == 0) {
                $total_pares++;
            } else{
                $total_impares++;
            }
            $soma_numeros += $elementos;
        } else if (is_bool($elementos)){
            $total_booleanos++;
        } else if (is_string($elementos)){
            $total_strings++;
        }
    }



    echo "total de numeros pares: $total_pares <br>";
    echo "total de numeros impares: $total_impares<br>";
    echo "soma dos numeros: $soma_numeros<br>";
    echo 'Qtde de elementos: ' . count($numeros) . '<br>';
    echo "Qtde de booleanos: $total_booleanos<br>";
    echo "Qtde de strings: $total_strings<br>";
    echo "primeiro elemento: " . $numeros [0] . '<br>';
    echo "ultimo elemento: " . $numeros[count($numeros) -1] . '<br>';
    