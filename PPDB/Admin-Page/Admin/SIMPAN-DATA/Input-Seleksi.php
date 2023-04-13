<?php include '../../../Controller/koneksi.php';
      $NO_DAF = $_GET['no_pendaftaran'];
?>

    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #b9c9fe;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;"><i class="fa fa-pencil"></i> Input Nilai Seleksi</h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body -->
         <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="proses-simpan-seleksi.php">
                  <input type="hidden" name="no_pendaftaran" value="<?php echo $NO_DAF; ?>">
                    <div>
                        <?php
                            $sql="select * FROM seleksi;";
                            $query=mysql_query($sql);
                        ?>
                        <input type="hidden" name="id_seleksi" value=<?php echo $query;?> >
                    </div>                
                    <div class="form-group">
                    <?php   
                      $sql = "select nama from biodata_calsiswa where no_pendaftaran='$NO_DAF'";
                      $query = mysql_query($sql);
                      while($View = mysql_fetch_array($query)){ 
                    ?>
                      <label class="labelfrm" for="nama_sekolah">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="nama" type="text" placeholder="Nama" required="true" autocomplete="off" name="nama" disabled="true" value="<?php echo $View['nama']; ?>">
                        </div>
                    </div> <?php } ?>

                    <div>
                        <?php
                            $sql="select * FROM akademik;";
                            $query=mysql_query($sql);
                        ?>
                        <input type="hidden" name="id_akademik" value=<?php echo $query;?> >
                    </div>

                    <div class="form-group">
                      <label for="B_indonesia" class="labelfrm">Bahasa Indonesia</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="B_indonesia" placeholder="Bahasa Indonesia" required="true" name="B_indonesia" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="B_inggris" class="labelfrm">Bahasa Inggris</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="B_inggris" placeholder="Bahasa Inggris" required="true" name="B_inggris" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="Matematika" class="labelfrm">Matematika</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="Matematika" placeholder="Matematika" name="Matematika" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="IPA" class="labelfrm">IPA</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="IPA" placeholder="IPA" name="IPA" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tes-khusus" class="labelfrm">Test Khusus</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text-o"></span></span>
                          <input class="form-control" id="tes-khusus" placeholder="Test Khusus" name="tes_khusus" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="berat_badan" class="labelfrm">Berat Badan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-square-o"></span></span>
                          <input class="form-control" id="berat_badan" placeholder="Berat Badan (Kg)" name="berat_badan" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="tinggi_badan" class="labelfrm">Tinggi Badan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-square-o"></span></span>
                          <input class="form-control" id="tinggi_badan" placeholder="Tinggi Badan (Cm)" name="tinggi_badan" type="text" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="tato_tindik">Tato Tindik</label>
                            <div class="set1">
                            <div class="col-xs-6">
                                <input type="radio" name="tato_tindik" checked="" id="tato-tdk-ada" value="Tidak Ada">
                                <label for="tato-tdk-ada" >Tidak Ada</label>
                            </div>
                            </div>
                            <div class="set2">
                            <div class="col-xs-6">
                                <input type="radio" name="tato_tindik" id="tato-ada" value="Ada">
                                <label for="tato-ada" >Ada </label>
                            </div>
                            </div>
                    </div>

                    <div>
                        <?php
                            $sql="select * FROM fisik;";
                            $query=mysql_query($sql);
                        ?>
                        <input type="hidden" name="id_fisik" value=<?php echo $query;?> >
                    </div>

                  <div class="modal-footer" style="text-align: center;">
            <button type="submit" class="btn btn-primary  buttonLog">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>
            <!-- Modal Footer --> 
        </div>
    </div>