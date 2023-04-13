<?php
	include "../../../Controller/koneksi.php";
	$ID_SKH=$_GET['id_datSekolah'];
	$sql=mysql_query("Delete FROM data_sekolah WHERE id_datSekolah='$ID_SKH'");
	header('location:../Data-Sekolah.php');
?>