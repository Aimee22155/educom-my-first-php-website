<?php
    require_once "Formfunctions.php";
    session_start();

    function getRoute() {
        $route = 'HOME';

        // Controleer of een pagina is gepost
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['page'])) {
            return $_POST['page'];
        }        

        // Verwerking registratieformulier
        $registerData = getRegisterData();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Register!'])) {
            $registerData = getRegisterData();

            if (!checkRegisterDataComplete($registerData)) {
                return 'Register'; 
            }

            if (checkEmailExist($registerData['email'])) {
                return 'Register'; 
            }

            if (!checkPassword($registerData['password'], $registerData['repeatpassword'])) {
                return 'Register'; 
            }

            if (registerUserData($registerData['name'], $registerData['email'], $registerData['password'], $registerData['repeatpassword'])) {
                startSession($registerData['email'], $registerData['name']); 
                return 'securepage'; 
            }

            return 'Register'; 
        }

        // Verwerking inlogformulier
        $inlogData = getInlogData();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Login!'])) {
            $inlogData = getInlogData();

            if (!checkInlogDataComplete($inlogData)) {
                return 'Inlog'; 
            }

            if (checkInlogExist($inlogData['email'], $inlogData['password'])) {
                startSession($registerData['email'], $registerData['password']); 
                return 'securepage'; 
            }

            return 'Inlog'; 
        }
        
        // Check welke pagina
        if (isset($_GET['page'])) {
            return $_GET['page'];
        }

        return $route;
    }

    function showStartHtmlDoc() {
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <title>Website Aimee</title>
                <link rel="stylesheet" href="../css/website.css"> 
            </head>

            <body> 
                <!-- begin header -->
                <header class="header">
                    <div><h1>Aimee website</h1></div>        
                </header>
                <!-- end header -->

                <!-- begin content -->
                <section class="content">
                    <div class="block-home"><a href="index.php?page=HOME">HOME</a></div>
                    <div class="block-home"><a href="index.php?page=About">ABOUT</a></div>
                    <div class="block-home"><a href="index.php?page=Contact">CONTACT</a></div>
                    <div class="block-home"><a href="index.php?page=Inlog">INLOGGEN</a></div>
                    <div class="block-home"><a href="index.php?page=Register">REGISTREREN</a></div>
                </section>
            ';
    }

    function showEndHtmlDoc() {
        echo '
                <!-- begin footer-->
                    <footer class="footer">
                    <div><p>&copy; 2025 Aimee Heusschen</p></div> 
                    </footer>
                <!-- end footer-->
            </body>
        </html>
        ';
    }
?>
