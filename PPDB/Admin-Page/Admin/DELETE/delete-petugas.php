<?php
	include "../../../Controller/koneksi.php";
	$ID_USER=$_GET['id_user'];
	$role = mysql_query("select hak_akses from user where id_user='$ID_USER'");
	$cek = mysql_fetch_assoc($role);

		if ($cek['hak_akses']==0) {
			echo "<script>alert('Admin tidak bisa di hapus!!!')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=../Data-Petugas.php'>";
		}else{
			$sql=mysql_query("Delete FROM user WHERE id_user='$ID_USER'");
			header('location:../Data-Petugas.php'); 			
		}	

?>