-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 08:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seblak_db`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `products_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 5, 'assets/gallery/5s5uVm7vdt4Z8oyCCErw56u5rx0VmQapfcNvuucE.png', NULL, '2020-06-29 02:07:44', '2020-06-29 02:07:44'),
(10, 6, 'assets/gallery/dQla4RtEqB5bbilNynf0UIOzbY2L4ToCfY8yMU3z.png', NULL, '2020-06-29 02:07:58', '2020-06-29 02:07:58'),
(11, 7, 'assets/gallery/34jfObNF0EZ5YWRO4capOsIazThNmBHubmQuQhUG.png', NULL, '2020-06-29 02:08:25', '2020-06-29 02:08:25'),
(12, 6, 'assets/gallery/S8WS9fSvzuleMH1nvk8y1NiGf62EFA0PWIucGcI4.png', NULL, '2020-06-29 02:41:47', '2020-06-29 02:41:47'),
(13, 6, 'assets/gallery/WoGXmcl4gZTamojCrbetq5SqdjYv7BMLgNETiwlx.png', NULL, '2020-06-29 02:42:02', '2020-06-29 02:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_28_102116_create_products_table', 1),
(5, '2020_06_28_103547_create_galleries_table', 2),
(6, '2020_06_28_104010_create_toppings_table', 3),
(7, '2020_06_28_104142_create_transactions_table', 3),
(8, '2020_06_28_120215_add_roles_to_users_table', 4),
(10, '2020_06_30_011235_add_products_to_topping_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Seblak', 'seblak', 'lorem ', 10000, '2020-06-28 18:03:31', NULL, '2020-06-28 18:03:31'),
(2, 'Sebalk Jugh', 'sebalk-jugh', 'masakan enak', 12000, '2020-06-29 02:03:58', '2020-06-28 17:29:02', '2020-06-29 02:03:58'),
(3, 'Cihuy', 'cihuy', 'pedas merona\r\n                        sdsdsdsdsdsdsdsdds', 8400, '2020-06-29 02:04:02', '2020-06-28 17:43:48', '2020-06-29 02:04:02'),
(4, 'Pempek Lenjer', 'pempek-lenjer', 'dari palembang lenjer', 9000, '2020-06-29 02:04:06', '2020-06-28 18:06:25', '2020-06-29 02:04:06'),
(5, 'Pempek', 'pempek', 'berasal dari palembang', 8000, NULL, '2020-06-29 02:04:35', '2020-06-29 02:04:35'),
(6, 'Seblak', 'seblak', 'Seblak', 12000, NULL, '2020-06-29 02:04:47', '2020-06-29 02:04:47'),
(7, 'Gehu', 'gehu', 'gehu gehu gehu gehu', 2000, NULL, '2020-06-29 02:05:03', '2020-06-29 02:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE `toppings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toppings`
--

INSERT INTO `toppings` (`id`, `products_id`, `name`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 7, 'dsds', 12000, '2020-06-29 18:31:25', '2020-06-29 18:31:04', '2020-06-29 18:31:25'),
(6, 5, 'Lenjer', 300, NULL, '2020-06-29 18:31:15', '2020-06-29 19:11:52'),
(7, 6, 'Mie', 400, NULL, '2020-06-29 18:37:39', '2020-06-29 18:37:39'),
(8, 6, 'Tulang', 4000, NULL, '2020-06-29 18:37:57', '2020-06-29 18:37:57'),
(9, 6, 'BAKSOOOOO', 5000, NULL, '2020-06-29 19:10:16', '2020-06-29 19:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `toppings_id` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Hamdan Nurachid', 'hamdan@gmail.com', NULL, '$2y$10$oROJLkJlVwgsBBNyfwhcb.iKdFiDDc7FYvxEXcQIzfgxkK22uBdpG', NULL, '2020-06-28 04:57:18', '2020-06-28 04:57:18', 'ADMIN'),
(2, 'Hamdan', 'admin@desa.id', NULL, '$2y$10$O5CkohGn.jPTPclgSVUg4uI4j2c6KsGfePea/yr8vOgQzegZnG7W2', NULL, '2020-06-28 05:32:36', '2020-06-28 05:32:36', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppings`
--
ALTER TABLE `toppings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `toppings`
--
ALTER TABLE `toppings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
