<?php

require_once('tcpdf/tcpdf.php' );
//require ("Vinvoice.php");
require ("db.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");

$sql="SELECT VALUE,c1.CaseNumber AS cn,T3.FullName AS us,T4.Name P_N ,f1.Total as tot,f1.ID as fID, M.Name as MN ,f4.Paid AS paid,f5.Type AS exType From payment_options_value p1

INNER JOIN cases c1
   ON c1.ID=p1.Case_ID
INNER JOIN user T3
	ON T3.ID= c1.Client_ID
INNER JOIN fatora_user f2
	ON f2.User_ID=T3.ID
INNER JOIN fatora f1
	ON f1.ID=f2.Fatora_ID
INNER JOIN monthes M
	ON M.ID=f1.Month_ID
INNER JOIN fatora_fatdetails f3
	ON f1.ID=f3.Fatora_ID
INNER JOIN fatora_details f4
	ON f4.ID=f3.FatoraDet_ID
INNER JOIN expensetypes f5
	ON f5.ID=f4.ExpenseType_ID
INNER JOIN payment_options p2
    ON p2.ID= p1.PM_option_ID
INNER JOIN payment T4
    ON T4.ID=p2.Payment_ID
     WHERE c1.ID=".$_GET['caseN']."
    ";

$result=$db_obj->executesql($sql);
$row = mysqli_fetch_array($result);


class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = '123.jpg';
        // $file, $x = '', $y = '', $w = 0, $h = 0, $type = '', $link = '', $align = '', $resize = false, $dpi = 300,
        //  $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false,
        //  $fitonpage = false, $alt = false, $altimgs = array()
        $this->Image($image_file, 180, 5, 25, 25, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        // $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
  }

$pdf=new MYPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,TRUE,'UTF_8',false);
$pdf->SetCreator('عربي');
$pdf->SetAuthor('kkjk');
$pdf->SetTitle('kkjk');
$pdf->SetHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,PDF_HEADER_TITLE,PDF_HEADER_STRING);
$pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE,PDF_MARGIN_BOTTOM);

$pdf->SetImageScale(PDF_IMAGE_SCALE_RATIO);

$lg=Array();
$lg['a_meta_charset']='UTF_8';
$lg['a_met_dir']='rtl';
$lg['a_meta_language']='ar';
$lg['w_page']='page';
$pdf->SetLanguageArray($lg);
$pdf->SetFont('aefurat','',18);
$pdf->SetRTL(true);
$pdf->AddPage();
$pdf->Ln();
$pdf->Cell(0,30,'المستشار / مدحت الغندور ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(TRUE);
$pdf->Cell(5,30,' ',0,0);
// $pdf->Cell(40,10,'ll',1,0,'R');
$pdf->Cell(120,30,' ',0,0);

$pdf->Cell(40,10,'رقم الإيصال : ',0,0);
//$pdf->Cell(5,30,' ',0,0);
$pdf->Cell(0,0,$row['fID'],0,1);//$row['P_N']

// $style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


$pdf->Line(10, 50, 200, 50);#y,x,y,x


$pdf->SetRTL(TRUE);
$pdf->Cell(0,30,'التاريخ : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,$row['MN'],0,1,'R');



$pdf->SetRTL(TRUE);
$pdf->Cell(0,30,' الموكل  : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,$row['us'],0,1,'R');


$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'رقم القضية : ',0,0);#Cell(w, h = 0, txt = '', border = 0, ln = 0,align = '', fill = 0, link = nil, stretch = 0, ignore_min_height = false, calign = 'T', valign = 'M'
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,$row['cn'],0,1,'R');



$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'المدفوع : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(TRUE);
$pdf->Cell(40,30,' ',0,0);
$pdf->Cell(100,10,$row['paid'],0,0,'R');
$pdf->Cell(100,12,'ج م   فقط لا غير.',0,1);

$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'الباقي : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,$row['tot'],0,1,'R');

$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'الغرض : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,$row['exType'],0,1,'R');

$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'ملاحظات : ',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(false);
$pdf->Cell(140,10,'............',0,1,'R');

$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(TRUE);
$pdf->Cell(40,30,' ',0,0);
// $pdf->Cell(40,10,'ll',1,0,'R');
$pdf->Cell(80,30,' ',0,0);
$pdf->Cell(100,12,'توقبع المستلم : ',0,1);


$pdf->SetRTL(TRUE);
$pdf->Cell(0,35,'',0,0);
$pdf->Cell(0,10,' ',0,1);
$pdf->SetRTL(TRUE);
$pdf->Cell(40,30,' ',0,0);
// $pdf->Cell(40,10,'ll',1,0,'R');
$pdf->Cell(80,30,' ',0,0);
$pdf->Cell(100,12,'...........',0,1);







// $pdf->SetLanguageArray($lg);
// $pdf->Cell(50,20,'ll',1,1,'C');



// $pdf->Image('123.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);



$pdf->Output('Minvoice.pdf','I');



?>