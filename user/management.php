<?php
    include('../database/connectdb.php');
    $show = 'SELECT * FROM user';
    $query = mysqli_query($connect,$show);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGEMENT</title>
</head>
<style>
    body{
        font-family: cursive;
        background-color:#36302C ;
        color: white;
    }
    h1{
        margin-left: 30px;
    }
    table{
        margin-left: 20px;
        table-layout: fixed;
        /* width: 900px; */
        text-align: left;
        
    }
    th{
        margin-right: 10px;
        width:150px;
        padding: 0 5px;
    }
    td{
        margin-right: 10px;
        padding: 10px 3px;
        width: 300px;
    }
    a{
        color: white;
        border: 1px solid white;
        padding: 0 10px;
        text-decoration: none;
    }
    a:hover{
        text-decoration: underline;
    }
</style>
<body>
    <div class="container">
        <a href="./home.php">BACK TO HOMEPAGE</a>
        <table border="1">
            <h1>Thông tin các tài khoản đăng kí</h1>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Number</th>
                <th>Adress</th>
            </tr>
           <?php while($row = mysqli_fetch_array($query))
           {?>
            <tr>
                <td style="width:300px"><?php echo $row['user_id']?></td>
                <td><?php echo $row['user_name']?></td>
                <td><?php echo $row['user_password']?></td>
                <td ><?php echo $row['email']?></td>
                <td><?php echo $row['number']?></td>
                <td><?php echo $row['adress']?></td>
            </tr>

            <?php } ?>
        </table>
    </div>
</body>
</html>