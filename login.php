
<?php
        session_start();
        ob_start(); 
       require('./database/logincontact.php')
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./fonts/css/all.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<style>
    input[type ='submit']{
        background-color: orange;
    }
    input[type ='submit']:hover{
        box-shadow: 0 0 5px black;
    }
    a:hover{
        color: red;
    }
</style>
<body>
    
   
  <img src="./IMG/bg-login-removebg-preview.png" alt="">
    <div class="container">
       
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>LOGIN</h1>
            <label for="">Username:</label>
            <input type="text" name="username" placeholder="Enter username">
            <?php echo !empty($error['username']['required']) ? '<p style= "color:red;">'. $error['username']['required'].'</p>': '';  ?>
            <?php echo !empty($error['username']['leng_user']) ? '<p style= "color:red;">'. $error['username']['leng_user'].'</p>': '';  ?>
            <label for="">Password:</label>
            <input type="password" name='pass' placeholder="Enter password">
            <?php echo !empty($error['pass']['required']) ? '<p style= "color:red;">'. $error['pass']['required'].'</p>': '';  ?>
            <input style="align-self: center;width:100px;margin-top:20px" type="submit" value="LOGIN" name="dangnhap">
            <div class="social">
            
            <a href=""><i class="fa-brands fa-facebook" style="color: #0f60eb;"></i></a>
            <a href=""><i class="fa-brands fa-twitter" style="color: #47acd7;"></i></a>
            <a href="" style="color: black;"> <i class="fa-brands fa-tiktok"></i></a>
            </div>
            <p>Click here to <a href="./user/resign.php">Register</a></p>
        </form>
       
    </div>
    <h3>Learn how to code online? Join us now!</h3>
    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
</body>
</html>