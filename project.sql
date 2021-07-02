-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 12:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbremedy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_forms`
--

CREATE TABLE `appointment_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_forms`
--

INSERT INTO `appointment_forms` (`id`, `name`, `email`, `phone`, `date`, `time`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md. Arifur Rahman saad', 'saadeclipse@gmail.com', '01860359142', '2021-06-10', '11:45', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'pending', '2021-06-06 08:44:12', '2021-06-06 08:44:41'),
(3, 'MD. RAKIBUR RAHMAN', 'admin@gmail.com', '01860359142', '2021-06-10', '11:10', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'pending', '2021-06-06 10:12:48', '2021-06-06 10:12:48'),
(4, 'Sujon Rana', 'sujon@gmail.com', '019264894987', '2021-06-24', '19:47', 'Lorem ipsum', 'approved', '2021-06-16 04:48:06', '2021-06-16 05:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog_forms`
--

CREATE TABLE `blog_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_forms`
--

INSERT INTO `blog_forms` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'The Lawyers Collective Women\'s Rights Initiative', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'assets/admin/blog/image/image1622742590.jpg', '2021-06-03 11:49:50', '2021-06-03 11:50:44'),
(2, 'Legal Documents Every Landlord Needs', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'assets/admin/blog/image/image1622818428.jpg', '2021-06-04 08:53:48', '2021-06-04 08:53:48'),
(3, 'Help Us Make the Law Accessible for Everyone', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'assets/admin/blog/image/image1622818578.jpg', '2021-06-04 08:55:31', '2021-06-04 08:56:18'),
(4, '5 Legal Documents for Military Service People', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'assets/admin/blog/image/image1622818678.jpg', '2021-06-04 08:57:58', '2021-06-04 08:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `case_forms`
--

CREATE TABLE `case_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawyer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_forms`
--

CREATE TABLE `category_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `free_appointment_forms`
--

CREATE TABLE `free_appointment_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_appointment_forms`
--

INSERT INTO `free_appointment_forms` (`id`, `name`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Rahman', 'rimatangim@gmail.com', '01673399212', 'lorem ipsum', '2021-06-17 01:22:28', '2021-06-17 01:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_forms`
--

CREATE TABLE `lawyer_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worktype` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyer_forms`
--

INSERT INTO `lawyer_forms` (`id`, `name`, `email`, `phone`, `designation`, `worktype`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Amanda Smith', 'info@demolink.org', '+1 (409) 987–5874', 'Paralegal', 'Women Rights', 'assets/admin/lawyer/image/image1622822710.jpg', '2021-06-04 09:56:48', '2021-06-12 04:49:52'),
(2, 'John Doe', 'jon@demolink.org', '+1 (409) 987–5876', 'Attorney', 'Business area', 'assets/admin/lawyer/image/image1622822750.jpg', '2021-06-04 10:05:50', '2021-06-12 04:50:32'),
(3, 'Vanessa Ives', 'lves@demolink.org', '+1 (409) 987–5878', 'Legal Assistant', 'Civil Case', 'assets/admin/lawyer/image/image1622826860.jpg', '2021-06-04 11:14:20', '2021-06-12 04:51:14'),
(4, 'Thomas lee', 'lee@gmail.com', '+1 (409) 987–5866', 'Legal Assistant', 'Tax', 'assets/admin/lawyer/image/image1623494583.jpg', '2021-06-12 04:43:03', '2021-06-12 04:43:03'),
(5, 'Tawshif Chowdhury', 'ta@gmail.com', '01673399457', 'Consultant', 'Tax and Vat', 'assets/admin/lawyer/image/image1623912342.jpg', '2021-06-17 00:45:42', '2021-06-17 00:45:42'),
(6, 'Nanzina Afrin', 'naz@gmail.com', '01673399488', 'Associate', 'Family Matters', 'assets/admin/lawyer/image/image1623912425.jpg', '2021-06-17 00:47:05', '2021-06-17 00:47:05'),
(7, 'Sadia Sharmin', 'sa@gmail.com', '01673399466', 'consultant', 'Family Matters', 'assets/admin/lawyer/image/image1623912526.jpg', '2021-06-17 00:48:46', '2021-06-17 00:48:46'),
(8, 'Salam Rubel', 'salam@gmail.com', '01673399411', 'Corporate Law', 'Corporate Business', 'assets/admin/lawyer/image/image1623912606.jpg', '2021-06-17 00:50:06', '2021-06-17 00:50:06');

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
(4, '2021_05_21_011618_create_roles_table', 1),
(5, '2021_05_26_153556_create_user_forms_table', 1),
(6, '2021_05_28_040918_create_appointment_forms_table', 1),
(7, '2021_05_28_051919_create_lawyer_forms_table', 1),
(8, '2021_05_28_140442_create_category_forms_table', 1),
(9, '2021_05_29_001353_create_testimonials_forms_table', 1),
(10, '2021_05_29_013754_create_service_forms_table', 1),
(11, '2021_05_29_041315_create_blog_forms_table', 1),
(12, '2021_05_29_043725_create_case_forms_table', 1),
(13, '2021_06_16_161244_create_free_appointment_forms_table', 2);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_forms`
--

CREATE TABLE `service_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_forms`
--

INSERT INTO `service_forms` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Auto Accidents', 'Lorem ipsum dolor sit amet consectetur', 'assets/admin/service/image/image1622742920.jpg', '2021-06-03 11:55:20', '2021-06-04 08:20:11'),
(2, 'Construction Loans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1622808067.jpg', '2021-06-04 06:01:07', '2021-06-04 06:01:07'),
(3, 'Real Estate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1622816464.jpg', '2021-06-04 08:21:04', '2021-06-04 08:21:04'),
(4, 'Finance Law', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623472934.jpg', '2021-06-11 22:42:14', '2021-06-11 22:42:14'),
(5, 'Criminal Litigation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623911740.jpg', '2021-06-17 00:35:40', '2021-06-17 00:35:40'),
(6, 'Income Tax & Customs Matters​', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623911779.jpg', '2021-06-17 00:36:19', '2021-06-17 00:36:19'),
(7, 'Family Matters', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623911872.jpg', '2021-06-17 00:37:52', '2021-06-17 00:37:52'),
(8, 'Information Technology Law', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623911954.jpg', '2021-06-17 00:39:14', '2021-06-17 00:39:14'),
(9, 'Immigration', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'assets/admin/service/image/image1623912034.jpg', '2021-06-17 00:40:34', '2021-06-17 00:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_forms`
--

CREATE TABLE `testimonials_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_forms`
--

INSERT INTO `testimonials_forms` (`id`, `client_name`, `client_designation`, `client_comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mark Wilson', 'CFO, Wilson Ltd.', 'I’ve never known another lawyer more prepared or focused.  John has the ability to dissect a case much like a skilled surgeon, with absolute calm.Nothing seems to distract him from his goal on a case, which of course, makes him extremely tough to beat.', 'assets/admin/testimonials/image/image1622819815.jpg', '2021-06-04 09:16:55', '2021-06-04 09:16:55'),
(2, 'Amanda Eberson', 'CEO, Eberson Co.', 'John Doe is one of those attorneys who has it all-talent and skill, compassion for his clients, and the ability to communicate well with anyone he meets. This is one of the best combinations for a trial attorney and he is one of the best.', 'assets/admin/testimonials/image/image1622820121.jpg', '2021-06-04 09:22:01', '2021-06-04 09:22:01'),
(3, 'Begha', 'Art Director, 7oroof Agency.', 'Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients\' cases to obtain the best results they could achieve in their particular situation.', 'assets/admin/testimonials/image/image1622820610.jpg', '2021-06-04 09:30:10', '2021-06-04 09:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@gmail.com', NULL, '$2y$10$r4h0F94Prg/zaHueXvK6Be8m14DuGcV6WzFb8VjyUxPCM65xsjgtu', NULL, NULL, NULL),
(2, 'user', 2, 'user@gmail.com', NULL, '$2y$10$yD4pow31r1BEuwqKNtFF4.y.yOsUXyLSZDBOac/zWOPqvyQSqBWa2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_forms`
--
ALTER TABLE `appointment_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_forms_email_unique` (`email`);

--
-- Indexes for table `blog_forms`
--
ALTER TABLE `blog_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_forms`
--
ALTER TABLE `case_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_forms`
--
ALTER TABLE `category_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_appointment_forms`
--
ALTER TABLE `free_appointment_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_forms`
--
ALTER TABLE `lawyer_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lawyer_forms_email_unique` (`email`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_forms`
--
ALTER TABLE `service_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_forms`
--
ALTER TABLE `testimonials_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_forms_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_forms`
--
ALTER TABLE `appointment_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_forms`
--
ALTER TABLE `blog_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `case_forms`
--
ALTER TABLE `case_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_forms`
--
ALTER TABLE `category_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_appointment_forms`
--
ALTER TABLE `free_appointment_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyer_forms`
--
ALTER TABLE `lawyer_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_forms`
--
ALTER TABLE `service_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials_forms`
--
ALTER TABLE `testimonials_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_forms`
--
ALTER TABLE `user_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
