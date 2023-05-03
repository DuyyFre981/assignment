<?php
     if(!empty($error)){
        $add_user = "INSERT INTO user(user_name,user_password,email,number,adress) VALUES('$name','$pass','$email','$number','$adress')";
    } else{
        header('location:resign.php');
    }
       if( $query=mysqli_query($connect,$add_user)){
             $mess = 'Đăng kí thành công';
       }
?>