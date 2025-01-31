<?php
   session_start();
   require_once "functions.php";
   function showContent() { 
      session_destroy();
      require_once "HOME.php";
      return;
      exit();
   }
?>
