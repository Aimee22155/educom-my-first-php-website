<?php
    require_once "Formfunctions.php";
    session_start();

    function getRoute(){

        $route = 'HOME';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['page'])) {
            return ($_POST['page']);
        }

        echo 'test';

        //register
        $registerData = getRegisterData();
        $dataComplete = checkRegisterDataComplete($registerData);
        
        echo 'test2';
            
            if (!$dataComplete) {
                return 'Register';
            }

            echo 'test3';

        $email = $registerData['Email'];
        if (checkEmailExist($email)) {
            return 'Register';
        }
        
        $password = $registerData['Password'];
    	$repeatpassword = $registerData['Repeatpassword'];
        if(checkPassword($password, $repeatpassword)) {
            return 'Register';
        }

        $password = $registerData['Password'];
        $repeatpassword = $registerData['Repeatpassword'];
        if(checkPassword($password, $repeatpassword)) {
            return 'Register';
        }

        $name = $registerData['Name'];
        $email = $registerData['Email'];
        $password = $registerData['Password'];
        $repeatpassword = $registerData['Repeatpassword'];
        if (registerUserData($name, $email, $password, $repeatpassword)) {
            return 'Register';
        }

        $email = $registerData['Email'];
        $password = $registerData['Password'];
        if(startSession($email, $password)) {
            return 'Register';
        }

       //login
       $InlogData = getInlogData();
       $dataInlogComplete = checkInlogDataComplete($InlogData);

        if (!$dataInlogComplete) {
            return 'Inlog';
        }

        $email = $InlogData['Email']; 
        $password = $InlogData ['Password'];
        if (checkInlogExist($email, $password)) {
            return 'Inlog';
        }

        $email = $InlogData['Email']; 
        $password = $InlogData ['Password'];
        if(startSession($email, $password)) {
            return 'Inlog';
        }

        ////page switch/////
        if (isset ($_GET['page'])) {
            return ($_GET['page']);
        }
        return $route;

    }

    function showStartHtmlDoc(){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <title>Website Aimee</title>
                <link rel="stylesheet" href="../css/website.css"> 
            </head>

            <body> 
                <!-- begin header -->
                <header class="header">
                    <div><h1>Aimee website</h1></div>        
                </header>
                <!-- end header -->

                <!-- begin content -->
                <section class="content">
                    <div class="block-home"><a href="index.php?page=HOME">HOME</a></div>
                    <div class="block-home"><a href="index.php?page=About">ABOUT</a></div>
                    <div class="block-home"><a href="index.php?page=Contact">CONTACT</a></div>
                    <div class="block-home"><a href="index.php?page=Inlog">INLOGGEN</a></div>
                    <div class="block-home"><a href="index.php?page=Register">REGISTREREN</a></div>
                </section>
            ';
    }    


   function showEndhtmlDoc(){
    echo '
            <!-- begin footer-->
                <footer class="footer">
                <div><p>&copy; 2025 Aimee Heusschen</p></div> 
                </footer>
            <!-- end footer-->
        </body>
    </html>
    ';
   }
?>
