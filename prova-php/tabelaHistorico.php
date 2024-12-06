<?php 
    function lerArquivo($caminho_arquivo){
        //1- abrir o arquivo em memória (recurso)
        $recurso = fopen($caminho_arquivo, 'r');

        //2- Leitura do arquivo
        $json = fread($recurso, filesize($caminho_arquivo));

        //3- Fechar o recurso (evitar o consumo de memória)
        fclose($recurso);
        /* forma de objeto*/
        return json_decode($json);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HISTORICO DE CALCULOS</title>
</head>
<body>
    <main>

        <h1>HISTÓRICO DE CALCULOS</h1>
        <hr>
        <?php 

$pasta = './historico';

//1- abrir o diretório = Pasta
$arquivos = opendir($pasta);

?>
    <table>
        <thead>
            <tr>
                <td>NUMERO 1</td>
                <td>OPERAÇÃO</td>
                <td>NUMERO 2</td>
                <td>RESULTADO</td>
                <td>ARQUIVO DE CALCULO</td>

            </tr>
        </thead>
        <tbody>
            <?php
                $html = '';
                //2- percorrer o array de arquivos
                while ($arquivo = readdir($arquivos)) {
                    if ($arquivo != '.' && $arquivo != '..') {

                        $caminho = './historico/' . $arquivo;
                        $dados = lerArquivo($caminho);
                        
                        $html .= "<tr>
                        <td>$dados->numero1</td>
                        <td>$dados->operacao</td>
                        <td>$dados->numero2</td>
                        <td>$dados->resultado</td>
                        <td><a href='leitura.php?file=$arquivo'>Exibir detalhes</a></td>
                        </tr>";
                    }
                }
                echo $html;
                //3- fechar o recurso
                closedir($arquivos);
                // echo " <a href='ler.php?file=$arquivo' target='_blank'>$arquivo </a> <br>";
                ?>
        </tbody>
    </table>

    <a href="index.html">Volte para a calculadora</a>
</main>
    
</body>
</html>
