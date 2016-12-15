-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2016 at 10:07 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmu2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_number`, `password`, `first_name`, `last_name`) VALUES
(1, 0, 0, 'Aldwin', 'Labrador'),
(2, 1, 0, 'Kiers', 'Labrador');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `candidate_number` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(175) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `college` varchar(10) NOT NULL,
  `id_number` varchar(8) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_number`, `first_name`, `middle_name`, `last_name`, `college`, `id_number`, `gender`) VALUES
(1, 1, 'Roni', '', 'Cruz', 'Bachelor', 'K11', 'Female'),
(2, 2, 'Daniele', '', 'Bigcas', 'Bachelor o', 'K11', 'Female'),
(3, 3, 'Christine', '', 'Lerma', 'Bachelor o', 'K11', 'Female'),
(4, 4, 'Christine', '', 'Moncada', 'Bachelor o', 'K11', 'Female'),
(5, 5, 'Mayline', '', 'Penoliar', 'Bachelor o', 'K11', 'Female'),
(6, 6, 'Ana Cris', '', 'De Jesus', 'Bachelor o', 'K11', 'Female'),
(7, 7, 'Janine', '', 'Anago', 'Bachelor o', 'K11', 'Female'),
(8, 8, 'Christine', '', 'Digas', 'Bachelor o', 'K11', 'Female'),
(9, 9, 'Deborah', '', 'Macapagal', 'Bachelor o', 'K11', 'Female'),
(10, 1, 'John Paul', '', 'Obiar', 'Bachelor o', 'K11', 'Male'),
(11, 2, 'Jay-Ar', '', 'Patalinghug', 'Bachelor o', 'K11', 'Male'),
(12, 3, 'Kim Irvin', '', 'Pardo', 'Bachelor o', 'K11', 'Male'),
(13, 4, 'Gerald', '', 'Capil', 'Bachelor o', 'K11', 'Male'),
(14, 5, 'Ronald', '', 'Mendoz', 'Bachelor o', 'K11', 'Male'),
(15, 6, 'Carlo', '', 'Salaya', 'Bachelor o', 'K11', 'Male'),
(16, 7, 'Richard', '', 'De Leon', 'Bachelor o', 'K11', 'Male'),
(17, 8, 'Christian Van', '', 'Supe', 'Bachelor o', 'K11', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `is_activated` int(1) NOT NULL,
  `access_key` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `judge_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
