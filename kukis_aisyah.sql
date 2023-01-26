-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 26, 2023 at 10:40 PM
-- Server version: 10.10.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kukis_aisyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', '949162bb4a0a28871b2e6d1193e6fe39', '2022-12-18 18:01:57'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', '08ff53139327a47bfdec208b523edfe1', '2022-12-18 18:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin Role'),
(2, 'user', 'User Role');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-18 18:02:47', 1),
(2, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-19 14:40:55', 1),
(3, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-19 14:42:05', 1),
(4, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-19 14:47:23', 1),
(5, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-19 14:47:42', 1),
(6, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-19 14:48:41', 1),
(7, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-19 14:50:54', 1),
(8, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-19 14:54:59', 1),
(9, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-19 14:55:23', 1),
(10, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 12:21:09', 1),
(11, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:31:38', 1),
(12, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:33:25', 1),
(13, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:38:15', 1),
(14, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:42:24', 1),
(15, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:56:23', 1),
(16, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 13:57:10', 1),
(17, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:05:46', 1),
(18, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:10:58', 1),
(19, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:51:51', 1),
(20, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:53:13', 1),
(21, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:54:20', 1),
(22, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:55:08', 1),
(23, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:56:04', 1),
(24, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:57:10', 1),
(25, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:57:53', 1),
(26, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 14:58:45', 1),
(27, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 15:00:27', 1),
(28, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 15:01:06', 1),
(29, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 15:02:35', 1),
(30, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:30:06', 1),
(31, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:31:15', 1),
(32, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:32:13', 1),
(33, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:35:17', 1),
(34, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:35:32', 1),
(35, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:36:09', 1),
(36, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:36:45', 1),
(37, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 16:42:00', 1),
(38, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 17:22:58', 1),
(39, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 17:34:18', 1),
(40, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 17:34:34', 1),
(41, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 17:36:30', 1),
(42, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-20 17:38:47', 1),
(43, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-20 17:39:40', 1),
(44, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-21 00:28:48', 1),
(45, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-21 00:31:40', 1),
(46, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-21 00:31:58', 1),
(47, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-21 00:32:45', 1),
(48, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-21 00:33:18', 1),
(49, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-21 00:37:44', 1),
(50, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-21 12:49:38', 1),
(51, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-21 12:50:12', 1),
(52, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-21 12:52:29', 1),
(53, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-21 14:01:15', 1),
(54, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-22 06:48:49', 1),
(55, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-22 12:03:42', 1),
(56, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-23 03:54:12', 1),
(57, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-23 06:57:20', 1),
(58, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-23 09:04:02', 1),
(59, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-24 06:04:44', 1),
(60, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-24 06:04:55', 1),
(61, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-24 06:54:40', 1),
(62, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 06:54:53', 1),
(63, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 07:26:03', 1),
(64, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 08:00:52', 1),
(65, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-24 08:01:00', 1),
(66, '::1', 'kukisaisyah@gmail.com', 2, '2022-12-24 08:04:31', 1),
(67, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 08:08:42', 1),
(68, '::1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 10:45:35', 1),
(69, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 10:54:09', 1),
(70, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 10:56:40', 1),
(71, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 10:57:27', 1),
(72, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 10:57:49', 1),
(73, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 11:41:04', 1),
(74, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 12:05:02', 1),
(75, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 13:00:22', 1),
(76, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-24 13:08:28', 0),
(77, '127.0.0.1', 'kudibbcdevil', NULL, '2022-12-24 13:08:38', 0),
(78, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 13:08:44', 1),
(79, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 13:10:52', 1),
(80, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 13:17:00', 1),
(81, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-24 13:43:27', 1),
(82, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-24 14:05:52', 0),
(83, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-24 14:06:00', 1),
(84, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-25 14:17:00', 1),
(85, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-25 14:19:23', 1),
(86, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-25 14:19:47', 0),
(87, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-25 14:19:54', 1),
(88, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-25 14:42:38', 1),
(89, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-25 22:46:38', 1),
(90, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-25 22:47:00', 1),
(91, '127.0.0.1', 'admin', NULL, '2022-12-26 13:05:35', 0),
(92, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-26 13:05:53', 0),
(93, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-26 13:06:00', 0),
(94, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 13:06:06', 1),
(95, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-26 13:37:02', 1),
(96, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-26 13:37:34', 0),
(97, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 13:37:41', 1),
(98, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-26 13:40:59', 0),
(99, '127.0.0.1', 'rizkyilhamp', NULL, '2022-12-26 13:41:05', 0),
(100, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 13:41:12', 1),
(101, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 13:45:05', 1),
(102, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 13:47:36', 1),
(103, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-26 18:09:21', 1),
(104, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-28 15:20:45', 1),
(105, '127.0.0.1', 'rizkyihamp', NULL, '2022-12-31 13:41:56', 0),
(106, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-31 13:42:03', 1),
(107, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2022-12-31 16:14:43', 1),
(108, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2022-12-31 16:15:12', 1),
(109, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-10 02:26:19', 1),
(110, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-21 05:19:24', 1),
(111, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-21 05:19:48', 1),
(112, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-21 05:20:18', 1),
(113, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-21 05:21:14', 1),
(114, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-21 05:27:59', 1),
(115, '127.0.0.1', 'admin', NULL, '2023-01-21 06:02:06', 0),
(116, '127.0.0.1', 'admin', NULL, '2023-01-21 06:02:11', 0),
(117, '127.0.0.1', 'admin', NULL, '2023-01-21 06:02:16', 0),
(118, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-21 06:02:22', 1),
(119, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-21 06:02:35', 1),
(120, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-21 06:10:03', 1),
(121, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-21 06:11:54', 1),
(122, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-22 05:39:45', 1),
(123, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-22 05:51:17', 1),
(124, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-22 06:28:45', 1),
(125, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-22 06:30:23', 1),
(126, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-22 09:09:05', 1),
(127, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 00:53:51', 1),
(128, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 02:25:39', 1),
(129, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-23 03:23:55', 1),
(130, '127.0.0.1', 'rizkyilhamp', NULL, '2023-01-23 03:24:08', 0),
(131, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 03:24:18', 1),
(132, '127.0.0.1', 'rizkyilhamp', NULL, '2023-01-23 04:34:51', 0),
(133, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 04:35:00', 1),
(134, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 09:56:10', 1),
(135, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 09:56:25', 1),
(136, '127.0.0.1', 'rizkyilhamp', NULL, '2023-01-23 09:56:35', 0),
(137, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-23 09:57:12', 1),
(138, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-23 09:57:47', 1),
(139, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-24 05:01:37', 1),
(140, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-24 05:01:48', 1),
(141, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-24 06:00:19', 1),
(142, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-24 06:01:58', 1),
(143, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-26 23:32:34', 1),
(144, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-26 23:33:39', 1),
(145, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-26 23:34:14', 1),
(146, '127.0.0.1', 'kukisaisyah@gmail.com', 2, '2023-01-27 06:20:15', 1),
(147, '127.0.0.1', 'rizkyilhamp16@gmail.com', 1, '2023-01-27 06:22:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `total_harga` int(255) UNSIGNED NOT NULL,
  `estimation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `status`, `total_harga`, `estimation`) VALUES
(1, 1, '2022-12-24 07:53:46', '2022-12-24 08:08:22', NULL, 'Selesai', 40000, '2022-12-24'),
(2, 1, '2022-12-25 14:17:16', '2022-12-25 14:17:16', NULL, 'Proses', 220000, NULL),
(3, 1, '2022-12-25 14:18:17', '2022-12-25 14:18:17', NULL, 'Proses', 2000000, NULL),
(4, 1, '2022-12-26 18:31:36', '2022-12-26 18:31:36', NULL, 'Proses', 2000000, NULL),
(5, 1, '2022-12-31 16:16:36', '2022-12-31 16:16:36', NULL, 'Proses', 20000, NULL),
(6, 1, '2022-12-31 16:17:04', '2022-12-31 16:17:04', NULL, 'Proses', 20000, NULL),
(7, 1, '2023-01-21 05:50:07', '2023-01-21 05:50:07', NULL, 'Proses', 260000, NULL),
(8, 1, '2023-01-21 05:57:01', '2023-01-21 05:57:01', NULL, 'Proses', 60000, NULL),
(9, 1, '2023-01-21 05:58:51', '2023-01-21 05:58:51', NULL, 'Proses', 20000, NULL),
(10, 1, '2023-01-23 02:11:13', '2023-01-23 02:11:13', NULL, 'Proses', 1, NULL),
(11, 1, '2023-01-23 02:11:33', '2023-01-23 02:11:33', NULL, 'Proses', 1, NULL),
(12, 1, '2023-01-23 02:44:00', '2023-01-23 02:44:00', NULL, 'Proses', 1, NULL),
(13, 1, '2023-01-23 04:55:54', '2023-01-23 04:55:54', NULL, 'Proses', 20000, NULL),
(14, 1, '2023-01-23 04:57:17', '2023-01-23 04:57:17', NULL, 'Proses', 20000, NULL),
(15, 1, '2023-01-23 04:57:34', '2023-01-23 04:57:34', NULL, 'Proses', 20000, NULL),
(16, 1, '2023-01-23 05:02:03', '2023-01-23 05:02:03', NULL, 'Proses', 240000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_products`
--

CREATE TABLE `pesan_products` (
  `id` int(5) UNSIGNED NOT NULL,
  `pesanan_id` int(5) UNSIGNED NOT NULL,
  `products_id` int(5) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `jumlah` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `pesan_products`
--

INSERT INTO `pesan_products` (`id`, `pesanan_id`, `products_id`, `created_at`, `updated_at`, `deleted_at`, `jumlah`) VALUES
(1, 1, 9, '2022-12-24 07:53:46', '2022-12-24 07:53:46', NULL, 2),
(2, 2, 9, '2022-12-25 14:17:16', '2022-12-25 14:17:16', NULL, 11),
(3, 3, 9, '2022-12-25 14:18:17', '2022-12-25 14:18:17', NULL, 100),
(4, 4, 9, '2022-12-26 18:31:36', '2022-12-26 18:31:36', NULL, 100),
(5, 5, 9, '2022-12-31 16:16:36', '2022-12-31 16:16:36', NULL, 1),
(6, 6, 9, '2022-12-31 16:17:04', '2022-12-31 16:17:04', NULL, 1),
(7, 7, 9, '2023-01-21 05:50:07', '2023-01-21 05:50:07', NULL, 13),
(8, 8, 9, '2023-01-21 05:57:01', '2023-01-21 05:57:01', NULL, 3),
(9, 9, 9, '2023-01-21 05:58:51', '2023-01-21 05:58:51', NULL, 1),
(10, 10, 9, '2023-01-23 02:11:13', '2023-01-23 02:11:13', NULL, NULL),
(11, 11, 9, '2023-01-23 02:11:33', '2023-01-23 02:11:33', NULL, NULL),
(12, 12, 9, '2023-01-23 02:44:00', '2023-01-23 02:44:00', NULL, NULL),
(13, 13, 9, '2023-01-23 04:55:54', '2023-01-23 04:55:54', NULL, NULL),
(14, 14, 9, '2023-01-23 04:57:17', '2023-01-23 04:57:17', NULL, NULL),
(15, 15, 9, '2023-01-23 04:57:34', '2023-01-23 04:57:34', NULL, NULL),
(16, 16, 9, '2023-01-23 05:02:03', '2023-01-23 05:02:03', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `stok` int(255) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `price` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `stok`, `created_at`, `updated_at`, `deleted_at`, `price`) VALUES
(8, 'sdfsdfsfdf', 'sdfsdfsdf', 'images/1671768858_211fe848a7cb118a9326.jpg', 'Kue Basah', 123, '2022-12-23 12:14:18', '2022-12-23 12:14:25', '2022-12-23 12:14:25', 2147483647),
(9, 'Putri Salju', 'Kue putri salju', 'images/1671768957_e7ff86505e7f2b999a4a.jpg', 'Kue Kering', 69, '2022-12-23 12:15:57', '2023-01-24 05:52:06', NULL, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rizkyilhamp16@gmail.com', 'rizkyilhamp', '$2y$10$6qwRNElRGO0lTHugeSzVKO4y77dU2yTCVTWreGb.cdcn2OmNunh4i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-18 18:02:32', '2022-12-18 18:02:44', NULL),
(2, 'kukisaisyah@gmail.com', 'admin', '$2y$10$msXaD9wxhe5jak/9p.XmG.UTLOD/O2rUEs/29dUp4Ngob2AQCVD/K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-19 14:40:45', '2022-12-19 14:40:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_user_id_foreign` (`user_id`);

--
-- Indexes for table `pesan_products`
--
ALTER TABLE `pesan_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_products_pesanan_id_foreign` (`pesanan_id`),
  ADD KEY `pesan_products_products_id_foreign` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesan_products`
--
ALTER TABLE `pesan_products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesan_products`
--
ALTER TABLE `pesan_products`
  ADD CONSTRAINT `pesan_products_pesanan_id_foreign` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`),
  ADD CONSTRAINT `pesan_products_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
