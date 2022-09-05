-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 05:41 AM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qid` bigint(20) UNSIGNED DEFAULT NULL,
  `qsid` bigint(20) UNSIGNED DEFAULT NULL,
  `gans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, 'BCS', 'BCS', '1', '2022-08-29 12:33:38', '2022-08-29 13:52:30'),
(11, 'General Knowledge', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', '1', '2022-09-03 05:05:11', '2022-09-03 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roomname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `leaderboards`
--

CREATE TABLE `leaderboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quizset_id` bigint(20) UNSIGNED DEFAULT NULL,
  `given_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submitted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderboards`
--

INSERT INTO `leaderboards` (`id`, `user_id`, `quizset_id`, `given_ans`, `submitted_at`, `marks`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '100/100', '(time: 10:25 minutes)', 100, '2022-09-01 01:11:48', '2022-09-01 01:11:48'),
(11, 2, 2, '99/100', '(time: 12:01 minutes)', 99, '2022-09-06 01:11:48', '2022-09-01 01:11:48'),
(12, 3, 2, '92/100', '(time: 11:25 minutes)', 92, '2022-09-08 01:11:48', '2022-09-01 01:11:48'),
(13, 4, 4, '88/100', '(time: 12:25 minutes)', 88, '2022-09-09 01:11:48', '2022-09-01 01:11:48'),
(14, 7, 3, '78/100', '(time: 11:29 minutes)', 78, '2022-09-02 01:11:48', '2022-09-01 01:11:48'),
(15, 6, 2, '90/100', '(time: 1:25 minutes)', 90, '2022-09-01 01:11:48', '2022-09-01 01:11:48'),
(16, 7, 1, '70/100', '(time: 1:25 minutes)', 70, '2022-09-03 01:11:48', '2022-09-01 01:11:48'),
(17, 8, 4, '60/100', '(time: 1:25 minutes)', 60, '2022-09-02 01:11:48', '2022-09-01 01:11:48'),
(18, 9, 2, '80/100', '(time: 1:25 minutes)', 80, '2022-09-04 01:11:48', '2022-09-01 01:11:48'),
(19, 10, 2, '70/100', '(time: 1:25 minutes)', 70, '2022-09-03 01:11:48', '2022-09-01 01:11:48');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_06_110407_create_categories_table', 1),
(6, '2022_08_06_110431_create_subcategories_table', 1),
(7, '2022_08_06_110455_create_topics_table', 1),
(8, '2022_08_06_110638_create_profiles_table', 1),
(9, '2022_08_06_110743_create_quizzes_table', 1),
(10, '2022_08_06_110828_create_quizsets_table', 1),
(11, '2022_08_06_110844_create_blogs_table', 1),
(12, '2022_08_06_110905_create_comments_table', 1),
(13, '2022_08_06_111040_create_classrooms_table', 1),
(15, '2022_09_04_071009_create_answers_table', 2),
(18, '2022_09_05_004857_create_leaderboards_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, 8, 1, 'Imran Islam', 'GNSL', 'Gold', NULL, NULL, 'Male', 'Biography', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', 'Rayhan', 'lurepot@gmail.com', '01735504660', 'O+', 'Aman_38.png', '2022-08-15 08:13:05', '2022-08-15 10:15:18'),
(9, 11, NULL, 'Tarin', 'IDB', NULL, 'all', 'Teacher', NULL, 'hi there', '0172389899898', 'mirpur dhaka', NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Tarin_111.png', '2022-09-03 05:01:14', '2022-09-03 05:01:14'),
(10, 11, NULL, 'Tarin', 'IDB', NULL, 'all', 'Teacher', NULL, 'hi there', '0172389899898', 'mirpur dhaka', NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Tarin_111.png', '2022-09-03 05:01:17', '2022-09-03 05:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `quizsets`
--

CREATE TABLE `quizsets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quizzes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stime` timestamp NULL DEFAULT NULL,
  `active` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizsets`
--

INSERT INTO `quizsets` (`id`, `name`, `title`, `quizzes`, `stime`, `active`, `user_id`, `category_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(1, 'Rational Numbers', 'MCQ Question', '116,117,118,119,120,121,122,123,124,125,126,127,129,130,131,132,131,133,134,135', NULL, NULL, 1, 4, 20, '2022-09-02 19:49:09', '2022-09-02 19:49:09'),
(2, 'Bootstrap MCQ', 'Class Test', '45,46,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63', NULL, NULL, 1, 6, 9, '2022-09-02 19:55:18', '2022-09-02 19:55:18'),
(3, 'General Knowledge Bangladesh', 'CT', '151,152,153,154,155,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167', NULL, NULL, 1, 11, 23, '2022-09-04 20:55:03', '2022-09-04 20:55:03'),
(4, 'General Knowledge International', 'CT', '191,192,193,194,195,196,197,198,200,201,202,203,204,205,206,207,208,209,210,211', NULL, NULL, 1, 11, 24, '2022-09-04 20:56:46', '2022-09-04 20:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` set('m','d','qi') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'm',
  `op1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `question`, `type`, `op1`, `op2`, `op3`, `op4`, `ans`, `qimage`, `user_id`, `category_id`, `subcategory_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 'Who is making the Web standards?', 'm', 'Google', 'Mozilla', 'The World Wide Web Consortium', 'Microsoft', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 22:36:13', '2022-09-04 05:51:37'),
(2, 'Choose the correct HTML element for the largest heading:', 'm', '&lt;h6&gt;', '&lt;h1&gt;', '&lt;heading&gt;', '&lt;head&gt;', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:50:29', '2022-09-04 05:51:37'),
(3, 'What is the correct HTML element for inserting a line break?', 'm', '&lt;break&gt;', '&lt;ib&gt;', '&lt;br&gt;', '&lt;b&gt;', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:51:24', '2022-09-04 05:51:37'),
(4, 'What is the correct HTML for adding a background color?', 'm', '&lt;body bg=&quot;yellow&quot;&gt;', '&lt;body style=&quot;background-color:yellow;&quot;&gt;', '&lt;background&gt;yellow&lt;/background&gt;', 'None of above', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:52:20', '2022-09-04 05:51:37'),
(5, 'Choose the correct HTML element to define important text', 'm', '&lt;strong&gt;', '&lt;b&gt;', '&lt;i&gt;', '&lt;important&gt;', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 22:53:21', '2022-09-04 05:51:37'),
(6, 'Choose the correct HTML element to define emphasized text', 'm', '&lt;italic&gt;', '&lt;i&gt;', '&lt;em&gt;', '&lt;y&gt;', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 22:57:11', '2022-09-04 05:51:37'),
(7, 'What is the correct HTML for creating a hyperlink?', 'm', 'A. &lt;a url=&quot;http://www.w3schools.com&quot;&gt;W3Schools.com&lt;/a&gt;', 'B. &lt;a href=&quot;http://www.w3schools.com&quot;&gt;W3Schools&lt;/a&gt;', 'C. &lt;a name=&quot;http://www.w3schools.com&quot;&gt;W3Schools.com&lt;/a&gt;', 'D. &lt;a&gt;http://www.w3schools.com&lt;/a&gt;', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 22:58:19', '2022-09-04 05:51:37'),
(8, 'Which character is used to indicate an end tag?', 'm', '/', '^', '*', '&lt;', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 22:59:21', '2022-09-04 05:51:37'),
(9, 'How can you open a link in a new tab/browser window?', 'm', '&lt;a href=&quot;url&quot; target=&quot;new&quot;&gt;', '&lt;a href=&quot;url&quot; new&gt;', '&lt;a href=&quot;url&quot; target=&quot;_blank&quot;&gt;', 'None of above', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:00:10', '2022-09-04 05:51:37'),
(10, 'Which of these elements are all &lt;table&gt; elements?', 'm', '&lt;table&gt;&lt;head&gt;&lt;tfoot&gt;', '&lt;thead&gt;&lt;body&gt;&lt;tr&gt;', '&lt;table&gt;&lt;tr&gt;&lt;tt&gt;', '&lt;table&gt;&lt;tr&gt;&lt;td&gt;', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:01:15', '2022-09-04 05:51:37'),
(11, 'Inline elements are normally displayed without starting a new line.', 'm', 'True', 'False', 'C.', 'D.', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:01:54', '2022-09-04 05:51:37'),
(12, 'How can you make a numbered list?', 'm', '&lt;list&gt;', '&lt;ol&gt;', '&lt;dl&gt;', '&lt;ul&gt;', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:02:48', '2022-09-04 05:51:37'),
(13, 'How can you make a bulleted list?', 'm', '&lt;ol&gt;', '&lt;list&gt;', '&lt;dl&gt;', '&lt;ul&gt;', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:05:16', '2022-09-04 05:51:37'),
(14, 'What is the correct HTML for making a checkbox?', 'm', '&lt;check&gt;', '&lt;input type=&quot;checkbox&quot;&gt;', '&lt;checkbox&gt;', '&lt;input type=&quot;check&quot;&gt;', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:06:08', '2022-09-04 05:51:37'),
(15, 'What is the correct HTML for making a text input field?', 'm', '&lt;input type=&quot;text&quot;&gt;', '&lt;textinput type=&quot;text&quot;&gt;', '&lt;input type=&quot;textfield&quot;&gt;', '&lt;textfield&gt;', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:06:59', '2022-09-04 05:51:37'),
(16, 'What is the correct HTML for making a drop-down list?', 'm', '&lt;input type=&quot;dropdown&quot;&gt;', '&lt;select&gt;', '&lt;input type=&quot;list&quot;&gt;', '&lt;list&gt;', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:08:02', '2022-09-04 05:51:37'),
(17, 'What is the correct HTML for making a text area?', 'm', '&lt;input type=&quot;textarea&quot;&gt;', '&lt;input type=&quot;textbox&quot;&gt;', '&lt;textarea&gt;', 'None of above', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:09:57', '2022-09-04 05:51:37'),
(18, 'What is the correct HTML for inserting an image?', 'm', '&lt;image src=&quot;image.gif&quot; alt=&quot;MyImage&quot;&gt;', '&lt;img alt=&quot;MyImage&quot;&gt;image.gif&lt;/img&gt;', '&lt;img src=&quot;image.gif&quot; alt=&quot;MyImage&quot;&gt;', '&lt;img href=&quot;image.gif&quot; alt=&quot;MyImage&quot;&gt;', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:11:09', '2022-09-04 05:51:37'),
(19, 'What is the correct HTML for inserting a background image?', 'm', '&lt;background img=&quot;background.gif&quot;&gt;', '&lt;body style=&quot;background-image:url(background.gif)&quot;&gt;', '&lt;body bg=&quot;background.gif&quot;&gt;', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:11:53', '2022-09-04 05:51:37'),
(20, 'An &lt;iframe&gt; is used to display a web page within a web page.', 'm', 'True', 'There is no such thing as an &lt;iframe&gt;', 'C. False', 'None of above', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:12:34', '2022-09-04 05:51:37'),
(21, 'HTML comments start with &lt;!-- and end with --&gt;', 'm', 'False', 'True', 'C.', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:13:13', '2022-09-04 05:51:37'),
(22, 'Block elements are normally displayed without starting a new line.', 'm', 'True', 'False', 'C.', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:13:48', '2022-09-04 05:51:37'),
(23, 'Which HTML element defines the title of a document?', 'm', '&lt;head&gt;', '&lt;meta&gt;', '&lt;title&gt;', 'None of above', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:14:37', '2022-09-04 05:51:37'),
(24, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'm', 'longdesc', 'src', 'title', 'alt', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:15:39', '2022-09-04 05:51:37'),
(25, 'What does CSS stand for?', 'm', 'Computer Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Creative Style Sheets', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:16:09', '2022-09-04 05:51:37'),
(26, 'What is the correct HTML for referring to an external style sheet?', 'm', 'A. &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mystyle.css&quot;&gt;', 'B. &lt;stylesheet&gt;mystyle.css&lt;/stylesheet&gt;', 'C. &lt;style src=&quot;mystyle.css&quot;&gt;', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:17:08', '2022-09-04 05:51:37'),
(27, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'm', 'A. In the &lt;head&gt; section', 'B. In the &lt;body&gt; section', 'C. At the end of the document', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:18:01', '2022-09-04 05:51:37'),
(28, 'Which HTML tag is used to define an internal style sheet?', 'm', 'A. &lt;script&gt;', 'B. &lt;css&gt;', 'C. &lt;style&gt;', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:18:50', '2022-09-04 05:51:37'),
(29, 'Which HTML attribute is used to define inline styles?', 'm', 'A. class', 'B. font', 'C. styles', 'D. style', 'op4', NULL, 11, 6, 8, 10, '2022-08-22 04:20:05', '2022-09-04 05:51:37'),
(30, 'Which is the correct CSS syntax?', 'm', 'A. {body:color=black;}', 'B. body {color: black;}', 'C. body:color=black;', 'D. {body;color:black;}', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:21:04', '2022-09-04 05:51:37'),
(31, 'How do you insert a comment in a CSS file?', 'm', 'A. // this is a comment', 'B. &#039; this is a comment', '/* this is a comment */', 'D. // this is a comment //', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:22:42', '2022-09-04 05:51:37'),
(32, 'Which property is used to change the background color?', 'm', 'A. bgcolor', 'B. background-color', 'C. color', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:23:28', '2022-09-04 05:51:37'),
(33, 'How do you add a background color for all &lt;h1&gt; elements?', 'm', 'A. h1.all {background-color:#FFFFFF;}', 'B. all.h1 {background-color:#FFFFFF;}', 'C. h1 {background-color:#FFFFFF;}', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:24:34', '2022-09-04 05:51:37'),
(34, 'Which CSS property is used to change the text color of an element?', 'm', 'A. text-color', 'B. color', 'C. fgcolor', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:25:25', '2022-09-04 05:51:37'),
(35, 'Which CSS property controls the text size?', 'm', 'A. font-size', 'B. font-style', 'C. text-size', 'D. text-style', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:27:31', '2022-09-04 05:51:37'),
(36, 'What is the correct CSS syntax for making all the &lt;p&gt; elements bold?', 'm', 'A. &lt;p style=&quot;font-size:bold;&quot;&gt;', 'B. p {font-weight:bold;}', 'C. p {text-size:bold;}', 'D. &lt;p style=&quot;text-size:bold;&quot;&gt;', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:28:32', '2022-09-04 05:51:37'),
(37, 'How do you display hyperlinks without an underline?', 'm', 'A. a {text-decoration:none;}', 'B. a {text-decoration:no-underline;}', 'C. a {underline:none;}', 'D. a {decoration:no-underline;}', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:29:43', '2022-09-04 05:51:37'),
(38, 'How do you make each word in a text start with a capital letter?', 'm', 'A. transform:capitalize', 'B. text-style:capitalize', 'C. text-transform:capitalize', 'D. You can&#039;t do that with CSS', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:30:45', '2022-09-04 05:51:37'),
(39, 'Which property is used to change the font of an element?', 'm', 'A. font-weight', 'B. font-family', 'C. font-style', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:31:31', '2022-09-04 05:51:37'),
(40, 'How do you make the text bold?', 'm', 'A. style:bold;', 'B. font:bold;', 'C. font-weight:bold;', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:32:37', '2022-09-04 05:51:37'),
(41, 'How do you display a border like this:\r\n\r\nThe top border = 10 pixels\r\nThe bottom border = 5 pixels\r\nThe left border = 20 pixels\r\nThe right border = 1pixel?', 'm', 'A. border-width:5px 20px 10px 1px;', 'B. border-width:10px 5px 20px 1px;', 'C. border-width:10px 20px 5px 1px;', 'D. border-width:10px 1px 5px 20px;', 'op4', NULL, 11, 6, 8, 10, '2022-08-22 04:33:56', '2022-09-04 05:51:37'),
(42, 'Which property is used to change the left margin of an element?', 'm', 'A. margin-left', 'B. padding-left', 'C. indent', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:34:57', '2022-09-04 05:51:37'),
(43, 'When using the padding property; are you allowed to use negative values?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:35:36', '2022-09-04 05:51:37'),
(44, 'How do you make a list that lists its items with squares?', 'm', 'A. list-type: square;', 'B. list: square;', 'C.list-style-type: square;', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:36:28', '2022-09-04 05:51:37'),
(45, 'The .container class provides a full width container, spanning the entire width of the screen', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:43:04', '2022-09-04 05:51:37'),
(46, 'Which class provides a responsive fixed width container?', 'm', 'A. .container-fluid', 'B. .container-responsive', 'C. .container-fixed', 'D. .container', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:44:08', '2022-09-04 05:51:37'),
(47, 'Which contextual class is used to create an orange text color?', 'm', 'A. .bg-warning', 'B. .txt-orange', 'C. .text-warning', 'D. .txt-warning', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:45:05', '2022-09-04 05:51:37'),
(48, 'The Bootstrap grid system is based on how many columns?', 'm', 'A. 12', 'B. 3', 'C. 9', 'D. 6', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:45:48', '2022-09-04 05:51:37'),
(49, 'Which class adds zebra-stripes to a table?', 'm', 'A. .table-bordered', 'B. .table-striped', 'C. .table-zebra', 'D. .even and .odd', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:46:45', '2022-09-04 05:51:37'),
(50, 'Which class shapes an image to a circle?', 'm', 'A. .img-rounded', 'B. .rounded-circle', 'C. .img-round', 'D. .img-circle', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:47:36', '2022-09-04 05:51:37'),
(51, 'Which class is used to create a big box for calling extra attention?', 'm', 'A. .jumbotron', 'B. .bigbox', 'C. There is no such class', 'D. .container', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:48:24', '2022-09-04 05:51:37'),
(52, 'Which class is used to create a button group?', 'm', 'A. .btn-group', 'B. .group-btn', 'C. .group-button', 'D. .button-group', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:49:26', '2022-09-04 05:51:37'),
(53, 'Which button class is used to create a large button?', 'm', 'A. .btn-large', 'B. .btn-l2', 'C. .btn-l', 'D. .btn-lg', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:50:17', '2022-09-04 05:51:37'),
(54, 'Which class is used to create a badge?', 'm', 'A. .label-badge', 'B. .badge-label', 'C. .badge', 'D. .badge-item', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:51:06', '2022-09-04 05:51:37'),
(55, 'Which class is used to create a loader?', 'm', 'A. .spinner-border', 'B. .spinner', 'C. .spinner-loader', 'D. .loader', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:52:09', '2022-09-04 05:51:37'),
(56, 'Which class is used to create a basic pagination?', 'm', 'A. .navigation', 'B. .pages', 'C. .page', 'D. .pagination', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:52:54', '2022-09-04 05:51:37'),
(57, 'Which class is used to create a basic list group?', 'm', 'A. .grouped-list', 'B. .list-group', 'C. .group-list', 'D.', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:53:35', '2022-09-04 05:51:37'),
(58, 'Which class adds a heading to a card?', 'm', 'A. .card-header', 'B. .card-head', 'C. .card-footer', 'D. .card-heading', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:54:22', '2022-09-04 05:51:37'),
(59, 'Which class indicates a dropdown menu?', 'm', 'A. .dropdown-list', 'B. .select', 'C. .dropdown', 'D.', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:55:20', '2022-09-04 05:51:37'),
(60, 'Which class is used to create a vertical navigation bar?', 'm', 'A. .navbar navbar-vertical', 'B. .navbar', 'C. .navbar-inverse', 'D. .navbar-vertical', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:56:25', '2022-09-04 05:51:37'),
(61, 'Which component is used to cycle through elements, like a slideshow?', 'm', 'A. Scrollspy', 'B. Slideshow', 'C. Orbit', 'D. Carousel', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:57:17', '2022-09-04 05:51:37'),
(62, 'Which contextual class indicates a succesful or positive action?', 'm', 'A. .bg-warning', 'B. .bg-primary', 'C. .bg-success', 'D. .bg-info', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:58:08', '2022-09-04 05:51:37'),
(63, 'Which contextual class indicates a dangerous or potentially negative action?', 'm', 'A. .bg-danger', 'B. .bg-info', 'C. .bg-dark', 'D. .bg-primary', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:58:59', '2022-09-04 05:51:37'),
(64, 'Which class indicates uppercased text?', 'm', 'A. .text-capitalize', 'B. .ucase', 'C. .text-uppercase', 'D. .uppercase', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:59:50', '2022-09-04 05:51:37'),
(65, 'Inside which HTML element do we put the JavaScript?', 'm', 'A. &lt;js&gt;', 'B. &lt;javascript&gt;', 'C. &lt;script&gt;', 'D. &lt;scripting&gt;', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:02:33', '2022-09-04 05:51:37'),
(66, 'What is the correct JavaScript syntax to change the content of the HTML element below?\r\n&lt;p id=&quot;demo&quot;&gt;This is a demonstration.&lt;/p&gt;', 'm', 'A. document.getElement(&quot;p&quot;).innerHTML = &quot;Hello World!&quot;;', 'B. document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello World!&quot;;', 'C. document.getElementByName(&quot;p&quot;).innerHTML = &quot;Hello World!&quot;;', 'D. #demo.innerHTML = &quot;Hello World!&quot;;', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:03:41', '2022-09-04 05:51:37'),
(67, 'Where is the correct place to insert a JavaScript?', 'm', 'A. The &lt;body&gt; section', 'B. The &lt;head&gt; section', 'C. Both the &lt;head&gt; section and the &lt;body&gt; section are correct', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:04:39', '2022-09-04 05:51:37'),
(68, 'What is the correct syntax for referring to an external script called &quot;xxx.js&quot;?', 'm', 'A. &lt;script src=&quot;xxx.js&quot;&gt;', 'B. &lt;script name=&quot;xxx.js&quot;&gt;', 'C. &lt;script href=&quot;xxx.js&quot;&gt;', 'D.', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:05:25', '2022-09-04 05:51:37'),
(69, 'The external JavaScript file must contain the &lt;script&gt; tag.', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:06:40', '2022-09-04 05:51:37'),
(70, 'How do you write &quot;Hello World&quot; in an alert box?', 'm', 'A. msgBox(&quot;Hello World&quot;);', 'B. alertBox(&quot;Hello World&quot;);', 'C. msg(&quot;Hello World&quot;);', 'D. alert(&quot;Hello World&quot;);', 'op4', NULL, 11, 6, 7, 9, '2022-08-22 05:07:45', '2022-09-04 05:51:37'),
(71, 'How do you create a function in JavaScript?', 'm', 'A. function:myFunction()', 'B. function = myFunction()', 'C. function myFunction()', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:08:29', '2022-09-04 05:51:37'),
(72, 'How do you call a function named &quot;myFunction&quot;?', 'm', 'A. myFunction()', 'B. call myFunction()', 'C. call function myFunction()', 'D.', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:09:14', '2022-09-04 05:51:37'),
(73, 'How to write an IF statement in JavaScript?', 'm', 'A. if i = 5 then', 'B. if (i == 5)', 'C. if i = 5', 'D. if i == 5 then', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:10:13', '2022-09-04 05:51:37'),
(74, 'How to write an IF statement for executing some code if &quot;i&quot; is NOT equal to 5?', 'm', 'A. if (i != 5)', 'B. if (i &lt;&gt; 5)', 'C. if i &lt;&gt; 5', 'D. if i =! 5 then', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:11:02', '2022-09-04 05:51:37'),
(75, 'How does a WHILE loop start?', 'm', 'A. while (i &lt;= 10; i++)', 'B. while i = 1 to 10', 'C. while (i &lt;= 10)', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:11:48', '2022-09-04 05:51:37'),
(76, 'What does PHP stand for?', 'm', 'A. Personal Hypertext Processor', 'B. PHP: Hypertext Preprocessor', 'C. Private Home Page', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 06:58:45', '2022-09-04 05:51:37'),
(77, 'PHP server scripts are surrounded by delimiters, which?', 'm', 'A. &lt;?php&gt;...&lt;/?&gt;', 'B. &lt;&amp;&gt;...&lt;/&amp;&gt;', 'C. &lt;script&gt;...&lt;/script&gt;', 'D. &lt;?php...?&gt;', 'null', NULL, 11, 6, 10, 12, '2022-08-22 06:59:33', '2022-09-04 05:51:37'),
(78, 'How do you write &quot;Hello World&quot; in PHP', 'm', 'A. &quot;Hello World&quot;;', 'B. echo &quot;Hello World&quot;', 'C. Document.Write(&quot;Hello World&quot;);', 'D.', 'null', NULL, 11, 6, 10, 12, '2022-08-22 07:00:12', '2022-09-04 05:51:37'),
(79, 'All variables in PHP start with which symbol?', 'm', 'A. $', 'B. &amp;', 'C. !', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:00:56', '2022-09-04 05:51:37'),
(80, 'What is the correct way to end a PHP statement?', 'm', 'A. &lt;/php&gt;', 'B. New line', 'C. ;', 'D. ,', 'op3', NULL, 11, 6, 10, 12, '2022-08-22 07:01:47', '2022-09-04 05:51:37'),
(81, 'The PHP syntax is most similar to:', 'm', 'A. JavaScript', 'B. Perl and C', 'C. VBScript', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:02:56', '2022-09-04 05:51:37'),
(82, 'How do you get information from a form that is submitted using the &quot;get&quot; method?', 'm', 'A. $_GET[];', 'B. Request.Form;', 'C. Request.QueryString;', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:04:01', '2022-09-04 05:51:37'),
(83, 'When using the POST method, variables are displayed in the URL:', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:04:35', '2022-09-04 05:51:37'),
(84, 'In PHP you can use both single quotes ( &#039; &#039; ) and double quotes ( &quot; &quot; ) for strings:', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:05:12', '2022-09-04 05:51:37'),
(85, 'Include files must have the file extension &quot;.inc&quot;', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:05:51', '2022-09-04 05:51:37'),
(86, 'What is the correct way to include the file &quot;time.inc&quot; ?', 'm', 'A. &lt;?php include &quot;time.inc&quot;; ?&gt;', 'B. &lt;!-- include file=&quot;time.inc&quot; --&gt;', 'C. &lt;?php include file=&quot;time.inc&quot;; ?&gt;', 'D. &lt;?php include:&quot;time.inc&quot;; ?&gt;', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:06:45', '2022-09-04 05:51:37'),
(87, 'What is the correct way to create a function in PHP?', 'm', 'A. function myFunction()', 'B. create myFunction()', 'C. new_function myFunction()', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:08:19', '2022-09-04 05:51:37'),
(88, 'What is the correct way to open the file &quot;time.txt&quot; as readable?', 'm', 'A. open(&quot;time.txt&quot;,&quot;read&quot;);', 'B. fopen(&quot;time.txt&quot;,&quot;r+&quot;)', 'C. open(&quot;time.txt&quot;);', 'D. fopen(&quot;time.txt&quot;,&quot;r&quot;);', 'null', NULL, 11, 6, 10, 12, '2022-08-22 07:09:24', '2022-09-04 05:51:37'),
(89, 'PHP allows you to send emails directly from a script', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:10:13', '2022-09-04 05:51:37'),
(90, 'Which superglobal variable holds information about headers, paths, and script locations?', 'm', 'A. $_SESSION', 'B. $_GET', 'C. $_SERVER', 'D. $GLOBALS', 'op3', NULL, 11, 6, 10, 12, '2022-08-22 07:11:14', '2022-09-04 05:51:37'),
(91, 'What is the correct way to add 1 to the $count variable?', 'm', 'A. count++;', 'B. $count++;', 'C. $count =+1', 'D. ++count', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:12:14', '2022-09-04 05:51:37'),
(92, 'What is a correct way to add a comment in PHP?', 'm', 'A. &lt;comment&gt;...&lt;/comment&gt;', 'B. &lt;!--...--&gt;', 'C. *\\...\\*', 'D. /*...*/', 'op4', NULL, 11, 6, 10, 12, '2022-08-22 07:13:16', '2022-09-04 05:51:37'),
(93, 'PHP can be run on Microsoft Windows IIS(Internet Information Server):', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:14:30', '2022-09-04 05:51:37'),
(94, 'The die() and exit() functions do the exact same thing.', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:15:26', '2022-09-04 05:51:37'),
(95, 'Which one of these variables has an illegal name?', 'm', 'A. $my-Var', 'B. $myVar', 'C. $my_Var', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:16:13', '2022-09-04 05:51:37'),
(96, 'Which of the following is correct?', 'm', 'A. jQuery is a JavaScript Library', 'B. jQuery is a JSON Library', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:21:24', '2022-09-04 05:51:37'),
(97, 'jQuery uses CSS selectors to select elements?', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:21:55', '2022-09-04 05:51:37'),
(98, 'Which sign does jQuery use as a shortcut for jQuery?', 'm', 'A. the ? Sign', 'B. the % sign', 'C. the $ sign', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:22:44', '2022-09-04 05:51:37'),
(99, 'Look at the following selector: $(&quot;div&quot;). What does it select?', 'm', 'A. The first div element', 'B. All div elements', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:23:27', '2022-09-04 05:51:37'),
(100, 'Is jQuery a library for client scripting or server scripting?', 'm', 'A. Client scripting', 'B. Server scripting', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:24:13', '2022-09-04 05:51:37'),
(101, 'Is it possible to use jQuery together with AJAX?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:24:50', '2022-09-04 05:51:37'),
(102, 'The jQuery html() method works for both HTML and XML documents', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:25:21', '2022-09-04 05:51:37'),
(103, 'What is the correct jQuery code to set the background color of all p elements to red?', 'm', 'A. $(&quot;p&quot;).layout(&quot;background-color&quot;,&quot;red&quot;);', 'B. $(&quot;p&quot;).manipulate(&quot;background-color&quot;,&quot;red&quot;);', 'C. $(&quot;p&quot;).css(&quot;background-color&quot;,&quot;red&quot;);', 'D. $(&quot;p&quot;).style(&quot;background-color&quot;,&quot;red&quot;);', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:26:34', '2022-09-04 05:51:37'),
(104, 'With jQuery, look at the following selector: $(&quot;div.intro&quot;). What does it select?', 'm', 'A. All div elements with id=&quot;intro&quot;', 'B. The first div element with class=&quot;intro&quot;', 'C. The first div element with id=&quot;intro&quot;', 'D. All div elements with class=&quot;intro&quot;', 'op4', NULL, 11, 6, 11, 13, '2022-08-22 07:28:04', '2022-09-04 05:51:37'),
(105, 'Which jQuery method is used to hide selected elements?', 'm', 'A. display(none)', 'B.visible(false)', 'C. hide()', 'D.hidden()', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:29:04', '2022-09-04 05:51:38'),
(106, 'Which jQuery method is used to set one or more style properties for selected elements?', 'm', 'A. style()', 'B. css()', 'C. html()', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:29:50', '2022-09-04 05:51:38'),
(107, 'Which jQuery method is used to perform an asynchronous HTTP request?', 'm', 'A. jQuery.ajaxSetup()', 'B. jQuery.ajaxAsync()', 'C. jQuery.ajax()', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:30:33', '2022-09-04 05:51:38'),
(108, 'What is the correct jQuery code for making all div elements 100 pixels high?', 'm', 'A. $(&quot;div&quot;).height(100)', 'B. $(&quot;div&quot;).yPos(100)', 'C. $(&quot;div&quot;).height=&quot;100&quot;', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:31:22', '2022-09-04 05:51:38'),
(109, 'Which statement is true?', 'm', 'A. To use jQuery, you do not have to do anything. Most browsers (Internet Explorer, Chrome, Firefox and Opera) have the jQuery library built in the browser', 'B. To use jQuery, you must buy the jQuery library at www.jquery.com', 'C. To use jQuery, you can refer to a hosted jQuery library at Google', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:32:08', '2022-09-04 05:51:38'),
(110, 'What scripting language is jQuery written in?', 'm', 'A. VBScript', 'B. C#', 'C. C++', 'D. JavaScript', 'op4', NULL, 11, 6, 11, 13, '2022-08-22 07:32:57', '2022-09-04 05:51:38'),
(111, 'Which jQuery function is used to prevent code from running, before the document is finished loading?', 'm', 'A. $(document).ready()', 'B. $(body).onload()', 'C. $(document).load()', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:33:40', '2022-09-04 05:51:38'),
(112, 'Which jQuery method should be used to deal with name conflicts?', 'm', 'A. nameConflict()', 'B. noConflict()', 'C. conflict()', 'D. noNameConflict()', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:34:33', '2022-09-04 05:51:38'),
(113, 'Which jQuery method is used to switch between adding/removing one or more classes (for CSS) from selected elements?', 'm', 'A. switchClass()', 'B. toggleClass()', 'C. altClass()', 'D. switch()', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:35:30', '2022-09-04 05:51:38'),
(114, 'Look at the following selector: $(&quot;div p&quot;). What does it select?', 'm', 'A. The first p element inside a div element', 'B. All div elements with a p element', 'C. All p elements inside a div element', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:37:49', '2022-09-04 05:51:38'),
(115, 'Is jQuery a W3C standard?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:38:31', '2022-09-04 05:51:38'),
(116, 'Which of the following statements is false ?', 'm', 'Natural numbers are closed under addition', 'Whole numbers are closed under addition', 'Integers are closed under addition', 'Rational numbers are not closed under addition.', 'op4', '', 1, 4, 20, 14, '2022-09-02 18:57:23', '2022-09-04 05:51:38'),
(117, 'Which of the following statements is false?', 'm', 'Natural numbers are closed under subtraction', 'Whole numbers are not closed under subtraction', 'Integers are closed under subtraction', 'Rational numbers are closed under subtraction.', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:01:57', '2022-09-04 05:51:38'),
(118, 'Which of the following statements is true?', 'm', 'Natural numbers are closed under multiplication', 'Whole numbers are not closed under multiplication', 'Integers are not closed under multiplication', 'Rational numbers are not closed under multiplication.', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:03:48', '2022-09-04 05:51:38'),
(119, 'Which of the following statements is true?', 'm', 'Natural numbers are closed under division', 'Whole numbers are not closed under division', 'Integers are closed under division', 'Rational numbers are closed under division.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:06:34', '2022-09-04 05:51:38'),
(120, 'Which of the following statements is false?', 'm', 'Natural numbers are commutative for addition', 'Whole numbers are commutative for addition', 'Integers are not commutative for addition', 'Rational numbers are commutative for addition.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:07:44', '2022-09-04 05:51:38'),
(121, 'Which of the following statements is true?', 'm', 'Natural numbers are commutative for subtraction', 'Whole numbers are commutative for subtraction', 'Integers are commutative for subtraction', 'Rational numbers are not commutative for subtraction.', 'op4', '', 1, 4, 20, 14, '2022-09-02 19:09:02', '2022-09-04 05:51:38'),
(122, 'Which of the following statements is false?', 'm', 'Natural numbers are commutative for multiplication', 'Whole numbers are commutative for multiplication', 'Integers are not commutative for multiplication', 'Rational numbers are commutative for multiplication.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:10:03', '2022-09-04 05:51:38'),
(123, 'Which of the following statements is true?', 'm', 'Natural numbers are commutative for division', 'Whole numbers are not commutative for division', 'Integers are commutative for division', 'Rational numbers are commutative for division.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:11:26', '2022-09-04 05:51:38'),
(124, 'Which of the following statements is true?', 'm', 'Natural numbers are associative for addition', 'Whole numbers are not associative for addition', 'Integers are not associative for addition', 'Rational numbers are not associative for addition.', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:13:01', '2022-09-04 05:51:38'),
(125, 'Which of the following statements is true?', 'm', 'Natural numbers are associative for subtraction', 'Whole numbers are not associative for subtraction', 'Integers are associative for subtraction', 'Rational numbers are associative for subtraction.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:14:13', '2022-09-04 05:51:38'),
(126, 'Which of the following statements is true?', 'm', 'Natural numbers are not associative for multiplication', 'Whole numbers are not associative for multiplication', 'Integers are associative for multiplication', 'Rational numbers are not associative for multiplication.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:15:23', '2022-09-04 05:51:38'),
(127, 'Which of the following statements is true?', 'm', 'Natural numbers are associative for division', 'Whole numbers are associative for division', 'Integers are associative for division', 'Rational numbers are not associative for division.', 'op4', '', 1, 4, 20, 14, '2022-09-02 19:16:32', '2022-09-04 05:51:38'),
(128, '0 is not', 'm', 'a natural number', 'a whole number', 'an integer', 'a rational number.', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:17:56', '2022-09-04 05:51:38'),
(129, '1/2 is 2', 'm', 'a natural number', 'a whole number', 'an integer', 'a rational number.', 'op4', '', 1, 4, 20, 14, '2022-09-02 19:19:52', '2022-09-04 05:51:38'),
(130, 'a + b = b + a is called', 'm', 'commutative law of addition', 'associative law of addition', 'distributive law of addition', 'none of these.', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:20:59', '2022-09-04 05:51:38'),
(131, 'a &times; b = b &times; a is called', 'm', 'commutative law for addition', 'commutative law for multiplication', 'associative law for addition', 'associative law for multiplication.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:22:02', '2022-09-04 05:51:38'),
(132, '(a + b) + c = a + (b + c) is called', 'm', 'commutative law for multiplication', 'commutative law for addition', 'associative law for addition', 'associative law for multiplication.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:22:54', '2022-09-04 05:51:38'),
(133, 'a &times; (b &times; c) = (a &times; b) &times; c is called', 'm', 'associative law for addition', 'associative law for multiplication', 'commutative law for addition', 'commutative law for multiplication.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:24:26', '2022-09-04 05:51:38'),
(134, 'a(b + c) = ab + ac is called', 'm', 'commutative law', 'associative law', 'distributive law', 'none of these.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:25:33', '2022-09-04 05:51:38'),
(135, 'The additive identity for rational numbers is', 'm', '1', '-1', '0', 'none of these.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:26:34', '2022-09-04 05:51:38'),
(136, 'The multiplicative identity for rational numbers is', 'm', '-1', '1', '0', 'none of these.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:28:09', '2022-09-04 05:51:38'),
(137, 'The additive inverse of 2/3 is', 'm', '&ndash;2/3', '3/2', '&ndash;3/2', '1', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:29:39', '2022-09-04 05:51:38'),
(138, 'The additive inverse of &ndash;3/4 is', 'm', '&ndash;3/4', '1', '0', '3/4', 'op4', '', 1, 4, 20, 14, '2022-09-02 19:30:44', '2022-09-04 05:51:38'),
(139, 'The multiplicative inverse of 12 is', 'm', '1', '-1', '2', '0', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:31:49', '2022-09-04 05:51:38'),
(140, 'The multiplicative inverse of &ndash;2/5 is', 'm', '&ndash;2/5', '&ndash;5/2', '5/2', '1', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:33:09', '2022-09-04 05:51:38'),
(141, 'The multiplicative inverse of 1 is', 'm', '0', '-1', '1', 'none of these.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:34:11', '2022-09-04 05:51:38'),
(142, 'The multiplicative inverse of -1 is', 'm', '0', '-1', '1', 'none of these.', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:35:09', '2022-09-04 05:51:38'),
(143, 'How many rational numbers are there between any two given rational numbers?', 'm', 'Only one', 'Only two', 'Countless', 'Nothing can be said.', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:36:05', '2022-09-04 05:51:38'),
(144, 'The negative of 2 is', 'm', '2', '1/2', '-2', '&ndash;1/2', 'op3', '', 1, 4, 20, 14, '2022-09-02 19:37:06', '2022-09-04 05:51:38'),
(145, 'The negative of -2 is', 'm', '-2', '2', '&ndash;1/2', '1/2', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:38:18', '2022-09-04 05:51:38'),
(146, 'If a and b are two rational numbers, then', 'm', 'a+b/2 &lt; a', 'a+b/2 &lt; b', 'a+b/2 = a', 'a+b/2 &gt; b', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:39:27', '2022-09-04 05:51:38'),
(147, 'The rational number that does not have a reciprocal is', 'm', '0', '1', '-1', '1/2', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:40:24', '2022-09-04 05:51:38'),
(148, 'The rational number which is equal to its negative is', 'm', '0', '1', '-1', '1/2', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:42:06', '2022-09-04 05:51:38'),
(149, 'The reciprocal of a positive rational number is', 'm', 'a positive rational number', 'a negative rational number', '0', '1', 'op1', '', 1, 4, 20, 14, '2022-09-02 19:43:04', '2022-09-04 05:51:38'),
(150, 'The reciprocal of a negative rational number is', 'm', 'a positive rational number', 'a negative rational number', '0', '-1', 'op2', '', 1, 4, 20, 14, '2022-09-02 19:44:12', '2022-09-04 05:51:38'),
(151, 'বাংলাদেশের মুক্তিযুদ্ধে প্রথম শত্রুমুক্ত জেলার নাম -', 'm', 'রাজশাহী', 'যশোর', 'জয়পুরহাট', 'নওগাঁ', 'op2', '', 11, 11, 23, 15, '2022-09-03 05:15:20', '2022-09-04 05:51:38'),
(152, 'বীরশ্রেষ্ঠ রুহুল আমিন কোথায় কাজ করতেন?', 'm', 'সেনাবাহিনী', 'বিমানবাহিনী', 'নৌবাহিনী', 'ইপিয়ার', 'op3', '', 11, 11, 23, 15, '2022-09-03 05:17:22', '2022-09-04 05:51:38'),
(153, 'বীরশ্রেষ্ঠ ফ্লাইট লেফটেন্যান্ট মতিউর রহমানের দেহাবশেষ পাকিস্তান থেকে কবে বাংলাদেশে আনা হয় ?', 'm', '২৪ জুন,২০০৬', '২৫ জুন,২০০৬', '২৩ জুন,২০০৬', '২৬ ডিসেম্বর,১৯৭২', 'op1', '', 11, 11, 23, 15, '2022-09-03 05:18:41', '2022-09-04 05:51:38'),
(154, 'বীরশ্রেষ্ঠ হামিদুর রহমানের দেহাবশেষ কোথায় সমাহিত করা হয়?', 'm', 'বনানী কবরস্থানে', 'আজিমপুর কবরস্থানে', 'মোহাম্মদপুর কবরস্থানে', 'মিরপুর শহীদ বুদ্ধিজীবী কবরস্থানে', 'op4', '', 11, 11, 23, 15, '2022-09-03 05:19:45', '2022-09-04 05:51:38'),
(155, 'মুক্তিযুদ্ধের সময় বরিশাল কোন সেক্টরের অধীনে ছিল?', 'm', '১নং সেক্টর', '৯নং সেক্টর', '২নং সেক্টর', '৬নং সেক্টর', 'op2', '', 11, 11, 23, 15, '2022-09-03 05:20:37', '2022-09-04 05:51:38'),
(156, 'বাংলাদেশের প্রথম অস্থায়ী সরকার কোথায় গঠিত হয়েছিল?', 'm', 'মেহেরপুরে', 'চট্টগ্রামের কালুরঘাটে', 'আগরতলায়', 'ঢাকায়', 'op1', '', 11, 11, 23, 15, '2022-09-03 05:21:44', '2022-09-04 05:51:38'),
(157, 'মুক্তিযুদ্ধে &#039;বীরপ্রতীক&#039; খেতাবপ্রাপ্ত দুই জন মহিলা মুক্তিযোদ্ধা কে কে?', 'm', 'বেগম সুফিয়া কামাল', 'আঞ্জুমান আরা ও কানিজ ফাতেমা', 'ডা. সেতারা বেগম ও তারামন বিবি', 'সুলতান কবীর ও সালমা খান', 'op3', '', 11, 11, 23, 15, '2022-09-03 05:22:56', '2022-09-04 05:51:38'),
(158, '১৯৭১ সালে জর্জ হ্যারিসন কার আহবানে বাংলাদেশ কনসার্টে যোগ দেন ?', 'm', 'Anthony Mascarenhas', 'Peter Shore', 'DP Dhar', 'Ravi Shankar', 'op4', '', 11, 11, 23, 15, '2022-09-03 05:25:28', '2022-09-04 05:51:38'),
(159, 'মুজিবনগর সরকারের অর্থমন্ত্রী ছিলেন -', 'm', 'অধ্যাপক ইউসুফ আলী', 'তাজউদ্দিন আহমেদ', 'ক্যাপ্টেন মনসুর আলী', 'কামরুজ্জামান', 'op3', '', 11, 11, 23, 15, '2022-09-03 05:26:57', '2022-09-04 05:51:38'),
(160, 'সেক্টর-৩ এর সেক্টর কমান্ডার ছিলেন -', 'm', 'মেজর এন.আম.নুরুজ্জামান', 'মেজর শওকত আলী', 'মেজর এম এ জলিল', 'মেজর কাজী নূরুজ্জামান', 'op4', '', 11, 11, 23, 15, '2022-09-03 05:28:17', '2022-09-04 05:51:38'),
(161, 'মুক্তিযুদ্ধকালীন কোন তারিখে বুদ্ধিজীবীদের ওপর ব্যাপক হত্যাকান্ড সংগটিত হয়?', 'm', '২৫ মার্চ ১৯৭১', '১৪ ডিসেম্বর ১৯৭১', '২৬ মার্চ ২৯৭১', '১৬ ডিসেম্বর ১৯৭১', 'op2', '', 11, 11, 23, 15, '2022-09-03 05:29:20', '2022-09-04 05:51:38'),
(162, 'বাংলাদেশের মুক্তিযুদ্ধে অসাধারণ বীরত্ব প্রদর্শনের জন্য সর্বমোট কতজনকে বীরত্বসূচক খেতাব প্রদান করা হয়?', 'm', '৬৭৬ জন', '১৭৫ জন', '৪২৬ জন', '৬৮ জন', 'op1', '', 11, 11, 23, 15, '2022-09-03 05:30:36', '2022-09-04 05:51:38'),
(163, 'আনুষ্ঠানিকভাবে স্বাধীনতার ঘোষণাপত্র কবে জারি করা হয়?', 'm', '১৭ এপ্রিল, ১৯৭১', '১০ এপ্রিল, ১৯৭১', '৭ মার্চ, ১৯৭১', '২৫ মার্চ, ১৯৭১', 'op2', '', 11, 11, 23, 15, '2022-09-03 05:31:36', '2022-09-04 05:51:38'),
(164, 'বীরশ্রেষ্ঠ রুহুল আমিন ছিলেন -', 'm', 'ফ্লাইট লেফটেন্যান্ট', 'ক্যাপ্টেন', 'ল্যান্স নায়েক', 'স্কোয়াড্রন ইঞ্জিনিয়ার', 'op4', '', 11, 11, 23, 15, '2022-09-03 05:32:40', '2022-09-04 05:51:38'),
(165, 'বীরশ্রেষ্ঠ রুহুল আমিন ছিলেন -', 'm', 'ফ্লাইট লেফটেন্যান্ট', 'ক্যাপ্টেন', 'ল্যান্স নায়েক', 'স্কোয়াড্রন ইঞ্জিনিয়ার', 'op4', '', 11, 11, 23, 15, '2022-09-03 05:32:41', '2022-09-04 05:51:38'),
(166, 'জেনারেল নিয়াজী কোথায় আত্নসমর্পণ করেন ?', 'm', 'পল্টন ময়দানে', 'লালবাগে', 'সোহরাওয়ার্দী উদ্যানে', 'ওসমানী উদ্যানে', 'op3', '', 11, 11, 23, 15, '2022-09-03 05:33:39', '2022-09-04 05:51:38'),
(167, 'বাংলাদেশের কোন দুটি স্থান UNICEF WORLD HERITAGE এর অন্তর্ভুক্ত ?', 'm', 'টাঙ্গুয়ার হাওর ও সুন্দরবন', 'কক্সবাজার ও কুয়াকাটা সৈকত', 'লালমাই ও ময়নামতি', 'মহাস্থানগড় ও পাহাড়পুর', 'op1', '', 11, 11, 23, 17, '2022-09-03 05:36:39', '2022-09-04 05:51:38'),
(168, 'ইউনেস্কো কোন সালে বাংলাদেশের সুন্দরবনকে বিশ্ব ঐতিহ্যের অংশ হিসেবে ঘোষণা করে?', 'm', '১৯৯৬', '১৯৯৯', '১৯৯৮', '১৯৯৭', 'op4', '', 11, 11, 23, 17, '2022-09-03 05:37:45', '2022-09-04 05:51:38'),
(169, 'বাংলাদেশের কোন বনাঞ্চল বিশ্ব ঐতিহ্য (World heritage site) হিসেবে স্বীকৃতি পেয়েছে ?', 'm', 'মধুপুরের শালবন', 'পার্বত্য চট্টগ্রামের কাপ্তাই বনাঞ্চল', 'সুন্দরবন', 'সিলেটের লাউয়াছড়া বনাঞ্চল', 'op3', '', 11, 11, 23, 17, '2022-09-03 05:38:58', '2022-09-04 05:51:38'),
(170, 'কোন সংস্থা &#039;বিশ্ব ঐতিহ্য এলাকা&#039; ঘোষণা করেছে ?', 'm', 'UNEP', 'UNESCO', 'WHO', 'WTO', 'op2', '', 11, 11, 23, 17, '2022-09-03 05:40:02', '2022-09-04 05:51:38'),
(171, 'বিশ্ব ঐতিহ্য তালিকায় বাংলাদেশের কতটি স্থান অন্তর্ভুক্ত আছে?', 'm', '৩', '৪', '৫', '৬', 'op1', '', 11, 11, 23, 17, '2022-09-03 05:40:43', '2022-09-04 05:51:38'),
(172, 'ইউনেস্কো সুন্দরবনকে কততম &#039;বিশ্ব ঐতিহ্য&#039; হিসেবে ঘোষণা করে?', 'm', '৫২১ তম', '৫২২তম', '৫২৩ তম', '৫২৪ তম', 'op2', '', 11, 11, 23, 17, '2022-09-03 05:41:58', '2022-09-04 05:51:38'),
(173, 'উপরের ছবিটি কিসের?', 'qi', 'বাংলাদেশর মুক্তিযুদ্ধের।', '৬৯&#039;রের গণঅভ্যুত্থানের', 'ভাষা আন্দোলনের', 'ভারত পাকিস্তান যুদ্ধের', 'op1', '173.jpg', 11, 11, 23, 15, '2022-09-03 05:49:03', '2022-09-04 05:51:38'),
(174, 'উত্তরবঙ্গে বসবাসকারী আদিবাসীদের ভাষা -', 'm', 'হিন্দি', 'মৈথিল্য', 'সাদ্রি', 'কুরুক', 'op4', '', 11, 11, 23, 18, '2022-09-03 05:51:31', '2022-09-04 05:51:38'),
(175, 'ফাল্গুনী পূর্ণিমা&#039; কাদের ধর্মীয় উৎসব ?', 'm', 'চাকমাদের', 'হিন্দুদের', 'খ্রিস্টানদের', 'বৌদ্ধদের', 'op1', '', 11, 11, 23, 18, '2022-09-03 05:52:34', '2022-09-04 05:51:38'),
(176, 'বাংলাদেশে কতটি উপজাতীয় প্রতিষ্ঠান আছে?', 'm', '৬ টি', '৫ টি', '৪ টি', '৩ টি', 'op4', '', 11, 11, 23, 18, '2022-09-03 05:53:26', '2022-09-04 05:51:38'),
(177, 'খিয়াং সম্প্রদায় যেখানে বসবাস করে -', 'm', 'সিলেট', 'কুয়াকাটা', 'পার্বত্য চট্টগ্রাম', 'দিনাজপুর', 'op3', '', 11, 11, 23, 18, '2022-09-03 05:54:34', '2022-09-04 05:51:38'),
(178, '&#039;মারমা&#039; উপজাতিরা বাস করে -', 'm', 'গারো পাহাড়ে', 'বান্দরবানে চিম্বুক পাহাড়ের পাদদেশে', 'দিনাজপুরে', 'সিলেটের জয়ন্তিয়া পাহাড়ের পাদদেশে', 'op2', '', 11, 11, 23, 18, '2022-09-03 05:55:34', '2022-09-04 05:51:38'),
(179, 'বাংলাদেশের উপজাতি কোনটি ?', 'm', 'হস্', 'রাখাইন', 'হটেনটট', 'না', 'op2', '', 11, 11, 23, 18, '2022-09-03 05:56:32', '2022-09-04 05:51:38'),
(180, 'বাংলাদেশের কোন আদিবাসীদের ক্ষেত্রে সম্পত্তির উত্তরাধিকার নীতি মাতৃসূত্রায় ?', 'm', 'গারো', 'রাখাইন', 'চাকমা', 'মুরং', 'op1', '', 11, 11, 23, 18, '2022-09-03 05:57:30', '2022-09-04 05:51:38'),
(181, 'বাংলাদেশের কোন জেলায় হাজং উপজাতি বাস করে?', 'm', 'দিনাজপুর', 'খাগড়াছড়ি', 'নেত্রকোণা', 'বান্দরবান', 'op3', '', 11, 11, 23, 18, '2022-09-03 06:08:14', '2022-09-04 05:51:38'),
(182, 'খাসিয়া উপজাতি বাংলাদেশের কোন জেলায় বাস করে?', 'm', 'ময়মনসিংহ', 'নেত্রকোণা', 'সিলেট', 'পার্বত্য চট্টগ্রাম', 'op3', '', 11, 11, 23, 18, '2022-09-03 06:09:18', '2022-09-04 05:51:38'),
(183, 'কোনটি জন গোষ্ঠীর প্রধান ধর্মীগ্রন্থ ত্রিপিটক ?', 'm', 'ত্রিপুরা', 'মণিপুরি', 'সাঁওতাল', 'চাকমা', 'op4', '', 11, 11, 23, 18, '2022-09-03 06:11:13', '2022-09-04 05:51:38'),
(184, 'উপজাতি সাংস্কৃতিক কেন্দ্রর &#039;বিরিসিরি&#039; কোথায় অবস্থিত?', 'm', 'বান্দরবান', 'খাগড়াছড়ি', 'নেত্রকোনা', 'রাঙ্গামাটি', 'op3', '', 11, 11, 23, 18, '2022-09-03 06:13:19', '2022-09-04 05:51:38'),
(185, 'নিচের কোন উপজাতি ইসলাম ধর্মাবলম্বী?', 'm', 'পাঙন', 'গারো', 'মারমা', 'চাকমা', 'op1', '', 11, 11, 23, 18, '2022-09-03 06:15:24', '2022-09-04 05:51:38'),
(186, 'খুমী উপজাতিরা কোথায় বাস করে?', 'm', 'ময়মনসিংহে', 'বান্দরবানে', 'দিনাজপুরে', 'জামালপুর', 'op2', '', 11, 11, 23, 18, '2022-09-03 06:17:06', '2022-09-04 05:51:38'),
(187, 'বাংলাদেশের ত্রিপুরা আদিবাসী গোষ্ঠী যে ধর্মবিশ্বাসের অনুসারী--', 'm', 'বুদ্ধ', 'খ্রিস্টান', 'সনাতন', 'মুসলমান', 'op3', '', 11, 11, 23, 18, '2022-09-03 06:18:21', '2022-09-04 05:51:38'),
(188, 'বাংলাদেশে বাস নেই এমন উপজাতির নাম -', 'm', 'সাঁওতাল', 'মাওরি', 'মুরং', 'গারো', 'op2', '', 11, 11, 23, 18, '2022-09-03 06:19:57', '2022-09-04 05:51:38'),
(189, 'বাংলাদেশের মারমা উপজাতির বর্ষবরণ অনুষ্ঠান কোনটি ?', 'm', 'ইঙ্গবানী', 'ফাগুয়া', 'বিঝু', 'সাংগ্রাই', 'op4', '', 11, 11, 23, 18, '2022-09-03 06:22:10', '2022-09-04 05:51:38'),
(190, '&#039;বাওয়ালি&#039; কারা?', 'm', 'ভাওয়াল অঞ্চলের বাসিন্দা', 'বাউল সম্প্রদায়', 'সুন্দরবনের গোলপাতা সংগ্রহকারী', 'চট্টগ্রামের বলী খেলোয়াড়', 'op3', '', 11, 11, 23, 18, '2022-09-03 06:24:31', '2022-09-04 05:51:38'),
(191, 'জাতিসংঘের পূর্বসূরি আন্তর্জাতিক প্রতিষ্ঠান কোনটি?', 'm', 'ইউনাইটেড নেশনস', 'লীগ অব নেশনস', 'কম্যুনিটি অব নেশনস', 'এসোসিয়েশনস অব নেশনস', 'op2', '', 11, 11, 24, 19, '2022-09-03 06:30:52', '2022-09-04 05:51:38'),
(192, 'জাতিসংঘের মিলিনিয়াম শীর্ষ সম্মেলন কোথায় অনুষ্ঠিত হয়েছিল?', 'm', 'ওয়াশিংটন ডিসি', 'মেক্সিকো সিটি', 'জেনেভা', 'নিউইয়র্ক', 'op4', '', 11, 11, 24, 19, '2022-09-03 06:32:13', '2022-09-04 05:51:38'),
(193, 'How many countries have accepted &#039;Euro&#039; as their common currency?/ ইউরো সংশ্লিষ্ট যতটি দেশের একক মুদ্রায় পরিণত হয়েছে--', 'm', '১৬', '১৭', '১৮', '১৯', 'op2', '', 11, 11, 24, 19, '2022-09-03 06:33:09', '2022-09-04 05:51:38'),
(194, 'টেকসই উন্নয়ন লক্ষ্য কত বছর মেয়াদি?', 'm', '১৫', '১৬', '১৭', '১৮', 'op1', '', 11, 11, 24, 19, '2022-09-03 06:33:50', '2022-09-04 05:51:38'),
(195, 'ওপেক (OPEC)-এর বর্তমান (২০১৬) সদস্য দেশ কতটি?', 'm', '১১', '১২', '১৩', '১৪', 'op3', '', 11, 11, 24, 19, '2022-09-03 06:34:36', '2022-09-04 05:51:38'),
(196, 'জাতিসংঘ সাধারণ পরিষদের ৭০তম অধিবেশনের প্রেসিডেন্ট কে?', 'm', 'মর্গেন্স লিক্কেটফট (ডেনমার্ক)', 'নাবিল আর আরাবি (মিশর)', 'জেসন স্টলেনবার্গ (নরওয়ে)', 'হাওলিন ঝাও (চীন)', 'op1', '', 11, 11, 24, 19, '2022-09-03 06:35:30', '2022-09-04 05:51:38'),
(197, '&lsquo;নন-এলাইনমেন্ট মোভমেন্ট&rsquo; এর সচিবালয়---তে অবস্থিত?', 'm', 'ঢাকা', 'নয়াদিল্লি', 'জাকার্তা', 'কোনটা সত্য নয়', 'op4', '', 11, 11, 24, 19, '2022-09-03 06:36:30', '2022-09-04 05:51:38'),
(198, 'Interpol-এর বর্তমান (২০১৭) সদস্য দেশ কতটি?', 'm', '১৯৫টি', '১৯৪টি', '১৯৩টি', '১৯২টি', 'op4', '', 11, 11, 24, 19, '2022-09-03 06:37:29', '2022-09-04 05:51:38'),
(199, 'বিশ্ব পর্যটন সংস্থা (UNWTO)-এর বর্তমান ২০১৬ সদস্য দেশ কতটি?', 'm', '১৫৬টি', '১৫৭টি', '১৫৮টি', '১৫৯টি', 'op1', '', 11, 11, 24, 19, '2022-09-03 06:38:16', '2022-09-04 05:51:38'),
(200, 'Which Asian country belongs to the group of G-8 countries?/ জি-৮ এর একমাত্র এশিয়ার দেশ--', 'm', 'Thailand(থাইল্যান্ড)', 'Japan(জাপান)', 'India(ভারত)', 'China(চীন)', 'op2', '', 11, 11, 24, 19, '2022-09-03 06:39:04', '2022-09-04 05:51:38'),
(201, 'প্রেসিডেন্ট-উইড্র উইলসনের 14 points এ কত নম্বর point এ জাতিপুঞ্জের সৃষ্টির কথা উল্লেখ করা হয়েছে?', 'm', '১২', '১৩', '১৪', '১৫', 'op3', '', 11, 11, 24, 19, '2022-09-03 06:39:50', '2022-09-04 05:51:38'),
(202, '&lsquo;ইউনিডো&rsquo; (UNIDO) এর প্রধান কার্যালয় কোথয় অবস্থিত?', 'm', 'টোকিও', 'প্যারিস', 'নিউইয়র্ক', 'ভিয়েনা', 'null', '', 11, 11, 24, 19, '2022-09-03 06:40:38', '2022-09-04 05:51:38'),
(203, 'কোন পরিষদের সুপারিশক্রমে জাতিসংঘে নতুন সদস্য গ্রহণ করা হয়?', 'm', 'অছি পরিষদ', 'সাধারণ পরিষদ', 'নিরাপত্তা পরিষদ', 'অর্থনৈতিক ও সামাজিক পরিষদ', 'op3', '', 11, 11, 24, 19, '2022-09-03 06:41:31', '2022-09-04 05:51:38'),
(204, '&#039;লীগ অব নেশনস&#039; কবে গঠিত হয়?', 'm', '১৯৯৭ সালে', '১৯১৮ সালে', '১৯১৯ সালে', '১৯২০ সালে', 'op4', '', 11, 11, 24, 19, '2022-09-03 06:42:18', '2022-09-04 05:51:38'),
(205, 'সার্ক শীর্ষ সম্মেলনে কোন বিষয়টি আলোচিত হতে পারে না?', 'm', 'কৃষি উন্নয়ন', 'দ্বিপাক্ষিক সমস্যা', 'অবাধ বাণিজ্য', 'সাংস্কৃতিক বিনিময়', 'op2', '', 11, 11, 24, 19, '2022-09-03 06:43:14', '2022-09-04 05:51:38'),
(206, 'এটাও ইতিহাসের শিক্ষা যে, কেউই ইতিহাস থেকে শিক্ষা নেয়না&#039;- বলেছিলেন', 'm', 'উইনস্টোন চার্চিল', 'নেপোলিয়ান বোনাপোর্ট', 'বিসমার্ক', 'কার্ল মার্কস', 'null', '', 11, 11, 24, 20, '2022-09-03 06:44:28', '2022-09-04 05:51:38'),
(207, '&lsquo;মিডিয়া মোগল&rsquo; হিসবে পরিচিত-', 'm', 'রূপার্ট মারডক', 'বিল গেটস', 'টাটা', 'রকফেলার', 'null', '', 11, 11, 24, 20, '2022-09-03 06:45:18', '2022-09-04 05:51:38'),
(208, 'ভারতের প্রেসিডেন্ট আবুল পাকির জয়নুল আবেদীন আবদুল কালাম কি নামে বহুল পরিচিত?', 'm', 'গোল্ডেন ম্যান', 'মিসাইল ম্যান', 'হিরু অফ ইন্ডিয়া', 'ভারতরত্ন', 'op2', '', 11, 11, 24, 20, '2022-09-03 06:46:11', '2022-09-04 05:51:38'),
(209, 'Man is the measure of all things, উক্তিটি কার?', 'm', 'জর্জিয়াস', 'স্বামী বিবেকানন্দ', 'প্রোটাগোরাস', 'আল্লামা ইকবাল', 'op3', '', 11, 11, 24, 20, '2022-09-03 06:47:01', '2022-09-04 05:51:38'),
(210, '&lsquo;দোলনা থেকে কবর পর্যন্ত জ্ঞান অন্বেষণ কর&rdquo; উক্তিটি-', 'm', 'হযরত মুহম্মদের (সাঃ)', 'হযরত আলীর (রাঃ)', 'লোকমান হাকিমের', 'হযরত শেখ সাদীর (রাঃ)', 'op1', '', 11, 11, 24, 20, '2022-09-03 06:47:53', '2022-09-04 05:51:38'),
(211, '&quot;Man is a political animal&quot; - who said this?', 'm', 'Dante', 'Plato', 'Aristotle', 'Socrates', 'null', '', 11, 11, 24, 20, '2022-09-03 06:48:46', '2022-09-04 05:51:38'),
(212, 'Who is known as the &#039;Lady of the lamp&#039;?/&lsquo;লেডী উইথ দি ল্যাপ&rsquo; কে?', 'm', 'Sorojini Naidu', 'Florence Nightingale', 'Hellen Killer', 'Madame Teresa', 'op2', '', 11, 11, 24, 20, '2022-09-03 06:49:36', '2022-09-04 05:51:38'),
(213, '&lsquo;আরবের নাইটিঙ্গেল&rsquo; বলা হয়-', 'm', 'উম্মে কুলসুম', 'উম্মে হাফিজা', 'উম্মে সাদিয়া', 'উম্মে মারিয়ম', 'op1', '', 11, 11, 24, 20, '2022-09-03 06:50:28', '2022-09-04 05:51:38'),
(214, 'Man is born free, but is everywhere in chains-কার উক্তি?', 'm', 'ভলতেয়ার', 'কাল মার্কস', 'জেএসমিল', 'রুশো', 'op4', '', 11, 11, 24, 20, '2022-09-03 06:51:21', '2022-09-04 05:51:38'),
(215, 'কে বলেছেন &lsquo;কাপুরুষেরা মরার আগে বহুবার মারা যায়, সাহসীরা একবার মৃত্যুবরণ করে&rsquo;।', 'm', 'উইলিয়াম শেক্সপিয়ার', 'রবীন্দ্রনাথ ঠাকুর', 'উইনস্টন চার্চিল', 'অলিভার গোল্ডস্মিথ', 'op1', '', 11, 11, 24, 20, '2022-09-03 06:52:23', '2022-09-04 05:51:38'),
(216, 'First women Prime Minister in the world- অথবা, বিশ্বের প্রথম মহিলা প্রধানমন্ত্রী কে?', 'm', 'বেনজির ভুট্টো(Benazir Bhutto)', 'খালেদা জিয়া(Khalada Zia)', 'শ্রীমাভো বন্দরনায়েক(Sirimavo Bandaranaike)', 'কোনটিই নয়(None of these)', 'op3', '', 11, 11, 24, 20, '2022-09-03 06:53:16', '2022-09-04 05:51:38'),
(217, 'কোন দেশের প্রধানমন্ত্রী বিশ্বের প্রথম মহিলা প্রধানমন্ত্রী?', 'm', 'ভারত', 'যুক্তরাজ্য', 'ইসরাইল', 'শ্রীলংকা', 'op4', '', 11, 11, 24, 20, '2022-09-03 06:54:04', '2022-09-04 05:51:38'),
(218, 'যে রাষ্ট্রের মহিলাদের সামরিক কার্যক্রমে অংশগ্রহণ বাধ্যতামূলক-', 'm', 'ইসরায়েল', 'সুইজারল্যান্ড', 'সুইডেন', 'তুরস্ক', 'op1', '', 11, 11, 24, 20, '2022-09-03 06:54:54', '2022-09-04 05:51:38'),
(219, 'কে &lsquo;ডেজার্ট ফক্স&rsquo; নামে পরিচিত?', 'm', 'আনোয়ার সাদাত', 'কামাল আতাতুর্ক', 'মার্শাল টিটো', 'ফিল্ড মার্শাল রোমেল', 'op4', '', 11, 11, 24, 20, '2022-09-03 06:55:48', '2022-09-04 05:51:38'),
(220, 'লিটল কর্পোরেল&rsquo; কার উপাধি?', 'm', 'লাল বাহাদুর শাস্ত্রী', 'নেপোলিয়ান বেনপোর্ট', 'সাদা বাহাদুর শাস্ত্রী', 'আল খাওয়াজমি', 'op2', '', 11, 11, 24, 20, '2022-09-03 06:56:43', '2022-09-04 05:51:38'),
(221, 'Daughter of the Eastকাকে বলা হয়?', 'm', 'বেনজির ভুট্টো', 'অং সান সূচী', 'ইন্দিরা গান্ধি', 'সরোজিনী নাইডু', 'op1', '', 11, 11, 24, 20, '2022-09-03 06:57:38', '2022-09-04 05:51:38'),
(222, 'The diagram has the shape of a', 'm', 'square', 'rectangle', 'triangle', 'trapezium.', 'op2', '222.jpg', 1, 4, 20, 21, '2022-09-03 21:27:53', '2022-09-04 05:51:38');
INSERT INTO `quizzes` (`id`, `question`, `type`, `op1`, `op2`, `op3`, `op4`, `ans`, `qimage`, `user_id`, `category_id`, `subcategory_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(223, 'The diagram has the shape of a', 'qi', 'rectangle', 'square', 'circle', 'parallelogram.', 'op2', '223.jpg', 1, 4, 20, 14, '2022-09-03 21:53:28', '2022-09-04 05:51:38'),
(224, 'The diagram has the shape of a', 'qi', 'circle', 'rectangle', 'square', 'triangle.', 'op4', '224.jpg', 1, 4, 20, 14, '2022-09-03 21:55:58', '2022-09-04 05:51:38'),
(225, 'The diagram has the shape of a', 'm', 'rectangle', 'square', 'parallelogram', 'circle.', 'op3', '225.jpg', 1, 4, 20, 21, '2022-09-03 21:59:27', '2022-09-04 05:51:38'),
(226, 'The diagram has the shape of a', 'qi', 'circle', 'square', 'rectangle', 'parallelogram.', 'op1', '226.jpg', 1, 4, 20, 21, '2022-09-03 22:10:09', '2022-09-04 05:51:38'),
(227, 'The diagram has the shape of a', 'qi', 'circle', 'parallelogram', 'rectangle', 'trapezium.', 'op4', '227.jpg', 1, 4, 20, 21, '2022-09-03 22:11:54', '2022-09-04 05:51:38');

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
(4, 'Mathematic', 'Mathematic', 5, '1', '2022-08-14 21:28:44', '2022-09-02 18:42:20'),
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
(17, 'English', 'English', 5, '1', '2022-08-29 14:07:40', '2022-09-02 18:42:43'),
(18, 'English', 'English', 5, '1', '2022-08-29 14:12:37', '2022-08-29 14:12:37'),
(19, 'Science', 'Science', 5, '1', '2022-08-29 14:12:55', '2022-08-29 14:12:55'),
(20, 'Mathematic', 'Mathematic', 4, '1', '2022-09-02 18:36:59', '2022-09-02 18:36:59'),
(21, 'English', 'English', 4, '1', '2022-09-02 18:38:14', '2022-09-02 18:38:14'),
(22, 'Mathematic', 'Mathematic', 5, '1', '2022-09-02 18:38:36', '2022-09-02 18:43:05'),
(23, 'Banglaedesh', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', 11, '1', '2022-09-03 05:05:40', '2022-09-03 05:05:40'),
(24, 'International', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', 11, '1', '2022-09-03 05:12:15', '2022-09-03 05:12:15');

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
(1, 'Noun', 'A noun is a word that names something, such as a person, place, thing, or idea.', 2, 14, '1', '2022-08-14 03:50:01', '2022-09-02 18:31:07'),
(2, 'Parts of Speech', 'The Eight Parts of Speech.', 2, 14, '1', '2022-08-14 03:51:14', '2022-09-02 14:32:58'),
(3, 'Viva-Voice', 'Viva-Voice', 1, 3, '1', '2022-08-14 21:29:54', '2022-09-02 14:35:13'),
(4, 'History', 'Bengali language, an eastern Indo-Aryan language · The endonym of Bengal, a geographical and ethno-linguistic region in South Asia.', NULL, 1, '1', '2022-08-15 22:27:23', '2022-08-15 22:27:23'),
(5, 'ও আমার দেশের মাটি', 'Bangla Version', 1, 1, '1', '2022-08-17 03:35:11', '2022-09-02 14:36:18'),
(6, 'Chapter-2', 'English Version', NULL, 1, '1', '2022-08-17 03:56:25', '2022-08-17 03:56:25'),
(7, 'Chapter-1', 'English Version', NULL, 1, '1', '2022-08-17 03:58:45', '2022-08-17 03:58:45'),
(8, 'Introduction of html', 'IT Scholarship Programme', 6, 6, '1', '2022-08-17 04:23:15', '2022-08-17 04:26:51'),
(9, 'Introduction of JavaScript', 'Introduction of JavaScript', 6, 7, '1', '2022-08-29 12:36:20', '2022-08-29 13:58:20'),
(10, 'Introduction of CSS', 'Introduction of CSS', 6, 8, '1', '2022-08-29 13:21:16', '2022-08-29 13:57:58'),
(11, 'Introduction of Bootstrap', 'Introduction of Bootstrap', 6, 9, '1', '2022-08-29 13:21:30', '2022-08-29 13:57:35'),
(12, 'Introduction of PHP', 'Introduction of PHP', 6, 12, '1', '2022-08-29 13:21:54', '2022-08-29 14:00:01'),
(13, 'Introduction of Angular', 'Introduction of Angular', 6, 10, '1', '2022-08-29 13:39:27', '2022-08-29 14:00:55'),
(14, 'Rational Numbers', 'Rational Numbers', NULL, 20, '1', '2022-09-02 18:43:59', '2022-09-02 18:43:59'),
(15, 'Liberation war', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', NULL, 23, '1', '2022-09-03 05:07:18', '2022-09-03 05:07:18'),
(16, 'History', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', 11, 23, '1', '2022-09-03 05:08:45', '2022-09-03 05:13:21'),
(17, 'বিশ্ব ঐতিহ্য ও বাংলাদেশ', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', NULL, 23, '1', '2022-09-03 05:35:16', '2022-09-03 05:35:16'),
(18, 'বাংলাদেশের উপজাতি ও ক্ষুদ্র-নৃতাত্বিক জনগোষ্ঠী', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', NULL, 23, '1', '2022-09-03 05:43:09', '2022-09-03 05:43:09'),
(19, 'আন্তর্জাতিক সংস্থা ও সংগঠন', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', NULL, 24, '1', '2022-09-03 06:28:48', '2022-09-03 06:28:48'),
(20, 'বিখ্যাত ব্যাক্তিদের উক্তি ও উপাধি', 'General Knowledge or General Awareness is an important and common section in all competitive and government recruitment examinations such as UPSC, SSC, Bank PO/Clerk, and so forth.', NULL, 24, '1', '2022-09-03 06:29:45', '2022-09-03 06:29:45'),
(21, 'Chapter 11', 'MCQ Questions for Class 8 Maths Chapter 11 Mensuration with Answers', NULL, 20, '1', '2022-09-03 21:23:18', '2022-09-03 21:23:18');

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
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_user_id_foreign` (`user_id`),
  ADD KEY `answers_qid_foreign` (`qid`),
  ADD KEY `answers_qsid_foreign` (`qsid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `blogs_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_user_id_foreign` (`user_id`),
  ADD KEY `classrooms_category_id_foreign` (`category_id`),
  ADD KEY `classrooms_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaderboards`
--
ALTER TABLE `leaderboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaderboards_user_id_foreign` (`user_id`),
  ADD KEY `leaderboards_quizset_id_foreign` (`quizset_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`),
  ADD KEY `profiles_category_id_foreign` (`category_id`);

--
-- Indexes for table `quizsets`
--
ALTER TABLE `quizsets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizsets_user_id_foreign` (`user_id`),
  ADD KEY `quizsets_category_id_foreign` (`category_id`),
  ADD KEY `quizsets_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_user_id_foreign` (`user_id`),
  ADD KEY `quizzes_category_id_foreign` (`category_id`),
  ADD KEY `quizzes_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `quizzes_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_category_id_foreign` (`category_id`),
  ADD KEY `topics_subcategory_id_foreign` (`subcategory_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaderboards`
--
ALTER TABLE `leaderboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quizsets`
--
ALTER TABLE `quizsets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_qid_foreign` FOREIGN KEY (`qid`) REFERENCES `quizzes` (`id`),
  ADD CONSTRAINT `answers_qsid_foreign` FOREIGN KEY (`qsid`) REFERENCES `quizsets` (`id`),
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `blogs_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `blogs_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `classrooms_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `classrooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `leaderboards`
--
ALTER TABLE `leaderboards`
  ADD CONSTRAINT `leaderboards_quizset_id_foreign` FOREIGN KEY (`quizset_id`) REFERENCES `quizsets` (`id`),
  ADD CONSTRAINT `leaderboards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `quizsets`
--
ALTER TABLE `quizsets`
  ADD CONSTRAINT `quizsets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `quizsets_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `quizsets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
