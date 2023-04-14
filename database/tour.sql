-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 06:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `DestinationID` int(11) NOT NULL,
  `DestinationName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`DestinationID`, `DestinationName`) VALUES
(1, 'Multan'),
(2, 'Gilgit'),
(3, 'Chitral'),
(4, 'Murree'),
(5, 'Lahore'),
(6, 'Taxila');

-- --------------------------------------------------------

--
-- Table structure for table `famousspots`
--

CREATE TABLE `famousspots` (
  `SpotID` int(11) NOT NULL,
  `SpotName` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `PerhedPrice` int(11) DEFAULT NULL,
  `DestinationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `famousspots`
--

INSERT INTO `famousspots` (`SpotID`, `SpotName`, `Street`, `City`, `ZipCode`, `PerhedPrice`, `DestinationID`) VALUES
(1, 'Tomb of Hazrat Shah Rukn-e-Alam', 'Tomb', 'Multan', '2521', 50, 1),
(2, 'Fort Kohna Qasim Garden', 'Fort Kohna', 'Multan', '8021', 60, 1),
(3, 'Ghanta Ghar/Municipal', 'Ghanta Ghar', 'Multan', '5021', 40, 1),
(4, 'Qilla Kohna Qasim Bagh Stadium', 'Qilla Kohna', 'Multan', '3021', 50, 1),
(5, 'Buddha De Yasheni', 'Buddha', 'Gilgit', '3223', 300, 2),
(6, 'Chinar Bagh', 'Buddha Gali', 'Gilgit', '3223', 301, 2),
(7, 'Naltar Valley', 'Buddha', 'Gilgit', '3223', 304, 2),
(8, 'Arang Kel', 'Buddha', 'Gilgit', '3223', 302, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `HotelName` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `PerRoomCost` int(11) DEFAULT NULL,
  `DestinationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `HotelName`, `Street`, `City`, `ZipCode`, `PerRoomCost`, `DestinationID`) VALUES
(1, 'Ramada by Wyndham Multan', 'Multan Road', 'Multan', '6565', 1200, 1),
(2, 'Avari Xpress Multan', 'Xpress Road', 'Multan', '63065', 2000, 1),
(3, 'Hotel Pak Continental', 'Multan Road', 'Multan', '7565', 8000, 1),
(4, 'Chalet Multan', 'Wyndham Road', 'Multan', '9565', 3000, 1),
(5, 'SERENA SHIGAR FORT', 'hotel wali', 'Gilgit', '32756', 4500, 2),
(6, 'Holina Hotel', 'hotel vally', 'Gilgit', '32753', 5000, 2),
(7, ' SHIGAR FORT', 'hotel wali', 'Gilgit', '32756', 2657, 2),
(8, ' Luxus Hotel', 'luxi', 'Gilgit', '2756', 5657, 2);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `DestinationID` int(11) NOT NULL,
  `SpotID` int(11) NOT NULL,
  `RestaurantID` int(11) NOT NULL,
  `TM_ID` int(11) NOT NULL,
  `HotelID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`DestinationID`, `SpotID`, `RestaurantID`, `TM_ID`, `HotelID`) VALUES
(1, 1, 1, 1, 1),
(1, 2, 2, 2, 3),
(1, 2, 2, 3, 3),
(1, 2, 3, 2, 3),
(2, 5, 5, 5, 5),
(2, 5, 7, 8, 7),
(2, 6, 6, 8, 5),
(2, 6, 7, 7, 6),
(2, 7, 5, 6, 5),
(2, 7, 8, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `RestaurantID` int(11) NOT NULL,
  `RestaurantName` varchar(30) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `PerhedCost` int(11) DEFAULT NULL,
  `DestinationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RestaurantID`, `RestaurantName`, `Street`, `City`, `ZipCode`, `PerhedCost`, `DestinationID`) VALUES
