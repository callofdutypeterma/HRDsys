<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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

/*
$link = mysqli_connect("localhost", "root", "root", "mysys");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
*/

$i=0;
$id = null;
$jobtitle = null;
$name = null;
$semester = null;
$jobname = null;
$semnum = null;
$classname = null;
$hours = null;
$subject = null;
$notes = null;

// Attempt select query execution
$sql = "SELECT * FROM units";
if($result = mysqli_query($connect, $sql)){
    
	while($row = mysqli_fetch_array($result)){
		$id[$i]=$row['id'];
		$jobtitle[$i]=$row['jobtitle'];
		$name[$i]=$row['name'];
		$semester[$i]=$row['semester'];
		$jobname[$i]=$row['jobname'];
		$semnum[$i]=$row['semnum'];
		$classname[$i]=$row['classname'];
		$hours[$i]=$row['hours'];
		$subject[$i]=$row['subject'];
		$notes[$i]=$row['notes'];
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
		<td colspan="9" ><font size="16">國立中央大學109學年度  體育室  推薦再聘兼任教研人員名冊</font></td>
	</tr>

	<tr>
		<th rowspan="2"><font size="6"><small color="#FFFFFF">small<br></small></font>職稱</th>
		<th rowspan="2">姓名</th>
		<th rowspan="2">擬授課學期別</th>
		<th rowspan="2">專職單位及職稱</th>
		<th colspan="4">再聘情形</th>
		<th rowspan="2">備註</th>
	</tr>

	<tr>
		<td>授課學期</td>
		<td>授課名稱</td>
		<td>每週時數</td>
		<td>必選修</td>
	</tr>

</table>
';
$pdf->writeHTML($htmla, false, 0, false, false, 'L');

for($j = 0; $j < $i; $j++){

	$htmlb = '
	<table border="1" align="center">

		<tr>
			<td>'.$jobtitle[$j].'</td>
			<td>'.$name[$j].'</td>
			<td>'.$semester[$j].'</td>
			<td>'.$jobname[$j].'</td>
			<td>'.$semnum[$j].'</td>
			<td>'.$classname[$j].'</td>
			<td>'.$hours[$j].'</td>
			<td>'.$subject[$j].'</td>
			<td>'.$notes[$j].'</td>
		</tr>

	</table>
	';
	$pdf->writeHTML($htmlb, false, 0, false, false, 'L');
}
$htmlc = '
<table border="1" align="center">

	<tr>
		<td colspan="9" align="left">系所主管：                          院長：                             人數：  2人<br>系級教評會 109年 　   月 　   日 108學年度第 2 學期第  次會議審議通過<br>院級教評會 109年 　   月 　   日 108學年度第 2 學期第  次會議報告(審議)通過</td>
	</tr>

</table>
備註：<br>
一、請確認貴單位兼任教研人員再聘名單，如需再聘者請於「擬授課學期別」欄位內勾選，並於「再聘情形」欄填具課程資訊，如未開課僅指導研究生論文者，請註明「指導研究生」，本室將依再聘情形核發聘書;不再聘任者，請於備註欄位註明「不予再聘」。<br>
二、請確認兼任教研人員之專職單位及職稱，如有誤請逕予更正。<br>
三、依本校三級教評會分工一覽表規定，兼任教研人員之再聘應經系教評會審議通過及院教評會報告，惟如係講授必修課程者，則需經院教評會審議。<br>
四、本名冊請於109年5月6日前，由各院級單位彙送人事室。<br>
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
