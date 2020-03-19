<?php
include "servicos/servicoMsgSessao.php";
include "servicos/servicoValicacao.php";
include "servicos/servicoCatCompetidor.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário de inscrição</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDOR</p>    
                    <!-- method="GET"-->
<form action="script.php" method="POST">
    <?php

         $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>

    <p>Your name: <input type="text" name="nome" /></p>
    <p>Your age: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do competidor" /></p>
</form>

</body>
</html>