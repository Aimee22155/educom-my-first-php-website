<?php
    require_once "functions.php";
    function showContent() { 

        $email = '';
        $password = '';
    
        if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $email = htmlspecialchars ($_POST['Email']);
            $password = htmlspecialchars ($_POST['Password']);

    }
    echo "              
        <section class='forms'>
         <div>
          <form method='POST' action='check.php'>
           Email: <input type='text' name='Email' value='$email'><br><br>
           Password: <input type='text' name='Password' value='$password'><br><br>
           <input type='submit' name='thebutton' value='Login!'>
          </form>
         </div>
        </section>
        <!-- end content -->             
    ";
    }
?>