-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 03:39 PM
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
(27, '153510374', 'example-image16.jpg', '1', '1', NULL, 'unisi6.png'),
(28, '', NULL, NULL, 'p-2504.png', NULL, NULL);

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
(1, 2, 'abdul azis', '153510374', 15, 'D3', 'sungai guntung', '1998-01-01', 'Muslim', 'Laki - Laki', 'Kawin', '1404082109960003', '2020-12-31', '3.89', 'sungai guntung', 'ali', 'kayyah', 'sungai guntung', 0, '2021-10-31 15:53:50', '2021-10-31 15:53:50', 1, '123456'),
(2, 2, 'rudi habibi', '153410932', 15, 'D1', 'sungai guntung', '1996-12-31', 'Muslim', 'Laki - Laki', 'Kawin', 'programmer', '2020-12-31', '3.89', 'sungai guntung', 'ali', 'kayyah', 'sungai guntung', 0, '2021-10-31 15:56:23', '2021-10-31 15:56:23', 1, '1404098120003');

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
(1, 'Gelombang 1', 300, '2021-06-30', '2022', '1', '3'),
(2, 'Gelombang 1', 12, '2021-10-07', '2022', '1', '2'),
(3, 'Gelombang 2', 12, '2021-06-30', '2022', '1', '3');

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
(2, '::1', 'aziz', '$2y$10$fbcjofBaZz8uhuQROPZPleG8OWP7SyzBr9vuH9do8vyoa0LPS6vp2', 'aziezgt12@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633851115, 1635849881, 1, 'aziz', 'aziz', 'aziz', '082386340464');

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
-- Indexes for table `tbl_jadwal_wisuda`
--
ALTER TABLE `tbl_jadwal_wisuda`
  ADD PRIMARY KEY (`headerID`) USING BTREE;

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
  MODIFY `berkasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_form_c1`
--
ALTER TABLE `tbl_form_c1`
  MODIFY `C1ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jadwal_wisuda`
--
ALTER TABLE `tbl_jadwal_wisuda`
  MODIFY `headerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
