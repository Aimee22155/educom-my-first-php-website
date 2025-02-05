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
                    <form method='POST' action='index.php'>
                    <input type='hidden' name='page' value='Register'>
                        Name: <input type='text' name='Name' value='$name' placeholder='Type something' required><br><br>
                        Email: <input type='text' name='Email' value='$email' placeholder='Type something' required><br><br>
                        Password: <input type='password' name='Password' value='$password' placeholder='Type something' required><br><br>
                        Repeatpassword: <input type='password' name='Repeatpassword' value='$repeatpassword'placeholder='Type something' required><br><br>
                    <input type='submit' name='thebutton' value='Register!'><br><br>
                    </form>
                </div>
            </section>
            <!-- end content -->             
        ";
    }
?>