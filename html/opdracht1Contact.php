<!DOCTYPE html>

<?php
     
        $name = '';
        $email = '';
        $message = '';

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
          
            $name = htmlspecialchars($_POST['Name']);
            $email = htmlspecialchars($_POST['Email']);
            $message = htmlspecialchars($_POST['Message']);
            
            $hasErrors = false;
            
        if (empty($name)) {
            echo '<div class="error">Name is missing!</div>';
            $hasErrors = true;
        } 
    
        if (empty($email)) {
                echo '<div class="error">Email is missing!</div>';
                $hasErrors = true;
        }
    
        if (empty($message)) {
                echo '<div class="error">Message is missing!</div>';
                $hasErrors = true;
        } 

        }
    ?>

<html>
    <head>
         <title>Website Aimee</title>
         <link rel="stylesheet" href="../css/website.css"/>
    </head>
    <body> 
        <!-- begin header -->
        <header class="header">
            <div><h1>Aimee website</h1></div>
        </header>
        <!-- end header -->
            
        <br>
        
        <!-- begin content -->
        <section class="content">
            <div class="block-home"><a href="opdracht1HOME.html">HOME</a></div>
            <div class="block-home"><a href="opdracht1About.html">ABOUT</a></div>
            <div class="block-home"><a href="opdracht1Contact.php">CONTACT</a></div>
        </section>
        
        <section class="forms">
        <div>
        <form method="POST" action="">
            Name: <input type="text" name="Name" value="<?php echo $name?>"><br><br>
            Email: <input type="text" name="Email" value="<?php echo $email?>"><br><br>
            Message: <input type="text" name="Message" value="<?php echo $message?>"><br><br>
            <input type="submit" name="thebutton" value="Save!">
        </form>
        </div>

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