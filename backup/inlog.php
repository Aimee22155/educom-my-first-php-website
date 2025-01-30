<?php
    session_start();
    require_once "functions.php";
    function showContent() { 

        $email= '';
        $password= '';
        $username= '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = $_POST['username'];
        }

        if ($username == "test" && $password == "1234"){
            $_SESSION['loggedin'] = true;
            header("Location: index.php?page=securepage");
            exit();
        } else {
            echo "invalid username or password.";
        }
    
        echo "              
            <section class='forms'>
            <div>
            <form method='POST' action='index.php?page=Inlog'>
            Email: <input type='text' name='Email' value='$email'><br><br>
            Password: <input type='text' name='Password' value='$password'><br><br>
            <input type='submit' name='thebutton' value='Login!'><br><br>
            </form>
            </div>
            </section>
            <!-- end content -->             
        ";
    }
?>