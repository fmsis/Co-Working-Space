-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 08:01 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksa`
--

CREATE TABLE `booksa` (
  `ID` int(11) NOT NULL,
  `Rooms` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Usercount` int(15) NOT NULL,
  `Start_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `End_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DateReceip` date NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(50) CHARACTER SET tis620 NOT NULL DEFAULT 'รอการยืนยัน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booksa`
--

INSERT INTO `booksa` (`ID`, `Rooms`, `Usercount`, `Start_time`, `End_time`, `DateReceip`, `Member_ID`, `Name`, `Status`) VALUES
(1, 'A', 1, '09:00', '10:00', '2018-04-03', 6, 'wipada', 'อนุมัติ'),
(2, 'B', 4, '05:00', '06:00', '2018-04-12', 7, 'pop', 'อนุมัติ'),
(3, 'C', 2, '08:00', '09:00', '2018-04-12', 7, 'pop', 'อนุมัติ'),
(4, 'A', 1, '10:00', '11:00', '2018-04-19', 6, 'wipada', 'อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(10) NOT NULL,
  `Roomname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `Roomname`, `Price`) VALUES
(1, 'A', 80),
(2, 'B', 200),
(3, 'C', 300),
(4, 'D', 150);

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `fileID` int(5) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fileupload` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Member_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`fileID`, `name`, `fileupload`, `dateup`, `Member_ID`) VALUES
(1, 'วิภาดา', '1522687976-1438618361-S129843322-o.jpg', '2018-04-02 16:52:56', 0),
(2, 'pop', '1523885472-1438618361-S129843322-o.jpg', '2018-04-16 13:31:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Member_ID` int(10) NOT NULL,
  `Name` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Lastname` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Username` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Numberphone` varchar(10) CHARACTER SET tis620 NOT NULL,
  `Email` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Password` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Userlevel` varchar(2) CHARACTER SET tis620 NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Member_ID`, `Name`, `Lastname`, `Username`, `Numberphone`, `Email`, `Password`, `Userlevel`) VALUES
(1, 'alisa', 'อลิ', 'aliza', '0906691495', 'alias_ali-liizaa@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'A'),
(5, 'skim', 'skun', 'kim', '123456789', 'skim@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'U'),
(6, 'wipada', 'wiriyaudomkul', 'phing', '0909090909', 'wipada_2538@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'U'),
(7, 'pop', 'pop', 'pop', '0856715543', 'pop', 'c322cc731be308edb4e5111332afde9240013f80fa4b64049bd71c10166f57b8', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksa`
--
ALTER TABLE `booksa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksa`
--
ALTER TABLE `booksa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `fileID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Member_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
