<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['submit'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('../database/connectdb.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['username']);
    $email  = addslashes($_POST['email']);
    $number      = addslashes($_POST['number']);
    $adress   = addslashes($_POST['adress']);
    $pass   = addslashes($_POST['pass']);
    $confirm        = addslashes($_POST['confirm']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$pass || !$email || !$adress || !$number || !$confirm)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
 
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($connect,"SELECT user_name FROM user WHERE user_name='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!filter_var( $email,FILTER_VALIDATE_EMAIL))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($connect,"SELECT email FROM user WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra sdt
    if (!preg_match('/^[0-9]{10}+$/', $number))
    {
        echo "Số điện thoại này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if($pass!== $confirm){
        echo 'Xác nhận mật khẩu chưa đúng!';
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
    $query = "INSERT INTO user(user_name,user_password,email,number,adress) VALUES ('$username','$pass','$email','$number','$adress')";
    $adduser = mysqli_query($connect,$query);
                          
    //Thông báo quá trình lưu
    if ($adduser)
        echo "Quá trình đăng ký thành công. <a href='../login.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>