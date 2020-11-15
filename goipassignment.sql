-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 01:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goipassignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `goip`
--

CREATE TABLE `goip` (
  `ID` int(5) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Randomnumber` int(255) NOT NULL,
  `Experience` int(255) NOT NULL,
  `DOB` date NOT NULL,
  `Agreedtoterms` tinyint(1) NOT NULL,
  `Cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goip`
--

INSERT INTO `goip` (`ID`, `Firstname`, `Lastname`, `Password`, `Email`, `Randomnumber`, `Experience`, `DOB`, `Agreedtoterms`, `Cv`) VALUES
(18, 'Last', 'Try', '73783cc0039068a59091e400543cfa38', 'last@gmail.com', 456, '3', '2020-11-10', 1, './uploadfiles/AVL tree.docx'),
(19, 'Last', 'Try', '73783cc0039068a59091e400543cfa38', 'last@gmail.com', 456, '3', '2020-11-10', 1, './uploadfiles/AVL tree.docx'),
(20, 'Last', 'Try', '73783cc0039068a59091e400543cfa38', 'last@gmail.com', 456, '3', '2020-11-10', 1, './uploadfiles/AVL tree.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goip`
--
ALTER TABLE `goip`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goip`
--
ALTER TABLE `goip`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
