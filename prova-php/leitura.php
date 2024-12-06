<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LISTA COM RESULTADOS</title>
</head>
<body>
    <main>
        <?php 

            $arquivo_recebido = $_GET ['file'];


            $arquivo = './historico/' . $arquivo_recebido;


            //1- abrir o arquivo em memória (recurso)
            $recurso = fopen($arquivo, 'r');

            //2- Leitura do arquivo
            $json = fread($recurso, filesize($arquivo));

            //3- Fechar o recurso (evitar o consumo de memória)
            fclose($recurso);

            /* forma de objeto*/
            $dados = json_decode($json);
            
            // var_dump($dados);
            
            echo 'Primeiro numero: ' . $dados -> numero1 . '<br>';
            echo 'Operação: ' . $dados -> operacao . '<br>';
            echo 'Segundo numero: ' . $dados -> numero2 . '<br>';
            echo 'Resultado:' . $dados -> resultado;
            
            /* Forma de array associativo (basta adicionar o 'true'  no json decode) */
            // $dados = json_decode($json);
            // echo 'Nome: ' . $dados['nome'] . '<br>';
        ?>
                <a href="tabelaHistorico.php"> <br>Voltar ao Histórico<br></a>
                <a href="index.html"> Voltar à calculadora</a>


    </main>
    
</body>
</html>
