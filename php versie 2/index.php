<?php
    require_once "functions.php";
    $route= Route();

    switch ($route) {
        case 'HOME':
            require_once "HOME.php";
            break;
        case 'About':
            require_once "About.php";
            break; 
        case 'Contact':
            require_once "Contact.php";
            break;
        case 'Inlog':
            require_once "login.php";
            break;  
        case 'securepage';
            include "securepage.php";
            break;    
        case 'Register':
            require_once "Register.php";
            break;
        default:
            require_once "HOME.php";      
    }
   
    showStartHtmlDoc();
    showContent();
    showEndhtmlDoc();
?>


    