<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_DATSEK = $_GET['id_datSekolah'];
  $sql = "select * from data_sekolah where id_datSekolah='$ID_DATSEK'";
  $query = mysql_query($sql);
  while($View = mysql_fetch_array($query)){
?>
<style type="text/css">
.btn.btn-default.buttonBatt{
  margin-left: 10px;
  float: left;
  background-color: #dd5347;
  color: #fff;
}

.btn.btn-default.buttonBatt:hover{
-webkit-transform:scale(1.1);
  transform:scale(1.1);
  background-color: #91302c;
}

.btn.btn-primary.buttonLog:hover{
-webkit-transform:scale(1.1);
  transform:scale(1.1);
}
</style>
      <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #b9c9fe;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Sekolah Siswa <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-datSekolah.php">

                <?php $sql2 = "select * from biodata_calsiswa where id_datSekolah='$ID_DATSEK'";
                      $query2 = mysql_query($sql2);
                      while ($tampil=mysql_fetch_array($query2)) { ?>
                    <div class="form-group">
                      <label class="labelfrm" for="nama_siswa">Nama Siswa</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" type="text" id="nama_siswa" name="nama" disabled="true" value="<?php echo $tampil['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="labelfrm" for="no_pendaftaran">No. Pendaftaran</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
                          <input class="form-control" type="text" id="no_pendaftaran" name="no_pendaftaran" disabled="true" value="<?php echo $tampil['no_pendaftaran']; ?>">
                        </div>
                    </div>
                <?php } ?>

                  <input type="hidden" name="id_datSekolah" value="<?php echo $ID_DATSEK; ?>">

                    <div class="form-group">
                      <label for="nisn" class="labelfrm">NISN</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
                          <input class="form-control" id="nisn" placeholder="NISN" required="true" name="nisn" type="text" autocomplete="off" value="<?php echo $View['nisn']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="no_un" class="labelfrm">Nomor Ujian Nasional</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span>
                          <input class="form-control" id="no_un" placeholder="Nomor Ujian Nasional" required="true" name="no_un" type="text" autocomplete="off" value="<?php echo $View['no_un']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="no_ijazah" class="labelfrm">Nomor Ijazah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span>
                          <input class="form-control" id="no_ijazah" placeholder="Nomor Ijazah" name="no_ijazah" type="text" autocomplete="off" value="<?php echo $View['no_ijazah']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tgl_ijazah" class="labelfrm">Tanggal Ijazah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input class="form-control" id="tgl_ijazah" placeholder="Tanggal Ijazah" name="tgl_ijazah" type="date" autocomplete="off" value="<?php echo $View['tgl_ijazah']; ?>">
                        </div>
                    </div>

                  <div class="modal-footer" style="text-align: center;">
            <button type="submit" class="btn btn-primary  buttonLog">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>
                <?php } ?>
            <!-- Modal Footer --> 
          </div>
        </div>

