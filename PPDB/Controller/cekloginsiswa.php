<?php 
include "koneksi.php"; 
$username = $_POST['username']; 
$password = $_POST['password'];
$CAPTCHA = $_POST['Captcha'];
if (empty($username)){ 
	echo "<script>alert('Username belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; }
else if (empty($password)){ 
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; }
else{ session_start();
	$login = mysql_query("select * from register_calsiswa where username='$username' and password='$password'"); 
	if ($row = mysql_fetch_assoc($login)) {
		if($_SESSION["Captcha"]!=$CAPTCHA){
			echo "<script>alert('Kode Captcha anda salah!')</script>"; 
			echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; } 
		else{
		$_SESSION['username'] = $username;
		$_SESSION['id_reg'] = $row['id_reg'];
		header("location:../Home-Siswa.php");} 
	}
		else{ 
			echo "<script>alert('Username atau Password salah')</script>"; 
			echo "<meta http-equiv='refresh' content='1 url=../Home-Login.php'>"; } 
			}
			?>