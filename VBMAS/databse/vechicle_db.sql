-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 08:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vechicle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Username`, `Password`) VALUES
('admin', 'admin12'),
('admin01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `customer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`date`, `time`, `customer`) VALUES
('2023-06-24', '14:09:22', 'ASa'),
('2023-06-24', '14:09:22', 'arshith');

-- --------------------------------------------------------

--
-- Table structure for table `car_services`
--

CREATE TABLE `car_services` (
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `car_maker` varchar(30) NOT NULL,
  `model_line` varchar(30) NOT NULL,
  `cae_year` varchar(30) NOT NULL,
  `plate_no` varchar(30) NOT NULL,
  `pickup_drop` varchar(30) NOT NULL,
  `type_service` varchar(30) NOT NULL,
  `cust_serv` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_services`
--

INSERT INTO `car_services` (`date`, `car_maker`, `model_line`, `cae_year`, `plate_no`, `pickup_drop`, `type_service`, `cust_serv`, `address`, `email`) VALUES
('2023-07-29 09:18:54', 'arshith', 'bmw m3', '2006', 'kl 11 au 22', 'pickup', 'regular-checkup', '', '', ''),
('2023-07-29 09:20:30', 'arshith', 'bmw m3', '2006', 'kl 11 au 22', 'pickup', 'regular-checkup', '', '', ''),
('2023-07-29 09:25:28', 'abhay', 'wagnor', '2010', 'kl 11 au 22', 'drop', 'customize-service', 'battery recharge', '', 'abhayvp@gmail.com'),
('2023-08-28 12:13:56', 'arshith', 'bmw m3', '1994', 'kl 11 au 22', 'Yes', 'regular-checkup', '', 'hi lite city', 'arshith@123gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_ser_list`
--

CREATE TABLE `emergency_ser_list` (
  `Request_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_number` int(11) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Service_type` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `cost` int(11) DEFAULT 0,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergency_ser_list`
--

INSERT INTO `emergency_ser_list` (`Request_id`, `Name`, `Phone_number`, `Location`, `Service_type`, `status`, `added_on`, `cost`, `email`) VALUES
(8, 'abhay', 1234567890, 'ngo quaters', 'Mechanic Breakdown', '3', '2023-05-31 11:43:25', 700, 'abhayvp@gmail.com'),
(9, 'arshith', 1234567890, 'awh', 'Fuel Emergency', '2', '2023-05-31 11:47:09', 500, ''),
(33, 'sara', 2147483647, 'town', 'Mechanical Breakdown', '3', '2023-06-10 12:17:47', 1000, ''),
(35, 'keerthi', 732673643, 'mahe', 'Mechanical breakdown', '3', '2023-06-11 09:31:16', 1000, ''),
(36, 'joseph', 34233247, 'hi lite mall', 'Flat Tire', '3', '2023-06-11 11:21:23', 500, ''),
(37, 'meeraja', 2147483647, 'near puthiyastand', 'Flat Tire', '3', '2023-06-16 06:52:12', 150, ''),
(38, 'aravind', 2147483647, 'chevayur', 'Mechanical Breakdown', '3', '2023-06-19 20:25:39', 500, ''),
(39, 'abhay', 2147483647, 'ngo quarters', 'Fuel Emergency', '4', '2023-06-20 01:49:01', 0, 'abhayvp@gmail.com'),
(40, 'natasha', 2147483647, 'manachira', 'Flat Tire', '3', '2023-06-25 12:02:06', 0, ''),
(41, 'anurag', 2147483647, 'beypore', 'Mechanical Breakdown', '3', '2023-06-25 13:19:42', 0, ''),
(42, 'user', 0, 'calicut', 'Fuel Emergency', '3', '2023-06-25 14:23:09', 300, ''),
(43, 'arshith', 2147483647, 'arakinar', 'Flat Tire', '3', '2023-06-26 15:14:23', 0, ''),
(44, 'aswin', 2147483647, 'beypore', 'Flat Tire', '4', '2023-06-29 16:41:35', 0, ''),
(45, 'aqueel', 2147483647, 'awh', 'Road Accident', '4', '2023-06-29 16:45:03', 0, ''),
(46, 'shamil', 2147483647, 'at puthiyastand', 'Mechanical Breakdown', '3', '2023-06-29 16:46:31', 0, ''),
(47, 'nikhil ravi', 2147483647, 'near medical college', 'Fuel Emergency', '3', '2023-07-01 21:34:24', 0, ''),
(48, 'rijas', 2147483647, 'town', 'Mechanical Breakdown', '4', '2023-07-01 21:36:20', 0, 'rijas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_list`
--

CREATE TABLE `mechanic_list` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `services` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `attendance` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanic_list`
--

INSERT INTO `mechanic_list` (`name`, `email`, `phone`, `date`, `services`, `month`, `attendance`, `salary`, `address`) VALUES
('mech01', 'mech01@gmail.com', 2147483647, '2023-06-01', 'Mechanical breakdown', 'june', '86', 15000, 'abcd villa'),
('mech02', 'mech02gmail.com', 1233344441, '2023-06-05', 'fuel emergency', '', '100', 10000, 'efg city'),
('mech03', 'mech03@gmail.com', 2147483647, '2023-06-02', 'Tyre replacement', 'july', '5', 15000, 'hi lite');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_login`
--

CREATE TABLE `mechanic_login` (
  `email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanic_login`
--

INSERT INTO `mechanic_login` (`email`, `Username`, `Password`, `phone`, `address`, `img1`, `img2`, `img3`, `status`) VALUES
('mech01@gmail.com', 'mech01', 'mechanic', 2147483647, 'gandhi nagar', 'degree.jpg', 'download.jpg', 'download.png', 'approved'),
('mech02@gmail.com', 'mech02', 'mechanic', 2147483647, 'hi lite city', 'degree.jpg', 'download.jpg', 'download.png', 'approved'),
('mech03@gmail.com', 'mech03', 'mechanic', 2147483647, 'abc', 'download.jpg', 'download.png', 'degree.jpg', 'approved'),
('mech04@gmail.com', 'mech04', 'mechanic', 2147483647, 'abc villa', 'degree.jpg', 'download.jpg', 'download.jpg', 'approved'),
('mech04@gmail.com', 'mech04', 'mechanic', 2147483647, 'abc villa', 'degree.jpg', 'download.png', 'download.jpg', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `name` varchar(30) NOT NULL,
  `rating` varchar(30) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`name`, `rating`, `comments`) VALUES
('arshith', '5', 'nice service'),
('ASAASD', '3', 'adada'),
('ASAASD', '5', 'adada'),
('asda', '1', 'adasd'),
('asda', '1', 'adasd'),
('asda', '1', 'adasd'),
('asda', '1', 'adasd'),
('abhay', '5', 'nice attitude towards people'),
('abhay', '5', 'good service'),
('user', '4', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `service_history`
--

CREATE TABLE `service_history` (
  `Service_Date` date NOT NULL,
  `Service_Type` varchar(30) NOT NULL,
  `Mechanic` varchar(30) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_history`
--

INSERT INTO `service_history` (`Service_Date`, `Service_Type`, `Mechanic`, `Cost`) VALUES
('2023-06-28', 'Fuel emergency', 'mech01', 500),
('2023-06-29', 'Mechanical breakdown', 'mech02', 1000),
('2023-06-30', 'Flat Tyre', 'mech03', 900);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Name`, `email`, `phone`, `password`) VALUES
('abhay', 'abhayvp@gmail.com', 567890432, 'abhay'),
('arshith', 'arshith@gmail.com', 12349876, 'arshith'),
('user', 'user12@gmail.com', 2147483647, 'user123'),
('arshith', 'abhayvp12@gmail.com', 1232323232, 'asdasdas'),
('anurag', 'anurag@gmail.com', 123456789, 'anuragtv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_ser_list`
--
ALTER TABLE `emergency_ser_list`
  ADD PRIMARY KEY (`Request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_ser_list`
--
ALTER TABLE `emergency_ser_list`
  MODIFY `Request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
