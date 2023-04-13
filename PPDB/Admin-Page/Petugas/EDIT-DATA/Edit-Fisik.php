<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_FIS = $_GET['id_fisik'];
  $sql = "select * from fisik where id_fisik='$ID_FIS'";
  $query = mysql_query($sql);
  while($View = mysql_fetch_array($query)){
    $TT = $View['tato_tindik'];
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Seleksi Fisik <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Fisik.php">
              
               <?php $sql2 = "select biodata_calsiswa.nama, pendaftaran.no_pendaftaran from biodata_calsiswa inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran inner join seleksi on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join fisik on fisik.id_fisik=seleksi.id_fisik where (fisik.id_fisik='".$ID_FIS."')";
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

                <input type="hidden" name="id_fisik" value="<?php echo $ID_FIS; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="berat_badan">Berat Badan (Kg)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="berat_badan" type="text" placeholder="Berat Badan (Kg)" autocomplete="off" name="berat_badan" value="<?php echo $View['berat_badan']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tinggi_badan" class="labelfrm">Tinggi Badan (Cm)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                          <input class="form-control" id="tinggi_badan" placeholder="Tinggi Badan (Cm)" required="true" name="tinggi_badan" type="text" autocomplete="off" value="<?php echo $View['tinggi_badan']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tato_tindik" class="labelfrm">Tato / Tindik</label>
                        <div class="control funkyradio">
                            <div class="set1">
                                <input type="radio" name="tato_tindik" checked="" id="tdk-ada" value="Tidak Ada" <?php if ($TT=='Tidak Ada') {
                                  echo "checked";
                                } ?>>
                                <label for="tdk-ada" >Tidak Ada</label>
                            </div>
                            <div class="set2">
                                <input type="radio" name="tato_tindik" id="ada" value="Ada" <?php if ($TT=='Ada') {
                                  echo "checked";
                                } ?>>
                                <label for="ada" >Ada </label>
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

