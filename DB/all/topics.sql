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
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `category_id`, `subcategory_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Noun', 'A noun is a word that names something, such as a person, place, thing, or idea.', 1, 3, '1', '2022-08-14 03:50:01', '2022-08-15 04:42:50'),
(2, 'Parts of Speech', 'The Eight Parts of Speech.', 4, 1, '0', '2022-08-14 03:51:14', '2022-08-15 04:43:14'),
(3, 'Viva-Voice', 'English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.', 2, 2, '1', '2022-08-14 21:29:54', '2022-08-15 04:43:44'),
(4, 'History', 'Bengali language, an eastern Indo-Aryan language · The endonym of Bengal, a geographical and ethno-linguistic region in South Asia.', NULL, 1, '1', '2022-08-15 22:27:23', '2022-08-15 22:27:23'),
(5, 'ও আমার দেশের মাটি', 'English Version', NULL, 1, '1', '2022-08-17 03:35:11', '2022-08-17 03:35:11'),
(6, 'Chapter-2', 'English Version', NULL, 1, '1', '2022-08-17 03:56:25', '2022-08-17 03:56:25'),
(7, 'Chapter-1', 'English Version', NULL, 1, '1', '2022-08-17 03:58:45', '2022-08-17 03:58:45'),
(8, 'Introduction of html', 'IT Scholarship Programme', 6, 6, '1', '2022-08-17 04:23:15', '2022-08-17 04:26:51'),
(9, 'Introduction of JavaScript', 'Introduction of JavaScript', 6, 7, '1', '2022-08-29 12:36:20', '2022-08-29 13:58:20'),
(10, 'Introduction of CSS', 'Introduction of CSS', 6, 8, '1', '2022-08-29 13:21:16', '2022-08-29 13:57:58'),
(11, 'Introduction of Bootstrap', 'Introduction of Bootstrap', 6, 9, '1', '2022-08-29 13:21:30', '2022-08-29 13:57:35'),
(12, 'Introduction of PHP', 'Introduction of PHP', 6, 12, '1', '2022-08-29 13:21:54', '2022-08-29 14:00:01'),
(13, 'Introduction of Angular', 'Introduction of Angular', 6, 10, '1', '2022-08-29 13:39:27', '2022-08-29 14:00:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_category_id_foreign` (`category_id`),
  ADD KEY `topics_subcategory_id_foreign` (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
