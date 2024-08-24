<?php //abertura de tag

echo 'opa bao <br>';
echo 'todo comando deve ser finalizado colm ponto e virgula <br>';
//finalização de linha sempre com ";"

//no php nao ha necessidade de declarar o tipo de variavel, como no visualG

//variaveis sempre iniciam com cifrao '$'
//tipagem dinamica das variaveis
$nome = 'jao';
$idade = 25; //numeros sem aspas
$salario = 1020.33; // usa-se pontos em vez de virgula para fazer numeros decimais
$possui_faculdade = true; //false ou true
$conhecimentos = ['php', 'js', 'html','python', false, 45.90]; //Array 
//dentro dos colchetes estão os 'elementos' (strings)

//echo $nome.' - '. $idade;  //concatenaçao (interpolaçao)(' ')

// echo "$nome - $idade - $salario"; //nesse caso o php so irá interpretar esses espaços se for usados aspas duplas
// echo "Nome: $nome <br> Idade: $idade <br> Salário: $salario"; //nesse caso o php so irá interpretar esses espaços se for usados aspas duplas


// echo '<pre>';
// var_dump($conhecimentos); //comando VAR_DUMP é usado somente para fins de desenvolvimento
// // print_r($conhecimentos);

// foreach($conhecimentos as $conhecimento);{
//     echo $conhecimento . '<br>';
// }

//operadores matematicos (+, -, *, / , %)

// echo ($salario + 1000);
$salario_reajustado = ($salario + 1000);
echo "Salário reajustado: $salario_reajustado <br>";

$salario_descontado = ($salario - 200);
echo "Salario com desconto: $salario_descontado <br>";

//LEMBRAR: VARIAVEL TEM NOME E FINALIDADE, OU SEJA, DEVE SER SEMPRE NOMEADA.

if ($idade % 5 == 0) {
    echo 'idade é par';
} else {
    echo 'idade é impar';
}

//RESUMO:
//1 - ABERTURA DE TAG;
//2 - FINALIZAÇÃO DE LINHA SEMPRE COM ';' (PONTO E VÍRGULA) 
//3 - VARIÁVEL SEMPRE INICIA COM '$' (CIFRÃO)
//4 - TIPAGEM DINÂMICA DAS VARIÁVEIS
//5 - CONCATENAÇÃO DE STRINGS USANDO '.'
//6 - INTERPOLAÇÃO USANDO ASPAS DUPLA
//7 - STRINGS COM TAGS HTML
//8 - COMANDOS VAR_DUMP E PRINT_R
//9 - EXEMPLO SIMPLES DE FOREACH
//10 - OPERADORES ( + , - , * , / , % )

