-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komik_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chapter_id` int(11) NOT NULL,
  `komik_id` int(100) NOT NULL,
  `nama_chapter` varchar(255) NOT NULL,
  `total_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `nama_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `nama_genre`) VALUES
(1, 'action'),
(2, 'romance'),
(3, 'adventure');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `komik_id` int(100) NOT NULL,
  `nama_komik` varchar(255) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `waktu_rilis` year(4) NOT NULL,
  `waktu_update` date NOT NULL,
  `total_views` int(11) NOT NULL,
  `total_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`komik_id`, `nama_komik`, `kategori`, `deskripsi`, `waktu_rilis`, `waktu_update`, `total_views`, `total_chapter`) VALUES
(1, 'Solo Leveling', 'Manhwa', '10 tahun yang lalu, setelah \"Gerbang\" yang menghubungkan dunia nyata dengan dunia monster terbuka, beberapa orang biasa, setiap hari menerima kekuatan untuk berburu monster di dalam Gerbang. Mereka dikenal sebagai \"Pemburu\". Namun, tidak semua Pemburu kuat. Nama saya Sung Jin-Woo, seorang Pemburu peringkat-E. Saya seseorang yang harus mempertaruhkan nyawanya di ruang bawah tanah paling rendah, \"Terlemah di Dunia\". Tidak memiliki keterampilan apa pun untuk ditampilkan, saya hampir tidak mendapatkan uang yang dibutuhkan dengan bertarung di ruang bawah tanah berlevel rendah… setidaknya sampai saya menemukan ruang bawah tanah tersembunyi dengan kesulitan tersulit dalam ruang bawah tanah peringkat-D! Pada akhirnya, saat aku menerima kematian, tiba-tiba aku menerima kekuatan aneh, log pencarian yang hanya bisa kulihat, rahasia untuk naik level yang hanya aku yang tahu! Jika saya berlatih sesuai dengan pencarian saya dan monster yang diburu, level saya akan naik. Berubah dari Hunter terlemah menjadi Hunter S-rank terkuat!', 2016, '2022-01-02', 442101, 2);

-- --------------------------------------------------------

--
-- Table structure for table `list_genre`
--

CREATE TABLE `list_genre` (
  `list_genre_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `komik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `chapter_chapter_id_komik_komik_id_fk` (`komik_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`komik_id`);

--
-- Indexes for table `list_genre`
--
ALTER TABLE `list_genre`
  ADD PRIMARY KEY (`list_genre_id`),
  ADD KEY `list_genre_list_genre_id_genre_genre_id_fk` (`genre_id`),
  ADD KEY `list_genre_list_genre_id_komik_komik_id_fk` (`komik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `komik_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_genre`
--
ALTER TABLE `list_genre`
  MODIFY `list_genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_chapter_id_komik_komik_id_fk` FOREIGN KEY (`komik_id`) REFERENCES `komik` (`komik_id`);

--
-- Constraints for table `list_genre`
--
ALTER TABLE `list_genre`
  ADD CONSTRAINT `list_genre_list_genre_id_genre_genre_id_fk` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `list_genre_list_genre_id_komik_komik_id_fk` FOREIGN KEY (`komik_id`) REFERENCES `komik` (`komik_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
