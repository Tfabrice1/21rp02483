-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 04:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(16) NOT NULL,
  `Names` varchar(40) NOT NULL,
  `Regnumber` varchar(50) NOT NULL,
  `Department` varchar(13) NOT NULL,
  `Campus` varchar(34) NOT NULL,
  `amount_in_franc` int(11) NOT NULL,
  `Phonenumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Names`, `Regnumber`, `Department`, `Campus`, `amount_in_franc`, `Phonenumber`) VALUES
(1, 'FAbrice', '21RP0987   ', 'MECH', 'HUYE ', 0, '1234'),
(2, 'David', '21RP05569', 'IT', 'TUMBA', 0, '13243546'),
(23457, 'emmy', '21rp000', 'it', 'tumba', 2000, '78463746'),
(23458, 'john', '21rp9768', 'RE', 'tumba', 13000, '078463746'),
(23459, 'fabrice', '21rp867', 'it', 'tumba', 25000, '0784647463');

-- --------------------------------------------------------

--
-- Table structure for table `creatte`
--

CREATE TABLE `creatte` (
  `email` varchar(40) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cpassword` varchar(40) NOT NULL,
  `pay_status` varchar(40) NOT NULL DEFAULT 'not_pay'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creatte`
--

INSERT INTO `creatte` (`email`, `phonenumber`, `password`, `cpassword`, `pay_status`) VALUES
('', '0781099825', '12345', '12345', 'not_pay'),
('hakizimana@gmail.com', '250781099825', '827ccb0eea8a706c4c34a16891f84e7b', '', 'payed'),
('', '078464746', '1234', '1234', 'not_pay'),
('', '078100987', '1234', '1234', 'not_pay'),
('', '0787635353', '1234', '1234', 'not_pay'),
('', '078463746', '1000', '1000', 'not_pay'),
('', '0784647463', '12345', '12345', 'not_pay');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `pay` int(11) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pay`, `number`) VALUES
(70, '078464746'),
(70, '078464746'),
(70, '078464746'),
(7000, '078464746'),
(8000, '078464746'),
(8000, '078464746'),
(90000, '078463746'),
(800, '0781099825'),
(2000, '0784647463');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23460;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
