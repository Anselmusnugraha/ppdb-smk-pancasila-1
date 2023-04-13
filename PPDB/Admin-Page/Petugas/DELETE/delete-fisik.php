<?php
	include "../../../Controller/koneksi.php";
	$ID_FIS=$_GET['id_fisik'];
	$sql=mysql_query("Delete FROM fisik WHERE id_fisik='$ID_FIS'");
	header('location:../Data-Fisik.php');
?>