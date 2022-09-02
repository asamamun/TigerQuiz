-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 09:32 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` set('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imran', 'imran@gmail.com', NULL, '1', '$2y$10$ycpUy8o49hsfn3Va.hG9DOKRlGQR9dG4lzdBNL9INF./e0Qq3ifsy', NULL, '2022-08-14 02:56:52', '2022-08-14 02:56:52'),
(2, 'LurePot', 'lurepot@gmail.com', NULL, '1', '$2y$10$nzghHAwSSZVAA03b78zCBugJeCoFePDKE0d/K3av19l8kb1CPCNTS', NULL, '2022-08-14 02:57:49', '2022-08-14 02:57:49'),
(3, 'Minar', 'minar@gmail.com', NULL, '3', '$2y$10$pck0pO004y7QLvXZu82UUeSgj3pCABF3yIeGQDm.BUcmdti23OcjG', NULL, '2022-08-14 02:58:26', '2022-08-14 02:58:26'),
(4, 'Admin', 'mamuncitiut@gmail.com', NULL, '2', '$2y$10$tCgB1FJaWp/7erC3kMmeLeSx1AKSkkNNG3Et3iio9KPiSMgv.TTKm', NULL, '2022-08-14 03:17:18', '2022-08-14 03:17:18'),
(6, 'Umer', 'umer@mail.com', NULL, '2', '$2y$10$Ulnjh4sco/YFM/PnB5MJ0OwGknq1CV2sNrQPomnbsWQtL.NaDcvFC', NULL, '2022-08-14 06:11:47', '2022-08-14 06:11:47'),
(7, 'Imran Hussain', 'imu@gmail.com', NULL, '2', '$2y$10$QF85zW3pJCMVhBMFMElf2Od3mJV.mMuwRwe.0la7AWkGxXNZpJph.', NULL, '2022-08-14 06:17:24', '2022-08-14 06:17:24'),
(8, 'Aman', 'aman@gmail.com', NULL, '3', '$2y$10$dflVp0LaZ7G4isIn8kWpe.H01F2JkJCpPQLkkTOfJydwTfJMUX6KW', NULL, '2022-08-14 06:34:58', '2022-08-14 06:34:58'),
(9, 'Imran Hussain', 'imranislamp@gmail.com', NULL, '2', '$2y$10$Z6T9PNSveHmZ5g5TPlXDjO61LUM/jNEHPztV2.5GTkZc09YAJWKj.', NULL, '2022-08-14 11:43:53', '2022-08-14 11:43:53'),
(10, 'Noor', 'noor@gmail.com', NULL, '2', '$2y$10$wcW0t/oBxkY9AOTqSmn8vu4W7fQ/MRLXq6dcHn/yWIFNCt/El3DCq', NULL, '2022-08-15 04:11:11', '2022-08-15 04:11:11'),
(11, 'Tarin', 'tarin@gmail.com', NULL, '1', '$2y$10$8.mQyiDFJ9dAsIqR30Iy8Ol4ZRL9MjaHZTXgiLumWlvJS15ZW34te', NULL, '2022-08-29 13:18:26', '2022-08-29 13:18:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
