-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 10:58 AM
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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `img`, `body`) VALUES
(8, 'Upacara Bendera', 'artikel1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in lacus finibus, pulvinar mi ut, feugiat massa. Fusce commodo magna mi, ac tristique orci molestie elementum. Nam non diam laoreet, tincidunt nunc in, facilisis sapien. Donec et orci at nulla tristique volutpat. Morbi blandit commodo diam, aliquam tincidunt neque pretium vel. Praesent ornare mollis faucibus. Phasellus vel ligula sed nisi commodo fermentum pharetra pulvinar ex. Donec venenatis dolor vitae malesuada varius.'),
(9, 'Study Tour', 'artikel2.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in lacus finibus, pulvinar mi ut, feugiat massa. Fusce commodo magna mi, ac tristique orci molestie elementum. Nam non diam laoreet, tincidunt nunc in, facilisis sapien.');

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
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `kurikulum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `kurikulum`) VALUES
(1, 'Kurikulum yang digunakan dalam proses belajar mengajar di MIS. Nurul Islam KM. 5 Banjarmasin adalah menggunakan Kurikulum 2013 (K-13) untuk semua mata pelajaran.');

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
(1, 'Adipati', '$2y$10$Vdr5kKh/q9gnkGzzgcp.dOfAVthp6kN6SrrS/QgCSV7QvSH60uRFS', 'admin'),
(3, 'Amad', '$2y$10$ZXj10baZ5xf7EcIta3GIO.9Xx3bT4aK9EEHaWwA1xzUqu4iTz69ne', 'murid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
