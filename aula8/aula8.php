<?php 
//AULA 8 - ARRAY ASSOCIATIVO
// CHAVES ASSOCIATIVAS : '=>'

    echo '<h1>AULA 8 </h1><br>';

    $materias = [
        'MATERIA' => 'ESTRUTURA DE DADOS',
        'CURSO' => 'SI',
        'PROFESSOR' => 'WILLIAM',
        'SEMESTRE' => 'SEGUNDO',
    ];

    foreach ($materias as $key => $value) {
        echo "Chave: $key possui valor $value <br>";
    }

    echo '<hr>';
    //---------------------------------------------------


$pessoa1 = [
    'nome' => 'Fabiano',
    'cpf' => '4561665555',
    'sexo' => 'M'
];

$arrayPessoas[] = $pessoa1;

$pessoa2 = [
    'nome' => 'Ana',
    'cpf' => '6546546546',
    'sexo' => 'F'
];

$arrayPessoas[] = $pessoa2;

$pessoa3 = [
    'nome' => 'Rafael',
    'cpf' => '8565465464',
    'sexo' => 'M'
];

$arrayPessoas[] = $pessoa3;

$arrayMasculino = [];
$arrayFeminino = [];

foreach ($arrayPessoas as $pessoa) {
    // echo $pessoa ['nome'] . ' - ' . $pessoa ['cpf'] . '<br>';
    if ($pessoa['sexo'] == 'F') {
        $arrayFeminino [] = $pessoa;
        echo $pessoa ['nome'] . '-' . $pessoa ['sexo'] . '<br>';
    } else {
        $arrayMasculino[] = $pessoa;
        // echo $pessoa ['nome'] . '<br>';
    }
}

foreach ($arrayFeminino as $value) {
    echo $value ['nome'] . '<br>';
}
// foreach ($arrayMasculino as $value2) {
//     echo $value2 ['nome'] . '<br>';
// }