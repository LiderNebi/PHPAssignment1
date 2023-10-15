-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 02:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `position` varchar(40) NOT NULL,
  `hours_worked` varchar(4) NOT NULL,
  `hourly_rate` int(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `first_name`, `last_name`, `email`, `position`, `hours_worked`, `hourly_rate`, `address`) VALUES
(1, 'Lider Nebi', 'Mese', '200557305@student.georgianc.on.ca', 'Supervisor', '20', 18, ' Arleta Road, North York, ON, CA'),
(13, 'Antonio', 'Trambore', 'antoniobore@gmail.com', 'Manager', '65', 25, ' 125 John Street Downtown Toronto ON CANADA'),
(14, 'Daniela ', 'Gadot', 'gadotdaniela@gmail.com', 'Supervisor', '40', 18, ' Dupont Road, Trinity  Bellwoods , Toronto,ON, CANADA'),
(15, 'James', 'Harden', 'hardenjames@hotmail.com', 'Cook', '40', 21, ' 124 Allen Road, Scarboroug, Toronto, ON, CANADA'),
(16, 'Giseli', 'Gaucho', 'gauchogiseli@gmail.com', 'Owner', '44', 45, ' 13 Bay Street, Lakeshore, Toronto, Ontario '),
(17, 'Debra', 'Kayla', 'kayladebra16@gmail.com', 'Garnisher', '35', 13, ' '),
(18, 'Diana', 'Klitckova', 'diana1993@gmail.com', 'Cashier', '35', 17, ' 112 Dire Road, Brampton, Toronto, ON, CANADA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
