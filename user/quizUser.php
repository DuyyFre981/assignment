<?php
    include('../database/connectdb.php');
    session_start();
 
    $select = 'SELECT * FROM content';
    $query = mysqli_query($connect,$select);
   
   if(isset($_POST['submit'])){
                if($_POST['answer']!=='A' && $_POST['answer']!=='B' && $_POST['answer']!=='C' && $_POST['answer']!=='D'){
                     $error = '<b style ="color:red;">Kiểm tra lại đáp án!</b>';
                }
                 else{
                $answer = 'SELECT result FROM content';
                 $mark = 0;
                $query_answer = mysqli_query($connect,$answer);
                while($row_answer = mysqli_fetch_assoc($query_answer)){
           
                 if((string)$_POST['answer']===(string)$row_answer['result']){
                $mark +=1;
                }
                    }
                if(empty($error)){
                header('location:testResult.php');
                 } 
                 $_SESSION['mark'] = $mark;
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
    <script src="../js/quiz.js"></script>
    <style>
        b{
            z-index: 2;
        }
        h1{
            text-align: center;
        }
        form{
            position: absolute;
            top: 0;
            z-index: 3;
            color: white;
            padding: 0 40px;
            display: flex;
            flex-direction: column;
        }
        .question-content{
            display: flex;
        }
        p{
            margin-left: 20px;
            /* margin-right: 20px; */
        }
        input[type='text']{
            margin-left: 20px;
            background: none;
            padding: 10px;
            color: white;
        }
        input[type='submit']{
            background-color: brown;
            color: white;
            align-self: center;
            width: 100px;
            margin-bottom: 20px;
            padding: 10px 0;
        }
        body, html {
            background-color: #000;
            color: #fff;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
                
}
canvas {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    text-align: center;
}
    </style>
</head>

<body>

    <div class="container">
    <canvas id="bgCanvas"></canvas>
    <form action="quizUser.php" method="post">
    
        <h1>QUIZ TEST PHP</h1>
        <?php if(!empty($error)){
            echo $error;
        } ?>
   <?php
        while($row = mysqli_fetch_array($query)){?>

        <div class="question">
        <h3>Câu <?php echo $row['id'].".   ".$row['question'] ?></h3>
        <div class="btn-edit">
        </div>
       <div class="question-content">
        <p><?php echo $row['A'] ?></p>
         <p><?php echo $row['B'] ?></p>
         <p><?php echo $row['C'] ?></p>
        <p><?php echo $row['D'] ?></p> 
       </div>
       <input type="text" name='answer' placeholder="Nhập câu trả lời của bạn..." name="answer" >
        </div>
        

     <?php
    
    } ?>
     <input type="submit" name="submit" value='NỘP'>
    </form>
     
    </div>
    <script>
        (function () {
      var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function (callback) {
              window.setTimeout(callback, 1000 / 60);
          };
      window.requestAnimationFrame = requestAnimationFrame;
  })();

  // Terrain stuff.
  var background = document.getElementById("bgCanvas"),
      bgCtx = background.getContext("2d"),
      width = window.innerWidth,
      height = document.body.offsetHeight;

  (height < 400) ? height = 400 : height;

  background.width = width;
  background.height = height;

  function Terrain(options) {
      options = options || {};
      this.terrain = document.createElement("canvas");
      this.terCtx = this.terrain.getContext("2d");
      this.scrollDelay = options.scrollDelay || 90;
      this.lastScroll = new Date().getTime();

      this.terrain.width = width;
      this.terrain.height = height;
      this.fillStyle = options.fillStyle || "#191D4C";
      this.mHeight = options.mHeight || height;

      // generate
      this.points = [];

      var displacement = options.displacement || 140,
          power = Math.pow(2, Math.ceil(Math.log(width) / (Math.log(2))));

      // set the start height and end height for the terrain
      this.points[0] = this.mHeight;//(this.mHeight - (Math.random() * this.mHeight / 2)) - displacement;
      this.points[power] = this.points[0];

      // create the rest of the points
      for (var i = 1; i < power; i *= 2) {
          for (var j = (power / i) / 2; j < power; j += power / i) {
              this.points[j] = ((this.points[j - (power / i) / 2] + this.points[j + (power / i) / 2]) / 2) + Math.floor(Math.random() * -displacement + displacement);
          }
          displacement *= 0.6;
      }

      document.body.appendChild(this.terrain);
  }

  Terrain.prototype.update = function () {
      // draw the terrain
      this.terCtx.clearRect(0, 0, width, height);
      this.terCtx.fillStyle = this.fillStyle;
      
      if (new Date().getTime() > this.lastScroll + this.scrollDelay) {
          this.lastScroll = new Date().getTime();
          this.points.push(this.points.shift());
      }

      this.terCtx.beginPath();
      for (var i = 0; i <= width; i++) {
          if (i === 0) {
              this.terCtx.moveTo(0, this.points[0]);
          } else if (this.points[i] !== undefined) {
              this.terCtx.lineTo(i, this.points[i]);
          }
      }

      this.terCtx.lineTo(width, this.terrain.height);
      this.terCtx.lineTo(0, this.terrain.height);
      this.terCtx.lineTo(0, this.points[0]);
      this.terCtx.fill();
  }


  // Second canvas used for the stars
  bgCtx.fillStyle = '#05004c';
  bgCtx.fillRect(0, 0, width, height);

  // stars
  function Star(options) {
      this.size = Math.random() * 2;
      this.speed = Math.random() * .05;
      this.x = options.x;
      this.y = options.y;
  }

  Star.prototype.reset = function () {
      this.size = Math.random() * 2;
      this.speed = Math.random() * .05;
      this.x = width;
      this.y = Math.random() * height;
  }

  Star.prototype.update = function () {
      this.x -= this.speed;
      if (this.x < 0) {
          this.reset();
      } else {
          bgCtx.fillRect(this.x, this.y, this.size, this.size);
      }
  }

  function ShootingStar() {
      this.reset();
  }

  ShootingStar.prototype.reset = function () {
      this.x = Math.random() * width;
      this.y = 0;
      this.len = (Math.random() * 80) + 10;
      this.speed = (Math.random() * 10) + 6;
      this.size = (Math.random() * 1) + 0.1;
      // this is used so the shooting stars arent constant
      this.waitTime = new Date().getTime() + (Math.random() * 3000) + 500;
      this.active = false;
  }

  ShootingStar.prototype.update = function () {
      if (this.active) {
          this.x -= this.speed;
          this.y += this.speed;
          if (this.x < 0 || this.y >= height) {
              this.reset();
          } else {
              bgCtx.lineWidth = this.size;
              bgCtx.beginPath();
              bgCtx.moveTo(this.x, this.y);
              bgCtx.lineTo(this.x + this.len, this.y - this.len);
              bgCtx.stroke();
          }
      } else {
          if (this.waitTime < new Date().getTime()) {
              this.active = true;
          }
      }
  }

  var entities = [];

  // init the stars
  for (var i = 0; i < height; i++) {
      entities.push(new Star({
          x: Math.random() * width,
          y: Math.random() * height
      }));
  }

  // Add 2 shooting stars that just cycle.
  entities.push(new ShootingStar());
  entities.push(new ShootingStar());
entities.push(new Terrain({mHeight : (height/2)-120}));
entities.push(new Terrain({displacement : 120, scrollDelay : 50, fillStyle : "rgb(17,20,40)", mHeight : (height/2)-60}));
  entities.push(new Terrain({displacement : 100, scrollDelay : 20, fillStyle : "rgb(10,10,5)", mHeight : height/2}));

  //animate background
  function animate() {
      bgCtx.fillStyle = '#110E19';
      bgCtx.fillRect(0, 0, width, height);
      bgCtx.fillStyle = '#ffffff';
      bgCtx.strokeStyle = '#ffffff';

      var entLen = entities.length;

      while (entLen--) {
          entities[entLen].update();
      }
      requestAnimationFrame(animate);
  }
  animate();
    </script>
</body>
</html>
