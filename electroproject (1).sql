-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 07:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electroproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquires`
--

CREATE TABLE `enquires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2023_09_15_062203_create_tbl_vendors_table', 1),
(6, '2023_09_15_062220_create_tbl_categories_table', 1),
(7, '2023_09_15_062228_create_tbl_subcategories_table', 1),
(8, '2023_09_15_062239_create_tbl_products_table', 1),
(9, '2023_09_30_075319_create_registers_table', 2),
(10, '2023_10_05_072924_create_enquires_table', 3);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'API TOKEN', 'd92cdae8ad7c5ba5ebee3793fd6c595c6d52a4fac8e088b0a1d587d82cf5ad5d', '[\"*\"]', NULL, NULL, '2023-09-15 02:35:58', '2023-09-15 02:35:58'),
(2, 'App\\Models\\User', 1, 'API TOKEN', 'ca7a0e28bdb620d414ea957f04931c8b260c78b6793c3454e65b2d56c045048f', '[\"*\"]', NULL, NULL, '2023-09-15 02:37:19', '2023-09-15 02:37:19'),
(3, 'App\\Models\\User', 1, 'API TOKEN', '8cca4ea425b420740ca84ad45b6db8067edc5780c77131b782954c3b804e2e77', '[\"*\"]', NULL, NULL, '2023-09-15 03:55:49', '2023-09-15 03:55:49'),
(4, 'App\\Models\\User', 1, 'API TOKEN', '597c6a53c9f243f2b122a5f37055f6a8144c4aedf974d25181cc811b6006c90c', '[\"*\"]', NULL, NULL, '2023-09-15 03:58:23', '2023-09-15 03:58:23'),
(5, 'App\\Models\\User', 1, 'API TOKEN', '0a0c1f5d8827ea1c2fd0395fcfc16bdcb4fd4088ea6f10299404ba04b7304866', '[\"*\"]', NULL, NULL, '2023-09-15 03:58:38', '2023-09-15 03:58:38'),
(6, 'App\\Models\\User', 1, 'API TOKEN', 'e5d6e6be00828f654cc83cd58c8817b0ce5bf20c703a796a26d7e51a04538218', '[\"*\"]', NULL, NULL, '2023-09-15 05:12:40', '2023-09-15 05:12:40'),
(7, 'App\\Models\\User', 1, 'API TOKEN', '47cd250724e2ab569d734942598879362d97d39976b59ee0c46b4ee1fd725497', '[\"*\"]', NULL, NULL, '2023-09-15 05:21:28', '2023-09-15 05:21:28'),
(8, 'App\\Models\\User', 1, 'API TOKEN', 'ca469161be5e917948141d256ab61a9b076856b7b776b9fb30988a74c1e446e9', '[\"*\"]', NULL, NULL, '2023-09-15 05:21:32', '2023-09-15 05:21:32'),
(9, 'App\\Models\\User', 1, 'API TOKEN', '5106e32121ecc31b5649f98314eac1e47e316a356f92af278372f262bbb9ba5a', '[\"*\"]', NULL, NULL, '2023-09-15 05:22:36', '2023-09-15 05:22:36'),
(10, 'App\\Models\\User', 1, 'API TOKEN', '1c5c8818022384aceddacc5e92c3eab13871b799e335c14783505c03ff1b9668', '[\"*\"]', NULL, NULL, '2023-09-15 05:22:39', '2023-09-15 05:22:39'),
(11, 'App\\Models\\User', 1, 'API TOKEN', 'ffd7828943e94b868319abc959de4fecb7681ac37ad8770dbd934e7dcb434da4', '[\"*\"]', NULL, NULL, '2023-09-18 05:28:23', '2023-09-18 05:28:23'),
(12, 'App\\Models\\User', 1, 'API TOKEN', '2262a53265784912ca48b9e75f2f44f8a8bc074f85c817ca6f63140ac0b8eb9b', '[\"*\"]', NULL, NULL, '2023-09-18 05:28:33', '2023-09-18 05:28:33'),
(13, 'App\\Models\\User', 1, 'API TOKEN', '47b46ac7894e76304099d4072eb93f8699586fa290c274ebd59bf433b8a6305a', '[\"*\"]', NULL, NULL, '2023-09-18 05:28:36', '2023-09-18 05:28:36'),
(14, 'App\\Models\\User', 1, 'API TOKEN', 'a0d290302a04f8178a4d4e2ab536f1bd3040496abd3c8a392a650dd8d73213c5', '[\"*\"]', NULL, NULL, '2023-09-18 05:28:55', '2023-09-18 05:28:55'),
(15, 'App\\Models\\User', 1, 'API TOKEN', 'a569262fe3e9a9172c75bbec11b90dd2c2c6f795158e8804184c69a0871b1be8', '[\"*\"]', NULL, NULL, '2023-09-18 05:29:06', '2023-09-18 05:29:06'),
(16, 'App\\Models\\User', 1, 'API TOKEN', '902314b57dcf42817d804c1804848d6dc3f820bb5c4495518e8914e327696bd9', '[\"*\"]', NULL, NULL, '2023-09-18 05:29:08', '2023-09-18 05:29:08'),
(17, 'App\\Models\\User', 1, 'API TOKEN', '9fb43db7fe4a4f37a867ea5366075124b720baee9b1e2a5d0d619ea1b53ce957', '[\"*\"]', NULL, NULL, '2023-09-18 05:30:44', '2023-09-18 05:30:44'),
(18, 'App\\Models\\User', 1, 'API TOKEN', 'fbaec8cd4ad05f503576e8c7cb988c16279e69cc93a2c71e6373a7c703c59854', '[\"*\"]', NULL, NULL, '2023-09-18 05:31:31', '2023-09-18 05:31:31'),
(19, 'App\\Models\\User', 1, 'API TOKEN', 'a5c1eba341d8d3abc3a0ce3f9ca5a15ed5720b968bb2ac681783a4a8250b006c', '[\"*\"]', NULL, NULL, '2023-09-20 23:18:38', '2023-09-20 23:18:38'),
(20, 'App\\Models\\User', 1, 'API TOKEN', '37346e6071d86033e8bf5b08c17cd032e3ed117dc351a980614a5c7d75f49a86', '[\"*\"]', NULL, NULL, '2023-09-20 23:18:43', '2023-09-20 23:18:43'),
(21, 'App\\Models\\User', 1, 'API TOKEN', '250391577493849f434a3f3fb60f79b05ec27698a9879f036a2a2cc04096e147', '[\"*\"]', NULL, NULL, '2023-09-20 23:18:45', '2023-09-20 23:18:45'),
(22, 'App\\Models\\User', 1, 'API TOKEN', 'c6462de1db5164eb92a122bc4b2f5d00317227e9ef81b8da98b61beb372514ab', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:02', '2023-09-20 23:19:02'),
(23, 'App\\Models\\User', 1, 'API TOKEN', '4aa0f7a2219a621b59f300f30b8d5c4af7862fd663cc722560b9c02281f42e1a', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:04', '2023-09-20 23:19:04'),
(24, 'App\\Models\\User', 1, 'API TOKEN', '800e40e9d2407dc00beb78346acbf172713c825f15e74ada1964f4cb8b6af3fd', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:04', '2023-09-20 23:19:04'),
(25, 'App\\Models\\User', 1, 'API TOKEN', '2979a1af1dc065ff153f2272b22e77db11da218cb105e278a0d57c4c96471e84', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:05', '2023-09-20 23:19:05'),
(26, 'App\\Models\\User', 1, 'API TOKEN', '4f41d1d366adf0870bdb9bd17c66b8b3f4ce48d05514809f3c6e1a24869352d7', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:05', '2023-09-20 23:19:05'),
(27, 'App\\Models\\User', 1, 'API TOKEN', 'f96f4127bd4423ebc3914bc758f384a1f222cf9f5e7e58245ece8654eb1c109a', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:06', '2023-09-20 23:19:06'),
(28, 'App\\Models\\User', 1, 'API TOKEN', '0563b302819aa47b3306256b1cc9ed58e4c1f3f4cdf08f3fbe4001af72e9fca6', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:06', '2023-09-20 23:19:06'),
(29, 'App\\Models\\User', 1, 'API TOKEN', '547236d753b98b4a5f717fcee77e65bf03e97fc236f29c3a51a81a77a92a44b4', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:06', '2023-09-20 23:19:06'),
(30, 'App\\Models\\User', 1, 'API TOKEN', 'a2b1f8af2c0b5204b16ef2d9099936a592288957b15d2cd7a58f26bee0382752', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:07', '2023-09-20 23:19:07'),
(31, 'App\\Models\\User', 1, 'API TOKEN', '03f298e56267d68b4d8d981ed303c2f98677ada92956a8cfa43dd90e0d8efc7c', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:07', '2023-09-20 23:19:07'),
(32, 'App\\Models\\User', 1, 'API TOKEN', '3206aabc7cc307eb4779d449952526142a3bcca44ed1e96158f805271e1cd0d5', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:08', '2023-09-20 23:19:08'),
(33, 'App\\Models\\User', 1, 'API TOKEN', 'c9e73331375735d59a53c29ceaee1879e85865775d05bb673f9b7e32d905ce71', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:08', '2023-09-20 23:19:08'),
(34, 'App\\Models\\User', 1, 'API TOKEN', '797a50357fb64b8ce8764d481a58b34614e9905c1a99fbe0344e322b5cc0f720', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:09', '2023-09-20 23:19:09'),
(35, 'App\\Models\\User', 1, 'API TOKEN', 'ef63c531ce2025bc21cfe2ab478290157603ef86d99f773db79df6a340eabe1a', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:09', '2023-09-20 23:19:09'),
(36, 'App\\Models\\User', 1, 'API TOKEN', '1964ffab377a011fe9427cadf54edd0ab2e17d585334e6ef77f958e16a82ae65', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:10', '2023-09-20 23:19:10'),
(37, 'App\\Models\\User', 1, 'API TOKEN', '0db6f7c823ba9fcbb7ad06bfc5306df917631ec5d8c181209fa7ba11863cd2a2', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:11', '2023-09-20 23:19:11'),
(38, 'App\\Models\\User', 1, 'API TOKEN', 'f910ee9d8eae69650772194b50c0702d7d0de1632a3837baaf44bb1614495b00', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:11', '2023-09-20 23:19:11'),
(39, 'App\\Models\\User', 1, 'API TOKEN', '8cbb79250fc61b7802608b735c08424970e8426891e89de8f42c8dec2215e1fa', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:21', '2023-09-20 23:19:21'),
(40, 'App\\Models\\User', 1, 'API TOKEN', 'e69060ae27f3389d26e2b5754344d8ff0bdb545eedc66f4555d35153a0a1e595', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:22', '2023-09-20 23:19:22'),
(41, 'App\\Models\\User', 1, 'API TOKEN', 'ac26394185f99a83893c87a7ed5948a82528502a8141643ba2ae621d332cf2c6', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:22', '2023-09-20 23:19:22'),
(42, 'App\\Models\\User', 1, 'API TOKEN', '47d8ea9b619aa9be25e1e8b8de807c376cc53910847487f97b91296f8380c275', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:27', '2023-09-20 23:19:27'),
(43, 'App\\Models\\User', 1, 'API TOKEN', 'aeda9f146e11ba2d717e9e027b970a09692c3260a354ba55bddbda1f65ec8068', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:28', '2023-09-20 23:19:28'),
(44, 'App\\Models\\User', 1, 'API TOKEN', '4bcac3344f3069c68de8899c299693799ab35ce384ec13423e93d393d1a85713', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:29', '2023-09-20 23:19:29'),
(45, 'App\\Models\\User', 1, 'API TOKEN', 'bcd5c73fd755427e001ba6cf7b8393e1b2ef06106d4c12825bdc4bbdc93d649b', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:29', '2023-09-20 23:19:29'),
(46, 'App\\Models\\User', 1, 'API TOKEN', 'd5ac00cdc6f54031ca1491cc61de7b0d8bebc140c18afcffee7ceb87ba85a0a9', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:29', '2023-09-20 23:19:29'),
(47, 'App\\Models\\User', 1, 'API TOKEN', '6cbb50264673164c8e6486b485cfb881940fc09a60666e3e5ea74e98e9f12de4', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:30', '2023-09-20 23:19:30'),
(48, 'App\\Models\\User', 1, 'API TOKEN', 'c2024b4bf44fc101a90b02f2d23667b87fc646cd7f43cb4b9eedb22e624a2444', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:30', '2023-09-20 23:19:30'),
(49, 'App\\Models\\User', 1, 'API TOKEN', '7a7ef051dfa6affa4dd1fe519933aae80a1b91cdcfddd5dd9652ffba3e3adaac', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:31', '2023-09-20 23:19:31'),
(50, 'App\\Models\\User', 1, 'API TOKEN', '26bdb2fceed854b71e9c82ffaf5550889cff7ecfb50786db397730b193281767', '[\"*\"]', NULL, NULL, '2023-09-20 23:19:31', '2023-09-20 23:19:31'),
(51, 'App\\Models\\User', 1, 'API TOKEN', 'cb5931fac795852c34a3a206bdd64e16cdf45370ad51982f6a59b5898668042e', '[\"*\"]', NULL, NULL, '2023-09-20 23:52:22', '2023-09-20 23:52:22'),
(52, 'App\\Models\\User', 1, 'API TOKEN', '76e3ffed31632464ce58ebe69eca055bc2ee102c87310043f21915c10561baea', '[\"*\"]', NULL, NULL, '2023-09-20 23:53:32', '2023-09-20 23:53:32'),
(53, 'App\\Models\\User', 1, 'API TOKEN', 'f2eb3a018beaa4a2b03e78835c5aef5bf927f2ed20de18e55e6c74004205a2b6', '[\"*\"]', NULL, NULL, '2023-09-20 23:53:34', '2023-09-20 23:53:34'),
(54, 'App\\Models\\User', 1, 'API TOKEN', '4a336bd173f5c476a585c285409bce4b57d32eca123dcf55bd9a5fde5e84953c', '[\"*\"]', NULL, NULL, '2023-09-20 23:54:59', '2023-09-20 23:54:59'),
(55, 'App\\Models\\User', 1, 'API TOKEN', 'bd0b0abb60e5210f47d6f6aad7031e53aa4e85c3c189ebc4cf4f30e8180877bb', '[\"*\"]', NULL, NULL, '2023-09-20 23:55:46', '2023-09-20 23:55:46'),
(56, 'App\\Models\\User', 1, 'API TOKEN', 'a459b89470678273fb3a29e7acad46e80c35a004bd5f9a0e95675c301a936a43', '[\"*\"]', NULL, NULL, '2023-09-21 00:09:30', '2023-09-21 00:09:30'),
(57, 'App\\Models\\User', 1, 'API TOKEN', '90c3e2a01a78b5ef65f5b1204556de5c64430747b81738e9d1781b19bd6e841c', '[\"*\"]', NULL, NULL, '2023-09-21 00:11:22', '2023-09-21 00:11:22'),
(58, 'App\\Models\\User', 1, 'API TOKEN', 'd22e54cdf200e39ac342712c3d5a3c478cc42e663fee4f74173284855720d271', '[\"*\"]', NULL, NULL, '2023-09-21 00:16:17', '2023-09-21 00:16:17'),
(59, 'App\\Models\\User', 1, 'API TOKEN', 'f2a2477df3ea0db5c9e5ca0486ed8daa318852c69f01b738287da29fe479e2ce', '[\"*\"]', NULL, NULL, '2023-09-21 00:17:03', '2023-09-21 00:17:03'),
(60, 'App\\Models\\User', 1, 'API TOKEN', '4fa24f0eb05102570d01d6cb428ee023607264c2b39d328063a2af59755ec429', '[\"*\"]', NULL, NULL, '2023-09-21 00:37:15', '2023-09-21 00:37:15'),
(61, 'App\\Models\\User', 1, 'API TOKEN', 'e73f2bd8b5e56179784ebdc54ecf388d65f2592e00d4fb5c2eda615aefcd7f97', '[\"*\"]', NULL, NULL, '2023-09-21 00:37:33', '2023-09-21 00:37:33'),
(62, 'App\\Models\\User', 1, 'API TOKEN', '31d6c10defa20a92080d111ae34a121994d44be09d246eec20e4b0fcfc9f7016', '[\"*\"]', NULL, NULL, '2023-09-21 00:38:54', '2023-09-21 00:38:54'),
(63, 'App\\Models\\User', 1, 'API TOKEN', '3aeb76e4ffda000c10fdcd55cb8a62021943f8e85bb392ca684ffdc994b5208c', '[\"*\"]', NULL, NULL, '2023-09-21 00:39:56', '2023-09-21 00:39:56'),
(64, 'App\\Models\\User', 1, 'API TOKEN', '8fddef9cb8658daa7114225b1ee60245060c1668045752d2120ca9d8cff5a372', '[\"*\"]', NULL, NULL, '2023-09-21 00:41:11', '2023-09-21 00:41:11'),
(65, 'App\\Models\\User', 1, 'API TOKEN', '73c75ed2ae833b39d80f8985054abd363e484b8510c8c3697d7d4fe2af9fac72', '[\"*\"]', NULL, NULL, '2023-09-21 00:41:39', '2023-09-21 00:41:39'),
(66, 'App\\Models\\User', 1, 'API TOKEN', 'c3795bd9726e2a838283d188cdae8f8e983198c97d108fb42555c0352cbd378e', '[\"*\"]', NULL, NULL, '2023-09-21 05:57:31', '2023-09-21 05:57:31'),
(67, 'App\\Models\\User', 1, 'API TOKEN', 'b0a2776ccf1b4f7288ab0281791363c67cf7ae66a9a54f163e877841f532528c', '[\"*\"]', NULL, NULL, '2023-09-21 06:04:35', '2023-09-21 06:04:35'),
(68, 'App\\Models\\User', 1, 'API TOKEN', 'b7f57defe575fe6fec589b0b5fd8abc7c76b620716a3afacbd867d9dc347efd6', '[\"*\"]', NULL, NULL, '2023-09-21 06:05:50', '2023-09-21 06:05:50'),
(69, 'App\\Models\\User', 1, 'API TOKEN', '12544757191525bdf4cb720bfedb4f80ae7611f2d61b3118f04ebb546e02329e', '[\"*\"]', NULL, NULL, '2023-09-21 06:18:35', '2023-09-21 06:18:35'),
(70, 'App\\Models\\User', 1, 'API TOKEN', '442a0bd1775894ac3b228d8b46a2f46d1d1b8bf4bd4ec7f7f67d6806f3c6d7e7', '[\"*\"]', NULL, NULL, '2023-09-21 06:24:30', '2023-09-21 06:24:30'),
(71, 'App\\Models\\User', 1, 'API TOKEN', 'd06f07c5f222a77cf5eb99e63b1aba4131de8a93cd1a5f7a723d8cc715f371a8', '[\"*\"]', NULL, NULL, '2023-09-21 06:26:18', '2023-09-21 06:26:18'),
(72, 'App\\Models\\User', 1, 'API TOKEN', '08b5c5720c22bf99f0b957e0bcd568e8c668fa502c1a5b909b2bd612d559402f', '[\"*\"]', NULL, NULL, '2023-09-22 00:22:31', '2023-09-22 00:22:31'),
(73, 'App\\Models\\User', 1, 'API TOKEN', '58d027c710bc61724a0ef74eedd743b6a829ad0ecec8f623c03e5cece592c7cc', '[\"*\"]', NULL, NULL, '2023-09-29 00:06:36', '2023-09-29 00:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `password`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'vaishnavi', 'vaishnavi@gmail.com', 'vaishnavi', '9898989898', '2023-09-30 04:32:11', '2023-09-30 04:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `cname`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'category edit', '4 (2).png', 'active', '2023-09-23 00:37:08', '2023-09-23 00:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `subcate_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `pname`, `description`, `price`, `discount`, `vendor_id`, `subcate_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 'pname', '<p>description</p>', '12', '1', '6', '2', 'active', '3 (1).jpg', '2023-09-23 03:38:00', '2023-09-23 04:53:00'),
(3, 'demo', '<p>description</p>', '90', '10', '5', '2', 'active', '4 (2).png', '2023-10-02 23:58:34', '2023-10-02 23:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcate_name` varchar(255) NOT NULL,
  `subcate_image` varchar(255) NOT NULL,
  `subcate_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`id`, `subcate_name`, `subcate_image`, `subcate_status`, `created_at`, `updated_at`) VALUES
(2, 'sub category', '4 (1).png', 'active', '2023-09-23 01:45:56', '2023-09-23 02:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendors`
--

CREATE TABLE `tbl_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_number` varchar(255) NOT NULL,
  `total_chairs` varchar(255) NOT NULL,
  `total_tables` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_vendors`
--

INSERT INTO `tbl_vendors` (`id`, `name`, `email`, `contact`, `address`, `store_name`, `store_number`, `total_chairs`, `total_tables`, `city`, `state`, `start_date`, `end_date`, `status`, `category`, `created_at`, `updated_at`) VALUES
(5, 'mayuri', 'mayuri@gmail.com', '9889898989', 'address', 'educational', '243', '200', '100', 'solapur', 'maharashtra', '2023-10-02', '2023-10-26', 'active', '5', '2023-09-30 02:11:04', '2023-10-02 06:33:30'),
(6, 'mayuri', 'mayuri@gmail.com', '9889898989', 'address', 'educational', '118', '200', '100', 'solapur', 'maharashtra', '2023-10-02', '2023-10-26', 'active', '5', '2023-10-02 06:29:02', '2023-10-02 06:29:02');

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
  `usertype` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `usertype`, `created_at`, `updated_at`) VALUES
(1, 'super', 'super@gmail.com', NULL, 'super', NULL, 'super', '2023-09-15 02:35:58', '2023-09-15 02:35:58'),
(2, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, 'admin', NULL, NULL),
(3, 'rajeshwari', 'vendor@gmail.com', NULL, 'vendor', NULL, 'vendor', '2023-09-30 02:11:05', '2023-09-30 02:11:05'),
(4, 'mayuri', 'mayuri@gmail.com', NULL, 'mayuri', NULL, 'vendor', '2023-10-02 06:29:02', '2023-10-02 06:29:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquires`
--
ALTER TABLE `enquires`
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
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
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
-- AUTO_INCREMENT for table `enquires`
--
ALTER TABLE `enquires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
