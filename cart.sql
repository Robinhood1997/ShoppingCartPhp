-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 07:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `kart`
--

CREATE TABLE IF NOT EXISTS `kart` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `desc` tinytext NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `shipping` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kart`
--

INSERT INTO `kart` (`id`, `name`, `image`, `desc`, `price`, `quantity`, `shipping`) VALUES
(1, 'Samsung J6', 'samsung.jpg', 'Newest Model', 300, 5, 3),
(2, 'Iphone 11', 'iphone.png', 'Trending ', 1650, 8, 3),
(3, 'Oppo', 'oppo.jpg', 'China Mall', 500, 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kart`
--
ALTER TABLE `kart`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kart`
--
ALTER TABLE `kart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
