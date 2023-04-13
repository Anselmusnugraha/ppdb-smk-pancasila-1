<?php
	include('../koneksi.php');
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
	$ID_REG=$_POST['id_reg'];
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

	$FOTO=$_FILES['Foto']['name'];
		$tmpFoto = $_FILES['Foto']['tmp_name']; 
			$fotobaru = date('dmYHis').$FOTO;
				$path1 = "Img-Upload/".$fotobaru; 

	$KK=$_FILES['kk']['name'];
		$tmpKK = $_FILES['kk']['tmp_name']; 
			$fotokk = date('dmYHis').$KK;
				$path2 = "Img-Upload/".$fotokk; 

	$SKHU=$_FILES['skhu_skhus']['name'];
		$fotoSKHU = date('dmYHis').$SKHU;
			$tmpSKHU = $_FILES['skhu_skhus']['tmp_name'];
				$path3 = "Img-Upload/".$fotoSKHU; 
	
	$IJAZAH=$_FILES['ijazah']['name'];
		$tmpIJAZAH = $_FILES['ijazah']['tmp_name']; 
			$fotoIjazah = date('dmYHis').$IJAZAH;
				$path4 = "Img-Upload/".$fotoIjazah;

	$SRT_PIAGAM=$_FILES['srtf_piagam']['name'];
		$tmpPIAGAM = $_FILES['srtf_piagam']['tmp_name']; 
			$fotopiagam = date('dmYHis').$SRT_PIAGAM;
				$path5 = "Img-Upload/".$fotopiagam; 
			
	$Default='Img-Upload/blank-foto.jpg';

		
	$FOTO=$_FILES['Foto']['type'];
	$KK=$_FILES['kk']['type'];
	$SKHU=$_FILES['skhu_skhus']['type'];
	$IJAZAH=$_FILES['ijazah']['type'];
	$SRT_PIAGAM=$_FILES['srtf_piagam']['type'];

	if ($FOTO=="image/jpeg" || $FOTO=="image/jpeg") {
		$UPLOAD=array();
		foreach ($_FILES as $aFile) {
	  if($aFile['error']==0){
	  /*	if ($aFile['name']==null || $aFile['name']=="") {
	  		$Lokasi = 'Img-Upload/'.$aFile['blank-foto.jpg'];
	  	}else{ */
			$Lokasi = 'Img-Upload/'.$aFile['name'];
			$Default='Img-Upload/blank-foto.jpg';
			if(0 === $aFile['error'] && (false !== move_uploaded_file($aFile['tmp_name'], $Lokasi))){
				$UPLOAD[] = $Lokasi;
			} 
		 	else{
		 		$UPLOAD[]=$Default;
		 	}
		
	  }else{
	  	echo "Format File Salah!";
	  }
	}
} 

	if (empty($NISN)){ 
	echo "<script>alert('NISN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>"; }
	elseif (empty($ID_DATSEK)) {
	echo "<script>alert('ID_DATSEK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($NO_UN)) {
	echo "<script>alert('NO_UN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_ASALSEK)) {
	echo "<script>alert('ID_ASALSEK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_CALSISWA)) {
	echo "<script>alert('ID_CALSISWA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('NAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($JK)) {
	echo "<script>alert('JK belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($TMP_LHR)) {
	echo "<script>alert('TMP_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($TGL_LHR)) {
	echo "<script>alert('TGL_LHR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('ALAMAT belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($AGAMA)) {
	echo "<script>alert('AGAMA belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($NO_TELP)) {
	echo "<script>alert('NO_TELP belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($JURUSAN)) {
	echo "<script>alert('JURUSAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_ORTUWALI)) {
	echo "<script>alert('ID_ORTUWALI belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($NM_IBU)) {
	echo "<script>alert('NM_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($PEK_IBU)) {
	echo "<script>alert('PEK_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ALAMATortu)) {
	echo "<script>alert('ALAMATortu belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($NO_PENDAFTARAN)) {
	echo "<script>alert('NO_PENDAFTARAN belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($TGL_DAFTAR)) {
	echo "<script>alert('TGL_DAFTAR belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_USER)) {
	echo "<script>alert('ID_USER belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_REG)) {
	echo "<script>alert('ID_REG belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_BERKAS)) {
	echo "<script>alert('ID_BERKAS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
	elseif (empty($ID_DETBERKAS)) {
	echo "<script>alert('ID_DETBERKAS belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Form-Daftar-Komplit.php'>";}
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

	$sql="insert into biodata_calsiswa values('$ID_CALSISWA','$LastOrtu','$LastDataSek','$NOPendaftaran','$NAMA','$JK','$TMP_LHR','$TGL_LHR','$ALAMAT','$AGAMA','$NO_TELP','$JURUSAN','$PILIH_EKSTRAKUR','$ID_REG')";
	$query=mysql_query($sql);
	echo mysql_insert_id();
	$LastCalsiswa=mysql_insert_id();

	if (move_uploaded_file($tmpFoto,$path1)) { 
		$sql= "INSERT INTO detail_berkas VALUES('".$ID_DETBERKAS."', '".$fotobaru."')";
		$query=mysql_query($sql);
		echo mysql_insert_id();
		$LastdetBerkas=mysql_insert_id();
		if (move_uploaded_file($tmpKK, $path2)) {
			$sql1="insert into detail_berkas values '".$fotokk."' where id_detBerkas='".$LastdetBerkas."'";
			$query1=mysql_query($sql1);
		}else{
			echo "gagal Upload KK";
		}
		if (move_uploaded_file($tmpSKHU, $path3)) {
			$sql2="insert into detail_berkas values '".$fotoSKHU."' where id_detBerkas='".$LastdetBerkas."'";
			$query2=mysql_query($sql2);
		}else{
			echo "gagal Upload SKHU";
		}
		if (move_uploaded_file($tmpIJAZAH, $path4)) {
			$sql3="insert into detail_berkas values '".$fotoIjazah."' where id_detBerkas='".$LastdetBerkas."'";
			$query3=mysql_query($sql3);
		}elseif($query3==0){
			;
		}
		if (move_uploaded_file($tmpPIAGAM, $path5)) {
		    $sql4="insert into detail_berkas values '".$fotopiagam."' where id_detBerkas='".$LastdetBerkas."'";
			$query4=mysql_query($sql4);
		}else{
			echo "gagal Upload PIAGAM";
		}
	
	}else{
		echo "Gagal Upload Foto";
	} 


	print_r($UPLOAD);
	$sql= "INSERT INTO detail_berkas VALUES('".$ID_DETBERKAS."', '".$UPLOAD[0]."', '".$UPLOAD[1]."', '".$UPLOAD[2]."', '".$UPLOAD[3]."', '".$UPLOAD[4]."')";
		$query=mysql_query($sql);
		echo mysql_insert_id();
		$LastdetBerkas=mysql_insert_id(); 
			if ($row = mysql_fetch_assoc($sql)) {
				$_SESSION['id_detBerkas'] = $row['id_detBerkas'];
			}
			else{
				echo "error Isset id_detBerkas";
			}


	$sql="insert into berkas values('$ID_BERKAS','$LastdetBerkas','$LastCalsiswa')";
	$query=mysql_query($sql);

 if($query){	
header('location:../../Home-Siswa.php');
}
else{	
echo "Data Gagal disimpan";
	}
}
?>