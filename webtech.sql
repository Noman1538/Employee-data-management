-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 07:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Empid` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Position` varchar(10) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Team` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empid`, `Name`, `Position`, `Mobile`, `Team`) VALUES
(1, 'Noman', 'owner', 1865311538, NULL),
(2, 'Apu', 'manager', 1742343556, NULL),
(3, 'faysal', 'supervisor', 1883434472, 1),
(4, 'Fahim', 'manager', 1865311545, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(5) NOT NULL,
  `Empid` int(6) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Empid`, `Password`) VALUES
(1, 1, 'Noman'),
(2, 2, 'Apu'),
(3, 3, 'Faysal');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(5) NOT NULL,
  `Team` int(3) NOT NULL,
  `StyleNo` varchar(3) NOT NULL,
  `OrderSize` int(6) NOT NULL,
  `ProductNmae` varchar(20) NOT NULL,
  `Label` varchar(20) NOT NULL,
  `SMV` int(5) NOT NULL,
  `FirstOut` date NOT NULL,
  `StyleChange` int(2) NOT NULL,
  `ProjectedOutput` int(6) NOT NULL,
  `ActualOutput` int(6) NOT NULL,
  `TotalMen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Team`, `StyleNo`, `OrderSize`, `ProductNmae`, `Label`, `SMV`, `FirstOut`, `StyleChange`, `ProjectedOutput`, `ActualOutput`, `TotalMen`) VALUES
(1, 1, 'STR', 1000, 'SHIRT', 'H&H', 3, '2017-08-25', 1, 1100, 1050, 20);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(11) NOT NULL,
  `Size` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `Size`) VALUES
(0, 20),
(1, 22),
(2, 23),
(3, 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Empid`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
