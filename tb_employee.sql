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
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `Employee_ID` varchar(20) NOT NULL,
  `Employee_Name` varchar(30) NOT NULL,
  `Employee_Address` varchar(100) NOT NULL,
  `Employee_Contact` varchar(30) NOT NULL,
  `Employee_Email` varchar(30) NOT NULL,
  `Product_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`Employee_ID`, `Employee_Name`, `Employee_Address`, `Employee_Contact`, `Employee_Email`, `Product_ID`) VALUES
('1', 'karim', 'Uttara', '01778855663', 'abc@gmail.com', 1),
('2', 'Rahim', 'Uttara', '01863529801', 'cbd@gmail.com', 2),
('3', 'Kamal', 'Uttara, sector-10', '01933556487', 'efg@gmail.com', 3),
('4', 'Rajib', 'Mirpur-10', '01632548967', 'rajib@gmail.com', 4),
('5', 'Sujon', 'Abdullahpur', '01896587423', 'sujon12@gmail.com', 5),
('6', 'Jamil', 'Airport', '01632564879', 'jamil@gmail.com', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`Employee_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
