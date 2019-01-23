-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 09:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumId` int(4) NOT NULL,
  `AlbumName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumId`, `AlbumName`) VALUES
(4, 'anuradpure'),
(5, 'colomobo');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `ImageName` varchar(250) NOT NULL,
  `AlbumId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `ImageName`, `AlbumId`) VALUES
(1, '1546948026captain-marvel-brie-larson-24754.jpeg', 4),
(2, '1546948032pexels-photo-91227.jpeg', 4),
(3, '1548182533download.jpg', 4),
(4, '1548211053hanthane-kathawak.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`) VALUES
(1, 'demo', 'ewq');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsurl` varchar(20) NOT NULL,
  `sinhala` varchar(20) NOT NULL,
  `english` varchar(20) NOT NULL,
  `tamil` varchar(20) NOT NULL,
  `nid` int(11) NOT NULL,
  `sin` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_sinhala_ci NOT NULL,
  `eng` varchar(1000) NOT NULL,
  `tm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsurl`, `sinhala`, `english`, `tamil`, `nid`, `sin`, `eng`, `tm`, `img`) VALUES
('', 'ddssfsd', 'nwa', 't', 26, 'tt', 'tt', 'tt', '1548213309siw-rahas-salakuna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vol`
--

CREATE TABLE `vol` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `bof` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `Divisional` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `regdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol`
--

INSERT INTO `vol` (`id`, `name`, `addres`, `bof`, `district`, `Divisional`, `number`, `Email`, `nic`, `Qualifications`, `regdate`) VALUES
(1, 'asd', 'asd', 'sd', 'sd', 'asd', 'asd', 'sad', 'sad', 'asd', 'asd'),
(2, 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we'),
(3, 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we', 'we'),
(4, 'we', 'we', '33', '3333-03-31', 'Matale', 'fff', 'fff', 'ff', 'fff', ''),
(5, 'we', 'we', '33', '3333-03-31', 'Matale', 'fff', 'fff', 'ff', 'fff', '2019/01/23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumId`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vol`
--
ALTER TABLE `vol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
