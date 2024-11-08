<?php
    $nome = $_POST ["nome"];
    $sobrenome = $_POST ["sobrenome"];
    $idade = $_POST ["idade"];
    $email = $_POST ["email"];
    $senha = $_POST["senha"];

    $msgErro = '';

    if (empty($nome)) {
        $msgErro .= '- INFORME SEU NOME<BR>';
    }

    if (empty($sobrenome)) {
        $msgErro .= '- INFORME SEU SOBRENOME<BR>';
    }

    if (empty($idade)) {
        $msgErro .= '- INFORME SUA IDADE<BR>';
    }

    if (empty($email)) {
        $msgErro .= '- INFORME SEU EMAIL<BR>';
    }

    if ($msgErro != ''){
        echo "Existem erros no Formulario:<br> $msgErro ";
        exit;
    }

    // echo "$nome<br>";
    // echo "$sobrenome<br>";
    // echo "$idade<br>";
    // echo "$email<br>";
    // echo '<br>';


    
    $dados = [
        'nome' => $nome,
        'sobrenome' => $sobrenome, 
        'idade' => $idade, 
        'email' => $email,
    ];

    $json = json_encode($dados);
    
    echo $json;
    echo '<hr>';
    //formato objeto
    // $dadosRetorno = json_decode($json);
    // echo $dadosRetorno ->nome;
    // echo '<br>';

    $codigo = rand(0001,9999);


    if (! file_exists('teste'))
    mkdir('teste');

    $recurso = fopen("teste/formulario_$nome".'_'."$sobrenome".'_'."$codigo.json", 'w');

    fwrite($recurso, $json);

    fclose($recurso);