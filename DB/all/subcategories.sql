-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 10:11 PM
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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `description`, `category_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', 'Bengali language', 1, '1', '2022-08-14 03:47:48', '2022-08-29 14:09:24'),
(2, 'Bangla', 'Bangla', 4, '1', '2022-08-14 03:48:11', '2022-08-29 14:07:10'),
(3, 'Mathematic', 'Karok and FT', 1, '0', '2022-08-14 21:25:49', '2022-08-15 02:28:56'),
(4, 'Mathematic', 'Mathematic', 4, '1', '2022-08-14 21:28:44', '2022-08-29 14:09:07'),
(5, 'Bangla', 'Bangla', 5, '1', '2022-08-15 22:29:07', '2022-08-29 14:12:09'),
(6, 'HTML', 'IT Scholarship Programme', 6, '1', '2022-08-17 04:20:07', '2022-08-17 04:20:07'),
(7, 'JavaScript', 'JavaScript', 6, '1', '2022-08-29 12:34:22', '2022-08-29 13:43:26'),
(8, 'CSS', 'CSS 3', 6, '1', '2022-08-29 12:34:32', '2022-08-29 13:44:16'),
(9, 'Bootstrap', 'Bootstrap', 6, '1', '2022-08-29 12:34:49', '2022-08-29 13:45:09'),
(10, 'Angular', 'Angular', 6, '1', '2022-08-29 12:35:01', '2022-08-29 13:47:19'),
(11, 'Laravel', 'Laravel', 6, '1', '2022-08-29 13:31:08', '2022-08-29 13:48:19'),
(12, 'PHP', 'PHP', 6, '1', '2022-08-29 13:59:40', '2022-08-29 13:59:40'),
(13, 'Bangla', 'Bangla', 2, '1', '2022-08-29 14:03:58', '2022-08-29 14:03:58'),
(14, 'English', 'English', 2, '1', '2022-08-29 14:04:11', '2022-08-29 14:04:11'),
(15, 'Bangla', 'Bangla', 3, '1', '2022-08-29 14:04:33', '2022-08-29 14:04:33'),
(16, 'English', 'English', 3, '1', '2022-08-29 14:04:49', '2022-08-29 14:04:49'),
(17, 'English', 'English', 4, '1', '2022-08-29 14:07:40', '2022-08-29 14:07:40'),
(18, 'English', 'English', 5, '1', '2022-08-29 14:12:37', '2022-08-29 14:12:37'),
(19, 'Science', 'Science', 5, '1', '2022-08-29 14:12:55', '2022-08-29 14:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
