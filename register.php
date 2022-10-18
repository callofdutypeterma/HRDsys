<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css?033001" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="themes/easydropdown.css?033001"/>
    <link rel="SHORTCUT ICON" href="assets/images/NCU.ico" />
    <title>註冊</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="src/jquery.easydropdown.js"></script>
    <script>
        
        function validateForm() {
            var x = document.forms["registerForm"]["password"].value;
            var y = document.forms["registerForm"]["password_check"].value;
            if(x.length<6){
                alert("密碼長度不足");
                return false;
            }
            if (x != y) {
                alert("請確認密碼是否輸入正確");
                return false;
            }
        }
    </script>
</head>
<body>
    
    <div class="wrap">

    <a href='/' class='index'>回首頁</a><br>

    <br>

<?php

include('connect.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    //檢查帳號是否重複
    $check="SELECT * FROM member_table WHERE username='".$username."'";
    if(mysqli_num_rows(mysqli_query($connect,$check))==0){
        $sql="INSERT INTO member_table (username, password) VALUES('$username','$hash')";
        
        if(mysqli_query($connect, $sql)){
            echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='personnelofficeindex.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:3;url=personnelofficeindex.php");
            exit;
        }else{
            echo "Error creating table: " . mysqli_error($connect);
        }
    }
    else{
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='register.php'>未成功跳轉頁面請點擊此</a>";
        header("refresh:3;url=register.php",true);
        exit;
    }
}


mysqli_close($connect);

?>

<h1>註冊頁面</h1>
<form name="registerForm" method="post" action="" onsubmit="return validateForm()">
帳  號：
<input type="text" name="username"><br/><br/>
密  碼：
<input type="password" name="password" id="password"><br/><br/>
確認密碼：
<input type="password" name="password_check" id="password_check"><br/><br/>
<input type="submit" value="註冊" name="submit">
<input type="reset" value="重設" name="submit">
</form>
    
</body>
</html>