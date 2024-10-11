<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>RESULTADO</h1>
    </header>

    <main>
        <?php 
        /*
            //$_GET é uma superglobal que é uma array que contem todos os dados que estão vindo de uma emissão de formulário.
            //exitem três variaveis superglobais para essa funçao: $_GET, $_POST, $_REQUEST
            //$_REQUEST é uma junção de $_GET, $_POST e $_COOKIES
            // var_dump($_GET);
            $nome = isset($_POST ["nome1"]) ? $_POST ["nome"] : '';// essa array 'nome' veio do NAME do formulário (name="nome") que foi trazida para o php pela superglobal $_POST
            $sobrenome = $_POST ["sobrenome"];// essa array 'sobrenome' veio do NAME do formulário (name="sobrenome")
            $idade = $_POST ["idade"];

            if (empty($nome) && empty($sobrenome)) {
                echo "<strong>Você não preencheu nada. SAI DAQUI, PERDEDOR!</strong>";
                exit;
            }
            echo "Olá, <strong>$nome $sobrenome</strong>. Prazer em vê-lo.<br>";
            echo "você tem $idade anos de idade."
            */
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>