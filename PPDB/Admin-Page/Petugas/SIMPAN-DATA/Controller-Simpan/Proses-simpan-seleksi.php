<?php
  include '../../../../Controller/koneksi.php';

  /* Akademik */
  $ID_AKADEMIK = $_POST['id_akademik'];
  $B_INDONESIA = $_POST['B_indonesia'];
  $B_INGGRIS = $_POST['B_inggris'];
  $MATEMATIKA = $_POST['Matematika'];
  $IPA = $_POST['IPA'];
  $TES = $_POST['tes_khusus'];
  $NA_SKHU = ($B_INDONESIA+$B_INGGRIS+$MATEMATIKA+$IPA)/4*0.6;
  $NA_TES = ($TES)*0.4;
  $NR = $NA_SKHU + $NA_TES;
  /* Fisik */
  $BB = $_POST['berat_badan'];
  $TB = $_POST['tinggi_badan'];
  $TT = $_POST['tato_tindik'];
  $ID_FISIK = $_POST['id_fisik'];
  /* Seleksi */
  $NO_DAF = $_POST['no_pendaftaran'];
  $ID_SELEKSI = $_POST['id_seleksi'];
  
  if ($NR>75) {
  	$HASIL = "Diterima";
  }else{
  	$HASIL = "Tidak Diterima";
  }


if (empty($NO_DAF)){ 
	echo "<script>alert('NO_DAF belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>"; }
	elseif (empty($ID_SELEKSI)) {
	echo "<script>alert('ID_SELEKSI belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($ID_AKADEMIK)) {
	echo "<script>alert('ID_AKADEMIK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($B_INDONESIA)) {
	echo "<script>alert('B_INDONESIA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($B_INGGRIS)) {
	echo "<script>alert('B_INGGRIS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($MATEMATIKA)) {
	echo "<script>alert('MATEMATIKA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($IPA)) {
	echo "<script>alert('TR_KEJURUAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($ID_FISIK)) {
	echo "<script>alert('ID_FISIK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($BB)) {
	echo "<script>alert('BB belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($TB)) {
	echo "<script>alert('TB belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	elseif (empty($TT)) {
	echo "<script>alert('TT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Seleksi.php'>";}
	else{

		$sql="insert into akademik values('$B_INDONESIA','$B_INGGRIS','$MATEMATIKA','$IPA','$TES','$ID_AKADEMIK','$NA_SKHU','$NA_TES')";
		$query=mysql_query($sql);
		echo mysql_insert_id();
		$LastAkademik=mysql_insert_id();

		$sql="insert into fisik values('$BB','$TB','$TT','$ID_FISIK')";
		$query=mysql_query($sql);
		echo mysql_insert_id();
		$LastFisik=mysql_insert_id();

		$sql="insert into seleksi values('$HASIL','$NO_DAF','$LastAkademik','$LastFisik','$ID_SELEKSI')";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../Data-Seleksi.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>