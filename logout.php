<meta charset="utf-8">
<!DOCTYPE html>

<html>
<head>
  <title>사이트에서 로그아웃 합니다.</title>
</head>
<body>
<br>
<?php
include "/register.php";
session_destroy();
header('Location: http://localhost:80/login.php');
?>
