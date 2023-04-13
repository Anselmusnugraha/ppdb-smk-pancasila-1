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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Style-Admin.css">
  <script src="../Petugas/js/jquery.min.js"></script>
  <script src="../Petugas/js/bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <img src="../../../assets/img/logo stm ps1.png" class="Icon">
    <a class="navbar-brand" href="Admin-Index.php">&nbsp;Welcome, Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Admin-Index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Profil.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Master Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="Data-Sekolah.php">Data Sekolah</a>
            </li>
            <li>
              <a href="Data-Petugas.php">Data Petugas</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="MN-DATA-SISWA/Index-Manajemen-Siswa.php">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Manajemen Data Siswa</span>
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
          <a href="Data-Petugas.php">Data Petugas</a>
        </li>
        <li class="breadcrumb-item active">Admin PPDB SMK Pancasila 1 Wonogiri</li>
      </ol>
<!-- End Breadcrumbs-->
<!-- Isine ning kene-->
 <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Petugas</div>
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
    background: #4c5256;
    border-top: 4px solid #272822;
    border-bottom: 1px solid #fff;
    color: #fff;
}
.table-a td
{   padding: 8px;
    background: #DDDDDD;
    border-bottom: 1px solid #fff;
    color: black;
    border-top: 1px solid transparent;
}
.table-a tr:hover td
{   background: #8a8988;
    color: #fff;
}
button.butEdit{
  background-color: #00FA08;
  border-radius: 7px;
}
button.butEdit:hover{
  -webkit-transform:scale(1.4);
    transform:scale(1.4);
  background: #00AB0E;
  color: #fff;
}

button.butDelete{
  background-color: red;
  border-radius: 7px;
}
button.butDelete:hover{
  -webkit-transform:scale(1.4);
    transform:scale(1.4);
  background: #CC0909;
  color: #fff;
}
button.AddPtg{
  background-color: #007bff;
  border-radius: 5px;
  color: #fff;
  margin-top: 10px;
  margin-left: 15px;
  margin-bottom: 20px;
}
button.AddPtg:hover{
 -webkit-transform:scale(1.2);
  transform:scale(1.2);
  background-color: #005ca7; 
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
</style>
<a href="#"><button class="AddPtg" data-toggle="modal" data-target="#modalAddPetugas"><i class="fa fa-user-plus"></i> Tambah Petugas</button></a>
            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </tfoot> 

              <tbody>
          <?php 
            $sql="select * from user";
            $query = mysql_query($sql);
            while ($View=mysql_fetch_array($query)) {
              $ID_USER = $View['id_user'];             
          ?> 
                <tr>
                  <td><?php echo $View['nama']; ?></td>
                  <td><?php echo $View['jabatan']; ?></td>
                  <td><?php echo $View['username']; ?></td>
                  <td><?php echo $View['password']; ?></td>
                  <td>
                    <a href="#" class='OpenModal' id='<?php echo $View['id_user']; ?>'><button class='butEdit' id='Edit'><i class='fa fa-edit'></i></button></a>
                    <a href="#" onclick="confirm_modal('DELETE/delete-petugas.php?&id_user=<?php echo  $View['id_user']; ?>');"><button class="butDelete"><i class="fa fa-trash"></i></button></a>
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
             url: "EDIT-DATA/Edit-Petugas.php",
             type: "GET",
             data : {id_user: m,},
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

<!-- TAMBAH PETUGAS -->
<!-- Modal Add Petugas -->
<?php   
  $sql2="select * FROM user;";
  $query2=mysql_query($sql2); 
?>  
<div class="modal fade" id="modalAddPetugas" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Tambah Petugas <i class="fa fa-pencil"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="SIMPAN-DATA/Proses-Simpan-Petugas.php">
                <input type="hidden" name="id_user" value=<?php echo $query2; ?>>
                    
                    <div class="form-group">
                      <label for="nama" class="labelfrm">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input id="nama" class="form-control" type="text" placeholder="Nama" name="nama" required="true" autocomplete="off">
                        </div>
                    </div>

                    <input type="hidden" name="jabatan" value="Petugas">
                    <input type="hidden" name="hak_akses" value="1">

                    <div class="form-group">
                      <label for="username" class="labelfrm">Username</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input id="username" class="form-control" type="text" placeholder="Username" name="username" required="true" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="labelfrm">Password</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                          <input class="form-control" id="password" type="password" placeholder="Password" name="password" required="true">
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
