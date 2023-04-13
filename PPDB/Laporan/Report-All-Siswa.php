<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

$pdf = new FPDF('L','mm','letter');
$pdf->AddPage();

$pdf->Image('../../assets/img/logo stm ps1.png',13,7,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'LAPORAN DATA SISWA','0','1','C',false);
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
$pdf->Cell(27,6,'JENIS KELAMIN',1,0);
$pdf->Cell(27,6,'TMP LAHIR',1,0);
$pdf->Cell(27,6,'TGL LAHIR',1,0);
$pdf->Cell(27,6,'ALAMAT',1,0);
$pdf->Cell(27,6,'AGAMA',1,0);
$pdf->Cell(27,6,'NO. TELP/HP',1,0);
$pdf->Cell(27,6,'AYAH',1,0);
$pdf->Cell(27,6,'IBU',1,0);
$pdf->Cell(27,6,'WALI',1,0);
$pdf->Cell(27,6,'ALAMAT',1,0);
$pdf->Cell(27,6,'PEK AYAH',1,0);
$pdf->Cell(27,6,'PEK IBU',1,0);
$pdf->Cell(27,6,'PEK WALI',1,0);
$pdf->Cell(27,6,'NO. TELP/HP',1,0);
$pdf->Cell(50,6,'ASAL SEKOLAH',1,0);
$pdf->Cell(27,6,'NISN',1,0);
$pdf->Cell(27,6,'NO. UN',1,0);
$pdf->Cell(27,6,'HASIL',1,0);
$pdf->Cell(27,6,'EKSTRAKURIKULER',1,0);
$pdf->Cell(60,6,'JURUSAN',1,1);

$pdf->SetFont('Arial','',10);

 $sql= mysql_query("select biodata_calsiswa.nama, biodata_calsiswa.jk, biodata_calsiswa.tmp_lahir, biodata_calsiswa.tgl_lahir, biodata_calsiswa.alamat, biodata_calsiswa.agama, biodata_calsiswa.no_telp, biodata_calsiswa.jurusan, biodata_calsiswa.ekstrakur, ortu_wali.nama_ayah, ortu_wali.nama_ibu, ortu_wali.nama_wali, ortu_wali.pek_ayah, ortu_wali.pek_ibu, ortu_wali.pek_wali, ortu_wali.alamat_ortu, ortu_wali.no_telp_ortu, data_sekolah.nisn, data_sekolah.no_un, asal_sekolah.nama_sekolah, pendaftaran.no_pendaftaran, seleksi.hasil from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join ortu_wali on biodata_calsiswa.id_OrtuWali=ortu_wali.id_OrtuWali inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran inner join seleksi on pendaftaran.no_pendaftaran=seleksi.no_pendaftaran");
 while ($Tampil=mysql_fetch_array($sql)) {
 	$pdf->Cell(40,6,$Tampil['no_pendaftaran'],1,0);
    $pdf->Cell(60,6,$Tampil['nama'],1,0);
    $pdf->Cell(27,6,$Tampil['jk'],1,0);
    $pdf->Cell(27,6,$Tampil['tmp_lahir'],1,0);
    $pdf->Cell(27,6,$Tampil['tgl_lahir'],1,0);
    $pdf->Cell(27,6,$Tampil['alamat'],1,0);
    $pdf->Cell(27,6,$Tampil['agama'],1,0);
    $pdf->Cell(27,6,$Tampil['no_telp'],1,0);
    $pdf->Cell(27,6,$Tampil['nama_ayah'],1,0);
    $pdf->Cell(27,6,$Tampil['nama_ibu'],1,0);
    $pdf->Cell(27,6,$Tampil['nama_wali'],1,0);
    $pdf->Cell(27,6,$Tampil['alamat_ortu'],1,0);
    $pdf->Cell(27,6,$Tampil['pek_ayah'],1,0);
    $pdf->Cell(27,6,$Tampil['pek_ibu'],1,0);
    $pdf->Cell(27,6,$Tampil['pek_wali'],1,0);
    $pdf->Cell(27,6,$Tampil['no_telp_ortu'],1,0);
    $pdf->Cell(27,6,$Tampil['nama_sekolah'],1,0);
    $pdf->Cell(27,6,$Tampil['nisn'],1,0);
    $pdf->Cell(27,6,$Tampil['no_un'],1,0);
    $pdf->Cell(27,6,$Tampil['hasil'],1,0);
    $pdf->Cell(27,6,$Tampil['ekstrakur'],1,0);
    $pdf->Cell(60,6,$Tampil['jurusan'],1,1);
 }


$pdf->Output();
?>