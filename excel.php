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
//'.$row["name"].'",'.$row["semester"].',"'.$row["job_name"].'"'; //�P���_��n�����޸��а_�ӡA�M��b�s�边�����_��
$contentB = "���,¾��,�m�W,���½ҾǴ��O,��¾�A�Ⱦ����Ǯ�,��¾�A�ȳ��,��¾¾��,�½ҾǴ��@,�½ҦW��,�C�g�ɼ�,�����,�½ҾǴ��G,�½ҦW��,�C�g�ɼ�,�����,�Ƶ�,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");
fwrite($fp, $contentB."\r\n");

while($rowA = mysqli_fetch_assoc($selA)) {

    $selB = mysqli_query($connect,"SELECT * FROM ".$rowA['unit_name'].";");
    while($rowB = mysqli_fetch_assoc($selB)) {

        $contentA = $rowA["chinese_name"].',"'.$rowB["job_title"].'",'.$rowB["name"].','.$rowB["semester"].','.$rowB["service_school"].','.$rowB["service_unit"].',"'.$rowB["job_name"].'",'.$rowB["first_semester"].','.$rowB["first_class_name"].','.$rowB["first_class_hours"].','.$rowB["first_class_subject"].','.$rowB["second_semester"].','.$rowB["second_class_name"].','.$rowB["second_class_hours"].','.$rowB["second_class_subject"].',"'.$rowB["notes"].'",';
        fwrite($fp, mb_convert_encoding($contentA,"big5")."\r\n");  //��1

    }
}

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

$string = "<a href='formData.csv' download='formData.csv'>�I��U��</a>"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>