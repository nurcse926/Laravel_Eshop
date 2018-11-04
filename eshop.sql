-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 11:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `lara`
--

CREATE TABLE `lara` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lara`
--

INSERT INTO `lara` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(6, 'nurcse926@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', 'Nur', '01736991613', NULL, NULL),
(7, 'nurcse926@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', 'nur', '01736991613', NULL, NULL),
(8, 'noushin@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', 'noushin', '01736991613', NULL, NULL),
(9, 'noushin@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', 'noushin', '01736991613', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_06_19_023338_create_lara_table', 1),
(2, '2018_06_19_023811_create_tbl_category_table', 2),
(3, '2018_06_19_024226_create_tbl_manufacture_table', 3),
(4, '2018_06_19_024758_create_tbl_products_table', 4),
(5, '2018_06_19_025352_create_tbl_slider_table', 5),
(6, '2018_06_19_025631_create_tbl_customer_table', 6),
(7, '2018_06_19_025826_create_tbl_shipping_table', 7),
(8, '2018_06_19_030009_create_tbl_order_table', 8),
(9, '2018_06_19_030215_create_tbl_payment_table', 9),
(10, '2018_06_19_030430_create_tbl_order_details_table', 10),
(11, '2018_06_19_031718_create_tbl_category_table', 11),
(12, '2018_06_19_032435_create_lara_table', 12),
(13, '2018_06_19_041357_create_tbl_products_table', 12),
(14, '2018_06_28_044038_create_tbl_offproducts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(2) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Men Watch', 'Made in South Korea', 1, NULL, NULL),
(3, 'Child', 'Made in Bangladesh', 1, NULL, NULL),
(4, 'Men Shoes', 'Original Leather&nbsp;', 1, NULL, NULL),
(5, 'Electronics', 'Original and Brandy&nbsp;', 1, NULL, NULL),
(6, 'Funrniture', 'Original Wood and Metal', 1, NULL, NULL),
(7, 'Jewellery', 'Apon Jewllers', 1, NULL, NULL),
(8, 'Cosmetics', 'Made in India', 1, NULL, NULL),
(9, 'Men Cloths', 'T-Shirt, Shirt, Jeans', 1, NULL, NULL),
(10, 'Women Cloths', 'Original Cotton', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `password`, `mobile_number`, `created_at`, `updated_at`) VALUES
(1, 'Anindya Nur', 'nurcse926@gmail.com', '4a5a65322a2bfbc9828557d11c331a1e', '01736991613', NULL, NULL),
(8, 'Anika', 'anika@gmail.com', '123', '01736991613', NULL, NULL),
(9, 'jaan', 'jan@gmail.com', 'nur123', '01736991613', NULL, NULL),
(10, 'moni', 'moni@gmail.com', 'd3c849e5a3506313f8c071aa785c87fe', '01736991613', NULL, NULL),
(11, 'Anindya Nur', 'nur@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01736991613', NULL, NULL),
(12, 'Anindya Nur', 'rina@gmail.com', '202cb962ac59075b964b07152d234b70', '01736991613', NULL, NULL),
(13, 'Md Nur Nabi', 'rina@gmail.com', '202cb962ac59075b964b07152d234b70', '1736991613', NULL, NULL),
(14, 'Md Nur Nabi', 'rina@gmail.com', '202cb962ac59075b964b07152d234b70', '1736991613', NULL, NULL),
(15, 'rakhi', 'noushin@gmail.cpm', 'b6f0479ae87d244975439c6124592772', '1736991613', NULL, NULL),
(16, 'Md Nur Nabi', 'abc@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', '1736991613', NULL, NULL),
(17, 'Md Nur Nabi', 'abc@gmail.com', 'ed1e56ef963bb91c45a14a50c2f3cd95', '1736991613', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Bata Shoes', 'Original Lether&nbsp;', '1', NULL, NULL),
(2, 'iPhone', 'Made in USA', '1', NULL, NULL),
(3, 'Samsung', 'Made in South Korea', '1', NULL, NULL),
(4, 'T-Shirt', 'Made in Bangaladesh', '1', NULL, NULL),
(5, 'Casio Watch', 'Original', '1', NULL, NULL),
(6, 'Graniar', 'Made in India', '1', NULL, NULL),
(7, 'Ornaments', 'Made in Bangladesh', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offproducts`
--

