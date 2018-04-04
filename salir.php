<?php
 session_start();
 unset($_SESSION['Unombre']);
 unset( $_SESSION['cuenta']);
 unset( $_SESSION['Ucorreo']);
 unset( $_SESSION['Ucarrera']);
 
     session_destroy();
 header('Location: 1Principal.php');
?>
