<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>兼任續聘系統</title>
</head>
<body>




<?php

include('connect.php');

$id = $_GET['id'];
$myselect = $_GET['myselect'];

$sel = mysqli_query($connect,"SELECT * FROM $myselect WHERE id = $id;"); 

$row = mysqli_fetch_assoc($sel);

if(strcmp($row["semester"],"全學年")==0) echo 'checked';

/*
if($del){
    mysqli_close($connect); // Close connection
    header("location:index.php?myselect=$myselect"); // redirects to all records page
    exit;	
}
else{
    echo "Error deleting record"; // display error message if not delete
}
*/

?>

<p>
    <form action="" method="post">
        
        <table border="1" width="90%" align="center" style="text-align: left;">
	
	        <tr>
		        <td rowspan="2"><p>職稱</p><input type="text" name="jobtitle" value="<?php echo $row['job_title'] ?>"></td>
                <td rowspan="2"><p>姓名</p><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
                <td rowspan="2"><p>擬授課學期別</p><input id="whole" type="radio" name="semester" value="全學年" <?php if(strcmp($row['semester'],'全學年')==0) echo 'checked'; ?> onclick="selectAll()"><label for="whole">全學年</label><input id="first" type="radio" name="semester" value="上學期" onclick="selectFirst()"><label for="first">上學期</label><input id="second" type="radio" name="semester" value="下學期" onclick="selectSecond()"><label for="second">下學期</label></td>
                <td rowspan="2"><p>專職單位及職稱</p><textarea name="jobname" rows="4" cols="50"><?php echo $row['job_name'] ?></textarea></td>
                
                <td>授課學期<input id="SEMNoA" type="number" name="SEMNoA" min="1" max="2" readonly></td>
                <td><input id="classNameA" type="radio" name="classNameA" onclick="selectClassNameA()"><label for="classNameA">授課名稱</label><input id="classNameInputA" type="text" name="classNameA"><br><input id="GradA" type="radio" name="classNameA" value="指導研究生" onclick="selectGradA()"><label for="GradA">指導研究生</label></td>
                <td>每週時數<input id="hoursA" type="number" name="hoursA" min="0" max="4"></td>
                <td><p>必選修</p><input id="compulsoryA" type="radio" name="subjectA" value="必"><label for="compulsoryA">必</label><input id="requiredA" type="radio" name="subjectA" value="選"><label for="requiredA">選</label></td>
	        </tr>
            
            <tr>
                <td>授課學期<input id="SEMNoB" type="number" name="SEMNoB" min="1" max="2" readonly></td>
                <td><input id="classNameB" type="radio" name="classNameB" onclick="selectClassNameB()"><label for="classNameB">授課名稱</label><input id="classNameInputB" type="text" name="classNameB"><br><input id="GradB" type="radio" name="classNameB" value="指導研究生" onclick="selectGradB()"><label for="GradB">指導研究生</label></td>
                <td>每週時數<input id="hoursB" type="number" name="hoursB" min="0" max="4"></td>
                <td><p>必選修</p><input id="compulsoryB" type="radio" name="subjectB" value="必"><label for="compulsoryB">必</label><input id="requiredB" type="radio" name="subjectB" value="選"><label for="requiredB">選</label></td>
            </tr>

            <tr>
                <td colspan="8"><p>備註</p><textarea name="notes" rows="4" cols="50"></textarea></td>
            </tr>

        </table>

        <p><input type="submit" name="submit" value="新增資料"></p>
            
    </form>
</p>

</body>
</html>