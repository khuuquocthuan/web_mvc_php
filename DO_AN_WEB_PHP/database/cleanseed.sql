-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 05:24 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleanseed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date_born` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_up` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `date_born`, `status`, `date_up`, `user`, `pass`) VALUES
(69, 'nguyễn thị yến ma', 'yenkute', '1997-10-06', 1, '2016-03-03 10:14:45', 'yenmasp', 'ac04dc4f31adaed9c006239680cef05f'),
(75, ' yen', 'yenmasieupham', '1997-10-06', 1, '2016-03-03 13:46:33', 'yenmasp', '1f87875571b01b79347304f5758b83d3');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `b_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `b_date_up` date NOT NULL,
  `b_cprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`b_id`, `cus_id`, `b_date_up`, `b_cprice`) VALUES
(7, 8, '2016-03-17', 10369),
(8, 9, '2016-03-17', 135000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_up` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `p_id`, `status`, `date_up`, `date_edit`) VALUES
(2, 'Dụng cụ', 0, 1, '2016-02-25 15:29:14', '0000-00-00'),
(3, 'Cây ăn quả', 1, 1, '2016-02-25 15:33:23', '0000-00-00'),
(4, 'Cây ăn lá', 1, 1, '2016-02-25 15:33:23', '0000-00-00'),
(5, 'Cây ăn củ', 1, 1, '2016-02-25 15:33:23', '0000-00-00'),
(6, 'Cây cảnh', 1, 1, '2016-02-25 15:33:23', '0000-00-00'),
(7, 'Bình tưới', 2, 1, '2016-02-25 15:35:47', '0000-00-00'),
(8, 'Giá thể', 2, 1, '2016-02-25 15:35:47', '0000-00-00'),
(9, 'Đất trồng', 2, 1, '2016-02-25 15:35:47', '0000-00-00'),
(10, 'Chậu trồng', 2, 1, '2016-02-25 15:35:47', '0000-00-00'),
(14, 'Test í mà', 0, 0, '2016-03-03 16:01:56', '2016-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `date_up` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `feedback`, `date_up`) VALUES
(50, 'asdfg12', 'yenmasieupham@gmail.com', 1, 'd', '2016-03-07 13:48:24'),
(51, 'asdfg12', 'yenmasieupham@gmail.com', 1, 'd', '2016-03-07 13:48:43'),
(52, 'asdfg12', 'yenmasieupham@gmail.com', 1, 'd', '2016-03-07 13:49:03'),
(53, 'asdfg12', 'yenmasieupham@gmail.com', 1, 'd', '2016-03-07 13:59:20'),
(54, 'ab23ksj', 'anna.thuyhien@facebook.com', 1, 's', '2016-03-07 13:59:36'),
(55, 'ab23ksj', 'anna.thuyhien@facebook.com', 1, 's', '2016-03-07 14:01:37'),
(56, 'asdfg12', 'yenmasieupham@gmail.com', 3, 'f', '2016-03-07 14:01:58'),
(57, 'asdfg12', 'yenmasieupham@gmail.com', 3, 'f', '2016-03-07 14:02:46'),
(58, 'asdfg12', 'yenmasieupham@gmail.com', 1665844569, 'ư', '2016-03-07 14:07:24'),
(59, 'asdfg12', 'yenmasieupham@gmail.com', 1665844569, 'ư', '2016-03-07 14:08:12'),
(60, 'asdfg12', 'yenmasieupham@gmail.com', 1665844569, 'ư', '2016-03-07 14:08:22'),
(61, 'asdfg12', 'yenmasieupham@gmail.com', 1665844569, 'ư', '2016-03-07 14:09:14'),
(62, 'sfdfghhjjkkjkkm,mmnghgffsdf', 'anna.thuyhien@facebook.com', 2, '2', '2016-03-07 14:10:17'),
(63, 'asdfg12', 'yenmasieupham@gmail.com', 2, '2', '2016-03-07 14:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cus_phone` int(11) NOT NULL,
  `cus_address` text COLLATE utf8_unicode_ci NOT NULL,
  `cus_note` text COLLATE utf8_unicode_ci NOT NULL,
  `cus_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `cus_address`, `cus_note`, `cus_status`) VALUES
(8, 'hang', 'hang@gmail.com', 1665844569, 'Nghệ an', 'helllo', 2),
(9, 'yenmasp', 'yenmasieupham@gmail.com', 186989278, 'Hà Nam', 'Hà nam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pbill`
--

CREATE TABLE `pbill` (
  `b_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `pb_count` int(11) NOT NULL,
  `pb_cprice` int(11) NOT NULL,
  `pr_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pr_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pbill`
--

INSERT INTO `pbill` (`b_id`, `pr_id`, `pb_count`, `pb_cprice`, `pr_name`, `pr_image`) VALUES
(7, 39, 3, 369, 'Test thôi mà', 'banh.jpg'),
(7, 40, 1, 12000, 'Chậu tai thỏ', 'chau5.jpg'),
(8, 13, 1, 12000, 'Dưa hấu đỏ', 'duahaudo.jpg'),
(8, 12, 3, 105000, 'Dâu tây', 'dautay.jpg'),
(8, 11, 1, 35000, 'Củ cải đỏ', 'cucai2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `describe` text COLLATE utf8_unicode_ci NOT NULL,
  `sale` tinyint(4) NOT NULL,
  `special` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `manny` tinyint(4) NOT NULL,
  `date_up` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_edit` int(11) NOT NULL,
  `image_same` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `s_describe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `c_id`, `name`, `price`, `sale_price`, `image`, `describe`, `sale`, `special`, `status`, `manny`, `date_up`, `date_edit`, `image_same`, `s_describe`, `from`) VALUES
(1, 3, 'Bắp cải tí hon', 35000, 30000, 'bapcai.jpg', '<p>Includes over 250 glyphs in font format from the Glyphicon Halflings set.&nbsp;&nbsp;Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to&nbsp;whenever possible.</p>\r\n', 1, 0, 1, 0, '2016-02-25 15:45:44', 2016, ',,,', 'Bắp cải tí hon ngon ngon', 'Úc'),
(2, 3, 'Bí đĩa bay', 10000, 8000, 'bidiabay.jpg', '<p>bdb</p>\r\n', 1, 0, 1, 0, '2016-02-25 15:45:44', 2016, ',,,', 'Bí đĩa bay hay hay', 'Mỹ'),
(7, 3, 'Bí ngô trắng', 12000, 10000, 'bingo.jpg', 'bnt', 1, 0, 1, 0, '2016-02-25 16:00:20', 0, '', '', ''),
(8, 5, 'Cà rốt', 35000, 30000, 'carot.png', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 1, 1, 1, '2016-02-25 16:00:20', 2016, ',,,', 'Cà rốt với kích thước tí hon xinh xắn ', 'Nhật Bản'),
(9, 6, 'Cẩm chướng', 35000, 30000, 'camchuong.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 1, 1, 0, '2016-02-25 16:00:20', 2016, ',,,', 'Loại hoa mang nhiều điều hay', 'Đà Lạt'),
(10, 6, 'Cây săn mồi', 35000, 30000, 'cayanmoi.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 1, 1, 0, '2016-02-25 16:00:20', 2016, ',,,', 'What do you mean?', 'Việt Nam'),
(11, 5, 'Củ cải đỏ', 35000, 30000, 'cucai2.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 0, 0, 1, 0, '2016-02-25 16:00:20', 2016, ',,,', 'Củ cải đỏ ngon bổ rẻ đang hót trên thị trường', 'Úc'),
(12, 3, 'Dâu tây', 35000, 30000, 'dautay.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 1, 1, 0, '2016-02-25 16:00:20', 2016, ',,,', 'Dâu tây là sản phẩm cây trồng đang được ưa chuộng', 'Hà Nam'),
(13, 3, 'Dưa hấu đỏ', 12000, 10000, 'duahaudo.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 1, 1, 0, '2016-02-25 16:00:20', 2016, ',,,', 'Dưa hấu đỏ là mặt hàng đang hót hiện nay', 'Ấn Độ'),
(38, 3, 'Bắp cải tí hon', 12, 1, 'bapcai.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 0, 1, 0, '2016-03-06 21:12:43', 2016, 'bapcai2.jpg,bingo.jpg,bidiabay.jpg,bingo2.jpg', 'test í mà1', 'qư'),
(39, 10, 'Chậu treo tường', 123, 123, 'cahu8.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn&nbsp;</p>\r\n', 1, 1, 1, 0, '2016-03-07 10:28:17', 2016, 'camchuong.jpg,bapcai2.jpg,bidiabay.jpg,banh.jpg', 'Lorem ipsum là dạng chữ mẫu được sử', 'sá'),
(40, 10, 'Chậu tai thỏ', 12000, 10000, 'chau5.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn&nbsp;</p>\r\n', 1, 0, 1, 3, '2016-03-07 15:30:23', 2016, 'chau4.jpg,chau5.jpg,cahu6.jpg,chau8.jpg', 'Chậu trồng nhựa', 'Hà Nội'),
(41, 10, 'Chậu minion', 10000, 8000, 'cahu7.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 0, 1, 0, '2016-03-18 11:22:16', 2016, ',,,', 'Chậu nhựa handmade', 'Việt Nam'),
(42, 9, 'Xơ dừa', 12000, 10000, 'giathe2.jpg', '<p>Lorem ipsum l&agrave; dạng chữ mẫu được sử dụng trong ng&agrave;nh in ấn từ những năm 1500. N&oacute; dần trở l&ecirc;n phổ biến kể từ những năm 1960 v&agrave; cho đến ng&agrave;y nay, hầu hết những giao diện v&agrave; c&aacute;c phần mềm m&aacute;y t&iacute;nh đều sử dụng Lorem Ipsum l&agrave; chữ mẫu.</p>\r\n\r\n<p>Thực chất Lorem Ipsum kh&ocirc;ng phải l&agrave; d&ograve;ng chữ v&ocirc; nghĩa được tạo ra một c&aacute;ch ngẫu nhi&ecirc;n, m&agrave; theo những nghi&ecirc;n cứu gần đ&acirc;y, người ta tin rằng n&oacute; được bắt nguồn từ một b&agrave;i văn cổ đại, c&oacute; ni&ecirc;n đại&nbsp; khoảng 45 năm trước c&ocirc;ng nguy&ecirc;n.</p>\r\n', 1, 0, 1, 0, '2016-03-18 11:45:10', 2016, 'giathe.jpg,,,', 'Sơ dừa tạo độ phì nhiêu cho cây rồng', 'Cà mau');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_up` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_edit` date NOT NULL,
  `ma_sl` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `status`, `date_up`, `date_edit`, `ma_sl`) VALUES
(1, 's1.jpg', 1, '0000-00-00 00:00:00', '2016-03-09', 3),
(2, 's2.jpg', 1, '0000-00-00 00:00:00', '2016-03-09', 0),
(3, 's3.jpg', 1, '0000-00-00 00:00:00', '2016-03-09', 0),
(4, 'raucu.jpg', 1, '0000-00-00 00:00:00', '2016-03-09', 0),
(5, 'rau-cu.jpg', 1, '0000-00-00 00:00:00', '2016-03-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `tittle` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `face` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `s_describe` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `tittle`, `logo`, `address`, `phone`, `email`, `face`, `s_describe`) VALUES
(1, 'WEB BÁN HẠT GIỐNG MINI', 'logoclean2.png', 'Số 255 Mễ Trì Hạ Nam Từ Liêm Hà Nội', '01665844569', 'yenmasieupham@gmail.com', 'https://www.facebook.com/kienthucquanhta12/', 'Website chuyên cung cấp các dịch vụ liên quan đến các giống cây mini như hạt giống và dụng cụ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
