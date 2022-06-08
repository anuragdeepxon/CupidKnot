-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 08:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cupid`
--

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
(5, '2022_06_06_084620_update_users_table', 1);

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
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `social_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_income` bigint(20) DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_manglik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `expected_income_low` bigint(20) DEFAULT NULL,
  `expected_income_high` bigint(20) DEFAULT NULL,
  `expected_occupation` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`expected_occupation`)),
  `expected_family_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`expected_family_type`)),
  `expected_is_manglik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `is_admin`, `social_type`, `social_id`, `last_name`, `dob`, `gender`, `annual_income`, `occupation`, `family_type`, `is_manglik`, `expected_income_low`, `expected_income_high`, `expected_occupation`, `expected_family_type`, `expected_is_manglik`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Christopher', 'bartoletti.jules@example.net', NULL, NULL, NULL, 'McDermott', '1997-11-26', 'male', 20044957, 'business', 'nuclear', 'yes', 18573819, 36149338, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UqW7pdpi2x', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(2, 'Bette', 'alverta97@example.com', NULL, NULL, NULL, 'Goyette', '1980-08-10', 'female', 25903826, 'private', 'joint', 'yes', 17850050, 44200813, '[\"business\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DjKbN1nwrS', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(3, 'River', 'schinner.hollis@example.org', NULL, NULL, NULL, 'Ward', '1971-01-29', 'female', 33113193, 'government', 'joint', 'no', 18442146, 24174306, '[\"private\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L68wlt402i', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(4, 'Leila', 'ullrich.tristin@example.org', NULL, NULL, NULL, 'Beier', '1985-02-01', 'female', 11628325, 'private', 'joint', 'no', 11000393, 20372231, '[\"business\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g9zR5RjKqb', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(5, 'Darryl', 'emory87@example.net', NULL, NULL, NULL, 'Herzog', '1998-04-02', 'male', 12281776, 'government', 'nuclear', 'no', 17468926, 48188891, '[\"government\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kHdPQALrnd', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(6, 'Cary', 'ithiel@example.org', NULL, NULL, NULL, 'Sanford', '1970-07-13', 'male', 14687369, 'government', 'nuclear', 'yes', 11424442, 37254149, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1URJ869EE4FDRRq3mIG7SkhHEN0tQUIpP3hFa8ZIuJ9FeDsyk3EvGG1kM0vD', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(7, 'Dana', 'destini02@example.com', NULL, NULL, NULL, 'Abbott', '1996-01-14', 'female', 19473330, 'private', 'joint', 'yes', 11164900, 28798284, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nbz64eETx1', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(8, 'Otis', 'keebler.monica@example.com', NULL, NULL, NULL, 'Bednar', '1988-01-29', 'male', 38753738, 'government', 'nuclear', 'no', 15456890, 29174710, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'exnu1JMo2r', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(9, 'Blaise', 'kelley06@example.org', NULL, NULL, NULL, 'Thiel', '1994-11-10', 'male', 39522433, 'private', 'nuclear', 'yes', 18159232, 49213006, '[\"private\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6HXYDtjqNx', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(10, 'Elsa', 'torphy.edd@example.org', NULL, NULL, NULL, 'Barton', '1973-02-13', 'female', 44095465, 'business', 'nuclear', 'no', 17242945, 20475498, '[\"private\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sG15wVensQ', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(11, 'Sedrick', 'emard.jarvis@example.com', NULL, NULL, NULL, 'Jast', '1974-03-26', 'male', 46208925, 'business', 'nuclear', 'no', 18027904, 20399304, '[\"private\"]', '[\"nuclear\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HrMWrMnYQQ', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(12, 'Peggie', 'hickle.bernadette@example.net', NULL, NULL, NULL, 'Herzog', '1971-09-15', 'female', 25510408, 'government', 'nuclear', 'yes', 16397777, 26525701, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7XBOOvu2f1', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(13, 'Hanna', 'delaney.von@example.net', NULL, NULL, NULL, 'Goodwin', '2000-02-13', 'female', 27580527, 'private', 'joint', 'yes', 19719841, 26191133, '[\"private\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RBdKWiOvut', '2022-06-08 00:24:32', '2022-06-08 00:24:32'),
(14, 'Colin', 'dicki.marisa@example.net', NULL, NULL, NULL, 'Hagenes', '1992-08-20', 'male', 24341319, 'business', 'nuclear', 'yes', 18798029, 25412568, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PePgIlNq6Q', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(15, 'Isaac', 'lynch.isabella@example.net', NULL, NULL, NULL, 'Brakus', '1999-03-07', 'male', 34079510, 'private', 'nuclear', 'yes', 15580948, 42544402, '[\"government\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E0V69k99kj', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(16, 'Brice', 'bmayer@example.org', NULL, NULL, NULL, 'Price', '1992-02-11', 'male', 44258593, 'private', 'nuclear', 'yes', 14223468, 28068883, '[\"private\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SKlydaPNaY', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(17, 'Seth', 'blanche.lemke@example.org', NULL, NULL, NULL, 'Labadie', '1982-02-02', 'male', 21093860, 'private', 'joint', 'no', 19110233, 26768532, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aYdBfK9uao', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(18, 'Ally', 'monserrat07@example.net', NULL, NULL, NULL, 'Towne', '1983-09-23', 'female', 27353778, 'private', 'nuclear', 'yes', 19019277, 38466249, '[\"government\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ls91eXRDq9', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(19, 'Edwin', 'kdickinson@example.com', NULL, NULL, NULL, 'McKenzie', '1980-01-21', 'male', 46857739, 'private', 'joint', 'yes', 19393813, 21588811, '[\"government\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TxhgHDMoW9', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(20, 'Cordie', 'connelly.itzel@example.net', NULL, NULL, NULL, 'Reichel', '1987-09-01', 'female', 14382755, 'private', 'nuclear', 'yes', 11325768, 34144995, '[\"business\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zbnXZi4lhu', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(21, 'Kallie', 'jeanne.beer@example.com', NULL, NULL, NULL, 'Dach', '1998-04-01', 'female', 21315277, 'private', 'nuclear', 'yes', 18900445, 34233839, '[\"government\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '64vdBl9gzB', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(22, 'Julie', 'johnson.schaefer@example.com', NULL, NULL, NULL, 'Hauck', '1987-06-02', 'female', 44546519, 'private', 'joint', 'yes', 18997300, 31171349, '[\"private\"]', '[\"nuclear\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aOhMC5y5AO', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(23, 'Juston', 'jacinthe.renner@example.net', NULL, NULL, NULL, 'McLaughlin', '1972-08-09', 'male', 27661291, 'government', 'joint', 'no', 17926586, 29648083, '[\"government\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UcXu3HL0ps', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(24, 'Ardith', 'qwhite@example.net', NULL, NULL, NULL, 'Hand', '1996-03-07', 'female', 47218176, 'private', 'joint', 'no', 11385823, 40406116, '[\"private\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3SFUSP3nPY', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(25, 'Kelsi', 'hbrakus@example.com', NULL, NULL, NULL, 'Rolfson', '1993-01-23', 'female', 28090084, 'private', 'nuclear', 'yes', 13780933, 30258314, '[\"private\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EdejgSjesd', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(26, 'Wyman', 'wilmer.frami@example.net', NULL, NULL, NULL, 'Gottlieb', '1980-04-17', 'male', 26038274, 'government', 'nuclear', 'no', 19533467, 31452897, '[\"business\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sD9Hninfh8', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(27, 'Delbert', 'amani90@example.net', NULL, NULL, NULL, 'Volkman', '1999-08-06', 'male', 19972768, 'business', 'joint', 'yes', 15953099, 24565550, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JUpL4mX6Zo', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(28, 'Else', 'rosemarie.stokes@example.net', NULL, NULL, NULL, 'Olson', '1996-12-08', 'female', 42558564, 'government', 'nuclear', 'yes', 12131988, 39672298, '[\"private\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BE98XdbxBh', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(29, 'Janelle', 'pbarton@example.org', NULL, NULL, NULL, 'Emmerich', '1979-10-02', 'female', 32719065, 'business', 'nuclear', 'no', 18859326, 29125900, '[\"business\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vrGJnSKXHB', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(30, 'Orval', 'mariah28@example.net', NULL, NULL, NULL, 'Mohr', '1979-12-15', 'male', 20974027, 'private', 'joint', 'yes', 19686208, 25174473, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lXeHOTUNH6', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(31, 'Daisha', 'jhirthe@example.net', NULL, NULL, NULL, 'Toy', '1986-11-08', 'female', 21520587, 'business', 'joint', 'no', 17252941, 32426324, '[\"government\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JwfqBU8iqP', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(32, 'Vince', 'katelin.boehm@example.org', NULL, NULL, NULL, 'Schneider', '1997-04-12', 'male', 46199171, 'business', 'joint', 'yes', 11037419, 35574640, '[\"government\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U9hQnhlvug', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(33, 'Mariela', 'deshaun40@example.net', NULL, NULL, NULL, 'Rogahn', '1993-07-23', 'female', 15045053, 'government', 'joint', 'no', 15754527, 36192694, '[\"business\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E60MZ6a7ue', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(34, 'Gabriel', 'kihn.michele@example.net', NULL, NULL, NULL, 'Roob', '1991-09-21', 'male', 47845270, 'government', 'joint', 'yes', 11539505, 28699966, '[\"business\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1WQmiC98Lr', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(35, 'Telly', 'klubowitz@example.net', NULL, NULL, NULL, 'Stamm', '1982-02-07', 'female', 49512235, 'private', 'joint', 'no', 11943544, 21765718, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BchIgKVbwk', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(36, 'Bradly', 'rolfson.kitty@example.com', NULL, NULL, NULL, 'Gusikowski', '1975-12-12', 'male', 33834214, 'business', 'joint', 'no', 14593972, 30326633, '[\"private\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D1GbU4DXgC', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(37, 'Jewell', 'pfannerstill.caden@example.net', NULL, NULL, NULL, 'Dickinson', '1983-07-07', 'female', 30276852, 'business', 'joint', 'no', 19426144, 38220161, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v0ByeTtg9v', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(38, 'Kylie', 'kali08@example.com', NULL, NULL, NULL, 'Marks', '1981-08-29', 'female', 11620726, 'private', 'nuclear', 'no', 15953303, 42148450, '[\"government\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Q7hFwCuDBE', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(39, 'Marlee', 'naomie.wuckert@example.net', NULL, NULL, NULL, 'Leffler', '1975-04-16', 'female', 44675623, 'government', 'nuclear', 'no', 19670108, 20857228, '[\"private\"]', '[\"nuclear\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Jb6qKcsUbY', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(40, 'Damion', 'jordan39@example.net', NULL, NULL, NULL, 'Schoen', '1993-09-02', 'male', 31202641, 'private', 'nuclear', 'yes', 11595570, 23564312, '[\"government\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6tFlI8qS4E', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(41, 'Taryn', 'jquigley@example.net', NULL, NULL, NULL, 'Gutkowski', '1985-06-10', 'female', 49351157, 'business', 'joint', 'yes', 17538396, 34264912, '[\"government\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VJQJaCEyWG', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(42, 'Clemmie', 'lwill@example.org', NULL, NULL, NULL, 'Veum', '1970-04-25', 'female', 37026802, 'private', 'nuclear', 'yes', 19851921, 23648181, '[\"private\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8P6N3n9xQ8', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(43, 'Aniya', 'khansen@example.net', NULL, NULL, NULL, 'Eichmann', '1976-09-17', 'female', 12571130, 'business', 'joint', 'no', 13971410, 40955067, '[\"private\"]', '[\"joint\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jRNcpoW9Iy', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(44, 'Felicita', 'marcia97@example.net', NULL, NULL, NULL, 'Torphy', '1971-04-15', 'female', 11001324, 'government', 'joint', 'yes', 12552594, 34583118, '[\"business\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IMaQduMoQn', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(45, 'Crawford', 'kshlerin.ottis@example.com', NULL, NULL, NULL, 'Torp', '1974-11-16', 'male', 27251719, 'business', 'nuclear', 'no', 10523080, 28581017, '[\"government\"]', '[\"nuclear\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uEgizvOPhG', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(46, 'Kattie', 'melvina.roberts@example.com', NULL, NULL, NULL, 'Considine', '1993-08-11', 'female', 38809773, 'government', 'joint', 'yes', 16241949, 42040556, '[\"government\"]', '[\"nuclear\"]', 'both', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XYdx46jTtY', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(47, 'Beulah', 'thompson.kane@example.net', NULL, NULL, NULL, 'Grady', '1988-09-11', 'female', 49130269, 'business', 'joint', 'no', 13454772, 36924556, '[\"government\"]', '[\"joint\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e6WjyYJMGa', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(48, 'Heidi', 'ebotsford@example.org', NULL, NULL, NULL, 'Kshlerin', '2000-10-31', 'female', 35216901, 'government', 'joint', 'yes', 14833530, 38061976, '[\"business\"]', '[\"nuclear\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v2uaAZIWre', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(49, 'Hollie', 'shanna77@example.com', NULL, NULL, NULL, 'Bosco', '1979-11-25', 'female', 39236215, 'private', 'nuclear', 'yes', 12120609, 42894434, '[\"business\"]', '[\"joint\"]', 'yes', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tiMod8gGBB', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(50, 'Maryjane', 'sydnie94@example.com', NULL, NULL, NULL, 'Kessler', '1982-10-26', 'female', 31873268, 'private', 'nuclear', 'yes', 14909897, 27260243, '[\"private\"]', '[\"nuclear\"]', 'no', '2022-06-08 00:24:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Q2ILgOevhn', '2022-06-08 00:24:33', '2022-06-08 00:24:33'),
(51, 'Admin', 'admin@example.com', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '0', NULL, '$2y$10$4NGrkxFfFmRRk1SNRD57G.lixdmDRhSTOd2ZrSDWy5io0ZqM8TEQm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
