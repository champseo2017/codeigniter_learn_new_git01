-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 09:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_web_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aquestionno` int(4) NOT NULL,
  `ano` int(4) NOT NULL,
  `adetail` longtext,
  `aname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aquestionno`, `ano`, `adetail`, `aname`) VALUES
(11, 20, 'fewqf', 'wefwe'),
(11, 21, 'fewf', 'wefwef'),
(10, 22, 'ewff', 'fewfew');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(3) NOT NULL,
  `sessionID` varchar(50) NOT NULL,
  `productID` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `sessionID`, `productID`, `quantity`) VALUES
(15, 'vb4b35nsctdpn5qn75aeuf7vs98r7fc5', '3', '48'),
(16, 'vb4b35nsctdpn5qn75aeuf7vs98r7fc5', '4', '49');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'clothes', 'clothes category'),
(2, 'shoes', 'shoes category'),
(3, 'jacket', 'jacket category'),
(4, 'towel', 'towel category');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `id` int(4) NOT NULL,
  `no_number` varchar(100) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `choice1` varchar(100) DEFAULT NULL,
  `choice2` varchar(100) DEFAULT NULL,
  `choice3` varchar(100) DEFAULT NULL,
  `choice4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `no_number`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, '1', 'ซอฟต์แวร์ คือ', 'ก.โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์', 'ข.อุปกรณ์เทคโนโลยีระดับสูง', 'ค.โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์', 'ง.อุปกรณ์ที่ทำหน้าเสมือนสมองกล', 'ก'),
(2, '2', 'ซอฟต์แวร์ คือ', 'ก.โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์', 'ข.อุปกรณ์เทคโนโลยีระดับสูง', 'ค.โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์', 'ง.อุปกรณ์ที่ทำหน้าเสมือนสมองกล', 'ข'),
(3, '3', 'ซอฟต์แวร์ คือ', 'ก.โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์', 'ข.อุปกรณ์เทคโนโลยีระดับสูง', 'ค.โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์', 'ง.อุปกรณ์ที่ทำหน้าเสมือนสมองกล', 'ง'),
(4, '4', 'ซอฟต์แวร์ คือ', 'ก.โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์', 'ข.อุปกรณ์เทคโนโลยีระดับสูง', 'ค.โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์', 'ง.อุปกรณ์ที่ทำหน้าเสมือนสมองกล', 'ก'),
(5, '5', 'ซอฟต์แวร์ คือ', 'ก.โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์', 'ข.อุปกรณ์เทคโนโลยีระดับสูง', 'ค.โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์', 'ง.อุปกรณ์ที่ทำหน้าเสมือนสมองกล', 'ข');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(6) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `cat_id` int(10) DEFAULT NULL,
  `product_image_1` varchar(255) DEFAULT NULL,
  `product_image_2` varchar(255) NOT NULL,
  `product_image_3` varchar(255) NOT NULL,
  `product_image_4` varchar(255) NOT NULL,
  `product_price` int(10) DEFAULT NULL,
  `product_type` int(2) DEFAULT NULL,
  `product_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `cat_id`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `product_price`, `product_type`, `product_time`, `product_desc`) VALUES
(1, 'Shout', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 100, 1, '2019-01-08 02:48:56', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'memory', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 50, 1, '2019-01-08 02:48:58', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'shoe', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 30, 1, '2019-01-08 02:49:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'pendrive', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 1, '2019-01-08 02:49:03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'pendrive2', 1, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 2, '2019-01-08 02:49:05', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'pendrive2', 1, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 2, '2019-01-08 02:49:07', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(7, 'pendrive2', 2, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 2, '2019-01-08 02:49:10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(8, 'pendrive2', 2, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 2, '2019-01-08 02:49:12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(9, 'pendrive3', 3, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 3, '2019-01-08 02:49:15', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(10, 'pendrive3', 3, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 3, '2019-01-08 02:49:18', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(11, 'pendrive3', 3, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 3, '2019-01-08 02:49:21', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(12, 'pendrive3', 3, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 3, '2019-01-08 02:49:24', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(13, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(14, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:28', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(15, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:31', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(16, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:33', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(17, 'pendrive4', 2, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:36', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(18, 'pendrive4', 3, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:38', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(19, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:40', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(20, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:44', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(21, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(22, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:48', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(23, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(24, 'pendrive4', 4, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:52', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(25, 'pendrive4', 2, 'assets/uploads/products/p-1.jpg', 'assets/uploads/products/p-2.jpg', 'assets/uploads/products/p-3.jpg', 'assets/uploads/products/p-4.jpg', 150, 4, '2019-01-08 02:49:54', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` double(6,2) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `category` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `price`, `qty`, `category`) VALUES
(12, '001', 'book01', 130.00, 30, 5),
(13, '002', 'book02', 20.00, 5, 0),
(14, '003', 'book03', 10.00, 30, 0),
(15, '004', 'book04', 5.00, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_v2`
--

CREATE TABLE `product_v2` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_v2`
--

INSERT INTO `product_v2` (`id`, `name`, `price`, `product_date`) VALUES
(3, 'หมา', 200, '2019-04-28 18:15:11'),
(4, 'แมว', 500, '2019-04-28 18:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qno` int(4) NOT NULL,
  `qtopic` varchar(50) DEFAULT NULL,
  `qdetail` longtext,
  `qname` varchar(20) DEFAULT NULL,
  `qcount` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qno`, `qtopic`, `qdetail`, `qname`, `qcount`) VALUES
(10, 'ทดสอบนะครับ1', 'fewf', 'wefewf', 1),
(11, 'fewf', 'wefwef', 'fewfew', 2),
(12, 'ทดสอบนะครับ2', 'fewfew', 'fewf', 0),
(13, 'ทดสอบนะครับ3', 'fcqewew', 'fwef', 0);

-- --------------------------------------------------------

--
-- Table structure for table `session_user`
--

CREATE TABLE `session_user` (
  `session` char(100) NOT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_user`
--

INSERT INTO `session_user` (`session`, `time`) VALUES
('1547603533', 1547603552);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_login_status` tinyint(1) NOT NULL,
  `user_datetime_using` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_pass`, `user_login_status`, `user_datetime_using`) VALUES
(1, 'demo', 'test', 0, '2019-02-02 18:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` enum('Admin','Editor','Author') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123456', 'Admin'),
(2, 'editor', '123456', 'Editor'),
(3, 'author', '123456', 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `password_confirmation` varchar(100) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `is_new_customer` varchar(100) NOT NULL,
  `email_create` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `first_name`, `last_name`, `email`, `password`, `password_confirmation`, `ip`, `is_new_customer`, `email_create`, `reg_date`) VALUES
(8, 'boomgt123', 'champ', 'champboomgt', 'noomgt123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', '127.0.0.1', '1', '1', '2019-01-02 07:43:23'),
(9, 'noomgt', 'boomgt', 'champ', 'champ@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', '127.0.0.1', '1', '1', '2019-01-02 08:42:49'),
(10, 'fewfewfffff', 'fffffffffff', 'fewfwefwefwef', 'dd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', '127.0.0.1', '1', '1', '2019-01-02 10:20:36'),
(11, 'fwefwefwef', 'fewfwe', 'fwefwef', 'ddd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', '127.0.0.1', '1', '1', '2019-01-02 10:44:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_v2`
--
ALTER TABLE `product_v2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `session_user`
--
ALTER TABLE `session_user`
  ADD PRIMARY KEY (`session`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_login_status` (`user_login_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ano` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_v2`
--
ALTER TABLE `product_v2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
