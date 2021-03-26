<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Peter Ma');
$pdf->SetTitle('PDF Example');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'test', '', array(0,0,0), array(0,0,0));
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Print a table
//$fontname = TCPDF_FONTS::addTTFfont('fonts/kaiu.ttf', 'TrueTypeUnicode');
$pdf->SetFont('kaiu', '', 12, '', false);
//$pdf->SetFont('msungstdlight', '', 12);

// add a page
$pdf->AddPage();

include('connect.php');

$myselect = $_GET['myselect'];

$officeName = "";

switch ($myselect) {
	case "ipla":
		$officeName = "文學院學士班";
		break;
	case "chinese_department":
		$officeName = "中國文學系";
		break;
	case "english_department":
		$officeName = "英美語文學系";
		break;
	case "french_department":
		$officeName = "法國語文學系";
		break;
	case "phi_gra_ins":
		$officeName = "哲學研究所";
		break;
	case "his_gra_ins":
		$officeName = "歷史研究所";
		break;
	case "art_gra_ins":
		$officeName = "藝術學研究所";
		break;
	case "lea_gra_ins":
		$officeName = "學習與教學研究所";
		break;
	case "iacs_ust":
		$officeName = "亞際文化研究學位學程";
		break;
	case "te_center":
		$officeName = "師資培育中心";
		break;
	case "jsp":
		$officeName = "理學院學士班";
		break;
	case "math_department":
		$officeName = "數學系";
		break;
	case "physics_department":
		$officeName = "物理學系";
		break;
	case "chem_department":
		$officeName = "化學學系";
		break;
	case "sta_gra_ins":
		$officeName = "統計研究所";
		break;
	case "op_department":
		$officeName = "光電科學與工程學系";
		break;
	case "ast_gra_ins":
		$officeName = "天文研究所";
		break;
	case "ipe":
		$officeName = "工學院學士班";
		break;
	case "civil_department":
		$officeName = "土木工程學系";
		break;
	case "mech_department":
		$officeName = "機械工程學系";
		break;
	case "cme_department":
		$officeName = "化學工程與材料工程學系";
		break;
	case "env_gra_ins":
		$officeName = "環境工程研究所";
		break;
	case "mat_gra_ins":
		$officeName = "材料科學與工程研究所";
		break;
	case "ene_gra_ins":
		$officeName = "能源工程研究所";
		break;
	case "ba_department":
		$officeName = "企業管理學系";
		break;
	case "im_department":
		$officeName = "資訊管理學系";
		break;
	case "finance_department":
		$officeName = "財務金融學系";
		break;
	case "ec_department":
		$officeName = "經濟學系";
		break;
	case "ie_gra_ins":
		$officeName = "產業經濟研究所";
		break;
	case "hrm_gra_ins":
		$officeName = "人力資源管理研究所";
		break;
	case "ia_gra_ins":
		$officeName = "工業管理研究所";
		break;
	case "acc_gra_ins":
		$officeName = "會計研究所";
		break;
	case "ipeecs":
		$officeName = "資訊電機學院學士班";
		break;
	case "ee_department":
		$officeName = "電機工程學系";
		break;
	case "csie_department":
		$officeName = "資訊工程學系";
		break;
	case "ce_department":
		$officeName = "通訊工程學系";
		break;
	case "nlt_gra_ins":
		$officeName = "網路學習科技研究所";
		break;
	case "ipes":
		$officeName = "地球科學學院學士班";
		break;
	case "atm_department":
		$officeName = "大氣科學學系";
		break;
	case "es_department":
		$officeName = "地球科學學系";
		break;
	case "sse_department":
		$officeName = "太空科學與工程學系";
		break;
	case "ag_gra_ins":
		$officeName = "應用地質研究所";
		break;
	case "hos_gra_ins":
		$officeName = "水文與海洋科學研究所";
		break;
	case "hakka_department":
		$officeName = "客家語文暨社會科學學系";
		break;
	case "lawgov_gra_ins":
		$officeName = "法律與政府研究所";
		break;
	case "ls_department":
		$officeName = "生命科學系";
		break;
	case "cn_gra_ins":
		$officeName = "認知神經科學研究所";
		break;
	case "bse_department":
		$officeName = "生醫科學與工程學系";
		break;
	case "ge_center":
		$officeName = "通識教育中心";
		break;
	case "lc_office":
		$officeName = "語言中心";
		break;
	case "pe_office":
		$officeName = "體育室";
		break;
	case "art_center":
		$officeName = "藝文中心";
		break;
	case "srsr_center":
		$officeName = "太空及遙測研究中心";
		break;
	case "os_center":
		$officeName = "光電科學研究中心";
		break;
	case "env_center":
		$officeName = "環境研究中心";
		break;
	case "rc_ted":
		$officeName = "臺灣經濟發展研究中心";
		break;
	case "humanities":
		$officeName = "人文研究中心";
		break;
	case "rc_ast":
		$officeName = "前瞻科技研究中心";
		break;
	case "ape_center":
		$officeName = "太空科學與科技研究中心";
		break;
	case "e_dream":
		$officeName = "地震災害鏈風險評估及管理研究中心";
		break;
	case "hhp_center":
		$officeName = "高能與強場物理研究中心";
		break;
	case "emt_center":
		$officeName = "環境監測技術聯合中心";
		break;
	case "rc_ciph":
		$officeName = "認知智慧與精準健康照護研究中心";
		break;
	case "rc_hmp":
		$officeName = "災害防治研究中心";
		break;
	case "rc_stl":
		$officeName = "學習科技研究中心";
		break;
	case "gpsa_rc":
		$officeName = "全球定位科學與應用研究中心";
		break;
	case "rc_npv":
		$officeName = "新世代光驅動電池模組研究中心";
		break;
}

