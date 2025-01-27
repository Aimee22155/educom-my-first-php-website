<?php
    "
        <body> 
            <!-- begin header -->
            <header class='header'>
                <div><h1>Aimee website</h1></div>
            </header>
            <!-- end header -->
                
            <br>
            
            <!-- begin content -->
            <section class='content'>
                <div class='block-home'><a href='phpHOME.php'>HOME</a></div>
                        <div class='block-home'><a href='phpAbout.php'>ABOUT</a></div>
                        <div class='block-home'><a href='phpContact.php'>CONTACT</a></div>
            </section>
            
            <section class='forms'>
            <div>
            <form method='POST' action=''>
                Name: <input type='text' name='Name' value='<?php echo $name?>'><br><br>
                Email: <input type='text' name='Email' value='<?php echo $email?>'><br><br>
                Message: <input type='text' name='Message' value='<?php echo $message?>'><br><br>
                <input type='submit' name='thebutton' value='Save!'>
            </form>
            </div>

            </section>

            <!-- end content-->
            
            <br>
            
            <!-- begin footer-->
            <footer class='footer'>
                <div><p>&copy; 2025 Aimee Heusschen</p></div> 
            </footer>
            <!-- end footer-->
    
        </body>
        </html>
    ";
    ?>