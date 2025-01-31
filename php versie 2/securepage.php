<?php
   
   require_once "functions.php";
         
    // if ($_SESSION['loggedin'] !== true) {
    //     require_once "login.php";
    //     return;
    //     exit ();
       
    // }
              
        echo 'Welkom, dit is de beveiligde pagina. Je bent ingelogd als ' . htmlspecialchars($_SESSION["email"]) .".<br /><br />";
        echo '<div class="button"><a href="index.php?page=HOME">Logout ' . htmlspecialchars($_SESSION["name"]) . "</a></div>";
   
?>