<?php


function defineCatCompetidor(string $nome, string $idade){

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);
//var_dump($categorias);


if($idade >=  6 && $idade <= 12){
        //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
         setarMensagemErro($mensagem = 'O nadador '.$nome. ' compete na categoria '. $categorias[$i]);
            return;
        }            
    }
}
else if($idade >=13 && $idade <= 18){

         //echo 'adolecente';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolecente')
        {
            setarMensagemErro($mensagem =  'O nadador '.$nome. ' compete na categoria adolecente ');     
            return;
        }
    }
}
else {
        //echo 'adulto';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        {
            setarMensagemErro($mensagem = 'O nadador '.$nome. ' compete na categoria adulto ');
            return;
        }
    }
}

}