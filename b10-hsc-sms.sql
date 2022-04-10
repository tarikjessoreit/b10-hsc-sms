-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b10-hsc-sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `std_reg_date` datetime NOT NULL,
  `std_roll` int(8) NOT NULL,
  `std_reg` int(8) NOT NULL,
  `std_year` varchar(4) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_address` text NOT NULL,
  `std_contact` varchar(18) NOT NULL,
  `std_email` varchar(200) NOT NULL,
  `std_photo_url` varchar(250) NOT NULL,
  `std_note` text NOT NULL,
  `std_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `std_reg_date`, `std_roll`, `std_reg`, `std_year`, `std_name`, `std_address`, `std_contact`, `std_email`, `std_photo_url`, `std_note`, `std_status`) VALUES
(1, '2022-03-24 13:38:13', 2022001, 11223344, '2nd', 'Md. Sakib', 'Jessore, Khulna, Bangladesh', '0177777777', 'sakib@gamil.com', '', 'he is good.', 'active'),
(2, '2022-03-27 12:55:22', 2022002, 111213, '1st', 'Rofik', 'Jessore', '0177777', 'abcde@gmail.com', '', 'note here', 'active'),
(4, '2022-03-27 13:06:06', 2022004, 111215, '1st', 'Mr. Hablu', 'Narail, Khulna, Bangladesh', '01999999999', 'hablu@gmail.com', 'assets/images/uploads/2022003.jpg', 'He is almost good!', 'active'),
(5, '2022-03-27 13:30:27', 2022005, 111214, '2nd', 'Mr. Mofiz', 'Jessore', '01999999999', 'mrmofiz@gmail.com', 'assets/images/uploads/2022005.jpg', 'very good. ', 'transferred'),
(7, '2022-03-29 13:48:05', 2022007, 111216, '1st', 'Samiya', 'Narail, Khulna, Bangladesh', '01999999999', 'abcde@gmail.com', 'assets/images/uploads/2022007.jpg', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `user_rules` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `userpassword`, `user_rules`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(4, 'admin02', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(8, 'sakib', 'e807f1fcf82d132f9bb018ca6738a19f', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `std_roll` (`std_roll`,`std_reg`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
