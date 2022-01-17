-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 02:59 AM
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
  `nama_chapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_id`, `komik_id`, `nama_chapter`) VALUES
(1, 1, 'Chapter 0'),
(2, 1, 'Chapter 1'),
(3, 3, 'Chapter 1'),
(4, 3, 'Chapter 2'),
(5, 4, 'Chapter 1'),
(6, 4, 'Chapter 2'),
(7, 2, 'Chapter 1'),
(8, 2, 'Chapter 2'),
(9, 5, 'Chapter 0'),
(10, 5, 'Chapter 1');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `gambar_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `file_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`gambar_id`, `chapter_id`, `file_gambar`) VALUES
(1, 1, 'https://i.ibb.co/S3n9xDv/1.png'),
(2, 1, 'https://i.ibb.co/jM8KYmN/2.png'),
(3, 1, 'https://i.ibb.co/qC6tvKz/3.png'),
(4, 1, 'https://i.ibb.co/74gkCYM/4.png'),
(5, 1, 'https://i.ibb.co/gFDr8qx/5.png'),
(6, 1, 'https://i.ibb.co/G9SSqkg/6.png'),
(7, 1, 'https://i.ibb.co/XXMZh7p/7.png'),
(8, 1, 'https://i.ibb.co/b7QQPgC/8.png'),
(9, 2, 'https://i.ibb.co/z8cMYQc/1.jpg'),
(10, 2, 'https://i.ibb.co/5cK7sq9/2.jpg'),
(11, 2, 'https://i.ibb.co/M7b2pMc/3.jpg'),
(12, 2, 'https://i.ibb.co/JmHDwrs/4.jpg'),
(13, 2, 'https://i.ibb.co/N6wPqpJ/5.jpg'),
(14, 2, 'https://i.ibb.co/RhBtn7R/6.jpg'),
(15, 2, 'https://i.ibb.co/LZ5t16x/7.jpg'),
(16, 3, 'https://i.ibb.co/s1VcKmF/1.png'),
(17, 3, 'https://i.ibb.co/Dp8f6pz/2.png'),
(18, 3, 'https://i.ibb.co/tHkRdMb/3.png'),
(19, 3, 'https://i.ibb.co/CPSjdQh/4.png'),
(20, 3, 'https://i.ibb.co/Dt9Ng3q/5.png'),
(21, 3, 'https://i.ibb.co/59zB7LZ/6.png'),
(22, 3, 'https://i.ibb.co/3RYCvbS/7.png'),
(23, 3, 'https://i.ibb.co/Kz505Y7/8.png'),
(24, 3, 'https://i.ibb.co/wym6gqB/9.png'),
(25, 3, 'https://i.ibb.co/D8xMPT5/10.png'),
(26, 3, 'https://i.ibb.co/H4Jqzpp/11.png'),
(27, 3, 'https://i.ibb.co/CK43Nw0/12.png'),
(28, 3, 'https://i.ibb.co/HgDjz95/13.png'),
(29, 3, 'https://i.ibb.co/myKF6LV/14.png'),
(30, 3, 'https://i.ibb.co/Yt4L6xM/15.png'),
(31, 3, 'https://i.ibb.co/cTgWjsX/16.png'),
(32, 3, 'https://i.ibb.co/YLWxYCD/17.png'),
(33, 3, 'https://i.ibb.co/Xzx29gc/18.png'),
(34, 3, 'https://i.ibb.co/N2Rwtyz/19.png'),
(35, 3, 'https://i.ibb.co/bQ2DP4d/20.png'),
(36, 3, 'https://i.ibb.co/9yY5jPf/21.png'),
(37, 3, 'https://i.ibb.co/93KxqBv/22.png'),
(38, 4, 'https://i.ibb.co/gJVc41H/01.jpg'),
(39, 4, 'https://i.ibb.co/KGZ7QPY/02.jpg'),
(40, 4, 'https://i.ibb.co/dPXkgHh/03.jpg'),
(41, 4, 'https://i.ibb.co/P4cN7wx/04.jpg'),
(42, 4, 'https://i.ibb.co/g6db8Y8/05.jpg'),
(43, 4, 'https://i.ibb.co/yF6bN0z/06.jpg'),
(44, 4, 'https://i.ibb.co/zxvrcVQ/07.jpg'),
(45, 4, 'https://i.ibb.co/9g0X4j6/08.jpg'),
(46, 4, 'https://i.ibb.co/G2N9LDx/09.jpg'),
(47, 4, 'https://i.ibb.co/SJ7WT9p/10.jpg'),
(48, 4, 'https://i.ibb.co/s3LHm81/11.jpg'),
(49, 4, 'https://i.ibb.co/Sxh0tzG/12.jpg'),
(50, 4, 'https://i.ibb.co/rwr8cXQ/13.jpg'),
(51, 4, 'https://i.ibb.co/nDvGcjB/14.jpg'),
(52, 4, 'https://i.ibb.co/X4wB4wg/15.jpg'),
(53, 4, 'https://i.ibb.co/phFcZFM/16.jpg'),
(54, 4, 'https://i.ibb.co/yq1zs72/17.jpg'),
(55, 4, 'https://i.ibb.co/xfs41X3/18.jpg'),
(56, 4, 'https://i.ibb.co/vmF1qtj/19.jpg'),
(57, 4, 'https://i.ibb.co/V2BQpMP/20.jpg'),
(58, 4, 'https://i.ibb.co/qMmmY6J/21.jpg'),
(59, 4, 'https://i.ibb.co/tzX0dLW/22.jpg'),
(60, 4, 'https://i.ibb.co/y0X46hn/23.jpg'),
(61, 4, 'https://i.ibb.co/4R1Y6hy/24.jpg'),
(62, 4, 'https://i.ibb.co/NW4jdwD/25.jpg'),
(63, 4, 'https://i.ibb.co/nCTGN5b/26.jpg'),
(64, 4, 'https://i.ibb.co/MsrBTmD/27.jpg'),
(65, 4, 'https://i.ibb.co/X7JstNX/28.jpg'),
(66, 4, 'https://i.ibb.co/Nys7y2B/29.jpg'),
(67, 4, 'https://i.ibb.co/3NQDrHW/30.jpg'),
(68, 4, 'https://i.ibb.co/qxs8NJn/31.jpg'),
(69, 4, 'https://i.ibb.co/FsqW8wS/32.jpg'),
(70, 4, 'https://i.ibb.co/mXMH7B1/33.jpg'),
(71, 4, 'https://i.ibb.co/8zzhQcL/34.jpg'),
(72, 4, 'https://i.ibb.co/GJtjMWc/35.jpg'),
(73, 4, 'https://i.ibb.co/ZMSbfbd/36.jpg'),
(74, 4, 'https://i.ibb.co/N2MtYtF/37.jpg'),
(75, 4, 'https://i.ibb.co/CbTfk78/38.jpg'),
(76, 4, 'https://i.ibb.co/Sm4kx55/39.jpg'),
(77, 4, 'https://i.ibb.co/2Y3Z9yj/40.jpg'),
(78, 4, 'https://i.ibb.co/prYSxww/41.jpg'),
(79, 4, 'https://i.ibb.co/Ksknzr8/42.jpg'),
(80, 4, 'https://i.ibb.co/8MKPZk2/43.jpg'),
(81, 4, 'https://i.ibb.co/SmT8W4m/44.jpg'),
(82, 4, 'https://i.ibb.co/zbKJkDT/45.jpg'),
(83, 4, 'https://i.ibb.co/YTGdh3c/46.jpg'),
(84, 4, 'https://i.ibb.co/2MnNLcg/47.jpg'),
(85, 4, 'https://i.ibb.co/sCMfYFj/48.jpg'),
(86, 4, 'https://i.ibb.co/ZX52Z6Q/49.jpg'),
(87, 4, 'https://i.ibb.co/TWkfmJC/50.jpg'),
(88, 4, 'https://i.ibb.co/qF7bKxx/51.jpg'),
(89, 4, 'https://i.ibb.co/Gk0gy6Y/52.jpg'),
(90, 4, 'https://i.ibb.co/nz06QT7/53.jpg'),
(91, 5, 'https://i.ibb.co/XxSt14d/01.jpg'),
(92, 5, 'https://i.ibb.co/kgwbzVt/02.jpg'),
(93, 5, 'https://i.ibb.co/Y3CSHB1/03.jpg'),
(94, 5, 'https://i.ibb.co/tQf3ft0/04.jpg'),
(95, 5, 'https://i.ibb.co/f82cdqn/05.jpg'),
(96, 5, 'https://i.ibb.co/dpPdmrt/06.jpg'),
(97, 5, 'https://i.ibb.co/HqR9sRD/07.jpg'),
(98, 5, 'https://i.ibb.co/6YKC1k0/08.jpg'),
(99, 5, 'https://i.ibb.co/PcsrSky/09.jpg'),
(100, 5, 'https://i.ibb.co/Zz4kxdm/10.jpg'),
(101, 5, 'https://i.ibb.co/GnSD7Xn/11.jpg'),
(102, 5, 'https://i.ibb.co/FXnHvXw/12.jpg'),
(103, 5, 'https://i.ibb.co/NFM82DQ/13.jpg'),
(104, 5, 'https://i.ibb.co/YBQzF7v/14.jpg'),
(105, 5, 'https://i.ibb.co/12DDtHn/15.jpg'),
(106, 5, 'https://i.ibb.co/vdXQv7J/16.jpg'),
(107, 5, 'https://i.ibb.co/brSSkYp/17.jpg'),
(108, 5, 'https://i.ibb.co/z41c6j4/18.jpg'),
(109, 5, 'https://i.ibb.co/DtWPyQv/19.jpg'),
(110, 5, 'https://i.ibb.co/nQ0cxY3/20.jpg'),
(111, 5, 'https://i.ibb.co/djn4YYt/21.jpg'),
(112, 5, 'https://i.ibb.co/CmDfMrt/22.jpg'),
(113, 5, 'https://i.ibb.co/c3YTJT8/23.jpg'),
(114, 5, 'https://i.ibb.co/JFSWv3j/24.jpg'),
(115, 5, 'https://i.ibb.co/gVxFBpD/25.jpg'),
(116, 5, 'https://i.ibb.co/SQQqHsR/26.jpg'),
(117, 5, 'https://i.ibb.co/1RprNq4/27.jpg'),
(118, 5, 'https://i.ibb.co/fXTyxGW/28.jpg'),
(119, 5, 'https://i.ibb.co/XyrXRNs/29.jpg'),
(120, 5, 'https://i.ibb.co/3532qqJ/30.jpg'),
(121, 5, 'https://i.ibb.co/LQDqYZV/31.jpg'),
(122, 5, 'https://i.ibb.co/DQNKCKm/32.jpg'),
(123, 6, 'https://i.ibb.co/nwVJmsv/01.jpg'),
(124, 6, 'https://i.ibb.co/MktMX70/02.jpg'),
(125, 6, 'https://i.ibb.co/PgrR9X7/03.jpg'),
(126, 6, 'https://i.ibb.co/88zhkw1/04.jpg'),
(127, 7, 'https://i.ibb.co/whRrPGm/01.jpg'),
(128, 7, 'https://i.ibb.co/17mskjZ/02.jpg'),
(129, 7, 'https://i.ibb.co/NmQ7j3r/03.jpg'),
(130, 7, 'https://i.ibb.co/0yHHzwj/04.jpg'),
(131, 7, 'https://i.ibb.co/Gx0WXZN/05.jpg'),
(132, 7, 'https://i.ibb.co/bJKKLff/06.jpg'),
(133, 7, 'https://i.ibb.co/7Rm2HMK/07.jpg'),
(134, 7, 'https://i.ibb.co/9gSfc9b/08.jpg'),
(135, 7, 'https://i.ibb.co/p4zF8Fc/09.jpg'),
(136, 7, 'https://i.ibb.co/9YmTXrP/10.jpg'),
(137, 7, 'https://i.ibb.co/KDy3Kdt/11.jpg'),
(138, 7, 'https://i.ibb.co/dPnn86T/12.jpg'),
(139, 7, 'https://i.ibb.co/d5VcKxQ/13.jpg'),
(140, 7, 'https://i.ibb.co/QMXf0tL/14.jpg'),
(141, 7, 'https://i.ibb.co/MZngRwG/15.jpg'),
(142, 7, 'https://i.ibb.co/m5cZCGY/16.jpg'),
(143, 7, 'https://i.ibb.co/3rJ3Pwt/17.jpg'),
(144, 7, 'https://i.ibb.co/2kf3TK9/18.jpg'),
(145, 7, 'https://i.ibb.co/1ZPKVZR/19.jpg'),
(146, 7, 'https://i.ibb.co/6R0rTMS/20.jpg'),
(147, 7, 'https://i.ibb.co/ftWX7r9/21.jpg'),
(148, 7, 'https://i.ibb.co/kXFDpss/22.jpg'),
(149, 7, 'https://i.ibb.co/XCK6dLS/23.jpg'),
(150, 7, 'https://i.ibb.co/w0QsPsf/24.jpg'),
(151, 7, 'https://i.ibb.co/QdbYnzw/25.jpg'),
(152, 7, 'https://i.ibb.co/5jX12MY/26.jpg'),
(153, 7, 'https://i.ibb.co/rZ3p1JD/27.jpg'),
(154, 7, 'https://i.ibb.co/BzHCfTM/28.jpg'),
(155, 7, 'https://i.ibb.co/8BL2NzF/29.jpg'),
(156, 7, 'https://i.ibb.co/1sx2F8S/30.jpg'),
(157, 7, 'https://i.ibb.co/rdpNjwS/31.jpg'),
(158, 7, 'https://i.ibb.co/4Z6R36R/32.jpg'),
(159, 7, 'https://i.ibb.co/9cbrJCH/33.jpg'),
(160, 7, 'https://i.ibb.co/xqyMBDM/34.jpg'),
(161, 7, 'https://i.ibb.co/FbdFpnd/35.jpg'),
(162, 7, 'https://i.ibb.co/crPFGZK/36.jpg'),
(163, 7, 'https://i.ibb.co/ZzxGBgs/37.jpg'),
(164, 7, 'https://i.ibb.co/P4T2M5B/38.jpg'),
(165, 7, 'https://i.ibb.co/JkpjRJH/39.jpg'),
(166, 7, 'https://i.ibb.co/2776TqX/40.jpg'),
(167, 7, 'https://i.ibb.co/hs8kFDn/41.jpg'),
(168, 7, 'https://i.ibb.co/Cmsvq9P/42.jpg'),
(169, 7, 'https://i.ibb.co/vJ4SdMF/43.jpg'),
(170, 7, 'https://i.ibb.co/CW9Gt4f/44.jpg'),
(171, 7, 'https://i.ibb.co/GQSpQG4/45.jpg'),
(172, 7, 'https://i.ibb.co/7K4MBG8/46.jpg'),
(173, 7, 'https://i.ibb.co/XCcNMjv/47.jpg'),
(174, 7, 'https://i.ibb.co/d42K01K/48.jpg'),
(175, 7, 'https://i.ibb.co/5WfBkV5/49.jpg'),
(176, 7, 'https://i.ibb.co/b6Ly8Dy/50.jpg'),
(177, 7, 'https://i.ibb.co/WP893ZW/51.jpg'),
(178, 7, 'https://i.ibb.co/Bcmb4Bk/52.jpg'),
(179, 7, 'https://i.ibb.co/HxdRy9N/53.jpg'),
(180, 7, 'https://i.ibb.co/G2nkC16/54.jpg'),
(181, 7, 'https://i.ibb.co/8YrH61g/55.jpg'),
(182, 7, 'https://i.ibb.co/Zz5jyKd/56.jpg'),
(183, 7, 'https://i.ibb.co/QJ41PdV/57.jpg'),
(184, 7, 'https://i.ibb.co/zSL95y5/58.jpg'),
(185, 7, 'https://i.ibb.co/r7j3RLd/59.jpg'),
(186, 7, 'https://i.ibb.co/y6h5jBQ/60.jpg'),
(187, 7, 'https://i.ibb.co/SXrC8qR/61.jpg'),
(188, 7, 'https://i.ibb.co/VL4cNMw/62.jpg'),
(189, 7, 'https://i.ibb.co/Z1tLGJw/63.jpg'),
(190, 7, 'https://i.ibb.co/T4VpwrW/64.jpg'),
(191, 8, 'https://i.ibb.co/CBp5jcW/01.jpg'),
(192, 8, 'https://i.ibb.co/RCfWYWg/02.jpg'),
(193, 8, 'https://i.ibb.co/J2RrCwG/03.jpg'),
(194, 8, 'https://i.ibb.co/jGt8ZC5/04.jpg'),
(195, 8, 'https://i.ibb.co/ysp6j7D/05.jpg'),
(196, 8, 'https://i.ibb.co/qn5BtDD/06.jpg'),
(197, 8, 'https://i.ibb.co/KrCSqKg/07.jpg'),
(198, 8, 'https://i.ibb.co/zsNGWVy/08.jpg'),
(199, 8, 'https://i.ibb.co/QK1kgr3/09.jpg'),
(200, 8, 'https://i.ibb.co/dMbK3zh/10.jpg'),
(201, 8, 'https://i.ibb.co/Q8zBLZg/11.jpg'),
(202, 8, 'https://i.ibb.co/K2qBkb1/12.jpg'),
(203, 8, 'https://i.ibb.co/ZhxvZmT/13.jpg'),
(204, 8, 'https://i.ibb.co/3Wg5D5y/14.jpg'),
(205, 8, 'https://i.ibb.co/26WDT9g/15.jpg'),
(206, 8, 'https://i.ibb.co/ZH2xTsp/16.jpg'),
(207, 8, 'https://i.ibb.co/YpbMjmH/17.jpg'),
(208, 8, 'https://i.ibb.co/xH52B5M/18.jpg'),
(209, 8, 'https://i.ibb.co/7vTqkm0/19.jpg'),
(210, 8, 'https://i.ibb.co/DkJdYxZ/20.jpg'),
(211, 8, 'https://i.ibb.co/xH52B5M/18.jpg'),
(212, 8, 'https://i.ibb.co/7vTqkm0/19.jpg'),
(213, 8, 'https://i.ibb.co/DkJdYxZ/20.jpg'),
(214, 8, 'https://i.ibb.co/cYNKR2C/24.jpg'),
(215, 8, 'https://i.ibb.co/ZJmGS3W/25.jpg'),
(216, 8, 'https://i.ibb.co/8cDHBY5/26.jpg'),
(217, 8, 'https://i.ibb.co/g4Gr886/27.jpg'),
(218, 8, 'https://i.ibb.co/3fcZjg9/28.jpg'),
(219, 8, 'https://i.ibb.co/MC0BC18/29.jpg'),
(220, 8, 'https://i.ibb.co/2WfsX1Y/30.jpg'),
(221, 8, 'https://i.ibb.co/FmhdvXF/31.jpg'),
(222, 8, 'https://i.ibb.co/gy9L4HC/32.jpg'),
(223, 8, 'https://i.ibb.co/TbdpCVB/33.jpg'),
(224, 8, 'https://i.ibb.co/DfNQD5y/34.jpg'),
(225, 8, 'https://i.ibb.co/nD4M5jr/35.jpg'),
(226, 8, 'https://i.ibb.co/rHNqNMy/36.jpg'),
(227, 8, 'https://i.ibb.co/BLJb7K9/37.jpg'),
(228, 8, 'https://i.ibb.co/0rrPcQy/38.jpg'),
(229, 8, 'https://i.ibb.co/XjLS7zN/39.jpg'),
(230, 8, 'https://i.ibb.co/G73CRGk/40.jpg'),
(231, 8, 'https://i.ibb.co/ftM50bp/41.jpg'),
(232, 9, 'https://i.ibb.co/wd5tS6W/01.jpg'),
(233, 9, 'https://i.ibb.co/ygHh3H0/02.jpg'),
(234, 9, 'https://i.ibb.co/FbtCYy3/03.jpg'),
(235, 9, 'https://i.ibb.co/hf4qWVL/04.jpg'),
(236, 9, 'https://i.ibb.co/LPnqLKJ/05.jpg'),
(237, 9, 'https://i.ibb.co/C25yghd/06.jpg'),
(238, 9, 'https://i.ibb.co/8Y15LYR/07.jpg'),
(239, 9, 'https://i.ibb.co/mCVmDMg/08.jpg'),
(240, 9, 'https://i.ibb.co/Lgm5TVT/09.jpg'),
(241, 9, 'https://i.ibb.co/jLNfMw1/10.jpg'),
(242, 9, 'https://i.ibb.co/rchK6f6/11.jpg'),
(243, 9, 'https://i.ibb.co/crJnpdt/12.jpg'),
(244, 9, 'https://i.ibb.co/Jz66cZ5/13.jpg'),
(245, 9, 'https://i.ibb.co/68bFrGN/14.jpg'),
(246, 9, 'https://i.ibb.co/1XkWJ5v/15.jpg'),
(247, 9, 'https://i.ibb.co/R26WMvh/16.jpg'),
(248, 9, 'https://i.ibb.co/FH0ZftC/17.jpg'),
(249, 9, 'https://i.ibb.co/L6BFBd1/18.jpg'),
(250, 9, 'https://i.ibb.co/t3g1shR/19.jpg'),
(251, 9, 'https://i.ibb.co/fD7GpBQ/20.jpg'),
(252, 9, 'https://i.ibb.co/8rQCxt8/21.jpg'),
(253, 10, 'https://i.ibb.co/vhtBsyF/01.jpg'),
(254, 10, 'https://i.ibb.co/ww2p4HW/02.jpg'),
(255, 10, 'https://i.ibb.co/GR18KcT/03.jpg'),
(256, 10, 'https://i.ibb.co/ZWNPy1W/04.jpg'),
(257, 10, 'https://i.ibb.co/VHgfjcd/05.jpg'),
(258, 10, 'https://i.ibb.co/jJ5Cq9P/06.jpg'),
(259, 10, 'https://i.ibb.co/G7ZfjYY/07.jpg'),
(260, 10, 'https://i.ibb.co/6Pf1Tgz/08.jpg'),
(261, 10, 'https://i.ibb.co/w0Td5X0/09.jpg'),
(262, 10, 'https://i.ibb.co/Z6ZKbLQ/10.jpg'),
(263, 10, 'https://i.ibb.co/mtSNZyR/11.jpg'),
(264, 10, 'https://i.ibb.co/DYc6GwP/12.jpg'),
(265, 10, 'https://i.ibb.co/59PgKMJ/13.jpg'),
(266, 10, 'https://i.ibb.co/h2CBKXk/14.jpg'),
(267, 10, 'https://i.ibb.co/pxB5Byc/15.jpg'),
(268, 10, 'https://i.ibb.co/bB2dwR1/16.jpg'),
(269, 10, 'https://i.ibb.co/8df45SV/17.jpg'),
(270, 10, 'https://i.ibb.co/ws9fCr2/18.jpg'),
(271, 10, 'https://i.ibb.co/HFMyyVT/19.jpg'),
(272, 10, 'https://i.ibb.co/fSyGsyR/20.jpg'),
(273, 10, 'https://i.ibb.co/x1mBcpL/21.jpg'),
(274, 10, 'https://i.ibb.co/RvpRdZw/22.jpg'),
(275, 10, 'https://i.ibb.co/p3H8p3p/23.jpg'),
(276, 10, 'https://i.ibb.co/ySX28th/24.jpg'),
(277, 10, 'https://i.ibb.co/VVz4FD7/25.jpg'),
(278, 10, 'https://i.ibb.co/gZsG9wt/26.jpg'),
(279, 10, 'https://i.ibb.co/sKK7w9P/27.jpg'),
(280, 10, 'https://i.ibb.co/wdmnRT5/28.jpg'),
(281, 10, 'https://i.ibb.co/wrJF1HS/29.jpg'),
(282, 10, 'https://i.ibb.co/p4djg0K/30.jpg'),
(283, 10, 'https://i.ibb.co/qpqt6FW/31.jpg'),
(284, 10, 'https://i.ibb.co/yfhjGH8/32.jpg'),
(285, 10, 'https://i.ibb.co/MgKfzqc/33.jpg'),
(286, 10, 'https://i.ibb.co/9YRHXTT/34.jpg'),
(287, 10, 'https://i.ibb.co/wYw9gNL/35.jpg'),
(288, 10, 'https://i.ibb.co/XX3hRFd/36.jpg'),
(289, 10, 'https://i.ibb.co/MnrSLcv/37.jpg'),
(290, 10, 'https://i.ibb.co/qrVY8zP/38.jpg'),
(291, 10, 'https://i.ibb.co/XzmkT7g/39.jpg'),
(292, 10, 'https://i.ibb.co/tYgbJYd/40.jpg'),
(293, 10, 'https://i.ibb.co/s2zZY0r/41.jpg'),
(294, 10, 'https://i.ibb.co/MVdbpV9/42.jpg'),
(295, 10, 'https://i.ibb.co/f2zftWt/43.jpg'),
(296, 10, 'https://i.ibb.co/ThMpQzK/44.jpg'),
(297, 10, 'https://i.ibb.co/NZR2KrW/45.jpg'),
(298, 10, 'https://i.ibb.co/HDDBnX3/46.jpg'),
(299, 10, 'https://i.ibb.co/5K17wQn/47.jpg'),
(300, 10, 'https://i.ibb.co/wRtPqgQ/48.jpg'),
(301, 10, 'https://i.ibb.co/NV6hxx8/49.jpg'),
(302, 10, 'https://i.ibb.co/55ZgG0f/50.jpg'),
(303, 10, 'https://i.ibb.co/sCmJQjS/51.jpg'),
(304, 10, 'https://i.ibb.co/T23g1cr/52.jpg'),
(305, 10, 'https://i.ibb.co/gZmWJ9q/53.jpg'),
(306, 10, 'https://i.ibb.co/6n1z5HS/54.jpg'),
(307, 10, 'https://i.ibb.co/kHK7CqW/55.jpg'),
(308, 10, 'https://i.ibb.co/vY22MVX/56.jpg'),
(309, 10, 'https://i.ibb.co/tBkcRrM/57.jpg'),
(310, 10, 'https://i.ibb.co/f4FWt4y/58.jpg'),
(311, 10, 'https://i.ibb.co/HDhJMb3/59.jpg'),
(312, 10, 'https://i.ibb.co/9pBVNr9/60.jpg'),
(313, 10, 'https://i.ibb.co/74D33tD/61.jpg'),
(314, 10, 'https://i.ibb.co/pr0bsQg/62.jpg'),
(315, 10, 'https://i.ibb.co/3Nxz2fQ/63.jpg'),
(316, 10, 'https://i.ibb.co/db02KcF/64.jpg'),
(317, 10, 'https://i.ibb.co/Y0X1d7k/65.jpg'),
(318, 10, 'https://i.ibb.co/MfYhWk9/66.jpg'),
(319, 10, 'https://i.ibb.co/WGRVdMK/67.jpg'),
(320, 10, 'https://i.ibb.co/9ngrSPj/68.jpg'),
(321, 10, 'https://i.ibb.co/fCz5rsT/69.jpg'),
(322, 10, 'https://i.ibb.co/hZJjjYj/70.jpg'),
(323, 10, 'https://i.ibb.co/NyDZh07/71.jpg'),
(324, 10, 'https://i.ibb.co/Kjn087J/72.jpg'),
(325, 10, 'https://i.ibb.co/QYyQNzc/73.jpg'),
(326, 10, 'https://i.ibb.co/WsHC6m6/74.jpg'),
(327, 10, 'https://i.ibb.co/2nYL0WC/75.jpg'),
(328, 10, 'https://i.ibb.co/bzHKrPY/76.jpg'),
(329, 10, 'https://i.ibb.co/tc6G9yL/77.jpg'),
(330, 10, 'https://i.ibb.co/3r2GB0y/78.jpg'),
(331, 10, 'https://i.ibb.co/3vTRtx6/79.jpg'),
(332, 10, 'https://i.ibb.co/FWpsj51/80.jpg');

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
  `total_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`komik_id`, `nama_komik`, `cover_komik`, `kategori`, `deskripsi`, `waktu_rilis`, `waktu_update`, `total_views`) VALUES
(1, 'Solo Leveling', 'cover.png', 'Manhwa', '10 tahun yang lalu, setelah \"Gerbang\" yang menghubungkan dunia nyata dengan dunia monster terbuka, beberapa orang biasa, setiap hari menerima kekuatan untuk berburu monster di dalam Gerbang. Mereka dikenal sebagai \"Pemburu\". Namun, tidak semua Pemburu kuat. Nama saya Sung Jin-Woo, seorang Pemburu peringkat-E. Saya seseorang yang harus mempertaruhkan nyawanya di ruang bawah tanah paling rendah, \"Terlemah di Dunia\". Tidak memiliki keterampilan apa pun untuk ditampilkan, saya hampir tidak mendapatkan uang yang dibutuhkan dengan bertarung di ruang bawah tanah berlevel rendah… setidaknya sampai saya menemukan ruang bawah tanah tersembunyi dengan kesulitan tersulit dalam ruang bawah tanah peringkat-D! Pada akhirnya, saat aku menerima kematian, tiba-tiba aku menerima kekuatan aneh, log pencarian yang hanya bisa kulihat, rahasia untuk naik level yang hanya aku yang tahu! Jika saya berlatih sesuai dengan pencarian saya dan monster yang diburu, level saya akan naik. Berubah dari Hunter terlemah menjadi Hunter S-rank terkuat!', 2016, '2022-01-02', 442107),
(2, 'Magic Emperor', 'komik1.webp', 'Manhwa', 'Zhuo Yifan adalah seorang kaisar sihir atau bisa di panggil kaisar iblis, karena dia mempunyai buku kaisar kuno yang di sebut buku sembilan rahasia dia menjadi sasaran semua ahli beradiri bahkan dia di khianati dan di bunuh oleh muridnya. Kemudian jiwanya masuk dan hidup kembali dalam seorang anak pelayan keluarga bernama Zhuo Fan.Karena suatu sihir iblis mengekangnya, dia harus menyatukan ingatan anak itu dan tidak bisa mengabaikan keluarga dan nona yang dia layaninya. Bagaimana kehidupan nya membangun kembali keluarganya dan kembali menjadi yang terkuat didaratan benua', 2018, '2022-01-09', 1720365),
(3, 'Regina Rena - To the Unforgiveable', 'komik3.jpeg', 'Manhwa', '“Aku akan memberimu kesempatan. Kesempatan untuk dimaafkan.” Sang ayah membuang putrinya. Dan putri itu kembali dari neraka. Di sebuah kerajaan dengan keragaman hidup dan mati, Rena Rubel ditakdirkan untuk mati sebagai pengorbanan untuk ayahnya. Tapi enam tahun kemudian, gadis yang semua orang mengira telah mati, hidup kembali. Melepas topeng domba kecil, dan menjadi singa.', 2021, '2022-01-10', 21117),
(4, 'Max Level Returner', 'komik4.jpg', 'Manhwa', '120 juta orang telah hilang di seluruh dunia. [Hadiah Penyelesaian Misi Akhir: \'Kembali\' Diaktifkan] Untuk pertama kalinya dalam 22 tahun, Yoon Sang-Hyuk menyelesaikan game bertahan hidup terburuk di dunia. Dia, yang disebut orang terkuat di antara semua pemain lain, yang memiliki semua item hadiah bahkan yang tidak dapat diperoleh orang lain, telah kembali.', 2020, '2022-01-12', 1301190),
(5, 'Talent-Swallowing Magician', 'komik2.webp', 'Manhua', 'Elric Melvinger. Pewaris kekuasan dari keluarga sihir terkemuka. Dia tidak memiliki ‘Talent’ dari lahir, sebagai akibatnya dia tidak bisa mempelajari ilmu sihir. namun, dia mendapatkan ‘Blessing’ dari leluhurnya! [Makan Demon] [Telan Demon] [Minum darah Demon] [ Akan aku Kumpulkan Sebanyak-banyaknya demon dalam diriku, dan dapatkan Sihir baru!] Aku akan bertambah kuat. Sangat kuat sampai tidak ada yang mampu mengalahkanku.', 2021, '2022-01-05', 225101);

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
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

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
