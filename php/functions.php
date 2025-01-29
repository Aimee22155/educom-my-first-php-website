<?php
   
   function getpage(){
        if (isset ($_GET['page'])){
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
                <div class="block-home"><a href="index.php?page=phpHOME">HOME</a></div>
                <div class="block-home"><a href="index.php?page=phpAbout">ABOUT</a></div>
                <div class="block-home"><a href="index.php?page=phpContact">CONTACT</a></div>
                <div class="block-home"><a href="index.php?page=phpInlog">INLOGGEN</a></div>
                <div class="block-home"><a href="index.php?page=phpRegister">REGISTREREN</a></div>
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