<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_AS = $_GET['id_asal_sekolah'];
  $sql = "select * from asal_sekolah where id_asal_sekolah='$ID_AS'";
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
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Sekolah <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Sekolah.php">
                <input type="hidden" name="id_asal_sekolah" value="<?php echo $ID_AS; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="nama_sekolah">Nama Sekolah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-university"></span></span>
                          <input class="form-control" id="nama_sekolah" type="text" placeholder="Nama Sekolah" autocomplete="off" name="nama_sekolah" value="<?php echo $View['nama_sekolah']; ?>">
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

