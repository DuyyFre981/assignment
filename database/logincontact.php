<?php
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    include('./database/connectdb.php');
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $_SESSION['username'] = $user;
$query = "SELECT * FROM user WHERE user_name='$user'";
$result = mysqli_query($connect, $query) or die( mysqli_error($connect));
$row = mysqli_fetch_array($result);

if(empty($user)||empty($pass)){
    echo '<b style="color:red;font-size:20px;">Bạn chưa nhập tài khoản hoặc mật khẩu!</b>';
} else{
    if($row&&$pass === $row['user_password']){
        {
            if($row['user_name']==='admin'){
                header('location:user/home.php');
            } else{
                header('location:user/quizUser.php');
            }
        }
        
    } else{  echo '<b style="color:red;font-size:20px;";>Sai thông tin đăng nhập!</b>'; }
}
}
?>
