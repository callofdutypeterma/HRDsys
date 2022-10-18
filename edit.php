<!DOCTYPE html>

<html>
<?php include('connect.php'); ?>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css?202207" rel="stylesheet" type="text/css">
    <title>國立中央大學<?php $sql = "SELECT * FROM backend_table;";$result = mysqli_query($connect, $sql);$row = mysqli_fetch_assoc($result);echo $row['academic_year']; ?>學年度各單位再聘兼任、繼續合聘教研人員系統</title>
</head>
<body>

<div class="wrap">

<?php

include('connect.php');

$id = $_GET['id'];
$myselect = $_GET['myselect'];

$sel = mysqli_query($connect,"SELECT * FROM $myselect WHERE id = $id;"); 

$row = mysqli_fetch_assoc($sel);

if(isset($_POST['submit'])){
    
    $jobtitle = $_POST['jobtitle'];
    $name = $_POST['name'];
    $semester = $_POST['semester'];
    $serviceSchool = $_POST['serviceSchool'];
    $serviceUnit = $_POST['serviceUnit'];
    $jobname = $_POST['jobname'];
    $SEMNoA = $_POST['SEMNoA'];
    $classNameA = $_POST['classNameA'];
    $hoursA = $_POST['hoursA'];
    if(isset($_POST['subjectA'])){
        $subjectA = $_POST['subjectA'];
    }else{
        $subjectA = "無";
    }
    $SEMNoB = $_POST['SEMNoB'];
    $classNameB = $_POST['classNameB'];
    $hoursB = $_POST['hoursB'];
    if(isset($_POST['subjectB'])){
        $subjectB = $_POST['subjectB'];
    }else{
        $subjectB = "無";
    }
    $notes = $_POST['notes'];
    $ipStatus = $_SERVER['HTTP_X_REAL_IP'];
    $timeStatus = gmdate('Y-m-d H:i:s',time() + 8*3600);
 
    $updateSql = "UPDATE $myselect SET job_title='$jobtitle',name='$name',semester='$semester',service_school='$serviceSchool',service_unit='$serviceUnit',job_name='$jobname',first_semester='$SEMNoA',first_class_name='$classNameA',first_class_hours='$hoursA',first_class_subject='$subjectA',second_semester='$SEMNoB',second_class_name='$classNameB',second_class_hours='$hoursB',second_class_subject='$subjectB',notes='$notes',ip_status = '$ipStatus',time_status = '$timeStatus' WHERE id=$id";
    $status = mysqli_query($connect, $updateSql);
 
    if ($status) {
        mysqli_close($connect); // Close connection
        header("location:index.php?myselect=$myselect"); // redirects to all records page
        exit;	
    } else {
        echo "錯誤: " . $updateSql . "<br>" . $connect->error;
    }
}

?>

