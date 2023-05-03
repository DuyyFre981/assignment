<?php 
    include('../database/connectdb.php');
    $id = $_GET['id'];
    $delete = "DELETE FROM content WHERE id = '$id'";
   if( $query = mysqli_query($connect,$delete)){
        header('location:quizTest.php');
   } else{
     echo "Xóa không thành công";
   }
 ?>