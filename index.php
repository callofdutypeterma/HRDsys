<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <link href="styles/style.css?032601" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="themes/easydropdown.css?032601"/>
    <link rel="SHORTCUT ICON" href="assets/images/NCU.ico" />
    <title>國立中央大學110學年度各單位再聘兼任、繼續合聘教研人員系統</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
        <option class="label">---------- 請選擇您的單位 ----------</option>
        <option value= "ipla" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ipla" ) echo "selected='selected'";?>>01　文學院學士班                           </option>
        <option value= "chinese_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "chinese_department" ) echo "selected='selected'";?>>02　中國文學系                         </option>
        <option value= "english_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "english_department" ) echo "selected='selected'";?>>03　英美語文學系                     </option>
        <option value= "french_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "french_department" ) echo "selected='selected'";?>>04　法國語文學系                     </option>
        <option value= "phi_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "phi_gra_ins" ) echo "selected='selected'";?>>05　哲學研究所                       </option>
        <option value= "his_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "his_gra_ins" ) echo "selected='selected'";?>>06　歷史研究所                       </option>
        <option value= "art_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "art_gra_ins" ) echo "selected='selected'";?>>07　藝術學研究所                     </option>
        <option value= "lea_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "lea_gra_ins" ) echo "selected='selected'";?>>08　學習與教學研究所                 </option>
        <option value= "iacs_ust" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "iacs_ust" ) echo "selected='selected'";?>>09　亞際文化研究學位學程             </option>
        <option value= "te_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "te_center" ) echo "selected='selected'";?>>10　師資培育中心                     </option>
        <option value= "jsp" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "jsp" ) echo "selected='selected'";?>>11　理學院學士班                     </option>
        <option value= "math_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "math_department" ) echo "selected='selected'";?>>12　數學系                           </option>
        <option value= "physics_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "physics_department" ) echo "selected='selected'";?>>13　物理學系                         </option>
        <option value= "chem_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "chem_department" ) echo "selected='selected'";?>>14　化學學系                         </option>
        <option value= "sta_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "sta_gra_ins" ) echo "selected='selected'";?>>15　統計研究所                       </option>
        <option value= "op_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "op_department" ) echo "selected='selected'";?>>16　光電科學與工程學系               </option>
        <option value= "ast_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ast_gra_ins" ) echo "selected='selected'";?>>17　天文研究所                       </option>
        <option value= "ipe" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ipe" ) echo "selected='selected'";?>>18　工學院學士班                     </option>
        <option value= "civil_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "civil_department" ) echo "selected='selected'";?>>19　土木工程學系                     </option>
        <option value= "mech_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "mech_department" ) echo "selected='selected'";?>>20　機械工程學系                     </option>
        <option value= "cme_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "cme_department" ) echo "selected='selected'";?>>21　化學工程與材料工程學系           </option>
        <option value= "env_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "env_gra_ins" ) echo "selected='selected'";?>>22　環境工程研究所                   </option>
        <option value= "mat_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "mat_gra_ins" ) echo "selected='selected'";?>>23　材料科學與工程研究所             </option>
        <option value= "ene_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ene_gra_ins" ) echo "selected='selected'";?>>24　能源工程研究所                   </option>
        <option value= "ba_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ba_department" ) echo "selected='selected'";?>>25　企業管理學系                     </option>
        <option value= "im_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "im_department" ) echo "selected='selected'";?>>26　資訊管理學系                     </option>
        <option value= "finance_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "finance_department" ) echo "selected='selected'";?>>27　財務金融學系                     </option>
        <option value= "ec_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ec_department" ) echo "selected='selected'";?>>28　經濟學系                         </option>
        <option value= "ie_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ie_gra_ins" ) echo "selected='selected'";?>>29　產業經濟研究所                   </option>
        <option value= "hrm_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "hrm_gra_ins" ) echo "selected='selected'";?>>30　人力資源管理研究所               </option>
        <option value= "ia_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ia_gra_ins" ) echo "selected='selected'";?>>31　工業管理研究所                   </option>
        <option value= "acc_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "acc_gra_ins" ) echo "selected='selected'";?>>32　會計研究所                       </option>
        <option value= "ipeecs" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ipeecs" ) echo "selected='selected'";?>>33　資訊電機學院學士班               </option>
        <option value= "ee_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ee_department" ) echo "selected='selected'";?>>34　電機工程學系                     </option>
        <option value= "csie_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "csie_department" ) echo "selected='selected'";?>>35　資訊工程學系                     </option>
        <option value= "ce_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ce_department" ) echo "selected='selected'";?>>36　通訊工程學系                     </option>
        <option value= "nlt_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "nlt_gra_ins" ) echo "selected='selected'";?>>37　網路學習科技研究所               </option>
        <option value= "ipes" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ipes" ) echo "selected='selected'";?>>38　地球科學學院學士班               </option>
        <option value= "atm_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "atm_department" ) echo "selected='selected'";?>>39　大氣科學學系                     </option>
        <option value= "es_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "es_department" ) echo "selected='selected'";?>>40　地球科學學系                     </option>
        <option value= "sse_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "sse_department" ) echo "selected='selected'";?>>41　太空科學與工程學系               </option>
        <option value= "ag_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ag_gra_ins" ) echo "selected='selected'";?>>42　應用地質研究所                   </option>
        <option value= "hos_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "hos_gra_ins" ) echo "selected='selected'";?>>43　水文與海洋科學研究所             </option>
        <option value= "hakka_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "hakka_department" ) echo "selected='selected'";?>>44　客家語文暨社會科學學系           </option>
        <option value= "lawgov_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "lawgov_gra_ins" ) echo "selected='selected'";?>>45　法律與政府研究所                 </option>
        <option value= "ls_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ls_department" ) echo "selected='selected'";?>>46　生命科學系                       </option>
        <option value= "cn_gra_ins" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "cn_gra_ins" ) echo "selected='selected'";?>>47　認知神經科學研究所               </option>
        <option value= "bse_department" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "bse_department" ) echo "selected='selected'";?>>48　生醫科學與工程學系               </option>
        <option value= "ge_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ge_center" ) echo "selected='selected'";?>>49　通識教育中心                     </option>
        <option value= "lc_office" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "lc_office" ) echo "selected='selected'";?>>50　語言中心                         </option>
        <option value= "pe_office" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "pe_office" ) echo "selected='selected'";?>>51　體育室                           </option>
        <option value= "art_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "art_center" ) echo "selected='selected'";?>>52　藝文中心                         </option>
        <option value= "srsr_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "srsr_center" ) echo "selected='selected'";?>>53　太空及遙測研究中心               </option>
        <option value= "os_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "os_center" ) echo "selected='selected'";?>>54　光電科學研究中心                 </option>
        <option value= "env_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "env_center" ) echo "selected='selected'";?>>55　環境研究中心                     </option>
        <option value= "rc_ted" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_ted" ) echo "selected='selected'";?>>56　臺灣經濟發展研究中心             </option>
        <option value= "humanities" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "humanities" ) echo "selected='selected'";?>>57　人文研究中心                     </option>
        <option value= "rc_ast" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_ast" ) echo "selected='selected'";?>>58　前瞻科技研究中心                 </option>
        <option value= "ape_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "ape_center" ) echo "selected='selected'";?>>59　太空科學與科技研究中心           </option>
        <option value= "e_dream" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "e_dream" ) echo "selected='selected'";?>>60　地震災害鏈風險評估及管理研究中心 </option>
        <option value= "hhp_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "hhp_center" ) echo "selected='selected'";?>>61　高能與強場物理研究中心           </option>
        <option value= "emt_center" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "emt_center" ) echo "selected='selected'";?>>62　環境監測技術聯合中心             </option>
        <option value= "rc_ciph" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_ciph" ) echo "selected='selected'";?>>63　認知智慧與精準健康照護研究中心   </option>
        <option value= "rc_hmp" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_hmp" ) echo "selected='selected'";?>>64　災害防治研究中心                 </option>
        <option value= "rc_stl" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_stl" ) echo "selected='selected'";?>>65　學習科技研究中心                 </option>
        <option value= "gpsa_rc" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "gpsa_rc" ) echo "selected='selected'";?>>66　全球定位科學與應用研究中心       </option>
        <option value= "rc_npv" <?php if (isset($_GET['myselect'])==true && $_GET['myselect'] == "rc_npv" ) echo "selected='selected'";?>>67　新世代光驅動電池模組研究中心     </option>
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
 
    $insertSql = "INSERT INTO $myselect (job_title,name,semester,service_school,service_unit,job_name,first_semester,first_class_name,first_class_hours,first_class_subject,second_semester,second_class_name,second_class_hours,second_class_subject,notes,status) VALUES ('$jobtitle','$name', '$semester','$serviceSchool','$serviceUnit','$jobname','$SEMNoA','$classNameA','$hoursA','$subjectA','$SEMNoB','$classNameB','$hoursB','$subjectB','$notes','new')";
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