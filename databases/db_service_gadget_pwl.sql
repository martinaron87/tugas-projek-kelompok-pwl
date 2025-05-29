-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 04:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_service_gadget_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `nomor_telepon` char(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `nomor_telepon`, `alamat`, `tanggal`) VALUES
('001', 'Carmila', 'Wanita', '000', 'Land Of Dawn Number 1', '2025-05-29 18:58:00'),
('002', 'Ahmad Nur', 'Pria', '081231290803', 'DI PS MINGGU', '2025-05-28 09:15:00'),
('003', 'Reza Alfi', 'Pria', '09128009999', 'di cibubur jk', '2025-05-29 09:16:00'),
('004', 'Amelia', 'Wanita', '08129038102', 'aioudoaisd', '2025-05-28 09:10:00'),
('005', 'Sandy Abdillah', 'Pria', '98798546', 'Condet', '2025-05-28 18:51:00'),
('006', 'Kharisma', 'Wanita', '019283091', 'Condet', '2025-05-29 15:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` char(10) NOT NULL,
  `jenis_service` varchar(255) NOT NULL,
  `biaya_service` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `jenis_service`, `biaya_service`) VALUES
('S001', 'Ganti Baterai Laptop', 149999),
('S002', 'Ganti layar laptop', 99999),
('S003', 'Bersihin laptop', 74999),
('S004', 'Solder ulang komponen', 39999);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `kd_barang` char(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` mediumint(9) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `merk_barang` varchar(255) NOT NULL,
  `jumlah_barang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`kd_barang`, `nama_barang`, `harga_barang`, `jenis_barang`, `merk_barang`, `jumlah_barang`) VALUES
('B001', 'Baterai Laptop Asus TUF 15', 499999, 'Baterai', 'Asus', 19),
('B002', 'Layar Laptop Lenovo LOQ 15', 349999, 'Layar Laptop', 'Lenovo', 19),
('B003', 'Charger Laptop Redmi', 450000, 'Charger Laptop', 'Xiaomi', 10),
('B004', 'ADATA SODIMM 8GB 4800MHz', 349999, 'Ram laptop', 'ADATA', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`kd_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
