<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome Petugas</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Style-Petugas.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); 
?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   <img src="../../../assets/img/logo stm ps1.png" class="Icon">
    <a class="navbar-brand" href="index-Petugas.php">&nbsp;Welcome, <?php echo $_SESSION['username']; ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index-Petugas.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Profil-Petugas.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Input-Data-Baru.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Input Data Baru</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">View Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="Data-Pendaftaran.php">Data Pendaftaran</a>
            </li>
            <li>
              <a href="Data-CalSiswa.php">Data Calon Siswa</a>
            </li>
            <li>
              <a href="Data-Ortu.php">Data Orang Tua</a>
            </li>
            <li>
              <a href="Data-Sekolah.php">Data Sekolah</a>
            </li>
            <li>
              <a href="Data-Berkas.php">Data Berkas</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Seleksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="Data-Seleksi.php">Data Seleksi</a>
            </li>
            <li>
              <a href="Data-Akademik.php">Akademik</a>
            </li>
            <li>
              <a href="Data-Fisik.php">Fisik</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Home-Laporan.php">
            <i class="fa fa-fw fa-file-o"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
<!-- Search & Login-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Controller/logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
<!-- End Search & Login-->
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Home-Laporan.php">Laporan</a>
        </li>
        <li class="breadcrumb-item active">Petugas PPDB SMK Pancasila 1 Wonogiri</li>
      </ol>
<!-- Isine ning kene-->
<a href="Lap-All-Siswa.php">
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Data Siswa</h4>
      <img src="../../../assets/img/report.gif" class="menu">
    </div>
  </button></a>
<a href="Lap-Siswa-Diterima.php">  
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Siswa Diterima</h4>
      <img src="../../../assets/img/diterima.png" class="menu">
    </div>
  </button></a>
<a href="Lap-Siswa-Ora-Lolos.php">
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Siswa Tidak Diterima</h4>
      <img src="../../../assets/img/ditolak.png" class="menu">
    </div>
  </button></a>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SMK Pancasila 1 Wonogiri 2018, ANS. Developed by Anselmus Nugraha</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>