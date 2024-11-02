-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 02:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sman_ceria`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id_regis` int(11) NOT NULL,
  `nomor_pendaftaran` int(11) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nomor_akta` varchar(10) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `pilih_jurusan` enum('IPA','IPS') NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id_regis`, `nomor_pendaftaran`, `nama_peserta`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nomor_akta`, `nik`, `alamat`, `nama_wali`, `nomor_hp`, `pilih_jurusan`, `ijazah`, `kk`, `akte`, `ktp`) VALUES
(7, 228064, 'Sintya Rahma', 'Bogor', '2006-07-21', 'perempuan', '2144125251', 97432, 'dramaga', 'Alucard', '232152352352', '', '', '', '', ''),
(8, 823623, 'Jihan kari ayam', 'Jakarta ', '2005-02-12', 'perempuan', '3214234234', 123345, 'Kalimantan', 'Zilong', '423432843248', '', '', '', '', ''),
(9, 305453, 'Jihan Fahira', 'Jakarta ', '133123-12-12', 'perempuan', '3214234234', 42342, 'Depok Kelapa dua', 'Lux', '423432843248', '', '', '', '', ''),
(11, 743178, 'Rikzy permata indah', 'Depok', '2003-01-20', 'laki-laki', '3123213', 100020, 'Depok Kelapa dua', 'Jason', '1212353', '', '', '', '', ''),
(14, 657848, 'Sandra Winata', 'Land Of Down', '2005-02-23', 'perempuan', '1231415346', 2342342, 'dramaga', 'Yuni', '12415346547687', '', '', '', '', ''),
(15, 686160, 'Putri Sandra', 'Bogor', '2004-02-20', 'perempuan', '1213121432', 981234, 'dramaga', 'Rousyan Fikri', '1242534658686', '', '', '', '', ''),
(31, 681527, 'Ri', 'Jakarta ', '1210-02-20', 'laki-laki', '12312', 31230, 'Depok Kelapa dua', 'Agung Setia Budi', '982', 'IPA', '', '', '', ''),
(32, 104554, 'Ri', 'Jakarta ', '2004-08-20', 'perempuan', '12312', 31230, 'Depok Kelapa dua', 'Agung Setia Budi', '982', 'IPS', '', '', '', ''),
(33, 104554, 'Ri', 'Jakarta ', '2004-08-20', 'perempuan', '12312', 31230, 'Depok Kelapa dua', 'Agung Setia Budi', '982', 'IPS', 'nadiem_makarim7.jpg', 'Eren_Yeager.jpg', 'Ayam_Jago5.jpg', 'Ayams4.jpg'),
(34, 750511, 'Putri', 'Depok', '2004-08-20', 'perempuan', '12312', 31230, 'Depok Kelapa dua', 'Susi', '2719847923928938', 'IPS', '', '', '', ''),
(35, 750511, 'Putri', 'Depok', '2004-08-20', 'perempuan', '12312', 31230, 'Depok Kelapa dua', 'Susi', '2719847923928938', 'IPS', 'Ayam_Jago6.jpg', 'Ayams5.jpg', 'nadiem_makarim8.jpg', 'nadiem_makarim9.jpg'),
(36, 601298, 'Rizky', 'Depok', '2000-02-20', 'laki-laki', '1234667847', 33345676885, 'Depok Kelapa dua', 'Agung Setia Budi', '87856490875', 'IPA', '', '', '', ''),
(37, 601298, 'Rizky', 'Depok', '2000-02-20', 'laki-laki', '1234667847', 33345676885, 'Depok Kelapa dua', 'Agung Setia Budi', '87856490875', 'IPA', 'Ayam_Jago7.jpg', 'Ayams6.jpg', 'Eren_Yeager1.jpg', 'nadiem_makarim10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi`
--

CREATE TABLE `seleksi` (
  `nama_peserta` varchar(100) NOT NULL,
  `hasil_seleksi` enum('DITERIMA','DITOLAK','') NOT NULL,
  `nomor_pendaftaran` int(11) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seleksi`
--

INSERT INTO `seleksi` (`nama_peserta`, `hasil_seleksi`, `nomor_pendaftaran`, `tanggal_lahir`, `id`) VALUES
('Sintya Rahma', 'DITERIMA', 105466, '20 Juli 2007', 1),
('Ahmad subarjo', 'DITOLAK', 0, '23 mei 2006', 2),
('Siti marlina', 'DITERIMA', 0, '26 April 2007', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `has_seen_result` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `has_seen_result`) VALUES
(9, 'Rizky Pertama Indah', 'rizkysajara@gmail.com', 'nadiem_makarim.jpg', '$2y$10$tDET0O4k.ezbp/P/c2jDAuv68yoVYpKn7VC4.w3iYkQS8Is.CfrrW', 2, 1, 1719148706, 0),
(10, 'Rizky Mayang Sari', 'rizky@gmail.com', 'default.jpg', '$2y$10$mC.VYPFCwmbtGbT.9N0Oou/cUI/9pg1.qz2WN0P0dc5RTNt0QuuCy', 2, 1, 1719279360, 0),
(11, 'Fiski Alyanita', 'nita@gmail.com', 'nadiem_makarim1.jpg', '$2y$10$4rMs3U0sI2B3f0TGfOyuNOwahtkovDuRSsPYehxXOjJuoE9n20FRy', 1, 1, 1719293383, 0),
(12, 'Putri Khodijah', 'putri@gmail.com', 'default.jpg', '$2y$10$QBeVgplPZ/muFF6H6td9puXNAXDNtA2S47yrMyFjwpe306aE0hSXm', 2, 1, 1720138686, 0),
(13, 'Rikzy Alyanita', 'tyo@gmail.com', 'default.jpg', '$2y$10$v4KGhV8if98DN7wadcMUJ.KLnuxD6V5HEirOP2SfbCV84S/VOVphG', 2, 1, 1720147258, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(10, 2, 2),
(27, 2, 3),
(36, 1, 3),
(37, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(3, 2, 'Edit Profile', 'user/edit', 'bi fa-fw bi-person-gear', '1'),
(4, 3, 'Menu Management', 'menu', 'bi fa-fw bi-folder', '1'),
(5, 3, 'Submenu Management', 'menu/submenu', 'bi fa-fw bi-folder2', '1'),
(7, 1, 'Dashboard', 'admin/index', 'bi fa-fw bi-house', '1'),
(8, 2, 'Change Password', 'user/changepassword', 'bi fa-fw bi-pencil', '1'),
(9, 2, 'Nama Kelompok', 'user/namakelompok', 'bi fa-fw bi-collection', '1'),
(10, 1, 'Penerimaan Siswa', 'admin/penerimaansiswa', 'bi fa-fw bi-person-hearts', '1'),
(11, 1, 'Tabel Siswa', 'admin/tabelsiswa', 'bi fa-fw bi-table', '1'),
(12, 1, 'Role', 'admin/role', 'bi fa-fw bi-person-lock', '1'),
(13, 2, 'Registrasi Siswa', 'user/registrasisiswa', 'bi fa-fw bi-person-lines-fill', '1'),
(14, 2, 'Hasil Seleksi', 'user/hasilseleksi', 'bi fa-fw bi-envelope-paper', '1'),
(15, 2, 'Test Presentasi', 'user/testpresentasi', 'bi fa-fw bi-person-lock', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indexes for table `seleksi`
--
ALTER TABLE `seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `seleksi`
--
ALTER TABLE `seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
