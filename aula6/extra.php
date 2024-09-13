<?php 
//ATIVIDADE EXTRA

    $soma = 0;
    $venda = 1;
    $total_parcelas = 3;

    echo 'Valor da venda 1<br>';
    echo 'Parcelas: 3 <br>';
    echo '1/3 <br><br>';
    
    for ($i=1; $i <= $total_parcelas; $i++) { 
        $valor = floor ((1 / $total_parcelas * 100)) / 100;
        $soma += $valor;
        
        //ultima  parcela
        if ($i == $total_parcelas) {
            $resto = ($venda - $soma);
            $valor = $valor + $resto;
            $soma += $resto;
        }
        
        echo "Valor da parcela: $valor <br>";
    }
    echo "<br>Soma $soma";