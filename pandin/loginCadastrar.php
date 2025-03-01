<?php
    session_start();
    include './php/config.php';
    include './php/siteSet.php';

    $title = 'Cadastrar';

    createHeader($title ,$stylesSite ,$headerSite );

$error = @$_GET["error"];
if($error != "")
    $msg_erro = '<div class="erro"><p>'.$error.'</p></div>';
    else
    $msg_erro = '';
?>

    <h1>Formulário</h1>
    <form class="form-control" method="POST" action="./php/usuarios/inserirUser.php">
        <input type="text" placeholder="nome de usuário" name="login" id="login" required>
        <input type="email" placeholder="email" name="email" id="email" required>
        <input type="password" placeholder="Senha" name="senha" required>
        <button type="submit" class="btn ativo">Enviar</button>
    </form>

<?php
    echo $msg_erro;
    criarRodape();
?>