-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 01:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `git_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('read','not read') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `first_name`, `last_name`, `email`, `language`, `others`, `git_link`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Esther Ociba', 'Atim', 'atimesther@gmail.com', 'Php-laravel framework', 'Graphics', 'https://github.com/atim esther', 'I have experience of one yearin php laravel framework, Tdd and git', 'not read', '2020-08-26 17:37:11', '2020-10-15 13:09:02'),
(2, 'Ociba Aaron', 'Ojinga', 'ojingaaaron@gmail.com', 'Java', 'mobile application', 'https://github.com/ojinga aaron', 'I am good in java programming web system and practicing mobile applications using java, I use git all the time', 'read', '2020-08-26 17:40:51', '2020-08-26 18:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('approved','active','deleted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `first_name`, `last_name`, `email`, `contact`, `comment`, `reply`, `status`, `created_at`, `updated_at`) VALUES
(1, 'James', 'Ociba', 'ocibajames@gmail.com', '0775401799', 'Hello guys! i would like to appreciate your effort for all what you are doing for IT world', 'Thankyou for your appreciation.', 'approved', '2020-10-13 05:09:23', '2020-10-13 07:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','deleted') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `heading`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 8', 'New package has been added to laravel for mobile applications', 'active', '2020-08-27 18:48:47', '2020-10-15 16:24:36'),
(2, 'JAAJA Website', 'JAAJA website will be online by next week 19/10/2020', 'active', '2020-10-15 16:21:28', '2020-10-15 16:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `particulars` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('paid','active','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenditures`
--

INSERT INTO `expenditures` (`id`, `item`, `particulars`, `unit`, `quantity`, `rate`, `amount`, `person`, `date`, `sign`, `status`, `created_at`, `updated_at`) VALUES
(1, 'water', 'water bottle', 'piece', '1 ', '20000', '20000', 'Ociba Aaron Ojinga', '20/10/2020', NULL, 'paid', '2020-10-20 04:44:43', '2020-10-20 08:41:47'),
(2, 'masks', 'mouth masks', 'box', '2', '10000', '20000', 'Ociba Esther Atim', '23/10/2020', NULL, 'paid', '2020-10-23 04:26:51', '2020-10-23 04:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item`, `created_at`, `updated_at`) VALUES
(1, 'website', '2020-10-27 10:56:07', '2020-10-27 10:56:07'),
(2, 'web application', '2020-10-27 10:56:07', '2020-10-27 10:56:07'),
(3, 'mobile application', '2020-10-27 10:57:42', '2020-10-27 10:57:42'),
(4, 'stickers', '2020-10-27 10:57:42', '2020-10-27 10:57:42'),
(5, 'logo', '2020-10-27 10:58:15', '2020-10-27 10:58:15'),
(6, 'installation', '2020-10-27 10:58:15', '2020-10-27 10:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('read','not read') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nagashia Odiirah', 'nagashiaod@gmail.com', '0785401795', 'Hi, i need mobile app', 'read', '2020-08-26 18:57:40', '2020-10-15 13:06:19'),
(2, 'oliba moses ociba', 'olibamoses@gmail.com', '0775401793', 'Guys I need web system for shopping', 'not read', '2020-08-26 18:59:44', '2020-08-26 19:03:00'),
(3, 'Kansime Deborah', 'kansimed@gmail.com', '0756435291', 'I would you to develop for me shop system', 'read', '2020-08-26 19:02:02', '2020-10-15 13:19:58');

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
(4, '2020_08_26_131429_create_applications_table', 1),
(5, '2020_08_26_131748_create_messages_table', 1),
(6, '2020_08_26_132024_create_news_table', 2),
(7, '2020_08_26_132115_create_events_table', 2),
(8, '2020_08_26_132310_create_sample_works_table', 3),
(9, '2020_10_13_035453_create_comments_table', 4),
(10, '2020_10_19_165253_create_payments_table', 5),
(11, '2020_10_19_214612_create_expenditures_table', 6),
(12, '2020_10_19_220354_create_costs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','deleted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 8', 'Laravel 8 documentation  is available in laravel.com', 'FILE945.JPG', 'active', '2020-08-27 18:30:06', '2020-08-27 18:30:06'),
(2, 'Bootstrap 3', 'This is how to create editable datatables', 'FILE946.JPG', 'active', '2020-10-15 15:18:58', '2020-10-15 16:01:01');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_frame` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incharge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','pending','completed','deleted','suspended') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `company`, `phone`, `company_email`, `item_id`, `amount`, `paid`, `balance`, `time_frame`, `incharge`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jaaja', '0775401793', 'jjcompany@gmail.com', 1, '500000', '500000', '0', '2weeks', 'ociba', 'The balance will be completed when site is full done', 'completed', '2020-10-19 16:16:53', '2020-10-20 16:01:41'),
(2, 'Kasubi church', '0775401794', 'kasubichurch@gmail.com', 1, '800000', '400000', '400000', '4weeks', 'anish', 'it should be completed in time', 'pending', '2020-10-20 16:34:21', '2020-10-27 06:53:47'),
(3, 'kikoni savingg', '0785690281', 'kikonisavings@gmail.com', 3, '10000000', '5000000', '5000000', '2', 'julius', 'both api and app', 'pending', '2020-10-25 15:03:05', '2020-10-25 15:03:05'),
(4, 'jmta', '0776439028', 'jmta@gmail.com', 6, '300000', '150000', '150000', '1 week', 'james', 'it must be done well', 'pending', '2020-10-25 15:19:57', '2020-10-25 15:19:57'),
(5, 'Kasubi church', '0775401793', 'kasubichurch@gmail.com', 5, '500000', '250000', '250000', '1 week', 'ociba', 'it must be done well', 'pending', '2020-10-25 15:33:05', '2020-10-25 15:33:05'),
(6, 'capital', '0786554433', 'capital@gmail.com', 2, '2000000', '1500000', '500000', '1 month', 'james', 'only web application', 'pending', '2020-10-26 03:27:27', '2020-10-26 03:27:27'),
(7, 'makerere', '0775401793', 'makerere@gmail.com', 3, '500000', '400000', '10000', '2 days', 'julius', 'it must be done well', 'pending', '2020-10-27 08:36:36', '2020-10-27 08:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-26 16:49:50', '2020-10-26 16:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `sample_works`
--

CREATE TABLE `sample_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','deleted') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'ociba james', 'ocibajames@gmail.com', NULL, '$2y$10$xbsj4JZu0ec9rQ0XGTmxY.kr6iLEjZbqtYUmYA5pQ3PSOsO4VfAy6', NULL, '2020-10-26 10:31:15', '2020-10-26 10:31:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `sample_works`
--
ALTER TABLE `sample_works`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sample_works`
--
ALTER TABLE `sample_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
