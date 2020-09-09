-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 02:20 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `Payment_ID` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Product_ID` int(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Vat` int(20) NOT NULL,
  `Total_Cost` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`Payment_ID`, `Date`, `Type`, `Product_ID`, `Price`, `Vat`, `Total_Cost`) VALUES
('1', '26-10-2018', 'Cash', 1, 10, 1, 10),
('2', '26-10-2018', 'Cash', 2, 20, 2, 20),
('3', '25-10-2018', 'Online', 3, 30, 3, 30),
('4', '25-10-2018', 'Online', 4, 60, 4, 60),
('5', '24-10-2018', 'Cash', 5, 120, 5, 120),
('6', '30-10-2018', 'Cash', 6, 50, 2, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`Payment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
