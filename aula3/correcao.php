<?php 
    
    $nota = 10;
    $presenca = 91;

    if ($presenca < 90) {
        echo 'REPROVADO SEM DÓ';
        exit;
    }

    if ($nota <= 5.9) {
        echo 'Reprovado';
    } elseif ($nota <= 6.4) {
        echo 'Recuperação';
    } elseif ($nota <= 9.4) {
        echo 'Aprovado';
    } else {
        echo 'APROVADO COM BOLSA';
    }
