-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 05:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
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
(18, 'sailendra gautam', 1, 'sallu@gmail.com', 'sallu', 'img/1590490107_sallluu.jpg', '2020-05-26 16:33:27', '2020-08-04 19:41:00'),
(19, 'neeta gautam', 2, 'nitagautam642@gmail.com', '1234', 'img/1590592572_hostel_logo.png', '2020-05-27 21:01:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(40) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `cat_banner` varchar(100) NOT NULL,
  `cat_icon` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `sub_category`, `cat_banner`, `cat_icon`, `created_on`, `updated_on`) VALUES
(16, 'milk', '', 'imgcategory/1596479953_dairy_200x300.jpg', 'imgcategory/1596479953_dairy icon_32x32.jpg', '2020-08-04 00:24:13', '0000-00-00 00:00:00'),
(17, 'Agricultural Products', '', 'imgcategory/1596548526_agriculture_200x300.jpg', 'imgcategory/1596548526_agriculture icon_32x32.jpg', '2020-08-04 19:27:06', '0000-00-00 00:00:00'),
(18, 'Laptop', '', 'imgcategory/1596899165_dell.jpg', 'imgcategory/1596899165_dell.jpg', '2020-08-08 20:51:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_Id` int(11) NOT NULL,
  `logo_Img` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_Id`, `logo_Img`, `created_on`, `updated on`) VALUES
(1, 'adminpanel/imglogo/1596386458_logo-dark.png', '2020-08-02 22:14:21', '2020-08-02 22:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `main_img` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `shipping_fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_type`, `category`, `main_img`, `p_price`, `p_quantity`, `description`, `shipping_fee`) VALUES
(1, 'Deanna Marks', '', 'Agricultural Products', 'imgproduct/1596596646_agriculture_200x300.jpg', 371, 181, 'Occaecat consequuntu', 63),
(2, 'milk', '', 'milk', 'imgproduct/1596596906_dairy_200x300.jpg', 75, 50, 'buffalo milk', 10),
(3, 'green veg', 'retailer', 'Agricultural Products', 'imgproduct/1596597438_agriculture_200x300.jpg', 115, 381, 'green', 41),
(4, 'dell inspiron', 'retailer', 'Laptop', 'imgproduct/1596899249_dell.jpg', 76000, 56, 'electronics', 20);

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
-- Table structure for table `retailer_msg`
--

CREATE TABLE `retailer_msg` (
  `id` int(11) NOT NULL,
  `retailer_name` varchar(50) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `PAN_number` varchar(20) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_msg`
--

INSERT INTO `retailer_msg` (`id`, `retailer_name`, `shop_name`, `phone_number`, `PAN_number`, `shop_address`, `created_on`) VALUES
(6, 'Maite Black', 'Black', '+1 (911) 502-36', 'Eligendi veritatis f', 'Voluptatum irure rep', '2020-08-02 09:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_registration`
--

CREATE TABLE `retailer_registration` (
  `id` int(11) NOT NULL,
  `retailer_name` varchar(100) NOT NULL,
  `PAN` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `shop_name` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_registration`
--

INSERT INTO `retailer_registration` (`id`, `retailer_name`, `PAN`, `email`, `phone`, `address`, `shop_name`, `username`, `password`, `created_on`) VALUES
(4, 'Sailendra Gautam  ', 2020, 'sailendragautam732@gmail.com', '9867015128', 'kathmandu, nepal', 'Gomadevi', 'riteshrazzpandit@gmail.com', '', '2020-08-03 20:28:55'),
(6, 'sailendra gautam', 44444, 'sailendragautam732@gmail.com', '+9779811997989', 'daldale', 'Palmer Henry', 'hegyceco', 'Pa$$w0rd!', '2020-08-04 19:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `Created_On` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_On` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`ID`, `First_Name`, `Last_Name`, `Email`, `Mobile_Number`, `Password`, `Created_On`, `Updated_On`) VALUES
(31, 'sailendra ', 'gautam', 'shailendragautam732@gmail.com', '9811997989', 'sailendragautam', '2020-05-23 13:13:27', '0000-00-00 00:00:00');

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
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_msg`
--
ALTER TABLE `retailer_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_registration`
--
ALTER TABLE `retailer_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `category` (`category`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailer_msg`
--
ALTER TABLE `retailer_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `retailer_registration`
--
ALTER TABLE `retailer_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
