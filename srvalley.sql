-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 07:07 PM
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
-- Database: `srvalley`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `image`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Venue Decoration', 'orchid.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id\r\n                            est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite\r\n                            beatae vita', 1, NULL, NULL),
(2, 'grrate location', 'orchid.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite beatae vita', 1, NULL, NULL),
(3, 'Parking Available', 'orchid.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite beatae vita', 1, NULL, NULL),
(4, 'ample amount of space', 'orchid.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite beatae vita', 1, NULL, '2021-09-23 09:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title1`, `title2`, `cta`, `cta_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1.webp', 'Room Availability Checker & Booking', 'Book Early <span>Save</span>More', 'Explore Our Rooms', '#banqets', 1, NULL, '2021-09-23 07:37:11'),
(4, 'home-banner-1632402503.webp', 'Est voluptas eos au', 'Dolor <span>dolorem</span> mollit', 'Quis eligendi nisi s', 'Vel eveniet quia co', 1, '2021-09-23 07:38:23', '2021-09-23 07:39:29'),
(5, 'home-banner-1632407930.webp', 'Sequi ut ullam enim', 'Laboriosam cupidata', 'Sequi ut est assume', 'Quae dolor est aute', 1, '2021-09-23 09:08:50', '2021-09-23 09:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `banquets`
--

CREATE TABLE `banquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banquets`
--

INSERT INTO `banquets` (`id`, `name`, `thumbnail`, `description`, `price`, `overview`, `special_features`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Banquet Butterfly', 'Butterfly.webp', 'Full AC banquet hall covered with an area of - 12000 sq ft with 2 AC king\r\n                                room and a guest capacity of 800 at a time.<', '1,60,000', 'full AC banquet hall covered with an area of - 12000 sq ft with 2 AC king room and a guest capacity of 800 at a time-Overview', '<ul>                                         <li><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> 3 Bedrooms</li>                                         <li><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wifi</li>                                     </ul>', 1, 'butterfly', NULL, NULL),
(2, 'Banquet Lotus', 'Lotus.webp', 'Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered\r\n                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate\r\n                                washrooms in garden and guest', '1,20,000', 'Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered\r\n                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate\r\n                                washrooms in garden and guest capacity of around 1500-2000 at a time.--Overview', '<ul>                                         <li><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> 3 Bedrooms</li>                                         <li><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wifi</li>                                     </ul>', 1, 'lotus', NULL, NULL),
(3, 'Banquet Orchid', 'orchid.webp', 'Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered\r\n                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate\r\n                                washrooms in garden and guest', '1,00,000', 'Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered\r\n                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate\r\n                                washrooms in garden and guest capacity of around 1500-2000 at a time.', ' <ul>\r\n                                    <li><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> 3 Bedrooms</li>\r\n                                    <li><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wifi</li>\r\n                                    <li><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> Wifi</li>\r\n                                </ul>', 1, 'orchid', NULL, NULL),
(4, 'Gagansha wedding', 'gagansha.webp', 'Full AC banquet hall covered with an area of - 12000 sq ft with 2 AC king room and a guest capacity of 800 at a time', '1,20,000', 'Full AC banquet hall covered with an area of - 12000 sq ft with 2 AC king room and a guest capacity of 800 at a time', '', 0, 'gagansha-wedding', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_30_053535_create_sessions_table', 1),
(7, '2021_09_20_125211_create_banquets_table', 1),
(8, '2021_09_20_125646_create_sliders_table', 1),
(9, '2021_09_23_033407_create_banners_table', 2),
(10, '2021_09_23_051337_create_services_table', 3),
(11, '2021_09_23_051457_create_amenities_table', 3),
(12, '2021_09_23_162609_create_settings_table', 4);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'catering', 'lotus.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite beatae vita', 1, NULL, NULL),
(2, 'wedding decoration ', 'lotus.webp', 'Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite beatae vita', 1, NULL, NULL),
(3, 'Dante Garrett', 'service-1632409830.webp', 'dd', 1, '2021-09-23 09:15:08', '2021-09-23 09:40:59'),
(4, 'Madeson Dawson', 'service-1632408322.webp', NULL, 1, '2021-09-23 09:15:22', '2021-09-23 09:15:22'),
(5, 'Valentine Le', 'service-1632409387.webp', NULL, 1, '2021-09-23 09:33:07', '2021-09-23 09:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2GKgJSbRu6HC5lR0ES2x7aJ5mH1B73FSuR47FvBm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3FscUxLRGs0bW9IWFJZaGdGSjVsc0k4dnpPRExDTkhHWFA0VnlNQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632409778),
('RAM8nJJIlci8HKoBnNSTw35ELojna2hzDhuy46Ia', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNWExMU5ZZ2xFTVRSemJIQkEzNjN2UjJUYW1FUFFCbjJ5aE1hSGJlSiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkMjNxeFBtS2pja000azE1TXNnMXFVLmZVVEp0RElyZmg1YlRabnNGMHNXMS4vd1FYcUtQOC4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDIzcXhQbUtqY2tNNGsxNU1zZzFxVS5mVVRKdERJcmZoNWJUWm5zRjBzVzEuL3dRWHFLUDguIjt9', 1632416782),
('YmDPxWhqoAW9XQCadgiZRsL6I7MV9xcsFKmpYK5n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEJjbnIxOW53YmlBUmdKZHduQThheUFZUk5rSG9ROWdvUkVvdjlYeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NlcnZpY2UiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NlcnZpY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1632409778);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gbiz_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `phone`, `email`, `address`, `info`, `fb_link`, `insta_link`, `gbiz_link`, `created_at`, `updated_at`) VALUES
(1, 'SR valley', '94370 71887', 'fdg@gg.gf', 'SR Valley, New Bypass Road, Plot No-58, NH316, Bhubaneswar, Odisha 751002', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius tellus vitae justo blandit ultrices.', 'https://www.facebook.com/srvalleyweddingvenue/', 'https://www.facebook.com/srvalleyweddingvenue/', 'https://www.google.com/maps/place/SR+Valley+Wedding+Venue+(Weddingz.in+Partner)/@20.2549031,85.868131,15z/data=!4m2!3m1!1s0x0:0x65319b60200b422?sa=X&ved=2ahUKEwixv-K45JLzAhWn7nMBHRtmCwkQ_BJ6BAhkEAU', NULL, '2021-09-23 11:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banquet_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `banquet_id`, `path`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Butterfly.webp', 1, NULL, NULL),
(2, 2, 'Lotus.webp', 1, NULL, NULL),
(3, 3, 'Orchid.webp', 1, NULL, NULL),
(4, 1, 'Butterfly1.webp', 1, NULL, NULL),
(5, 4, 'gagansha.webp', 1, NULL, NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$23qxPmKjckM4k15Msg1qU.fUTJtDIrfh5bTZnsF0sW1./wQXqKP8.', NULL, NULL, NULL, NULL, NULL, '2021-09-23 01:02:29', '2021-09-23 01:02:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banquets`
--
ALTER TABLE `banquets`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_banquet_id_foreign` (`banquet_id`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banquets`
--
ALTER TABLE `banquets`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_banquet_id_foreign` FOREIGN KEY (`banquet_id`) REFERENCES `banquets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
