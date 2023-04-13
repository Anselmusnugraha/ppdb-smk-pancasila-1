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
<!-- Formulir pendaftaran -->
<div style="background-color: #b63d32">
    <div class="container isine">
        <h1 class="text-center" id="profil"><strong>Formulir Pendaftaran</strong> </h1>
<!--            <div class="container backform"> -->
             <form class="form-horizontal" action="Controller/SimpanData/Save-DataSiswa.php" method="post" id="FormValidation" enctype="multipart/form-data">
                <?php 
                include ('Controller/koneksi.php');
                session_start(); 
                ?>
<!-- Data Diri -->
<div class="container-fluid backform">
 <fieldset class="col-md-12">
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
            <input type="hidden" name="id_user" value="1">
            <?php
            }
            }
            ?> 
        </div>
                        <div id="legend">
                            <legend class="JudulLegend TextShadow" style="text-align: center;"><h3><b>- Data Diri -</b></h3></legend>
                        </div>
                        <div>
                            <?php
                             $sql="select * FROM biodata_calsiswa;";
                                $query=mysql_query($sql);
                             ?>
                            <input type="hidden" name="id_calSiswa" value=<?php echo $query; ?> >
                        </div>
                        <div class="control-group">
                            <label for="nama" class="control-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                                        <div class="control">
                                            <input class="form-control error" type="text" name="nama" placeholder="Nama Lengkap" required="true">
                                        </div>
                                </div>
                        </div>
                        <div class="control-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="control funkyradio">
                            <div class="set1">
                            <div class="funkyradio-primary col-xs-6">
                                <input type="radio" name="jk" checked="" id="jk-laki" value="Laki-laki">
                                <label for="jk-laki" >Laki - laki</label>
                            </div>
                            </div>
                            <div class="set2">
                            <div class="funkyradio-primary col-xs-6">
                                <input type="radio" name="jk" id="jk-perem" value="Perempuan">
                                <label for="jk-perem" >Perempuan </label>
                            </div>
                            </div>
                            </div>
                        </div>
                         <div class="control-group">
                            <label for="tmp-lahir" class="control-label">Tempat Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="tmp_lahir" placeholder="Tempat Lahir" required="true">
                                        </div>
                                </div>
                        <div class="control-group">
                            <label for="tgl-lahir" class="control-label">Tanggal Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required="true">
                                        </div>
                                </div>
                        </div>
                        <div class="control-group">
                            <label for="alamat" class="control-label">Alamat Rumah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="text" name="alamat" placeholder="Dusun RT/RW, Desa/Kelurahan, Kecamatan, Kabupaten" required="true">
                                        </div>
                                </div>
                        <div class="control-group">
                            <label for="agama" class="control-label">Agama</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-asterisk"></span></span>
                                        <div class="control">
                                            <select class="form-control" name="agama" required="true">
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
                        </div>
                          <div class="control-group">
                            <label for="no-telp" class="control-label">Nomor Telp./Hp</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="no_telp" placeholder="08x-xxx-xxx-xxx" required="true">
                                        </div>
                                </div>
                        </div>
                            <div class="control-group">
                            <label for="pil-jurusan" class="control-label">Pilihan Jurusan</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-book"></span></span>
                                        <div class="control">
                                            <select class="form-control" name="jurusan" required="true">
                                                <option>-- Pilih Minat Jurusan --</option>
                                                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                                <option value="Teknik Pengelasan">Teknik Pengelasan</option>
                                                <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                            </select>
                                        </div>
                                </div>
                        </div>
                        <div class="control-group">
                            <label for="ektrakur">Minat Ekstrakurikuler</label>
                            <div class="control funkyradio">
                            <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Pramuka." id="ekstrakur">
                                <label for="ekstrakur" >Pramuka</label>
                            </div>
                            <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Sepak Bola." id="ekstra-spkbl">
                                <label for="ekstra-spkbl" >Sepak Bola</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Bola Voli." id="ekstra-voli">
                                <label for="ekstra-voli" >Bola Voli</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Karate." id="ekstra-karate">
                                <label for="ekstra-karate" >Karate</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Pencak Silat." id="ekstra-pckslt">
                                <label for="ekstra-pckslt" >Pencak Silat</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="PMR." id="ekstra-pmr">
                                <label for="ekstra-pmr" >Palang Merah Remaja (PMR)</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Pecinta Alam (PA)." id="ekstra-pa">
                                <label for="ekstra-pa" >Pencinta Alam (PA) Sapta Satria Giri</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Karawitan." id="ekstra-krwtn">
                                <label for="ekstra-krwtn" >Karawitan</label>
                            </div>
                             <div class="funkyradio-primary col-xs-6">
                                <input type="checkbox" name="ekstrakur[]" value="Reog." id="ekstra-reog">
                                <label for="ekstra-reog" >Reog</label>
                            </div> 
                            </div>
                                <div>
                                   <p class="help-block">**Pilih minat ekstrakurikuler (boleh lebih dari satu)</p>
                                </div>
                        </div>
                        </div>
                            <div>
                                <input type="hidden" name="id_reg" value=<?php echo $_SESSION['id_reg'];?> >
                            </div>
                        </div>
                    </fieldset>
