<?php
    if(!empty($_POST)){
        $error = [];
        $username = $_POST['username'];
        
        $pass = $_POST['pass'];
        // LỖi tài khoản
        if(empty($username)){
            $error['username']['required'] = 'Tài khoản không để trống!'; 
        } else{
            if(strlen($username)<5){
                $error['username']['leng_user'] = 'Tài khoản ít nhất 5 kí tự!';
            }
        }
        // LỖI email
        if(empty($email)){
            $error['email']['required'] = 'Emai không để trống';
        } else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error['email']['invalid'] = 'Sai định dạng email';
            }
        }
        //Lỗi mật khẩu
        if(empty($pass)){
            $error['pass']['required'] = 'Bắt buộc có mật khẩu!';
        }
        
        
    }
    

    ?>