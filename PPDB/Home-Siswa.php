<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Pancasila 1 Wongiri</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/mediaquery.css">
    <link rel="stylesheet" href="../assets/css/ilmudetil1.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Footer-with-logo.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles-form.css">
</head>

<body>
<!-- Kepala -->
    <header>
        <div>
            <nav class="navbar navbar-default nav-diatur">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand navbar-link">SMK Pancasila 1<img src="../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logonav"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation"><a href="Home-Siswa.php"><i class="fa fa-home"></i> Home</a></li>      
                            <li role="presentation"><a href="Controller/logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<!-- Formulir pendaftaran -->

<div style="background-image: url(../assets/img/headerBIG.jpg);">
    <div class="container isine">
        <h1 class="text-center" id="profil"><strong>Halaman Siswa</strong> </h1>
            <div class="container backformSiswa">
              <div class="col-md-3" style="margin-top: 10px;">             
                <h4>Hai, <strong>
                                <?php 
                                include "Controller/koneksi.php"; 
                                session_start(); 
                                echo $_SESSION['username'];
                                ?></strong> </h4>

                                <?php
                                $ID_REG = $_SESSION['id_reg'];
                                $sql = "select detail_berkas.Foto from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                                $query = mysql_query($sql);
                                if ($tampil = mysql_fetch_array($query)) {
                                    $Foto = $tampil['Foto'];
                                    if (empty($Foto)) {
                                        echo "<img  src='../assets/img/Couple-2-icon.png' width='256' height='278'>";
                                    }else{
                                    echo "<img src='Controller/SimpanData/".$tampil['Foto']."' width='256' height='278'>";     
                                    }
                                }else{
                                 echo "<img  src='../assets/img/Couple-2-icon.png' width='256' height='278'>"; 
                                } 
                                ?> 

              </div>
              <div class="col-md-9">
                <h2><strong>Sistem PPDB SMK Pancasila 1 Wonogiri</strong></h2>
                <p class="pTerimakasih"><strong>Terimakasih telah mendaftar sebagai Calon Siswa SMK Pancasila 1 Wonogiri.</strong></p>
                <p><i class="fa fa-tag"></i> Mohon Segera lengkapi data pendaftaran maksimal tanggal <b style="color: red">28 Mei 2018</b>, jika sampai tanggal tersebut data tidak dilengkapi maka pendaftaran dinyatakan telah dibatalkan.</p>
                <p><i class="fa fa-tag"></i> Pastikan data yang anda inputkan benar.</p>
                <p><i class="fa fa-tag"></i> Ujian Tes Akademik tertulis dan Tes Fisik dilaksanakan pada tanggal <b style="color: red">02 Juli 2018</b> yang dilaksanakan di SMK Pancasila 1 Wonogiri.</p>
                <p><i class="fa fa-tag"></i> Silakan datang ke sekolah dengan membawa bukti pendaftaran yang telah dicetak/print.</p>
                <div class="col-md-4 ukurMen">
                  <div class="container-fluid MenuSis">
                    <h3><strong>Lengkapi Data</strong></h3>
                    <img src="../assets/img/Lengkapi-Data.png">
                    <p><strong>Klik untuk melengkapi data Anda.</strong></p>
                    <a href="Form-Daftar-Komplit.php"><button class="btn btn-default butMn" <?php
                    $ID_REG=$_SESSION['id_reg'];
                    $sql="select * from biodata_calsiswa where id_reg=$ID_REG;";
                    $query = mysql_query($sql);
                    if(mysql_num_rows($query)>0 ){ ?> disabled <?php } ?> >Lengkapi Data <i class="fa fa-file-text-o"></i></button></a>
                  </div>
                </div>
                <div class="col-md-4 ukurMen">
                  <div class="container-fluid MenuSis">
                    <h3><strong>Lihat Data</strong></h3>
                    <img src="../assets/img/View-Data.png">
                    <p><strong>Klik untuk melihat semua data Anda.</strong></p>
                    <a href="View-Data/View-Data-CalSiswa.php"><button class="btn btn-default butMn" <?php
                    $sql="select * from biodata_calsiswa where id_reg=$ID_REG;";
                    $query = mysql_query($sql);
                    if(mysql_num_rows($query)==0 ){ ?> disabled <?php } ?> >View Data <i class="fa fa-eye"></i></button></a>
                  </div>
                </div>
                <div class="col-md-4 ukurMen">
                   <div class="container-fluid MenuSis">
                    <h3><strong>Pendaftaran</strong></h3>
                    <img src="../assets/img/print.png">
                    <p><strong>Klik untuk mencetak formulir pendaftaran Anda.</strong></p>
                    <a href="Laporan/Cetak-Formulir.php"><button class="btn btn-default butMn" <?php
                    $sql="select * from biodata_calsiswa where id_reg=$ID_REG;";
                    $query = mysql_query($sql);
                    if(mysql_num_rows($query)==0 ){ ?> disabled <?php } ?> >Cetak <i class="fa fa-print"></i></button></a>
                   </div>
                </div>
              </div>
            </div>
    </div>
 </div>   
 <!--Footer -->   
      <footer id="myFooter">
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="../index.html"><img src="../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logofoot"> SMK Pancasila 1 Wonogiri </a></h2>
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
    <script src='../assets/js/jquery.js'></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>