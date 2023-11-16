-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 08:29 PM
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
-- Database: `datahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_id` int(255) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `organization_id`, `type`, `designation`, `address`, `region_id`, `filename`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'normaluser@gmaail.com', NULL, '$2y$10$NGus0zORLiaMCEuks8kzI.p.uHTy3oQ9lv6HRwioXB23lW0LRikQq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-31 02:36:15', '2021-01-31 02:36:15'),
(3, 'Eisty Esraq', 'humayunesraq26552@gmail.com', NULL, '$2y$10$vCuP.xhsamiPTGuuf3KLOuJVYJFyTZssFTc/TNzYPOsUJfdfI/O.i', NULL, NULL, 'bay', NULL, NULL, NULL, NULL, NULL, '2021-01-31 03:29:58', '2021-01-31 03:29:58'),
(4, 'ASAUP', 'asaup@gmail.com', NULL, '$2y$10$smjg6aWRUwlWoTgrpptOjOwJBHdaty0iPff5QN9K1nonpYOFBd3Nu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-31 03:49:50', '2021-01-31 03:49:50'),
(5, 'WHEF', 'whef@gmail.com', NULL, '$2y$10$HxUafgzRKjxr1AbHQMAtpepoWjNrX5pp/KLsj9PzYAwvcYVcfpkHW', NULL, NULL, 'whef', NULL, NULL, NULL, NULL, NULL, '2021-01-31 04:00:36', '2021-01-31 04:00:36'),
(6, 'Eisty Esraq', 'test10@gmail.com', NULL, '12345678', '01770137655', NULL, 'super_admin', 'National Consultant', '5-9 Roslyn Street, 2011 Potts Point (NSW)', NULL, '1612201702idol.jpg', NULL, '2021-02-01 11:48:22', '2021-02-01 11:48:22'),
(8, 'Eisty Esraq', 'esraq26552@gmail.com', NULL, '$2y$10$c4khvxNlFHcP0l8e9SFLNuUM3EsV9t0/aqDBCM9VUZFSJ45Y5c.be', '01770137655', 1, 'super_admin', 'National Consultant', 'lalkhan bazar', '1', '1612202844idol.jpg', NULL, '2021-02-01 12:07:24', '2021-02-01 12:07:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
