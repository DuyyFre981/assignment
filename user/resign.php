

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resign.css">
    <title>REGISTER</title>
    <link rel="stylesheet" href="../fonts/css/all.css">
</head>
 
<style>
    img{
  height: 500px;
  width: auto;
  position: absolute;
right: 100px;
}

.container{
    width: 300px;
  margin-left: 15%;
  
}
form{
    background:none;
}
a{
    text-decoration: none;
}
a:hover{
    color: red;
}
input[type ='submit']:hover{
        box-shadow: 0 0 5px black;
    }
</style>

<body>
<div  class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<img src="../IMG/register.png" alt="">
    <div class="container">
       
    <h1>Resignter</h1>
    <form action="../database/resigcontact.php" method="post">
    <label for="">Username:</label> 
    <input type="text" name="username" placeholder="Enter username...">
   
    <label for="">Email:</label>
    <input type="text" name="email" placeholder="Enter email...">
   
     <label for="">Phone number: </label>
    <input type="text" name="number" placeholder="Enter your number...">
   
    <label for="">Adress:</label>
    <input type="text" name="adress" placeholder="Enter your adress...">
    
    <label for="">Password:</label>
    <input type="password" name="pass" placeholder="Enter password">
   
     
    <label for="">Confirm password:</label>
    <input type="password" name="confirm" placeholder="Confirm password">
    
    

    <input name="submit" type="submit" value="RESIGN">
    </form>
    <div class="social">
    <a href="../login.php"> Login</a>
            <a href=""><i class="fa-brands fa-facebook" style="color: #0f60eb;"></i></a>
            <a href=""><i class="fa-brands fa-twitter" style="color: #47acd7;"></i></a>
            <a href="" style="color: black;"> <i class="fa-brands fa-tiktok"></i></a>
            </div>
    </div>


    
</body>
</html>