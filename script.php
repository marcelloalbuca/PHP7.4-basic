<?php

include "servicos/servicoMsgSessao.php";
include "servicos/servicoValicacao.php";
include "servicos/servicoCatCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

defineCatCompetidor($nome, $idade);
header('location: index.php');