<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css?202207" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="themes/easydropdown.css?202207"/>
    <link rel="SHORTCUT ICON" href="assets/images/NCU.ico" />
    <title>登入</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="src/jquery.easydropdown.js"></script>
</head>
<body>
    
    <div class="wrap">

    <a href='/' class='index'>回首頁</a><br>

    <br>

<?php

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: backend.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}

include('connect.php');

?>

<h1>後臺系統</h1>
<h2>請以管理員帳號登入</h2>
<form method="post" action="login.php">
帳號：
<input type="text" name="username"><br/><br/>
密碼：
<input type="password" name="password"><br><br>
<input type="submit" value="登入" name="submit"><br><br>
<!-- <a href="register.php">還沒有帳號？現在就註冊！</a> -->
</form>
    
</body>
</html>