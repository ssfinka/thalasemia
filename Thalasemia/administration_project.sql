-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 05:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administration_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `nama`, `email`, `password`, `tanggal_lahir`, `no_telp`, `username`) VALUES
(1, 'Master Admin', 'masteradmin@gmail.com', 'master', '2000-01-01', '081389018349', 'masteradmin');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `image`, `nama`, `nama_tugas`, `deskripsi`) VALUES
(1, '2024-03-01', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(9, '2024-03-01', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(12, '2024-03-01', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(13, '2024-03-01', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(14, '2024-03-01', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(15, '2024-03-17', 'avatar.png', 'Alfin Alfonso', 'Maintenance Website', 'Maintenance semua web yang ada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `nama`, `tanggal_lahir`, `email`, `password`, `no_telp`, `peran`) VALUES
(1, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(2, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(3, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(4, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(5, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(6, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(8, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(9, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(10, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', 'username', '081234567890', 'Admin'),
(12, 'avatar.png', 'Ini user percobaan', '2008-06-17', 'userpercobaan1@gmail.com', 'usercoba', '089842323798', 'admin'),
(13, 'avatar.png', 'Ini user percobaan', '2024-03-10', 'wdw@gmail.com', 'wdw', '0888888', 'karyawan'),
(14, 'avatar.png', 'Ini user percobaan', '2024-03-10', 'wdw@gmail.com', 'wdw', '0888888', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
