-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2021 at 03:14 PM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplyca_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `social_login_users`
--

CREATE TABLE `social_login_users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_login_users`
--

INSERT INTO `social_login_users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `picture`, `locale`, `link`, `created`, `modified`) VALUES
(30, 'google', '116551516279298095777', 'Jitendra', 'Goswami', 'jitendra@innovins.com', '', 'https://lh3.googleusercontent.com/a-/AOh14Gj5WMQenw9Jc1VtXcNk10VdktjouNQwqNYOmncJwQ=s96-c', 'en', '', '2021-10-20 14:38:15', '2021-10-22 14:10:19'),
(31, 'facebook', '134604362238108', 'Shlok', 'Sh', 'divyamehra91@gmail.com', '', 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.30497-1/cp0/c15.0.50.50a/p50x50/84628273_176159830277856_972693363922829312_n.jpg?_nc_cat=1&ccb=1-5&_nc_sid=12b3be&_nc_ohc=jfjrRmQRoqAAX8k_OJG&_nc_ht=scontent', NULL, 'https://www.facebook.com/', '2021-10-20 14:39:58', '2021-10-21 06:34:45'),
(32, 'google', '117392364278373478766', 'Mithilesh', 'Prajapati', 'mithilesh.prajapati2@gmai', '', 'https://lh3.googleusercontent.com/a-/AOh14GhhU-v468ZCfw_dVa1AldT76zdn1Gilcx1lcA5rYg=s96-c', 'en', '', '2021-10-21 06:29:27', '2021-10-30 07:35:49'),
(33, 'facebook', '2070934366395916', 'Jitendra', 'Goswami', 'jitendrag645@gmail.com', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2070934366395916&height=50&width=50&ext=1637390095&hash=AeRg45Fwbg2pj0-JCSQ', NULL, 'https://www.facebook.com/', '2021-10-21 06:34:55', '2021-10-21 06:34:55'),
(34, 'facebook', '1080502886087452', 'Mith', 'Prajapati', 'mithinsta@gmail.com', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1080502886087452&height=50&width=50&ext=1637390150&hash=AeQFA6_-s11pxi-YBh0', NULL, 'https://www.facebook.com/', '2021-10-21 06:35:50', '2021-10-21 06:35:50'),
(35, 'google', '108057883176178493163', 'RIDHAM', 'GAMING YT', 'ridhammaingi24@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14GjzUOaR0xQfddzkDHgBRt_uXrgktj_xXTfoivQTNQ=s96-c', 'en-GB', '', '2021-10-25 07:25:14', '2021-10-25 07:25:14'),
(36, 'google', '111445920571822694677', 'Prathamesh', 'Ayare', 'payare35@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14Giz0Vo6_qa17fwj-h3nCojZjZet6emT8Tb72WTJ=s96-c', 'en', '', '2021-10-25 13:55:51', '2021-10-25 13:55:51'),
(37, 'google', '114433964143382364592', 'Zoheb', 'Shek', 'zohebshek@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14GiEAdScwFH8wJ__tOtF6iEs5BSZD9-ef8kzoWbc6A=s96-c', 'en', '', '2021-11-08 17:11:52', '2021-11-08 17:11:52'),
(38, 'google', '100152595010140007405', 'Tanya', 'Mehra', 'tanyamehra96.tm@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14Gim7KNcvS419cmvwYIyB5gBXocZgh51VM-PUm9aoBI=s96-c', 'en', '', '2021-11-08 18:07:13', '2021-11-08 18:07:13'),
(39, 'google', '108770731378172654897', 'Cosmic', 'Web Solution', 'cosmicwebsolution@gmail.c', '', 'https://lh3.googleusercontent.com/a-/AOh14Gj-BEiy5eoT7mmQL9EotopHU-GEsu3eTa8SW2MI6A=s96-c', 'en', '', '2021-11-10 08:03:38', '2021-11-10 08:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`id`, `user_id`, `name`, `mobile`, `location`, `area`, `pincode`, `city`, `address`) VALUES
(2, 3, 'Yogesh Gurav', '09561655240', 'home', 'nsp', '401209', 'Nalasopara', '03/Siddhi parijat society, Tulinj naka, Tulinj road, Nalasopara (East) - 401209'),
(3, 3, 'shubham', '123456789', 'home', 'nsp', '12345', 'Nalasopara', '03/Siddhi parijat society, Tulinj naka, Tulinj road, Nalasopara (East) - 401209'),
(4, 8, 'shubham', '08830516259', 'home', 'saibaba mandir', '401305', 'virar', 'a/202, vasai'),
(5, 9, 'JIT', '9024645458', 'home', 'NSK', '422209', 'NSk', 'NSK ADDRESS'),
(6, 10, 'hghfg', '9024645458', 'home', 'fgh', '455585', 'gf', 'fg'),
(7, 16, 'Mandar Dhulap', '9820451677', 'home', 'Dahisar', '400068', 'Mumbai', 'B 504, Shakti Tower Co-OP HSG Society, C S Rad No 4, Shakti Nagar, Dahisar East Mumbai 400068'),
(8, 19, 'shriya sagar nangre', '+917058814481', 'home', 'mira road', '401107', 'THANE', 'Shanti Vihar, Poonam Sagar, Mira Road. 401107.'),
(9, 20, 'Quest services', '7000486880', 'office', 'Chunabhatti', '462016', 'bhopal', 'A 20 deepak society near V mart main road'),
(10, 21, 'tanya', '9930330106', 'home', '', '401107', 'Mumbai', '404, Ritu Fame\r\nRitu Paradise, Phase 1'),
(11, 21, '', '', 'home', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `rights` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`, `usertype`, `rights`, `created`) VALUES
(1, 'Simply Carrom', 'simplycarrom', '$2y$10$Oa5nZPqu5ZuSmIxSCzh.euthebIkPmINRUVWfHaqYh63e.vvpVh3i', NULL, NULL, '2021-08-05 21:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area` varchar(200) NOT NULL,
  `pincode` int(8) NOT NULL,
  `delivery_charges` float(6,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`id`, `city_id`, `area`, `pincode`, `delivery_charges`, `created`, `modified`) VALUES
(2, 2, 'sdfg', 435435, 345.00, '2021-08-21 17:28:08', '2021-08-21 17:29:12'),
(3, 3, 'Vasai', 401208, 20.00, '2021-08-23 05:44:44', '2021-08-23 11:14:44'),
(4, 5, 'agashi', 401205, 100.00, '2021-08-23 07:20:46', '2021-08-23 12:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attributes`
--

CREATE TABLE `tbl_attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attributes`
--

INSERT INTO `tbl_attributes` (`id`, `name`, `created`) VALUES
(1, 'Frame Color', '2021-08-20 07:14:17'),
(3, 'Ply Thickness', '2021-10-26 08:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `page_title` text NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_description` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_categories`
--

CREATE TABLE `tbl_blog_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page_title` text NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sum_sp` double NOT NULL,
  `sum_p` double NOT NULL,
  `colors` varchar(255) DEFAULT NULL,
  `ply` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `user_id`, `qty`, `sum_sp`, `sum_p`, `colors`, `ply`) VALUES
(28, 1, 9, 1, 3999, 4999, 'Red', '28mm'),
(140, 7, 9, 1, 190, 225, 'black', '8 mm'),
(147, 7, 10, 1, 190, 225, 'black', '8 mm'),
(148, 10, 15, 1, 8, 12, 'black', '20 mm'),
(159, 19, 12, 1, 11562, 13372, 'Black', '30mm'),
(167, 29, 16, 1, 0, 0, NULL, NULL),
(168, 13, 19, 3, 0, 0, NULL, NULL),
(169, 39, 19, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `row_order` int(5) NOT NULL,
  `show_on_home` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `parent_id`, `slug`, `image`, `row_order`, `show_on_home`, `created`, `modified`) VALUES
(2, 'Carrom Board', 0, 'carrom-board', 'uploads/media/new arrival-1635935004-1.jpg', 1, 0, '2021-09-13 07:41:52', '2021-11-03 10:24:11'),
(9, 'Home Use', 2, 'combo-packs-home-use', 'uploads/media/legend galaxy-1635755674-1.png', 2, 0, '2021-10-05 09:52:45', '2021-11-01 12:36:33'),
(11, 'Carrom Coins Set', 0, 'accessories', 'uploads/media/frees-1635935016-1.jpeg', 4, 0, '2021-10-05 09:59:42', '2021-11-03 10:24:24'),
(13, 'Carrom Coins for Players', 11, 'carrom-coins', 'uploads/media/sure slam 2-1634195743-1.jpg', 4, 0, '2021-10-05 10:08:00', '2021-11-08 11:44:40'),
(14, 'Clubs / Societies ', 2, 'range-of-sureslam-premium-collection-boards', 'uploads/media/car1-1631511663-1.jpg', 5, 1, '2021-10-05 10:54:40', '2021-10-07 07:12:43'),
(17, 'Players / Professional ', 2, 'range-of-jumbo-fighter-boards', 'uploads/media/car1-1631511663-1.jpg', 7, 0, '2021-10-05 11:20:43', '2021-10-07 07:26:51'),
(18, 'Premium Range', 2, 'range-of-bulldog-fighter-boards', 'uploads/media/car2-1631525421-1.jpg', 7, 1, '2021-10-05 11:22:56', '2021-10-26 13:06:51'),
(26, 'Carrom Coins for Practice', 11, 'range-of-premium-carrom-coins', 'uploads/media/rosewood coins.jpg2mb-1635853834-1.jpg', 5, 0, '2021-10-06 11:43:17', '2021-11-08 11:45:14'),
(27, 'Carrom Coins for Home', 11, 'newly-launch-carrom-coins', 'uploads/media/mercury-1-1634730816-1.jpg', 9, 0, '2021-10-06 11:44:36', '2021-11-08 11:56:54'),
(28, 'Carrom Strikers', 0, 'carrom-strikers', 'uploads/media/5 star-1635935276-1.jpg', 1, 0, '2021-10-07 06:43:06', '2021-11-03 10:29:21'),
(29, 'Other Products', 0, 'other-products', 'uploads/media/car2-1631525421-1.jpg', 6, 0, '2021-10-07 06:48:38', '2021-10-07 06:48:38'),
(30, 'Combos', 0, 'combos', 'uploads/media/car2-1631525421-1.jpg', 5, 0, '2021-10-07 06:56:53', '2021-10-07 06:56:53'),
(32, 'Carrom Stand', 29, 'carrom-stand', 'uploads/media/car2-1631525421-1.jpg', 8, 0, '2021-10-07 07:34:01', '2021-10-07 07:34:01'),
(33, 'Carrom Powder', 29, 'carrom-powder', 'uploads/media/car1-1631511663-1.jpg', 8, 0, '2021-10-07 07:34:28', '2021-10-07 07:34:28'),
(34, 'Lamp shade', 29, 'lamp-shade', 'uploads/media/car1-1631511663-1.jpg', 8, 0, '2021-10-07 07:34:55', '2021-10-07 07:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`, `created`, `modified`) VALUES
(2, 'Jodhpur', '2021-08-21 16:50:53', '0000-00-00 00:00:00'),
(3, 'Vasai', '2021-08-23 05:43:36', '2021-08-23 05:43:59'),
(4, 'Nalasopara', '2021-08-23 05:43:47', '2021-08-23 05:44:13'),
(5, 'Virar', '2021-08-23 07:20:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery_time`
--

CREATE TABLE `tbl_delivery_time` (
  `id` int(11) NOT NULL,
  `time` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_delivery_time`
--

INSERT INTO `tbl_delivery_time` (`id`, `time`) VALUES
(1, 'Morning 9 PM'),
(2, 'Evening'),
(3, 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `question`, `answer`, `created`, `modified`) VALUES
(2, 'Question here', 'Answer here in 2 or three lnwes\'', '2021-08-23 05:43:24', '2021-08-23 11:13:24'),
(3, 'what is the cost', 'cost is zero', '2021-08-23 11:37:10', '2021-08-23 17:07:10'),
(4, 'what is your name', 'my name is amit', '2021-08-23 11:50:04', '2021-08-23 17:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id`, `title`, `name`, `path`, `created`) VALUES
(3, 'video-bg-1629822508-1.jpg', 'video-bg-1629822508-1.jpg', 'uploads/media/video-bg-1629822508-1.jpg', '2021-08-24 16:28:29'),
(7, 'car2-1631525421-1.jpg', 'car2-1631525421-1.jpg', 'uploads/media/car2-1631525421-1.jpg', '2021-09-13 11:30:24'),
(8, 'new banner copy copy-1631531811-1.jpg', 'new banner copy copy-1631531811-1.jpg', 'uploads/media/new banner copy copy-1631531811-1.jpg', '2021-09-13 13:16:52'),
(12, 'whatsapp image 2021-10-05 at 4.47.28 pm-1633434731-1.jpeg', 'whatsapp image 2021-10-05 at 4.47.28 pm-1633434731-1.jpeg', 'uploads/media/whatsapp image 2021-10-05 at 4.47.28 pm-1633434731-1.jpeg', '2021-10-05 11:52:11'),
(13, 'whatsapp image 2021-10-05 at 4.47.28 pm-1633434753-1.jpeg', 'whatsapp image 2021-10-05 at 4.47.28 pm-1633434753-1.jpeg', 'uploads/media/whatsapp image 2021-10-05 at 4.47.28 pm-1633434753-1.jpeg', '2021-10-05 11:52:33'),
(14, 'eddac7fe-02da-4e7a-bae5-4e75d33d6dce-1633436762-1.jpg', 'eddac7fe-02da-4e7a-bae5-4e75d33d6dce-1633436762-1.jpg', 'uploads/media/eddac7fe-02da-4e7a-bae5-4e75d33d6dce-1633436762-1.jpg', '2021-10-05 12:26:02'),
(15, '49b7bcae-907b-49f6-a1ba-064e31ed362b-1633437099-1.jpg', '49b7bcae-907b-49f6-a1ba-064e31ed362b-1633437099-1.jpg', 'uploads/media/49b7bcae-907b-49f6-a1ba-064e31ed362b-1633437099-1.jpg', '2021-10-05 12:31:40'),
(16, 'picture116-1633445913-1.png', 'picture116-1633445913-1.png', 'uploads/media/picture116-1633445913-1.png', '2021-10-05 14:58:33'),
(17, 'picture119-1633448058-1.png', 'picture119-1633448058-1.png', 'uploads/media/picture119-1633448058-1.png', '2021-10-05 15:34:18'),
(18, 'jumbo-1633449225-1.png', 'jumbo-1633449225-1.png', 'uploads/media/jumbo-1633449225-1.png', '2021-10-05 15:53:46'),
(22, 'klipper-1633449679-1.png', 'klipper-1633449679-1.png', 'uploads/media/klipper-1633449679-1.png', '2021-10-05 16:01:20'),
(28, 'carrom-1633513224-1.png', 'carrom-1633513224-1.png', 'uploads/media/carrom-1633513224-1.png', '2021-10-06 09:40:24'),
(29, 'carrom-1633513235-1.png', 'carrom-1633513235-1.png', 'uploads/media/carrom-1633513235-1.png', '2021-10-06 09:40:35'),
(30, 'range of premium carrom striker1-1633515859-1.png', 'range of premium carrom striker1-1633515859-1.png', 'uploads/media/range of premium carrom striker1-1633515859-1.png', '2021-10-06 10:24:19'),
(31, 'home-use-1633771356-1.jpg', 'home-use-1633771356-1.jpg', 'uploads/media/home-use-1633771356-1.jpg', '2021-10-09 05:22:38'),
(32, 'dsc_7762-1633771746-1.jpg', 'dsc_7762-1633771746-1.jpg', 'uploads/media/dsc_7762-1633771746-1.jpg', '2021-10-09 05:29:08'),
(33, 'dsc_7760-1633773780-1.jpg', 'dsc_7760-1633773780-1.jpg', 'uploads/media/dsc_7760-1633773780-1.jpg', '2021-10-09 06:03:02'),
(34, 'jupiter-1633774324-1.jpg', 'jupiter-1633774324-1.jpg', 'uploads/media/jupiter-1633774324-1.jpg', '2021-10-09 06:12:05'),
(35, 'jupiter (2)-1633774352-1.jpg', 'jupiter (2)-1633774352-1.jpg', 'uploads/media/jupiter (2)-1633774352-1.jpg', '2021-10-09 06:12:34'),
(36, 'pluto-1633776110-1.jpg', 'pluto-1633776110-1.jpg', 'uploads/media/pluto-1633776110-1.jpg', '2021-10-09 06:41:52'),
(37, 'pluto-2-1633776165-1.jpg', 'pluto-2-1633776165-1.jpg', 'uploads/media/pluto-2-1633776165-1.jpg', '2021-10-09 06:42:47'),
(38, 'venus-1633776704-1.jpg', 'venus-1633776704-1.jpg', 'uploads/media/venus-1633776704-1.jpg', '2021-10-09 06:51:46'),
(39, 'venus-1-1633776736-1.jpg', 'venus-1-1633776736-1.jpg', 'uploads/media/venus-1-1633776736-1.jpg', '2021-10-09 06:52:17'),
(40, 'venus-2-1633776776-1.jpg', 'venus-2-1633776776-1.jpg', 'uploads/media/venus-2-1633776776-1.jpg', '2021-10-09 06:52:58'),
(41, 'genius-1633777492-1.jpg', 'genius-1633777492-1.jpg', 'uploads/media/genius-1633777492-1.jpg', '2021-10-09 07:04:54'),
(42, 'genius-1-1633777579-1.jpg', 'genius-1-1633777579-1.jpg', 'uploads/media/genius-1-1633777579-1.jpg', '2021-10-09 07:06:20'),
(43, 'genius-2-1633777624-1.jpg', 'genius-2-1633777624-1.jpg', 'uploads/media/genius-2-1633777624-1.jpg', '2021-10-09 07:07:05'),
(44, 'genius-3-1633777686-1.jpg', 'genius-3-1633777686-1.jpg', 'uploads/media/genius-3-1633777686-1.jpg', '2021-10-09 07:08:08'),
(45, 'tiger-1633778246-1.jpg', 'tiger-1633778246-1.jpg', 'uploads/media/tiger-1633778246-1.jpg', '2021-10-09 07:17:27'),
(46, 'tournament-1-1633778599-1.jpg', 'tournament-1-1633778599-1.jpg', 'uploads/media/tournament-1-1633778599-1.jpg', '2021-10-09 07:23:21'),
(47, 'tournament-2-1633778637-1.jpg', 'tournament-2-1633778637-1.jpg', 'uploads/media/tournament-2-1633778637-1.jpg', '2021-10-09 07:23:59'),
(48, 'tournament-3-1633778681-1.jpg', 'tournament-3-1633778681-1.jpg', 'uploads/media/tournament-3-1633778681-1.jpg', '2021-10-09 07:24:43'),
(49, 'dsc_7738-1633779099-1.jpg', 'dsc_7738-1633779099-1.jpg', 'uploads/media/dsc_7738-1633779099-1.jpg', '2021-10-09 07:31:41'),
(50, 'dsc_7738-1633779114-1.jpg', 'dsc_7738-1633779114-1.jpg', 'uploads/media/dsc_7738-1633779114-1.jpg', '2021-10-09 07:31:56'),
(51, 'dsc_7742-1633779171-1.jpg', 'dsc_7742-1633779171-1.jpg', 'uploads/media/dsc_7742-1633779171-1.jpg', '2021-10-09 07:32:53'),
(52, 'dsc_7740-1633779220-1.jpg', 'dsc_7740-1633779220-1.jpg', 'uploads/media/dsc_7740-1633779220-1.jpg', '2021-10-09 07:33:42'),
(53, 'jumbo-1-1633779815-1.jpg', 'jumbo-1-1633779815-1.jpg', 'uploads/media/jumbo-1-1633779815-1.jpg', '2021-10-09 07:43:37'),
(54, 'jumbo-3-1633779884-1.jpg', 'jumbo-3-1633779884-1.jpg', 'uploads/media/jumbo-3-1633779884-1.jpg', '2021-10-09 07:44:46'),
(55, 'jumbo-2-1633780232-1.jpg', 'jumbo-2-1633780232-1.jpg', 'uploads/media/jumbo-2-1633780232-1.jpg', '2021-10-09 07:50:33'),
(56, 'champion-1-1633780642-1.jpg', 'champion-1-1633780642-1.jpg', 'uploads/media/champion-1-1633780642-1.jpg', '2021-10-09 07:57:24'),
(57, 'champion-1-1633780655-1.jpg', 'champion-1-1633780655-1.jpg', 'uploads/media/champion-1-1633780655-1.jpg', '2021-10-09 07:57:37'),
(58, 'champion-2-1633780732-1.jpg', 'champion-2-1633780732-1.jpg', 'uploads/media/champion-2-1633780732-1.jpg', '2021-10-09 07:58:53'),
(59, 'champion-2-1633780765-1.jpg', 'champion-2-1633780765-1.jpg', 'uploads/media/champion-2-1633780765-1.jpg', '2021-10-09 07:59:27'),
(60, 'champion-3-1633780803-1.jpg', 'champion-3-1633780803-1.jpg', 'uploads/media/champion-3-1633780803-1.jpg', '2021-10-09 08:00:05'),
(61, 'dsc_7745-1633781378-1.jpg', 'dsc_7745-1633781378-1.jpg', 'uploads/media/dsc_7745-1633781378-1.jpg', '2021-10-09 08:09:39'),
(62, 'dsc_7747-1633781431-1.jpg', 'dsc_7747-1633781431-1.jpg', 'uploads/media/dsc_7747-1633781431-1.jpg', '2021-10-09 08:10:33'),
(63, 'dsc_7748-1633781533-1.jpg', 'dsc_7748-1633781533-1.jpg', 'uploads/media/dsc_7748-1633781533-1.jpg', '2021-10-09 08:12:15'),
(64, 'dsc_7750 copy-1633781588-1.jpg', 'dsc_7750 copy-1633781588-1.jpg', 'uploads/media/dsc_7750 copy-1633781588-1.jpg', '2021-10-09 08:13:10'),
(65, 'dsc_7659-1633782523-1.jpg', 'dsc_7659-1633782523-1.jpg', 'uploads/media/dsc_7659-1633782523-1.jpg', '2021-10-09 08:28:45'),
(66, 'dsc_7671-1633782562-1.jpg', 'dsc_7671-1633782562-1.jpg', 'uploads/media/dsc_7671-1633782562-1.jpg', '2021-10-09 08:29:24'),
(67, 'dsc_7672-1633782613-1.jpg', 'dsc_7672-1633782613-1.jpg', 'uploads/media/dsc_7672-1633782613-1.jpg', '2021-10-09 08:30:15'),
(68, 'genius-1634043490-1.png', 'genius-1634043490-1.png', 'uploads/media/genius-1634043490-1.png', '2021-10-12 08:58:10'),
(69, 'colour ball-1634043541-1.png', 'colour ball-1634043541-1.png', 'uploads/media/colour ball-1634043541-1.png', '2021-10-12 08:59:01'),
(70, 'colour ball-1634043543-1.png', 'colour ball-1634043543-1.png', 'uploads/media/colour ball-1634043543-1.png', '2021-10-12 08:59:04'),
(71, 'mmi-1634043656-1.png', 'mmi-1634043656-1.png', 'uploads/media/mmi-1634043656-1.png', '2021-10-12 09:00:56'),
(72, 'origional ball-1634043710-1.png', 'origional ball-1634043710-1.png', 'uploads/media/origional ball-1634043710-1.png', '2021-10-12 09:01:50'),
(73, 'royal-1634043744-1.jpg', 'royal-1634043744-1.jpg', 'uploads/media/royal-1634043744-1.jpg', '2021-10-12 09:02:25'),
(74, 'signature-1634043791-1.png', 'signature-1634043791-1.png', 'uploads/media/signature-1634043791-1.png', '2021-10-12 09:03:11'),
(75, 'super-1634043822-1.png', 'super-1634043822-1.png', 'uploads/media/super-1634043822-1.png', '2021-10-12 09:03:43'),
(76, 'siscaa-legend-special-edition-coin-500x500-1634190079-1.png', 'siscaa-legend-special-edition-coin-500x500-1634190079-1.png', 'uploads/media/siscaa-legend-special-edition-coin-500x500-1634190079-1.png', '2021-10-14 01:41:20'),
(77, 'sure slam 2-1634195743-1.jpg', 'sure slam 2-1634195743-1.jpg', 'uploads/media/sure slam 2-1634195743-1.jpg', '2021-10-14 03:15:44'),
(78, 'victory-1634200561-1.png', 'victory-1634200561-1.png', 'uploads/media/victory-1634200561-1.png', '2021-10-14 04:36:02'),
(81, 'new project-1634205277-1.jpg', 'new project-1634205277-1.jpg', 'uploads/media/new project-1634205277-1.jpg', '2021-10-14 05:54:37'),
(82, 'dsc_7775 (1)-1634207529-1.jpg', 'dsc_7775 (1)-1634207529-1.jpg', 'uploads/media/dsc_7775 (1)-1634207529-1.jpg', '2021-10-14 06:32:11'),
(83, 'dsc_7797-1634208760-1.jpg', 'dsc_7797-1634208760-1.jpg', 'uploads/media/dsc_7797-1634208760-1.jpg', '2021-10-14 06:52:42'),
(85, 'dsc_7797-1634210238-1.jpg', 'dsc_7797-1634210238-1.jpg', 'uploads/media/dsc_7797-1634210238-1.jpg', '2021-10-14 07:17:20'),
(86, 'dsc_7781-1634212565-1.jpg', 'dsc_7781-1634212565-1.jpg', 'uploads/media/dsc_7781-1634212565-1.jpg', '2021-10-14 07:56:07'),
(87, 'dsc_7790 -1634213130-1.jpg', 'dsc_7790 -1634213130-1.jpg', 'uploads/media/dsc_7790 -1634213130-1.jpg', '2021-10-14 08:05:31'),
(88, 'dsc_7880-1634214020-1.jpg', 'dsc_7880-1634214020-1.jpg', 'uploads/media/dsc_7880-1634214020-1.jpg', '2021-10-14 08:20:20'),
(89, '1500 x 400 6-1634717709-1.jpg', '1500 x 400 6-1634717709-1.jpg', 'uploads/media/1500 x 400 6-1634717709-1.jpg', '2021-10-20 08:15:09'),
(90, '1500 x 400 2-1634717731-1.jpg', '1500 x 400 2-1634717731-1.jpg', 'uploads/media/1500 x 400 2-1634717731-1.jpg', '2021-10-20 08:15:31'),
(91, '1500 x 400 2-1634717738-1.jpg', '1500 x 400 2-1634717738-1.jpg', 'uploads/media/1500 x 400 2-1634717738-1.jpg', '2021-10-20 08:15:38'),
(92, '1500 x 400 5-1634717762-1.jpg', '1500 x 400 5-1634717762-1.jpg', 'uploads/media/1500 x 400 5-1634717762-1.jpg', '2021-10-20 08:16:02'),
(93, '1500 x 400 4-1634717961-1.jpg', '1500 x 400 4-1634717961-1.jpg', 'uploads/media/1500 x 400 4-1634717961-1.jpg', '2021-10-20 08:19:21'),
(94, '1500 x 400 1-1634717978-1.jpg', '1500 x 400 1-1634717978-1.jpg', 'uploads/media/1500 x 400 1-1634717978-1.jpg', '2021-10-20 08:19:38'),
(95, '1500 x 400 6-1634718008-1.jpg', '1500 x 400 6-1634718008-1.jpg', 'uploads/media/1500 x 400 6-1634718008-1.jpg', '2021-10-20 08:20:08'),
(96, '1500 x 400 5-1634718046-1.jpg', '1500 x 400 5-1634718046-1.jpg', 'uploads/media/1500 x 400 5-1634718046-1.jpg', '2021-10-20 08:20:46'),
(97, '1500 x 400 6-1634721246-1.jpg', '1500 x 400 6-1634721246-1.jpg', 'uploads/media/1500 x 400 6-1634721246-1.jpg', '2021-10-20 09:14:06'),
(98, '1500 x 400 6-1634721277-1.jpg', '1500 x 400 6-1634721277-1.jpg', 'uploads/media/1500 x 400 6-1634721277-1.jpg', '2021-10-20 09:14:37'),
(99, 'siscaa-leadall-coin-500x500-1634725458-1.png', 'siscaa-leadall-coin-500x500-1634725458-1.png', 'uploads/media/siscaa-leadall-coin-500x500-1634725458-1.png', '2021-10-20 10:24:19'),
(100, 'leader-2-1634726108-1.jpg', 'leader-2-1634726108-1.jpg', 'uploads/media/leader-2-1634726108-1.jpg', '2021-10-20 10:35:08'),
(101, 'leader-1-1634726460-1.jpg', 'leader-1-1634726460-1.jpg', 'uploads/media/leader-1-1634726460-1.jpg', '2021-10-20 10:41:00'),
(102, 'leader-3-1634726481-1.jpg', 'leader-3-1634726481-1.jpg', 'uploads/media/leader-3-1634726481-1.jpg', '2021-10-20 10:41:21'),
(103, 'leader-2-1634726506-1.jpg', 'leader-2-1634726506-1.jpg', 'uploads/media/leader-2-1634726506-1.jpg', '2021-10-20 10:41:47'),
(104, 'rainbow-1-1634726911-1.jpg', 'rainbow-1-1634726911-1.jpg', 'uploads/media/rainbow-1-1634726911-1.jpg', '2021-10-20 10:48:31'),
(105, 'rainbow-1-1634726934-1.jpg', 'rainbow-1-1634726934-1.jpg', 'uploads/media/rainbow-1-1634726934-1.jpg', '2021-10-20 10:48:54'),
(106, 'rainbow-3-1634726956-1.jpg', 'rainbow-3-1634726956-1.jpg', 'uploads/media/rainbow-3-1634726956-1.jpg', '2021-10-20 10:49:16'),
(107, 'sumo-1-1634727866-1.jpg', 'sumo-1-1634727866-1.jpg', 'uploads/media/sumo-1-1634727866-1.jpg', '2021-10-20 11:04:26'),
(108, 'sumo-2-1634727912-1.jpg', 'sumo-2-1634727912-1.jpg', 'uploads/media/sumo-2-1634727912-1.jpg', '2021-10-20 11:05:12'),
(109, 'sumo-3-1634727940-1.jpg', 'sumo-3-1634727940-1.jpg', 'uploads/media/sumo-3-1634727940-1.jpg', '2021-10-20 11:05:40'),
(110, 'product-12-1634728709-1.jpg', 'product-12-1634728709-1.jpg', 'uploads/media/product-12-1634728709-1.jpg', '2021-10-20 11:18:29'),
(111, 'galaxy-2-1634728741-1.jpg', 'galaxy-2-1634728741-1.jpg', 'uploads/media/galaxy-2-1634728741-1.jpg', '2021-10-20 11:19:02'),
(112, 'galaxy-1-1634728763-1.jpg', 'galaxy-1-1634728763-1.jpg', 'uploads/media/galaxy-1-1634728763-1.jpg', '2021-10-20 11:19:23'),
(113, 'product-13-1634729170-1.jpg', 'product-13-1634729170-1.jpg', 'uploads/media/product-13-1634729170-1.jpg', '2021-10-20 11:26:10'),
(114, 'jupiter-3-1634729194-1.jpg', 'jupiter-3-1634729194-1.jpg', 'uploads/media/jupiter-3-1634729194-1.jpg', '2021-10-20 11:26:34'),
(115, 'jupiter-2-1634729223-1.jpg', 'jupiter-2-1634729223-1.jpg', 'uploads/media/jupiter-2-1634729223-1.jpg', '2021-10-20 11:27:03'),
(116, 'jupiter-2-1634729246-1.jpg', 'jupiter-2-1634729246-1.jpg', 'uploads/media/jupiter-2-1634729246-1.jpg', '2021-10-20 11:27:26'),
(117, 'jupiter-1-1634729263-1.jpg', 'jupiter-1-1634729263-1.jpg', 'uploads/media/jupiter-1-1634729263-1.jpg', '2021-10-20 11:27:43'),
(118, 'mercury-1-1634730816-1.jpg', 'mercury-1-1634730816-1.jpg', 'uploads/media/mercury-1-1634730816-1.jpg', '2021-10-20 11:53:36'),
(119, 'mercury-2-1634730847-1.jpg', 'mercury-2-1634730847-1.jpg', 'uploads/media/mercury-2-1634730847-1.jpg', '2021-10-20 11:54:08'),
(120, 'mercury-3-1634730869-1.jpg', 'mercury-3-1634730869-1.jpg', 'uploads/media/mercury-3-1634730869-1.jpg', '2021-10-20 11:54:29'),
(121, 'product-16-1634731494-1.jpg', 'product-16-1634731494-1.jpg', 'uploads/media/product-16-1634731494-1.jpg', '2021-10-20 12:04:54'),
(122, '1500 x 400 7-1634801417-1.jpg', '1500 x 400 7-1634801417-1.jpg', 'uploads/media/1500 x 400 7-1634801417-1.jpg', '2021-10-21 07:30:17'),
(123, '1500 x 400 7-1634801448-1.jpg', '1500 x 400 7-1634801448-1.jpg', 'uploads/media/1500 x 400 7-1634801448-1.jpg', '2021-10-21 07:30:48'),
(124, '1500 x 400 7-1634801465-1.jpg', '1500 x 400 7-1634801465-1.jpg', 'uploads/media/1500 x 400 7-1634801465-1.jpg', '2021-10-21 07:31:05'),
(125, '1500 x 400 7-1634801958-1.jpg', '1500 x 400 7-1634801958-1.jpg', 'uploads/media/1500 x 400 7-1634801958-1.jpg', '2021-10-21 07:39:18'),
(126, '1500 x 400 7-1634801976-1.jpg', '1500 x 400 7-1634801976-1.jpg', 'uploads/media/1500 x 400 7-1634801976-1.jpg', '2021-10-21 07:39:36'),
(127, '1500 x 400 7-1634802040-1.jpg', '1500 x 400 7-1634802040-1.jpg', 'uploads/media/1500 x 400 7-1634802040-1.jpg', '2021-10-21 07:40:40'),
(128, '1500 x 400 7-1634802059-1.jpg', '1500 x 400 7-1634802059-1.jpg', 'uploads/media/1500 x 400 7-1634802059-1.jpg', '2021-10-21 07:40:59'),
(129, '1500 x 400 7-1634802425-1.jpg', '1500 x 400 7-1634802425-1.jpg', 'uploads/media/1500 x 400 7-1634802425-1.jpg', '2021-10-21 07:47:05'),
(130, '4-1634806441-1.jpg', '4-1634806441-1.jpg', 'uploads/media/4-1634806441-1.jpg', '2021-10-21 08:54:01'),
(131, '1500 x 400 7-1634809220-1.jpg', '1500 x 400 7-1634809220-1.jpg', 'uploads/media/1500 x 400 7-1634809220-1.jpg', '2021-10-21 09:40:20'),
(132, '1500 x 400 2-1634833455-1.jpg', '1500 x 400 2-1634833455-1.jpg', 'uploads/media/1500 x 400 2-1634833455-1.jpg', '2021-10-21 16:24:15'),
(133, '1500 x 400 3-1634833530-1.jpg', '1500 x 400 3-1634833530-1.jpg', 'uploads/media/1500 x 400 3-1634833530-1.jpg', '2021-10-21 16:25:30'),
(138, '1500 x 400 1-1635239312-1.jpg', '1500 x 400 1-1635239312-1.jpg', 'uploads/media/1500 x 400 1-1635239312-1.jpg', '2021-10-26 09:08:32'),
(140, 'siscaa stand-1635242551-1.png', 'siscaa stand-1635242551-1.png', 'uploads/media/siscaa stand-1635242551-1.png', '2021-10-26 10:02:31'),
(141, 'siscaa stand-1635243349-1.jpg', 'siscaa stand-1635243349-1.jpg', 'uploads/media/siscaa stand-1635243349-1.jpg', '2021-10-26 10:15:49'),
(142, 'siscaa carrom stand-1635243374-1.jpg', 'siscaa carrom stand-1635243374-1.jpg', 'uploads/media/siscaa carrom stand-1635243374-1.jpg', '2021-10-26 10:16:14'),
(143, 'siscaa carrom stand-1635243387-1.jpg', 'siscaa carrom stand-1635243387-1.jpg', 'uploads/media/siscaa carrom stand-1635243387-1.jpg', '2021-10-26 10:16:28'),
(144, 'banner-left-1635533994-1.jpg', 'banner-left-1635533994-1.jpg', 'uploads/media/banner-left-1635533994-1.jpg', '2021-10-29 18:59:54'),
(145, 'bulldog fighet black-1635754543-1.png', 'bulldog fighet black-1635754543-1.png', 'uploads/media/bulldog fighet black-1635754543-1.png', '2021-11-01 08:15:44'),
(146, 'galaxy super-1635755474-1.png', 'galaxy super-1635755474-1.png', 'uploads/media/galaxy super-1635755474-1.png', '2021-11-01 08:31:16'),
(147, 'winit-1635755499-1.png', 'winit-1635755499-1.png', 'uploads/media/winit-1635755499-1.png', '2021-11-01 08:31:40'),
(148, 'legend venus-1635755539-1.png', 'legend venus-1635755539-1.png', 'uploads/media/legend venus-1635755539-1.png', '2021-11-01 08:32:20'),
(149, 'legend galaxy-1635755674-1.png', 'legend galaxy-1635755674-1.png', 'uploads/media/legend galaxy-1635755674-1.png', '2021-11-01 08:34:36'),
(150, 'champion genius-1635755908-1.png', 'champion genius-1635755908-1.png', 'uploads/media/champion genius-1635755908-1.png', '2021-11-01 08:38:30'),
(151, 'bulldog genius-1635755981-1.png', 'bulldog genius-1635755981-1.png', 'uploads/media/bulldog genius-1635755981-1.png', '2021-11-01 08:39:42'),
(152, 'bulldog fighet yellow-1635756013-1.png', 'bulldog fighet yellow-1635756013-1.png', 'uploads/media/bulldog fighet yellow-1635756013-1.png', '2021-11-01 08:40:14'),
(153, '-1635756071-1.', '-1635756071-1.', 'uploads/media/-1635756071-1.', '2021-11-01 08:41:11'),
(154, '-1635756163-1.', '-1635756163-1.', 'uploads/media/-1635756163-1.', '2021-11-01 08:42:43'),
(155, 'bulldog fighetr brown-1635756533-1.png', 'bulldog fighetr brown-1635756533-1.png', 'uploads/media/bulldog fighetr brown-1635756533-1.png', '2021-11-01 08:48:54'),
(156, 'jumbo fighter natural brown-1635756557-1.png', 'jumbo fighter natural brown-1635756557-1.png', 'uploads/media/jumbo fighter natural brown-1635756557-1.png', '2021-11-01 08:49:18'),
(157, 'jumbo fighetr yellow-1635756729-1.png', 'jumbo fighetr yellow-1635756729-1.png', 'uploads/media/jumbo fighetr yellow-1635756729-1.png', '2021-11-01 08:52:12'),
(158, 'jumbo fighetr balck-1635757002-1.png', 'jumbo fighetr balck-1635757002-1.png', 'uploads/media/jumbo fighetr balck-1635757002-1.png', '2021-11-01 08:56:43'),
(159, 'jumbo genius-1635757242-1.png', 'jumbo genius-1635757242-1.png', 'uploads/media/jumbo genius-1635757242-1.png', '2021-11-01 09:00:43'),
(160, 'jumbo fighetr brown-1635757996-1.png', 'jumbo fighetr brown-1635757996-1.png', 'uploads/media/jumbo fighetr brown-1635757996-1.png', '2021-11-01 09:13:18'),
(161, 'champion fighter black-1635758103-1.png', 'champion fighter black-1635758103-1.png', 'uploads/media/champion fighter black-1635758103-1.png', '2021-11-01 09:15:06'),
(162, 'c fighter natural brown-1635758118-1.png', 'c fighter natural brown-1635758118-1.png', 'uploads/media/c fighter natural brown-1635758118-1.png', '2021-11-01 09:15:20'),
(163, 'c fighter natural yellow-1635758134-1.png', 'c fighter natural yellow-1635758134-1.png', 'uploads/media/c fighter natural yellow-1635758134-1.png', '2021-11-01 09:15:35'),
(164, 'sure slam klipper-1635758197-1.png', 'sure slam klipper-1635758197-1.png', 'uploads/media/sure slam klipper-1635758197-1.png', '2021-11-01 09:16:39'),
(165, 'sureslam jumbo-1635758241-1.png', 'sureslam jumbo-1635758241-1.png', 'uploads/media/sureslam jumbo-1635758241-1.png', '2021-11-01 09:17:22'),
(166, 'sureslam bulldog-1635758269-1.png', 'sureslam bulldog-1635758269-1.png', 'uploads/media/sureslam bulldog-1635758269-1.png', '2021-11-01 09:17:51'),
(167, 'ss-cb-bull dogfighter-black-1635758451-1.jpg', 'ss-cb-bull dogfighter-black-1635758451-1.jpg', 'uploads/media/ss-cb-bull dogfighter-black-1635758451-1.jpg', '2021-11-01 09:20:51'),
(168, 'ss-cb-bulldogfighter-natural brown-1635758538-1.jpg', 'ss-cb-bulldogfighter-natural brown-1635758538-1.jpg', 'uploads/media/ss-cb-bulldogfighter-natural brown-1635758538-1.jpg', '2021-11-01 09:22:18'),
(169, 'ss-cb-bulldogfighter-natural yellow-1635758604-1.jpg', 'ss-cb-bulldogfighter-natural yellow-1635758604-1.jpg', 'uploads/media/ss-cb-bulldogfighter-natural yellow-1635758604-1.jpg', '2021-11-01 09:23:25'),
(170, 'ss-cb-bulldog genius-1635758648-1.jpg', 'ss-cb-bulldog genius-1635758648-1.jpg', 'uploads/media/ss-cb-bulldog genius-1635758648-1.jpg', '2021-11-01 09:24:09'),
(171, 'ss-cb-bulldog-sure slam coins-1635758767-1.jpg', 'ss-cb-bulldog-sure slam coins-1635758767-1.jpg', 'uploads/media/ss-cb-bulldog-sure slam coins-1635758767-1.jpg', '2021-11-01 09:26:08'),
(172, 'ss-cb-cf-black, perfect shot coins-1635758847-1.jpg', 'ss-cb-cf-black, perfect shot coins-1635758847-1.jpg', 'uploads/media/ss-cb-cf-black, perfect shot coins-1635758847-1.jpg', '2021-11-01 09:27:27'),
(173, 'ss-cb-cf-natural brown, legend coins-1635758912-1.jpg', 'ss-cb-cf-natural brown, legend coins-1635758912-1.jpg', 'uploads/media/ss-cb-cf-natural brown, legend coins-1635758912-1.jpg', '2021-11-01 09:28:32'),
(174, 'ss-cb-champion-genius(20)-1635759063-1.jpg', 'ss-cb-champion-genius(20)-1635759063-1.jpg', 'uploads/media/ss-cb-champion-genius(20)-1635759063-1.jpg', '2021-11-01 09:31:04'),
(175, 'ss-cb-cf-natural brown, genius striker-1635759138-1.jpg', 'ss-cb-cf-natural brown, genius striker-1635759138-1.jpg', 'uploads/media/ss-cb-cf-natural brown, genius striker-1635759138-1.jpg', '2021-11-01 09:32:18'),
(176, 'ss-cb-champion-genius, perfect shot coins-1635759261-1.jpg', 'ss-cb-champion-genius, perfect shot coins-1635759261-1.jpg', 'uploads/media/ss-cb-champion-genius, perfect shot coins-1635759261-1.jpg', '2021-11-01 09:34:21'),
(177, 'ss-cb-champion-genius,signature striker-1635759429-1.jpg', 'ss-cb-champion-genius,signature striker-1635759429-1.jpg', 'uploads/media/ss-cb-champion-genius,signature striker-1635759429-1.jpg', '2021-11-01 09:37:09'),
(178, 'ss-cb-champion natural yellow ss coins-1635759525-1.jpg', 'ss-cb-champion natural yellow ss coins-1635759525-1.jpg', 'uploads/media/ss-cb-champion natural yellow ss coins-1635759525-1.jpg', '2021-11-01 09:38:45'),
(179, 'ss-cb-jumbo fighter-black-1635759635-1.jpg', 'ss-cb-jumbo fighter-black-1635759635-1.jpg', 'uploads/media/ss-cb-jumbo fighter-black-1635759635-1.jpg', '2021-11-01 09:40:35'),
(180, 'ss-cb-jumbofighter-natural brown-1635759837-1.jpg', 'ss-cb-jumbofighter-natural brown-1635759837-1.jpg', 'uploads/media/ss-cb-jumbofighter-natural brown-1635759837-1.jpg', '2021-11-01 09:43:58'),
(181, 'ss-cb-jumbo fighter-natural yellow-1635759909-1.jpg', 'ss-cb-jumbo fighter-natural yellow-1635759909-1.jpg', 'uploads/media/ss-cb-jumbo fighter-natural yellow-1635759909-1.jpg', '2021-11-01 09:45:10'),
(182, 'ss-cb-jumbo genius black-1635760073-1.jpg', 'ss-cb-jumbo genius black-1635760073-1.jpg', 'uploads/media/ss-cb-jumbo genius black-1635760073-1.jpg', '2021-11-01 09:47:54'),
(183, 'ss-cb-jumbo-natural yellow-1635760152-1.jpg', 'ss-cb-jumbo-natural yellow-1635760152-1.jpg', 'uploads/media/ss-cb-jumbo-natural yellow-1635760152-1.jpg', '2021-11-01 09:49:12'),
(184, 'ss-cb-jupiter-super-1635760188-1.jpg', 'ss-cb-jupiter-super-1635760188-1.jpg', 'uploads/media/ss-cb-jupiter-super-1635760188-1.jpg', '2021-11-01 09:49:48'),
(185, 'ss-cb-pluto-super-1635760211-1.jpg', 'ss-cb-pluto-super-1635760211-1.jpg', 'uploads/media/ss-cb-pluto-super-1635760211-1.jpg', '2021-11-01 09:50:11'),
(186, 'ss-cb-jupiter-super-1635760239-1.jpg', 'ss-cb-jupiter-super-1635760239-1.jpg', 'uploads/media/ss-cb-jupiter-super-1635760239-1.jpg', '2021-11-01 09:50:39'),
(187, 'ss-cb-tournament black genius coins-1635760361-1.jpg', 'ss-cb-tournament black genius coins-1635760361-1.jpg', 'uploads/media/ss-cb-tournament black genius coins-1635760361-1.jpg', '2021-11-01 09:52:42'),
(188, 'ss-cb-winit(12)-1635760736-1.jpg', 'ss-cb-winit(12)-1635760736-1.jpg', 'uploads/media/ss-cb-winit(12)-1635760736-1.jpg', '2021-11-01 09:58:57'),
(189, '370 x 277 champ-1635764162-1.jpg', '370 x 277 champ-1635764162-1.jpg', 'uploads/media/370 x 277 champ-1635764162-1.jpg', '2021-11-01 10:56:02'),
(190, '370 x 277c-1635764353-1.jpg', '370 x 277c-1635764353-1.jpg', 'uploads/media/370 x 277c-1635764353-1.jpg', '2021-11-01 10:59:13'),
(191, '368 x 550-1635764464-1.jpg', '368 x 550-1635764464-1.jpg', 'uploads/media/368 x 550-1635764464-1.jpg', '2021-11-01 11:01:04'),
(192, 'free delivery-1635765653-1.jpg', 'free delivery-1635765653-1.jpg', 'uploads/media/free delivery-1635765653-1.jpg', '2021-11-01 11:20:53'),
(193, 'whats new-1635765889-1.jpg', 'whats new-1635765889-1.jpg', 'uploads/media/whats new-1635765889-1.jpg', '2021-11-01 11:24:49'),
(194, 'original-1635766029-1.png', 'original-1635766029-1.png', 'uploads/media/original-1635766029-1.png', '2021-11-01 11:27:09'),
(195, 'new collection-1635766047-1.jpg', 'new collection-1635766047-1.jpg', 'uploads/media/new collection-1635766047-1.jpg', '2021-11-01 11:27:27'),
(196, 'free delivery-1635766124-1.jpg', 'free delivery-1635766124-1.jpg', 'uploads/media/free delivery-1635766124-1.jpg', '2021-11-01 11:28:44'),
(197, 'free1-1635766501-1.jpg', 'free1-1635766501-1.jpg', 'uploads/media/free1-1635766501-1.jpg', '2021-11-01 11:35:02'),
(198, 'premium carr c-1635767423-1.jpg', 'premium carr c-1635767423-1.jpg', 'uploads/media/premium carr c-1635767423-1.jpg', '2021-11-01 11:50:23'),
(199, 'premium carr c-1635767583-1.jpg', 'premium carr c-1635767583-1.jpg', 'uploads/media/premium carr c-1635767583-1.jpg', '2021-11-01 11:53:03'),
(200, '-1635767701-1.', '-1635767701-1.', 'uploads/media/-1635767701-1.', '2021-11-01 11:55:01'),
(201, '-1635767711-1.', '-1635767711-1.', 'uploads/media/-1635767711-1.', '2021-11-01 11:55:11'),
(202, '-1635767775-1.', '-1635767775-1.', 'uploads/media/-1635767775-1.', '2021-11-01 11:56:15'),
(203, '-1635767805-1.', '-1635767805-1.', 'uploads/media/-1635767805-1.', '2021-11-01 11:56:45'),
(204, 'newarrival-1635768010-1.jpg', 'newarrival-1635768010-1.jpg', 'uploads/media/newarrival-1635768010-1.jpg', '2021-11-01 12:00:10'),
(205, 'new black original-1635768372-1.jpg', 'new black original-1635768372-1.jpg', 'uploads/media/new black original-1635768372-1.jpg', '2021-11-01 12:06:12'),
(206, 'blak new-1635768384-1.jpg', 'blak new-1635768384-1.jpg', 'uploads/media/blak new-1635768384-1.jpg', '2021-11-01 12:06:24'),
(207, 'fre black-1635768403-1.jpg', 'fre black-1635768403-1.jpg', 'uploads/media/fre black-1635768403-1.jpg', '2021-11-01 12:06:44'),
(208, 'new circle-1635768567-1.jpg', 'new circle-1635768567-1.jpg', 'uploads/media/new circle-1635768567-1.jpg', '2021-11-01 12:09:27'),
(209, 'new circle-1635768582-1.jpg', 'new circle-1635768582-1.jpg', 'uploads/media/new circle-1635768582-1.jpg', '2021-11-01 12:09:42'),
(210, 'new_circle-removebg-preview-1635768668-1.png', 'new_circle-removebg-preview-1635768668-1.png', 'uploads/media/new_circle-removebg-preview-1635768668-1.png', '2021-11-01 12:11:09'),
(211, 'new_circle-removebg-preview-1635768808-1.png', 'new_circle-removebg-preview-1635768808-1.png', 'uploads/media/new_circle-removebg-preview-1635768808-1.png', '2021-11-01 12:13:28'),
(212, 'accessory master-1635769334-1.png', 'accessory master-1635769334-1.png', 'uploads/media/accessory master-1635769334-1.png', '2021-11-01 12:22:14'),
(213, 'royal-1635769346-1.jpg', 'royal-1635769346-1.jpg', 'uploads/media/royal-1635769346-1.jpg', '2021-11-01 12:22:27'),
(214, 'ss-cb-tournament super striker-1635773129-1.jpg', 'ss-cb-tournament super striker-1635773129-1.jpg', 'uploads/media/ss-cb-tournament super striker-1635773129-1.jpg', '2021-11-01 13:25:29'),
(215, 'tournament fighter back-1635846725-1.jpeg', 'tournament fighter back-1635846725-1.jpeg', 'uploads/media/tournament fighter back-1635846725-1.jpeg', '2021-11-02 09:52:05'),
(216, 'tournament fighter -1635846736-1.jpeg', 'tournament fighter -1635846736-1.jpeg', 'uploads/media/tournament fighter -1635846736-1.jpeg', '2021-11-02 09:52:16'),
(217, 'jazeera square-1635846750-1.jpg', 'jazeera square-1635846750-1.jpg', 'uploads/media/jazeera square-1635846750-1.jpg', '2021-11-02 09:52:30'),
(218, 'jazeera round-1635846776-1.jpeg', 'jazeera round-1635846776-1.jpeg', 'uploads/media/jazeera round-1635846776-1.jpeg', '2021-11-02 09:52:57'),
(219, 'legend-removebg-preview-1635851088-1.png', 'legend-removebg-preview-1635851088-1.png', 'uploads/media/legend-removebg-preview-1635851088-1.png', '2021-11-02 11:04:48'),
(221, '-1635851492-1.', '-1635851492-1.', 'uploads/media/-1635851492-1.', '2021-11-02 11:11:32'),
(224, 'rosewood coins-1635851699-1.jpg', 'rosewood coins-1635851699-1.jpg', 'uploads/media/rosewood coins-1635851699-1.jpg', '2021-11-02 11:15:00'),
(225, 'rosewood coins-1635853627-1.jpg', 'rosewood coins-1635853627-1.jpg', 'uploads/media/rosewood coins-1635853627-1.jpg', '2021-11-02 11:47:07'),
(226, 'rosewood coins.jpg2mb-1635853834-1.jpg', 'rosewood coins.jpg2mb-1635853834-1.jpg', 'uploads/media/rosewood coins.jpg2mb-1635853834-1.jpg', '2021-11-02 11:50:34'),
(227, 'new arrival-1635935004-1.jpg', 'new arrival-1635935004-1.jpg', 'uploads/media/new arrival-1635935004-1.jpg', '2021-11-03 10:23:24'),
(228, 'frees-1635935016-1.jpeg', 'frees-1635935016-1.jpeg', 'uploads/media/frees-1635935016-1.jpeg', '2021-11-03 10:23:36'),
(229, '5 star-1635935276-1.jpg', '5 star-1635935276-1.jpg', 'uploads/media/5 star-1635935276-1.jpg', '2021-11-03 10:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer_text`
--

CREATE TABLE `tbl_offer_text` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `font_size` int(5) NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_offer_text`
--

INSERT INTO `tbl_offer_text` (`id`, `text`, `font_size`, `modified`) VALUES
(1, '', 22, '2021-08-26 19:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `promo_code` varchar(100) NOT NULL,
  `promo_discount` float NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sort` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `user_id`, `order_no`, `order_date`, `status`, `payment_id`, `address_id`, `amount`, `promo_code`, `promo_discount`, `created`, `modified`, `sort`) VALUES
(1, 8, 'ORD-758620636', '2021-11-01 07:35:53', 'Delivered', NULL, 4, 12998.00, 'SP5OFF', 649.9, '2021-11-01 13:05:53', '2021-11-01 13:11:25', '00:00:00'),
(2, 8, 'ORD-2078618358', '2021-11-01 07:52:58', 'Packed', NULL, 4, 17498.00, 'SP5OFF', 874.9, '2021-11-01 13:22:58', '2021-11-01 13:23:45', '00:00:00'),
(3, 20, 'ORD-1421672731', '2021-11-08 17:15:08', 'Placed', NULL, 9, 0.00, '', 0, '2021-11-08 22:45:08', '2021-11-08 22:45:08', '00:00:00'),
(4, 21, 'ORD-1293073860', '2021-11-08 18:19:38', 'Placed', NULL, 10, 352.00, '', 0, '2021-11-08 23:49:38', '2021-11-08 23:49:38', '00:00:00'),
(5, 21, 'ORD-1162741207', '2021-11-08 18:42:36', 'Placed', NULL, 10, 8999.00, '', 0, '2021-11-09 00:12:36', '2021-11-09 00:12:36', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `variant_name` varchar(300) NOT NULL,
  `qty` int(5) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `special_price` float(10,2) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `total_special_price` float(10,2) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_id`, `variant_id`, `product_name`, `variant_name`, `qty`, `gst`, `price`, `special_price`, `total_price`, `total_special_price`, `created`, `modified`) VALUES
(1, 1, 19, 0, 'Siscaa Sure  Slam Champion', 'brown,28 mm', 1, '0', 67999.00, 12998.00, 67999.00, 12998.00, '2021-11-01 13:05:53', '2021-11-01 13:05:53'),
(2, 2, 19, 0, 'Siscaa Sure  Slam Champion', 'brown,28 mm', 1, '0', 77375.00, 17498.00, 77375.00, 17498.00, '2021-11-01 13:22:58', '2021-11-01 13:22:58'),
(3, 3, 42, 0, 'Siscaa Color Ball', ',', 1, '0.12', 0.00, 0.00, 0.00, 0.00, '2021-11-08 22:45:08', '2021-11-08 22:45:08'),
(4, 4, 39, 0, 'Siscaa Genius Striker', ',Plastic Box', 1, '0.12', 600.00, 400.00, 528.00, 352.00, '2021-11-08 23:49:38', '2021-11-08 23:49:38'),
(5, 5, 10, 0, 'Siscaa Tiger', ',20 mm', 1, '0', 12625.00, 8999.00, 12625.00, 8999.00, '2021-11-09 00:12:36', '2021-11-09 00:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `short_description` text NOT NULL,
  `description` text,
  `slug` varchar(500) NOT NULL,
  `indicator` varchar(10) NOT NULL,
  `minimum_order_quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `other_images` text NOT NULL,
  `warranty_guarantte_text` varchar(255) NOT NULL,
  `latest_product` int(11) NOT NULL,
  `best_seller` int(11) NOT NULL,
  `pro_on_sale` int(11) NOT NULL,
  `featured_pro` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_description` text NOT NULL,
  `made_in` varchar(150) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `category_id`, `tags`, `tax_id`, `type`, `name`, `short_description`, `description`, `slug`, `indicator`, `minimum_order_quantity`, `image`, `other_images`, `warranty_guarantte_text`, `latest_product`, `best_seller`, `pro_on_sale`, `featured_pro`, `page_title`, `meta_tags`, `meta_description`, `made_in`, `created`, `modified`) VALUES
(10, 14, 'carrom, board', 0, 'simple_product', 'Siscaa Tiger Carrom', 'Model: Sure Slam Klipper\r\nFrame : 3 x 2\r\nPly: English ply 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-tiger-carrom', 'none', 0, 'uploads/media/tiger-1633778246-1.jpg', '[\"uploads\\/media\\/tiger-1633778246-1.jpg\",\"uploads\\/media\\/genius-1-1633777579-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-05 15:09:57', '2021-11-09 10:43:41'),
(11, 14, 'big club, carrom for club use,', 1, 'simple_product', 'Siscaa Bulldog Genius', 'Model: Sure Slam Bulldog\r\nFrame : 4 x 2\r\nPly: English ply 30 x 30\r\nPly Thickness: 28 mm\r\n', '', 'siscaa-bulldog-genius', 'none', 0, 'uploads/media/genius-1633777492-1.jpg', '[\"uploads\\/media\\/genius-1633777492-1.jpg\",\"uploads\\/media\\/genius-1-1633777579-1.jpg\",\"uploads\\/media\\/genius-2-1633777624-1.jpg\",\"uploads\\/media\\/genius-3-1633777686-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-05 15:17:39', '2021-10-26 08:37:07'),
(12, 14, 'square carrom, carrom for home, 12mm,', 1, 'simple_product', 'Siscaa Tournament', 'Model: Sure Slam Bulldog\r\nFrame : 5 x 2\r\nPly: English ply 30 x 30\r\nPly Thickness: 36 mm\r\n', '', 'siscaa-tournament', 'none', 0, 'uploads/media/tournament-1-1633778599-1.jpg', '[\"uploads\\/media\\/tournament-1-1633778599-1.jpg\",\"uploads\\/media\\/tournament-2-1633778637-1.jpg\",\"uploads\\/media\\/tournament-3-1633778681-1.jpg\"]', '', 0, 0, 0, 0, 'Siscaa Carrom Tournament 12 mm ply.', '', '', 'India', '2021-10-05 15:25:29', '2021-10-26 08:38:54'),
(13, 17, '', 1, 'simple_product', 'Siscaa Champion Fighter Green', 'Model: Jumbo Fighter (Black)\r\nFrame : 5 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 36 mm\r\n', '', 'siscaa-champion-fighter-green', 'none', 0, 'uploads/media/dsc_7745-1633781378-1.jpg', '[\"uploads\\/media\\/dsc_7747-1633781431-1.jpg\",\"uploads\\/media\\/dsc_7745-1633781378-1.jpg\",\"uploads\\/media\\/dsc_7748-1633781533-1.jpg\",\"uploads\\/media\\/dsc_7750 copy-1633781588-1.jpg\"]', '', 1, 0, 0, 0, '', '', '', '', '2021-10-05 15:34:55', '2021-11-02 10:15:19'),
(14, 17, '', 1, 'variable_product', 'Siscaa Champion Genius Carrom', 'Model: Champion Genius \r\nFrame : 3 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-champion-genius-carrom', 'none', 0, 'uploads/media/dsc_7671-1633782562-1.jpg', '[\"uploads\\/media\\/dsc_7671-1633782562-1.jpg\",\"uploads\\/media\\/dsc_7659-1633782523-1.jpg\",\"uploads\\/media\\/dsc_7672-1633782613-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-05 15:41:07', '2021-11-02 10:12:59'),
(15, 17, '', 1, 'variable_product', 'Siscaa Jumbo Fighter (Black )', 'Model: Jumbo Fighter (Natural Brown)\r\nFrame : 5 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 36 mm\r\n', '<p>Buy Siscaa JUMBO FIGHTER Carrom Board at best price only at Simply Carrom, authorised dealers and distributors of Siscaa Carroms and Accessories. </p><p>Simply Carrom is one of the most popular online store where you find original and </p><p>This carrom board is a large fighter carrom board that can be used for practise by clubs, resorts, and society. The frame of the JUMBO FIGHTER Carrom Board is curved to prevent damage during transportation. The frame 5 x 2 inches for speedy rebound. The 30x30 inch ply (playing surface) is being used. Carrom clubs, resorts, residential neighbourhoods, and professional carrom players use this carrom.</p><p> </p><p>Simply carrom is an online portal that give authentic and best price compared to any other portal.</p><p>Siscaa JUMBO FIGHTER is a branded fighter Carrom Board that is recognised for its size and visual attractiveness. It\'s made of English ply wood. </p><p>This ply is 24mm thick, 28mm thick, 32mm thick, and 36mm thick.</p>', 'siscaa-jumbo-fighter-black', 'none', 0, 'uploads/media/jumbo fighetr balck-1635757002-1.png', 'null', '', 0, 1, 0, 0, 'Large Carrom Board at best price online. Buy Siscaa Carrom now at Simply Carrom.', 'large, Siscaa carrom, best price', 'Large Carrom Board at best price online. Buy Siscaa Carrom now at Simply Carrom. Buy Siscaa Jumbo Fighter, 36 mm carrom board at factory price. Lowest price guaranteed only at Simply Carrom.', '', '2021-10-05 15:45:25', '2021-11-01 10:40:07'),
(16, 18, '', 1, 'simple_product', 'Siscaa Sure Slam Bulldog', 'Model: Bulldog Fighter (Black)\r\nFrame : 4 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 28 mm\r\n', '', 'siscaa-sure-slam-bulldog', 'none', 0, 'uploads/media/dsc_7738-1633779114-1.jpg', '[\"uploads\\/media\\/dsc_7738-1633779114-1.jpg\",\"uploads\\/media\\/dsc_7742-1633779171-1.jpg\",\"uploads\\/media\\/dsc_7740-1633779220-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-05 16:05:01', '2021-11-03 08:00:37'),
(18, 18, '', 1, 'variable_product', 'Siscaa Sure Slam Jumbo', 'Model: Bulldog Fighter (Black)\r\nFrame : 4 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 28 mm\r\n', '', 'siscaa-sure-slam-jumbo', 'none', 0, 'uploads/media/jumbo-1-1633779815-1.jpg', '[\"uploads\\/media\\/jumbo-1-1633779815-1.jpg\",\"uploads\\/media\\/jumbo-3-1633779884-1.jpg\",\"uploads\\/media\\/jumbo-2-1633780232-1.jpg\"]', '', 0, 1, 0, 0, '', '', '', '', '2021-10-06 07:09:42', '2021-11-03 08:01:11'),
(19, 18, '', 1, 'variable_product', 'Siscaa Sure  Slam Champion', 'Model: Bulldog Fighter (Black)\r\nFrame : 4 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 28 mm\r\n', '', 'siscaa-sure-slam-champion', 'none', 0, 'uploads/media/champion-1-1633780642-1.jpg', '[\"uploads\\/media\\/champion-1-1633780642-1.jpg\",\"uploads\\/media\\/champion-2-1633780765-1.jpg\",\"uploads\\/media\\/champion-3-1633780803-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 07:15:42', '2021-11-03 08:01:37'),
(20, 17, '', 1, 'simple_product', 'Siscaa Champion Fighter Brown', 'Model: Champion Fighter \r\nFrame : 3 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-champion-fighter-brown', 'none', 0, 'uploads/media/champion fighter black-1635758103-1.png', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 08:35:26', '2021-11-01 11:46:29'),
(22, 2, '', 1, 'variable_product', 'Siscaa Champion Fighter (Black)', 'Model: Champion Fighter (Black)\r\nFrame : 3 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-champion-fighter-black', 'none', 0, 'uploads/media/champion fighter black-1635758103-1.png', 'null', '', 0, 1, 1, 0, '', 'original, best selling, carrom board ', '', '', '2021-10-06 08:52:27', '2021-11-09 06:57:17'),
(25, 0, '', 1, 'simple_product', 'Siscaa Jumbo Genius', 'Model: Jumbo Genius\r\nFrame : 5 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 36 mm\r\n', '', 'siscaa-jumbo-genius', 'none', 0, 'uploads/media/car2-1631525421-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 09:11:14', '2021-11-03 08:04:45'),
(27, 14, '', 1, 'simple_product', 'Siscaa Champion Genius Green', 'Model: Champion Genius Green\r\nFrame : 3 x 2 (Fast)\r\nPly: English Birch 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-champion-genius-green', 'none', 0, 'uploads/media/dsc_7745-1633781378-1.jpg', '[\"uploads\\/media\\/dsc_7745-1633781378-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 09:18:46', '2021-11-09 10:41:34'),
(29, 17, 'bestselling, carrom, for all age', 1, 'simple_product', 'Siscaa Tournament Fighter', 'Model: Tournament Fighter\r\nFrame : 3 x 2 (Fast)\r\nPly: Indian ply 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-tournament-fighter', 'none', 0, 'uploads/media/tournament fighter -1635846736-1.jpeg', '[\"uploads\\/media\\/tournament fighter back-1635846725-1.jpeg\"]', '', 1, 1, 1, 0, '', '', '', 'India', '2021-10-06 09:28:28', '2021-11-08 11:49:53'),
(30, 9, '', 1, 'simple_product', 'Siscaa Legend Galaxy', 'Model: Siscaa Legend Galaxy\r\nFrame : 2 X 1.5\r\nPly: Indian ply 30 x 30\r\nPly Thickness: 6 mm\r\n', '', 'siscaa-legend-galaxy', 'none', 0, 'uploads/media/legend galaxy-1635755674-1.png', 'null', '', 1, 1, 0, 0, '', '', '', '', '2021-10-06 09:33:43', '2021-11-02 10:02:46'),
(31, 0, '', 1, 'simple_product', 'Siscaa Legend Venus', 'Model: Siscaa Legend Venus\r\nFrame : 1.5 X 1.5\r\nPly: Indian ply 30 x 30\r\nPly Thickness: 4 mm\r\n', '', 'siscaa-legend-venus', 'none', 0, 'uploads/media/legend venus-1635755539-1.png', 'null', '', 1, 0, 0, 0, '', '', '', '', '2021-10-06 09:39:00', '2021-11-02 10:01:32'),
(33, 0, '', 1, 'simple_product', 'Siscaa Winit', 'Model: Winit\r\nFrame : 3 x 1.5 (Fast)\r\nPly: Indian ply 30 x 30\r\nPly Thickness: 8 mm\r\n', '', 'siscaa-winit', 'none', 0, 'uploads/media/car2-1631525421-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 09:52:39', '2021-11-03 08:07:54'),
(34, 0, 'original, best selling, carrom board ', 1, 'simple_product', 'Siscaa Galaxy Super', 'Model: Galaxy Super\r\nFrame : 2 x 1.5\r\nPly: Indian ply 30 x 30\r\nPly Thickness: 6 mm\r\n', '', 'siscaa-galaxy-super', 'none', 0, 'uploads/media/galaxy super-1635755474-1.png', '[\"uploads\\/media\\/car1-1631511663-1.jpg\"]', '', 0, 1, 0, 1, '', 'original, best selling, carrom board ', '', 'India', '2021-10-06 09:55:34', '2021-11-03 08:08:35'),
(36, 0, '', 1, 'simple_product', 'Siscaa Combo Pack 2 (Pro Home Use)', 'Combo Pack 2 (Pro Home Use) - Tournament 12MM Carrom Board + Genius Coin Set +\r\nMand Made Ivory Striker + Easy Fold Stand\r\n', '', 'siscaa-combo-pack-2-pro-home-use', 'none', 0, 'uploads/media/car1-1631511663-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 10:09:36', '2021-11-03 08:09:09'),
(38, 13, 'high quality, tournament board, carrom striker', 1, 'simple_product', 'Siscaa Sure Slam Coins', 'Model: Sure Slam\r\nThickness: 7.5 mm\r\nPacking: Plastic Box\r\nUsed In: Professional Carrom Board Coins', '', 'siscaa-sure-slam-coins', 'none', 0, 'uploads/media/sure slam 2-1634195743-1.jpg', '[\"uploads\\/media\\/sure slam 2-1634195743-1.jpg\",\"uploads\\/media\\/sure slam 2-1634195743-1.jpg\"]', '', 1, 1, 0, 0, '', 'high quality, tournament board, carrom striker', '', 'India', '2021-10-06 10:31:48', '2021-11-08 11:46:33'),
(39, 28, 'champion, carrom board striker', 1, 'simple_product', 'Siscaa Genius Striker', 'Model: Genius\r\nFrame: 7.5 mm\r\nWeight: 15 gms \r\nUses: For Champions\r\n', '', 'siscaa-genius-striker', 'none', 0, 'uploads/media/genius-1634043490-1.png', 'null', '', 0, 1, 0, 0, '', 'champion , carrom board striker ', '', 'India', '2021-10-06 10:48:32', '2021-11-03 08:10:55'),
(40, 28, 'original, best selling, carrom board striker', 1, 'simple_product', 'Siscaa Original Ball', 'Model: Original Ball\r\nFrame: 7.5 mm\r\nWeight: 15 gms \r\nUses: For Players\r\n', '', 'siscaa-original-ball', 'none', 0, 'uploads/media/origional ball-1634043710-1.png', 'null', '', 0, 0, 0, 0, '', 'original, best selling , carrom board striker ', '', 'India', '2021-10-06 10:51:44', '2021-11-03 08:11:37'),
(41, 28, 'professional, carrom striker', 1, 'simple_product', 'Siscaa Man Made Ivory (MMI) Striker ', 'Model: Man Made Ivory \r\nFrame: 7.5 mm\r\nWeight: 15 gms \r\nUses: For Players \r\n', '', 'siscaa-man-made-ivory-mmi-striker', 'none', 0, 'uploads/media/mmi-1634043656-1.png', 'null', '', 1, 0, 0, 0, '', 'professional, carrom striker ', '', 'India', '2021-10-06 10:58:55', '2021-11-03 08:12:15'),
(42, 28, 'best quality, carrom board striker ', 1, 'simple_product', 'Siscaa Color Ball', 'Model: Color Ball\r\nFrame: 7.5 mm\r\nWeight: 15 gms \r\nUses: For Heavy Board \r\n', '', 'siscaa-color-ball', 'none', 0, 'uploads/media/colour ball-1634043541-1.png', 'null', '', 0, 0, 0, 0, '', 'best quality , carrom board striker ', '', 'India', '2021-10-06 11:03:38', '2021-11-03 08:12:51'),
(43, 28, 'standard, size , carrom board striker ', 1, 'simple_product', 'Siscaa Victory Striker', 'Model:  Victory \r\nFrame: 7.5 mm\r\nWeight: 15 gms \r\nUses: For Heavy Boards \r\n', '', 'siscaa-victory-striker', 'none', 0, 'uploads/media/victory-1634200561-1.png', 'null', '', 0, 0, 0, 0, '', 'standard, size , carrom board striker ', '', 'India', '2021-10-06 11:06:47', '2021-11-03 08:13:44'),
(44, 0, '', 1, 'simple_product', 'Siscaa Jazeera', 'Model: Siscaa Jazeera\r\nFrame : 3 x 2 \r\nPly: English ply 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-jazeera', 'none', 0, 'uploads/media/jazeera square-1635846750-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 11:14:25', '2021-11-03 08:14:49'),
(45, 0, '', 1, 'simple_product', 'Siscaa Jazeera (Round Corner Frame)', 'Model: Siscaa Jazeera (Round Corner Frame)\r\nFrame : 3 x 2 \r\nPly: English Birch 30 x 30\r\nPly Thickness: 20 mm\r\n', '', 'siscaa-jazeera-round-corner-frame', 'none', 0, 'uploads/media/jazeera round-1635846776-1.jpeg', 'null', '', 1, 0, 0, 1, '', '', '', '', '2021-10-06 11:16:55', '2021-11-03 08:15:26'),
(47, 11, '', 1, 'simple_product', 'Siscaa Premium Carrom Coin Set', 'Model:   Premium\r\nThickness: 8 mm\r\nPacking: Plastic Box\r\nUses: For Practice\r\n', '', 'siscaa-premium-carrom-coin-set', 'none', 0, 'uploads/media/premium carr c-1635767583-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-06 11:24:50', '2021-11-02 11:00:52'),
(51, 13, '', 1, 'simple_product', ' Siscaa Legend (Special Edition)', 'Model:  Legend (Special Edition)\r\nThickness: 7.2 mm\r\nPacking: Plastic Box\r\nUses:  For Champion\r\n', '', 'siscaa-legend-special-edition', 'none', 0, 'uploads/media/legend-removebg-preview-1635851088-1.png', 'null', '', 0, 1, 1, 0, '', '', '', '', '2021-10-06 11:50:36', '2021-11-08 11:49:23'),
(52, 26, '', 1, 'simple_product', 'Siscaa Leadall Coins', 'Model: Leadall\r\nThickness: 7.5 mm\r\nPacking: Top quality wooden Box\r\nUsed In: Practice by Beginners and Players', '', 'siscaa-leadall-coins', 'none', 0, 'uploads/media/siscaa-leadall-coin-500x500-1634725458-1.png', '[\"uploads\\/media\\/siscaa-leadall-coin-500x500-1634725458-1.png\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 11:55:44', '2021-11-03 09:55:16'),
(54, 26, '', 1, 'simple_product', 'Siscaa Commander Coin', 'Model: Commander\r\nThickness: 9 mm\r\nPacking: Plastic Box\r\nUsed In: Leisure in Clubs', '', 'siscaa-commander-coin', 'none', 0, 'uploads/media/dsc_7880-1634214020-1.jpg', '[\"uploads\\/media\\/dsc_7880-1634214020-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 12:04:58', '2021-11-03 09:55:45'),
(55, 11, '', 1, 'simple_product', 'Siscaa Jupiter Coins', 'Model: Jupiter\r\nThickness: 8 mm\r\nPacking: Cardboard Box\r\nUsed In: Practice at beginners level.', '', 'siscaa-jupiter-coins', 'none', 0, 'uploads/media/product-13-1634729170-1.jpg', '[\"uploads\\/media\\/product-13-1634729170-1.jpg\",\"uploads\\/media\\/jupiter-2-1634729223-1.jpg\",\"uploads\\/media\\/jupiter-3-1634729194-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-06 12:07:42', '2021-11-03 09:56:12'),
(56, 27, '', 1, 'simple_product', 'Siscaa Galaxy Coins', 'Model: Galaxy\r\nThickness: 8 mm\r\nPacking: Cardboard Box\r\nUsed In: Home Use (galaxy)', '', 'siscaa-galaxy-coins', 'none', 0, 'uploads/media/product-12-1634728709-1.jpg', '[\"uploads\\/media\\/product-12-1634728709-1.jpg\",\"uploads\\/media\\/galaxy-2-1634728741-1.jpg\",\"uploads\\/media\\/galaxy-1-1634728763-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-06 12:13:00', '2021-11-03 09:56:58'),
(57, 9, '', 1, 'simple_product', 'Siscaa Pluto Super', 'COMBO 4 ( PROFESSIONAL PRO) - SURE SLAM CHAMPION CARROM BOARD + SURE SLAM COIN SET + GENIUS STRIKER + EASY FOLD STAND + EASY FOLD LAMP SHADE', '', 'siscaa-pluto-super', 'none', 0, 'uploads/media/pluto-1633776110-1.jpg', '[\"uploads\\/media\\/pluto-1633776110-1.jpg\",\"uploads\\/media\\/pluto-2-1633776165-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-09 06:44:45', '2021-11-03 09:57:24'),
(58, 28, 'top, carrom board striker', 0, 'simple_product', 'Siscaa Super Striker', 'COMBO 4 ( PROFESSIONAL PRO) - SURE SLAM CHAMPION CARROM BOARD + SURE SLAM COIN SET + GENIUS STRIKER + EASY FOLD STAND + EASY FOLD LAMP SHADE', '', 'siscaa-super-striker', 'none', 0, 'uploads/media/super-1634043822-1.png', '[\"uploads\\/media\\/pluto-1633776110-1.jpg\",\"uploads\\/media\\/pluto-2-1633776165-1.jpg\",\"uploads\\/media\\/super-1634043822-1.png\"]', 'https://simplycarrom.com/admin/uploads/media/super-1634043822-1.png', 0, 0, 0, 0, '', 'top, carrom board striker', '', 'India', '2021-10-09 06:44:49', '2021-10-26 10:30:14'),
(59, 9, '', 1, 'simple_product', 'Siscaa Venus', '', '', 'siscaa-venus', 'none', 0, 'uploads/media/venus-1633776704-1.jpg', '[\"uploads\\/media\\/venus-1633776704-1.jpg\",\"uploads\\/media\\/venus-1-1633776736-1.jpg\",\"uploads\\/media\\/venus-2-1633776776-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-09 06:55:42', '2021-11-03 09:57:50'),
(61, 13, '', 1, 'simple_product', 'Siscaa Bulldog Coin', 'Model: Bulldog\r\nThickness: 9 mm\r\nPacking: Wooden Box\r\nUsed In: Leisure in Clubs/ Resorts and Societies', '', 'siscaa-bulldog-coin', 'none', 0, 'uploads/media/dsc_7775 (1)-1634207529-1.jpg', '[\"uploads\\/media\\/dsc_7775 (1)-1634207529-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-14 06:38:32', '2021-11-03 09:58:31'),
(62, 11, '', 1, 'simple_product', 'Siscaa Genius Coin', 'Model: Genius\r\nThickness: 8 mm\r\nPacking: Plastic Box\r\nUsed In: Practice', '', 'siscaa-genius-coin', 'none', 0, 'uploads/media/dsc_7797-1634210238-1.jpg', '[\"uploads\\/media\\/dsc_7797-1634210238-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-14 07:19:04', '2021-11-02 11:01:12'),
(63, 13, '', 1, 'simple_product', 'Siscaa Legend Coin', 'Model: Genius\r\nThickness: 6.7 mm\r\nPacking: Plastic Box\r\nUsed In: Best Selling Carrom Coins Set.', '', 'siscaa-legend-coin', 'none', 0, 'uploads/media/dsc_7781-1634212565-1.jpg', '[\"uploads\\/media\\/dsc_7781-1634212565-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-14 07:59:51', '2021-11-03 09:59:44'),
(64, 13, '', 1, 'simple_product', 'Siscaa Perfect Shot Coin', 'Model: Perfect shot\r\nThickness: 7.2 mm\r\nPacking: Plastic Box\r\nUsed In: Professional Game', '', 'siscaa-perfect-shot-coin', 'none', 0, 'uploads/media/dsc_7790 -1634213130-1.jpg', '[\"uploads\\/media\\/dsc_7790 -1634213130-1.jpg\"]', '', 0, 1, 0, 1, '', '', '', 'India', '2021-10-14 08:08:27', '2021-11-08 11:47:04'),
(66, 26, '', 1, 'simple_product', 'Siscaa Leader Coins', 'Model: Leader\r\nThickness: 9 mm\r\nPacking: Plastic Box\r\nUsed In: Club and Resorts', '', 'siscaa-leader-coins', 'none', 0, 'uploads/media/leader-2-1634726108-1.jpg', '[\"uploads\\/media\\/leader-2-1634726108-1.jpg\",\"uploads\\/media\\/leader-1-1634726460-1.jpg\",\"uploads\\/media\\/leader-3-1634726481-1.jpg\",\"uploads\\/media\\/leader-2-1634726506-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-20 10:43:10', '2021-11-03 10:00:47'),
(67, 26, '', 1, 'simple_product', 'Siscaa Rainbow Coins', 'Model: Rainbow\r\nThickness:7.5 mm\r\nPacking: Plastic box\r\nUsed In: Practice', '', 'siscaa-rainbow-coins', 'none', 0, 'uploads/media/rainbow-1-1634726911-1.jpg', '[\"uploads\\/media\\/rainbow-1-1634726934-1.jpg\",\"uploads\\/media\\/rainbow-3-1634726956-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-20 10:51:05', '2021-11-03 10:01:14'),
(68, 11, '', 1, 'simple_product', 'Siscaa Sumo Coins', 'Model: Sumo\r\nThickness: 9 mm\r\nPacking: Wooden Box\r\nUsed In:Leisure in Clubs/ Resorts and Societies', '', 'siscaa-sumo-coins', 'none', 0, 'uploads/media/sumo-1-1634727866-1.jpg', '[\"uploads\\/media\\/sumo-1-1634727866-1.jpg\",\"uploads\\/media\\/sumo-2-1634727912-1.jpg\",\"uploads\\/media\\/sumo-3-1634727940-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-20 11:07:10', '2021-11-02 11:01:53'),
(69, 27, '', 1, 'simple_product', 'Siscaa Mercury Coins', 'Model: Mercury\r\nThickness: 8 mm\r\nPacking: Cardboard Box\r\nUsed In: Home Use (24 pcs).', '', 'siscaa-mercury-coins', 'none', 0, 'uploads/media/mercury-1-1634730816-1.jpg', '[\"uploads\\/media\\/mercury-1-1634730816-1.jpg\",\"uploads\\/media\\/mercury-2-1634730847-1.jpg\",\"uploads\\/media\\/mercury-3-1634730869-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-20 11:56:57', '2021-11-03 10:01:59'),
(70, 27, '', 1, 'simple_product', 'Siscaa Venus Coins', 'Model:Venus\r\nThickness: 8 mm\r\nPacking: Cardboard Box\r\nUsed In:Home Use, Beginners, Kids', '', 'siscaa-venus-coins', 'none', 0, 'uploads/media/product-16-1634731494-1.jpg', '[\"uploads\\/media\\/product-16-1634731494-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', '', '2021-10-20 12:06:10', '2021-11-03 10:02:30'),
(71, 32, '', 1, 'simple_product', 'Siscaa Carrom Stand', 'Full Foldable Carrom Stand.\r\nManufactured by Siscaa\r\nTable Size\r\nBlack Color', '', 'siscaa-carrom-stand', 'none', 0, 'uploads/media/eddac7fe-02da-4e7a-bae5-4e75d33d6dce-1633436762-1.jpg', '[\"uploads\\/media\\/siscaa stand-1635242551-1.png\",\"uploads\\/media\\/siscaa carrom stand-1635243387-1.jpg\"]', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-26 10:20:04', '2021-11-03 10:02:54'),
(72, 34, '', 1, 'simple_product', 'Siscaa Lampshade', 'Siscaa\'s Foldable Carrom Lampshade\r\nBlack Color.\r\nBest for Tournaments and Clubs.', '', 'siscaa-lampshade', 'none', 0, 'uploads/media/picture119-1633448058-1.png', 'null', '', 0, 0, 0, 0, '', '', '', 'India', '2021-10-26 10:28:10', '2021-11-03 10:03:14'),
(73, 30, '', 1, 'simple_product', 'Bulldog fighter BROWN COMBO', '', '', 'bulldog-fighter-brown-combo', 'none', 0, 'uploads/media/ss-cb-bulldogfighter-natural brown-1635758538-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 10:18:50', '2021-11-01 10:59:06'),
(74, 30, '', 1, 'simple_product', 'Bulldog Fighter Yellow Combo', '', '', 'bulldog-fighter-yellow-combo', 'none', 0, 'uploads/media/ss-cb-bulldogfighter-natural yellow-1635758604-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 10:41:41', '2021-11-03 10:03:48'),
(75, 30, '', 1, 'simple_product', 'Bulldog fighter Black combo ', '', '', 'bulldog-fighter-black-combo', 'none', 0, 'uploads/media/ss-cb-bull dogfighter-black-1635758451-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 10:57:47', '2021-11-01 16:27:47'),
(76, 30, '', 1, 'simple_product', 'Bulldog Genius Combo', '', '', 'bulldog-genius-combo', 'none', 0, 'uploads/media/ss-cb-bulldog genius-1635758648-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:03:42', '2021-11-01 16:33:42'),
(77, 30, '', 1, 'simple_product', 'Bulldog Sure Slam Coins Combo', '', '', 'bulldog-sure-slam-coins-combo', 'none', 0, 'uploads/media/ss-cb-bulldog-sure slam coins-1635758767-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:05:49', '2021-11-01 16:35:49'),
(78, 30, '', 1, 'simple_product', 'Champion Fighter Black Combo', '', '', 'champion-fighter-black-combo', 'none', 0, 'uploads/media/ss-cb-cf-black, perfect shot coins-1635758847-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:13:19', '2021-11-01 16:43:19'),
(79, 30, '', 1, 'simple_product', 'Champion Fighter Natural Brown ', '', '', 'champion-fighter-natural-brown', 'none', 0, 'uploads/media/ss-cb-cf-natural brown, genius striker-1635759138-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:14:44', '2021-11-01 16:44:44'),
(80, 30, '', 1, 'simple_product', 'Champion Genius, perfect short coin Combo ', '', '', 'champion-genius-perfect-short-coin-combo', 'none', 0, 'uploads/media/ss-cb-champion-genius, perfect shot coins-1635759261-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:16:50', '2021-11-01 16:46:50'),
(81, 30, '', 1, 'simple_product', 'Champion Fighter Natural Brown, Genius Striker Combo', '', '', 'champion-fighter-natural-brown-genius-striker-combo', 'none', 0, 'uploads/media/ss-cb-champion-genius(20)-1635759063-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:19:15', '2021-11-01 16:49:15'),
(82, 30, '', 1, 'simple_product', 'Champion Fighter Natural Yellow Combo', '', '', 'champion-fighter-natural-yellow-combo', 'none', 0, 'uploads/media/ss-cb-champion natural yellow ss coins-1635759525-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:23:22', '2021-11-01 16:53:22'),
(83, 30, '', 1, 'simple_product', 'Jumbo Fighter Black Combo', '', '', 'jumbo-fighter-black-combo', 'none', 0, 'uploads/media/ss-cb-jumbo fighter-black-1635759635-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:24:35', '2021-11-01 16:54:35'),
(84, 30, '', 1, 'simple_product', 'Jumbo Fighter Natural Brown Combo', '', '', 'jumbo-fighter-natural-brown-combo', 'none', 0, 'uploads/media/ss-cb-jumbofighter-natural brown-1635759837-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:26:11', '2021-11-01 16:56:11'),
(85, 30, '', 1, 'simple_product', 'Jumbo Fighter Natural Yellow Combo', '', '', 'jumbo-fighter-natural-yellow-combo', 'none', 0, 'uploads/media/ss-cb-jumbo fighter-natural yellow-1635759909-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:27:17', '2021-11-01 16:57:17'),
(86, 30, '', 1, 'simple_product', 'Jumbo Genius Black Combo', '', '', 'jumbo-genius-black-combo', 'none', 0, 'uploads/media/ss-cb-jumbo genius black-1635760073-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:28:19', '2021-11-01 16:58:19'),
(87, 30, '', 1, 'simple_product', 'Jumbo Natural Yellow Combo', '', '', 'jumbo-natural-yellow-combo', 'none', 0, 'uploads/media/ss-cb-jumbo fighter-natural yellow-1635759909-1.jpg', '', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 11:29:42', '2021-11-01 16:59:42'),
(88, 28, 'striker, heavy board striker,', 1, 'simple_product', 'Siscaa Signature', '', '', 'siscaa-signature', 'none', 0, 'uploads/media/signature-1634043791-1.png', '', '', 1, 1, 0, 1, '', '', '', '', '2021-11-01 12:19:33', '2021-11-01 12:25:45'),
(89, 0, '', 0, 'simple_product', 'Siscaa Accessory Master (Carrom coin set with striker)', '', '', 'siscaa-accessory-master-carrom-coin-set-with-striker', 'none', 0, 'uploads/media/accessory master-1635769334-1.png', '', '', 0, 0, 0, 1, '', '', '', '', '2021-11-01 12:21:57', '2021-11-01 12:23:56'),
(90, 0, '', 0, 'simple_product', 'Siscaa Royal Striker', '', '', 'siscaa-royal-striker', 'none', 0, 'uploads/media/royal-1634043744-1.jpg', '', '', 1, 0, 0, 0, '', '', '', '', '2021-11-01 12:23:16', '2021-11-01 17:53:16'),
(91, 30, '', 1, 'simple_product', 'Jupiter Super Combo', '', '', 'jupiter-super-combo', 'none', 0, 'uploads/media/ss-cb-jupiter-super-1635760239-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 13:16:17', '2021-11-01 18:46:17'),
(92, 30, '', 1, 'simple_product', 'Pluto Super Combo ', '', '', 'pluto-super-combo', 'none', 0, 'uploads/media/ss-cb-pluto-super-1635760211-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 13:18:27', '2021-11-01 18:48:27'),
(93, 30, '', 1, 'simple_product', 'Tournament Black Genius Coins Combo', '', '', 'tournament-black-genius-coins-combo', 'none', 0, 'uploads/media/ss-cb-tournament black genius coins-1635760361-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 13:21:31', '2021-11-01 18:51:31'),
(94, 30, '', 1, 'simple_product', 'Winit combo', '', '', 'winit-combo', 'none', 0, 'uploads/media/ss-cb-winit(12)-1635760736-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 13:24:43', '2021-11-01 18:54:43'),
(95, 30, '', 1, 'simple_product', 'Tournament Super Striker ', '', '', 'tournament-super-striker', 'none', 0, 'uploads/media/ss-cb-tournament super striker-1635773129-1.jpg', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-01 13:27:58', '2021-11-01 18:57:58'),
(96, 17, '', 1, 'simple_product', 'Champion Fighter (Natural)', 'Model: Champion Fighter\r\nPly Thickness: 20mm\r\nRebound 5+ (fast board)\r\nFrame - Natural \r\nPly: English Ply (30 x 30)', '', 'champion-fighter-natural', 'none', 0, 'uploads/media/champion fighter black-1635758103-1.png', 'null', '', 1, 0, 0, 1, '', '', '', '', '2021-11-02 10:22:02', '2021-11-02 10:23:28'),
(97, 14, '', 1, 'variable_product', 'Siscaa Bulldog Fighter ( Black) ', 'Model: Bulldog Fighter\r\nPly Thickness: 32 mm\r\nPly: English Ply\r\nBest for : Club and Resorts\r\nFrame: Black / Brown / Natural ', '', 'siscaa-bulldog-fighter-black', 'none', 0, 'uploads/media/bulldog fighetr brown-1635756533-1.png', 'null', '', 1, 0, 0, 1, '', '', '', '', '2021-11-02 10:37:43', '2021-11-02 12:12:20'),
(98, 14, '', 1, 'variable_product', 'Siscaa Bulldog Fighter (Brown)', 'Model: Bulldog Fighter \r\nFrame Size: 4 x 2 \r\nPly Thickness: 32 mm \r\nPly: English Ply \r\nBest for : Club and Resorts Frame: Black / Brown / Natural', '', 'siscaa-bulldog-fighter-brown', 'none', 0, 'uploads/media/bulldog fighetr brown-1635756533-1.png', 'null', '', 0, 0, 0, 0, '', '', '', '', '2021-11-02 10:41:42', '2021-11-09 07:06:14'),
(99, 14, '', 1, 'variable_product', 'Siscaa Bulldog Fighter (Natural)', 'Model: Bulldog Fighter \r\nframe size : 4 x 2 \r\nPly Thickness: 32 mm \r\nPly: English Ply \r\nBest for : Club and Resorts Frame: Black / Brown / Natural', '', 'siscaa-bulldog-fighter-natural', 'none', 0, 'uploads/media/bulldog fighet yellow-1635756013-1.png', 'null', '', 0, 0, 1, 1, '', '', '', 'India', '2021-11-02 10:44:21', '2021-11-09 07:07:37'),
(100, 18, '', 1, 'variable_product', 'Siscaa Sure Slam Klipper', 'Model: Sure Slam Klipper\r\nFrame : 3 x 1.5 (Fast) \r\nPly: English Birch 30 x 30 \r\nPly Thickness: 8 mm', '', 'siscaa-sure-slam-klipper', 'none', 0, 'uploads/media/sure slam klipper-1635758197-1.png', 'null', '', 1, 0, 1, 0, '', '', '', 'India', '2021-11-02 10:51:01', '2021-11-02 16:21:01'),
(101, 26, '', 1, 'simple_product', 'Siscaa Rosewood Coins', 'Model: Siscaa Rosewood\r\nThickness: 7mm\r\nPacking : Wooden box\r\nUsed by: Champion and Players\r\n', '', 'siscaa-rosewood-coins', 'none', 0, 'uploads/media/rosewood coins.jpg2mb-1635853834-1.jpg', 'null', '', 1, 1, 0, 1, '', '', '', '', '2021-11-02 11:08:03', '2021-11-08 11:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_attributes`
--

CREATE TABLE `tbl_product_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` varchar(400) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_attributes`
--

INSERT INTO `tbl_product_attributes` (`id`, `product_id`, `attribute_id`, `value`, `created`, `modified`) VALUES
(1, 1, 1, 'Red', '2021-09-13 12:22:42', '2021-09-13 12:22:42'),
(2, 2, 1, 'Brown', '2021-09-13 15:02:03', '2021-09-13 15:02:03'),
(3, 3, 1, 'black, yellow, white', '2021-09-22 11:40:24', '2021-09-28 21:07:35'),
(4, 4, 1, 'red', '2021-09-23 16:11:14', '2021-09-23 16:11:14'),
(6, 7, 1, 'black', '2021-10-05 17:52:14', '2021-10-05 17:52:14'),
(7, 8, 1, 'black', '2021-10-05 19:51:30', '2021-10-05 19:51:30'),
(8, 9, 1, 'black', '2021-10-05 20:31:19', '2021-10-05 20:31:19'),
(9, 10, 1, 'black', '2021-10-05 20:40:19', '2021-10-05 20:40:19'),
(10, 11, 1, 'black', '2021-10-05 20:48:07', '2021-10-05 20:48:07'),
(11, 12, 1, 'black', '2021-10-05 20:55:47', '2021-10-05 20:55:47'),
(12, 13, 1, 'black', '2021-10-05 21:05:12', '2021-10-25 14:10:20'),
(13, 14, 1, 'Natural Yellow', '2021-10-05 21:11:28', '2021-10-06 14:27:34'),
(14, 15, 1, 'Natural Brown', '2021-10-05 21:16:51', '2021-10-06 14:28:12'),
(15, 16, 1, 'Black\r\nNatural', '2021-10-05 21:35:20', '2021-10-26 14:29:48'),
(16, 17, 1, 'black', '2021-10-05 21:40:25', '2021-10-05 21:40:25'),
(17, 18, 1, 'Natural Yellow', '2021-10-06 12:42:35', '2021-10-06 14:28:50'),
(18, 19, 1, 'Natural Brown', '2021-10-06 12:46:02', '2021-10-06 14:29:35'),
(20, 21, 1, 'Natural Brown', '2021-10-06 14:13:35', '2021-10-06 14:35:04'),
(21, 22, 1, 'black', '2021-10-06 14:22:54', '2021-10-06 14:22:54'),
(22, 23, 1, 'Green', '2021-10-06 14:25:21', '2021-10-06 14:25:21'),
(23, 20, 1, 'Natural Yellow', '2021-10-06 14:33:49', '2021-10-06 14:33:49'),
(24, 24, 1, 'black', '2021-10-06 14:38:38', '2021-10-06 14:38:38'),
(25, 25, 1, 'black', '2021-10-06 14:42:14', '2021-10-06 14:42:14'),
(26, 26, 1, 'black', '2021-10-06 14:46:01', '2021-10-06 14:46:01'),
(27, 27, 1, 'Green', '2021-10-06 14:49:14', '2021-10-06 14:49:14'),
(28, 28, 1, 'Natural Yellow', '2021-10-06 14:56:15', '2021-10-06 14:56:15'),
(29, 29, 1, 'Natural Brown', '2021-10-06 14:59:18', '2021-10-06 14:59:18'),
(30, 30, 1, 'Natural Yellow', '2021-10-06 15:04:28', '2021-10-06 15:04:28'),
(31, 31, 1, 'Natural Brown', '2021-10-06 15:10:26', '2021-10-06 15:10:26'),
(32, 32, 1, 'black', '2021-10-06 15:15:49', '2021-10-06 15:15:49'),
(33, 33, 1, 'Natural Yellow', '2021-10-06 15:23:10', '2021-10-06 15:23:10'),
(34, 34, 1, 'black', '2021-10-06 15:26:13', '2021-10-06 15:26:13'),
(35, 35, 1, 'black', '2021-10-06 15:31:40', '2021-10-06 15:31:40'),
(36, 36, 1, 'black', '2021-10-06 15:40:34', '2021-10-06 15:40:34'),
(37, 37, 1, 'black', '2021-10-06 15:57:55', '2021-10-06 15:57:55'),
(38, 38, 1, 'black', '2021-10-06 16:09:51', '2021-10-06 16:09:51'),
(39, 39, 1, 'black', '2021-10-06 16:18:51', '2021-10-06 16:18:51'),
(40, 40, 1, 'black', '2021-10-06 16:22:05', '2021-10-06 16:22:05'),
(41, 41, 1, 'black', '2021-10-06 16:29:42', '2021-10-06 16:29:42'),
(42, 42, 1, 'black', '2021-10-06 16:34:00', '2021-10-06 16:34:00'),
(43, 43, 1, 'black', '2021-10-06 16:37:06', '2021-10-06 16:37:06'),
(44, 44, 1, 'Natural Brown', '2021-10-06 16:45:03', '2021-10-06 16:45:03'),
(45, 45, 1, 'Natural Yellow ', '2021-10-06 16:47:38', '2021-10-06 16:47:38'),
(46, 46, 1, 'black', '2021-10-06 16:52:08', '2021-10-06 16:52:08'),
(47, 47, 1, 'black', '2021-10-06 16:55:09', '2021-10-06 16:55:09'),
(48, 48, 1, 'black', '2021-10-06 16:57:04', '2021-10-06 16:57:04'),
(49, 49, 1, 'black', '2021-10-06 17:02:57', '2021-10-06 17:02:57'),
(50, 50, 1, 'black', '2021-10-06 17:18:11', '2021-10-06 17:18:11'),
(51, 51, 1, 'black', '2021-10-06 17:20:58', '2021-10-06 17:20:58'),
(52, 52, 1, 'black', '2021-10-06 17:27:37', '2021-10-06 17:27:37'),
(53, 53, 1, 'black', '2021-10-06 17:30:06', '2021-10-06 17:30:06'),
(54, 54, 1, 'black', '2021-10-06 17:35:42', '2021-10-06 17:35:42'),
(56, 56, 1, 'black', '2021-10-06 17:43:21', '2021-10-06 17:43:21'),
(57, 55, 1, 'black', '2021-10-06 18:00:00', '2021-10-06 18:00:00'),
(58, 58, 1, 'black', '2021-10-09 06:45:38', '2021-10-09 06:45:38'),
(59, 59, 1, 'black', '2021-10-09 06:56:10', '2021-10-09 06:56:10'),
(60, 60, 1, 'black', '2021-10-14 01:59:49', '2021-10-14 01:59:49'),
(61, 61, 1, 'black', '2021-10-14 06:38:56', '2021-10-14 06:38:56'),
(62, 62, 1, 'black', '2021-10-14 07:19:37', '2021-10-14 07:19:37'),
(63, 63, 1, 'black', '2021-10-14 08:02:00', '2021-10-14 08:02:00'),
(64, 64, 1, 'black', '2021-10-14 08:11:08', '2021-10-14 08:11:08'),
(65, 65, 1, 'black', '2021-10-20 16:09:48', '2021-10-20 16:09:48'),
(66, 66, 1, 'black', '2021-10-20 16:15:43', '2021-10-20 16:15:43'),
(67, 67, 1, 'black\r\n', '2021-10-20 16:22:43', '2021-10-20 16:22:43'),
(68, 68, 1, 'black', '2021-10-20 16:37:35', '2021-10-20 16:37:35'),
(69, 69, 1, 'black', '2021-10-20 17:27:16', '2021-10-20 17:27:16'),
(70, 70, 1, 'black', '2021-10-20 17:36:28', '2021-10-20 17:36:28'),
(71, 16, 3, '32 mm, 28mm', '2021-10-26 14:29:25', '2021-10-26 14:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_variants`
--

CREATE TABLE `tbl_product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant` varchar(255) NOT NULL,
  `variant_text` varchar(1000) NOT NULL,
  `price` float(10,2) NOT NULL,
  `special_price` float(10,2) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `vimage` varchar(2000) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_variants`
--

INSERT INTO `tbl_product_variants` (`id`, `product_id`, `variant`, `variant_text`, `price`, `special_price`, `sku`, `stock`, `vimage`, `created`, `modified`) VALUES
(1, 1, '', '28mm', 4999.00, 3999.00, '5', 20, '', '2021-09-13 11:19:00', '2021-09-28 21:09:04'),
(2, 2, '', 'M', 299.00, 199.00, '5', 5, '', '2021-09-13 15:02:17', '2021-09-13 15:02:17'),
(4, 4, '', '28mm', 13423.00, 2313.00, 'dwwe3455', 12, '', '2021-09-23 16:11:36', '2021-09-23 16:11:36'),
(8, 3, '', '28mm', 2000.00, 1999.00, '2088', 20, '', '2021-09-23 22:04:22', '2021-10-27 19:17:30'),
(11, 3, '', '30mm', 7000.00, 6999.00, '65151', 20, '', '2021-09-24 15:06:10', '2021-10-27 19:17:35'),
(12, 5, '', 'red', 299.00, 199.00, '5', 5, '', '2021-09-25 13:12:10', '2021-10-27 19:17:40'),
(14, 7, 'color', 'black', 24725.00, 14799.00, '', 0, 'uploads/media/jupiter-1633774324-1.jpg', '2021-10-05 17:36:09', '2021-10-27 19:21:13'),
(15, 8, '', '6mm', 4.00, 3.00, '', 20, '', '2021-10-05 19:52:18', '2021-10-21 18:03:02'),
(16, 9, '', '8mm', 12000.00, 8999.00, '', 0, '', '2021-10-05 20:32:07', '2021-10-05 20:32:07'),
(17, 10, 'ply', '20 mm', 12625.00, 8999.00, '', 20, 'uploads/media/tiger-1633778246-1.jpg', '2021-10-05 20:41:06', '2021-11-09 00:01:59'),
(18, 11, 'color', '28 mm', 16450.00, 10999.00, 'scbd01', 10, 'uploads/media/bulldog genius-1635755981-1.png', '2021-10-05 20:51:54', '2021-11-09 16:04:54'),
(19, 12, 'ply', '12 mm', 8575.00, 5499.00, 'sc3', 20, 'uploads/media/tournament-1-1633778599-1.jpg', '2021-10-05 20:56:22', '2021-11-09 16:04:07'),
(20, 13, 'ply', '20 mm', 17200.00, 9799.00, 'sc07', 20, 'uploads/media/dsc_7745-1633781378-1.jpg', '2021-10-05 21:05:41', '2021-11-09 16:29:36'),
(21, 14, 'ply', '20 mm', 24200.00, 14999.00, 'sccg01', 20, 'uploads/media/champion genius-1635755908-1.png', '2021-10-05 21:13:08', '2021-11-09 12:20:41'),
(22, 15, '0', 'Black', 21950.00, 13999.00, '', 50, 'uploads/media/jumbo fighetr balck-1635757002-1.png', '2021-10-05 21:17:31', '2021-11-02 16:16:32'),
(23, 16, 'ply', '28 mm', 21500.00, 14499.00, '', 0, 'uploads/media/dsc_7738-1633779099-1.jpg', '2021-10-05 21:35:47', '2021-11-09 16:55:08'),
(24, 17, '', '28 mm', 20325.00, 13499.00, '', 0, '', '2021-10-05 21:41:01', '2021-10-05 21:41:01'),
(25, 18, 'ply', '28 mm', 25750.00, 16499.00, '', 0, 'uploads/media/picture116-1633445913-1.png', '2021-10-06 12:43:22', '2021-10-27 22:20:14'),
(26, 19, 'ply', '28 mm', 17375.00, 11499.00, '', 0, 'uploads/media/jumbo-1633449225-1.png', '2021-10-06 12:46:28', '2021-10-27 19:46:14'),
(27, 20, 'ply', '20 mm', 16500.00, 10199.00, 'sccf02', 10, 'uploads/media/c fighter natural brown-1635758118-1.png', '2021-10-06 14:06:23', '2021-11-09 16:28:11'),
(28, 21, '', '20 mm', 16500.00, 10199.00, '', 0, '', '2021-10-06 14:14:07', '2021-10-06 14:14:07'),
(29, 22, 'color', 'Black', 15000.00, 8499.00, 'sccf01', 10, 'uploads/media/champion fighter black-1635758103-1.png', '2021-10-06 14:23:16', '2021-11-09 12:30:04'),
(30, 23, '', '20 mm', 17200.00, 9799.00, '', 0, '', '2021-10-06 14:25:52', '2021-10-06 14:25:52'),
(31, 24, '', '28 mm', 16450.00, 10999.00, '', 0, '', '2021-10-06 14:39:10', '2021-10-06 14:39:10'),
(32, 25, 'ply', '36 mm', 19700.00, 12999.00, 'scjb01', 10, 'uploads/media/jumbo genius-1635757242-1.png', '2021-10-06 14:42:35', '2021-11-09 12:26:30'),
(33, 26, '', '20 mm', 13325.00, 7699.00, '', 0, '', '2021-10-06 14:46:26', '2021-10-06 14:46:26'),
(34, 27, 'ply', '20 mm', 15500.00, 8799.00, '', 10, 'uploads/media/dsc_7745-1633781378-1.jpg', '2021-10-06 14:49:45', '2021-11-09 16:04:01'),
(35, 28, '', '20 mm', 12625.00, 8999.00, '', 0, '', '2021-10-06 14:56:39', '2021-10-06 14:56:39'),
(36, 29, 'ply', '20 mm', 10200.00, 6699.00, 'sc6', 10, 'uploads/media/tournament fighter -1635846736-1.jpeg', '2021-10-06 14:59:43', '2021-11-09 12:17:02'),
(37, 30, 'color', '6 mm', 5250.00, 3499.00, 'sc5', 12, 'uploads/media/legend galaxy-1635755674-1.png', '2021-10-06 15:04:58', '2021-11-09 16:00:51'),
(38, 31, 'ply', '4 mm', 4500.00, 2499.00, 'sc4', 10, 'uploads/media/legend venus-1635755539-1.png', '2021-10-06 15:10:49', '2021-11-09 12:15:11'),
(39, 32, '', '12mm', 8575.00, 5499.00, '', 0, '', '2021-10-06 15:18:42', '2021-10-06 15:18:42'),
(40, 33, 'ply', '8 mm', 6500.00, 4599.00, 'sc2', 20, 'uploads/media/winit-1635755499-1.png', '2021-10-06 15:23:43', '2021-11-09 12:13:08'),
(41, 34, 'color', '6 mm', 4750.00, 3499.00, 'sc1', 20, 'uploads/media/galaxy super-1635755474-1.png', '2021-10-06 15:26:53', '2021-11-09 15:39:08'),
(42, 35, 'color', 'black', 8775.00, 5499.00, '', 0, 'uploads/media/car2-1631525421-1.jpg', '2021-10-06 15:32:43', '2021-10-27 19:24:09'),
(43, 36, '', 'black', 10475.00, 6699.00, '', 0, '', '2021-10-06 15:41:14', '2021-10-06 15:41:14'),
(44, 37, '', 'black', 450.00, 350.00, '', 0, '', '2021-10-06 15:58:52', '2021-10-06 15:58:52'),
(45, 38, 'color', 'black', 1500.00, 975.00, '', 0, 'uploads/media/sure slam 2-1634195743-1.jpg', '2021-10-06 16:16:12', '2021-11-09 15:46:52'),
(46, 39, 'color', 'Plastic Box', 600.00, 400.00, '', 20, 'uploads/media/genius-1634043490-1.png', '2021-10-06 16:19:04', '2021-11-09 15:56:43'),
(47, 40, 'color', 'black', 650.00, 450.00, '', 0, 'uploads/media/origional ball-1634043710-1.png', '2021-10-06 16:22:26', '2021-11-09 15:58:30'),
(48, 41, 'color', 'black', 450.00, 340.00, '', 0, 'uploads/media/mmi-1634043656-1.png', '2021-10-06 16:30:06', '2021-11-09 15:58:13'),
(49, 42, 'color', 'black', 225.00, 200.00, '', 20, 'uploads/media/colour ball-1634043541-1.png', '2021-10-06 16:34:16', '2021-11-09 15:56:50'),
(50, 43, 'color', 'black', 150.00, 150.00, '', 0, 'uploads/media/victory-1634200561-1.png', '2021-10-06 16:37:23', '2021-11-09 15:59:22'),
(51, 44, '', '20 mm', 15750.00, 9999.00, '', 0, '', '2021-10-06 16:45:35', '2021-10-06 16:45:35'),
(52, 45, '', '20 mm', 16750.00, 10999.00, '', 0, '', '2021-10-06 16:48:26', '2021-10-06 16:48:26'),
(53, 46, '', '8 mm', 225.00, 190.00, '', 0, '', '2021-10-06 16:52:35', '2021-10-06 16:52:35'),
(54, 47, '', '8 mm', 325.00, 300.00, '', 0, '', '2021-10-06 16:55:31', '2021-10-06 16:55:31'),
(55, 48, '', '8 mm', 13225.00, 7699.00, '', 0, '', '2021-10-06 16:58:03', '2021-10-27 12:39:13'),
(56, 49, '', '9 mm', 625.00, 410.00, '', 0, '', '2021-10-06 17:03:14', '2021-10-06 17:03:14'),
(57, 50, '', '7.2 mm', 700.00, 515.00, '', 0, '', '2021-10-06 17:18:33', '2021-10-06 17:18:33'),
(58, 51, 'color', '7.2 mm', 1275.00, 850.00, '', 0, 'uploads/media/legend-removebg-preview-1635851088-1.png', '2021-10-06 17:21:26', '2021-11-09 15:43:01'),
(59, 52, 'color', '7.5 mm', 1500.00, 975.00, '', 0, 'uploads/media/siscaa-leadall-coin-500x500-1634725458-1.png', '2021-10-06 17:28:04', '2021-11-09 15:49:53'),
(60, 53, '', '7.2 mm', 1500.00, 1050.00, '', 0, '', '2021-10-06 17:30:30', '2021-10-06 17:30:30'),
(61, 54, 'color', '7.0 mm', 1950.00, 1200.00, '', 20, 'uploads/media/dsc_7880-1634214020-1.jpg', '2021-10-06 17:36:13', '2021-11-09 15:48:52'),
(62, 55, '', '8 mm', 225.00, 190.00, '', 0, '', '2021-10-06 17:40:50', '2021-10-27 13:14:14'),
(63, 56, 'color', '8 mm', 750.00, 600.00, '', 0, 'uploads/media/product-12-1634728709-1.jpg', '2021-10-06 17:43:50', '2021-11-09 15:04:20'),
(64, 58, 'color', 'Striker', 275.00, 200.00, 'scsuper', 20, 'uploads/media/super-1634043822-1.png', '2021-10-09 06:45:52', '2021-11-09 15:58:54'),
(65, 59, 'color', '30 mm', 24.00, 14.00, '', 0, 'uploads/media/venus-1633776704-1.jpg', '2021-10-09 06:56:35', '2021-11-09 16:01:37'),
(66, 60, '', '7.2 mm', 20325.00, 13499.00, '', 0, '', '2021-10-14 02:00:18', '2021-10-14 02:00:18'),
(67, 61, 'color', '9 mm', 625.00, 410.00, '', 50, 'uploads/media/dsc_7775 (1)-1634207529-1.jpg', '2021-10-14 06:39:21', '2021-11-09 15:41:07'),
(68, 62, 'color', '8 mm', 350.00, 320.00, '', 0, 'uploads/media/dsc_7797-1634208760-1.jpg', '2021-10-14 07:20:03', '2021-11-09 14:23:44'),
(69, 63, 'color', '6.7 mm', 1275.00, 850.00, '', 0, 'uploads/media/dsc_7781-1634212565-1.jpg', '2021-10-14 08:02:27', '2021-11-09 15:44:29'),
(70, 64, 'color', '7.2 mm', 700.00, 515.00, '', 0, 'uploads/media/dsc_7790 -1634213130-1.jpg', '2021-10-14 08:11:33', '2021-11-09 15:45:47'),
(71, 65, '', '9 mm', 450.00, 300.00, '', 0, '', '2021-10-20 16:10:13', '2021-10-20 16:10:13'),
(72, 66, 'color', '9 mm', 500.00, 300.00, '', 0, 'uploads/media/leader-2-1634726108-1.jpg', '2021-10-20 16:16:04', '2021-11-09 15:51:03'),
(73, 67, 'color', '7.5 mm', 1500.00, 1050.00, '', 0, 'uploads/media/rainbow-1-1634726911-1.jpg', '2021-10-20 16:23:21', '2021-11-09 15:51:47'),
(74, 68, '', '9 mm', 625.00, 410.00, '', 0, '', '2021-10-20 16:37:50', '2021-10-27 13:23:50'),
(75, 69, 'color', '8 mm', 450.00, 300.00, '', 0, 'uploads/media/mercury-1-1634730816-1.jpg', '2021-10-20 17:27:52', '2021-11-09 15:53:24'),
(76, 70, 'color', '8 mm', 225.00, 200.00, '', 0, 'uploads/media/product-16-1634731494-1.jpg', '2021-10-20 17:36:45', '2021-11-09 15:53:07'),
(77, 19, 'color', 'brown', 60000.00, 5999.00, '025', 0, 'uploads/media/jumbo-1633449225-1.png', '2021-10-27 19:47:28', '2021-10-27 19:47:28'),
(78, 19, 'ply', '30mm', 7999.00, 6999.00, '065', 10, 'uploads/media/jumbo-1633449225-1.png', '2021-10-27 19:48:06', '2021-10-27 19:48:06'),
(79, 18, 'color', 'Natural brown', 6888.00, 6544.00, '25', 10, 'uploads/media/jumbo-1633449225-1.png', '2021-10-27 22:21:27', '2021-10-27 22:21:27'),
(80, 19, 'color', 'Black', 5373.00, 4563.00, '6337', 63, 'uploads/media/jumbo-1633449225-1.png', '2021-10-28 21:18:55', '2021-10-28 21:18:55'),
(81, 73, 'color', 'combo', 5999.00, 4999.00, '', 0, 'uploads/media/bulldog fighetr brown-1635756533-1.png', '2021-11-01 16:01:34', '2021-11-01 16:01:34'),
(82, 73, '0', 'Combo', 0.00, 0.00, '', 0, '', '2021-11-01 16:04:40', '2021-11-01 16:04:40'),
(83, 15, 'color', 'Brown', 24200.00, 14999.00, '', 20, 'uploads/media/jumbo fighter natural brown-1635756557-1.png', '2021-11-01 16:12:20', '2021-11-01 16:12:20'),
(84, 15, 'color', 'Natural', 24200.00, 14999.00, '', 20, 'uploads/media/jumbo fighetr yellow-1635756729-1.png', '2021-11-01 16:14:08', '2021-11-01 16:14:08'),
(85, 88, 'color', '', 525.00, 380.00, 'scsign01', 20, 'uploads/media/signature-1634043791-1.png', '2021-11-01 18:00:07', '2021-11-01 18:00:07'),
(86, 96, 'ply', '20 mm', 16500.00, 10199.00, 'sccf03', 20, 'uploads/media/champion fighter black-1635758103-1.png', '2021-11-02 15:55:33', '2021-11-09 16:28:04'),
(87, 97, 'color', 'Black', 18450.00, 11999.00, 'scbfb', 10, 'uploads/media/bulldog fighet black-1635754543-1.png', '2021-11-02 16:09:15', '2021-11-02 17:49:57'),
(88, 98, 'color', 'Brown', 20325.00, 13499.00, 'scbf02', 10, 'uploads/media/bulldog fighetr brown-1635756533-1.png', '2021-11-02 16:12:53', '2021-11-09 12:34:10'),
(89, 99, 'color', '32mm', 20325.00, 13499.00, 'scbf03', 10, 'uploads/media/bulldog fighet yellow-1635756013-1.png', '2021-11-02 16:15:35', '2021-11-02 16:15:35'),
(90, 100, 'ply', '8 mm', 12000.00, 8999.00, 'scssk01', 10, 'uploads/media/sure slam klipper-1635758197-1.png', '2021-11-02 16:25:14', '2021-11-02 16:25:14'),
(91, 97, 'color', 'Natural', 20325.00, 13499.00, 'scbfn02', 10, 'uploads/media/bulldog fighet yellow-1635756013-1.png', '2021-11-02 17:48:30', '2021-11-02 17:56:14'),
(92, 97, 'color', 'Brown', 20325.00, 14999.00, 'scbfb03', 10, 'uploads/media/bulldog fighetr brown-1635756533-1.png', '2021-11-02 17:51:26', '2021-11-09 15:32:56'),
(93, 22, 'color', 'Brown', 16500.00, 10.20, 'sccf03', 20, 'uploads/media/c fighter natural brown-1635758118-1.png', '2021-11-09 12:29:27', '2021-11-09 12:29:27'),
(94, 22, 'color', 'Natural', 16500.00, 10199.00, 'sccf02', 20, 'uploads/media/c fighter natural yellow-1635758134-1.png', '2021-11-09 12:31:14', '2021-11-09 12:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo_codes`
--

CREATE TABLE `tbl_promo_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_promo_codes`
--

INSERT INTO `tbl_promo_codes` (`id`, `code`, `type`, `value`, `start_date`, `end_date`, `created`, `modified`) VALUES
(2, 'SP5OFF', 'percentage', 5, '2021-08-31', '2021-09-04', '2021-08-24 05:38:21', '2021-09-30 18:34:44'),
(3, 'SP10RPS', 'amount', 10, '2021-11-01', '2021-11-06', '2021-09-30 18:55:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return request`
--

CREATE TABLE `tbl_return request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `variable` varchar(200) NOT NULL,
  `value` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `variable`, `value`, `created`, `modified`) VALUES
(2, 'web_settings', '{\"site_title\":\"Simply Carrom\",\"support_number\":\"+91 9321792426 +91 8591526598\",\"support_email\":\"simplycarrrom@gmail.com\",\"min_cart_amount\":\"\",\"min_free_delivery_amount\":\"\",\"address\":\"Shanti Vihar, Poonam Sagar, Mira Road. 401107.\",\"short_description\":\"Buy Siscaa carrom board, professional carrom strikers and carrom coins at Factory price. Free Shipping across India. Largest online portal to buy branded carrom boards and other accessories.\",\"map_iframe\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d8702.327412271417!2d72.85293410004408!3d19.27839784473331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b051f6f5c351%3A0xde3036be36f2b74b!2sShanti%20Vihar%2C%20Mira%20Road%2C%20Mira%20Bhayandar%2C%20Maharashtra%20401107!5e0!3m2!1sen!2sin!4v1632293600727!5m2!1sen!2sin\\\" width=\\\"100%\\\" height=\\\"400\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\"><\\/iframe>\",\"web_logo\":\"uploads\\/media\\/carrom-1633513224-1.png\",\"twitter\":\"1231\",\"facebook\":\"1223\",\"instagram\":\"132123\",\"youtube\":\"456\"}', '2021-08-10 21:40:43', '2021-10-20 13:48:25'),
(6, 'web_logo', 'uploads/media/carrom-1633513224-1.png', '2021-08-10 21:59:01', '2021-10-06 15:11:15'),
(7, 'about_us', '<h3><b>Our Company</b></h3><p>We provide End-to-End offerings to carrom enthusiasts to ensure they get the best quality and playing experiences. <b>Simply Carrom</b> provides the best carrom products and accessories by Siscaa. Our online sports store offers quality sports goods such as <b>Siscaa carrom board, Siscaa Carrom strikers, Siscaa carrom coins, carrom stand, lampshade and many more.</b> We have a wide variety of options categorized according to Player Level, Budget, Brand, Color, Size, etc. for everyone and you can select the one as per your requirement.</p>\r\n\r\n<p>Simplycarrom.com is the world’s only sports website that sells <b>Siscaa products, one of top carrom board companies in the world</b>. Many celebrities, coaches and academies are loyal clients of Simply Carrom, and in the last one year, we have recorded a growth rate of over 400%. We are the only sports website in India that takes pre-orders or an exclusive new launch of Siscaa carrom boards, Siscaa carrom coins and strikers exclusively on our website.</p><p>Simply Carrom is <b>an Siscaa’s authentic full-line online carrom store retailers and Distributors</b> in India and Internationally. Simply Carrom has a huge client base in countries <b>like Dubai, Bahrain, USA, Canada, Srilanka, Singapore, United Kingdom and many other.</b> We offer a broad range of carrom board equipment. We provide an online platform for sportspersons and lovers of sports alike to buy original, genuine Siscaa carrom board products online.<br></p>', '2021-09-21 08:45:08', '2021-09-21 10:22:28'),
(8, 'terms_and_conditions', '<p style=\"text-align: center; \"><b>Terms and Conditions</b></p><p style=\"text-align: center; \"><div style=\"text-align: left;\"><span style=\"font-size: 0.875rem;\">These terms and conditions outline the rules and regulations for the use of Simply Carrom Private Limited’s Website, located at </span><a href=\"http://www.simplycarrom.com.\" target=\"_blank\">www.simplycarrom.com.</a></div><div style=\"text-align: left;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div style=\"text-align: left;\">By accessing this website we assume you accept these terms and conditions. Do not continue to use Simply Carrom if you do not agree to take all of the terms and conditions stated on this page.<br></div><div style=\"text-align: left;\"><br></div><div style=\"text-align: left;\">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: “Client”, “You” and “Your” refers to you, the person log on this website and compliant to the Company’s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</div><div style=\"text-align: left;\"><br></div><div style=\"text-align: left;\">Connect with us on our Social Platforms. Simply Carrom is has its official accounts at Instagram, Facebook. We would love to serve you better with your suggestions and Feedback.<br></div><br></p>', '2021-09-21 08:47:35', '2021-09-22 15:25:47'),
(9, 'refund_policy', '<p style=\"text-align: center; \"><b>Refunds &amp; Returns Policy</b></p><p>We at SimplyCarrom take great efforts in ensuring that all our customers have a delightful experience with us. Even if that means going the extra mile and ensuring our all customers have 100% satisfaction. Hence, we have implemented some robust return &amp; refund policies for customers who have transacted on our platform.</p><p>At the time of delivery and/or within Seven (7) Days from the date of delivery of the product/s, as purchased from the website ie www.simplycarrom.com, if and only if any defect or shortcomings (mentioned below) are found, then the buyer of the product/s can ask for return/replacement of the product/s from the seller subject to the following terms and conditions:</p><p><b>Return Policy</b></p><ul><li>“Return” is defined as an action of giving back the item purchased by the Buyer to the Seller. This scheme is provided specifically by the respective sellers with the option of an exchange, replacement, and/or refund depending upon the product type.</li><li>All products listed under a particular category may not have the same returns policy.</li><li>For all products, the returns/replacement policy provided on the product page shall prevail over the general returns policy.</li><li>Do refer to the respective item’s applicable return/replacement policy on the product page for any exceptions to this returns policy.</li></ul><p><b>Terms &amp; Conditions</b></p><ul><li>The buyer needs to raise the refund request within seven (7) days from the date of delivery, complying with the “General Guidelines” stated below.</li><li>If the product being returned is not in accordance with the below-mentioned parameters, then Buyer shall not be entitled to any refund of money from the Seller.</li><li>Refund to the return request will either be in the form of Store Credits or through NEFT bank transfer or any other mode of payment at Simply Carrom’s discretion.</li><li>Please note that in case of refund or exchange for reasons other than the following, the Buyer will be liable to bear Shipping Charges (predetermined by Simply Carrom) and the amount would be deducted during the refund process or from their subsequent orders.</li></ul><p><b style=\"font-size: 0.875rem;\">Replacement Policy</b></p><ul><li>“Replacement” is defined as the action or process of replacing something in place of another.<br></li><li>A Buyer can request for replacement whenever he/she is not happy with the item, the reason being damaged in shipping; defective item(s); item(s) missing; wrong item(s) shipped, and the like.&nbsp;</li></ul><p><b>General Guidelines for Return, Replacement &amp; Refund</b></p><ol><li style=\"border: 0px; font-size: 15px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">This program will come into force if the following situation(s) arises.</li></ol><ul><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"font-size: 15px;\">Item was defective (manufacturing defect);</span></li><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"font-size: 15px;\">Item was damaged during the Shipping;</span><br></li><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Products was / were missing;</li><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Wrong item was sent by the Seller.</li><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Product not as per the description given by the Seller</li></ul><p style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><br></p><ol><li style=\"border: 0px; font-size: 15px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Once Buyer has raised a return request by contacting us, the Seller, upon receiving the returned item(s), shall verify the same and replace the returned item with the new item(s).</li><li style=\"border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"font-size: 15px;\">Following products shall not be eligible for this program:</span></li></ol>\r\n<ul>\r\n<li>Damages due to misuse of product;</li>\r\n<li>Any consumable item which has been used/installed/consumed;</li>\r\n<li>Products with tampered or missing serial/UPC numbers;</li>\r\n<li>Any damage/defect which are not covered under the manufacturer’s warranty;</li>\r\n<li>Any product that is returned without all original packaging and accessories, including the box, manufacturer’s packaging if any, and all other items originally included with the product(s) delivered;</li>\r\n<li>In case any buyer fails to take delivery after placing order. In this case, buyer shall not be entitled to refund.&nbsp; Although seller can choose to refund or redelivery of such order, but in that case, buyer need to bear all additional costs of logistics and delivery or any other costs which seller has incurred towards any other expenses for such failed delivery due to buyer.</li>\r\n</ul>\r\n\r\n<ol>\r\n<li>On Clothing, Footwear, sellers accept the prescribed time limit, exchange subject to the following conditions:</li>\r\n</ol>\r\n<ul>\r\n<li>Clothes and footwear are not used (other than for trial), altered, washed, soiled or damaged in any way.</li>\r\n<li>Original tags and packaging should be intact. For items that come in branded packaging, the box should be undamaged.</li>\r\n<li>Damaged or defective clothing and footwear products are meanwhile covered by the program.&nbsp;</li>\r\n</ul>\r\n<ol>\r\n<li>The Buyer must review the listing before making the purchase decision. In case Buyer orders a wrong item, Buyer shall not be entitled to any return / replacement.</li>\r\n<li>Seller can always accept the return irrespective of the policy. In such case Buyer will have to return the product and then the refund / replacement shall be processed for the Buyer(s). This may have additional delivery charges and collection charges for buyer.</li>\r\n<li>If Seller disagrees with a return request, Buyer can file a complaint by writing an email to info@simplycarrom.com. If the Seller doesn’t respond to the Buyer’s return / replacement request, within Five (5) days from the date of return / replacement request placed by the Buyer, Seller shall be liable to process the refund in favor of Buyer&nbsp;</li>\r\n<li>All shipping and other return / replacement charges shall be borne and incurred by the Seller, except as indicated hereinabove and/or where buyer has ordered wrong items or seller is agreed to return/ replacement beyond Return &amp; Replacement policy.</li>\r\n<li>Simply Carrom reserves its right to initiate civil and/or criminal proceedings against a user who, files invalid and/or false claims or provides false, incomplete, or misleading information. In addition to the legal proceedings as aforesaid, Simply Carrom may at its sole discretion suspend, block, restrict, cancel the user and/or disqualify that user and any related users from availing protection through this program. Any person who, knowingly and with intent to injure, defraud or deceive, files a fraudulent Complaint containing false, incomplete, or misleading information may be guilty of a criminal offence and will be prosecuted to the fullest extent of the law.</li>\r\n</ol>\r\n\r\n								<p>Connect with us on our Social Platforms. Simply Carrom is has its official accounts at Instagram, Facebook. We would love to serve you better with your suggestions and Feedback. <br></p>						\r\n', '2021-09-22 18:53:27', '2021-09-22 22:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `slider` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `show_on_home` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `slider`, `image`, `show_on_home`, `created`, `modified`) VALUES
(3, 'home slider', 'uploads/media/1500 x 400 6-1634721277-1.jpg', 0, '2021-09-13 13:18:49', '2021-11-01 11:13:40'),
(4, 'home slider', 'uploads/media/1500 x 400 3-1634833530-1.jpg', 0, '2021-09-13 13:19:06', '2021-11-01 16:18:22'),
(5, 'home slider', 'uploads/media/1500 x 400 6-1634717709-1.jpg', 0, '2021-10-14 05:41:36', '2021-11-01 11:14:50'),
(6, 'home slider', 'uploads/media/1500 x 400 2-1634717738-1.jpg', 0, '2021-10-21 09:40:47', '2021-11-01 10:47:33'),
(7, 'vertical slider', 'uploads/media/368 x 550-1635764464-1.jpg', 1, '2021-10-29 19:00:29', '2021-11-01 11:01:43'),
(8, 'home slider', 'uploads/media/1500 x 400 1-1634717978-1.jpg', 0, '2021-11-01 10:48:44', '2021-11-01 11:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxes`
--

CREATE TABLE `tbl_taxes` (
  `id` int(11) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `percentage` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_taxes`
--

INSERT INTO `tbl_taxes` (`id`, `tax_name`, `percentage`) VALUES
(1, '12%gst', 12.00),
(2, '5%gst', 5.00),
(3, 'cgst', 18.00),
(4, '12 % Tax Inclusive', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `social_id` int(11) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `wallet_balance` float(10,2) NOT NULL,
  `active` int(2) NOT NULL,
  `fcm_id` varchar(300) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `social_id`, `username`, `password`, `email`, `mobile`, `wallet_balance`, `active`, `fcm_id`, `created`, `modified`) VALUES
(1, NULL, 'test', 'c7Yzfx9V', 'test@gmail.com', '7977533677', 0.00, 1, '', '2021-08-23 12:48:14', '2021-08-23 16:20:40'),
(2, NULL, 'Mithilesh Prajapati', 'c7Yzfx9V', 'mithilesh.prajapati2@gmail.com', '9545097341', 0.00, 0, '', '2021-08-23 16:51:18', '2021-09-07 21:36:03'),
(3, NULL, 'Yogesh Gurav', '$2y$10$8fftsIoqzV5Cj1Kar0OHP.xCRFFu5jDfEJUxchFoyAryHkgO9Rd42', 'yogesh@gmail.com', '09561655240', 0.00, 1, '', '2021-09-14 08:39:10', '2021-09-25 14:54:04'),
(4, NULL, 'Mithilesh', '$2y$10$pKU7HThYDojGjuqVtZgUweDlYQFMLdEqUxWuV2dS03PYwOnoaogbe', 'mithilesh.prajapati2@gmail.com', '9764281201', 0.00, 1, '', '2021-09-21 05:21:38', '0000-00-00 00:00:00'),
(8, NULL, 'shubham', '$2y$10$aiTwqHSeEYgt1687sDSjsOn4fg.F4qsW0LYKjRuIAFCoFkNp5fYoW', 'shubhambhuvad567@gmail.com', '8830516259', 0.00, 1, '', '2021-09-21 06:36:09', '0000-00-00 00:00:00'),
(9, NULL, 'JITENDRA', '$2y$10$gID00nFxZQkGMM2RvbDRTOmY2b2DCfqf7SvjGAJ3jHADQLqba67Ke', 'jitendrag645@gmail.com', '9024645458', 0.00, 1, '', '2021-09-28 14:54:57', '0000-00-00 00:00:00'),
(10, 30, 'Jitendra-Goswami917211020', '', 'jitendra@innovins.com', '', 0.00, 0, '', '2021-10-20 20:08:15', NULL),
(11, 31, 'Shlok-Sh758211020', '', 'divyamehra91@gmail.com', '', 0.00, 0, '', '2021-10-20 20:09:58', NULL),
(12, 32, 'Mithilesh-Prajapati146211021', '', 'mithilesh.prajapati2@gmail.com', '', 0.00, 0, '', '2021-10-21 11:59:27', NULL),
(13, 33, 'Jitendra-Goswami371211021', '', 'jitendrag645@gmail.com', '', 0.00, 0, '', '2021-10-21 12:04:55', NULL),
(14, 34, 'Mith-Prajapati967211021', '', 'mithinsta@gmail.com', '', 0.00, 0, '', '2021-10-21 12:05:50', NULL),
(15, 35, 'RIDHAM-GAMING YT498211025', '', 'ridhammaingi24@gmail.com', '', 0.00, 0, '', '2021-10-25 12:55:14', NULL),
(16, NULL, 'Mandar Dhulap', '$2y$10$JReXDV9CAR0tYXMGANMkyO3QI8hGZ4w.zIcHqr681NLjVDWyriJiK', 'dhulapmandar@gmail.com', '9820451677', 0.00, 1, '', '2021-10-25 09:46:16', NULL),
(17, 36, 'Prathamesh-Ayare414211025', '', 'payare35@gmail.com', '', 0.00, 0, '', '2021-10-25 19:25:51', NULL),
(18, NULL, 'jit', '$2y$10$RyBa9HICRjOOoZTs2Ak4neT1OXSi7hO/ita17mcWpkaBBmOVW.3U.', '9999999999@gmail.com', '9999999999', 0.00, 1, '', '2021-10-28 14:41:02', NULL),
(19, NULL, 'shriya nangre', '$2y$10$iswD/GbKcD9hByPPWBYouuZbhHbEHHJ2A8oz2hUfsmQvfFjXD32CW', 'shriyanangre2115@gmail.com', '7058814481', 0.00, 1, '', '2021-11-08 10:17:55', NULL),
(20, 37, 'Zoheb-Shek472211108', '', 'zohebshek@gmail.com', '7000486880', 0.00, 0, '', '2021-11-08 22:41:52', '2021-11-08 22:44:36'),
(21, 38, 'Tanya-Mehra865211108', '', 'tanyamehra96.tm@gmail.com', '', 0.00, 0, '', '2021-11-08 23:37:13', NULL),
(22, 39, 'Cosmic-Web Solution571211110', '', 'cosmicwebsolution@gmail.com', '', 0.00, 0, '', '2021-11-10 13:33:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `user_id`, `product_id`) VALUES
(1, 21, 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social_login_users`
--
ALTER TABLE `social_login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attributes`
--
ALTER TABLE `tbl_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog_categories`
--
ALTER TABLE `tbl_blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_delivery_time`
--
ALTER TABLE `tbl_delivery_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offer_text`
--
ALTER TABLE `tbl_offer_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_attributes`
--
ALTER TABLE `tbl_product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_variants`
--
ALTER TABLE `tbl_product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promo_codes`
--
ALTER TABLE `tbl_promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_return request`
--
ALTER TABLE `tbl_return request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_taxes`
--
ALTER TABLE `tbl_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social_login_users`
--
ALTER TABLE `social_login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_attributes`
--
ALTER TABLE `tbl_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog_categories`
--
ALTER TABLE `tbl_blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_delivery_time`
--
ALTER TABLE `tbl_delivery_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `tbl_offer_text`
--
ALTER TABLE `tbl_offer_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_product_attributes`
--
ALTER TABLE `tbl_product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_product_variants`
--
ALTER TABLE `tbl_product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_promo_codes`
--
ALTER TABLE `tbl_promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_return request`
--
ALTER TABLE `tbl_return request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_taxes`
--
ALTER TABLE `tbl_taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
