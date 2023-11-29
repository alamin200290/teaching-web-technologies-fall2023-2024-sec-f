<?php 
    //sleep(3);
    $data = $_POST['std'];
    //$std = json_decode($data);

    $std = ['username'=> 'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>123];
    echo json_encode($std);
?>