<p>
    
    <form action="" method="post">
        
        <table border="1" width="90%" align="center" style="border-collapse: collapse; text-align: left; background-color: #DCDCDC;">
	
	        <tr>
		        <td><p>職稱</p>
                <select name="jobtitle">
                    <option value="兼任講師" <?php if(strcmp($row['job_title'],'兼任講師')==0) echo 'selected'; ?> >兼任講師                   </option>
                    <option value="兼任講師級專業技術人員" <?php if(strcmp($row['job_title'],'兼任講師級專業技術人員')==0) echo 'selected'; ?> >兼任講師級專業技術人員     </option>
                    <option value="兼任助理教授" <?php if(strcmp($row['job_title'],'兼任助理教授')==0) echo 'selected'; ?> >兼任助理教授               </option>
                    <option value="兼任助理教授級專業技術人員" <?php if(strcmp($row['job_title'],'兼任助理教授級專業技術人員')==0) echo 'selected'; ?> >兼任助理教授級專業技術人員 </option>
                    <option value="兼任副教授" <?php if(strcmp($row['job_title'],'兼任副教授')==0) echo 'selected'; ?> >兼任副教授                 </option>
                    <option value="兼任副教授級專業技術人員" <?php if(strcmp($row['job_title'],'兼任副教授級專業技術人員')==0) echo 'selected'; ?> >兼任副教授級專業技術人員   </option>
                    <option value="兼任教授" <?php if(strcmp($row['job_title'],'兼任教授')==0) echo 'selected'; ?> >兼任教授                   </option>
                    <option value="兼任教授級專業技術人員" <?php if(strcmp($row['job_title'],'兼任教授級專業技術人員')==0) echo 'selected'; ?> >兼任教授級專業技術人員     </option>
                    <option value="兼任助理研究員" <?php if(strcmp($row['job_title'],'兼任助理研究員')==0) echo 'selected'; ?> >兼任助理研究員             </option>
                    <option value="兼任副研究員" <?php if(strcmp($row['job_title'],'兼任副研究員')==0) echo 'selected'; ?> >兼任副研究員               </option>
                    <option value="兼任研究員" <?php if(strcmp($row['job_title'],'兼任研究員')==0) echo 'selected'; ?> >兼任研究員                 </option>
                    <option value="合聘講師" <?php if(strcmp($row['job_title'],'合聘講師')==0) echo 'selected'; ?> >合聘講師                   </option>
                    <option value="合聘講師級專業技術人員" <?php if(strcmp($row['job_title'],'合聘講師級專業技術人員')==0) echo 'selected'; ?> >合聘講師級專業技術人員     </option>
                    <option value="合聘助理教授" <?php if(strcmp($row['job_title'],'合聘助理教授')==0) echo 'selected'; ?> >合聘助理教授               </option>
                    <option value="合聘助理教授級專業技術人員" <?php if(strcmp($row['job_title'],'合聘助理教授級專業技術人員')==0) echo 'selected'; ?> >合聘助理教授級專業技術人員 </option>
                    <option value="合聘副教授" <?php if(strcmp($row['job_title'],'合聘副教授')==0) echo 'selected'; ?> >合聘副教授                 </option>
                    <option value="合聘副教授級專業技術人員" <?php if(strcmp($row['job_title'],'合聘副教授級專業技術人員')==0) echo 'selected'; ?> >合聘副教授級專業技術人員   </option>
                    <option value="合聘教授" <?php if(strcmp($row['job_title'],'合聘教授')==0) echo 'selected'; ?> >合聘教授                   </option>
                    <option value="合聘教授級專業技術人員" <?php if(strcmp($row['job_title'],'合聘教授級專業技術人員')==0) echo 'selected'; ?> >合聘教授級專業技術人員     </option>
                    <option value="合聘助理研究員" <?php if(strcmp($row['job_title'],'合聘助理研究員')==0) echo 'selected'; ?> >合聘助理研究員             </option>
                    <option value="合聘副研究員" <?php if(strcmp($row['job_title'],'合聘副研究員')==0) echo 'selected'; ?> >合聘副研究員               </option>
                    <option value="合聘研究員" <?php if(strcmp($row['job_title'],'合聘研究員')==0) echo 'selected'; ?> >合聘研究員                 </option>
                </select>
                </td>
                <td><p>姓名</p><input type="text" name="name" value="<?php echo $row['name']; ?>" <?php if($row['status'] == 'old') echo 'readonly'; ?> ></td>
                <td><p>擬授課學期別</p><input id="whole" type="radio" name="semester" value="全學年" <?php if(strcmp($row['semester'],'全學年')==0) echo 'checked'; ?> onclick="selectAll()"><label for="whole">全學年</label><input id="first" type="radio" name="semester" value="上學期" <?php if(strcmp($row['semester'],'上學期')==0) echo 'checked'; ?> onclick="selectFirst()"><label for="first">上學期</label><input id="second" type="radio" name="semester" value="下學期" <?php if(strcmp($row['semester'],'下學期')==0) echo 'checked'; ?> onclick="selectSecond()"><label for="second">下學期</label></td>
                <td><p>本職服務機關學校</p><input type="text" name="serviceSchool" value="<?php echo $row['service_school'] ?>"></td>
                <td><p>本職服務單位</p><input type="text" name="serviceUnit" value="<?php echo $row['service_unit'] ?>"></td>
                <td><p>本職職稱</p><textarea name="jobname" rows="4" cols="40"><?php echo $row['job_name'] ?></textarea></td>  
	        </tr>
                
            <tr>
                <td colspan="6">
                    <table border="0" width="100%" align="center" style="border-collapse: collapse; text-align: left;">
                        <tr>
                            <td>授課學期<input id="SEMNoA" type="number" name="SEMNoA" value="<?php echo $row['first_semester'] ?>" min="1" max="2" readonly></td>
                            <td><input id="classNameA" type="radio" name="classNameA" <?php if(strpos($row['first_class_name'],'指導研究生') === false && $row['first_semester'] == '1') echo 'checked'; ?> onclick="selectClassNameA()"><label for="classNameA">授課名稱</label><input id="classNameInputA" type="text" name="classNameA" value="<?php if(strpos($row['first_class_name'],'指導研究生') === false) echo $row['first_class_name']; ?>"><br><input id="GradA" type="radio" name="classNameA" value="指導研究生" <?php if(strcmp($row['first_class_name'],'指導研究生')==0) echo 'checked'; ?> onclick="selectGradA()"><label for="GradA">指導研究生</label><br><input type="radio" id="coresearchA" name="classNameA" value="指導研究生 + 協助合作研究" <?php if(strcmp($row['first_class_name'],'指導研究生 + 協助合作研究')==0) echo 'checked'; ?> onclick="selectGradA()"><label for="coresearchA">指導研究生 + 協助合作研究</label></td>
                            <td>每週時數<input id="hoursA" type="number" name="hoursA" value="<?php echo $row['first_class_hours'] ?>" min="0.0" max="4.0" step="0.1"></td>
                            <td><p>必選修</p><input id="compulsoryA" type="radio" name="subjectA" value="必" <?php if(strcmp($row['first_class_subject'],'必')==0) echo 'checked'; ?> ><label for="compulsoryA">必</label><input id="requiredA" type="radio" name="subjectA" value="選" <?php if(strcmp($row['first_class_subject'],'選')==0) echo 'checked'; ?> ><label for="requiredA">選</label></td>
                        </tr>

                        <tr>
                            <td>授課學期<input id="SEMNoB" type="number" name="SEMNoB" value="<?php echo $row['second_semester'] ?>" min="1" max="2" readonly></td>
                            <td><input id="classNameB" type="radio" name="classNameB" <?php if(strpos($row['second_class_name'],'指導研究生') === false && $row['second_semester'] == '2') echo 'checked'; ?> onclick="selectClassNameB()"><label for="classNameB">授課名稱</label><input id="classNameInputB" type="text" name="classNameB" value="<?php if(strpos($row['second_class_name'],'指導研究生') === false) echo $row['second_class_name']; ?>"><br><input id="GradB" type="radio" name="classNameB" value="指導研究生" <?php if(strcmp($row['second_class_name'],'指導研究生')==0) echo 'checked'; ?> onclick="selectGradB()"><label for="GradB">指導研究生</label><br><input type="radio" id="coresearchB" name="classNameB" value="指導研究生 + 協助合作研究" <?php if(strcmp($row['second_class_name'],'指導研究生 + 協助合作研究')==0) echo 'checked'; ?> onclick="selectGradB()"><label for="coresearchB">指導研究生 + 協助合作研究</label></td>
                            <td>每週時數<input id="hoursB" type="number" name="hoursB" value="<?php echo $row['second_class_hours'] ?>" min="0.0" max="4.0" step="0.1"></td>
                            <td><p>必選修</p><input id="compulsoryB" type="radio" name="subjectB" value="必" <?php if(strcmp($row['second_class_subject'],'必')==0) echo 'checked'; ?>><label for="compulsoryB">必</label><input id="requiredB" type="radio" name="subjectB" value="選" <?php if(strcmp($row['second_class_subject'],'選')==0) echo 'checked'; ?>><label for="requiredB">選</label></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="text-align: center;">備註</td>
                <td colspan="5"><textarea name="notes" rows="4" cols="50"><?php echo $row['notes'] ?></textarea></td>
            </tr>

        </table>

    <p><input type="submit" name="submit" value="儲存"> <a href="index.php?myselect=<?php echo $myselect; ?>" class="cancel_btn" >取消</a></p>
            
    </form>
