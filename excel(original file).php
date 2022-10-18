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

session_start();  //�ܭ��n�A�i�H�Ϊ��ܼƦs�bsession��

include('connect.php');

$username=$_SESSION["username"];

$selA = mysqli_query($connect,"SELECT * FROM units_information;"); 

$file = "formData.csv";

//�P���_��n�����޸��а_�ӡA�M��b�s�边�����_��
$headline = "���,¾��,�m�W,���½ҾǴ��O,��¾�A�Ⱦ����Ǯ�,��¾�A�ȳ��,��¾¾��,�½ҾǴ��@,�½ҦW��,�C�g�ɼ�,�����,�½ҾǴ��G,�½ҦW��,�C�g�ɼ�,�����,�Ƶ�,";
$fp=fopen($file,"w")
	or exit ("file $file error<br/>");
fwrite($fp, $headline."\r\n");

while($rowA = mysqli_fetch_assoc($selA)) {

    $selB = mysqli_query($connect,"SELECT * FROM ".$rowA['unit_name'].";");
    while($rowB = mysqli_fetch_assoc($selB)) {

        $content = $rowA["chinese_name"].',"'.$rowB["job_title"].'",'.$rowB["name"].','.$rowB["semester"].','.$rowB["service_school"].','.$rowB["service_unit"].',"'.$rowB["job_name"].'",'.$rowB["first_semester"].','.$rowB["first_class_name"].','.$rowB["first_class_hours"].','.$rowB["first_class_subject"].','.$rowB["second_semester"].','.$rowB["second_class_name"].','.$rowB["second_class_hours"].','.$rowB["second_class_subject"].',"'.$rowB["notes"].'",';
        fwrite($fp, mb_convert_encoding($content,"big5")."\r\n");  //��1

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

$string = "
    <textarea name='index_name' rows='10' cols='100'></textarea>
    <a href='formData.csv' download='�U�B�Ǹ��.csv'>�I��U��</a>
    <h1>�A�n ".$username."</h1>
    <a href='logout.php'>�n�X</a>
"; 
$result = mb_convert_encoding($string,"utf-8","big5");
echo $result;


?>

</body>
</html>