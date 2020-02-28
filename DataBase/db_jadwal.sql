-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2017 at 08:22 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('guru', 'guru'),
('nova', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(25) collate latin1_general_ci NOT NULL,
  `NIP` varbinary(30) NOT NULL,
  `nama_jabatan` varchar(20) collate latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(30) collate latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jekel` enum('LAKI-LAKI','PEREMPUAN') collate latin1_general_ci NOT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `kota` varchar(25) collate latin1_general_ci NOT NULL,
  `kelas` varchar(30) collate latin1_general_ci NOT NULL,
  `Upload_Foto` longtext collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`username`, `password`, `nama_guru`, `NIP`, `nama_jabatan`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `status`, `alamat`, `kota`, `kelas`, `Upload_Foto`) VALUES
('nova', 'nova', 'nova looo', '454354', 'WAKIL', 'MENINJAU', '2016-12-31', 'PEREMPUAN', 'AKTIF', 'padang', 'Bukittinggi', 'VII.1', 'KEPALA SEKOLAH.JPG'),
('novita', '123', 'novita sari kkk', '462374', 'WAKIL', 'MENINJAU', '1992-05-05', 'PEREMPUAN', 'TIDAK AKTIF', 'PADANG', 'Bukittinggi', 'VIII.2', 'elimawarni.jpg'),
('guru', 'guru', 'guru', '1525325643', 'WAKIL', 'BUKIT TINGGI', '1980-05-01', 'LAKI-LAKI', 'AKTIF', 'solok', 'Bukittinggi', 'VII.1', 'basrial.jpg'),
('acer', '123', 'Arbi Aty', '3546756245232', 'KESISWAAN', 'TANJUNG BALAI', '1992-02-28', 'PEREMPUAN', 'AKTIF', 'JUANDA', 'Tanjungbalai', 'VIII.1', '01711010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `Hari` varchar(10) collate latin1_general_ci NOT NULL,
  `kelas` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(20) collate latin1_general_ci NOT NULL,
  `NIP` varchar(25) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`Hari`, `kelas`, `nama_matpel`, `NIP`, `nama_guru`) VALUES
('MINGGGU', 'VII.1', 'SENI BUDAYA', '17042017', 'KHAIRUNNISA SAMOSIR'),
('KAMIS', 'VIII.2', 'BAHASA INGGRIS', '4324556267', 'Mardawati, M.Pd'),
('RABU', 'VIII.1', 'IPA', '5674567354', 'SITI MELUR'),
('SENIN', 'VII.1', 'BAHASA INDONESIA', '46724526754234', 'JUNAINAH CH, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(11) collate latin1_general_ci NOT NULL,
  `nama_jabatan` varchar(20) collate latin1_general_ci NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(25) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `NIP`, `nama_guru`, `nama_matpel`) VALUES
('2', 'WAKIL KEPALA SEKOLAH', '196212191988032002', 'KHAIRUNNISA SAMOSIR', 'BAHASA INGGRIS'),
('1', 'OSIS', '12344675324762', 'KHAIRUNNISA SAMOSIR', 'MATEMATIKA'),
('K001', 'KESISWAAN', '46724526754234', 'SYFARIZAL ADLIN SAMO', 'IPS'),
('B002', 'PENDIDIK', '4T7623467576324', 'SITI MELUR', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) collate latin1_general_ci NOT NULL,
  `kelas` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `Tahun_Ajaran` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`, `jumlah_siswa`, `Tahun_Ajaran`) VALUES
('KIX.8', 'VIII.1', 435, '2016'),
('KIX.7', 'VIII.1', 435, '2016'),
('KIX.6', 'VIII.1', 435, '2016'),
('KIX.5', 'VIII.1', 43, '2016'),
('KIX.4', 'VIII.1', 435, '2016'),
('KIX.3', 'VIII.1', 4350, '2015'),
('KVIII', 'IX.2', 40, '2016'),
('KVIII', 'IX.2', 40, '2016'),
('KVIII', 'IX.2', 40, '2016'),
('KVIII', 'IX.2', 40, '2016'),
('KVIII', 'IX.2', 40, '2016'),
('KVIII', 'IX.2', 40, '2016'),
('KVII', 'VIII.1', 435, '2016');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `kode_matpel` varchar(10) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(30) collate latin1_general_ci NOT NULL,
  `jam_matpel` varchar(5) collate latin1_general_ci NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(25) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`kode_matpel`, `nama_matpel`, `jam_matpel`, `NIP`, `nama_guru`) VALUES
('PSD1', 'Matematika', '07.50', '195706151983032006', 'guru'),
('PSD3', 'ENGLISH', '08.40', '4324556267', 'agusmulyatiKK'),
('PSD9', 'Bimbingan Konseling', '07.50', '196111151993032003', 'samosir'),
('PSD2', 'PJOK', '06.45', '1234', 'guru'),
('PSD1', 'AGAMA', '06.45', '12344675324762', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Username` varchar(30) collate latin1_general_ci NOT NULL,
  `Password` varchar(25) collate latin1_general_ci NOT NULL,
  `nama_siswa` varchar(30) collate latin1_general_ci NOT NULL,
  `nis` varchar(25) collate latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(30) collate latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jekel` enum('LAKI-LAKI','PEREMPUAN') collate latin1_general_ci NOT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') collate latin1_general_ci NOT NULL,
  `kelas` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Username`, `Password`, `nama_siswa`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `status`, `kelas`) VALUES
('ifah', '123', 'musdalifah', '2325345', 'PESISISR', '1993-05-05', 'PEREMPUAN', 'AKTIF', 'IX.1'),
('mama', '123', 'SYAFARUDDIN', '11212', 'TANJUNGBALAI', '1996-04-01', 'LAKI-LAKI', 'AKTIF', 'IX.1'),
('HAMID', '123', 'ABDUL HAMID', '545646', 'TANJUNGBALAI', '1996-04-01', 'LAKI-LAKI', 'AKTIF', 'VIII.2'),
('novita', '123', 'novita sari', '534524525', 'MENINJAU', '1992-05-04', 'PEREMPUAN', 'AKTIF', 'VII.5'),
('abdul', '123', 'abdul hamid samosir', '46513435614', 'TANJUNGBALAI', '1983-04-02', 'LAKI-LAKI', 'AKTIF', 'IX.1'),
('rahmat', 'rahmat', 'RAHMAT HIDAYAH', '6456324627426', 'PADANG', '1997-03-06', 'LAKI-LAKI', 'AKTIF', 'VII.1');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `kd_jadwal` int(11) NOT NULL auto_increment,
  `NIS` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_matpel` varchar(10) collate latin1_general_ci NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `hari` varchar(20) collate latin1_general_ci NOT NULL,
  `jam_awal` varchar(20) collate latin1_general_ci NOT NULL,
  `jam_akhir` varchar(20) collate latin1_general_ci NOT NULL,
  `kelas` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`kd_jadwal`, `NIS`, `kode_matpel`, `NIP`, `hari`, `jam_awal`, `jam_akhir`, `kelas`) VALUES
(1, '11212', 'PSD1', '1525325643', 'SELASA', '07:30', '10:00', 'IX.1'),
(5, '11212', 'PSD3', '454354', 'KAMIS', '10.00', '11.00', 'IX.1'),
(4, '4738456738', 'PSD2', '1525325643', 'SELASA', '10.00', '09.00', 'VII.4'),
(6, '6456324627', 'PSD2', '1525325643', 'KAMIS', '09.20', '11.00', 'VII.6'),
(7, '2325345', 'PSD9', '1525325643', 'SENIN', '08.00', '09.00', 'VII.2');
