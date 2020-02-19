<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);
//var_dump($categorias);

$nome = 'Marcello';
$idade = 10;

//var_dump($nome);
//var_dump($idade);


if($idade >=  6 && $idade <= 12){
        //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[1] == 'infantil')
            echo 'O nadador '.$nome. 'compete na categoria infantil';
    }
}
else if($idade >=13 && $idade <= 18){
        echo 'adolecente';
}
else {
        echo 'adulto';
}
