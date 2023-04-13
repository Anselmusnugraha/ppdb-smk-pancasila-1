<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_USER = $_GET['id_user'];
  $sql = "select * from user where id_user='$ID_USER'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Petugas <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Petugas.php">
                <input type="hidden" name="id_user" value="<?php echo $ID_USER; ?>">

                    <div class="form-group">
                      <label class="labelfrm" for="nama">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="nama" type="text" placeholder="Nama" autocomplete="off" name="nama" value="<?php echo $View['nama']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="username" class="labelfrm">Username</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="username" placeholder="Username" name="username" type="text" autocomplete="off" value="<?php echo $View['username']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="labelfrm">Password</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                          <input class="form-control" id="password" placeholder="Password" required="true" name="password" type="text" autocomplete="off" value="<?php echo $View['password']; ?>">
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

