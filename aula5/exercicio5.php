<?php 

    //exercício 1
    for ($i=0; $i <=100 ; $i+=2) { 
        echo "valor de i = $i <br>";
        
    }
    
    echo "<br>";
    echo "<br>";
    

    //exercício 1 do professor
    for ($i=0; $i <=100 ; $i++) { 
        if ($i % 2 == 0) {
            echo "valor de $i é par.<br>";
        }
    }
    
    echo "<br>";
    echo "<br>";

    //exercício 3
    $soma = 0;
    for ($i=4; $i <=533 ; $i++) { 
        $soma += $i;
    }
    echo "resultado $soma<br>";

    //exercício 4
    for ($i = 0; $i <= 400; $i++) {
        echo "<br>";
        echo "<hr>";
        echo "Tabuada do $i:<br>";
        
        // Laço para multiplicar de 1 a 10
        for ($j = 1; $j <= 10; $j++) {
            $r = $i * $j;
            echo "$i x $j = $r<br>";
        }
        
    }