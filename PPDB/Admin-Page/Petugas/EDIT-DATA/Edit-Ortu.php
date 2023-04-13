<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_ORT = $_GET['id_OrtuWali'];
  $sql = "select * from ortu_wali where id_OrtuWali='$ID_ORT'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Ortu/Wali <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Ortu.php">

                <?php $sql2 = "select * from biodata_calsiswa where id_OrtuWali='$ID_ORT'";
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

                  <input type="hidden" name="id_OrtuWali" value="<?php echo $ID_ORT; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="nama_ayah">Nama Ayah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
                          <input class="form-control" id="nama_ayah" type="text" placeholder="Nama Ayah" autocomplete="off" name="nama_ayah" value="<?php echo $View['nama_ayah']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nama_ibu" class="labelfrm">Nama Ibu</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-female"></span></span>
                          <input class="form-control" id="nama_ibu" placeholder="Nama Ibu" required="true" name="nama_ibu" type="text" autocomplete="off" value="<?php echo $View['nama_ibu']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nama_wali" class="labelfrm">Nama Wali</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
                          <input class="form-control" id="nama_wali" placeholder="Nama Wali" name="nama_wali" type="text" autocomplete="off" value="<?php echo $View['nama_wali']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pek_ayah" class="labelfrm">Pekerjaan Ayah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                          <input class="form-control" id="pek_ayah" placeholder="Pekerjaan Ayah" name="pek_ayah" type="text" autocomplete="off" value="<?php echo $View['pek_ayah']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pek_ibu" class="labelfrm">Pekerjaan Ibu</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                          <input class="form-control" id="pek_ibu" placeholder="Pekerjaan Ibu" required="true" name="pek_ibu" type="text" autocomplete="off" value="<?php echo $View['pek_ibu']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pek_wali" class="labelfrm">Pekerjaan Wali</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                          <input class="form-control" id="pek_wali" placeholder="Pekerjaan Wali" name="pek_wali" type="text" autocomplete="off" value="<?php echo $View['pek_wali']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="labelfrm">Alamat Rumah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                          <input class="form-control" id="alamat" placeholder="Alamat Rumah" required="true" name="alamat_ortu" type="text" autocomplete="off" value="<?php echo $View['alamat_ortu']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="no_telp" class="labelfrm">Nomor Telp./Hp</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                          <input class="form-control" id="no_telp" placeholder="08x-xxx-xxx-xxx" required="true" name="no_telp_ortu" type="text" autocomplete="off" value="<?php echo $View['no_telp_ortu']; ?>">
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

