<?php 

    $arquivo_recebido = $_GET ['file'];


    $arquivo = './teste/' . $arquivo_recebido;


    //1- abrir o arquivo em memória (recurso)
    $recurso = fopen($arquivo, 'r');

    //2- Leitura do arquivo
    $json = fread($recurso, filesize($arquivo));

    //3- Fechar o recurso (evitar o consumo de memória)
    fclose($recurso);

    /* forma de objeto*/
    $dados = json_decode($json);
    
    // var_dump($dados);
    
    echo 'Nome: ' . $dados -> nome . '<br>';
    echo 'Sobrenome: ' . $dados -> sobrenome . '<br>';
    echo 'Idade: ' . $dados -> idade . '<br>';
    echo 'Email: ' . $dados -> email . '<br>';
    
    /* Forma de array associativo (basta adicionar o 'true'  no json decode) */
    // $dados = json_decode($json);
    // echo 'Nome: ' . $dados['nome'] . '<br>';