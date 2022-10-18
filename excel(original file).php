<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="SHORTCUT ICON" href="/assets/images/NCU.ico" />
    <title>Excel</title>
</head>
<body>

<?php

session_start();  //很重要，可以用的變數存在session裡

include('connect.php');

$username=$_SESSION["username"];

$selA = mysqli_query($connect,"SELECT * FROM units_information;"); 

$file = "formData.csv";

//同格斷行要用雙引號標起來，然後在編輯器直接斷行
$headline = "單位,職稱,姓名,擬授課學期別,本職服務機關學校,本職服務單位,本職職稱,授課學期一,授課名稱,每週時數,必選修,授課學期二,授課名稱,每週時數,必選修,備註,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");
fwrite($fp, $headline."\r\n");

while($rowA = mysqli_fetch_assoc($selA)) {

    $selB = mysqli_query($connect,"SELECT * FROM ".$rowA['unit_name'].";");
    while($rowB = mysqli_fetch_assoc($selB)) {

        $content = $rowA["chinese_name"].',"'.$rowB["job_title"].'",'.$rowB["name"].','.$rowB["semester"].','.$rowB["service_school"].','.$rowB["service_unit"].',"'.$rowB["job_name"].'",'.$rowB["first_semester"].','.$rowB["first_class_name"].','.$rowB["first_class_hours"].','.$rowB["first_class_subject"].','.$rowB["second_semester"].','.$rowB["second_class_name"].','.$rowB["second_class_hours"].','.$rowB["second_class_subject"].',"'.$rowB["notes"].'",';
        fwrite($fp, mb_convert_encoding($content,"big5")."\r\n");  //註1

    }
}

//fwrite($fp, $content);  //註2

//如果使用註2Excel會出現亂碼，excel 出現亂碼的原因是檔首無 BOM(https://en.wikipedia.org/wiki/Byte_order_mark)
//普通Txt檔可使用註2
//註1是另一種解法

/*
if(fwrite($fp, "\xEF\xBB\xBF".$content) ){
	print "寫入檔案 $file 成功<br/>";
}else{
	print "寫入檔案 $file 錯誤<br/>";
}
*/

fclose($fp);

$string = "
    <textarea name='index_name' rows='10' cols='100'></textarea>
    <a href='formData.csv' download='各處室資料.csv'>點選下載</a>
    <h1>你好 ".$username."</h1>
    <a href='logout.php'>登出</a>
"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>