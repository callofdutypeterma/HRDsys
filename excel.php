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
$contentB = "���D�@,���D�G,���D�T,���D��,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");

fwrite($fp, $contentB."\r\n");
fwrite($fp, mb_convert_encoding($content,"big5"));  //��1


//fwrite($fp, $content);  //��2

//�p�G�ϥε�2Excel�|�X�{�ýX�Aexcel �X�{�ýX����]�O�ɭ��L BOM(https://en.wikipedia.org/wiki/Byte_order_mark)
//���qTxt�ɥi�ϥε�2
//��1�O�t�@�ظѪk

/*
if(fwrite($fp, "\xEF\xBB\xBF".$content) ){
	print "�g�J�ɮ� $file ���\<br/>";
}else{
	print "�g�J�ɮ� $file ���~<br/>";
}
*/

fclose($fp);

echo $row["name"];

$string = "<a href='formData.csv' download='formData.csv'>�I��U��</a>"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>
