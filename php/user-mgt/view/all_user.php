<?php 
  include_once('../controller/sessionCheck.php');
?>

<html lang="en">
<head>
    <title>View All Users</title>
</head>
<body>
        
        <a href="home.php"> Back </a> |
        <a href="../controller/logout.php"> logout </a> 

        <table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>1</td>
                <td>alamin</td>
                <td>alamin@aiub.edu</td>
            </tr>
            <tr>
                <td>2</td>
                <td>abc</td>
                <td>abc@aiub.edu</td>
            </tr>
        </table>
</body>
</html>