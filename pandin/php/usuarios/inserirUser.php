<?php
    include '../conexao.php';
    include './functions.php';

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $email = $_POST["email"];

    usuarioInserir($login, $senha, $email, $conexao);
    
    mysqli_close($conexao);
?>