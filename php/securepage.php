<?php
    require_once "functions.php";
    function showContent() {

        if ($_SESSION['login'] != "1"){
                header ('location:phpInlog.php');
                exit ();
            }

        echo "Dit is de beveiligde pagina. Je bent ingelogd als " . htmlspecialchars($_SESSION['login-naam']) .".<br /><br />";
        echo '<a href="uitloggen.php">Uitloggen</a>';
   
    }
?>



       