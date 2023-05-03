<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body{
  font-family: cursive;
  background: url(../IMG/bg.jpg);
  background-position: center;
  background-size: cover;
}
.container{
  user-select: none;
  margin: 40px auto;
  background: #56200C;
  color: white;
  border-radius: 5px;
  width: 350px;
  text-align: center;
  box-shadow: 0 10px 20px -10px rgba(0,0,0,.75);
  opacity: 0.8;

}
.cover-photo{
  background: url(../IMG/bg-user.jpg);
  height: 160px;
  width: 100%;
  border-radius: 5px 5px 0 0;
}
.profile{
  height: 120px;
  width: 120px;
  border-radius: 50%;
  margin: 93px 0 0 -175px;
  border: 1px solid #1f1a32;
  padding: 7px;
  background: white;
}
.profile-name{
  font-size: 25px;
  font-weight: bold;
  margin: 27px 0 0 120px;
}
.about{
  margin-top: 35px;
  line-height: 21px;
}
button{
  margin: 10px 0 40px 0;
  box-shadow: 0 0 5px gray;
}
.msg-btn, .follow-btn{
  
  border: 3px solid black;
  padding: 10px 25px;
  border-radius: 3px;
  font-family: Montserrat, sans-serif;
  cursor: pointer;
}
.follow-btn{
  margin-left: 10px;
  background: transparent;
  color: white;
}
.follow-btn:hover{
  background-color: white;
  color: black;
  transition: .5s;
}
.container i{
  padding-left: 20px;
  font-size: 20px;
  margin-bottom: 20px;
  cursor: pointer;
  transition: .5s;
}
.container i:hover{
  color: #03bfbc;
}
a{
  color: white;
  border: 2px solid black;
  padding: 5px 10px;
  box-shadow: 0 0 5px black;
  text-decoration: none;
}
a:hover{
 background: white;
 color: black;
}
</style>


<body>
  <a href="./home.php">BACK </a>
  <?php
   if(isset($_POST['submit'])){
    $dest = '../IMG/home-img/'. basename($_FILES['myfile']['name']);
    $file = $_FILES['myfile']['tmp_name'];
    $err = $_FILES['myfile']['error'];
    // Hàm di chuyển file
    if($err ==0 && move_uploaded_file($file, $dest)){
        echo 'Cập nhật ảnh thành công!';
    }
   }
?>
<div class="container">
<form action="./admin.php" enctype="multipart/form-data" method="post">
  <input name="myfile" type="file"> 
  <input name="submit" type="submit" value="UPDATE"></form>
      <div class="cover-photo">
        <img src="<?php echo $dest ?>" class="profile">
       
      </div>
      <div class="profile-name">Minh Duyy</div>
      <p class="about">FPTPoly student and<br>Wed developer</p>
      <button class="msg-btn">Message</button>
      <button class="follow-btn">Following</button>
      <div>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>
</body>
</html>