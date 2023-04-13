<?php
	include "../../../Controller/koneksi.php";
	$ID_BRKS=$_GET['id_detBerkas'];
	$sql=mysql_query("Delete FROM detail_berkas WHERE id_detBerkas='$ID_BRKS'");
	header('location:../Data-Berkas.php');
?>