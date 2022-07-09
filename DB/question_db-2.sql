-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 12:33 AM
-- Server version: 10.3.24-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answare`
--

CREATE TABLE `answare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `answare1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare6` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare7` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare8` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare9` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answare10` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answare`
--

INSERT INTO `answare` (`id`, `user_id`, `answare1`, `file1`, `answare2`, `file2`, `answare3`, `file3`, `answare4`, `file4`, `answare5`, `file5`, `answare6`, `file6`, `answare7`, `file7`, `answare8`, `file8`, `answare9`, `file9`, `answare10`, `file10`, `created_at`, `updated_at`) VALUES
(2, 1, '333333', NULL, '444444', NULL, '5555', 'back-to-top-1647846992.png', '455884', 'billstrasse24-1647846992.png', NULL, 'bg-img-1647872356.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-21 08:19:16'),
(4, 5, '1 test', 'bg-img-1647883568.jpg', NULL, '', '3 test', '', NULL, '', 'test', 'ms-word-1647885818.docx', 'test', 'ms-word-1647884293.docx', NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, '2022-03-21 12:08:56');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_20_124216_create_answare_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1 COMMENT 'user=1, admin=2',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_img`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$tdlpn374Yt2P38iqvNxtMe7NX9iQ3enJ8mgccHIQLRWgDX6ioEjCm', 'zvks74oP4iJ3VnF2BnCwOTdrlIzqc7Ra5IGvD9Bew9DFbc4VDvf5zBdC9NMe', NULL, 2, 1, '2022-03-19 22:11:37', '2022-03-19 22:11:37'),
(2, 'Nadira Afroz', 'nadira.setu@gmail.com', NULL, '$2y$10$4tlkb12UsXSfYpS0Ft6qU.RDL6JBrhvHZaqV4WWigTUN1CTwWxLJq', NULL, NULL, 1, 1, '2022-03-21 06:51:06', '2022-03-21 06:51:06'),
(3, 'Asish Kumar Das', 'asish@chillicom.agency', NULL, '$2y$10$nBLjKu0GL6cQeInCwxrWtOc/dod6.OdOlCl9ubzMIyZ7dnxu3ilZG', NULL, NULL, 1, 1, '2022-03-21 06:53:43', '2022-03-21 06:53:43'),
(5, 'test test', 'test@test.com', NULL, '$2y$10$CdSiVbI7QpTPEscfbhn9WeyQDm535AyeIgAlEuBb8TT18k8vG0q9O', 'QakdeOEQMo7cmQJbAv1PBMaHXzIyp0gYUFdJzDJwMy1ctebn8xHajfmjW7Bg', NULL, 1, 1, '2022-03-21 08:08:33', '2022-03-21 08:08:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answare`
--
ALTER TABLE `answare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answare_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answare`
--
ALTER TABLE `answare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answare`
--
ALTER TABLE `answare`
  ADD CONSTRAINT `answare_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
