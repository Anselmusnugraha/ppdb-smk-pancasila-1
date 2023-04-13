<?php
    include '../../../../Controller/koneksi.php';
	echo "<br/>";
/* biodata_calsiswa */	
	$ID_CALSISWA=$_POST['id_calSiswa'];
	$NAMA=$_POST['nama'];
	$JK=$_POST['jk'];
	$TMP_LHR=$_POST['tmp_lahir'];
	$TGL_LHR=$_POST['tgl_lahir'];
	$ALAMAT=$_POST['alamat'];
	$AGAMA=$_POST['agama'];
	$NO_TELP=$_POST['no_telp'];
	$JURUSAN=$_POST['jurusan'];
		$EKSTRAKUR=$_POST['ekstrakur'];
		$PILIH_EKSTRAKUR="";
		foreach ($EKSTRAKUR as $ekstrakur) {
			$PILIH_EKSTRAKUR.=$ekstrakur.",";
		}
		$PILIH_EKSTRAKUR=substr($PILIH_EKSTRAKUR, 0,-2);
/* Register_Calsiswa */
	$ID_REG=$_POST['id_reg'];
	$USERNAME=$_POST['username'];
	$PASSWORD=$_POST['password'];
	$EMAIL=$_POST['email'];
/* ortu_wali */
	$ID_ORTUWALI=$_POST['id_OrtuWali'];
	$NM_AYAH=$_POST['nama_ayah'];
	$NM_IBU=$_POST['nama_ibu'];
	$NM_WALI=$_POST['nama_wali'];
	$PEK_AYAH=$_POST['pek_ayah'];
	$PEK_IBU=$_POST['pek_ibu'];
	$PEK_WALI=$_POST['pek_wali'];
	$ALAMATortu=$_POST['alamat_ortu'];
	$NO_TELPortu=$_POST['no_telp_ortu'];
/* data_sekolah */
	$ID_DATSEK=$_POST['id_datSekolah'];
	$NISN=$_POST['nisn'];
	$NO_UN=$_POST['no_un'];
	$NO_IJAZAH=$_POST['no_ijazah'];
	$TGL_IJAZAH=$_POST['tgl_ijazah'];
/* asal sekolah */
	$ID_ASALSEK=$_POST['id_asal_sekolah'];
	$NM_SEKOLAH=$_POST['nama_sekolah'];
/* pendaftaran */
	$NO_PENDAFTARAN=$_POST['no_pendaftaran'];
	$TGL_DAFTAR=date("Y/m/d h:i:s");
	$ID_USER=$_POST['id_user'];
/* Berkas */
	$ID_BERKAS=$_POST['id_berkas'];
/* Detail Berkas */
	$ID_DETBERKAS=$_POST['id_detBerkas'];
	$POTO=$_POST['Foto'];
	$KK=$_POST['kk'];
	$SKHU=$_POST['skhu_skhus'];
	$IJAZAH=$_POST['ijazah'];
	$PIAGAM=$_POST['srtf_piagam'];

	if (empty($NISN)){ 
	echo "<script>alert('NISN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>"; }
	elseif (empty($ID_DATSEK)) {
	echo "<script>alert('ID_DATSEK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($NO_UN)) {
	echo "<script>alert('NO_UN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_ASALSEK)) {
	echo "<script>alert('ID_ASALSEK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_CALSISWA)) {
	echo "<script>alert('ID_CALSISWA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($JK)) {
	echo "<script>alert('JK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($TMP_LHR)) {
	echo "<script>alert('TMP_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($TGL_LHR)) {
	echo "<script>alert('TGL_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('ALAMAT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($AGAMA)) {
	echo "<script>alert('AGAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($NO_TELP)) {
	echo "<script>alert('NO_TELP belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($JURUSAN)) {
	echo "<script>alert('JURUSAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_ORTUWALI)) {
	echo "<script>alert('ID_ORTUWALI belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($NM_IBU)) {
	echo "<script>alert('NM_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($PEK_IBU)) {
	echo "<script>alert('PEK_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ALAMATortu)) {
	echo "<script>alert('ALAMATortu belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($NO_PENDAFTARAN)) {
	echo "<script>alert('NO_PENDAFTARAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($TGL_DAFTAR)) {
	echo "<script>alert('TGL_DAFTAR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_USER)) {
	echo "<script>alert('ID_USER belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_REG)) {
	echo "<script>alert('ID_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_BERKAS)) {
	echo "<script>alert('ID_BERKAS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	elseif (empty($ID_DETBERKAS)) {
	echo "<script>alert('ID_DETBERKAS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Input-Data-Baru.php'>";}
	else{

	$sql="insert into asal_sekolah values('$ID_ASALSEK','$NM_SEKOLAH')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastAsalSek=mysql_insert_id();

	$sql="insert into data_sekolah values('$ID_DATSEK','$LastAsalSek','$NISN','$NO_UN','$NO_IJAZAH','$TGL_IJAZAH')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastDataSek=mysql_insert_id();

	$sql="insert into ortu_wali values('$ID_ORTUWALI','$NM_AYAH','$NM_IBU','$NM_WALI','$PEK_AYAH','$PEK_IBU','$PEK_WALI','$ALAMATortu','$NO_TELPortu')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastOrtu=mysql_insert_id();

	$sql="insert into pendaftaran values('$NO_PENDAFTARAN','$ID_USER','$TGL_DAFTAR')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$NOPendaftaran=mysql_insert_id();

	$sql="insert into register_calsiswa values('$ID_REG','$USERNAME','$PASSWORD','$EMAIL')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastREG=mysql_insert_id();
	
	$sql="insert into biodata_calsiswa values('$ID_CALSISWA','$LastOrtu','$LastDataSek','$NOPendaftaran','$NAMA','$JK','$TMP_LHR','$TGL_LHR','$ALAMAT','$AGAMA','$NO_TELP','$JURUSAN','$PILIH_EKSTRAKUR','$LastREG')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastCalsiswa=mysql_insert_id();

	$sql= "INSERT INTO detail_berkas VALUES('$ID_DETBERKAS','$POTO','$KK','$SKHU','$IJAZAH','$PIAGAM')";
		$query=mysql_query($sql);
		echo mysql_insert_id();
		$LastdetBerkas=mysql_insert_id(); 

	$sql="insert into berkas values('$ID_BERKAS','$LastdetBerkas','$LastCalsiswa')";
	$query=mysql_query($sql);

 if($query){	
header('location:../../Data-CalSiswa.php');
}
else{	
echo "Data Gagal disimpan";
	}
}
?>