<?php
    require_once "functions.php";
    function showContent() { 

        $name= '';
        $email = '';
        $password = '';
        $repeatpassword = '';
    
    var_dump($_POST);
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $name= htmlspecialchars ($_POST['Name']);
            $email = htmlspecialchars ($_POST['Email']);
            $password = htmlspecialchars ($_POST['Password']);
            $repeatpassword = htmlspecialchars ($_POST['Repeatpassword']);

            if (($txtfile = fopen("../users/users.txt", "r")) !== false) {
                while (($data = fgetcsv($txtfile, 1000,"|")) !== false) {
                    if ($email == $data[0]) {
                        fclose($txtfile);

                        echo "email is already being used";
                        exit();
                    }
                }
            } 

           if ($password != $repeatpassword) {
                echo "password doesn't match";
                exit();
            }    

            $txtfile = fopen("../users/users.txt", "a");
            $teken = "\n";               
            fwrite($txtfile, $teken);

            $teken = "|";               
                fwrite($txtfile, $email);    
                fwrite($txtfile, $teken);
                fwrite($txtfile, $name);
                fwrite($txtfile, $teken);
                fwrite($txtfile, $password);
            fclose($txtfile);

            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            header ("Location: index.php?page=securepage");
            exit();
        }

        echo "              
            <section class='forms'>
            <div>
            <form method='POST' action='index.php'>
            <input type='hidden' name='page' value='Register'>
            Name: <input type='text' name='Name' value='$name'><br><br>
            Email: <input type='text' name='Email' value='$email'><br><br>
            Password: <input type='password' name='Password' value='$password'><br><br>
            Repeatpassword: <input type='password' name='Repeatpassword' value='$repeatpassword'><br><br>
            <input type='submit' name='thebutton' value='Login!'><br><br>
            </form>
            </div>
            </section>
            <!-- end content -->             
        ";
    }
?>