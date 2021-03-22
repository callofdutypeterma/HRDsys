<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="themes/easydropdown.css"/>
    <link rel="SHORTCUT ICON" href="assets/images/NCU.ico" />
    <title>國立中央大學110學年度各單位再聘兼任、繼續合聘教研人員系統</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="src/jquery.easydropdown.js"></script>
</head>
<body>
    
    <?php $myIP = "192.168.43.51"; ?>

    <div class="wrap">

    <a href='/' class='index'>回首頁</a><br>
    <!--<a href='excel.php'>EXCEL</a><br>-->

    <H1>國立中央大學110學年度各單位再聘兼任、繼續合聘教研人員系統</H1>

    <br>

    <!--<div class="select-style">-->

    <select name="pets" id="mySelect" onchange="mySelect()" class="dropdown" data-settings='{"cutOff": 12}'>    
        <option class="label">-----------請選擇你的單位-----------</option>
        <option value="library" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "library") echo "selected='selected'";?> >01 圖書館                           </option>
        <option>02 總教學中心                       </option>
        <option value="pe_office" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "pe_office") echo "selected='selected'";?> >03 體育室                           </option>
        <option value="ge">04 通識教育中心                     </option>
        <option>05 語言中心                         </option>
        <option>06 太空及遙測研究中心               </option>
        <option>07 光電科學研究中心                 </option>
        <option>08 環境研究中心                     </option>
        <option>09 通訊系統研究中心                 </option>
        <?php if(substr($myIP, 0, 10) === "192.168.42") echo"<option>10 臺灣經濟發展研究中心             </option>"; ?>
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
    
    <!--</div>-->

<?php

//header("Content-type:text/html;charset=utf-8");

include('connect.php');

//${'m' . $m2} = 3;

$myselect = "";

//echo $_SERVER['REMOTE_ADDR']."<br>";
//echo $_SERVER['HTTP_X_FORWARDED_FOR']."<br>";
echo "你的ip：".$_SERVER['HTTP_X_REAL_IP']."<br>";


if (isset($_GET['myselect'])==true) {

    $myselect = $_GET['myselect'];
    //$exportecl = "select * from $myselect into outfile 'd:/test.xls';";
    //mysqli_query($connect, $exportecl);
}


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
 
    $insertSql = "INSERT INTO $myselect (job_title,name,semester,service_school,service_unit,job_name,first_semester,first_class_name,first_class_hours,first_class_subject,second_semester,second_class_name,second_class_hours,second_class_subject,notes) VALUES ('$jobtitle','$name', '$semester','$serviceSchool','$serviceUnit','$jobname','$SEMNoA','$classNameA','$hoursA','$subjectA','$SEMNoB','$classNameB','$hoursB','$subjectB','$notes')";
    $status = mysqli_query($connect, $insertSql);
 
    if ($status) {
        echo '新增成功';
    } else {
        echo "錯誤: " . $insertSql . "<br>" . $connect->error;
    }
}

