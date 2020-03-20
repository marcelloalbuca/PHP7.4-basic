<?php
require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']){
    
    case 'list':

        echo "<h3> Produtos: </h3>";

        foreach($produto->list() as $value) {
            echo "Id: " . $value['id'] . "<br> Descrição: " . $value['descricao'] . '<hr>';
        }

    break;

    case 'insert':

        $status = $produto->insert('Produto teste 04');

        if(!$status){
            echo 'Não foi possivel a executar a operação';
            return false;
        }

        echo 'Registro inserido com successo!';

    break;

    case 'update':

        $status = $produto->udpate('Produto teste 05', 1);

        if(!$status){
            echo 'Não foi possivel a executar a operação';
            return false;
        }

        echo 'Registro alterado com successo!';

    break;

    case 'delete':

        $status = $produto->delete(1);

        if(!$status){
            echo 'Não foi possivel a executar a operação';
            return false;
        }

        echo 'Registro deletado com successo!';

    break;
}