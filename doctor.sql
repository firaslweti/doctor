-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 01:06 PM
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
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(8) NOT NULL,
  `date` date NOT NULL,
  `cin` int(50) NOT NULL,
  `place` text NOT NULL,
  `birthdate` date NOT NULL,
  `situation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `username`, `email`, `phone`, `date`, `cin`, `place`, `birthdate`, `situation`) VALUES
(1, 'firas lweti', 'firaslweti91@gmail.com', 56336101, '2024-01-17', 888, 'tunisaina', '2024-01-21', 'incomplete'),
(2, 'firas lweti', 'firaslweti91@gmail.com', 56336101, '2024-01-17', 888, 'tunisaina', '2024-01-21', 'complete'),
(3, 'firas lweti', 'firaslweti91@gmail.com', 56336101, '2024-01-17', 888, 'tunisaina', '2024-01-21', 'incomplete'),
(4, 'firas lweti', 'firaslweti91@gmail.com', 56336101, '2024-01-09', 888, 'tunisaina', '2024-01-09', 'incomplete'),
(5, 'firas lweti', 'firaslweti91@gmail.com', 56336101, '2024-01-16', 888, 'tunisaina', '2024-01-15', 'complete'),
(6, 'firas', '@gmaol', 6595565, '2024-01-02', 56459, 'lgyugy', '2024-01-17', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cin` int(8) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(8) NOT NULL,
  `state` text NOT NULL,
  `adress` text NOT NULL,
  `birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `cin`, `password`, `email`, `phone`, `state`, `adress`, `birth`) VALUES
(1, 'firas lweti', 888, 'aina', 'firaslweti91@gmail.com', 56336101, 'Siliana', 'tunis', '2024-01-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
