<?php
	include('../../../../Controller/koneksi.php');
	echo "<br/>";
	$ID_ORTUWALI=$_POST['id_OrtuWali'];
	$NM_AYAH=$_POST['nama_ayah'];
	$NM_IBU=$_POST['nama_ibu'];
	$NM_WALI=$_POST['nama_wali'];
	$PEK_AYAH=$_POST['pek_ayah'];
	$PEK_IBU=$_POST['pek_ibu'];
	$PEK_WALI=$_POST['pek_wali'];
	$ALAMATortu=$_POST['alamat_ortu'];
	$NO_TELPortu=$_POST['no_telp_ortu'];

	if (empty($NM_IBU)) {
	echo "<script>alert('NM_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Ortu.php'>";}
	elseif (empty($PEK_IBU)) {
	echo "<script>alert('PEK_IBU belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Ortu.php'>";}
	elseif (empty($ALAMATortu)) {
	echo "<script>alert('ALAMATortu belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Data-Ortu.php'>";}

		else{
	$sql="update ortu_wali set nama_ayah='$NM_AYAH', nama_ibu='$NM_IBU', nama_wali='$NM_WALI', pek_ayah='$PEK_AYAH', pek_ibu='$PEK_IBU', pek_wali='$PEK_WALI', alamat_ortu='$ALAMATortu', no_telp_ortu='$NO_TELPortu' where id_OrtuWali='$ID_ORTUWALI'";
	$query=mysql_query($sql);
    if($query){
	header('location:../../Data-Ortu.php');
	}else{
		echo "Edit Data Gagal!!";
	}
}
 ?>