<?php 

session_start();
unset($_SESSION["id"]);
unset($_SESSION["Username"]);
session_unset();
header('location: index.php');
exit();

//require_once 'php_action/core.php';

// remove all session variables
//session_unset(); 

// destroy the session 
//session_destroy(); 

//header('location: http://localhost/ims/index.php');

?>