$i=0;
$id = null;
$jobtitle = null;
$name = null;
$semester = null;
$serviceSchool = null;
$serviceUnit = null;
$jobname = null;
$SEMNoA = null;
$classNameA = null;
$hoursA = null;
$subjectA = null;
$SEMNoB = null;
$classNameB = null;
$hoursB = null;
$subjectB = null;
$notes = null;
$status = null;

// Attempt select query execution
$sql = "SELECT * FROM $myselect WHERE job_title LIKE '兼任%'";
if($result = mysqli_query($connect, $sql)){
    
	while($row = mysqli_fetch_array($result)){
		$id[$i]=$row['id'];
		$jobtitle[$i]=$row['job_title'];
		$name[$i]=$row['name'];
		$semester[$i]=$row['semester'];
		$serviceSchool[$i]=$row['service_school'];
		$serviceUnit[$i]=$row['service_unit'];
		$jobname[$i]=str_replace("\r\n","<br>", $row["job_name"]);;
		$SEMNoA[$i]=$row['first_semester'];
		$classNameA[$i]=$row['first_class_name'];
		$hoursA[$i]=$row['first_class_hours'];
		$subjectA[$i]=$row['first_class_subject'];
		$SEMNoB[$i]=$row['second_semester'];
		$classNameB[$i]=$row['second_class_name'];
		$hoursB[$i]=$row['second_class_hours'];
		$subjectB[$i]=$row['second_class_subject'];
		$notes[$i]=str_replace("\r\n","<br>", $row["notes"]);
		$status[$i]=$row['status'];
		$i++;
    }
    // Free result set
    mysqli_free_result($result);
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);

// create some HTML content
$htmla = '
<table border="1" align="center">
	
	<tr>
		<td colspan="9" ><font size="16">國立中央大學110學年度  '.$officeName.'  推薦再聘兼任教研人員名冊</font></td>
	</tr>

	<tr>
		<th rowspan="2" width="12%"><font size="6"><small color="#FFFFFF">small</small><br></font>職稱</th>
		<th rowspan="2" width="10%">姓名</th>
		<th rowspan="2" width="8%">擬授課學期別</th>
		<th rowspan="2" width="6%">本職服務機關學校</th>
		<th rowspan="2" width="6%">本職服務單位</th>
		<th rowspan="2" width="6%">本職職稱</th>
		<th colspan="4" width="40%">再聘情形</th>
		<th rowspan="2" width="12%">備註</th>
	</tr>

	<tr>
		<td width="6%">授課學期</td>
		<td width="22%">授課名稱</td>
		<td width="6%">每週時數</td>
		<td width="6%">必選修</td>
	</tr>

</table>
';
$pdf->writeHTML($htmla, false, 0, false, false, 'L');

