<?php
include('server.php');
session_start();
if ($_SESSION['ID_C'] == "")
{
  echo "กรุณาล็อกอิน!";
  exit();
}

if ($_SESSION['status'] != "user")
{
  echo "หน้านี้สำหรับนักศึกษาเท่านั้น!";
  exit();
}

$ID = $_SESSION['ID_C'];

$sql = "SELECT * FROM info WHERE ID_C = '$ID' ";
$result1 = $conn->query($sql);
$show = $result1->fetch_array();
?>


<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/text.css">
<link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<br>
<br>

<video width="340" height="360" controls>
  <source src="vedio/boomcom.mp4" type="video/mp4">
  <source src="vedio/boomcom.ogg" type="video/ogg">
 
</video
<br>
<br>
<div class="snow">
<div class="card text-center">
    <div class="card-header" style=" color:pink;">
    <h2>สวัสดี <?php echo $show['N_name'];?> ขอบคุณที่เป็นเพื่อนกันนะ</h2>
    </div>
    <div class="card-body">
      <h5 class="card-title"style=" color:#ffb380;">สวัสดีเพื่อนรัก</h5>
      <p class="card-text"style=" color:#ffb380;"> ต่อไปอาจจะไม่เจอกันอีกเเล้ว ไม่ได้ทำอะไรหลายๆอย่างด้วยกันไม่ได้หัวเราะมีความสุขด้วยกันอีกจะจบกันแล้ว </p><br>
     <center> <p style=" color:#ffb380;">ต่างคนต่างแยกกันไปตามฝันของตัวเองถึงจบแล้วแต่มิตรภาพยังอยู่</p></center>
     <center>  <p style=" color:#ffb380;">มีอะไรอยากบอกรีบๆบอกกันนะ ก่อนที่มันจะสายเกินไป</p></center>
    </div>
    <div class="card-footer text-muted">
     <h3 style=" color:#eb6dfb;">Congratulations</h3>
     <h3 style=" color:#eb6dfb;">รักนะจุ๊บๆ</h3>
    </div>
  </div>
  </div>
  
<br>
<br>
<br>

<audio controls autoplay>
  <source src="music/boypeach.ogg" type="audio/ogg">
  <source src="music/boypeach.mp3" type="audio/mpeg">

</audio>



</body>
  </html>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>