</div>
<!-- Data Orang Tua Wali -->
<div class="container-fluid backform" style="margin-top: 5px;">
                        <div id="legend">
                            <legend class="JudulLegend TextShadow" style="text-align: center;"><h3><b>- Data Ortu/Wali -</b></h3></legend>
                        </div>
                    <fieldset class="col-md-9">
                    <div>
                       <?php
                         $sql="select * FROM ortu_wali;";
                         $query=mysql_query($sql);
                       ?>
                        <input type="hidden" name="id_OrtuWali" value=<?php echo $query; ?> >
                    </div>
                        <div class="control-group">
                            <label for="nama-ayah" class="control-label">Nama Ayah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="nama_ayah" placeholder="Nama Ayah">
                                        </div>
                                </div>
                        </div>
                        <div class="control-group">
                            <label for="nama-ibu" class="control-label">Nama Ibu</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-female"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="nama_ibu" placeholder="Nama Ibu" required="true">
                                        </div>
                                </div>
                        </div>
                        <div class="control-group">
                            <label for="nama-wali" class="control-label">Nama Wali</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-male"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="nama_wali" placeholder="Nama Wali">
                                </div>
                            </div>
                            <p class="help-block">**Optional jika Ayah/Ibu sudah meninggal atau jika mempunyai Orang Tua angkat (Boleh Tidak diisi)</p>
                        </div>
                        <div class="control-group">
                            <label for="pkrj-ayah" class="control-label">Pekerjaan Ayah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="pek_ayah" placeholder="Pekerjaan Ayah">
                                        </div>
                                </div>
                                <p class="help-block">**Jika Ayah meninggal/tidak ada, boleh tidak diisi</p>
                        </div>
                         <div class="control-group">
                            <label for="pkrj-ibu" class="control-label">Pekerjaan Ibu</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="pek_ibu" placeholder="Pekerjaan Ibu">
                                        </div>
                                </div>
                                <p class="help-block">**Jika Ibu meninggal/tidak ada, boleh tidak diisi</p>
                        </div>
                         <div class="control-group">
                            <label for="pkrj-wali" class="control-label">Pekerjaan Wali</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="pek_wali" placeholder="Pekerjaan Wali">
                                        </div>
                                </div>
                                <p class="help-block">**Jika dibiayai wali wajib diisi</p>
                        </div>
                         <div class="control-group">
                            <label for="alamat" class="control-label">Alamat Rumah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                                        <div class="control">
                                            <input class="form-control" type="text" name="alamat_ortu" placeholder="Dusun RT/RW, Desa/Kelurahan, Kecamatan, Kabupaten" required="true">
                                        </div>
                                </div>
                          <div class="control-group">
                            <label for="no-telp" class="control-label">Nomor Telp./Hp</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>        
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="no_telp_ortu" placeholder="08x-xxx-xxx-xxx">
                                        </div>
                                </div>
                                <p class="help-block"></p>
                        </div>
                    </fieldset>
</div>   
<!-- Data Sekolah -->
<div class="container-fluid backform" style="margin-top: 5px;">

                     <div id="legend">
                            <legend class="JudulLegend TextShadow" style="text-align: center;"><h3><b>- Data Sekolah -</b></h3></legend>
                     </div>

                    <fieldset class="col-md-9">
                    <div>
                        <?php 
                            $sql="select * FROM asal_sekolah;";
                            $query=mysql_query($sql);
                        ?>
                        <input type="hidden" name="id_asal_sekolah" value=<?php echo $query; ?>>
                    </div>
                        <div class="control-group">
                            <label for="asal-sekolah" class="control-label">Asal Sekolah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-graduation-cap"></span></span> 
                                        <div class="control">
                                        <input class="form-control" type="text" name="nama_sekolah" placeholder="Asal Sekolah" required="true">
                                        <!--    <select class="form-control" name="id_asal_sekolah">
                                                <option>-- Pilih Sekolah Asal --</option>
                                                    <?php/*
                                                        $sql="select * from asal_sekolah;";
                                                        $query = mysql_query($sql);
                                                        if (mysql_num_rows($query)>0) { 
                                                            while ($row=mysql_fetch_array($query)) {
                                                    ?>
                                                <option value=<?php echo $row['id_asal_sekolah']; ?> ><?php echo $row['nama_sekolah'];?></option>
                                                    <?php } 
                                                    } */?>
                                            </select> -->
                                        </div>
                                </div>
                        </div>

                        <div>
                            <?php
                                $sql="select * FROM data_sekolah;";
                                $query=mysql_query($sql);
                            ?>
                            <input type="hidden" name="id_datSekolah" value=<?php echo $query; ?> >
                        </div>

                        <div class="control-group">
                            <label for="nisn" class="control-label">NISN</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="text" name="nisn" placeholder="Nomor Induk Siswa Nasional" required="true">
                                        </div>
                                </div>
                        </div>

                        <div class="control-group">
                            <label for="no-un" class="control-label">Nomor Ujian Nasional</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span> 
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="no_un" placeholder="Nomor Ujian Nasional" required="true">
                                        </div>
                                </div>
                        </div>

                        <div class="control-group">
                            <label for="no-ijazah" class="control-label">Nomor Ijazah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-qrcode"></span></span> 
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="text" name="no_ijazah" placeholder="Nomor Ijazah">
                                        </div>
                                </div>
                                <p class="help-block">**Jika Ijazah belum keluar boleh tidak diisi.</p>
                        </div>

                        <div class="control-group">
                            <label for="tgl-ijazah" class="control-label">Tanggal Ijazah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span> 
                                        <div class="control">
                                            <input class="form-control input-xlarge" type="date" name="tgl_ijazah" placeholder="Tanggal Ijazah">
                                        </div>
                                </div>
                                <p class="help-block">**Jika Ijazah belum keluar boleh tidak diisi.</p>
                        </div>

                        </fieldset>
