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

$sel = mysqli_query($connect,"SELECT * FROM pe_office;"); 

$row = mysqli_fetch_assoc($sel);

$file = "formData.csv";
$content = '"'.$row["job_title"].'
'.$row["name"].'",'.$row["semester"].',"'.$row["job_name"].'"';
$contentB = "標題一,標題二,標題三,標題五,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");

fwrite($fp, $contentB."\r\n");
fwrite($fp, mb_convert_encoding($content,"big5"));  //註1


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

echo $row["name"];

$string = "<a href='formData.csv' download='formData.csv'>點選下載</a>"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>
