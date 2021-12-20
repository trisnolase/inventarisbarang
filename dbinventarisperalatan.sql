-- phpMyAdmin SQL Dump 1
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 12:06 PM
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
('ALT001', 'KTA001', 'LOK001', 'PC-Diskominfo', '2021-12-08', 'Asus PC Core I7', '-', '-', '-', '-', '-', '6 GB', '850 GB', 'Core I7', 'Normal'),
('ALT003', 'KTA001', 'LOK001', 'PC-Diskominfo 003', '2021-12-20', 'PC', '-', '-', '-', '-', '-', '6 GB', '700 GB', 'I7', 'Normal'),
('ALT004', 'KTA001', 'LOK001', 'PC-Diskominfo 004', '2021-01-01', 'PC U 004', '-', '-', '-', '-', '-', '4 GB', '700 GB', 'I7', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `tblgangguan`
--

CREATE TABLE `tblgangguan` (
  `id_gangguan` char(20) NOT NULL,
  `id_alat` char(20) NOT NULL,
  `tgl_gangguan` date NOT NULL,
  `ciri` text NOT NULL,
  `deskripsi_gangguan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblhistorilokasi`
--

CREATE TABLE `tblhistorilokasi` (
  `id_histori` char(20) NOT NULL,
  `id_alat` char(20) NOT NULL,
  `id_lokasi_a` char(20) NOT NULL,
  `id_lokasi_b` char(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('KTA001', 'PC');

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
('LOK001', 'Diskominfo Kota Gunungsitoli');

-- --------------------------------------------------------

--
-- Table structure for table `tblpenanganan`
--

CREATE TABLE `tblpenanganan` (
  `id_penanganan` char(20) NOT NULL,
  `id_gangguan` char(20) NOT NULL,
  `tgl_penanganan` date NOT NULL,
  `teknisi` varchar(100) NOT NULL,
  `penyelesaian` text NOT NULL,
  `hasil` text NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