if (isset($_POST['submit'])==true || isset($_GET['myselect'])==true) {

    echo'
        <p>
        <form action="" method="post">
        
            <table border="1" width="90%" align="center" style="border-collapse: collapse; text-align: left; background-color: #DCDCDC;">
	
	            <tr>
		            <td><p>職稱</p>
                    <select name="jobtitle">
                        <option value="兼任講師">兼任講師                   </option>
                        <option value="兼任講師級專業技術人員">兼任講師級專業技術人員     </option>
                        <option value="兼任助理教授">兼任助理教授               </option>
                        <option value="兼任助理教授級專業技術人員">兼任助理教授級專業技術人員 </option>
                        <option value="兼任副教授">兼任副教授                 </option>
                        <option value="兼任副教授級專業技術人員">兼任副教授級專業技術人員   </option>
                        <option value="兼任教授">兼任教授                   </option>
                        <option value="兼任教授級專業技術人員">兼任教授級專業技術人員     </option>
                        <option value="兼任助理研究員">兼任助理研究員             </option>
                        <option value="兼任副研究員">兼任副研究員               </option>
                        <option value="兼任研究員">兼任研究員                 </option>
                        <option value="合聘講師">合聘講師                   </option>
                        <option value="合聘講師級專業技術人員">合聘講師級專業技術人員     </option>
                        <option value="合聘助理教授">合聘助理教授               </option>
                        <option value="合聘助理教授級專業技術人員">合聘助理教授級專業技術人員 </option>
                        <option value="合聘副教授">合聘副教授                 </option>
                        <option value="合聘副教授級專業技術人員">合聘副教授級專業技術人員   </option>
                        <option value="合聘教授">合聘教授                   </option>
                        <option value="合聘教授級專業技術人員">合聘教授級專業技術人員     </option>
                        <option value="合聘助理研究員">合聘助理研究員             </option>
                        <option value="合聘副研究員">合聘副研究員               </option>
                        <option value="合聘研究員">合聘研究員                 </option>
                    </select>
                    </td>
                    <td><p>姓名</p><input type="text" name="name"></td>
                    <td><p>擬授課學期別</p><input id="whole" type="radio" name="semester" value="全學年" onclick="selectAll()"><label for="whole">全學年</label><input id="first" type="radio" name="semester" value="上學期" onclick="selectFirst()"><label for="first">上學期</label><input id="second" type="radio" name="semester" value="下學期" onclick="selectSecond()"><label for="second">下學期</label></td>
                    <td><p>本職服務機關學校</p><input type="text" name="serviceSchool"></td>
                    <td><p>本職服務單位</p><input type="text" name="serviceUnit"></td>
                    <td><p>本職職稱</p><textarea name="jobname" rows="4" cols="40"></textarea></td>  
	            </tr>
                
                <tr>
                    <td colspan="6">
                        <table border="0" width="100%" align="center" style="border-collapse: collapse; text-align: left;">
                            <tr>
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
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">備註</td>
                    <td colspan="5"><textarea name="notes" rows="4" cols="50"></textarea></td>
                </tr>

                <tr>
                    <td colspan="6" style="text-align: center;"><p><input type="submit" name="submit" value="新增資料"></p><!--<input type="image" src="assets/images/testbutton.png" border="0" alt="Submit" width="100px" >--></td>
                </tr>

            </table>

        </form>
        </p>

    ';

    echo $myselect;

    $sql = "SELECT * FROM ".$myselect.";";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        printf("有 %d 筆資料\n", mysqli_num_rows($result));

        // output data of each row
        $i=0;

        echo "
        
            <table border='1' width='70%' align='center'>
	
	            <tr>
		            <th rowspan='2'>職稱</th>
		            <th rowspan='2'>姓名</th>
		            <th rowspan='2'>擬授課學期別</th>
                    <th rowspan='2'>本職服務機關學校</th>
                    <th rowspan='2'>本職服務單位</th>
		            <th rowspan='2'>本職職稱</th>
		            <th colspan='4'>再聘情形</th>
		            <th rowspan='2'>備註</th>
                    <th rowspan='2' colspan='2'>動作</th>    
	            </tr>

	            <tr>
		            <td>授課學期</td>
		            <td>授課名稱</td>
		            <td>每週時數</td>
		            <td>必選修</td>
	            </tr>

        ";

        while($row = mysqli_fetch_assoc($result)) {
            
            ${'id_' . $i} = $row["id"];
            
            $stra = str_replace("\r\n","<br>", $row["job_name"]);
            $strb = str_replace("\r\n","<br>", $row["notes"]);

            echo "
	
	            <tr>
		            <td rowspan='2'>".$row["job_title"]."</td>
                    <td rowspan='2'>".$row["name"]."</td>
		            <td rowspan='2'>".$row["semester"]."</td>
                    <td rowspan='2'>".$row["service_school"]."</td>
                    <td rowspan='2'>".$row["service_unit"]."</td>
		            <td rowspan='2'>".$stra."</td>
		            <td>".$row["first_semester"]."</td>
		            <td>".$row["first_class_name"]."</td>
		            <td>".$row["first_class_hours"]."</td>
		            <td>".$row["first_class_subject"]."</td>
                    <td rowspan='2'>".$strb."</td>
                    <td rowspan='2'><a href='edit.php?id=".$row['id']."&myselect=".$myselect."' class='edit_btn'>修改</a></td>
                    <td rowspan='2'><a href='delete.php?id=".$row['id']."&myselect=".$myselect."' class='del_btn'>刪除</a></td>
                </tr>

                <tr>
                    <td>".$row["second_semester"]."</td>
		            <td>".$row["second_class_name"]."</td>
		            <td>".$row["second_class_hours"]."</td>
		            <td>".$row["second_class_subject"]."</td>
	            </tr>

            ";
            $i++;
        }

        echo '
                </table>
            <p><a href="example.php?myselect='.$myselect.'" title="PDF [new window]" target="_blank" class="pdf">匯出兼任PDF</a></p>
            <p><a href="exampleB.php?myselect='.$myselect.'" title="PDF [new window]" target="_blank" class="pdf">匯出合聘PDF</a></p>
        ';
    } else {
        echo "無資料";
    }

    

    /* free result set */
    //mysqli_free_result($result);
}
    
?>
    
    <script type="text/javascript">

        function mySelect() {
          var x = document.getElementById("mySelect").value;
          window.location.href = 'index.php?myselect='+ x;
        }

        function selectFirst() {
        document.getElementById("SEMNoA").value = 1;
        document.getElementById("hoursA").value = "";
        document.getElementById("SEMNoB").value = 0;
        document.getElementById("classNameInputB").value = "";
        document.getElementById("hoursB").value = 0;
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
        document.getElementById("SEMNoA").value = 0;
        document.getElementById("classNameInputA").value = "";
        document.getElementById("hoursA").value = 0;
        document.getElementById("SEMNoB").value = 2;
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
        document.getElementById("SEMNoA").value = 1;
        document.getElementById("SEMNoB").value = 2;
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
        document.getElementById("hoursA").value = 0;
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
        document.getElementById("hoursB").value = 0;
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