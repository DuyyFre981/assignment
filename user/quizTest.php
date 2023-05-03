<?php
    include('../database/connectdb.php');
    $select = 'SELECT * FROM content';
    $query = mysqli_query($connect,$select);
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ TEST</title>
    <link rel="stylesheet" href="../css/quiz.css">
</head>

  

<?php
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'xoa':
                require_once "../admin-edit/xoa.php";
                break;
            case 'sua':
                require('../admin-edit/sua.php');
                break;
            default:
                require_once 'quizTest.php';
                break;
        }
    }

?>
<body>
    <div class="container">
      <a id="homepage-btn" href="home.php">BACK</a>
    <table>
    <div id="add-btn" class="btn-add"><button style="background-color: yellow;"><a style="color: black;" href="../admin-edit/them.php">Thêm câu hỏi</a></button></div>

        <h1>QUIZ TEST PHP</h1>
    <?php
        while($row = mysqli_fetch_array($query)){?>
    
        <div class="question">
        <h3>Câu <?php echo $row['id'].".   ".$row['question'] ?></h3>
        <div class="btn-edit">
        <button><a href="quizTest.php?page_layout=sua&id=<?php echo $row['id'] ?>">Sửa</a></button>
       <button><a onclick="confirm('Bạn muốn xóa câu hỏi?')" href="quizTest.php?page_layout=xoa&id=<?php echo $row['id'] ?>">Xóa</a></button>
        </div>
       <div class="question-content">
        <p><?php echo $row['A'] ?></p>
        <p><?php echo $row['B'] ?></p>
        <p><?php echo $row['C'] ?></p>
        <p><?php echo $row['D'] ?></p>
        <p class="result">Đáp án: <?php echo $row['result'] ?></p>
       </div>
      
        </div>
   

     <?php } ?>
     </table>
  
    </div>
    
</body>
</html>
