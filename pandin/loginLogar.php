<?php
    session_start();
    include './php/config.php';
    include './php/siteSet.php';

    $title = 'Cadastrar';

    createHeader($title ,$stylesSite ,$headerSite );

$error = @$_GET["error"];
if($error != "")
    $msg_erro = '<div class="erro">
    <ion-icon name="alert-circle">'.$error.'</p>
    </div>';
    else
    $msg_erro = '';
?>

    <h1>Formulário</h1>
    <form class="form-control" method="POST" action="./php/usuarios/logarUser.php">
        <input type="text" placeholder="nome de usuário ou email" name="login" id="login">
        <input type="password" placeholder="Senha" name="senha">
        <button type="submit" class="btn ativo">Enviar</button>
    </form>

<?php
    echo $msg_erro;
    criarRodape();
?>