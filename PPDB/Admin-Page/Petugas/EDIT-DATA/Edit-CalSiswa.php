<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_CAL = $_GET['id_calSiswa'];
  $sql = "select * from biodata_calsiswa where id_calSiswa='$ID_CAL'";
  $query = mysql_query($sql);
  while($View = mysql_fetch_array($query)){
      $JK = $View['jk'];
      $AGM = $View['agama'];
      $JURUSAN = $View['jurusan'];
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Siswa <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-CalSiswa.php">
                <input type="hidden" name="id_calSiswa" value="<?php echo $ID_CAL; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="no_pendaftaran">No. Pendaftaran</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
                          <input class="form-control" id="no_pendaftaran" type="text" required="true" autocomplete="off" name="nama" value="<?php echo $View['no_pendaftaran']; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="labelfrm" for="nama">Nama Lengkap</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="nama" type="text" placeholder="Nama Lengkap" required="true" autocomplete="off" name="nama" value="<?php echo $View['nama']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="jk" class="labelfrm">Jenis Kelamin</label>
                        <div class="control funkyradio">
                            <div class="set1">
                                <input type="radio" name="jk" checked="" id="jk-laki" value="Laki-laki" <?php if ($JK=='Laki-laki') {
                                  echo "checked";
                                } ?>>
                                <label for="jk-laki" >Laki - laki</label>
                            </div>
                            <div class="set2">
                                <input type="radio" name="jk" id="jk-perem" value="Perempuan" <?php if ($JK=='Perempuan') {
                                  echo "checked";
                                } ?>>
                                <label for="jk-perem" >Perempuan </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="tmp_lahir" class="labelfrm">Tempat Lahir</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                          <input class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" required="true" name="tmp_lahir" type="text" autocomplete="off" value="<?php echo $View['tmp_lahir']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tgl_lahir" class="labelfrm">Tanggal Lahir</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" required="true" name="tgl_lahir" type="date" autocomplete="off" value="<?php echo $View['tgl_lahir']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="labelfrm">Alamat Rumah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                          <input class="form-control" id="alamat" placeholder="Alamat Rumah" required="true" name="alamat" type="text" autocomplete="off" value="<?php echo $View['alamat']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="agama" class="labelfrm">Agama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-asterisk"></span></span>
                                <select class="form-control" name="agama" id="agama" required="true">
                                  <option>-- Agama --</option>
                                  <option value="Islam" <?php if ($AGM=='Islam') {
                                    echo "selected";
                                  } ?>>Islam</option>
                                  <option value="Katolik" <?php if ($AGM=='Katolik') {
                                    echo "selected";
                                  } ?>>Katolik</option>
                                  <option value="Kristen" <?php if ($AGM=='Kristen') {
                                    echo "selected";
                                  } ?>>Kristen</option>
                                  <option value="Hindu" <?php if ($AGM=='Hindu') {
                                    echo "selected";
                                  } ?>>Hindu</option>
                                  <option value="Budha" <?php if ($AGM=='Budha') {
                                    echo "selected";
                                  } ?>>Budha</option>
                                  <option value="Khonghucu" <?php if ($AGM=='Khonghucu') {
                                    echo "selected";
                                  } ?>>Khonghucu</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="no_telp" class="labelfrm">Nomor Telp./Hp</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                          <input class="form-control" id="no_telp" placeholder="08x-xxx-xxx-xxx" required="true" name="no_telp" type="text" autocomplete="off" value="<?php echo $View['no_telp']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pil-jurusan" class="labelfrm">Pilihan Jurusan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-book"></span></span>
              
                                <select class="form-control" id="pil-jurusan" name="jurusan">
                                    <option>-- Pilih Minat Jurusan --</option>
                                    <option value="Teknik Pemesinan" <?php if ($JURUSAN=='Teknik Pemesinan') {
                                      echo "selected";
                                    } ?>>Teknik Pemesinan</option>
                                    <option value="Teknik Kendaraan Ringan" <?php if ($JURUSAN=='Teknik Kendaraan Ringan') {
                                      echo "selected";
                                    } ?>>Teknik Kendaraan Ringan</option>
                                    <option value="Teknik Pengelasan" <?php if ($JURUSAN=='Teknik Pengelasan') {
                                      echo "selected";
                                    } ?>>Teknik Pengelasan</option>
                                    <option value="Teknik dan Bisnis Sepeda Motor" <?php if ($JURUSAN=='Teknik dan Bisnis Sepeda Motor') {
                                      echo "selected";
                                    } ?>>Teknik dan Bisnis Sepeda Motor</option>
                                </select>
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

