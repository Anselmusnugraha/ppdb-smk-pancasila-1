<?php
  include '../../../../Controller/koneksi.php';
  $ID_AKD = $_POST['id_akademik'];
  $B_IND = $_POST['B_indonesia'];
  $B_INGG = $_POST['B_inggris'];
  $MAT = $_POST['Matematika'];
  $IPA = $_POST['IPA'];
  $TES = $_POST['tes_khusus'];
  $NA_SKHU = ($B_IND+$B_INGG+$MAT+$IPA)/4*0.6;
  $NA_TES = ($TES)*0.4;
  $NR = $NA_SKHU + $NA_TES;

  if ($NR>75) {
  	$HASIL = "Diterima";
  }else{
  	$HASIL = "Tidak Diterima";
  }

	if (empty($ID_AKD)) {
	echo "<script>alert('ID_AKD belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Akademik.php'>";}
	elseif (empty($B_IND)) {
	echo "<script>alert('B_IND belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Akademik.php'>";}
	elseif (empty($B_INGG)) {
	echo "<script>alert('B_INGG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Akademik.php'>";}
	elseif (empty($MAT)) {
	echo "<script>alert('MAT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Akademik.php'>";}
	elseif (empty($IPA)) {
	echo "<script>alert('IPA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Akademik.php'>";}
	else{
  		$sql = "update akademik set B_indonesia='$B_IND', B_inggris='$B_INGG', Matematika='$MAT', IPA='$IPA', tes_khusus='$TES', na_skhu='$NA_SKHU', na_teskhusus='$NA_TES' where id_akademik='$ID_AKD'";
  		$query = mysql_query($sql);

  		$sql1 = "update seleksi set hasil='$HASIL' where id_akademik='$ID_AKD'";
  		$query1 = mysql_query($sql1);
 
 if ($query) {
  header('location:../../Data-Akademik.php');
 }else{
 	echo "Edit Data Nilai Seleksi Akademik GAGAL!!";
 }
 }

?>