-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2023 at 09:17 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vnjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `cate_id`, `pro_id`, `status`, `date`) VALUES
(1, 6, 1, 14, 'Y', '2022-08-30'),
(3, 6, 1, 14, 'Y', '2022-08-30'),
(4, 3, 1, 14, 'Y', '2022-08-30'),
(5, 3, 1, 12, 'Y', '2022-08-30'),
(6, 3, 3, 13, 'Y', '2022-08-30'),
(7, 9, 2, 8, 'Y', '2022-08-31'),
(8, 9, 3, 10, 'Y', '2022-08-31'),
(9, 9, 3, 13, 'Y', '2022-09-01'),
(10, 12, 3, 3, 'Y', '2022-09-01'),
(11, 12, 2, 4, 'Y', '2022-09-01'),
(12, 9, 2, 11, 'Y', '2022-09-01'),
(13, 13, 1, 12, 'Y', '2022-09-01'),
(14, 13, 1, 9, 'Y', '2022-09-01'),
(15, 9, 3, 13, 'Y', '2022-09-01'),
(16, 9, 2, 7, 'Y', '2022-09-01'),
(17, 9, 3, 3, 'Y', '2022-09-01'),
(18, 13, 3, 13, 'Y', '2022-09-01'),
(19, 13, 2, 7, 'Y', '2022-09-01'),
(20, 13, 2, 11, 'Y', '2022-09-01'),
(21, 13, 1, 12, 'Y', '2022-09-01'),
(22, 13, 3, 10, 'Y', '2022-09-01'),
(23, 14, 2, 8, 'Y', '2022-09-01'),
(24, 13, 1, 12, 'Y', '2022-09-01'),
(26, 11, 2, 4, 'Y', '2022-09-02'),
(27, 7, 2, 4, 'Y', '2022-09-02'),
(28, 7, 2, 4, 'Y', '2022-09-02'),
(29, 7, 1, 6, 'Y', '2022-09-02'),
(30, 7, 3, 3, 'Y', '2022-09-02'),
(31, 20, 5, 15, 'Y', '2023-05-25'),
(32, 20, 1, 14, 'Y', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `name`, `date`) VALUES
(1, 'Vineger', '2022-08-28 02:02:26'),
(2, 'Pickle', '2022-08-28 02:02:40'),
(3, 'Jaggery', '2022-08-28 02:03:43'),
(4, 'orange', '2022-09-01 20:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'Atul', 'atulpandey@gmail.com', '9005375597', 'This is my contact no.', '2022-08-28 21:08:23'),
(2, 'Ankit', 'ankit@gmail.com', '7752878242', 'This man is very good.', '2022-08-28 21:52:48'),
(3, 'Atul Pandey', 'atulpandey@gmail.com', '9005375597', 'My account was not open', '2022-08-29 17:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

DROP TABLE IF EXISTS `tbl_notification`;
CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`not_id`, `message`, `date`) VALUES
(19, 'Thanks for testy vinegar and jaggery', '2023-05-24 12:16:50'),
(11, 'Today Upto 100% off only Vinegar Product', '2022-09-02 12:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` varchar(8) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `cate_id`, `pro_id`, `quantity`, `amount`, `order_date`) VALUES
(1, 3, 3, 13, '1', '60', '2022-08-29'),
(2, 10, 2, 14, '1', '60', '2022-08-29'),
(3, 9, 3, 15, '1', '70', '2022-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `c_price` varchar(10) NOT NULL,
  `s_price` varchar(10) NOT NULL,
  `expirydate` varchar(20) NOT NULL,
  `des` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `cat_id`, `file`, `unit`, `c_price`, `s_price`, `expirydate`, `des`, `date`) VALUES
(13, 'Sugarcane-Beatroot', 3, 'jag4.jpg', '28', '80', '90', '2022-09-29', 'This product test is very sweet.', '2022-08-29 17:29:10'),
(14, 'Amla -Vinegar', 1, 'vin6.jpeg', '17', '75', '85', '2022-09-30', 'very teasty and fresh naturally', '2022-08-30 10:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dor` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `mobile`, `password`, `city`, `address`, `dor`) VALUES
(9, 'Pankaj', 'pankaj@gmail.com', '9876543210', '8765', 'Varansi', 'Lanka,BHU', '2022-08-30 02:51:10'),
(3, 'Atul', 'atulpandey@gmail.com', '123456789', '321', 'Lucknow', 'Kapurthalaa', '2022-08-27 22:02:07'),
(10, 'Prakash', 'prakash@gmail.com', '7752878242', '12345', 'Lucknow', 'Tedipulia', '2022-08-30 12:28:23'),
(7, 'Prajjwal', 'prajjwal@gmail.com', '8887961681', '123', 'Lucknow', 'Aliganj', '2022-08-28 17:02:18'),
(6, 'Ankit', 'ankit@gmail.com', '12345', '54321', 'Balia', 'gggjlf', '2022-08-27 23:00:11'),
(11, 'Radhe', 'radhe@gmail.com', '9634567896', '987', 'Varansi', 'Babatpur', '2022-08-30 12:44:15'),
(12, 'Rahul Yadav', 'rahul123@gmail.com', '9876567898', 'rahul123', 'Varansi', 'Bariaghat', '2022-08-30 18:34:18'),
(13, 'Manoj', 'manoj123@gmail.com', '8082345677', '567', 'Lucknow', 'Gudmba', '2022-08-31 09:11:35'),
(14, 'Manish', 'manish@gmail.com', '1234567864', '123', 'Lucknow', 'aliganj', '2022-09-01 20:39:25'),
(15, 'Anchal', 'anchal@gmail.com', '8707032993', '12345', 'Prayagraj', 'shatri Nagar', '2022-09-02 13:10:53'),
(16, 'sweta', 'sweta@gmail.com', '9876543210', '12345', 'Lucknow', 'bihar', '2022-12-16 22:15:41'),
(20, 'anchal', 'ap@gmail.com', '9898989890', '987', 'Mirzapur', 'werwt', '2023-05-25 12:13:36'),
(19, 'Anchal Prajapati', 'anchalprajapati241@gmail.com', '8707032993', '12345', 'Prayagraj', '341A/3A shastri Nagar prayagraj', '2023-02-23 15:01:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
