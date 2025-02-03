<?php
    require_once "functions.php";
    function showContent() {
        
        $name = '';
        $email = '';
        $message = '';

        if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
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
            <section class='forms'>
             <div>
              <form method='POST' action='index.php'>
               Name: <input type='text' name='Name' value='$name' placeholder='Type something'><br><br>
               Email: <input type='text' name='Email' value='$email' placeholder='Type something'><br><br>
               Message: <input type='text' name='Message' value='$message' placeholder='Type something'><br><br>
               <input type='submit' name='thebutton' value='Save!'>
              </form>
             </div>
            </section>
            <!-- end content -->             
        ";
    }
?>