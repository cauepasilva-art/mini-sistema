
<?php include __DIR__. '/../includes/header.php' ?>
<?php 
//verifica sessão e/ou cria uma nova
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
//limpa a sessão e destroi
$_SESSION = array();
session_destroy();
//redireciona para index.php
header("Location: ../index.php");
exit();

?>