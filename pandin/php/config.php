<?php
    function createHeader($title = 'Document',$stylesSite = '0',$headerSite = '0'){
        $head = '<!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>'.$title.'</title>'.$styles.'</head><body>';
        $styles = $stylesSite;
        $header = $headerSite;

        $result = $head.$styles.$header;

        echo $result;
    }

    function createFooter($footer){
        echo $footer;
    }

    function restridoDeslog(){
        if ($_SESSION["logado"] == NULL || $_SESSION["logado"] == 0) {
            header("Location: loginLogar.php");
        } 
    }
?>