 <?php

    function getRegisterData() {
        $data = [
            'name' => getFormFieldValue('Name'),
            'email' => getFormFieldValue('Email'),
            'password' => getFormFieldValue('Password'),
            'repeatpassword' => getFormFieldValue('Repeatpassword'),
        ];
        return $data;
    }

    function getFormFieldValue($field) {
        if (!isset($_POST[$field])) {
            return '';
        }
     
        $value = $_POST[$field];
        return htmlspecialchars($value);
    }

    function checkRegisterDataComplete($registerData){
        //nog even vullen met funcitonaliteit
        //array geen lege waarde
    }

    function checkEmailExist($email) {
        if (($txtfile = fopen("../users/users.txt", "r")) !== false) {
            while (($data = fgetcsv($txtfile, 1000,"|")) !== false) {
                if ($email == $data[0]) {
                    fclose($txtfile);

                    return false;
                }
            }
            return true;
        } 
        return false;
    }

    function checkPassword($password, $repeatpassword) {
        if ($password != $repeatpassword) {
            return false;
        }    
        return true;
    }

    function registerUserData($name, $email, $password, $repeatpassword) {
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
    }

    function startSession ($email, $name) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
    }

////inlog

    function getInlogData() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);     
            $_SESSION['email'] = $email; 
            }
    }   

    function checkInlogDataComplete($InlogData){
        //nog even vullen met funcitonaliteit
        //array geen lege waarde
    }

    function checkInlogExist($email, $password) {
        if (($txtfile = fopen("../users/users.txt", "r")) !== false) {
            while (($data = fgetcsv($txtfile, 1000, "|")) !== false) {
                if ($email == $data[0] && $password == $data[2]) {
                    fclose($txtfile);

                    return true;
                }
            }               
            fclose($txtfile);
            return false;
        } 
        return false;     
    }

?>