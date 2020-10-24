-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2020 at 11:48 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `Application`
--

CREATE TABLE `Application` (
  `id_Application` int(11) NOT NULL,
  `date_Submitted` date DEFAULT NULL,
  `vacation_Start` date DEFAULT NULL,
  `vacation_End` date DEFAULT NULL,
  `days_Requested` int(4) DEFAULT NULL,
  `application_Status` enum('pending','approved','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Application`
--

INSERT INTO `Application` (`id_Application`, `date_Submitted`, `vacation_Start`, `vacation_End`, `days_Requested`, `application_Status`) VALUES
(1, '2020-10-29', '2020-11-01', '2020-11-05', 5, 'pending'),
(2, '2020-11-01', '2020-11-15', '2020-11-19', 5, 'pending'),
(3, '2020-12-05', '2020-12-15', '2020-12-26', 12, 'pending'),
(4, '2021-01-01', '2021-01-07', '2021-01-12', 6, 'pending'),
(5, '2020-02-15', '2020-10-16', '2020-10-20', 5, 'approved'),
(6, '2020-02-15', '2020-10-16', '2020-10-20', 5, 'approved'),
(7, '2020-09-14', '2020-09-28', '2020-10-01', 4, 'rejected'),
(8, '2020-09-14', '2020-09-28', '2020-10-01', 4, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_Id` int(11) NOT NULL,
  `user_Password` varchar(100) NOT NULL,
  `user_Firstname` varchar(45) DEFAULT NULL,
  `user_Lastname` varchar(70) DEFAULT NULL,
  `user_Email` varchar(70) DEFAULT NULL,
  `user_Type` enum('employee','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_Id`, `user_Password`, `user_Firstname`, `user_Lastname`, `user_Email`, `user_Type`) VALUES
(1, '81dc9bdb52d04dc20036dbd8313ed055', 'Antreas', 'Neofytou', 'antreas8595@hotmail.com', 'employee'),
(4, 'd93591bdf7860e1e4ee2fca799911215', 'Marios', 'Charalambides', 'marios@gmail.com', 'employee'),
(5, 'd93591bdf7860e1e4ee2fca799911215', 'Marios', 'Charalambides', 'marios@gmail.com', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Application`
--
ALTER TABLE `Application`
  ADD PRIMARY KEY (`id_Application`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Application`
--
ALTER TABLE `Application`
  MODIFY `id_Application` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
