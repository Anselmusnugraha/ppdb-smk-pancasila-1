-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 08:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smk-ps1`
--

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE IF NOT EXISTS `akademik` (
  `B_indonesia` int(11) NOT NULL,
  `B_inggris` int(11) NOT NULL,
  `Matematika` int(11) NOT NULL,
  `IPA` int(11) NOT NULL,
  `tes_khusus` int(11) DEFAULT NULL,
  `id_akademik` int(10) NOT NULL AUTO_INCREMENT,
  `na_skhu` int(11) DEFAULT NULL,
  `na_teskhusus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_akademik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`B_indonesia`, `B_inggris`, `Matematika`, `IPA`, `tes_khusus`, `id_akademik`, `na_skhu`, `na_teskhusus`) VALUES
(50, 100, 60, 50, 50, 1, 39, 20);

-- --------------------------------------------------------

--
-- Table structure for table `asal_sekolah`
--

CREATE TABLE IF NOT EXISTS `asal_sekolah` (
  `id_asal_sekolah` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_asal_sekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `asal_sekolah`
--

INSERT INTO `asal_sekolah` (`id_asal_sekolah`, `nama_sekolah`) VALUES
(1, 'SMP Negeri 1 Wonogiri'),
(2, 'SMP Negeri 2 Wonogiri'),
(3, 'SMP Negeri 3 Wonogiri'),
(4, 'SMP Negeri 5 Wonogiri'),
(5, 'MTs Mandiri Wonogiri'),
(6, 'SMP Negeri 6 Wonogiri'),
(7, 'SMP Negeri 7 Wonogiri'),
(8, 'SMP Negeri 4 Wonogiri'),
(9, 'SMP Kanisius Wonogiri'),
(10, 'SMP Negeri 1 Ngadirojo, Wonogiri'),
(11, 'SMP Negeri 2 Ngadirojo, Wonogiri'),
(12, 'SMP Negeri 3 Ngadirojo, Wonogiri'),
(13, 'SMP Negeri 3 Sidoharjo'),
(14, 'SMP Negeri 1 Manyaran, Wonogiri'),
(15, 'SMP Negeri 65 Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE IF NOT EXISTS `berkas` (
  `id_berkas` int(10) NOT NULL AUTO_INCREMENT,
  `id_detBerkas` int(10) NOT NULL,
  `id_calSiswa` int(10) NOT NULL,
  PRIMARY KEY (`id_berkas`),
  KEY `id_detBerkas` (`id_detBerkas`,`id_calSiswa`),
  KEY `id_calSiswa` (`id_calSiswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `id_detBerkas`, `id_calSiswa`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `biodata_calsiswa`
--

CREATE TABLE IF NOT EXISTS `biodata_calsiswa` (
  `id_calSiswa` int(10) NOT NULL AUTO_INCREMENT,
  `id_OrtuWali` int(10) NOT NULL,
  `id_datSekolah` int(10) NOT NULL,
  `no_pendaftaran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `ekstrakur` varchar(400) DEFAULT NULL,
  `id_reg` int(10) NOT NULL,
  PRIMARY KEY (`id_calSiswa`),
  KEY `id_OrtuWali` (`id_OrtuWali`,`id_datSekolah`,`no_pendaftaran`),
  KEY `id_reg` (`id_reg`),
  KEY `no_pendaftaran` (`no_pendaftaran`),
  KEY `id_datSekolah` (`id_datSekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `biodata_calsiswa`
--

INSERT INTO `biodata_calsiswa` (`id_calSiswa`, `id_OrtuWali`, `id_datSekolah`, `no_pendaftaran`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `agama`, `no_telp`, `jurusan`, `ekstrakur`, `id_reg`) VALUES
(1, 1, 1, 1, 'Bejo Karto Raharjo', 'Laki-laki', 'Jambi', '2001-02-20', 'Geneng RT 02/RW 03, Gayam, Ngadirojo, Wonogiri', 'Kristen', '081887345762', 'Teknik Kendaraan Ringan', 'Pramuka.,Bola Voli.,Pencak Silat', 1),
(2, 2, 2, 2, 'Natasha Wilona', 'Perempuan', 'Jakarta', '2001-12-12', 'Timang Wetan RT 01/RW 01, Wonokerto, Wonogiri', 'Katolik', '085229467987', 'Teknik dan Bisnis Sepeda Motor', 'Pramuka.,Bola Voli.,PMR', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE IF NOT EXISTS `data_sekolah` (
  `id_datSekolah` int(10) NOT NULL AUTO_INCREMENT,
  `id_asal_sekolah` int(10) NOT NULL,
  `nisn` char(25) NOT NULL,
  `no_un` char(20) NOT NULL,
  `no_ijazah` char(15) DEFAULT NULL,
  `tgl_ijazah` date DEFAULT NULL,
  PRIMARY KEY (`id_datSekolah`),
  KEY `id_asal_sekolah` (`id_asal_sekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_datSekolah`, `id_asal_sekolah`, `nisn`, `no_un`, `no_ijazah`, `tgl_ijazah`) VALUES
(1, 14, '34281498', '2112233', '', '0000-00-00'),
(2, 15, '879795957', '23432536', '35321', '2017-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `detail_berkas`
--

CREATE TABLE IF NOT EXISTS `detail_berkas` (
  `id_detBerkas` int(10) NOT NULL AUTO_INCREMENT,
  `Foto` varchar(200) DEFAULT NULL,
  `kk` varchar(200) DEFAULT NULL,
  `skhu_skhus` varchar(200) DEFAULT NULL,
  `ijazah` varchar(200) DEFAULT NULL,
  `srtf_piagam` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_detBerkas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `detail_berkas`
--

INSERT INTO `detail_berkas` (`id_detBerkas`, `Foto`, `kk`, `skhu_skhus`, `ijazah`, `srtf_piagam`) VALUES
(1, '', '', '', '', ''),
(2, 'Img-Upload/LarasAyuningtyas02.jpg', 'Img-Upload/kk.jpg', 'Img-Upload/skhu.jpg', 'Img-Upload/ijazah.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `fisik`
--

CREATE TABLE IF NOT EXISTS `fisik` (
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `tato_tindik` varchar(10) NOT NULL,
  `id_fisik` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_fisik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fisik`
--

INSERT INTO `fisik` (`berat_badan`, `tinggi_badan`, `tato_tindik`, `id_fisik`) VALUES
('60', '168', 'Tidak Ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ortu_wali`
--

CREATE TABLE IF NOT EXISTS `ortu_wali` (
  `id_OrtuWali` int(10) NOT NULL AUTO_INCREMENT,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `pek_ayah` varchar(30) DEFAULT NULL,
  `pek_ibu` varchar(30) NOT NULL,
  `pek_wali` varchar(30) DEFAULT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `no_telp_ortu` char(15) DEFAULT NULL,
  PRIMARY KEY (`id_OrtuWali`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ortu_wali`
--

INSERT INTO `ortu_wali` (`id_OrtuWali`, `nama_ayah`, `nama_ibu`, `nama_wali`, `pek_ayah`, `pek_ibu`, `pek_wali`, `alamat_ortu`, `no_telp_ortu`) VALUES
(1, 'Suminto', 'Lastri', '', 'Buruh', 'Karyawan', '', 'Geneng RT 02/RW 03, Gayam, Ngadirojo, Wonogiri', '082776892667'),
(2, 'Marco', 'Ningrum', '', 'Wiraswasta', 'Wiraswasta', '', 'Timang Wetan RT 01/RW 01, Wonokerto, Wonogiri', '081324887561');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  PRIMARY KEY (`no_pendaftaran`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `id_user`, `tgl_daftar`) VALUES
(1, 1, '2018-04-11 05:13:57'),
(2, 1, '2018-04-11 05:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `register_calsiswa`
--

CREATE TABLE IF NOT EXISTS `register_calsiswa` (
  `id_reg` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` char(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register_calsiswa`
--

INSERT INTO `register_calsiswa` (`id_reg`, `username`, `password`, `email`) VALUES
(1, 'Bejo', '123456', 'bejo@gmail.com'),
(2, 'Via', '123456', 'Vianisty@gmail.com'),
(3, 'Wilona', '654321', 'wilona@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi`
--

CREATE TABLE IF NOT EXISTS `seleksi` (
  `hasil` varchar(20) NOT NULL,
  `no_pendaftaran` int(11) NOT NULL,
  `id_akademik` int(10) NOT NULL,
  `id_fisik` int(10) NOT NULL,
  `id_seleksi` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_seleksi`),
  KEY `no_pendaftaran` (`no_pendaftaran`,`id_akademik`,`id_fisik`),
  KEY `id_akademik` (`id_akademik`),
  KEY `id_fisik` (`id_fisik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seleksi`
--

INSERT INTO `seleksi` (`hasil`, `no_pendaftaran`, `id_akademik`, `id_fisik`, `id_seleksi`) VALUES
('Tidak Diterima', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `hak_akses` tinyint(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(12) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jabatan`, `hak_akses`, `username`, `password`) VALUES
(1, 'Anselmus Nugraha', 'Admin', 0, 'Admin', 'Admin'),
(2, 'Budi Wahyono, S.T.', 'Petugas', 1, 'Budi', '654321');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`id_calSiswa`) REFERENCES `biodata_calsiswa` (`id_calSiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berkas_ibfk_2` FOREIGN KEY (`id_detBerkas`) REFERENCES `detail_berkas` (`id_detBerkas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biodata_calsiswa`
--
ALTER TABLE `biodata_calsiswa`
  ADD CONSTRAINT `biodata_calsiswa_ibfk_1` FOREIGN KEY (`no_pendaftaran`) REFERENCES `pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biodata_calsiswa_ibfk_2` FOREIGN KEY (`id_datSekolah`) REFERENCES `data_sekolah` (`id_datSekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biodata_calsiswa_ibfk_3` FOREIGN KEY (`id_OrtuWali`) REFERENCES `ortu_wali` (`id_OrtuWali`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biodata_calsiswa_ibfk_4` FOREIGN KEY (`id_reg`) REFERENCES `register_calsiswa` (`id_reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD CONSTRAINT `data_sekolah_ibfk_1` FOREIGN KEY (`id_asal_sekolah`) REFERENCES `asal_sekolah` (`id_asal_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seleksi`
--
ALTER TABLE `seleksi`
  ADD CONSTRAINT `seleksi_ibfk_1` FOREIGN KEY (`id_akademik`) REFERENCES `akademik` (`id_akademik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seleksi_ibfk_2` FOREIGN KEY (`id_fisik`) REFERENCES `fisik` (`id_fisik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seleksi_ibfk_3` FOREIGN KEY (`no_pendaftaran`) REFERENCES `pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
