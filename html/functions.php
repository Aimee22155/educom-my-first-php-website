<?php
   function showStartHtmlDoc(){
    echo '
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
                <div class="block-home"><a href="phpHOME.php">HOME</a></div>
                <div class="block-home"><a href="phpAbout.php">ABOUT</a></div>
                <div class="block-home"><a href="phpContact.php">CONTACT</a></div>
            </section>
            <!-- end content -->
        </body>
    </html>  
    ';
   }    
   
   function showEndhtmlDoc(){
    echo '
    <html>
        <body>
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