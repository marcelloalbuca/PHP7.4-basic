<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);
//var_dump($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if(empty($nome)){
    echo " O nome não pode ser vázio";
    return;
}
if(strlen($nome) <= 3){
    echo " O nome deve conter mai de 3 caracteres";
    return;
}
if(strlen($nome) > 40){
    echo "Vocẽ passou o limite de caracteres";
    return;
}


if($idade >=  6 && $idade <= 12){
        //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo 'O nadador '.$nome. ' compete na categoria '. $categorias[$i];
    }
}
else if($idade >=13 && $idade <= 18){

         //echo 'adolecente';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolecente')
            echo 'O nadador '.$nome. ' compete na categoria adolecente ';
    }
}
else {
        //echo 'adulto';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo 'O nadador '.$nome. ' compete na categoria adulto ';
    }
}
