-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 04:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `otp` int(100) DEFAULT NULL,
  `verify` varchar(100) DEFAULT NULL,
  `time/date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `name`, `email`, `password`, `usertype`, `otp`, `verify`, `time/date`) VALUES
(83, 'anis', 'aniscs452@gmail.com', '$2y$10$xDpnJj61hu3vAJcl6.UMp.9ZWSsyJEraFqkoe3uO1VIKM6Uce0SCe', 'Moderator', 48112, 'No', '2023-05-06 12:09:23'),
(84, 'sorif', 'sorif@gmail.com', '$2y$10$uqI.detD1kgpj3MQUgTnjeLsmZMEz8ScDqdYHWA3EeytAT0oKqxs.', 'Sub_moderator', 964376, 'Yes', '2023-05-06 22:29:16'),
(85, 'rofik', 'rofik@gmail.com', '$2y$10$MnR16jsK2CHFZ1OTdBSteeOxwFx2iuQrh.FNX9s7C42NO8wW1iizm', 'Sub_moderator', 287145, 'Yes', '2023-05-07 23:05:12'),
(86, 'atik', 'atik@gmail.com', '$2y$10$WWSzhyiUh7ss76JYcfungeqQJIFoEiG.RiFulHYLp3F4n7ZzLzZzi', NULL, 675525, 'No', '2023-05-07 23:50:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
