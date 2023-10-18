<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($result);
    //$data = mysqli_fetch_assoc($result);
    //$data1 = mysqli_fetch_assoc($result);
    //print_r($data);
    //print_r($data1);
    //echo $count;

    /* echo "<table border=1>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>EMAIL</td>
            </tr>";
    while($data = mysqli_fetch_assoc($result)){
       echo "<tr>
                <td>{$data['id']}</td>
                <td>{$data['username']}</td>
                <td>{$data['email']}</td>
            </tr>";
    }

    echo "</table>"; */
?>

<table border=1>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>EMAIL</td>
    </tr>
    <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['username']?></td>
        <td><?=$data['email']?></td>
    </tr>
  <?php  } ?>
</table>


