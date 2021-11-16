-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 05:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-wisuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`, `nim`, `fullName`) VALUES
(1, 'admin', '10406c1d7b7421b1a56f0d951e952a95', NULL, NULL, NULL),
(2, 'root', '63a9f0ea7bb98050796b649e85481845', 'admin', NULL, NULL),
(3, 'riki', '63a9f0ea7bb98050796b649e85481845', 'mahasiswa', '1200', NULL),
(6, 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 'mahasiswa', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'mahasiswa', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas_wisuda`
--

CREATE TABLE `tbl_berkas_wisuda` (
  `berkasID` int(11) NOT NULL,
  `nim` char(20) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `bebas_biaya` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas_wisuda`
--

INSERT INTO `tbl_berkas_wisuda` (`berkasID`, `nim`, `ijazah`, `ktp`, `kk`, `bebas_biaya`, `foto`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '153510374', 'example-image16.jpg', '1', '1', NULL, 'merubah-foto-di-paint.jpg'),
(28, '', NULL, NULL, 'p-2504.png', NULL, NULL),
(29, '153410932', NULL, 'p-5017.png', NULL, NULL, NULL),
(30, '1200', NULL, NULL, NULL, NULL, NULL),
(32, '1234', 'PROFILSINGKATPPID.pdf', 'PROFILSINGKATPPID1.pdf', 'merubah-foto-di-paint2.jpg', 'merubah-foto-di-paint3.jpg', 'merubah-foto-di-paint4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_c1`
--

CREATE TABLE `tbl_form_c1` (
  `C1ID` int(11) NOT NULL,
  `headerID` int(11) DEFAULT NULL,
  `namaLengkap` varchar(255) DEFAULT NULL,
  `nim` char(20) DEFAULT NULL,
  `prodi` int(11) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `tempatLahir` varchar(255) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `tglOc` date DEFAULT NULL,
  `ipk` char(5) DEFAULT NULL,
  `alamat` text,
  `namaAyah` varchar(255) DEFAULT NULL,
  `namaIbu` varchar(255) DEFAULT NULL,
  `alamatOrtu` varchar(255) DEFAULT NULL,
  `alumni` int(1) DEFAULT '0',
  `createdAt` datetime DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `nik` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_form_c1`
--

INSERT INTO `tbl_form_c1` (`C1ID`, `headerID`, `namaLengkap`, `nim`, `prodi`, `jenjang`, `tempatLahir`, `tglLahir`, `agama`, `jk`, `status`, `pekerjaan`, `tglOc`, `ipk`, `alamat`, `namaAyah`, `namaIbu`, `alamatOrtu`, `alumni`, `createdAt`, `createdBy`, `active`, `nik`) VALUES
(1, 2, 'abdul azis', '153510374', 15, 'D3', 'sungai guntung', '1998-01-01', 'Muslim', 'Laki - Laki', 'Kawin', 'programmer', '2020-12-31', '3.89', 'sungai guntung', 'ali', 'kayyah', 'sungai guntung', 1, '2021-10-31 15:53:50', '2021-10-31 15:53:50', 1, '123456'),
(2, 2, 'rudi habibi', '153410932', 15, 'D1', 'sungai guntung', '1996-12-31', 'Muslim', 'Laki - Laki', 'Kawin', 'programmer', '2020-12-31', '3.89', 'sungai guntung', 'ali', 'kayyah', 'sungai guntung', 1, '2021-10-31 15:56:23', '2021-10-31 15:56:23', 1, '1404098120003'),
(5, 1, 'riki subagia', '1200', 15, 'Strata 1 (S1)', 'mandah', '1999-12-31', 'Islam', 'Laki - Laki', 'Kawin', 'programmer', '2020-12-31', '3.89', 'tembilahan', 'atan', 'atin', 'tembilahan', 1, '2021-11-14 16:24:22', NULL, 1, '14012123112'),
(6, 1, 'abdul azis', '1234', 15, 'Strata 1 (S1)', 'sungai guntung', '1997-12-31', 'Islam', 'Laki - Laki', 'Kawin', 'programmer', '2020-12-31', '3.89', 'Sungai Guntung', 'Hamka', 'Nur Syamsiah', 'Sungai Guntung', 1, '2021-11-14 17:22:00', NULL, 1, '1440821000921');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_c2`
--

CREATE TABLE `tbl_form_c2` (
  `c2ID` int(11) NOT NULL,
  `nim` char(20) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `instansiTempatKerja` varchar(255) DEFAULT NULL,
  `alamatInstansi` varchar(255) DEFAULT NULL,
  `lamaStudiBulan` int(11) DEFAULT NULL,
  `lamaStudiTahun` int(11) DEFAULT NULL,
  `tglLulus` date DEFAULT NULL,
  `judulTA` varchar(255) DEFAULT NULL,
  `dospem1` varchar(255) DEFAULT NULL,
  `dospem2` varchar(255) DEFAULT NULL,
  `tempatWisuda` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_form_c2`
--

INSERT INTO `tbl_form_c2` (`c2ID`, `nim`, `telp`, `kota`, `instansiTempatKerja`, `alamatInstansi`, `lamaStudiBulan`, `lamaStudiTahun`, `tglLulus`, `judulTA`, `dospem1`, `dospem2`, `tempatWisuda`, `active`) VALUES
(5, '153510374', '12345678', 'pekanbaru', 'sambu group', 'sungai guntung', 10, 4, '2021-01-01', 'analisis perbanding', 'dosen 1', 'dosen 2', 'sungai hilir', '1'),
(6, '1234', '082386340464', 'pekanbaru', 'pt. rsup', 'pulau burung', 5, 4, '2021-12-31', 'ANALISIS WEB SERVER', 'YUDHI ARTA', 'ABDUL SYUKUR', 'UNISI', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_wisuda`
--

CREATE TABLE `tbl_jadwal_wisuda` (
  `headerID` int(11) NOT NULL,
  `priode` char(100) DEFAULT NULL,
  `kouta` int(11) DEFAULT NULL,
  `jadwal` date DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_wisuda`
--

INSERT INTO `tbl_jadwal_wisuda` (`headerID`, `priode`, `kouta`, `jadwal`, `tahun`, `active`, `status`) VALUES
(1, 'Gelombang 1', 300, '2021-06-30', '2021', '1', '3'),
(2, 'Gelombang 1', 12, '2021-10-07', '2020', '1', '3'),
(3, 'Gelombang 2', 12, '2021-06-30', '2021', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_detail`
--

CREATE TABLE `tbl_jawaban_detail` (
  `id` int(11) NOT NULL,
  `idsoal` int(255) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_quisioner`
--

CREATE TABLE `tbl_jawaban_quisioner` (
  `id` int(11) NOT NULL,
  `id_soal` varchar(255) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban_quisioner`
--

INSERT INTO `tbl_jawaban_quisioner` (`id`, `id_soal`, `jawaban`, `nim`) VALUES
(900, '1', '123456789', '123456789'),
(901, '2', '2012', '123456789'),
(902, '3', 'Akuntansi', '123456789'),
(903, '5', 'abdullah', '123456789'),
(904, '6', '082386340464', '123456789'),
(905, '7', 'aziezgt@gmail.com', '123456789'),
(906, '8', 'programmer', '123456789'),
(907, '9', 'Seteah 6 Bulan', '123456789'),
(908, '10', 'Seteah 6 Bulan', '123456789'),
(909, '11', 'Seteah 6 Bulan', '123456789'),
(910, '12', 'Beasiswa ADIK', '123456789'),
(911, '13', 'Melalui iklan di koran/majalah, brosur f4-01', '123456789'),
(912, '13', 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada f4-02', '123456789'),
(913, '13', 'Pergi ke bursa/pameran kerja f4-03', '123456789'),
(914, '13', 'Mencari lewat internet/iklan online/milis f4-04', '123456789'),
(915, '13', 'Dihubungi oleh perusahaan f4-05', '123456789'),
(916, '13', 'Menghubungi Kemenakertrans f4-06', '123456789'),
(917, '13', 'Menghubungi agen tenaga kerja komersial/swasta f4-07', '123456789'),
(918, '13', 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas f4-08', '123456789'),
(919, '1', '1234', '1234'),
(920, '2', '2021', '1234'),
(921, '3', 'Akuntansi', '1234'),
(922, '5', 'abdul azis', '1234'),
(923, '6', '082386340464', '1234'),
(924, '7', 'aziezgt@gmail.com', '1234'),
(925, '8', 'programmer', '1234'),
(926, '9', 'Seteah 6 Bulan', '1234'),
(927, '10', 'Seteah 6 Bulan', '1234'),
(928, '11', 'Seteah 6 Bulan', '1234'),
(929, '12', 'Beasiswa BIDIKMISI', '1234'),
(930, '13', 'Melalui iklan di koran/majalah, brosur f4-01', '1234'),
(931, '13', 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada f4-02', '1234'),
(932, '13', 'Mencari lewat internet/iklan online/milis f4-04', '1234'),
(933, '13', 'Dihubungi oleh perusahaan f4-05', '1234'),
(934, '13', 'Menghubungi Kemenakertrans f4-06', '1234'),
(935, '13', 'Menghubungi agen tenaga kerja komersial/swasta f4-07', '1234'),
(936, '13', 'Membangun bisnis sendiri f4-12', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_fakultas`
--

CREATE TABLE `tbl_mst_fakultas` (
  `fakultasID` int(11) NOT NULL,
  `fakultasName` varchar(255) DEFAULT NULL,
  `fakultasCode` char(255) DEFAULT NULL,
  `createdAt` varchar(255) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mst_fakultas`
--

INSERT INTO `tbl_mst_fakultas` (`fakultasID`, `fakultasName`, `fakultasCode`, `createdAt`, `createdBy`, `active`, `updatedAt`, `updatedBy`) VALUES
(1, 'TEKNIK', '0001', NULL, NULL, '0', NULL, NULL),
(2, 'EKONOMI', '0002', NULL, NULL, '0', NULL, NULL),
(3, 'HUKUM', '0003', NULL, NULL, '0', NULL, NULL),
(4, 'PERTANIAN', '0004', NULL, NULL, '0', NULL, NULL),
(5, 'PENDIDIKAN', 'F-003', 'aziezgt12@gmail.com', '2021-10-27', '0', '2021-10-27 14:21:01', 'aziezgt12@gmail.com'),
(6, NULL, NULL, 'aziezgt12@gmail.com', '2021-10-27', '0', NULL, NULL),
(7, 'TEKNIK', 'a', 'aziezgt12@gmail.com', '2021-10-27', '1', '0000-00-00 00:00:00', ''),
(8, 'FKIP', 'F-001', 'aziezgt12@gmail.com', '2021-10-27', '1', '2021-10-27 14:33:05', 'aziezgt12@gmail.com'),
(9, 'HUKUM', 'F-001', 'aziezgt12@gmail.com', '2021-10-27', '0', NULL, NULL),
(10, 'FKIP', 'F-002', 'aziezgt12@gmail.com', '2021-10-27', '1', NULL, NULL),
(11, 'FKIP', 'F-002', 'aziezgt12@gmail.com', '2021-10-27 14:17:35', '1', NULL, NULL),
(12, 'HUKUM', '0003', 'aziezgt12@gmail.com', '2021-10-27 14:18:34', '1', NULL, NULL),
(13, 'PERTANIAN', '0004', 'aziezgt12@gmail.com', '2021-10-27 14:18:45', '1', NULL, NULL),
(14, '12', 'tes', 'aziezgt12@gmail.com', '2021-10-27 18:42:28', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_priode`
--

CREATE TABLE `tbl_mst_priode` (
  `priodeID` int(11) NOT NULL,
  `priode` varchar(255) DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `kouta` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mst_priode`
--

INSERT INTO `tbl_mst_priode` (`priodeID`, `priode`, `createdAt`, `createdBy`, `active`, `updatedAt`, `updatedBy`, `tahun`, `kouta`) VALUES
(18, 'priode 1', '2021-10-07', 'ADMIN', '0', '2021-10-06 19:28:55', 'ADMIN', '2020', 800),
(19, 'gelombang 1', '2021-10-06', 'ADMIN', '0', '2021-10-06 19:28:55', NULL, '2020', 200),
(20, 'gelombang 2', '2021-10-06', 'ADMIN', '0', '2021-10-06 19:28:55', NULL, '2020', 300),
(21, 'gelombang 4', '2021-10-06', 'ADMIN', '1', '2021-10-06 19:28:55', 'aziezgt12@gmail.com', '2020', 400),
(22, 'gelombang 3', '2021-10-28', 'aziezgt12@gmail.com', '1', NULL, NULL, '2020', 500),
(23, 'Gelombang 2', '2021-10-30', 'aziezgt12@gmail.com', '1', NULL, NULL, '2022', 10),
(24, NULL, '2021-10-30', 'aziezgt12@gmail.com', '1', NULL, NULL, NULL, NULL),
(25, NULL, '2021-10-30', 'aziezgt12@gmail.com', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_prodi`
--

CREATE TABLE `tbl_mst_prodi` (
  `prodiID` int(11) NOT NULL,
  `fakultasID` varchar(255) DEFAULT NULL,
  `prodiName` char(255) DEFAULT NULL,
  `createdAt` varchar(255) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `prodiKode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mst_prodi`
--

INSERT INTO `tbl_mst_prodi` (`prodiID`, `fakultasID`, `prodiName`, `createdAt`, `createdBy`, `active`, `updatedAt`, `updatedBy`, `prodiKode`) VALUES
(15, '7', 'Teknik Infromatika', NULL, NULL, '1', '2021-10-27 19:21:19', 'aziezgt12@gmail.com', 'p021'),
(16, '12', 'hukum', 'aziezgt12@gmail.com', '2021-10-27 19:00:52', '0', NULL, NULL, NULL),
(17, '13', 'Agroteknologi', 'aziezgt12@gmail.com', '2021-10-27 19:01:12', '0', NULL, NULL, 'p-003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_detail`
--

CREATE TABLE `tbl_soal_detail` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `optional` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal_detail`
--

INSERT INTO `tbl_soal_detail` (`id`, `id_soal`, `optional`) VALUES
(17, 3, 'Manajemen'),
(18, 3, 'Akuntansi'),
(19, 3, 'Ilmu Hukum'),
(20, 3, 'Pendidikan Bahasa Inggris'),
(21, 3, 'Pendidikan Jasmani Kesehatan dan Rekreasi'),
(22, 3, 'Manajemen Pendidikan Islam'),
(23, 3, 'Manajemen Pendidikan Islam'),
(24, 3, 'Ilmu Al-Qur''an dan Tafsir'),
(25, 3, 'Sistem Informasi'),
(26, 3, 'Teknik Sipil'),
(27, 3, 'Teknik Industri'),
(28, 3, 'Agribisnis'),
(29, 3, 'Agroteknologi'),
(30, 3, 'Teknologi Pangan'),
(31, 3, 'Budidaya Perairan'),
(32, 9, 'Sebelum Enam Bulan'),
(33, 9, 'Seteah 6 Bulan'),
(34, 9, 'Lebih dari 1 Tahun'),
(35, 10, 'Sebelum Enam Bulan'),
(36, 10, 'Seteah 6 Bulan'),
(37, 10, 'Lebih dari 1 Tahun'),
(38, 11, 'Sebelum Enam Bulan'),
(39, 11, 'Seteah 6 Bulan'),
(40, 11, 'Lebih dari 1 Tahun'),
(41, 12, 'Biaya Sendiri / Keluarga'),
(42, 12, 'Beasiswa ADIK'),
(43, 12, 'Beasiswa BIDIKMISI'),
(44, 12, 'Beasiswa PPA'),
(45, 12, 'Beasiswa AFIRMASI'),
(46, 12, 'Beasiswa Perusahaan/Swasta'),
(47, 13, 'Melalui iklan di koran/majalah, brosur f4-01'),
(48, 13, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada f4-02'),
(49, 13, 'Pergi ke bursa/pameran kerja f4-03'),
(50, 13, 'Mencari lewat internet/iklan online/milis f4-04'),
(51, 13, 'Dihubungi oleh perusahaan f4-05'),
(52, 13, 'Menghubungi Kemenakertrans f4-06'),
(53, 13, 'Menghubungi agen tenaga kerja komersial/swasta f4-07'),
(54, 13, 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas f4-08'),
(55, 13, 'Menghubungi kantor kemahasiswaan/hubungan alumni f4-09'),
(56, 13, 'Membangun jejaring (network) sejak masih kuliah f4-10'),
(57, 13, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.) f4-11'),
(58, 13, 'Membangun bisnis sendiri f4-12'),
(59, 13, 'Melalui penempatan kerja atau magang f4-13'),
(60, 13, 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah f4-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_quisioner`
--

CREATE TABLE `tbl_soal_quisioner` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal_quisioner`
--

INSERT INTO `tbl_soal_quisioner` (`id`, `soal`, `type`) VALUES
(1, 'Nomor Induk Mahasiswa (NIM) ', 'inputan'),
(2, 'Tahun Lulus *\r\n', 'inputan'),
(3, 'Program Studi Dan Kode Prodi *', 'radio'),
(5, 'Nama Lengkap *\r\n', 'inputan'),
(6, 'Nomor HP/WA Yang Aktif dan Bisa di Hubungi *', 'inputan'),
(7, 'Alamat Email, FB dan Media Sosial Lainnya *\r\n', 'inputan'),
(8, 'Pekerjaan Saat Ini? *', 'inputan'),
(9, 'f5 Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama (Kira-kira bulan sebelum lulus ujian (f5-01, f5-02))', 'radio'),
(10, 'f5 Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama (Kira-kira bulan setelah lulus ujian (f5-01, f5-03))', 'radio'),
(11, 'f5 Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama (Lainnya)', 'radio'),
(12, 'f12 Sebutkan sumberdana dalam pembiayaan kuliah? *', 'radio'),
(13, 'f4 Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu *\r\n', 'checkbox');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$aaLf81W7KgRzoe3QJiOAGO4QTtTx5t7IZSs6Swaa1IEpE.cyf4/KG', 'aziezgt@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1634039654, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'aziz', '$2y$10$fbcjofBaZz8uhuQROPZPleG8OWP7SyzBr9vuH9do8vyoa0LPS6vp2', 'aziezgt12@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633851115, 1636884636, 1, 'aziz', 'aziz', 'aziz', '082386340464');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berkas_wisuda`
--
ALTER TABLE `tbl_berkas_wisuda`
  ADD PRIMARY KEY (`berkasID`);

--
-- Indexes for table `tbl_form_c1`
--
ALTER TABLE `tbl_form_c1`
  ADD PRIMARY KEY (`C1ID`);

--
-- Indexes for table `tbl_form_c2`
--
ALTER TABLE `tbl_form_c2`
  ADD PRIMARY KEY (`c2ID`);

--
-- Indexes for table `tbl_jadwal_wisuda`
--
ALTER TABLE `tbl_jadwal_wisuda`
  ADD PRIMARY KEY (`headerID`) USING BTREE;

--
-- Indexes for table `tbl_jawaban_detail`
--
ALTER TABLE `tbl_jawaban_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jawaban_quisioner`
--
ALTER TABLE `tbl_jawaban_quisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mst_fakultas`
--
ALTER TABLE `tbl_mst_fakultas`
  ADD PRIMARY KEY (`fakultasID`);

--
-- Indexes for table `tbl_mst_priode`
--
ALTER TABLE `tbl_mst_priode`
  ADD PRIMARY KEY (`priodeID`) USING BTREE;

--
-- Indexes for table `tbl_mst_prodi`
--
ALTER TABLE `tbl_mst_prodi`
  ADD PRIMARY KEY (`prodiID`) USING BTREE;

--
-- Indexes for table `tbl_soal_detail`
--
ALTER TABLE `tbl_soal_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal_quisioner`
--
ALTER TABLE `tbl_soal_quisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_berkas_wisuda`
--
ALTER TABLE `tbl_berkas_wisuda`
  MODIFY `berkasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_form_c1`
--
ALTER TABLE `tbl_form_c1`
  MODIFY `C1ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_form_c2`
--
ALTER TABLE `tbl_form_c2`
  MODIFY `c2ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_jadwal_wisuda`
--
ALTER TABLE `tbl_jadwal_wisuda`
  MODIFY `headerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jawaban_detail`
--
ALTER TABLE `tbl_jawaban_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jawaban_quisioner`
--
ALTER TABLE `tbl_jawaban_quisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=937;
--
-- AUTO_INCREMENT for table `tbl_mst_fakultas`
--
ALTER TABLE `tbl_mst_fakultas`
  MODIFY `fakultasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_mst_priode`
--
ALTER TABLE `tbl_mst_priode`
  MODIFY `priodeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_mst_prodi`
--
ALTER TABLE `tbl_mst_prodi`
  MODIFY `prodiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_soal_detail`
--
ALTER TABLE `tbl_soal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_soal_quisioner`
--
ALTER TABLE `tbl_soal_quisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
