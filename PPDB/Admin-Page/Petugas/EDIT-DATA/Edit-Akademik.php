<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_AKD = $_GET['id_akademik'];
  $sql = "select * from akademik where id_akademik='$ID_AKD'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Nilai Seleksi Akademik <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Akademik.php">

                <?php $sql2 = "select biodata_calsiswa.nama, pendaftaran.no_pendaftaran from biodata_calsiswa inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran inner join seleksi on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join akademik on akademik.id_akademik=seleksi.id_akademik where (akademik.id_akademik='".$ID_AKD."')";
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

                <input type="hidden" name="id_akademik" value="<?php echo $ID_AKD; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="B_indonesia">Bahasa Indonesia</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="B_indonesia" type="text" placeholder="Bahasa Indonesia" autocomplete="off" name="B_indonesia" value="<?php echo $View['B_indonesia']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="B_inggris" class="labelfrm">Bahasa Inggris</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="B_inggris" placeholder="Bahasa Inggris" required="true" name="B_inggris" type="text" autocomplete="off" value="<?php echo $View['B_inggris']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="Matematika" class="labelfrm">Matematika</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="Matematika" placeholder="Matematika" name="Matematika" type="text" autocomplete="off" value="<?php echo $View['Matematika']; ?>">
                        </div>

                    <div class="form-group">
                      <label for="IPA" class="labelfrm">IPA</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="IPA" placeholder="IPA" name="IPA" type="text" autocomplete="off" value="<?php echo $View['IPA']; ?>">
                        </div>

                    <div class="form-group">
                      <label for="tes-khusus" class="labelfrm">Test Khusus</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="tes-khusus" placeholder="Test Khusus" name="tes_khusus" type="text" autocomplete="off" value="<?php echo $View['tes_khusus']; ?>">
                        </div>
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

