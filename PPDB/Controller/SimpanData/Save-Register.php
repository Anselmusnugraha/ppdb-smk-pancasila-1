<?php
	include('../koneksi.php');
	echo "<br/>";
	$ID_REG=$_POST['id_reg'];
	$USERNAME_REG=$_POST['username'];
	$PASSWORD_REG=$_POST['password'];
	$EMAIL=$_POST['email'];
	$CAPTCHA=$_POST['Captcha']; 

	if (empty($ID_REG)){ 
	echo "<script>alert('ID_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>"; }
	elseif (empty($USERNAME_REG)) {
	echo "<script>alert('USERNAME_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>";}
	elseif (empty($PASSWORD_REG)) {
	echo "<script>alert('PASSWORD_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>";}
	elseif (empty($EMAIL)) {
	echo "<script>alert('EMAIL belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>";}
	elseif (empty($CAPTCHA)) {
	echo "<script>alert('CAPTCHA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>";}
	else{
	    $cekdulu = "select * from register_calsiswa where email='$_POST[email]'";
		$prosescek = mysql_query($cekdulu);
		$cekdululagi = "select * from register_calsiswa where username='$_POST[username]'";
		$prosescek2 = mysql_query($cekdululagi);
			if (mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    			echo "<script>alert('Email Sudah Digunakan');history.go(-1) </script>";}
    		elseif (mysql_num_rows($prosescek2)>0) {
    			echo "<script>alert('Username Sudah Digunakan');history.go(-1) </script>";}	
	else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
	$sql="insert into register_calsiswa values('$ID_REG','$USERNAME_REG','$PASSWORD_REG','$EMAIL')";
	$query=mysql_query($sql);
	}
	session_start(); 
	$login = mysql_query("select * from register_calsiswa where username='$USERNAME_REG' and password='$PASSWORD_REG'"); 
	if ($row = mysql_fetch_assoc($login)) {
		if($_SESSION["Captcha"]!=$CAPTCHA){
			echo "<script>alert('Kode Captcha anda salah!')</script>"; 
			echo "<meta http-equiv='refresh' content='1 url=../../Form-Pendaftaran.php'>"; } 
		else{
		$_SESSION['username'] = $USERNAME_REG;
		$_SESSION['id_reg'] = $row['id_reg']; 
		header("location:../../Home-Siswa.php");} 
	}else{	
		echo "Data Gagal disimpan";
		echo "<meta http-equiv='refresh' content='1 url=../../Home-Login.php'>";
		 }
}
?>
