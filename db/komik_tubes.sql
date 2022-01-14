-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:50 AM
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

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_id`, `komik_id`, `nama_chapter`, `total_gambar`) VALUES
(1, 1, 'Chapter 1', 8),
(2, 1, 'Chapter 2', 7),
(3, 3, 'Chapter 1', 22);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `gambar_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `nomor_gambar` int(11) NOT NULL,
  `file_gambar` varchar(50) NOT NULL
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
(3, 'adventure'),
(4, 'fantasy'),
(5, 'martial arts'),
(6, 'josei'),
(7, 'drama'),
(8, 'shounen');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `komik_id` int(100) NOT NULL,
  `nama_komik` varchar(255) NOT NULL,
  `cover_komik` varchar(100) NOT NULL,
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

INSERT INTO `komik` (`komik_id`, `nama_komik`, `cover_komik`, `kategori`, `deskripsi`, `waktu_rilis`, `waktu_update`, `total_views`, `total_chapter`) VALUES
(1, 'Solo Leveling', 'cover.png', 'Manhwa', '10 tahun yang lalu, setelah \"Gerbang\" yang menghubungkan dunia nyata dengan dunia monster terbuka, beberapa orang biasa, setiap hari menerima kekuatan untuk berburu monster di dalam Gerbang. Mereka dikenal sebagai \"Pemburu\". Namun, tidak semua Pemburu kuat. Nama saya Sung Jin-Woo, seorang Pemburu peringkat-E. Saya seseorang yang harus mempertaruhkan nyawanya di ruang bawah tanah paling rendah, \"Terlemah di Dunia\". Tidak memiliki keterampilan apa pun untuk ditampilkan, saya hampir tidak mendapatkan uang yang dibutuhkan dengan bertarung di ruang bawah tanah berlevel rendah… setidaknya sampai saya menemukan ruang bawah tanah tersembunyi dengan kesulitan tersulit dalam ruang bawah tanah peringkat-D! Pada akhirnya, saat aku menerima kematian, tiba-tiba aku menerima kekuatan aneh, log pencarian yang hanya bisa kulihat, rahasia untuk naik level yang hanya aku yang tahu! Jika saya berlatih sesuai dengan pencarian saya dan monster yang diburu, level saya akan naik. Berubah dari Hunter terlemah menjadi Hunter S-rank terkuat!', 2016, '2022-01-02', 442101, 2),
(2, 'Magic Emperor', 'komik1.webp', 'Manhwa', 'Zhuo Yifan adalah seorang kaisar sihir atau bisa di panggil kaisar iblis, karena dia mempunyai buku kaisar kuno yang di sebut buku sembilan rahasia dia menjadi sasaran semua ahli beradiri bahkan dia di khianati dan di bunuh oleh muridnya. Kemudian jiwanya masuk dan hidup kembali dalam seorang anak pelayan keluarga bernama Zhuo Fan.Karena suatu sihir iblis mengekangnya, dia harus menyatukan ingatan anak itu dan tidak bisa mengabaikan keluarga dan nona yang dia layaninya. Bagaimana kehidupan nya membangun kembali keluarganya dan kembali menjadi yang terkuat didaratan benua', 2018, '2022-01-09', 1720353, 2),
(3, 'Regina Rena – To the Unforgiveable', 'komik3.jpeg', 'Manhwa', '“Aku akan memberimu kesempatan. Kesempatan untuk dimaafkan.” Sang ayah membuang putrinya. Dan putri itu kembali dari neraka. Di sebuah kerajaan dengan keragaman hidup dan mati, Rena Rubel ditakdirkan untuk mati sebagai pengorbanan untuk ayahnya. Tapi enam tahun kemudian, gadis yang semua orang mengira telah mati, hidup kembali. Melepas topeng domba kecil, dan menjadi singa.', 2021, '2022-01-10', 21117, 2),
(4, 'Max Level Returner', 'komik4.jpg', 'Manhwa', '120 juta orang telah hilang di seluruh dunia. [Hadiah Penyelesaian Misi Akhir: \'Kembali\' Diaktifkan] Untuk pertama kalinya dalam 22 tahun, Yoon Sang-Hyuk menyelesaikan game bertahan hidup terburuk di dunia. Dia, yang disebut orang terkuat di antara semua pemain lain, yang memiliki semua item hadiah bahkan yang tidak dapat diperoleh orang lain, telah kembali.', 2020, '2022-01-12', 1301190, 2),
(5, 'Talent-Swallowing Magician', 'komik2.webp', 'Manhua', 'Elric Melvinger. Pewaris kekuasan dari keluarga sihir terkemuka. Dia tidak memiliki ‘Talent’ dari lahir, sebagai akibatnya dia tidak bisa mempelajari ilmu sihir. namun, dia mendapatkan ‘Blessing’ dari leluhurnya! [Makan Demon] [Telan Demon] [Minum darah Demon] [ Akan aku Kumpulkan Sebanyak-banyaknya demon dalam diriku, dan dapatkan Sihir baru!] Aku akan bertambah kuat. Sangat kuat sampai tidak ada yang mampu mengalahkanku.', 2021, '2022-01-05', 225101, 2);

-- --------------------------------------------------------

--
-- Table structure for table `list_genre`
--

CREATE TABLE `list_genre` (
  `list_genre_id` int(11) NOT NULL,
  `komik_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_genre`
--

INSERT INTO `list_genre` (`list_genre_id`, `komik_id`, `genre_id`) VALUES
(4, 1, 1),
(5, 1, 3),
(6, 1, 4),
(7, 2, 1),
(8, 2, 3),
(9, 2, 4),
(10, 2, 5),
(11, 3, 6),
(12, 3, 7),
(13, 3, 4),
(14, 3, 2),
(15, 4, 1),
(16, 4, 3),
(17, 4, 4),
(18, 5, 8),
(19, 5, 1),
(20, 5, 7),
(21, 5, 4);

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
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`gambar_id`),
  ADD KEY `gambar_gambar_id_chapter_chapter_id_fk` (`chapter_id`);

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
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `komik_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list_genre`
--
ALTER TABLE `list_genre`
  MODIFY `list_genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_chapter_id_komik_komik_id_fk` FOREIGN KEY (`komik_id`) REFERENCES `komik` (`komik_id`);

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_gambar_id_chapter_chapter_id_fk` FOREIGN KEY (`chapter_id`) REFERENCES `chapter` (`chapter_id`);

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
