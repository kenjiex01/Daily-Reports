<?php
session_start();
// require('connection.php');
require('assets/fpdf/fpdf.php');



$pdf = new FPDF();
$pdf->AddPage('L','Legal');
$pdf->SetFont('arial','B',16);
//$pdf->Image("img/DMMMSU.png",70,8,30,30,'PNG');
//$pdf->Image("img/MLUC.jpg",270,8,30,30,'jpg');
$pdf->Cell(18,10,'',0);
$pdf->Cell(0, 5, "DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY",0,1,"C");
$pdf->Cell(0, 5, "MID LA UNION CAMPUS",0,1,"C");

$pdf->SetFont("arial","",12);
$pdf->Cell(0, 5, "San Fernando City, La Union",0,1,"C");
$pdf->Cell(0, 5, "Email: mluc@dmmmsu.edu.ph",0,1,"C");
$pdf->Cell(0, 5, "Website: http://www.dmmmsu.edu.ph",0,1,"C");
$pdf->Cell(0, 5, "Telefax: (072)888-3191",0,1,"C");
$pdf->Cell(0, 1, "___________________________________________________________________________________________________________",0,2,"C");
$pdf->Ln(3);
$pdf->SetFont("arial","",12);
$pdf->Cell(0,10,"Date:".date('d-m-y'),0,1,"R");
$pdf->SetFont('arial','B',16,'C');
$pdf->Cell(0, 5, "CAMPUS STUDENT BODY ORGANIZATION",0,1,"C");

$pdf->Ln(2);
$pdf->SetFont('arial','B',16);
$pdf->Cell(0, 5, "ONLINE VOTING SYSTEM",0,1,"C");
$pdf->Cell(0, 7, "Summary of Official Voter Turn Out",0,2,"C");

$pdf->Ln(5);

$pdf->SetFont('arial','B',12,'');
$pdf->Cell(40,40,'',0,"C");
$pdf->Cell(70,10,'Colleges',1,"C");
$pdf->Cell(60,10,'Total Population',1,"C");
$pdf->Cell(60,10,'Total Casted Votes',1,"C");
$pdf->Cell(60,10,'Total Uncasted Votes',1,"C");
$pdf->Ln(10);

$pdf->Ln(3);
$pdf->SetFont("arial","",12);
$pdf->Cell(0, 10, "Prepared By:",0,1,"B");
$pdf->SetFont('Arial','U',14);
//$pdf->Cell(0, 10, $uid,0,1,"B");
$pdf->SetFont('Arial','B',12);
//$pdf->Cell(0, 2, $pos,0,1,"B");
$pdf->Ln(8);

$pdf->Ln(3);
$pdf->SetFont("arial","",12);
$pdf->Cell(0, 10,"Verified By:",0,1,"B");
$pdf->SetFont('Arial','U',14);
$pdf->Cell(0, 10,"PROF. MA. CONCEPCION C. FERAREN",0,1,"B");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 2,"Adviser, COMELEC",0,1,"B");
$pdf->Ln(8);

$pdf->Ln(3);
$pdf->SetFont("arial","",14);
$pdf->Cell(0, 10, "NOTED:",0,1,"B");
$pdf->SetFont('Arial','U',12);
$pdf->Cell(0, 10,"DR. MANOLITO F. DELA CRUZ",0,1,"B");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 2,"Head, Student Affairs and Services",0,1,"B");
$pdf->Ln(8);

$pdf->Output();

?>