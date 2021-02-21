<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// remove all session variables
session_unset();

// destroy the session
session_destroy();

 echo "<script>alert('Berhasil Logout'); window.location.href='login.php';</script>'";
?>
?>