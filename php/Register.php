<?php
    require_once "functions.php";
    function showContent() { 

    $name= '';
    $email = '';
    $password = '';
    $repeatpassword = '';
    
        if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $name= htmlspecialchars ($_POST['Name']);
            $email = htmlspecialchars ($_POST['Email']);
            $password = htmlspecialchars ($_POST['Password']);
            $repeatpassword = htmlspecialchars ($_POST['Repeat password']);

        }
        echo "              
            <section class='forms'>
            <div>
            <form method='POST' action='index.php'>
            Name: <input type='text' name='Name' value='$name'><br><br>
            Email: <input type='text' name='Email' value='$email'><br><br>
            Password: <input type='text' name='Password' value='$password'><br><br>
            Repeatpassword: <input type='text' name='Repeat password' value='$repeatpassword'><br><br>
            <input type='submit' name='thebutton' value='Login!'><br><br>
            </form>
            </div>
            </section>
            <!-- end content -->             
        ";
    }
?>