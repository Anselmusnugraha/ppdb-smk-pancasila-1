<?php
	include "../../../Controller/koneksi.php";
	$ID_CALSIS=$_GET['id_calSiswa'];
	$sql=mysql_query("Delete FROM biodata_calsiswa WHERE id_calSiswa='$ID_CALSIS'");
	header('location:../Data-CalSiswa.php');
?>