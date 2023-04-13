<?php
	include "../../../Controller/koneksi.php";
	$ID_SKH=$_GET['id_asal_sekolah'];
	$sql=mysql_query("Delete FROM asal_sekolah WHERE id_asal_sekolah='$ID_SKH'");
	header('location:../Data-Sekolah.php');
?>