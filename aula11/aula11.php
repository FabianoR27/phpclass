<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'includes/header.php'    
        ?>
    <div class="container-fluid">
        <h1>TEXTAO ALEATORIO PARA MOSTRAR QUE ESTÁ NO MIOLO DA PAGINA</h1>


    </div>


        <?php 
            include 'includes/footer.php'; // exibe somente um WARNING se houver
            include_once 'includes/footer.php';// once nao inclui novamente se já estiver em memoria

            require 'includes/footer.php'; //exibe um FATAL ERROR se houver
            require_once 'includes/footer.php';// once nao inclui novamente se já estiver em memoria
        ?>



</body>
</html>