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
                            <li role="presentation" class="active"><a href="View-Data-CalSiswa.php">Data Diri</a></li>
                            <li role="presentation"><a href="View-Data-Ortu.php">Data Ortu</a></li>    
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
        <h1 class="text-center" id="profil"><strong>View Data Diri</strong> </h1>
            
            <form>
                <div class="container backformSiswa">
                  <div style="  margin-top: 20px; padding-top: 5px; margin-left: 20px; padding-left: 5px;">
                    <a href="#"><button <?php $cek=mysql_query("select seleksi.hasil from seleksi inner join pendaftaran on seleksi.no_pendaftaran=pendaftaran.no_pendaftaran inner join biodata_calsiswa on pendaftaran.no_pendaftaran=biodata_calsiswa.no_pendaftaran inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')");
                        if(mysql_num_rows($cek)>0) { ?> disabled <?php } ?> class="btn btn-default butMn" data-toggle="modal" data-target="#modalEdit" style="margin-bottom: 20px;"><i class="fa fa-edit"></i> Perbarui Data</button></a>
                  </div>
                    <table id="table-a" style="margin-left: 20px; margin-bottom: 30px;">
                    <?php
                        $sql = "select biodata_calsiswa.id_calSiswa, biodata_calsiswa.nama, biodata_calsiswa.jk, biodata_calsiswa.tmp_lahir, biodata_calsiswa.tgl_lahir, biodata_calsiswa.alamat, biodata_calsiswa.agama, biodata_calsiswa.no_telp, biodata_calsiswa.jurusan, biodata_calsiswa.ekstrakur, register_calsiswa.username, register_calsiswa.password, register_calsiswa.email from register_calsiswa inner join biodata_calsiswa on register_calsiswa.id_reg=biodata_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                        $query = mysql_query($sql);
                        while ($tampil = mysql_fetch_array($query)) {
                        $ID_CALSISWA=$tampil['id_calSiswa'];
                    ?>
                            <tr>
                               <th width="25%"><b>Nama Lengkap</b></th>
                               <td width="75%"><?php echo $tampil['nama']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Jenis Kelamin</b></th>
                               <td><?php echo $tampil['jk']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Tempat Lahir</b></th>
                               <td><?php echo $tampil['tmp_lahir']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Tanggal Lahir</b></th>
                               <td><?php $date=$tampil['tgl_lahir']; $date = date('d-m-Y', strtotime($date));
            echo $date;?></td>
                            </tr>
                            <tr>
                               <th><b>Alamat Rumah</b></th>
                               <td><?php echo $tampil['alamat']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Agama</b></th>
                               <td><?php echo $tampil['agama']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Telp./Hp</b></th>
                               <td><?php echo $tampil['no_telp']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Jurusan</b></th>
                               <td><?php echo $tampil['jurusan']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Ekstrakurikuler</b></th>
                               <td><?php echo $tampil['ekstrakur']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Username</b></th>
                               <td><?php echo $tampil['username']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Password</b></th>
                               <td><?php echo $tampil['password']; ?></td>
                            </tr>
                            <tr>
                               <th><b>Email</b></th>
                               <td><?php echo $tampil['email']; ?></td>
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
                <h3 class="modal-title text-center" id="labelModalKu">Perbarui Data Diri <i class="fa fa-edit"></i></h3>
            </div>
            <!-- Modal Body --> 
         <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="../Controller/EditData/Edit-CalSiswa.php">
                    <?php $ID_REG = $_SESSION['id_reg'];
                    $sql = "select * from biodata_calsiswa where id_reg=$ID_REG";
                    $query = mysql_query($sql);
                    $View = mysql_fetch_array($query);
                    $ID_CALSISWA = $View['id_calSiswa']; 
                    $JK = $View['jk'];
                    $AGM = $View['agama'];
                    $JURUSAN = $View['jurusan'];
                     ?>
                     <input type="hidden" name="id_calSiswa" value="<?php echo $ID_CALSISWA; ?>">
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
                            <div class="funkyradio-primary col-xs-6">
                                <input type="radio" name="jk" checked="" id="jk-laki" value="Laki-laki" <?php if ($JK=='Laki-laki') {
                                  echo "checked";
                                } ?>>
                                <label for="jk-laki" >Laki - laki</label>
                            </div>
                            </div>
                            <div class="set2">
                            <div class="funkyradio-primary col-xs-6">
                                <input type="radio" name="jk" id="jk-perem" value="Perempuan" <?php if ($JK=='Perempuan') {
                                  echo "checked";
                                } ?>>
                                <label for="jk-perem" >Perempuan </label>
                            </div>
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
                            <div class="control">
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
                            <div class="control">
                                <select class="form-control" id="pil-jurusan" name="jurusan" disabled="true">
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