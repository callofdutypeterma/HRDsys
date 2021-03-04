<!DOCTYPE html>

<?php

//header("Content-type:text/html;charset=utf-8");

include('connect.php');

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

    /*
    echo "職稱：$jobtitle<br/>";
    echo "姓名：$name<br/>";
    echo "擬授課學期別：$semester<br/>";
    echo "專職單位及職稱：$jobname<br/>";
    echo "授課學期：$semnum<br/>";
    echo "授課名稱：$classname<br/>";
    echo "每週時數：$hours<br/>";
    echo "必選修：$subject<br/>";
    echo "備註：$notes<br/>";
    */
 
    $insertSql = "INSERT INTO units (jobtitle,name,semester,jobname,semnum,classname,hours,subject,notes) VALUES ('$jobtitle','$name', '$semester','$jobname','$semnum','$classname','$hours','$subject','$notes')";
    $status = mysqli_query($connect, $insertSql);
 
    if ($status) {
        echo '新增成功';
    } else {
        echo "錯誤: " . $insertSql . "<br>" . $connect->error;
    }
}

$result = mysqli_query($connect, "SELECT * FROM units;");

if ($result == true || isset($_POST['submit'])==true || isset($_POST['delete'])==true) {

    if(isset($_POST['delete'])==true){
        
        $deleteSql = "DELETE FROM units WHERE id = 10;";
        mysqli_query($connect, $deleteSql);
        $result = mysqli_query($connect, "SELECT * FROM units;");
    }

    if (mysqli_num_rows($result) > 0) {
        
        printf("有 %d 筆資料\n", mysqli_num_rows($result));

        // output data of each row
        $i=0;

        while($row = mysqli_fetch_assoc($result)) {
        echo "
        
        <form action='' method='post'>

            <table border='1' width='60%' align='center'>
	
	            <tr>
		            <th rowspan='2'>職稱</th>
		            <th rowspan='2'>姓名</th>
		            <th rowspan='2'>擬授課學期別</th>
		            <th rowspan='2'>專職單位及職稱</th>
		            <th colspan='4'>再聘情形</th>
		            <th rowspan='2'>備註</th>
                    <th rowspan='3'><button id='mod$i' onClick='reply_click(this.id)'>修改</button></th>
                    <th rowspan='3'><input type='submit' name='delete' id='del$i' value='刪除'></th>
	            </tr>

	            <tr>
		            <td>授課學期</td>
		            <td>授課名稱</td>
		            <td>每週時數</td>
		            <td>必選修</td>
	            </tr>
	
	            <tr>
		            <td><input type='text' name='jobtitle$i' value='".$row["jobtitle"]."'></td>
                    <td>".$row["name"]."</td>
		            <td>".$row["semester"]."</td>
		            <td>".$row["jobname"]."</td>
		            <td>".$row["semnum"]."</td>
		            <td>".$row["classname"]."</td>
		            <td>".$row["hours"]."</td>
		            <td>".$row["subject"]."</td>
		            <td>".$row["notes"]."</td>
	            </tr>

            </table>

        </form>
        
        ";
        $i++;
        }
    } else {
        echo "無資料";
    }

    /* free result set */
    mysqli_free_result($result);
}
?>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>
    <li>[<a href="example.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
    <form action="" method="post">
        
    
        <table border="1" align="center">
	
	        <tr>
		        <td><p>職稱</p><input type="text"  name="jobtitle"></td>
                <td><p>姓名</p><input type="text" name="name"></td>
                <td><p>擬授課學期別</p><input type="radio" name="semester" value="全學年">全學年<input type="radio" name="semester" value="上學期">上學期<input type="radio" name="semester" value="下學期">下學期</td>
                <td><p>專職單位及職稱</p><input type="text" name="jobname"></td>
                <td>授課學期<input type="number" name="semnum" min="1" max="2"></td>
                <td><input type="radio" name="classname">授課名稱<input type="text" name="classname"><br><input type="radio" name="classname" value="指導研究生">指導研究生</td>
                <td>每週時數<input type="number" name="hours" min="1" max="4"></td>
                <td><p>必選修</p><input type="radio" name="subject" value="必">必<input type="radio" name="subject" value="選">選</td>
	        </tr>
            
            <tr>
                <td colspan="8"><p>備註</p><input type="text" name="notes"></td>
            </tr>

        </table>

        <p><input type="submit" name="submit" value="送出資料"></p>


    </form>

    <!--<button onClick="GFG_Fun()"> click here </button>
    
    <script> 
        var down = document.getElementById("GFG_DOWN"); 
            
        // Create a break line element 
        var br = document.createElement("br");  
        function GFG_Fun() { 
                
            // Create a form synamically 
            var form = document.createElement("form"); 
            form.setAttribute("method", "post"); 
            form.setAttribute("action", "submit.php"); 
  
            // Create an input element for Full Name 
            var FN = document.createElement("input"); 
            FN.setAttribute("type", "text"); 
            FN.setAttribute("name", "FullName"); 
            FN.setAttribute("placeholder", "Full Name"); 
  
            // Create an input element for date of birth 
            var DOB = document.createElement("input"); 
            DOB.setAttribute("type", "text"); 
            DOB.setAttribute("name", "dob"); 
            DOB.setAttribute("placeholder", "DOB"); 
  
            // Create an input element for emailID 
            var EID = document.createElement("input"); 
            EID.setAttribute("type", "text"); 
            EID.setAttribute("name", "emailID"); 
            EID.setAttribute("placeholder", "E-Mail ID"); 
  
            // Create an input element for password 
            var PWD = document.createElement("input"); 
            PWD.setAttribute("type", "password"); 
            PWD.setAttribute("name", "password"); 
            PWD.setAttribute("placeholder", "Password"); 
  
            // Create an input element for retype-password 
            var RPWD = document.createElement("input"); 
            RPWD.setAttribute("type", "password"); 
            RPWD.setAttribute("name", "reTypePassword"); 
            RPWD.setAttribute("placeholder", "ReEnter Password"); 
  
            // create a submit button 
            var s = document.createElement("input"); 
            s.setAttribute("type", "submit"); 
            s.setAttribute("value", "Submit"); 
                  
            // Append the full name input to the form 
            form.appendChild(FN);  
                  
            // Inserting a line break 
            form.appendChild(br.cloneNode());  
                  
            // Append the DOB to the form 
            form.appendChild(DOB);  
            form.appendChild(br.cloneNode());  
                  
            // Append the emailID to the form 
            form.appendChild(EID);  
            form.appendChild(br.cloneNode());  
                  
            // Append the Password to the form 
            form.appendChild(PWD);  
            form.appendChild(br.cloneNode());  
                  
            // Append the ReEnterPassword to the form 
            form.appendChild(RPWD);  
            form.appendChild(br.cloneNode());  
                  
            // Append the submit button to the form 
            form.appendChild(s);  
  
            document.getElementsByTagName("body")[0] 
            .appendChild(form); 
        } 
    </script>
    
    <button id="1" onClick="reply_click(this.id)">B1</button>
    <button id="2" onClick="reply_click(this.id)">B2</button>
    <button id="3" onClick="reply_click(this.id)">B3</button>
    -->
    <script type="text/javascript">
      function reply_click(clicked_id)
      {
          alert(clicked_id);
      }
    </script>

</body>
</html>