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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` set('Male','Female','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardianname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardianemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardianphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodgroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `category_id`, `fullname`, `institute`, `batch`, `subject`, `designation`, `gender`, `bio`, `phone`, `address`, `yt`, `fb`, `in`, `guardianname`, `guardianemail`, `guardianphone`, `bloodgroup`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Akash Mahmud', 'GNSL', 'Gold', NULL, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '01735504608', 'Dhaka', '@rrayhan', '@rrayhan', '@rrayhan', 'Rayhan', 'rayhan@gmail.com', '01735504688', 'B+', 'Minar_33.png', '2022-08-14 03:04:22', '2022-08-14 03:04:22'),
(2, 1, NULL, 'Imran Islam', 'GNSL', NULL, 'PHP', 'Web Developer', 'Male', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'A+', 'Imran_11.png', '2022-08-14 03:12:11', '2022-08-15 19:08:00'),
(3, 2, NULL, 'Lure Pot', 'GNSL', NULL, 'PHP', 'Web Developer', 'Male', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'A+', 'LurePot_12.png', '2022-08-14 03:15:30', '2022-08-17 00:00:26'),
(4, 4, NULL, 'Abu Saleh Abdullah Al-Mamun', 'GNSL', NULL, 'Computer Science', 'Faculty', 'Male', 'Hi, I\'m @asamamun; I\'m interested in web solutions; I\'m currently teaching web application development; 💞️ I\'m looking to collaborate on projects.', '01735504898', 'Dhaka', '@mamuncitiut', '@mamuncitiut', '@mamuncitiut', NULL, NULL, NULL, 'A+', 'Admin_24.png', '2022-08-14 03:39:43', '2022-08-14 06:34:13'),
(5, 6, NULL, 'Apples Mahmud', 'GNSL', NULL, 'PHP', 'Web Developer', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01735504660', 'Dhaka', '@rrayhan', '@rrayhan', '@rrayhan', NULL, NULL, NULL, 'A+', '', '2022-08-14 06:15:41', '2022-08-14 06:15:41'),
(6, 9, NULL, 'Imran Hussain', 'GNSL', NULL, 'UI', 'WDPF', 'Male', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words that don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of the text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words, etc.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'B+', 'Imran Hussain_29.png', '2022-08-14 11:47:52', '2022-08-14 11:47:52'),
(7, 10, NULL, 'Noor Islam', 'GNSL', NULL, 'PHP', 'Web Developer', 'Female', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'O+', 'Noor_210.png', '2022-08-15 04:36:09', '2022-08-15 04:40:25'),
(8, 8, 1, 'Imran Islam', 'GNSL', 'Gold', NULL, NULL, 'Male', 'Biography', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', 'Rayhan', 'lurepot@gmail.com', '01735504660', 'O+', 'Aman_38.png', '2022-08-15 08:13:05', '2022-08-15 10:15:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`),
  ADD KEY `profiles_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
