<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="SHORTCUT ICON" href="/assets/images/NCU.ico" />
    <title>EXCEL</title>
</head>
<body>

<?php

//header('Pragma: no-cache');
//header('Expires: 0');
//header('Content-Type: text/csv;charset=utf-8');
//header('Content-Disposition: attachment; filename=output.csv' ); 

include('connect.php');


$selA = mysqli_query($connect,"SELECT * FROM units_information;"); 

$file = "formData.csv";
//$content = '"'.$row["job_title"].'
//'.$row["name"].'",'.$row["semester"].',"'.$row["job_name"].'"'; //同格斷行要用雙引號標起來，然後在編輯器直接斷行
$contentB = "單位,職稱,姓名,擬授課學期別,本職服務機關學校,本職服務單位,本職職稱,授課學期一,授課名稱,每週時數,必選修,授課學期二,授課名稱,每週時數,必選修,備註,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");
fwrite($fp, $contentB."\r\n");

while($rowA = mysqli_fetch_assoc($selA)) {

    $selB = mysqli_query($connect,"SELECT * FROM ".$rowA['unit_name'].";");
    while($rowB = mysqli_fetch_assoc($selB)) {

        $contentA = $rowA["chinese_name"].',"'.$rowB["job_title"].'",'.$rowB["name"].','.$rowB["semester"].','.$rowB["service_school"].','.$rowB["service_unit"].',"'.$rowB["job_name"].'",'.$rowB["first_semester"].','.$rowB["first_class_name"].','.$rowB["first_class_hours"].','.$rowB["first_class_subject"].','.$rowB["second_semester"].','.$rowB["second_class_name"].','.$rowB["second_class_hours"].','.$rowB["second_class_subject"].',"'.$rowB["notes"].'",';
        fwrite($fp, mb_convert_encoding($contentA,"big5")."\r\n");  //註1

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

$string = "<a href='formData.csv' download='formData.csv'>點選下載</a>"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>