<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOG</title>
</head>
<style>
  body{
    font-family: cursive;
    background-color:#46281C ;
  }
  h1{
    color: white;
    text-align: center;
  }
  .container{
    color: black;
    display: flex;
    margin: 80px 100px;
    background: url(../IMG/bg-content.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 70px 30px;
    box-shadow: 0 0 5px black;
    
  }
  img{
    height: 300px;
    width: auto;
    margin-right: 60px;
    margin-top: 100px;
    margin-left: 20px;
  }
  a{
  color: white;
  border: 2px solid black;
  padding: 5px 10px;
  box-shadow: 0 0 5px black;
  text-decoration: none;
}
a:hover{
 background: white;
 color: black;
}
.reward{
  display: flex;
  justify-content: center;
  color: white;
  padding: 30px auto;
  margin: 0 auto;

}
.reward-item{
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  
}
.reward-item>img{
  height: 120px;
  width: auto;
  
}

.container-2{
  margin: 50px 100px;
  padding: 50px auto;
  background: url(../IMG/bg-2-blog.webp);
  background-size: cover;
  background-repeat: no-repeat;
}
.container-2>h2{
  text-align: center;
  margin-top: 50px;
  color: white;
}
</style>
<body>
<a href="./home.php">BACK</a>
  <div class="container">
    
    <div class="content">
      <h1>Khóa học lập trình ngắn hạn tại Online Course</h1>
      <p>Các khóa học lập trình ngắn hạn tại Lập Trình Việt rất đa dạng và đầy đủ các chuyên ngành liên quan tới công nghệ như: 
        Java, thiết kế Web Front End, Node.js, Android, Python, C++, cấu trúc dữ liệu giải thuật, Golang, PHP Laravel, Machine Learning,
        Arduino phù hợp với nhiều đối tượng học viên muốn tham gia các khóa học lập trình cho người mới bắt đầu và nâng cao. <br> <br>
        <b>Ưu điểm khi học lập trình tại Online Course:</b> <br>
        <ul>
          <li>Tập trung tối đa vào thực hành nhưng không quên những kiến thức, kỹ năng nền tảng giúp học viên không chỉ lập trình thành thạo mà còn có tư duy để làm các dự án lớn hơn trong tương lai</li>
          <li>Phương pháp Round up từ dễ đến khó, để tránh việc học viên trở nên nản chí khi học</li>
          <li>Giảng viên đều là những lập trình viên có nhiều năm hoạt động và trực tiếp là leader tham gia các dự án lớn tại các tập đoàn công nghệ thông tin đầu ngành</li>
          <li>Sinh viên được khuyến khích đi phỏng vấn xin việc nhiều lần trước khi thực sự tốt nghiệp để tự điều chỉnh kế hoạch học tập, phấn đấu</li>
          <li>Không thi cử lý thuyết, chỉ thực hành dự án, làm sản phẩm dưới sự hướng dẫn, góp ý của giảng viên</li>
        </ul>
      </p>
    </div>
    <img src="../IMG/bg-blog.png" alt="">
  </div>
  <div class="container-2">
  <div class="reward">
      <div class="reward-item">
        <img src="../IMG/reward1-removebg-preview.png" alt="">
        <h3>Giải tin học trẻ</h3>
      </div>
      <div class="reward-item">
        <img src="../IMG/reward2-removebg-preview.png" alt="">
        <h3>Chứng nhận đạt chuẩn</h3>
      </div>
      <div class="reward-item">
        <img src="../IMG/reward3-removebg-preview.png" alt="">
        <h3>Giải lập trình viên sáng tạo</h3>
      </div>
      <div class="reward-item">
        <img src="../IMG/reward4-removebg-preview.png" alt="">
        <h3>Top khóa học 2023</h3>
      </div>
      
  </div>
  </div>
</body>
</html>