-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 11:33 PM
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
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `CabangID` varchar(5) NOT NULL,
  `namaCabang` varchar(20) DEFAULT NULL,
  `jalan` varchar(100) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kodePos` varchar(5) DEFAULT NULL,
  `tipe` varchar(5) DEFAULT NULL,
  `mgrID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`CabangID`, `namaCabang`, `jalan`, `kota`, `kodePos`, `tipe`, `mgrID`) VALUES
('BP101', 'Bandung (Pusat)', 'Jl. Japati No.1, Sadang Serang, Coblong', 'Bandung', '40133', '1', 'MG14123642'),
('JK201', 'Gatot Subroto', 'Jl. Gatot Subroto Kav. 52, RT.6/RW.1, Kuningan Bar., Mampang Prpt, Jakarta Pusat', 'Jakarta', '12710', '2', 'MG19736194'),
('JK202', 'Prumpung', 'Jl. DI. Panjaitan No.42, RT.12/RW.5, Rw. Bunga, Jatinegara, Jakarta Timur', 'Jakarta', '13350', '2', 'MG12838461'),
('JK203', 'Merdeka', 'Jl. Merdeka Barat No. 6, Jakarta Pusat', 'Jakarta', '14890', '2', 'MG18437218'),
('JK204', 'Mangga Besar', 'Jl. Mangga Besar No.49, RT.1/RW.3, Tangki, Tamansari,Jakarta Barat', 'Jakarta', '11170', '3', 'MG18392716'),
('JK205', 'Kemayoran', 'Jl. Kemayoran No. 6, Jakarta Pusat', 'Jakarta', '10620', '1', 'MG18334716'),
('JK206', 'Kartini', 'Jl. Kartini No. 6, Jakarta Pusat', 'Jakarta', '10750', '1', 'MG18837001'),
('JK207', 'Pertamburan', 'Jl. Pertamburan No. 6, Jakarta Pusat', 'Jakarta', '10260', '1', 'MG18838702'),
('JK208', 'Serdang', 'Jl. Serdang No. 6, Jakarta Selatan', 'Jakarta', '10670', '1', 'MG17721817'),
('JK209', 'Kramat', 'Jl.Kramat No. 6, Jakarta Selatan', 'Jakarta', '10450', '1', 'MG16632716'),
('JK210', 'Pasar Baru', 'Jl.Pasar Baru No. 6, Jakarta Utara', 'Jakarta', '10710', '1', 'MG17847291'),
('JK211', 'Kebon Kelap', 'Jl. Kebon No. 6, Jakarta Utara', 'Jakarta', '10120', '1', 'MG15747296'),
('JK212', 'Gelora', 'Jl. Gelora No. 6, Jakarta Timur', 'Jakarta', '10279', '1', 'MG62715789'),
('JK213', 'Gambir', 'Jl. Gambir No. 6, Jakarta Barat', 'Jakarta', '10110', '1', 'MG71192729'),
('MK103', 'Makassar', 'Jl Coto No 13', 'Makassar', '67190', '1', 'MG27927163'),
('ML106', 'Malang', 'Jl Apel No 3', 'Malang', '63416', '1', 'MG18123435'),
('SB102', 'Surabaya', 'Jl Panjul No 12', 'Surabaya', '60111', '1', 'MG22116300'),
('SM101', 'Semarang', 'Jl Pesangonan No 4', 'Semarang', '30112', '1', 'MG73101111'),
('SR104', 'Serang', 'Jl Majalaya No 10', 'Serang', '23642', '1', 'MG19372172'),
('YK105', 'Yogyakarta', 'Jl Jalanan No 1', 'Yogyakarta', '45163', '1', 'MG19318279');

-- --------------------------------------------------------

--
-- Table structure for table `cabangtelp`
--

