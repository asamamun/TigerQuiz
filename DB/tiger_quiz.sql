-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 12:52 PM
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
(4, 'Class 8', 'English Speaking', '0', '2022-08-14 21:27:37', '2022-08-15 04:55:01'),
(5, 'Class 9', 'Here, we have provided the NCERT Solutions for Class 9 for the subjects Maths, Science and Social Science.', '1', '2022-08-15 22:28:28', '2022-08-15 22:28:28'),
(6, 'Web Development with PHP and Framework', 'IT Scholarship Programme', '1', '2022-08-17 04:16:51', '2022-08-17 04:19:20');

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(57, '2022_08_06_110407_create_categories_table', 1),
(58, '2022_08_06_110431_create_subcategories_table', 1),
(59, '2022_08_06_110455_create_topics_table', 1),
(60, '2022_08_06_110638_create_profiles_table', 1),
(61, '2022_08_06_110743_create_quizzes_table', 1),
(62, '2022_08_06_110828_create_quizsets_table', 1),
(63, '2022_08_06_110844_create_blogs_table', 1),
(64, '2022_08_06_110905_create_comments_table', 1),
(65, '2022_08_06_111040_create_classrooms_table', 1);

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
(7, 9, NULL, 'Imran Hussain', 'GNSL', NULL, 'UI', 'WDPF', 'Male', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words that don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of the text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words, etc.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'B+', 'Imran Hussain_29.png', '2022-08-14 11:47:52', '2022-08-14 11:47:52'),
(8, 10, NULL, 'Noor Islam', 'GNSL', NULL, 'PHP', 'Web Developer', 'Female', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', NULL, NULL, NULL, 'O+', 'Noor_210.png', '2022-08-15 04:36:09', '2022-08-15 04:40:25'),
(10, 8, 1, 'Imran Islam', 'GNSL', 'Gold', NULL, NULL, 'Male', 'Biography', '01735504660', 'Dhaka', '@lurepot', '@lurepot', '@lurepot', 'Rayhan', 'lurepot@gmail.com', '01735504660', 'O+', 'Aman_38.png', '2022-08-15 08:13:05', '2022-08-15 10:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `quizsets`
--

CREATE TABLE `quizsets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quizzes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` set('m','d') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'm',
  `op1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `quizzes` (`id`, `question`, `type`, `op1`, `op2`, `op3`, `op4`, `ans`, `user_id`, `category_id`, `subcategory_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 'Any qualities, feelings or ideas are referred to be...', 'm', 'Abstract', 'Common', 'Proper', 'None', 'A.', 1, 1, 2, 1, '2022-08-16 20:19:10', '2022-08-17 03:07:00'),
(2, 'Words like crowd, army fleet and swarm are called', 'm', 'collective', 'abstract', 'proper', 'None', 'A.', 1, 1, 2, 1, '2022-08-16 20:22:17', '2022-08-17 03:13:35'),
(3, 'A_________ of thieves was caught by the police last week', 'm', 'gang', 'group', 'bunch', 'None', 'A.', 1, 1, 2, 1, '2022-08-16 20:23:57', '2022-08-17 03:18:57'),
(4, 'There is a _____________ of books in our school', 'm', 'library', 'stack', 'flock', 'None', 'B.', 1, 1, 2, 1, '2022-08-16 20:25:56', '2022-08-17 03:19:07'),
(5, 'A ____ of wolves chased a ______ of deer', 'm', 'pack,heard', 'group, cattle', 'pack, cattle', 'none of them', 'A.', 1, 1, 2, 1, '2022-08-16 20:27:47', '2022-08-17 03:18:34'),
(6, 'This work can be done by minu. This statement is in ____ voice.', 'm', 'passive', 'active', 'none of them', 'None', 'A.', 1, 1, 2, 2, '2022-08-16 20:34:49', '2022-08-17 03:22:51'),
(7, 'He gave me open. This statement is in _____ voice', 'm', 'passive', 'active', 'none of them', 'None', 'B.', 1, 1, 2, 2, '2022-08-16 20:35:47', '2022-08-17 03:25:19'),
(8, 'The plate are being washed', 'm', 'active', 'passive', 'none of them', 'none', 'A.', 1, 1, 2, 4, '2022-08-16 20:39:35', '2022-08-17 03:26:16'),
(9, 'বই বিক্রি করে জীবনের শেষভাগে বিদ্যাসাগরের বার্ষিক আয় ছিল -', 'm', 'A.দশ হাজার টাকা', 'B. কুড়ি হাজার টাকা', 'C. তিরিশ হাজার টাকা', 'D. চল্লিশ হাজার টাকা', 'C.', 1, 1, 1, 7, '2022-08-16 20:52:17', '2022-08-17 03:59:03'),
(10, 'এখনকার \'বিদ্যাসাগর কলেজ\' এর আগের নাম ছিল -', 'm', 'A. মেট্রোপলিটন কলেজ', 'B. সিটি কলেজ', 'C. রিপন কলেজ', 'D. সেন্ট স্টিফেনস্ কলেজ', 'A.', 1, 1, 1, 7, '2022-08-17 00:01:41', '2022-08-17 03:59:14'),
(11, 'এখনকার বাঙালি জীবনের স্বপ্নে দেখা রূপ কথা -', 'm', 'A. গোয়াল ভরা গোরু', 'B. গোলা ভরা ধান', 'C. পুকুর ভরা মাছ', 'D. সবকটিই', 'D.', 1, 1, 1, 6, '2022-08-17 00:03:47', '2022-08-17 03:57:56'),
(12, 'ফুলকপি দিয়ে রান্না হতো -', 'm', 'A. বাটা মাছ', 'B. মৌরলা মাছ', 'C. ভেটকি মাছ', 'D. বোয়াল মাছ', 'C.', 1, 1, 1, 6, '2022-08-17 00:05:34', '2022-08-17 04:00:58'),
(13, '\'সবুজসাথী\' প্রকল্পে নবম থেকে দ্বাদশ শ্রেণির সমস্ত পড়ুয়াকে বিনামূল্যে দেওয়া হয় -', 'm', 'A. বিদ্যালয়ের পোশাক', 'B. বিদ্যালয়ের পোশাক', 'C. মধ্যাহ্নকালীন আহার', 'D. সাইকেল', 'D.', 1, 1, 1, 6, '2022-08-17 00:14:23', '2022-08-17 04:02:22'),
(14, '\'স্থিরীকৃত\' শব্দের একটি সমার্থক শব্দ হলো -', 'm', 'A. প্রদত্ত', 'B. প্রকল্পিত', 'C. অনুমিত', 'D. অনুমোদিত', 'D.', 1, 1, 1, 6, '2022-08-17 00:14:58', '2022-08-17 04:04:47'),
(15, 'বিদ্যাসাগর তাঁর বই বিক্রি করে উপার্জন করেন -', 'm', 'A. যুবক বয়সে', 'B. প্রৌঢ় বয়সে', 'C. বৃদ্ধ বয়সে', 'D. অতি বৃদ্ধ বয়সে', 'B.', 1, 1, 1, 7, '2022-08-17 03:37:01', '2022-08-17 03:59:51'),
(16, 'বর্তমানে পিতা ও কন্যার বয়সের সমষ্টি ৬৫ বছর। সাতবছর পরে তাদের বয়সের সমষ্টি কত হবে ?', 'm', 'A. ৭২', 'B. ৭৯', 'C. ৭৫', 'D. ৮৬', 'B.', 1, 1, 3, 7, '2022-08-17 04:06:08', '2022-08-17 04:06:08'),
(17, '১৫ মিটার লম্বা ফিতে থেকে ৫ মিটার কেটে নেওয়ার পর কত অংশ অবশিষ্ট আছে ?', 'm', 'A. ১/২ অংশ', 'B. ১/৫ অংশ', 'C. ২/৩ অংশ', 'D. ১/১০ অংশ', 'C.', 1, 1, 3, 7, '2022-08-17 04:08:05', '2022-08-17 04:08:05'),
(18, 'একটি তরমুজের ওজন ২ কেজি ৭০০ গ্রাম এবং একটি আনারসের ওজন ১ কেজি ১০০ গ্রাম। তরমুজের ওজন আনারসের থেকে কত বেশি ?', 'm', 'A. ১ কেজি ৬০০ গ্রাম', 'B. ৩ কেজি ৮০০ গ্রাম', 'C. ১ কেজি ৮০০ গ্রাম', 'D. ৮০০ গ্রাম', 'A.', 1, 1, 3, 7, '2022-08-17 04:09:36', '2022-08-17 04:09:36'),
(19, 'আয়তন পরিমাপের একক হলো -', 'm', 'A. গ্রাম', 'B. সেন্টিমিটার', 'C. বর্গ সেন্টিমিটার', 'D. ঘন সেন্টিমিটার', 'D.', 1, 1, 5, 7, '2022-08-17 04:11:54', '2022-08-17 04:11:54'),
(20, 'হেমাটাইট যে ধাতুর আকরিক তা হলো -', 'm', 'A. সোনা', 'B. তামা', 'C. লোহা', 'D. অ্যালুমিনিয়াম', 'C.', 1, 1, 5, 7, '2022-08-17 04:12:47', '2022-08-17 04:12:47'),
(21, 'অবিশুদ্ধ রক্ত হলো -', 'm', 'A. যে রক্তে কেবল CO2 থাকে', 'B. যে রক্তে O2 - এর তুলনায় CO2 বেশি থাকে', 'C. যে রক্তে কেবল O2 থাকে', 'D. যে রক্তে CO2 - এর তুলনায় O2 বেশি থাকে', 'B.', 1, 1, 5, 7, '2022-08-17 04:14:05', '2022-08-17 04:14:05'),
(22, 'HTML stands for -', 'm', 'A. HighText Machine Language', 'B. HyperText and links Markup Language', 'C. HyperText Markup Language', 'D. None of these', 'C.', 1, 6, 6, 8, '2022-08-17 04:24:41', '2022-08-17 04:24:41'),
(23, 'The correct sequence of HTML tags for starting a webpage is -', 'm', 'A. Head, Title, HTML, body', 'B. HTML, Body, Title, Head', 'C. HTML, Head, Title,', 'D. HTML, Head, Title, Body', 'D.', 1, 6, 6, 8, '2022-08-17 04:28:48', '2022-08-17 04:28:48'),
(24, 'Which of the following element is responsible for making the text bold in HTML?', 'm', 'A. <pre>', 'B. <a>', 'C. <b>', 'D. <br>', 'C.', 1, 6, 6, 8, '2022-08-17 04:29:49', '2022-08-17 04:29:49');

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
(1, 'Bangla', 'Bengali language', 1, '0', '2022-08-14 03:47:48', '2022-08-16 22:28:32'),
(2, 'English', 'English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.', 3, '0', '2022-08-14 03:48:11', '2022-08-15 02:28:25'),
(3, 'Mathematic', 'Karok and FT', 1, '0', '2022-08-14 21:25:49', '2022-08-15 02:28:56'),
(4, 'Oral Test', 'English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.', 4, '1', '2022-08-14 21:28:44', '2022-08-14 21:28:44'),
(5, 'Science', 'Science and Social Science.', 5, '1', '2022-08-15 22:29:07', '2022-08-15 22:29:07'),
(6, 'HTML', 'IT Scholarship Programme', 6, '1', '2022-08-17 04:20:07', '2022-08-17 04:20:07');

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
(8, 'Introduction of html', 'IT Scholarship Programme', 6, 6, '1', '2022-08-17 04:23:15', '2022-08-17 04:26:51');

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
(10, 'Noor', 'noor@gmail.com', NULL, '2', '$2y$10$wcW0t/oBxkY9AOTqSmn8vu4W7fQ/MRLXq6dcHn/yWIFNCt/El3DCq', NULL, '2022-08-15 04:11:11', '2022-08-15 04:11:11');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `quizzes_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `quizzes_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `quizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `topics_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
