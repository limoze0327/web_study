<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>웹스터디 1주차 과제 2-1</title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['userID'])){
    header('Location:/index.php');
  } ?>
  <h3>로그인</h3>
  <form method="get">
    <br>
    <br> 아이디 <input type="text" name="id">
    <br>
    <br> 비밀번호 <input type="password" name="password">
    <br>
    <br>  <input type="submit" value="로그인">
          <input type="button" value="회원가입" onclick="location.href='join.html'">
  </form>
</body>
</html>
