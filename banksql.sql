-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 03:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adminid` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `adminid`, `pin`) VALUES
(1, 'UMMASALMA ABDULLAHI', 'MB001', '7379');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `account` int(11) NOT NULL,
  `balance` double DEFAULT '0',
  `balancecol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`account`, `balance`, `balancecol`) VALUES
(166438730, 0, NULL),
(696215511, 1000, NULL),
(870000401, 4500, NULL),
(935114082, 2000, NULL),
(949954807, 300, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(11) NOT NULL,
  `fromaccount` varchar(100) NOT NULL,
  `toaccount` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `currentbal` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `transdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `fromaccount`, `toaccount`, `amount`, `currentbal`, `type`, `transdate`) VALUES
(346, '949954807', '870000401', 500, 1000, 'TRANSFER', '0000-00-00'),
(571, 'MB001', '935114082', 1000, 0, '', '2030-11-18'),
(930, '949954807', '07037716490', 200, 500, 'TOPUP - MTN', '2028-11-18'),
(1378, '949954807', '870000401', 500, 1000, 'TRANSFER', '2027-11-18'),
(2232, 'MB001', '288206879', 1000, 0, '', '2030-11-18'),
(3121, 'MB001', '', 1000, 0, '', '2030-11-18'),
(4741, 'MB001', '870000401', 1000, 2500, '', '2030-11-18'),
(7188, 'MB001', '696215511', 1000, 0, '', '2030-11-18'),
(8520, 'MB001', '870000401', 1000, 3500, '', '2030-11-18'),
(9032, 'MB001', '935114082', 1000, 1000, '', '2030-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `accountno` int(15) NOT NULL,
  `accountname` varchar(45) DEFAULT NULL,
  `accounttype` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `pin` int(4) NOT NULL,
  `openingdate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`accountno`, `accountname`, `accounttype`, `dob`, `gender`, `pin`, `openingdate`) VALUES
(54984886, 'SAMIU SALIHU', 'SAVINGS', '1111-01-01', 'Male', 7379, 'Tue-Nov-2018'),
(166438730, 'MB001', 'SAVINGS', '', 'Select Gender', 7379, 'Fri-Nov-2018'),
(264498821, 'MMM', 'SAVINGS', '2001-01-01', 'Male', 1234, 'Fri-Nov-2018'),
(288206879, 'SAMIU SALIHU', 'SAVINGS', '1997-01-01', 'Male', 7379, 'Tue-Nov-2018'),
(695436373, 'ISAH AHMAD', 'SAVINGS', '1990-03-03', 'Male', 1234, 'Fri-Nov-2018'),
(696215511, 'ISMAIL UMAR', 'SAVINGS', '1980-01-02', 'Male', 7379, 'Fri-Nov-2018'),
(870000401, 'MUHAMMAD USMAN', 'SAVINGS', '1997-01-01', 'Male', 1234, 'Tue-Nov-2018'),
(935114082, 'BILYA ADAM', 'SAVINGS', '2018-11-20', 'Male', 1234, 'Fri-Nov-2018'),
(949954807, 'SAMIU SALIHU', 'SAVINGS', '1997-09-10', 'Male', 7379, 'Tue-Nov-2018'),
(1162028767, 'SAMIU SALIHU', 'SAVINGS', '1997-01-01', 'Male', 7379, 'Tue-Nov-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`account`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`accountno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
