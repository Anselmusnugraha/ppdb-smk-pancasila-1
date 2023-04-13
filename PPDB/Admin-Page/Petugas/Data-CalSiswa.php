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
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); ?>
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
          <a href="Data-CalSiswa.php">Data Calon Siswa</a>
        </li>
        <li class="breadcrumb-item active">Petugas PPDB SMK Pancasila 1 Wonogiri</li>
      </ol>
<!-- Isine ning kene-->
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Calon Siswa</div>
        <div class="card-body">
          <div class="table-responsive">

<style type="text/css">
  .table-a
{   font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;
    width: 1100px;
    text-align: left;
    font-size: 12pt;
    border-collapse: collapse;
}
.table-a th
{   font-size: 16px;
    font-weight: bold;
    padding: 8px;
    background: #b9c9fe;
    border-top: 4px solid #aabcfe;
    border-bottom: 1px solid #fff;
    color: #272822;
}
.table-a td
{   padding: 8px;
    background: #e8edff;
    border-bottom: 1px solid #fff;
    color: #669;
    border-top: 1px solid transparent;
}
.table-a tr:hover td
{   background: #d0dafd;
    color: black;
}
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
.btn.btn-danger:hover{
 -webkit-transform:scale(1.1);
  transform:scale(1.1); 
}
button.butPrint:hover {
    -webkit-transform: scale(1.4);
    transform: scale(1.4);
    background: #FF8600;
    color: #fff;
}
button.butPrint {
    background-color: #FFCE43;
    border-radius: 7px;
}
</style>
            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tmp Lahir</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>No.Telp/Hp</th>
                  <th>Jurusan</th>
                  <th>Ekstrakurikuler</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tmp Lahir</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>No.Telp/Hp</th>
                  <th>Jurusan</th>
                  <th>Ekstrakurikuler</th>
                  <th>Aksi</th>
                </tr>
              </tfoot> 

              <tbody>
          <?php 
            $sql="select * from biodata_calsiswa";
            $query = mysql_query($sql);
            while ($View=mysql_fetch_array($query)) {
                          
          ?> 
                <tr>
                  <td><?php echo $View['no_pendaftaran']; ?></td>
                  <td><?php echo $View['nama']; ?></td>
                  <td><?php echo $View['jk']; ?></td>
                  <td><?php echo $View['tmp_lahir']; ?></td>
                  <td><?php $date=$View['tgl_lahir']; $date = date('d/m/Y', strtotime($date));
            echo $date; ?></td>
                  <td><?php echo $View['alamat']; ?></td>
                  <td><?php echo $View['agama']; ?></td>
                  <td><?php echo $View['no_telp']; ?></td>
                  <td><?php echo $View['jurusan']; ?></td>
                  <td><?php echo $View['ekstrakur']; ?></td>
                  <td>
                    <a href="#" class='OpenModal' id='<?php echo $View['id_calSiswa']; ?>'><button class="butEdit"><i class="fa fa-edit"></i></button></a>
                    <a href="#" onclick="confirm_modal('DELETE/delete-calsiswa.php?&id_calSiswa=<?php echo  $View['id_calSiswa']; ?>');"><button class="butDelete"><i class="fa fa-trash"></i></button></a>
                    <a href="../../Laporan/Print-Formulir.php?id_reg=<?php echo $View['id_reg']; ?>"><button class="butPrint"><i class="fa fa-print"></i></button></a>
                  </td>
                </tr>
            <?php } ?>  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

 <!-- EDIT DATA -->  
 <!-- Modal Edit -->  
<div class="modal fade" id="ModalEdit" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true">
</div> 
<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".OpenModal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "EDIT-DATA/Edit-CalSiswa.php",
             type: "GET",
             data : {id_calSiswa: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>
  
<!-- Modal Delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header" style="background-color: #b9c9fe;">
        <h4 class="modal-title" style="text-align:center;">Anda yakin ingin menghapus Data ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      
      <div class="form-group">
        <img src="../../../assets/img/icons-TRASH.gif" style="width: 200px; margin-left: 140px; ">
      </div> 
          
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align: center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete <i class="fa fa-trash"></i></a>
        <button type="button" class="btn btn-default buttonBatt" data-dismiss="modal">Cancel <i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

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
