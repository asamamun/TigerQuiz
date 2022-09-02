-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 10:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiger_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Class 5', 'English Version', '1', '2022-08-14 03:01:48', '2022-08-15 04:50:17'),
(2, 'Class 6', 'English Version 2', '1', '2022-08-14 03:46:48', '2022-08-15 04:50:25'),
(3, 'Class 7', 'English Version', '1', '2022-08-14 21:23:57', '2022-08-14 21:26:18'),
(4, 'Class 8', 'English Speaking', '1', '2022-08-14 21:27:37', '2022-08-29 13:51:26'),
(5, 'Class 9', 'NCERT Solutions for Class 9 for the subjects Maths, Science and Social Science.', '1', '2022-08-15 22:28:28', '2022-08-29 14:10:46'),
(6, 'WDPF', 'IT Scholarship Programme', '1', '2022-08-17 04:16:51', '2022-08-29 12:47:04'),
(7, 'Class 10', 'Class 10', '1', '2022-08-29 12:33:17', '2022-08-29 13:50:10'),
(8, 'Class 11', 'Class 11', '1', '2022-08-29 12:33:25', '2022-08-29 13:50:45'),
(9, 'Class 12', 'Class 12', '1', '2022-08-29 12:33:30', '2022-08-29 13:52:03'),
(10, 'BCS', 'BCS', '1', '2022-08-29 12:33:38', '2022-08-29 13:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