for($j = 0; $j < $i; $j++){
	
	if($status[$j] == "old"){
		$htmlb = '
		<table border="1" align="center">
		
			<tr>
				<td rowspan="2" width="12%">'.$jobtitle[$j].'</td>
				<td rowspan="2" width="10%">'.$name[$j].'</td>
				<td rowspan="2" width="8%">'.$semester[$j].'</td>
				<td rowspan="2" width="6%">'.$serviceSchool[$j].'</td>
				<td rowspan="2" width="6%">'.$serviceUnit[$j].'</td>
				<td rowspan="2" width="6%">'.$jobname[$j].'</td>
				<td width="6%">'.$SEMNoA[$j].'</td>
				<td width="22%">'.$classNameA[$j].'</td>
				<td width="6%">'.$hoursA[$j].'</td>
				<td width="6%">'.$subjectA[$j].'</td>
				<td rowspan="2" width="12%">'.$notes[$j].'</td>
			</tr>

			<tr>
				<td width="6%">'.$SEMNoB[$j].'</td>
				<td width="22%">'.$classNameB[$j].'</td>
				<td width="6%">'.$hoursB[$j].'</td>
				<td width="6%">'.$subjectB[$j].'</td>
			</tr>

		</table>
		';
	}else if($status[$j] == "new"){
		$htmlb = '
		<table border="1" align="center" style="font-weight:bold">
		
			<tr>
				<td rowspan="2" width="12%">'.$jobtitle[$j].'</td>
				<td rowspan="2" width="10%">'.$name[$j].'</td>
				<td rowspan="2" width="8%">'.$semester[$j].'</td>
				<td rowspan="2" width="6%">'.$serviceSchool[$j].'</td>
				<td rowspan="2" width="6%">'.$serviceUnit[$j].'</td>
				<td rowspan="2" width="6%">'.$jobname[$j].'</td>
				<td width="6%">'.$SEMNoA[$j].'</td>
				<td width="22%">'.$classNameA[$j].'</td>
				<td width="6%">'.$hoursA[$j].'</td>
				<td width="6%">'.$subjectA[$j].'</td>
				<td rowspan="2" width="12%">'.$notes[$j].'</td>
			</tr>

			<tr>
				<td width="6%">'.$SEMNoB[$j].'</td>
				<td width="22%">'.$classNameB[$j].'</td>
				<td width="6%">'.$hoursB[$j].'</td>
				<td width="6%">'.$subjectB[$j].'</td>
			</tr>

		</table>
		';
	}

	$pdf->writeHTML($htmlb, false, 0, false, false, 'L');
}
$htmlc = '
<table border="1" align="center">

	<tr>
		<td colspan="9" align="left"><small color="#FFFFFF">small</small><br>系所承辦人：<font color="#FFFFFF">天天都在測試中</font>單位主管：<font color="#FFFFFF">天天都在測試中</font>院級主管：<font color="#FFFFFF">天天都在測試中</font>人數：  人<br><small color="#FFFFFF">small</small><br>系級教評會 110年 　   月 　   日 109學年度第 2 學期第  次會議審議通過<br><small color="#FFFFFF">small</small><br>院級教評會 110年 　   月 　   日 109學年度第 2 學期第  次會議報告(審議)通過</td>
	</tr>

</table>
備註：<br>
一、請確實登打貴單位兼任教研人員再聘名單，如需再聘者請於「擬授課學期別」欄位內勾選，並於<br><font color="#FFFFFF">一、</font>「再聘情形」欄填具課程資訊，如未開課僅指導研究生論文者，請註明「指導研究生」，本室將<br><font color="#FFFFFF">一、</font>依再聘情形核發聘書；<b>不再聘任者，請於備註欄註明「不予再聘」，請勿刪除該人員。</b><br>
二、請詳實填寫兼任教研人員之本職服務機關學校、單位及職稱。<br>
三、依本校三級教評會分工一覽表規定，兼任教研人員之再聘應經系教評會審議通過及院教評會報告<br><font color="#FFFFFF">三、</font>，惟如<b>係講授必修課程者，則需經院教評會審議。</b><br>
四、本名冊<b>請於110年5月20日前，由各院級單位彙送人事室。</b><br>
';
// output the HTML content

$pdf->writeHTML($htmlc, false, 0, false, false, 'L');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('example.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
