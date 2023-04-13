<?php
  include '../../../../Controller/koneksi.php';
  $ID_CAL = $_POST['id_calSiswa'];
  $NAMA = $_POST['nama'];
  $JK = $_POST['jk'];
  $TMPLHR = $_POST['tmp_lahir'];
  $TGLLHR = $_POST['tgl_lahir'];
  $ALAMAT = $_POST['alamat'];
  $AGAMA = $_POST['agama'];
  $NOTELP = $_POST['no_telp'];
  $JURUSAN = $_POST['jurusan'];

	if (empty($ID_CAL)) {
	echo "<script>alert('ID_CAL belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($JK)) {
	echo "<script>alert('JK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($TMPLHR)) {
	echo "<script>alert('TMPLHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($TMPLHR)) {
	echo "<script>alert('TMPLHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($TGLLHR)) {
	echo "<script>alert('TGLLHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('ALAMAT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($NOTELP)) {
	echo "<script>alert('NOTELP belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	elseif (empty($JURUSAN)) {
	echo "<script>alert('JURUSAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-CalSiswa.php'>";}
	else{
  		$sql = "update biodata_calsiswa set nama='$NAMA', jk='$JK', tmp_lahir='$TMPLHR', tgl_lahir='$TGLLHR', alamat='$ALAMAT', no_telp='$NOTELP', jurusan='$JURUSAN' where id_calSiswa='$ID_CAL'";
  		$query = mysql_query($sql);
 
 if ($query) {
  header('location:../../Data-CalSiswa.php');
 }else{
 	echo "Edit Data Calon Siswa GAGAL!!";
 }
 }

?>