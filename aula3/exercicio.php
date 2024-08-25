<?php

    $nota = 6.4;
    $frequencia = 30;

    if ($frequencia >= 30) {
        if ($nota >= 9.5) {
            echo 'APROVADO COM BOLSA';
        } else if ($nota <= 9.4 && $nota >= 6.5) {
            echo 'APROVADO';
        } else if ($nota < 6.5 && $nota >= 6) {
            echo 'EM RECUPERAÇÃO';
        } else if ($nota < 6) {
            echo 'REPROVADO POR NOTA';
        } 
    } else {
        echo '<h1>ALUNO REPROVADO POR FREQUÊNCIA<h1>';
    }