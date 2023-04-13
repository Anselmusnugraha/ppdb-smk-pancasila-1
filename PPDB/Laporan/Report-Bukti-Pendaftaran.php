<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Image('../../assets/img/logo stm ps1.png',13,7,20);
$pdf->Image('../../assets/img/Iso-Anab.jpg',173,10,25); 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'BUKTI PENDAFTARAN PESERTA DIDIK BARU','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'SMK PANCASILA 1 WONOGIRI','0','1','C',false);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Jl. Jendral Sudirman No. 106, Wonogiri, Jawa Tengah','0','1','C',false);
$pdf->Cell(0,2,'Telp. (0273) 321028','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$NODAF=$_GET['no_pendaftaran'];
$SQL=mysql_query("select biodata_calsiswa.id_reg from biodata_calsiswa inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran where (pendaftaran.no_pendaftaran='".$NODAF."')");
if ($View=mysql_fetch_array($SQL)) {
	$ID_REG = $View['id_reg'];
}else{
	echo "Ambil ID Register GAGAL!!";
}

$sql = "select detail_berkas.Foto from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
$query = mysql_query($sql);
    if ($tampil = mysql_fetch_array($query)) {
        $Foto = $tampil['Foto'];
        if (empty($Foto)) {
            $pdf->Image('../../assets/img/couple-2-icon.png',10, 40,50);
        }else{
            $pdf->Image('../Controller/SimpanData/'.$Foto,10, 40,50);     
        }
    }else{
    	echo "GAGAL KABEH Jon!!!";
    } 

/*
 $sql1= mysql_query("select detail_berkas.Foto from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
 	while ($Tampil=mysql_fetch_array($sql1)) {
 	$gambar=$Tampil['Foto'];
 	$pdf->Image('../Controller/SimpanData/'.$gambar,10, 40,50);
 	} 
 $pdf->Image('../../assets/img/couple-2-icon.png',10, 40,50); */
 
 $sql2=mysql_query("select pendaftaran.no_pendaftaran, pendaftaran.tgl_daftar, biodata_calsiswa.nama, biodata_calsiswa.jurusan, asal_sekolah.nama_sekolah from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join pendaftaran on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
 while ($View=mysql_fetch_array($sql2)) {
 	$pdf->SetLeftMargin(70);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'No. Pendaftaran',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_pendaftaran'],0,0,'L');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nama Pendaftar',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama'],0,0,'L');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Asal Sekolah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama_sekolah'],0,0,'L');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Pilihan Jurusan',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['jurusan'],0,0,'L');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	   $pdf->Cell(42,6,'Tanggal Pendaftaran',0,0,'L');
 		$date=$View['tgl_daftar'];
 		$date = date('l, d F Y h:m:s', strtotime($date));
 		$pdf->SetFont('Arial','',11);
 	   $pdf->Cell(10,5,': '.$date,0,0,'L');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Keterangan',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': Bukti Pendaftaran ini disimpan sebagai bukti',0,0,'L');
 	$pdf->Ln(5);
 	$pdf->Cell(42,5,'',0,0,'L');
 	$pdf->Cell(10,5,'  bahwa calon Peserta Didik Baru Telah Tercatat',0,0,'L');
 	$pdf->Ln(5);
 	$pdf->Cell(42,5,'',0,0,'L');
 	$pdf->Cell(10,5,'  dan Sah Mengikuti Tes Seleksi Tahun 2018/2019',0,0,'L');
 }
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(158);
$pdf->Cell(0,5,'TTD',0,0,'L');
$pdf->SetLeftMargin(0);

$pdf->Ln(25);
$pdf->SetLeftMargin(135);
$pdf->Cell(5,5,'(.................................................)',0,0,'L');

$pdf->Ln(4);
$pdf->SetLeftMargin(150);
$pdf->Cell(0,5,'Nama Lengkap',0,0,'L');

$pdf->SetFont('Arial','B',11);
$pdf->SetLeftMargin(10);
$pdf->Ln(5);
$pdf->Cell(0,5,'NB :',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->SetLeftMargin(10);
$pdf->Ln(5);
$pdf->Cell(0,5,'* 1.Tes Ujian Seleksi dilaksanakan pada hari Senin, 02 Juli 2018',0,0,'L');
$pdf->Ln(4);
$pdf->Cell(0,5,'* 2.Tempat di SMK Pancasila 1 Wonogiri Gedung Barat Jam 08.00 WIB',0,0,'L');
$pdf->Ln(10);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(1.5);
$pdf->Cell(0,0.6,'........................................................................................................................................................................................................................','0','1','C',true);

$pdf->Output();
?>