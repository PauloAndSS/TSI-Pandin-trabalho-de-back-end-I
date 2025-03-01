<?php
    include '../conexao.php';
    include './functions.php';

    session_start();

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    if(atenticarUser($login, $senha, $conexao) > 0){
        header("Location: ../../home.php");
    } else {
        header("Location: ../../loginLogar.php?error=senha ou usuario incorretos");
    }
    
    mysqli_close($conexao);
?>