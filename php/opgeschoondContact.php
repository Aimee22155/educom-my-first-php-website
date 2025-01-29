<?php
    require_once "functions.php";
    function showContent() {
        
        showMessages();
            $name = getPostValue('Name');
            $email = getPostValue('Email');
            $message = getPostValue('Message');
     
        echo "              
                <section class='forms'>
                <div>
                <form method='POST' action=''>";

        foreach(getFields() as $field) {
                $value = getPostValue($field);
                "$field: <input type='text' name='$field' value='$value'><br><br>";
            }
        echo "
                <input type='submit' name='thebutton' value='Save!'>
                </form>
                </div>
            </section>
            <!-- end content -->             
        ";
    }
    
    function showMessages() {

        if ($_SERVER ['REQUEST_METHOD'] !== 'POST') {
        return;
        }

        $fieldsToCheck = getFields();

        foreach ($fieldsToCheck as $field) {
            if (!getPostValue($field)) {
                echo "<div class='error'>$field is missing!</div>";
            }
        }
        
    }

    function getFields()  {
        return ['Name', 'Email', 'Message'];
    }
?>