<?php
   session_start();
   function postRoute(){
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['page'])) {
            $_SESSION['page'] = $_POST['page'];
        }
        // Fallback naar HOME als er geen pagina is ingesteld
        return $_SESSION['page'] ?? 'HOME';
    }

    function showStartHtmlDoc(){
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
                    <form method="POST" action="index.php">
                        <input type="hidden" name="page" value="HOME">
                       <button type="submit">HOME</button></div>
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="page" value="About">
                        <button type="submit">ABOUT</button>
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="page" value="Contact">
                        <button type="submit">CONTACT</button>
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="page" value="Inlog">
                        <button type="submit">INLOGGEN</button>
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="page" value="Register">
                        <button type="submit">REGISTREREN</button>
                    </form>
                </section>
            ';
    }    

   function showEndhtmlDoc(){
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
