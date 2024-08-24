<?php //AULA 3 - IF-ELSE(SE-SENÃO)

    /*$nota1 = 7;
        $media = ($nota1 / 1);

        if ($media > 6) {
            echo 'Aprovado';
        } else if ($media < 6) {
            echo 'Reprovado';
        } else {
            echo 'Recuperação';
        }*/

    //REFATORAÇÃO: NUNCA SE ADICIONA ALGO NOVO, NAO SE CORRIGE ERROS. SOMENTE SE REESCREVE O CÓDIGO DE OUTRA MANEIRA. COMO SE FOSSE UM FACELIFT, O CODIGO É REESCRITO PARA TER AS MESMAS FUNCIONALIDADES. 

    $nota1 = 7;
    $media = ($nota1 / 1);
    $faltas = 9;

    echo "MÉDIA: $media <br> FALTAS: $faltas <br>";

    if ($media > 6 && !$faltas > 10) {
        echo 'Aprovado';
    } else {
        echo 'Reprovado';
    } 

    //Valor igual:
    // 1- = OPERADOR DE ATRIBUIÇÃO
    // 2- == OPERADOR DE COMPARAÇÃO SIMPLES
    // 3- === OPERADO DE COMPARAÇÃO DE TIPOS E VALORES 

    //Valor diferente (usa-se "!=" para dizer que é diferente):
    // 1- = OPERADOR DE ATRIBUIÇÃO
    // 2- != 
    // 3- !== 

    $V1 = 1;
    $V2 = 1;

    if ($V1 !== $V2) {
        echo 'O valor é diferente';
    } else {
        echo 'O valor é igual';
    }
    
    /*
        > MAIOR
        >= MAIOR-IGUAL
        < MENOR
        <= MENOR-IGUAL
    */
    