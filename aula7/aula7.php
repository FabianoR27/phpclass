<?php 
//aula 7 - ARRAY

    echo 'AULA7 - ARRAY';
    echo '<br>';
    /*ARRAY é um conjunto de elementos;
    toda subdivisao começa do ZERO 0 (as subdiviões ficam implicitas)*/

    $frutas = array ('banana', 'maçã', 'uva'); //maneira antiga de declarar arrays
    $frutas2 = ['banana', 'maçã', 'uva']; //maneira atual simplificada
    
    $array = [true, 355, 'f', 12.09, 'fatec'];
    /* dentro de um array pode-se ter todos os tipos de dados (strings, numeros, boolean etc)*/
    echo $array [4] . '<br>'; // desse jeito eu acesso uma array especifica, declarando em qual subdivisao ela está.
    
    echo '<pre>';
    var_dump($array); //VAR_DUMP vai imprimir todas as arrays com o tipo delas e suas subdivisões
    
    //função COUNT: para contar os elementos do array
    echo count($array) . '<br>';
    
    $array = [true, 355, 'f', 12.09, 'fatec'];
    $frutas2 = ['banana', 'maçã', 'uva'];
    $numeros = [44, 43, 65, 9, 12, 5];

    foreach ($numeros as $numero) {  // a segunda variavel, nesse caso, é uma variavel temporaria
        if ($numero % 2 == 0) {
            echo "numero $numero é par <br>";
        } else {
            echo "numero $numero é impar <br>";
        }
    }


    //imprimir as materias de cada semestre (DA MANEIRA MAIS OBVIA POSSIVEL)
    $materias = ['PPSI 1', 'PORTUGUES 1', 'BASES 1', 'INGLES 1', 'CRIACAO CONTEUDO 1 ', 'FUNDAMENTOS 1', 'ALGORITMO 1', 'DESIGN 1', 'PPSI2 2', 'DESIGN2 2' , 'LEGISLACAO 2' , 'INLES2 2', 'REDES 2', 'ESTRUTURA 2', 'MATEMATCA DISCRETA 2'];
    
    foreach ($materias as $materia) {
        echo "$materia <br>";
    }
    
    


