<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Pancasila 1 Wongiri</title>
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/mediaquery.css">
    <link rel="stylesheet" href="../../assets/css/ilmudetil1.css">
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/Footer-with-logo.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles-form.css">
</head>

<body>
<!-- Kepala -->
    <header>
        <div>
            <nav class="navbar navbar-default nav-diatur">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand navbar-link">SMK Pancasila 1<img src="../../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logonav"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation"><a href="../Home-Siswa.php"><i class="fa fa-home"></i> Home</a></li>    
                            <li role="presentation"><a href="View-Data-CalSiswa.php">Data Diri</a></li>
                            <li role="presentation" class="active"><a href="View-Data-Ortu.php">Data Ortu</a></li>    
                            <li role="presentation"><a href="View-Data-Sekolah.php">Data Sekolah</a></li>
                            <li role="presentation"><a href="View-Data-Berkas.php">Data Berkas</a></li>        
                        </ul>
                    </div>
                </div>
            </nav>
    
        </div>
    </header>
<!-- View Data Diri -->
<?php 
  include ('../Controller/koneksi.php');
  session_start();
  $ID_REG = $_SESSION['id_reg']; 
?>
<div style="background-image: url(../../assets/img/headerBIG.jpg); size: cover">
    <div class="container isine">
        <h1 class="text-center" id="profil"><strong>View Data Ortu/Wali</strong> </h1>
            
            <form>
                <div class="container backformSiswa">
                  <div style="  margin-top: 20px; padding-top: 5px; margin-left: 20px; padding-left: 5px;">
                    <a href="#"><button <?php $cek=mysql_query("select seleksi.hasil from seleksi inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join biodata_calsiswa on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
                        if(mysql_num_rows($cek)>0) { ?> disabled <?php } ?>  class="btn btn-default butMn" data-toggle="modal" data-target="#modalEdit" style="margin-bottom: 20px;"><i class="fa fa-edit"></i> Perbarui Data</button></a>
                  </div>
                    <table id="table-a" style="margin-left: 20px; margin-bottom: 32px;">
                    <?php
                        $sql = "select ortu_wali.nama_ayah, ortu_wali.nama_ibu, ortu_wali.nama_wali, ortu_wali.pek_ayah, ortu_wali.pek_ibu, ortu_wali.pek_wali, ortu_wali.alamat_ortu, ortu_wali.no_telp_ortu from ortu_wali inner join biodata_calsiswa on ortu_wali.id_OrtuWali=biodata_calsiswa.id_OrtuWali inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                        $query = mysql_query($sql);
                        while ($tampil = mysql_fetch_array($query)) {
                    # code...
                    ?>
                            <tr>
                               <th width="25%"><b>Nama Ayah</b></th>
                               <td width="75%"><?php echo $tampil['nama_ayah']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Nama Ibu</b></th>
                               <td><?php echo $tampil['nama_ibu']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Nama Wali</b></th>
                               <td><?php echo $tampil['nama_wali']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Pekerjaan Ayah</b></th>
                               <td><?php echo $tampil['pek_ayah'];?></td>
                            </tr>
                            <tr>
                               <th><b>Pekerjaan Ibu</b></th>
                               <td><?php echo $tampil['pek_ibu']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Pekerjaan Wali</b></th>
                               <td><?php echo $tampil['pek_wali']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Alamat Rumah</b></th>
                               <td><?php echo $tampil['alamat_ortu']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Telp./Hp</b></th>
                               <td><?php echo $tampil['no_telp_ortu']; ?></td>
                            </tr>
                        </tr>
                    <?php
                        }
                    ?>    
                    </table>
                  </div>
                </form>
    </div>
 </div>

 <!-- EDIT DATA -->  
 <!-- Modal Edit -->  
<div class="modal fade" id="modalEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header warnaHead">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h3 class="modal-title text-center" id="labelModalKu">Perbarui Data Orang Tua/Wali <i class="fa fa-edit"></i></h3>
            </div>
            <!-- Modal Body --> 
         <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="../Controller/EditData/Edit-Ortu.php">
                    <?php $ID_REG = $_SESSION['id_reg'];
                    $sql = "select ortu_wali.id_OrtuWali, ortu_wali.nama_ayah, ortu_wali.nama_ibu, ortu_wali.nama_wali, ortu_wali.pek_ayah, ortu_wali.pek_ibu, ortu_wali.pek_wali, ortu_wali.alamat_ortu, ortu_wali.no_telp_ortu from ortu_wali inner join biodata_calsiswa on ortu_wali.id_OrtuWali=biodata_calsiswa.id_OrtuWali inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                    $query = mysql_query($sql);
                    $View = mysql_fetch_array($query);
                    $ID_ORTU = $View['id_OrtuWali'];
                     ?>
                     <input type="hidden" name="id_OrtuWali" value="<?php echo $ID_ORTU; ?>">
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

                  <div class="modal-footer">
            <button type="submit" class="btn btn-primary  buttonLog">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
        </div>
    </div>
</div>   
 <!--Footer -->   
      <footer id="myFooter">
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="../../index.html"><img src="../../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logofoot"> SMK Pancasila 1 Wonogiri </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center">
            <p>Copyright &copy; 2018,  ANS. Developed by <a href="#">Anselmus Nugraha</a></p>
        </div>
    </footer>
    <script src='../../assets/js/jquery.js'></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>