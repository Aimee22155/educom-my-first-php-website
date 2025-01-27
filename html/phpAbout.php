<?php
    function about() {
   
   echo'
    <!DOCTYPE html>
    <html>
    <head>
         <title>Website Aimee</title>
         <link rel="stylesheet" href="../css/website.css"/>
    </head>
    '; 
   
    echo'
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
           <div><p>Demografie<br>
            Ik ben een vrouw van 22 jaar<br>
            Ik ben 1,54m lang en kom uit Nederland<br>
            Ik woon in Sint Geertruid, een klein dorp in de buurt van Maastricht.
            </p>
            <p>Opleidingen<br>
            Mijn middelbareschoolniveau is havo<br>
            Vervolgens bij ik bij Zuyd Hogeschool bedrijfskunde gaan studeren<br>
            Na mijn opleiding bij Zuyd ben ik de pre-master Information management and Business Intelligence gaan doen.
            </p>
            <p>Hobbies<br>
            Mijn hobbies zijn lezen en koken. Het liefst aziatisch.</p></div>
        </section>
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
    about ();
?>