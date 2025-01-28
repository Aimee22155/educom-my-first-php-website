<?php
    require_once "functions.php";
    showStartHtmlDoc();
    function showContent() {
        
        $name = '';
        $email = '';
        $message = '';

        if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        
            $name = htmlspecialchars($_POST['Name']);
            $email = htmlspecialchars($_POST['Email']);
            $message = htmlspecialchars($_POST['Message']);
                
            $hasErrors = false;
            
        if (empty($name)) {
            echo "<div class='error'>Name is missing!</div>";
            $hasErrors = true;
        } 
    
        if (empty($email)) {
                echo  "<div class='error'>Email is missing!</div>";
                $hasErrors = true;
        }
    
        if (empty($message)) {
                echo "<div class='error'>Message is missing!</div>";
                $hasErrors = true;
        } 
    }
     
        echo "
            <body>               
                    <section class='forms'>
                    <div>
                    <form method='POST' action=''>
                        Name: <input type='text' name='Name' value='$name'><br><br>
                        Email: <input type='text' name='Email' value='$email'><br><br>
                        Message: <input type='text' name='Message' value='$message'><br><br>
                        <input type='submit' name='thebutton' value='Save!'>
                    </form>
                    </div>

                    </section>

            </body>
        ";
    }
    showContent();
    showEndhtmlDoc();
?>