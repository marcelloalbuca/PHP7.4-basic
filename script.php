<?php

session_start();

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

    //echo " O nome não pode ser vázio";
    //return;
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vázio. Preencha o formulário.';
    header('location: index.php');
    return;
}
else if(strlen($nome) <= 3){
    $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres.';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40){
    $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres.';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem de erro'] = 'Informe um número.';
    header('location: index.php');
    return;
}

if($idade >=  6 && $idade <= 12){
        //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador '.$nome. ' compete na categoria '. $categorias[$i];
            header('location: index.php');
            return;
        }            
    }
}
else if($idade >=13 && $idade <= 18){

         //echo 'adolecente';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolecente')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador '.$nome. ' compete na categoria adolecente ';
            header('location: index.php');
            return;
        }
    }
}
else {
        //echo 'adulto';
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador '.$nome. ' compete na categoria adulto ';
            header('location: index.php');
            return;
        }
    }
}
