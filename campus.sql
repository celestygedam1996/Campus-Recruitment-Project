-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 06:50 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(200) NOT NULL,
  `batch_name` varchar(200) NOT NULL,
  `batch_code` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `batch_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`, `batch_code`, `created_at`, `updated_at`, `batch_desc`) VALUES
(4, 'cse', 54, '2018-01-13 10:09:42', '0000-00-00 00:00:00', 'asdasadad');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `hr_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hr_company` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `username`, `hr_email`, `password`, `hr_company`, `created_at`, `updated_at`) VALUES
(1, 'piyushmoon', 'gvsdadh@gmail.com', '$2y$10$SODT.gPuKO12DLh7QEsBseA.0Gosy3ehYbCa1iw1Ku2CYjddXT/ei', 'abcd', '2017-12-09 10:29:49', '0000-00-00 00:00:00'),
(7, 'localhostlocalhost', '', '$2y$10$9jgL.B2UsSppCk/nuEUkN.uyYOkWjKPfJo/3OAGJX1Sk52SreMa.O', '', '2018-01-19 03:56:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tandp`
--

CREATE TABLE `tandp` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `tandp_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tandp_college` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tandp`
--

INSERT INTO `tandp` (`id`, `username`, `tandp_email`, `password`, `tandp_college`, `created_at`, `updated_at`) VALUES
(1, 'piyushmoon', 'abcd@gmail.com', '$2y$10$SODT.gPuKO12DLh7QEsBseA.0Gosy3ehYbCa1iw1Ku2CYjddXT/ei', 'rcert', '2017-12-09 10:39:12', '0000-00-00 00:00:00'),
(3, 'localhostlocalhost', '', '$2y$10$T91q1nkmTS4E1Jon/NgRy.EKQvjuV2LapKbjZir6cezccGTvBgbyS', '', '2018-01-19 04:19:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(200) NOT NULL,
  `vacancy_name` varchar(200) NOT NULL,
  `vacancy_desc` varchar(300) NOT NULL,
  `vacancy_type` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upadted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_desc`, `vacancy_type`, `created_at`, `upadted_at`) VALUES
(3, 'dasdasd', 'adsadsa', 1, '2017-12-23 10:12:31', '0000-00-00 00:00:00'),
(5, 'namdfdsf', 'erwrwr', 1, '2018-01-13 10:08:54', '0000-00-00 00:00:00'),
(6, 'asda', 'asdda', 2, '2018-01-13 10:09:06', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tandp`
--
ALTER TABLE `tandp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tandp`
--
ALTER TABLE `tandp`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancy_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
