<?php
    session_start();
        
        $email = '';
        $password = '';
        
        $gebruikers = array(
            'test@gmail.com' => 'test'
        );

        //kijk of de gebruiker bestaat, zoja:
        if(isset($gebruikers[$email]))
            {
                //als het wachtwoord gelijk is aan wat er in de variabele zit:
                if($password == $gebruikers[$email])
                    {
                        //zet variabele zo dat het script het herkent als ingelogd
                        $_SESSION['login'] = "1";
                        
                        //zet naam in variabele, zodat het later nog gebruikt kan worden
                        $_SESSION['login-naam'] = $email;
                        
                        //laat de beveiligde pagina zien
                        require_once "phpsecure";
                    }
                //als het wachtwoord niet klopt:
                else
                    {
                      echo 'Password is incorrect. Try again.';
                    }
            }
        //als de gebruikersnaam niet bekend is:
        else
            {
             echo 'The email is not known to us.';
            }
?>
