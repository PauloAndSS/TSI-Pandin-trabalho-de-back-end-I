<?php  
    $logado = @$_SESSION['logado'];

    $SITE_MENU = ['Principal' => ['home.php', ''],
    'Logar' => ['loginLogar.php', ''], 'Casdatrar'=> ['loginCadastrar.php', '']];

    $SITE_MENU_LOGADO = ['Perfil' => ['user.php', ''],'Sair' => ['./php/usuarios/deslogarUser.php', '']];

    function estaAtivo($pagina) {
        $paginaAtual = basename($_SERVER['PHP_SELF']);
        return $paginaAtual === $pagina ? 'ativo' : '';
    }

    function criarMenu($items) {
        $menu = "";
        foreach($items as $nome => $info) {
           $menu .= '<a class="btn '.estaAtivo($info[0]) .'" href="'.$info[0].'">'.$info[1].''.$nome.'</a>';
        }
        return $menu;
    }
    
    if($logado == 1 ){
        $menu = criarMenu($SITE_MENU_LOGADO);
    }
    else{
        $menu = criarMenu($SITE_MENU);
    }

    $stylesSite = '<link rel="stylesheet" href="../css/styles.css">';
    $headerSite = '<header><div class="dflex-center"><h1>'.pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME).'</h1></div><nav>'.$menu.'</nav></header>'; 
    $footer = '<footer class="dflex-center"><p>&copy; 2024 Pandin. Todos os direitos reservados.</p></footer></body></html>';
?>