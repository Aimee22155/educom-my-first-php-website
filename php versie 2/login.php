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
            
            if (($txtfile = fopen("../users/users.txt", "r")) !== false) {
                while (($data = fgetcsv($txtfile, 1000,"|")) !== false) {
                    if ($email == $data[0] && $password == $data[2]) {
                        fclose($txtfile);

                        $_SESSION['loggedin'] = true;
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $data[1];
                        require_once "securepage.php";
                        return;
                        exit();
                    }
                }               
                echo "Invalid email or password.";
                fclose($txtfile);
            }      
        }

        echo'
            <section class="forms">
                <div>
                <form method="POST" action="index.php?page=Inlog">
                   Email: <input type="text" name="email" placeholder="email" required><br><br>
                   Password: <input type="password" name="password" placeholder="password" required><br><br>
                   <button type="submit">Login</button>
                </form>
                </div>
            </section> 
        ';
    }
?>