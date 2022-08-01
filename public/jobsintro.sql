-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2022 at 06:55 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsintro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'WUAS Admin', 'admin', 'admin@wuas.com', NULL, '$2y$10$4z.8G5vqefexEVKUa/JtmuLw7ih22Qx4HiEFXxQCmtpFDIKGUjJcq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wuas_post_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `wuas_post_id`) VALUES
(3, 7),
(6, 7),
(4, 17),
(5, 17),
(8, 30),
(7, 31),
(9, 32);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'user_id',
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `likeable_type`, `likeable_id`, `created_at`, `updated_at`) VALUES
(2, 6, 'App\\Models\\WuasPost', 6, '2022-05-19 08:23:09', '2022-05-19 08:23:09'),
(3, 8, 'App\\Models\\WuasPost', 6, '2022-05-19 10:49:54', '2022-05-19 10:49:54'),
(6, 13, 'App\\Models\\WuasPost', 6, '2022-05-19 13:25:58', '2022-05-19 13:25:58'),
(7, 11, 'App\\Models\\WuasPost', 6, '2022-05-19 15:22:05', '2022-05-19 15:22:05'),
(8, 11, 'App\\Models\\WuasPost', 13, '2022-05-19 15:22:09', '2022-05-19 15:22:09'),
(17, 17, 'App\\Models\\WuasPost', 17, '2022-05-19 22:53:36', '2022-05-19 22:53:36'),
(20, 14, 'App\\Models\\WuasPost', 19, '2022-05-20 01:36:23', '2022-05-20 01:36:23'),
(21, 14, 'App\\Models\\WuasPost', 20, '2022-05-20 01:36:27', '2022-05-20 01:36:27'),
(25, 22, 'App\\Models\\WuasPost', 20, '2022-05-21 01:48:22', '2022-05-21 01:48:22'),
(26, 23, 'App\\Models\\WuasPost', 22, '2022-05-21 04:09:36', '2022-05-21 04:09:36'),
(27, 23, 'App\\Models\\WuasPost', 20, '2022-05-21 04:09:45', '2022-05-21 04:09:45'),
(29, 23, 'App\\Models\\WuasPost', 24, '2022-05-21 04:20:55', '2022-05-21 04:20:55'),
(36, 24, 'App\\Models\\WuasPost', 28, '2022-05-21 04:40:54', '2022-05-21 04:40:54'),
(38, 24, 'App\\Models\\WuasPost', 7, '2022-05-21 04:43:15', '2022-05-21 04:43:15'),
(39, 24, 'App\\Models\\WuasPost', 17, '2022-05-21 04:43:20', '2022-05-21 04:43:20'),
(46, 25, 'App\\Models\\WuasPost', 30, '2022-05-21 10:03:52', '2022-05-21 10:03:52'),
(47, 25, 'App\\Models\\WuasPost', 29, '2022-05-21 10:03:59', '2022-05-21 10:03:59'),
(48, 25, 'App\\Models\\WuasPost', 28, '2022-05-21 10:04:05', '2022-05-21 10:04:05'),
(49, 25, 'App\\Models\\WuasPost', 31, '2022-05-21 15:01:46', '2022-05-21 15:01:46'),
(50, 23, 'App\\Models\\WuasPost', 30, '2022-05-22 12:40:56', '2022-05-22 12:40:56'),
(51, 23, 'App\\Models\\WuasPost', 31, '2022-05-22 12:41:04', '2022-05-22 12:41:04'),
(52, 23, 'App\\Models\\WuasPost', 32, '2022-05-22 12:41:10', '2022-05-22 12:41:10'),
(53, 29, 'App\\Models\\WuasPost', 34, '2022-05-23 09:52:01', '2022-05-23 09:52:01'),
(54, 29, 'App\\Models\\WuasPost', 32, '2022-05-23 09:52:08', '2022-05-23 09:52:08'),
(55, 29, 'App\\Models\\WuasPost', 31, '2022-05-23 09:52:12', '2022-05-23 09:52:12'),
(56, 29, 'App\\Models\\WuasPost', 29, '2022-05-23 09:55:08', '2022-05-23 09:55:08'),
(59, 31, 'App\\Models\\WuasPost', 32, '2022-05-26 17:55:26', '2022-05-26 17:55:26'),
(60, 31, 'App\\Models\\WuasPost', 31, '2022-05-26 17:55:30', '2022-05-26 17:55:30'),
(61, 31, 'App\\Models\\WuasPost', 30, '2022-05-26 17:59:34', '2022-05-26 17:59:34'),
(65, 16, 'App\\Models\\WuasPost', 32, '2022-05-28 04:42:22', '2022-05-28 04:42:22'),
(78, 30, 'App\\Models\\WuasPost', 17, '2022-05-31 20:49:26', '2022-05-31 20:49:26'),
(97, 20, 'App\\Models\\WuasPost', 31, '2022-06-09 02:40:50', '2022-06-09 02:40:50'),
(98, 20, 'App\\Models\\WuasPost', 30, '2022-06-09 02:40:54', '2022-06-09 02:40:54'),
(99, 20, 'App\\Models\\WuasPost', 29, '2022-06-09 02:41:32', '2022-06-09 02:41:32'),
(100, 32, 'App\\Models\\WuasPost', 34, '2022-06-09 14:39:00', '2022-06-09 14:39:00'),
(101, 32, 'App\\Models\\WuasPost', 32, '2022-06-09 14:39:03', '2022-06-09 14:39:03'),
(102, 32, 'App\\Models\\WuasPost', 30, '2022-06-09 14:39:08', '2022-06-09 14:39:08'),
(103, 24, 'App\\Models\\WuasPost', 34, '2022-06-10 08:50:40', '2022-06-10 08:50:40'),
(106, 43, 'App\\Models\\WuasPost', 32, '2022-06-11 00:08:19', '2022-06-11 00:08:19'),
(107, 44, 'App\\Models\\WuasPost', 34, '2022-06-11 16:06:00', '2022-06-11 16:06:00'),
(108, 44, 'App\\Models\\WuasPost', 29, '2022-06-11 16:07:56', '2022-06-11 16:07:56'),
(119, 48, 'App\\Models\\WuasPost', 34, '2022-06-15 00:43:41', '2022-06-15 00:43:41'),
(124, 30, 'App\\Models\\WuasPost', 7, '2022-06-22 01:52:57', '2022-06-22 01:52:57'),
(126, 30, 'App\\Models\\WuasPost', 22, '2022-06-22 01:55:04', '2022-06-22 01:55:04'),
(127, 51, 'App\\Models\\WuasPost', 29, '2022-06-22 16:01:35', '2022-06-22 16:01:35'),
(128, 51, 'App\\Models\\WuasPost', 30, '2022-06-22 16:01:44', '2022-06-22 16:01:44'),
(129, 51, 'App\\Models\\WuasPost', 31, '2022-06-22 16:01:48', '2022-06-22 16:01:48'),
(130, 51, 'App\\Models\\WuasPost', 34, '2022-06-22 16:01:54', '2022-06-22 16:01:54'),
(132, 51, 'App\\Models\\WuasPost', 52, '2022-06-22 16:04:11', '2022-06-22 16:04:11'),
(133, 51, 'App\\Models\\WuasPost', 53, '2022-06-22 16:04:48', '2022-06-22 16:04:48'),
(134, 51, 'App\\Models\\WuasPost', 51, '2022-06-22 16:04:54', '2022-06-22 16:04:54'),
(135, 51, 'App\\Models\\WuasPost', 50, '2022-06-22 16:04:58', '2022-06-22 16:04:58'),
(136, 51, 'App\\Models\\WuasPost', 49, '2022-06-22 16:05:01', '2022-06-22 16:05:01'),
(143, 30, 'App\\Models\\WuasPost', 46, '2022-06-25 07:02:06', '2022-06-25 07:02:06'),
(144, 30, 'App\\Models\\WuasPost', 34, '2022-06-25 07:02:40', '2022-06-25 07:02:40'),
(148, 30, 'App\\Models\\WuasPost', 31, '2022-06-25 07:07:15', '2022-06-25 07:07:15'),
(149, 30, 'App\\Models\\WuasPost', 30, '2022-06-25 07:07:48', '2022-06-25 07:07:48'),
(150, 43, 'App\\Models\\WuasPost', 53, '2022-07-21 14:10:10', '2022-07-21 14:10:10'),
(151, 30, 'App\\Models\\WuasPost', 53, '2022-07-24 20:05:47', '2022-07-24 20:05:47'),
(152, 30, 'App\\Models\\WuasPost', 52, '2022-07-24 20:06:05', '2022-07-24 20:06:05'),
(153, 30, 'App\\Models\\WuasPost', 51, '2022-07-24 20:06:10', '2022-07-24 20:06:10'),
(154, 30, 'App\\Models\\WuasPost', 50, '2022-07-24 20:06:23', '2022-07-24 20:06:23'),
(155, 30, 'App\\Models\\WuasPost', 49, '2022-07-24 20:06:55', '2022-07-24 20:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=> Active, 0=>Inactive',
  `messageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messageable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `content`, `status`, `messageable_type`, `messageable_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hii', 1, 'Comments', 1, 8, '2022-05-19 10:55:34', '2022-05-19 10:55:34'),
(2, 'Hello', 1, 'Comments', 2, 8, '2022-05-19 10:55:45', '2022-05-19 10:55:45'),
(3, 'Good job', 1, 'Comments', 3, 17, '2022-05-19 22:12:54', '2022-05-19 22:12:54'),
(4, 'Good job', 1, 'Comments', 4, 17, '2022-05-19 22:13:31', '2022-05-19 22:13:31'),
(5, 'Good', 1, 'Comments', 5, 17, '2022-05-19 22:53:45', '2022-05-19 22:53:45'),
(6, 'Good ', 1, 'Comments', 6, 10, '2022-05-20 01:01:51', '2022-05-20 01:01:51'),
(7, 'Which kind of work', 1, 'Comments', 7, 24, '2022-05-21 04:39:38', '2022-05-21 04:39:38'),
(8, 'Daily kitno earning ho gi', 1, 'Comments', 8, 25, '2022-05-21 10:03:50', '2022-05-21 10:03:50'),
(9, 'Gud', 1, 'Comments', 9, 43, '2022-06-11 00:08:27', '2022-06-11 00:08:27');

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
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2018_12_14_000000_create_likes_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2020_08_19_000000_create_posts_comments_table', 1),
(56, '2022_04_21_170842_create_admins_table', 1),
(57, '2022_04_24_162342_create_wuas_general_settings_table', 1),
(58, '2022_04_25_055852_create_wuas_posts_table', 1),
(59, '2022_04_27_081006_create_wuas_groups_table', 1),
(60, '2022_05_12_063619_create_wuas_shares_table', 1),
(61, '2022_05_12_080944_create_acquaintances_friendship_table', 1),
(62, '2022_05_12_080944_create_acquaintances_friendships_groups_table', 1),
(63, '2022_05_12_080944_create_acquaintances_interactions_table', 1),
(64, '2022_05_14_052740_create_wuas_add_friends_table', 1),
(65, '2022_05_14_052812_create_wuas_follows_table', 1),
(66, '2022_05_16_074933_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `notification_by` bigint(20) NOT NULL DEFAULT '0',
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `notification_by`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('00f5d6eb-4a64-418f-9347-0d7ec417fc58', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"28\"}', NULL, '2022-05-31 20:46:18', '2022-05-31 20:46:18'),
('0608320e-235c-41d7-91b6-523a8cd1887e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"49\"}', NULL, '2022-06-22 16:05:01', '2022-06-22 16:05:01'),
('06c3798c-569d-47f2-a2ba-49e862784e53', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:12:56', '2022-05-19 22:12:56'),
('08365c18-deee-485b-8651-7b8b0d81e96b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"17\"}', '2022-05-20 14:03:47', '2022-05-19 22:53:45', '2022-05-20 14:03:47'),
('086da98f-d155-4e8b-8902-1d61994a8844', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 10, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', '2022-05-20 14:03:41', '2022-05-20 01:01:42', '2022-05-20 14:03:41'),
('0947f930-4790-43d3-87a5-7ad746620d64', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 43, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"32\"}', NULL, '2022-06-11 00:08:27', '2022-06-11 00:08:27'),
('0ab8e245-4565-4036-a36f-9180415b4ce0', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 31, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-26 17:55:26', '2022-05-26 17:55:26'),
('0b510f4a-fae9-4eb4-947d-a8157fbbc859', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"24\"}', NULL, '2022-05-21 04:20:53', '2022-05-21 04:20:53'),
('0bfc6a51-f009-4561-af6b-94ddb9374071', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-21 04:37:19', '2022-05-21 04:37:19'),
('0d0a4e42-ea35-41b5-a9c5-7a24b6445736', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-25 07:07:48', '2022-06-25 07:07:48'),
('0df5c0ea-6bcf-43e8-9c48-5b7c941b311c', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 43, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"53\"}', NULL, '2022-07-21 14:10:10', '2022-07-21 14:10:10'),
('0f0a3a51-531f-4658-9345-1b2248a00e8d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 14, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"19\"}', '2022-05-20 14:03:40', '2022-05-20 01:36:23', '2022-05-20 14:03:40'),
('135b30d4-a0b2-4858-b7ed-b6d6ba66a61e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 20, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-09 02:40:42', '2022-06-09 02:40:42'),
('14268094-4ba3-46fa-8687-6cb66a75774e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-07 20:30:33', '2022-06-07 20:30:33'),
('163a51fc-fa47-4fd5-b844-8460543886d8', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 44, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-06-11 16:07:56', '2022-06-11 16:07:56'),
('182ad7b2-aea0-41db-a2a2-6d08434a0a86', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-05-31 20:45:29', '2022-05-31 20:45:29'),
('191a61fb-ec46-4e6f-9bcc-30837201d478', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-21 21:58:01', '2022-06-21 21:58:01'),
('19671fb4-d001-4121-bae3-f5f395066dc3', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 14, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-20 01:36:27', '2022-05-20 01:36:27'),
('1aea5ae4-9655-4130-a624-d7fa3197bf1e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"22\"}', NULL, '2022-06-22 01:55:04', '2022-06-22 01:55:04'),
('1ccb0375-e49c-46c3-8aca-49e4350c49dd', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 29, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-23 09:52:12', '2022-05-23 09:52:12'),
('1dfb2406-7d03-4346-ba8d-6ec0dfc30500', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"17\"}', NULL, '2022-05-19 22:13:09', '2022-05-19 22:13:09'),
('1ff0c162-6756-4bbe-add5-09c3bd333231', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"52\"}', NULL, '2022-07-24 20:06:05', '2022-07-24 20:06:05'),
('20a835ca-a6e0-4a57-afa8-92a75556d7be', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-09 14:39:03', '2022-06-09 14:39:03'),
('268402f1-5fc9-4b94-a633-213b384376b3', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 8, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 10:49:54', '2022-05-19 10:49:54'),
('26de9cfb-9628-463a-8764-30baf17794d0', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"28\"}', NULL, '2022-05-21 10:04:05', '2022-05-21 10:04:05'),
('275371f5-746c-4148-b09b-0bb057ffd9c6', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 20, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-09 02:40:54', '2022-06-09 02:40:54'),
('28673a46-03f5-4994-8566-b970fd7c8836', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"49\"}', NULL, '2022-06-25 07:04:16', '2022-06-25 07:04:16'),
('29407b66-8ef9-4606-9521-08a553221e3d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-31 20:48:15', '2022-05-31 20:48:15'),
('2a16619a-51b7-474a-b785-3fbbd47a3384', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-14 06:43:38', '2022-06-14 06:43:38'),
('2c87bcd6-07fd-45c8-ada7-1007ea087235', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"47\"}', NULL, '2022-06-25 07:01:59', '2022-06-25 07:01:59'),
('2cef54da-3612-46d6-bc39-3407904f0f34', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 10, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-12 19:12:13', '2022-06-12 19:12:13'),
('2f55f193-7cf9-41a5-b48c-7d5adc271a30', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-14 06:43:03', '2022-06-14 06:43:03'),
('2f59847c-4350-4177-b2eb-cc4c4c198fb2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"49\"}', NULL, '2022-07-24 20:06:55', '2022-07-24 20:06:55'),
('30e633e1-58b7-49be-b622-d5150c553594', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-25 07:02:43', '2022-06-25 07:02:43'),
('31a728d4-1ca8-432f-994e-2176da44d2e7', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"53\"}', NULL, '2022-06-25 07:03:41', '2022-06-25 07:03:41'),
('3299631c-7cb1-439b-bcef-2ef73c6a7162', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-05-21 10:03:25', '2022-05-21 10:03:25'),
('369a5ce8-1ff9-45c5-81ed-f420dc2b92ca', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-21 10:02:15', '2022-05-21 10:02:15'),
('36be1124-3b6e-420e-98c4-3c8d66a7f15a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 29, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-05-23 09:52:01', '2022-05-23 09:52:01'),
('377a13d8-84d9-41f5-b4f1-1ceea0500a3f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"52\"}', NULL, '2022-06-22 16:04:11', '2022-06-22 16:04:11'),
('39537c9a-3372-433e-b9b9-21c9eaf9629a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-21 04:43:15', '2022-05-21 04:43:15'),
('39f44fd7-671d-4b44-80fb-f14343209ff7', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-01 20:46:49', '2022-06-01 20:46:49'),
('3a006117-4c24-40f1-b482-312760f0637d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"19\"}', NULL, '2022-05-31 20:48:49', '2022-05-31 20:48:49'),
('3b02ced3-0690-401c-b4bb-9a120945311d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-21 04:09:45', '2022-05-21 04:09:45'),
('3c294a05-c221-4004-b31a-1afbfffe98f5', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-01 20:52:28', '2022-06-01 20:52:28'),
('42068031-c744-4731-beaf-a6117f309b52', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-22 16:01:54', '2022-06-22 16:01:54'),
('42bf8771-a09a-4256-a222-6b08e1d7482a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"28\"}', NULL, '2022-05-21 04:40:54', '2022-05-21 04:40:54'),
('43320bad-04df-4b56-94bc-4ac9512e0fd2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 6, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 08:23:09', '2022-05-19 08:23:09'),
('4381a0f8-0c99-4c98-902b-ca29cf57023d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"49\"}', NULL, '2022-06-25 07:00:42', '2022-06-25 07:00:42'),
('46c57486-995e-4ee7-afae-7da5016c1dfc', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', '2022-05-27 12:44:27', '2022-05-27 01:27:59', '2022-05-27 12:44:27'),
('4a3bf366-6323-4e4d-80ff-7f5dae901047', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-05-21 04:40:52', '2022-05-21 04:40:52'),
('4f3967c7-dafc-4d4b-b927-b5fe80603ddd', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-25 07:02:40', '2022-06-25 07:02:40'),
('52d6cd58-9573-42ba-a444-d0e60756d4bd', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"48\"}', NULL, '2022-06-25 07:01:40', '2022-06-25 07:01:40'),
('53ab41df-193f-4434-9aa7-e5f241822af4', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:12:54', '2022-05-19 22:12:54'),
('54e9883b-8a87-41c5-a6af-e3848af18dc2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-20 13:38:42', '2022-05-20 13:38:42'),
('5626ce89-d9c8-4200-8e48-0a4f9ee140f5', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 48, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-15 00:43:41', '2022-06-15 00:43:41'),
('57d69c7d-4d58-44d7-9c80-05a1e9950453', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-05-21 10:02:31', '2022-05-21 10:02:31'),
('57ff0ed9-bc8a-4403-af0c-92cfe507d066', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 43, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-11 00:08:10', '2022-06-11 00:08:10'),
('58b3f29a-b6c0-4dec-8f80-38c1b5ac26e6', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 13, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 13:25:33', '2022-05-19 13:25:33'),
('59194184-4ca6-4473-bf8c-a2ce34658277', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"51\"}', NULL, '2022-06-25 07:00:27', '2022-06-25 07:00:27'),
('599b5eac-ffdc-4d2e-abc2-662e0c8f8b5c', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"52\"}', NULL, '2022-06-25 07:00:20', '2022-06-25 07:00:20'),
('5a4901ba-8f5f-4a95-a25f-72e3ef5957b4', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-21 10:02:14', '2022-05-21 10:02:14'),
('5c3f3f10-c31d-41a6-a981-63a6c62f8082', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 20, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-09 02:40:47', '2022-06-09 02:40:47'),
('5c54fe07-850d-4be7-9d46-de5b345fe107', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 43, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-11 00:08:19', '2022-06-11 00:08:19'),
('5e6172bc-1c69-44ea-b289-e3c2c9565a7b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"50\"}', NULL, '2022-07-24 20:06:23', '2022-07-24 20:06:23'),
('5eec1609-5554-4df2-9924-0449e8dc02f4', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"53\"}', NULL, '2022-07-24 20:05:47', '2022-07-24 20:05:47'),
('5fd29873-19a5-4453-96f8-97530e79b1ec', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-09 14:39:00', '2022-06-09 14:39:00'),
('61152e84-3d36-4329-aa66-b3a604857367', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 20, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-09 02:40:50', '2022-06-09 02:40:50'),
('612c4755-7f68-43b6-bf3e-3b0423d43705', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-05-21 04:39:51', '2022-05-21 04:39:51'),
('617885ce-618a-4152-90ef-e64d9ade4ccd', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 10, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"7\"}', '2022-05-20 14:03:42', '2022-05-20 01:01:51', '2022-05-20 14:03:42'),
('61b1131d-b81c-4098-a79d-31025e109f7f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:13:25', '2022-05-19 22:13:25'),
('6245863f-42d9-4b91-a1e0-3a49a0c27f19', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-21 04:43:06', '2022-05-21 04:43:06'),
('625ef6cd-6f30-4b91-9f2a-d9bb5b62882b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-06-22 01:52:57', '2022-06-22 01:52:57'),
('6320c792-c62d-4cb2-848c-283025f2c648', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-27 01:27:55', '2022-05-27 01:27:55'),
('6509d106-5c06-4955-aaae-6d0b3f10501b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 20:45:22', '2022-06-01 20:45:22'),
('668383b4-3d16-4923-bab3-983068e681fa', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"30\"}', NULL, '2022-05-21 10:03:50', '2022-05-21 10:03:50'),
('69e4c020-c65f-40cc-8459-5666ad352535', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 29, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-05-23 09:55:08', '2022-05-23 09:55:08'),
('6ab3680b-b086-475b-ab85-be27161f643b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"51\"}', NULL, '2022-06-22 16:04:54', '2022-06-22 16:04:54'),
('6b3f2fb1-6a8d-4655-94c5-3634859c61c2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-21 10:02:18', '2022-05-21 10:02:18'),
('6b8ba069-3811-42cb-b054-43e7825f7d8b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-06-22 16:01:35', '2022-06-22 16:01:35'),
('70260b17-b945-4b7b-9bd0-3765ff85d445', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-10 08:50:40', '2022-06-10 08:50:40'),
('7053032a-d8ee-4807-b01b-3521f8b23416', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"24\"}', NULL, '2022-05-31 20:47:17', '2022-05-31 20:47:17'),
('722f8cae-1a6f-4fc7-9b5b-1d3a48a5509b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 16, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-28 04:42:22', '2022-05-28 04:42:22'),
('723fdabf-aaa1-49e5-8721-7e7e44384275', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 8, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"6\"}', NULL, '2022-05-19 10:55:34', '2022-05-19 10:55:34'),
('7321d3bc-c130-40aa-8230-93419a134181', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-31 20:44:44', '2022-05-31 20:44:44'),
('73caed82-a6a9-4cdc-ae77-c5d4a742819c', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-21 15:01:46', '2022-05-21 15:01:46'),
('73f1579c-0f63-499b-8d20-e6d9e2b827c5', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"46\"}', NULL, '2022-06-25 07:02:06', '2022-06-25 07:02:06'),
('77c9c9bb-973d-4118-9a04-5c4933960811', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-07 20:31:26', '2022-06-07 20:31:26'),
('7878f2d7-cccf-424a-8072-0387f6e13088', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"27\"}', NULL, '2022-05-31 20:46:28', '2022-05-31 20:46:28'),
('7c0eac9a-e87a-42f1-875f-d765d168012b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 13, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 13:25:58', '2022-05-19 13:25:58'),
('7d6edd53-e0bd-4053-884d-254781b75446', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 8, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"6\"}', NULL, '2022-05-19 10:55:45', '2022-05-19 10:55:45'),
('7f0cbe6d-b5e5-493d-8334-64608b10f84f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"27\"}', NULL, '2022-06-14 06:45:40', '2022-06-14 06:45:40'),
('8010e4d8-4434-456c-bbda-ffc89f6a8ccc', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"51\"}', NULL, '2022-07-24 20:06:10', '2022-07-24 20:06:10'),
('81be19a8-db64-4a3e-824a-65e55e2fcc2a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"25\"}', NULL, '2022-06-14 06:46:08', '2022-06-14 06:46:08'),
('8260c308-5209-42e3-8e08-a7cf90d96ae1', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-06-14 06:45:22', '2022-06-14 06:45:22'),
('83efe054-7357-4142-97ed-aa966c9ed1ed', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"26\"}', NULL, '2022-05-31 20:46:35', '2022-05-31 20:46:35'),
('84b5a0f3-2a4f-484a-9892-2f4c9088320e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"50\"}', NULL, '2022-06-22 16:04:58', '2022-06-22 16:04:58'),
('85a93120-256b-4c58-a74c-65cf991b3cfd', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 29, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-23 09:52:08', '2022-05-23 09:52:08'),
('86700e15-9eef-4a18-aa44-a0bb78136aef', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-14 06:44:51', '2022-06-14 06:44:51'),
('89ed6479-6241-4c59-b37e-b990695e893e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:12:45', '2022-05-19 22:12:45'),
('8b43a52e-12d5-41b8-b461-0323192cab65', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"17\"}', NULL, '2022-05-19 22:13:31', '2022-05-19 22:13:31'),
('8bcde268-2142-4606-a318-79396e18c2a1', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', '2022-05-27 12:39:01', '2022-05-19 22:02:56', '2022-05-27 12:39:01'),
('8c44bd7f-9910-45b1-9a8b-27cd6b36b416', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-21 04:39:27', '2022-05-21 04:39:27'),
('8f2820ce-f798-4ec9-8778-084ed03b1726', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 12:13:05', '2022-06-01 12:13:05'),
('8f8303e4-1fff-4d03-a37b-0d650ca8cd7e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"17\"}', '2022-05-20 14:03:46', '2022-05-19 22:53:36', '2022-05-20 14:03:46'),
('90ebbb93-3d12-4830-9a66-c96964c9b5ce', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"53\"}', NULL, '2022-06-22 16:04:48', '2022-06-22 16:04:48'),
('93606496-9cbf-478a-993a-3182acdd6eb7', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-20 13:38:10', '2022-05-20 13:38:10'),
('94feb0b1-a160-4c71-8d4e-82cf61f0a1b5', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"27\"}', NULL, '2022-06-22 01:55:04', '2022-06-22 01:55:04'),
('97867156-a7e2-43fe-bf6e-eabdc7731e5c', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 8, 11, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"13\"}', NULL, '2022-05-19 15:22:09', '2022-05-19 15:22:09'),
('98c1b068-9d0c-4416-ada2-a6eeb726f7da', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-06-07 20:31:58', '2022-06-07 20:31:58'),
('9e0c23c7-8aa6-46e5-b973-d4fd6985f384', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"26\"}', NULL, '2022-06-14 06:45:59', '2022-06-14 06:45:59'),
('a0cf534c-c88e-419a-8313-9aa07a719f56', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:09:14', '2022-05-19 22:09:14'),
('a1ce733c-fe81-402b-95d1-1f7f848c62c2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-31 20:45:27', '2022-05-31 20:45:27'),
('a23c7fde-11c9-4427-8c57-4ece3a81d811', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 11, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', '2022-05-19 15:34:23', '2022-05-19 15:22:05', '2022-05-19 15:34:23'),
('a33db45a-b3d9-46c6-982f-67479b9f2d75', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-21 21:58:39', '2022-06-21 21:58:39'),
('a5db9944-7282-4315-a19c-998968694d46', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"17\"}', NULL, '2022-05-21 04:43:20', '2022-05-21 04:43:20'),
('a665bea0-76da-4d57-a336-39cdf7e0675f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-05-21 10:03:59', '2022-05-21 10:03:59'),
('a824c469-5bf7-4401-9158-5ae12477ba68', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"50\"}', NULL, '2022-06-25 07:00:35', '2022-06-25 07:00:35'),
('a9ab9559-d52b-4521-a5b7-93f423193b99', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-14 06:44:31', '2022-06-14 06:44:31'),
('abb1805a-2b0f-43e8-aad6-deea6411fcd3', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-25 07:07:15', '2022-06-25 07:07:15'),
('abe63a65-f7a5-4c4d-8a79-7725eafbd45c', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-07 20:31:42', '2022-06-07 20:31:42'),
('ac00c100-2d26-4fdd-a1b9-bad21402fe4a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 44, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-11 16:06:00', '2022-06-11 16:06:00'),
('ac65f7e7-467c-4d33-9f95-7c678ab379c9', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 11, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 12:54:07', '2022-05-19 12:54:07'),
('acf69ce6-09a8-4fdb-9d6c-4d3f658fdaa5', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"22\"}', NULL, '2022-05-31 20:47:58', '2022-05-31 20:47:58'),
('b000607e-1c64-446f-bf27-853b605e6a61', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-05-31 20:45:45', '2022-05-31 20:45:45'),
('b0746d6d-15db-4379-a88d-722e937efc84', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"24\"}', NULL, '2022-05-21 04:20:55', '2022-05-21 04:20:55'),
('b1b51ecf-5a8a-4eca-af3a-606df0f708c2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-21 04:39:12', '2022-05-21 04:39:12'),
('b4ecb8ec-2001-49d7-b740-6fd296c10ac8', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"17\"}', NULL, '2022-05-31 20:49:26', '2022-05-31 20:49:26'),
('b5a6c9c8-ecc5-4a22-a761-16ade8d048e8', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 12:12:14', '2022-06-01 12:12:14'),
('b70dacc7-ba67-4641-8f4f-e0fa5d62225d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-21 10:02:09', '2022-05-21 10:02:09'),
('b72585fe-c491-4dfb-9389-9388ad319df1', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"comment\",\"info\":\"commented the post\",\"post_id\":\"31\"}', NULL, '2022-05-21 04:39:38', '2022-05-21 04:39:38'),
('b7f2cae3-1bdd-428c-9d7c-bceb0b48f50f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"24\"}', NULL, '2022-06-01 20:48:38', '2022-06-01 20:48:38'),
('b925623c-c6d6-4e54-8d97-fc34227551d0', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-07 20:31:32', '2022-06-07 20:31:32'),
('ba43d465-5cc9-4a5c-8114-d24bf31c1a78', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-05-27 01:27:51', '2022-05-27 01:27:51'),
('bccc670e-02a9-4f8a-89f0-7ec41cf1a68d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-06-01 20:45:56', '2022-06-01 20:45:56'),
('c0e176cc-3099-4b0a-81a0-86ffeda80d6b', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 20, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"29\"}', NULL, '2022-06-09 02:41:32', '2022-06-09 02:41:32'),
('c1a2faa8-43af-4030-9ae0-3a8d077e110f', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 12:11:08', '2022-06-01 12:11:08'),
('c2b2953f-a01a-44fb-aacd-d4407d101228', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"24\"}', NULL, '2022-06-22 01:51:45', '2022-06-22 01:51:45'),
('c635753e-ee75-4774-9770-6c8e3690e886', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', '2022-05-22 21:46:31', '2022-05-22 12:41:10', '2022-05-22 21:46:31'),
('c63d110a-8032-4c3a-80f6-b56004fb5464', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 31, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', '2022-05-27 12:39:26', '2022-05-26 17:55:15', '2022-05-27 12:39:26'),
('c740daa9-77b3-4cb2-b7e8-eafa5010abad', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"22\"}', NULL, '2022-05-21 04:09:36', '2022-05-21 04:09:36'),
('cbf75e44-0e0b-439e-b81f-c7d0aac3ed1d', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-22 12:41:04', '2022-05-22 12:41:04'),
('cc188d36-a20e-47a3-8435-f5517a4cc128', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-20 13:38:11', '2022-05-20 13:38:11'),
('d2ae2fd2-f9a7-48d7-8c7e-191532a5fe78', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 22, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"20\"}', NULL, '2022-05-21 01:48:22', '2022-05-21 01:48:22'),
('d2e1338d-88d4-4fc7-b16c-2f89b79f1847', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 32, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-09 14:39:08', '2022-06-09 14:39:08'),
('d96deeec-fa8a-414d-9f05-d85dc4fa7d9e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 23, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-05-22 12:40:56', '2022-05-22 12:40:56'),
('dbb41207-29f9-4a24-8023-3f39dccd3c90', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-05-26 16:58:08', '2022-05-26 16:58:08'),
('e0b9075d-1d8d-421c-ba4e-ad09c34428b2', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 24, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"32\"}', NULL, '2022-05-21 04:36:49', '2022-05-21 04:36:49'),
('e37265d9-df37-4e00-9532-db85ceb9c443', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:03:01', '2022-05-19 22:03:01'),
('e3b449fc-27fe-4dfb-b46a-74663fe494ca', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-06-22 16:01:44', '2022-06-22 16:01:44'),
('e4c2bbfd-a598-4908-8896-1bf90fed7f58', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 12:14:23', '2022-06-01 12:14:23'),
('e596317f-f7a4-4838-9d19-3c25779e5f6e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 31, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-05-26 17:55:30', '2022-05-26 17:55:30'),
('e816f13b-e4ba-4b48-a26e-f45b176d6ff9', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 21, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-01 12:11:09', '2022-06-01 12:11:09'),
('e8c50d4c-5d6d-4386-a220-f5d477c01b48', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"25\"}', NULL, '2022-05-31 20:47:09', '2022-05-31 20:47:09'),
('eba0a277-e939-4fdb-bb16-1535e36e9b16', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 43, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"34\"}', NULL, '2022-06-11 00:08:15', '2022-06-11 00:08:15'),
('f049b752-5806-46ca-8c37-ac843249f72a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"46\"}', NULL, '2022-06-22 16:02:43', '2022-06-22 16:02:43'),
('f0e178fb-55ed-4952-8447-c3c43f919a3a', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-31 20:49:34', '2022-05-31 20:49:34'),
('f2bf119e-3a2b-49c7-83a5-e751cafa0232', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 51, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"31\"}', NULL, '2022-06-22 16:01:48', '2022-06-22 16:01:48'),
('f3ec86cb-9fd7-4189-b0cf-4e0989c84ce6', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 25, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', '2022-05-22 21:46:41', '2022-05-21 10:03:52', '2022-05-22 21:46:41'),
('f4b9c32b-f3c1-4821-bac9-d298a2f5d389', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"28\"}', NULL, '2022-06-14 06:45:27', '2022-06-14 06:45:27'),
('f58d4809-e4ed-4516-a8dd-b42d338ca031', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 17, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-19 22:04:20', '2022-05-19 22:04:20'),
('f69eb83d-c7b8-4154-8cc1-7d5a266bb766', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 30, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"25\"}', NULL, '2022-06-22 01:51:45', '2022-06-22 01:51:45'),
('f9e4f185-de23-473f-9da4-cc2f9dfe5ec7', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 1, 6, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"6\"}', NULL, '2022-05-19 08:20:06', '2022-05-19 08:20:06'),
('fa5fd212-d96a-45b3-9163-bbf421ad766e', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 31, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"30\"}', NULL, '2022-05-26 17:59:34', '2022-05-26 17:59:34'),
('fe8758cf-cd41-4bd6-93c7-b06c4639d054', 'App\\Notifications\\PostLiked', 'App\\Models\\User', 4, 10, '{\"type\":\"like\",\"info\":\"liked your post\",\"post_id\":\"7\"}', NULL, '2022-05-20 01:01:36', '2022-05-20 01:01:36');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avtar` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wuas-content/upload/images/d-avatar.jpg' COMMENT 'wuas-content/upload/images/d-avatar.jpg',
  `cover` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wuas-content/upload/images/d-cover.jpg' COMMENT 'wuas-content/upload/images/d-cover.jpg',
  `background_image` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wuas-content/upload/images/d-cover.jpg' COMMENT 'wuas-content/upload/images/d-cover.jpg',
  `background_image_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `relationship_id` bigint(20) NOT NULL DEFAULT '0',
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_link` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `school` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `birthday` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0000-00-00',
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vk` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` text COLLATE utf8mb4_unicode_ci,
  `wechat` text COLLATE utf8mb4_unicode_ci,
  `discord` text COLLATE utf8mb4_unicode_ci,
  `mailru` text COLLATE utf8mb4_unicode_ci,
  `okru` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'english',
  `email_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `src` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Undefined',
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_privacy` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Who can follow me? 0: Everyone, 1: People I Follow',
  `friend_privacy` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Who can see my friends? 0: Everyone, 1: People I Follow, 2: People Follow Me, 3: No body',
  `post_privacy` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Who can post on my timeline? 0: Everyone, 1: People I Follow, 2: No body',
  `message_privacy` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Whow can messages me? 0: Everyone, 1: People I Follow, 2: No body',
  `confirm_followers` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Confirm request when someone follows you? 0: No, 1: Yes',
  `show_activities_privacy` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Show my activies? 0: No, 1: Yes',
  `birth_privacy` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Who can see my birthday? 0: Everyone, 1: People I Follow, 2: No body',
  `visit_privacy` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `verified` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `lastseen` int(11) NOT NULL DEFAULT '0',
  `showlastseen` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_notification` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `e_like` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone liked my posts',
  `e_wondered` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `e_shared` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone shared my posts',
  `e_followed` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone followed me',
  `e_commented` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone commented on my posts',
  `e_visited` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone visit my profile',
  `e_liked_page` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone liked my pages',
  `e_mentioned` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone mentioned me',
  `e_joined_group` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone joined my groups',
  `e_accepted` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone accepted my friend/follow request',
  `e_profile_wall_post` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of someone posted on my timeline',
  `e_memory` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Email Notification of you have rememberance on this day',
  `e_sentme_msg` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `e_last_notif` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `notification_settings` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '{"e_liked":1,"e_shared":1,"e_wondered":0,"e_commented":1,"e_followed":1,"e_accepted":1,"e_mentioned":1,"e_joined_group":1,"e_liked_page":1,"e_visited":1,"e_profile_wall_post":1,"e_memory":1}',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Chat status.. 0: Online, 1: Offline',
  `active` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `strat_up` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `strat_up_info` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stratup_follow` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stratup_image` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `last_email_sent` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_code` int(11) NOT NULL DEFAULT '0',
  `is_pro` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pro_time` int(11) NOT NULL DEFAULT '0',
  `pro_type` enum('0','1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `joined` int(11) NOT NULL DEFAULT '0',
  `css_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` int(11) NOT NULL DEFAULT '0',
  `ref_user_id` int(11) NOT NULL DEFAULT '0',
  `ref_level` text COLLATE utf8mb4_unicode_ci,
  `balance` decimal(18,8) NOT NULL DEFAULT '0.00000000',
  `paypal_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notifications_sound` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order_posts_by` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `social_login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `android_m_device_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_m_device_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `android_n_device_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_n_device_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_device_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` decimal(18,8) NOT NULL DEFAULT '0.00000000',
  `last_location_update` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `share_my_location` int(11) NOT NULL DEFAULT '1' COMMENT 'Show my location with public? 0: No, 1: Yes',
  `last_data_update` int(11) NOT NULL DEFAULT '0',
  `details` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '{"post_count":0,"album_count":0,"following_count":0,"followers_count":0,"groups_count":0,"likes_count":0}',
  `sidebar_data` text COLLATE utf8mb4_unicode_ci,
  `last_avatar_mod` int(11) NOT NULL DEFAULT '0',
  `last_cover_mod` int(11) NOT NULL DEFAULT '0',
  `points` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `daily_points` int(11) NOT NULL DEFAULT '0',
  `point_day_expire` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_follow_id` int(11) NOT NULL DEFAULT '0',
  `share_my_data` int(11) NOT NULL DEFAULT '1' COMMENT 'Allow search engines to index my profile and posts? 0: No, 1: Yes',
  `last_login_data` text COLLATE utf8mb4_unicode_ci,
  `two_factor` int(11) NOT NULL DEFAULT '0' COMMENT '0: Disable, 1: Enable',
  `new_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_verified` int(11) NOT NULL DEFAULT '0',
  `new_phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_file` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_completed` int(11) NOT NULL DEFAULT '0',
  `weather_unit` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'us',
  `paystack_ref` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_sent` int(11) NOT NULL DEFAULT '0',
  `StripeSessionId` text COLLATE utf8mb4_unicode_ci,
  `time_code_sent` int(11) NOT NULL DEFAULT '0',
  `permission` text COLLATE utf8mb4_unicode_ci,
  `skills` text COLLATE utf8mb4_unicode_ci,
  `languages` text COLLATE utf8mb4_unicode_ci,
  `currently_working` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT '0',
  `banned_reason` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coinbase_hash` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coinbase_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoomoney_hash` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conversation_id` bigint(20) NOT NULL DEFAULT '0',
  `securionpay_key` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0: Account status is pending, 1: Active, 2: Disabled',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `name`, `username`, `email`, `email_verified_at`, `password`, `avtar`, `cover`, `background_image`, `background_image_status`, `relationship_id`, `address`, `working`, `working_link`, `about`, `school`, `gender`, `birthday`, `country`, `website`, `facebook`, `twitter`, `linkedin`, `youtube`, `vk`, `instagram`, `qq`, `wechat`, `discord`, `mailru`, `okru`, `language`, `email_code`, `src`, `ip_address`, `follow_privacy`, `friend_privacy`, `post_privacy`, `message_privacy`, `confirm_followers`, `show_activities_privacy`, `birth_privacy`, `visit_privacy`, `verified`, `lastseen`, `showlastseen`, `email_notification`, `e_like`, `e_wondered`, `e_shared`, `e_followed`, `e_commented`, `e_visited`, `e_liked_page`, `e_mentioned`, `e_joined_group`, `e_accepted`, `e_profile_wall_post`, `e_memory`, `e_sentme_msg`, `e_last_notif`, `notification_settings`, `status`, `active`, `type`, `strat_up`, `strat_up_info`, `stratup_follow`, `stratup_image`, `last_email_sent`, `phone`, `sms_code`, `is_pro`, `pro_time`, `pro_type`, `joined`, `css_file`, `timezone`, `referrer`, `ref_user_id`, `ref_level`, `balance`, `paypal_email`, `notifications_sound`, `order_posts_by`, `social_login`, `android_m_device_id`, `ios_m_device_id`, `android_n_device_id`, `ios_n_device_id`, `web_device_id`, `wallet`, `last_location_update`, `share_my_location`, `last_data_update`, `details`, `sidebar_data`, `last_avatar_mod`, `last_cover_mod`, `points`, `daily_points`, `point_day_expire`, `last_follow_id`, `share_my_data`, `last_login_data`, `two_factor`, `new_email`, `two_factor_verified`, `new_phone`, `info_file`, `city`, `state`, `zip`, `school_completed`, `weather_unit`, `paystack_ref`, `code_sent`, `StripeSessionId`, `time_code_sent`, `permission`, `skills`, `languages`, `currently_working`, `banned`, `banned_reason`, `coinbase_hash`, `coinbase_code`, `yoomoney_hash`, `conversation_id`, `securionpay_key`, `account_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Umair', 'Aqib', 'WUAS', 'user', 'user@wuas.com', NULL, '$2y$10$.c6qPEo9LKwOkYtuI6r/3eSrRsLCaRQDEYzcm.N53/pwDRB7zfTEy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, NULL, 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, NULL, NULL),
(2, 'Zeeshan', 'Mughal', 'Zeeshan', 'zeeshan', 'Zeeshan@zeeshan.com', NULL, '$2y$10$.c6qPEo9LKwOkYtuI6r/3eSrRsLCaRQDEYzcm.N53/pwDRB7zfTEy', 'wuas-content/upload/images/user/2022/04/aneesa.jpg', 'wuas-content/upload/images/user/2022/04/aneesa.jpg', 'wuas-content/upload/images/user/2022/04/aneesa.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, NULL, 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, NULL, NULL),
(3, 'Zeeshan', 'Mughal', 'Zeeshan Mughal', 'ZeeshanMughal', 'Zeeshansaaab@gmail.com', NULL, '$2y$10$.yo0J66Ju1JXv/8c7Z.WOOG6992vBKjqOb/n/npAZ/VIPdvViMDpO', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03072255895', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-18 21:44:55', '2022-05-18 21:44:55'),
(4, 'Riz', 'Shani', 'Riz Shani', 'Rizshani22', 'rizshani2018@gmail.com', NULL, '$2y$10$SsyCf5bdHBMlB9tCngzNK.5uVmtwcoVWRmCw4bjub6QiMm5WBfqjG', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '1987-10-15', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '1', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03171192791', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 00:08:56', '2022-05-27 12:44:05'),
(5, 'Hina', 'Zeeshan', 'Hina Zeeshan', 'hinazeeshan22256@gmail.com', 'hinazeeshan22256@gmail.com', NULL, '$2y$10$t1JTsnUlKy4YrVSZK6.pHe497SuO/F63EVW6sH4fXv/mk/k04gTIu', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03091459757', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 03:53:40', '2022-05-19 03:53:40'),
(6, 'Malik', 'Hasnain', 'Malik Hasnain', 'malikhasnain', 'hasnainkhan11199999@gmail.com', NULL, '$2y$10$4duJhBrkiAiFvhZ966Esf.CdcBJ4OcXjiCPDEt6xnZp8/FLLykqx6', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03452412154', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 08:19:47', '2022-05-19 08:19:47'),
(7, 'abdul', 'Qasim', 'abdul Qasim', 'abdulqasim214', 'abdulqasim214@gmail.com', NULL, '$2y$10$zZ3MX1xLYA.sW1yUN1aVXeOd7VM7oFjkSlGgUJKMN2vm/9Eg2DFlm', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03000183347', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 10:35:35', '2022-05-19 10:35:35'),
(8, 'Talha', 'Khan', 'Talha Khan', 'Talhakhan', 'talhakhan@gmail.com', NULL, '$2y$10$YTh8ZMgVBJ1JHm8LEOcqauKdlttE9oVw6LPOc4FK6Gl7L8g55QwYy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03110322809', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 10:48:28', '2022-05-19 10:48:28'),
(9, 'Musarat', 'Rajper', 'Musarat Rajper', 'Musarat', 'musaratrajper99@gmail.com', NULL, '$2y$10$77dMcvGlR1o8ZjtNFos3OOI4n5yo.4w2hE6yvgCIBowkjemuse4R.', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923094608984', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 11:49:06', '2022-05-19 11:49:06'),
(10, 'shali', 'shani', 'shali shani', 'shalishani', 'mianzain578@gmail.com', NULL, '$2y$10$Cc07lHX9driqsN0HaTKId.FwSU0j5rKMkrGSSMHp.HkIJ./e3G3G.', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03023783830', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 12:26:54', '2022-05-19 12:26:54'),
(11, 'islam', 'bacha', 'islam bacha', 'islam0', 'islammkd1@gmail.com', NULL, '$2y$10$ag43Tajdb7xPbo2/v22ikeXQilqL.AuaiH56dTXccTiXm21.iSiKy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923449647963', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 12:52:30', '2022-05-19 12:52:30'),
(12, 'Ch', 'Hanzla', 'Ch Hanzla', 'Chhanzla', 'choudharyhanzla2481@gmail.com', NULL, '$2y$10$HlHuuin5SyM3EYGFdjRICuPTgR2pKBNQqE1MnMvleCjw.zhbLaigS', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '2', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03099274359', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 0, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 13:17:20', '2022-05-19 13:20:20'),
(13, 'Makham', 'Zulifqar', 'Makham Zulifqar', 'Maakham', 'makhammehaar832@gmail.com', NULL, '$2y$10$Y8bwx3HQXW.L1fGfX3g2R.sW3GNnqXH8IaAaF9VRFlD9a1RAlhoyS', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03338860389', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 13:25:22', '2022-05-19 13:25:22'),
(14, 'Faiza', 'Mughal', 'Faiza Mughal', 'Faizaa45', 'faizamughal029@gmail.com', NULL, '$2y$10$yUud4P.p.zdMrDtLwGr77uo7y9laRuD7Wnu/ELffcL8LDvDWTbGc.', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '1995-11-02', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03480860794', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 13:50:37', '2022-05-20 01:40:25'),
(15, 'Hina E', 'Zainab', 'Hina E Zainab', 'HinaEZainab', 'hinaezainab780@gmail.com', NULL, '$2y$10$R8XUI/i4HuE3CGqe/rRR..ti9Zl.Z2kB9wjfqpH7.0NvejPXAaJwC', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '2003-05-22', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03035263919', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 17:54:35', '2022-05-19 17:57:46'),
(16, 'Batool', 'Fatima', 'Batool Fatima', 'Beena123', 'fatimabatool067@gmail.com', NULL, '$2y$10$V6corgi2VYN86F9TXqYXS./xcv3X0mpc5Qi57qrZ.JKYc48T6v4QS', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03300273442', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 20:06:46', '2022-05-19 20:06:46'),
(17, 'Izat', 'Malik', 'Izat Malik', 'Izatmalik', 'samra4206@gmail.com', NULL, '$2y$10$upkeq5ORYr6HBex6hYB93eJOsZ0RfgYdoIGadGwTs9LGD4H7/HlX.', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03447734672', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-19 21:52:11', '2022-05-19 21:52:11'),
(18, 'Ali', 'Hammad', 'Ali Hammad', 'Alihammad512', 'hammadchawaika@gmail.com', NULL, '$2y$10$sB8m50bw0pw60vpUQ5drm.ajzYQ9XycMxfIAIjXnRehJ1Gm43xhly', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03016970812', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-20 00:09:23', '2022-05-20 00:09:23'),
(19, 'MUDASSER', 'IQBAL', 'MUDASSER IQBAL', 'MUDASSERKK', 'Mudasser.kk@gmail.com', NULL, '$2y$10$OIAs7yl6vlfPw1ywOtapA.TS/shBbkEUzQT1dudE3Z4DoClgvbdDa', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03125964626', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-20 01:15:25', '2022-05-20 01:15:25'),
(20, 'Iqra', 'Ali', 'Iqra Ali', 'Iqraali', 'zaidali7201206@gmail.com', NULL, '$2y$10$ou7LuD0Ae1sMNvbSShIESuWwdEKie0zUuxdclVj4AG8z3iFQzXekK', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '2000-07-28', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, 'zaidali7201206@gmail.com', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-20 01:16:06', '2022-05-20 01:17:56'),
(21, 'Ishaq9', 'Ishaq9', 'Ishaq9 Ishaq9', 'Ishaq9', 'namu89853@gmail.com', NULL, '$2y$10$UL.lxX0YXt41DHwYpH3UhOOgwGxpIKbWZu1twnnfLjNh1ipcR0niy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03098833059', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-20 13:37:30', '2022-05-20 13:37:30'),
(22, 'Muhammad', 'Shahzaib', 'Muhammad Shahzaib', 'Sharif12', 'muhammadshareef71513@gmail.com', NULL, '$2y$10$A7PaG98misduoVc6OG0v2.8Y08MHLGY1kPGtAPyTXOco83Ou3WF6m', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '2001-09-28', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03106383571', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 01:47:09', '2022-05-21 01:51:45'),
(23, 'Adnan', 'Iqbal', 'Adnan Iqbal', 'adnank', 'adnankha066@gmail.com', NULL, '$2y$10$eNtmWKHehPgJZrw5E/d4GeTgOpAt8ZSxJobHv.Y00hHqpxhDZx1sS', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '2022-01-31', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '1', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03113065158', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 04:06:31', '2022-05-21 04:26:33'),
(24, 'Nadeem', 'Ahmad', 'Nadeem Ahmad', 'NadeemRajput', 'nadeemahmadrajput5@gmail.com', NULL, '$2y$10$srbqGyDEx.zA6SLTzZjHfOsqOV4vJ.339QbBgPuxza60VfRwH.lAK', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923014069174', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 04:36:36', '2022-05-21 04:36:36'),
(25, 'Shabaz', 'Ahmad', 'Shabaz Ahmad', 'shabazahmad', 'mm6471513@gmail.com', NULL, '$2y$10$hQpH0/a4NSu0sSio/pmw9.iGb/kRjgzXEZk8RcOjdkTICGddHYzoK', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03417774451', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 10:02:00', '2022-05-21 10:02:00'),
(26, 'Tariq', 'Khan', 'Tariq Khan', 'Tariqkhan786', 'mtariq8526786mtariq@gmail.com', NULL, '$2y$10$6gqtx/FmmG2wOa9sana5e.e7x9ruhXLQp/Lbg./SV0MQKZ5WGJb7a', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03049605136', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 13:12:04', '2022-05-21 13:12:04'),
(27, 'Waslam', 'Cheema', 'Waslam Cheema', 'Muskan', 'wasallam.amjad786@gmail.com', NULL, '$2y$10$N877lDV6ImX/ZJbcA/0QZOoIgBEkdBNuwwrYPw./fdxU2I85MhwYG', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03320417386', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-21 20:12:38', '2022-05-21 20:12:38'),
(28, 'Ansar', 'Iqbal', 'Ansar Iqbal', 'Ansariqbal386', 'ansariqbal017@gmail.com', NULL, '$2y$10$9QYaPm7qSm.y.Xe7iIME3.Yrj8KZM5ezyjFrzgdvKOXp2yA..dz12', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03027363386', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-22 17:04:20', '2022-05-22 17:04:20'),
(29, 'Nisha', 'Aslam', 'Nisha Aslam', 'Nis786', 'da676875@gmail.com', NULL, '$2y$10$P6tDwRsfKp9nEFubCaLK/./TIW.AO4LImMZE/1rTmRN2QejYkvwwm', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03049837288', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-23 09:51:47', '2022-05-23 09:51:47'),
(30, 'Shahid', 'Shahid', 'Shahid Shahid', 'Shahid03', 'shahidshahid0322@gmail.com', NULL, '$2y$10$QckcZvWIAY4H/L8casO3buw88FQi4TJ85mPYFuV.aBLlx0IJxfVVq', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '2000-03-21', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '1', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03223410680', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-26 16:49:48', '2022-06-01 21:11:38'),
(31, 'Waqas', 'Tahir', 'Waqas Tahir', 'Waqas04', 'wwwtahirwaqas4@gmail.com', NULL, '$2y$10$SQNYEBq8Ii2NrDzCuF2zJegLi9SqfO4kNlk3sE127iThLeY3PyLUa', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03096329993', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-26 17:50:52', '2022-05-26 17:50:52'),
(32, 'Muhammad', 'Shoaib', 'Muhammad Shoaib', 'Shoaib786', 'awansahib570@gmail.com', NULL, '$2y$10$0WnLM7nhvfyl6m.PrZw2wu.ArukuGtCiLZqUuLTiLUt1RyEwYOxqK', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03486796843', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-27 01:27:24', '2022-05-27 01:27:24'),
(33, 'M SAFWAN', 'ISHTIAQ', 'M SAFWAN ISHTIAQ', 'Safwan', 'safwanishtiaq666@gmail.com', NULL, '$2y$10$IunbFHQtfyu.rn7ZaEDK7.Ev6z.sjyLJn2pgBs7Fd4kwR4.bprzRe', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03066575212', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-29 11:43:40', '2022-05-29 11:43:40'),
(34, 'Riz', 'Shani', 'Riz Shani', 'Rizshani', 'rizshani2011@yahoo.com', NULL, '$2y$10$1oZheiJKzU1QJjoe0d2qJO1RSS739q1j/IqOiRLR0ehZPYqa4onsq', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03225965990', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-30 11:09:00', '2022-05-30 11:09:00'),
(35, 'Dua', 'Fatima', 'Dua Fatima', 'DuaFatima', 'faizi8903@gmail.com', NULL, '$2y$10$aYf047t80er0aTfo1c9J4.T2e53Y3BHWFl/OoUAWOZ20UPx/Orqpy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03438489774', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-30 12:09:30', '2022-05-30 12:09:30'),
(36, 'Manha', 'rehman', 'Manha rehman', 'Manhaa', 'nazirsadia49@gmail.com', NULL, '$2y$10$6kZ6tBziC1lcbyiOWXPvzu7Z/NjnqA0QZI79J3lIrjwLCnBwTcBj2', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03451034801', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-05-30 17:28:25', '2022-05-30 17:28:25');
INSERT INTO `users` (`id`, `firstname`, `lastname`, `name`, `username`, `email`, `email_verified_at`, `password`, `avtar`, `cover`, `background_image`, `background_image_status`, `relationship_id`, `address`, `working`, `working_link`, `about`, `school`, `gender`, `birthday`, `country`, `website`, `facebook`, `twitter`, `linkedin`, `youtube`, `vk`, `instagram`, `qq`, `wechat`, `discord`, `mailru`, `okru`, `language`, `email_code`, `src`, `ip_address`, `follow_privacy`, `friend_privacy`, `post_privacy`, `message_privacy`, `confirm_followers`, `show_activities_privacy`, `birth_privacy`, `visit_privacy`, `verified`, `lastseen`, `showlastseen`, `email_notification`, `e_like`, `e_wondered`, `e_shared`, `e_followed`, `e_commented`, `e_visited`, `e_liked_page`, `e_mentioned`, `e_joined_group`, `e_accepted`, `e_profile_wall_post`, `e_memory`, `e_sentme_msg`, `e_last_notif`, `notification_settings`, `status`, `active`, `type`, `strat_up`, `strat_up_info`, `stratup_follow`, `stratup_image`, `last_email_sent`, `phone`, `sms_code`, `is_pro`, `pro_time`, `pro_type`, `joined`, `css_file`, `timezone`, `referrer`, `ref_user_id`, `ref_level`, `balance`, `paypal_email`, `notifications_sound`, `order_posts_by`, `social_login`, `android_m_device_id`, `ios_m_device_id`, `android_n_device_id`, `ios_n_device_id`, `web_device_id`, `wallet`, `last_location_update`, `share_my_location`, `last_data_update`, `details`, `sidebar_data`, `last_avatar_mod`, `last_cover_mod`, `points`, `daily_points`, `point_day_expire`, `last_follow_id`, `share_my_data`, `last_login_data`, `two_factor`, `new_email`, `two_factor_verified`, `new_phone`, `info_file`, `city`, `state`, `zip`, `school_completed`, `weather_unit`, `paystack_ref`, `code_sent`, `StripeSessionId`, `time_code_sent`, `permission`, `skills`, `languages`, `currently_working`, `banned`, `banned_reason`, `coinbase_hash`, `coinbase_code`, `yoomoney_hash`, `conversation_id`, `securionpay_key`, `account_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Earn', 'Bilal', 'Earn Bilal', 'earnwithbilal', 'ba2987996@gmail.com', NULL, '$2y$10$8FcnSdVMEv7LJ/KyDI2QN.tbDS/cjCIfEbivmKbMIeY7rSA/AxI8G', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923032131784', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-01 12:06:41', '2022-06-01 12:06:41'),
(38, 'mohsina', 'rafiq', 'mohsina rafiq', 'mohsinarafiq98', 'mohsinarafiq98@gmail.com', NULL, '$2y$10$N1307X4.dbMFrljuv1/ScOnSsmESGmITa8cAkmFgWNrZMpid2.pSi', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03232531868', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-01 23:08:17', '2022-06-01 23:08:17'),
(39, 'Hamza', 'Akbar', 'Hamza Akbar', 'Ali372', 'malikhamza0372@gmail.com', NULL, '$2y$10$5zboyHoi0FnGS9hL2roY8uerQoI21q5NiWElq.qWxLGpqV6os8Tou', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923041970573', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-02 14:14:20', '2022-06-02 14:14:20'),
(40, 'Misbah', 'Islam', 'Misbah Islam', 'Misbahislam', 'misbahislam2@gmail.com', NULL, '$2y$10$LiIgGTF8VRHYcNAp9Sn8ge7FkhLOE87btd5qSmmUIqx7FFUFUDU9W', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03326945445', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-06 17:52:38', '2022-06-06 17:52:38'),
(41, 'Syed Muhammad Ramzan Ali', 'Bukhari', 'Syed Muhammad Ramzan Ali Bukhari', 'SyedRamzan786', 'saddyshah91@gmail.com', NULL, '$2y$10$mcKxI9d7s1IYcBYJLELx5OZWe7uFF34fP/Z5T5O1FQsgM8WWYku7C', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03225929578', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-09 15:44:41', '2022-06-09 15:44:41'),
(42, 'Nayab', 'Mehak', 'Nayab Mehak', 'Nayaab', 'nayabf420@gmail.com', NULL, '$2y$10$dTnzu/ILYtA2h5Tgd3sYHebikCu39Jp5SGw8q.YFqGlbON8aV76Dy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03081669538', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-10 20:58:36', '2022-06-10 20:58:36'),
(43, 'Muskan', 'Memon', 'Muskan Memon', 'muskan456', 'Falishmemon2@gmail.com', NULL, '$2y$10$O.8ZBY0QQTfYJGJZ5sxg6ewpUMfew8dPYYgirZ2peoPth2uzYOqJ6', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03029146792', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-11 00:05:45', '2022-06-11 00:05:45'),
(44, 'saifullah', 'tanha', 'saifullah tanha', 'saifullah01', 'saifullahtanha5@gmail.com', NULL, '$2y$10$lnBxE0yVvgfRMgPK2I0q7etnaGN3uf7qub60jDOQ/E2z2kjjr01mO', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03001196223', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-11 16:04:54', '2022-06-11 16:04:54'),
(45, 'Sadia', 'Rani', 'Sadia Rani', 'Sadiarani', 'danish.khalil15@hotmail.com', NULL, '$2y$10$x9jxkyfOuupEeQKKtf4ZoOg4yj6w7EY99p0DqZK/8Olmhg8Sq6Kwi', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '1992-09-12', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '1', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923094179614', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-12 18:07:35', '2022-06-12 22:45:14'),
(46, 'Maria', 'Hafeez', 'Maria Hafeez', 'mariahafeez', 'ino.fatima5@gmail.com', NULL, '$2y$10$rPIdfSg.d5IilXfE6zXKVOg10Jg8BQ0rh0uzQZLG0FnDNudJIt5Na', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03499179700', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-13 16:49:24', '2022-06-13 16:49:24'),
(47, 'Syed Muneeb', 'Atif', 'Syed Muneeb Atif', 'Muneeb', 'atifsyedmuneeb@gmail.com', NULL, '$2y$10$cSlZnuMd5JchkR/oBXdgBekCSmXjrBl2lcXKooLqGwfjsMj1AhDoa', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03158779520', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-14 14:30:53', '2022-06-14 14:30:53'),
(48, 'kabir', 'manzar', 'kabir manzar', 'kabirmanzar8gmail.com', 'kabirmanzar8@gmail.com', NULL, '$2y$10$ooVWX3ymfeMdBH.Ut9eA3.jRGIB5/OKLjeSVUCrBJ6rW5X1UOzvSO', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03087529860', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-15 00:43:27', '2022-06-15 00:43:27'),
(49, 'Ali', 'Shan', 'Ali Shan', 'Shahib', 'ha6662930@gmail.com', NULL, '$2y$10$eFM0O9dTrZh0YPrrvweZceIXkRClOBomAwieZAs20NBVv9aSkPCMy', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '1985-10-21', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '1', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03165548639', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-15 14:00:41', '2022-06-15 14:05:19'),
(50, 'Sajid', 'Nawaz', 'Sajid Nawaz', 'sajidnawaz123', 'Sajidnawaz898@gmail.com', NULL, '$2y$10$CCX3VS8fzcFopm7QuqiHY.5chG98uFFX9E00dbdKKn4oZxuqBnzFG', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03349481074', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-16 02:15:49', '2022-06-16 02:15:49'),
(51, 'Muhammad', 'Imran', 'Muhammad Imran', 'Mani2211', 'lalagdiver@gmail.com', NULL, '$2y$10$8p9liU332tBPJyqWsRx/3.pnvMWI0b5wgrNLenSK/ESI1UCNr5ZNa', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '+923466565193', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-21 21:57:29', '2022-06-21 21:57:29'),
(52, 'Zubair Ahmed', 'Soomro', 'Zubair Ahmed Soomro', 'sameerjaan', 'janisoomro612@gmail.com', NULL, '$2y$10$Ete37R9zccffbPbC3CHeM.NCAtQ1pBSaLpf0SBDYN0QTZiB/OAnIW', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03003076527', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-22 23:35:43', '2022-06-22 23:35:43'),
(53, 'Waseem Ahmed', 'Soomro', 'Waseem Ahmed Soomro', 'princejaan', 'soomrowase@gmail.com', NULL, '$2y$10$jO81QI/P5eKfv64SUwW3VeRWU/cypEKuXs6zkn.QKiiM2H16Qh8z.', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03223867996', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-06-22 23:54:32', '2022-06-22 23:54:32'),
(54, 'Sruthy', 'KR', 'Sruthy KR', 'Sruthy.k.r', 'unnimol.raghu1@gmail.com', NULL, '$2y$10$gF4/lGof34VC12H9ZX.UKuXAw41SJNXynQfI9042e6Bp/d.tm/kxq', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '±6587987743', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-07-20 09:10:19', '2022-07-20 09:10:19'),
(55, 'nabia', 'khan', 'nabia khan', 'Nkhan', 'nabiashareef7@gmail.com', NULL, '$2y$10$9.tZt4zSWGRYRwzhyQJJD.q8sldw1SfIDL42gcfj5CAR3kbXiC7Xe', 'wuas-content/upload/images/d-avatar.jpg', 'wuas-content/upload/images/d-cover.jpg', 'wuas-content/upload/images/d-cover.jpg', '0', 0, NULL, NULL, NULL, NULL, NULL, 2, '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'english', NULL, 'Undefined', NULL, '0', '0', '1', '0', '0', '1', '0', '0', '0', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '{\"e_liked\":1,\"e_shared\":1,\"e_wondered\":0,\"e_commented\":1,\"e_followed\":1,\"e_accepted\":1,\"e_mentioned\":1,\"e_joined_group\":1,\"e_liked_page\":1,\"e_visited\":1,\"e_profile_wall_post\":1,\"e_memory\":1}', '0', '0', 'user', '0', '0', '0', '0', 0, '03356820022', 0, '0', 0, '0', 0, NULL, NULL, 0, 0, NULL, 0.00000000, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, 0.00000000, '0', 1, 0, '{\"post_count\":0,\"album_count\":0,\"following_count\":0,\"followers_count\":0,\"groups_count\":0,\"likes_count\":0}', NULL, 0, 0, 0.00, 0, NULL, 0, 1, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 'us', NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0', NULL, '2022-07-26 16:59:31', '2022-07-26 16:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `wuas_add_friends`
--

CREATE TABLE `wuas_add_friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `wuas_add_user_id` bigint(20) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: pending, 1: approved, 2: unapproved, 3: rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_follows`
--

CREATE TABLE `wuas_follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `wuas_follow_user_id` bigint(20) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: unfollow, 1: follow',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_friendships`
--

CREATE TABLE `wuas_friendships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending' COMMENT 'pending/accepted/denied/blocked/',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_friendship_groups`
--

CREATE TABLE `wuas_friendship_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `friendship_id` bigint(20) UNSIGNED NOT NULL,
  `friend_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_general_settings`
--

CREATE TABLE `wuas_general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_logo` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'basic',
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `cur_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `force_ssl` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wuas_general_settings`
--

INSERT INTO `wuas_general_settings` (`id`, `website_name`, `website_logo`, `website_description`, `active_template`, `copyright`, `cur_text`, `cur_sign`, `force_ssl`, `created_at`, `updated_at`) VALUES
(1, 'JobsIntro', 'wuas-content/upload/images/website-logo.png', 'This is website description', 'basic', NULL, 'USD', '$', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wuas_groups`
--

CREATE TABLE `wuas_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `group_title` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `avatar` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wuas-content/uploads/images/d-group.jpg',
  `cover` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wuas-content/uploads/images/d-group.jpg',
  `about` varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category` bigint(20) NOT NULL DEFAULT '0',
  `sub_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `privacy` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `join_privacy` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_interactions`
--

CREATE TABLE `wuas_interactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'follow' COMMENT 'follow/like/subscribe/favorite/upvote/downvote',
  `relation_value` double DEFAULT NULL,
  `relation_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wuas_posts`
--

CREATE TABLE `wuas_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `status` bigint(20) NOT NULL DEFAULT '0',
  `recipient_id` bigint(20) NOT NULL DEFAULT '0',
  `post_text` text COLLATE utf8mb4_unicode_ci,
  `page_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `event_id` bigint(20) NOT NULL DEFAULT '0',
  `page_event_id` bigint(20) NOT NULL DEFAULT '0',
  `pageLink` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pageLinkTitle` text COLLATE utf8mb4_unicode_ci,
  `pageLinkImage` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pageLinkContent` text COLLATE utf8mb4_unicode_ci,
  `post_vimeo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_dailymotion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_file_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_file_thumb` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_vine` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_sound_cloud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_playtube` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_deepsound` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_share_id` bigint(20) NOT NULL DEFAULT '0',
  `post_privacy` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `post_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_feeling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_listening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_traveling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_watching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_playing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_photo` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_time_id` bigint(20) NOT NULL DEFAULT '0',
  `album_name` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multi_image` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0: no multi images, 1: user has access to multi images',
  `multi_image_post_id` bigint(20) NOT NULL DEFAULT '0',
  `boost_id` bigint(20) NOT NULL DEFAULT '0',
  `product_id` bigint(20) NOT NULL DEFAULT '0',
  `poll_id` bigint(20) NOT NULL DEFAULT '0',
  `blog_id` bigint(20) NOT NULL DEFAULT '0',
  `forum_id` bigint(20) NOT NULL DEFAULT '0',
  `thread_id` bigint(20) NOT NULL DEFAULT '0',
  `video_views_id` bigint(20) NOT NULL DEFAULT '0',
  `post_record` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shared_from` bigint(20) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wuas_posts`
--

INSERT INTO `wuas_posts` (`id`, `user_id`, `status`, `recipient_id`, `post_text`, `page_id`, `group_id`, `event_id`, `page_event_id`, `pageLink`, `pageLinkTitle`, `pageLinkImage`, `pageLinkContent`, `post_vimeo`, `post_dailymotion`, `post_facebook`, `post_file`, `post_file_name`, `post_file_thumb`, `post_youtube`, `post_vine`, `post_sound_cloud`, `post_playtube`, `post_deepsound`, `post_map`, `post_share_id`, `post_privacy`, `post_type`, `post_feeling`, `post_listening`, `post_traveling`, `post_watching`, `post_playing`, `post_photo`, `post_time_id`, `album_name`, `multi_image`, `multi_image_post_id`, `boost_id`, `product_id`, `poll_id`, `blog_id`, `forum_id`, `thread_id`, `video_views_id`, `post_record`, `shared_from`, `updated_at`, `created_at`) VALUES
(7, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 08:33:47', '2022-05-19 12:06:25'),
(8, 11, 0, 0, 'nice day', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 12:53:58', '2022-05-19 12:53:58'),
(9, 4, 0, 0, 'Hi I\'m new here....\n\n', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 13:07:02', '2022-05-19 13:07:02'),
(10, 4, 0, 0, 'Hi I\'m new here....\n\n', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 13:07:03', '2022-05-19 13:07:03'),
(11, 4, 0, 0, 'Hi', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 13:08:01', '2022-05-19 13:08:01'),
(15, 1, 0, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 15:32:33', '2022-05-19 15:32:33'),
(16, 17, 0, 0, 'Security officer \nLoss prevention officer job available\n\nLocation:\nLDA avenue 1,\nbahria orchard,\nEME defence,\nType of ad\nJob offer\nSalary period\nMonthly\nSalary: from\n18,000\nSalary to\n20,000\nPosition type:\nFull-time\nContact no:+92 332 8334232', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-19 22:09:00', '2022-05-19 22:09:00'),
(17, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 17, '2022-05-19 22:13:03', '2022-05-19 22:13:03'),
(18, 20, 0, 0, ' company need people for online work Can u do work Online for 2 to 4 hours ? Using ur smart phone or laptop  Payment is daily For more information contact on whatsapp 👉🏻03107987639\n#jobs', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-20 01:25:10', '2022-05-20 01:25:10'),
(19, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 14, '2022-05-20 01:36:15', '2022-05-20 01:36:15'),
(20, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 14, '2022-05-20 01:36:21', '2022-05-20 01:36:21'),
(21, 4, 0, 0, 'https://www.pmexchange.co/register/Riznaz', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-20 02:33:48', '2022-05-20 02:33:48'),
(22, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 22, '2022-05-21 01:48:46', '2022-05-21 01:48:46'),
(23, 23, 0, 0, 'Nothing\n', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-21 04:12:44', '2022-05-21 04:12:44'),
(24, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:20:26', '2022-05-21 04:20:26'),
(25, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:20:42', '2022-05-21 04:20:42'),
(26, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:20:45', '2022-05-21 04:20:45'),
(27, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:20:50', '2022-05-21 04:20:50'),
(28, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:20:58', '2022-05-21 04:20:58'),
(29, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:21:10', '2022-05-21 04:21:10'),
(30, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:21:12', '2022-05-21 04:21:12'),
(31, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:21:16', '2022-05-21 04:21:16'),
(32, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-21 04:21:22', '2022-05-21 04:21:22'),
(33, 10, 0, 0, 'Online Job Part Time/Full Time/Home Base Male Female or Student Apply\nSalary 2,000 to 5,000\nSalary period hourly\nPosition type part time\nContact +923259221362\n#jobs\nhttps://www.olx.com.pk/profile/71e5670c-cb6c-4d69-8ccb-1c2a557a778b', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-21 15:40:36', '2022-05-21 15:40:36'),
(34, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 23, '2022-05-22 12:42:51', '2022-05-22 12:42:51'),
(35, 28, 0, 0, 'Hi', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-22 17:06:49', '2022-05-22 17:06:49'),
(36, 29, 0, 0, 'I need members for online job .\nEasy work.\nContact on Whatsapp\n03363216512', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-23 09:58:17', '2022-05-23 09:58:17'),
(37, 14, 0, 0, 'https://aamearning.com/Faizaa/si3', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-05-30 11:26:01', '2022-05-30 11:26:01'),
(38, 37, 0, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-01 12:07:01', '2022-06-01 12:07:01'),
(39, 20, 0, 0, 'Asslam o Alikum', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-09 02:43:33', '2022-06-09 02:43:33'),
(40, 44, 0, 0, 'i am wark', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-11 16:05:49', '2022-06-11 16:05:49'),
(41, 45, 0, 0, 'Part-time job available for foodpanda\nLocation Lahore\nSalary 34 to 4000\nContact for information\n03464447121\n#jobs', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-12 22:40:14', '2022-06-12 22:40:14'),
(42, 44, 0, 0, 'me', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-14 15:04:30', '2022-06-14 15:04:30'),
(43, 50, 0, 0, 'Need online work ', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-16 02:22:31', '2022-06-16 02:22:31'),
(44, 51, 0, 0, 'Job.Bike Rider\nCompany. Food Panda\nSalary. 25000 to 28000\nTime: Part time or Full Time\n', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-22 15:59:59', '2022-06-22 15:59:59'),
(45, 51, 0, 0, 'Job.Bike Rider\nCompany. Food Panda\nSalary. 25000 to 28000\nTime: Part time or Full Time\n', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/wuas-content/upload/images/post/2022/6/25/Mani22119048.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, '2022-06-22 16:00:48', '2022-06-22 16:00:48'),
(46, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:02:15', '2022-06-22 16:02:15'),
(47, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:02:31', '2022-06-22 16:02:31'),
(48, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:02:34', '2022-06-22 16:02:34'),
(49, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:02:53', '2022-06-22 16:02:53'),
(50, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:03:17', '2022-06-22 16:03:17'),
(51, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:03:29', '2022-06-22 16:03:29'),
(52, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:03:29', '2022-06-22 16:03:29'),
(53, 4, 1, 0, '⭕My company need people for online work😍\n\nCan u do work Online for 2 to 4 hours ?\n\nUsing ur smart phone or laptop 😇\nPayment is daily \nFor more information contact on whatsapp 👉🏻03107987639', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 51, '2022-06-22 16:04:31', '2022-06-22 16:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `wuas_shares`
--

CREATE TABLE `wuas_shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `wuas_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_wuas_post_id_foreign` (`wuas_post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_likeable_type_likeable_id_index` (`likeable_type`,`likeable_id`),
  ADD KEY `likes_user_id_index` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_messageable_type_messageable_id_index` (`messageable_type`,`messageable_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wuas_add_friends`
--
ALTER TABLE `wuas_add_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuas_follows`
--
ALTER TABLE `wuas_follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuas_friendships`
--
ALTER TABLE `wuas_friendships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wuas_friendships_sender_type_sender_id_index` (`sender_type`,`sender_id`),
  ADD KEY `wuas_friendships_recipient_type_recipient_id_index` (`recipient_type`,`recipient_id`);

--
-- Indexes for table `wuas_friendship_groups`
--
ALTER TABLE `wuas_friendship_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`friendship_id`,`friend_id`,`friend_type`,`group_id`),
  ADD KEY `wuas_friendship_groups_friend_type_friend_id_index` (`friend_type`,`friend_id`);

--
-- Indexes for table `wuas_general_settings`
--
ALTER TABLE `wuas_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuas_groups`
--
ALTER TABLE `wuas_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuas_interactions`
--
ALTER TABLE `wuas_interactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wuas_interactions_subject_type_subject_id_index` (`subject_type`,`subject_id`),
  ADD KEY `wuas_interactions_user_id_index` (`user_id`);

--
-- Indexes for table `wuas_posts`
--
ALTER TABLE `wuas_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuas_shares`
--
ALTER TABLE `wuas_shares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wuas_shares_user_id_foreign` (`user_id`),
  ADD KEY `wuas_shares_wuas_post_id_foreign` (`wuas_post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wuas_add_friends`
--
ALTER TABLE `wuas_add_friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_follows`
--
ALTER TABLE `wuas_follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_friendships`
--
ALTER TABLE `wuas_friendships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_friendship_groups`
--
ALTER TABLE `wuas_friendship_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_general_settings`
--
ALTER TABLE `wuas_general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wuas_groups`
--
ALTER TABLE `wuas_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_interactions`
--
ALTER TABLE `wuas_interactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuas_posts`
--
ALTER TABLE `wuas_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wuas_shares`
--
ALTER TABLE `wuas_shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_wuas_post_id_foreign` FOREIGN KEY (`wuas_post_id`) REFERENCES `wuas_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wuas_friendship_groups`
--
ALTER TABLE `wuas_friendship_groups`
  ADD CONSTRAINT `wuas_friendship_groups_friendship_id_foreign` FOREIGN KEY (`friendship_id`) REFERENCES `wuas_friendships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wuas_interactions`
--
ALTER TABLE `wuas_interactions`
  ADD CONSTRAINT `wuas_interactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wuas_shares`
--
ALTER TABLE `wuas_shares`
  ADD CONSTRAINT `wuas_shares_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wuas_shares_wuas_post_id_foreign` FOREIGN KEY (`wuas_post_id`) REFERENCES `wuas_posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
