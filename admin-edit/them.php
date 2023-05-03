<?php
    include('../database/connectdb.php');
    if(isset($_POST['submit'])){
        $question = $_POST['question'];
        $A = $_POST['a'];
        $B =$_POST['b'];
        $C =$_POST['c'];
        $D = $_POST['d'];
        $result = $_POST['result'];
        
        $add = "INSERT INTO content(A,B,C,D,question,result) VALUES('$A','$B','$C','$D','$question','$result') ";
       if( $query = mysqli_query($connect,$add)){
            echo 'Thêm thành công!';
            header('location:../user/quizTest.php');
       } else{
        echo 'Lỗi';
       }
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
   *{
    padding: 0;
    margin: 0;
    font-family: cursive    ;
   }
    h2{
        text-align: center;
        margin-bottom: 20px;
        margin-top: 30px;
    }
    #add{
    width: 100%;
    display: flex;
    flex-direction: column;
   
    background-color:#36302C ;
    color: white;
     align-items: center;
}
#add>input{
    padding: 10px 5px;
    width: 50%;
}
label{
    margin: 10px 0;
}    
input[type='submit']{
    background-color: yellow;
    margin: 30px 0;
    width: 100px;   
    align-self: center;
}
</style>
<body>
    <form id="add" action="" method="post">
    <h2>Thêm câu hỏi</h3>
    <label for="">CÂU HỎI </label> <input type="text" name="question" placeholder="Nhập câu hỏi..."> 
    <label>ĐÁP ÁN GỢI Ý </label> 
    <input type="text" name="a" placeholder="A."> <br>
    <input type="text" name="b" placeholder="B."> <br>
    <input type="text" name="c" placeholder="C."> <br>
    <input type="text" name="d" placeholder="D."> <br> 
    <label for="">Kết quả: </label> <input style="width:50px;padding:5px 10px;" type="text" name='result' placeholder="A-B-C-D?">
    <input  type="submit" name="submit" value="Thêm">
    </form>
</body>
</html>