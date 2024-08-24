<!DOCTYPE html>
<html>
<head>
    <title>TESTE PHP</title>
</head>
<body>
    <?php
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
    {
        echo 'Voce esta usando o Google Chrome';
    }
    ?>
    <br>
    <?php
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
    ?>
        <h3>str_contains() retornou não falso</h3>
        <p>você está usando Firefox</p>
    <?php
    } else {
    ?>
        <h3>str_contains() retornou false</h3>
        <p>você não está usando Firefox</p>
    <?php
    }
    ?>
    <br>
    <br>
    <!-- <?php 
        echo $_SERVER ['HTTP_USER_AGENT'];
        echo "<p>hello, world!</p>"; 
        phpinfo (); 
    ?> -->
</body>
</html>