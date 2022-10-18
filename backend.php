<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css?202207" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="themes/easydropdown.css?202207"/>
    <link rel="SHORTCUT ICON" href="assets/images/NCU.ico" />
    <title>後臺系統</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="src/jquery.easydropdown.js"></script>
</head>
<body>

<div class="wrap">
<a href='/' class='index'>回首頁</a><br>
</div>

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
fwrite($fp, mb_convert_encoding($headline,"big5")."\r\n");

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

if(isset($_GET["num"])) {
    $num = $_GET['num'];
    $updateSql = "UPDATE backend_table SET academic_year = '$num' WHERE id = 1";
    $status = mysqli_query($connect, $updateSql);
}

if(isset($_POST['submit'])){
    $indexnote = $_POST['indexnote'];
    $adjunctnote = $_POST['adjunctnote'];
    $jointappointmentnote = $_POST['jointappointmentnote'];
    $updateSql = "UPDATE backend_table SET note = '$indexnote', adjunct_note = '$adjunctnote', joint_appointment_note = '$jointappointmentnote'  WHERE id = 1";
    $status = mysqli_query($connect, $updateSql);
}

$sql = "SELECT * FROM backend_table;";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

echo"<h1>你好 ".$username."</h1>";
echo "
<form method ='GET' action='' name='academicyear'>
本學年度： 
    <input type='number' name='num' value=".$row["academic_year"]." min='110' max='210' step='1' >
學年度
</form><br>
";

echo "<form action='' method='post''>";
echo "<textarea name='indexnote' class='textarea' id='index_note' style='font-size:16px;width:100%;height:200px;'>".$row['note']."</textarea>
<textarea name='adjunctnote' class='textarea' id='adjunct_note' style='font-size:16px;width:100%;height:200px;'>".$row['adjunct_note']."</textarea>
<textarea name='jointappointmentnote' class='textarea' id='joint_appointment_note' style='font-size:16px;width:100%;height:200px;'>".$row['joint_appointment_note']."</textarea>
<button type='submit' name='submit' id='editButton' onclick='myFunction();toggleText(this.id)'>修改</button></form><br>";
echo "<script>document.getElementById('index_note').readOnly = true;document.getElementById('adjunct_note').readOnly = true;document.getElementById('joint_appointment_note').readOnly = true;</script>";

$string = "
    各處室資料：<a href='formData.csv' download='各處室資料.csv'>點選下載</a><br><br>
    <a href='logout.php' class='logout'>登出</a>
"; 
//$result = mb_convert_encoding($string,"utf-8","big5");
echo $string;


?>

<script>

window.onload=function(){
  var theSelect=document.getElementsByName("num");
  var theForm=document.getElementsByName("academicyear");
  theSelect[0].onchange=function(){
     theForm[0].submit()
  }
}

function myFunction() {
  /*var textarea = document.getElementById("index_note");*/
  var textarea = document.querySelectorAll('#index_note, #adjunct_note, #joint_appointment_note');

  for (var i = 0; i < textarea.length; i++){
    if(textarea[i].readOnly == true){
        textarea[i].readOnly = false;
    }else{
        textarea[i].readOnly = true;
    }
  }
}

function toggleText(button_id)  {
    var el = document.getElementById(button_id);
    if (el.firstChild.data == "修改"){
        el.firstChild.data = "儲存";
        document.getElementById(button_id).setAttribute('type', 'button');
    }else{
        el.firstChild.data = "修改";
        document.getElementById(button_id).setAttribute('type', 'submit');
    }
}

</script>

</body>
</html>