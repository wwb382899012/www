<?php
/*
header("Content-type: text/html; charset=utf-8"); 
require ('chinese.php');
 
$pdf = new PDF_Chinese ();
$pdf -> AddGBFont ('jzxsh', '����');
$pdf -> Open ();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf -> SetFont ('jzxsh', '', 20);

$pdf -> Write (10, '���ι������ߺ�ͬ');
$pdf->Image('logo.png',10,6,30);
$pdf -> Output();*/
?>
<?php 
require('chinese.php'); 
class PDF extends PDF_Chinese 
{ 
function Header() //�趨ҳü 
{ 
$this->SetFont('jzxsh','',10); 
$this->Write(10,'FPDF���Ĳ���'); 
$this->Ln(20); 
} 

function Footer() //�趨ҳ�� 
{ 
$this->SetY(-15); 
$this->SetFont('jzxsh','',10); 
$this->Cell(0,10,'��'.$this->PageNo().'ҳ'); 
} 
} 

$pdf=new PDF(); //����PDF�ĵ� 
$pdf -> AddGBFont ('jzxsh', '����'); 
$pdf->Open(); 
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('jzxsh','',20); 
$pdf->Cell(0,10,'��ã�FPDF'); //���һ������ 
$pdf->Write(10,'FPDF���Ĳ���'); 

$pdf->Write(10,'����'); 
$pdf->Image('lo.jpg',40,30,30);
$pdf->Output(); 
?> 
