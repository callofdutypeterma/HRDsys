<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>兼任續聘系統</title>
</head>
<body>
    
    <a href='index.php' class='index'>回首頁</a><br>
    
    <select name="pets" id="mySelect" onchange="myFunction()">
        <option>-----------請選擇你的單位-----------</option>
        <option value="library">01 圖書館                           </option>
        <option>02 總教學中心                       </option>
        <option value="units">03 體育室                           </option>
        <option value="ge">04 通識教育中心                     </option>
        <option>05 語言中心                         </option>
        <option>06 太空及遙測研究中心               </option>
        <option>07 光電科學研究中心                 </option>
        <option>08 環境研究中心                     </option>
        <option>09 通訊系統研究中心                 </option>
        <option>10 臺灣經濟發展研究中心             </option>
        <option>11 人文研究中心                     </option>
        <option>12 數據分析方法研究中心             </option>
        <option>13 前瞻科技研究中心                 </option>
        <option>14 聯合研究中心                     </option>
        <option>15 軟體研究中心                     </option>
        <option>16 災害防治研究中心                 </option>
        <option>17 學習科技研究中心                 </option>
        <option>18 奈米科技研究中心                 </option>
        <option>19 全球定位科學與應用研究中心       </option>
        <option>20 新世代光驅動電池模組研究中心     </option>
        <option>21 文學院                           </option>
        <option>22 中國文學系                       </option>
        <option>23 英美語文學系                     </option>
        <option>24 法國語文學系                     </option>
        <option>25 哲學研究所                       </option>
        <option>26 歷史研究所                       </option>
        <option>27 藝術學研究所                     </option>
        <option>28 學習與教學研究所                 </option>
        <option>29 師資培育中心                     </option>
        <option>30 文學院學士班                     </option>
        <option>31 理學院                           </option>
        <option>32 數學系                           </option>
        <option>33 物理學系                         </option>
        <option>34 化學學系                         </option>
        <option>35 統計研究所                       </option>
        <option>36 光電科學與工程學系               </option>
        <option>37 天文研究所                       </option>
        <option>38 工學院                           </option>
        <option>39 土木工程學系                     </option>
        <option>40 機械工程學系                     </option>
        <option>41 能源工程研究所                   </option>
        <option>42 化學工程與材料工程學系           </option>
        <option>43 營建管理研究所                   </option>
        <option>44 環境工程研究所                   </option>
        <option>45 材料科學與工程研究所             </option>
        <option>46 管理學院                         </option>
        <option>47 企業管理學系                     </option>
        <option>48 產業經濟研究所                   </option>
        <option>49 資訊管理學系                     </option>
        <option>50 經濟學系                         </option>
        <option>51 工業管理研究所                   </option>
        <option>52 人力資源管理研究所               </option>
        <option>53 財務金融學系                     </option>
        <option>54 會計研究所                       </option>
        <option>55 資訊電機學院                     </option>
        <option>56 電機工程學系                     </option>
        <option>57 資訊工程學系                     </option>
        <option>58 通訊工程學系                     </option>
        <option>59 網路學習科技研究所               </option>
        <option>60 地球科學學院                     </option>
        <option>61 地球科學學系                     </option>
        <option>62 大氣科學學系                     </option>
        <option>63 太空科學與工程學系               </option>
        <option>64 應用地質研究所                   </option>
        <option>65 水文與海洋科學研究所             </option>
        <option>66 客家學院                         </option>
        <option>67 法律與政府研究所                 </option>
        <option>68 客家語文暨社會科學學系           </option>
        <option>69 生醫理工學院                     </option>
        <option>70 生命科學系                       </option>
        <option>71 生醫科學與工程學系               </option>
        <option>72 認知神經科學研究所               </option>
        <option>73 高能與強場物理研究中心           </option>
        <option>74 太空科學與科技研究中心           </option>
        <option>75 新世代光驅動電池模組研究中心     </option>
        <option>76 地震災害鏈風險評估及管理研究中心 </option>
        <option>77 環境監測技術聯合中心             </option>
        <option>78 認知智慧與精準健康照護研究中心   </option>
    </select><br>

    <script>
        function myFunction() {
          var x = document.getElementById("mySelect").value;
          //document.getElementById("demo").innerHTML = "You selected: " + x;
          window.location.href = 'index.php?myselect='+ x;
        }
    </script>

<?php

//header("Content-type:text/html;charset=utf-8");

include('connect.php');

//${'m' . $m2} = 3;

if (isset($_GET['myselect'])==true) {

    $myselect = $_GET['myselect'];
}

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
 
    $insertSql = "INSERT INTO $myselect (jobtitle,name,semester,jobname,semnum,classname,hours,subject,notes) VALUES ('$jobtitle','$name', '$semester','$jobname','$semnum','$classname','$hours','$subject','$notes')";
    $status = mysqli_query($connect, $insertSql);
 
    if ($status) {
        echo '新增成功';
    } else {
        echo "錯誤: " . $insertSql . "<br>" . $connect->error;
    }
}

//$sql = "SELECT * FROM units;";
//$result = mysqli_query($connect, $sql);

if (isset($_POST['submit'])==true || isset($_GET['myselect'])==true) {

    echo $myselect;

    $sql = "SELECT * FROM ".$myselect.";";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        printf("有 %d 筆資料\n", mysqli_num_rows($result));

        // output data of each row
        $i=0;

        echo "
        
                <table border='1' width='60%' align='center'>
	
	                <tr>
		                <th rowspan='2'>職稱</th>
		                <th rowspan='2'>姓名</th>
		                <th rowspan='2'>擬授課學期別</th>
		                <th rowspan='2'>專職單位及職稱</th>
		                <th colspan='4'>再聘情形</th>
		                <th rowspan='2'>備註</th>
                        <th rowspan='2'>動作</th>
                        
	                </tr>

	                <tr>
		                <td>授課學期</td>
		                <td>授課名稱</td>
		                <td>每週時數</td>
		                <td>必選修</td>
	                </tr>

        ";

        while($row = mysqli_fetch_assoc($result)) {
            
            ${'id' . $i} = $row["id"];
            
            echo "
	
	                <tr>
		                <td>".$row["jobtitle"]."</td>
                        <td>".$row["name"]."</td>
		                <td>".$row["semester"]."</td>
		                <td>".$row["jobname"]."</td>
		                <td>".$row["semnum"]."</td>
		                <td>".$row["classname"]."</td>
		                <td>".$row["hours"]."</td>
		                <td>".$row["subject"]."</td>
		                <td>".$row["notes"]."</td>
                        
                        <td><a href='delete.php?id=".$row['id']."&myselect=".$myselect."' class='del_btn'>刪除</a></th>
	                </tr>

            ";
            $i++;
        }

        echo "
                </table>
        ";
    } else {
        echo "無資料";
    }

    echo'

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

        <p><input type="submit" name="submit" value="新增資料"></p>
        <a href="example.php?myselect='.$myselect.'" title="PDF [new window]" target="_blank" class="pdf">匯出PDF</a>

    </form>
    ';

    /* free result set */
    //mysqli_free_result($result);
}
    
?>
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