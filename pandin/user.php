<?php 
    session_start();
    include './php/config.php';
    include './php/siteSet.php';

    restridoDeslog();   

    createHeader($title ,$stylesSite ,$headerSite );

    print_r($_SESSION);

    $error = @$_GET["error"];
    if($error != "")
    $msg_erro = '<div class="erro"><p>'.$error.'</p></div>';
    else
    $msg_erro = '';

    echo '<form action="./php/usuarios/deletUser.php" method="POST"><label for="senha">Digite a senha:</label><input type="password" id="senha" name="senha" required><button type="submit">deletar Usuário</button></form>';
    
    criarRodape();
?>
