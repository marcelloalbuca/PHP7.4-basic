<?php


function defineCatCompetidor(string $nome, string $idade) : ?string {

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);
//var_dump($categorias);

if(validaNome($nome) && validaIdade($idade))
{

    removerMensagemErro();

if($idade >=  6 && $idade <= 12){
        //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
         setarMensagemErro('O nadador '.$nome. ' compete na categoria '. $categorias[$i]);
            return null;
        }            
    }
}
else if($idade >=13 && $idade <= 18){

         //echo 'adolecente';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolecente')
        {
            setarMensagemErro('O nadador '.$nome. ' compete na categoria adolecente ');     
            return null;
        }
    }
}
else {
        //echo 'adulto';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        {
            setarMensagemErro('O nadador '.$nome. ' compete na categoria adulto ');
            return null;
          }
        }
    }
}
    else
    {
    removerMensagemSucesso();
    return obterMensagemErro();
    }
}