<?php
require_once __DIR__. '/../includes/functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <main>
        <h1>Faça seu login</h1>
        <form action="" method="POST">
        <label for ="email">Email:</label>
        <input type = "email" name="email" id="email" required><br>
        <label for ="senha">Senha:</label>
        <input type ="password" name="senha" id="senha" required><br>
        <input type = "submit" value="cadastrar">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = consulta_user($conexao, $_POST['email']);
        if($_POST['email'] == $usuario['email'] && $_POST['senha'] == $usuario['senha']){
            $_SESSION['id'] = $usuario['id'];
            echo"Login OK, Redirecionando para a página inicial";
            sleep(3);
            header("Location: ../index.php");
            exit();
        } else{
            echo"Usuário ou senha inválidos";
        }
    }
    include '../includes/footer.php';
    ?>
    </main>
</body>
</html>