<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    header("Location: index.php"); // Redirecting To Home Page
}else{
    header("Location: home.php");
}
?>