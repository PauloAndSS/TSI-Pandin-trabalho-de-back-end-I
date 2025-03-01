<?php
    session_start();
    include './php/config.php';
    include './php/siteSet.php';

    $title = 'Panda';

    createHeader($title ,$stylesSite ,$headerSite );
?>
    
<?php
    echo '</body>';
    createFooter($footer);
?>