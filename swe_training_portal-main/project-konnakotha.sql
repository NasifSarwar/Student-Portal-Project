-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 01:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-konnakotha`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambassadors`
--

CREATE TABLE `ambassadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambassadors`
--

INSERT INTO `ambassadors` (`id`, `name`, `roll_no`, `institute`, `email`, `phone`, `fathers_name`, `mothers_name`, `district_id`, `created_at`, `updated_at`) VALUES
(5, 'Nur Hossain', '1', 'cgs', 'test10@gmail.com', '01770137655', 'Abdur Rahim', 'Momota Begum', '1', '2021-06-21 05:12:35', '2021-06-21 05:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `weight`, `title`, `title_bangla`, `slogan`, `slogan_bangla`, `image`, `created_at`, `updated_at`) VALUES
(4, 1, 'KONNAKOTHA', 'কন্যাকথা', 'Cyber Awareness Programme For Girls', 'কিশোরীদের জন্য সাইবার সচেতনতা প্রোগ্রাম', '124362377.jpg', '2021-06-15 07:42:13', '2021-06-22 09:44:51'),
(5, 2, 'KONNAKOTHA', 'কন্যাকথা', 'Cyber Awareness Programme For Women', 'মহিলাদের জন্য সাইবার সচেতনতা প্রোগ্রাম', '1038723537.jpg', '2021-06-19 03:56:35', '2021-06-24 03:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cats Eye', '2021-06-09 01:59:23', '2021-06-09 01:59:23'),
(3, 'Serena', '2021-06-09 02:03:15', '2021-06-09 02:03:15'),
(4, 'samsung', '2021-06-09 02:46:03', '2021-06-09 02:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '2021-06-09 01:25:19', '2021-06-09 01:25:19'),
(4, 'Women', '2021-06-09 05:38:12', '2021-06-09 05:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name_english`, `name_bangla`, `created_at`, `updated_at`) VALUES
(3, 'Barishal', 'ঢাকা', '2021-06-17 23:34:57', '2021-06-17 23:36:54'),
(4, 'Comilla', 'কুমিল্লা', '2021-06-17 23:35:33', '2021-06-17 23:36:45'),
(5, 'Dhaka', 'চট্টগ্রাম', '2021-06-17 23:36:34', '2021-06-17 23:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `date`, `name`, `notice_bangla`, `filename`, `created_at`, `updated_at`) VALUES
(2, '2021-06-01', 'Tom', 'ডকুমেন্ট', '1174920899.pdf', '2021-06-17 04:40:10', '2021-06-17 04:47:26'),
(3, '2021-06-26', 'test documents', 'সাইট টেস্টিং', '1624647153978-981-15-2024-2_38.pdf', '2021-06-25 12:52:33', '2021-06-25 12:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_place_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_place_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_english` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_bangla` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `weight`, `date`, `training_place_english`, `training_place_bangla`, `description_english`, `description_bangla`, `photos`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-06-10', 'Rangamati', 'রাঙ্গামাটি', '<p>Our Cyber Awarenes training was held in Rangamati.</p>', '<p>\r\nআমাদের সাইবার আওয়ারনেস প্রশিক্ষণ রাঙ্গামাটিতে অনুষ্ঠিত হয়েছিল।</p>', '1242764542.jpg', '2021-06-18 10:07:55', '2021-06-22 11:00:49'),
(3, 1, '2021-06-20', 'khagrachori', 'খাগড়াছড়ি', '<p>Our Cyber Awarenes training was held in Rangamati.</p>', '<p>\r\nআমাদের সাইবার আওয়ারনেস প্রশিক্ষণটি খাগড়াছোড়িতে অনুষ্ঠিত হয়েছিল।</p>', '1093947540.png', '2021-06-19 12:38:36', '2021-06-22 11:11:53'),
(4, 3, '2021-06-03', 'Cox\'s Bazar', 'কক্সবাজার', '<p>Our Cyber Awarenes training was held in Coxs Bazar .</p>', '<p>আমাদের সাইবার আওয়ারনেস প্রশিক্ষণটি কক্সবাজারে অনুষ্ঠিত হয়েছিল।</p>', '1624382258cca.jpeg', '2021-06-22 11:17:38', '2021-06-22 11:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `place_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `title_en`, `title_bn`, `date`, `place_en`, `place_bn`, `comments_en`, `comments_bn`, `created_at`, `updated_at`) VALUES
(1, 'Hello', 'Trainers Training', '2021-06-24', 'Dhaka', 'Dhaka', 'helllo', 'hello', '2021-06-24 03:20:45', '2021-06-24 04:14:52'),
(3, 'Title', 'শিরোনাম', '2021-06-26', 'Dhaka', 'ঢাকা', 'it will be continued', 'সাঢাকা ইট টেস্টিং', '2021-06-25 13:20:37', '2021-06-25 13:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `sector`, `month`, `year`, `cost`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'February', '2021', '10', 'test', '2021-02-03 23:05:20', '2021-02-03 23:37:51'),
(3, 'Management', 'February', '2021', '12000', 'Esraq', '2021-02-04 00:17:53', '2021-06-06 04:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `weight`, `name_en`, `name_bn`, `created_at`, `updated_at`) VALUES
(2, 2, 'cca', 'cca', '2021-06-26 02:43:03.000000', '2021-06-26 03:01:20.000000'),
(3, 2, 'friend', 'cca', '2021-06-26 03:04:41.000000', '2021-06-26 03:04:41.000000');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `id` int(10) NOT NULL,
  `viewer` int(10) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`id`, `viewer`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-06-24 04:23:28.000000', '2021-06-24 04:23:28.000000'),
(2, 1, '2021-06-24 04:25:57.000000', '2021-06-24 04:25:57.000000'),
(3, 1, '2021-06-24 06:09:03.000000', '2021-06-24 06:09:03.000000'),
(4, 1, '2021-06-24 06:13:05.000000', '2021-06-24 06:13:05.000000'),
(5, 1, '2021-06-24 06:13:14.000000', '2021-06-24 06:13:14.000000'),
(6, 1, '2021-06-24 11:35:12.000000', '2021-06-24 11:35:12.000000'),
(7, 1, '2021-06-24 13:07:33.000000', '2021-06-24 13:07:33.000000'),
(8, 1, '2021-06-24 13:11:34.000000', '2021-06-24 13:11:34.000000'),
(9, 1, '2021-06-24 13:21:28.000000', '2021-06-24 13:21:28.000000'),
(10, 1, '2021-06-24 13:21:31.000000', '2021-06-24 13:21:31.000000'),
(11, 1, '2021-06-24 13:21:34.000000', '2021-06-24 13:21:34.000000'),
(12, 1, '2021-06-24 13:42:45.000000', '2021-06-24 13:42:45.000000'),
(13, 1, '2021-06-24 13:56:35.000000', '2021-06-24 13:56:35.000000'),
(14, 1, '2021-06-24 13:58:37.000000', '2021-06-24 13:58:37.000000'),
(15, 1, '2021-06-24 14:20:37.000000', '2021-06-24 14:20:37.000000'),
(16, 1, '2021-06-24 14:21:29.000000', '2021-06-24 14:21:29.000000'),
(17, 1, '2021-06-24 14:36:57.000000', '2021-06-24 14:36:57.000000'),
(18, 1, '2021-06-24 14:59:41.000000', '2021-06-24 14:59:41.000000'),
(19, 1, '2021-06-24 14:59:46.000000', '2021-06-24 14:59:46.000000'),
(20, 1, '2021-06-24 15:03:36.000000', '2021-06-24 15:03:36.000000'),
(21, 1, '2021-06-24 15:03:41.000000', '2021-06-24 15:03:41.000000'),
(22, 1, '2021-06-25 00:03:38.000000', '2021-06-25 00:03:38.000000'),
(23, 1, '2021-06-25 00:04:56.000000', '2021-06-25 00:04:56.000000'),
(24, 1, '2021-06-25 00:58:03.000000', '2021-06-25 00:58:03.000000'),
(25, 1, '2021-06-25 00:59:24.000000', '2021-06-25 00:59:24.000000'),
(26, 1, '2021-06-25 01:07:23.000000', '2021-06-25 01:07:23.000000'),
(27, 1, '2021-06-25 02:45:09.000000', '2021-06-25 02:45:09.000000'),
(28, 1, '2021-06-25 02:50:14.000000', '2021-06-25 02:50:14.000000'),
(29, 1, '2021-06-25 02:52:01.000000', '2021-06-25 02:52:01.000000'),
(30, 1, '2021-06-25 02:54:45.000000', '2021-06-25 02:54:45.000000'),
(31, 1, '2021-06-25 02:55:13.000000', '2021-06-25 02:55:13.000000'),
(32, 1, '2021-06-25 02:55:48.000000', '2021-06-25 02:55:48.000000'),
(33, 1, '2021-06-25 02:55:59.000000', '2021-06-25 02:55:59.000000'),
(34, 1, '2021-06-25 02:56:39.000000', '2021-06-25 02:56:39.000000'),
(35, 1, '2021-06-25 03:00:56.000000', '2021-06-25 03:00:56.000000'),
(36, 1, '2021-06-25 04:25:20.000000', '2021-06-25 04:25:20.000000'),
(37, 1, '2021-06-25 04:27:40.000000', '2021-06-25 04:27:40.000000'),
(38, 1, '2021-06-25 04:28:56.000000', '2021-06-25 04:28:56.000000'),
(39, 1, '2021-06-25 04:32:30.000000', '2021-06-25 04:32:30.000000'),
(40, 1, '2021-06-25 04:52:46.000000', '2021-06-25 04:52:46.000000'),
(41, 1, '2021-06-25 04:53:21.000000', '2021-06-25 04:53:21.000000'),
(42, 1, '2021-06-25 04:55:05.000000', '2021-06-25 04:55:05.000000'),
(43, 1, '2021-06-25 05:02:54.000000', '2021-06-25 05:02:54.000000'),
(44, 1, '2021-06-25 05:05:40.000000', '2021-06-25 05:05:40.000000'),
(45, 1, '2021-06-25 05:24:27.000000', '2021-06-25 05:24:27.000000'),
(46, 1, '2021-06-25 05:32:05.000000', '2021-06-25 05:32:05.000000'),
(47, 1, '2021-06-25 05:32:58.000000', '2021-06-25 05:32:58.000000'),
(48, 1, '2021-06-25 05:33:01.000000', '2021-06-25 05:33:01.000000'),
(49, 1, '2021-06-25 05:33:17.000000', '2021-06-25 05:33:17.000000'),
(50, 1, '2021-06-25 05:33:52.000000', '2021-06-25 05:33:52.000000'),
(51, 1, '2021-06-25 05:34:15.000000', '2021-06-25 05:34:15.000000'),
(52, 1, '2021-06-25 06:00:17.000000', '2021-06-25 06:00:17.000000'),
(53, 1, '2021-06-25 09:57:09.000000', '2021-06-25 09:57:09.000000'),
(54, 1, '2021-06-25 09:58:40.000000', '2021-06-25 09:58:40.000000'),
(55, 1, '2021-06-25 10:19:44.000000', '2021-06-25 10:19:44.000000'),
(56, 1, '2021-06-25 10:44:27.000000', '2021-06-25 10:44:27.000000'),
(57, 1, '2021-06-25 10:56:25.000000', '2021-06-25 10:56:25.000000'),
(58, 1, '2021-06-25 10:56:42.000000', '2021-06-25 10:56:42.000000'),
(59, 1, '2021-06-25 10:56:46.000000', '2021-06-25 10:56:46.000000'),
(60, 1, '2021-06-25 10:56:54.000000', '2021-06-25 10:56:54.000000'),
(61, 1, '2021-06-25 11:32:12.000000', '2021-06-25 11:32:12.000000'),
(62, 1, '2021-06-25 11:36:37.000000', '2021-06-25 11:36:37.000000'),
(63, 1, '2021-06-25 11:37:00.000000', '2021-06-25 11:37:00.000000'),
(64, 1, '2021-06-25 11:37:12.000000', '2021-06-25 11:37:12.000000'),
(65, 1, '2021-06-25 11:37:33.000000', '2021-06-25 11:37:33.000000'),
(66, 1, '2021-06-25 11:37:47.000000', '2021-06-25 11:37:47.000000'),
(67, 1, '2021-06-25 11:40:17.000000', '2021-06-25 11:40:17.000000'),
(68, 1, '2021-06-25 11:40:45.000000', '2021-06-25 11:40:45.000000'),
(69, 1, '2021-06-25 11:40:52.000000', '2021-06-25 11:40:52.000000'),
(70, 1, '2021-06-25 11:43:00.000000', '2021-06-25 11:43:00.000000'),
(71, 1, '2021-06-25 11:43:22.000000', '2021-06-25 11:43:22.000000'),
(72, 1, '2021-06-25 11:45:12.000000', '2021-06-25 11:45:12.000000'),
(73, 1, '2021-06-25 11:52:40.000000', '2021-06-25 11:52:40.000000'),
(74, 1, '2021-06-25 11:52:43.000000', '2021-06-25 11:52:43.000000'),
(75, 1, '2021-06-25 11:53:45.000000', '2021-06-25 11:53:45.000000'),
(76, 1, '2021-06-25 11:55:24.000000', '2021-06-25 11:55:24.000000'),
(77, 1, '2021-06-25 11:56:08.000000', '2021-06-25 11:56:08.000000'),
(78, 1, '2021-06-25 11:57:08.000000', '2021-06-25 11:57:08.000000'),
(79, 1, '2021-06-25 11:57:10.000000', '2021-06-25 11:57:10.000000'),
(80, 1, '2021-06-25 11:59:58.000000', '2021-06-25 11:59:58.000000'),
(81, 1, '2021-06-25 12:01:18.000000', '2021-06-25 12:01:18.000000'),
(82, 1, '2021-06-25 12:05:06.000000', '2021-06-25 12:05:06.000000'),
(83, 1, '2021-06-25 12:05:40.000000', '2021-06-25 12:05:40.000000'),
(84, 1, '2021-06-25 12:05:43.000000', '2021-06-25 12:05:43.000000'),
(85, 1, '2021-06-25 12:08:36.000000', '2021-06-25 12:08:36.000000'),
(86, 1, '2021-06-25 12:09:16.000000', '2021-06-25 12:09:16.000000'),
(87, 1, '2021-06-25 12:09:26.000000', '2021-06-25 12:09:26.000000'),
(88, 1, '2021-06-25 12:09:42.000000', '2021-06-25 12:09:42.000000'),
(89, 1, '2021-06-25 12:09:49.000000', '2021-06-25 12:09:49.000000'),
(90, 1, '2021-06-25 12:14:22.000000', '2021-06-25 12:14:22.000000'),
(91, 1, '2021-06-25 12:16:44.000000', '2021-06-25 12:16:44.000000'),
(92, 1, '2021-06-25 12:18:19.000000', '2021-06-25 12:18:19.000000'),
(93, 1, '2021-06-25 12:22:25.000000', '2021-06-25 12:22:25.000000'),
(94, 1, '2021-06-25 12:24:52.000000', '2021-06-25 12:24:52.000000'),
(95, 1, '2021-06-25 12:32:49.000000', '2021-06-25 12:32:49.000000'),
(96, 1, '2021-06-25 12:33:07.000000', '2021-06-25 12:33:07.000000'),
(97, 1, '2021-06-25 12:42:54.000000', '2021-06-25 12:42:54.000000'),
(98, 1, '2021-06-25 12:50:03.000000', '2021-06-25 12:50:03.000000'),
(99, 1, '2021-06-25 12:52:55.000000', '2021-06-25 12:52:55.000000'),
(100, 1, '2021-06-25 12:56:57.000000', '2021-06-25 12:56:57.000000'),
(101, 1, '2021-06-25 13:18:39.000000', '2021-06-25 13:18:39.000000'),
(102, 1, '2021-06-25 13:35:57.000000', '2021-06-25 13:35:57.000000'),
(103, 1, '2021-06-25 13:46:10.000000', '2021-06-25 13:46:10.000000'),
(104, 1, '2021-06-25 13:57:34.000000', '2021-06-25 13:57:34.000000'),
(105, 1, '2021-06-25 14:04:33.000000', '2021-06-25 14:04:33.000000'),
(106, 1, '2021-06-25 14:08:42.000000', '2021-06-25 14:08:42.000000'),
(107, 1, '2021-06-25 14:14:53.000000', '2021-06-25 14:14:53.000000'),
(108, 1, '2021-06-25 14:19:52.000000', '2021-06-25 14:19:52.000000'),
(109, 1, '2021-06-25 14:20:06.000000', '2021-06-25 14:20:06.000000'),
(110, 1, '2021-06-25 14:41:44.000000', '2021-06-25 14:41:44.000000'),
(111, 1, '2021-06-25 14:41:59.000000', '2021-06-25 14:41:59.000000'),
(112, 1, '2021-06-25 14:44:30.000000', '2021-06-25 14:44:30.000000'),
(113, 1, '2021-06-25 14:45:39.000000', '2021-06-25 14:45:39.000000'),
(114, 1, '2021-06-25 14:45:42.000000', '2021-06-25 14:45:42.000000'),
(115, 1, '2021-06-25 14:45:58.000000', '2021-06-25 14:45:58.000000'),
(116, 1, '2021-06-26 00:44:05.000000', '2021-06-26 00:44:05.000000'),
(117, 1, '2021-06-26 00:44:21.000000', '2021-06-26 00:44:21.000000'),
(118, 1, '2021-06-26 00:44:51.000000', '2021-06-26 00:44:51.000000'),
(119, 1, '2021-06-26 00:45:19.000000', '2021-06-26 00:45:19.000000'),
(120, 1, '2021-06-26 00:45:39.000000', '2021-06-26 00:45:39.000000'),
(121, 1, '2021-06-26 02:54:02.000000', '2021-06-26 02:54:02.000000'),
(122, 1, '2021-06-26 04:42:29.000000', '2021-06-26 04:42:29.000000'),
(123, 1, '2021-06-26 04:50:15.000000', '2021-06-26 04:50:15.000000'),
(124, 1, '2021-06-26 04:55:38.000000', '2021-06-26 04:55:38.000000'),
(125, 1, '2021-06-26 04:57:15.000000', '2021-06-26 04:57:15.000000'),
(126, 1, '2021-06-26 04:58:08.000000', '2021-06-26 04:58:08.000000'),
(127, 1, '2021-06-26 04:58:23.000000', '2021-06-26 04:58:23.000000'),
(128, 1, '2021-06-26 04:59:09.000000', '2021-06-26 04:59:09.000000'),
(129, 1, '2021-06-26 04:59:33.000000', '2021-06-26 04:59:33.000000'),
(130, 1, '2021-06-26 05:01:58.000000', '2021-06-26 05:01:58.000000'),
(131, 1, '2021-06-26 05:10:31.000000', '2021-06-26 05:10:31.000000'),
(132, 1, '2021-06-26 05:10:37.000000', '2021-06-26 05:10:37.000000'),
(133, 1, '2021-06-26 05:10:45.000000', '2021-06-26 05:10:45.000000'),
(134, 1, '2021-06-26 05:11:22.000000', '2021-06-26 05:11:22.000000'),
(135, 1, '2021-06-26 05:12:15.000000', '2021-06-26 05:12:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `weight`, `menu_name`, `menu_name_bangla`, `link`, `link_bangla`, `created_at`, `updated_at`) VALUES
(3, 2, 'konnakotha', 'কন্যাকথা', '/', '', '2021-06-15 04:19:02', '2021-06-21 04:26:31'),
(7, 4, 'Training', 'প্রশিক্ষণ', '/', '/', '2021-06-21 13:19:07', '2021-06-22 08:34:13'),
(8, 5, 'Gallery', 'গ্যালারি', '/gallery', '/gallery_bn', '2021-06-22 08:40:02', '2021-06-22 08:40:08');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_28_075716_create_regions_table', 2),
(5, '2021_01_28_075937_create_organizations_table', 3),
(6, '2021_01_28_080302_create_projects_table', 4),
(7, '2021_01_28_081550_create_tasks_table', 5),
(8, '2021_01_28_082944_create_expenses_table', 6),
(9, '2021_01_28_083502_create_salaries_table', 7),
(10, '2021_01_28_084334_create_documents_table', 8),
(11, '2021_02_02_070642_create_programs_table', 9),
(12, '2021_02_03_055807_create_trainings_table', 10),
(13, '2021_02_03_110828_create_trainees_table', 11),
(14, '2021_02_03_200117_create_attendences_table', 12),
(15, '2021_02_04_054218_create_times_table', 13),
(16, '2021_05_01_203109_create_reliefs_table', 14),
(17, '2021_06_09_071427_create_categories_table', 15),
(18, '2021_06_09_075131_create_brands_table', 16),
(19, '2021_06_09_082938_create_banners_table', 17),
(20, '2021_06_09_110838_create_products_table', 18),
(21, '2021_06_13_103445_create_trans_table', 19),
(22, '2021_06_14_071456_create_registers_table', 20),
(23, '2021_06_15_063716_create_banners_table', 21),
(24, '2021_06_15_094716_create_menus_table', 22),
(25, '2021_06_15_105026_create_submenus_table', 23),
(26, '2021_06_17_064726_create_notices_table', 24),
(27, '2021_06_18_045609_create_districts_table', 25),
(28, '2021_06_18_055115_create_photos_table', 26),
(29, '2021_06_18_095135_create_vidos_table', 27),
(30, '2021_06_18_100217_create_shows_table', 28),
(31, '2021_06_18_112122_create_ambassadors_table', 29),
(32, '2021_06_18_154305_create_events_table', 30),
(33, '2021_06_19_115825_create_sectors_table', 31),
(34, '2021_06_19_131415_create_speeches_table', 32),
(35, '2021_06_20_071309_create_questions_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `date`, `name`, `notice_bangla`, `filename`, `created_at`, `updated_at`) VALUES
(2, '2021-06-17', 'samsung', '\r\nকেমন আছো', '1109085492.pdf', '2021-06-17 02:22:38', '2021-06-17 03:36:45'),
(3, '2021-06-26', 'Story of Konnakotha', 'সাইট টেস্টিং', '162464698613757339.pdf', '2021-06-25 12:49:46', '2021-06-25 12:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_date` date NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `date`, `status`, `del_date`, `price`, `first_name`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '2021-06-06', 'on_hold', '2021-06-06', '6500.00', '', '', '0', '', NULL, NULL),
(2, '2021-06-06', 'on_hold', '2021-06-06', '1135.00', '', '', '0', '', NULL, NULL),
(3, '2021-06-07', 'on_hold', '2021-06-07', '20.00', '', '', '0', '', NULL, NULL),
(4, '2021-06-07', 'on_hold', '2021-06-07', '1000.00', 'etetet', '5-9 Roslyn Street, 2011 Potts Point (NSW)', '+8801770137655', 'fuadhasanfahim.rko@gmail.com', NULL, NULL),
(5, '2021-06-09', 'on_hold', '2021-06-09', '540.00', 'Eisty Esraq', 'Test', '+8801770137655', 'esraq26552@gmail.com', NULL, NULL),
(6, '2021-06-10', 'on_hold', '2021-06-10', '270.00', 'Eisty Esraq', 'Red Fern Sydney', '+8801770137655', 'esraq26552@gmail.com', NULL, NULL),
(7, '2021-06-10', 'on_hold', '2021-06-10', '270.00', 'Eisty Esraq', 'test', '+8801770137655', 'test10@gmail.com', NULL, NULL),
(8, '2021-06-10', 'on_hold', '2021-06-10', '270.00', 'Eisty Esraq', 'Mirpur', '01770137655', 'Esraq.Huamyun@student.uts.edu.au', NULL, NULL),
(9, '2021-06-12', 'on_hold', '2021-06-12', '270.00', 'Eisty Esraq', 'Mirpur 13', '+8801770137655', 'fuadhasanfahim.rko@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `item_id`, `order_id`, `item_name`, `item_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Fency Dress', '1500.00', NULL, NULL),
(2, 2, 1, 'sniker', '1000.00', NULL, NULL),
(3, 2, 2, 'sniker', '1000.00', NULL, NULL),
(4, 6, 2, 'Bay', '135.00', NULL, NULL),
(5, 5, 3, 'samsung', '20.00', NULL, NULL),
(6, 2, 4, 'sniker', '1000.00', NULL, NULL),
(7, 3, 5, 'Test', '135.00', NULL, NULL),
(8, 3, 6, 'Test', '135.00', NULL, NULL),
(9, 3, 7, 'Test', '135.00', NULL, NULL),
(10, 3, 8, 'Test', '135.00', NULL, NULL),
(11, 4, 8, 'samsung', '135.00', NULL, NULL),
(12, 3, 9, 'Test', '135.00', NULL, NULL),
(13, 4, 9, 'samsung', '135.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('esraq26552@gmail.com', '$2y$10$jvaPDR48VBh1yWpoAApbve5MrPS0/IqCN4.sEn8meQeXdqfUPBkai', '2021-06-22 06:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_caption_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_caption_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `weight`, `photo_caption_english`, `photo_caption_bangla`, `filename`, `created_at`, `updated_at`) VALUES
(2, '82', 'kamungozi', 'কামুঙ্গজ', '1570362976.png', '2021-06-18 00:51:22', '2021-06-22 02:24:19'),
(3, '1', 'konnakotha', 'কন্যাকথা', '1624649751Consumer Decision Making Process2.png', '2021-06-25 13:35:51', '2021-06-25 13:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `brand_id`, `popular`, `offer`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'xl,l,xxl', '135', 'Men', '1623262575logo.png', 'Cats Eye', 'Yes', 'offer ongoing', '2021-06-09 12:16:15', '2021-06-09 12:16:15'),
(4, 'samsung', 'xl,l,xxl', '135', 'Men', '1623335710Screenshot (297).png', 'Serena', 'Yes', 'offer ongoing', '2021-06-10 08:35:10', '2021-06-10 08:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT 'উত্তর দেওয়া হবে ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `name`, `district`, `institution`, `class`, `phone`, `status`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 21, 'samsung', 'Dhaka', 'sg', '5', 1770137655, 1, '<p>Is cyber crime is a crime in Bangladesh</p>', '<p>Hello I AM eISTY</p>', '2021-06-20 01:49:44', '2021-06-20 04:27:38'),
(2, 21, 'samsung', 'Dhaka', 'sg', '5', 1770137655, 1, '<p>Who is the President of Iraq</p>', '<p>I don&#39;t know</p>', '2021-06-20 02:15:21', '2021-06-20 04:44:38'),
(3, 21, 'samsung', 'Dhaka', 'sg', '5', 1770137655, 1, '<p>heloo mavajf&nbsp; af</p>', '<p>hi i am cca</p>', '2021-06-20 02:17:53', '2021-06-21 10:29:02'),
(4, 21, 'samsung', 'Dhaka', 'sg', '5', 1770137655, 1, '<p>fgsdgasg</p>', 'উত্তর দেওয়া হবে ', '2021-06-20 02:19:39', '2021-06-20 02:19:39'),
(5, 21, 'Tamima', 'Dhaka', 'southpoint', '6', 1921799223, 1, '<p>What is shut down?</p>', '<p>Shutdown is noting but lockdown</p>', '2021-06-25 14:57:20', '2021-06-25 14:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(100) DEFAULT 0,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `district`, `phone`, `institution`, `status`, `class`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Eisty Esraq', 'rashmi@gmail.com', 'Cumilla', 177013765, 'sg', 0, 's', '1623656436large.png', '2021-06-14 01:40:36', '2021-06-14 01:40:36'),
(2, 'samsung', 'humayunesraq26552@gmail.com', 'Cumilla', 1770137655, 'sg', 1, 's', '16236574981756866261.jpg', '2021-06-14 01:58:18', '2021-06-14 01:58:18'),
(3, 'Eisty Esraq', 'test@gmail.com', 'Cumilla', 1770137655, 'sg', 1, 's', 'N/A', '2021-06-14 01:58:51', '2021-06-14 01:58:51'),
(5, 'Priyonti Priya', 'mdmahmudulhaque5@gmail.com', 'Cumilla', 1770137655, 'sg', 1, '5', '16240947141620904307relief.jpg', '2021-06-19 03:25:14', '2021-06-19 03:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `title`, `description`, `filename`, `link`, `created_at`, `updated_at`) VALUES
(2, 'email', '<p>info@cca.gov.bd</p>', NULL, NULL, '2021-06-19 12:32:31', '2021-06-22 08:19:22'),
(3, 'phone', '<p>+880 2 5500 6819</p>', NULL, NULL, '2021-06-22 08:12:02', '2021-06-22 08:19:58'),
(4, 'Our Mission', '<p>Ensuring secure transition of Information and eradicating cyber Crime through implementation of Digital Signature Certificate.</p>', NULL, NULL, '2021-06-22 09:17:50', '2021-06-22 09:23:45'),
(5, 'Our Vision', '<p>Ensuring Secure Cyber Space and ensuring secure transition of Information&nbsp;through implementation of Digital Signature Certificate.</p>', NULL, NULL, '2021-06-22 09:23:27', '2021-06-22 09:28:47'),
(6, 'Our Objectives', '<p>Making a secure cyber space in the country. Running Public Key Infrastructure (PKI) program within legal framework.&nbsp;</p>', NULL, NULL, '2021-06-22 09:31:34', '2021-06-22 09:35:00'),
(7, 'short description(home page)', '<p>Currenlty CCA is working to create cyber awareness among people of Bangladesh.Konnakotha is a programme of CCA which is designed for creating awareness among women regarding cyber security. We are working for achieving these objectives:</p>\r\n\r\n<ul>\r\n	<li>Help to make a secure cyber space in the country.</li>\r\n	<li>Running Public Key Infrastructure (PKI) program within legal framework.</li>\r\n	<li>Building Public Awareness in secure e-transaction</li>\r\n</ul>', NULL, NULL, '2021-06-22 09:39:13', '2021-06-22 09:39:13'),
(8, 'Division Covered', '<p>7</p>', NULL, NULL, '2021-06-22 09:47:52', '2021-06-22 09:47:52'),
(9, 'Zilla Covered', '<p>49</p>', NULL, NULL, '2021-06-22 09:48:12', '2021-06-22 09:48:35'),
(10, 'school', '<p>453</p>', NULL, NULL, '2021-06-22 09:48:47', '2021-06-22 09:48:47'),
(11, 'Trained Student', '<p>26580</p>', NULL, NULL, '2021-06-22 09:49:22', '2021-06-22 09:49:22'),
(12, 'Contact Us', '<p>ICT Tower&nbsp;(2nd Floor), Agargaon, Shere-Bangla Nagar, Dhaka-1207</p>\r\n\r\n<p>phone: +880 2 5500 6819</p>\r\n\r\n<p>Fax: +880 2 8181 711</p>\r\n\r\n<p>email:&nbsp;info@cca.gov.bd</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, '2021-06-22 11:29:34', '2021-06-22 11:37:33'),
(13, 'About us(DETAILS)', '<p><strong>Welcome to the&nbsp;</strong><strong>O</strong><strong>ffice of the Controller of Certifying Authorities (CCA)</strong></p>\r\n\r\n<p>The Office of the Controller of Certifying Authorities(CCA) is an organization under Information and Communication Technology Division of Ministry of Posts, Telecommunications and Information Technology. The Office of &nbsp;the Controller of Certifying Authorities(CCA) is established under the Information and Communication Technology (Amended) Act, 2006 &nbsp;on May in 2011. The Controller is the head of the office and he exercises his power and functions under the Information and Communication Technology (Amended) Act, 2006. A controller is appointed by the Government to supervise and control all Certifying Authorities of Electronic Signature in 2009. Since it is plausible and necessary to provide legal recognition &amp; security of Information and Communication Technology, the Government has passed the Information and Communication Technology (Amended) Act, 2006 by which Digital Signature is being introduced among the people of Bangladesh and Electronic Signatures, Records have been given legal recognition. National Information &amp; Communication Technology Policy- 2009 &nbsp;provides directions to introduce Digital Signature. Digital Signature is introduced in 2009 under the ICT Act, 2006 and it will gradually spread over the whole country. Under Section-8 of the ICT Act, 2006, the usage of Digital/ Electronic Signature and Records is recognized in all Government offices.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To materialize the vision 2021: Digital Bangladesh, the Government has taken several steps to the greater use of safe Information and Communication Technology. One of the initiatives taken by the Government to achieve the vision has been the introduction of electronic signature and development of Public Key Infrastructure(PKI) in the country. In 2011, the Controller of Certifying Authorities(CCA) provides licenses to be Certifying Authorities to&nbsp; 6(six) organizations. One important step for introduction of Digital Signature has been completed through the Root Key Generation Ceremony on April 18, 2012.</p>\r\n\r\n<p>Government intends to introduce digital signature in the country to reach the following objectives:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Paperless Government Correspondence</li>\r\n	<li>e-Government</li>\r\n	<li>e-Procurement</li>\r\n	<li>e-Commerce</li>\r\n	<li>Electronic Document Signing</li>\r\n	<li>Internet Banking using digital signature</li>\r\n	<li>Device and Server Signing</li>\r\n	<li>Preventing Cyber Crimes</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Today&rsquo;s world is more interconnected than ever before. Yet, for all its advantages, increased connectivity brings increased risk of high-tech crimes, including cyber-based terrorism, espionage, computer intrusions, and major cyber fraud since we are building our lives around our wired and wireless networks. Witnessing high trade of cyber crime, almost every country has some sort of laws against cyber crime or Information and Communication Technology (ICT) Act. Like other countries &nbsp;it is also being taken legal actions against cyber criminals by the Cyber Tribunal under this Information and Communication Technology (Amended) Act, 2006.</p>', NULL, NULL, '2021-06-22 12:01:30', '2021-06-22 12:01:30'),
(14, 'আমাদের ভিশন', '<p>নিরাপদ তথ্য প্রযুক্তির বিকাশ ।</p>', NULL, NULL, '2021-06-23 03:10:51', '2021-06-23 03:10:51'),
(15, 'আমাদের মিশন', '<p>ডিজিটাল স্বাক্ষর সার্টিফিকেট প্রবর্তনের মাধ্যমে নিরাপদ তথ্য আদান প্রদান নিশ্চিতকরণ এবং সাইবার অপরাধ দূরীকরণে জাতীয় ও আঞ্চলিক যৌথ উদ্যোগ প্রতিষ্ঠা ।</p>', NULL, NULL, '2021-06-23 03:11:47', '2021-06-23 03:11:47'),
(16, 'আমাদের উদ্দেশ্য', '<p>\r\nদেশে একটি নিরাপদ সাইবার স্পেস তৈরি করা। আইনী কাঠামোর মধ্যে পাবলিক কী অবকাঠামো (পিকেআই) প্রোগ্রাম চালানো।</p>', NULL, NULL, '2021-06-23 03:14:34', '2021-06-23 03:14:34'),
(17, 'about_us_bangla_short', '<p>ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের নিয়ন্ত্রকের কার্যালয় (সিসিএ) হলো ডাক, টেলিযোগাযোগ ও তথ্যপ্রযুক্তি মন্ত্রণালয়ের অধীন তথ্য ও যোগাযোগ প্রযুক্তি বিভাগের একটি সংস্থা। ২০১১ সালের মে মাসে তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ এর অধীন এ সংস্থা গঠিত হয়। এ সংস্থার প্রধান হলেন একজন নিয়ন্ত্রক যিনি সরকার কর্তৃক নিযুক্ত হন। সংস্থার প্রধান হিসাবে নিয়ন্ত্রক ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের কার্যাবলী তত্ত্বাবধান ও নিয়ন্ত্রণ এবং তাদের মধ্যে বিরোধ নিষ্পত্তিতে অগ্রণী ভূমিকা পালন করেন। দেশে তথ্য ও যোগাযোগ প্রযুক্তির দ্রুত অগ্রগতির ফলে তথ্য ও যোগাযোগ প্রযুক্তির আইনগত বৈধতা ও নিরপত্তা প্রদান করা সমীচীন ও প্রয়োজন, এ জন্য সরকার ২০০৬ সালে তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ পাস করে।এই আইনের মাধ্যমে ডিজিটাল স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ডের আইনগত স্বীকৃতি প্রদান করা হয়েছে। জাতীয় তথ্য ও যোগাযোগ প্রযুক্তি নীতিমালা- ২০০৯ এ ডিজিটাল স্বাক্ষর প্রবর্তনের নির্দেশনা দেয়া হয়েছে। ২০০৯ সালে দেশে ডিজিটাল স্বাক্ষর প্রবর্তনের কার্যক্রম শুরু করা হয় যা ধীরে ধীরে সমগ্র বাংলাদেশে ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের নিয়ন্ত্রকের কার্যালয় (সিসিএ) এর মাধ্যমে এ কার্যক্রম পরিচলিত হবে। তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ এর ধারা ৮ অনুযায়ী সকল সরকারী অফিসে ইলেক্ট্রনিক স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ড ব্যবহারের স্বীকৃতি প্রদান করা হয়েছে ফলে ধীরে ধীরে সকল সরকারী অফিসে ইলেক্ট্রনিক স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ডের ব্যবহার নিশ্চিত করা হবে।</p>', NULL, NULL, '2021-06-23 03:44:34', '2021-06-23 04:09:40'),
(18, 'about_us_bangla', '<p>ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের নিয়ন্ত্রকের কার্যালয় (সিসিএ) হলো ডাক, টেলিযোগাযোগ ও তথ্যপ্রযুক্তি মন্ত্রণালয়ের অধীন তথ্য ও যোগাযোগ প্রযুক্তি বিভাগের একটি সংস্থা। ২০১১ সালের মে মাসে তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ এর অধীন এ সংস্থা গঠিত হয়। এ সংস্থার প্রধান হলেন একজন নিয়ন্ত্রক যিনি সরকার কর্তৃক নিযুক্ত হন। সংস্থার প্রধান হিসাবে নিয়ন্ত্রক ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের কার্যাবলী তত্ত্বাবধান ও নিয়ন্ত্রণ এবং তাদের মধ্যে বিরোধ নিষ্পত্তিতে অগ্রণী ভূমিকা পালন করেন। দেশে তথ্য ও যোগাযোগ প্রযুক্তির দ্রুত অগ্রগতির ফলে তথ্য ও যোগাযোগ প্রযুক্তির আইনগত বৈধতা ও নিরপত্তা প্রদান করা সমীচীন ও প্রয়োজন, এ জন্য সরকার ২০০৬ সালে তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ পাস করে।এই আইনের মাধ্যমে ডিজিটাল স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ডের আইনগত স্বীকৃতি প্রদান করা হয়েছে। জাতীয় তথ্য ও যোগাযোগ প্রযুক্তি নীতিমালা- ২০০৯ এ ডিজিটাল স্বাক্ষর প্রবর্তনের নির্দেশনা দেয়া হয়েছে। ২০০৯ সালে দেশে ডিজিটাল স্বাক্ষর প্রবর্তনের কার্যক্রম শুরু করা হয় যা ধীরে ধীরে সমগ্র বাংলাদেশে ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের নিয়ন্ত্রকের কার্যালয় (সিসিএ) এর মাধ্যমে এ কার্যক্রম পরিচলিত হবে। তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ এর ধারা ৮ অনুযায়ী সকল সরকারী অফিসে ইলেক্ট্রনিক স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ড ব্যবহারের স্বীকৃতি প্রদান করা হয়েছে ফলে ধীরে ধীরে সকল সরকারী অফিসে ইলেক্ট্রনিক স্বাক্ষর ও ইলেক্ট্রনিক রেকর্ডের ব্যবহার নিশ্চিত করা হবে।</p>\r\n\r\n<p>ভিশন: ২১, ডিজিটাল বাংলাদেশের দিকে দেশকে সামনে এগিয়ে নেয়ার জন্য সরকার তথ্য প্রযুক্তির ব্যবহারের ব্যাপক প্রসারের জন্য বিভিন্ন পদক্ষেপ নিয়েছে। &nbsp;ভিশন: ২১ কে অর্জনের জন্য সরকার যা যা পদক্ষেপ নিয়েছে তাদের একটি হল দেশে ডিজিটাল স্বাক্ষর প্রবর্তন ও পাবলিক কী ইনফ্রাস্ট্রাকচারের (PKI) উন্নয়ন সাধন করা। ২০১১ সালে ইলেক্ট্রনিক স্বাক্ষর সার্টিফিকেট প্রদানকারী কর্তৃপক্ষের নিয়ন্ত্রকের কার্যালয় (সিসিএ) হতে ৬ টি প্রতিষ্ঠানকে সার্টিফায়িং অথরিটি (সিএ) লাইসেন্স প্রদান করা হয়।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>১৮ এপ্রিল ২০১২ সালে রুট কী জেনারেশন সেরিমনির মাধ্যমে দেশে ডিজিটাল স্বাক্ষর চালুকরণের অন্যতম ধাপ সম্পন্ন করা হয়েছে। সরকার নিম্নবর্ণিত লক্ষ্য বাস্তবায়নের জন্য দেশে ডিজিটাল স্বাক্ষর চালু করার সিদ্ধান্ত নিয়েছেঃ</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ১। পেপারলেস গভ:মেন্ট করেসপনডেন্স&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ২।&nbsp; ই- গভ:মেন্ট&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ৩। ই- কমার্স</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ৪। ই- প্রকিউরমেন্ট</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;৫। ইলেক্ট্রনিক ডকুমেন্ট সাইনিং</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ৬। ডিজিটাল স্বাক্ষর ব্যবহারের মাধ্যমে ইন্টারনেট ব্যাংকিং</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;৭। ডিভাইস ও সার্ভার সাইনিং</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;৮। সাইবার অপরাধ প্রতিরোধ</p>\r\n\r\n<p>পূর্বের চেয়ে আজকের পৃথিবীতে তথ্যপ্রযুক্তির ব্যাপক অগ্রগতির ফলে সবকিছুতে আরো বেশি আন্ত:সম্পর্ক গড়ে উঠেছে। তথ্যপ্রযুক্তির কল্যাণে মানুষ নানা ধরনের সুযোগ সুবিধা পাচ্ছে এবং কঠিন কাজ দ্রুত সমাধান করতে পারছে। কিন্তু পাশাপাশি সাইবার সন্ত্রাস বা কম্পিউটার ও অনলাইন ভিত্তিক নানা অপরাধের প্রবণতাও বেড়ে গেছে। এ সকল হুমকির প্রেক্ষিতে বিভিন্ন দেশ সাইবার অপরাধ প্রতিরোধে আইন প্রণয়ন করেছে। বাংলাদেশেও তথ্য ও যোগাযোগ প্রযুক্তি (সংশোধিত) আইন, ২০০৬ এর মাধ্যমে গঠিত সাইবার ট্রাইব্যুনাল দ্বারা সাইবার অপরাধীদের বিচার করা হচ্ছে।</p>', NULL, NULL, '2021-06-23 03:45:29', '2021-06-23 03:45:29'),
(19, 'FAQ English', '<p>1.What is konnakotha?</p>\r\n\r\n<p>Ans:Konnakotha is a web portal for the girls.</p>', NULL, NULL, '2021-06-24 13:20:23', '2021-06-24 13:20:23'),
(20, 'Publications', '<p>Hello world</p>', NULL, NULL, '2021-06-26 04:51:40', '2021-06-26 04:51:40'),
(21, 'School Programme', '<p>Hello testing going on</p>', NULL, NULL, '2021-06-26 04:56:44', '2021-06-26 04:56:44'),
(22, 'Training', '<p>Training Programme</p>', NULL, NULL, '2021-06-26 04:57:47', '2021-06-26 04:57:47'),
(23, 'Cyber Awareness', '<p>Cyber&nbsp;Awareness&nbsp;Cyber&nbsp;Awareness&nbsp;Cyber&nbsp;Awareness&nbsp;Cyber&nbsp;Awareness</p>', NULL, NULL, '2021-06-26 04:59:04', '2021-06-26 04:59:04'),
(24, 'Knowledge Sharing', '<p>Knowledge Sharing</p>', NULL, NULL, '2021-06-26 05:01:25', '2021-06-26 05:01:25'),
(25, 'Training of Trainers', '<p>Training of TrainersTraining of Trainers</p>', NULL, NULL, '2021-06-26 05:02:43', '2021-06-26 05:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `video_caption_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_caption_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `weight`, `video_caption_english`, `video_caption_bangla`, `source`, `created_at`, `updated_at`) VALUES
(2, 1, 'test', 'test', 'https://www.youtube.com/watch?v=D5LwEnjkEB4', '2021-06-18 04:19:15', '2021-06-21 11:31:32'),
(3, 15, 'test 43', 'test 98', 'https://www.youtube.com/watch?v=D5LwEnjkEB4', '2021-06-18 04:27:04', '2021-06-21 11:32:09'),
(4, 1, 'test', 'test 79', 'https://www.youtube.com/watch?v=a4zZYrKQPLI&list=RDa4zZYrKQPLI&start_radio=1', '2021-06-21 11:26:00', '2021-06-21 11:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

CREATE TABLE `speeches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speech_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speech_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `weight`, `name_english`, `name_bangla`, `designation_bangla`, `designation_english`, `speech_bangla`, `speech_english`, `filename`, `created_at`, `updated_at`) VALUES
(1, 2, 'MR Q', 'মিস্টার কিউ', 'পদবি', 'designation', 'জনসাধারণকে নিরাপদ তথ্য আদান প্রদানে সচেতন করা', 'Security Measures are to be increase', '982222447.jpg', '2021-06-19 08:01:19', '2021-06-22 10:49:56'),
(3, 1, 'MR Z', 'মিস্টার জেড', 'পদবি', 'designation', 'দেশে নিরাপদ তথ্য প্রযুক্তির বিকাশে সহায়তা করা', 'Ensuring secure transition of Information', '1265201297.png', '2021-06-19 08:51:50', '2021-06-22 10:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_bn` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `description_bn` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `type`, `title_en`, `title_bn`, `description_en`, `description_bn`, `filename`, `updated_at`, `created_at`) VALUES
(1, 'news', 'Trainers Training', 'Trainers Training', '<p>frgdgr</p>', '<p>hdhfg r</p>', '1624541158laravle.jpg', '2021-06-24 19:47:25.039276', '2021-06-24 17:46:10.686056'),
(2, 'news', 'Trainers Training', 'Trainers Training', '<p>frgdgr</p>', '<p>hdhfg r</p>', '1624542214laravle.jpg', '2021-06-24 13:50:22.000000', '2021-06-24 17:46:10.686056'),
(3, 'news', 'Hello', 'Trainers', '<p>hello</p>', '<p>hello</p>', '1624556775cyber.jpg', '2021-06-24 17:46:15.000000', '2021-06-24 11:46:15.000000'),
(4, 'news', 'news', 'Trainers', '<p>awards</p>', '<p>awardjhg</p>', '1624556975cover.png', '2021-06-24 17:49:35.000000', '2021-06-24 11:49:35.000000'),
(5, 'awards', 'Rahman', 'hangor', '<p>my namer iodgmpsd[jg</p>', '<p>কনটেন্ট টাইপ&nbsp;<br />\r\nটাইটেল(ইংলিশ)<br />\r\nটাইটেল(বাংলা)<br />\r\nবিস্তারিত(ইংলিশ)<br />\r\nবিস্তারিত(বাংলা)<br />\r\nছবি আপলোড করুন&nbsp;<br />\r\nকন্টেন্ট তৈরী&nbsp;<br />\r\nনিউজ লিস্ট<br />\r\nপুরস্কার talika&nbsp;<br />\r\n&nbsp;</p>', '1311685792.jpg', '2021-06-25 11:02:41.000000', '2021-06-25 11:02:41.733960'),
(6, 'awards', 'news', 'Trainers Training', '<p>hguighkljbh</p>', '<p>jhggiu</p>', '1624559109one.png', '2021-06-24 18:25:09.000000', '2021-06-24 12:25:09.000000'),
(7, 'awards', 'news', 'Trainers Training', '<p>hguighkljbh</p>', '<p>jhggiu</p>', '1624559195one.png', '2021-06-24 18:26:35.000000', '2021-06-24 12:26:35.000000');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `submenu_name`, `submenu_name_bangla`, `link`, `link_bangla`, `menu_id`, `created_at`, `updated_at`) VALUES
(5, 'About Us', 'আমাদের সম্পর্কে', '/about-us', '/about_us_bn', 3, '2021-06-21 04:30:04', '2021-06-22 12:39:21'),
(7, 'Notices', 'নোটিশ', 'notices', '/notice_bn', 3, '2021-06-21 04:34:38', '2021-06-22 12:39:43'),
(8, 'Documents', 'ডকুমেন্টস', 'documents', '/document_bn', 3, '2021-06-21 04:35:41', '2021-06-22 12:40:04'),
(9, 'District Ambassador', 'জেলা এম্বাসেডর', 'ambassadors_of_districts', 'ambassadors_of_districts', 3, '2021-06-21 13:31:40', '2021-06-22 12:45:43'),
(10, 'Training List', 'প্রশিক্ষণ তালিকা', '/trainings', '/trainiglist_bn', 7, '2021-06-22 08:37:15', '2021-06-22 12:55:09'),
(11, 'photo gallery', 'ফটোগ্যালারি', '/gallery', '/gallery_bn', 8, '2021-06-22 08:42:48', '2021-06-22 08:42:48'),
(12, 'video gallery', 'ভিডিও গ্যালারি', '/video_gallery', '/video_gallery_bn', 8, '2021-06-22 08:44:33', '2021-06-22 08:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `serial_no`, `name`, `mobile`, `nid`, `created_at`, `updated_at`) VALUES
(2, '1', 'Md. Mostafa', '01936-485352', '8243879023', '2021-06-13 04:51:52', '2021-06-13 04:51:52'),
(3, '2', 'Md. AzmalHossainNazib', '01955-006004', '6004991995', '2021-06-13 04:51:52', '2021-06-13 04:51:52'),
(4, '3', 'Mune Begum', '01318-090134', '8237297182', '2021-06-13 04:51:52', '2021-06-13 04:51:52'),
(5, '4', 'Ajgori', '01883-433286', '8247902698', '2021-06-13 04:51:52', '2021-06-13 04:51:52'),
(6, '5', 'Aisha Khatun', '01402-104669', '2363427309', '2021-06-13 04:51:52', '2021-06-13 04:51:52'),
(8, '1', 'Md. Mostafa', '01936-485352', '8243879023', '2021-06-13 05:07:51', '2021-06-13 05:07:51'),
(9, '2', 'Md. AzmalHossainNazib', '01955-006004', '6004991995', '2021-06-13 05:07:51', '2021-06-13 05:07:51'),
(10, '3', 'Mune Begum', '01318-090134', '8237297182', '2021-06-13 05:07:51', '2021-06-13 05:07:51'),
(11, '4', 'Ajgori', '01883-433286', '8247902698', '2021-06-13 05:07:51', '2021-06-13 05:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'bay',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `district`, `institution`, `class`, `image`, `email_verified_at`, `password`, `phone`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'ইশরাক', 'esraq26552@gmail.com', NULL, NULL, '5', '1080198349.jpg', NULL, '$2y$10$TD9bgTmwfA7eWAf4AVkDAew3ZB7ewcI4RFvFkzNz77UT34XO4Y3uy', 1621467151, 'super_admin', NULL, '2021-02-01 12:07:24', '2021-06-20 08:18:08'),
(10, 'Makhdum', 's.makhdum.u@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$gifaqgk6AM6JtfT85ric/OLCGEc5TScAdnYP3wle9yU22Yxj482s2', 1776064825, 'whef', NULL, '2021-02-01 22:50:52', '2021-02-09 01:49:27'),
(13, 'Eisty Esraq', 'hasinelma15471@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$XkXexxpKFg4p3K3nad8/HO2lDpvr5LXsnMwXsaGiYPV0Z7W2s6C7.', 1770137655, 'super_admin', NULL, '2021-06-09 04:42:00', '2021-06-09 04:42:00'),
(14, 'Eisty Esraq', 'rashmi@gmail.com', 'Cumilla', 'sg', 's', '1623656436large.png', NULL, '$2y$10$nbS37Qh./jSqzBInrh0D1e9aX6Z403t9eRRwMmuBTDqH6uKMq2vpy', 177013765, NULL, NULL, '2021-06-19 01:26:40', '2021-06-19 01:26:40'),
(17, 'Eisty Esraq', 'test@gmail.com', 'Cumilla', 'sg', 's', 'N/A', NULL, '$2y$10$iM4NMME99u3R./dKDemEw.Yr37Y0V.1SneKHe/nBIWJIYLThD9Un.', 1770137655, NULL, NULL, '2021-06-19 01:46:51', '2021-06-19 01:46:51'),
(19, 'Priyonti Priya', 'mdmahmudulhaque5@gmail.com', 'Cumilla', 'sg', '5', '16240947141620904307relief.jpg', NULL, '$2y$10$G5eJ2r8ZxhjxzNeCs4k6w.KcKVUIjNl8G5TnNuWEZwS86kwaxdTjC', 1770137655, 'user', NULL, '2021-06-19 03:25:37', '2021-06-19 03:25:37'),
(21, 'Tamima', 'humayunesraq26552@gmail.com', 'Dhaka', 'southpoint', '6', '1232721657.jpg', NULL, '$2y$10$di7kkLowExELCJG3MwjJm.vOOKe361ZD/PVrzmaMEvXSVWgF3gbEi', 1921799223, 'bay', 'uOH3MALuToUbKBVAFNRlHfF0VtdWaZeRFwGVa6EYzgD9ppIH6MFAdCtpPSgp', '2021-06-20 00:32:25', '2021-06-22 07:22:30'),
(24, 'User', 'user@gmail.com', NULL, NULL, NULL, '1624196642large.png', NULL, '$2y$10$9OmU4QKXhYlCD1eJOcq5B.8YJB1Ho5xTGDmHO1dnmkE2LoBrjGiXO', 1770137655, 'super_admin', NULL, '2021-06-20 07:44:02', '2021-06-20 07:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `vidos`
--

CREATE TABLE `vidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL,
  `video_caption_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_caption_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambassadors`
--
ALTER TABLE `ambassadors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hits`
--
ALTER TABLE `hits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vidos`
--
ALTER TABLE `vidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambassadors`
--
ALTER TABLE `ambassadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hits`
--
ALTER TABLE `hits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vidos`
--
ALTER TABLE `vidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
