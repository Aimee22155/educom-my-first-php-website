<?php
   
   function Route(){
        if (isset ($_GET['page']))
        {
        return ($_GET['page']);
        }
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
                    <div class="block-home"><a href="index.php?page=HOME">HOME</a></div>
                    <div class="block-home"><a href="index.php?page=About">ABOUT</a></div>
                    <div class="block-home"><a href="index.php?page=Contact">CONTACT</a></div>
                    <div class="block-home"><a href="index.php?page=Inlog">INLOGGEN</a></div>
                    <div class="block-home"><a href="index.php?page=Register">REGISTREREN</a></div>
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