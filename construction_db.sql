-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin_photos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin_photos`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Technoval', 'admin@gmail.com', '2022-06-07 01:00:33', '$2y$10$JDrlzQW9LcPkV.tbW9QBmeBdY1RtPAkmFcqhUWU/loQgymCOrz45O', '202311191256LOGO.jpg', 0, '2022-06-07 01:00:34', '2023-11-19 06:56:02'),
(2, 'Admin', 'ward.cecil@example.net', '2022-06-07 01:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '2022-06-07 01:00:34', '2022-06-07 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_photo`, `blog_description`, `status`, `created_at`, `updated_at`, `views`) VALUES
(9, 'The point of using Lorem Ipsum is that it', 'upload/blog/1756535990078992.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', 0, '2023-01-31 19:07:40', '2023-04-12 03:26:40', 39),
(13, 'An art studio is sometimes', 'upload/blog/1756536162917231.jpg', '<p>The studio of any artist, especially from the 15th to the 19th centuries, characterized all the assistants</p>', 1, '2023-01-31 19:10:24', '2023-04-16 07:39:37', 61),
(16, 'one', 'upload/blog/1756539187064627.jpg', '<p>one</p>', 1, '2023-01-31 19:58:29', '2023-04-20 19:51:58', 13),
(17, 'two', 'upload/blog/1756539278284492.jpg', '<p>two</p>', 1, '2023-01-31 19:59:55', '2023-04-19 11:50:45', 10);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(12, 'Steel Mill Waste', 'steel-mill-waste', NULL, '2023-03-05 12:09:59'),
(21, 'Infinite Shipping & Logistics', 'infinite-shipping-&-logistics', NULL, NULL),
(22, 'Abid Agro', 'abid-agro', NULL, NULL),
(23, 'Steel Scrap', 'steel-scrap', NULL, NULL),
(24, 'Kazi Auto Cars', 'kazi-auto-cars', NULL, NULL),
(25, 'Kazi Fashion RMG Stock Lot', 'kazi-fashion-rmg-stock-lot', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `childcategory_name` varchar(255) NOT NULL,
  `childcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `category_id`, `subcategory_id`, `childcategory_name`, `childcategory_slug`, `created_at`, `updated_at`) VALUES
(21, 12, 30, 'Search Engine Optimization (SEO)', 'search-engine-optimization-(seo)', NULL, NULL),
(22, 12, 30, 'Social Media Marketing', 'social-media-marketing', NULL, NULL),
(23, 12, 30, 'Pay Per Click (PPC)', 'pay-per-click-(ppc)', NULL, NULL),
(24, 12, 30, 'Email Marketing', 'email-marketing', NULL, NULL),
(25, 12, 30, 'Media buying', 'media-buying', NULL, NULL),
(26, 12, 30, 'Affiliate Marketing', 'affiliate-marketing', NULL, NULL),
(27, 12, 29, 'Desktop Application', 'desktop-application', NULL, NULL),
(28, 12, 29, 'Android & iOS App Development', 'android-&-ios-app-development', NULL, NULL),
(29, 12, 29, 'Enterprise  Software Solution', 'enterprise--software-solution', NULL, NULL),
(30, 12, 29, 'Custom Software Solution', 'custom-software-solution', NULL, NULL),
(31, 12, 28, 'E-commerce Solution', 'e-commerce-solution', NULL, NULL),
(32, 12, 28, 'Company profile Website', 'company-profile-website', NULL, NULL),
(33, 12, 28, 'School, College, University Website', 'school,-college,-university-website', NULL, NULL),
(34, 12, 28, 'Booking Website', 'booking-website', NULL, NULL),
(35, 12, 27, 'Static post design ,Banner design', 'static-post-design-,banner-design', NULL, NULL),
(36, 12, 27, 'Content writing/copywriting', 'content-writing/copywriting', NULL, NULL),
(37, 12, 27, 'Interview video/Documentary  Video', 'interview-video/documentary--video', NULL, NULL),
(38, 12, 27, 'Corporate AV', 'corporate-av', NULL, NULL),
(39, 12, 27, 'Professional video shoot and studio rent', 'professional-video-shoot-and-studio-rent', NULL, NULL),
(40, 12, 31, 'Web Application Development', 'web-application-development', NULL, NULL),
(41, 12, 31, 'WordPress Website Development', 'wordpress-website-development', NULL, NULL),
(42, 12, 31, 'Ecommerce Web Design and Development', 'ecommerce-web-design-and-development', NULL, NULL),
(43, 12, 31, 'Enterprise Web Design and Development', 'enterprise-web-design-and-development', NULL, NULL),
(44, 12, 31, 'Laravel Website Design Services', 'laravel-website-design-services', NULL, '2022-11-26 06:48:43'),
(45, 12, 31, 'E-Learning System', 'e-learning-system', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_title` varchar(255) NOT NULL,
  `orginal_title` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_title`, `orginal_title`, `client_logo`, `created_at`, `updated_at`) VALUES
(42, 'https://intertradebd.com/frontend/category/12', 'STEEL MILL\'S WASTE', 'upload/client/1762942454178331.jpg', '2023-04-12 04:15:40', NULL),
(43, 'https://intertradebd.com/frontend/category/23', 'STEEL SCRAP', 'upload/client/1762942551342776.jpg', '2023-04-12 04:17:12', NULL),
(44, 'https://intertradebd.com/frontend/category/22', 'ABID AGRO', 'upload/client/1762942633782235.jpg', '2023-04-12 04:18:31', NULL),
(45, 'https://intertradebd.com/frontend/category/25', 'KAZI FASHION HOUSE', 'upload/client/1762942685699393.jpg', '2023-04-12 04:19:20', NULL),
(46, 'https://intertradebd.com/frontend/category/24', 'KAZI AUTO CARS', 'upload/client/1764326419017560.jpg', '2023-04-12 04:20:12', '2023-04-27 04:53:11'),
(47, 'https://intertradebd.com/frontend/category/21', 'INFINITE SHIPPING & LOGISTICS', 'upload/client/1762942772258651.png', '2023-04-12 04:20:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email_address`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Aaron Rodriquez', 'xizy@mailinator.com', 'Ipsa nihil dolor no', NULL, 'Nihil ut maxime iste', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(16, 'upload/portfolio/1756269501956492.jpg', 1, '2022-09-14 04:20:46', '2023-01-28 20:31:57'),
(19, 'upload/portfolio/1756269471981807.jpg', 1, '2022-09-14 04:22:23', '2023-01-28 20:31:28'),
(20, 'upload/portfolio/1756269437907467.jpg', 1, '2022-09-14 04:22:39', '2023-01-28 20:30:56'),
(28, 'upload/portfolio/1756441392948980.jpg', 1, '2022-10-06 05:40:04', '2023-01-30 18:04:05'),
(29, 'upload/portfolio/1756441420572193.jpg', 1, '2022-10-06 05:40:11', '2023-01-30 18:04:31'),
(30, 'upload/portfolio/1756441444393293.jpg', 1, '2022-10-06 05:40:22', '2023-01-30 18:04:54'),
(31, 'upload/portfolio/1756441469865806.jpg', 1, '2022-10-06 05:40:33', '2023-01-30 18:05:18'),
(32, 'upload/portfolio/1756441509937280.jpg', 1, '2022-10-06 05:40:41', '2023-01-30 18:05:56'),
(33, 'upload/portfolio/1756441542573556.jpg', 1, '2022-10-06 05:40:48', '2023-01-30 18:06:28'),
(34, 'upload/portfolio/1756441576125497.jpg', 1, '2022-10-06 05:40:55', '2023-01-30 18:07:00'),
(35, 'upload/portfolio/1756269143828055.jpg', 1, '2022-10-06 05:41:04', '2023-01-28 20:26:15'),
(36, 'upload/portfolio/1756441647528367.jpg', 1, '2022-10-06 05:44:50', '2023-01-30 18:08:08'),
(37, 'upload/portfolio/1756441731514582.jpg', 1, '2022-10-06 05:45:09', '2023-01-30 18:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ind_title` varchar(255) NOT NULL,
  `ind_photo` varchar(255) NOT NULL,
  `ind_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `ind_title`, `ind_photo`, `ind_description`, `created_at`, `updated_at`) VALUES
(2, 'Travels', 'upload/industries/1747196012221211.png', 'This is travels .', '2022-10-20 02:52:42', '2022-10-20 02:52:42'),
(3, 'Technologies', 'upload/industries/1747195463874482.png', 'This is technologies', '2022-10-20 02:43:59', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_05_193812_create_admins_table', 2),
(6, '2022_08_08_050401_create_categories_table', 3),
(7, '2022_08_09_064341_create_sub_categories_table', 4),
(8, '2022_08_09_092147_create_subcategories_table', 5),
(9, '2022_08_10_052744_create_contents_table', 6),
(10, '2022_09_06_061522_create_services_table', 7),
(11, '2022_09_13_130326_create_galleries_table', 8),
(12, '2022_09_14_075608_create_portfolios_table', 9),
(13, '2022_09_14_081818_create_clients_table', 10),
(14, '2022_09_19_162005_create_childcategories_table', 11),
(15, '2022_10_02_073816_create_contacts_table', 12),
(16, '2022_10_04_052157_create_contactuses_table', 13),
(17, '2022_10_04_065644_create_policies_table', 13),
(18, '2022_10_05_171040_create_blogs_table', 13),
(19, '2022_10_06_040643_create_privacies_table', 14),
(20, '2022_10_06_050440_create_terms_table', 15),
(21, '2022_10_20_071552_create_industries_table', 16),
(22, '2022_10_20_072714_create_industries_table', 17),
(23, '2022_10_20_073626_create_industries_table', 18),
(24, '2022_10_23_054943_add_votes_to_services', 19),
(25, '2022_10_23_062145_add_votes_to_blogs', 20),
(26, '2023_01_26_012447_create_settings_table', 21),
(27, '2023_01_31_114201_create_slides_table', 22),
(28, '2023_11_22_050020_create_projects_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(255) NOT NULL,
  `port_subtitle` varchar(255) NOT NULL,
  `port_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `port_title`, `port_subtitle`, `port_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'E-commerce', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740191870692.png', 1, '2022-11-06 09:56:47', '2022-11-06 09:56:47'),
(18, 'School Automation', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740385255987.png', 1, '2022-11-06 09:59:51', '2022-11-06 09:59:51'),
(19, 'Shop Management', 'PHP, Laravel,', 'upload/portfolio/1748740403237389.png', 1, '2022-11-06 10:00:09', '2022-11-06 10:00:09'),
(20, 'Hospital Management', 'PHP, Laravel,', 'upload/portfolio/1748740363844862.png', 1, '2022-11-06 09:59:31', '2022-11-06 09:59:31'),
(21, 'Accounting Software', 'PHP, Laravel,', 'upload/portfolio/1747737782148932.png', 1, '2022-10-26 12:23:55', NULL),
(22, 'Point of Sales', 'PHP, Laravel,', 'upload/portfolio/1748740221435660.png', 1, '2022-11-06 09:57:15', '2022-11-06 09:57:15'),
(23, 'HR-admin Management', 'PHP, Laravel,', 'upload/portfolio/1748740169948759.png', 1, '2022-11-06 09:56:26', '2022-11-06 09:56:26'),
(24, 'Dealership Management', 'PHP, Laravel, VueJS', 'upload/portfolio/1748740203764789.png', 1, '2022-11-06 09:56:58', '2022-11-06 09:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy_title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'policy test admin panel', '<p>policy test admin panel</p>', '2023-04-12 01:53:26', '2023-04-12 01:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail_img` varchar(255) NOT NULL,
  `thum_project_name` varchar(255) NOT NULL,
  `thum_project_title` varchar(255) NOT NULL,
  `details_banner` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `details_title` varchar(255) NOT NULL,
  `long_desc` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `thumbnail_img`, `thum_project_name`, `thum_project_title`, `details_banner`, `category_name`, `customer_name`, `start_date`, `end_date`, `rating`, `details_title`, `long_desc`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/project/thumbnail/1783517031055042.png', 'Concrete Repair', 'Lorem Ipsum is simply dummy', 'upload/project/banner/1783517031259592.png', 'Corporate, busines', 'Starline shimlasi', '2021-01-25', '2022-10-25', '5', 'Redefining Construction Standards', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullam', 1, '2023-11-25 00:39:46', '2023-11-25 00:39:46'),
(4, 'upload/project/thumbnail/1783517361903001.png', 'Concrete Repair', 'Lorem Ipsum is simply dummy', 'upload/project/banner/1783517362113112.png', 'Corporate, business', 'Starline shimlasi', '2021-02-25', '2023-03-25', '5', 'Redefining Construction Standards', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullam', 1, '2023-11-25 00:45:01', NULL),
(5, 'upload/project/thumbnail/1783518085045417.png', 'Concrete Repair', 'Lorem Ipsum is simply dummy', 'upload/project/banner/1783518085189803.png', 'Corporate, business', 'Starline shimlasi', '2022-01-25', '2020-10-25', '5', 'Redefining Construction Standards', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra</p>\r\n\r\n<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lortis non, viverraAliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverraAliquam er justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo</p>', 1, '2023-11-25 00:56:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_thamble` varchar(255) NOT NULL,
  `breadcrumb` varchar(255) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_descrip` text NOT NULL,
  `long_descrip` text NOT NULL,
  `thamble` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `detail_short_title` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `detail_short_desc` varchar(255) NOT NULL,
  `detail_project_name` varchar(255) NOT NULL,
  `detail_project_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_thamble`, `breadcrumb`, `content_title`, `content_descrip`, `long_descrip`, `thamble`, `status`, `detail_short_title`, `category_name`, `detail_short_desc`, `detail_project_name`, `detail_project_desc`, `created_at`, `updated_at`, `views`) VALUES
(5, 'Electrical Wiring', 'upload/services/1783515485625833.png', 'The best service ever we provide', 'It is a long established fact that a reader will be distracted by the', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra lat Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros a posuere lobortis non, viverraAliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vierra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverraAliquam eros justo, posuere loborti</p>', 'upload/services/1700892912_service-1.png', 1, 'The project is start', 'Planing, Real Estate', 'Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper poviverra Aliquam eros justo, posuere', 'Big project', 'Aliquam eros justo, posuere loboa et matti ullamcorper posuere viverra.', '2023-11-25 00:15:12', '2023-11-25 00:24:58', 2),
(6, 'Flooring Installation', 'upload/services/1783515857334650.png', 'The best service ever we provide', 'It is a long established fact that a reader will be distracted by the', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra lat Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros a posuere lobortis non, viverraAliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vierra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverraAliquam eros justo, posuere loborti</p>', 'upload/services/1700893266_service-2.png', 1, 'The project is start', 'Planing, Real Estate', 'Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper poviverra Aliquam eros justo, posuere', 'Big project', 'Aliquam eros justo, posuere loboa et matti ullamcorper posuere viverra', '2023-11-25 00:21:06', NULL, 0),
(7, 'Fence Repair', 'upload/services/1783516060264214.png', 'The best service ever we provide', 'It is a long established fact that a reader will be distracted by the', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra lat Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros a posuere lobortis non, viverraAliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vierra .Aliquam eros justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverraAliquam eros justo, posuere loborti</p>', 'upload/services/1700893460_service-3.png', 1, 'The project is start', 'Planing, Real Estate', 'Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper poviverra Aliquam eros justo, posuere', 'Big project', 'Aliquam eros justo, posuere loboa et matti ullamcorper posuere viverra.', '2023-11-25 00:24:20', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook`, `instagram`, `pinterest`, `googleplus`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1783520970827039.png', '+8802333312689', 'info@gmail.com', 'address', 'facebook', 'instagram', NULL, NULL, 'linkdin', 'twitter', NULL, '2023-11-25 01:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_link` varchar(255) NOT NULL,
  `slide_photo` varchar(255) NOT NULL,
  `slide_description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_title`, `slide_link`, `slide_photo`, `slide_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Steel Mill’s Waste', 'https://intertradebd.com/frontend/category/12', 'upload/slide/1763259014030744.jpg', '<p>&nbsp;Steel Mill&rsquo;s Waste</p>', 1, '2023-04-15 16:07:15', '2023-04-15 16:07:15'),
(2, 'STEEL SCRAP', 'https://intertradebd.com/frontend/category/23', 'upload/slide/1763258974065894.jpg', '<p>Steel Scrap</p>', 1, '2023-04-15 16:06:37', '2023-04-15 16:06:37'),
(3, 'ABID AGRO', 'https://intertradebd.com/frontend/category/22', 'upload/slide/1763258913311927.jpg', '<p>ABID AGRO</p>', 1, '2023-04-15 16:05:39', '2023-04-15 16:05:39'),
(4, 'INFINITE SHIPPING & LOGISTICS', 'https://intertradebd.com/frontend/category/21', 'upload/slide/1763258761651463.jpg', '<p>&nbsp;INFINITE SHIPPING &amp; LOGISTICS</p>', 1, '2023-04-15 16:03:14', '2023-04-15 16:03:14'),
(5, 'KAZI AUTO CARS', 'https://intertradebd.com/frontend/category/24', 'upload/slide/1763258815713061.jpg', '<p>KAZI AUTO CARS</p>', 1, '2023-04-15 16:04:06', '2023-04-15 16:04:06'),
(6, 'KAZI FASHION HOUSE (RMG) STOCK LOT.', 'https://intertradebd.com/frontend/category/25', 'upload/slide/1763258864038405.jpg', '<p><span dir=\"ltr\" style=\"font-family:sans-serif; font-size:calc(var(--scale-factor)*11.00px)\">KAZI FASHION HOUSE (RMG) STOCK LOT</span></p>', 1, '2023-04-15 16:04:52', '2023-04-15 16:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(48, 12, 'Zinc Ash (Induction Furnace Dust)', 'zinc-ash-(induction-furnace-dust)', '2023-04-04 02:18:23', NULL),
(49, 12, 'EAFD (Electric Arc Furnace Dust)', 'eafd-(electric-arc-furnace-dust)', '2023-04-04 02:18:52', NULL),
(50, 12, 'Mill Scale', 'mill-scale', '2023-04-04 02:19:12', NULL),
(51, 12, 'Iron Red Oxide', 'iron-red-oxide', '2023-04-04 02:19:32', NULL),
(52, 22, 'Fish', 'fish', '2023-04-04 02:23:21', NULL),
(53, 22, 'Fish Scale', 'fish-scale', '2023-04-04 02:24:32', NULL),
(54, 22, 'Fresh Vegetable', 'fresh-vegetable', '2023-04-04 02:24:54', NULL),
(55, 22, 'Potato', 'potato', '2023-04-04 02:25:48', NULL),
(56, 23, 'ABC Scrap', 'abc-scrap', '2023-04-04 02:26:44', NULL),
(57, 23, 'Cast Iron Scrap', 'cast-iron-scrap', '2023-04-04 02:27:02', NULL),
(58, 23, 'HMS Scrap', 'hms-scrap', '2023-04-04 02:27:19', NULL),
(59, 24, 'Kazi Auto Cars', 'kazi-auto-cars', '2023-04-04 02:28:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `t_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `t_description`, `created_at`, `updated_at`) VALUES
(2, 'intertradebd  Terms admin panel', '<p>intertradebd &nbsp;Terms tes admin panel</p>', '2023-04-12 01:52:41', '2023-04-12 01:52:41');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shahin reza', 'user@gmail.com', NULL, '$2y$10$Gd7l5q5MNH.98RYsxV5XX.YKCnETn4AeD3//nrnbXvMw6t9U6vKZe', NULL, '2022-06-05 13:32:41', '2022-06-05 13:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
