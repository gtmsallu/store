-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_name`, `Role`, `Email`, `Password`, `image`, `created_on`, `updated_on`) VALUES
(18, 'sailendra', 1, 'shallugautam732@gmail.com', 'sallu', 'img/1590490107_sallluu.jpg', '2020-05-26 16:33:27', '2020-06-02 19:42:33'),
(19, 'neeta gautam', 2, 'nitagautam642@gmail.com', '1234', 'img/1590592572_hostel_logo.png', '2020-05-27 21:01:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(40) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created_on`, `updated_on`) VALUES
(5, 'Robbery', '2020-05-27 21:07:29', '0000-00-00 00:00:00'),
(6, 'Rape', '2020-05-27 21:07:45', '0000-00-00 00:00:00'),
(7, 'Kidnapping', '2020-05-27 21:08:11', '0000-00-00 00:00:00'),
(8, 'Murder', '2020-05-27 21:08:48', '0000-00-00 00:00:00'),
(9, 'Missing', '2020-05-27 21:09:01', '0000-00-00 00:00:00'),
(10, 'Domestic Voilence', '2020-05-27 21:09:13', '0000-00-00 00:00:00'),
(11, 'Blackmailing', '2020-05-27 21:09:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crime_report`
--

CREATE TABLE `crime_report` (
  `id` int(11) NOT NULL,
  `Reporter` varchar(50) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Suspects` varchar(100) DEFAULT NULL,
  `Crime_location` varchar(100) NOT NULL,
  `Date_of_crime` datetime NOT NULL,
  `Evidence` varchar(100) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_report`
--

INSERT INTO `crime_report` (`id`, `Reporter`, `Category`, `Description`, `Contact`, `Suspects`, `Crime_location`, `Date_of_crime`, `Evidence`, `created_on`, `updated_on`) VALUES
(8, 'sallugtm', 'Rape', 'gef', '9867015128', 'Nisi maxime unde aut', 'Facilis sequi blandi', '2020-07-02 00:00:00', 'Itaque quas minim co', '2020-06-02 13:39:10', '0000-00-00 00:00:00'),
(9, 'sailendra gautam', 'Rape', 'afd', '9811997989', 'dfsa', 'afd', '2020-06-24 00:00:00', 'dfs', '2020-06-02 13:44:36', '0000-00-00 00:00:00'),
(10, 'sailendra gautam', 'Blackmailing', 'Aspernatur quis magn', '9811997989', 'Facere quas amet fa', 'Consequuntur debitis', '0000-00-00 00:00:00', 'Quia officiis nulla ', '2020-06-02 13:44:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `ID` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_Number` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Repeat_Password` varchar(50) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_On` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`ID`, `First_Name`, `Last_Name`, `Email`, `Mobile_Number`, `Password`, `Repeat_Password`, `Created_On`, `Updated_On`) VALUES
(30, 'sallu', 'gtm', 'sailendragautam732@gmail.com', '9867015128', 'sallugtm', 'sallugtm', '2020-05-23 13:12:57', '0000-00-00 00:00:00'),
(31, 'sailendra ', 'gautam', 'shailendragautam732@gmail.com', '9811997989', 'sailendragautam', 'sailendragautam', '2020-05-23 13:13:27', '0000-00-00 00:00:00'),
(32, 'saraswati', 'gautam', 'saraswatigautam@gmail.com', '9847216207', 'saraswati', 'saraswati', '2020-06-02 14:11:32', '0000-00-00 00:00:00'),
(33, 'nikhil', 'tuladhar', 'nikhil@gmail.com', '88888', 'nikhil', 'nikhil', '2020-06-02 21:32:34', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `crime_report`
--
ALTER TABLE `crime_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `crime_report`
--
ALTER TABLE `crime_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
