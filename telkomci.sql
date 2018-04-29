-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 01:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkomci`
--

-- --------------------------------------------------------

--
-- Table structure for table `oa`
--

CREATE TABLE `oa` (
  `ospTerm` varchar(18) NOT NULL,
  `feederCable` varchar(18) NOT NULL,
  `primaryFC` varchar(16) NOT NULL,
  `lossCore` int(11) NOT NULL,
  `odcPortIn` varchar(12) NOT NULL,
  `xConnectCable` varchar(11) NOT NULL,
  `cabangID` varchar(5) NOT NULL,
  `kodeRak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oa`
--

INSERT INTO `oa` (`ospTerm`, `feederCable`, `primaryFC`, `lossCore`, `odcPortIn`, `xConnectCable`, `cabangID`, `kodeRak`) VALUES
('TPR-OA-01-01-01.1', 'TPR-FE-01(288)-001', 'TPR-PF-01(96)-01', 23, 'TPR-FLL-A.01', 'TPR-PC-1036', 'BP101', 134),
('TPR-OA-01-01-01.2', 'TPR-FE-01(288)-002', 'TPR-PF-01(96)-02', 12, 'TPR-FLL-A.02', 'TPR-PC-3216', 'BP101', 135);

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `ospTerm` varchar(18) NOT NULL,
  `odcOut` varchar(21) NOT NULL,
  `odcIn` varchar(19) NOT NULL,
  `odcPortOut` varchar(12) NOT NULL,
  `DistCable` varchar(20) NOT NULL,
  `odcKordX` varchar(20) NOT NULL,
  `odcKordY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odc`
--

INSERT INTO `odc` (`ospTerm`, `odcOut`, `odcIn`, `odcPortOut`, `DistCable`, `odcKordX`, `odcKordY`) VALUES
('TPR-OA-01-01-01.1', 'TPR-FLL-CSP(1:4)-01-1', 'TPR-FLL-CSP(1:4)-01', 'TPR-FLL-E.01', 'TPR-FLL-DS-01(12)-01', '-6.223014', '106.870786'),
('TPR-OA-01-01-01.1', 'TPR-FLL-CSP(1:4)-01-2', 'TPR-FLL-CSP(1:4)-01', 'TPR-FLL-E.02', 'TPR-FLL-DS-01(12)-02', '-6.223014', '106.870786');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `odcOut` varchar(21) NOT NULL,
  `odpOut` varchar(21) NOT NULL,
  `odpIn` varchar(19) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `odpKordX` varchar(20) NOT NULL,
  `odpKordY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`odcOut`, `odpOut`, `odpIn`, `kondisi`, `odpKordX`, `odpKordY`) VALUES
('TPR-FLL-CSP(1:4)-01-1', 'TPR-FLL-PSP(1:8)-05-1', 'TPR-FLL-PSP(1:8)-05', 'ISI', '-6.223014', '106.870786'),
('TPR-FLL-CSP(1:4)-01-1', 'TPR-FLL-PSP(1:8)-05-2', 'TPR-FLL-PSP(1:8)-05', 'ISI', '-6.223014', '106.870786');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'senjadijakarta@gmail.com', '5216100123', 1),
(2, 'wildan@gmail.com', '5216100029', 2),
(3, '123', '123', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oa`
--
ALTER TABLE `oa`
  ADD PRIMARY KEY (`ospTerm`);

--
-- Indexes for table `odc`
--
ALTER TABLE `odc`
  ADD PRIMARY KEY (`ospTerm`,`odcOut`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