(1, 'Shahjahan Grill Multan', 'Grill Multan', 'Multan', '6565', 500, 1),
(2, 'Chinatown & Jade Café', 'Chinatown Multan', 'Multan', '5565', 1500, 1),
(3, 'Tasty Plus Restaurant', 'Tasty Multan', 'Multan', '6965', 1200, 1),
(4, 'Tasty Plaus Restaurent', 'Gujjran digali', 'Multan', '3276', 5656, 1),
(5, ' Plaus Restaurent', 'Gujjran digali', 'Gilgit', '3276', 566, 2),
(6, 'Bhudha pase Hotel', ' digali', 'Gilgit', '32323', 533, 2),
(7, 'chinar bagh', 'chani', 'Gilgit', '3268', 2367, 2),
(8, 'Nalter Vally', 'canalview', 'Gilgit', '3232', 2232, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tmedium`
--

CREATE TABLE `tmedium` (
  `TM_ID` int(11) NOT NULL,
  `TM_Name` varchar(50) DEFAULT NULL,
  `TM_type` varchar(50) DEFAULT NULL,
  `D_Cost` int(11) DEFAULT NULL,
  `DestinationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmedium`
--

INSERT INTO `tmedium` (`TM_ID`, `TM_Name`, `TM_type`, `D_Cost`, `DestinationID`) VALUES
(1, 'bus', 'Bonbon', 24000, 1),
(2, 'bus', 'Bonbon', 20000, 1),
(3, 'car', 'Lovebug', 30000, 1),
(4, 'car', 'Bonbon', 36000, 1),
(5, 'Train', 'Bussiness class', 16000, 2),
(6, 'Train', 'Bussiness class', 20000, 2),
(7, 'Car', 'Bussiness class', 60000, 2),
(8, 'Bus', 'Bussiness class', 55000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `TouristID` int(11) NOT NULL,
  `T_name` varchar(30) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` int(8) DEFAULT NULL,
  `PhoneNO` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`TouristID`, `T_name`, `Email`, `Password`, `PhoneNO`, `age`) VALUES
(2, 'M Umar', 'umar@gmail.com', 54321, 2147483647, 22),
(3, 'Arham ', 'arm@gmail.com', 112233, 2147483647, 23),
(4, 'Ali Saad', 'ali@gmail.com', 789456, 2147483647, 19),
(5, 'usama ', 'usama@gmail.com', 112233, 214748322, 23),
(6, 'Muhammad umar', 'umar@gmail.com', 12345, 263512636, 21),
(7, 'Breera Usama', 'bu221@gmail.com', 0, 2147483647, 21),
(8, 'sohail gujjar', 'sohail143@gmail.com', 1234, 2147483647, 21);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `TouristID` int(11) DEFAULT NULL,
  `DestinationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`TouristID`, `DestinationID`) VALUES
(3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`DestinationID`);

--
-- Indexes for table `famousspots`
--
ALTER TABLE `famousspots`
  ADD PRIMARY KEY (`SpotID`),
  ADD KEY `DestinationID` (`DestinationID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`),
  ADD KEY `DestinationID` (`DestinationID`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`DestinationID`,`SpotID`,`RestaurantID`,`TM_ID`,`HotelID`),
  ADD KEY `DestinationID` (`DestinationID`),
  ADD KEY `RestaurantID` (`RestaurantID`),
  ADD KEY `SpotID` (`SpotID`),
  ADD KEY `HotelID` (`HotelID`),
  ADD KEY `TM_ID` (`TM_ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`RestaurantID`),
  ADD KEY `DestinationID` (`DestinationID`);

--
-- Indexes for table `tmedium`
--
ALTER TABLE `tmedium`
  ADD PRIMARY KEY (`TM_ID`),
  ADD KEY `DestinationID` (`DestinationID`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`TouristID`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD KEY `TouristID` (`TouristID`),
  ADD KEY `DestinationID` (`DestinationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `TouristID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `famousspots`
--
ALTER TABLE `famousspots`
  ADD CONSTRAINT `famousspots_ibfk_1` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`);

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `visit_ibfk_1` FOREIGN KEY (`TouristID`) REFERENCES `tourist` (`TouristID`),
  ADD CONSTRAINT `visit_ibfk_2` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
