-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `about` text DEFAULT NULL,
  `schoolname` varchar(200) NOT NULL,
  `sscyear` varchar(50) NOT NULL,
  `sscboard` varchar(50) NOT NULL,
  `sscresult` varchar(20) NOT NULL,
  `collegename` varchar(200) NOT NULL,
  `hscyear` varchar(50) NOT NULL,
  `hscboard` varchar(50) NOT NULL,
  `hscresult` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `nickname`, `fathername`, `mothername`, `address`, `phone`, `email`, `dateofbirth`, `gender`, `about`, `schoolname`, `sscyear`, `sscboard`, `sscresult`, `collegename`, `hscyear`, `hscboard`, `hscresult`) VALUES
(1, 'Syed Showkat Akber', 'Akber', 'Rob', 'Amena', 'Dhaka', '01552490181', 'akber2002@gmail.com', '1976-12-04', 'male', 'Im someone', 'South Point School And college', '2024', 'dhaka', '5', 'BAF shaheen college dhaka', '2026', 'dhaka', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
