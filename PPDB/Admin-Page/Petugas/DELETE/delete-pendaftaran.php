<?php
	include "../../../Controller/koneksi.php";
	$NO_DAF = $_GET['no_pendaftaran'];
/* AMBIL ID DATA SEKOLAH */
	$IDSEK = mysql_query("select data_sekolah.id_datSekolah from data_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran where pendaftaran.no_pendaftaran='".$NO_DAF."'");
	if ($View=mysql_fetch_array($IDSEK)) {
		$ID_DATSEK = $View['id_datSekolah'];
	}else{
		echo "Get id Data Sekolah GAGAL!!";
	}
/* AMBIL ID ORTU WALI */
	$IDOR = mysql_query("select ortu_wali.id_OrtuWali from ortu_wali inner join biodata_calsiswa on ortu_wali.id_OrtuWali=biodata_calsiswa.id_OrtuWali inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran where pendaftaran.no_pendaftaran='".$NO_DAF."'");
	if ($V2=mysql_fetch_array($IDOR)) {
		$ID_ORTU = $V2['id_OrtuWali'];
	}else{
		echo "Get id Data Ortu Wali GAGAL!!";
	}
/* AMBIL ID DETAIL BERKAS */
	$IDBRK = mysql_query("select detail_berkas.id_detBerkas from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran where pendaftaran.no_pendaftaran='".$NO_DAF."'");
	if ($V3=mysql_fetch_array($IDBRK)) {
		$ID_DETBRKS = $V3['id_detBerkas'];
	}else{
		echo "Get id Data Detail Berkas GAGAL!!";
	}
/* AMBIL ID AKADEMIK */
	$IDAKD = mysql_query("select akademik.id_akademik from akademik inner join seleksi on akademik.id_akademik=seleksi.id_akademik inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran where pendaftaran.no_pendaftaran='".$NO_DAF."'");
	if ($V4=mysql_fetch_array($IDAKD)) {
		$ID_AKADEMIK = $V4['id_akademik'];
	}else{
		echo "Get id akademik GAGAL!!";
	}
/* AMBIL ID FISIK */
	$IDFIS = mysql_query("select fisik.id_fisik from fisik inner join seleksi on fisik.id_fisik=seleksi.id_fisik inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran where pendaftaran.no_pendaftaran='".$NO_DAF."'");
	if ($V5=mysql_fetch_array($IDFIS)) {
		$ID_FISIK = $V5['id_fisik'];
	}else{
		echo "Get id fisik GAGAL!!";
	}
/* PROSES DELETE */
	$sql1=mysql_query("Delete FROM data_sekolah WHERE id_datSekolah='$ID_DATSEK'");
	$sql2=mysql_query("Delete FROM ortu_wali WHERE id_OrtuWali='$ID_ORTU'");
	$sql3=mysql_query("Delete FROM detail_berkas WHERE id_detBerkas='$ID_DETBRKS'");
	$sql4=mysql_query("Delete FROM akademik WHERE id_akademik='$ID_AKADEMIK'");
	$sql5=mysql_query("Delete FROM fisik WHERE id_fisik='$ID_FISIK'");  
	$sql=mysql_query("Delete FROM pendaftaran WHERE no_pendaftaran='$NO_DAF'"); 
	header('location:../Data-Pendaftaran.php'); 
?>