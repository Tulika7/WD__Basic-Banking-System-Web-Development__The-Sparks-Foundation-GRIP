-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction_ID` int(20) NOT NULL,
  `Sender_Account_Number` varchar(20) NOT NULL,
  `Sender_First_Name` varchar(20) NOT NULL,
  `Sender_Last_Name` varchar(20) NOT NULL,
  `Receiver_Account_Number` varchar(20) NOT NULL,
  `Receiver_First_Name` varchar(20) NOT NULL,
  `Receiver_Last_Name` varchar(20) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Transaction_ID`, `Sender_Account_Number`, `Sender_First_Name`, `Sender_Last_Name`, `Receiver_Account_Number`, `Receiver_First_Name`, `Receiver_Last_Name`, `Amount`, `Time`) VALUES
(1, 'PTB000001', 'Sanjana', 'Nath', 'PTB000002', 'Rai', 'Mondal', 1000, '2021-01-18 19:58:07'),
(2, 'PTB000003', 'Sumanta', 'Hazra', 'PTB000007', 'Moupiya', 'Mondal', 2500, '2021-01-18 19:58:40'),
(3, 'PTB000004', 'Diya ', 'Mondal', 'PTB000007', 'Moupiya', 'Mondal', 456, '2021-01-18 22:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_First_Name` varchar(25) NOT NULL,
  `User_Last_Name` varchar(25) NOT NULL,
  `User_Age` int(3) NOT NULL,
  `User_DOB` date NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_MobNo` bigint(10) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Balance` int(25) NOT NULL,
  `Account_Number` varchar(25) NOT NULL,
  `Account_Type` varchar(25) NOT NULL,
  `User_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_First_Name`, `User_Last_Name`, `User_Age`, `User_DOB`, `User_Gender`, `User_MobNo`, `User_Email`, `User_Balance`, `Account_Number`, `Account_Type`, `User_Image`) VALUES
(1, 'Sanjana', 'Nath', 22, '1998-07-15', 'Female', 9853634262, 'sanjananath@example.com', 9000, 'PTB000001', 'Savings', 'User1.png'),
(2, 'Rai', 'Mondal', 21, '1999-03-13', 'Female', 9628365483, 'raimondal@example.com', 11000, 'PTB000002', 'Current', 'User2.png'),
(3, 'Sumanta', 'Hazra', 25, '1995-06-23', 'Male', 9478736256, 'sumantahazra@example.com', 7500, 'PTB000003', 'Salary', 'User3.png'),
(4, 'Diya ', 'Mondal', 22, '1998-07-12', 'Female', 9564785439, 'diyamondal@example.com', 9544, 'PTB000004', 'Savings', 'User4.png'),
(5, 'Trisha', 'Das', 23, '1997-08-09', 'Female', 8356909932, 'trishadas@example.com', 10000, 'PTB000005', 'Current', 'User5.png'),
(6, 'Amrita', 'Sen', 25, '1995-08-22', 'Female', 9086112865, 'amritasen@example.com', 10000, 'PTB000006', 'Salary', 'User6.png'),
(7, 'Moupiya', 'Mondal', 22, '1998-09-19', 'Female', 8079765438, 'moupiyamondal@example.com', 12956, 'PTB000007', 'Savings', 'User7.png'),
(8, 'Payel', 'Santra', 20, '2000-01-01', 'Female', 9857609876, 'payelsantra@example.com', 10000, 'PTB000008', 'Savings', 'User8.png'),
(9, 'Sonai', 'Sen', 28, '1992-12-07', 'Female', 9807654987, 'sonaisen@example.com', 10000, 'PTB000009', 'Salary', 'User9.png'),
(10, 'Disha', 'Pal', 23, '1997-10-02', 'Female', 9803214579, 'dishapal@example.com', 10000, 'PTB000010', 'Current', 'User10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Transaction_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
