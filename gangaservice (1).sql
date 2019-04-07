-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 07:10 PM
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
-- Database: `gangaservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `pic` varchar(255) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `advid` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `TAGS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`pic`, `height`, `width`, `advid`, `start`, `end`, `category`, `message`, `TAGS`) VALUES
('https://thecouponx.com/files/2018/04/faasos-50-off-coupon.png', NULL, NULL, 1, '2019-02-17', '2019-02-17', 'Food', 'Buy food in very less price ', 'Food,Best Offer'),
('https://d1m6qo1ndegqmm.cloudfront.net/uploadimages/coupons/9383-WangsKitchen_500x200.jpg', NULL, NULL, 2, '2019-02-17', '2019-02-17', 'Food', 'Buy food in very less price ', 'Food,Best Offer'),
('https://i.ytimg.com/vi/xyYD96pkXqM/maxresdefault.jpg', NULL, NULL, 3, '2019-02-17', '2019-02-17', 'Food', 'Buy food in very less price ', 'Somasha'),
('https://s3-media2.fl.yelpcdn.com/bphoto/UFTLr068sY7fz4p_HFddlw/o.jpg', NULL, NULL, 4, '2019-02-17', '2019-02-17', 'Food', 'Buy food in very less price ', 'Momo'),
('https://js.inkhabar.com/wp-content/uploads/2017/10/vegitable-prices-have-gone-up-in-maharashtra-due-to-raining-644x362.jpg', NULL, NULL, 5, '2019-02-17', '2019-02-17', 'Food', 'Buy Vegitable', 'Vegitable'),
('https://us.123rf.com/450wm/tchara/tchara1402/tchara140200016/26573414-watermelon-and-melon-in-a-vegitable-garden.jpg?ver=6', NULL, NULL, 6, '2019-02-17', '2019-02-17', 'Vegetable', 'Buy Vegetable', 'Vegetable'),
('https://i.ndtvimg.com/i/2017-10/vegetable-lasagne-recipe_620x330_41509091876.jpg', NULL, NULL, 7, '2019-02-17', '2019-02-17', 'Vegetable', 'Buy Vegetable', 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info_tab`
--

CREATE TABLE `customer_info_tab` (
  `customer_info_id` int(255) UNSIGNED NOT NULL,
  `cname` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` longtext COLLATE utf8_unicode_ci,
  `cpin` int(11) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_info_tab`
--

INSERT INTO `customer_info_tab` (`customer_info_id`, `cname`, `state`, `city`, `location`, `phone`, `address`, `pic`, `cpin`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Beeru', 'Bihar', 'Bhagalpur', NULL, NULL, 'sjkdfhk', NULL, 812007, 37, '2018-11-14 07:43:36', NULL),
(5, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 83, '2019-01-15 03:32:45', NULL),
(24, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 77, '2019-01-13 17:11:19', NULL),
(26, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 85, '2019-01-21 10:14:18', NULL),
(27, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 103, '2019-01-25 18:32:33', NULL),
(28, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 106, '2019-01-28 07:38:32', NULL),
(29, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 117, '2019-02-12 08:02:53', NULL),
(30, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 120, '2019-02-14 10:22:10', NULL),
(31, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 121, '2019-02-14 10:40:56', NULL),
(32, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 122, '2019-02-24 04:57:50', NULL),
(33, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 123, '2019-02-28 06:51:47', NULL),
(34, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 124, '2019-03-07 17:04:47', NULL),
(35, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 125, '2019-03-09 15:51:07', NULL),
(36, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 126, '2019-03-09 18:50:57', NULL),
(37, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 127, '2019-03-10 20:21:58', NULL),
(38, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 129, '2019-03-17 06:27:56', NULL),
(39, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 130, '2019-03-17 06:35:24', NULL),
(40, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 132, '2019-03-17 06:46:13', NULL),
(103, 'Your Nam', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812002, 63, '2019-01-11 13:15:35', NULL),
(124, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 78, '2019-01-13 17:15:33', NULL),
(126, 'Your Name', 'Bihar', 'Bhagalpur', 'location', NULL, 'Your Address', '', 812001, 78, '2019-01-13 17:15:33', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'zNoVKXCNhHHeC0pM1iohCRl4icBVCZuEfkfdtkbG', 'http://localhost', 1, 0, 0, '2019-03-25 20:18:50', '2019-03-25 20:18:50'),
(2, NULL, 'Laravel Password Grant Client', '47gCTVwaZSdVc9G4PQbFnXUyTHMoFJSS0corbLlL', 'http://localhost', 0, 1, 0, '2019-03-25 20:18:50', '2019-03-25 20:18:50'),
(3, NULL, 'Laravel Personal Access Client', 'kuPorJn292SzCOwbxlTtAWNWXcI7Wh3Gsi9yjZ9p', 'http://localhost', 1, 0, 0, '2019-03-25 20:20:12', '2019-03-25 20:20:12'),
(4, NULL, 'Laravel Password Grant Client', '4fcyoORFkgLe5KakfWALkkvhQU5XTZnWnOofsa8V', 'http://localhost', 0, 1, 0, '2019-03-25 20:20:12', '2019-03-25 20:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-03-25 20:18:50', '2019-03-25 20:18:50'),
(2, 3, '2019-03-25 20:20:12', '2019-03-25 20:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(224) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noti_token` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `noti_token`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(37, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', 'login', '7894561230', 'ExponentPushToken[aWyUZlCjN6cNGfsjppIIWi]', 'worker', 1, '2019-04-07 16:47:31', '2018-11-16 14:11:51'),
(44, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Nov 18 2018 15:33:34 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2018-11-18 08:17:01'),
(46, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Nov 18 2018 15:26:53 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2018-11-18 08:56:57'),
(51, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Fri Dec 14 2018 16:05:19 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2018-12-14 09:35:20'),
(55, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Jan 10 2019 12:09:18 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2019-01-10 06:39:31'),
(56, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Jan 10 2019 12:38:10 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2019-01-10 07:08:23'),
(63, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-11 13:15:35'),
(64, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 06:29:05'),
(69, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[EGQCLyNNI6_sdWQrxH8plR]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 08:40:15'),
(70, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 10:21:48'),
(71, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 10:26:12'),
(72, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'notitken', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 10:34:09'),
(73, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[vu7Pq9KD48Vdj1xGfksjap]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 16:56:39'),
(75, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[vu7Pq9KD48Vdj1xGfksjap]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 17:03:12'),
(76, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[vu7Pq9KD48Vdj1xGfksjap]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 17:07:45'),
(77, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[vu7Pq9KD48Vdj1xGfksjap]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 17:11:19'),
(78, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[vu7Pq9KD48Vdj1xGfksjap]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-13 17:15:33'),
(79, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[3bsArgAfWBJ6oom5IgYyqt]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-14 03:06:51'),
(82, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-14 17:41:55'),
(83, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[B7PRBFFVjB9ZkRCdFjns9s]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-15 03:32:44'),
(85, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[bqfZQ9AkyY4f76o8dmYckI]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-21 10:14:18'),
(86, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Wed Jan 23 2019 10:59:58 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2019-01-23 05:29:59'),
(97, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[dz_fbZM0LQ1Imp3fYKxpDP]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-25 18:02:32'),
(103, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[dz_fbZM0LQ1Imp3fYKxpDP]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-25 18:32:33'),
(104, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sat Jan 26 2019 04:58:11 GMT+0530 (IST)', 'worker', 1, '2019-04-07 16:47:31', '2019-01-25 23:28:12'),
(105, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[T-8Q7pJfBWN2uZ9acIv1NV]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-28 07:16:58'),
(106, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[IuaLGxJZZv6kOlvbB2V9HG]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-28 07:38:32'),
(109, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[LVEKm8P8ApOf8qbC9-1QMb]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-28 12:57:17'),
(110, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[T-8Q7pJfBWN2uZ9acIv1NV]', 'worker', 1, '2019-04-07 16:47:31', '2019-01-29 04:30:10'),
(111, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[SBsIx9FN99nXD4BhjZ-kEc]', 'worker', 0, '2019-04-07 16:47:31', '2019-02-03 11:05:54'),
(112, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[jAzHLWLX23k_ByWsOg_h67]', 'worker', 0, '2019-04-07 16:47:31', '2019-02-06 11:38:10'),
(115, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', 'logout', '7894561230', 'ExponentPushToken[AvKh8VIZhIG0BdlVObZ0UF]', 'worker', 0, '2019-04-07 16:47:31', '2019-02-07 07:49:00'),
(116, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', 'login', '7894561230', 'ExponentPushToken[ryQksuEoeHLsjmWp1efF8q]', 'worker', 0, '2019-04-07 16:47:31', '2019-02-07 07:49:28'),
(117, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Tue Feb 12 2019 13:32:51 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-12 08:02:53'),
(118, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Wed Feb 13 2019 15:11:07 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-13 09:41:09'),
(119, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'ExponentPushToken[ri75MNDaNqIobRSrnQckjf]', 'worker', 0, '2019-04-07 16:47:31', '2019-02-13 13:31:00'),
(120, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Feb 14 2019 15:52:08 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-14 10:22:10'),
(121, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Feb 14 2019 16:10:55 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-14 10:40:56'),
(122, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Feb 24 2019 10:27:48 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-24 04:57:50'),
(123, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Feb 28 2019 12:21:45 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-02-28 06:51:47'),
(124, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Thu Mar 07 2019 22:34:46 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-07 17:04:47'),
(125, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sat Mar 09 2019 21:21:06 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-09 15:51:07'),
(126, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Mar 10 2019 00:20:55 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-09 18:50:57'),
(127, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Mon Mar 11 2019 01:51:56 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-10 20:21:58'),
(128, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sat Mar 16 2019 07:43:03 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-16 02:13:41'),
(129, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Mar 17 2019 11:57:19 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-17 06:27:56'),
(130, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Mar 17 2019 12:05:22 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-17 06:35:24'),
(132, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', 'Sun Mar 17 2019 12:16:11 GMT+0530 (IST)', 'worker', 0, '2019-04-07 16:47:31', '2019-03-17 06:46:13'),
(135, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 16:47:31', '12345', NULL, '7894561230', NULL, 'worker', 0, '2019-04-07 16:47:31', '2019-04-05 08:25:21'),
(137, 'sakshi', 'fdjghkj@gmail.com', '2019-04-07 15:47:35', '12345', NULL, '7894561230', NULL, 'worker', 0, '2019-04-07 15:47:35', '2019-04-07 15:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `wor_cat_tab`
--

CREATE TABLE `wor_cat_tab` (
  `wor_cat_id` int(255) UNSIGNED NOT NULL,
  `wor_cat_name` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wor_cat_pic` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wor_cat_tab`
--

INSERT INTO `wor_cat_tab` (`wor_cat_id`, `wor_cat_name`, `wor_cat_pic`, `created_at`, `updated_at`) VALUES
(1, 'Appliance Repair', '', '2018-11-23 03:42:12', '2019-03-18 21:12:36'),
(2, 'Beauty & Spa', '', '2018-11-23 03:42:25', '2019-03-18 21:12:50'),
(3, 'Home Cleaning & Repairs', '', '2018-11-23 03:42:48', '2019-03-18 21:13:00'),
(4, 'Business & Taxes', '', '2019-03-18 21:13:57', '0000-00-00 00:00:00'),
(5, 'Personal & More', '', '2019-03-18 21:13:57', '0000-00-00 00:00:00'),
(6, 'Weddings & Events', '', '2019-03-18 21:13:57', '0000-00-00 00:00:00'),
(7, 'item with pic', '', '2019-04-05 12:48:57', '2019-04-05 12:48:57'),
(8, 'abcd', '/storage/app/public/category/5ca789c34dc541554483651.png', '2019-04-05 17:00:51', '2019-04-05 17:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `wor_info_tab`
--

CREATE TABLE `wor_info_tab` (
  `wor_info_id` int(255) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pin_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `work_hour` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_exp` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_of_profile_view` int(15) DEFAULT NULL,
  `no_of_work` int(15) DEFAULT NULL,
  `rating` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `pic` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wor_info_tab`
--

INSERT INTO `wor_info_tab` (`wor_info_id`, `name`, `state`, `city`, `pin_code`, `address`, `work_hour`, `work_exp`, `location`, `no_of_profile_view`, `no_of_work`, `rating`, `pic`, `created_at`, `updated_at`, `phone`) VALUES
(51, 'Aarav kumar ', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 5, 0, '5', 'https://i.imgur.com/uj2JaPH.jpg', '2018-12-14 10:35:20', NULL, NULL),
(72, 'name', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 0, 0, '0', 'https://i.imgur.com/uj2JaPH.jpg', '2019-01-13 10:34:09', NULL, NULL),
(86, 'Rahul kumar s', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 0, 0, '0', 'https://i.imgur.com/uj2JaPH.jpg', '2019-01-23 05:29:59', NULL, NULL),
(104, 'Durga', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 0, 0, '0', 'https://i.imgur.com/uj2JaPH.jpg', '2019-01-25 23:28:12', NULL, NULL),
(118, 'Worker', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 0, 0, '0', 'https://i.imgur.com/uj2JaPH.jpg', '2019-02-13 09:41:09', NULL, NULL),
(128, 'Hii', 'Bihar', 'BGP', '812001', 'Nayabazar,Near Hanuman Mandir, House no:31', '10:00:AM-04:00:PM', '3', '', 0, 0, '0', 'https://i.imgur.com/uj2JaPH.jpg', '2019-03-16 02:13:41', NULL, NULL),
(129, 'sakshi', 'bihar', 'bhagalpur', '8103215', 'sjadghfhjsdfksj', NULL, NULL, NULL, NULL, NULL, '0', '', '2019-04-07 17:08:44', NULL, '7894561230');

-- --------------------------------------------------------

--
-- Table structure for table `wor_order_tab`
--

CREATE TABLE `wor_order_tab` (
  `wor_order_id` int(255) UNSIGNED NOT NULL,
  `wor_info_id` int(255) UNSIGNED NOT NULL,
  `wor_subcat_id` int(255) UNSIGNED NOT NULL,
  `customer_info_Id` int(255) UNSIGNED NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bill_list` varchar(5000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[{"list_id":"1","price":"00","work":"Work Name"}]',
  `workPorgressStatus` varchar(5000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `feedback` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No Feedback',
  `ratting` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `otp_verified` int(10) NOT NULL DEFAULT '0',
  `call_verified` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wor_order_tab`
--

INSERT INTO `wor_order_tab` (`wor_order_id`, `wor_info_id`, `wor_subcat_id`, `customer_info_Id`, `message`, `title`, `bill_list`, `workPorgressStatus`, `feedback`, `ratting`, `created_at`, `updated_at`, `otp_verified`, `call_verified`) VALUES
(1, 104, 1, 79, 'Please come here and corrent my fan', 'Fan Reparing', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-01-26 07:31:21', '2019-01-31 00:32:54', 0, 0),
(4, 86, 12, 103, 'Hire me', 'Yes', '[{\"work\":\"F\",\"price\":\"99\",\"list_id\":1}]', '0', 'No Feedback', 0, '2019-01-31 03:04:31', '2019-02-15 20:26:53', 0, 0),
(5, 86, 12, 103, 'Uui', 'Gyt', 'BillList', '0', 'No Feedback', 0, '2019-01-31 03:07:02', '2019-02-17 16:16:51', 0, 0),
(7, 72, 5, 103, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-01-31 03:53:07', NULL, 0, 0),
(9, 86, 3, 85, 'Hello', 'Something', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-02-05 21:36:43', NULL, 0, 0),
(12, 104, 5, 124, 'Call me now', 'A work', '[{\"work\":\"Ggt\",\"price\":\"2580\",\"list_id\":1}]', '0', 'No Feedback', 0, '2019-03-08 02:35:25', '2019-03-19 11:16:31', 0, 0),
(13, 104, 5, 124, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-08 02:38:09', NULL, 0, 0),
(14, 104, 5, 120, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-09 02:56:21', NULL, 0, 0),
(15, 104, 5, 126, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-10 03:05:05', NULL, 0, 0),
(16, 118, 5, 126, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-12 13:05:58', NULL, 0, 0),
(17, 104, 5, 120, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-17 01:42:55', NULL, 0, 0),
(18, 128, 5, 129, 'Call me now', 'A work', '[{\"list_id\":\"1\",\"price\":\"00\",\"work\":\"Work Name\"}]', '0', 'No Feedback', 0, '2019-03-17 13:29:05', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wor_rate_tab`
--

CREATE TABLE `wor_rate_tab` (
  `wor_rate_id` int(255) UNSIGNED NOT NULL,
  `wor_info_id` int(255) UNSIGNED NOT NULL,
  `wor_subcat_id` int(255) UNSIGNED NOT NULL,
  `min_price` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `max_price` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wor_rate_tab`
--

INSERT INTO `wor_rate_tab` (`wor_rate_id`, `wor_info_id`, `wor_subcat_id`, `min_price`, `max_price`, `created_at`, `updated_at`) VALUES
(1, 72, 5, '300', '600', '2019-01-13 18:34:09', NULL),
(2, 72, 3, '250', '550', '2019-01-13 18:34:09', NULL),
(3, 72, 12, '1000', '1200', '2019-01-13 18:34:09', NULL),
(4, 86, 5, '300', '600', '2019-01-23 13:29:59', NULL),
(5, 86, 3, '250', '550', '2019-01-23 13:29:59', NULL),
(6, 86, 12, '1000', '1200', '2019-01-23 13:29:59', NULL),
(7, 104, 5, '300', '600', '2019-01-26 07:28:12', NULL),
(8, 104, 3, '250', '550', '2019-01-26 07:28:12', NULL),
(9, 104, 12, '1000', '1200', '2019-01-26 07:28:12', NULL),
(10, 118, 5, '300', '600', '2019-02-13 17:41:09', NULL),
(11, 118, 3, '250', '550', '2019-02-13 17:41:09', NULL),
(12, 118, 12, '1000', '1200', '2019-02-13 17:41:09', NULL),
(13, 128, 5, '300', '600', '2019-03-16 09:13:41', NULL),
(14, 128, 3, '250', '550', '2019-03-16 09:13:41', NULL),
(15, 128, 12, '1000', '1200', '2019-03-16 09:13:41', NULL),
(16, 37, 1, '893475', '3458', '2019-04-07 17:08:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wor_subcat_tab`
--

CREATE TABLE `wor_subcat_tab` (
  `wor_subcat_id` int(255) UNSIGNED NOT NULL,
  `wor_cat_id` int(255) UNSIGNED NOT NULL,
  `subcat_name` varchar(250) NOT NULL,
  `pic` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wor_subcat_tab`
--

INSERT INTO `wor_subcat_tab` (`wor_subcat_id`, `wor_cat_id`, `subcat_name`, `pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'AC Service and Repair', '', '2018-11-23 11:43:43', '2019-03-19 04:20:38'),
(2, 1, 'Refrigerator Repair', '', '2018-11-23 11:43:57', '2019-03-19 04:20:48'),
(3, 1, 'Washing Machine Repair', '', '2018-11-23 11:44:53', '2019-03-19 04:21:00'),
(4, 1, 'RO or Water Purifier Repair', '', '2018-11-23 11:45:26', '2019-03-19 04:21:20'),
(5, 1, 'Microwave Repair', '', '2018-11-23 11:45:50', '2019-03-19 04:21:34'),
(6, 2, 'Salon at home for Women', '', '2018-11-23 11:46:08', '2019-03-19 04:21:46'),
(7, 2, 'Massage for Women', '', '2018-11-23 11:46:22', '2019-03-19 04:22:01'),
(8, 2, 'Makeup and Hairstyling', '', '2018-11-23 11:46:35', '2019-03-19 04:24:58'),
(9, 2, 'Massage for Men', '', '2018-11-23 11:46:52', '2019-03-19 04:25:32'),
(10, 2, 'Men\'s Haircut & Grooming', '', '2018-11-23 11:47:14', '2019-03-19 04:26:05'),
(11, 3, 'Electricians', '', '2018-11-23 11:47:34', '2019-03-19 04:26:16'),
(12, 3, 'Plumbers', '', '2018-11-23 11:47:45', '2019-03-19 04:26:30'),
(15, 3, 'Carpenters', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(16, 3, 'Bathroom Deep Cleaning', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(17, 3, 'Carpet Cleaning', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(18, 3, 'Home Deep Cleaning', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(19, 3, 'Kitchen Deep Cleaning', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(20, 3, 'Car Cleaning', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(21, 3, 'Pest Control', NULL, '2019-03-19 04:33:09', '0000-00-00 00:00:00'),
(22, 4, 'CA for Income Tax Filing', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(23, 4, 'Packers & Movers', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(24, 4, 'CCTV Cameras and Installation', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(25, 4, 'Web Designer & Developer', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(26, 4, 'CA for Small Business', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(27, 4, 'GST Registration & Migration Services', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(28, 4, 'CA/CS for Company Registration', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(29, 4, 'Lawyer', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(30, 4, 'Vastu Shastra Consultants', NULL, '2019-03-19 04:40:23', '0000-00-00 00:00:00'),
(31, 5, 'Astrologer', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(32, 5, 'Baby Portfolio Photographer', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(33, 5, 'Commerce Home Tutor', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(34, 5, 'Car Cleaning', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(35, 5, 'CCTV Cameras and Installation', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(36, 5, 'Divorce Lawyer', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(37, 5, 'Home Tutor', NULL, '2019-03-19 04:40:24', '0000-00-00 00:00:00'),
(38, 5, 'Dry Cleaning', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(39, 5, 'Lawyer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(40, 5, 'Maternity Photographer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(41, 5, 'Packers & Movers', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(42, 5, 'Real Estate Lawyer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(43, 5, 'Mathematics Tutor', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(44, 5, 'CA for Income Tax Filing', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(45, 6, 'Makeup and Hairstyling', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(46, 6, 'Wedding Photographer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(47, 6, 'Pre-Wedding Shoot', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(48, 6, 'Event Photographer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(49, 6, 'Wedding Venues', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(50, 6, 'Party Decoration', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(51, 6, 'Astrologer', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00'),
(52, 6, 'Men\'s Haircut & Grooming', NULL, '2019-03-19 04:40:25', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advid`);

--
-- Indexes for table `customer_info_tab`
--
ALTER TABLE `customer_info_tab`
  ADD PRIMARY KEY (`customer_info_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wor_cat_tab`
--
ALTER TABLE `wor_cat_tab`
  ADD PRIMARY KEY (`wor_cat_id`);

--
-- Indexes for table `wor_info_tab`
--
ALTER TABLE `wor_info_tab`
  ADD PRIMARY KEY (`wor_info_id`);

--
-- Indexes for table `wor_order_tab`
--
ALTER TABLE `wor_order_tab`
  ADD PRIMARY KEY (`wor_order_id`);

--
-- Indexes for table `wor_rate_tab`
--
ALTER TABLE `wor_rate_tab`
  ADD PRIMARY KEY (`wor_rate_id`);

--
-- Indexes for table `wor_subcat_tab`
--
ALTER TABLE `wor_subcat_tab`
  ADD PRIMARY KEY (`wor_subcat_id`),
  ADD KEY `wor_cat_id` (`wor_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `wor_cat_tab`
--
ALTER TABLE `wor_cat_tab`
  MODIFY `wor_cat_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wor_info_tab`
--
ALTER TABLE `wor_info_tab`
  MODIFY `wor_info_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `wor_order_tab`
--
ALTER TABLE `wor_order_tab`
  MODIFY `wor_order_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wor_rate_tab`
--
ALTER TABLE `wor_rate_tab`
  MODIFY `wor_rate_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wor_subcat_tab`
--
ALTER TABLE `wor_subcat_tab`
  MODIFY `wor_subcat_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wor_info_tab`
--
ALTER TABLE `wor_info_tab`
  ADD CONSTRAINT `wor_info_tab_ibfk_2` FOREIGN KEY (`wor_info_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wor_subcat_tab`
--
ALTER TABLE `wor_subcat_tab`
  ADD CONSTRAINT `wor_subcat_tab_ibfk_1` FOREIGN KEY (`wor_cat_id`) REFERENCES `wor_cat_tab` (`wor_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
