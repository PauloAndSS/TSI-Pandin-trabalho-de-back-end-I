<?php
    include '../mensErro.php';

    function usuarioInserir($login, $senha, $email, $conexao){
        $sql = "INSERT INTO `Usuarios` (`id_user_PK`, `username`, `password`, `email`, `created_at`) VALUES (NULL,'$login','$senha','$email',current_timestamp());";

        $path = "../../loginLogar.php";
        
        if (mysqli_query($conexao, $sql)) {
            erroGetMensage("Usuário cadastrado com sucesso!", $path);
        } else {
            $msgErro =  "Erro ao cadastrar usuário: " . mysqli_error($conexao);
            erroGetMensage($msgErro, $path);
        }
    }

    function atenticarUser($login, $senha, $conexao){
        $sql = "SELECT * FROM `Usuarios` WHERE (`username` LIKE '$login' OR `email` LIKE '$login') AND `password` LIKE '$senha'";

        $result = mysqli_query($conexao, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION["nameUser"] = $user["username"];
            $_SESSION["emailUser"] = $user["email"];
            $_SESSION["ID_DB"] = $user["id_user_PK"];
            $_SESSION["logado"] = 1;
            return $user["id_user_PK"];
            
        } else {
            $_SESSION["logado"] = 0;
            return 0;
        }
    }

    function usuarioDeletar($login, $senha, $conexao){
        $id = atenticarUser($login, $senha, $conexao);

        if($id == 0){
            erroGetMensage("senha incorreta !", $path);
            return;
        }

        $sql = "DELETE FROM `Usuarios` WHERE `Usuarios`.`id_user_PK` LIKE  $id";

        $path = "../../home.php";
        
        if (mysqli_query($conexao, $sql)) {
            erroGetMensage("Usuário deletado com sucesso!", $path);
        } else {
            $msgErro =  "Erro ao deletar usuário:" . mysqli_error($conexao);
            erroGetMensage($msgErro, $path);
        }
    }

    function erroGetMensage ($msg,$path){
        header("Location: $path?error=$msg");
    }
?>