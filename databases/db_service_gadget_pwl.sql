-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 03:26 PM
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
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `posisi` enum('admin','teknisi') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `password`, `posisi`, `email`) VALUES
('ID001', 'Nanda', '$2y$10$LJqA3ovUg5YqkSHZnUV5jeEpiqqNwfxbJdHbOSLNBSEl8MpxgSCKm', 'admin', 'ivanvaldez@shal2kboy.online'),
('ID002', 'martin', '$2y$10$NJi6GwzsLL47k9AAzKdzWuzqWnPs8dnIKZYM8Qwkjed1KoHyQXtJS', 'admin', 'erickfimansyah032@gmail.com'),
('ID003', 'Adit', '$2y$10$q3QBcHr6KUoxurJgYHeM5ueSTqxQHKKWYlddf62N/l/ns5yhCLsiO', 'admin', 'afifdhiya09@gmail.com'),
('TK001', 'Abiyu', '$2y$10$faRZHbGFbJJBoQTnOeJ8V.8ot7xhY4p1p7fDDz5CyT.bvWu//HngK', 'teknisi', 'naufal.rafif.2004@gmail.com');

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
('P001', 'Cindy ', 'Wanita', '018293812093', 'Di Condet', '2025-05-29 18:58:00'),
('P002', 'Ahmad Nur', 'Pria', '081231290803', 'DI PS MINGGU', '2025-05-28 09:15:00'),
('P003', 'Reza Alfi', 'Pria', '09128009999', 'di cibubur jk', '2025-05-29 09:16:00'),
('P004', 'Ruby', 'Wanita', '01820391830', 'Di jakarta', '2025-05-13 17:00:00'),
('P005', 'Sandy Abdillah', 'Pria', '98798546', 'Condet', '2025-05-28 18:51:00'),
('P006', 'Kharisma', 'Wanita', '019283091', 'Condet', '2025-05-29 15:12:00'),
('P007', 'Gilang', 'Pria', '019283019238', 'DI Ranco', '2025-05-29 21:52:00'),
('P008', 'Santi', 'Wanita', '8979879798', 'bojong', '2025-06-02 20:11:00');

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
('S001', 'Ganti Baterai Laptop', 99990),
('S002', 'Ganti layar laptop', 99999),
('S003', 'Bersihin laptop', 74999),
('S005', 'Ganti LCD Handphone', 75000),
('S006', 'Ganti Baterai HP Android', 75000);

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
('B001', 'Baterai Laptop Asus TUF 15', 500000, 'Baterai', 'Asus', 20),
('B002', 'Layar Laptop Lenovo LOQ 15', 350000, 'Layar Laptop', 'Lenovo', 20),
('B003', 'Charger Laptop Redmi', 450000, 'Charger Laptop', 'Xiaomi', 10),
('B004', 'CPU', 5000000, 'rakit PC', 'Legion', 3),
('SP005', 'motherboard', 5000, 'rakit PC', 'ROG', 7),
('SP006', 'Keyboard Axio', 50000, 'Keyobard Laptop', 'AXio', 5);
-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(15) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_service` char(10) NOT NULL,
  `id_teknisi` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status_service` enum('Menunggu','Dikerjakan','Selesai','Diambil') NOT NULL,
  `kerusakan` text NOT NULL,
  `tindakan` text NOT NULL,
  `total_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_service`, `id_teknisi`, `tanggal_masuk`, `tanggal_selesai`, `status_service`, `kerusakan`, `tindakan`, `total_biaya`) VALUES
('TR202506082930', 'PLG004', 'S001', 'TK001', '2025-06-08', '0000-00-00', 'Dikerjakan', 'hjb', '', 150000),
('TR202506083838', 'PLG002', 'S001', 'TK001', '2025-06-08', '0000-00-00', 'Dikerjakan', 'Salah Charger', '', 150000),
('TR202506119921', 'PLG003', 'S003', 'TK001', '2025-06-11', '0000-00-00', 'Dikerjakan', 'layar', '', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_sparepart`
--

CREATE TABLE `transaksi_sparepart` (
  `id_transaksi_sparepart` char(15) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_sparepart`
--

INSERT INTO `transaksi_sparepart` (`id_transaksi_sparepart`, `kd_barang`, `jumlah`) VALUES
('TR202506082930', 'B001', 0),
('TR202506083838', 'B001', 0),
('TR202506119921', 'B001', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

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

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_sparepart`
--
ALTER TABLE `transaksi_sparepart`
  ADD PRIMARY KEY (`id_transaksi_sparepart`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
