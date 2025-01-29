<?php
    session_start();
        //zet de variabele zo dat het script het herkent als niet-ingelogd
        $_SESSION['login'] = "0";

    echo "Je bent nu uitgelogd<br /><br />";
   
    echo'
    <a href="index.php?page=phpAbout">Terug naar HOME</a>';

?>
