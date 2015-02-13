-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2015 at 05:33 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paparazzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_02_09_132324_create_photos_table', 1),
('2015_02_13_143357_add_photothumbs_to_photos_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photofile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photothumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `photofile`, `photothumb`, `created_at`, `updated_at`) VALUES
(1, 'castom_photo', 'Castom photo', 'Gallery/PaparazziFeelGood_Castom01.jpg', 'Gallery/thumb/PaparazziFeelGood_Castom01.jpg', '2015-02-12 11:16:19', '2015-02-13 13:13:07'),
(2, 'castom_photo2', 'Castom Photo 2', 'Gallery/PaparazziFeelGood_Castom02.jpg', 'Gallery/thumb/PaparazziFeelGood_Castom02.jpg', '2015-02-12 11:17:29', '2015-02-13 13:13:07'),
(3, 'Sexy on bike', 'Sexy Ladies on the bike', 'Gallery/PaparazziFeelGood_Sexy07.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy07.jpg', '2015-02-12 11:18:51', '2015-02-13 13:13:07'),
(4, 'Sexy with thunder', 'Two sexy Ladies with Ford Thunderbird', 'Gallery/PaparazziFeelGood_Sexy05.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy05.jpg', '2015-02-12 11:20:53', '2015-02-13 13:13:07'),
(5, 'couple with thunder', 'Couple hugging next of Ford Thunderbird', 'Gallery/PaparazziFeelGood_Sexy01.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy01.jpg', '2015-02-12 11:24:55', '2015-02-13 13:13:07'),
(6, 'Sexy with thunder', 'Sexy babe sitting on the trunk of  Ford Thunderbird', 'Gallery/PaparazziFeelGood_Sexy10.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy10.jpg', '2015-02-12 11:28:35', '2015-02-13 13:13:07'),
(7, 'Babe in thunder', 'Sexy babe sitting behind wheel of  Ford Thunderbird', 'Gallery/PaparazziFeelGood_Sexy06.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy06.jpg', '2015-02-12 11:30:58', '2015-02-13 13:13:07'),
(8, 'Girl sitting in car', 'Girl sitting in the vintage car ', 'Gallery/PaparazziFeelGood_InDress06.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress06.jpg', '2015-02-12 11:40:16', '2015-02-13 13:13:07'),
(9, 'Lady with Continental', 'Beautiful lady with Lincoln Continental', 'Gallery/PaparazziFeelGood_InDress12.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress12.jpg', '2015-02-12 11:43:43', '2015-02-13 13:13:07'),
(10, 'Couple behind Mercury', 'Couple behind Mercury Marquis Brougham', 'Gallery/PaparazziFeelGood_InDress11.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress11.jpg', '2015-02-12 11:46:13', '2015-02-13 13:13:07'),
(11, 'Two sexy couples', 'Two sexy couples with sexy cars', 'Gallery/PaparazziFeelGood_Sexy11.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy11.jpg', '2015-02-12 11:48:36', '2015-02-13 13:13:07'),
(12, 'sexy in car', 'Sexy girl in lingerie in the car', 'Gallery/PaparazziFeelGood_Sexy09.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy09.jpg', '2015-02-12 11:50:08', '2015-02-13 13:13:07'),
(13, 'sexy near car', 'Sexy girl in lingerie and stocking stand near the car', 'Gallery/PaparazziFeelGood_Sexy08.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy08.jpg', '2015-02-12 11:52:30', '2015-02-13 13:13:07'),
(14, 'Sexy in car', 'Sexy girl in black lingerie sitting in the car', 'Gallery/PaparazziFeelGood_Sexy12.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy12.jpg', '2015-02-12 11:53:26', '2015-02-13 13:13:07'),
(15, 'sexy girl in car', 'Sexy girl in the pink bra sitting in the car', 'Gallery/PaparazziFeelGood_Sexy04.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy04.jpg', '2015-02-12 11:54:27', '2015-02-13 13:13:07'),
(16, 'sexy girl in car', 'Sexy girl in the pink swimwear sitting in the car', 'Gallery/PaparazziFeelGood_Sexy03.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy03.jpg', '2015-02-12 11:55:55', '2015-02-13 13:13:07'),
(17, 'sexy girl sitting in car', 'Sexy girl in black lingerie sitting behind wheel of the car', 'Gallery/PaparazziFeelGood_Sexy02.jpg', 'Gallery/thumb/PaparazziFeelGood_Sexy02.jpg', '2015-02-12 11:57:50', '2015-02-13 13:13:07'),
(18, 'Girl in the plaid dress', 'Sexy Girl in the plaid dress sitting in the car', 'Gallery/PaparazziFeelGood_InDress10.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress10.jpg', '2015-02-12 12:02:06', '2015-02-13 13:13:07'),
(19, 'Couple and car', 'Couple and the car', 'Gallery/PaparazziFeelGood_InDress09.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress09.jpg', '2015-02-12 12:02:51', '2015-02-13 13:13:07'),
(20, 'Girl with Horch', 'Sexy Girl sitting on Horch retro car', 'Gallery/PaparazziFeelGood_InDress08.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress08.jpg', '2015-02-12 12:14:23', '2015-02-13 13:13:07'),
(21, 'Babe with Horch', 'Sexy babe with Horch retro car', 'Gallery/PaparazziFeelGood_InDress07.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress07.jpg', '2015-02-12 12:15:03', '2015-02-13 13:13:07'),
(22, 'Lady with Mercury', 'Lady stay next of  Mercury Marquis Brougham', 'Gallery/PaparazziFeelGood_InDress01.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress01.jpg', '2015-02-12 12:16:53', '2015-02-13 13:13:07'),
(23, 'Girl in blue dress', 'Girl in blue dress', 'Gallery/PaparazziFeelGood_InDress05.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress05.jpg', '2015-02-12 12:17:19', '2015-02-13 13:13:07'),
(24, 'Girl in stocking close to car', 'Girl in plaid gress stand close to vintage car', 'Gallery/PaparazziFeelGood_InDress04.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress04.jpg', '2015-02-12 12:18:49', '2015-02-13 13:13:07'),
(25, 'Girl in yelow and Ford', 'Girl in yelow dress sitting on the vintage Ford car', 'Gallery/PaparazziFeelGood_InDress02.jpg', 'Gallery/thumb/PaparazziFeelGood_InDress02.jpg', '2015-02-12 12:21:17', '2015-02-13 13:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
