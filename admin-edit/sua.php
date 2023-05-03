<?php 
 include('../database/connectdb.php');
 $idg = $_GET['id'];
 $sql_up = "SELECT * FROM content WHERE id =$idg";
 $query_up = mysqli_query($connect,$sql_up);
 $row_up = mysqli_fetch_assoc($query_up);
 if(isset($_POST['submit'])){
    $question = $_POST['question'];
     $A = $_POST['A'];
     $B= $_POST['B'];
     $C= $_POST['C']; 
     $D= $_POST['D']; 
     $D= $_POST['D']; 
    $result = $_POST['result'];

     $update = "UPDATE content SET A = '$A', B = '$B', C = '$C',D ='$D',question = '$question',result = '$result' WHERE id = $idg" ;    
     $query = mysqli_query($connect,$update);
   if($query){
     header('location:quizTest.php');
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
    #update-form{
        display: flex;
        flex-direction: column;
        align-items: left;
        background-color: #36302C;
        color: white;
        padding-left: 30px;
        padding-bottom: 10px;
        border-bottom: 1px solid white;
    }
    input{
        width: 400px;
        padding: 5px 10px;
    }
    #update-btn{
        width: 100px;
        margin-left: 150px;
        background-color: green;
        color: yellow;
    }
</style>
<body>
    <form id="update-form" action="" method="post">
        <h4><?php echo 'Câu '. $row_up['id']?></h4>
        <label for="">Câu hỏi: </label> <br> <input name='question' type="text" value="<?php echo $row_up['question'] ?>"> <br>
        <label for="">Đáp án:</label><br>
         <input name="A" type="text" value="<?php echo $row_up['A'] ?>"> <br>
         <input name="B" type="text" value="<?php echo $row_up['B'] ?>"> <br>
         <input name="C" type="text" value="<?php echo $row_up['C'] ?>"> <br>
         <input name="D" type="text" value="<?php echo $row_up['D'] ?>"> <br>
         <label for="">Đáp án đúng: </label>  <input name="result" style="background-color: greenyellow;" type="text" value="<?php echo $row_up['result'] ?>"> <br>
           <input id='update-btn' type="submit" name="submit" value="Cập nhật">
    </form>
</body>
</html>