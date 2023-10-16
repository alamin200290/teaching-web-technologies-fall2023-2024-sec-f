<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username == "" || $password == "" || $email == "" ){
        echo "null username or password or email!";
    }else{
        $user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>