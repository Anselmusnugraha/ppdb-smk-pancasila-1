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
</head>

<body>
<!-- Kepala -->
    <header id="header" class="kepala">
        <div>
            <nav class="navbar navbar-default nav-diatur">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.html">SMK Pancasila 1<img src="../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logonav"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation"><a href="../PPDB-home.html">PPDB </a></li>
                            <li role="presentation"><a href="Cara-Daftar.html">Cara Mendaftar </a></li>
                            <li role="presentation"><a href="Pengumuman.php">Pengumuman </a></li>
                            <li role="presentation"><a href="Kontak.html">Kontak</a></li>
                            <li role="presentation" class="active"><a href="Home-Login.php">Login <i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container sampule" id="konten"><img src="../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logo" class="logo">
                <h1 class="head">SMK PANCASILA 1 WONOGIRI</h1>
                <p class="paragraphead"><strong>Jl. Jendral Sudirman nomor 106, Wonogiri</strong></p>
                <p class="paragraphead2">Telp. (0273) 321028 </p>
            </div>
        </div>
    </header>
<!-- Home Login -->
    <div class="container isine">
        <h1 class="text-center" id="profil"><strong>LOGIN</strong> </h1>
        <div class="setLogin">
         <div class="col-md-6">
            <div class="container-fluid LogHome">
                <img src="../assets/img/admin.png" class="iconAdmin">
                    <h1 class="text-left"><a href="#" class="Hovetsis" data-toggle="modal" data-target="#modalFormPetugas"><strong>Petugas </strong></a></h1>
                      <p class="pCara">Login khusus Petugas dan Admin untuk Mengelola Data Pendaftaran</p>
                        <div class="settLogPet">
                           <button class="btn btn-default buttLog" type="button" data-toggle="modal" data-target="#modalFormPetugas">Login Petugas <i class="fa fa-lock"></i></button></a>
                        </div>
            </div>        
         </div>
         <div class="col-md-6">
            <div class="container-fluid LogHome">
                  <img src="../assets/img/siswa.png" class="iconSiswa">
                    <h1 class="text-left"><a href="#" class="Hovetsis" data-toggle="modal" data-target="#modalFormSiswa"><strong>Siswa </strong></a></h1>
                      <p class="pCara">Login khusus Calon Siswa untuk Informasi Data Diri Calon Siswa.</p>
                         <div class="settLogSis">
                            <button class="btn btn-default buttLog" type="button" data-toggle="modal" data-target="#modalFormSiswa">Login Siswa <i class="fa fa-lock"></i></button></a>
                         </div>
            </div>
         </div>
            </div>
        </div>    
    </div>
<!-- LOGIN SISWA -->
<!-- Modal -->  
<div class="modal fade" id="modalFormSiswa" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header warnaHead">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h3 class="modal-title text-center" id="labelModalKu">Login Siswa <i class="fa fa-lock"></i></h3>
            </div>
            <!-- Modal Body --> 
         <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="Controller/cekloginsiswa.php">
                    <div class="form-group">
                      <label class="labelfrm" for="username">Username</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input class="form-control" id="username" type="text" placeholder="Username" required="true" autocomplete="off" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="labelfrm">Password</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                          <input class="form-control" id="password" type="password" placeholder="Password" required="true" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="captcha" class="labelfrm">Captcha</label>
                            <img src="Controller/Gb-Captcha.php" alt="Captcha">
                            <p>Ketikkan Captcha diatas</p>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-eye"></span></span>
                          <input class="form-control" id="captcha" placeholder="Captcha" required="true" name="Captcha" value="" maxlength="6">
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                         <label class="form-check-label">
                         <input class="form-check-input" type="checkbox"> Ingat Password</label>
                      </div>
                    </div>
                  <div class="modal-footer">
            <button type="submit" class="btn btn-primary  buttonLog">Login <i class="fa fa-sign-in"></i></button></a>
            <button type="reset" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
              <div class="text-center ukur">
                <a class="d-block small mt-3" href="Form-Pendaftaran.php"><i class="fa fa-user-plus"></i> Register Akun</a><br>
                <a class="d-block small" href="#"><i class="fa fa-rotate-left"></i> Lupa Password?</a>
             </div>
        </div>
    </div>
</div>

<!-- LOGIN PETUGAS DAN ADMIN -->
<!-- Modal -->  
<div class="modal fade" id="modalFormPetugas" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header warnaHead">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h3 class="modal-title text-center" id="labelModalKu">Login Petugas <i class="fa fa-lock"></i></h3>
            </div>

            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="Controller/cekloginAdminPetugas.php"> 
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
                    <div class="form-group">
                      <label for="hak_akses" class="labelfrm">Hak Akses</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-users"></span></span>
                            <select class="form-control" name="hak_akses" required="true">
                                <option value="">Pilih Hak Akses</option>
                                <option value="0">Admin</option>
                                <option value="1">Petugas</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="captcha" class="labelfrm">Captcha</label>
                            <img src="Controller/Gb-Captcha.php" alt="Captcha">
                            <p>Ketikkan Captcha diatas</p>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-eye"></span></span>
                          <input class="form-control" id="captcha" placeholder="Captcha" required="true" name="Captcha" value="" maxlength="6">
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                         <label class="form-check-label">
                         <input class="form-check-input" type="checkbox"> Ingat Password</label>
                      </div>
                    </div>
                  <div class="modal-footer">
                <button type="submit" class="btn btn-primary  buttonLog">Login <i class="fa fa-sign-in"></i></button>
                <button type="reset" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
              <div class="text-center ukur">
                <a class="d-block small" href="#"><i class="fa fa-rotate-left"></i> Lupa Password?</a>
             </div>
        </div>
    </div>
</div>

 <!--Footer -->   
      <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Schools Information</a></li>
                        <li><a href="../Contact-Us.html">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Information</h5>
                    <p> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="index.html"><img src="../assets/img/logo stm ps1.png" alt="logo-stm-ps1" id="logofoot"> SMK Pancasila 1 Wonogiri </a></h2>
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
   <script src="../assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#FormValidation').validate();
        });
    </script>  
</body>

</html>