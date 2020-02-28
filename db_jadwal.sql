-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Juni 2017 jam 12:13
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_jadwal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('guru', 'guru'),
('nova', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
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
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`username`, `password`, `nama_guru`, `NIP`, `nama_jabatan`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `status`, `alamat`, `kota`, `kelas`, `Upload_Foto`) VALUES
('junainah.ch, s.pd', '123456789', 'junainah.ch,s.pd', '197204112010012004', 'PENDIDIK', 'PADANG', '1990-03-10', 'PEREMPUAN', 'AKTIF', 'jln lubuk indah', 'Padang', 'VII.1', 'junainah.jpg'),
('syafril spd', '123456789', 'syafril spd', '196505051990111001', 'wk', 'maninjau', '1990-01-10', 'LAKI-LAKI', 'AKTIF', 'parak karakah', 'Padang', 'IX.1', 'basrial.jpg'),
('dra mardwati mpd', '123456789', 'Dra. Mardawati, M.Pd', '196111151993032003', 'KEPALA', 'PADANG', '1990-10-10', 'PEREMPUAN', 'AKTIF', 'ANDURING', 'Padang', 'VII.1', 'KEPALA SEKOLAH.JPG'),
('guru', '12345', 'guru', '196111151993032003', 'GURU', '22', '1990-01-01', 'LAKI-LAKI', 'AKTIF', 'lubuk indah', 'Padang', 'VII.1', '01711010.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `Hari` varchar(10) collate latin1_general_ci NOT NULL,
  `kelas` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(20) collate latin1_general_ci NOT NULL,
  `NIP` varchar(25) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`Hari`, `kelas`, `nama_matpel`, `NIP`, `nama_guru`) VALUES
('RABU', 'VIII.1', 'MATEMATIKA', '196505051990111001', 'syafril spd'),
('SELASA', 'IX.1', 'IPA', '198008022006042028', 'musda rahmawati ssi mpd'),
('SENIN', 'VII.1', 'BAHASA INDONESIA', '196111151993032003', 'Dra. Mardawati, M.Pd'),
('KAMIS', 'VIII.2', 'AGAMA', '1957122661989031001', 'lutfi sh mh'),
('SABTU', 'VIII.8', 'IPA', '198008022006042028', 'musda rahmawati ssi mpd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(11) collate latin1_general_ci NOT NULL,
  `nama_jabatan` varchar(20) collate latin1_general_ci NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(25) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `NIP`, `nama_guru`, `nama_matpel`) VALUES
