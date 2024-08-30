<?php 
    //SALÁRIO DO FULANO
    $salario_hora = 8.00;
    $salario = ($salario_hora * 220);

    echo "salário do homem: $salario. <br>";
    echo '<hr>';

    // CALCULANDO IR
    if ($salario <= 900) {
        $ir = 0;
        echo "IR Isento.<br>";
    } else if ($salario > 900 and $salario <= 1500){
        $ir = ($salario * (5/100));
        echo "IR = $ir <br>";
    } else if ($salario > 1500 and $salario <= 2500){
        $ir = ($salario * (10/100));
        echo "IR = $ir <br>";
    }
    echo '<hr>';

    //SINDICATO
    $sindicato = ($salario * (3/100));
    echo "O sindicato comeu $sindicato reais do salario do homem.<br>";
    echo '<hr>';

   //INSS
    if ($salario <= 1000) {
        $inss = ($salario * (7/100));
        echo "INSS = $inss <br>";
    } else if ($salario > 1000 and $salario<= 2000){
        $inss = ($salario * (9/100));
        echo "INSS = $inss <br>";
    } else if ($salario > 2000 and $salario <= 3000){
        $inss = ($salario * (11/100));
        echo "INSS = $inss <br>";
    }
    echo '<hr>';


    //SAÍDA 
    $salarioliquido = ($salario - $ir - $sindicato - $inss);
    echo "O COITADO SÓ VAI TER $salarioliquido PRA GASTAR :(.";

