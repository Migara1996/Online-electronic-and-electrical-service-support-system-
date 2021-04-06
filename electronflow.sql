-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 06:53 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `id` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `district` text NOT NULL,
  `usertype` char(1) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`first_name`, `last_name`, `username`, `id`, `email`, `gender`, `district`, `usertype`, `password`, `cpassword`, `userid`) VALUES
('Admin', '', 'admin', '', '', '', '', '', 'uoc', 'uoc', 1),
('Geesa', 'Vihara', 'geesavihara', '123456788v', 'geesavihara@gmail.com', 'f', 'Gampha', 's', '1', '1', 2),
('isuranga', 'cooray', 'isura', '1995454959', 'isurangacooray@gmail.com', 'm', 'Colombo', 'c', 'isuranga', 'isuranga', 3),
('Migara', 'Devinda', 'miga', '12345698v', 'devindamigara@gmail.com', 'm', 'Gampha', 's', '123', '123', 4),
('Sekha', 'Dayara', 'sekhadayara', '123456789v', 'sekhadayara@gmail.com', 'f', 'Colombo', 'c', '123', '123', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `gender` (`gender`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
