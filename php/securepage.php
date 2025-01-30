<?php
     session_start();
     require_once "functions.php";
     function showContent() { 

        if ($_SESSION['loggedin'] !== true) {
                        header ('Location: index.php?page=Inlog');
                        exit ();
        }
              
        echo 'Dit is de beveiligde pagina. Je bent ingelogd als ' . htmlspecialchars($_SESSION["email"]) .".<br /><br />";
        echo '<div class="button"><a href="index.php?page=logout">Logout ' . htmlspecialchars($_SESSION["name"]) . "</a></div>";
    }
?>