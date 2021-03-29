-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 29, 2021 at 10:25 AM
-- Server version: 10.5.9-MariaDB-1:10.5.9+maria~focal
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COGIP`
--

-- --------------------------------------------------------

--
-- Table structure for table `Companies`
--

CREATE TABLE `Companies` (
  `Name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `VATNumber` varchar(25) NOT NULL,
  `InvoiceNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Companies`
--

INSERT INTO `Companies` (`Name`, `Country`, `Type`, `VATNumber`, `InvoiceNumber`) VALUES
('aaa', 'zzz', 'Client', 'gggggg5', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `CompanyType`
--

CREATE TABLE `CompanyType` (
  `Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CompanyType`
--

INSERT INTO `CompanyType` (`Type`) VALUES
('Client');

-- --------------------------------------------------------

--
-- Table structure for table `Invoices`
--

CREATE TABLE `Invoices` (
  `InvoiceNumber` int(15) NOT NULL,
  `InvoiceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Invoices`
--

INSERT INTO `Invoices` (`InvoiceNumber`, `InvoiceDate`) VALUES
(7777, '2021-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `People`
--

CREATE TABLE `People` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `InvoiceNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `People`
--

INSERT INTO `People` (`FirstName`, `LastName`, `CompanyName`, `Email`, `InvoiceNumber`) VALUES
('hhhhh', 'ggggggg', 'aaa', 'aaaa@eee.f', 7777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Companies`
--
ALTER TABLE `Companies`
  ADD KEY `InvoiceNumber` (`InvoiceNumber`),
  ADD KEY `Type` (`Type`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `CompanyType`
--
ALTER TABLE `CompanyType`
  ADD KEY `Type` (`Type`);

--
-- Indexes for table `Invoices`
--
ALTER TABLE `Invoices`
  ADD KEY `InvoiceNumber` (`InvoiceNumber`);

--
-- Indexes for table `People`
--
ALTER TABLE `People`
  ADD KEY `CompanyName` (`CompanyName`),
  ADD KEY `InvoiceNumber` (`InvoiceNumber`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Companies`
--
ALTER TABLE `Companies`
  ADD CONSTRAINT `Companies_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `CompanyType` (`Type`),
  ADD CONSTRAINT `Companies_ibfk_2` FOREIGN KEY (`InvoiceNumber`) REFERENCES `Invoices` (`InvoiceNumber`);

--
-- Constraints for table `People`
--
ALTER TABLE `People`
  ADD CONSTRAINT `People_ibfk_1` FOREIGN KEY (`InvoiceNumber`) REFERENCES `Invoices` (`InvoiceNumber`),
  ADD CONSTRAINT `People_ibfk_2` FOREIGN KEY (`CompanyName`) REFERENCES `Companies` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