CREATE TABLE `tbl_offproducts` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_offproducts`
--

INSERT INTO `tbl_offproducts` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_size`, `product_color`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Mesut Ozil', 9, 4, 'Germany Jesrsy', 'Germany jersy', 2323.00, 'image/qmRhsZQfOEFT1rfwqDVC.jpg', '55', 'Blue', 1, NULL, NULL),
(4, 'Spain Jersy', 9, 4, 'Spain Jersy in Famous', 'Made in Bangladesh', 8650.00, 'image/Pl7HVbOl0JMoc8nOa9do.jpg', 'XXL', 'Pink', 1, NULL, NULL),
(5, 'Messir Bap', 9, 4, 'Argentina world cup jersy', 'Made in Bangladesh', 1200.00, 'image/KbquDZakwIePehU1yqMj.jpg', 'XXL', 'Blue', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(4, 2, 2, 4, '6,800.20', 'pending', '2018-06-20 02:55:56', NULL),
(5, 2, 2, 5, '0.00', 'pending', '2018-06-20 03:02:15', NULL),
(8, 12, 6, 8, '6,800.20', 'pending', '2018-06-23 13:48:11', NULL),
(11, 12, 10, 11, '2,120.00', 'pending', '2018-06-29 09:29:23', NULL),
(12, 12, 11, 12, '2,100.00', 'pending', '2018-06-29 16:46:36', NULL),
(13, 12, 12, 13, '7,322.00', 'pending', '2018-06-30 10:24:40', NULL),
(14, 12, 14, 15, '2,000.00', 'pending', '2018-07-02 02:01:04', NULL),
(15, 12, 15, 16, '1,200.00', 'pending', '2018-07-07 14:24:20', NULL),
(16, 12, 15, 17, '1,200.00', 'pending', '2018-07-07 14:24:21', NULL),
(17, 12, 16, 18, '46,998.00', 'pending', '2018-07-10 10:09:03', NULL),
(18, 12, 17, 19, '9,600.00', 'pending', '2018-07-10 15:21:42', NULL),
(19, 12, 18, 20, '71,800.00', 'pending', '2018-07-11 13:19:21', NULL),
(20, 12, 19, 21, '1,200.00', 'pending', '2018-07-21 03:36:49', NULL),
(21, 12, 20, 22, '1,200.00', 'pending', '2018-09-04 09:35:56', NULL),
(22, 14, 21, 23, '17,300.00', 'pending', '2018-09-12 06:44:26', NULL),
(23, 15, 22, 24, '920.00', 'pending', '2018-09-17 16:39:53', NULL),
(24, 17, 23, 25, '14,400.00', 'pending', '2018-09-27 16:18:49', NULL),
(25, 12, 24, 26, '1,200.00', 'pending', '2018-10-25 07:02:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sale_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sale_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Spy Drone', '9856', '1', NULL, NULL),
(2, 1, 9, 'Neckles', '50000', '1', NULL, NULL),
(3, 2, 1, 'Spy Drone', '9856', '1', NULL, NULL),
(4, 2, 9, 'Neckles', '50000', '1', NULL, NULL),
(5, 3, 1, 'Spy Drone', '9856', '1', NULL, NULL),
(6, 4, 5, 'Lotto', '5620', '1', NULL, NULL),
(7, 6, 9, 'Neckles', '50000', '19', NULL, NULL),
(8, 7, 6, 'Olly Ferfume', '8975', '1', NULL, NULL),
(9, 8, 5, 'Lotto', '5620', '1', NULL, NULL),
(10, 9, 7, 'T-Shirt', '920', '1', NULL, NULL),
(11, 10, 3, 'Germany Jersy', '5222', '1', NULL, NULL),
(12, 11, 7, 'T-Shirt', '920', '1', NULL, NULL),
(13, 12, 16, 'Lamp', '2100', '1', NULL, NULL),
(14, 13, 3, 'Germany Jersy', '5222', '1', NULL, NULL),
(15, 14, 9, 'Neckles', '50000', '1', NULL, NULL),
(16, 14, 8, 'Women Jeans', '2000', '1', NULL, NULL),
(17, 15, 5, 'Messir Bap', '1200', '1', NULL, NULL),
(18, 16, 5, 'Messir Bap', '1200', '1', NULL, NULL),
(19, 17, 3, 'Germany Jersy', '5222', '9', NULL, NULL),
(20, 18, 5, 'Messir Bap', '1200', '8', NULL, NULL),
(21, 19, 6, 'Olly Ferfume', '8975', '8', NULL, NULL),
(22, 20, 10, 'snow', '1200', '1', NULL, NULL),
(23, 21, 5, 'Messir Bap', '1200', '1', NULL, NULL),
(24, 22, 4, 'Spain Jersy', '8650', '2', NULL, NULL),
(25, 23, 7, 'T-Shirt', '920', '1', NULL, NULL),
(26, 24, 17, 'Bangladesh Jerssy', '1200', '12', NULL, NULL),
(27, 25, 5, 'Messir Bap', '1200', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'Bkash', 'pending', '2018-06-19 06:37:16', NULL),
(2, 'Bkash', 'pending', '2018-06-19 06:38:21', NULL),
(3, 'HandCash', 'pending', '2018-06-19 06:38:37', NULL),
(4, 'HandCash', 'pending', '2018-06-20 02:55:56', NULL),
(5, 'HandCash', 'pending', '2018-06-20 03:02:14', NULL),
(6, 'HandCash', 'pending', '2018-06-21 08:00:45', NULL),
(7, 'HandCash', 'pending', '2018-06-23 03:01:33', NULL),
(8, 'HandCash', 'pending', '2018-06-23 13:48:11', NULL),
(9, 'HandCash', 'pending', '2018-06-24 07:24:30', NULL),
(10, 'HandCash', 'pending', '2018-06-29 03:50:41', NULL),
(11, 'HandCash', 'pending', '2018-06-29 09:29:23', NULL),
(12, 'HandCash', 'pending', '2018-06-29 16:46:36', NULL),
(13, 'HandCash', 'pending', '2018-06-30 10:24:40', NULL),
(14, 'Bkash', 'pending', '2018-06-30 10:33:16', NULL),
(15, 'Bkash', 'pending', '2018-07-02 02:01:03', NULL),
(16, 'Bkash', 'pending', '2018-07-07 14:24:20', NULL),
(17, 'Bkash', 'pending', '2018-07-07 14:24:21', NULL),
(18, 'HandCash', 'pending', '2018-07-10 10:09:03', NULL),
(19, 'HandCash', 'pending', '2018-07-10 15:21:42', NULL),
(20, 'Bkash', 'pending', '2018-07-11 13:19:21', NULL),
(21, 'HandCash', 'pending', '2018-07-21 03:36:49', NULL),
(22, 'HandCash', 'pending', '2018-09-04 09:35:55', NULL),
(23, 'HandCash', 'pending', '2018-09-12 06:44:26', NULL),
(24, 'Bkash', 'pending', '2018-09-17 16:39:53', NULL),
(25, 'HandCash', 'pending', '2018-09-27 16:18:48', NULL),
(26, 'master_card', 'pending', '2018-10-25 07:02:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_size`, `product_color`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Germany Jersy', 5, 3, 'Germany Jesrsygsgsdg', 'Germany jersy', 5222.00, 'image/dSt2kSBd0tHtKhW02DjP.jpg', '55', 'Blue', 0, NULL, NULL),
(4, 'Spain Jersy', 2, 5, 'Spain Jersy in Famous', 'Made in Bangladesh', 8650.00, 'image/emnakqWRVdKR0KOWr93T.jpg', 'XXL', 'Pink', 1, NULL, NULL),
(5, 'Apex', 4, 1, 'Argentina world cup jersy', 'Made in Bangladesh', 1200.00, 'image/u3bYFiKZYgbaWJooRGfC.jpg', 'XXL', 'Blue', 1, NULL, NULL),
(6, 'Olly Ferfume', 8, 6, 'Original', 'Made in France', 8975.00, 'image/O2Im1eTA3k6MozPwkpqH.jpg', 'XXL', 'Pink', 1, NULL, NULL),
(7, 'T-Shirt', 9, 4, 'Made in Bangladesh', 'Original cotton 100%', 920.00, 'image/Isyj7bh9ZV6Mlh4VOmyx.jpg', 'XXL', 'Red', 1, NULL, NULL),
(8, 'Women Jeans', 10, 4, 'Slim Fit Original', 'Made in Bangladesh', 2000.00, 'image/QxQM3wilt2iyVl1chnX8.jpg', 'XXL', 'Blue', 1, NULL, NULL),
(9, 'Neckles', 7, 7, 'Original Gold&nbsp;', 'Made in Bangladesh', 50000.00, 'image/H3XfVz0oevpONFmgBHF8.jpeg', '44', 'Gold', 1, NULL, NULL),
(10, 'snow', 8, 6, 'Made in Brazil', 'Original', 1200.00, 'image/jt1Pzod4xBNXQyhiKFOF.jpg', '40', 'Black', 1, NULL, NULL),
(17, 'Bangladesh Jerssy', 9, 4, 'Made in Bangladesh', '100% cotton', 1200.00, 'image/s2uq4RgWj1y446x8RSts.jpg', 'XXL', 'Green', 1, NULL, NULL),
(18, 'Panjabi', 9, 4, 'Made in Bangldesh', '100% cotton', 1200.00, 'image/Ki6xfph98tL4DwBiwv2V.png', 'XXL', 'Dark Black', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_email`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_mobile_number`, `shipping_city`, `created_at`, `updated_at`) VALUES
(1, 'nurcse926@gmail.com', 'Anindya', 'Nur', 'Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(2, 'nur926@gmail.com', 'Anindya', 'Nur', 'Dhormokura', '0173698755', 'Islampur', NULL, NULL),
(3, 'nur926@gmail.com', 'Anindya', 'Ahmed', 'Gulshan-2, Dhaka-1212', '01639456524', 'Dhaka', NULL, NULL),
(4, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(5, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(6, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(7, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(8, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(9, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(10, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(11, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(12, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(13, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(14, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(15, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(16, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(17, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(18, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(19, 'rakhi@gmail.com', 'Milon', 'Kumar', 'Jamalpur', '01725874155', 'Dhaka', NULL, NULL),
(20, 'rakhi@gmail.com', 'Milon', 'Kumar', 'Jamalpur', '01725874155', 'Dhaka', NULL, NULL),
(21, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(22, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(23, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL),
(24, 'nur926@gmail.com', 'Md Nur', 'Nabi', 'House#40/1, Road#91, Gulshan-2, Dhaka-1212', '01736991613', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'slider_images/MkWtBmCyZl4z2wDJHzlb.jpg', '1', NULL, NULL),
(2, 'slider_images/95VvrovmEfKon2AebnUl.jpg', '1', NULL, NULL),
(3, 'slider_images/LHCZbSdKTUiUDCjEnuna.jpg', '1', NULL, NULL),
(4, 'slider_images/sYIjmhMpcI17O5ewr2KC.jpg', '1', NULL, NULL),
(5, 'slider_images/XkXXTvz5mTHUyEWrWEyd.jpg', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lara`
--
ALTER TABLE `lara`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_offproducts`
--
ALTER TABLE `tbl_offproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lara`
--
ALTER TABLE `lara`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_offproducts`
--
ALTER TABLE `tbl_offproducts`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
