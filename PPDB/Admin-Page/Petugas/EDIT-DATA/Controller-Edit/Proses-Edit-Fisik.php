<?php
	include('../../../../Controller/koneksi.php');
	$ID_FIS=$_POST['id_fisik'];
	$BB=$_POST['berat_badan'];
	$TB=$_POST['tinggi_badan'];
	$TT=$_POST['tato_tindik']; 
	
	if (empty($ID_FIS)) {
	echo "<script>alert('ID_FIS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Fisik.php'>";}
	elseif (empty($BB)) {
	echo "<script>alert('BB belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Fisik.php'>";}
	elseif (empty($TB)) {
	echo "<script>alert('TB belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Fisik.php'>";}
	elseif (empty($TT)) {
	echo "<script>alert('TT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Fisik.php'>";} 

		else{
	$sql="update fisik set berat_badan='$BB', tinggi_badan='$TB', tato_tindik='$TT' where id_fisik='$ID_FIS'";
	$query=mysql_query($sql);
    if($query){
	header('location:../../Data-Fisik.php');
	}else{
		echo "Edit Data Gagal!!";
	}
}
 ?>