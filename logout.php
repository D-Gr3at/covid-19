<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    header("Location: index.html"); // Redirecting To Home Page
}else{
    header("Location: home.php");
}
?>