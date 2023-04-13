<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../Petugas/Style-Petugas.css">
  <script src="../../Petugas/js/jquery.min.js"></script>
  <script src="../../Petugas/js/bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../../Controller/koneksi.php';
session_start(); 
?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   <img src="../../../../assets/img/logo stm ps1.png" class="Icon">
    <a class="navbar-brand" href="index-Petugas.php">&nbsp;Welcome, <?php echo $_SESSION['username']; ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../Admin-Index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
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
          <a class="nav-link" href="../../../Controller/logout.php">
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
          <a href="Index-Manajemen-Siswa.php">Manajemen Data Siswa</a>
        </li>
        <li class="breadcrumb-item active">Petugas PPDB SMK Pancasila 1 Wonogiri</li>
      </ol>
<!-- Isine ning kene-->
<style type="text/css">
.buttonSub {
    margin: 10px;
    background-color: #18a15f;
    color: #fff;
    border-radius: 7px;
}
.buttonSub:hover{
    -webkit-transform:scale(1.15);
    transform:scale(1.1);
    background-color: #428bca;
    color: #fff;
}
.buttonRes {
    margin: 10px;
    background-color: #d6202d;
    color: #fff;
    border-radius: 7px;
}
.buttonRes:hover {
    -webkit-transform: scale(1.15);
    transform: scale(1.1);
    background-color: #91302c;
    color: #fff;
}
.cekbox{
  margin-left: 15px;
}
</style>
<form class="form-horizontal" action="../SIMPAN-DATA/Simpan-Data-All-Siswa.php" method="post" id="FormValidation" enctype="multipart/form-data">
  <div class="col-md-12">
    <div class="container-fluid" style="background-color: #eaeee7; border-radius: 10px;">

        <div>
            <?php
                $sql="select * FROM pendaftaran;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="no_pendaftaran" value=<?php echo $query;?> >
        </div>
        <div>
            <?php
                $sql="select * from user;";
                $query = mysql_query($sql);
                if (mysql_num_rows($query)>0) { 
                    while ($row=mysql_fetch_array($query)) {
            ?>
            <input type="hidden" name="id_user" value=<?php echo $_SESSION['id_user']; ?>>
            <?php
            }
            }
            ?> 
        </div>

      <h3 align="center"><b>DATA DIRI</b></h3>
        <div>
            <?php
              $sql="select * FROM biodata_calsiswa;";
                $query=mysql_query($sql);
              ?>
            <input type="hidden" name="id_calSiswa" value=<?php echo $query; ?> >
        </div>

        <div class="form-group">
          <label class="labelfrm" for="nama_siswa">Nama Lengkap</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
              <input class="form-control" type="text" id="nama_siswa" name="nama" required="true">
            </div>
        </div>
        <div class="form-group">
          <label for="jk" class="labelfrm">Jenis Kelamin</label>
                <div style="margin-left: 15px;">
                    <input type="radio" name="jk" checked="" id="jk-laki" value="Laki-laki">
                      <label for="jk-laki" ><b>Laki - laki </b></label>
                    <input  style="margin-left: 50px;" type="radio" name="jk" id="jk-perem" value="Perempuan">
                      <label for="jk-perem"><b>Perempuan </b></label>
                </div>
        </div>
                    
        <div class="form-group">
          <label for="tmp_lahir" class="labelfrm">Tempat Lahir</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
              <input class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" required="true" name="tmp_lahir" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="tgl_lahir" class="labelfrm">Tanggal Lahir</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
              <input class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" required="true" name="tgl_lahir" type="date" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="alamat" class="labelfrm">Alamat Rumah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
              <input class="form-control" id="alamat" placeholder="Alamat Rumah" required="true" name="alamat" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="agama" class="labelfrm">Agama</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-asterisk"></span></span>
                    <select class="form-control" name="agama" id="agama" required="true">
                      <option>-- Agama --</option>
                      <option value="Islam">Islam</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Khonghucu">Khonghucu</option>
                    </select>
            </div>
        </div>

        <div class="form-group">
          <label for="no_telp" class="labelfrm">Nomor Telp./Hp</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
              <input class="form-control" id="no_telp" placeholder="08x-xxx-xxx-xxx" required="true" name="no_telp" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="pil-jurusan" class="labelfrm">Pilihan Jurusan</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-book"></span></span>
                    <select class="form-control" id="pil-jurusan" name="jurusan">
                        <option>-- Pilih Minat Jurusan --</option>
                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Pengelasan">Teknik Pengelasan</option>
                        <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    </select>
            </div>
        </div>
        
        <div class="control-group">
          <label for="ektrakur">Minat Ekstrakurikuler</label>
            <div class="control">
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Pramuka." id="ekstrakur">
                  <label for="ekstrakur" ><b>Pramuka</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Sepak Bola." id="ekstra-spkbl">
                  <label for="ekstra-spkbl" ><b>Sepak Bola</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Bola Voli." id="ekstra-voli">
                  <label for="ekstra-voli" ><b>Bola Voli</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Karate." id="ekstra-karate">
                  <label for="ekstra-karate" ><b>Karate</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Pencak Silat." id="ekstra-pckslt">
                  <label for="ekstra-pckslt" ><b>Pencak Silat</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="PMR." id="ekstra-pmr">
                  <label for="ekstra-pmr" ><b>Palang Merah Remaja (PMR)</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Pecinta Alam (PA)." id="ekstra-pa">
                  <label for="ekstra-pa" ><b>Pencinta Alam (PA) Sapta Satria Giri</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Karawitan." id="ekstra-krwtn">
                  <label for="ekstra-krwtn" ><b>Karawitan</b></label>
              </div>
              <div class="col-xs-6 cekbox">
                  <input type="checkbox" name="ekstrakur[]" value="Reog." id="ekstra-reog">
                  <label for="ekstra-reog" ><b>Reog</b></label>
              </div> 
            </div>
        </div>
        <div>
            <?php
              $sql="select * FROM register_calsiswa;";
                $query=mysql_query($sql);
              ?>
            <input type="hidden" name="id_reg" value=<?php echo $query; ?> >
            <input type="hidden" name="username" value="-">
            <input type="hidden" name="password" value="-">
            <input type="hidden" name="email" value="-">
        </div>

      <div style="margin-bottom: 10px; padding-bottom: 5px;"></div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="container-fluid" style="background-color: #eaeee7; border-radius: 10px;">
      <h3 align="center"><b>DATA ORTU / WALI</b></h3>
        <div>
            <?php
              $sql="select * FROM ortu_wali;";
              $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_OrtuWali" value=<?php echo $query; ?> >
        </div>

        <div class="form-group">
          <label class="labelfrm" for="nama_ayah">Nama Ayah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
              <input class="form-control" id="nama_ayah" type="text" placeholder="Nama Ayah" autocomplete="off" name="nama_ayah">
            </div>
        </div>

        <div class="form-group">
          <label for="nama_ibu" class="labelfrm">Nama Ibu</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-female"></span></span>
              <input class="form-control" id="nama_ibu" placeholder="Nama Ibu" required="true" name="nama_ibu" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="nama_wali" class="labelfrm">Nama Wali</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
              <input class="form-control" id="nama_wali" placeholder="Nama Wali" name="nama_wali" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="pek_ayah" class="labelfrm">Pekerjaan Ayah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
              <input class="form-control" id="pek_ayah" placeholder="Pekerjaan Ayah" name="pek_ayah" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="pek_ibu" class="labelfrm">Pekerjaan Ibu</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
              <input class="form-control" id="pek_ibu" placeholder="Pekerjaan Ibu" required="true" name="pek_ibu" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="pek_wali" class="labelfrm">Pekerjaan Wali</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
              <input class="form-control" id="pek_wali" placeholder="Pekerjaan Wali" name="pek_wali" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="alamat" class="labelfrm">Alamat Rumah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
              <input class="form-control" id="alamat" placeholder="Alamat Rumah" required="true" name="alamat_ortu" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="no_telp" class="labelfrm">Nomor Telp./Hp</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
              <input class="form-control" id="no_telp" placeholder="08x-xxx-xxx-xxx" required="true" name="no_telp_ortu" type="text" autocomplete="off">
            </div>
        </div>

      <div style="margin-bottom: 10px; padding-bottom: 5px;"></div>
    </div>
  </div>

    <div class="col-md-12">
    <div class="container-fluid" style="background-color: #eaeee7; border-radius: 10px;">
      <h3 align="center"><b>DATA SEKOLAH</b></h3>
        <div>
            <?php 
                $sql="select * FROM asal_sekolah;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_asal_sekolah" value=<?php echo $query; ?>>
        </div>

        <div class="form-group">
          <label for="nm-sekolah" class="labelfrm">Asal Sekolah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-university"></span></span>
              <input class="form-control" id="nm-sekolah" placeholder="Asal Sekolah" required="true" name="nama_sekolah" type="text" autocomplete="off">
            </div>
        </div>

        <div>
            <?php
                $sql="select * FROM data_sekolah;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_datSekolah" value=<?php echo $query; ?> >
        </div>

        <div class="form-group">
          <label for="nisn" class="labelfrm">NISN</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
              <input class="form-control" id="nisn" placeholder="NISN" required="true" name="nisn" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="no_un" class="labelfrm">Nomor Ujian Nasional</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span>
              <input class="form-control" id="no_un" placeholder="Nomor Ujian Nasional" required="true" name="no_un" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="no_ijazah" class="labelfrm">Nomor Ijazah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span>
              <input class="form-control" id="no_ijazah" placeholder="Nomor Ijazah" name="no_ijazah" type="text" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
          <label for="tgl_ijazah" class="labelfrm">Tanggal Ijazah</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
              <input class="form-control" id="tgl_ijazah" placeholder="Tanggal Ijazah" name="tgl_ijazah" type="date" autocomplete="off">
            </div>
        </div>

        <div>
            <?php
                $sql="select * FROM detail_berkas;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_detBerkas" value=<?php echo $query; ?> >
            <input type="hidden" name="Foto" value="Img-Upload/couple-2-icon.png">
            <input type="hidden" name="kk" value="Img-Upload/blank-foto.jpg">
            <input type="hidden" name="skhu_skhus" value="Img-Upload/blank-foto.jpg">
            <input type="hidden" name="ijazah" value="Img-Upload/blank-foto.jpg">
            <input type="hidden" name="srtf_piagam" value="Img-Upload/blank-foto.jpg">
        </div>

        <div>
            <?php
                $sql="select * FROM berkas;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_berkas" value=<?php echo $query; ?> >
        </div>

      <div style="margin-bottom: 10px; padding-bottom: 5px;"></div>
    </div>
  </div>
  <div class="col-md-12">
    <div align="center" style="margin: 20px; padding: 5px;">
      <button class="btn btn-default buttonSub" type="submit">Simpan <i class="fa fa-check"></i></button></a>
      <a href="Index-Manajemen-Siswa.php"><button class="btn btn-default buttonRes" type="button">Cancel <i class="fa fa-remove"></i></button></a>
    </div>
  </div>
</form>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../js/sb-admin-datatables.min.js"></script>
    <script src="../../../../assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#FormValidation').validate();
        });
    </script> 
  </div>
</body>

</html>
