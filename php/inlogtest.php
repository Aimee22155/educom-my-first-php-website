<?php
    session_start();
    require_once "functions.php";
    function showContent() { 

        $email= '';
        $password= '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars ($_POST['email']);
            $password = htmlspecialchars ($_POST['password']);     
            $_SESSION['email'] = $email; 

            if ($email == "test@gmail.com" && $password == "1234") {
                $_SESSION['loggedin'] = true;
                header("Location: index.php?page=securepage");
                exit();
            } else {
                echo "Invalid email or password.";
            }
        }

        echo'
            <section class="forms">
                <div>
                <form method="POST" action="index.php?page=Inlog">
                   Email: <input type="text" name="email" placeholder="email" required><br><br>
                   Password: <input type="password" name="password" placeholder="password"  required><br><br>
                   <button type="submit">Login</button>
                </form>
                </div>
            </section> 
        ';
    }
?>