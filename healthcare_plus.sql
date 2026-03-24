-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2026 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `patient_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `time_slot` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `patient_name`, `email`, `doctor`, `department`, `appointment_date`, `time_slot`, `phone`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ripal', 'RIPALPATEL189@GMAIL.COM', 'Dr. Emily Carter', NULL, '2026-03-24', '10:00 AM', '897-567-56748', NULL, 'Upcoming', '2026-03-09 21:10:24', '2026-03-09 21:10:24'),
(2, 14, 'patient1', 'patient1@test.com', 'Dr. Olivia Bennett', NULL, '2026-03-31', '01:00 PM', '16473651095', NULL, 'Upcoming', '2026-03-13 18:33:18', '2026-03-13 19:59:43'),
(3, 14, 'patient1', 'patient1@test.com', 'Dr. Emily Carter', NULL, '2026-03-14', '04:00 PM', '+1 647 502 1825', NULL, 'Completed', '2026-03-13 18:42:36', '2026-03-16 20:07:59'),
(4, 14, 'patient1', 'patient1@test.com', 'Dr. Daniel Kim', NULL, '2026-03-31', '01:00 PM', '897-567-56748', NULL, 'Upcoming', '2026-03-13 18:57:12', '2026-03-13 20:25:46'),
(5, 14, 'patient1', 'patient1@test.com', 'Dr. Olivia Bennett', NULL, '2026-04-21', '10:00 AM', '(647) 502-1825', NULL, 'Cancelled', '2026-03-13 19:35:16', '2026-03-16 00:56:45'),
(6, 14, 'patient1', 'patient1@test.com', 'Dr. Sophia Martinez', NULL, '2026-03-31', '11:30 AM', '6475021825', NULL, 'Cancelled', '2026-03-13 20:12:03', '2026-03-23 21:08:08'),
(7, 14, 'patient1', 'patient1@test.com', 'Dr. Daniel Kim', NULL, '2026-03-29', '10:00 AM', '6475021825', NULL, 'Cancelled', '2026-03-13 20:29:28', '2026-03-15 23:58:05'),
(8, 14, 'patient1', 'patient1@test.com', 'Dr. Emily Carter', NULL, '2026-03-31', '01:00 PM', '6475021823', NULL, 'Upcoming', '2026-03-15 21:36:12', '2026-03-15 21:36:12'),
(9, 14, 'patient1', 'patient1@test.com', 'Dr. Sophia Martinez', NULL, '2026-03-31', '04:00 PM', '(647) 502-1825', NULL, 'upcoming', '2026-03-15 21:39:15', '2026-03-24 17:18:32'),
(10, 14, 'patient1', 'patient1@test.com', 'Dr. Michael Thompson', NULL, '2026-03-31', '10:00 AM', '6475021825', NULL, 'upcoming', '2026-03-15 22:08:27', '2026-03-24 17:18:52'),
(11, 15, 'Dr. Ripal Shah', 'ripalpatel189@gmail.com', 'Dr. Ripal Shah', NULL, '2026-03-16', '10:00 AM', '6475021825', NULL, 'upcoming', '2026-03-16 17:33:17', '2026-03-16 17:33:17'),
(12, 14, 'patient1', 'patient1@test.com', 'Dr. Ripal Shah', NULL, '2026-03-16', '10:00 AM', '6473651095', NULL, 'Completed', '2026-03-16 17:43:38', '2026-03-16 19:14:56'),
(13, 16, 'John Walker', 'john.walker@test.com', 'Dr. Daniel Kim', NULL, '2026-03-17', '10:00 AM', '6471111212', NULL, 'upcoming', '2026-03-16 19:06:32', '2026-03-16 19:06:32'),
(14, 16, 'John Walker', 'john.walker@test.com', 'doctor1', NULL, '2026-03-18', '01:00 PM', '6475021823', NULL, 'upcoming', '2026-03-16 19:07:09', '2026-03-16 19:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', 'Heart and cardiovascular treatment services', '2026-03-09 15:16:36', '2026-03-09 15:16:36'),
(2, 'Dermatology', 'Skin, hair, and nail related treatments', '2026-03-09 15:16:36', '2026-03-09 15:16:36'),
(3, 'Pediatrics', 'Medical care for infants, children, and adolescents', '2026-03-09 15:16:36', '2026-03-09 15:16:36'),
(4, 'Orthopedics', 'Bone, joint, and muscle treatment services', '2026-03-09 15:16:36', '2026-03-09 15:16:36'),
(5, 'General Medicine', 'General health care and routine medical checkups', '2026-03-09 15:16:36', '2026-03-09 15:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_availabilities`
--

