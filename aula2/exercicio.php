<?php
    //EXERCICIO: CALCULAR MEDIAS DE ALUNOS

    //VARIÁVEIS COMUNS
    $nome = 'Fabio';
    $curso = 'Sistemas para Internet';
    $idade = '29';
    $tempo_faculdade = '2';
    $semestres = '6';
    $sem_restantes = ($semestres - $tempo_faculdade);
    $n1 = '7';
    $n2 = '9';
    $n3 = '9';
    $peso1 = '1.5';
    $peso2 = '2.5';
    $peso3 = '3.5';
    $soma_pesos = ($peso1 + $peso2 + $peso3);

    //IMPRIMINDO AS INFORMAÇOES DO ALUNO
    echo "<h1>DADOS DO ALUNO:</H1>";
    echo "<b>Nome do aluno:</b> $nome <br>";
    echo "<b>Curso:</b> $curso <br>";
    echo "<b>Idade:</b> $idade <br>";
    echo "<b>Semestre atual:</b> $tempo_faculdade/6 <br>";
    echo "<b>Semestres restantes:</b> $sem_restantes <br>";
    echo "<b>Notas obtidas:</b> $n1, $n2, $n3 <br>";
    echo "<b>Peso das notas:</b> $peso1, $peso2, $peso3 <br>";

    //CALCULANDO AS NOTAS COM OS PESOS
    $p1 = ($n1 * $peso1);
    $p2 = ($n2 * $peso2);
    $p3 = ($n3 * $peso3);
    $soma_notas = ($p1 + $p2 + $p3);
    
    //IMPRIMINDO O CALCULO DAS NOTAS
    echo "<br><h2>NOTAS COM PESOS CALCULADOS: </h2>";
    echo "<b>Nota P1:</b> $p1 <br>";
    echo "<b>Nota P2:</b> $p2 <br>";
    echo "<b>Nota P3:</b> $p3 <br>";

    //CALCULANDO A MEDIA    
    $media = ($soma_notas / $soma_pesos);

    //IMPRIMINDO A MÉDIA
    echo "<br><h2>MÉDIA:</h2>";
    echo "<b>A média deste aluno é:</b> $media.";

    //SOMENTE PARA PÔR ESPAÇO ENTRE AS INFORMAÇÕES DE CADA ALUNO
    echo "<br><br><br>";
    echo "---------------";
    echo "<br><br><br>";


    //PROXIMO ALUNO (AQUI SE REPETEM ALGUMAS VARIAVEIS.)
    //SOMENTES AS INFORMAÇÕES DOS ALUNOS QUE SÃO ALTERADAS.
    $nome = 'Renata';
    $curso = 'Gestão de Turismo';
    $idade = '27';
    $tempo_faculdade = '3';
    $sem_restantes = ($semestres - $tempo_faculdade);
    $n1 = '10';
    $n2 = '8';
    $n3 = '6.5';
    
    echo "<h1>DADOS DO ALUNO:</H1>";
    echo "<b>Nome do aluno:</b> $nome <br>";
    echo "<b>Curso:</b> $curso <br>";
    echo "<b>Idade:</b> $idade <br>";
    echo "<b>Semestre atual:</b> $tempo_faculdade/6 <br>";
    echo "<b>Semestres restantes:</b> $sem_restantes <br>";
    echo "<b>Notas obtidas:</b> $n1, $n2, $n3 <br>";
    echo "<b>Peso das notas:</b> $peso1, $peso2, $peso3 <br>";

    $p1 = ($n1 * $peso1);
    $p2 = ($n2 * $peso2);
    $p3 = ($n3 * $peso3);
    $soma_notas = ($p1 + $p2 + $p3);
    
    echo "<br><h2>NOTAS COM PESOS CALCULADOS: </h2>";
    echo "<b>Nota P1:</b> $p1 <br>";
    echo "<b>Nota P2:</b> $p2 <br>";
    echo "<b>Nota P3:</b> $p3 <br>";

    $media = ($soma_notas / $soma_pesos);

    echo "<br><h2>MÉDIA:</h2>";
    echo "<b>A média deste aluno é:</b> $media.";
    echo "<br><br><br>";
    echo "---------------";
    echo "<br><br><br>";


    //PROXIMO ALUNO (AQUI SE REPETEM ALGUMAS VARIAVEIS.)
    //SOMENTES AS INFORMAÇÕES DOS ALUNOS QUE SÃO ALTERADAS.
    $nome = 'Gervázio';
    $curso = 'Gestão Comercial';
    $idade = '44';
    $tempo_faculdade = '1';
    $sem_restantes = ($semestres - $tempo_faculdade);
    $n1 = '7';
    $n2 = '6';
    $n3 = '9';
    
    echo "<h1>DADOS DO ALUNO:</H1>";
    echo "<b>Nome do aluno:</b> $nome <br>";
    echo "<b>Curso:</b> $curso <br>";
    echo "<b>Idade:</b> $idade <br>";
    echo "<b>Semestre atual:</b> $tempo_faculdade/6 <br>";
    echo "<b>Semestres restantes:</b> $sem_restantes <br>";
    echo "<b>Notas obtidas:</b> $n1, $n2, $n3 <br>";
    echo "<b>Peso das notas:</b> $peso1, $peso2, $peso3 <br>";

    $p1 = ($n1 * $peso1);
    $p2 = ($n2 * $peso2);
    $p3 = ($n3 * $peso3);
    $soma_notas = ($p1 + $p2 + $p3);
    
    echo "<br><h2>NOTAS COM PESOS CALCULADOS: </h2>";
    echo "<b>Nota P1:</b> $p1 <br>";
    echo "<b>Nota P2:</b> $p2 <br>";
    echo "<b>Nota P3:</b> $p3 <br>";

    $media = ($soma_notas / $soma_pesos);

    echo "<br><h2>MÉDIA:</h2>";
    echo "<b>A média deste aluno é:</b> $media.";
    echo "<br><br><br>";
    echo "---------------";
    echo "<br><br><br>";
