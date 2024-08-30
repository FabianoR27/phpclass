<?php 
    //SALÁRIO DO FULANO
    $salario_hora = 8.00;
    $salario = ($salario_hora * 220);

    // CALCULANDO IR
    if ($salario <= 900) {
        $ir = 0;
    } else if ($salario > 900 and $salario <= 1500){
        $ir = ($salario * (5/100));
    } else if ($salario > 1500 and $salario <= 2500){
        $ir = ($salario * (10/100));
    }

    //SINDICATO
    $sindicato = ($salario * (3/100));

   //INSS
    if ($salario <= 1000) {
        $inss = ($salario * (7/100));
    } else if ($salario > 1000 and $salario<= 2000){
        $inss = ($salario * (9/100));
    } else if ($salario > 2000 and $salario <= 3000){
        $inss = ($salario * (11/100));
    }

    //SALARIO LIQUIDO
    $salarioliquido = ($salario - $ir - $sindicato - $inss);

    //SAÍDA
    echo "salário do homem: $salario. <br>";
    echo '<hr>';
    echo "IR = $ir <br>";
    echo '<hr>';
    echo "O sindicato comeu $sindicato reais do salario do homem.<br>";
    echo '<hr>';   
    echo "INSS = $inss <br>";
    echo '<hr>';
    echo "O COITADO SÓ VAI TER $salarioliquido PRA GASTAR :(.";
