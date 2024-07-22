-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 01:14 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bagshop01`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdetail_vw1`
-- (See below for the actual view)
--
CREATE TABLE `orderdetail_vw1` (
`orderdetail_id` int(11)
,`product_id` int(11)
,`order_price` double
,`orderdetail_qty` int(11)
,`orderdetail_status` int(11)
,`orderdetail_datetime` datetime
,`order_datetime` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `rating` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating`) VALUES
(1, '4'),
(2, '4'),
(3, '4'),
(4, '5'),
(5, '5'),
(6, '5'),
(7, '2'),
(8, '2'),
(9, '5'),
(10, '5'),
(11, '5'),
(12, '5'),
(13, '5'),
(14, '5'),
(15, '5'),
(16, '5'),
(17, '5'),
(18, '5'),
(19, '5'),
(20, '5'),
(21, '5'),
(22, '5'),
(23, '5'),
(24, '5'),
(25, '5'),
(26, '5'),
(27, '5'),
(28, '5'),
(29, '5'),
(30, '3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_order`
-- (See below for the actual view)
--
CREATE TABLE `report_order` (
`product_name` varchar(50)
,`orderqty` decimal(32,0)
,`product_price` double
,`totalprice` double
,`orderdetail_datetime` datetime
,`orderdetail_status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

-- --------------------------------------------------------

--
-- Table structure for table `tb_addproduct`
--

CREATE TABLE `tb_addproduct` (
  `addproduct_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `addproduct_qty` int(11) DEFAULT NULL,
  `addproduct_status` int(11) DEFAULT NULL,
  `addproduct_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_addproduct`
--

INSERT INTO `tb_addproduct` (`addproduct_id`, `product_id`, `addproduct_qty`, `addproduct_status`, `addproduct_datetime`) VALUES
(1, 1, 20, 0, '2022-12-16 17:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_tel` varchar(10) DEFAULT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_fullname`, `admin_email`, `admin_tel`, `admin_username`, `admin_password`) VALUES
(1, 'habibi', 'a12455@gmail.com', '0655147239', 'root', 'qwerty@123'),
(2, 'kitty', 'a12455@gmail.com', '081-123456', 'hallo123@gmail.com', 'n.888402');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `bank_id` int(11) NOT NULL,
  `bank_type` varchar(50) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `bank_bankname` varchar(50) DEFAULT NULL,
  `bank_accountno` varchar(50) DEFAULT NULL,
  `bank_status` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`bank_id`, `bank_type`, `bank_name`, `bank_bankname`, `bank_accountno`, `bank_status`, `admin_id`) VALUES
(1, 'Savings Account', 'lanla', 'SCB', '123456789', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `member_id` int(11) NOT NULL,
  `member_fullname` varchar(50) DEFAULT NULL,
  `member_address` varchar(255) DEFAULT NULL,
  `member_tumbol` varchar(50) DEFAULT NULL,
  `member_amphur` varchar(50) DEFAULT NULL,
  `member_province` varchar(50) DEFAULT NULL,
  `member_postcode` varchar(10) DEFAULT NULL,
  `member_tel` varchar(10) DEFAULT NULL,
  `member_email` varchar(50) DEFAULT NULL,
  `member_username` varchar(50) DEFAULT NULL,
  `member_password` varchar(50) DEFAULT NULL,
  `member_status` int(11) DEFAULT NULL,
  `member_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `member_fullname`, `member_address`, `member_tumbol`, `member_amphur`, `member_province`, `member_postcode`, `member_tel`, `member_email`, `member_username`, `member_password`, `member_status`, `member_datetime`) VALUES
(1, 'wawa', '24/53', 'วิชิต', 'เมือง', 'ภูเก็ต', '95000', '0935469555', 'yaya@gmail.com', 'yaya@gmail.com', '1234', 1, '2022-12-16 17:50:00'),
(2, 'lanlal', 'bangkok', 'bangkok', 'bangkok', 'กรุงเทพมหานคร', '10240', '123456789', 'lanla@lanla.com', 'lanla', 'lanla', 1, '2023-01-16 14:24:00'),
(3, 'yaya', '46', 'วิชิต', 'เมือง', 'เพชรบูรณ์', '95000', '08999924', 'love@gmail.com', 'love@gmail.com', '1234', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(45) DEFAULT NULL,
  `order_total` double DEFAULT NULL,
  `grandTotal` varchar(11) NOT NULL,
  `order_status` int(11) DEFAULT '0',
  `order_datetime` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_no`, `order_total`, `grandTotal`, `order_status`, `order_datetime`, `user_id`) VALUES
(84, '03701', 76024, '', 0, '2023-02-06 09:33:21', 1),
(64, '01398', 2000, '', 0, '2023-01-26 03:44:58', 1),
(67, '00561', 2000, '', 0, '2023-01-26 06:57:41', 1),
(66, '06808', 19000, '', 0, '2023-01-26 05:43:28', 1),
(43, '01291', 12, '', 0, '2023-01-20 04:13:11', 2),
(85, '09009', 76024, '', 0, '2023-02-06 09:33:29', 1),
(81, '08891', 38049, '', 0, '2023-01-30 09:44:51', 1),
(82, '03541', 19029, '', 0, '2023-01-30 09:49:01', 1),
(83, '02391', 2039, '', 0, '2023-01-30 09:49:51', 1),
(86, '08033', 14939, '', 0, '2023-03-07 01:52:13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderdetail`
--

CREATE TABLE `tb_orderdetail` (
  `orderdetail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_price` double NOT NULL,
  `orderdetail_qty` int(11) DEFAULT NULL,
  `orderdetail_datetime` datetime DEFAULT NULL,
  `orderdetail_status` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_orderdetail`
--

INSERT INTO `tb_orderdetail` (`orderdetail_id`, `product_id`, `order_price`, `orderdetail_qty`, `orderdetail_datetime`, `orderdetail_status`, `user_id`) VALUES
(75, 1, 1, 8, '2023-01-20 04:19:31', 1, 2),
(76, 2, 12, 2, '2023-01-20 05:41:56', 1, 1),
(140, 4, 19000, 1, '2023-01-27 01:55:04', 1, 1),
(139, 4, 19000, 1, '2023-01-27 01:23:46', 1, 1),
(138, 4, 19000, 1, '2023-01-26 11:38:29', 1, 1),
(137, 4, 19000, 1, '2023-01-26 11:32:04', 1, 1),
(136, 5, 2000, 1, '2023-01-26 11:29:11', 1, 1),
(154, 4, 19000, 4, '2023-01-30 02:28:04', 1, 1),
(153, 5, 2000, 1, '2023-01-30 09:49:33', 1, 1),
(152, 4, 19000, 1, '2023-01-30 09:48:32', 1, 1),
(151, 4, 19000, 2, '2023-01-28 01:05:10', 1, 1),
(150, 4, 19000, 1, '2023-01-28 11:38:37', 1, 1),
(149, 4, 19000, 1, '2023-01-28 10:49:40', 1, 1),
(148, 4, 19000, 1, '2023-01-28 10:34:38', 1, 1),
(147, 4, 19000, 1, '2023-01-28 10:21:06', 1, 1),
(146, 5, 2000, 2, '2023-01-27 06:02:50', 1, 1),
(145, 4, 19000, 1, '2023-01-27 05:29:14', 1, 1),
(144, 5, 2000, 1, '2023-01-27 04:49:36', 1, 1),
(143, 4, 19000, 1, '2023-01-27 02:13:40', 1, 1),
(142, 4, 19000, 1, '2023-01-27 02:09:05', 1, 1),
(141, 4, 19000, 1, '2023-01-27 02:03:38', 1, 1),
(135, 4, 19000, 1, '2023-01-26 06:57:52', 1, 1),
(134, 5, 2000, 1, '2023-01-26 05:43:39', 1, 1),
(133, 4, 19000, 1, '2023-01-26 05:31:12', 1, 1),
(132, 4, 19000, 1, '2023-01-26 05:22:39', 1, 1),
(131, 5, 2000, 1, '2023-01-26 04:23:40', 1, 1),
(130, 5, 2000, 1, '2023-01-26 03:44:53', 1, 1),
(129, 4, 19000, 1, '2023-01-26 03:44:13', 1, 1),
(155, 6, 15000, 1, '2023-03-07 01:51:37', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paymeny`
--

CREATE TABLE `tb_paymeny` (
  `paymeny_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `paymeny_pic` varchar(255) DEFAULT NULL,
  `paymeny_by` varchar(50) DEFAULT NULL,
  `bank_name` varchar(255) NOT NULL,
  `paymeny_price` float DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `paymeny_date` datetime DEFAULT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subdistrict` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `paymeny_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_paymeny`
--

INSERT INTO `tb_paymeny` (`paymeny_id`, `order_no`, `paymeny_pic`, `paymeny_by`, `bank_name`, `paymeny_price`, `member_id`, `paymeny_date`, `recipient_name`, `address`, `subdistrict`, `district`, `province`, `postcode`, `phonenumber`, `paymeny_status`) VALUES
(20, 4240, '23012023150618_p1.jpg', 'mymind', 'UOB', 12, 1, '2023-01-23 15:06:00', 'ka', '10', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810855044', 0),
(19, 5, '21012023142023_p1.png', 'ja', 'CIMB', 12, 1, '2023-01-21 14:20:00', 'ka', '15', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810872044', 0),
(21, 2391, '30012023130930_p1.jpg', 'mymind', 'Kbank', 2039, 1, '2023-01-30 13:09:00', 'ka', '15', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810872044', 0),
(22, 2391, '01022023151106_p1.jpg', 'mymind', 'SCB', 2039, 1, '2023-02-01 15:10:00', 'ka', '10', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810872044', 0),
(23, 2391, '01022023151353_p1.jpg', 'mymind', 'Kbank', 2039, 1, '2023-02-01 15:13:00', 'ka', '15', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810872044', 0),
(24, 2391, '01022023164422_p1.jpg', 'ja', 'KTB', 2039, 1, '2023-02-01 16:44:00', 'ka', '10', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810872044', 0),
(25, 3541, '02022023091314_p1.jpg', 'ja', 'Kbank', 2039, 1, '2023-02-02 09:13:00', 'ka', '15', '4', '4', 'ภูเก็ต', '83000', '0810872044', 0),
(26, 3701, '', 'mymind', 'BAY', 2039, 1, '2023-02-22 14:04:00', 'ka', '15', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810855044', 0),
(27, 8891, '', 'mymind', 'KTB', 38049, 1, '2023-02-22 14:05:00', 'ka', '10', 'วิชิต', 'วิชิต', 'ภูเก็ต', '83000', '0810855044', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_preorder`
--

CREATE TABLE `tb_preorder` (
  `preorder_id` int(11) NOT NULL,
  `preorder_no` varchar(50) DEFAULT NULL,
  `preorder_price` float DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `preorder_status` int(11) DEFAULT NULL,
  `preorder_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_preorder`
--

INSERT INTO `tb_preorder` (`preorder_id`, `preorder_no`, `preorder_price`, `member_id`, `preorder_status`, `preorder_datetime`) VALUES
(1, '1', 2500, 1, 0, '2023-01-16 13:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_preorderdetial`
--

CREATE TABLE `tb_preorderdetial` (
  `preorderdetial_id` int(11) NOT NULL,
  `preorder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `preorderdetial_qty` int(11) DEFAULT NULL,
  `preorderdetial_price` float DEFAULT NULL,
  `preorderdetial_status` int(11) DEFAULT NULL,
  `preorderdetial_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_preorderdetial`
--

INSERT INTO `tb_preorderdetial` (`preorderdetial_id`, `preorder_id`, `product_id`, `member_id`, `preorderdetial_qty`, `preorderdetial_price`, `preorderdetial_status`, `preorderdetial_datetime`) VALUES
(1, 1, 4, 1, 2, 2500, 0, '2023-01-16 13:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_serial_no` varchar(50) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_detail` text,
  `pro_colour` varchar(50) DEFAULT NULL,
  `product_qty` varchar(8) DEFAULT NULL,
  `product_min_qty` varchar(11) DEFAULT NULL,
  `product_price` double NOT NULL,
  `product_wieght` float DEFAULT NULL,
  `product_pic` varchar(255) DEFAULT NULL,
  `product_status` int(11) NOT NULL DEFAULT '0',
  `product_date` datetime DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_serial_no`, `type_id`, `product_name`, `product_detail`, `pro_colour`, `product_qty`, `product_min_qty`, `product_price`, `product_wieght`, `product_pic`, `product_status`, `product_date`, `admin_id`) VALUES
(4, '444444', 1, 'aldo', '1', 'ดำ', '81', '1', 19000, 1, '07032023133716_p1.jpg', 0, '2023-01-23 11:50:00', 1),
(5, '555555', 1, 'gigi', 'กระเป๋า', 'ดำ', '65', '1', 2000, 1, '07032023133731_p1webp', 0, '2023-01-26 13:23:00', 1),
(6, '8888', 2, 'haha', '123', 'ฟ้า', '79', '1', 15000, 1, '07032023134945_p1.jpg', 1, '2023-03-07 13:49:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_promotion`
--

CREATE TABLE `tb_promotion` (
  `promo_id` int(11) NOT NULL,
  `promo_name` varchar(50) DEFAULT NULL,
  `promo_detail` varchar(255) DEFAULT NULL,
  `promo_pic` varchar(255) DEFAULT NULL,
  `promo_code` varchar(255) DEFAULT NULL,
  `promo_discount` float(8,0) DEFAULT NULL,
  `promo_startdate` date DEFAULT NULL,
  `promo_enddate` date DEFAULT NULL,
  `promo_status` varchar(50) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_promotion`
--

INSERT INTO `tb_promotion` (`promo_id`, `promo_name`, `promo_detail`, `promo_pic`, `promo_code`, `promo_discount`, `promo_startdate`, `promo_enddate`, `promo_status`, `admin_id`) VALUES
(2, 'เพียงสั่งซื้อกระเป๋า 200 ใบขึ้นไป เราจัดส่งฟรีทั่ว', 'พบกับโปรโมชั่นสุดพิเศษ สำหรับลูกท่านใดที่สั่งซื้อกระเป๋าผ้าพร้อมส่งใบเปล่าของเราตอนนี้ จำนวนตั้งแต่ 200 ใบขึ้นไป เราจัดฟรีทั่วประเทศให้คุณไปเลยจ้า รีบหน่อยนะค่ะ สินค้ามีจำนวนจำกัด   หมายเหตุ : **การขนส่งเป็นไปตามเงื่อนไขที่บริษัทกำหนดเท่านั้น**   ', '07032023134105n1.jpg', '50jqy', 15, '2023-01-23', '2023-02-11', '0', 2),
(4, '123', 'data', '07032023135116_promo.png', 'pad', 100, '2023-03-07', '2023-03-31', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rateshipping`
--

CREATE TABLE `tb_rateshipping` (
  `rateshipping_id` int(11) NOT NULL,
  `rateshipping_weight` float DEFAULT NULL,
  `rateshipping_province` text,
  `rateshipping_rates` varchar(45) DEFAULT NULL,
  `rateshipping_status` int(11) DEFAULT NULL,
  `rateshipping_datetime` datetime DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rateshipping`
--

INSERT INTO `tb_rateshipping` (`rateshipping_id`, `rateshipping_weight`, `rateshipping_province`, `rateshipping_rates`, `rateshipping_status`, `rateshipping_datetime`, `admin_id`) VALUES
(3, 2, 'กทม.และปริมณฑล', '50', 0, '2023-01-25 17:18:00', 1),
(2, 1, 'กทม.และปริมณฑล', '35', 0, '2023-01-25 17:14:00', 1),
(4, 3, 'กทม.และปริมณฑล', '60', 0, '2023-01-25 17:18:00', 1),
(5, 4, 'กทม.และปริมณฑล', '65', 0, '2023-01-25 17:20:00', 1),
(6, 5, 'กทม.และปริมณฑล', '70', 0, '2023-01-25 17:20:00', 1),
(7, 1, 'ต่างจังหวัด', '45', 0, '2023-01-25 17:20:00', 1),
(8, 2, 'ต่างจังหวัด', '55', 0, '2023-01-25 17:21:00', 1),
(9, 3, 'ต่างจังหวัด', '65', 0, '2023-01-25 17:21:00', 1),
(10, 4, 'ต่างจังหวัด', '75', 0, '2023-01-25 17:22:00', 1),
(11, 5, 'ต่างจังหวัด', '80', 0, '2023-01-25 17:22:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_return`
--

CREATE TABLE `tb_return` (
  `return_id` int(11) NOT NULL,
  `order_id` varchar(45) NOT NULL,
  `return_remark` text,
  `product_id` int(11) NOT NULL,
  `return_qty` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `return_status` int(11) DEFAULT NULL,
  `return_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_return`
--

INSERT INTO `tb_return` (`return_id`, `order_id`, `return_remark`, `product_id`, `return_qty`, `member_id`, `return_status`, `return_datetime`) VALUES
(1, '001', 'สั่งผิด', 1, 2, 1, 0, '2022-12-17 09:30:00'),
(2, '5', 'ผิดสี', 3, 1, 1, 1, '2023-01-23 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shipping`
--

CREATE TABLE `tb_shipping` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_trackingno` varchar(50) DEFAULT NULL,
  `ship_address` text,
  `ship_tumbol` varchar(50) DEFAULT NULL,
  `ship_amphur` varchar(50) DEFAULT NULL,
  `ship_province` varchar(50) DEFAULT NULL,
  `ship_postcode` varchar(10) DEFAULT NULL,
  `shipping_by` varchar(45) DEFAULT NULL,
  `shipping_cost` varchar(45) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `shipping_status` int(11) DEFAULT NULL,
  `shipping_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_shipping`
--

INSERT INTO `tb_shipping` (`shipping_id`, `order_id`, `shipping_trackingno`, `ship_address`, `ship_tumbol`, `ship_amphur`, `ship_province`, `ship_postcode`, `shipping_by`, `shipping_cost`, `member_id`, `shipping_status`, `shipping_datetime`) VALUES
(2, 0, 'TH889992463', '32', '24', '52', '10', '900', 'ณา', '50', 1, 0, '2022-12-23 11:20:00'),
(4, 1, 'TH123456', 'bangkok', 'bangkok', 'bangkok', 'bangkok', '10240', 'Admin', '-', 2, 0, '2023-01-18 16:25:00'),
(5, 2, 'TH789456123', 'bangkok', 'bangkok', 'bangkok', 'bangkok', '10240', 'Admin', '-', 1, 0, '2023-01-19 13:21:00'),
(6, 1, 'TH123456', 'bangkok', 'bangkok', 'bangkok', 'bangkok', '10240', 'Admin', '-', 1, 0, '2023-01-19 14:54:00'),
(7, 33, 'th0006587', '10', 'วิชิต', 'เมือง', 'ภูเก็ต', '83000', 'เค', '-', 1, 1, '2023-01-23 13:55:00'),
(8, 38, 'th0006587', '10', 'วิชิต', 'เมือง', 'ภูเก็ต', '83000', 'เค', '-', 2, 1, '2023-01-25 09:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`type_id`, `type_name`) VALUES
(1, 'Backpack'),
(2, 'Crossbody'),
(3, 'Tote Bag'),
(4, 'Bucket Bag');

-- --------------------------------------------------------

--
-- Structure for view `orderdetail_vw1`
--
DROP TABLE IF EXISTS `orderdetail_vw1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdetail_vw1`  AS  select `tb_orderdetail`.`orderdetail_id` AS `orderdetail_id`,`tb_orderdetail`.`product_id` AS `product_id`,`tb_orderdetail`.`order_price` AS `order_price`,`tb_orderdetail`.`orderdetail_qty` AS `orderdetail_qty`,`tb_orderdetail`.`orderdetail_status` AS `orderdetail_status`,`tb_orderdetail`.`orderdetail_datetime` AS `orderdetail_datetime`,date_format(`tb_orderdetail`.`orderdetail_datetime`,_utf8mb3'%Y-%m-%d') AS `order_datetime` from `tb_orderdetail` ;

-- --------------------------------------------------------

--
-- Structure for view `report_order`
--
DROP TABLE IF EXISTS `report_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_order`  AS  select `tb_product`.`product_name` AS `product_name`,sum(`orderdetail_vw1`.`orderdetail_qty`) AS `orderqty`,`tb_product`.`product_price` AS `product_price`,(sum(`orderdetail_vw1`.`orderdetail_qty`) * `tb_product`.`product_price`) AS `totalprice`,`orderdetail_vw1`.`orderdetail_datetime` AS `orderdetail_datetime`,`orderdetail_vw1`.`orderdetail_status` AS `orderdetail_status` from (`orderdetail_vw1` join `tb_product` on((`orderdetail_vw1`.`product_id` = `tb_product`.`product_id`))) where (`orderdetail_vw1`.`orderdetail_status` = _utf8mb3'ปิดการขาย') group by `tb_product`.`product_name`,`tb_product`.`product_price`,`orderdetail_vw1`.`orderdetail_datetime`,`orderdetail_vw1`.`orderdetail_status` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tb_addproduct`
--
ALTER TABLE `tb_addproduct`
  ADD PRIMARY KEY (`addproduct_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  ADD PRIMARY KEY (`orderdetail_id`);

--
-- Indexes for table `tb_paymeny`
--
ALTER TABLE `tb_paymeny`
  ADD PRIMARY KEY (`paymeny_id`);

--
-- Indexes for table `tb_preorder`
--
ALTER TABLE `tb_preorder`
  ADD PRIMARY KEY (`preorder_id`);

--
-- Indexes for table `tb_preorderdetial`
--
ALTER TABLE `tb_preorderdetial`
  ADD PRIMARY KEY (`preorderdetial_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_promotion`
--
ALTER TABLE `tb_promotion`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `tb_rateshipping`
--
ALTER TABLE `tb_rateshipping`
  ADD PRIMARY KEY (`rateshipping_id`);

--
-- Indexes for table `tb_return`
--
ALTER TABLE `tb_return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_addproduct`
--
ALTER TABLE `tb_addproduct`
  MODIFY `addproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  MODIFY `orderdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tb_paymeny`
--
ALTER TABLE `tb_paymeny`
  MODIFY `paymeny_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_preorder`
--
ALTER TABLE `tb_preorder`
  MODIFY `preorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_preorderdetial`
--
ALTER TABLE `tb_preorderdetial`
  MODIFY `preorderdetial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_promotion`
--
ALTER TABLE `tb_promotion`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_rateshipping`
--
ALTER TABLE `tb_rateshipping`
  MODIFY `rateshipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_return`
--
ALTER TABLE `tb_return`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
