<?php
	include('../koneksi.php');
	echo "<br/>";
	$ID_CALSISWA=$_POST['id_calSiswa'];
	$NAMA=$_POST['nama'];
	$JK=$_POST['jk'];
	$TMP_LHR=$_POST['tmp_lahir'];
	$TGL_LHR=$_POST['tgl_lahir'];
	$ALAMAT=$_POST['alamat'];
	$AGAMA=$_POST['agama'];
	$NO_TELP=$_POST['no_telp'];

	if (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($JK)) {
	echo "<script>alert('JK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($TMP_LHR)) {
	echo "<script>alert('TMP_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($TGL_LHR)) {
	echo "<script>alert('TGL_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('ALAMAT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($AGAMA)) {
	echo "<script>alert('AGAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
	elseif (empty($NO_TELP)) {
	echo "<script>alert('NO_TELP belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../View-Data/View-Data-CalSiswa.php'>";}
		else{
	$sql="update biodata_calsiswa set nama='$NAMA', jk='$JK', tmp_lahir='$TMP_LHR', tgl_lahir='$TGL_LHR', alamat='$ALAMAT', agama='$AGAMA', no_telp='$NO_TELP' where id_calSiswa='$ID_CALSISWA'";
	$query=mysql_query($sql);
    if($query){
	header('location:../../View-Data/View-Data-CalSiswa.php');
	}else{
		
echo "Edit Data Gagal!!";
	}
}
 ?>