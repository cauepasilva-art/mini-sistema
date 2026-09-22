<?php
require_once __DIR__ . '/../includes/functions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = consulta_user($conexao, $_POST['email']);

    if ($usuario && $_POST['email'] === $usuario['email'] && $_POST['senha'] === $usuario['senha']) {
        $_SESSION['id'] = $usuario['id'];
        header('Location: ../index.php');
        exit();
    }

    $erro = 'Usuário ou senha inválidos';
}
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
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Faça seu login</h1>

        <?php if (isset($erro)) : ?>
            <p><?php echo $erro; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br>
            <input type="submit" value="Entrar">
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>