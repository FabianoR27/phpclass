<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <main>
        <h1>RESULTADO</h1>
        <?php
            function validarNumeros($numero1, $numero2) {
                if (is_numeric($numero1) && is_numeric($numero2)) {
                    return true;
                } else {
                    return false;
                }
            }

            function soma($numero1, $numero2) {
                return $numero1 + $numero2;
            }

            function subtracao($numero1, $numero2) {
                return $numero1 - $numero2;
            }

            function multiplicacao($numero1, $numero2) {
                return $numero1 * $numero2;
            }

            function divisao($numero1, $numero2) {
                if ($numero2 != 0) {
                    return $numero1 / $numero2;
                } else {
                    return "\"PARCEIRO, AINDA NÃO DESCOBRIRAM COMO DIVIDIR ALGO POR ZERO!!\"";
                }
            }

            $numero1 = isset($_GET['numero1']) ? $_GET['numero1'] : ''; //ou null em vez de ''
            $numero2 = isset($_GET['numero2']) ? $_GET['numero2'] : '';
            $operacao = isset($_GET['select']) ? $_GET['select'] : '';
            $resultado = 0;


            if (validarNumeros($numero1, $numero2)) {
                if ($operacao == 'soma') {
                    $resultado = soma ($numero1, $numero2);
                    echo "A soma deu " . soma($numero1, $numero2);
                } elseif ($operacao == 'subtracao') {
                    $resultado = subtracao ($numero1, $numero2);
                    echo "a subtrção deu " . subtracao($numero1, $numero2);
                } elseif ($operacao == 'multiplicacao') {
                    $resultado = multiplicacao ($numero1, $numero2);
                    echo "A multiplicação deu " . multiplicacao($numero1, $numero2);
                } elseif ($operacao == 'divisao') {
                    $resultado = divisao ($numero1, $numero2);
                    echo "A divisão deu " . divisao($numero1, $numero2);
                } else {
                    echo "Operação inválida.";
                }
            } else {
                echo "VOCÊ PRESISA PREENCHER TODOS OS CAMPOS. <br>";
            }

            $calculos = [
                'numero1' => $numero1,
                'operacao' => $operacao, 
                'numero2' => $numero2, 
                'resultado' => (string) $resultado
            ];
        
            $json = json_encode($calculos);
            

        
            $codigo = rand(0001,9999);
        
        
            if (! file_exists('historico'))
            mkdir('historico');
        
            $recurso = fopen("historico/calculo-$codigo.json", 'w');
        
            fwrite($recurso, $json);
        
            fclose($recurso);
        ?>

        <a href="index.html"> <br>Voltar à calculadora</a>

</main>

<div>
    <?= include ('tabelaHistorico.php')?>
</div>

</body>
</html>

