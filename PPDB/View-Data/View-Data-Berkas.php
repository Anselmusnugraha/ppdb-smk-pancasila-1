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
                            <li role="presentation"><a href="View-Data-Sekolah.php">Data Sekolah</a></li>
                            <li role="presentation" class="active"><a href="View-Data-Berkas.php">Data Berkas</a></li>        
                        </ul>
                    </div>
                </div>
            </nav>
    
        </div>
    </header>
<!-- View Data Diri -->
<div style="background-image: url(../../assets/img/headerBIG.jpg); size: cover">
    <div class="container isine">
        <h1 class="text-center" id="profil"><strong>View Data Berkas</strong> </h1>
            
            <form>
                <div class="container backformSiswa" style="margin-bottom: 81px; padding-bottom: 60px;">
                    <table id="table-a" style="margin-left: 20px;">
                    <?php
                        include ('../Controller/koneksi.php');
                        session_start();
                        echo "<br/>";
                        $ID_REG = $_SESSION['id_reg'];
                        $sql = "select detail_berkas.Foto, detail_berkas.kk, detail_berkas.skhu_skhus, detail_berkas.ijazah, detail_berkas.srtf_piagam from detail_berkas inner join berkas on detail_berkas.id_detBerkas=berkas.id_detBerkas inner join biodata_calsiswa on berkas.id_calSiswa=biodata_calsiswa.id_calSiswa inner join register_calsiswa on biodata_calsiswa.id_reg=register_calsiswa.id_reg where (register_calsiswa.id_reg='".$ID_REG."')";
                        $query = mysql_query($sql);
                        while ($tampil = mysql_fetch_array($query)) {
                    # code...
                    ?>
                    <thead>
                               <th><b>Foto</b></th>
                               <th><b>Kartu Keluarga</b></th>
                               <th><b>SKHU/SKHU Sementara</b></th>
                               <th><b>Ijazah</b></th>
                               <th><b>Sertifikat/Piagam Juara Lomba</b></th>
                    </thead>    
                    
                        <tbody>
                            <td><?php echo "<img src='../Controller/SimpanData/".$tampil['Foto']."' width='200' height='170'>"; ?></td>
                            <td><?php echo "<img src='../Controller/SimpanData/".$tampil['kk']."' width='200' height='170'>"; ?></td>
                            <td><?php echo "<img src='../Controller/SimpanData/".$tampil['skhu_skhus']."' width='200' height='170'>"; ?></td>
                            <td><?php echo "<img src='../Controller/SimpanData/".$tampil['ijazah']."' width='200' height='170'>"; ?></td>
                            <td><?php echo "<img src='../Controller/SimpanData/".$tampil['srtf_piagam']."' width='200' height='170'>";?></td>
                        </tbody> 
                    <?php
                        }
                    ?>   
                    </table>
                  </div>
                </form>
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