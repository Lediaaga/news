<?php
   session_start();
   unset($_SESSION['AdminLoginId']);
   if(session_destroy()) {
      header("Location: adminlogin.php");
   }
?>