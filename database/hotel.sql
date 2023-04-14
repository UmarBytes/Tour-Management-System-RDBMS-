-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 03:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(2, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Allowed'),
(3, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(4, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(5, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(6, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(7, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(8, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(9, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(10, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(11, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(12, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(13, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(14, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(15, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(16, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(17, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(18, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(19, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(20, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(21, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(22, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(23, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(24, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(25, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed'),
(26, 'wali Sultan', 1453878367, 'wali@gmail.com', '2023-12-20', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'wali', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Miss.', 'wali', 'sultan', 'Deluxe Room', 'Double', 1, '2021-12-08', '2021-12-31', 5060.00, 5363.60, 202.40, 'Breakfast', 101.20, 23),
(3, 'Mr.', 'ch', 'ayesha', 'Deluxe Room', 'Triple', 3, '2021-12-14', '2021-12-30', 10560.00, 10982.40, 316.80, 'Half Board', 105.60, 16),
(4, 'Rev .', 'KJ.HVBIL.UYFV;J', 'KHJVB', 'Superior Room', 'Single', 2, '2021-12-21', '2021-12-22', 640.00, 656.00, 12.80, 'Full Board', 3.20, 1),
(5, 'Rev .', 'hussnain', 'ART', 'Guest House', 'Double', 3, '2021-12-20', '2021-12-29', 4860.00, 4957.20, 64.80, 'Breakfast', 32.40, 9),
(6, 'Prof.', 'haram', 'zainia', 'Deluxe Room', 'Triple', 3, '2021-12-20', '2021-12-30', 6600.00, 6864.00, 198.00, 'Half Board', 66.00, 10),
(7, 'Mrs.', 'numra', 'kanwal', 'Single Room', 'Triple', 2, '2021-12-28', '2021-12-31', 900.00, 940.50, 27.00, 'Breakfast', 13.50, 3),
(8, 'Mr.', 'Noor', 'zainab', 'Deluxe Room', 'Single', 2, '2021-12-27', '2021-12-29', 880.00, 897.60, 13.20, 'Half Board', 4.40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'NotFree', 4),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', 0),
(7, 'Deluxe Room', 'Double', 'Free', 0),
(8, 'Deluxe Room', 'Triple', 'Free', 0),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', 0),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(11, 'Mr.', 'wali', 'sultan', 'wali@gmail.com', 'YES', 'pakistan', '453453', 'Single Room', 'Single', '4', 'Breakfast', '2021-12-20', '2021-12-30', 'Not Conform', 10),
(12, 'Dr.', 'Ayesha', 'Chaudhary', 'ays@gmail.com', 'YES', 'Pakistan', '1122414578', 'Deluxe Room', 'Single', '1', 'Half Board', '0123-02-12', '0021-03-21', 'Not Conform', -37217),
(13, 'Mr.', 'waqar younas', 'khan', '123@gmail.com', 'YES', 'Pakistan', '315132156', 'Superior Room', 'Single', '1', 'Half Board', '0321-03-21', '2121-02-01', 'Not Conform', 657389),
(14, 'Dr.', 'jameel', 'ahmed', 'mumarfarooqllb@gmail.com', 'YES', 'Austria', '0315132156', 'Deluxe Room', 'Double', '3', 'Full Board', '0212-10-21', '0321-03-21', 'Not Conform', 39597);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
