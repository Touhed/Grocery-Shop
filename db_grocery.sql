-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 06:12 PM
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
  `Customer_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`Customer_ID`, `Customer_Name`, `Customer_Address`, `Customer_Contact`, `Customer_Email`) VALUES
('1', 'Jamal', 'Uttara', '01801451781', 'xyz@gmail.com'),
('2', 'Jahir', 'Uttara, sector-10', '01536987458', 'kmnh@gmail.com'),
('3', 'Razu', 'Mirpur', '01778899445', 'razu@gmail.com'),
('4', 'Sohel', 'Uttara, sector-10', '01732654897', 'sohel554@gmail.com'),
('5', 'Rahul', 'Kamarpara', '01956874120', 'rahul809@gamil.com'),
('6', 'Rashed', 'Tungi', '01912365874', 'rashed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `Employee_ID` varchar(20) NOT NULL,
  `Employee_Name` varchar(30) NOT NULL,
  `Employee_Address` varchar(100) NOT NULL,
  `Employee_Contact` varchar(30) NOT NULL,
  `Employee_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`Employee_ID`, `Employee_Name`, `Employee_Address`, `Employee_Contact`, `Employee_Email`) VALUES
('1', 'karim', 'Uttara', '01778855663', 'abc@gmail.com'),
('2', 'Rahim', 'Uttara', '01863529801', 'cbd@gmail.com'),
('3', 'Kamal', 'Uttara, sector-10', '01933556487', 'efg@gmail.com'),
('4', 'Rajib', 'Mirpur-10', '01632548967', 'rajib@gmail.com'),
('5', 'Sujon', 'Abdullahpur', '01896587423', 'sujon12@gmail.com'),
('6', 'Jamil', 'Airport', '01632564879', 'jamil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `Payment_ID` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Vat` int(20) NOT NULL,
  `Total_Cost` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`Payment_ID`, `Date`, `Type`, `Price`, `Vat`, `Total_Cost`) VALUES
('1', '26-10-2018', 'Cash', 9, 1, 10),
('2', '26-10-2018', 'Cash', 18, 2, 20),
('3', '25-10-2018', 'Online', 27, 3, 30),
('4', '25-10-2018', 'Online', 56, 4, 60),
('5', '24-10-2018', 'Cash', 115, 5, 120),
('6', '30-10-2018', 'Cash', 48, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Quantity` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`ID`, `Name`, `Company`, `Quantity`, `Price`) VALUES
('1', 'Potato', 'Pran', '2', '20'),
('2', 'Juice', 'Pran', '2', '30'),
('3', 'Coke', 'Cocacola', '1', '20'),
('4', 'Bread', 'Bekary', '2', '60'),
('5', 'Jelly', 'Pran', '1', '120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
