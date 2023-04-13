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
<!-- Formulir pendaftaran -->
<div style="background-color: #b63d32">
    <div class="container isine"> 
        <h1 class="text-center" id="profil"><strong>Registrasi Pendaftaran</strong> </h1>
            <div class="container-fluid backform"> 
             <form class="form-horizontal" action="Controller/SimpanData/Save-Register.php" method="POST" id="FormValidation">
             <?php 
                include ('Controller/koneksi.php');
             ?>
    <fieldset id="UserDataFields">

        <div id="legend">
            <legend class="JudulLegend text-center"><h3><b>Selamat Datang di Sistem PPDB SMK Pancasila 1 Wonogiri</b></h3></legend>
        </div>

          <div>
            <?php
                $sql="select * FROM register_calsiswa;";
                $query=mysql_query($sql);
            ?>
            <input type="hidden" name="id_reg" value=<?php echo $query;?>>
          </div>  
            <div class="control-group">
                            <label for="Username" class="control-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="text" name="username" placeholder="username" required="true" autocomplete="off">
                                        </div>
                                </div>
                        </div>
            <div class="control-group">
                            <label for="Password" class="control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="password" name="password" id="pass" placeholder="password" required="true">
                                        </div>
                                </div>
                        </div>
            <div class="control-group">
                            <label for="PasswordKonfirm" class="control-label">Konfirmasi Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="password" name="passwordKonfirm" placeholder="konfirmasi password" id="PasswordConfirmation" required="true" equalTo="#pass">
                                        </div>
                                </div>
                        </div>
            <div class="control-group">
                            <label for="email" class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-envelope-o"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="email" name="email" placeholder="example@mail.com" required="true">
                                        </div>
                                </div>
                        </div>
            <div class="control-group">
                            <label for="captcha" class="control-label">Captcha</label></br>
                            <img src="Controller/Gb-Captcha.php" alt="Captcha" style="margin-left: 20px;">
                            <p style="margin-bottom: 0;">Ketikkan Captcha diatas</p>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-eye"></span></span>
                                        <div class="control">
                                            <input class="form-control" name="Captcha" placeholder="Captcha" required="true" value="" maxlength="6">
                                        </div>
                                </div>
                        </div>             
    </fieldset>
                <fieldset>
                    <div class="ButtNgisor text-center">
                      <button class="btn btn-default buttonSub" type="submit">Daftar <i class="fa fa-check"></i></button>
                      <a href="../PPDB-home.html"><button class="btn btn-default buttonRes" type="button">Batal <i class="fa fa-remove"></i></button></a>
                    </div>
                </fieldset>
                </form>
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
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#FormValidation').validate();
        });
    </script> 
</body>

</html>