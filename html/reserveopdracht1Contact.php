<section class="forms">
            <div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Naam: <input type="text" name="Naam" value="<?php echo $name;?>"><br><br>
                Email: <input type="text" name="Email"><br><br>
                Bericht: <input type="text" name="Bericht"><br><br>
                <input type="submit" name="thebutton" value="Save!">
            </form></div>

        <?php
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = htmlspecialchars($_POST['Naam']);
              $email = htmlspecialchars ($_POST['Email']);
              $bericht = htmlspecialchars ($_POST['Bericht']);
              
              if (empty($name)) {
                echo '<div class="error">Name is missing!</div>';
              } 
              
              if (empty($email)) {
                echo '<div class="error">Email is missing!</div>';
              }
         
              if (empty($bericht)) {
                echo '<div class="error">Bericht is missing!</div>';
              }

            $file = fopen("output.html", "a");
            $content = "<div class='output-html'>
                            <p> Naam: $name</p>
                            <p> Email: $email</p>
                            <p> Bericht: $message</p>
                        </div>";
            fwrite($file, $content); 
            fclose($file); 
                     
          }

        ?>
         
         </section>
        <!-- end content-->
        
        <br>
           