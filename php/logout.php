<?php
   session_start();
   require_once "functions.php";
   function showContent() { 
      session_destroy();
      header("Location: index.php?page=Inlog");
      exit();
   }
?>
