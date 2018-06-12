-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 07:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cikmuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id_app` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `comment` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_app`, `name`, `detail`, `comment`, `date`, `time`, `status`) VALUES
(3, 'mat abu bin senin', 'membuat interview ', '', '2017-12-30', '10:00', 1),
(4, 'aminah bte rosmah', 'meminta derma untuk program "sihat selalu"', '', '2018-01-18', '13:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `notel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `name`, `address`, `notel`, `email`) VALUES
(24, 'hasif hamdan', 'selandar, melaka', '0133109454', 'hasifhamdan@gmail.com'),
(25, 'wawa bte koko', 'kg pandan,selangor', '0159828909', 'pandan@lili.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
  `id` int(3) NOT NULL,
  `orderid` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `orderid`, `name`, `productname`, `quantity`, `price`) VALUES
(7, 24, 'hasif hamdan', 'karipap kentang', 5, 15),
(8, 24, 'hasif hamdan', 'karipap daging', 8, 32),
(9, 24, 'hasif hamdan', 'pau kelapa', 5, 15),
(10, 25, 'wawa bte koko', 'karipap kentang', 99, 297),
(11, 25, 'wawa bte koko', 'karipap sardin', 10, 30),
(12, 25, 'wawa bte koko', 'karipap daging', 4, 16),
(13, 25, 'wawa bte koko', 'pau kelapa', 55, 165),
(14, 25, 'wawa bte koko', 'Pau Sambal', 12, 60);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productid` varchar(10) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(3) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `image`, `quantity`, `price`, `detail`) VALUES
('k001', 'karipap kentang', '1.jpg', 70, 3, 'inti kentang'),
('k002', 'karipap sardin', '1 - Copy.jpg', 40, 3, 'inti sardin'),
('k003', 'karipap daging', '1 - Copy (2).jpg', 20, 4, 'inti daging lembu'),
('p001', 'Pau kacang Merah', '2 - Copy (2).jpg', 90, 3, 'inti  merah'),
('p002', 'pau kelapa', '3 - Copy (2).jpg', 78, 3, 'inti kelapa'),
('p003', 'Pau Sambal', '4.jpg', 34, 5, 'inti sambal udang bukan ikan bilis  :V');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `promid` int(3) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `promper` varchar(10) NOT NULL,
  `strtdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promid`, `productname`, `promper`, `strtdate`, `enddate`, `detail`) VALUES
(1, 'sjdkf', '90', '2017-12-09', '2017-12-30', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla '),
(2, 'sjdkf', '12', '2017-12-02', '2017-12-30', 'juasdhasd asdjhjasdh SJJASD ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `notel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `address`, `notel`, `email`, `position`, `password`) VALUES
('m001', 'hasif hamdan', 'jasin melaka', 133109454, 'mhhasif026@gmail.com', 'manager', '123456'),
('s001', 'ali bin abu', 'jasin, melaka', 129872180, 'ali@gmail.com', 'staff', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