</div>
<!-- Data Berkas -->
<div class="container-fluid backform" style="margin-top: 5px;">
                        <div>
                            <?php
                                $sql="select * FROM detail_berkas;";
                                $query=mysql_query($sql);
                            ?>
                            <input type="hidden" name="id_detBerkas" value=<?php echo $query; ?> >
                        </div>

                        <div id="legend">
                            <legend class="JudulLegend TextShadow" style="text-align: center;"><h3><b>- Data Berkas -</b></h3></legend>
                        </div>

                     <fieldset class="col-md-8">
                        <div class="control-group">
                            <label for="foto" class="control-label">Foto</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-photo"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="file" name="Foto">
                                        </div>
                                </div>
                                <p class="help-block">**Upload Foto Anda (Tidak Wajib)</p>
                        </div>

                        <div class="control-group">
                            <label for="kk" class="control-label">Kartu Keluarga</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-photo"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="file" name="kk">
                                        </div>
                                </div>
                                <p class="help-block">**Upload Foto Kartu Keluarga (Tidak Wajib)</p>
                        </div>

                        <div class="control-group">
                            <label for="skhu-skhus" class="control-label">SKHU/SKHU Sementara</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-photo"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="file" name="skhu_skhus">
                                        </div>
                                </div>
                                <p class="help-block">**Upload Foto SKHU/SKHU Sementara (Tidak Wajib)</p>
                        </div>

                        <div class="control-group">
                            <label for="ijazah" class="control-label">Ijazah</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-photo"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="file" name="ijazah">
                                        </div>
                                </div>
                                <p class="help-block">**Upload Foto Ijazah (Tidak Wajib)</p>
                        </div>
                        
                        <div class="control-group">
                            <label for="srt-piagam" class="control-label">Sertifikat/Piagam Lomba</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-photo"></span></span> 
                                        <div class="control">
                                            <input class="form-control" type="file" name="srtf_piagam">
                                        </div>
                                </div>
                                <p class="help-block">**Upload sertifikat/piagam juara lomba nasional/internasional (Tidak Wajib)</p>
                        </div>
                        <div>
                            <br><p class="help-block">Berkas berikut: fotocopy SKHU/SKHUS, fotocopy Ijazah, Pas Foto 3x4 2 Lembar, fotocopy Kartu Keluarga dan fotocopy Piagam/Sertifikat Lomba (Jika Ada). Berkas tersebut wajib dibawa dan dikumpulkan pada saat ujian test seleksi yang dilaksanakan di sekolah. </p>
                        </div>
                    </fieldset>

                    <div>
                        <?php
                            $sql="select * FROM berkas;";
                            $query=mysql_query($sql);
                        ?>
                        <input type="hidden" name="id_berkas" value=<?php echo $query; ?> >
                    </div>
                    
</div>
<!-- Konfirmasi -->
<div class="container-fluid backform" style="margin-top: 5px;">
        <fieldset id="UserDataFields" class="col-md-12">
        <div id="legend">
            <legend class="JudulLegend TextShadow" style="text-align: center;"><h3><b>- Konfirmasi Data Pendaftar -</b></h3></legend>
        </div>
        <div align="center">
            <input type="checkbox" name="validasi" required="true">
            <label>Dengan ini saya menyatakan bahwa, Data yang saya isikan di Formulir ini adalah Benar adanya sesuai dengan bukti-bukti yang ada.</label>
        </div>
        </fieldset>
                <fieldset class="col-md-12">
                    <div class="ButtNgisor" align="center">
                      <button class="btn btn-default buttonSub" type="submit">Simpan <i class="fa fa-check"></i></button></a>
                      <a href="Home-Siswa.php"><button class="btn btn-default buttonRes" type="button">Cancel <i class="fa fa-remove"></i></button></a>
                    </div>
                </fieldset>
</div>                
                </form>
    <!--        </div> -->
    </div>
</div>    
 <!--Footer -->   
      <footer id="myFooter">
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