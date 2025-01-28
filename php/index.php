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
        default:
            require_once "phpHOME.php";      
    }
?>


    