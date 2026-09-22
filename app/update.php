<?php
require_once '../includes/functions.php';
require_once '../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Atualiza aluno</title>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <form action="" method="POST">
        <label for ="id">ID:</label>
        <input type="number" name="id" id="id"><br>
        <label for ="nome">Nome:</label>
        <input type = "text" name="nome" id="nome"><br>
        <label for ="turma">Turma:</label>
        <input type = "text" name="turma" id="turma"><br>
        <label for ="nasc">Nascimento</label>
        <input type = "date" name="nasc" id="nasc"><br>
        <label for ="ativo">Ativo?</label>
        <input type = "radio" name="ativo" id="sim" value="true">
        <label for="sim">SIM</label>
        <input type = "radio" name="ativo" id="nao" value="false">
        <label for="nao">NAO</label>
        <input type = "reset" value="limpar">
        <input type = "submit" value="atualizar">
    
    <?php if($_SERVER['REQUEST_METHOD'] == "POST"){
    atualizar($conexao, $_POST['id'], $_POST['nome'], $_POST['turma'], $_POST['nasc'], $_POST['ativo']);
    }
    include '../includes/footer.php';
    ?>
</body>
</html>
<?php 

?>