-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagus_reservasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `user_id` int(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `kode_booking` varchar(128) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `adults` int(128) NOT NULL,
  `kids` int(128) NOT NULL,
  `check_in` int(11) NOT NULL,
  `check_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `username`, `user_id`, `tipe_kamar`, `kode_booking`, `tanggal_mulai`, `tanggal_selesai`, `adults`, `kids`, `check_in`, `check_out`) VALUES
(84, 'tono', 10, 'Deluxe', '1-10-22-11-22', '2022-11-22', '2022-11-23', 2, 2, 0, 0),
(85, 'ika', 14, 'Standar', '2-14-26-01-23', '2023-01-27', '2023-01-28', 1, 1, 0, 0),
(86, 'ika', 14, 'Double', '3-14-29-01-23', '2023-01-30', '2023-01-31', 1, 1, 0, 0),
(87, 'tono', 10, 'Double', '4-10-09-06-23', '2023-06-09', '2023-06-10', 1, 1, 0, 0),
(88, 'tono', 10, 'Standar', '5-10-09-06-23', '2023-06-10', '2023-06-11', 2, 2, 0, 0),
(89, 'tono', 10, 'Standar', '6-10-09-06-23', '2023-06-10', '2023-06-11', 2, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `ruangan_id` int(11) NOT NULL,
  `id_tipe_kamar` int(128) NOT NULL,
  `nomor_ruangan` int(255) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`ruangan_id`, `id_tipe_kamar`, `nomor_ruangan`, `status`) VALUES
(10, 11, 2, 'Cheked in'),
(13, 13, 4, 'Aviliable'),
(16, 11, 9, 'Cheked in'),
(18, 10, 9, 'Booked'),
(20, 0, 2147483647, 'Maintenence'),
(21, 11, 53486, 'Aviliable'),
(22, 14, 1236, 'Cheked in'),
(23, 9, 76, 'Maintenence'),
(24, 10, 12, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(128) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `tipe_harga` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id`, `nama_kamar`, `fasilitas_kamar`, `tipe_harga`, `img`, `tanggal_update`) VALUES
(9, 'Single', 'Tipe Single Room memiliki ranjang standar. Selain tempat tidur, perabot lain juga ditawarkan kepada tamu untuk menambah fungsionalitas ruangan seperti meja rias kecil, meja samping tempat tidur kecil, dan meja tulis dengan kursi tunggal', 300000, 'hotel3.png', '2022-09-13'),
(10, 'Deluxe', 'Tipe kamar Deluxe punya ukuran luas sekitar 40 meter persegi, dengan fasilitas yang mirip dengan kamar tipe Standard, ditambah beberapa fasilitas pendukung seperti coffee/tea maker, lemari es, kamar mandi plus shower, hingga view menarik di luar ruangan', 400000, 'hotel4.png', '2022-09-13'),
(11, 'Standar', 'Tipe President Suite mempunyai fasilitas seperti : Ruang penyimpanan laptop, Telepon IDD dan voicemail, Gratis internet berkecepatan tinggi, Setrika dan papan setrika, Soket internasional, Meja kerja, Mini bar gratis (minuman non-alkohol saja)', 350000, 'hotel1.png', '2022-09-13'),
(12, 'Double', 'Tipe Double mempunyai fasilitas seperti : Teras, Telepon, TV satelit, TV kabel, Brankas, AC, Kipas angin, Pemanas ruangan, Lantai kayu/parket, Lemari, Pengering rambut, Peralatan mandi, Toilet, Kamar mandi pribadi, Bathtub atau shower, Minibar, Lemari es, Jam alarm/layanan bangun tidur', 450000, 'hotel2.jpeg', '2022-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_pengguna`
--

CREATE TABLE `user_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` int(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `status` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_pengguna`
--

INSERT INTO `user_pengguna` (`id`, `username`, `password`, `nama`, `email`, `telepon`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gender`, `status`, `level`) VALUES
(10, 'tono', '$2y$10$VkBhnEqasNKoGyKfMqAFoebGMhfQA2HrsgufToszn3DnZWOxklI6S', 'Sartono', 'tono@gmail.com', 987654321, 'Krapyak', '2021-11-10', 'Krapyak', 'L', 'Kawin', '3'),
(13, 'heri', '$2y$10$/yqnOWiadSyzSEJosx5kfOQToHpI9JvRGeX9NAJgxUlBXcUlTL0.a', 'Herimau', 'herimau@gmail.com', 2147483647, 'Krapyak', '1988-06-20', 'Jogja', 'L', 'Kawin', '2'),
(14, 'ika', '$2y$10$/stsGdRf3uSYWZaNpajMzOBDAyTXhzIcgiECWNP/JZ197O/FTKm4u', 'Ika', 'ika@gmail.com', 812345678, 'Semarang', '2022-09-25', 'Jogja', 'P', 'Kawin', '3'),
(16, 'bagus', '$2y$10$2OFpr7yXyFssWKXYOVdfQunGn.0pKtnPnbcoVH9OVKQddDziS2WJG', 'Bagus Pradita', 'bagus@gmail.com', 2147483647, 'Semarang', '2022-10-06', 'Jogja', 'L', 'Kawin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
