<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>
    <li>Simple PDF with default Header and Footer: [<a href="example_006.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
    <form action="" method="post">
        
    
        <table border="1" align="center">
	
	        <tr>
		        <td><p>職稱</p><input type="text"  name="jobtitle"></td>
                <td><p>姓名</p><input type="text" name="name"></td>
                <td><p>擬授課學期別</p><input type="radio" name="semester" value="1">全學年<input type="radio" name="semester" value="2">上學期<input type="radio" name="semester" value="3">下學期</td>
                <td><p>專職單位及職稱</p><input type="text" name="jobname"></td>
                <td>授課學期<input type="number" name="semnum" min="1" max="2"></td>
                <td>授課名稱(或「指導研究生」)<input type="text" name="classname"></td>
                <td>每週時數<input type="number" name="hours" min="1" max="4"></td>
                <td><p>必選修</p><input type="radio" name="subject" value="1">必<input type="radio" name="subject" value="2">選</td>
	        </tr>
            
            <tr>
                <td colspan="8"><p>備註</p><input type="text" name="notes"></td>
            </tr>

        </table>

        <p><input type="submit" name="submit" value="送出資料"></p>


    </form>

</body>
</html>

<?php

header("Content-type:text/html;charset=utf-8");

if(isset($_POST['submit'])){
    
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
}
