<?php

session_start();

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string{
    if(isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];

    return null;
}

function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagemErro() : ?string{
    if(isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];

    return null;
}

function removerMensagemErro() : void{
    if(isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
}

function removerMensagemSucesso() : void{
    if(isset($_SESSION['mensagem de sucesso']))
         unset($_SESSION['mensagem de sucesso']);
}





