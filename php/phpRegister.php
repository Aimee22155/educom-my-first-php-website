<?php
    require_once "functions.php";
    function showContent() {
    
    $name= ''; 
    $email = '';
    $password = '';
    $repeatpassword = '';

    
    



    
    echo "              
        <section class='forms'>
            <div>
            <form method='POST' action=''>
            Name: <input type= 'text' name='Name' value='$name'><br><br>
            Email: <input type='text' name='Email' value='$email'><br><br>
            Password: <input type='text' name='Password' value='$password'><br><br>
            Repeat Password: <input type='text' name='Repeat Password' value='$repeatpassword'><br><br>
            <input type='submit' name='thebutton' value='Register!'>
            </form>
            </div>
        </section>
        <!-- end content -->             
    ";
    }
    