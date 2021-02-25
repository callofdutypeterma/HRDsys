<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
</head>
<body>

</body>
</html>

<?php

header("Content-type:text/html;charset=utf-8");

$jobtitle = $_POST['jobtitle'];
$name = $_POST['name'];
$semester = $_POST['semester'];
$jobname = $_POST['jobname'];
$semnum = $_POST['semnum'];
$classname = $_POST['classname'];
$hours = $_POST['hours'];
$subject = $_POST['subject'];
$notes = $_POST['notes'];

echo "職稱：$jobtitle<br/>";
echo "姓名：$name<br/>";
echo "擬授課學期別：$semester<br/>";
echo "專職單位及職稱：$jobname<br/>";
echo "授課學期：$semnum<br/>";
echo "授課名稱：$classname<br/>";
echo "每週時數：$hours<br/>";
echo "必選修：$subject<br/>";
echo "備註：$notes<br/>";

include('connect.php');
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 
$insertSql = "INSERT INTO units (jobtitle,name,semester,jobname,semnum,classname,hours,subject,notes) VALUES ('$jobtitle','$name', '$semester','$jobname','$semnum','$classname','$hours','$subject','$notes')";
//呼叫query方法(SQL語法)
$status = $connect->query($insertSql);
 
if ($status) {
    echo '新增成功';
} else {
    echo "錯誤: " . $insertSql . "<br>" . $connect->error;
}
