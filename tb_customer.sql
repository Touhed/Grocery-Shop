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
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `Customer_ID` varchar(20) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Customer_Address` varchar(50) NOT NULL,
  `Customer_Contact` varchar(20) NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Product_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`Customer_ID`, `Customer_Name`, `Customer_Address`, `Customer_Contact`, `Customer_Email`, `Product_ID`) VALUES
('1', 'Jamal', 'Uttara', '01801451781', 'xyz@gmail.com', 1),
('2', 'Jahir', 'Uttara, sector-10', '01536987458', 'kmnh@gmail.com', 2),
('3', 'Razu', 'Mirpur', '01778899445', 'razu@gmail.com', 3),
('4', 'Sohel', 'Uttara, sector-10', '01732654897', 'sohel554@gmail.com', 4),
('5', 'Rahul', 'Kamarpara', '01956874120', 'rahul809@gamil.com', 5),
('6', 'Rashed', 'Tungi', '01912365874', 'rashed@gmail.com', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
