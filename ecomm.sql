-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 04:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` int(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `cid`, `pid`, `product_name`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(4, 136, 1, 'adidas', 2, 15000, '2019-04-28 11:02:27', '2019-04-28 11:02:27'),
(5, 136, 1, 'adidas', 2, 15000, '2019-04-28 11:40:51', '2019-04-28 11:40:51'),
(8, 144, 1, 'adidas', 1, 7500, '2019-04-29 04:21:39', '2019-04-29 04:21:39'),
(9, 144, 2, 'Puma', 2, 10000, '2019-04-29 04:22:07', '2019-04-29 04:22:07'),
(12, 137, 1, 'adidas', 1, 7500, '2019-04-29 14:11:17', '2019-04-29 14:11:17'),
(13, 137, 4, 'Nike Primium', 1, 8000, '2019-04-29 14:27:29', '2019-04-29 14:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `uname` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `profilepic` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `uname`, `password`, `email`, `phone`, `address`, `profilepic`, `created_at`, `updated_at`) VALUES
(98, 'majhi', 'a', '1', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 17:02:08', '2019-04-27 17:02:08'),
(99, 'majhi', 'a', '1', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 17:02:33', '2019-04-27 17:02:33'),
(100, 'majhi', 'a', '1', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 17:02:48', '2019-04-27 17:02:48'),
(101, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:35:44', '2019-04-27 21:35:44'),
(102, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:46:48', '2019-04-27 21:46:48'),
(103, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:52:05', '2019-04-27 21:52:05'),
(104, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:53:29', '2019-04-27 21:53:29'),
(105, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:54:05', '2019-04-27 21:54:05'),
(106, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:54:05', '2019-04-27 21:54:05'),
(107, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 21:54:56', '2019-04-27 21:54:56'),
(108, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 22:02:55', '2019-04-27 22:02:55'),
(109, 'K. M. Asieb Hasan', 'asieb', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 22:04:26', '2019-04-27 22:04:26'),
(110, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:21:27', '2019-04-27 22:21:27'),
(111, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:21:56', '2019-04-27 22:21:56'),
(112, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:22:23', '2019-04-27 22:22:23'),
(113, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:28:27', '2019-04-27 22:28:27'),
(114, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:35:02', '2019-04-27 22:35:02'),
(115, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:36:43', '2019-04-27 22:36:43'),
(116, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:36:54', '2019-04-27 22:36:54'),
(117, 'K. M. Asieb Hasan', 'admin', 'asdasd', 'asieb.hasan.supto@gmail.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:37:53', '2019-04-27 22:37:53'),
(118, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:39:23', '2019-04-27 22:39:23'),
(119, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:43:46', '2019-04-27 22:43:46'),
(120, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:44:32', '2019-04-27 22:44:32'),
(121, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:47:08', '2019-04-27 22:47:08'),
(122, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:47:40', '2019-04-27 22:47:40'),
(123, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:48:30', '2019-04-27 22:48:30'),
(124, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:49:04', '2019-04-27 22:49:04'),
(125, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:49:39', '2019-04-27 22:49:39'),
(126, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 22:50:09', '2019-04-27 22:50:09'),
(127, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 23:03:42', '2019-04-27 23:03:42'),
(128, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 23:04:50', '2019-04-27 23:04:50'),
(129, 'addss', 'admin', 'asdasd', 'a@a.com', 1521329776, 'asdasdasd', NULL, '2019-04-27 23:09:11', '2019-04-27 23:09:11'),
(130, 'abc', 'abc', 'asdasdasd', 'abcd@abc.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 23:10:26', '2019-04-27 23:10:26'),
(131, 'ariful islam', 'arif', '123123123', 'arif@arif.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 23:25:38', '2019-04-27 23:25:38'),
(132, 'majharul', 'majhi', '123123', 'm@m.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-27 23:57:26', '2019-04-27 23:57:26'),
(133, 'selllllll', 'selleer', '123123123', 'seller@seller.com', 1620980710, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 00:21:06', '2019-04-28 00:21:06'),
(134, 'uts', 'uts', '123123', 'uts@uts.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 02:31:55', '2019-04-28 02:31:55'),
(135, 'customer', 'customer', '123456789', 'cus@cus.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 03:39:57', '2019-04-28 03:39:57'),
(136, 'belal', 'belal', '123456789', 'belal@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 08:50:31', '2019-04-28 08:50:31'),
(137, 'helal', 'helal', '123456789', 'h@h.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 12:40:12', '2019-04-28 12:40:12'),
(138, 'himel', 'himel', '123456789', 'himel@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 13:04:48', '2019-04-28 13:04:48'),
(139, 'pica', 'pica', '123123123', 'p@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 19:02:46', '2019-04-28 19:02:46'),
(140, 'pica', 'pica', '123123123', 'p@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 19:03:46', '2019-04-28 19:03:46'),
(141, 'pikabo', 'pikabo', '123123123', 'pickabo@gmail.com', 1521329776, '5b,22,17, nikunjo-2,dhaka', NULL, '2019-04-28 19:04:29', '2019-04-28 19:04:29'),
(142, 'utsha', 'uts', '12345678', 'u@u.com', 1521331662, 'my hme', NULL, '2019-04-29 01:47:32', '2019-04-29 01:47:32'),
(143, 'utsha', 'utsha', 'asdasdasd', 'abc@abc.com', 1521329776, 'asdasdasd', NULL, '2019-04-29 01:49:25', '2019-04-29 01:49:25'),
(144, 'suptoo', 'supto', '123456789', 'supto@gmail.com', 1521329776, 'dhaka', NULL, '2019-04-29 04:21:10', '2019-04-29 04:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `userName`, `password`, `access`, `created_at`, `updated_at`) VALUES
(137, 'helal', '123456789', 1, NULL, NULL),
(138, 'himel', '123456789', 1, NULL, NULL),
(4003, 'parvez', '123456789', 2, NULL, NULL),
(4004, 'jane', '123123123', 2, NULL, NULL),
(139, 'pica', '123123123', 1, NULL, NULL),
(139, 'pica', '123123123', 1, NULL, NULL),
(141, 'pikabo', '123123123', 1, NULL, NULL),
(0, 'admin', 'admin123', 0, NULL, NULL),
(99999, 'admin', 'admin123', 0, NULL, NULL),
(4005, 'bata', '123456789', 2, NULL, NULL),
(4006, 'arman1', '123456789', 2, NULL, NULL),
(4007, 'arman2', '123456789', 2, NULL, NULL),
(142, 'uts', '12345678', 1, NULL, NULL),
(143, 'utsha', 'asdasdasd', 1, NULL, NULL),
(144, 'supto', '123456789', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_27_121648_create_sellers_table', 1),
(4, '2019_04_27_124240_create_admins_table', 2),
(5, '2019_04_27_124549_create_carts_table', 3),
(6, '2019_04_27_125247_create_customers_table', 4),
(7, '2019_04_27_125609_create_orders_table', 5),
(8, '2019_04_27_130033_create_products_table', 5),
(16, '2019_04_27_130939_create_logins_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerid` int(11) NOT NULL,
  `product1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `quantity1` int(11) NOT NULL,
  `product2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity2` int(11) DEFAULT NULL,
  `product3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity3` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerid`, `product1`, `quantity1`, `product2`, `quantity2`, `product3`, `quantity3`, `total_price`, `mobile`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 137, 'Bata', 2, NULL, 0, NULL, 0, 17500, 1521329776, 'h@h.com', 'pending', '2019-04-28 12:42:21', '2019-04-29 16:03:39'),
