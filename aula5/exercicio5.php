<?php 

//exercício 1
    echo '<h1>NÚMEROS PARES</h1>';
    for ($i=0; $i <=100 ; $i+=2) { 
        echo "valor de i = $i <br>";
        
    }
    
    echo "<br>";
    echo "<br>";
    
    
    //exercício 1 do professor
    echo '<h1>NÚMEROS PARES</h1>';
    for ($i=0; $i <=100 ; $i++) { 
        if ($i % 2 == 0) {
            echo "valor de $i é par.<br>";
        }
    }
    
    echo "<br>";
    echo "<br>";
    
    
    //exercício 2
    echo '<h1>NÚMEROS PRIMOS</h1>';
    for ($i=2; $i <=100 ; $i++) { //DEFINO QUE A VARIAVEL 'I' COMECE COM 2 E TERMIMINE COM 100
        $primo = true; //AQUI EU DEFINO ESSA VARIAVEL COMO TRUE (verdadeira)
        for ($j=2; $j < $i; $j++) { //AQUI EU DEFINO O QUE A VARIAVEL 'J' COMEÇE COM 2 E QUE SEJA MENOR QUE A VARIAVEL 'I'
            if ($i % $j == 0) { //PARA TESTAR SE O NUMERO É DIVISIVEL POR QUALQUER NUMERO DO 2 ATÉ ELE MESMO
            $primo = false; //SE O NUMERO FOR DIVISIVEL POR OUTRO NUMERO QUE NAO SEJA ELE MESMO, ELE NAO É PRIMO
                break; //INTERROMPE O LOOP INTERNO
            }
        }
        if ($primo == true) { //SE ESSA VARIAVEL AINDA FOR TRUE, EXIBIRA OS PRIMOS
            echo "$i <br>";
        }
        
    }
    
    echo "<br>";
    echo "<br>";
    
    
    //exercício 3
    echo '<h1>SOMA DE TODOS OS NÚMEROS DO 4 AO 533</h1>';
    $soma = 0;
    for ($i=4; $i <= 533 ; $i++) { 
        $soma += $i;
    }
    echo "resultado $soma<br>";
    
    echo "<br>";
    echo "<br>";
    
    
    //exercício 4
    echo '<h1>TABUADA DO 0 AO 400</h1>';
    for ($i = 0; $i <= 400; $i++) {
        echo "<br>";
        echo "<hr>";
        echo "Tabuada do $i:<br>";
        
        // Laço para multiplicar de 1 a 10
        for ($j = 1; $j <= 10; $j++) {
            $resultado = $i * $j;
            echo "$i x $j = $resultado<br>";
        }
        
    }

    //numeros primos da forma do professor
    for ($i = 1; $i <= 100; $i++) { 
        $divisor = 0;

        for ($x = $i; $x >= 1; $x--) { 
            if ($i % $x == 0) {
                $divisor += 1;
            }
        }

        if ($divisor == 2) {
            echo "eu $i";
        }
    }