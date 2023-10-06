-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 05:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `cru`
--

CREATE TABLE `cru` (
  `id` int(24) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `language` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cru`
--

INSERT INTO `cru` (`id`, `name`, `email`, `phone`, `address`, `gender`, `language`, `city`, `password`, `file`) VALUES
(1, 'Hardik ', 'kananihardik13@gmail.com', '09265574110', 'b-403,mahalaxmi society, yogi chowk,surat', 'male', 'gujarati,hindi,english', 'CANADA', 'b86c434f4174e711f9611ec9fee35581', '../images/6517ddd3adc60-HD-wallpaper-macos-ventura-ios-16-dark-wwdc-2022-apple.jpg'),
(2, 'Hardik kanani', ' kananihardik13@gmail.com', '09265574110', 'b-403,mahalaxmi society, yogi chowk,surat', 'male', 'gujarati', 'UK', ' 37693cfc748049e45d87b8c7d8b9aacd', '../images/65185d7d59aa7-wp11455920.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cru`
--
ALTER TABLE `cru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cru`
--
ALTER TABLE `cru`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