('IV.A', 'KEPALA SEKOLAH', '196111151993032003', 'dra mardawati', 'BAHASA INDONESIA'),
('IIID', 'wk kesiswaan', '196505051990111001', 'syafril spd', 'MATEMATIKA'),
('IIID', 'wk kurikulum', '198008022006042028', 'musda rahmawati ssi ', 'IPA'),
('IIID', 'wk sapras', '196605281999031003', 'irwan spd', 'IPA'),
('IV.A', 'GURU', '1957122661989031001', 'lutfi sh mh', 'AGAMA'),
('IIIB', 'GURU', '198304292011012004', 'delvia sari spd', 'BAHASA INGGRIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) collate latin1_general_ci NOT NULL,
  `kelas` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `Tahun_Ajaran` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`, `jumlah_siswa`, `Tahun_Ajaran`) VALUES
('kd005', 'VIII.1', 32, '2017'),
('kd004', 'VII.1', 272, '2016-2017'),
('kd003', 'IX.1', 260, '2017'),
('kd001', 'VII.1', 272, '2017'),
('kd002', 'VIII.1', 252, '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpel`
--

CREATE TABLE `matpel` (
  `kode_matpel` varchar(10) collate latin1_general_ci NOT NULL,
  `nama_matpel` varchar(30) collate latin1_general_ci NOT NULL,
  `jam_matpel` int(11) NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `nama_guru` varchar(25) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `matpel`
--

INSERT INTO `matpel` (`kode_matpel`, `nama_matpel`, `jam_matpel`, `NIP`, `nama_guru`) VALUES
('PSD4', 'SENI BUDAYA', 8, '196505051990111001', 'syafril'),
('PSD1', 'BAHASA INDONESIA', 8, '1957122661989031001', 'Dra.'),
('PSD10', 'IPA', 8, '196111151993032003', 'irwan'),
('PSD1', 'BAHASA INGGRIS', 6, '1957122661989031001', 'lutfi'),
('PSD6', 'BIMBINGAN KONSELING', 10, '198304292011012004', 'irwan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
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
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Username`, `Password`, `nama_siswa`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `status`, `kelas`) VALUES
('aditya zikri', '123456789', 'adiya rizki', '156167', 'padang', '2007-05-12', 'LAKI-LAKI', 'AKTIF', 'VII.1'),
('fara ayeli', '123456789', 'fara ayeli', '156251', 'padang panjang', '2006-08-20', 'PEREMPUAN', 'AKTIF', 'VII.1'),
('george daniel', '12345', 'george daniel', '156259', 'JAKARTA', '2007-03-14', 'LAKI-LAKI', 'AKTIF', 'VII.1'),
('aisyah nafilah', '123456789', 'aisyah nafilah', '156176', 'padang panjang', '2007-03-15', 'LAKI-LAKI', 'AKTIF', 'VII.1'),
('fitri', '12345', 'fitri amelia', '156257', 'bukittinggi', '2007-12-18', 'LAKI-LAKI', 'AKTIF', 'VII.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `kd_jadwal` int(11) NOT NULL auto_increment,
  `NIS` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_matpel` varchar(10) collate latin1_general_ci NOT NULL,
  `NIP` varchar(20) collate latin1_general_ci NOT NULL,
  `hari` varchar(20) collate latin1_general_ci NOT NULL,
  `jam_awal` int(11) NOT NULL,
  `jam_akhir` int(11) NOT NULL,
  `kelas` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `t_jadwal`
--

INSERT INTO `t_jadwal` (`kd_jadwal`, `NIS`, `kode_matpel`, `NIP`, `hari`, `jam_awal`, `jam_akhir`, `kelas`) VALUES
(16, '11212', 'PSD1', '1525325643', 'SENIN', 10, 11, 'VII.3'),
(17, '4651343561', 'PSD2', '1525325643', 'SENIN', 10, 11, 'VII.4'),
(4, '4738456738', 'PSD2', '1525325643', 'SELASA', 10, 9, 'VII.4'),
(6, '6456324627', 'PSD2', '1525325643', 'KAMIS', 9, 11, 'VII.6'),
(18, '1310115261', 'PSD1', '1525325643', 'RABU', 9, 11, 'VII.2'),
(19, '1310115261', 'PSD1', '1525325643', 'RABU', 9, 11, 'VII.2'),
(9, '4651343561', 'PSD1', '454354', 'KAMIS', 8, 12, 'VIII.2'),
(10, '4651343561', 'PSD2', '454354', 'SENIN', 8, 9, 'VIII.4'),
(12, '1310115261', 'PSD3', '1525325643', 'MINGGGU', 8, 10, 'VIII.2'),
(20, '1310115261', 'PSD3', '1525325643', 'JUMAT', 10, 11, 'VIII.2'),
(21, '4651343561', 'PSD1', '13243545', 'SABTU', 10, 12, 'VII.7'),
(22, '0024779413', 'PSD9', '196111151993032003', 'SENIN', 10, 11, 'VII.2'),
(23, '0024779413', 'PSD1', '196111151993032003', 'SENIN', 9, 10, 'VII.1'),
(26, '156259', 'PSD6', '196605281999031003', 'SELASA', 10, 11, 'VII.1'),
(27, '156167', 'PSD4', '196505051990111001', 'SELASA', 10, 11, 'VII.1'),
(28, '156251', 'PSD6', '196605281999031003', 'RABU', 8, 9, 'VII.2'),
(29, '156176', 'PSD10', '197204112010012004', 'KAMIS', 8, 10, 'IX.1');
