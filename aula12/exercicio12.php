<?php 

    $codigo = rand(1,10);

    if (! file_exists('teste'))
        mkdir('teste');

    $recurso = fopen("teste/teste_fabiano$codigo.txt", 'w');

    fwrite($recurso, "FABIANO É ZIKA DA BICA");

    fclose($recurso);