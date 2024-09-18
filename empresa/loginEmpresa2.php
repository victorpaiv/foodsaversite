<?php
    session_start();

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
	//validação das variaveis de sessão
	if((!isset ($_SESSION['idempresa']) == true) and (!isset ($_SESSION['nome']) == true))
	{
		echo "<h2>Erro no acesso!</h2>";
		echo "<meta http-equiv='refresh' content='2;url=index.html'>";

	}
 ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> lukinhas</title>
    <link rel="stylesheet" href="styles/styleslogin2.css">
</head>
<body>
    <?php
   echo "<h1>OLZ -Comprar e Vender Tudo </h1>";
   echo "<h2> Bem_vindo " .$_SESSION['nome'];
    ?>
        <input style="margin-left:350px;" title="Editar Perfil" type="button" value="?"
        onclick="window.open('perfil.php','_self')" class="custom-button">
        <input type="button" value="X" title="Logout"
        onclick="window.open('../logout.php','_self')" class="custom-button">
        
</h2><br/><br/>
 
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

</html>