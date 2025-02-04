<?php
    require_once "functions.php";
    function showContent() {   
        echo '
            <section class="forms">
                <div>
                <form method="POST" action="index.php">
                    <input type="hidden" name="page" value="Inlog">
                    Email: <input type="text" name="email" placeholder="Type something" required><br><br>
                    Password: <input type="password" name="password" placeholder="Type something" required><br><br>
                    <button type="submit">Login!</button>
                </form>
                </div>
            </section>           
        ';
    }
?>
