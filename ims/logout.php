<?php 
session_start();
// $_SESSION['userId'] ="";
$_SESSION['userId'] =null;
// unset($_SESSION["userId"]);
// session_unset();
// exit();
header('Location: index.php');