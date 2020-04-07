<?php
session_start();
if(isset($_SESSION['full_name'])){
    session_destroy();
    header("Location: login.php");
}else{
    header("Location: index.php");
}
?>