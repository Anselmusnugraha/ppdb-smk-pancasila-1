<?php
  include '../../../../Controller/koneksi.php';

  $ID_US = $_POST['id_user'];
  $NAMA = $_POST['nama'];
  $USERNAME = $_POST['username'];
  $PASSWORD = $_POST['password'];

  if (empty($ID_US)){ 
	echo "<script>alert('ID_US belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Petugas.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Petugas.php'>";}
	elseif (empty($USERNAME)) {
	echo "<script>alert('USERNAME belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Petugas.php'>";}
	elseif (empty($PASSWORD)) {
	echo "<script>alert('PASSWORD belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Petugas.php'>";}
	else{
		$sql="update user set nama='$NAMA', username='$USERNAME', password='$PASSWORD' where id_user='$ID_US'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../Data-Petugas.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>