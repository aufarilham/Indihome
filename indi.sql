-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 12:52 PM
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
-- Table structure for table `ea`
--

CREATE TABLE `ea` (
  `eqpIP` varchar(25) NOT NULL,
  `eqpPORT` varchar(17) NOT NULL,
  `eqpTERM` varchar(19) NOT NULL,
  `xConnectCable` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ea`
--

INSERT INTO `ea` (`eqpIP`, `eqpPORT`, `eqpTERM`, `xConnectCable`) VALUES
('MRY-IP-172.28.117.41', 'MRY-GP-02/04/07', 'MRY-EA-01-01-01.1', 'MRY-PC-0036');

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
  `xConnectODCspin` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oa`
--

INSERT INTO `oa` (`xConnectCable`, `ospTerm`, `feederCable`, `primaryFiberCable`, `fileABDOSP`, `odcPORTIN`, `lossCore`, `xConnectODCspin`) VALUES
('MRY-PC-0036', 'MRY-OA-01-01-01.1', 'MRY-FE-01(288)-001', 'MRY-PF-01(96)-01', 'MRY-PF-01', 'MRY-FLL-A.01', 23, 'MRY-FLL-(1:4)-01');

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `xConnectODCspin` varchar(18) NOT NULL,
  `xConnectODCPspout` varchar(20) NOT NULL,
  `odcPORTOUT` varchar(14) NOT NULL,
  `distributionCable` varchar(22) NOT NULL,
  `fileABDODC` varchar(12) NOT NULL,
  `odpAddress` varchar(40) NOT NULL,
  `odpKordX` varchar(40) NOT NULL,
  `odpKordY` varchar(40) NOT NULL,
  `odpSPIN` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odc`
--

INSERT INTO `odc` (`xConnectODCspin`, `xConnectODCPspout`, `odcPORTOUT`, `distributionCable`, `fileABDODC`, `odpAddress`, `odpKordX`, `odpKordY`, `odpSPIN`) VALUES
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-1', 'MRY-FLL-E.01', 'MRY-FLL-DS-01(12)-01', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 20', 'S 6°13''58.50   E 106°45''18.30"', '', 'ODP-MRY-FMJ/01-A'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-2', 'MRY-FLL-E.02', 'MRY-FLL-DS-01(12)-02', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 23', 'S 6°13''58.50   E 106°45''18.30"', '', 'ODP-MRY-FMJ/01-B'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-3', 'MRY-FLL-E.03', 'MRY-FLL-DS-01(12)-03', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 24', 'S 6°13''58.50   E 106°45''18.30"', '', 'ODP-MRY-FMJ/01-C'),
('MRY-FLL-(1:4)-01', 'MRY-FLL-(1:4)-01-4', 'MRY-FLL-E.04', 'MRY-FLL-DS-01(12)-04', 'MRY-FE-FLL', 'JL. DUKU RT:04 RW:05 NO 25', 'S 6°13''58.50   E 106°45''18.30"', '', 'ODP-MRY-FMJ/01-D');

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
  `operationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`odpSPIN`, `odpIDPORT`, `kondisi`, `odpName`, `noModem`, `noInternet`, `noTelepon`, `noTelevisi`, `pelangganID`, `operationDate`) VALUES
('ODP-MRY-FMJ/01-A', 'ODP-MRY-FMJ/01-A1', 'ISI', 'ODP-MRY-FMJ/01', '234-100', '0223456788', '021-860-XXX-13', '3458', 'PL000000002', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelangganID` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelangganID`, `nama`, `lokasi`) VALUES
('PL000000002', 'Wildan', 'Jl');

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
(5, 'Staff'),
(6, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastLogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `lastLogin`) VALUES
(1, 'senjadijakarta@gmail.com', '5216100123', 1, '2018-05-12 10:10:23', '0000-00-00 00:00:00'),
(2, 'wildan@gmail.com', '5216100029', 2, '2018-05-12 10:10:23', '0000-00-00 00:00:00'),
(3, '123', '123', 2, '2018-05-13 10:37:56', '2018-05-13 10:37:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ea`
--
ALTER TABLE `ea`
  ADD PRIMARY KEY (`eqpIP`),
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
  ADD PRIMARY KEY (`xConnectODCspin`,`xConnectODCPspout`),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oa`
--
ALTER TABLE `oa`
  ADD CONSTRAINT `fk_xCC` FOREIGN KEY (`xConnectCable`) REFERENCES `ea` (`xConnectCable`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odc`
--
ALTER TABLE `odc`
  ADD CONSTRAINT `fk_odcSPIN` FOREIGN KEY (`xConnectODCspin`) REFERENCES `oa` (`xConnectODCspin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odp`
--
ALTER TABLE `odp`
  ADD CONSTRAINT `fk_odpSPIN` FOREIGN KEY (`odpSPIN`) REFERENCES `odc` (`odpSPIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`pelangganID`) REFERENCES `pelanggan` (`pelangganID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
