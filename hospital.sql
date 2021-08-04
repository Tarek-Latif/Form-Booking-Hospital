-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 01:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `tel`, `email`, `address`, `date`) VALUES
(1, 'طارق محمد لطيف', 1093334231, 'tarek@yahoo.com', 'محافظة بنى سويف', '2021-07-13'),
(2, 'على', 12, 'ali@yahoo.com', 'محافظة الفيوم', '2021-07-15'),
(3, 'شادى', 14, 'shady@yahoo.com', 'المنيا', '0000-00-00'),
(4, 'guug', 6565, 'trtrt', 'ttt', '2021-07-24'),
(5, 'guug', 6565, 'trtrt', 'ttt', '2021-07-24'),
(6, 'فارس طارق محمد', 1112725007, 'fares@yahoo.com', 'محافظة القاهرة', '2021-06-30'),
(8, '', 15, 'bb@yahoo.com', 'الشرقية', '2021-06-15'),
(9, 'بسمله', 15, 'bb@yahoo.com', 'الشرقية', '2021-06-15'),
(10, 'شوقى', 20, 'Sh@yahoo.com', 'الاسكندرية', '2021-07-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
