<?php 
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
        echo "null username or password!";

    }else if ($username == $password){
        echo "Valid user!";
    }else{
        echo "invalid user!";
    }
?>