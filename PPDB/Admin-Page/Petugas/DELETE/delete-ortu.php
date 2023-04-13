<?php
	include "../../../Controller/koneksi.php";
	$ID_ORT=$_GET['id_OrtuWali'];
	$sql=mysql_query("Delete FROM ortu_wali WHERE id_OrtuWali='$ID_ORT'");
	header('location:../Data-Ortu.php');
?>