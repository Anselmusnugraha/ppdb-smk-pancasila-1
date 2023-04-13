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
                            <li role="presentation"><a href="View-Data-Ortu.php">Data Ortu</a></li>    
                            <li role="presentation" class="active"><a href="View-Data-Sekolah.php">Data Sekolah</a></li>
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
        <h1 class="text-center" id="profil"><strong>View Data Sekolah</strong> </h1>
            
            <form>
                <div class="container backformSiswa" style="margin-bottom: 79px; padding-bottom: 20px;">
                    <div style="  margin-top: 20px; padding-top: 5px; margin-left: 20px; padding-left: 5px;">
                        <a href="#"><button <?php $cek=mysql_query("select seleksi.hasil from seleksi inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join biodata_calsiswa on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
                        if(mysql_num_rows($cek)>0) { ?> disabled <?php } ?> class="btn btn-default butMn"  data-toggle="modal" data-target="#modalEdit" style="margin-bottom: 20px;"><i class="fa fa-edit"></i> Perbarui Data</button></a>
                    </div>
                    <table id="table-a" style="margin-left: 20px;">
                    <?php
                        $sql = "select data_sekolah.nisn, data_sekolah.no_un, data_sekolah.no_ijazah, data_sekolah.tgl_ijazah, asal_sekolah.nama_sekolah from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                        $query = mysql_query($sql);
                        while ($tampil = mysql_fetch_array($query)) {
                    # code...
                    ?>
                            <tr>
                               <th width="25%"><b>Asal Sekolah</b></th>
                               <td width="75%"><?php echo $tampil['nama_sekolah']; ?></td>
                            </tr>
                            <tr>
                               <th><b>NISN</b></th>
                               <td><?php echo $tampil['nisn']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Nomor Ujian Nasional</b></th>
                               <td><?php echo $tampil['no_un']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Nomor Ijazah</b></th>
                               <td><?php echo $tampil['no_ijazah']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Tanggal Ijazah</b></th>
                               <td><?php $date=$tampil['tgl_ijazah']; $date = date('d-m-Y', strtotime($date)); echo $date;?></td>
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
                <h3 class="modal-title text-center" id="labelModalKu">Perbarui Data Sekolah <i class="fa fa-edit"></i></h3>
            </div>
            <!-- Modal Body --> 
         <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="../Controller/EditData/Edit-Sekolah.php">
                    <?php $ID_REG = $_SESSION['id_reg'];
                    $sql = "select data_sekolah.id_datSekolah, data_sekolah.nisn, data_sekolah.no_un, data_sekolah.no_ijazah, data_sekolah.tgl_ijazah, asal_sekolah.nama_sekolah from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                    $query = mysql_query($sql);
                    $View = mysql_fetch_array($query);
                    $ID_DATSEK = $View['id_datSekolah'];
                     ?>
                     <input type="hidden" name="id_datSekolah" value="<?php echo $ID_DATSEK; ?>">
                    <div class="form-group">
                      <label class="labelfrm" for="nama_sekolah">Asal Sekolah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-graduation-cap"></span></span>
                          <input class="form-control" id="nama_sekolah" type="text" placeholder="Asal Sekolah" required="true" autocomplete="off" name="nama_sekolah" value="<?php echo $View['nama_sekolah']; ?>" disabled>
                        </div>
                    </div>

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