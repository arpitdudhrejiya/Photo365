-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 09:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `365`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `photo`, `name`, `email`, `phone`, `password`) VALUES
(1, 'admin.jpg', 'Admin 365', 'admin@gmail.com', '9876543210', 'Admin@365');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Bike'),
(2, 'Car'),
(5, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `imageup`
--

CREATE TABLE `imageup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `uploaddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imageup`
--

INSERT INTO `imageup` (`id`, `name`, `category`, `uploaddate`) VALUES
(1, '1-130606191I3.jpg', 'food', '2020-09-01'),
(7, 'DSC100789548.jpg', 'Bike', '2020-09-01'),
(8, 'harharmahadev.jpg', 'Bike', '2020-09-01'),
(9, 'racing.jpg', 'Car', '2020-09-01'),
(10, 'gamer.jpg', 'Car', '2020-09-02'),
(11, 'goku5.jpg', 'Car', '2020-09-02'),
(12, '182052.jpg', 'Bike', '2020-09-05'),
(13, '262983.jpg', 'Bike', '2020-09-05'),
(14, '288241.jpg', 'Bike', '2020-09-05'),
(15, '837397.jpg', 'Bike', '2020-09-05'),
(16, '1486014.jpg', 'Bike', '2020-09-05'),
(17, '2197704.jpg', 'Bike', '2020-09-05'),
(18, 'gamer.jpg', 'Food', '2020-09-05'),
(19, 'goku5.jpg', 'Food', '2020-09-05'),
(20, 'HD-Gaming-Wallpaper.jpg', 'Food', '2020-09-05'),
(21, 'IMG_20190130_233031.jpg', 'Food', '2020-09-05'),
(22, 'lion-animal-013.jpg', 'Food', '2020-09-05'),
(23, 'racing.jpg', 'Food', '2020-09-05'),
(24, '170273-free-gaming-wallpapers-1920x1080-1920x1080-images.jpg', 'Car', '2020-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageup`
--
ALTER TABLE `imageup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `imageup`
--
ALTER TABLE `imageup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
