<?php
	include "../../../Controller/koneksi.php";
	$ID_AKD=$_GET['id_akademik'];
	$sql=mysql_query("Delete FROM akademik WHERE id_akademik='$ID_AKD'");
	header('location:../Data-Akademik.php');
?>