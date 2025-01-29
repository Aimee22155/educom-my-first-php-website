<?php
    require_once "functions.php";

    if ($_SESSION['login'] != "1")
        {
            header ('location:phpInlog.php');
            exit ();
        }
?>

<!DOCTYPE html>
<html>
    <body>
    Dit is de beveiligde pagina. <?php echo 'Je bent ingelogd als' . $_SESSION['login-naam'] . "."; ?><br /><br />
        <a href="uitloggen.php">Uitloggen</a>
        </body>
</html>



       