<?php
	include('../koneksi.php');
	echo "<br/>";
	$ID_DATSEK=$_POST['id_datSekolah'];
	$NISN=$_POST['nisn'];
	$NO_UN=$_POST['no_un'];
	$NO_IJAZAH=$_POST['no_ijazah'];
	$TGL_IJAZAH=$_POST['tgl_ijazah'];

	if (empty($NISN)) {
	echo "<script>alert('NISN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-Sekolah.php'>";}
	elseif (empty($NO_UN)) {
	echo "<script>alert('NO_UN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-Sekolah.php'>";}

		else{
	$sql="update data_sekolah set nisn='$NISN', no_un='$NO_UN', no_ijazah='$NO_IJAZAH', tgl_ijazah='$TGL_IJAZAH' where id_datSekolah='$ID_DATSEK'";
	$query=mysql_query($sql);
    if($query){
	header('location:../../View-Data/View-Data-Sekolah.php');
	}else{
		echo "Edit Data Gagal!!";
	}
}
 ?>