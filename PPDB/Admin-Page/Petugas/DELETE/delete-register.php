<?php
	include "../../../Controller/koneksi.php";
	$ID_REG=$_GET['id_reg'];
	$sql=mysql_query("Delete FROM register_calsiswa WHERE id_reg='$ID_REG'");
	header('location:../Data-Register.php');
?>