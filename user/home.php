
<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="../fonts/css/all.css">
    
    <style>
        #wedname{
            font-family: cursive;
            color: #D6903E;
        }
       *{
        font-family: cursive;
    padding: 0;
    margin: 0;
}

header{
    display: flex;
    padding-top: 10px;
    width: 100%;
    background-color: #36302C;
    box-shadow: 0 1px 1px gray;
    color: white;
    padding-bottom: 20px;
    
}
.left-header{
    display: flex;
    margin-right: 20%;
    align-items: center;
}
.left-header>p{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bolder;
}
#logo{
    height: 85px;
}
.right-header{
    display: flex   ;
    align-items: center;
}
.right-header>input[type=text]{
    padding: 10px;
    padding-left: 30px;
    padding-right: 100px;
    background-image: url(../IMG/search.png);
    background-size: 20px;
    background-repeat: no-repeat;
    background-position:  5px 5px ;
    border-radius: 20px;
}

.right-header>button{
    background-color: #D6903E;
    color: white;
    padding:10px 30px;
    margin-left: 30px;
    margin-right: 50px;
}
#avatar{
    height: 70px;
    border-radius: 60px;
    border: 3px solid black;
    margin-left: 120px;
}


ul{
    display: flex;
    color:  black;
}
ul>li{
    list-style: none;

}
ul>li>a{
    text-decoration: none;
    color: black;
}
        ul{
            display: flex;
            position: absolute;
            left: 1%;
            
        }
        
        ul>li{
            list-style: none;
            text-decoration: none;
            padding: 10px 20px;
            color: white;
            border-bottom: 1px solid white;
            margin-right: 10px;
            
        }
        ul>li:hover{
            box-shadow: 0 5px 5px black;
            border: 1px solid black;
        }
        ul>li>a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }


        .bg{
            width: 100%;
            height: 500px;
            background-image: url(../IMG/home-img/background-home.png);
        }
        .info{
            text-decoration: none;
            position: absolute;
            top: 100px;
            right: 20px;
            color: greenyellow;
           text-align: center;
        }
        .info>p{
           color: white;
        }
        .info>a{
            text-decoration: none;
            color: greenyellow;
            
        }
        .info>a:hover{
            border-bottom: 1px solid greenyellow;
        }
    </style>
</head>
<body>
    <header>
        <div class="left-header">
            <img id="logo" src="../IMG/home-img/logo php.png" alt="">
            <p id="wedname"> PHP Quiztest</p>
        </div>
        <div class="right-header">
            <input type="text" placeholder="Nhập khóa học muốn tìm...">
            <button>Tìm kiếm</button>
        </div>
        <img id="avatar" src="../IMG/home-img/avatar.png" alt="">
       <div class="info">
       <p id="username"><?php echo'Xin chào,<b> '. $_SESSION['username'],'</b>' ?></p>
        <a href="../login.php" id="logout">LOG OUT</a>
       </div>
    </header>
    <div class="navi">
    <ul>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./quizTest.php">Quiz</a></li>
            <li><a href="./management.php">Management</a></li>
            <li><a href="../user/admin.php">Admin</a></li>
            
        </ul>

    </div>

    <div class="bg">

    </div>
    <?php
    include('../view/footer.php');
    ?>
</body>
</html>