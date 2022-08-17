-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tiger_quiz
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `topic_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  KEY `blogs_category_id_foreign` (`category_id`),
  KEY `blogs_subcategory_id_foreign` (`subcategory_id`),
  KEY `blogs_topic_id_foreign` (`topic_id`),
  CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `blogs_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `blogs_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Class 5','English Version','1','2022-08-14 03:01:48','2022-08-15 04:50:17'),(2,'Class 6','English Version 2','1','2022-08-14 03:46:48','2022-08-15 04:50:25'),(3,'Class 7','English Version','1','2022-08-14 21:23:57','2022-08-14 21:26:18'),(4,'Class 8','English Speaking','0','2022-08-14 21:27:37','2022-08-15 04:55:01'),(5,'Class 9','Here, we have provided the NCERT Solutions for Class 9 for the subjects Maths, Science and Social Science.','1','2022-08-15 22:28:28','2022-08-15 22:28:28');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classrooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `roomname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classrooms_user_id_foreign` (`user_id`),
  KEY `classrooms_category_id_foreign` (`category_id`),
  KEY `classrooms_subcategory_id_foreign` (`subcategory_id`),
  CONSTRAINT `classrooms_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `classrooms_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `classrooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classrooms`
--

LOCK TABLES `classrooms` WRITE;
/*!40000 ALTER TABLE `classrooms` DISABLE KEYS */;
/*!40000 ALTER TABLE `classrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) unsigned DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (53,'2014_10_12_000000_create_users_table',1),(54,'2014_10_12_100000_create_password_resets_table',1),(55,'2019_08_19_000000_create_failed_jobs_table',1),(56,'2019_12_14_000001_create_personal_access_tokens_table',1),(57,'2022_08_06_110407_create_categories_table',1),(58,'2022_08_06_110431_create_subcategories_table',1),(59,'2022_08_06_110455_create_topics_table',1),(60,'2022_08_06_110638_create_profiles_table',1),(61,'2022_08_06_110743_create_quizzes_table',1),(62,'2022_08_06_110828_create_quizsets_table',1),(63,'2022_08_06_110844_create_blogs_table',1),(64,'2022_08_06_110905_create_comments_table',1),(65,'2022_08_06_111040_create_classrooms_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  KEY `profiles_category_id_foreign` (`category_id`),
  CONSTRAINT `profiles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,3,1,'Akash Mahmud','GNSL','Gold',NULL,NULL,NULL,'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','01735504608','Dhaka','@rrayhan','@rrayhan','@rrayhan','Rayhan','rayhan@gmail.com','01735504688','B+','Minar_33.png','2022-08-14 03:04:22','2022-08-14 03:04:22'),(2,1,NULL,'Imran Islam','GNSL',NULL,'PHP','Web Developer','Male','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','01735504660','Dhaka','@lurepot','@lurepot','@lurepot',NULL,NULL,NULL,'A+','Imran_11.png','2022-08-14 03:12:11','2022-08-15 19:08:00'),(3,2,NULL,'Lure Pot','GNSL',NULL,'PHP','Web Developer','Male','Lorem Ipsum is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','01735504660','Dhaka','@lurepot','@lurepot','@lurepot',NULL,NULL,NULL,'A+','LurePot_12.png','2022-08-14 03:15:30','2022-08-17 00:00:26'),(4,4,NULL,'Abu Saleh Abdullah Al-Mamun','GNSL',NULL,'Computer Science','Faculty','Male','Hi, I\'m @asamamun; I\'m interested in web solutions; I\'m currently teaching web application development; 💞️ I\'m looking to collaborate on projects.','01735504898','Dhaka','@mamuncitiut','@mamuncitiut','@mamuncitiut',NULL,NULL,NULL,'A+','Admin_24.png','2022-08-14 03:39:43','2022-08-14 06:34:13'),(5,6,NULL,'Apples Mahmud','GNSL',NULL,'PHP','Web Developer',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','01735504660','Dhaka','@rrayhan','@rrayhan','@rrayhan',NULL,NULL,NULL,'A+','','2022-08-14 06:15:41','2022-08-14 06:15:41'),(7,9,NULL,'Imran Hussain','GNSL',NULL,'UI','WDPF','Male','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words that don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of the text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words, etc.','01735504660','Dhaka','@lurepot','@lurepot','@lurepot',NULL,NULL,NULL,'B+','Imran Hussain_29.png','2022-08-14 11:47:52','2022-08-14 11:47:52'),(8,10,NULL,'Noor Islam','GNSL',NULL,'PHP','Web Developer','Female','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','01735504660','Dhaka','@lurepot','@lurepot','@lurepot',NULL,NULL,NULL,'O+','Noor_210.png','2022-08-15 04:36:09','2022-08-15 04:40:25'),(10,8,1,'Imran Islam','GNSL','Gold',NULL,NULL,'Male','Biography','01735504660','Dhaka','@lurepot','@lurepot','@lurepot','Rayhan','lurepot@gmail.com','01735504660','O+','Aman_38.png','2022-08-15 08:13:05','2022-08-15 10:15:18');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizsets`
--

DROP TABLE IF EXISTS `quizsets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quizsets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quizzes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizsets_user_id_foreign` (`user_id`),
  KEY `quizsets_category_id_foreign` (`category_id`),
  KEY `quizsets_subcategory_id_foreign` (`subcategory_id`),
  CONSTRAINT `quizsets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `quizsets_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `quizsets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizsets`
--

LOCK TABLES `quizsets` WRITE;
/*!40000 ALTER TABLE `quizsets` DISABLE KEYS */;
/*!40000 ALTER TABLE `quizsets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quizzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` set('m','d') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'm',
  `op1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `topic_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizzes_user_id_foreign` (`user_id`),
  KEY `quizzes_category_id_foreign` (`category_id`),
  KEY `quizzes_subcategory_id_foreign` (`subcategory_id`),
  KEY `quizzes_topic_id_foreign` (`topic_id`),
  CONSTRAINT `quizzes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `quizzes_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `quizzes_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  CONSTRAINT `quizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizzes`
--

LOCK TABLES `quizzes` WRITE;
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT INTO `quizzes` VALUES (1,'mmmmm','m','nb','nhh','jj','nn','A.',1,1,1,4,'2022-08-16 20:19:10','2022-08-16 23:52:31'),(2,'mmm','m','A. ggg','B. gg','C. gg','D. gg','B.',1,2,1,1,'2022-08-16 20:22:17','2022-08-16 23:52:43'),(3,'uuuuuuuuuuuuuuu','m','As','cff','fds','AZd','A.',1,1,1,1,'2022-08-16 20:23:57','2022-08-16 23:50:53'),(4,'hhhhhhhhhhhhh','m','As','AZd','fds','hh','B.',1,2,2,2,'2022-08-16 20:25:56','2022-08-16 23:53:01'),(5,'hhhh','m','gggg','hhh','hhh','hh','ll',1,2,1,1,'2022-08-16 20:27:47','2022-08-16 20:27:47'),(6,'bbbb','m','As','b','b','A. really good','ll',1,1,1,2,'2022-08-16 20:34:49','2022-08-16 20:34:49'),(7,'hhh','m','hhhh','hhh','hhh','hhooooooo','gg',1,2,1,2,'2022-08-16 20:35:47','2022-08-16 20:35:47'),(8,'uuu','m','gggg','hhh','uuu','A. jjjjjj','ppppp',1,1,2,4,'2022-08-16 20:39:35','2022-08-16 20:39:35'),(9,'hhhyu','m','A. nb','B. nhh','C. jh','D. uu','B.',1,4,3,2,'2022-08-16 20:52:17','2022-08-16 23:53:17'),(10,'nhnhher','m','A. nbjjj','B. ggyyy','C. ggjjj','D. uujjjj','B.',2,2,2,2,'2022-08-17 00:01:41','2022-08-17 00:01:41'),(11,'hhjjuuii','m','A. hhh','B. nhhfffd','C. ggffd','D. jkiio','C.',2,3,3,3,'2022-08-17 00:03:47','2022-08-17 00:03:47'),(12,'jkklku','m','A. hhhggg','B. huiooop','C. jh','D. gg','B.',2,5,3,2,'2022-08-17 00:05:34','2022-08-17 00:05:34'),(13,'jjjumoon','m','A. nb','B. gg','C. ggffd','D. jkiio','A.',6,2,1,2,'2022-08-17 00:14:23','2022-08-17 00:14:23'),(14,'nnmmmj','m','A. hhh','B. ggyyy','C. ggffd','D. gg','C.',6,4,3,1,'2022-08-17 00:14:58','2022-08-17 00:14:58');
/*!40000 ALTER TABLE `quizzes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_category_id_foreign` (`category_id`),
  CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (1,'Bangla','Bengali language',1,'0','2022-08-14 03:47:48','2022-08-16 22:28:32'),(2,'English','English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.',3,'0','2022-08-14 03:48:11','2022-08-15 02:28:25'),(3,'Mathematic','Karok and FT',1,'0','2022-08-14 21:25:49','2022-08-15 02:28:56'),(4,'Oral Test','English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.',4,'1','2022-08-14 21:28:44','2022-08-14 21:28:44'),(5,'Science','Science and Social Science.',5,'1','2022-08-15 22:29:07','2022-08-15 22:29:07');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topics_category_id_foreign` (`category_id`),
  KEY `topics_subcategory_id_foreign` (`subcategory_id`),
  CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `topics_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Noun','A noun is a word that names something, such as a person, place, thing, or idea.',1,3,'1','2022-08-14 03:50:01','2022-08-15 04:42:50'),(2,'Parts of Speech','The Eight Parts of Speech.',4,1,'0','2022-08-14 03:51:14','2022-08-15 04:43:14'),(3,'Viva-Voice','English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.',2,2,'1','2022-08-14 21:29:54','2022-08-15 04:43:44'),(4,'History','Bengali language, an eastern Indo-Aryan language · The endonym of Bengal, a geographical and ethno-linguistic region in South Asia.',NULL,1,'1','2022-08-15 22:27:23','2022-08-15 22:27:23');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` set('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Imran','imran@gmail.com',NULL,'1','$2y$10$ycpUy8o49hsfn3Va.hG9DOKRlGQR9dG4lzdBNL9INF./e0Qq3ifsy',NULL,'2022-08-14 02:56:52','2022-08-14 02:56:52'),(2,'LurePot','lurepot@gmail.com',NULL,'1','$2y$10$nzghHAwSSZVAA03b78zCBugJeCoFePDKE0d/K3av19l8kb1CPCNTS',NULL,'2022-08-14 02:57:49','2022-08-14 02:57:49'),(3,'Minar','minar@gmail.com',NULL,'3','$2y$10$pck0pO004y7QLvXZu82UUeSgj3pCABF3yIeGQDm.BUcmdti23OcjG',NULL,'2022-08-14 02:58:26','2022-08-14 02:58:26'),(4,'Admin','mamuncitiut@gmail.com',NULL,'2','$2y$10$tCgB1FJaWp/7erC3kMmeLeSx1AKSkkNNG3Et3iio9KPiSMgv.TTKm',NULL,'2022-08-14 03:17:18','2022-08-14 03:17:18'),(6,'Umer','umer@mail.com',NULL,'2','$2y$10$Ulnjh4sco/YFM/PnB5MJ0OwGknq1CV2sNrQPomnbsWQtL.NaDcvFC',NULL,'2022-08-14 06:11:47','2022-08-14 06:11:47'),(7,'Imran Hussain','imu@gmail.com',NULL,'2','$2y$10$QF85zW3pJCMVhBMFMElf2Od3mJV.mMuwRwe.0la7AWkGxXNZpJph.',NULL,'2022-08-14 06:17:24','2022-08-14 06:17:24'),(8,'Aman','aman@gmail.com',NULL,'3','$2y$10$dflVp0LaZ7G4isIn8kWpe.H01F2JkJCpPQLkkTOfJydwTfJMUX6KW',NULL,'2022-08-14 06:34:58','2022-08-14 06:34:58'),(9,'Imran Hussain','imranislamp@gmail.com',NULL,'2','$2y$10$Z6T9PNSveHmZ5g5TPlXDjO61LUM/jNEHPztV2.5GTkZc09YAJWKj.',NULL,'2022-08-14 11:43:53','2022-08-14 11:43:53'),(10,'Noor','noor@gmail.com',NULL,'2','$2y$10$wcW0t/oBxkY9AOTqSmn8vu4W7fQ/MRLXq6dcHn/yWIFNCt/El3DCq',NULL,'2022-08-15 04:11:11','2022-08-15 04:11:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-17 12:17:56
