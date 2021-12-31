-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 03:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinventarisperalatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblalat`
--

CREATE TABLE `tblalat` (
  `id_alat` char(20) NOT NULL,
  `id_kategori` char(20) NOT NULL,
  `id_lokasi` char(20) NOT NULL,
  `nama_peralatan` varchar(200) NOT NULL,
  `tahun_beli` date NOT NULL,
  `desc_alat` text NOT NULL,
  `jlh_port` text NOT NULL,
  `nama_wifi` varchar(200) NOT NULL,
  `pass_wifi` text NOT NULL,
  `frek_alat` text NOT NULL,
  `l_frek_alat` varchar(50) NOT NULL,
  `k_ram` text NOT NULL,
  `k_hardisk` text NOT NULL,
  `t_processor` text NOT NULL,
  `status_alat` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblalat`
--

INSERT INTO `tblalat` (`id_alat`, `id_kategori`, `id_lokasi`, `nama_peralatan`, `tahun_beli`, `desc_alat`, `jlh_port`, `nama_wifi`, `pass_wifi`, `frek_alat`, `l_frek_alat`, `k_ram`, `k_hardisk`, `t_processor`, `status_alat`) VALUES
('ALT001', 'KTA001', 'LOK002', 'PC-Diskominfo 001', '2021-12-01', 'Asus PC Core I7 - Office 2012', '-', '-', '-', '-', '-', '8 GB', '1200 GB', 'Core I7', 'Normal'),
('ALT003', 'KTA001', 'LOK002', 'PC-Diskominfo 003', '2021-12-20', 'PC + Server', '-', '-', '-', '-', '-', '6 GB', '900 GB', 'I7', 'Rusak Sementara'),
('ALT004', 'KTA001', 'LOK005', 'PC-Diskominfo 004', '2021-01-01', 'PC Windows 7 007', '-', '-', '-', '-', '-', '4 GB', '700 GB', 'I7', 'Normal'),
('ALT009', 'KTA001', 'LOK004', 'PC-Diskominfo 009', '2021-01-01', 'PC Asus + Windows 10 Pro + Office + Anti Virus 2021', '-', '-', '-', '-', '-', '6 GB', '500 GB', 'I5', 'Normal'),
('ALT012', 'KTA002', 'LOK005', 'MD-Dispen 001', '2021-01-01', 'Modem', '-', '-', '-', '-', '-', '-', '-', '-', 'Rusak Permanen'),
('ALT033', 'KTA004', 'LOK003', 'PR-Dishub 001', '2021-12-21', 'Epson Printer', '-', '-', '-', '-', '-', '-', '-', '-', 'Normal'),
('ALT036', 'KTA004', 'LOK004', 'PR-Dispen Kota Gusit 001', '2021-11-23', 'Canon Printer', '-', '-', '-', '-', '-', '-', '-', '-', 'Normal'),
('ALT074', 'KTA004', 'LOK004', 'PR-Dinas Perikanan 001', '2021-12-21', 'Printer - Scanner', '-', '-', '-', '-', '-', '-', '-', '-', 'Rusak Sementara'),
('ALT099', 'KTA004', 'LOK004', 'PR-Dispen Kota Gusit 002', '2021-12-21', 'HP Printer', '-', '-', '-', '-', '-', '-', '-', '-', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `tblgangguan`
--

CREATE TABLE `tblgangguan` (
  `id_gangguan` int(20) NOT NULL,
  `id_alat` char(20) NOT NULL,
  `tgl_gangguan` date NOT NULL,
  `ciri` text NOT NULL,
  `deskripsi_gangguan` text NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgangguan`
--

INSERT INTO `tblgangguan` (`id_gangguan`, `id_alat`, `tgl_gangguan`, `ciri`, `deskripsi_gangguan`, `status`) VALUES
(1, 'ALT001', '2021-12-02', 'Layar berkedip', 'Ketika menjalankan aplikasi Office untuk pertama kali setelah PC diaktifkan layar selalu berkedip.', 'S'),
(2, 'ALT012', '2021-12-21', '-', 'Tidak terkoneksi ke jaringan internet ketika digunakan', 'S'),
(3, 'ALT004', '2021-12-21', '-', 'Layar bergaris.', 'S'),
(4, 'ALT001', '2021-12-21', 'Windows error', 'Windows error dan berbunyi beep', 'S'),
(5, 'ALT009', '2021-12-21', '-', '-', 'S'),
(6, 'ALT074', '2021-12-21', '-', 'Hasil cetakan bergaris dan tulisan tidak bisa dibaca', 'S'),
(7, 'ALT004', '2021-12-30', '-', '-', 'S'),
(8, 'ALT074', '2021-12-30', 'Tinta putus-putus', 'Hasil print tinta hitam putus-putus dan kabur', 'B'),
(9, 'ALT003', '2021-12-30', '-', 'Tidak bisa membuka dokumen office word', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tblhistorilokasi`
--

CREATE TABLE `tblhistorilokasi` (
  `id_histori` int(20) NOT NULL,
  `id_alat` char(20) NOT NULL,
  `id_lokasi_a` char(20) NOT NULL,
  `id_lokasi_b` char(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhistorilokasi`
--

INSERT INTO `tblhistorilokasi` (`id_histori`, `id_alat`, `id_lokasi_a`, `id_lokasi_b`, `tgl`) VALUES
(2, 'ALT036', 'LOK002', 'LOK004', '2021-12-30'),
(3, 'ALT099', 'LOK002', 'LOK004', '2021-12-30'),
(4, 'ALT001', 'LOK001', 'LOK004', '2021-12-31'),
(6, 'ALT003', 'LOK001', 'LOK002', '2021-12-21'),
(7, 'ALT004', 'LOK001', 'LOK002', '2021-12-21'),
(8, 'ALT009', 'LOK001', 'LOK004', '2021-12-21'),
(9, 'ALT012', 'LOK002', 'LOK001', '2021-12-21'),
(10, 'ALT033', 'LOK003', '', '2021-12-21'),
(11, 'ALT004', 'LOK002', 'LOK003', '2021-12-21'),
(12, 'ALT004', 'LOK003', 'LOK005', '2021-12-22'),
(13, 'ALT074', 'LOK005', 'LOK004', '2021-12-21'),
(14, 'ALT074', 'LOK004', '', '0000-00-00'),
(15, 'ALT009', 'LOK004', '', '0000-00-00'),
(16, 'ALT003', 'LOK002', '', '0000-00-00'),
(17, 'ALT012', 'LOK001', 'LOK004', '2021-12-21'),
(18, 'ALT012', 'LOK004', 'LOK005', '2021-12-30'),
(19, 'ALT004', 'LOK005', '', '0000-00-00'),
(27, 'ALT036', 'LOK004', '', '0000-00-00'),
(28, 'ALT099', 'LOK004', '', '0000-00-00'),
(29, 'ALT012', 'LOK005', '', '0000-00-00'),
(30, 'ALT001', 'LOK004', 'LOK002', '2021-12-31'),
(31, 'ALT001', 'LOK002', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `id_kategori` char(20) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`id_kategori`, `nama_kategori`) VALUES
('KTA001', 'PC'),
('KTA002', 'Modem'),
('KTA003', 'Router'),
('KTA004', 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `tbllokasi`
--

CREATE TABLE `tbllokasi` (
  `id_lokasi` char(20) NOT NULL,
  `nama_lokasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllokasi`
--

INSERT INTO `tbllokasi` (`id_lokasi`, `nama_lokasi`) VALUES
('LOK001', 'Diskominfo Kota Gunungsitoli'),
('LOK002', 'Dinas Pendidikan Kota Gunungsitoli'),
('LOK003', 'Dishub Kota Gunungsitoli'),
('LOK004', 'Dinas Sosial Kota Gunungsitoli'),
('LOK005', 'Dinas Perikanan Kota Gunungsitoli');

-- --------------------------------------------------------

--
-- Table structure for table `tblpenanganan`
--

CREATE TABLE `tblpenanganan` (
  `id_penanganan` int(20) NOT NULL,
  `id_gangguan` char(20) NOT NULL,
  `tgl_penanganan` date NOT NULL,
  `teknisi` varchar(100) NOT NULL,
  `penyelesaian` text NOT NULL,
  `hasil` text NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpenanganan`
--

INSERT INTO `tblpenanganan` (`id_penanganan`, `id_gangguan`, `tgl_penanganan`, `teknisi`, `penyelesaian`, `hasil`, `rekomendasi`) VALUES
(1, '1', '2021-12-21', 'Yanto', 'Instal ulang driver VGA', 'Normal', 'Jangan menambahkan aplikasi yang mengubah setelan VGA'),
(2, '3', '2021-12-21', 'Eri', 'Ganti layar', 'Normal', 'Jangan menaruh beban pada layar'),
(3, '4', '2021-12-21', 'Rian', 'Instal ulang OS Windows', 'Normal', 'Sistem berjalan dengan baik jika menggunakan Windows 10'),
(4, '5', '2021-12-21', 'Hengki', '-', 'Normal', '-'),
(5, '2', '2021-12-21', 'Hengki', '-', 'Rusak Pemanen', 'Diganti dengan yang baru'),
(6, '6', '2021-12-29', '-', '-', 'Normal', 'Ok'),
(7, '7', '2021-12-30', 'Ray', '-', 'Normal', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblalat`
--
ALTER TABLE `tblalat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tblgangguan`
--
ALTER TABLE `tblgangguan`
  ADD PRIMARY KEY (`id_gangguan`);

--
-- Indexes for table `tblhistorilokasi`
--
ALTER TABLE `tblhistorilokasi`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbllokasi`
--
ALTER TABLE `tbllokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tblpenanganan`
--
ALTER TABLE `tblpenanganan`
  ADD PRIMARY KEY (`id_penanganan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgangguan`
--
ALTER TABLE `tblgangguan`
  MODIFY `id_gangguan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblhistorilokasi`
--
ALTER TABLE `tblhistorilokasi`
  MODIFY `id_histori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblpenanganan`
--
ALTER TABLE `tblpenanganan`
  MODIFY `id_penanganan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
