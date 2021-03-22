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
$fontname = TCPDF_FONTS::addTTFfont('fonts/kaiu.ttf', 'TrueTypeUnicode');
$pdf->SetFont($fontname, '', 12, '', false);
//$pdf->SetFont('msungstdlight', '', 12);

// add a page
$pdf->AddPage();

include('connect.php');

$myselect = $_GET['myselect'];

$officeName = "";

switch ($myselect) {
	case "pe_office":
		$officeName = "體育室";
		break;
	case "library":
		$officeName = "圖書館";
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

// Attempt select query execution
$sql = "SELECT * FROM $myselect WHERE job_title LIKE '合聘%'";
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
	$pdf->writeHTML($htmlb, false, 0, false, false, 'L');
}
$htmlc = '
<table border="1" align="center">

	<tr>
		<td colspan="9" align="left"><small color="#FFFFFF">small</small><br>系所承辦人：<font color="#FFFFFF">天天都在測試中</font>單位主管：<font color="#FFFFFF">天天都在測試中</font>院級主管：<font color="#FFFFFF">天天都在測試中</font>人數：  人<br><small color="#FFFFFF">small</small><br>系級教評會 110年 　   月 　   日 109學年度第 2 學期第  次會議審議通過<br><small color="#FFFFFF">small</small><br>院級教評會 110年 　   月 　   日 109學年度第 2 學期第  次會議報告(審議)通過</td>
	</tr>

</table>
備註：<br>
一、請確實登打貴單位兼任教研人員再聘名單，如需再聘者請於「擬授課學期別」欄位內勾選，並於「再聘情形」欄填具課程資訊，如未開課僅指導研究生論文者，請註明「指導研究生」，本室將依再聘情形核發聘書。<br>
二、請詳實填寫兼任教研人員之本職服務機關學校、單位及職稱。<br>
三、依本校三級教評會分工一覽表規定，兼任教研人員之再聘應經系教評會審議通過及院教評會報告，惟如係講授必修課程者，則需經院教評會審議。<br>
四、本名冊請於109年5月20日前，由各院級單位彙送人事室。<br>
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
