<?php


function validaNome(string $nome) : bool {

    if(empty($nome)){
        setarMensagemErro('O nome não pode ser vázio. Preencha o formulário.');
        return false;
    }
    else if(strlen($nome) <= 3){
        setarMensagemErro('O nome não pode conter menos de 3 caracteres.');
        return false;
    }
    else if(strlen($nome) > 40){
        setarMensagemErro('O nome não pode conter mais de 40 caracteres.');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool {

    if(!is_numeric($idade)){
        setarMensagemErro('Informe um número.');
       //header('location: index.php');
        return false;
    }
    return true;
}

function validaData(string $data){
    //$data = "04/04/2011";
    if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
    echo "Data inválida.";
    }
}