CREATE TABLE `cabangtelp` (
  `CabangID` varchar(5) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabangtelp`
--

INSERT INTO `cabangtelp` (`CabangID`, `noTelp`) VALUES
('BP101', '021214712'),
('BP101', '02121899811'),
('JK201', '0213519900'),
('JK201', '0218590840'),
('JK202', '0214359000'),
('JK203', '0214353000'),
('JK203', '0214359000'),
('JK204', '0214354100'),
('JK204', '0214354200'),
('JK204', '0214354300'),
('JK205', '0214355100'),
('JK205', '0214355200'),
('JK206', '0214356100'),
('JK207', '0214357100'),
('JK207', '0214357200'),
('JK208', '0214358100'),
('JK209', '0214359100'),
('JK210', '0214310000'),
('JK211', '0214311100'),
('JK212', '0214311200');

-- --------------------------------------------------------

--
-- Table structure for table `ea`
--

CREATE TABLE `ea` (
  `xConnectCable` varchar(11) NOT NULL,
  `eqpIP` varchar(22) DEFAULT NULL,
  `eqpPort` varchar(15) DEFAULT NULL,
  `eqpTerm` varchar(17) DEFAULT NULL,
  `noIndi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ea`
--

INSERT INTO `ea` (`xConnectCable`, `eqpIP`, `eqpPort`, `eqpTerm`, `noIndi`) VALUES
('TPR-PC-1036', 'TPR-IP-172.28.117.41', 'TPR-GP-02/04/07', 'TPR-EA-01-01-01.1', 1),
('TPR-PC-1521', 'TPR-IP-172.28.117.41', 'TPR-GP-02/04/08', 'TPR-EA-01-01-01.2', 2),
('TPR-PC-2012', 'TPR-IP-172.28.117.41', 'TPR-GP-02/04/09', 'TPR-EA-01-01-01.3', 3),
('TPR-PC-2185', 'TPR-IP-172.28.117.41', 'TPR-GP-02/04/10', 'TPR-EA-01-01-01.4', 4),
('TPR-PC-2216', 'TPR-IP-172.28.117.41', 'TPR-GP-02/04/1', 'TPR-EA-01-01-01.5', 5),
('TPR-PC-2217', 'TPR-IP-172.28.117.41', 'TPR-GP-02/05/1', 'TPR-EA-01-01-01.6', 6),
('TPR-PC-2218', 'TPR-IP-172.28.117.41', 'TPR-GP-02/05/2', 'TPR-EA-01-01-01.7', 7),
('TPR-PC-2219', 'TPR-IP-172.28.117.41', 'TPR-GP-02/05/3', 'TPR-EA-01-01-01.8', 8),
('TPR-PC-2220', 'TPR-IP-172.28.117.41', 'TPR-GP-02/05/4', 'TPR-EA-01-01-01.9', 9),
('TPR-PC-2221', 'TPR-IP-172.28.117.41', 'TPR-GP-02/05/5', 'TPR-EA-01-01-02.1', 10),
('TPR-PC-2301', 'TPR-IP-172.28.117.41', 'TPR-GP-02/03/1', 'TPR-EA-01-03-01.1', 11),
('TPR-PC-2302', 'TPR-IP-172.28.117.41', 'TPR-GP-02/03/2', 'TPR-EA-01-03-01.2', 12),
('TPR-PC-2303', 'TPR-IP-172.28.117.41', 'TPR-GP-02/03/3', 'TPR-EA-01-03-01.3', 13),
('TPR-PC-2304', 'TPR-IP-172.28.117.41', 'TPR-GP-02/03/4', 'TPR-EA-01-03-01.4', 14),
('TPR-PC-2305', 'TPR-IP-172.28.117.41', 'TPR-GP-02/03/5', 'TPR-EA-01-03-01.5', 15),
('TPR-PC-2412', 'TPR-IP-172.28.117.41', 'TPR-GP-02/08/1', 'TPR-EA-01-04-01.1', 16),
('TPR-PC-2413', 'TPR-IP-172.28.117.41', 'TPR-GP-02/08/2', 'TPR-EA-01-04-01.2', 17),
('TPR-PC-2414', 'TPR-IP-172.28.117.41', 'TPR-GP-02/08/3', 'TPR-EA-01-04-01.3', 18),
('TPR-PC-2415', 'TPR-IP-172.28.117.41', 'TPR-GP-02/08/4', 'TPR-EA-01-04-01.4', 19),
('TPR-PC-2416', 'TPR-IP-172.28.117.41', 'TPR-GP-02/08/5', 'TPR-EA-01-04-01.5', 20);

-- --------------------------------------------------------

--
-- Table structure for table `et`
--

CREATE TABLE `et` (
  `xConnectCable` varchar(11) NOT NULL,
  `eqpIP` varchar(22) DEFAULT NULL,
  `eqpPort` varchar(15) DEFAULT NULL,
  `eqpTerm` varchar(17) DEFAULT NULL,
  `noMetro` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `et`
--

INSERT INTO `et` (`xConnectCable`, `eqpIP`, `eqpPort`, `eqpTerm`, `noMetro`) VALUES
('TPR-PC-2964', 'TPR-IP-172.28.117.3', 'TPR-ME-2/1/9', 'TPR-ET-01-01-01.1', 1),
('TPR-PC-2965', 'TPR-IP-172.28.117.3', 'TPR-ME-2/1/9', 'TPR-ET-01-01-01.2', 2),
('TPR-PC-2966', 'TPR-IP-172.28.117.3', 'TPR-ME-2/1/10', 'TPR-ET-01-01-01.3', 3),
('TPR-PC-2967', 'TPR-IP-172.28.117.3', 'TPR-ME-2/1/10', 'TPR-ET-01-01-01.4', 4),
('TPR-PC-2968', 'TPR-IP-172.28.117.3', 'TPR-ME-2/1/11', 'TPR-ET-01-01-01.5', 5),
('TPR-PC-3000', 'TPR-IP-172.28.117.3', 'TPR-ME-3/1/11', 'TPR-ET-01-03-01.1', 6),
('TPR-PC-3001', 'TPR-IP-172.28.117.3', 'TPR-ME-3/1/11', 'TPR-ET-01-03-01.2', 7),
('TPR-PC-3002', 'TPR-IP-172.28.117.3', 'TPR-ME-3/1/12', 'TPR-ET-01-03-01.3', 8),
('TPR-PC-3003', 'TPR-IP-172.28.117.3', 'TPR-ME-3/1/12', 'TPR-ET-01-03-01.4', 9),
('TPR-PC-3004', 'TPR-IP-172.28.117.3', 'TPR-ME-3/1/13', 'TPR-ET-01-03-01.5', 10),
('TPR-PC-4000', 'TPR-IP-172.28.117.3', 'TPR-ME-4/1/11', 'TPR-ET-01-04-01.', 11),
('TPR-PC-4001', 'TPR-IP-172.28.117.3', 'TPR-ME-4/1/11', 'TPR-ET-01-04-01.2', 12),
('TPR-PC-4002', 'TPR-IP-172.28.117.3', 'TPR-ME-4/1/12', 'TPR-ET-01-04-01.3', 13),
('TPR-PC-4003', 'TPR-IP-172.28.117.3', 'TPR-ME-4/1/12', 'TPR-ET-01-04-01.4', 14),
('TPR-PC-4004', 'TPR-IP-172.28.117.3', 'TPR-ME-4/1/13', 'TPR-ET-01-04-01.5', 15),
('TPR-PC-5000', 'TPR-IP-172.28.117.3', 'TPR-ME-5/1/11', 'TPR-ET-01-05-01.1', 16),
('TPR-PC-5001', 'TPR-IP-172.28.117.3', 'TPR-ME-5/1/11', 'TPR-ET-01-05-01.2', 17),
('TPR-PC-5002', 'TPR-IP-172.28.117.3', 'TPR-ME-5/1/12', 'TPR-ET-01-05-01.3', 18),
('TPR-PC-5003', 'TPR-IP-172.28.117.3', 'TPR-ME-5/1/12', 'TPR-ET-01-05-01.4', 19),
('TPR-PC-5004', 'TPR-IP-172.28.117.3', 'TPR-ME-5/1/13', 'TPR-ET-01-05-01.5', 20);

-- --------------------------------------------------------

--
-- Table structure for table `fileoa`
--

CREATE TABLE `fileoa` (
  `ospTerm` varchar(18) NOT NULL,
  `fileAbdOSP` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileoa`
--

INSERT INTO `fileoa` (`ospTerm`, `fileAbdOSP`) VALUES
('TPR-OA-01-01-13.4', 'TPR-FE-01'),
('TPR-OA-01-01-13.4', 'TPR-FE-02'),
('TPR-OA-02-02-14.1', 'TPR-FE-04'),
('TPR-OA-02-04-13.6', 'TPR-FE-03'),
('TPR-OA-02-04-14.2', 'TPR-FE-05'),
('TPR-OA-02-04-14.2', 'TPR-FE-06'),
('TPR-OA-02-04-14.2', 'TPR-FE-07'),
('TPR-OA-02-04-14.3', 'TPR-FE-08'),
('TPR-OA-02-04-14.3', 'TPR-FE-09'),
('TPR-OA-02-04-14.4', 'TPR-FE-10'),
('TPR-OA-02-04-14.4', 'TPR-FE-11'),
('TPR-OA-02-04-15.1', 'TPR-FE-12'),
('TPR-OA-02-04-15.1', 'TPR-FE-13'),
('TPR-OA-02-04-15.2', 'TPR-FE-14'),
('TPR-OA-02-04-15.2', 'TPR-FE-15'),
('TPR-OA-02-04-15.3', 'TPR-FE-16'),
('TPR-OA-02-04-15.3', 'TPR-FE-17'),
('TPR-OA-02-04-15.4', 'TPR-FE-18'),
('TPR-OA-02-04-15.4', 'TPR-FE-19'),
('TPR-OA-02-04-15.4', 'TPR-FE-20');

-- --------------------------------------------------------

--
-- Table structure for table `fileodc`
--

CREATE TABLE `fileodc` (
  `odcOut` varchar(21) NOT NULL,
  `fileAbdDs` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileodc`
--

INSERT INTO `fileodc` (`odcOut`, `fileAbdDs`) VALUES
('TPR-FLL-CSP(1:4)-04-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-2', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-2', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-2', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-3', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-3', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-3', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-4', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-4', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-04-4', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-4', 'TPR-ODC-FLL'),
('TPR-FLL-CSP(1:4)-05-4', 'TPR-ODC-FLL');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mgrID` varchar(10) NOT NULL,
  `mgrStartDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mgrID`, `mgrStartDate`) VALUES
('MG11923746', '2015-05-29'),
('MG14123642', '2014-04-09'),
('MG15747296', '2012-04-20'),
('MG16632716', '2017-12-23'),
('MG17721817', '2014-01-12'),
('MG17847291', '2014-04-09'),
('MG18123435', '2016-12-23'),
('MG18334716', '2014-01-09'),
('MG18392716', '2016-12-23'),
('MG18437218', '2014-12-01'),
('MG18837001', '2013-03-23'),
('MG18838702', '2016-05-29'),
('MG19318279', '2014-06-12'),
('MG19372172', '2017-05-19'),
('MG19736194', '2013-04-10'),
('MG22116300', '2014-01-09'),
('MG27927163', '2017-05-14'),
('MG62715789', '2015-05-19'),
('MG71192729', '2018-01-12'),
('MG73101111', '2013-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `oa`
--

CREATE TABLE `oa` (
  `ospTerm` varchar(18) NOT NULL,
  `feederCable` varchar(18) DEFAULT NULL,
  `primaryFC` varchar(16) DEFAULT NULL,
  `lossCore` varchar(12) DEFAULT NULL,
  `odcPortIn` varchar(12) DEFAULT NULL,
  `xConnectCable` varchar(11) DEFAULT NULL,
  `cabangID` varchar(5) DEFAULT NULL,
  `kodeRak` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oa`
--

INSERT INTO `oa` (`ospTerm`, `feederCable`, `primaryFC`, `lossCore`, `odcPortIn`, `xConnectCable`, `cabangID`, `kodeRak`) VALUES
('TPR-OA-01-01-13.4', 'TPR-FE-01(288)-004', 'TPR-PF-01(96)-04', '24', 'TPR-FLL-A.04', 'TPR-PC-1234', 'BP101', '134'),
('TPR-OA-02-01-13.5', 'TPR-FE-02(201)-005', 'TPR-PF-02(95)-05', '12', 'TPR-FLL-B.05', 'TPR-PC-2216', 'JK201', '135'),
('TPR-OA-02-01-13.6', 'TPR-FE-02(201)-006', 'TPR-PF-02(95)-06', '13', 'TPR-FLL-B.06', 'TPR-PC-2217', 'JK201', '136'),
('TPR-OA-02-02-14.1', 'TPR-FE-02(202)-001', 'TPR-PF-02(93)-01', '19', 'TPR-FLL-E.01', 'TPR-PC-2012', 'JK202', '141'),
('TPR-OA-02-02-14.2', 'TPR-FE-02(202)-002', 'TPR-PF-02(93)-02', '19', 'TPR-FLL-E.02', 'TPR-PC-2013', 'JK202', '142'),
('TPR-OA-02-04-13.6', 'TPR-FE-02(204)-006', 'TPR-PF-02(94)-06', '30', 'TPR-FLL-C.06', 'TPR-PC-2964', 'JK204', '136'),
('TPR-OA-02-04-13.7', 'TPR-FE-02(204)-007', 'TPR-PF-02(94)-07', '31', 'TPR-FLL-C.07', 'TPR-PC-2969', 'JK204', '137'),
('TPR-OA-02-04-14.3', 'TPR-FE-02(204)-003', 'TPR-PF-02(92)-03', '10', 'TPR-FLL-H.03', 'TPR-PC-2185', 'JK204', '143'),
('TPR-OA-02-04-14.4', 'TPR-FE-02(204)-004', 'TPR-PF-02(92)-04', '14', 'TPR-FLL-H.04', 'TPR-PC-2189', 'JK204', '144'),
('TPR-OA-02-04-15.1', 'TPR-FE-02(205)-001', 'TPR-PF-02(85)-01', '15', 'TPR-FLL-I.01', 'TPR-PC-2501', 'JK205', '101'),
('TPR-OA-02-04-15.2', 'TPR-FE-02(205)-002', 'TPR-PF-02(85)-02', '16', 'TPR-FLL-I.02', 'TPR-PC-2502', 'JK205', '102'),
('TPR-OA-02-04-15.3', 'TPR-FE-02(205)-003', 'TPR-PF-02(85)-03', '17', 'TPR-FLL-I.03', 'TPR-PC-2503', 'JK205', '103'),
('TPR-OA-02-04-15.4', 'TPR-FE-02(205)-004', 'TPR-PF-02(85)-04', '18', 'TPR-FLL-I.04', 'TPR-PC-2504', 'JK205', '104'),
('TPR-OA-02-04-16.1', 'TPR-FE-02(206)-001', 'TPR-PF-02(86)-01', '19', 'TPR-FLL-J.01', 'TPR-PC-2601', 'JK206', '101'),
('TPR-OA-02-04-16.2', 'TPR-FE-02(206)-002', 'TPR-PF-02(86)-02', '20', 'TPR-FLL-J.02', 'TPR-PC-2602', 'JK206', '102'),
('TPR-OA-02-04-16.3', 'TPR-FE-02(206)-003', 'TPR-PF-02(86)-03', '22', 'TPR-FLL-J.03', 'TPR-PC-2603', 'JK206', '103'),
('TPR-OA-02-04-16.4', 'TPR-FE-02(206)-004', 'TPR-PF-02(86)-04', '24', 'TPR-FLL-J.04', 'TPR-PC-2604', 'JK206', '104'),
('TPR-OA-02-04-17.4', 'TPR-FE-02(207)-004', 'TPR-PF-02(87)-04', '25', 'TPR-FLL-Z.04', 'TPR-PC-2704', 'JK207', '104'),
('TPR-OA-02-04-17.5', 'TPR-FE-02(207)-005', 'TPR-PF-02(87)-05', '26', 'TPR-FLL-Z.05', 'TPR-PC-2705', 'JK207', '105'),
('TPR-OA-02-04-17.6', 'TPR-FE-02(207)-006', 'TPR-PF-02(87)-06', '27', 'TPR-FLL-Z.06', 'TPR-PC-2706', 'JK207', '106');

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `ospTerm` varchar(18) NOT NULL,
  `odcOut` varchar(21) NOT NULL,
  `odcPortOut` varchar(12) DEFAULT NULL,
  `DistCable` varchar(20) DEFAULT NULL,
  `odcKordX` varchar(10) DEFAULT NULL,
  `odcKordY` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odc`
--

INSERT INTO `odc` (`ospTerm`, `odcOut`, `odcPortOut`, `DistCable`, `odcKordX`, `odcKordY`) VALUES
('TPR-OA-01-01-13.4', 'TPR-FLL-CSP(1:4)-04-1', 'TPR-FLL-E.01', 'TPR-FLL-DS-01(12)-01', '-6.232342', '106.87078'),
('TPR-OA-01-01-13.4', 'TPR-FLL-CSP(1:4)-04-2', 'TPR-FLL-E.02', 'TPR-FLL-DS-01(12)-02', '-6.232342', '106.87078'),
('TPR-OA-01-01-13.4', 'TPR-FLL-CSP(1:4)-04-3', 'TPR-FLL-E.03', 'TPR-FLL-DS-01(12)-03', '-6.232342', '106.87078'),
('TPR-OA-01-01-13.4', 'TPR-FLL-CSP(1:4)-04-4', 'TPR-FLL-E.04', 'TPR-FLL-DS-01(12)-04', '-6.332357', '106.77038'),
('TPR-OA-02-01-13.5', 'TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-H.01', 'TPR-FLL-DS-02(12)-01', '-6.242331', '106.34728'),
('TPR-OA-02-01-13.5', 'TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-H.02', 'TPR-FLL-DS-02(12)-02', '-6.242332', '106.34728'),
('TPR-OA-02-01-13.5', 'TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-H.03', 'TPR-FLL-DS-02(12)-03', '-6.242333', '106.34728'),
('TPR-OA-02-01-13.5', 'TPR-FLL-CSP(1:4)-05-4', 'TPR-FLL-H.04', 'TPR-FLL-DS-02(12)-04', '-6.242334', '106.34728'),
('TPR-OA-02-04-13.6', 'TPR-FLL-CSP(1:4)-06-1', 'TPR-FLL-I.01', 'TPR-FLL-DS-02(12)-01', '-6.242331', '106.34729'),
('TPR-OA-02-04-13.6', 'TPR-FLL-CSP(1:4)-06-2', 'TPR-FLL-I.02', 'TPR-FLL-DS-02(12)-02', '-6.242332', '106.34729'),
('TPR-OA-02-04-13.6', 'TPR-FLL-CSP(1:4)-06-3', 'TPR-FLL-I.03', 'TPR-FLL-DS-02(12)-03', '-6.242333', '106.34729'),
('TPR-OA-02-04-13.6', 'TPR-FLL-CSP(1:4)-06-4', 'TPR-FLL-I.04', 'TPR-FLL-DS-02(12)-04', '-6.242334', '106.34729'),
('TPR-OA-02-04-13.7', 'TPR-FLL-CSP(1:4)-07-1', 'TPR-FLL-J.01', 'TPR-FLL-DS-02(12)-01', '-6.242131', '106.34128'),
('TPR-OA-02-04-13.7', 'TPR-FLL-CSP(1:4)-07-2', 'TPR-FLL-J.02', 'TPR-FLL-DS-02(12)-02', '-6.242232', '106.34128'),
('TPR-OA-02-04-13.7', 'TPR-FLL-CSP(1:4)-07-3', 'TPR-FLL-J.03', 'TPR-FLL-DS-02(12)-03', '-6.242333', '106.34128'),
('TPR-OA-02-04-13.7', 'TPR-FLL-CSP(1:4)-07-4', 'TPR-FLL-J.04', 'TPR-FLL-DS-02(12)-04', '-6.242434', '106.34128'),
('TPR-OA-02-04-13.8', 'TPR-FLL-CSP(1:4)-08-1', 'TPR-FLL-K.01', 'TPR-FLL-DS-02(12)-01', '-6.142331', '106.24728'),
('TPR-OA-02-04-13.8', 'TPR-FLL-CSP(1:4)-08-2', 'TPR-FLL-K.02', 'TPR-FLL-DS-02(12)-02', '-6.142332', '106.32728'),
('TPR-OA-02-04-13.8', 'TPR-FLL-CSP(1:4)-08-3', 'TPR-FLL-K.03', 'TPR-FLL-DS-02(12)-03', '-6.142333', '106.32728'),
('TPR-OA-02-04-13.8', 'TPR-FLL-CSP(1:4)-08-4', 'TPR-FLL-K.04', 'TPR-FLL-DS-02(12)-04', '-6.142334', '106.32728');

-- --------------------------------------------------------

--
-- Table structure for table `odcin`
--

CREATE TABLE `odcin` (
  `ospTerm` varchar(18) NOT NULL,
  `odcIn` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odcin`
--

INSERT INTO `odcin` (`ospTerm`, `odcIn`) VALUES
('TPR-OA-01-01-13.4', 'TPR-FLL-CSP(1:4)-04'),
('TPR-OA-02-01-13.5', 'TPR-FLL-CSP(1:4)-15'),
('TPR-OA-02-01-13.6', 'TPR-FLL-CSP(1:4)-16'),
('TPR-OA-02-02-14.1', 'TPR-FLL-CSP(1:4)-11'),
('TPR-OA-02-02-14.2', 'TPR-FLL-CSP(1:4)-12'),
('TPR-OA-02-04-13.6', 'TPR-FLL-CSP(1:4)-06'),
('TPR-OA-02-04-13.7', 'TPR-FLL-CSP(1:4)-07'),
('TPR-OA-02-04-14.3', 'TPR-FLL-CSP(1:4)-43'),
('TPR-OA-02-04-14.4', 'TPR-FLL-CSP(1:4)-44'),
('TPR-OA-02-04-15.1', 'TPR-FLL-CSP(1:4)-51'),
('TPR-OA-02-04-15.2', 'TPR-FLL-CSP(1:4)-52'),
('TPR-OA-02-04-15.3', 'TPR-FLL-CSP(1:4)-53'),
('TPR-OA-02-04-15.4', 'TPR-FLL-CSP(1:4)-54'),
('TPR-OA-02-04-16.1', 'TPR-FLL-CSP(1:4)-61'),
('TPR-OA-02-04-16.2', 'TPR-FLL-CSP(1:4)-62'),
('TPR-OA-02-04-16.3', 'TPR-FLL-CSP(1:4)-63'),
('TPR-OA-02-04-16.4', 'TPR-FLL-CSP(1:4)-64'),
('TPR-OA-02-04-17.4', 'TPR-FLL-CSP(1:4)-74'),
('TPR-OA-02-04-17.5', 'TPR-FLL-CSP(1:4)-75'),
('TPR-OA-02-04-17.6', 'TPR-FLL-CSP(1:4)-76');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `odcOut` varchar(21) NOT NULL,
  `odpOut` varchar(21) NOT NULL,
  `kondisi` varchar(5) DEFAULT NULL,
  `odpKordX` varchar(10) DEFAULT NULL,
  `odpKordY` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`odcOut`, `odpOut`, `kondisi`, `odpKordX`, `odpKordY`) VALUES
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-1', 'ISI', '-6.53161', '106.87078'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-2', 'ISI', '-6.53142', '106.74992'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-3', 'ISI', '-6.39922', '106.22178'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-4', 'ISI', '-6.73892', '106.82348'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-5', 'ISI', '-6.33122', '106.87011'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-6', 'ISI', '-6.57453', '106.83423'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-7', 'ISI', '-6.53142', '106.74463'),
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-04-8', 'ISI', '-6.36342', '106.24533'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-1', 'ISI', '-6.73333', '106.87374'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-2', 'ISI', '-6.32342', '106.63745'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-3', 'ISI', '-6.12342', '106.63145'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-4', 'ISI', '-6.22342', '106.63245'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-5', 'ISI', '-6.42342', '106.63735'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-6', 'ISI', '-6.52342', '106.63743'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-7', 'ISI', '-6.62342', '106.63755'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-05-8', 'ISI', '-6.72342', '106.63765'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-PSP(1:8)-06-1', 'ISI', '-6.82342', '106.63845'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-PSP(1:8)-06-2', 'ISI', '-6.31342', '106.63945'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-PSP(1:8)-06-3', 'ISI', '-6.32342', '106.60745'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-PSP(1:8)-06-4', 'ISI', '-6.32342', '106.61745');

-- --------------------------------------------------------

--
-- Table structure for table `odpin`
--

CREATE TABLE `odpin` (
  `odcOut` varchar(21) NOT NULL,
  `odpIn` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odpin`
--

INSERT INTO `odpin` (`odcOut`, `odpIn`) VALUES
('TPR-FLL-CSP(1:4)-05-1', 'TPR-FLL-PSP(1:8)-05'),
('TPR-FLL-CSP(1:4)-05-2', 'TPR-FLL-PSP(1:8)-06'),
('TPR-FLL-CSP(1:4)-05-3', 'TPR-FLL-PSP(1:8)-07'),
('TPR-FLL-CSP(1:4)-05-4', 'TPR-FLL-PSP(1:8)-08'),
('TPR-FLL-CSP(1:4)-06-1', 'TPR-FLL-PSP(1:8)-09'),
('TPR-FLL-CSP(1:4)-06-2', 'TPR-FLL-PSP(1:8)-10'),
('TPR-FLL-CSP(1:4)-06-3', 'TPR-FLL-PSP(1:8)-11'),
('TPR-FLL-CSP(1:4)-06-4', 'TPR-FLL-PSP(1:8)-12'),
('TPR-FLL-CSP(1:4)-07-1', 'TPR-FLL-PSP(1:8)-13'),
('TPR-FLL-CSP(1:4)-07-2', 'TPR-FLL-PSP(1:8)-14'),
('TPR-FLL-CSP(1:4)-07-3', 'TPR-FLL-PSP(1:8)-15'),
('TPR-FLL-CSP(1:4)-07-4', 'TPR-FLL-PSP(1:8)-16'),
('TPR-FLL-CSP(1:4)-08-1', 'TPR-FLL-PSP(1:8)-17'),
('TPR-FLL-CSP(1:4)-08-2', 'TPR-FLL-PSP(1:8)-18'),
('TPR-FLL-CSP(1:4)-08-3', 'TPR-FLL-PSP(1:8)-19'),
('TPR-FLL-CSP(1:4)-08-4', 'TPR-FLL-PSP(1:8)-20'),
('TPR-FLL-CSP(1:4)-09-1', 'TPR-FLL-PSP(1:8)-21'),
('TPR-FLL-CSP(1:4)-09-2', 'TPR-FLL-PSP(1:8)-22'),
('TPR-FLL-CSP(1:4)-09-3', 'TPR-FLL-PSP(1:8)-23'),
('TPR-FLL-CSP(1:4)-09-4', 'TPR-FLL-PSP(1:8)-24');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pengaduanID` varchar(10) NOT NULL,
  `userID` varchar(10) DEFAULT NULL,
  `isi` varchar(250) DEFAULT NULL,
  `tglMasuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`pengaduanID`, `userID`, `isi`, `tglMasuk`) VALUES
('PN00113471', 'IH9999709', 'Speed internet tidak sesuai paket, TV delayed', '2018-03-05'),
('PN00119811', 'IH9998933', 'TV delayed', '2018-03-05'),
('PN00121090', 'IH7843291', 'TV delayed', '2018-03-05'),
('PN00122557', 'IH9999709', 'Jaringan internet mati', '2018-03-09'),
('PN00126782', 'IH9999680', 'TV delayed', '2018-03-09'),
('PN00130001', 'IH8888680', 'Jaringan internet mati', '2018-03-10'),
('PN00130002', 'IH8888680', 'Jaringan internet mati', '2018-03-10'),
('PN00130003', 'IH8888680', 'Jaringan internet mati', '2018-03-10'),
('PN00130004', 'IH8888680', 'Jaringan internet mati', '2018-03-10'),
('PN00130005', 'IH8888680', 'Jaringan internet mati', '2018-03-11'),
('PN00130006', 'IH8418680', 'Jaringan internet mati', '2018-03-11'),
('PN00130007', 'IH8138680', 'Jaringan internet mati', '2018-03-11'),
('PN00130008', 'IH8428680', 'Jaringan internet mati', '2018-03-11'),
('PN00130009', 'IH3288680', 'Jaringan internet mati', '2018-03-12'),
('PN00130010', 'IH8218680', 'Jaringan internet mati', '2018-03-12'),
('PN00130011', 'IH8888621', 'Jaringan internet mati', '2018-03-12'),
('PN00130012', 'IH8888240', 'Jaringan internet mati', '2018-03-13'),
('PN00130013', 'IH8884280', 'Jaringan internet mati', '2018-03-13'),
('PN00130014', 'IH8842680', 'Jaringan internet mati', '2018-03-13'),
('PN00130015', 'IH8822680', 'Jaringan internet mati', '2018-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `jenisKelamin` varchar(1) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `teknisiFlag` tinyint(1) DEFAULT NULL,
  `supervisorFlag` tinyint(1) DEFAULT NULL,
  `keahlian` varchar(20) DEFAULT NULL,
  `assmanFlag` tinyint(1) DEFAULT NULL,
  `managerFlag` tinyint(1) DEFAULT NULL,
  `CabangID` varchar(5) DEFAULT NULL,
  `supervisorID` varchar(10) DEFAULT NULL,
  `tglMasuk` date DEFAULT NULL,
  `tglKeluar` date DEFAULT NULL,
  `blnKerja` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffmemasangoa`
--

CREATE TABLE `staffmemasangoa` (
  `staffID` varchar(10) NOT NULL,
  `ospTerm` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffmemasangoa`
--

INSERT INTO `staffmemasangoa` (`staffID`, `ospTerm`) VALUES
('SL33740838', 'TPR-OA-02-04-15.1'),
('SL33740838', 'TPR-OA-02-04-15.4'),
('SL33741000', 'TPR-OA-01-01-13.4'),
('SL33741000', 'TPR-OA-01-01-13.5'),
('SL33742183', 'TPR-OA-02-04-15.3'),
('SL33742342', 'TPR-OA-01-01-13.6'),
('SL33744367', 'TPR-OA-02-04-15.1'),
('SL33744367', 'TPR-OA-02-04-15.2'),
('SL33744367', 'TPR-OA-02-04-16.1'),
('SL33744565', 'TPR-OA-01-01-13.6'),
('SL33744565', 'TPR-OA-02-04-15.4'),
('SL33748020', 'TPR-OA-01-01-13.5'),
('SL33748125', 'TPR-OA-01-01-13.4'),
('SL33748233', 'TPR-OA-01-01-13.5'),
('SL33748233', 'TPR-OA-02-04-15.4'),
('SL33748261', 'TPR-OA-02-04-15.2'),
('SL33749280', 'TPR-OA-02-04-15.2'),
('SL33749280', 'TPR-OA-02-04-16.1'),
('SL33749472', 'TPR-OA-02-04-15.1'),
('SL33749472', 'TPR-OA-02-04-15.3');

-- --------------------------------------------------------

--
-- Table structure for table `staffmemasangodc`
--

CREATE TABLE `staffmemasangodc` (
  `staffID` varchar(10) NOT NULL,
  `odcOut` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffmemasangodp`
--

CREATE TABLE `staffmemasangodp` (
  `staffID` varchar(10) NOT NULL,
  `odpOut` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stafftelp`
--

CREATE TABLE `stafftelp` (
  `staffID` varchar(10) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftelp`
--

INSERT INTO `stafftelp` (`staffID`, `noTelp`) VALUES
('AM48212372', '081296252248'),
('AM48212372', '081296632413'),
('AM48731237', '081234246473'),
('AM72847123', '081292842483'),
('AM72847123', '081296682433'),
('AM72847123', '081296782483'),
('AM93745136', '081296478483'),
('MG12838461', '081296682422'),
('MG14123642', '081009015041'),
('MG14123642', '081296686483'),
('MG14123642', '081310112212'),
('SL33000212', '081296624283'),
('SL48027384', '081242252483'),
('SL78871997', '081296682131'),
('SV28365820', '081296682467'),
('SV28423452', '081225782483'),
('SV28423452', '081235282483'),
('SV28461237', '081284927441'),
('SV28778162', '081242182483'),
('SV29899123', '081296682424');

-- --------------------------------------------------------

--
-- Table structure for table `tglpasangoa`
--

CREATE TABLE `tglpasangoa` (
  `ospTerm` varchar(18) NOT NULL,
  `tglPemasangan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tglpasangoa`
--

INSERT INTO `tglpasangoa` (`ospTerm`, `tglPemasangan`) VALUES
('TPR-OA-01-01-13.4', '2018-02-02'),
('TPR-OA-02-01-13.5', '2018-02-07'),
('TPR-OA-02-01-13.6', '2018-02-12'),
('TPR-OA-02-02-14.1', '2018-02-17'),
('TPR-OA-02-02-14.2', '2018-02-22'),
('TPR-OA-02-04-13.6', '2018-02-28'),
('TPR-OA-02-04-13.7', '2018-03-04'),
('TPR-OA-02-04-14.3', '2018-03-09'),
('TPR-OA-02-04-14.4', '2018-03-14'),
('TPR-OA-02-04-15.1', '2018-03-19'),
('TPR-OA-02-04-15.2', '2018-03-24'),
('TPR-OA-02-04-15.3', '2018-03-29'),
('TPR-OA-02-04-15.4', '2018-04-03'),
('TPR-OA-02-04-16.1', '2018-04-08'),
('TPR-OA-02-04-16.2', '2018-04-13'),
('TPR-OA-02-04-16.3', '2018-04-18'),
('TPR-OA-02-04-16.4', '2018-04-23'),
('TPR-OA-02-04-17.4', '2018-04-28'),
('TPR-OA-02-04-17.5', '2018-05-03'),
('TPR-OA-02-04-17.6', '2018-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `tglpasangodc`
--

CREATE TABLE `tglpasangodc` (
  `odcOut` varchar(21) NOT NULL,
  `tglPemasangan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tglpasangodc`
--

INSERT INTO `tglpasangodc` (`odcOut`, `tglPemasangan`) VALUES
('TPR-FLL-CSP(1:4)-05-1', '2018-02-01'),
('TPR-FLL-CSP(1:4)-05-2', '2018-01-02'),
('TPR-FLL-CSP(1:4)-05-3', '2018-02-05'),
('TPR-FLL-CSP(1:4)-05-4', '2018-02-09'),
('TPR-FLL-CSP(1:4)-06-1', '2018-02-13'),
('TPR-FLL-CSP(1:4)-06-2', '2018-02-17'),
('TPR-FLL-CSP(1:4)-06-3', '2018-02-21'),
('TPR-FLL-CSP(1:4)-06-4', '2018-02-25'),
('TPR-FLL-CSP(1:4)-07-1', '0000-00-00'),
('TPR-FLL-CSP(1:4)-07-2', '2018-03-04'),
('TPR-FLL-CSP(1:4)-07-3', '2018-03-08'),
('TPR-FLL-CSP(1:4)-07-4', '2018-03-12'),
('TPR-FLL-CSP(1:4)-08-1', '2018-03-14'),
('TPR-FLL-CSP(1:4)-08-2', '2018-03-18'),
('TPR-FLL-CSP(1:4)-08-3', '2018-03-22'),
('TPR-FLL-CSP(1:4)-08-4', '2018-03-26'),
('TPR-FLL-CSP(1:4)-09-1', '2018-03-30'),
('TPR-FLL-CSP(1:4)-09-2', '2018-04-04'),
('TPR-FLL-CSP(1:4)-09-3', '2018-04-08'),
('TPR-FLL-CSP(1:4)-09-4', '2018-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `tglpasangodp`
--

CREATE TABLE `tglpasangodp` (
  `odpOut` varchar(21) NOT NULL,
  `tglPemasangan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tglpasangodp`
--

INSERT INTO `tglpasangodp` (`odpOut`, `tglPemasangan`) VALUES
('TPR-FLL-PSP(1:8)-04-1', '2018-02-01'),
('TPR-FLL-PSP(1:8)-04-2', '2018-01-10'),
('TPR-FLL-PSP(1:8)-04-3', '2018-01-27'),
('TPR-FLL-PSP(1:8)-04-4', '2018-02-14'),
('TPR-FLL-PSP(1:8)-04-5', '2018-02-05'),
('TPR-FLL-PSP(1:8)-04-6', '2018-03-01'),
('TPR-FLL-PSP(1:8)-04-7', '2018-03-02'),
('TPR-FLL-PSP(1:8)-04-8', '2018-03-05'),
('TPR-FLL-PSP(1:8)-05-1', '2018-03-09'),
('TPR-FLL-PSP(1:8)-05-2', '2018-03-13'),
('TPR-FLL-PSP(1:8)-05-3', '2017-03-14'),
('TPR-FLL-PSP(1:8)-05-4', '2018-03-17'),
('TPR-FLL-PSP(1:8)-05-5', '2018-03-20'),
('TPR-FLL-PSP(1:8)-05-6', '2018-03-22'),
('TPR-FLL-PSP(1:8)-05-7', '2018-03-29'),
('TPR-FLL-PSP(1:8)-05-8', '2018-04-02'),
('TPR-FLL-PSP(1:8)-06-1', '2018-04-11'),
('TPR-FLL-PSP(1:8)-06-2', '2018-04-15'),
('TPR-FLL-PSP(1:8)-06-3', '2018-04-27'),
('TPR-FLL-PSP(1:8)-06-4', '2018-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tindaklanjutpengaduan`
--

CREATE TABLE `tindaklanjutpengaduan` (
  `pengaduanID` varchar(10) NOT NULL,
  `tglTindakan` date DEFAULT NULL,
  `tglPenutupan` date DEFAULT NULL,
  `lama_tindakan` int(5) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindaklanjutpengaduan`
--

INSERT INTO `tindaklanjutpengaduan` (`pengaduanID`, `tglTindakan`, `tglPenutupan`, `lama_tindakan`, `status`, `keterangan`) VALUES
('PN00113471', '2018-03-05', '2018-03-05', 1, 'Selesai', 'Modem rusak'),
('PN00119811', '2018-03-05', '2018-03-05', 1, 'Selesai', 'Karena cuaca buruk'),
('PN00121090', '2018-03-05', '2018-03-05', 1, 'Selesai', 'Tersambar petir'),
('PN00122557', '2018-03-08', '2018-03-08', 1, 'Selesai', 'Modem rusak'),
('PN00126782', '2018-03-09', '2018-03-09', 1, 'Selesai', 'Modem rusak'),
('PN00130001', '2018-03-10', '2018-03-10', 1, 'Selesai', 'Modem rusak'),
('PN00130002', '2018-03-10', '2018-03-10', 1, 'Selesai', 'Modem rusak'),
('PN00130003', '2018-03-10', '2018-03-10', 1, 'Selesai', 'Modem rusak'),
('PN00130004', '2018-03-10', '2018-03-10', 1, 'Selesai', 'Modem rusak'),
('PN00130005', '2018-03-10', '2018-03-10', 1, 'Selesai', 'Modem rusak'),
('PN00130006', '2018-03-11', '2018-03-11', 1, 'Selesai', 'Modem rusak'),
('PN00130007', '2018-03-11', '2018-03-11', 1, 'Selesai', 'Modem rusak'),
('PN00130008', '2018-03-11', '2018-03-11', 1, 'Selesai', 'Modem rusak'),
('PN00130009', '2018-03-12', '2018-03-12', 1, 'Selesai', 'Modem rusak'),
('PN00130010', '2018-03-12', '2018-03-12', 1, 'Selesai', 'Modem rusak'),
('PN00130011', '2018-03-12', '2018-03-12', 1, 'Selesai', 'Modem rusak'),
('PN00130012', '2018-03-13', '2018-03-13', 1, 'Selesai', 'Modem rusak'),
('PN00130013', '2018-03-13', '2018-03-13', 1, 'Selesai', 'Modem rusak'),
('PN00130014', '2018-03-13', '2018-03-13', 1, 'Selesai', 'Modem rusak'),
('PN00130015', '2018-03-13', '2018-03-13', 1, 'Selesai', 'Modem rusak');

-- --------------------------------------------------------

--
-- Table structure for table `tindaklanjutpengaduanstaff`
--

CREATE TABLE `tindaklanjutpengaduanstaff` (
  `pengaduanID` varchar(10) NOT NULL,
  `staffID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `noTlp` varchar(15) DEFAULT NULL,
  `jalan` varchar(100) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kodePos` varchar(5) DEFAULT NULL,
  `modem` varchar(7) DEFAULT NULL,
  `internet` varchar(10) DEFAULT NULL,
  `tv` varchar(4) DEFAULT NULL,
  `paket` varchar(1) DEFAULT NULL,
  `odpOut` varchar(21) DEFAULT NULL,
  `tglOperasi` date DEFAULT NULL,
  `jmlBulanOperasi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `nama`, `noTlp`, `jalan`, `kota`, `kodePos`, `modem`, `internet`, `tv`, `paket`, `odpOut`, `tglOperasi`, `jmlBulanOperasi`) VALUES
('IH1887794', 'Eka Rina', '021-118931', 'Jalan Elang Timur 3', 'Jakarta Timur', '10320', '110-466', '0120165004', '2033', '1', 'TPR-FLL-PSP(1:8)-04-3', '2018-01-27', 2),
('IH1888401', 'Rizal Putra', '021-121210', 'Jalan Mangga 1', 'Jakarta Selatan', '12110', '111-909', '0141139600', '2176', '2', 'TPR-FLL-PSP(1:8)-04-4', '2018-02-14', 4),
('IH2243771', 'Eka Putra', '024-590023', 'Jalan Gatotkaca', 'Semarang', '50190', '910-005', '0332527007', '1306', '1', 'TPR-FLL-PSP(1:8)-07-2', '2018-03-17', 2),
('IH2251006', 'Yohanes Liem', '024-601134', 'Jalan Bima I', 'Semarang', '50189', '910-783', '0334092251', '1422', '1', 'TPR-FLL-PSP(1:8)-05-', '2018-03-20', 2),
('IH2290118', 'Anindya Kamila', '024-587709', 'Jalan Semar Selatan', 'Semarang', '50189', '910-966', '0340122820', '1501', '1', 'TPR-FLL-PSP(1:8)-02-1', '2018-03-22', 1),
('IH2291104', 'Fitri Hapsari', '024-597443', 'Jalan Petruk II', 'Semarang', '50189', '910-983', '0340134336', '1580', '2', 'TPR-FLL-PSP(1:8)-05-', '2018-03-29', 1),
('IH3208815', 'Andi Khaerudin', '0411-67655', 'Jalan Raja Raya', 'Makassar', '90144', '880-722', '0912053226', '2309', '3', 'TPR-FLL-PSP(1:8)-05-7', '2018-04-02', 1),
('IH3208816', 'Roni Cahyo', '0411-67623', 'Jalan Margonda', 'Makassar', '90145', '880-723', '0912053227', '2300', '1', 'TPR-FLL-PSP(1:8)-10-1', '2018-04-02', 1),
('IH3208817', 'Barat Hudi', '0411-67234', 'Jalan Halim', 'Makassar', '90146', '880-724', '0912053228', '2301', '1', 'TPR-FLL-PSP(1:8)-10-2', '2018-04-03', 1),
('IH3208818', 'Subekti', '0411-67837', 'Jalan Pemuda', 'Makassar', '90147', '880-722', '0912053229', '2302', '1', 'TPR-FLL-PSP(1:8)-10-3', '2018-04-04', 1),
('IH3208819', 'Soni Dwi', '0411-67719', 'Jalan Pemuda', 'Makassar', '90148', '885-726', '0912053220', '2303', '1', 'TPR-FLL-PSP(1:8)-10-4', '2018-04-05', 1),
('IH7699216', 'Michelle', '027-660909', 'Jalan Garuda', 'Sleman', '55286', '505-190', '0471189945', '6619', '3', 'TPR-FLL-PSP(1:8)-02-1', '2018-03-09', 6),
('IH7733577', 'M. Aliyudin', '027-667855', 'Jalan Mlati', 'Sleman', '55285', '503-684', '0478801176', '6690', '2', 'TPR-FLL-PSP(1:8)-04-3', '2018-03-02', 5),
('IH7753185', 'Siti Kurnia', '027-672339', 'Jalan Mawar', 'Sleman', '55285', '505-007', '0500023544', '6701', '1', 'TPR-FLL-PSP(1:8)-06-6', '2018-03-05', 4),
('IH7844055', 'Dina Ayu', '022-777333', 'Jalan Raya Ripah', 'Bandung', '40161', '773-477', '0333090955', '9055', '1', 'TPR-FLL-PSP(1:8)-05-1', '2018-02-05', 2),
('IH8522367', 'Aurel Bray', '031-347886', 'Jalan Semeru Barat', 'Surabaya', '60113', '699-887', '0287798443', '7993', '1', 'TPR-FLL-PSP(1:8)-03-7', '2018-03-13', 3),
('IH8733954', 'Roynaldi Amin', '031-338588', 'Jalan Welirang', 'Surabaya', '60114', '700-011', '0281113552', '8002', '3', 'TPR-FLL-PSP(1:8)-05-3', '2017-03-14', 5),
('IH8821008', 'Tommy Chandra', '031-381976', 'Jalan Merbabu', 'Surabaya', '60113', '699-052', '0276638756', '7899', '1', 'TPR-FLL-PSP(1:8)-03-6', '2018-03-01', 12),
('IH9999031', 'Sulaiman', '021-550665', 'Jalan Cemara 3', 'Jakarta Pusat', '10230', '985-820', '0112350544', '1178', '1', 'TPR-FLL-PSP(1:8)-04-1', '2018-02-01', 2),
('IH9999032', 'Miko W.', '021-551089', 'Jalan Palem Raya', 'Jakarta Pusat', '10410', '986-619', '0112433791', '1290', '1', 'TPR-FLL-PSP(1:8)-04-2', '2018-01-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastLogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `lastLogin`) VALUES
(1, 'senjadijakarta@gmail.com', '5216100123', 1, '2018-05-12 17:10:23', '0000-00-00 00:00:00'),
(2, 'wildan@gmail.com', '5216100029', 2, '2018-05-12 17:10:23', '0000-00-00 00:00:00'),
(3, '123', '123', 3, '2018-05-12 20:01:32', '2018-05-12 20:01:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`CabangID`);

--
-- Indexes for table `cabangtelp`
--
ALTER TABLE `cabangtelp`
  ADD PRIMARY KEY (`CabangID`,`noTelp`);

--
-- Indexes for table `ea`
--
ALTER TABLE `ea`
  ADD PRIMARY KEY (`xConnectCable`);

--
-- Indexes for table `et`
--
ALTER TABLE `et`
  ADD PRIMARY KEY (`xConnectCable`);

--
-- Indexes for table `fileoa`
--
ALTER TABLE `fileoa`
  ADD PRIMARY KEY (`ospTerm`,`fileAbdOSP`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mgrID`);

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
-- Indexes for table `odcin`
--
ALTER TABLE `odcin`
  ADD PRIMARY KEY (`ospTerm`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`odcOut`,`odpOut`);

--
-- Indexes for table `odpin`
--
ALTER TABLE `odpin`
  ADD PRIMARY KEY (`odcOut`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduanID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `staffmemasangoa`
--
ALTER TABLE `staffmemasangoa`
  ADD PRIMARY KEY (`staffID`,`ospTerm`);

--
-- Indexes for table `staffmemasangodc`
--
ALTER TABLE `staffmemasangodc`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `staffmemasangodp`
--
ALTER TABLE `staffmemasangodp`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `stafftelp`
--
ALTER TABLE `stafftelp`
  ADD PRIMARY KEY (`staffID`,`noTelp`);

--
-- Indexes for table `tglpasangoa`
--
ALTER TABLE `tglpasangoa`
  ADD PRIMARY KEY (`ospTerm`);

--
-- Indexes for table `tglpasangodp`
--
ALTER TABLE `tglpasangodp`
  ADD PRIMARY KEY (`odpOut`);

--
-- Indexes for table `tindaklanjutpengaduan`
--
ALTER TABLE `tindaklanjutpengaduan`
  ADD PRIMARY KEY (`pengaduanID`);

--
-- Indexes for table `tindaklanjutpengaduanstaff`
--
ALTER TABLE `tindaklanjutpengaduanstaff`
  ADD PRIMARY KEY (`pengaduanID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

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
