<?php
session_start();
$servername="localhost";
$username="root";
$password="123456";
$database="web_db";
$con=mysqli_connect($servername,$username,$password,$database)
      or die("Mysql Connect Error!");

if (isset($_SESSION['userID'])){ echo "<br>"; }
else{ Header('location: login.php'); }
?>

<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
  <title>인덱스 페이지</title>
</head>

<body>
  <h1>
    INDEX
  </h1>

  <?php
  $sel_query="SELECT * FROM member WHERE id LIKE '{$_SESSION['userID']}';";
  $sel_result=mysqli_query($con, $sel_query) or die("Query Error!");

  $record=mysqli_fetch_array($sel_result);

  echo "<br>
  <b>{$record['name']}의 페이지입니다</b> <br>
  login ID : {$record['id']} <br>
  login PW : {$record['pw']} <br>
  your email is {$record['email']} <br>
  your name is {$record['name']} <br>
  your sex is {$record['sex']} <br> <br>";
  ?>
</body>
</html>
