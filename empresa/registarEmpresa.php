<!DOCTYPE html>
<html lang="pt">
<head>

<meta charset="utf-8">
<title>foodsaver</title>
</head>
<body>
<h1>FoodSaver</h1>
<h2>Registo de Empresa</h2>
<?php
include '../includes/liga_bd.php';
include '../includes/valida_foto.php';

// verifica se $uploadOk está a 0 por algum erro
if ($uploadOk == 0) {
    echo "O seu ficheiro não foi enviado.";
}else{  
    // se tudo está correto faz o upload do arquivo
    if (move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file)) {
        
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        // cria a instrução SQL para adicionar um registo na base de dados
        $sql = "INSERT INTO empresa (nome, nif, morada,foto, senha) VALUES ( 
            '" . $_POST['nome'] . "', 
            '" . $_POST['nif'] . "',  
            '" . $_POST['morada'] . "', 
            '" . $foto . "',
            '" . $senha . "'
        )";
        
        

        if (mysqli_query($ligacao, $sql)) {
            echo "<h2>Registo efetuado com sucesso!</h2>";
        } else {
            echo "Erro ao registar: " . mysqli_error($ligacao);
        }

        mysqli_close($ligacao);
    } else {
        echo "Erro ao fazer upload do ficheiro.";
    }
}
?>
<br>
<input type="button" value="Voltar ao menu" class="custom-button" onclick="window.open('../index.html', '_self')">
</body>
</html>
