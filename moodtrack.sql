-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 24, 2022 at 09:18 AM
-- Server version: 8.0.28
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `moodtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `mood` int NOT NULL,
  `activity` varchar(500) NOT NULL,
  `challenge` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `user_id`, `mood`, `activity`, `challenge`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 3, 'Reading', 'Fear', '2022-05-31 15:27:21', '2022-05-31 15:27:21', NULL),
(2, 1, 3, 'Reading', 'Fear', '2022-05-31 15:52:12', '2022-05-31 15:52:12', NULL),
(3, 3, 1, 'Working out', 'Fear of heights', '2022-05-31 15:56:42', '2022-05-31 15:56:42', NULL),
(4, 1, 2, 'Reading', 'Fear of heights', '2022-06-07 10:13:49', '2022-06-07 10:13:49', NULL),
(5, 1, 2, 'Reading', 'Fear of heights', '2022-06-07 10:27:34', '2022-06-07 10:27:34', NULL),
(6, 1, 2, 'Reading', 'Fear of heights', '2022-06-07 10:31:44', '2022-06-07 10:31:44', NULL),
(7, 1, 1, 'Working out', 'Fear of heights', '2022-06-13 17:14:56', '2022-06-13 17:14:56', NULL),
(8, 1, 1, 'Working out', 'Shyness', '2022-06-14 10:49:50', '2022-06-14 10:49:50', NULL),
(9, 1, 3, 'Resting', NULL, '2022-06-20 11:27:25', '2022-06-20 11:27:25', NULL),
(10, 1, 0, 'Working out', 'Fear of heights', '2022-06-21 10:46:01', '2022-06-21 10:46:01', NULL),
(11, 4, 1, 'Working', NULL, '2022-06-21 14:10:25', '2022-06-21 14:10:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'maxi', 'max.mustermann@gmail.com', '$2y$10$G9o0E.p0qZFDWwdTXlA.XetXotako1j5bCktLFgl95Ri/c3xgQtd.', '1BFZ5vLZW9kXDx9gYUWOHfDN7h4ebTTNqEOUN2p4AcBH7T79S2kIt0FUHRxN', '2022-05-31 15:25:10', '2022-05-31 15:25:10'),
(2, 'benny', 'xohasihi@mailinator.com', '$2y$10$UPfPYhtEb9Q4X75RAw0lxOqf48rK60KTSH5S5JSGvp5nUYy8Z/Fe2', 'ZOMgGn7lQn74aG23TlHw3MhGvcX3jOfvn20Wa21pMumQ93O5HhaUXh4bUJYu', '2022-05-31 15:54:20', '2022-05-31 15:54:20'),
(3, 'matthew', 'mufusuc@mailinator.com', '$2y$10$fi4CrJrhpgCjxEPf31GzwuKWkubCK8pdyOaxakACbctuACpc/mJLa', 'a7dRLPAMV3BfWBk12F00FC3Q9ySqC8k4bBiyLu6S2pCY5eSQNretm5JNlQhO', '2022-05-31 15:55:30', '2022-05-31 15:55:30'),
(4, 'stella', 'main@mail.com', '$2y$10$QWJF.RZxIhNEU.nty94DWO3Vwbtxw8PlcLcv88Kr4ivVQ1kgntiWi', 'L82bHlLbFc34AimeDGxBYAFK005GBeeRmnMSc7zeMFSh7nOY6AzO28SevdLn', '2022-06-21 13:52:59', '2022-06-21 13:52:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;