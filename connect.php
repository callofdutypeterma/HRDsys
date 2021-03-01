<?php

$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = 'root';
//改成你登入phpmyadmin密碼
$passwd = 'root';
//資料庫名稱
$database = 'mysys';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = mysqli_connect($host,$user,$passwd,$database);

//設定連線編碼，防止中文字亂碼
mysqli_query($connect, "SET NAMES 'utf8'");
 
if(!$connect){
    echo '連線失敗';
}else{
    echo '連線成功';
}
