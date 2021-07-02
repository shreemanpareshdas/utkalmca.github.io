<?php
if(!empty($_POST['download']))
{
  $regisno=$_POST['regisno'];
  $year=$_POST['year'];
  $Course=$_POST['Course'];
  $semester=$_POST['semester'];
  $studentname=$_POST['studentname'];
  $fathername=$_POST['fathername'];
  $quadian=$_POST['quadian'];
  $permanentaddress=$_POST['permanentaddress'];
  $gender=$_POST['gender'];
  $nation=$_POST['nation'];
  $cast=$_POST['cast'];
  $dob=$_POST['dob'];
  $yop10=$_POST['yop10'];
  $yopm=$_POST['yopm'];
  $doa=$_POST['doa'];
  $college=$_POST['college'];
  $center=$_POST['center'];
  $paper=$_POST['paper'];
  require("fpdf/fpdf.php");
  
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',16);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->Output();


}
?>