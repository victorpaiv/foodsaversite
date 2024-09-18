<?php
    session_start();
    //Apaga todas as variaveis da sessao
    $_SESSION = array();
    //Finalmente, destroi a sessao
    session_destroy();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="4;url=index.html"
        <title> FoodSaver</title>
    </head>
    <body>
        <h1>FoodSaver</h1>
        <h2>Sessao terminada com sucesso!</h2>
        <input type="button" value="Voltar ao inicio"
        onclick="window.open('index.html','_self')" class="custom-button">
    </body>
</html>