<?php
    include '../conexao.php';
    include './functions.php';
    session_start();

    $login = $_SESSION["nameUser"];
    $senha = md5($_POST["senha"]);

    usuarioDeletar($login, $senha, $conexao);
    
    mysqli_close($conexao);
?>