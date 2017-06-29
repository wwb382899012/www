<?php
/*
header("Content-type: text/html; charset=utf-8"); 
require ('chinese.php');
 
$pdf = new PDF_Chinese ();
$pdf -> AddGBFont ('jzxsh', '宋体');
$pdf -> Open ();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf -> SetFont ('jzxsh', '', 20);

$pdf -> Write (10, '帮游国际在线合同');
$pdf->Image('logo.png',10,6,30);
$pdf -> Output();*/
?>
<?php 
require('chinese.php'); 
class PDF extends PDF_Chinese 
{ 
function Header() //设定页眉 
{ 
$this->SetFont('jzxsh','',10); 
$this->Write(10,'FPDF中文测试'); 
$this->Ln(20); 
} 

function Footer() //设定页脚 
{ 
$this->SetY(-15); 
$this->SetFont('jzxsh','',10); 
$this->Cell(0,10,'第'.$this->PageNo().'页'); 
} 
} 

$pdf=new PDF(); //创建PDF文档 
$pdf -> AddGBFont ('jzxsh', '宋体'); 
$pdf->Open(); 
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('jzxsh','',20); 
$pdf->Cell(0,10,'你好，FPDF'); //输出一段中文 
$pdf->Write(10,'FPDF中文测试'); 

$pdf->Write(10,'我是'); 
$pdf->Image('lo.jpg',40,30,30);
$pdf->Output(); 
?> 
