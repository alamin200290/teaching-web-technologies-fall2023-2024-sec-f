<?php 
    session_start();
    //session_destroy();
    unlink($_SESSION['flag']);
    header('location: login.html');
?>