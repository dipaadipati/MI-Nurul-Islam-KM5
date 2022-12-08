-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurulislam`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `img`, `body`) VALUES
(1, 'Vaksinasi Covid-19 untuk Anak-Anak', 'galeri1.jpg', 'Pelaksanaan Vaksinasi Pertama Covid-19 yang Dilaksanakan oleh Puskesmas Pemurus Baru bekerja sama dengan MI. Nurul Islam Km. 5 Banjarmasin'),
(2, 'Milad ke-59 MI. Nurul Islam Km. 5', 'galeri2.jpg', 'Acara Peringatan Milad ke-59 (1 Januari 1963 - 1 Januari 2022) MI.Nurul Islam Km.5 dan Sedekah Jariyah Al Qur an serta Iqra'),
(3, 'Pelaksanaan Gladi ANBK Tahun 2021', 'galeri3.jpeg', 'Pelaksanaan Gladi ANBK untuk Siswa Kelas 5 Tahun Pelajaran 2021/2022 yang Dilaksanakan secara Mandiri dan Online oleh MI. Nurul Islam Km. 5 Banjarmasin'),
(4, 'Pelaksanaan PPKM Tahun 2021', 'galeri4.jpeg', 'Pelaksanaan Visitasi Penilaian Kinerja Kepala Madrasah (PKKM) di Madrasah Ibtidaiyah Nurul Islam Km. 5 Banjarmasin Tahun 2021'),
(5, 'Kegiatan Persami', 'galeri5.jpg', 'Kegiatan Persami Tahun 2016 yang dilaksanakan oleh MI. Nurul Islam Km. 5 Banjarmasin bersama Mahasiswa/i PPL 2 UIN Antasari Angkatan 2013'),
(6, 'Kegiatan Kurban', 'galeri6.jpg', 'Kegiatan Kurban Tahun 2018 yang dilaksanakan oleh MI. Nurul Islam Km. 5 Banjarmasin bersama Mahasiswa/i PPL 2 UIN Antasari Angkatan 2015');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Adipati', '$2y$10$Vdr5kKh/q9gnkGzzgcp.dOfAVthp6kN6SrrS/QgCSV7QvSH60uRFS', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
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
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
