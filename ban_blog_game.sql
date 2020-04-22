-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 05:26 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ban_blog_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Id_admin` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Id_admin`, `name`, `username`, `password`, `email`, `file_name`, `path`, `status`, `create_times`, `update_times`, `create_by`, `update_by`) VALUES
(1, 'test', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', NULL, NULL, 1, '2020-04-07 14:20:56', '2020-04-07 14:20:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `file_name`, `created_at`, `updated_at`) VALUES
(6, 'banner-1586940122.jpg', '2020-04-20 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `post_id` varchar(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `message` text CHARACTER SET utf8 DEFAULT NULL,
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `name`, `email`, `phone`, `message`, `create_times`, `update_times`) VALUES
(1, 'names kid', 'jame0925623256@gmail.com', '123654785', 'asd', '2020-04-07 16:02:29', NULL),
(2, 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'sdf', '2020-04-07 16:02:42', NULL),
(3, 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'asdasd', '2020-04-07 16:02:48', NULL),
(4, 'asd', 'asd', 'asd', 'asd', '2020-04-07 16:03:13', NULL),
(5, 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'asd', '2020-04-07 16:05:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdf`
--

CREATE TABLE `tbl_pdf` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pdf`
--

INSERT INTO `tbl_pdf` (`id`, `topic`, `file_name`, `date`, `created_at`, `update_at`) VALUES
(1, 'แบบรูปภาพ (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'poster-1586599903.png', '2020-04-11', '2020-04-11 10:11:51', '2020-04-11 05:11:43'),
(3, 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586764848.pdf', '2020-04-15', '2020-04-13 03:00:48', NULL),
(4, 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586766859.pdf', '2020-04-13', '2020-04-13 03:34:19', NULL),
(5, 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586766904.pdf', '2020-04-13', '2020-04-13 03:35:04', NULL),
(6, 'แบบไฟล์PDF', 'pdf-1586935087.pdf', '0000-00-00', '2020-04-15 07:18:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `date_post` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(200) DEFAULT '0',
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `user_id`, `topic`, `detail`, `date_post`, `status`, `file_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'ทดสอบ', 'รายละเอียดการทดสอบ', '2020-04-16 06:42:18', '0', 'test.pnf', '2020-04-16 06:42:15', '2020-04-16 06:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `Id_session` int(11) NOT NULL,
  `Ip_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_times` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`Id_session`, `Ip_address`, `username`, `create_times`) VALUES
(1, '127.0.0.1', 'admin', '2020-04-07 09:21:12'),
(2, '::1', 'admin', '2020-04-08 05:45:50'),
(3, '::1', 'admin', '2020-04-08 06:45:19'),
(4, '::1', 'admin', '2020-04-08 10:14:41'),
(5, '::1', 'admin', '2020-04-09 06:42:15'),
(6, '::1', 'admin', '2020-04-10 05:57:14'),
(7, '::1', 'admin', '2020-04-11 09:04:45'),
(8, '::1', 'admin', '2020-04-13 05:46:37'),
(9, '::1', 'admin', '2020-04-13 06:25:58'),
(10, '::1', 'admin', '2020-04-13 06:27:08'),
(11, '::1', 'admin', '2020-04-13 10:00:01'),
(12, '::1', 'admin', '2020-04-13 10:33:23'),
(13, '::1', 'admin', '2020-04-14 06:09:43'),
(14, '::1', 'admin', '2020-04-14 10:46:53'),
(15, '::1', 'admin', '2020-04-15 06:13:03'),
(16, '::1', 'admin', '2020-04-15 08:18:56'),
(17, '::1', 'admin', '2020-04-15 08:41:42'),
(18, '::1', 'admin', '2020-04-15 09:22:40'),
(19, '::1', 'admin', '2020-04-15 14:22:45'),
(20, '::1', 'admin', '2020-04-16 06:42:09'),
(21, '::1', 'admin', '2020-04-17 11:07:53'),
(22, '::1', 'admin', '2020-04-18 19:45:18'),
(23, '::1', 'admin', '2020-04-21 08:59:34'),
(24, '::1', 'admin', '2020-04-21 09:10:57'),
(25, '::1', 'admin', '2020-04-21 12:02:26'),
(26, '::1', 'admin', '2020-04-21 12:13:44'),
(27, '::1', 'admin', '2020-04-21 14:58:30'),
(28, '::1', 'admin', '2020-04-21 15:39:09'),
(29, '::1', 'admin', '2020-04-22 04:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `file_name`, `created_at`, `updated_at`) VALUES
(5, 'Banner-02.jpg', '2020-04-21 13:08:00', '2020-04-21 13:08:00'),
(6, 'slider-1587463448.jpg', '2020-04-21 13:07:33', '2020-04-21 13:07:33'),
(7, 'Banner-03.jpg', '2020-04-21 13:08:06', '2020-04-21 13:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_taxs` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT '0',
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL,
  `time_forgot_password` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `id_taxs`, `company`, `address`, `point`, `create_times`, `update_times`, `time_forgot_password`, `forgot_password`) VALUES
(1, 'jame0925623256@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '050505050505050', 'Infinity Phenomenal Software', '247/5 M.4\r\nNong Han, San Sai, Chiang Mai, 50290.', '0', '2020-04-07 15:14:52', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_pdf`
--
ALTER TABLE `tbl_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD PRIMARY KEY (`Id_session`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pdf`
--
ALTER TABLE `tbl_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_session`
--
ALTER TABLE `tbl_session`
  MODIFY `Id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
