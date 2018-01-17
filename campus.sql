-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 11:55 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `batch_year` int(20) NOT NULL,
  `batch_branch` varchar(200) NOT NULL,
  `batch_skills` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `hr_id` int(200) NOT NULL,
  `hr_name` varchar(200) NOT NULL,
  `hr_email` varchar(200) NOT NULL,
  `hr_password` varchar(200) NOT NULL,
  `hr_company` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`hr_id`, `hr_name`, `hr_email`, `hr_password`, `hr_company`, `created_at`, `updated_at`) VALUES
(1, 'piyushmoon', 'gvsdadh@gmail.com', '$2y$10$SODT.gPuKO12DLh7QEsBseA.0Gosy3ehYbCa1iw1Ku2CYjddXT/ei', 'abcd', '2017-12-09 10:29:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tandp`
--

CREATE TABLE `tandp` (
  `tandp_id` int(200) NOT NULL,
  `tandp_name` varchar(200) NOT NULL,
  `tandp_email` varchar(200) NOT NULL,
  `tandp_password` varchar(200) NOT NULL,
  `tandp_college` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tandp`
--

INSERT INTO `tandp` (`tandp_id`, `tandp_name`, `tandp_email`, `tandp_password`, `tandp_college`, `created_at`, `updated_at`) VALUES
(1, 'piyushmoon', 'abcd@gmail.com', '$2y$10$SODT.gPuKO12DLh7QEsBseA.0Gosy3ehYbCa1iw1Ku2CYjddXT/ei', 'rcert', '2017-12-09 10:39:12', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `tandp`
--
ALTER TABLE `tandp`
  ADD PRIMARY KEY (`tandp_id`);

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
  MODIFY `batch_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `hr_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tandp`
--
ALTER TABLE `tandp`
  MODIFY `tandp_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancy_id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
