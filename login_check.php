<?php
session_start();

$servername="localhost";
$username="root";
$password="123456";
$database="web_db";
$con=mysqli_connect($servername,$username,$password,$database)
      or die("Mysql Connect Error!");

$sel_query="SELECT * FROM member WHERE id LIKE '{$_POST['id']}';";
$sel_result=mysqli_query($con,$sel_query) or die("Query Error!");
$count=mysqli_num_rows($sel_result);

  if($count==0)
  {
    echo "<script>location.href='join.html';</script>";
  }
  else
  {
    if($count['pw']==$_POST['pw'])
    {
      $_SESSION['userID']=$_POST['id'];
      header('Location:/index.php');
    }
    else
    {
      echo "<script>location.href='login.php';</script>";
    }
  }
?>
