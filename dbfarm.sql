-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 07:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `isactive`) VALUES
(1, 'demo', 'demo67@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `addresss` varchar(50) NOT NULL,
  `phnm` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `addresss`, `phnm`, `email`) VALUES
(4, 'moid', ' 032145632', 'war32@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` bigint(50) NOT NULL,
  `product_quantity` tinyint(50) NOT NULL,
  `product_catogary` int(11) NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_catogary`, `product_image`) VALUES
(14, 'plate', 900, 30, 11, '../../productimages/Image_created_with_a_mobile_phone.png'),
(15, 'plate', 900, 30, 11, '../../productimages/Image_created_with_a_mobile_phone.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `name`, `description`) VALUES
(2, ' free DELEIVERY  ', 'XZSCASCA'),
(3, 'free service', 'asd'),
(4, 'good quality', 'jk'),
(5, 'sugar free', 'redrthrhthth'),
(6, 'super star', 'sdsdvgsdv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catogary`
--

CREATE TABLE `tbl_catogary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_catogary`
--

INSERT INTO `tbl_catogary` (`id`, `name`, `description`) VALUES
(8, 'HEALTH AND BEAUTY', 'health abn beauty'),
(11, 'Crockeries', 'y'),
(12, 'car', 'cultus'),
(15, 'MENS COLLECTION', 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_commerce`
--

CREATE TABLE `tbl_commerce` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `mssg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_commerce`
--

INSERT INTO `tbl_commerce` (`id`, `name`, `email`, `subject`, `mssg`) VALUES
(5, ' ali ', ' ali321@gmail.com', '  sindhi', 'acaha nh hai'),
(6, '  bilal', ' bilalrao321@gmail.com', '  maths', 'gg'),
(7, 'Azhar', 'azhar@aptechnorth.edu.pk', 'Sad Life', 'Mah Life Mah Rules');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_num` varchar(50) NOT NULL,
  `emp_gender` varchar(50) NOT NULL,
  `emp_salary` bigint(20) NOT NULL,
  `emp_dep` varchar(50) NOT NULL,
  `emp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `emp_email`, `emp_add`, `emp_num`, `emp_gender`, `emp_salary`, `emp_dep`, `emp_img`) VALUES
(4, 'waiz', 'waiz56@com', 'ghar', '02332214555', 'MALE', 45000, 'manufa', '../../employeeimages/th.jpg'),
(5, ' mano', 'mano897@gmail.com', ' liyari80', ' 02332214554', ' OTHERS', 32000, 'offmanager', ' ../../employeeimages/Screenshot (75) (1).png'),
(6, 'M.BILAL KHAN RAO', 'sbilal487@gmail.com', 'scheme33 gulzar- e- hijri', '03308610403', 'MALE', 35000, 'php developer', '../../employeeimages/322534097_743289806691167_7154236168317718145_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `Name`, `Email`, `Phone`, `Address`, `Password`) VALUES
(1, 'Azhar', 'azhar@aptechnorth.edu.pk', '0900-78601', 'Power House House No 420', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_catogary` (`product_catogary`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catogary`
--
ALTER TABLE `tbl_catogary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_commerce`
--
ALTER TABLE `tbl_commerce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_catogary`
--
ALTER TABLE `tbl_catogary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_commerce`
--
ALTER TABLE `tbl_commerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `table_products_ibfk_1` FOREIGN KEY (`product_catogary`) REFERENCES `tbl_catogary` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
