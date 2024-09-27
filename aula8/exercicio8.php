<?php
    $arrayPessoas = [
        [
            'nome' => 'Luffy',
            'sexo' => 'M',
            'salario' => 30000,
            'classificacao' => 'A',
            'estado' => 'SP'
        ],
        [
            'nome' => 'Zoro',
            'sexo' => 'M',
            'salario' => 15000,
            'classificacao' => 'B',
            'estado' => 'RJ'
        ],
        [
            'nome' => 'Nami',
            'sexo' => 'F',
            'salario' => 10500,
            'classificacao' => 'C',
            'estado' => 'RS'
        ],
        [
            'nome' => 'Sanji',
            'sexo' => 'M',
            'salario' => 12000,
            'classificacao' => 'B',
            'estado' => 'BA'
        ],
        [
            'nome' => 'Usopp',
            'sexo' => 'M',
            'salario' => 11000,
            'classificacao' => 'C',
            'estado' => 'PE'
        ]
    ];
    

    $arrayMasculino = [];
    $arrayFeminino = [];

    //separando masculino do feminino
    foreach ($arrayPessoas as  $pessoa ){
        if ($pessoa ['sexo'] == 'F') {
            $arrayFeminino [] = $pessoa;
        } else {
            $arrayMasculino[] = $pessoa;
        }

    }

    //IMPRIMINDO O RELARTORIO
    echo '<h1>RELATORIO FEMININO: </h1>';
    foreach ($arrayFeminino as $value) {
        echo $value ['nome'] . '<br>';

    }

    
    echo '<h1>RELATORIO MASCULINO: </h1>';
    foreach ($arrayMasculino as $value) {
        echo $value ['nome'] . '<br>';

    }

    echo '<hr>';

    //REAJUSTES
    $tabelaReajuste = [
        'A' => 20,
        'B' => 15,
        'C' => 10
    ];

    //calculando o novo salário
    foreach ($arrayPessoas as  $pessoa ){
        $reajuste = ($tabelaReajuste[$pessoa['classificacao']] / 100 ) * $pessoa ['salario'];
        $novoSalario = $pessoa['salario'] + $reajuste;

        
        echo $pessoa ['nome'] . ' - salario antigo: ' . $pessoa['salario'] . ' - salario reajustado: ' . $novoSalario . '(' . $tabelaReajuste [$pessoa['classificacao']] . '%)' . '<br>';
    }



