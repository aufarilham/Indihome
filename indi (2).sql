-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 09:35 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `nilai`) VALUES
(1, 0),
(2, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ea`
--

CREATE TABLE `ea` (
  `xConnectCable` varchar(12) NOT NULL,
  `eqpIP` varchar(25) NOT NULL,
  `eqpPORT` varchar(17) NOT NULL,
  `eqpTERM` varchar(19) NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ea`
--

INSERT INTO `ea` (`xConnectCable`, `eqpIP`, `eqpPORT`, `eqpTERM`, `created`) VALUES
('MRY-PC-0036', 'MRY-IP-172.28.117.41', 'MRY-GP-02/04/14', 'MRY-EA-01-01-01.1', '2018-02-04 17:00:00'),
('MRY-PC-0037', 'MRY-IP-172.28.117.41', 'MRY-GP-02/04/18', 'MRY-EA-01-01-01.1', '2018-04-01 17:00:00'),
('MRY-PC-0038', 'MRY-IP-172.28.117.41', 'MRY-GP-02/04/07', 'MRY-EA-01-01-01.1', '2018-04-30 17:00:00'),
('MRY-PC-0040', 'MRY-IP-172.28.117.41', 'MRY-GP-02/04/10', 'MRY-EA-01-01-01.1', '2018-05-01 17:00:00'),
('MRY-PC-0044', 'MRY-IP-172.28.117.41', 'MRY-GP-02/04/07', 'MRY-EA-01-01-01.1', '2018-05-08 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `oa`
--

CREATE TABLE `oa` (
  `xConnectCable` varchar(12) NOT NULL,
  `ospTerm` varchar(19) NOT NULL,
  `feederCable` varchar(20) NOT NULL,
  `primaryFiberCable` varchar(18) NOT NULL,
  `fileABDOSP` varchar(10) NOT NULL,
  `odcPORTIN` varchar(14) NOT NULL,
  `lossCore` tinyint(3) NOT NULL,
  `xConnectODCspin` varchar(18) NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oa`
--

INSERT INTO `oa` (`xConnectCable`, `ospTerm`, `feederCable`, `primaryFiberCable`, `fileABDOSP`, `odcPORTIN`, `lossCore`, `xConnectODCspin`, `created`) VALUES
('MRY-PC-0036', 'MRY-OA-01-01-01.1', 'MRY-FE-01(288)-001', 'MRY-PF-01(96)-01', 'MRY-PF-01', 'MRY-FLL-A.01', 25, 'MRY-FLL-(1:4)-01', '2018-04-29 17:00:00'),
('MRY-PC-0037', 'MRY-OA-01-01-01.2', 'MRY-FE-01(288)-002', 'MRY-PF-01(96)-01', 'MRY-PF-02', 'MRY-FLL-A.02', 24, 'MRY-FLL-(1:4)-03', '2018-05-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `xConnectODCspin` varchar(18) NOT NULL,
  `xConnectODCspout` varchar(20) NOT NULL,
  `odcPORTOUT` varchar(14) NOT NULL,
  `distributionCable` varchar(22) NOT NULL,
  `fileABDODC` varchar(12) NOT NULL,
  `odpAddress` varchar(40) NOT NULL,
  `odpKordX` double NOT NULL,
  `odpKordY` double NOT NULL,
  `odpSPIN` varchar(18) NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odc`
--

INSERT INTO `odc` (`xConnectODCspin`, `xConnectODCspout`, `odcPORTOUT`, `distributionCable`, `fileABDODC`, `odpAddress`, `odpKordX`, `odpKordY`, `odpSPIN`, `created`) VALUES
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-1', 'MRY-FLL-E.01', 'MRY-FLL-DS-01(12)-01', 'MRY-FE-FLL', 'k', -7.2574719, 112.7520883, 'ODP-MRY-FMJ/01-A', '2018-05-01 17:00:00'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-2', 'MRY-FLL-E.02', 'MRY-FLL-DS-01(12)-02', 'MRY-FE-FLL', 'ODP', -7.280431500000001, 112.7926643, 'ODP-MRY-FMJ/01-B', '2018-05-02 17:00:00'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-3', 'MRY-FLL-E.03', 'MRY-FLL-DS-01(12)-03', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 24', -7.2811195, 112.7926643, 'ODP-MRY-FMJ/01-C', '2018-05-11 17:00:00'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-4', 'MRY-FLL-E.04', 'MRY-FLL-DS-01(12)-03', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 24', -7.280569099999999, 112.79266419999999, 'ODP-MRY-FMJ/01-D', '2018-05-13 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `odpSPIN` varchar(18) NOT NULL,
  `odpIDPORT` varchar(19) NOT NULL,
  `kondisi` varchar(5) NOT NULL,
  `odpName` varchar(16) NOT NULL,
  `noModem` varchar(8) NOT NULL,
  `noInternet` varchar(12) NOT NULL,
  `noTelepon` varchar(15) NOT NULL,
  `noTelevisi` varchar(5) NOT NULL,
  `pelangganID` varchar(11) NOT NULL,
  `operationDate` date NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelangganID` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelangganID`, `nama`, `lokasi`, `created`) VALUES
('PL000000002', 'Rizal Putra', 'Surabayaa', '2018-04-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'Manager'),
(2, 'Assisten Manager'),
(3, 'Supervisor'),
(4, 'Staff Ahli'),
(5, 'Staff Lapangan'),
(6, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(7) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastLogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `role`, `created`, `lastLogin`) VALUES
('S11', 'wii', 'wildan.muww@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5, '2018-05-17 17:49:56', '2018-05-17 17:49:56'),
('S12', 'sales', 'maulidaniw@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 6, '2018-05-17 18:51:04', '2018-05-17 18:51:04'),
('U000001', 'opang', 'senjadijakarta@gmail.com', '5216100123', 1, '2018-05-16 05:34:31', '0000-00-00 00:00:00'),
('U000002', '123', 'wil@wil.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, '2018-05-17 18:57:59', '2018-05-17 18:57:59'),
('U000003', 'tat', 'wildan@gmail.com', '5216100029', 2, '2018-05-16 07:46:16', '2018-05-16 07:46:16'),
('U000004', 'aaa', 'Ahmad@email.com', 'aaa', 1, '2018-05-16 07:12:26', '0000-00-00 00:00:00'),
('U000005', 'user', 'Ahmad@email.com', '123', 5, '2018-05-16 08:54:19', '2018-05-16 08:54:19'),
('U000009', '5216100029', 'maulidaniw@gmail.com', '123', 1, '2018-05-16 22:54:50', '0000-00-00 00:00:00'),
('U00012', 'wildan', 'wildan.muww@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 2, '2018-05-17 17:44:27', '2018-05-17 17:44:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ea`
--
ALTER TABLE `ea`
  ADD PRIMARY KEY (`xConnectCable`),
  ADD KEY `xConnectCable` (`xConnectCable`);

--
-- Indexes for table `oa`
--
ALTER TABLE `oa`
  ADD PRIMARY KEY (`xConnectCable`),
  ADD KEY `xConnectCable` (`xConnectCable`),
  ADD KEY `xConnectODCspin` (`xConnectODCspin`);

--
-- Indexes for table `odc`
--
ALTER TABLE `odc`
  ADD PRIMARY KEY (`xConnectODCspin`,`xConnectODCspout`),
  ADD KEY `xConnectODCspin` (`xConnectODCspin`),
  ADD KEY `odpSPIN` (`odpSPIN`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`odpSPIN`,`odpIDPORT`),
  ADD KEY `pelangganID` (`pelangganID`),
  ADD KEY `odpSPIN` (`odpSPIN`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelangganID`),
  ADD KEY `pelangganID` (`pelangganID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oa`
--
ALTER TABLE `oa`
  ADD CONSTRAINT `fk_xCC` FOREIGN KEY (`xConnectCable`) REFERENCES `ea` (`xConnectCable`);

--
-- Constraints for table `odc`
--
ALTER TABLE `odc`
  ADD CONSTRAINT `fk_odcSPIN` FOREIGN KEY (`xConnectODCspin`) REFERENCES `oa` (`xConnectODCspin`);

--
-- Constraints for table `odp`
--
ALTER TABLE `odp`
  ADD CONSTRAINT `fk_odpSPIN` FOREIGN KEY (`odpSPIN`) REFERENCES `odc` (`odpSPIN`),
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`pelangganID`) REFERENCES `pelanggan` (`pelangganID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
