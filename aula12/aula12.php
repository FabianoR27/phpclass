<?php 

    // $nome = 'Fabiano';

    // $json = json_encode(['nome' => $nome]);

    $dados = [
        'nome' => 'Fabiano',
        'idade' => 29, 
        'salario' => 5900.50, 
        'possui_faculdade' => true
    ];

    $json = json_encode($dados);
    
    //formato objeto
    $dadosRetorno = json_decode($json);
    echo $dadosRetorno ->nome;
    echo '<br>';
    var_dump($dadosRetorno);
    echo '<br>';

    // formato associativo
    // $dadosRetorno = json_decode($json);
    // echo $dadosRetorno -> nome;
    // echo '<br>';
    // var_dump($dadosRetorno);
    // echo '<br>';
    
    
    /* SERIALIZAÇÃO: CONVERTER OBJETO/ARRAY PARA TXT,XML,JSON*/
    /* DESSERIALIZAÇÃO: CONVERTER OBJETO/ARRAY DE TXT,XML,JSON*/