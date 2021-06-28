-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2021 at 02:45 PM
-- Server version: 10.5.9-MariaDB-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `siswa_nama` varchar(255) NOT NULL,
  `siswa_nisn` varchar(255) NOT NULL,
  `siswa_tempat` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `siswa_jk` varchar(255) NOT NULL,
  `siswa_agama` varchar(255) NOT NULL,
  `siswa_sekolah` varchar(255) NOT NULL,
  `nilai_mtk` varchar(255) NOT NULL,
  `nilai_inggris` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Menunggu',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `user_id`, `siswa_nama`, `siswa_nisn`, `siswa_tempat`, `tanggal_lahir`, `foto`, `siswa_jk`, `siswa_agama`, `siswa_sekolah`, `nilai_mtk`, `nilai_inggris`, `status`, `created_at`) VALUES
(3, '3', 'Ridho Al', '12344321', 'Bandar Lampung', '2021-06-25', '', 'Pria', 'Islam', 'SMPN 22 Bandar  Lampung', '90', '90', 'Terima', '2021-06-27 18:15:30'),
(4, '4', 'Bobby Malela', '12332112', 'Bandar Lampung', '2021-06-26', '', 'Pria', 'Islam', 'SMPN 22 Bandar  Lampung', '80', '80', 'Cadang', '2021-06-27 18:21:39'),
(5, '5', 'Arbi Hidayatullah', '12332112', 'Bandar Lampung', '2021-06-05', '', 'Pria', 'Islam', 'SMPN 22 Bandar  Lampung', '70', '80', 'Terima', '2021-06-28 03:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 2,
  `status` varchar(10) NOT NULL DEFAULT 'belum',
  `nama_lengkap` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role`, `status`, `nama_lengkap`, `user_name`, `user_password`, `user_created_at`) VALUES
(1, 1, 'belum', 'admin', 'admin', '$2y$10$g6bbBDl43SrFBL7AH3q//.fm8que7ItqwV6ouejspIzARhPwoHGBe', '2021-06-27 18:11:21'),
(3, 2, 'proses', 'Ridho Al', 'ridhoal', '$2y$10$XItowAh3oORS4anRaSJ0sO3nn35U8AKtSLaVOO0KwMf4eM1Ymlb9y', '2021-06-27 18:19:54'),
(4, 2, 'proses', 'Bobby Malela', 'bobby123', '$2y$10$QvAWRtMuJCDy4ZrPwfYIVOdr57KNQBrqt6zDg1jnLgIFoYftQVRYe', '2021-06-27 18:21:20'),
(5, 2, 'proses', 'Arbi Hidayatullah', 'arbi123', '$2y$10$HZH0yiVDuJd5sM6zMdDfrunaOfTLLQMLBoHYG43KN9Ny/wKrhqIq6', '2021-06-28 03:22:47'),
(6, 2, 'belum', 'Firaz yn', 'firaz123', '$2y$10$X0b5iCW3QVP8lEEa1IJx6uoYem4Jgd7NKXB73bARi2jDuvApRpoGu', '2021-06-28 03:31:07'),
(7, 2, 'belum', 'ashiddiqi', 'ashiddiqi', '$2y$10$qs9mIPEBcx/wfFjXGMX2BuwirUoYZ3OyY0ZVICPLWKdJ.LlNmE4Ka', '2021-06-28 03:31:50'),
(8, 2, 'belum', 'Muhammad Nur', 'mnashiddiqi', '$2y$10$XLXfTdZZ5/4r59t0H99lhuVxlro4EsTdyQ7ZPxf63n3uQqpBzRY.C', '2021-06-28 13:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
