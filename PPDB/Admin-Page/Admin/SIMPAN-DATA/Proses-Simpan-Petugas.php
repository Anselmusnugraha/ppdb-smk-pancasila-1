<?php
  include '../../../Controller/koneksi.php';

  $ID_US = $_POST['id_user'];
  $NAMA = $_POST['nama'];
  $JABATAN = $_POST['jabatan'];
  $HAK_AKS = $_POST['hak_akses'];
  $USERNAME = $_POST['username'];
  $PASSWORD = $_POST['password'];

  if (empty($ID_US)){ 
	echo "<script>alert('ID_US belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";}
	elseif (empty($JABATAN)) {
	echo "<script>alert('JABATAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";}
	elseif (empty($HAK_AKS)) {
	echo "<script>alert('HAK_AKS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";}
	elseif (empty($USERNAME)) {
	echo "<script>alert('USERNAME belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";}
	elseif (empty($PASSWORD)) {
	echo "<script>alert('PASSWORD belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";}
	else{
		$sql="insert into user values('$ID_US','$NAMA','$JABATAN','$HAK_AKS','$USERNAME','$PASSWORD')";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../Data-Petugas.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>