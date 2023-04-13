<?php
include '../Controller/koneksi.php';
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-All-Siswa.xls");
?>
 <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0" border="1">
              <thead>
                <tr>
                  <td colspan="8" align="center"><b>DATA DIRI</b></td>
                  <td colspan="8" align="center"><b>ORANG TUA/WALI</b></td>
                  <td colspan="3" align="center"><b>DATA SEKOLAH</b></td>
                  <td colspan="5" align="center"><b>SKHU</b></td>
                  <td colspan="3" align="center"><b>SELEKSI</b></td>
                  <td colspan="2" align="center"><b>PEMINATAN</b></td>
                </tr>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tmp Lahir</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>No.Telp/Hp</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Nama Wali</th>
                  <th>Alamat</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Pekerjaan Wali</th>
                  <th>No. Telp/Hp</th>
                  <th>Asal Sekolah</th>
                  <th>NISN</th>
                  <th>No. UN</th>
                  <th>Bahasa Indonesia</th>
                  <th>Bahasa Inggris</th>
                  <th>Matematika</th>
                  <th>IPA</th>
                  <th>N.A SKHU</th>
                  <th>Test Khusus</th>
                  <th>N.A Test Khusus</th>
                  <th>Hasil</th>
                  <th>Ekstrakurikuler</th>
                  <th>Jurusan</th>
                </tr>
              </thead>

              <tbody>
          <?php 
            $sql="select biodata_calsiswa.nama, biodata_calsiswa.jk, biodata_calsiswa.tmp_lahir, biodata_calsiswa.tgl_lahir, biodata_calsiswa.alamat, biodata_calsiswa.agama, biodata_calsiswa.no_telp, biodata_calsiswa.jurusan, biodata_calsiswa.ekstrakur, ortu_wali.nama_ayah, ortu_wali.nama_ibu, ortu_wali.nama_wali, ortu_wali.pek_ayah, ortu_wali.pek_ibu, ortu_wali.pek_wali, ortu_wali.alamat_ortu, ortu_wali.no_telp_ortu, data_sekolah.nisn, data_sekolah.no_un, asal_sekolah.nama_sekolah, pendaftaran.no_pendaftaran, seleksi.hasil, akademik.B_indonesia, akademik.B_inggris, akademik.Matematika, akademik.IPA, akademik.na_skhu, akademik.tes_khusus, akademik.na_teskhusus from asal_sekolah inner join data_sekolah on asal_sekolah.id_asal_sekolah=data_sekolah.id_asal_sekolah inner join biodata_calsiswa on data_sekolah.id_datSekolah=biodata_calsiswa.id_datSekolah inner join ortu_wali on biodata_calsiswa.id_OrtuWali=ortu_wali.id_OrtuWali inner join pendaftaran on biodata_calsiswa.no_pendaftaran=pendaftaran.no_pendaftaran inner join seleksi on pendaftaran.no_pendaftaran=seleksi.no_pendaftaran inner join akademik on seleksi.id_akademik=akademik.id_akademik";
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
                  <td><?php echo $View['nama_ayah']; ?></td>
                  <td><?php echo $View['nama_ibu']; ?></td>
                  <td><?php echo $View['nama_wali']; ?></td>
                  <td><?php echo $View['alamat_ortu']; ?></td>
                  <td><?php echo $View['pek_ayah']; ?></td>
                  <td><?php echo $View['pek_ibu']; ?></td>
                  <td><?php echo $View['pek_wali']; ?></td>
                  <td><?php echo $View['no_telp_ortu']; ?></td>
                  <td><?php echo $View['nama_sekolah']; ?></td>
                  <td><?php echo $View['nisn']; ?></td>
                  <td><?php echo $View['no_un']; ?></td>
                  <td><?php echo $View['B_indonesia']; ?></td>
                  <td><?php echo $View['B_inggris']; ?></td>
                  <td><?php echo $View['Matematika']; ?></td>
                  <td><?php echo $View['IPA']; ?></td>
                  <td><?php echo $View['na_skhu']; ?></td>
                  <td><?php echo $View['tes_khusus']; ?></td>
                  <td><?php echo $View['na_teskhusus']; ?></td>
                  <td><?php echo $View['hasil']; ?></td>
                  <td><?php echo $View['ekstrakur']; ?></td>
                  <td><?php echo $View['jurusan']; ?></td>
                </tr>
            <?php } ?>  
              </tbody>
            </table>