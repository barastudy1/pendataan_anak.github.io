-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 05:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_anak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anak`
--

CREATE TABLE `tb_anak` (
  `NIK` varchar(25) NOT NULL,
  `kd_sekolah` varchar(7) NOT NULL,
  `kd_padukuhan` varchar(7) NOT NULL,
  `nama_anak` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `usia` int(5) NOT NULL,
  `Jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `jml_pendapatan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anak`
--

INSERT INTO `tb_anak` (`NIK`, `kd_sekolah`, `kd_padukuhan`, `nama_anak`, `tempat_lahir`, `tanggal_lahir`, `usia`, `Jenis_kelamin`, `agama`, `alamat`, `nama_ibu`, `nama_ayah`, `pekerjaan_ibu`, `pekerjaan_ayah`, `jml_pendapatan`) VALUES
('12345A1', 'SMP01', 'DK01_1', 'Ahmad Dahlan', 'Sleman', '11/07/2008', 13, 'Laki-Laki', 'Islam', 'Babadan', 'Zahra', 'Heru', 'Ibu Rumah Tangga', 'Pegawai Negeri Sipil', 7000000),
('12345A2', 'SMP01', 'DK02_1', 'Aan Setiyawan', 'Yogyakarta', '07/17/2008', 13, 'Laki-Laki', 'Islam', 'Pokoh', 'Sayuti', 'Parman', 'Ibu Rumah Tangga', 'Wiraswasta', 7000000),
('12345A3', 'SMP01', 'DK03_1', 'Gigih Adi', 'Sleman', '03/11/2008', 13, 'Laki-Laki', 'Islam', 'Karangsari', 'Sofia', 'Sulaiman', 'Pegawai Negeri Sipil', 'Wiraswasta', 17000000),
('12345A4', 'SMP02', 'DK04_1', 'Erika Fatmawati', 'Sleman', '01/11/2007', 14, 'Perempuan', 'Kristen', 'Krapyak', 'Susi', 'Yosep', 'Ibu Rumah Tangga', 'Karyawan', 3500000),
('12345A5', 'SMP01', 'DK01_1', 'Fatimah', 'Sleman', '12/18/2007', 13, 'Perempuan', 'Islam', 'Babadan', 'Zahra', 'Zainudin', 'Karyawan', 'Wiraswasta', 13000000),
('12345A6', 'SD01', 'DK01_3', 'Bagus Oktavian', 'Sleman', '11/17/2013', 8, 'Laki-Laki', 'Islam', 'Wonorejo', 'Siti', 'Dzakaria', 'Karyawan', 'Karyawan', 7500000),
('12345A7', 'SD01', 'DK03_2', 'Duta ', 'Yogyakarta', '03/11/2014', 7, 'Laki-Laki', 'Hindu', 'Kenayan', 'Purwanti', 'Purwanto', 'Wiraswasta', 'Karyawan', 9000000),
('12345A8', 'SD03', 'DK01_4', 'Cinta Latifah', 'Sleman', '12/18/2012', 8, 'Perempuan', 'Islam', 'Sempu', 'Asiyah', 'Rahmat', 'Ibu Rumah Tangga', 'Wiraswasta', 9000000),
('12345A9', 'SD02', 'DK01_1', 'Anggoro', 'Yogyakarta', '08/09/2010', 11, 'Laki-Laki', 'Islam', 'Babadan', 'Fauziah', 'Fauzan', 'Ibu Rumah Tangga', 'Karyawan', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nav`
--

CREATE TABLE `tb_nav` (
  `id_menu` int(10) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nav`
--

INSERT INTO `tb_nav` (`id_menu`, `menu`, `link`, `role`) VALUES
(1, 'Home', 'Beranda', 1),
(2, 'Data Anak', 'anak', 1),
(3, 'Data Padukuhan', 'Padukuhan', 1),
(4, 'Data Sekolah', 'Sekolahan', 1),
(5, 'Informasi', 'informasi', 1),
(6, 'Laporan', 'Laporan', 1),
(7, 'Logout', 'Ceklogin/Logout', 1),
(8, 'Home', 'Beranda', 2),
(9, 'Data Anak', 'anak', 2),
(10, 'Informasi', 'informasi', 2),
(11, 'Logout', 'Ceklogin/Logout', 2),
(12, 'Home', 'Beranda', 3),
(13, 'Informasi', 'informasi', 3),
(14, 'Logout', 'Ceklogin/Logout', 3),
(15, 'Home', 'Beranda', 4),
(16, 'Laporan', 'Laporan', 4),
(17, 'Informasi', 'informasi', 4),
(18, 'Logout', 'Ceklogin/Logout', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_padukuhan`
--

CREATE TABLE `tb_padukuhan` (
  `kd_padukuhan` varchar(7) NOT NULL,
  `nama_padukuhan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_padukuhan`
--

INSERT INTO `tb_padukuhan` (`kd_padukuhan`, `nama_padukuhan`) VALUES
('DK01_1', 'Padukuhan Babadan'),
('DK01_2', 'Padukuhan Saren'),
('DK01_3', 'Padukuhan Wonorejo'),
('DK01_4', 'Padukuhan Demangan'),
('DK01_5', 'Padukuhan Gedongan Lor'),
('DK01_6', 'Padukuhan Sawahan Lor '),
('DK01_7', 'Padukuhan Sawahan Kidul'),
('DK02_1', 'Padukuhan Pokoh'),
('DK02_2', 'Padukuhan Wonosari'),
('DK02_3', 'Padukuhan Gondanglegi'),
('DK02_4', 'Padukuhan Sempu '),
('DK02_5', 'Padukuhan Pucanganom'),
('DK03_1', 'Padukuhan Karangsari'),
('DK03_2', 'Padukuhan Kenayan'),
('DK03_3', 'Padukuhan Kregan'),
('DK03_4', 'Padukuhan Tegalsari'),
('DK03_5', 'Padukuhan Malangrejo'),
('DK03_6', 'Padukuhan Blotan'),
('DK04_1', 'Padukuhan Krapyak'),
('DK04_2', 'Padukuhan Bakungan'),
('DK04_3', 'Badukuhan Jetis'),
('DK04_4', 'Padukuhan Krajan'),
('DK04_5', 'Padukuhan Karanganyar'),
('DK04_6', 'Padukuhan Ceper'),
('DK04_7', 'Padukuhan Krandon');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`, `nama`, `role`) VALUES
('admind1', '$2y$10$B6d1RLHFrptYNXrZQb1UqubhsTVYJXfwYr08/XaZutIvXg9T8yb7G', 'Asti', 2),
('admink1', '$2y$10$bm1l6nkL33NULu8kDF.BEOnX3dFlNWB7ujIZXkAVuP7nQ.uL/0W5m', 'Asih', 1),
('kades', '$2y$10$YqT8xo03BEhjU0E98yyy3uvmuHFg2GvM3p5VFAM4545CI494YsIXO', 'kepala desa', 4),
('masy1', '$2y$10$oobKkx6Fd3wuxMfRvuS3H.7uA3Xk1cYUDxWhDx7W/hNGK6a0Khhyi', 'ari', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `kd_sekolah` varchar(7) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`kd_sekolah`, `nama_sekolah`, `alamat_sekolah`) VALUES
('SD01', 'SDN Wedomartani 1', 'Wedomartani'),
('SD02', 'SDN Wedomartani 2', 'Wedomartani 2'),
('SD03', 'SD Pelita Harapan', 'Sleman'),
('SMP01', 'SMP Negeri 1 Sleman', 'Sleman'),
('SMP02', 'SMP Negeri 2 Sleman', 'Sleman'),
('SMP03', 'SMPN 3 Sleman', 'Sleman'),
('SMP04', 'SMP Takmirul Islam', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tb_nav`
--
ALTER TABLE `tb_nav`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_padukuhan`
--
ALTER TABLE `tb_padukuhan`
  ADD PRIMARY KEY (`kd_padukuhan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`kd_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nav`
--
ALTER TABLE `tb_nav`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
