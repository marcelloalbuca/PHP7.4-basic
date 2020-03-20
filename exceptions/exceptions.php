<?php

function validarUsuario(array $usuario){

    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){

        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }
    return true;
}

$usuario =[

    'codigo' => 1,
    'nome' => 'teste',
    'idade' => 32,

];

$status = false;

try{
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Status da Operação: " . (int)$status; //casts    
    die();
}
