<?php
    function showpage(){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <title>Website Aimee</title>
                <link rel="stylesheet" href="../css/website.css"> 
            </head>

        ';

   echo '
            <body> 
                <!-- begin header -->
                <header class="header">
                        <div><h1>Aimee website</h1></div>
                </header>
                <!-- end header -->
       
                <br>

                <!-- begin content -->
                <section class="content">
                    <div class="block-home"><a href="phpHOME.php">HOME</a></div>
                    <div class="block-home"><a href="phpAbout.php">ABOUT</a></div>
                    <div class="block-home"><a href="phpContact.php">CONTACT</a></div>
                </section>

                <section class="introduction">
                <div><blockquote>
                        Welkom op de website van Aimee Heusschen. <br> 
                        Dit is mijn eerste website. Kijk gerust even rond!
                    </blockquote></div>
                </p>
                <!-- end content-->
    
    
                    <br>

                <!-- begin footer-->
                <footer class="footer">
                <div><p>&copy; 2025 Aimee Heusschen</p></div> 
                </footer>
                <!-- end footer-->

            </body>
    
        </html>
       '; 
      
    }
    showpage();
?>
