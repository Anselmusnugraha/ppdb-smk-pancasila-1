<?php
	include "../../../Controller/koneksi.php";
	$ID_SEL=$_GET['id_seleksi'];
	$sql=mysql_query("Delete FROM seleksi WHERE id_seleksi='$ID_SEL'");
	header('location:../Data-Seleksi.php');
?>