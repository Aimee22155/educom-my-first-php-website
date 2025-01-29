<?php

    require_once "functions.php";
    $page= getpage();

    switch ($page) {
        case 'phpHOME':
            require_once "phpHOME.php";
            break;
        case 'phpAbout':
            require_once "phpAbout.php";
            break; 
        case 'phpContact':
            require_once "phpContact.php";
            break;
        case 'phpInlog':
            require_once "phpInlog.php";
            break;
        case 'phpcheck':
            require_once "check.php";
            break;
        case 'phpsecure':
            require_once "securepage.php";
            break;
        case 'phpRegister':
            require_once "phpRegister.php";
            break;
        default:
            require_once "phpHOME.php";      
    }



    
    showStartHtmlDoc();
    showContent();
    showEndhtmlDoc();
?>


    