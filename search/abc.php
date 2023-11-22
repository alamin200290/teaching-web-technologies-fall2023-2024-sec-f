<?php 
    //sleep(3);
    $term = $_POST['term'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where username like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $content = "<table border=1>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>";
    $rows = "";
    while($row = mysqli_fetch_assoc($result)){
            $rows .="<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
    }

    echo $content . $rows . "</table>";

    //echo $sql;


    // [{
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // },
    // {
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // },
    // {
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // }]
?>