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

            $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : ''; //ou null em vez de ''
            $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';
            $operacao = isset($_POST['select']) ? $_POST['select'] : '';


            if (validarNumeros($numero1, $numero2)) {
                if ($operacao == 'soma') {
                    echo "A soma deu " . soma($numero1, $numero2);
                } elseif ($operacao == 'subtracao') {
                    echo "a subtrção deu " . subtracao($numero1, $numero2);
                } elseif ($operacao == 'multiplicacao') {
                    echo "A multiplicação deu " . multiplicacao($numero1, $numero2);
                } elseif ($operacao == 'divisao') {
                    echo "A divisão deu " . divisao($numero1, $numero2);
                } else {
                    echo "Operação inválida.";
                }
            } else {
                echo "CÊ TEM QUE DIGITAR OS DOIS NÚMEROS, AMIGÃO.";
            }
        ?>
</main>

</body>
</html>