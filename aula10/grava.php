<?php 

    function limpaCaracteresDocumento ($documento) {
        return str_replace (['.', '-', ' ', ',', '/'], '', $documento);
    }

    function validaDocumento ($documento, $tipoDocumento) {
        $docLimpo = limpaCaracteresDocumento($documento);

        if ($tipoDocumento == 'cpf') {
            return strlen ($docLimpo) == 11;
        } else if ($tipoDocumento == 'cnpj') {
            return strlen ($docLimpo) == 14;
        }
    }

    
    $cpf = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
    $cnpj = (isset($_POST['cnpj'])) ? $_POST['cnpj'] : '';
    
    if (validaDocumento($cpf, 'cpf')) {
        echo "seu $cpf é válido <br>";
    } else {
        echo "seu $cpf nao é válido <br>";
    }
    
    if (validaDocumento($cnpj, 'cnpj')) {
        echo "seu $cnpj é válido";
    } else {
        echo "seu $cnpj nao é válido";
    }
    
    $cpfLimpo = limpaCaracteresDocumento($cpf);
    $cnpjLimpo = limpaCaracteresDocumento($cnpj);
    
    echo '<pre>';
    var_dump($_POST);
    
    echo $cpfLimpo . '<br>';
    echo $cnpjLimpo . '<br>';
    
    //AQUI COMEÇA OUTRA FUNÇÃO
    echo '<hr>';
    function somaNumerosArray ($p) {
        $acumulador = 0;
        for ($i=0; $i < count($p); $i++) { 
            $acumulador += intval ($p[$i]);
        }
        return $acumulador;
    }
    
    $arrayNumeros = [34 ,6 ,1 ,5656];
    
    echo somaNumerosArray($arrayNumeros);