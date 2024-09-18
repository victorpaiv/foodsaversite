<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodSaver</title>
    
</head>
<body>
 <?php
    include '../includes/liga_bd.php';
    $sql = "SELECT * FROM cliente WHERE email='$_POST[email]'";
    $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
     
    if ($linha == NULL) {
        echo "<h2>Utilizaor inexistente</h2>";
        echo "<input type='button' class='custom-button' value='Voltar a tentar'
                onclick=window.open('index.html','_self')>";
    } else {
        if (password_verify($_POST['senha'], $linha['senha'])) {
            
            {
                echo "<h1>FoodSaver</h1>";
                echo "<h2>Bem vindo " . $linha['nome'] . "</h2>";
                $_SESSION['idcliente'] = $linha['idcliente'];
                $_SESSION['nome'] = $linha['nome'];
                echo "<h2>Utilizador validado</h2>";
                echo "<input type='button' class='custom-button' value='Continuar'
                onclick=window.open('/foodsaver/cliente/loginCliente2.php','_self')>";
            }
        } else {
            
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Senha: " . $_POST['senha'] . "<br>";
     
            echo "<h2>Senha incorreta</h2>";
            echo "<input type='button' class='custom-button' value='Voltar a tentar'
                onclick=window.open('../index.html','_self')>";
        }
    }
    mysqli_close($ligacao);
    ?>
</body>
</html>