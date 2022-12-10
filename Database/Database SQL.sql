-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2022 at 06:58 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zainrajput_homemode_sufiyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_cat_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `main_category`, `sub_category`, `sub_category1`, `main_cat_pic`, `created_at`, `updated_at`) VALUES
(1, 'mens', 'watches', 'null', NULL, '2022-12-07 16:13:30', '2022-12-07 16:13:30'),
(2, 'mens', 'watches', 'null', NULL, '2022-12-07 16:21:25', '2022-12-07 16:21:25');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `normal_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_to_use` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_available` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isitem_dealbox` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `short_description`, `long_description`, `normal_price`, `sale_price`, `category`, `sub_category`, `sku_code`, `color`, `how_to_use`, `size`, `reviews`, `stock_available`, `images`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `isitem_dealbox`, `created_at`, `updated_at`) VALUES
(1, 'heelo', 'fsdfdsf', 'dfsdf', '23', '0', 'mens', 'shoes', 'sdfsd222', 'black', 'sdfsdfsdfsdfsdf', 'XL', 'sdfsdfdsfsdfsdf', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 21:39:34', '2022-11-02 21:39:34');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_29_002249_add_columns_in_users_table', 2),
(11, '2022_11_02_123428_create_items__table', 3),
(12, '2022_11_02_220650_create_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0000afc04eb8a19d47ac2014b69d0b97285f5a634eaf29d50878b5d7912428a22d563bea4727312e', 6, 1, 'passport_token', '[]', 0, '2022-11-21 21:01:10', '2022-11-21 21:01:10', '2023-11-21 21:01:10'),
('059ccfc30a49a129c1c5e099882340ce3a2c74d275499251657edeb58747591492bc6d3855731bb5', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:47:19', '2022-11-20 04:47:19', '2023-11-20 04:47:19'),
('0a82068eb6d665ac6422f4fea2c1fefebc9cde4258c0f25e8979fee9620066a7ecf58424bff0dbf6', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:02:20', '2022-11-20 05:02:20', '2023-11-20 05:02:20'),
('0bc141f9d98787a2ff7df4651dafc146f57fb447bba10c9f5aa835696d9f4c4531df77c157e34c50', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:58:35', '2022-11-20 04:58:35', '2023-11-20 04:58:35'),
('0cf4b09fb4859309e0954e314535e73780a9ddb579606dc0f5144a4b6c61c13de7213bf7a8cae7fe', 7, 1, 'passport_token', '[]', 0, '2022-12-07 16:20:51', '2022-12-07 16:20:51', '2023-12-07 16:20:51'),
('1b3f2dd0bd3812dabb9bea8fab9f2c689072472b48ecc10b8e40325559544f7cad8d9e6bdcc34771', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:59:14', '2022-11-20 04:59:14', '2023-11-20 04:59:14'),
('27498473084f5b7640bf1233628675bd85c15ff5eaf3c14f4cb71d33237383dd95b8508b7f48f1e8', 6, 1, 'passport_token', '[]', 0, '2022-12-09 19:00:11', '2022-12-09 19:00:11', '2023-12-09 19:00:11'),
('3663a002b47b4acf5f6c6e54bcc8baf1210fec7c8bfed50a73339276c9d5ec3174b1b39ff58153e3', 6, 1, 'passport_token', '[]', 0, '2022-12-07 15:56:56', '2022-12-07 15:56:56', '2023-12-07 15:56:56'),
('3e2ef96a718abf9020de400dc37ed2694bee5a025c8693557ce92d04abd2507d83c0412e0615532d', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:07:14', '2022-11-20 05:07:14', '2023-11-20 05:07:14'),
('4289003a67b4265b3a30e9e33bb336913be976af52e24bf9bbd4ed127aedcdbc3b8f107f2ce1364e', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:46:20', '2022-11-20 04:46:20', '2023-11-20 04:46:20'),
('455e267d6f142842565152da5f391636e293370c958b99476b38fdc45d95618ed9b7682c80c8e0cf', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:08:49', '2022-11-20 05:08:49', '2023-11-20 05:08:49'),
('4fd64d62375394294ecc6bb1c7611febe4dfe02ed8d5eb4094bb123354837cc0c0e60f8a499ba10c', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:54:19', '2022-11-20 04:54:19', '2023-11-20 04:54:19'),
('5e7c263adaaa3dbc1440d041df583b0918b3e5e908736649ccd08a5b63d4ba9ef1f7efd90c8ad442', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:50:44', '2022-11-20 04:50:44', '2023-11-20 04:50:44'),
('5f107f177e9fcfef84dfd00ac322c04daf1db1bc800eff0ddd20e53199685ebb084d99c539855fac', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:00:28', '2022-11-20 05:00:28', '2023-11-20 05:00:28'),
('604526f6d898e83e6542b151f43193be44d174425adf1b46db707242dfc477808a93a090d8f32c2e', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:02:52', '2022-11-20 05:02:52', '2023-11-20 05:02:52'),
('7619c0f80246763292a93d8b08e13358ef0c86b64a2967823b6b67cf5d80abebeda50bec8a8ac2be', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:59:06', '2022-11-20 04:59:06', '2023-11-20 04:59:06'),
('83c355cbfae98cf928a37be224542bca37c6a8734a9a3a04aa44aa9107a70656033b4cdfc2f38ea2', 4, 1, 'passport_token', '[]', 0, '2022-11-02 22:50:50', '2022-11-02 22:50:50', '2023-11-02 22:50:50'),
('8a87a029106b9ad35222eaf354bcf3fa409de0f1806fd5a3d643380f1711a3fdd32cb748166535e6', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:01:32', '2022-11-20 05:01:32', '2023-11-20 05:01:32'),
('902a9b20afa2f0f774e7ca20508e1a1dde7f00548bdf61b746b201d61a36a541ef789219175a01b4', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:48:50', '2022-11-20 04:48:50', '2023-11-20 04:48:50'),
('a63e9d593d44ca7184ad33c4c322e9c7029da26524df3275e3fff72bdb70b2106cbf184bca941b3e', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:06:30', '2022-11-20 05:06:30', '2023-11-20 05:06:30'),
('a6ae5f7099baef3f8ab5a68d28f195d827754100c37eb0dc412af07d6908290a1794ce0e0ba92d44', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:06:11', '2022-11-20 05:06:11', '2023-11-20 05:06:11'),
('ac9cd1ef752f59affbdbaf764f9fc2430964eec3d023fd0707c6172f341f49ab53ee5e6b6dd3e1e3', 1, 1, 'passport_token', '[]', 0, '2022-10-29 00:41:20', '2022-10-29 00:41:20', '2023-10-29 00:41:20'),
('b03eaf56a179cf7e67835c9bba04f1003bee0bd17d402f48af822ccd0b4aac77b42fed2fa0ad91d5', 4, 1, 'passport_token', '[]', 0, '2022-10-29 00:56:13', '2022-10-29 00:56:13', '2023-10-29 00:56:13'),
('b114161c798b06a7f4d806b1a787a58561369d53d2cfcedb06c6f0bb453aad2915630459d1648655', 6, 1, 'passport_token', '[]', 0, '2022-11-22 22:54:52', '2022-11-22 22:54:52', '2023-11-22 22:54:52'),
('b8fa2f9caf29931b234332d961bf930059b0f7bcf9cb1a01708cfb3d29167419fde3ba9c33d9dcbb', 6, 1, 'passport_token', '[]', 0, '2022-11-22 18:56:18', '2022-11-22 18:56:18', '2023-11-22 18:56:18'),
('c06796bbc13436bc68c342c25dc097f832954543514b0f1c00432252817d9e4a3477b8c98560e189', 6, 1, 'passport_token', '[]', 0, '2022-12-07 16:01:01', '2022-12-07 16:01:01', '2023-12-07 16:01:01'),
('c5ba2949d10f27581fcc4f1e6a1dcc4cdcd1c2710a2432d55a49f5123ba72ef63a09008f70b4f424', 6, 1, 'passport_token', '[]', 0, '2022-12-07 16:18:58', '2022-12-07 16:18:58', '2023-12-07 16:18:58'),
('d5099580fe108cd48000a2e337944acb6379ead5642a43e566e7947f6d70f9b244256a8775897259', 6, 1, 'passport_token', '[]', 0, '2022-12-09 17:42:10', '2022-12-09 17:42:10', '2023-12-09 17:42:10'),
('ddb6bf3f2fc7f644f53299af02ab0850fe08fb1d29c4671466c62ae14570cc1c0af294ac38ac22ca', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:04:01', '2022-11-20 05:04:01', '2023-11-20 05:04:01'),
('eda2f854043440ec702fb5a4c7f73aea9c465ffd4e3aa69ba8ac3cfc3fa84b354860f274f77fe0d4', 6, 1, 'passport_token', '[]', 0, '2022-11-20 05:05:51', '2022-11-20 05:05:51', '2023-11-20 05:05:51'),
('f012b1746a93bfa0824c0ac39db3efebbcb37f2e0d2f128bbd71a29ccf038bd9ca5258c7dbfb4df1', 6, 1, 'passport_token', '[]', 0, '2022-11-21 21:01:45', '2022-11-21 21:01:45', '2023-11-21 21:01:45'),
('f152e67d901bf3786dc6f79e24485b4332c65a2ed891f6745a92d2f01c8824bc76c1d22bb0b131f8', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:58:24', '2022-11-20 04:58:24', '2023-11-20 04:58:24'),
('f73a0da3ead9dd6e3bec4cf9825de845d06f31d500db7b4679675a634ae636fc79938e298f863c43', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:57:30', '2022-11-20 04:57:30', '2023-11-20 04:57:30'),
('f8e0a0ae01c32b346fddd7af148c9eab3e5fd54295f50b92f86c721c25ee514ae87d126bee50ba50', 4, 1, 'passport_token', '[]', 0, '2022-10-29 00:58:00', '2022-10-29 00:58:00', '2023-10-29 00:58:00'),
('ffcf4394ee3bb63f9c77bdcde752aac22e3489c110e49733a2bef5a3bc7b18f9594d173104d7f1bc', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:56:23', '2022-11-20 04:56:23', '2023-11-20 04:56:23'),
('ffe5f709bc0322e83b4ca07b1426dfd36c371a2ee0d412f4148c85e622ddab04de37b344f3ae148e', 6, 1, 'passport_token', '[]', 0, '2022-11-20 04:49:12', '2022-11-20 04:49:12', '2023-11-20 04:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'YWYRpdhGEkamHpVjjg4hNwGwPkbW81L7ZuJRHHd6', NULL, 'http://localhost', 1, 0, 0, '2022-10-28 18:38:52', '2022-10-28 18:38:52'),
(2, NULL, 'Laravel Password Grant Client', 'MBF7oBTK147TWpgGUwt1DydDnU38QVa5XJycj0mn', 'users', 'http://localhost', 0, 1, 0, '2022-10-28 18:38:52', '2022-10-28 18:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-10-28 18:38:52', '2022-10-28 18:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `confirm_password`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(6, 'Sufiyan', 'Khanzada', 'sufiyankhanzada1254@gmail.com', '$2y$10$ZXgYLTg1Xsz6Renb/y0t/ug60eA.V0sTM2g3mnMdTa9ip3EqxyAoa', '$2y$10$GQAA.Dfsfg0hVL2NJ5AIkubuQv/dgUdNfy0mqRQiUpquTX4AdsJTy', NULL, NULL, '2022-11-20 04:45:47', '2022-11-20 04:45:47'),
(7, 'sufiyan', 'khanzada', 'sufiyankhanzada12543@gmail.com', '$2y$10$jZzUneHRG0hC1RyU1/enZ.j3OHWeJmqN3zlDPfka6WoK0fQr9lYeG', '$2y$10$jOFQSaX080j70oKwthDU..3LJewqSQD8NFNPRtaCLbx3AD7ognW1W', NULL, NULL, '2022-12-07 16:20:38', '2022-12-07 16:20:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
