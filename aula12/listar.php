<?php 

    $pasta = './teste';

    //1- abrir o diretório = Pasta
    $arquivos = opendir($pasta);

    //2- percorrer o array de arquivos
    while ($arquivo = readdir($arquivos)) {
        if ($arquivo != '.' && $arquivo != '..') {
            echo " <a href='ler.php?file=$arquivo' target='_blank'>$arquivo </a> <br>";
        }
    }

    //3- fechar o recurso
    closedir($arquivos);