</p>

<script type="text/javascript">

    function selectFirst() {
    document.getElementById("SEMNoA").value = "1";
    document.getElementById("hoursA").value = "";
    document.getElementById("SEMNoB").value = "";
    document.getElementById("classNameInputB").value = "";
    document.getElementById("hoursB").value = "0";
    //document.getElementById("SEMNoA").readOnly = false;
    document.getElementById("SEMNoA").style.backgroundColor = "#FFF";
    document.getElementById("classNameA").disabled = false;
    document.getElementById("GradA").disabled = false;
    document.getElementById("classNameInputA").readOnly = false;
    document.getElementById("classNameInputA").style.backgroundColor = "#FFF";
    document.getElementById("hoursA").readOnly = false;
    document.getElementById("hoursA").style.backgroundColor = "#FFF";
    document.getElementById("compulsoryA").disabled = false;
    document.getElementById("requiredA").disabled = false;
    //document.getElementById("SEMNoB").readOnly = true;
    document.getElementById("SEMNoB").style.backgroundColor = "#ccc";
    document.getElementById("classNameB").disabled = true;
    document.getElementById("GradB").disabled = true;
    document.getElementById("classNameInputB").readOnly = true;
    document.getElementById("classNameInputB").style.backgroundColor = "#ccc";
    document.getElementById("hoursB").readOnly = true;
    document.getElementById("hoursB").style.backgroundColor = "#ccc";
    document.getElementById("compulsoryB").disabled = true;
    document.getElementById("compulsoryB").checked = false;
    document.getElementById("requiredB").disabled = true;
    document.getElementById("requiredB").checked = false;
    }

    function selectSecond() {
    document.getElementById("SEMNoA").value = "";
    document.getElementById("classNameInputA").value = "";
    document.getElementById("hoursA").value = "0";
    document.getElementById("SEMNoB").value = "2";
    document.getElementById("hoursB").value = "";
    //document.getElementById("SEMNoA").readOnly = true;
    document.getElementById("SEMNoA").style.backgroundColor = "#ccc";
    document.getElementById("classNameA").disabled = true;
    document.getElementById("GradA").disabled = true;
    document.getElementById("classNameInputA").readOnly = true;
    document.getElementById("classNameInputA").style.backgroundColor = "#ccc";
    document.getElementById("hoursA").readOnly = true;
    document.getElementById("hoursA").style.backgroundColor = "#ccc";
    document.getElementById("compulsoryA").disabled = true;
    document.getElementById("compulsoryA").checked = false;
    document.getElementById("requiredA").disabled = true;
    document.getElementById("requiredA").checked = false;
    //document.getElementById("SEMNoB").readOnly = false;
    document.getElementById("SEMNoB").style.backgroundColor = "#FFF";
    document.getElementById("classNameB").disabled = false;
    document.getElementById("GradB").disabled = false;
    document.getElementById("classNameInputB").readOnly = false;
    document.getElementById("classNameInputB").style.backgroundColor = "#FFF";
    document.getElementById("hoursB").readOnly = false;
    document.getElementById("hoursB").style.backgroundColor = "#FFF";
    document.getElementById("compulsoryB").disabled = false;
    document.getElementById("requiredB").disabled = false; 
    }

    function selectAll() {
    document.getElementById("SEMNoA").value = "1";
    document.getElementById("SEMNoB").value = "2";
    document.getElementById("hoursA").value = "";
    document.getElementById("hoursB").value = "";
    //document.getElementById("SEMNoA").readOnly = false;
    document.getElementById("SEMNoA").style.backgroundColor = "#FFF";
    document.getElementById("classNameA").disabled = false;
    document.getElementById("GradA").disabled = false;
    document.getElementById("classNameInputA").readOnly = false;
    document.getElementById("classNameInputA").style.backgroundColor = "#FFF";
    document.getElementById("hoursA").readOnly = false;
    document.getElementById("hoursA").style.backgroundColor = "#FFF";
    document.getElementById("compulsoryA").disabled = false;
    document.getElementById("requiredA").disabled = false;
    //document.getElementById("SEMNoB").readOnly = false;
    document.getElementById("SEMNoB").style.backgroundColor = "#FFF";
    document.getElementById("classNameB").disabled = false;
    document.getElementById("GradB").disabled = false;
    document.getElementById("classNameInputB").readOnly = false;
    document.getElementById("classNameInputB").style.backgroundColor = "#FFF";
    document.getElementById("hoursB").readOnly = false;
    document.getElementById("hoursB").style.backgroundColor = "#FFF";
    document.getElementById("compulsoryB").disabled = false;
    document.getElementById("requiredB").disabled = false;
    }

    function selectGradA() {
    document.getElementById("classNameInputA").readOnly = true;
    document.getElementById("classNameInputA").style.backgroundColor = "#ccc";
    document.getElementById("classNameInputA").value = "";
    document.getElementById("hoursA").readOnly = true;
    document.getElementById("hoursA").style.backgroundColor = "#ccc";
    document.getElementById("hoursA").value = "0";
    document.getElementById("compulsoryA").disabled = true;
    document.getElementById("compulsoryA").checked = false;
    document.getElementById("requiredA").disabled = true;
    document.getElementById("requiredA").checked = false;
    }

    function selectClassNameA() {
    document.getElementById("classNameInputA").readOnly = false;
    document.getElementById("classNameInputA").style.backgroundColor = "#FFF";
    document.getElementById("hoursA").readOnly = false;
    document.getElementById("hoursA").style.backgroundColor = "#FFF";
    document.getElementById("hoursA").value = "";
    document.getElementById("compulsoryA").disabled = false;
    document.getElementById("requiredA").disabled = false;
    }

    function selectGradB() {
    document.getElementById("classNameInputB").readOnly = true;
    document.getElementById("classNameInputB").style.backgroundColor = "#ccc";
    document.getElementById("classNameInputB").value = "";
    document.getElementById("hoursB").readOnly = true;
    document.getElementById("hoursB").style.backgroundColor = "#ccc";
    document.getElementById("hoursB").value = "0";
    document.getElementById("compulsoryB").disabled = true;
    document.getElementById("compulsoryB").checked = false;
    document.getElementById("requiredB").disabled = true;
    document.getElementById("requiredB").checked = false;
    }

    function selectClassNameB() {
    document.getElementById("classNameInputB").readOnly = false;
    document.getElementById("classNameInputB").style.backgroundColor = "#FFF";
    document.getElementById("hoursB").readOnly = false;
    document.getElementById("hoursB").style.backgroundColor = "#FFF";
    document.getElementById("hoursB").value = "";
    document.getElementById("compulsoryB").disabled = false;
    document.getElementById("requiredB").disabled = false;
    }

</script>

</div>

</body>
</html>