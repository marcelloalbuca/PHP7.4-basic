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

        echo 'infantil';

}
else if($idade >=13 && $idade <= 18){

        echo 'adolecente';
}
else {

        echo 'adulto';
}
