<?php
    session_start();
    // Validação das variáveis de sessão
    if((!isset($_SESSION['idcliente']) || !isset($_SESSION['nome']))) {
        echo "<h2>Erro no acesso!</h2>";
        echo "<meta http-equiv='refresh' content='2;url=index.html'>";
        exit(); // Finaliza a execução do script caso a sessão seja inválida
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Cliente</title>
       
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../registar.html">Registar</a></li>
            <li><a href="./indexCliente.html">Login Cliente</a></li>
            <li><a href="../empresa/indexEmpresa.html">Login Empresa</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>

<div class="container">
<img src="../estilos/logo.png" alt="Logo da Empresa" class="logo">
</div>

<h1>Área de Cliente</h1>

<?php
    echo "<h2>Bem-vindo, " . $_SESSION['nome'] . "</h2>";
?>

<div class="container">
    <input style="margin-left:350px;" title="Editar Perfil" type="button" value="?" onclick="window.open('perfil.php','_self')" class="custom-button">
    <input type="button" value="X" title="Logout" onclick="window.open('../logout.php','_self')" class="custom-button">
</div>

<form action="vender.php" method="post">
    <input type="hidden" name="categoria" value="1">
    <input type="submit" value="Vender" class="custom-button">
</form>

<form action="comprar.php" method="post">
    <input type="hidden" name="categoria" value="0">
    <input type="submit" value="Comprar" class="custom-button">
</form>

<form action="pesq.php" method="post">
    <input type="hidden" name="categoria" value="0">
    <input type="submit" value="Pesquisar" class="custom-button">
</form>

<form action="historico.php" method="post">
    <input type="hidden" name="tipo" value="0">
    <input type="submit" value="Histórico" class="custom-button">
</form>

</body>
</html>
