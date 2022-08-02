-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 11:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch_04`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `uName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `uName`, `email`, `roll`, `password`, `status`) VALUES
(1, 'Yousuf Patwari Shohag', 'patwari', 'yousufshohag90@gmail.com', 'user', 'patwari', '0'),
(2, 'Sharmin Jahan Sathi', 'Sharmin', 'sharmin90@yahoo.com', 'user', '30f88072b59fcea5b439f0fec08d89bb', '1'),
(3, 'majid', 'MAJID', 'shohag@gmail.com', 'user', '3ba3a0d9c25e0029b49851015145333d', '1'),
(4, 'Parul Beguem', 'parul', 'parulpatwari90@gmail.com', 'manager', '6db9a4747b3aaff53384dcc817ba4434', '1'),
(5, 'Dulal Patwari', 'Dulal', 'dulalpatwari9090@gmail.com', 'admin', '2c8c1f94df58fe7b2cc27cfc2c2d5bfa', '1'),
(6, 'yousuf_shohag', 'yousuf', 'yousu_fshohag90@gmail.com', 'user', 'd74bfea44ae233ef7e63cc9db4fb88e1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
