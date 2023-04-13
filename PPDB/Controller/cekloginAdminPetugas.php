<?php 
include "koneksi.php"; 
$username = $_POST['username']; 
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses']; 
$CAPTCHA = $_POST['Captcha'];

if (empty($username)){ 
	echo "<script>alert('Username belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; }
	else if (empty($password)){ 
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; }
		else{ 
			session_start(); 
			$login = mysql_query("select * from user where username='$username' and password='$password'"); 
			if (mysql_num_rows($login) == 0){
				 echo "<script>alert('Username atau Password salah')</script>"; 
				 echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>";}
			else if($_SESSION["Captcha"]!=$CAPTCHA){
				 echo "<script>alert('Kode Captcha anda salah!')</script>"; 
				 echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; } 
				else{ 
					$row = mysql_fetch_assoc($login);
						
						if($row['hak_akses'] == 0 && $hak_akses == 0){
							$_SESSION['username']=$username;
							$_SESSION['hak_akses']='Admin';
							$_SESSION['id_user'] = $row['id_user'];
							header("Location: ../Admin-Page/Admin/Admin-Index.php");
						}else if($row['hak_akses'] == 1 && $hak_akses == 1){
							$_SESSION['username']=$username;
							$_SESSION['hak_akses']='Petugas';
							$_SESSION['id_user'] = $row['id_user'];
							header("Location: ../Admin-Page/Petugas/index-Petugas.php");
						}else{
							echo "<script>alert('Hak Akses salah!')</script>"; 
				            echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>";} 
					}
			}
?>