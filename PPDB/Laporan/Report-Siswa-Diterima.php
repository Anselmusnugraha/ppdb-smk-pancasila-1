<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Image('../../assets/img/logo stm ps1.png',13,7,20);
$pdf->Image('../../assets/img/Iso-Anab.jpg',173,10,25); 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'SISWA DITERIMA','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'SMK PANCASILA 1 WONOGIRI','0','1','C',false);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Jl. Jendral Sudirman No. 106, Wonogiri, Jawa Tengah','0','1','C',false);
$pdf->Cell(0,2,'Telp. (0273) 321028','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'NO. PENDAFTARAN',1,0);
$pdf->Cell(60,6,'NAMA SISWA',1,0);
$pdf->Cell(27,6,'HASIL',1,0);
$pdf->Cell(60,6,'JURUSAN',1,1);

$pdf->SetFont('Arial','',10);

 $sql= mysql_query("select seleksi.hasil, biodata_calsiswa.nama, biodata_calsiswa.jurusan, pendaftaran.no_pendaftaran from seleksi inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join biodata_calsiswa on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran and (seleksi.hasil like 'Diterima%')");
 while ($Tampil=mysql_fetch_array($sql)) {
 	$pdf->Cell(40,6,$Tampil['no_pendaftaran'],1,0);
    $pdf->Cell(60,6,$Tampil['nama'],1,0);
    $pdf->Cell(27,6,$Tampil['hasil'],1,0);
    $pdf->Cell(60,6,$Tampil['jurusan'],1,1);
 }


$pdf->Output();
?>