CREATE TABLE `doctor_availabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_availabilities`
--

INSERT INTO `doctor_availabilities` (`id`, `doctor_id`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 12, 'Tuesday', '09:00:00', '18:00:00', '2026-03-15 23:06:11', '2026-03-15 23:06:11'),
(2, 12, 'Monday', '09:00:00', '17:00:00', '2026-03-16 00:57:50', '2026-03-18 18:20:00'),
(3, 15, 'Monday', '11:00:00', '14:00:00', '2026-03-16 17:34:50', '2026-03-16 17:34:50'),
(4, 12, 'Wednesday', '10:00:00', '19:00:00', '2026-03-16 17:46:28', '2026-03-16 17:46:28'),
(5, 12, 'Saturday', '09:00:00', '17:00:00', '2026-03-16 18:01:34', '2026-03-16 18:01:34'),
(6, 12, 'Friday', '08:30:00', '16:30:00', '2026-03-16 18:31:26', '2026-03-16 18:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_records`
--

CREATE TABLE `health_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `record_type` enum('lab_report','prescription','x_ray','other') NOT NULL DEFAULT 'other',
  `doctor` varchar(255) DEFAULT NULL,
  `record_date` date NOT NULL,
  `notes` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_records`
--

INSERT INTO `health_records` (`id`, `user_id`, `patient_id`, `doctor_id`, `record_type`, `doctor`, `record_date`, `notes`, `file`, `diagnosis`, `details`, `created_at`, `updated_at`) VALUES
(23, 14, 14, 9, '', NULL, '2026-03-10', NULL, NULL, 'Routine Blood Test', 'Blood test results are normal.', '2026-03-13 15:41:34', '2026-03-13 15:41:34'),
(24, 14, 14, 10, '', NULL, '2026-03-05', NULL, NULL, 'Chest X-Ray', 'Chest X-ray shows no issues.', '2026-03-13 15:41:34', '2026-03-13 15:41:34'),
(25, 14, 14, 6, 'prescription', NULL, '2026-02-28', NULL, NULL, 'Vitamin Deficiency', 'Vitamin D and calcium tablets prescribed.', '2026-03-13 15:41:34', '2026-03-13 15:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_02_23_164427_add_role_phone_address_to_users_table', 1),
(6, '2026_03_01_152547_add_fields_to_users_table', 1),
(7, '2026_03_06_174617_create_departments_table', 1),
(8, '2026_03_06_174618_create_services_table', 1),
(9, '2026_03_06_174622_create_health_records_table', 1),
(10, '2026_03_08_150333_add_doctor_fields_to_users_table', 1),
(11, '2026_03_08_150506_create_departments_table', 1),
(14, '2026_03_08_172512_add_image_to_users_table', 2),
(15, '2026_03_09_150109_create_appointments_table', 2),
(16, '2026_03_12_191559_add_user_id_to_health_records_table', 3),
(17, '2026_03_12_200508_add_user_id_status_department_to_appointments_table', 4),
(18, '2026_03_13_151356_add_missing_fields_to_health_records_table', 5),
(19, '2026_03_13_171713_create_doctor_availabilities_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration_minutes` int(11) NOT NULL DEFAULT 30,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `department_id`, `name`, `duration_minutes`, `price`, `description`, `created_at`, `updated_at`) VALUES
(6, 1, 'Heart Checkup', 30, 170.00, 'Comprehensive heart health examination', '2026-03-09 15:19:01', '2026-03-16 00:59:38'),
(7, 2, 'Skin Consultation', 20, 80.00, 'Diagnosis and treatment for skin conditions', '2026-03-09 15:19:01', '2026-03-09 15:19:01'),
(8, 3, 'Child Health Checkup', 25, 90.00, 'General pediatric health assessment', '2026-03-09 15:19:01', '2026-03-09 15:19:01'),
(9, 4, 'Bone & Joint Consultation', 40, 150.00, 'Evaluation of bone and joint problems', '2026-03-09 15:19:01', '2026-03-09 15:19:01'),
(10, 5, 'General Medical Consultation', 20, 70.00, 'Routine health consultation and advice', '2026-03-09 15:19:01', '2026-03-09 15:19:01'),
(11, 5, 'Regular Health Checkup', 45, 99.99, NULL, '2026-03-15 23:36:23', '2026-03-15 23:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'patient',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `phone`, `address`, `department_id`, `location`, `image`) VALUES
(5, 'Admin User', 'admin@example.com', '2026-03-09 15:22:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:22:13', '2026-03-09 15:22:13', 'admin', '6475555555', '200 Dundas St W, Toronto, ON', NULL, 'Toronto', NULL),
(6, 'Dr. Daniel Kim', 'daniel.kim@healthcareplus.com', '2026-03-09 15:24:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:24:24', '2026-03-09 15:24:24', 'doctor', '6473001001', '123 King St W, Toronto', 1, 'Toronto', 'daniel.jpg'),
(7, 'Dr. Sophia Martinez', 'sophia.martinez@healthcareplus.com', '2026-03-09 15:24:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:24:24', '2026-03-09 15:24:24', 'doctor', '6473001002', '200 Queen St W, Toronto', 3, 'Toronto', 'sophia.jpg'),
(8, 'Dr. Michael Thompson', 'michael.thompson@healthcareplus.com', '2026-03-09 15:24:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:24:24', '2026-03-09 15:24:24', 'doctor', '6473001003', '450 Bloor St W, Toronto', 4, 'Toronto', 'michael.jpg'),
(9, 'Dr. Emily Carter', 'emily.carter@healthcareplus.com', '2026-03-09 15:24:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:24:24', '2026-03-09 15:24:24', 'doctor', '6473001004', '800 Dundas St W, Toronto', 2, 'Toronto', 'emily.jpg'),
(10, 'Dr. Olivia Bennett', 'olivia.bennett@healthcareplus.com', '2026-03-09 15:24:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9Ll6hUO7g6C0G6kHhZ8WVy', NULL, '2026-03-09 15:24:24', '2026-03-09 15:24:24', 'doctor', '6473001005', '101 College St, Toronto', 5, 'Toronto', 'olivia.jpg'),
(11, 'ripal', 'ripal@gmail.com', NULL, '$2y$12$RfT5SYg44vRtbrKAfWui4.T8h0rEYjlJeuF8Mhdbx4D/uG2VCtYHm', 'zliQYUEHXKNXBDhLmLUqlmzyE1BEuKaNbIAIm4ruL6ME2mV8zzC7pg2Hsb1s', '2026-03-09 21:44:49', '2026-03-09 21:44:49', 'admin', NULL, NULL, NULL, NULL, NULL),
(12, 'doctor1', 'doctor1@test.com', NULL, '$2y$12$oQFWcf7KwlZw/IvyTDdU.eKeXJniJHgz6DJ4iSiLTdKT2pLX2OrOu', '9FOrVPgnlT2qFG2DmqK4PD073zpGgrqvdhiOoAu4d3rkZKq803uhhhhWtJiF', '2026-03-09 21:46:18', '2026-03-18 18:20:40', 'doctor', '16473651078', '502-21 Markbrook Lane', NULL, NULL, NULL),
(14, 'patient1', 'patient1@test.com', NULL, '$2y$12$SLg0qJIMJj0J97WdFP4PZe0H2PLI5xqJWnZm97kSYiQ8DLwB5Exoi', '4BvcDqF0xiPe5PnNL1BaJCTucVtfXGNU3VBbnGihDmMaQ8buCpDHaUvPwBce', '2026-03-13 00:14:01', '2026-03-16 17:45:05', 'patient', '64777777799', 'C-165, SOMWSWARA PARK-3', NULL, NULL, NULL),
(15, 'Dr. Ripal Patel', 'ripalpatel189@gmail.com', NULL, '$2y$12$v8FB.m4Mt2IrAJlax1zpAOj2wTwg7C2fk3LCiPZCQQrgOEczETVwm', NULL, '2026-03-15 23:43:00', '2026-03-18 19:03:34', 'doctor', '6475021826', '502-10 Markbrook Lane', 5, NULL, NULL),
(16, 'John Walker', 'john.walker@test.com', NULL, '$2y$12$haPsf7NqkuhxnhMPwtRO5eUcX09z381DLqABb3VObdux3Q2yvwDeq', NULL, '2026-03-16 14:49:38', '2026-03-16 14:49:38', 'patient', '6477771001', '101 King St W, Toronto', NULL, NULL, NULL),
(17, 'Emma Wilson', 'emma.wilson@test.com', NULL, '$2y$12$haPsf7NqkuhxnhMPwtRO5eUcX09z381DLqABb3VObdux3Q2yvwDeq', NULL, '2026-03-16 14:49:38', '2026-03-16 14:49:38', 'patient', '6477771002', '25 Bloor St E, Toronto', NULL, NULL, NULL),
(18, 'Michael Scott', 'michael.scott@test.com', NULL, '$2y$12$haPsf7NqkuhxnhMPwtRO5eUcX09z381DLqABb3VObdux3Q2yvwDeq', NULL, '2026-03-16 14:49:38', '2026-03-16 14:49:38', 'patient', '6477771003', '78 Queen St W, Toronto', NULL, NULL, NULL),
(19, 'Sophia Brown', 'sophia.brown@test.com', NULL, '$2y$12$haPsf7NqkuhxnhMPwtRO5eUcX09z381DLqABb3VObdux3Q2yvwDeq', NULL, '2026-03-16 14:49:38', '2026-03-16 14:49:38', 'patient', '6477771004', '50 Dundas St W, Toronto', NULL, NULL, NULL),
(20, 'David Miller', 'david.miller@test.com', NULL, '$2y$12$haPsf7NqkuhxnhMPwtRO5eUcX09z381DLqABb3VObdux3Q2yvwDeq', NULL, '2026-03-16 14:49:38', '2026-03-16 14:49:38', 'patient', '6477771005', '120 College St, Toronto', NULL, NULL, NULL),
(23, 'Staff User', 'staff@healthcare.com', NULL, '$2y$12$6FepP8mA0gpbj1pJ59dTWODB.1W4uAlVlh/I9sKufwllaMp31hsWe', 'CinC4qIsqm3qtmNJfMDiUUARXbtcnnG7dazkizA9ekPtAqQei19a4OCi9JfT', '2026-03-16 19:27:39', '2026-03-16 19:27:39', 'staff', NULL, NULL, NULL, NULL, NULL),
(24, 'Dr. Joe Paul', 'Joe@gmail.com', NULL, '$2y$12$blI5zQQ6NmyAiH9LhK1h8.0O0B7jwX7CPDUfTxcMxmzhVxhloebFC', NULL, '2026-03-18 18:23:22', '2026-03-18 18:23:46', 'doctor', '6471232345', '21, King street, Toronto', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `doctor_availabilities`
--
ALTER TABLE `doctor_availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `health_records`
--
ALTER TABLE `health_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `health_records_patient_id_foreign` (`patient_id`),
  ADD KEY `health_records_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_department_id_foreign` (`department_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_availabilities`
--
ALTER TABLE `doctor_availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_records`
--
ALTER TABLE `health_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `health_records`
--
ALTER TABLE `health_records`
  ADD CONSTRAINT `health_records_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `health_records_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
