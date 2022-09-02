-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 10:12 PM
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
(1, 'Who is making the Web standards?', 'm', 'Google', 'Mozilla', 'The World Wide Web Consortium', 'Microsoft', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 22:36:13', '2022-09-02 12:53:55'),
(2, 'Choose the correct HTML element for the largest heading:', 'm', '<h6>', '<h1>', '<heading>', '<head>', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:50:29', '2022-09-02 12:55:00'),
(3, 'What is the correct HTML element for inserting a line break?', 'm', '<break>', '<ib>', '<br>', '<b>', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:51:24', '2022-09-02 12:56:03'),
(4, 'What is the correct HTML for adding a background color?', 'm', '<body bg=\"yellow\">', '<body style=\"background-color:yellow;\">', '<background>yellow</background>', 'None of above', 'null', NULL, 11, 6, 6, 8, '2022-08-18 22:52:20', '2022-09-02 12:57:05'),
(5, 'Choose the correct HTML element to define important text', 'm', '<strong>', '<b>', '<i>', '<important>', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 22:53:21', '2022-09-02 12:58:03'),
(6, 'Choose the correct HTML element to define emphasized text', 'm', '<italic>', '<i>', '<em>', '<y>', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 22:57:11', '2022-09-02 13:00:03'),
(7, 'What is the correct HTML for creating a hyperlink?', 'm', 'A. <a url=\"http://www.w3schools.com\">W3Schools.com</a>', 'B. <a href=\"http://www.w3schools.com\">W3Schools</a>', 'C. <a name=\"http://www.w3schools.com\">W3Schools.com</a>', 'D. <a>http://www.w3schools.com</a>', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 22:58:19', '2022-08-18 22:58:19'),
(8, 'Which character is used to indicate an end tag?', 'm', '/', '^', '*', '<', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 22:59:21', '2022-09-02 13:00:55'),
(9, 'How can you open a link in a new tab/browser window?', 'm', '<a href=\"url\" target=\"new\">', '<a href=\"url\" new>', '<a href=\"url\" target=\"_blank\">', 'None of above', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:00:10', '2022-09-02 13:01:50'),
(10, 'Which of these elements are all <table> elements?', 'm', '<table><head><tfoot>', '<thead><body><tr>', '<table><tr><tt>', '<table><tr><td>', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:01:15', '2022-09-02 13:02:18'),
(11, 'Inline elements are normally displayed without starting a new line.', 'm', 'True', 'False', 'C.', 'D.', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:01:54', '2022-09-02 13:02:59'),
(12, 'How can you make a numbered list?', 'm', '<list>', '<ol>', '<dl>', '<ul>', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:02:48', '2022-09-02 13:03:36'),
(13, 'How can you make a bulleted list?', 'm', '<ol>', '<list>', '<dl>', '<ul>', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:05:16', '2022-09-02 13:03:56'),
(14, 'What is the correct HTML for making a checkbox?', 'm', '<check>', '<input type=\"checkbox\">', '<checkbox>', '<input type=\"check\">', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:06:08', '2022-09-02 13:04:17'),
(15, 'What is the correct HTML for making a text input field?', 'm', '<input type=\"text\">', '<textinput type=\"text\">', '<input type=\"textfield\">', '<textfield>', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:06:59', '2022-09-02 13:04:47'),
(16, 'What is the correct HTML for making a drop-down list?', 'm', '<input type=\"dropdown\">', '<select>', '<input type=\"list\">', '<list>', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:08:02', '2022-09-02 13:05:09'),
(17, 'What is the correct HTML for making a text area?', 'm', '<input type=\"textarea\">', '<input type=\"textbox\">', '<textarea>', 'None of above', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:09:57', '2022-09-02 13:05:34'),
(18, 'What is the correct HTML for inserting an image?', 'm', '<image src=\"image.gif\" alt=\"MyImage\">', '<img alt=\"MyImage\">image.gif</img>', '<img src=\"image.gif\" alt=\"MyImage\">', '<img href=\"image.gif\" alt=\"MyImage\">', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:11:09', '2022-09-02 13:06:01'),
(19, 'What is the correct HTML for inserting a background image?', 'm', '<background img=\"background.gif\">', '<body style=\"background-image:url(background.gif)\">', '<body bg=\"background.gif\">', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:11:53', '2022-09-02 13:06:23'),
(20, 'An <iframe> is used to display a web page within a web page.', 'm', 'True', 'There is no such thing as an <iframe>', 'C. False', 'None of above', 'op1', NULL, 11, 6, 6, 8, '2022-08-18 23:12:34', '2022-09-02 13:06:42'),
(21, 'HTML comments start with <!-- and end with -->', 'm', 'False', 'True', 'C.', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:13:13', '2022-09-02 13:07:08'),
(22, 'Block elements are normally displayed without starting a new line.', 'm', 'True', 'False', 'C.', 'None of above', 'op2', NULL, 11, 6, 6, 8, '2022-08-18 23:13:48', '2022-09-02 13:07:43'),
(23, 'Which HTML element defines the title of a document?', 'm', '<head>', '<meta>', '<title>', 'None of above', 'op3', NULL, 11, 6, 6, 8, '2022-08-18 23:14:37', '2022-09-02 13:08:23'),
(24, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'm', 'longdesc', 'src', 'title', 'alt', 'op4', NULL, 11, 6, 6, 8, '2022-08-18 23:15:39', '2022-09-02 13:08:45'),
(25, 'What does CSS stand for?', 'm', 'Computer Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Creative Style Sheets', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:16:09', '2022-09-02 13:09:06'),
(26, 'What is the correct HTML for referring to an external style sheet?', 'm', 'A. <link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\">', 'B. <stylesheet>mystyle.css</stylesheet>', 'C. <style src=\"mystyle.css\">', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:17:08', '2022-08-22 04:17:08'),
(27, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'm', 'A. In the <head> section', 'B. In the <body> section', 'C. At the end of the document', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:18:01', '2022-08-22 04:18:01'),
(28, 'Which HTML tag is used to define an internal style sheet?', 'm', 'A. <script>', 'B. <css>', 'C. <style>', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:18:50', '2022-08-22 04:18:50'),
(29, 'Which HTML attribute is used to define inline styles?', 'm', 'A. class', 'B. font', 'C. styles', 'D. style', 'op4', NULL, 11, 6, 8, 10, '2022-08-22 04:20:05', '2022-08-22 04:20:05'),
(30, 'Which is the correct CSS syntax?', 'm', 'A. {body:color=black;}', 'B. body {color: black;}', 'C. body:color=black;', 'D. {body;color:black;}', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:21:04', '2022-08-22 04:21:04'),
(31, 'How do you insert a comment in a CSS file?', 'm', 'A. // this is a comment', 'B. \' this is a comment', '/* this is a comment */', 'D. // this is a comment //', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:22:42', '2022-08-22 04:22:42'),
(32, 'Which property is used to change the background color?', 'm', 'A. bgcolor', 'B. background-color', 'C. color', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:23:28', '2022-08-22 04:23:28'),
(33, 'How do you add a background color for all <h1> elements?', 'm', 'A. h1.all {background-color:#FFFFFF;}', 'B. all.h1 {background-color:#FFFFFF;}', 'C. h1 {background-color:#FFFFFF;}', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:24:34', '2022-08-22 04:24:34'),
(34, 'Which CSS property is used to change the text color of an element?', 'm', 'A. text-color', 'B. color', 'C. fgcolor', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:25:25', '2022-08-22 04:25:25'),
(35, 'Which CSS property controls the text size?', 'm', 'A. font-size', 'B. font-style', 'C. text-size', 'D. text-style', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:27:31', '2022-08-22 04:27:31'),
(36, 'What is the correct CSS syntax for making all the <p> elements bold?', 'm', 'A. <p style=\"font-size:bold;\">', 'B. p {font-weight:bold;}', 'C. p {text-size:bold;}', 'D. <p style=\"text-size:bold;\">', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:28:32', '2022-08-22 04:28:32'),
(37, 'How do you display hyperlinks without an underline?', 'm', 'A. a {text-decoration:none;}', 'B. a {text-decoration:no-underline;}', 'C. a {underline:none;}', 'D. a {decoration:no-underline;}', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:29:43', '2022-08-22 04:29:43'),
(38, 'How do you make each word in a text start with a capital letter?', 'm', 'A. transform:capitalize', 'B. text-style:capitalize', 'C. text-transform:capitalize', 'D. You can\'t do that with CSS', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:30:45', '2022-08-22 04:30:45'),
(39, 'Which property is used to change the font of an element?', 'm', 'A. font-weight', 'B. font-family', 'C. font-style', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:31:31', '2022-08-22 04:31:31'),
(40, 'How do you make the text bold?', 'm', 'A. style:bold;', 'B. font:bold;', 'C. font-weight:bold;', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:32:37', '2022-08-22 04:32:37'),
(41, 'How do you display a border like this:\r\n\r\nThe top border = 10 pixels\r\nThe bottom border = 5 pixels\r\nThe left border = 20 pixels\r\nThe right border = 1pixel?', 'm', 'A. border-width:5px 20px 10px 1px;', 'B. border-width:10px 5px 20px 1px;', 'C. border-width:10px 20px 5px 1px;', 'D. border-width:10px 1px 5px 20px;', 'op4', NULL, 11, 6, 8, 10, '2022-08-22 04:33:56', '2022-08-22 04:33:56'),
(42, 'Which property is used to change the left margin of an element?', 'm', 'A. margin-left', 'B. padding-left', 'C. indent', 'D.', 'op1', NULL, 11, 6, 8, 10, '2022-08-22 04:34:57', '2022-08-22 04:34:57'),
(43, 'When using the padding property; are you allowed to use negative values?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op2', NULL, 11, 6, 8, 10, '2022-08-22 04:35:36', '2022-08-22 04:35:36'),
(44, 'How do you make a list that lists its items with squares?', 'm', 'A. list-type: square;', 'B. list: square;', 'C.list-style-type: square;', 'D.', 'op3', NULL, 11, 6, 8, 10, '2022-08-22 04:36:28', '2022-08-22 04:36:28'),
(45, 'The .container class provides a full width container, spanning the entire width of the screen', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:43:04', '2022-08-22 04:43:04'),
(46, 'Which class provides a responsive fixed width container?', 'm', 'A. .container-fluid', 'B. .container-responsive', 'C. .container-fixed', 'D. .container', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:44:08', '2022-08-22 04:44:08'),
(47, 'Which contextual class is used to create an orange text color?', 'm', 'A. .bg-warning', 'B. .txt-orange', 'C. .text-warning', 'D. .txt-warning', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:45:05', '2022-08-22 04:45:05'),
(48, 'The Bootstrap grid system is based on how many columns?', 'm', 'A. 12', 'B. 3', 'C. 9', 'D. 6', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:45:48', '2022-08-22 04:45:48'),
(49, 'Which class adds zebra-stripes to a table?', 'm', 'A. .table-bordered', 'B. .table-striped', 'C. .table-zebra', 'D. .even and .odd', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:46:45', '2022-08-22 04:46:45'),
(50, 'Which class shapes an image to a circle?', 'm', 'A. .img-rounded', 'B. .rounded-circle', 'C. .img-round', 'D. .img-circle', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:47:36', '2022-08-22 04:47:36'),
(51, 'Which class is used to create a big box for calling extra attention?', 'm', 'A. .jumbotron', 'B. .bigbox', 'C. There is no such class', 'D. .container', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:48:24', '2022-08-22 04:48:24'),
(52, 'Which class is used to create a button group?', 'm', 'A. .btn-group', 'B. .group-btn', 'C. .group-button', 'D. .button-group', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:49:26', '2022-08-22 04:49:26'),
(53, 'Which button class is used to create a large button?', 'm', 'A. .btn-large', 'B. .btn-l2', 'C. .btn-l', 'D. .btn-lg', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:50:17', '2022-08-22 04:50:17'),
(54, 'Which class is used to create a badge?', 'm', 'A. .label-badge', 'B. .badge-label', 'C. .badge', 'D. .badge-item', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:51:06', '2022-08-22 04:51:06'),
(55, 'Which class is used to create a loader?', 'm', 'A. .spinner-border', 'B. .spinner', 'C. .spinner-loader', 'D. .loader', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:52:09', '2022-08-22 04:52:09'),
(56, 'Which class is used to create a basic pagination?', 'm', 'A. .navigation', 'B. .pages', 'C. .page', 'D. .pagination', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:52:54', '2022-08-22 04:52:54'),
(57, 'Which class is used to create a basic list group?', 'm', 'A. .grouped-list', 'B. .list-group', 'C. .group-list', 'D.', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:53:35', '2022-08-22 04:53:35'),
(58, 'Which class adds a heading to a card?', 'm', 'A. .card-header', 'B. .card-head', 'C. .card-footer', 'D. .card-heading', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:54:22', '2022-08-22 04:54:22'),
(59, 'Which class indicates a dropdown menu?', 'm', 'A. .dropdown-list', 'B. .select', 'C. .dropdown', 'D.', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:55:20', '2022-08-22 04:55:20'),
(60, 'Which class is used to create a vertical navigation bar?', 'm', 'A. .navbar navbar-vertical', 'B. .navbar', 'C. .navbar-inverse', 'D. .navbar-vertical', 'op2', NULL, 11, 6, 9, 11, '2022-08-22 04:56:25', '2022-08-22 04:56:25'),
(61, 'Which component is used to cycle through elements, like a slideshow?', 'm', 'A. Scrollspy', 'B. Slideshow', 'C. Orbit', 'D. Carousel', 'op4', NULL, 11, 6, 9, 11, '2022-08-22 04:57:17', '2022-08-22 04:57:17'),
(62, 'Which contextual class indicates a succesful or positive action?', 'm', 'A. .bg-warning', 'B. .bg-primary', 'C. .bg-success', 'D. .bg-info', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:58:08', '2022-08-22 04:58:08'),
(63, 'Which contextual class indicates a dangerous or potentially negative action?', 'm', 'A. .bg-danger', 'B. .bg-info', 'C. .bg-dark', 'D. .bg-primary', 'op1', NULL, 11, 6, 9, 11, '2022-08-22 04:58:59', '2022-08-22 04:58:59'),
(64, 'Which class indicates uppercased text?', 'm', 'A. .text-capitalize', 'B. .ucase', 'C. .text-uppercase', 'D. .uppercase', 'op3', NULL, 11, 6, 9, 11, '2022-08-22 04:59:50', '2022-08-22 04:59:50'),
(65, 'Inside which HTML element do we put the JavaScript?', 'm', 'A. <js>', 'B. <javascript>', 'C. <script>', 'D. <scripting>', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:02:33', '2022-08-22 05:02:33'),
(66, 'What is the correct JavaScript syntax to change the content of the HTML element below?\r\n<p id=\"demo\">This is a demonstration.</p>', 'm', 'A. document.getElement(\"p\").innerHTML = \"Hello World!\";', 'B. document.getElementById(\"demo\").innerHTML = \"Hello World!\";', 'C. document.getElementByName(\"p\").innerHTML = \"Hello World!\";', 'D. #demo.innerHTML = \"Hello World!\";', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:03:41', '2022-08-22 05:03:41'),
(67, 'Where is the correct place to insert a JavaScript?', 'm', 'A. The <body> section', 'B. The <head> section', 'C. Both the <head> section and the <body> section are correct', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:04:39', '2022-08-22 05:04:39'),
(68, 'What is the correct syntax for referring to an external script called \"xxx.js\"?', 'm', 'A. <script src=\"xxx.js\">', 'B. <script name=\"xxx.js\">', 'C. <script href=\"xxx.js\">', 'D.', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:05:25', '2022-08-22 05:05:25'),
(69, 'The external JavaScript file must contain the <script> tag.', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:06:40', '2022-08-22 05:06:40'),
(70, 'How do you write \"Hello World\" in an alert box?', 'm', 'A. msgBox(\"Hello World\");', 'B. alertBox(\"Hello World\");', 'C. msg(\"Hello World\");', 'D. alert(\"Hello World\");', 'op4', NULL, 11, 6, 7, 9, '2022-08-22 05:07:45', '2022-08-22 05:07:45'),
(71, 'How do you create a function in JavaScript?', 'm', 'A. function:myFunction()', 'B. function = myFunction()', 'C. function myFunction()', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:08:29', '2022-08-22 05:08:29'),
(72, 'How do you call a function named \"myFunction\"?', 'm', 'A. myFunction()', 'B. call myFunction()', 'C. call function myFunction()', 'D.', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:09:14', '2022-08-22 05:09:14'),
(73, 'How to write an IF statement in JavaScript?', 'm', 'A. if i = 5 then', 'B. if (i == 5)', 'C. if i = 5', 'D. if i == 5 then', 'op2', NULL, 11, 6, 7, 9, '2022-08-22 05:10:13', '2022-08-22 05:10:13'),
(74, 'How to write an IF statement for executing some code if \"i\" is NOT equal to 5?', 'm', 'A. if (i != 5)', 'B. if (i <> 5)', 'C. if i <> 5', 'D. if i =! 5 then', 'op1', NULL, 11, 6, 7, 9, '2022-08-22 05:11:02', '2022-08-22 05:11:02'),
(75, 'How does a WHILE loop start?', 'm', 'A. while (i <= 10; i++)', 'B. while i = 1 to 10', 'C. while (i <= 10)', 'D.', 'op3', NULL, 11, 6, 7, 9, '2022-08-22 05:11:48', '2022-08-22 05:11:48'),
(76, 'What does PHP stand for?', 'm', 'A. Personal Hypertext Processor', 'B. PHP: Hypertext Preprocessor', 'C. Private Home Page', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 06:58:45', '2022-08-22 06:58:45'),
(77, 'PHP server scripts are surrounded by delimiters, which?', 'm', 'A. <?php>...</?>', 'B. <&>...</&>', 'C. <script>...</script>', 'D. <?php...?>', 'null', NULL, 11, 6, 10, 12, '2022-08-22 06:59:33', '2022-08-22 06:59:33'),
(78, 'How do you write \"Hello World\" in PHP', 'm', 'A. \"Hello World\";', 'B. echo \"Hello World\"', 'C. Document.Write(\"Hello World\");', 'D.', 'null', NULL, 11, 6, 10, 12, '2022-08-22 07:00:12', '2022-08-22 07:00:12'),
(79, 'All variables in PHP start with which symbol?', 'm', 'A. $', 'B. &', 'C. !', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:00:56', '2022-08-22 07:00:56'),
(80, 'What is the correct way to end a PHP statement?', 'm', 'A. </php>', 'B. New line', 'C. ;', 'D. ,', 'op3', NULL, 11, 6, 10, 12, '2022-08-22 07:01:47', '2022-08-22 07:01:47'),
(81, 'The PHP syntax is most similar to:', 'm', 'A. JavaScript', 'B. Perl and C', 'C. VBScript', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:02:56', '2022-08-22 07:02:56'),
(82, 'How do you get information from a form that is submitted using the \"get\" method?', 'm', 'A. $_GET[];', 'B. Request.Form;', 'C. Request.QueryString;', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:04:01', '2022-08-22 07:04:01'),
(83, 'When using the POST method, variables are displayed in the URL:', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:04:35', '2022-08-22 07:04:35'),
(84, 'In PHP you can use both single quotes ( \' \' ) and double quotes ( \" \" ) for strings:', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:05:12', '2022-08-22 07:05:12'),
(85, 'Include files must have the file extension \".inc\"', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:05:51', '2022-08-22 07:05:51'),
(86, 'What is the correct way to include the file \"time.inc\" ?', 'm', 'A. <?php include \"time.inc\"; ?>', 'B. <!-- include file=\"time.inc\" -->', 'C. <?php include file=\"time.inc\"; ?>', 'D. <?php include:\"time.inc\"; ?>', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:06:45', '2022-08-22 07:06:45'),
(87, 'What is the correct way to create a function in PHP?', 'm', 'A. function myFunction()', 'B. create myFunction()', 'C. new_function myFunction()', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:08:19', '2022-08-22 07:08:19'),
(88, 'What is the correct way to open the file \"time.txt\" as readable?', 'm', 'A. open(\"time.txt\",\"read\");', 'B. fopen(\"time.txt\",\"r+\")', 'C. open(\"time.txt\");', 'D. fopen(\"time.txt\",\"r\");', 'null', NULL, 11, 6, 10, 12, '2022-08-22 07:09:24', '2022-09-02 05:24:17'),
(89, 'PHP allows you to send emails directly from a script', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:10:13', '2022-08-22 07:10:13'),
(90, 'Which superglobal variable holds information about headers, paths, and script locations?', 'm', 'A. $_SESSION', 'B. $_GET', 'C. $_SERVER', 'D. $GLOBALS', 'op3', NULL, 11, 6, 10, 12, '2022-08-22 07:11:14', '2022-08-22 07:11:14'),
(91, 'What is the correct way to add 1 to the $count variable?', 'm', 'A. count++;', 'B. $count++;', 'C. $count =+1', 'D. ++count', 'op2', NULL, 11, 6, 10, 12, '2022-08-22 07:12:14', '2022-08-22 07:12:14'),
(92, 'What is a correct way to add a comment in PHP?', 'm', 'A. <comment>...</comment>', 'B. <!--...-->', 'C. *\\...\\*', 'D. /*...*/', 'op4', NULL, 11, 6, 10, 12, '2022-08-22 07:13:16', '2022-08-22 07:13:16'),
(93, 'PHP can be run on Microsoft Windows IIS(Internet Information Server):', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:14:30', '2022-08-22 07:14:30'),
(94, 'The die() and exit() functions do the exact same thing.', 'm', 'A. True', 'B. False', 'C.', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:15:26', '2022-08-22 07:15:26'),
(95, 'Which one of these variables has an illegal name?', 'm', 'A. $my-Var', 'B. $myVar', 'C. $my_Var', 'D.', 'op1', NULL, 11, 6, 10, 12, '2022-08-22 07:16:13', '2022-08-22 07:16:13'),
(96, 'Which of the following is correct?', 'm', 'A. jQuery is a JavaScript Library', 'B. jQuery is a JSON Library', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:21:24', '2022-08-22 07:21:24'),
(97, 'jQuery uses CSS selectors to select elements?', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:21:55', '2022-08-22 07:21:55'),
(98, 'Which sign does jQuery use as a shortcut for jQuery?', 'm', 'A. the ? Sign', 'B. the % sign', 'C. the $ sign', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:22:44', '2022-08-22 07:22:44'),
(99, 'Look at the following selector: $(\"div\"). What does it select?', 'm', 'A. The first div element', 'B. All div elements', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:23:27', '2022-08-22 07:23:27'),
(100, 'Is jQuery a library for client scripting or server scripting?', 'm', 'A. Client scripting', 'B. Server scripting', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:24:13', '2022-08-22 07:24:13'),
(101, 'Is it possible to use jQuery together with AJAX?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:24:50', '2022-08-22 07:24:50'),
(102, 'The jQuery html() method works for both HTML and XML documents', 'm', 'A. False', 'B. True', 'C.', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:25:21', '2022-08-22 07:25:21'),
(103, 'What is the correct jQuery code to set the background color of all p elements to red?', 'm', 'A. $(\"p\").layout(\"background-color\",\"red\");', 'B. $(\"p\").manipulate(\"background-color\",\"red\");', 'C. $(\"p\").css(\"background-color\",\"red\");', 'D. $(\"p\").style(\"background-color\",\"red\");', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:26:34', '2022-08-22 07:26:34'),
(104, 'With jQuery, look at the following selector: $(\"div.intro\"). What does it select?', 'm', 'A. All div elements with id=\"intro\"', 'B. The first div element with class=\"intro\"', 'C. The first div element with id=\"intro\"', 'D. All div elements with class=\"intro\"', 'op4', NULL, 11, 6, 11, 13, '2022-08-22 07:28:04', '2022-08-22 07:28:04'),
(105, 'Which jQuery method is used to hide selected elements?', 'm', 'A. display(none)', 'B.visible(false)', 'C. hide()', 'D.hidden()', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:29:04', '2022-08-22 07:29:04'),
(106, 'Which jQuery method is used to set one or more style properties for selected elements?', 'm', 'A. style()', 'B. css()', 'C. html()', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:29:50', '2022-08-22 07:29:50'),
(107, 'Which jQuery method is used to perform an asynchronous HTTP request?', 'm', 'A. jQuery.ajaxSetup()', 'B. jQuery.ajaxAsync()', 'C. jQuery.ajax()', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:30:33', '2022-08-22 07:30:33'),
(108, 'What is the correct jQuery code for making all div elements 100 pixels high?', 'm', 'A. $(\"div\").height(100)', 'B. $(\"div\").yPos(100)', 'C. $(\"div\").height=\"100\"', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:31:22', '2022-08-22 07:31:22'),
(109, 'Which statement is true?', 'm', 'A. To use jQuery, you do not have to do anything. Most browsers (Internet Explorer, Chrome, Firefox and Opera) have the jQuery library built in the browser', 'B. To use jQuery, you must buy the jQuery library at www.jquery.com', 'C. To use jQuery, you can refer to a hosted jQuery library at Google', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:32:08', '2022-08-22 07:32:08'),
(110, 'What scripting language is jQuery written in?', 'm', 'A. VBScript', 'B. C#', 'C. C++', 'D. JavaScript', 'op4', NULL, 11, 6, 11, 13, '2022-08-22 07:32:57', '2022-08-22 07:32:57'),
(111, 'Which jQuery function is used to prevent code from running, before the document is finished loading?', 'm', 'A. $(document).ready()', 'B. $(body).onload()', 'C. $(document).load()', 'D.', 'op1', NULL, 11, 6, 11, 13, '2022-08-22 07:33:40', '2022-08-22 07:33:40'),
(112, 'Which jQuery method should be used to deal with name conflicts?', 'm', 'A. nameConflict()', 'B. noConflict()', 'C. conflict()', 'D. noNameConflict()', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:34:33', '2022-08-22 07:34:33'),
(113, 'Which jQuery method is used to switch between adding/removing one or more classes (for CSS) from selected elements?', 'm', 'A. switchClass()', 'B. toggleClass()', 'C. altClass()', 'D. switch()', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:35:30', '2022-08-22 07:35:30'),
(114, 'Look at the following selector: $(\"div p\"). What does it select?', 'm', 'A. The first p element inside a div element', 'B. All div elements with a p element', 'C. All p elements inside a div element', 'D.', 'op3', NULL, 11, 6, 11, 13, '2022-08-22 07:37:49', '2022-08-22 07:37:49'),
(115, 'Is jQuery a W3C standard?', 'm', 'A. Yes', 'B. No', 'C.', 'D.', 'op2', NULL, 11, 6, 11, 13, '2022-08-22 07:38:31', '2022-08-22 07:38:31');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
