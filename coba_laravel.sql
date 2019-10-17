-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2019 at 10:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_12_095142_create_students_table', 2),
(4, '2019_08_15_085250_create_tims_table', 3),
(5, '2019_08_16_060526_add_soft_delete_to_tims', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_nrp_unique` (`nrp`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nama`, `nrp`, `email`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Mark Rufalo', '12345678', 'hulk@avangers', 'bela diri', '2019-08-12 09:56:39', NULL),
(2, 'Tony Stark', '87654321', 'iron@man', 'sains', '2019-08-12 09:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tims`
--

DROP TABLE IF EXISTS `tims`;
CREATE TABLE IF NOT EXISTS `tims` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tims_nrp_unique` (`nrp`),
  UNIQUE KEY `tims_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tims`
--

INSERT INTO `tims` (`id`, `nama`, `nrp`, `email`, `jurusan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Marchus Rasford', '10101010', 'mr@unitedred', 'sayap kiri Striker', '2019-08-15 09:05:46', '2019-08-15 21:54:54', NULL),
(3, 'Aron Win Bisaka', '16171819', 'manchester@utd', 'Bek Kanan', '2019-08-15 09:05:46', NULL, NULL),
(4, 'Daniel James', '21222324', 'james@mu', 'sayap kanan', '2019-08-15 05:00:19', '2019-08-15 05:00:19', NULL),
(5, 'scott Mctominay', '10020012', 'sc@mu', 'Gelandang', '2019-08-15 05:10:03', '2019-08-15 22:09:48', '2019-08-15 22:09:48'),
(7, 'Paul Pogba', '08080808', 'paul@pogba', 'Playmaker', '2019-08-15 05:19:00', '2019-08-15 05:19:00', NULL),
(8, 'Antony Martial', '09090909', 'am@mu', 'Striker', '2019-08-15 05:20:42', '2019-08-15 05:20:42', NULL),
(9, 'Ole gunar solkjaer', '19191919', 'olegun@yahoo.com', 'Manager', '2019-08-15 21:13:27', '2019-08-16 16:19:58', NULL),
(11, 'ramli agustiawan', '13131313', 'ramliweb', 'Playmaker', '2019-08-16 16:31:16', '2019-08-16 16:31:28', NULL),
(12, 'afdal', '07080708', 'ramlide', 'Striker', '2019-08-16 16:33:23', '2019-08-16 16:33:39', NULL),
(13, 'inda', '02020202', 'ramli@yahoo', 'Gelandang', '2019-08-16 16:34:28', '2019-08-16 16:34:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
