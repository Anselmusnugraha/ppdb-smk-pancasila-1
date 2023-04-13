<?php
include 'fpdf.php';
include '../Controller/koneksi.php';

$pdf = new FPDF('P','mm','legal');
$pdf->AddPage();

$pdf->Image('../../assets/img/logo stm ps1.png',13,8,24); 
$pdf->Image('../../assets/img/Iso-Anab.jpg',175,14,25); 
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,'FORMULIR PENDAFTARAN','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'PENERIMAAN PESERTA DIDIK BARU (PPDB)','0','1','C',false);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'SMK PANCASILA 1 WONOGIRI','0','1','C',false);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,'TAHUN PELAJARAN 2018/2019','0','1','C',false);
/*$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Jl. Jendral Sudirman No. 106, Wonogiri, Jawa Tengah','0','1','C',false);
$pdf->Cell(0,2,'Telp. (0273) 321028','0','1','C',false); */
$pdf->Ln(3);
$pdf->Cell(193,0.6,'','0','1','C',true);
$pdf->Ln(5);

session_start();
$ID_REG = $_GET['id_reg'];
/**/
 $sql2=mysql_query("select pendaftaran.no_pendaftaran, pendaftaran.tgl_daftar, biodata_calsiswa.nama, biodata_calsiswa.jk, biodata_calsiswa.tmp_lahir, biodata_calsiswa.tgl_lahir, biodata_calsiswa.alamat, biodata_calsiswa.agama, biodata_calsiswa.no_telp, biodata_calsiswa.jurusan, biodata_calsiswa.ekstrakur, ortu_wali.nama_ayah, ortu_wali.nama_ibu, ortu_wali.nama_wali, ortu_wali.pek_ayah, ortu_wali.pek_ibu, ortu_wali.pek_wali, ortu_wali.alamat_ortu, ortu_wali.no_telp_ortu, data_sekolah.nisn, data_sekolah.no_un, data_sekolah.no_ijazah, data_sekolah.tgl_ijazah, asal_sekolah.nama_sekolah from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join ortu_wali on biodata_calsiswa.id_OrtuWali=ortu_wali.id_OrtuWali inner join pendaftaran on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
 while ($View=mysql_fetch_array($sql2)) {
 	$pdf->SetLeftMargin(10);

 	
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'No. Pendaftaran',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_pendaftaran'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	   $pdf->Cell(42,6,'Tanggal Pendaftaran',0,0,'L');
 		$date=$View['tgl_daftar'];
 		$date = date('l, d F Y h:m:s', strtotime($date));
 		$pdf->SetFont('Arial','',11);
 	   $pdf->Cell(10,5,': '.$date,0,0,'L');

 	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',13);
 	$pdf->Cell(193,6,'DATA DIRI',1,0,'C');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nama Lengkap',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Jenis Kelamin',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['jk'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Tempat Lahir',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['tmp_lahir'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Tanggal Lahir',0,0,'L');
 	   $date=$View['tgl_lahir'];
 		$date = date('d M Y', strtotime($date));
 		$pdf->SetFont('Arial','',11);
 	   $pdf->Cell(10,5,': '.$date,0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Alamat Rumah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['alamat'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Agama',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['agama'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'No. Telp./Hp',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_telp'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Ekstrakurikuler',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['ekstrakur'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Pilihan Jurusan',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['jurusan'],0,0,'L');

 	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',13);
 	$pdf->Cell(193,6,'ORANG TUA/WALI',1,0,'C');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nama Ayah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama_ayah'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nama Ibu',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama_ibu'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nama Wali',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama_wali'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Pekerjaan Ayah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['pek_ayah'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Pekerjaan Ibu',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['pek_ibu'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Pekerjaan Wali',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['pek_wali'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Alamat Rumah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['alamat_ortu'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'No. Telp./Hp',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_telp_ortu'],0,0,'L');

 	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',13);
 	$pdf->Cell(193,6,'DATA SEKOLAH',1,0,'C');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Asal Sekolah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nama_sekolah'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'NISN',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['nisn'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nomor UN',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_un'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Nomor Ijazah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['no_ijazah'],0,0,'L');
 	$pdf->Ln(6);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Tanggal Ijazah',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': '.$View['tgl_ijazah'],0,0,'L');

 	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',13);
 	$pdf->Cell(193,6,'KETERANGAN',1,0,'C');
 	$pdf->Ln(7);
 	$pdf->SetFont('Arial','B',11);
 	$pdf->Cell(42,6,'Keterangan',0,0,'L');
 	$pdf->SetFont('Arial','',11);
 	$pdf->Cell(10,5,': Formulir Pendaftaran ini disimpan sebagai bukti bahwa calon Peserta Didik',0,0,'L');
 	$pdf->Ln(5);
 	$pdf->Cell(42,5,'',0,0,'L');
 	$pdf->Cell(10,5,'  Baru Telah Tercatat pada PPDB SMK Pancasila 1 Wonogiri Tahun 2018/2019',0,0,'L');
 }


$pdf->Ln(30);
$pdf->SetLeftMargin(20);

$sql = "select detail_berkas.Foto from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
$query = mysql_query($sql);
    if ($tampil = mysql_fetch_array($query)) {
        $Foto = $tampil['Foto'];
        if (empty($Foto)) {
        	$pdf->SetFont('Arial','B',13);
			$pdf->Cell(25,30,'3x4',1,0,'C');
           /* $pdf->Image('../../assets/img/couple-2-icon.png',10, 40,50); */
        }else{
            $pdf->Image('../Controller/SimpanData/'.$Foto,20, 270, 30);     
        }
    }else{
    	echo "GAGAL KABEH Jon!!!";
    } 

$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(137);
$pdf->Cell(0,5,'Wonogiri, ...............................',0,0,'L');
$pdf->SetLeftMargin(0);
$pdf->Ln(25);
$pdf->SetLeftMargin(135);
$pdf->Cell(5,5,'(.................................................)',0,0,'L');
$pdf->Ln(4);
$pdf->SetLeftMargin(150);
$pdf->Cell(0,5,'Nama Lengkap',0,0,'L');

$pdf->SetFont('Arial','B',11);
$pdf->SetLeftMargin(10);
$pdf->Ln(15);
$pdf->Cell(0,5,'NB :',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->SetLeftMargin(10);
$pdf->Ln(5);
$pdf->Cell(0,5,'* 1.Validasi data pendaftaran dilaksanakan pada hari Senin, 02 Juli 2018. (Formulir Pendaftaran ini Wajib dibawa)',0,0,'L');
$pdf->Ln(4);
$pdf->Cell(0,5,'* 2.Tempat di SMK Pancasila 1 Wonogiri Gedung Barat Jam 08.00 WIB',0,0,'L');
$pdf->Ln(10);
$pdf->Cell(193,0.6,'','0','1','C',true);
$pdf->Ln(1.5);
$pdf->Cell(0,0.6,'........................................................................................................................................................................................................................','0','1','C',true);

$pdf->Output();
?>