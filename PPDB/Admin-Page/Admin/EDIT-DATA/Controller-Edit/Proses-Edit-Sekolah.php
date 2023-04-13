<?php
  include '../../../../Controller/koneksi.php';

  $ID_AS = $_POST['id_asal_sekolah'];
  $NM_SEK = $_POST['nama_sekolah'];

  if (empty($ID_AS)){ 
	echo "<script>alert('ID_AS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Sekolah.php'>"; }
	elseif (empty($NM_SEK)) {
	echo "<script>alert('NM_SEK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Sekolah.php'>";}
	else{
		$sql="update asal_sekolah set nama_sekolah='$NM_SEK' where id_asal_sekolah='$ID_AS'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../Data-Sekolah.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>