(2, 137, 'adidas', 2, 'Bata', 2, NULL, 0, 17500, 1521329776, 'h@h.com', 'pending', '2019-04-28 12:54:39', '2019-04-29 16:15:14'),
(3, 144, 'adidas', 1, 'Puma', 2, NULL, 0, 17500, 1521329776, 'supto@gmail.com', 'pending', '2019-04-29 04:22:14', '2019-04-29 16:19:08'),
(4, 144, 'adidas', 1, 'Puma', 2, NULL, 0, 17500, 1521329776, 'supto@gmail.com', 'pending', '2019-04-29 04:27:07', '2019-04-29 04:27:07'),
(5, 144, 'adidas', 1, 'Puma', 2, NULL, 0, 17500, 1521329776, 'supto@gmail.com', 'pending', '2019-04-29 04:28:06', '2019-04-29 04:28:06'),
(6, 144, 'adidas', 1, 'Puma', 2, NULL, 0, 17500, 1521329776, 'supto@gmail.com', 'pending', '2019-04-29 04:30:01', '2019-04-29 04:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sellerid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(12) NOT NULL,
  `sellCount` int(50) NOT NULL,
  `hits` int(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sellerid`, `product_name`, `quantity`, `price`, `rating`, `type`, `featured`, `sellCount`, `hits`, `created_at`, `updated_at`) VALUES
(1, '4002', 'adidas', 50, 7500, 4.50, 'shoe', 0, 3, 3, NULL, '2019-04-29 16:19:08'),
(2, '4002', 'Puma', 40, 5000, 4.50, 'Shoe', 1, 2, 10, '2019-04-28 05:59:54', '2019-04-29 16:19:09'),
(3, '4002', 'Bata', 40, 1250, 3.40, 'Shoe', 1, 2, 0, '2019-04-28 06:23:09', '2019-04-29 21:48:52'),
(4, '4003', 'Nike Primium', 35, 8000, 4.80, 'Shoe', 1, 0, 1, '2019-04-28 13:07:07', '2019-04-29 14:30:05'),
(7, '4007', 'Nike Primium23', 40, 8000, 4.80, 'Shoe', 0, 0, 0, '2019-04-28 23:39:40', '2019-04-28 23:39:40'),
(8, '4007', 'pumma', 20, 3000, 4.50, 'Shoe', 0, 0, 0, '2019-04-29 04:15:59', '2019-04-29 04:15:59'),
(9, '4007', 'fsdfds', 2, 22343, 4.50, 'sdfs', 0, 0, 0, '2019-04-29 05:16:52', '2019-04-29 05:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `licence` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `licence`, `email`, `phone`, `password`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'utso', 'no', 'b@b.com', '01521329776', '123123123', '5b,22,17, nikunjo-2,dhaka', 'approved', '2019-04-28 00:14:31', '2019-04-29 05:00:23'),
(4001, 'hasan', 'no', 'hasan@hasan.com', '01521329776', '123123123', '5b,22,17, nikunjo-2,dhaka', 'pending', '2019-04-28 00:23:41', '2019-04-29 05:01:17'),
(4002, 'korim', 'no', 'k@k.com', '01521329776', '123456', '5b,22,17, nikunjo-2,dhaka', 'pending', '2019-04-28 05:02:18', '2019-04-29 05:01:14'),
(4004, 'jane', 'no', 'jane@gmail.com', '01521329776', '123123123', '5b,22,17, nikunjo-2,dhaka', 'approved', '2019-04-28 19:01:54', '2019-04-28 19:40:41'),
(4005, 'bata', 'no', 'bata@gmail.com', '01521329776', '123456789', '5b,22,17, nikunjo-2,dhaka', 'approved', '2019-04-28 19:35:07', '2019-04-28 19:35:52'),
(4007, 'arman2', 'no', 'arman22@gmail.com', '01521329776', '123456789', '5b,22,17, nikunjo-2,dhaka', 'approved', '2019-04-28 22:50:33', '2019-04-28 22:55:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
