<?php
  include '../../../../Controller/koneksi.php';
  $ID_REG = $_POST['id_reg'];
  $USERNAME = $_POST['username'];
  $PASSWORD = $_POST['password'];
  $EMAIL = $_POST['email'];

	if (empty($ID_REG)) {
	echo "<script>alert('ID_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Register.php'>";}
	elseif (empty($USERNAME)) {
	echo "<script>alert('USERNAME belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Register.php'>";}
	elseif (empty($PASSWORD)) {
	echo "<script>alert('PASSWORD belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Register.php'>";}
	elseif (empty($EMAIL)) {
	echo "<script>alert('EMAIL belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Register.php'>";}
	else{
  		$sql = "update register_calsiswa set username='$USERNAME', password='$PASSWORD', email='$EMAIL' where id_reg='$ID_REG'";
  		$query = mysql_query($sql);
 
 if ($query) {
  header('location:../../Data-Register.php');
 }else{
 	echo "Edit Register Calon Siswa GAGAL!!";
 }
 }

?>