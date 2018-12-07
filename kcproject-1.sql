-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 09:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'rohitgharal.rg@gmail.com', 'shivajivansh');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(200) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'Guest House'),
(2, 'Apartment'),
(3, 'Resort Villa'),
(4, 'Private Villa'),
(5, 'Balcony/Terrace');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name _id` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cus_img` text NOT NULL,
  `cus_city` text NOT NULL,
  `cus_mob` varchar(20) NOT NULL,
  `cus_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name _id`, `Name`, `email`, `password`, `cus_img`, `cus_city`, `cus_mob`, `cus_ip`) VALUES
(12, 'Rohit  gharal', 'rohitgharal.rg@gmail.com', 'shivajivansh', 'log.jpg', 'mumbai', '8692998862', ' ::1'),
(13, '', '', '', '', '', '', ' ::1'),
(14, 'ROhit gha', 'rohitgharal.rg@gmail.com', 'sjbdjk', '', '', '', ' ::1'),
(15, 'rohitalankar', 'ganya@gmail.com', 'shivajivansh', 'rohit.jpg', 'mumbai', '9820930148', ' ::1'),
(16, '', '', '', '', '', '', ' ::1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) NOT NULL,
  `room_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_title`) VALUES
(1, 'Queen'),
(2, 'One bedroom suit'),
(3, 'King '),
(4, 'Deluxe King');

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE `room_table` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `room_cat` text NOT NULL,
  `room_brand` text NOT NULL,
  `room_image` varchar(200) NOT NULL,
  `room_price` int(50) NOT NULL,
  `room_desc` text NOT NULL,
  `room_no` int(10) NOT NULL,
  `room_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_table`
--

INSERT INTO `room_table` (`id`, `title`, `room_cat`, `room_brand`, `room_image`, `room_price`, `room_desc`, `room_no`, `room_date`) VALUES
(1, 'kc queen', 'Queen', 'Private Villa', 'login.jpg', 5000, 'Accent your bedroom with the warm elegance of the Madden Queen bedroom with footboard. A contemporary showpiece, the headboard and integrated footboard has inspirational curved detailing.', 312, '2018-08-14 18:30:00'),
(3, 'Kcs deluxe', 'Queen', 'Guest House', 'delux.jpg', 50000, 'Deluxe (Twin) A functionally arranged living space with furnishings such as a writing desk and parlor style chairs, and a spacious bathroom provide a leisurely feel.', 305, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Name _id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_table`
--
ALTER TABLE `room_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Name _id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_table`
--
ALTER TABLE `room_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
