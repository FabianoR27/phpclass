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

    echo "$nome<br>";
    echo "$sobrenome<br>";
    echo "$idade<br>";
    echo "$email<br>";
    



