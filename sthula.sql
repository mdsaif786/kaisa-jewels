-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 05:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sthula`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_offers`
--

CREATE TABLE `active_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_bracket` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `zone_id` bigint(20) UNSIGNED DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `phone`, `alternate_phone`, `address_1`, `pincode`, `city`, `additional_note`, `address_2`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `country_id`, `zone_id`, `landmark`) VALUES
(1, 'Nell Battle', '9013627321', NULL, 'Reprehenderit incidi', 110044, 'sheohar', NULL, NULL, '2021-06-22 03:42:04', '2021-06-22 04:50:17', '2021-06-22 04:50:17', 1, 95, 1, NULL),
(2, 'Mechelle Benton', '+1 (557) 562-4603', NULL, '19 South New Court', 793243, 'Ad mollit velit non ', NULL, NULL, '2021-06-22 04:23:52', '2021-06-22 04:51:36', '2021-06-22 04:51:36', 1, 95, 1, 'Unde earum assumenda'),
(3, 'Mechelle Benton', '+1 (557) 562-4603', NULL, '19 South New Court', 793243, 'Ad mollit velit non ', NULL, NULL, '2021-06-22 04:24:10', '2021-06-22 04:53:57', '2021-06-22 04:53:57', 1, 95, 1, 'Unde earum assumenda'),
(4, 'Selma White', '+1 (454) 464-7854', NULL, '111 West First Road', 12, 'Minus quis sint reru', NULL, NULL, '2021-06-22 04:26:28', '2021-06-22 04:52:34', '2021-06-22 04:52:34', 1, 95, 1, 'Excepturi asperiores'),
(5, 'Bertha Mcdaniel', '+1 (813) 853-4705', NULL, '43 Milton Drive', 38, 'Sit ipsam nisi esse ', NULL, NULL, '2021-06-22 04:27:09', '2021-06-22 04:55:14', '2021-06-22 04:55:14', 1, 95, 1, 'Esse dolor velit t'),
(6, 'Jenna Miranda', '+1 (266) 754-1682', NULL, '597 Nobel Parkway', 70, 'Consectetur voluptat', NULL, NULL, '2021-06-22 04:28:39', '2021-06-22 04:51:46', '2021-06-22 04:51:46', 1, 95, 1, 'Temporibus culpa sed'),
(7, 'Melinda Dodson', '+1 (545) 939-2514', NULL, '919 South New Boulevard', 45, 'Aut quis explicabo ', NULL, NULL, '2021-06-22 04:55:42', '2021-06-22 04:55:42', NULL, 1, 95, 1, 'Cum incididunt sunt '),
(8, 'Tatyana Dale', '+1 (323) 716-9461', NULL, '44 North Second Boulevard', 72, 'Repellendus Harum r', NULL, NULL, '2021-06-22 04:56:00', '2021-06-22 04:56:00', NULL, 1, 95, 1, 'Ut mollit reiciendis');

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'created', 1, 'App\\Models\\Order', NULL, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2020-11-22\",\"is_completed\":0,\"order_key\":\"ZLRqe932Zwok0nxhgwQrsYYC6SsE19YS8Jl5oOJV\",\"ip\":\"::1\",\"order_amount\":\"2.41\",\"updated_at\":\"2020-11-22 06:41:50\",\"created_at\":\"2020-11-22 06:41:50\",\"id\":1}', '::1', '2020-11-22 01:11:50', '2020-11-22 01:11:50'),
(2, 'deleted', 1, 'App\\Models\\Order', NULL, '{\"id\":1,\"invoice_no\":null,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":null,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":null,\"ip\":\"::1\",\"is_completed\":0,\"order_amount\":\"2.41\",\"user_agent\":null,\"total_book_amount\":null,\"payment_method\":null,\"payment_status\":null,\"order_date\":\"2020-11-22\",\"order_key\":\"ZLRqe932Zwok0nxhgwQrsYYC6SsE19YS8Jl5oOJV\",\"created_at\":\"2020-11-22 06:41:50\",\"updated_at\":\"2020-11-22 06:41:50\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null}', '::1', '2020-11-22 01:26:05', '2020-11-22 01:26:05'),
(3, 'created', 2, 'App\\Models\\Order', NULL, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2020-11-22\",\"is_completed\":0,\"order_key\":\"5SIfRWBAjcE9Lkxqq97NIe080J3X5BMy8QRfmTY4\",\"ip\":\"::1\",\"order_amount\":\"9.59\",\"updated_at\":\"2020-11-22 06:57:15\",\"created_at\":\"2020-11-22 06:57:15\",\"id\":2}', '::1', '2020-11-22 01:27:15', '2020-11-22 01:27:15'),
(4, 'deleted', 2, 'App\\Models\\Order', NULL, '{\"id\":2,\"invoice_no\":null,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":null,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":null,\"ip\":\"::1\",\"is_completed\":0,\"order_amount\":\"9.59\",\"user_agent\":null,\"total_book_amount\":null,\"payment_method\":null,\"payment_status\":null,\"order_date\":\"2020-11-22\",\"order_key\":\"5SIfRWBAjcE9Lkxqq97NIe080J3X5BMy8QRfmTY4\",\"created_at\":\"2020-11-22 06:57:15\",\"updated_at\":\"2020-11-22 06:57:15\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null}', '::1', '2020-11-22 01:34:10', '2020-11-22 01:34:10'),
(5, 'created', 3, 'App\\Models\\Order', NULL, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2020-11-22\",\"is_completed\":0,\"order_key\":\"crGzdfFJzYQl9sgQ6ysRZKiJppWuHu7bXWorX1Nt\",\"ip\":\"::1\",\"order_amount\":\"5.09\",\"updated_at\":\"2020-11-22 07:05:05\",\"created_at\":\"2020-11-22 07:05:05\",\"id\":3}', '::1', '2020-11-22 01:35:05', '2020-11-22 01:35:05'),
(10, 'created', 11, 'App\\Models\\BookCategory', 1, '{\"name\":\"main category 1\",\"show_in_mega_menu\":1,\"show_in_menu\":1,\"slug\":\"main-category-1\",\"status\":1,\"updated_at\":\"2020-11-24 06:30:40\",\"created_at\":\"2020-11-24 06:30:40\",\"id\":11}', '::1', '2020-11-24 01:00:40', '2020-11-24 01:00:40'),
(11, 'created', 12, 'App\\Models\\BookCategory', 1, '{\"name\":\"sub category 1\",\"show_in_mega_menu\":1,\"show_in_menu\":1,\"parent_category_id\":11,\"slug\":\"sub-category-1\",\"status\":1,\"updated_at\":\"2020-11-24 06:30:40\",\"created_at\":\"2020-11-24 06:30:40\",\"id\":12}', '::1', '2020-11-24 01:00:40', '2020-11-24 01:00:40'),
(12, 'updated', 3, 'App\\Models\\Order', 1, '{\"id\":3,\"invoice_no\":1,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":0,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":\"pay_GByrTPrMR26Eb2\",\"ip\":\"::1\",\"is_completed\":1,\"order_amount\":1207.0900000000001,\"user_agent\":null,\"total_book_amount\":null,\"payment_method\":null,\"payment_status\":null,\"order_date\":\"2020-11-22\",\"order_key\":\"crGzdfFJzYQl9sgQ6ysRZKiJppWuHu7bXWorX1Nt\",\"created_at\":\"2020-11-22 07:05:05\",\"updated_at\":\"2020-12-12 03:31:10\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null,\"order_item\":[{\"id\":3,\"quantity\":1,\"unit_price\":\"5.09\",\"price\":\"5.09\",\"gst_amount\":null,\"total_amount\":\"5.09\",\"cart_item_type\":\"1\",\"created_at\":\"2020-11-22 07:05:05\",\"updated_at\":\"2020-11-22 07:05:05\",\"deleted_at\":null,\"order_id\":3,\"book_id\":9,\"combo_offer_id\":null},{\"id\":4,\"quantity\":2,\"unit_price\":\"671.00\",\"price\":\"671.00\",\"gst_amount\":null,\"total_amount\":\"1342.00\",\"cart_item_type\":\"1\",\"created_at\":\"2020-11-22 08:36:51\",\"updated_at\":\"2020-11-22 08:36:51\",\"deleted_at\":null,\"order_id\":3,\"book_id\":8,\"combo_offer_id\":null},{\"id\":5,\"quantity\":1,\"unit_price\":\"531.00\",\"price\":\"531.00\",\"gst_amount\":null,\"total_amount\":\"531.00\",\"cart_item_type\":\"1\",\"created_at\":\"2020-12-12 03:29:40\",\"updated_at\":\"2020-12-12 03:29:40\",\"deleted_at\":null,\"order_id\":3,\"book_id\":12,\"combo_offer_id\":null}]}', '::1', '2020-12-11 22:01:11', '2020-12-11 22:01:11'),
(13, 'created', 4, 'App\\Models\\Order', NULL, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2021-06-21\",\"is_completed\":0,\"order_key\":\"CVnrfhsUSiNPYvIJOzs3jEP6wIB0leLH33xwkNJj\",\"ip\":\"127.0.0.1\",\"order_amount\":\"382.00\",\"updated_at\":\"2021-06-21 04:54:30\",\"created_at\":\"2021-06-21 04:54:30\",\"id\":4}', '127.0.0.1', '2021-06-20 23:24:30', '2021-06-20 23:24:30'),
(14, 'deleted', 4, 'App\\Models\\Order', 6, '{\"id\":4,\"invoice_no\":null,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":null,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":null,\"ip\":\"127.0.0.1\",\"is_completed\":0,\"order_amount\":\"382.00\",\"user_agent\":null,\"total_book_amount\":null,\"payment_method\":null,\"payment_status\":null,\"order_date\":\"2021-06-21\",\"order_key\":\"CVnrfhsUSiNPYvIJOzs3jEP6wIB0leLH33xwkNJj\",\"created_at\":\"2021-06-21 04:54:30\",\"updated_at\":\"2021-06-21 04:54:30\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null}', '127.0.0.1', '2021-06-21 06:59:45', '2021-06-21 06:59:45'),
(15, 'created', 5, 'App\\Models\\Order', 1, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2021-06-22\",\"is_completed\":0,\"order_key\":\"x2pnXifMmtO5lUjA74FDMbUAURR2WGZ7CGCLv8JE\",\"ip\":\"127.0.0.1\",\"order_amount\":\"671.00\",\"updated_at\":\"2021-06-22 04:32:30\",\"created_at\":\"2021-06-22 04:32:30\",\"id\":5}', '127.0.0.1', '2021-06-21 23:02:31', '2021-06-21 23:02:31'),
(16, 'updated', 5, 'App\\Models\\Order', 1, '{\"id\":5,\"invoice_no\":2,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":0,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":\"pay_HPypviRyyNVJsR\",\"ip\":\"127.0.0.1\",\"is_completed\":1,\"order_amount\":671,\"user_agent\":null,\"total_book_amount\":null,\"payment_method\":null,\"payment_status\":null,\"order_date\":\"2021-06-22\",\"order_key\":\"x2pnXifMmtO5lUjA74FDMbUAURR2WGZ7CGCLv8JE\",\"created_at\":\"2021-06-22 04:32:30\",\"updated_at\":\"2021-06-22 04:53:45\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null,\"order_item\":[{\"id\":10,\"quantity\":1,\"unit_price\":\"671.00\",\"price\":\"671.00\",\"gst_amount\":null,\"total_amount\":\"671.00\",\"cart_item_type\":\"1\",\"created_at\":\"2021-06-22 04:32:31\",\"updated_at\":\"2021-06-22 04:32:31\",\"deleted_at\":null,\"order_id\":5,\"book_id\":8,\"combo_offer_id\":null}]}', '127.0.0.1', '2021-06-21 23:23:45', '2021-06-21 23:23:45'),
(17, 'updated', 5, 'App\\Models\\Order', 1, '{\"id\":5,\"invoice_no\":3,\"invoice_prefix\":\"STHULA\",\"shipping_charge\":null,\"gst_amount\":0,\"coupon\":null,\"coupon_discount\":null,\"payment_reference\":\"pay_HPypviRyyNVJsR\",\"ip\":\"127.0.0.1\",\"is_completed\":1,\"order_amount\":671,\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36\",\"total_book_amount\":671,\"payment_method\":null,\"payment_status\":1,\"order_date\":\"2021-06-22\",\"order_key\":\"x2pnXifMmtO5lUjA74FDMbUAURR2WGZ7CGCLv8JE\",\"created_at\":\"2021-06-22 04:32:30\",\"updated_at\":\"2021-06-22 05:17:46\",\"deleted_at\":null,\"order_status_id\":1,\"address_id\":null,\"date_modified\":\"2021-06-22 05:17:46\",\"order_item\":[{\"id\":10,\"quantity\":1,\"unit_price\":\"671.00\",\"price\":\"671.00\",\"gst_amount\":null,\"total_amount\":\"671.00\",\"cart_item_type\":\"1\",\"created_at\":\"2021-06-22 04:32:31\",\"updated_at\":\"2021-06-22 04:32:31\",\"deleted_at\":null,\"order_id\":5,\"book_id\":8,\"combo_offer_id\":null}]}', '127.0.0.1', '2021-06-21 23:47:47', '2021-06-21 23:47:47'),
(18, 'created', 6, 'App\\Models\\Order', 1, '{\"order_status_id\":1,\"invoice_prefix\":\"STHULA\",\"order_date\":\"2021-06-22\",\"is_completed\":0,\"order_key\":\"3KFSE515eJ1DbKocenG8bMJ9lZcdWJ9qDeyzAci4\",\"ip\":\"127.0.0.1\",\"order_amount\":\"531.00\",\"updated_at\":\"2021-06-22 08:47:03\",\"created_at\":\"2021-06-22 08:47:03\",\"id\":6}', '127.0.0.1', '2021-06-22 03:17:03', '2021-06-22 03:17:03'),
(19, 'created', 1, 'App\\Models\\Address', 1, '{\"name\":\"Nell Battle\",\"address_1\":\"Reprehenderit incidi\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"sheohar\",\"pincode\":\"110044\",\"additional_note\":null,\"phone\":\"9013627321\",\"user_id\":1,\"created_at\":\"2021-06-22 09:12:04\",\"updated_at\":\"2021-06-22 09:12:04\",\"id\":1}', '127.0.0.1', '2021-06-22 03:42:04', '2021-06-22 03:42:04'),
(20, 'created', 2, 'App\\Models\\Address', 1, '{\"name\":\"Mechelle Benton\",\"address_1\":\"19 South New Court\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Ad mollit velit non \",\"pincode\":\"793243\",\"additional_note\":null,\"phone\":\"+1 (557) 562-4603\",\"landmark\":\"Unde earum assumenda\",\"user_id\":1,\"created_at\":\"2021-06-22 09:53:52\",\"updated_at\":\"2021-06-22 09:53:52\",\"id\":2}', '127.0.0.1', '2021-06-22 04:23:52', '2021-06-22 04:23:52'),
(21, 'created', 3, 'App\\Models\\Address', 1, '{\"name\":\"Mechelle Benton\",\"address_1\":\"19 South New Court\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Ad mollit velit non \",\"pincode\":\"793243\",\"additional_note\":null,\"phone\":\"+1 (557) 562-4603\",\"landmark\":\"Unde earum assumenda\",\"user_id\":1,\"created_at\":\"2021-06-22 09:54:10\",\"updated_at\":\"2021-06-22 09:54:10\",\"id\":3}', '127.0.0.1', '2021-06-22 04:24:10', '2021-06-22 04:24:10'),
(22, 'created', 4, 'App\\Models\\Address', 1, '{\"name\":\"Selma White\",\"address_1\":\"111 West First Road\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Minus quis sint reru\",\"pincode\":\"12\",\"additional_note\":null,\"phone\":\"+1 (454) 464-7854\",\"landmark\":\"Excepturi asperiores\",\"user_id\":1,\"created_at\":\"2021-06-22 09:56:28\",\"updated_at\":\"2021-06-22 09:56:28\",\"id\":4}', '127.0.0.1', '2021-06-22 04:26:28', '2021-06-22 04:26:28'),
(23, 'created', 5, 'App\\Models\\Address', 1, '{\"name\":\"Bertha Mcdaniel\",\"address_1\":\"43 Milton Drive\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Sit ipsam nisi esse \",\"pincode\":\"38\",\"additional_note\":null,\"phone\":\"+1 (813) 853-4705\",\"landmark\":\"Esse dolor velit t\",\"user_id\":1,\"created_at\":\"2021-06-22 09:57:09\",\"updated_at\":\"2021-06-22 09:57:09\",\"id\":5}', '127.0.0.1', '2021-06-22 04:27:09', '2021-06-22 04:27:09'),
(24, 'created', 6, 'App\\Models\\Address', 1, '{\"name\":\"Jenna Miranda\",\"address_1\":\"597 Nobel Parkway\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Consectetur voluptat\",\"pincode\":\"70\",\"additional_note\":null,\"phone\":\"+1 (266) 754-1682\",\"landmark\":\"Temporibus culpa sed\",\"user_id\":1,\"created_at\":\"2021-06-22 09:58:39\",\"updated_at\":\"2021-06-22 09:58:39\",\"id\":6}', '127.0.0.1', '2021-06-22 04:28:39', '2021-06-22 04:28:39'),
(25, 'deleted', 1, 'App\\Models\\Address', 1, '{\"id\":1,\"name\":\"Nell Battle\",\"phone\":\"9013627321\",\"alternate_phone\":null,\"address_1\":\"Reprehenderit incidi\",\"pincode\":110044,\"city\":\"sheohar\",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:12:04\",\"updated_at\":\"2021-06-22 10:20:17\",\"deleted_at\":\"2021-06-22 10:20:17\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":null}', '127.0.0.1', '2021-06-22 04:50:17', '2021-06-22 04:50:17'),
(26, 'deleted', 2, 'App\\Models\\Address', 1, '{\"id\":2,\"name\":\"Mechelle Benton\",\"phone\":\"+1 (557) 562-4603\",\"alternate_phone\":null,\"address_1\":\"19 South New Court\",\"pincode\":793243,\"city\":\"Ad mollit velit non \",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:53:52\",\"updated_at\":\"2021-06-22 10:21:36\",\"deleted_at\":\"2021-06-22 10:21:36\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":\"Unde earum assumenda\"}', '127.0.0.1', '2021-06-22 04:51:36', '2021-06-22 04:51:36'),
(27, 'deleted', 6, 'App\\Models\\Address', 1, '{\"id\":6,\"name\":\"Jenna Miranda\",\"phone\":\"+1 (266) 754-1682\",\"alternate_phone\":null,\"address_1\":\"597 Nobel Parkway\",\"pincode\":70,\"city\":\"Consectetur voluptat\",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:58:39\",\"updated_at\":\"2021-06-22 10:21:46\",\"deleted_at\":\"2021-06-22 10:21:46\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":\"Temporibus culpa sed\"}', '127.0.0.1', '2021-06-22 04:51:46', '2021-06-22 04:51:46'),
(28, 'deleted', 4, 'App\\Models\\Address', 1, '{\"id\":4,\"name\":\"Selma White\",\"phone\":\"+1 (454) 464-7854\",\"alternate_phone\":null,\"address_1\":\"111 West First Road\",\"pincode\":12,\"city\":\"Minus quis sint reru\",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:56:28\",\"updated_at\":\"2021-06-22 10:22:34\",\"deleted_at\":\"2021-06-22 10:22:34\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":\"Excepturi asperiores\"}', '127.0.0.1', '2021-06-22 04:52:34', '2021-06-22 04:52:34'),
(29, 'deleted', 3, 'App\\Models\\Address', 1, '{\"id\":3,\"name\":\"Mechelle Benton\",\"phone\":\"+1 (557) 562-4603\",\"alternate_phone\":null,\"address_1\":\"19 South New Court\",\"pincode\":793243,\"city\":\"Ad mollit velit non \",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:54:10\",\"updated_at\":\"2021-06-22 10:23:57\",\"deleted_at\":\"2021-06-22 10:23:57\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":\"Unde earum assumenda\"}', '127.0.0.1', '2021-06-22 04:53:57', '2021-06-22 04:53:57'),
(30, 'deleted', 5, 'App\\Models\\Address', 1, '{\"id\":5,\"name\":\"Bertha Mcdaniel\",\"phone\":\"+1 (813) 853-4705\",\"alternate_phone\":null,\"address_1\":\"43 Milton Drive\",\"pincode\":38,\"city\":\"Sit ipsam nisi esse \",\"additional_note\":null,\"address_2\":null,\"created_at\":\"2021-06-22 09:57:09\",\"updated_at\":\"2021-06-22 10:25:14\",\"deleted_at\":\"2021-06-22 10:25:14\",\"user_id\":1,\"country_id\":95,\"zone_id\":1,\"landmark\":\"Esse dolor velit t\"}', '127.0.0.1', '2021-06-22 04:55:14', '2021-06-22 04:55:14'),
(31, 'created', 7, 'App\\Models\\Address', 1, '{\"name\":\"Melinda Dodson\",\"address_1\":\"919 South New Boulevard\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Aut quis explicabo \",\"pincode\":\"45\",\"additional_note\":null,\"phone\":\"+1 (545) 939-2514\",\"landmark\":\"Cum incididunt sunt \",\"user_id\":1,\"created_at\":\"2021-06-22 10:25:42\",\"updated_at\":\"2021-06-22 10:25:42\",\"id\":7}', '127.0.0.1', '2021-06-22 04:55:43', '2021-06-22 04:55:43'),
(32, 'created', 8, 'App\\Models\\Address', 1, '{\"name\":\"Tatyana Dale\",\"address_1\":\"44 North Second Boulevard\",\"country_id\":\"95\",\"zone_id\":\"1\",\"city\":\"Repellendus Harum r\",\"pincode\":\"72\",\"additional_note\":null,\"phone\":\"+1 (323) 716-9461\",\"landmark\":\"Ut mollit reiciendis\",\"user_id\":1,\"created_at\":\"2021-06-22 10:26:00\",\"updated_at\":\"2021-06-22 10:26:00\",\"id\":8}', '127.0.0.1', '2021-06-22 04:56:00', '2021-06-22 04:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_author` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `about_author`, `short_caption`, `profile_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Prof. Ephraim Feest PhD', 'Quasi voluptas porro harum corporis. Voluptas autem ea itaque sed earum repellat. Quis placeat possimus natus nulla.', 'sit', 'consequuntur', 'est', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(2, 'Jacinto Krajcik', 'Eius eius accusamus optio sunt magni sunt fuga. Doloribus illo repudiandae ipsa molestiae consequatur molestiae minima. Animi maiores omnis recusandae deserunt voluptas vero.', 'magnam', 'iure', 'porro', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(3, 'Lesley Konopelski', 'Ratione tenetur quia est consequatur nobis eligendi. Nulla dolorum dolor rerum eveniet id. Veniam sit esse nihil. Laborum occaecati beatae illum assumenda.', 'magnam', 'molestias', 'a', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(4, 'Ivah Eichmann MD', 'Suscipit in dicta nostrum quos natus molestiae qui. Consequatur qui et fuga aspernatur est hic sint. Natus dolores quod at ut sit nihil. Exercitationem voluptate ut doloribus distinctio sit.', 'itaque', 'nulla', 'dolores', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(5, 'Jennings Barton', 'Minus quia voluptas velit quis accusantium excepturi. Ullam minima ea numquam ratione. Id quos voluptatem dolorem ut quia quisquam.', 'explicabo', 'aut', 'eaque', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(6, 'Mrs. Ellen Leannon', 'Consequatur assumenda nulla vel accusamus totam eius. Explicabo dignissimos delectus eveniet temporibus accusantium at. Soluta dolore non accusantium ad placeat.', 'error', 'ad', 'qui', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(7, 'Rhianna Blanda', 'Praesentium deserunt cupiditate ex praesentium rem. Doloribus consequatur recusandae accusamus id porro repellat. Possimus eum id hic molestias.', 'aliquam', 'asperiores', 'iste', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(8, 'Geoffrey Stoltenberg', 'Labore sit est voluptas numquam a itaque voluptatibus. Quasi ut id cumque. Ex enim aut ipsa voluptatum. Reiciendis consequatur cupiditate voluptates.', 'cum', 'dignissimos', 'quos', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(9, 'Barry Veum', 'Similique fugiat et neque et ad voluptas. Repellat quo odio natus. Eligendi iste sed consectetur harum. Odit totam dolorum alias commodi iste. Rerum in rem similique eveniet et voluptas.', 'suscipit', 'illo', 'accusantium', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(10, 'Jayden Jacobi', 'Dicta dicta et natus nostrum. Ratione quia culpa quo libero quis ipsam. Architecto ea est et deleniti ad expedita. Aspernatur error nulla id aut quae ad.', 'natus', 'sint', 'est', '2020-11-21 02:15:29', '2020-11-21 02:15:29', NULL),
(11, 'saif', NULL, NULL, NULL, '1', '2020-11-24 01:00:40', '2020-11-24 01:00:40', NULL),
(12, 'Garth Crane', 'Laboris suscipit qui', 'Provident ut qui pr', NULL, '1', '2021-06-23 03:57:55', '2021-06-23 03:57:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `available_currencies`
--

CREATE TABLE `available_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `available_currencies`
--

INSERT INTO `available_currencies` (`id`, `country_name`, `currency_symbol`, `short_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '95', '₹', 'INR', '1', NULL, '2020-11-21 09:16:57', NULL),
(2, '229', '$', 'USD', '1', NULL, '2020-11-21 09:16:52', NULL),
(3, '228', '€', 'EURO', '1', NULL, '2020-11-21 09:16:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bindings`
--

CREATE TABLE `bindings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bindings`
--

INSERT INTO `bindings` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Board Book', '1', NULL, NULL, NULL),
(2, 'Boxed Set', '1', NULL, NULL, NULL),
(3, 'Hardback', '1', NULL, NULL, NULL),
(4, 'Large Print', '1', NULL, NULL, NULL),
(5, 'Paperback', '1', NULL, NULL, NULL),
(6, 'Loose Leaf', '1', NULL, NULL, NULL),
(8, 'Boxed', '1', '2020-11-24 01:00:40', '2020-11-24 01:00:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binding_book`
--

CREATE TABLE `binding_book` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `binding_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binding_book`
--

INSERT INTO `binding_book` (`book_id`, `binding_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(3, 4),
(3, 5),
(4, 3),
(4, 5),
(5, 3),
(5, 6),
(6, 3),
(6, 6),
(7, 2),
(7, 4),
(8, 2),
(9, 2),
(9, 4),
(9, 6),
(10, 3),
(11, 1),
(11, 3),
(12, 3),
(13, 5),
(14, 2),
(15, 2),
(15, 3),
(15, 5),
(16, 2),
(17, 1),
(18, 2),
(18, 6),
(19, 2),
(20, 2),
(20, 5),
(21, 1),
(21, 4),
(22, 1),
(22, 2),
(22, 3),
(23, 5),
(23, 6),
(24, 1),
(24, 5),
(25, 2),
(25, 6),
(26, 5),
(27, 1),
(27, 3),
(27, 6),
(28, 1),
(28, 2),
(28, 3),
(29, 5),
(30, 6),
(31, 1),
(32, 4),
(33, 2),
(33, 5),
(33, 6),
(34, 2),
(34, 4),
(35, 1),
(35, 3),
(35, 4),
(36, 2),
(36, 5),
(37, 1),
(37, 2),
(37, 4),
(38, 1),
(38, 2),
(39, 3),
(39, 5),
(40, 6),
(41, 3),
(42, 1),
(43, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(46, 6),
(47, 3),
(47, 5),
(48, 2),
(48, 4),
(48, 5),
(49, 2),
(50, 3),
(50, 4),
(51, 1),
(51, 4),
(52, 4),
(53, 1),
(53, 6),
(54, 3),
(54, 4),
(54, 6),
(55, 2),
(55, 3),
(56, 4),
(56, 6),
(57, 6),
(58, 1),
(58, 5),
(59, 1),
(59, 3),
(59, 4),
(60, 4),
(60, 5),
(61, 1),
(62, 1),
(62, 2),
(62, 4),
(63, 1),
(63, 2),
(63, 6),
(64, 2),
(64, 3),
(65, 4),
(66, 2),
(66, 3),
(67, 2),
(67, 6),
(68, 4),
(68, 5),
(69, 3),
(69, 4),
(69, 6),
(70, 5),
(71, 1),
(71, 3),
(72, 1),
(72, 5),
(72, 6),
(73, 5),
(73, 6),
(74, 2),
(74, 3),
(74, 5),
(75, 2),
(76, 3),
(77, 4),
(78, 4),
(79, 5),
(79, 6),
(80, 3),
(80, 6),
(81, 2),
(81, 4),
(81, 5),
(82, 5),
(83, 3),
(83, 5),
(84, 1),
(85, 5),
(85, 6),
(86, 6),
(87, 2),
(87, 3),
(87, 4),
(88, 1),
(88, 3),
(88, 6),
(89, 1),
(90, 1),
(91, 1),
(91, 4),
(91, 5),
(92, 1),
(93, 6),
(94, 2),
(94, 3),
(94, 4),
(95, 2),
(95, 4),
(95, 5),
(96, 4),
(96, 6),
(97, 5),
(98, 3),
(98, 5),
(99, 1),
(99, 2),
(100, 4),
(101, 1),
(102, 8),
(102, 4),
(103, 8),
(103, 4),
(104, 8),
(104, 4),
(105, 8),
(105, 4),
(106, 8),
(106, 4),
(107, 8),
(107, 4),
(108, 8),
(108, 4),
(109, 8),
(109, 4),
(110, 8),
(110, 4),
(111, 8),
(111, 4);

-- --------------------------------------------------------

--
-- Table structure for table `block_offers`
--

CREATE TABLE `block_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `general_discount` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_offers`
--

INSERT INTO `block_offers` (`id`, `title`, `offer_type`, `general_discount`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nonfiction sale upto 10% off', '1', 10, '1', NULL, NULL, NULL),
(2, 'Christmas Sale upto 20% off', '1', 20, '1', NULL, NULL, NULL),
(3, 'Sthual Special Sale upto 40% off', '1', 40, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_view` int(11) DEFAULT NULL,
  `no_of_likes` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `slug`, `meta_keyword`, `meta_description`, `status`, `no_of_view`, `no_of_likes`, `created_at`, `updated_at`, `deleted_at`, `blog_category_id`) VALUES
(1, 'Adipisci sunt minima', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/blogImages/JR6NcCbupWxppj3B3VxKbJUQjFN4qYCeAU2Bcph9.jpg', 'Adipisicing libero d', 'placeat-pariatur-c', 'Repudiandae eveniet', 'Ut ex accusamus labo', '0', NULL, NULL, '2021-06-23 04:50:17', '2021-06-24 00:57:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `slug`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Repudiandae culpa do', 'expedita-aut-ipsum', 'Dignissimos consecte', 'Est in occaecat repr', '1', '2021-06-23 04:45:33', '2021-06-23 04:45:33', NULL),
(2, 'Ea iusto non volupta', 'aliquip-nobis-anim-e', 'Veniam pariatur Re', 'Dolores temporibus u', '0', '2021-06-23 04:45:46', '2021-06-23 04:46:40', NULL),
(3, 'Ducimus qui consequ', 'consequuntur-nulla-i', 'Rem consequat Autem', 'Odio officiis nihil', '0', '2021-06-23 04:46:44', '2021-06-23 04:46:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrp` decimal(15,2) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_pages` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_discount` decimal(15,2) DEFAULT NULL,
  `no_of_qty_for_discount` int(11) DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn_30` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `publication_city_or_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handpicked` tinyint(1) DEFAULT 0,
  `new_arrival` tinyint(1) DEFAULT 0,
  `best_sellers` tinyint(1) DEFAULT 0,
  `all_time_classic` tinyint(1) DEFAULT 0,
  `no_of_viewed` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_authors_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stock_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `mrp`, `price`, `discount`, `isbn`, `book_type`, `description`, `sku`, `weight`, `dimensions`, `no_of_pages`, `status`, `slug`, `meta_keywords`, `meta_description`, `coupon_discount`, `no_of_qty_for_discount`, `coupon_code`, `isbn_30`, `isbn_10`, `publication_date`, `publication_city_or_country`, `handpicked`, `new_arrival`, `best_sellers`, `all_time_classic`, `no_of_viewed`, `created_at`, `updated_at`, `deleted_at`, `book_authors_id`, `publisher_id`, `stock_status_id`, `language_id`, `category_id`, `sub_category_id`, `condition`, `quantity`) VALUES
(1, 'Prof. Mariana Casper PhD', 'https://via.placeholder.com/250x365', '565.00', '747.00', '18', 'qui', '2', 'Quick, now!\' And Alice was beginning to grow here,\' said the Queen was silent. The Dormouse had closed its eyes again, to see a little bottle that stood near the King said to herself in the air. She did it at last, more calmly, though still sobbing a little bird as soon as there was a dead silence instantly, and Alice could hardly hear the very tones of her skirt, upsetting all the right size again; and the happy summer days. THE.', 'ex', '6', 'ipsum', 891, '0', 'veniam-consectetur-earum-ut-perferendis-quos', 'non', 'molestiae', '254077.97', 0, 'repudiandae', 'cupiditate', 'veniam', '2020-11-21', 'quo', 0, 1, 0, 0, 731748287, '2020-11-21 02:36:21', '2021-06-21 00:45:05', NULL, 4, 6, 2, 1, 5, 5, NULL, NULL),
(2, 'Maudie Dicki', 'https://via.placeholder.com/250x365', '883.00', '242.00', '11', 'tempora', '1', 'I!\' said the Dodo could not help thinking there MUST be more to be sure! However, everything is queer to-day.\' Just then she looked up, and began to feel a little nervous about it just missed her. Alice caught the flamingo and brought it back, the fight was over, and she tried another question. \'What sort of way, \'Do cats eat bats? Do cats eat bats, I wonder?\' And here poor Alice in a great hurry. \'You did!\' said the Duchess: you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen.', 'consequatur', '4', 'aut', 3684, '0', 'quod-aut-error-sed-molestiae', 'aut', 'deserunt', '110464.84', 2952937, 'veritatis', 'et', 'nisi', '2020-11-21', 'voluptatem', 0, 0, 1, 0, 1025, '2020-11-21 02:36:22', '2021-06-21 00:41:55', NULL, 4, 7, 1, 1, 4, 4, NULL, NULL),
(3, 'Delpha Jones', 'https://via.placeholder.com/250x365', '871.00', '727.00', '27', 'nihil', '2', 'Hatter: \'let\'s all move one place on.\' He moved on as he spoke. \'A cat may look at me like that!\' \'I couldn\'t afford to learn it.\' said the Mock Turtle. So she sat on, with closed eyes, and half believed herself in the window, I only wish people knew that: then they wouldn\'t be so easily offended!\' \'You\'ll get used up.\' \'But what did the archbishop find?\' The Mouse gave a little sharp bark just over her head to keep herself from being broken. She hastily put down the chimney?--Nay, I shan\'t!.', 'accusantium', '10', 'vel', 66109, '1', 'necessitatibus-fugit-ipsam-dolor-nam-dicta-veniam-cumque', 'non', 'rerum', '6024.58', 61530, 'dolorum', 'exercitationem', 'vitae', '2020-11-21', 'totam', 1, 0, 1, 0, 259403, '2020-11-21 02:36:22', '2020-12-15 00:56:31', NULL, 1, 1, 1, 2, 4, 5, NULL, NULL),
(4, 'Saige Davis', 'https://via.placeholder.com/250x365', '817.00', '612.00', '9', 'ducimus', '2', 'King say in a hoarse growl, \'the world would go anywhere without a grin,\' thought Alice; \'but a grin without a great hurry to change the subject of conversation. While she was quite pale (with passion, Alice thought), and it was done. They had not long to doubt, for the moment she felt a violent blow underneath her chin: it had struck her foot! She was close behind her, listening: so she set to work throwing everything within her reach at the top of her head was so much at first, the two sides.', 'rerum', '5', 'excepturi', 333242, '0', 'omnis-rerum-ipsam-accusantium-nihil', 'odio', 'minima', '18.00', 418, 'repudiandae', 'reiciendis', 'hic', '2020-11-21', 'voluptatibus', 0, 0, 0, 0, 7, '2020-11-21 02:36:22', '2021-06-21 00:44:54', NULL, 10, 3, 1, 1, 3, 1, NULL, NULL),
(5, 'Sammie Jacobi', 'https://via.placeholder.com/250x365', '284.00', '169.00', '2', 'voluptas', '1', 'Alice watched the Queen was close behind her, listening: so she waited. The Gryphon lifted up both its paws in surprise. \'What! Never heard of one,\' said Alice. \'Who\'s making personal remarks now?\' the Hatter with a large fan in the last words out loud, and the Queen said severely \'Who is this?\' She said it to her in such a subject! Our family always HATED cats: nasty, low, vulgar things! Don\'t let him know she liked them best, For this must ever be A secret, kept from all the unjust things--\'.', 'consequatur', '2', 'maxime', 75, '1', 'rerum-nisi-unde-sint-sit-esse-error-repellat-commodi', 'minus', 'aut', '3083.93', 4494306, 'officiis', 'nostrum', 'neque', '2020-11-21', 'rem', 1, 1, 0, 1, 6864444, '2020-11-21 02:36:22', '2021-06-24 04:01:13', NULL, 9, 8, 1, 2, 3, 4, NULL, NULL),
(6, 'Clarissa Lakin', 'https://via.placeholder.com/250x365', '261.00', '102.00', '26', 'et', '2', 'Alice\'s, and they can\'t prove I did: there\'s no use in knocking,\' said the Mock Turtle to sing you a present of everything I\'ve said as yet.\' \'A cheap sort of lullaby to it as well as I was a dead silence instantly, and Alice was very nearly in the kitchen. \'When I\'M a Duchess,\' she said to herself \'This is Bill,\' she gave her one, they gave him two, You gave us three or more; They all sat down and began an account of the house opened, and a large fan in the shade: however, the moment she.', 'qui', '5', 'omnis', 59, '0', 'vel-iste-voluptas-deleniti-omnis-quaerat', 'placeat', 'mollitia', '36857.15', 859, 'dolorum', 'culpa', 'eveniet', '2020-11-21', 'consectetur', 1, 1, 1, 1, 33, '2020-11-21 02:36:22', '2020-11-21 02:36:22', NULL, 5, 1, 2, 2, 2, 1, NULL, NULL),
(7, 'Aiyana Roberts PhD', 'https://via.placeholder.com/250x365', '339.00', '376.00', '32', 'qui', '2', 'But here, to Alice\'s side as she went hunting about, and make out which were the two creatures, who had been to the table for it, while the rest waited in silence. Alice was so long since she had not gone far before they saw Alice coming. \'There\'s PLENTY of room!\' said Alice to herself, \'Why, they\'re only a pack of cards!\' At this moment the King, \'and don\'t be particular--Here, Bill! catch hold of anything, but she felt unhappy. \'It was the cat.) \'I hope they\'ll remember her saucer of milk at.', 'modi', '4', 'aut', 984334026, '0', 'sunt-vel-earum-reiciendis-et-et', 'minus', 'et', '8.25', 199, 'voluptatem', 'dicta', 'et', '2020-11-21', 'praesentium', 1, 0, 1, 0, 9, '2020-11-21 02:36:22', '2020-11-21 02:36:22', NULL, 1, 7, 2, 1, 3, 2, NULL, NULL),
(8, 'Floyd Toy', 'https://via.placeholder.com/250x365', '91.00', '671.00', '18', 'tempore', '2', 'At this moment Five, who had been broken to pieces. \'Please, then,\' said Alice, always ready to make it stop. \'Well, I\'d hardly finished the guinea-pigs!\' thought Alice. \'I\'m glad they don\'t give birthday presents like that!\' But she waited for a minute or two, which gave the Pigeon went on, turning to the law, And argued each case with my wife; And the Gryphon in an offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you, will you, won\'t you, will you join.', 'veniam', '4', 'unde', 477486995, '1', 'aspernatur-quidem-aut-doloremque', 'omnis', 'saepe', '4372.63', 5794309, 'qui', 'est', 'dolores', '2020-11-21', 'quo', 1, 0, 0, 0, 142790, '2020-11-21 02:36:23', '2021-06-24 05:18:16', NULL, 7, 10, 3, 1, 3, 4, NULL, NULL),
(9, 'Mr. Constantin Hudson IV', 'https://via.placeholder.com/250x365', '881.00', '356.00', '24', 'perferendis', '1', 'Seven flung down his cheeks, he went on, \'What\'s your name, child?\' \'My name is Alice, so please your Majesty,\' he began. \'You\'re a very little use, as it can\'t possibly make me grow smaller, I suppose.\' So she began shrinking directly. As soon as she could remember them, all these strange Adventures of hers would, in the long hall, and wander about among those beds of bright flowers and the words did not venture to say when I breathe\"!\' \'It IS a long tail, certainly,\' said Alice a good many.', 'magni', '6', 'voluptas', 27, '1', 'sapiente-eaque-explicabo-nobis-nulla', 'nostrum', 'doloribus', '27.85', 2, 'impedit', 'tenetur', 'voluptatem', '2020-11-21', 'ut', 0, 1, 0, 1, 3659526, '2020-11-21 02:36:23', '2022-05-21 09:41:30', NULL, 3, 9, 1, 2, 2, 3, NULL, NULL),
(10, 'Vilma Bogan V', 'https://via.placeholder.com/250x365', '239.00', '538.00', '11', 'nulla', '2', 'It did so indeed, and much sooner than she had found the fan and gloves, and, as there seemed to have lessons to learn! Oh, I shouldn\'t want YOURS: I don\'t care which happens!\' She ate a little house in it about four feet high. \'I wish the creatures argue. It\'s enough to try the patience of an oyster!\' \'I wish you would have done just as if she meant to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'And ever since that,\' the Hatter with a yelp of delight, which changed into.', 'non', '2', 'aliquid', 2, '1', 'fugiat-corporis-laboriosam-eius-et-sunt-neque-voluptatum', 'ratione', 'earum', '64618.01', 3, 'rerum', 'veniam', 'mollitia', '2020-11-21', 'adipisci', 0, 0, 0, 0, 4834, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 3, 2, 3, 2, 1, 4, NULL, NULL),
(11, 'Saige Hudson', 'https://via.placeholder.com/250x365', '132.00', '675.00', '23', 'sunt', '2', 'Mock Turtle a little way forwards each time and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, and the Panther were sharing a pie--\' [later editions continued as follows When the pie was all dark overhead; before her was another long passage, and the March Hare moved into the sea, though you mayn\'t believe it--\' \'I never heard of uglifying!\' it exclaimed. \'You know what they\'re like.\' \'I believe so,\' Alice replied thoughtfully. \'They have their tails in.', 'eos', '7', 'voluptas', 95, '0', 'vitae-sit-illum-itaque-nobis-doloribus', 'unde', 'praesentium', '167820949.46', 10960065, 'quia', 'sequi', 'et', '2020-11-21', 'rerum', 0, 1, 1, 1, 66, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 8, 9, 3, 1, 2, 2, NULL, NULL),
(12, 'Hayley Stiedemann', 'https://via.placeholder.com/250x365', '268.00', '531.00', '43', 'expedita', '1', 'Alice, \'Have you guessed the riddle yet?\' the Hatter was out of the suppressed guinea-pigs, filled the air, and came back again. \'Keep your temper,\' said the Duchess, the Duchess! Oh! won\'t she be savage if I\'ve been changed several times since then.\' \'What do you know about this business?\' the King exclaimed, turning to Alice, \'Have you seen the Mock Turtle, \'but if they do, why then they\'re a kind of sob, \'I\'ve tried every way, and nothing seems to suit them!\' \'I haven\'t opened it yet,\' said.', 'possimus', '3', 'facere', 192683, '1', 'aliquam-qui-iusto-odit-consequatur-incidunt-ipsum-est', 'autem', 'commodi', '333866.40', 386, 'cupiditate', 'fugit', 'distinctio', '2020-11-21', 'omnis', 1, 1, 1, 1, 8200, '2020-11-21 02:36:23', '2021-06-23 04:06:45', NULL, 6, 2, 2, 2, 3, 1, NULL, NULL),
(13, 'Prof. Lorenza Lind II', 'https://via.placeholder.com/250x365', '688.00', '526.00', '46', 'error', '1', 'It means much the same age as herself, to see if she had a wink of sleep these three little sisters,\' the Dormouse denied nothing, being fast asleep. \'After that,\' continued the King. (The jury all brightened up again.) \'Please your Majesty,\' said the Mock Turtle. \'No, no! The adventures first,\' said the Footman, \'and that for two reasons. First, because I\'m on the top with its legs hanging down, but generally, just as she could not stand, and she trembled till she had forgotten the little.', 'autem', '4', 'facilis', 34, '1', 'earum-minus-velit-est', 'asperiores', 'voluptatem', '295.43', 27730, 'et', 'occaecati', 'et', '2020-11-21', 'et', 0, 0, 0, 1, 5, '2020-11-21 02:36:23', '2021-06-21 05:53:15', NULL, 8, 2, 2, 1, 5, 2, NULL, NULL),
(14, 'Prof. Helene Kovacek IV', 'https://via.placeholder.com/250x365', '401.00', '755.00', '40', 'nisi', '2', 'Hatter; \'so I can\'t tell you more than nine feet high. \'Whoever lives there,\' thought Alice, \'as all the jurymen on to himself in an angry voice--the Rabbit\'s--\'Pat! Pat! Where are you?\' And then a row of lodging houses, and behind them a new idea to Alice, and she soon found an opportunity of taking it away. She did not like to have finished,\' said the Gryphon, and the reason is--\' here the conversation a little. \'\'Tis so,\' said the Dormouse, after thinking a minute or two, which gave the.', 'sint', '9', 'inventore', 34, '0', 'iure-eius-amet-at-dolor-similique-assumenda', 'praesentium', 'officia', '3359.77', 197470, 'qui', 'a', 'necessitatibus', '2020-11-21', 'sunt', 1, 0, 0, 1, 7, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 2, 4, 1, 1, 4, 1, NULL, NULL),
(15, 'Miss Betsy Berge', 'https://via.placeholder.com/250x365', '81.00', '559.00', '14', 'incidunt', '1', 'King. On this the whole thing very absurd, but they began running when they met in the middle. Alice kept her waiting!\' Alice felt a little girl,\' said Alice, who was talking. \'How CAN I have dropped them, I wonder?\' As she said to herself, \'after such a nice soft thing to nurse--and she\'s such a new idea to Alice, flinging the baby joined):-- \'Wow! wow! wow!\' \'Here! you may stand down,\' continued the Pigeon, raising its voice to its children, \'Come away, my dears! It\'s high time you were down.', 'incidunt', '1', 'in', 4020, '1', 'dolor-ratione-sunt-quae-cum', 'officiis', 'necessitatibus', '68.65', 675561, 'rerum', 'fugit', 'doloribus', '2020-11-21', 'blanditiis', 0, 1, 1, 1, 350, '2020-11-21 02:36:23', '2021-06-21 05:53:16', NULL, 10, 8, 1, 2, 4, 5, NULL, NULL),
(16, 'Laurianne Ortiz', 'https://via.placeholder.com/250x365', '567.00', '526.00', '11', 'quo', '1', 'How I wonder if I\'ve been changed for Mabel! I\'ll try if I can guess that,\' she added in an offended tone. And the muscular strength, which it gave to my boy, I beat him when he finds out who was a good opportunity for showing off a head could be beheaded, and that you had been (Before she had gone through that day. \'No, no!\' said the Caterpillar. \'Well, perhaps you haven\'t found it advisable--\"\' \'Found WHAT?\' said the Gryphon, \'that they WOULD put their heads down! I am in the world go.', 'quidem', '9', 'laboriosam', 9, '0', 'eligendi-qui-nulla-exercitationem-ad-deserunt-adipisci-dignissimos', 'excepturi', 'molestias', '0.00', 3, 'et', 'ea', 'expedita', '2020-11-21', 'impedit', 0, 0, 1, 0, 7632, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 2, 8, 2, 1, 5, 3, NULL, NULL),
(17, 'Jasen Cassin Jr.', 'https://via.placeholder.com/250x365', '974.00', '182.00', '7', 'sunt', '1', 'King, \'that saves a world of trouble, you know, and he hurried off. Alice thought she might find another key on it, or at least one of its little eyes, but it did not like the look of the house, and the other side, the puppy jumped into the sea, though you mayn\'t believe it--\' \'I never said I could let you out, you know.\' He was looking at everything about her, to pass away the moment she appeared on the end of the March Hare said to live. \'I\'ve seen hatters before,\' she said to a mouse: she.', 'consequuntur', '5', 'cumque', 541, '0', 'porro-aliquid-alias-velit-in-harum-aspernatur-iste', 'earum', 'qui', '148038437.93', 633, 'omnis', 'animi', 'voluptatem', '2020-11-21', 'ullam', 1, 1, 1, 1, 3379126, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 6, 7, 1, 1, 5, 4, NULL, NULL),
(18, 'Janae Flatley', 'https://via.placeholder.com/250x365', '244.00', '63.00', '31', 'tempore', '1', 'Mouse. \'Of course,\' the Mock Turtle, and said \'No, never\') \'--so you can find out the answer to it?\' said the Caterpillar. \'Well, I\'ve tried hedges,\' the Pigeon in a ring, and begged the Mouse in the sky. Twinkle, twinkle--\"\' Here the Queen was close behind her, listening: so she felt that she had never been in a low voice, \'Your Majesty must cross-examine the next verse,\' the Gryphon interrupted in a languid, sleepy voice. \'Who are YOU?\' said the youth, \'and your jaws are too weak For.', 'aliquam', '5', 'itaque', 238073, '0', 'impedit-ut-repellat-voluptate-nisi', 'enim', 'repellendus', '361.00', 855, 'alias', 'maiores', 'ut', '2020-11-21', 'voluptate', 0, 0, 1, 0, 488600, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 6, 5, 1, 1, 3, 5, NULL, NULL),
(19, 'Bria Labadie', 'https://via.placeholder.com/250x365', '38.00', '260.00', '38', 'labore', '2', 'Queen: so she felt certain it must be a grin, and she hurried out of the doors of the ground, Alice soon began talking to herself, rather sharply; \'I advise you to set about it; if I\'m not the smallest idea how to spell \'stupid,\' and that if you only kept on good terms with him, he\'d do almost anything you liked with the Queen,\' and she went on. \'We had the door with his nose Trims his belt and his friends shared their never-ending meal, and the pair of white kid gloves: she took courage, and.', 'deserunt', '1', 'necessitatibus', 107, '0', 'minima-exercitationem-distinctio-dolorem-est', 'sit', 'suscipit', '2.80', 96394, 'et', 'iusto', 'voluptatem', '2020-11-21', 'enim', 1, 0, 1, 1, 1602, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 9, 5, 3, 2, 1, 4, NULL, NULL),
(20, 'Ulises Ernser', 'https://via.placeholder.com/250x365', '524.00', '345.00', '38', 'odit', '2', 'I\'M a Duchess,\' she said to herself, and began to repeat it, but her head was so small as this is May it won\'t be raving mad after all! I almost wish I hadn\'t gone down that rabbit-hole--and yet--and yet--it\'s rather curious, you know, and he wasn\'t one?\' Alice asked. \'We called him Tortoise because he was gone, and the little golden key, and Alice\'s first thought was that you couldn\'t cut off a head unless there was a most extraordinary noise going on between the executioner, the King, \'that.', 'consequatur', '10', 'commodi', 399, '1', 'aut-qui-tenetur-fugiat', 'suscipit', 'sint', '274.85', 433821, 'atque', 'deserunt', 'exercitationem', '2020-11-21', 'unde', 0, 1, 1, 0, 777, '2020-11-21 02:36:23', '2020-11-21 02:36:23', NULL, 8, 5, 2, 1, 4, 1, NULL, NULL),
(21, 'Bethel Prosacco', 'https://via.placeholder.com/250x365', '153.00', '389.00', '4', 'et', '1', 'Alice, who always took a great interest in questions of eating and drinking. \'They lived on treacle,\' said the Gryphon. \'We can do without lobsters, you know. Which shall sing?\' \'Oh, YOU sing,\' said the King. \'Nothing whatever,\' said Alice. \'Of course not,\' Alice cautiously replied, not feeling at all know whether it would be grand, certainly,\' said Alice, timidly; \'some of the month is it?\' \'Why,\' said the Mock Turtle replied; \'and then the puppy began a series of short charges at the time he.', 'nam', '7', 'quisquam', 92272, '1', 'sunt-aut-ea-doloribus-sed-et-dolore-aspernatur', 'ab', 'nostrum', '2.00', 511750606, 'blanditiis', 'explicabo', 'molestias', '2020-11-21', 'facere', 1, 0, 0, 0, 9, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 6, 5, 1, 1, 2, 2, NULL, NULL),
(22, 'Prof. Stan Kovacek MD', 'https://via.placeholder.com/250x365', '367.00', '20.00', '29', 'debitis', '2', 'White Rabbit; \'in fact, there\'s nothing written on the Duchess\'s voice died away, even in the kitchen. \'When I\'M a Duchess,\' she said aloud. \'I shall be punished for it flashed across her mind that she wasn\'t a really good school,\' said the Mock Turtle in the long hall, and wander about among those beds of bright flowers and those cool fountains, but she felt sure it would be offended again. \'Mine is a long breath, and said anxiously to herself, \'because of his head. But at any rate, there\'s.', 'aspernatur', '4', 'repellendus', 116388, '1', 'corporis-recusandae-et-dolores-adipisci-error', 'ullam', 'dignissimos', '181.20', 7, 'veniam', 'non', 'quam', '2020-11-21', 'dolorum', 1, 0, 1, 1, 57, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 5, 6, 1, 2, 5, 2, NULL, NULL),
(23, 'Dr. Keaton Keeling', 'https://via.placeholder.com/250x365', '271.00', '619.00', '49', 'et', '2', 'Alice after it, never once considering how in the last few minutes, and she had expected: before she made out that part.\' \'Well, at any rate it would not open any of them. \'I\'m sure I\'m not particular as to bring but one; Bill\'s got to the seaside once in a trembling voice to its children, \'Come away, my dears! It\'s high time to begin with.\' \'A barrowful of WHAT?\' thought Alice to find that her neck kept getting entangled among the party. Some of the what?\' said the Dormouse, without.', 'distinctio', '2', 'necessitatibus', 52499, '1', 'iusto-distinctio-soluta-id-aperiam-soluta', 'suscipit', 'qui', '4.82', 45, 'quia', 'atque', 'cupiditate', '2020-11-21', 'qui', 1, 0, 1, 0, 5496414, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 2, 10, 2, 2, 5, 4, NULL, NULL),
(24, 'Vito Schoen Jr.', 'https://via.placeholder.com/250x365', '29.00', '192.00', '24', 'magnam', '1', 'I must be removed,\' said the Mock Turtle. \'No, no! The adventures first,\' said the Duchess. An invitation from the Queen said--\' \'Get to your tea; it\'s getting late.\' So Alice got up this morning, but I shall have to ask the question?\' said the King. The next thing was waving its right paw round, \'lives a Hatter: and in THAT direction,\' the Cat went on, taking first one side and up the chimney, has he?\' said Alice angrily. \'It wasn\'t very civil of you to offer it,\' said the Mock Turtle: \'nine.', 'nihil', '1', 'distinctio', 5483, '1', 'dolor-soluta-in-reiciendis-in-molestiae-veniam', 'reiciendis', 'quia', '53221.13', 5040, 'minima', 'eum', 'et', '2020-11-21', 'officiis', 1, 0, 0, 0, 0, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 6, 6, 3, 1, 1, 2, NULL, NULL),
(25, 'Leopold Prohaska', 'https://via.placeholder.com/250x365', '541.00', '214.00', '21', 'labore', '2', 'Mock Turtle said: \'no wise fish would go anywhere without a grin,\' thought Alice; \'I daresay it\'s a French mouse, come over with diamonds, and walked off; the Dormouse sulkily remarked, \'If you please, sir--\' The Rabbit started violently, dropped the white kid gloves, and was surprised to find herself still in existence; \'and now for the moment she appeared; but she ran out of its little eyes, but it was quite pale (with passion, Alice thought), and it said in a large fan in the sea, some.', 'in', '8', 'rerum', 45, '0', 'assumenda-ut-nemo-et-eius-aliquid-consequatur', 'voluptatum', 'temporibus', '412077.15', 8, 'sed', 'natus', 'qui', '2020-11-21', 'iure', 0, 1, 1, 0, 56707949, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 3, 5, 3, 2, 1, 4, NULL, NULL),
(26, 'Mr. Dustin Marvin', 'https://via.placeholder.com/250x365', '32.00', '44.00', '11', 'necessitatibus', '1', 'Cat again, sitting on the look-out for serpents night and day! Why, I haven\'t had a VERY unpleasant state of mind, she turned the corner, but the tops of the wood for fear of killing somebody, so managed to swallow a morsel of the shelves as she swam nearer to watch them, and then treading on her face like the three gardeners at it, busily painting them red. Alice thought she might as well say that \"I see what was on the hearth and grinning from ear to ear. \'Please would you tell me,\' said.', 'eaque', '1', 'qui', 1356, '0', 'qui-minima-voluptatem-perspiciatis-et-minima-ea-numquam', 'ut', 'eius', '8585719.45', 93, 'enim', 'consequatur', 'sed', '2020-11-21', 'magni', 1, 0, 0, 0, 5, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 8, 10, 3, 1, 5, 1, NULL, NULL),
(27, 'Evan Labadie', 'https://via.placeholder.com/250x365', '410.00', '744.00', '47', 'sunt', '1', 'Mouse, who seemed ready to agree to everything that was trickling down his face, as long as I used--and I don\'t like the wind, and the other was sitting on the bank, and of having the sentence first!\' \'Hold your tongue!\' said the King, \'that only makes the matter with it. There could be no chance of her voice. Nobody moved. \'Who cares for fish, Game, or any other dish? Who would not give all else for two reasons. First, because I\'m on the other side. The further off from England the nearer is.', 'quasi', '2', 'laudantium', 3671170, '1', 'veniam-sapiente-voluptatem-suscipit-dolor-et-praesentium', 'ab', 'odit', '432054957.31', 248418287, 'iure', 'nulla', 'porro', '2020-11-21', 'quam', 1, 0, 1, 0, 5206157, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 5, 6, 2, 1, 5, 5, NULL, NULL),
(28, 'Ms. Bernadette Ankunding Jr.', 'https://via.placeholder.com/250x365', '592.00', '519.00', '3', 'quo', '2', 'Gryphon, lying fast asleep in the world she was now only ten inches high, and her eyes immediately met those of a feather flock together.\"\' \'Only mustard isn\'t a letter, after all: it\'s a set of verses.\' \'Are they in the kitchen that did not notice this question, but hurriedly went on, \'What\'s your name, child?\' \'My name is Alice, so please your Majesty!\' the Duchess was sitting between them, fast asleep, and the whole party swam to the Gryphon. \'Of course,\' the Gryphon added \'Come, let\'s try.', 'laudantium', '10', 'dolorem', 47, '1', 'non-quo-totam-nihil-vel-nesciunt-iusto', 'quam', 'sed', '752.79', 67, 'sunt', 'ducimus', 'quos', '2020-11-21', 'et', 1, 1, 1, 0, 702003711, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 1, 9, 1, 2, 5, 5, NULL, NULL),
(29, 'Cade Langosh', 'https://via.placeholder.com/250x365', '587.00', '491.00', '30', 'et', '2', 'Alice, and she trembled till she was small enough to get dry again: they had at the end of trials, \"There was some attempts at applause, which was full of soup. \'There\'s certainly too much overcome to do with you. Mind now!\' The poor little thing sat down a large kitchen, which was a little startled by seeing the Cheshire Cat sitting on a little ledge of rock, and, as she went back to yesterday, because I was sent for.\' \'You ought to eat or drink anything; so I\'ll just see what was going to.', 'magnam', '10', 'ea', 82367, '0', 'est-pariatur-voluptates-minus-dolorum-sed-ut-omnis', 'dolores', 'commodi', '1.97', 11059, 'quis', 'deleniti', 'quia', '2020-11-21', 'et', 1, 1, 1, 0, 25119015, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 3, 8, 2, 1, 2, 1, NULL, NULL),
(30, 'Leila Yost', 'https://via.placeholder.com/250x365', '486.00', '322.00', '37', 'praesentium', '1', 'Caterpillar; and it was good manners for her to carry it further. So she went on: \'But why did they draw?\' said Alice, \'how am I to get to,\' said the voice. \'Fetch me my gloves this moment!\' Then came a little way forwards each time and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, was the first day,\' said the King. \'When did you begin?\' The Hatter opened his eyes very wide on hearing this; but all he SAID was, \'Why is a raven like a telescope.\' And so.', 'aut', '6', 'accusantium', 760297, '1', 'excepturi-eos-nostrum-consequatur-illo-earum-quibusdam-minus', 'perferendis', 'sed', '466516.00', 98, 'iusto', 'praesentium', 'voluptas', '2020-11-21', 'nesciunt', 1, 1, 0, 0, 5156, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 3, 2, 2, 1, 5, 2, NULL, NULL),
(31, 'Prof. Marlon Barrows DVM', 'https://via.placeholder.com/250x365', '233.00', '169.00', '20', 'corrupti', '1', 'How brave they\'ll all think me for a minute, while Alice thought this a very difficult question. However, at last turned sulky, and would only say, \'I am older than you, and must know better\'; and this he handed over to herself, for this curious child was very deep, or she should push the matter on, What would become of me? They\'re dreadfully fond of beheading people here; the great puzzle!\' And she began again. \'I should like to show you! A little bright-eyed terrier, you know, this sort of.', 'dolores', '7', 'debitis', 543261, '1', 'et-nihil-explicabo-sint-ut', 'quisquam', 'enim', '6.02', 6413, 'et', 'non', 'architecto', '2020-11-21', 'provident', 0, 0, 0, 1, 181, '2020-11-21 02:36:24', '2020-11-21 02:36:24', NULL, 8, 8, 1, 1, 2, 5, NULL, NULL),
(32, 'Prof. Judy Stroman Sr.', 'https://via.placeholder.com/250x365', '976.00', '861.00', '6', 'voluptatem', '2', 'Queen, and Alice thought she might find another key on it, (\'which certainly was not going to remark myself.\' \'Have you guessed the riddle yet?\' the Hatter grumbled: \'you shouldn\'t have put it right; \'not that it was YOUR table,\' said Alice; \'I can\'t remember things as I tell you!\' said Alice. \'Off with his head!\' or \'Off with her head!\' the Queen in front of them, and all the right house, because the Duchess sneezed occasionally; and as it was perfectly round, she found herself at last it.', 'amet', '4', 'dolorem', 1239233, '1', 'corrupti-quos-quod-iure-ut-quo-quod', 'facilis', 'voluptatibus', '1.80', 516, 'illum', 'ut', 'ut', '2020-11-21', 'est', 1, 0, 1, 1, 75595, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 5, 4, 1, 1, 2, 5, NULL, NULL),
(33, 'Dr. Rubie Balistreri', 'https://via.placeholder.com/250x365', '778.00', '33.00', '35', 'tempora', '2', 'Classics master, though. He was looking at everything that Alice had been jumping about like mad things all this time, and was going to shrink any further: she felt a violent blow underneath her chin: it had been. But her sister sat still just as well. The twelve jurors were all crowded together at one corner of it: \'No room! No room!\' they cried out when they liked, and left off when they saw Alice coming. \'There\'s PLENTY of room!\' said Alice to herself, \'if one only knew how to get her head.', 'mollitia', '10', 'sint', 836785967, '1', 'autem-et-nobis-ut-exercitationem-nihil-qui-fuga-et', 'animi', 'id', '647955721.00', 208962153, 'magni', 'in', 'similique', '2020-11-21', 'provident', 1, 0, 0, 1, 9289, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 5, 9, 1, 2, 2, 2, NULL, NULL),
(34, 'Leif Smith', 'https://via.placeholder.com/250x365', '47.00', '597.00', '29', 'quo', '1', 'I\'m not Ada,\' she said, \'and see whether it\'s marked \"poison\" or not\'; for she was looking at them with one of its mouth again, and put it to make out exactly what they said. The executioner\'s argument was, that she was considering in her hand, watching the setting sun, and thinking of little pebbles came rattling in at the bottom of a good deal: this fireplace is narrow, to be a lesson to you how it was addressed to the jury, and the words came very queer to ME.\' \'You!\' said the Caterpillar.', 'incidunt', '6', 'iure', 27874, '1', 'atque-perferendis-consequatur-et', 'laudantium', 'officiis', '12236749.03', 307, 'facere', 'eius', 'unde', '2020-11-21', 'officia', 0, 1, 0, 0, 437, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 9, 3, 2, 2, 1, 4, NULL, NULL),
(35, 'Lyda Erdman DDS', 'https://via.placeholder.com/250x365', '587.00', '828.00', '39', 'fuga', '1', 'You MUST have meant some mischief, or else you\'d have signed your name like an arrow. The Cat\'s head began fading away the moment she felt that it might happen any minute, \'and then,\' thought Alice, \'to pretend to be listening, so she tried another question. \'What sort of lullaby to it in large letters. It was so large in the air: it puzzled her a good deal until she had brought herself down to them, and all her wonderful Adventures, till she fancied she heard the Rabbit just under the sea,\'.', 'velit', '2', 'nihil', 48244372, '1', 'dicta-corporis-nobis-ea-officia-pariatur-et-eligendi', 'qui', 'dolorum', '5.55', 59, 'voluptatem', 'quis', 'qui', '2020-11-21', 'quaerat', 1, 0, 1, 0, 696, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 5, 7, 3, 1, 5, 2, NULL, NULL),
(36, 'Prof. Lillian Lynch', 'https://via.placeholder.com/250x365', '475.00', '726.00', '13', 'sint', '1', 'Alice. \'I\'ve tried every way, and then hurried on, Alice started to her in such confusion that she began nursing her child again, singing a sort of people live about here?\' \'In THAT direction,\' waving the other birds tittered audibly. \'What I was a good way off, and Alice guessed who it was, and, as the whole cause, and condemn you to sit down without being seen, when she turned away. \'Come back!\' the Caterpillar contemptuously. \'Who are YOU?\' said the Gryphon, sighing in his turn; and both.', 'omnis', '6', 'veritatis', 1, '0', 'aut-voluptatem-qui-earum-quidem-sed', 'ad', 'dolorem', '215864917.90', 1827, 'eveniet', 'quis', 'ut', '2020-11-21', 'tempore', 1, 1, 1, 0, 395960, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 6, 10, 2, 1, 2, 3, NULL, NULL),
(37, 'Cecelia Little', 'https://via.placeholder.com/250x365', '603.00', '163.00', '28', 'non', '2', 'Time!\' \'Perhaps not,\' Alice cautiously replied, not feeling at all this time, and was coming back to the croquet-ground. The other guests had taken his watch out of sight: then it chuckled. \'What fun!\' said the sage, as he spoke, and the fan, and skurried away into the garden. Then she went hunting about, and shouting \'Off with her arms folded, quietly smoking a long hookah, and taking not the same, shedding gallons of tears, but said nothing. \'Perhaps it hasn\'t one,\' Alice ventured to remark.', 'quo', '9', 'eum', 357152948, '0', 'neque-doloremque-architecto-accusamus-in-quasi-fuga', 'excepturi', 'aut', '20347031.60', 2459063, 'similique', 'debitis', 'accusantium', '2020-11-21', 'quidem', 1, 0, 1, 1, 59284, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 1, 3, 2, 1, 2, 2, NULL, NULL),
(38, 'Ms. Mireya Nicolas PhD', 'https://via.placeholder.com/250x365', '141.00', '567.00', '6', 'quas', '1', 'Alice, a little way out of its mouth, and its great eyes half shut. This seemed to Alice severely. \'What are you getting on?\' said the Gryphon. \'Of course,\' the Dodo solemnly presented the thimble, looking as solemn as she could. \'The game\'s going on shrinking rapidly: she soon made out the words: \'Where\'s the other paw, \'lives a March Hare. Alice was very uncomfortable, and, as she could not possibly reach it: she could for sneezing. There was no label this time it vanished quite slowly.', 'ab', '5', 'consectetur', 88, '1', 'magni-nulla-aut-omnis-quo-qui-earum', 'et', 'velit', '75789.34', 7344, 'aut', 'optio', 'qui', '2020-11-21', 'nesciunt', 1, 0, 1, 1, 275885946, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 1, 1, 3, 1, 2, 3, NULL, NULL),
(39, 'Dr. Dereck Halvorson Jr.', 'https://via.placeholder.com/250x365', '890.00', '15.00', '23', 'soluta', '2', 'Latitude was, or Longitude I\'ve got back to yesterday, because I was sent for.\' \'You ought to be otherwise than what you were down here with me! There are no mice in the last time she heard a little nervous about it in with a table set out under a tree a few minutes, and she walked on in the air: it puzzled her very earnestly, \'Now, Dinah, tell me your history, you know,\' Alice gently remarked; \'they\'d have been a holiday?\' \'Of course twinkling begins with an M, such as mouse-traps, and the.', 'earum', '4', 'aut', 561, '0', 'suscipit-dignissimos-commodi-in', 'earum', 'nesciunt', '24921.84', 8, 'in', 'quo', 'corporis', '2020-11-21', 'est', 0, 1, 0, 0, 44, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 3, 2, 3, 2, 1, 2, NULL, NULL),
(40, 'Royal Runolfsson', 'https://via.placeholder.com/250x365', '997.00', '666.00', '44', 'qui', '1', 'Then it got down off the top of her going, though she felt sure it would be quite absurd for her neck would bend about easily in any direction, like a serpent. She had just begun \'Well, of all the players, except the King, and the pair of gloves and the great question certainly was, what? Alice looked round, eager to see it trying in a moment: she looked up, and began talking to herself, \'Now, what am I to get dry again: they had been all the first to speak. \'What size do you like to have no.', 'praesentium', '3', 'non', 1227797, '0', 'temporibus-non-hic-voluptas-voluptatem', 'eligendi', 'maxime', '480535279.73', 755292881, 'nemo', 'sint', 'quo', '2020-11-21', 'quos', 0, 1, 1, 1, 482623856, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 6, 9, 1, 1, 5, 3, NULL, NULL),
(41, 'Jewell Stanton', 'https://via.placeholder.com/250x365', '321.00', '757.00', '40', 'ut', '1', 'I\'ll stay down here till I\'m somebody else\"--but, oh dear!\' cried Alice in a sulky tone; \'Seven jogged my elbow.\' On which Seven looked up and down, and nobody spoke for some time busily writing in his throat,\' said the Caterpillar, and the moon, and memory, and muchness--you know you say pig, or fig?\' said the Duchess, as she spoke, but no result seemed to have no answers.\' \'If you please, sir--\' The Rabbit Sends in a very long silence, broken only by an occasional exclamation of \'Hjckrrh!\'.', 'facere', '3', 'ipsam', 971768194, '1', 'excepturi-itaque-voluptate-deleniti-sit-assumenda-ea-possimus', 'qui', 'dolores', '107481.00', 419, 'molestiae', 'veniam', 'adipisci', '2020-11-21', 'ut', 1, 0, 1, 1, 5254, '2020-11-21 02:36:25', '2021-06-21 00:44:52', NULL, 9, 3, 2, 2, 1, 1, NULL, NULL),
(42, 'Ms. Alfreda Thiel III', 'https://via.placeholder.com/250x365', '566.00', '707.00', '16', 'minus', '2', 'YOU with us!\"\' \'They were obliged to have any rules in particular; at least, if there are, nobody attends to them--and you\'ve no idea what to do next, when suddenly a White Rabbit with pink eyes ran close by her. There was nothing so VERY wide, but she saw them, they were playing the Queen shouted at the Mouse\'s tail; \'but why do you call him Tortoise--\' \'Why did they draw?\' said Alice, (she had grown so large a house, that she ran out of the guinea-pigs cheered, and was in a tone of great.', 'et', '4', 'autem', 861641045, '1', 'et-mollitia-non-quam-enim-corporis-officia', 'et', 'modi', '435144.28', 42, 'enim', 'quidem', 'ipsam', '2020-11-21', 'porro', 1, 0, 0, 1, 40015794, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 7, 8, 1, 2, 4, 5, NULL, NULL),
(43, 'Reyna Barton', 'https://via.placeholder.com/250x365', '949.00', '31.00', '1', 'similique', '1', 'The Dormouse had closed its eyes were looking over his shoulder as she could not help bursting out laughing: and when Alice had not got into a large canvas bag, which tied up at this moment Five, who had been running half an hour or so, and giving it a very humble tone, going down on one side, to look at the bottom of the Lobster Quadrille?\' the Gryphon replied very gravely. \'What else had you to offer it,\' said the Dormouse, after thinking a minute or two the Caterpillar took the hookah out.', 'laudantium', '4', 'voluptatum', 130704544, '1', 'numquam-corporis-est-quos-voluptatem-est-maxime', 'numquam', 'enim', '363187297.31', 3, 'voluptas', 'natus', 'et', '2020-11-21', 'sed', 1, 0, 1, 1, 50749549, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 5, 6, 1, 1, 5, 3, NULL, NULL),
(44, 'Summer Gorczany', 'https://via.placeholder.com/250x365', '641.00', '792.00', '43', 'aut', '2', 'Number One,\' said Alice. \'Why, there they are!\' said the Gryphon hastily. \'Go on with the Queen,\' and she tried her best to climb up one of these cakes,\' she thought, \'it\'s sure to do with this creature when I was sent for.\' \'You ought to be sure, she had quite a commotion in the sea. The master was an immense length of neck, which seemed to listen, the whole party swam to the Mock Turtle, who looked at the place where it had come to the end of the e--e--evening, Beautiful, beauti--FUL SOUP!\'.', 'aut', '3', 'et', 2, '0', 'asperiores-et-provident-beatae-fugiat-deleniti-libero-culpa-et', 'quibusdam', 'quisquam', '431.46', 716648, 'incidunt', 'fugiat', 'molestiae', '2020-11-21', 'id', 1, 1, 1, 0, 29087, '2020-11-21 02:36:25', '2020-11-21 02:36:25', NULL, 10, 3, 3, 1, 3, 2, NULL, NULL),
(45, 'Kellen Baumbach', 'https://via.placeholder.com/250x365', '248.00', '695.00', '3', 'maiores', '1', 'I could shut up like a sky-rocket!\' \'So you think you could only hear whispers now and then; such as, \'Sure, I don\'t know,\' he went on to the Mock Turtle. \'And how many miles I\'ve fallen by this very sudden change, but very politely: \'Did you say things are worse than ever,\' thought the poor child, \'for I never heard of one,\' said Alice. \'Why, SHE,\' said the King, rubbing his hands; \'so now let the jury--\' \'If any one left alive!\' She was a good way off, and she went on, \'you throw the--\' \'The.', 'hic', '6', 'et', 500665763, '1', 'quia-atque-in-occaecati-reiciendis-sint-aut', 'maiores', 'fugit', '53469.47', 99, 'reiciendis', 'nisi', 'omnis', '2020-11-21', 'totam', 0, 1, 0, 0, 647026, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 2, 5, 2, 2, 3, 2, NULL, NULL),
(46, 'Elbert Wisoky MD', 'https://via.placeholder.com/250x365', '222.00', '36.00', '39', 'officiis', '2', 'Rabbit, and had no reason to be patted on the end of your flamingo. Shall I try the effect: the next moment she quite forgot you didn\'t like cats.\' \'Not like cats!\' cried the Mouse, who seemed to think that will be much the most confusing thing I ever heard!\' \'Yes, I think it would be worth the trouble of getting her hands on her face in some book, but I THINK I can kick a little!\' She drew her foot as far down the hall. After a while she was peering about anxiously among the trees, a little.', 'deserunt', '7', 'nihil', 1, '0', 'quia-consequuntur-tempora-magnam-adipisci-ea-aut-sunt', 'tempore', 'et', '19584.30', 248556745, 'ullam', 'qui', 'aut', '2020-11-21', 'non', 1, 0, 0, 0, 22813588, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 7, 6, 1, 1, 1, 4, NULL, NULL),
(47, 'Donavon Prosacco', 'https://via.placeholder.com/250x365', '770.00', '854.00', '48', 'minus', '2', 'I had to do THAT in a day did you call him Tortoise--\' \'Why did they live on?\' said the Queen, turning purple. \'I won\'t!\' said Alice. \'Why not?\' said the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked along the passage into the garden, and I don\'t understand. Where did they live at the bottom of a muchness\"--did you ever eat a little of the jury eagerly wrote down all three to settle the question, and they repeated their arguments to her, And mentioned me to introduce.', 'molestiae', '10', 'occaecati', 70686803, '1', 'numquam-quibusdam-sed-in-quos-numquam-autem', 'provident', 'itaque', '761340.63', 6, 'repudiandae', 'qui', 'qui', '2020-11-21', 'eum', 1, 0, 0, 1, 24902240, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 1, 2, 2, 2, 4, 4, NULL, NULL),
(48, 'Miss Tracy Jacobson IV', 'https://via.placeholder.com/250x365', '547.00', '511.00', '48', 'suscipit', '1', 'Alice; \'that\'s not at all know whether it was very provoking to find that she had nibbled some more of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice again, in a confused way, \'Prizes! Prizes!\' Alice had not attended to this last remark. \'Of course they were\', said the Cat. \'--so long as I was going a journey, I should understand that better,\' Alice said very humbly; \'I won\'t interrupt again. I dare say.', 'porro', '6', 'autem', 234, '1', 'sint-dicta-asperiores-illum-mollitia-nam', 'voluptatum', 'placeat', '178823.40', 1250200, 'id', 'dolor', 'odio', '2020-11-21', 'reprehenderit', 1, 0, 0, 1, 4284329, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 1, 8, 3, 2, 4, 4, NULL, NULL),
(49, 'Bernard Crist', 'https://via.placeholder.com/250x365', '897.00', '382.00', '37', 'facere', '1', 'Cat remarked. \'Don\'t be impertinent,\' said the Queen. \'I never saw one, or heard of uglifying!\' it exclaimed. \'You know what to do that,\' said Alice. \'Why, SHE,\' said the Caterpillar. Alice thought she might find another key on it, for she felt that this could not possibly reach it: she could not join the dance? \"You can really have no notion how delightful it will be much the most important piece of rudeness was more and more faintly came, carried on the floor, and a crash of broken glass.', 'amet', '4', 'sapiente', 961, '1', 'sequi-sint-ipsa-quia-mollitia-repellat-odit', 'molestiae', 'tempora', '31192.00', 186805394, 'sit', 'dolores', 'nemo', '2020-11-21', 'ratione', 1, 1, 0, 1, 9, '2020-11-21 02:36:26', '2021-06-20 23:24:14', NULL, 8, 8, 1, 1, 1, 3, NULL, NULL),
(50, 'Otho Pouros', 'https://via.placeholder.com/250x365', '487.00', '47.00', '22', 'aut', '2', 'King, \'that only makes the world you fly, Like a tea-tray in the wood, \'is to grow to my jaw, Has lasted the rest of the thing yourself, some winter day, I will prosecute YOU.--Come, I\'ll take no denial; We must have been changed for Mabel! I\'ll try and repeat something now. Tell her to begin.\' For, you see, so many tea-things are put out here?\' she asked. \'Yes, that\'s it,\' said Alice, \'how am I to do?\' said Alice. \'Why, there they lay on the whole court was a dead silence instantly, and.', 'nesciunt', '6', 'ducimus', 7408674, '0', 'debitis-minima-quibusdam-reprehenderit-similique', 'dignissimos', 'quisquam', '4038.06', 39, 'et', 'occaecati', 'corporis', '2020-11-21', 'et', 1, 0, 1, 0, 2, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 4, 2, 3, 2, 2, 2, NULL, NULL),
(51, 'Noah Schaefer MD', 'https://via.placeholder.com/250x365', '949.00', '620.00', '18', 'sint', '2', 'Dinah stop in the middle, wondering how she was saying, and the Mock Turtle is.\' \'It\'s the oldest rule in the sky. Alice went on muttering over the list, feeling very curious to see if she meant to take out of the court. \'What do you mean \"purpose\"?\' said Alice. \'That\'s the judge,\' she said this, she looked back once or twice, half hoping that the Mouse only growled in reply. \'Idiot!\' said the Pigeon; \'but if you\'ve seen them so often, of course was, how to speak first, \'why your cat grins.', 'quia', '3', 'deleniti', 28, '1', 'cumque-sequi-dolore-perspiciatis-quidem-quae-voluptatibus-sunt-libero', 'ipsa', 'deserunt', '25761.21', 1776742, 'autem', 'beatae', 'et', '2020-11-21', 'id', 1, 1, 0, 0, 97548282, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 5, 9, 1, 2, 3, 3, NULL, NULL),
(52, 'Elisa Wuckert', 'https://via.placeholder.com/250x365', '113.00', '487.00', '48', 'et', '2', 'ONE with such a simple question,\' added the March Hare will be the use of a book,\' thought Alice \'without pictures or conversations?\' So she set to partners--\' \'--change lobsters, and retire in same order,\' continued the Hatter, and here the Mock Turtle recovered his voice, and, with tears again as quickly as she was as much use in waiting by the Hatter, \'you wouldn\'t talk about cats or dogs either, if you were never even introduced to a snail. \"There\'s a porpoise close behind us, and he\'s.', 'occaecati', '10', 'magnam', 4624, '1', 'fuga-repellat-est-expedita', 'labore', 'dicta', '4171148.87', 160912, 'quos', 'blanditiis', 'ipsum', '2020-11-21', 'et', 1, 0, 1, 0, 55744819, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 1, 10, 3, 2, 2, 4, NULL, NULL),
(53, 'Prince Vandervort', 'https://via.placeholder.com/250x365', '316.00', '514.00', '28', 'placeat', '1', 'Queen, turning purple. \'I won\'t!\' said Alice. \'Come on, then,\' said the King, \'that only makes the matter with it. There could be no chance of this, so she took courage, and went by without noticing her. Then followed the Knave was standing before them, in chains, with a sudden burst of tears, but said nothing. \'Perhaps it hasn\'t one,\' Alice ventured to say. \'What is his sorrow?\' she asked the Gryphon, and the three gardeners instantly threw themselves flat upon their faces. There was a table.', 'voluptas', '9', 'dolorem', 317, '0', 'ab-asperiores-eum-eaque-modi-sunt-culpa', 'nam', 'quia', '47.79', 452953, 'repudiandae', 'quos', 'vitae', '2020-11-21', 'neque', 1, 0, 1, 0, 9900971, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 9, 9, 1, 2, 4, 5, NULL, NULL),
(54, 'Andreane Hettinger I', 'https://via.placeholder.com/250x365', '963.00', '816.00', '35', 'laborum', '1', 'As they walked off together. Alice was very glad to do this, so that her flamingo was gone in a helpless sort of way, \'Do cats eat bats? Do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, so many different sizes in a moment. \'Let\'s go on for some time busily writing in his throat,\' said the Mock Turtle. \'Very much indeed,\' said Alice. \'I\'ve tried the roots of trees, and I\'ve tried to say anything. \'Why,\' said the King: \'however, it may kiss my hand if it began ordering people.', 'maxime', '4', 'sapiente', 83, '1', 'quia-error-illo-et-sunt-consequatur-aspernatur-et-fuga', 'maiores', 'enim', '128326107.58', 283, 'iure', 'et', 'nam', '2020-11-21', 'non', 0, 0, 0, 0, 2344982, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 7, 5, 3, 1, 1, 4, NULL, NULL),
(55, 'Elyssa Hermiston', 'https://via.placeholder.com/250x365', '257.00', '191.00', '12', 'atque', '1', 'Mock Turtle went on again:-- \'I didn\'t know how to begin.\' He looked at poor Alice, \'when one wasn\'t always growing larger and smaller, and being ordered about in the house, and have next to no toys to play croquet.\' Then they all crowded round her head. \'If I eat one of the edge with each hand. \'And now which is which?\' she said to herself, \'Now, what am I to do?\' said Alice. \'Why not?\' said the Dodo, pointing to the other side of the shelves as she spoke. \'I must be off, then!\' said the.', 'eligendi', '8', 'aut', 6, '0', 'corrupti-rerum-voluptatem-sequi-qui', 'aut', 'sapiente', '7.70', 89829530, 'perspiciatis', 'eos', 'inventore', '2020-11-21', 'eum', 0, 1, 0, 0, 663439791, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 3, 8, 3, 1, 3, 2, NULL, NULL);
INSERT INTO `books` (`id`, `name`, `image`, `mrp`, `price`, `discount`, `isbn`, `book_type`, `description`, `sku`, `weight`, `dimensions`, `no_of_pages`, `status`, `slug`, `meta_keywords`, `meta_description`, `coupon_discount`, `no_of_qty_for_discount`, `coupon_code`, `isbn_30`, `isbn_10`, `publication_date`, `publication_city_or_country`, `handpicked`, `new_arrival`, `best_sellers`, `all_time_classic`, `no_of_viewed`, `created_at`, `updated_at`, `deleted_at`, `book_authors_id`, `publisher_id`, `stock_status_id`, `language_id`, `category_id`, `sub_category_id`, `condition`, `quantity`) VALUES
(56, 'Linwood Wehner DVM', 'https://via.placeholder.com/250x365', '973.00', '263.00', '30', 'pariatur', '1', 'I used--and I don\'t like it, yer honour, at all, at all!\' \'Do as I tell you!\' But she did not notice this last remark, \'it\'s a vegetable. It doesn\'t look like it?\' he said, turning to the jury, who instantly made a rush at the jury-box, or they would call after her: the last word two or three pairs of tiny white kid gloves while she was talking. \'How CAN I have done that?\' she thought. \'But everything\'s curious today. I think I can find it.\' And she tried the effect of lying down on their.', 'est', '9', 'voluptate', 50, '0', 'iure-repellendus-ut-et-dolore-et', 'reiciendis', 'vitae', '899.55', 72184, 'omnis', 'cum', 'neque', '2020-11-21', 'aut', 0, 0, 0, 0, 90, '2020-11-21 02:36:26', '2020-11-21 02:36:26', NULL, 6, 2, 3, 1, 2, 3, NULL, NULL),
(57, 'Sheldon Barrows', 'https://via.placeholder.com/250x365', '901.00', '295.00', '44', 'commodi', '2', 'I\'ve been changed for any of them. However, on the bank, with her head!\' about once in the distance, screaming with passion. She had quite forgotten the Duchess and the Queen shouted at the door--I do wish they COULD! I\'m sure I have none, Why, I haven\'t been invited yet.\' \'You\'ll see me there,\' said the Dodo, \'the best way to fly up into a small passage, not much like keeping so close to her chin in salt water. Her first idea was that you couldn\'t cut off a little girl,\' said Alice, and.', 'molestiae', '8', 'quia', 5, '0', 'rerum-quos-ad-aspernatur-saepe-eligendi', 'laudantium', 'at', '278.92', 25996807, 'nihil', 'necessitatibus', 'consectetur', '2020-11-21', 'reiciendis', 0, 1, 1, 1, 9390, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 1, 2, 1, 2, 4, 3, NULL, NULL),
(58, 'Esmeralda Goodwin', 'https://via.placeholder.com/250x365', '251.00', '597.00', '36', 'enim', '2', 'Alice, a little nervous about this; \'for it might happen any minute, \'and then,\' thought she, \'if people had all to lie down upon their faces, so that altogether, for the hot day made her draw back in a mournful tone, \'he won\'t do a thing I ask! It\'s always six o\'clock now.\' A bright idea came into her eyes; and once she remembered the number of bathing machines in the pool a little scream of laughter. \'Oh, hush!\' the Rabbit say to itself \'Then I\'ll go round and round goes the clock in a.', 'laudantium', '1', 'maiores', 168, '0', 'ipsum-at-sequi-illum-non', 'voluptatibus', 'itaque', '7812070.79', 312261808, 'dolor', 'excepturi', 'ut', '2020-11-21', 'quo', 0, 1, 0, 1, 890419, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 2, 6, 1, 2, 2, 5, NULL, NULL),
(59, 'Mozell Hand', 'https://via.placeholder.com/250x365', '744.00', '259.00', '47', 'voluptatem', '2', 'Alice went on eagerly. \'That\'s enough about lessons,\' the Gryphon said to the Queen. \'Never!\' said the March Hare,) \'--it was at the sudden change, but she ran off at once, in a frightened tone. \'The Queen will hear you! You see, she came upon a time she heard her sentence three of the busy farm-yard--while the lowing of the other end of trials, \"There was some attempts at applause, which was lit up by wild beasts and other unpleasant things, all because they WOULD not remember ever having.', 'porro', '1', 'recusandae', 786350, '0', 'doloremque-velit-recusandae-laudantium-maiores-id-sit-ea', 'magnam', 'nihil', '153881.10', 91375, 'ex', 'eaque', 'dolorem', '2020-11-21', 'nobis', 1, 1, 1, 1, 510, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 4, 2, 1, 2, 3, 5, NULL, NULL),
(60, 'Dr. Linwood Barton Sr.', 'https://via.placeholder.com/250x365', '450.00', '861.00', '37', 'ratione', '1', 'Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\' said Alice, feeling very glad to do THAT in a low, trembling voice. \'There\'s more evidence to come before that!\' \'Call the next verse.\' \'But about his toes?\' the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little of her hedgehog. The hedgehog was engaged in a voice sometimes choked with sobs, to sing you a present of everything I\'ve said as yet.\' \'A cheap sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey.', 'magnam', '6', 'sit', 66682, '1', 'et-ea-ea-atque-eum-voluptas-modi', 'quibusdam', 'qui', '280.56', 66, 'ut', 'nesciunt', 'enim', '2020-11-21', 'culpa', 1, 1, 0, 0, 662311, '2020-11-21 02:36:27', '2021-06-21 01:41:54', NULL, 4, 5, 2, 1, 4, 2, NULL, NULL),
(61, 'Dr. Rebekah Medhurst DVM', 'https://via.placeholder.com/250x365', '801.00', '59.00', '8', 'laboriosam', '1', 'Gryphon. \'I mean, what makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only knew how to set about it; and as he wore his crown over the jury-box with the day of the tail, and ending with the birds and animals that had made her look up in great disgust, and walked two and two, as the Dormouse again, so that her flamingo was gone in a helpless sort of knot, and then unrolled the parchment scroll, and read as follows:-- \'The Queen of Hearts, and I.', 'ipsa', '6', 'eos', 27, '1', 'exercitationem-aliquam-maiores-dolorum-porro-et-ducimus', 'pariatur', 'et', '2117.96', 3, 'dicta', 'sapiente', 'fuga', '2020-11-21', 'est', 0, 1, 1, 1, 8624, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 3, 3, 2, 1, 2, 5, NULL, NULL),
(62, 'Prof. Nicolas Rutherford MD', 'https://via.placeholder.com/250x365', '354.00', '176.00', '22', 'consequatur', '2', 'Duchess\'s voice died away, even in the trial one way of keeping up the fan she was quite pale (with passion, Alice thought), and it set to work, and very angrily. \'A knot!\' said Alice, \'I\'ve often seen them so shiny?\' Alice looked up, and began bowing to the door. \'Call the next question is, Who in the grass, merely remarking that a moment\'s pause. The only things in the middle, being held up by a row of lamps hanging from the roof. There were doors all round her at the moment, \'My dear! I.', 'deleniti', '4', 'eos', 8097729, '0', 'et-cupiditate-eligendi-earum-commodi-nobis-et-tenetur', 'tenetur', 'consequatur', '9495225.25', 5, 'veritatis', 'nihil', 'corporis', '2020-11-21', 'architecto', 1, 1, 0, 0, 35303, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 5, 3, 2, 2, 5, 4, NULL, NULL),
(63, 'Selina McLaughlin', 'https://via.placeholder.com/250x365', '716.00', '79.00', '16', 'pariatur', '1', 'Crab took the place of the house, and found herself safe in a shrill, passionate voice. \'Would YOU like cats if you were me?\' \'Well, perhaps your feelings may be ONE.\' \'One, indeed!\' said the Queen, who were lying round the refreshments!\' But there seemed to think this a very good advice, (though she very soon came to ME, and told me you had been found and handed back to the heads of the doors of the edge with each hand. \'And now which is which?\' she said to one of the Lobster Quadrille?\' the.', 'voluptatem', '9', 'cum', 891233, '1', 'doloremque-nulla-voluptates-aut-et', 'ea', 'rerum', '3119762.60', 75, 'ab', 'quia', 'iste', '2020-11-21', 'incidunt', 1, 0, 0, 1, 47890, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 10, 9, 2, 2, 2, 2, NULL, NULL),
(64, 'Prof. Micheal Dicki', 'https://via.placeholder.com/250x365', '54.00', '837.00', '48', 'quisquam', '2', 'France-- Then turn not pale, beloved snail, but come and join the dance. Would not, could not, could not help bursting out laughing: and when she turned the corner, but the Hatter said, tossing his head contemptuously. \'I dare say there may be ONE.\' \'One, indeed!\' said Alice, in a deep, hollow tone: \'sit down, both of you, and listen to her. The Cat only grinned a little door was shut again, and she went to the Gryphon. \'They can\'t have anything to put down the chimney?--Nay, I shan\'t! YOU do.', 'veritatis', '5', 'nisi', 771027, '0', 'voluptas-optio-et-corporis-qui-magnam-suscipit', 'aperiam', 'possimus', '8390.00', 188854, 'esse', 'et', 'minima', '2020-11-21', 'recusandae', 1, 0, 0, 1, 28018780, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 4, 6, 1, 2, 2, 1, NULL, NULL),
(65, 'Prof. Linda Stroman I', 'https://via.placeholder.com/250x365', '651.00', '48.00', '21', 'animi', '1', 'As she said to Alice, and she dropped it hastily, just in time to see the earth takes twenty-four hours to turn into a sort of a good deal on where you want to go with the name \'Alice!\' CHAPTER XII. Alice\'s Evidence \'Here!\' cried Alice, jumping up and leave the court; but on the back. However, it was a long silence after this, and after a few minutes, and she said to herself. (Alice had no pictures or conversations in it, and talking over its head. \'Very uncomfortable for the White Rabbit.', 'rem', '9', 'et', 635, '0', 'ipsam-iure-sit-quidem-facere-dolores', 'fugit', 'aut', '323965144.89', 93, 'tempora', 'eveniet', 'atque', '2020-11-21', 'provident', 0, 0, 0, 1, 853270412, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 1, 1, 3, 1, 2, 2, NULL, NULL),
(66, 'Mr. Howard Kihn', 'https://via.placeholder.com/250x365', '756.00', '308.00', '14', 'et', '1', 'But do cats eat bats? Do cats eat bats? Do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, Alice had never done such a subject! Our family always HATED cats: nasty, low, vulgar things! Don\'t let me hear the name \'Alice!\' CHAPTER XII. Alice\'s Evidence \'Here!\' cried Alice, with a smile. There was a queer-shaped little creature, and held out its arms folded, quietly smoking a long hookah, and taking not the right house, because the Duchess said after a fashion, and this was her.', 'consequatur', '1', 'cum', 2, '1', 'ut-impedit-aut-quia-et-vero-minima', 'minima', 'nemo', '95793136.91', 690, 'itaque', 'est', 'consequuntur', '2020-11-21', 'molestiae', 0, 1, 1, 1, 5, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 5, 7, 1, 2, 5, 2, NULL, NULL),
(67, 'Caleb Spencer', 'https://via.placeholder.com/250x365', '881.00', '321.00', '46', 'porro', '2', 'I\'m talking!\' Just then her head pressing against the roof off.\' After a while, finding that nothing more to do so. \'Shall we try another figure of the leaves: \'I should have croqueted the Queen\'s hedgehog just now, only it ran away when it grunted again, and the other two were using it as well as the White Rabbit, who was sitting on a bough of a muchness\"--did you ever see such a capital one for catching mice--oh, I beg your acceptance of this sort of way to fly up into a cucumber-frame, or.', 'blanditiis', '2', 'minus', 7817, '1', 'qui-quis-ipsa-et-ut-perspiciatis', 'eligendi', 'voluptate', '47.53', 68118, 'est', 'enim', 'nulla', '2020-11-21', 'ut', 1, 0, 0, 0, 917309, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 5, 4, 1, 1, 5, 2, NULL, NULL),
(68, 'Alden Kuphal', 'https://via.placeholder.com/250x365', '995.00', '742.00', '19', 'in', '2', 'Alice. \'Come on, then!\' roared the Queen, who were giving it a very little way out of sight, he said to herself, \'Why, they\'re only a mouse that had made out the proper way of expressing yourself.\' The baby grunted again, so violently, that she remained the same age as herself, to see if she had asked it aloud; and in THAT direction,\' waving the other two were using it as she was exactly one a-piece all round. (It was this last word with such a thing. After a minute or two, she made her draw.', 'alias', '4', 'et', 5, '1', 'culpa-placeat-id-repellat-corporis-fugit-sunt', 'corrupti', 'sequi', '150.21', 283573, 'eos', 'a', 'consequatur', '2020-11-21', 'tempora', 0, 1, 0, 0, 6850944, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 2, 6, 1, 2, 1, 3, NULL, NULL),
(69, 'Mr. Russell Witting', 'https://via.placeholder.com/250x365', '220.00', '106.00', '28', 'doloremque', '2', 'Mock Turtle sighed deeply, and began, in rather a complaining tone, \'and they all looked so grave that she began fancying the sort of lullaby to it as you might do very well to say it any longer than that,\' said Alice. \'I\'ve so often read in the distance. \'Come on!\' cried the Mock Turtle: \'why, if a fish came to ME, and told me he was speaking, and this time the Queen was to twist it up into the wood. \'If it had been, it suddenly appeared again. \'By-the-bye, what became of the hall: in fact.', 'ut', '2', 'impedit', 3, '1', 'perspiciatis-minima-qui-ut-beatae-voluptatem-dolor', 'est', 'soluta', '0.31', 62242, 'optio', 'ex', 'et', '2020-11-21', 'qui', 0, 0, 0, 1, 16, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 1, 7, 1, 2, 5, 5, NULL, NULL),
(70, 'Adah Greenholt III', 'https://via.placeholder.com/250x365', '721.00', '26.00', '27', 'libero', '1', 'King exclaimed, turning to Alice. \'Only a thimble,\' said Alice loudly. \'The idea of having the sentence first!\' \'Hold your tongue!\' said the King. \'Nothing whatever,\' said Alice. \'Who\'s making personal remarks now?\' the Hatter replied. \'Of course it is,\' said the Hatter. \'You MUST remember,\' remarked the King, looking round the table, but there were no arches left, and all dripping wet, cross, and uncomfortable. The moment Alice appeared, she was quite tired of swimming about here, O Mouse!\'.', 'nobis', '3', 'quod', 605775534, '0', 'assumenda-aut-consequatur-hic-impedit-ut-minus-ipsam', 'eum', 'incidunt', '5582843.40', 47421426, 'laudantium', 'voluptatem', 'non', '2020-11-21', 'ad', 1, 1, 1, 0, 60, '2020-11-21 02:36:27', '2020-11-21 02:36:27', NULL, 2, 4, 1, 2, 2, 2, NULL, NULL),
(71, 'Jayden Turner DVM', 'https://via.placeholder.com/250x365', '737.00', '150.00', '44', 'quibusdam', '2', 'Mock Turtle: \'nine the next, and so on.\' \'What a funny watch!\' she remarked. \'It tells the day and night! You see the Queen. \'Their heads are gone, if it began ordering people about like that!\' But she went on, turning to the heads of the hall: in fact she was small enough to try the effect: the next witness would be like, \'--for they haven\'t got much evidence YET,\' she said aloud. \'I shall sit here,\' he said, \'on and off, for days and days.\' \'But what did the archbishop find?\' The Mouse did.', 'cum', '8', 'commodi', 2, '1', 'quos-enim-exercitationem-porro-possimus-culpa-adipisci-facere-magni', 'non', 'commodi', '1.51', 949715723, 'quis', 'voluptas', 'libero', '2020-11-21', 'a', 0, 1, 1, 0, 7035896, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 6, 1, 1, 1, 4, 3, NULL, NULL),
(72, 'Prof. Pat Abbott', 'https://via.placeholder.com/250x365', '906.00', '669.00', '27', 'fugiat', '2', 'Shall I try the whole party at once and put back into the darkness as hard as it can\'t possibly make me larger, it must be really offended. \'We won\'t talk about cats or dogs either, if you wouldn\'t squeeze so.\' said the Lory, as soon as she swam lazily about in a hurry to change the subject,\' the March Hare: she thought it would all come wrong, and she crossed her hands up to her that she was quite surprised to find that her flamingo was gone across to the other side, the puppy began a series.', 'voluptatem', '10', 'esse', 40097, '0', 'quis-porro-ducimus-pariatur-aliquam-nobis-atque-nihil-neque', 'et', 'qui', '1591957.97', 5, 'voluptate', 'et', 'est', '2020-11-21', 'vero', 0, 1, 1, 0, 7, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 1, 4, 3, 1, 4, 2, NULL, NULL),
(73, 'Prof. Deangelo Botsford', 'https://via.placeholder.com/250x365', '272.00', '444.00', '25', 'quod', '2', 'Alice; \'all I know I do!\' said Alice timidly. \'Would you like the Mock Turtle Soup is made from,\' said the Cat. \'I said pig,\' replied Alice; \'and I do hope it\'ll make me giddy.\' And then, turning to Alice. \'Only a thimble,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she began shrinking directly. As soon as there was no label this time with one foot. \'Get up!\' said the Duchess: \'what a clear way you have just been picked up.\' \'What\'s in it?\' said the King said gravely, \'and go on.', 'est', '3', 'vel', 293660, '1', 'porro-qui-consequatur-ipsa-quidem-animi', 'minus', 'et', '134549716.99', 93316128, 'cupiditate', 'aut', 'voluptatem', '2020-11-21', 'adipisci', 1, 0, 0, 0, 152, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 9, 2, 1, 1, 5, 3, NULL, NULL),
(74, 'Ines Howe', 'https://via.placeholder.com/250x365', '191.00', '584.00', '29', 'neque', '2', 'Alice said very politely, \'if I had to sing you a song?\' \'Oh, a song, please, if the Queen shrieked out. \'Behead that Dormouse! Turn that Dormouse out of sight; and an old crab, HE was.\' \'I never went to school in the prisoner\'s handwriting?\' asked another of the reeds--the rattling teacups would change to dull reality--the grass would be grand, certainly,\' said Alice sharply, for she thought, \'and hand round the court and got behind him, and said anxiously to herself, and began bowing to the.', 'nihil', '8', 'quia', 41233681, '1', 'ex-voluptate-dolorem-delectus-suscipit-aut-et-perferendis-recusandae', 'sit', 'reprehenderit', '29605839.06', 56646, 'quas', 'voluptas', 'praesentium', '2020-11-21', 'voluptate', 0, 0, 1, 1, 97, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 3, 10, 2, 1, 5, 1, NULL, NULL),
(75, 'Ova Halvorson', 'https://via.placeholder.com/250x365', '593.00', '323.00', '13', 'quia', '2', 'Alice whispered to the Knave of Hearts, he stole those tarts, And took them quite away!\' \'Consider your verdict,\' the King said to the Queen. \'I never said I could show you our cat Dinah: I think you\'d better finish the story for yourself.\' \'No, please go on!\' Alice said with a soldier on each side, and opened their eyes and mouths so VERY tired of swimming about here, O Mouse!\' (Alice thought this a very short time the Queen was to get to,\' said the Dodo suddenly called out \'The race is.', 'neque', '2', 'dolorem', 65134, '1', 'quidem-tempore-deserunt-blanditiis-accusantium', 'pariatur', 'ut', '577147.09', 81389011, 'natus', 'unde', 'esse', '2020-11-21', 'error', 0, 1, 0, 1, 729922, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 2, 9, 2, 2, 2, 2, NULL, NULL),
(76, 'Prof. Vern Grady MD', 'https://via.placeholder.com/250x365', '169.00', '302.00', '41', 'velit', '2', 'Alice was not quite know what a Gryphon is, look at them--\'I wish they\'d get the trial done,\' she thought, \'till its ears have come, or at least one of the sort,\' said the Caterpillar; and it put more simply--\"Never imagine yourself not to lie down upon her: she gave one sharp kick, and waited till she was talking. \'How CAN I have to whisper a hint to Time, and round goes the clock in a natural way. \'I thought it would,\' said the King, the Queen, \'and he shall tell you just now what the next.', 'quia', '7', 'magni', 9532, '0', 'sed-pariatur-dolorem-cupiditate-minima-aliquam-et', 'sed', 'ea', '113.80', 8, 'vitae', 'et', 'temporibus', '2020-11-21', 'ullam', 1, 1, 1, 1, 4, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 9, 2, 1, 2, 5, 1, NULL, NULL),
(77, 'Salvatore Gaylord', 'https://via.placeholder.com/250x365', '274.00', '804.00', '23', 'sit', '1', 'Alice very politely; but she remembered that she hardly knew what she was losing her temper. \'Are you content now?\' said the Gryphon added \'Come, let\'s hear some of them even when they met in the window?\' \'Sure, it\'s an arm for all that.\' \'With extras?\' asked the Gryphon, before Alice could hardly hear the rattle of the jurymen. \'No, they\'re not,\' said the King; \'and don\'t look at them--\'I wish they\'d get the trial one way up as the question was evidently meant for her. \'I can hardly breathe.\'.', 'ab', '2', 'ipsum', 7, '0', 'aliquid-numquam-excepturi-corrupti-suscipit', 'velit', 'est', '0.00', 10, 'fugit', 'enim', 'optio', '2020-11-21', 'odio', 0, 1, 0, 0, 37545, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 1, 5, 2, 1, 1, 1, NULL, NULL),
(78, 'Ada Bergnaum DVM', 'https://via.placeholder.com/250x365', '670.00', '540.00', '13', 'voluptate', '2', 'If I or she fell past it. \'Well!\' thought Alice to herself, in a sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very seldom followed it), and handed back to the fifth bend, I think?\' \'I had NOT!\' cried the Gryphon. \'Turn a somersault in the air. \'--as far out to her that she tipped over the fire, and at last came a rumbling of little animals and birds waiting outside. The poor little feet, I wonder what they WILL do next! As for.', 'fuga', '9', 'eos', 866283397, '0', 'harum-repudiandae-et-aut-voluptas-non-odit', 'perspiciatis', 'hic', '312426575.77', 35175303, 'enim', 'eius', 'qui', '2020-11-21', 'aspernatur', 1, 0, 1, 1, 76664, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 6, 2, 3, 1, 2, 4, NULL, NULL),
(79, 'Lilliana Bauch', 'https://via.placeholder.com/250x365', '856.00', '200.00', '37', 'dolorem', '2', 'CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice hastily, afraid that it was perfectly round, she found her head through the doorway; \'and even if I fell off the cake. * * * \'What a number of executions the Queen said to herself, \'to be going messages for a minute or two the Caterpillar contemptuously. \'Who are YOU?\' said the Mock Turtle\'s heavy sobs. Lastly, she pictured to herself how she would catch a bat, and that\'s all you know about it, and kept doubling itself up.', 'quia', '7', 'eius', 39, '0', 'quam-voluptas-consequatur-distinctio-labore-nihil-modi-delectus', 'distinctio', 'laboriosam', '167.20', 7, 'repellendus', 'odit', 'qui', '2020-11-21', 'non', 1, 0, 1, 1, 4298, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 10, 3, 1, 2, 3, 2, NULL, NULL),
(80, 'Macy Smith', 'https://via.placeholder.com/250x365', '712.00', '657.00', '18', 'omnis', '2', 'Oh dear! I\'d nearly forgotten that I\'ve got back to the seaside once in the act of crawling away: besides all this, there was a very little! Besides, SHE\'S she, and I\'m I, and--oh dear, how puzzling it all seemed quite natural); but when the White Rabbit. She was close behind her, listening: so she went on talking: \'Dear, dear! How queer everything is to-day! And yesterday things went on \'And how did you ever see you any more!\' And here poor Alice began in a moment: she looked up and walking.', 'quos', '2', 'sint', 7668743, '1', 'vel-officiis-iure-cumque', 'maxime', 'dolores', '1664.39', 122762, 'molestias', 'dicta', 'aliquid', '2020-11-21', 'numquam', 0, 0, 0, 1, 8404, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 2, 2, 3, 2, 4, 4, NULL, NULL),
(81, 'Quinton Gibson Jr.', 'https://via.placeholder.com/250x365', '797.00', '801.00', '48', 'id', '2', 'The Panther took pie-crust, and gravy, and meat, While the Duchess said to itself \'The Duchess! The Duchess! Oh my dear Dinah! I wonder if I was, I shouldn\'t want YOURS: I don\'t want YOU with us!\"\' \'They were learning to draw, you know--\' She had already heard her voice close to her great delight it fitted! Alice opened the door that led into the darkness as hard as it settled down in a coaxing tone, and added \'It isn\'t a bird,\' Alice remarked. \'Right, as usual,\' said the Duchess, the Duchess!.', 'eligendi', '2', 'assumenda', 981958281, '1', 'maxime-a-ullam-nemo-occaecati-dolores', 'enim', 'cumque', '915304.80', 257971999, 'consequatur', 'nostrum', 'deleniti', '2020-11-21', 'consectetur', 0, 0, 1, 0, 1148, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 5, 5, 3, 2, 3, 2, NULL, NULL),
(82, 'Dr. Amaya Daugherty', 'https://via.placeholder.com/250x365', '370.00', '12.00', '49', 'accusantium', '2', 'Alice as it lasted.) \'Then the Dormouse shall!\' they both bowed low, and their curls got entangled together. Alice laughed so much at first, but, after watching it a violent blow underneath her chin: it had been. But her sister kissed her, and said, without opening its eyes, for it to annoy, Because he knows it teases.\' CHORUS. (In which the cook was leaning over the fire, licking her paws and washing her face--and she is only a pack of cards, after all. \"--SAID I COULD NOT SWIM--\" you can\'t.', 'quo', '3', 'illum', 988000, '1', 'odit-praesentium-quia-aspernatur-autem-quo', 'deserunt', 'maiores', '0.83', 6, 'non', 'consequatur', 'modi', '2020-11-21', 'magni', 0, 1, 0, 0, 56755, '2020-11-21 02:36:28', '2020-11-21 02:36:28', NULL, 10, 10, 1, 1, 1, 4, NULL, NULL),
(83, 'Delphine Wilderman', 'https://via.placeholder.com/250x365', '561.00', '802.00', '44', 'repudiandae', '1', 'Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice indignantly, and she crossed her hands up to the door, and knocked. \'There\'s no such thing!\' Alice was so much into the way the people that walk with their hands and feet at once, with a pair of gloves and a fall, and a sad tale!\' said the Gryphon. \'They can\'t have anything to say, she simply bowed, and took the opportunity of showing off her knowledge, as there seemed to be a great crowd assembled about them--all.', 'vel', '5', 'suscipit', 50, '1', 'pariatur-sequi-id-ut-ut', 'vel', 'quia', '525.46', 3, 'non', 'temporibus', 'voluptatum', '2020-11-21', 'esse', 0, 0, 0, 0, 6, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 3, 7, 3, 1, 2, 1, NULL, NULL),
(84, 'Jalon Boyle', 'https://via.placeholder.com/250x365', '118.00', '233.00', '35', 'itaque', '1', 'ME\' were beautifully marked in currants. \'Well, I\'ll eat it,\' said Alice, surprised at this, she came upon a little snappishly. \'You\'re enough to try the thing yourself, some winter day, I will tell you how the Dodo managed it.) First it marked out a history of the bottle was a general chorus of \'There goes Bill!\' then the puppy began a series of short charges at the door--I do wish they WOULD put their heads downward! The Antipathies, I think--\' (for, you see, because some of the bill.', 'dolorem', '3', 'molestiae', 29760709, '0', 'laboriosam-sed-aut-veritatis-vel-commodi-harum', 'recusandae', 'beatae', '725736.40', 678, 'ducimus', 'dolor', 'sed', '2020-11-21', 'quia', 1, 1, 0, 1, 56, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 10, 2, 2, 2, 5, 3, NULL, NULL),
(85, 'Aaliyah Gleichner', 'https://via.placeholder.com/250x365', '172.00', '494.00', '20', 'commodi', '1', 'Alice could see her after the candle is blown out, for she had accidentally upset the milk-jug into his plate. Alice did not like to go from here?\' \'That depends a good deal to ME,\' said Alice a good thing!\' she said to herself how she would get up and picking the daisies, when suddenly a footman because he was in a large kitchen, which was sitting on the OUTSIDE.\' He unfolded the paper as he spoke, and added with a pair of white kid gloves and the party went back for a minute, while Alice.', 'soluta', '6', 'molestiae', 6347395, '1', 'voluptatem-esse-est-omnis-sunt-nam', 'voluptatibus', 'saepe', '2367460.88', 86496, 'laborum', 'sit', 'sit', '2020-11-21', 'dicta', 0, 0, 1, 0, 527, '2020-11-21 02:36:29', '2021-01-25 05:38:54', NULL, 3, 7, 1, 1, 4, 2, NULL, NULL),
(86, 'Prof. Eusebio Powlowski', 'https://via.placeholder.com/250x365', '492.00', '695.00', '2', 'veniam', '1', 'Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, while the rest of it at last, they must be the use of repeating all that stuff,\' the Mock Turtle. \'And how do you know about it, you know--\' \'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"\' said Alice. \'Anything you like,\' said the King and Queen of Hearts were seated on their slates, when the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked along the passage into the jury-box, and saw that, in her French.', 'eum', '3', 'ad', 46, '1', 'voluptatem-non-omnis-ab-inventore-sed-consectetur', 'qui', 'qui', '67233376.04', 616, 'veniam', 'incidunt', 'voluptatem', '2020-11-21', 'fuga', 0, 1, 1, 0, 9442, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 5, 7, 3, 2, 5, 3, NULL, NULL),
(87, 'Scottie Stamm', 'https://via.placeholder.com/250x365', '45.00', '829.00', '6', 'ipsa', '2', 'The Duchess took no notice of them say, \'Look out now, Five! Don\'t go splashing paint over me like that!\' \'I couldn\'t help it,\' said Alice, \'it\'s very easy to take the hint; but the cook took the watch and looked at the Hatter, \'or you\'ll be telling me next that you couldn\'t cut off a head could be beheaded, and that is enough,\' Said his father; \'don\'t give yourself airs! Do you think I could, if I must, I must,\' the King said to herself \'Now I can kick a little!\' She drew her foot as far down.', 'animi', '7', 'qui', 5675, '0', 'totam-aut-ut-rem', 'qui', 'magni', '6633.89', 3438, 'eveniet', 'doloremque', 'et', '2020-11-21', 'animi', 1, 1, 0, 1, 780872692, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 4, 1, 1, 2, 4, 3, NULL, NULL),
(88, 'Mrs. Alisha Sporer', 'https://via.placeholder.com/250x365', '644.00', '269.00', '35', 'repudiandae', '1', 'Alice very humbly: \'you had got burnt, and eaten up by a very small cake, on which the March Hare said to Alice; and Alice was just in time to hear the Rabbit say to itself, \'Oh dear! Oh dear! I\'d nearly forgotten that I\'ve got to see a little bottle that stood near. The three soldiers wandered about in a furious passion, and went to him,\' the Mock Turtle. \'Seals, turtles, salmon, and so on; then, when you\'ve cleared all the arches are gone from this morning,\' said Alice in a low, timid voice.', 'sapiente', '2', 'molestiae', 1619581, '1', 'voluptatum-consequatur-molestiae-perspiciatis', 'illum', 'et', '7830152.57', 766505901, 'non', 'perspiciatis', 'in', '2020-11-21', 'quia', 1, 1, 0, 1, 370712926, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 6, 1, 1, 1, 3, 1, NULL, NULL),
(89, 'Sabrina Sanford', 'https://via.placeholder.com/250x365', '513.00', '746.00', '24', 'quas', '2', 'Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit, who was trembling down to them, they were mine before. If I or she fell very slowly, for she was beginning to write this down on their throne when they saw her, they hurried back to my right size to do THAT in a court of justice before, but she saw maps and pictures hung upon pegs. She took down a large plate came skimming out, straight at the end of his head. But at any rate it would all come.', 'nesciunt', '9', 'eius', 4105054, '1', 'praesentium-rem-officiis-quos-quos-porro-officiis-voluptas', 'id', 'nam', '480699.00', 36566, 'quis', 'temporibus', 'necessitatibus', '2020-11-21', 'sapiente', 0, 1, 1, 1, 58126379, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 5, 6, 1, 1, 1, 1, NULL, NULL),
(90, 'Jan Murray', 'https://via.placeholder.com/250x365', '888.00', '438.00', '9', 'voluptas', '2', 'And with that she hardly knew what she was playing against herself, for she could do to ask: perhaps I shall think nothing of the Mock Turtle, \'but if they do, why then they\'re a kind of rule, \'and vinegar that makes them sour--and camomile that makes you forget to talk. I can\'t quite follow it as you say pig, or fig?\' said the Gryphon. \'I mean, what makes them so shiny?\' Alice looked down at once, and ran off, thinking while she was surprised to see what was going to remark myself.\' \'Have you.', 'architecto', '10', 'consequuntur', 7228, '1', 'amet-adipisci-fugit-laboriosam-officiis-deserunt-possimus-voluptate-maiores', 'molestiae', 'consequatur', '30.60', 9, 'eius', 'ex', 'ut', '2020-11-21', 'vel', 1, 0, 0, 1, 40, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 10, 7, 2, 2, 4, 4, NULL, NULL),
(91, 'Grace Schroeder', 'https://via.placeholder.com/250x365', '879.00', '509.00', '20', 'voluptate', '2', 'Queen was silent. The King laid his hand upon her face. \'Wake up, Dormouse!\' And they pinched it on both sides at once. \'Give your evidence,\' said the Duchess. \'I make you dry enough!\' They all returned from him to you, Though they were nowhere to be told so. \'It\'s really dreadful,\' she muttered to herself, in a VERY good opportunity for showing off a head unless there was Mystery,\' the Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled the Gryphon in an offended tone, \'so I.', 'beatae', '6', 'beatae', 28977392, '0', 'sunt-dolore-rerum-ea-et-qui-ut-voluptas', 'ullam', 'corporis', '18802230.10', 94, 'omnis', 'repellat', 'veritatis', '2020-11-21', 'rem', 1, 1, 0, 1, 64551, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 2, 8, 3, 1, 1, 4, NULL, NULL),
(92, 'Shyann Little', 'https://via.placeholder.com/250x365', '910.00', '730.00', '28', 'alias', '1', 'And she opened the door of which was a table, with a pair of gloves and a crash of broken glass. \'What a funny watch!\' she remarked. \'There isn\'t any,\' said the Hatter. \'Nor I,\' said the Mock Turtle went on, \'I must be a footman in livery came running out of the singers in the last concert!\' on which the wretched Hatter trembled so, that Alice quite hungry to look through into the darkness as hard as he could go. Alice took up the other, looking uneasily at the other, and growing sometimes.', 'cum', '3', 'qui', 552577269, '1', 'aspernatur-et-et-tempore-recusandae', 'culpa', 'minima', '862.00', 377783114, 'maxime', 'delectus', 'ut', '2020-11-21', 'est', 0, 1, 1, 0, 27932497, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 5, 6, 2, 2, 2, 1, NULL, NULL),
(93, 'William Reinger Jr.', 'https://via.placeholder.com/250x365', '161.00', '705.00', '21', 'quis', '1', 'Exactly as we needn\'t try to find that she knew the name again!\' \'I won\'t interrupt again. I dare say there may be different,\' said Alice; \'but a grin without a moment\'s delay would cost them their lives. All the time when I get SOMEWHERE,\' Alice added as an unusually large saucepan flew close by her. There was a treacle-well.\' \'There\'s no such thing!\' Alice was a bright brass plate with the end of half those long words, and, what\'s more, I don\'t believe there\'s an atom of meaning in them.', 'occaecati', '2', 'perspiciatis', 9900448, '1', 'eos-voluptas-et-consequatur-mollitia-commodi-tempore', 'eius', 'ad', '9.32', 35905265, 'asperiores', 'rem', 'totam', '2020-11-21', 'unde', 0, 0, 0, 0, 287615, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 2, 3, 1, 1, 4, 5, NULL, NULL),
(94, 'Michelle Ledner', 'https://via.placeholder.com/250x365', '243.00', '486.00', '48', 'veritatis', '2', 'Alice said; \'there\'s a large fan in the distance, sitting sad and lonely on a three-legged stool in the other: he came trotting along in a very poor speaker,\' said the Dodo, \'the best way you go,\' said the Gryphon. \'Then, you know,\' said the Gryphon. \'Of course,\' the Gryphon only answered \'Come on!\' and ran till she got back to yesterday, because I was going to be, from one minute to another! However, I\'ve got to see it trying in a large pool all round her at the bottom of a water-well,\' said.', 'facere', '10', 'quidem', 27, '1', 'id-dicta-libero-ab', 'vitae', 'commodi', '6348672.00', 544, 'ut', 'voluptatem', 'repellat', '2020-11-21', 'et', 0, 0, 1, 0, 9498308, '2020-11-21 02:36:29', '2020-11-21 02:36:29', NULL, 8, 3, 3, 2, 2, 3, NULL, NULL),
(95, 'Sigurd Graham', 'https://via.placeholder.com/250x365', '312.00', '593.00', '50', 'harum', '2', 'I\'ve nothing to do: once or twice, and shook itself. Then it got down off the cake. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice sadly. \'Hand it over a little of her going, though she knew that it was as long as I do,\' said the Hatter, who turned pale and fidgeted. \'Give your evidence,\' said the Hatter, and he went on \'And how did you call it sad?\' And she kept tossing the baby at her feet, they seemed to have it explained,\' said the.', 'perspiciatis', '5', 'voluptatem', 551683751, '1', 'fugit-omnis-deserunt-id-ut', 'non', 'quis', '0.99', 842886230, 'autem', 'fuga', 'ab', '2020-11-21', 'mollitia', 0, 1, 1, 0, 52, '2020-11-21 02:36:30', '2020-11-21 02:36:30', NULL, 9, 7, 2, 2, 5, 3, NULL, NULL),
(96, 'Kenya Wiegand', 'https://via.placeholder.com/250x365', '219.00', '570.00', '32', 'ipsa', '2', 'BEE,\" but it did not see anything that looked like the look of things at all, as the game was in managing her flamingo: she succeeded in getting its body tucked away, comfortably enough, under her arm, and timidly said \'Consider, my dear: she is only a pack of cards!\' At this moment the King, \'that only makes the world she was ever to get in?\' \'There might be hungry, in which case it would all come wrong, and she dropped it hastily, just in time to be afraid of them!\' \'And who are THESE?\' said.', 'similique', '8', 'libero', 52, '0', 'repellendus-rerum-quos-cumque-harum-quis', 'et', 'sed', '3085000.73', 165088026, 'veniam', 'iste', 'ut', '2020-11-21', 'et', 1, 1, 1, 0, 533302, '2020-11-21 02:36:30', '2020-11-21 02:36:30', NULL, 10, 10, 2, 1, 5, 3, NULL, NULL),
(97, 'Levi Stark', 'https://via.placeholder.com/250x365', '277.00', '699.00', '50', 'et', '1', 'Trims his belt and his friends shared their never-ending meal, and the words \'EAT ME\' were beautifully marked in currants. \'Well, I\'ll eat it,\' said the Mock Turtle would be the right words,\' said poor Alice, that she still held the pieces of mushroom in her life; it was only too glad to get dry very soon. \'Ahem!\' said the Cat, \'if you don\'t explain it is you hate--C and D,\' she added in a very short time the Mouse to tell them something more. \'You promised to tell me the list of singers. \'You.', 'assumenda', '8', 'velit', 49, '0', 'dicta-quos-ipsum-placeat-rem-optio-quibusdam-exercitationem', 'consectetur', 'odit', '694.69', 788114, 'est', 'quis', 'hic', '2020-11-21', 'facere', 1, 1, 1, 1, 8, '2020-11-21 02:36:30', '2020-11-21 02:36:30', NULL, 7, 5, 1, 1, 4, 4, NULL, NULL),
(98, 'Mr. Chadrick Harvey V', 'https://via.placeholder.com/250x365', '798.00', '595.00', '10', 'saepe', '1', 'I know!\' exclaimed Alice, who felt ready to sink into the loveliest garden you ever eat a little recovered from the change: and Alice was soon left alone. \'I wish I could show you our cat Dinah: I think you\'d better ask HER about it.\' (The jury all brightened up again.) \'Please your Majesty,\' said Two, in a rather offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you, will you, won\'t you join the dance?\"\' \'Thank you, sir, for your walk!\" \"Coming in a low.', 'ullam', '8', 'id', 585961, '0', 'dolorem-repellat-aut-eaque-placeat-officia-amet-aut', 'eius', 'quidem', '481500.14', 14340, 'dolores', 'est', 'odio', '2020-11-21', 'et', 0, 0, 1, 1, 604063, '2020-11-21 02:36:30', '2020-11-21 02:36:30', NULL, 10, 7, 3, 1, 4, 5, NULL, NULL),
(99, 'Johathan Gerhold', 'https://via.placeholder.com/250x365', '34.00', '283.00', '50', 'animi', '1', 'I think I may as well say that \"I see what was going to shrink any further: she felt unhappy. \'It was the White Rabbit, who was beginning to get to,\' said the Lory. Alice replied eagerly, for she thought, and it set to work very diligently to write this down on her hand, and made a rush at the Hatter, \'when the Queen put on his knee, and looking at them with the lobsters and the White Rabbit with pink eyes ran close by her. There was a large ring, with the bones and the White Rabbit, with a.', 'odit', '7', 'in', 31807, '0', 'voluptatem-quis-ut-odio-sunt', 'et', 'molestias', '608199.20', 659, 'quisquam', 'et', 'qui', '2020-11-21', 'voluptas', 0, 0, 1, 0, 56826, '2020-11-21 02:36:30', '2020-11-21 02:36:30', NULL, 4, 5, 1, 2, 2, 3, NULL, NULL),
(100, 'Oceane Gottlieb', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/images/YbZMc0HINci1gsm561fLThW7XwqL1dO8mXZ12O15.jpeg', '59.00', '420.00', '1', 'esse', '1', 'King said to herself \'It\'s the Cheshire Cat: now I shall remember it in asking riddles that have no idea what you\'re at!\" You know the way out of a dance is it?\' Alice panted as she swam about, trying to find that the way the people near the door opened inwards, and Alice\'s first thought was that she could not make out what it was: she was as much use in the sun. (IF you don\'t like it, yer honour, at all, at all!\' \'Do as I get it home?\' when it saw mine coming!\' \'How do you mean that you.', 'tempora', '10', 'ut', 47023156, '0', 'mollitia-dolor-consequuntur-beatae', 'ipsum', 'voluptatem', '189028.90', 57437, 'libero', 'accusamus', 'repellendus', '2020-11-21', 'esse', 1, 0, 0, 1, 398116, '2020-11-21 02:36:30', '2020-11-21 02:50:11', NULL, 2, 10, 2, 1, 5, 4, NULL, NULL),
(101, 'hellosaif', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/images/VrczjJfYgkO2c9HckDleBGfOcZS3pSsUIDACoN5o.jpeg', '400.00', '180.00', '56', NULL, '1', 'wrwrwrfgffg', 'dsv1234', '.800', 'serwerwe', 123, '1', 'aewesds-hello-how-are-ou', 'swerere', 'tyrywerwr', '10.00', 12, 'qtry', '123456789', '9834567', '2020-11-23', 'new delhi', 1, 1, 1, 1, NULL, '2020-11-23 05:46:59', '2020-11-23 06:04:59', NULL, 10, 8, 1, 1, 1, 3, 'New', 1),
(102, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '2', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:16:06', '2020-11-24 01:16:06', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(103, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '2', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:16:06', '2020-11-24 01:16:06', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(104, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '2', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:16:06', '2020-11-24 01:16:06', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(105, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '2', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:16:06', '2020-11-24 01:16:06', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(106, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '2', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:16:07', '2020-11-24 01:16:07', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(107, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '1', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:30:03', '2020-11-24 01:30:03', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(108, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '1', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:30:03', '2020-11-24 01:30:03', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(109, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '1', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:30:03', '2020-11-24 01:30:03', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(110, 'name 1', 'https://via.placeholder.com/250x365', '200.00', '150.00', '25', NULL, '1', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:30:04', '2020-11-24 01:30:04', NULL, 11, 11, 1, 2, 11, 12, 'New', 10),
(111, 'name 1', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/images/ltlPZagEhd4uynAKTt0ARPFkHilAL3sg8N28tPyU.jpeg', '200.00', '150.00', '25', NULL, '1', 'write awesome descrption here', 'SD10001', '800', '1X2x20', 500, '1', 'write-your-slug-here-or-leave-empty', 'meta keywords or leave empty', 'meta description or leave empty', '5.00', 2, 'Quick2', '12345671234', '12345671234', '1970-01-01', 'New York', 1, 0, 1, 0, NULL, '2020-11-24 01:30:04', '2020-11-24 02:26:48', NULL, 11, 11, 1, 2, 11, 12, 'New', 10);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_in_mega_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_in_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `parent_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `name`, `status`, `show_in_mega_menu`, `show_in_menu`, `slug`, `meta_keywords`, `meta_description`, `set_order`, `created_at`, `updated_at`, `deleted_at`, `parent_category_id`) VALUES
(1, 'Action & Adventures', '1', '1', '1', 'action-adventures', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Art', '1', '1', '1', 'art', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Competition Books', '1', '1', '1', 'competition-books', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Competition Books', '1', '1', '1', 'competition-books', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Teaching Exam Books', '1', '1', '1', 'teaching-exam-books', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'main category 1', '1', '1', '1', 'main-category-1', NULL, NULL, NULL, '2020-11-24 01:00:40', '2020-11-24 01:00:40', NULL, NULL),
(12, 'sub category 1', '1', '1', '1', 'sub-category-1', NULL, NULL, NULL, '2020-11-24 01:00:40', '2020-11-24 01:00:40', NULL, 11);

-- --------------------------------------------------------

--
-- Table structure for table `book_collection`
--

CREATE TABLE `book_collection` (
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_collection`
--

INSERT INTO `book_collection` (`collection_id`, `book_id`) VALUES
(1, 3),
(1, 5),
(1, 13),
(1, 21),
(1, 24),
(1, 36),
(1, 37),
(1, 41),
(1, 47),
(1, 53),
(1, 54),
(1, 68),
(1, 69),
(1, 71),
(1, 79),
(1, 83),
(1, 85),
(1, 86),
(1, 87),
(1, 91),
(1, 92),
(1, 95),
(1, 101),
(1, 103),
(1, 104);

-- --------------------------------------------------------

--
-- Table structure for table `book_combo_offer`
--

CREATE TABLE `book_combo_offer` (
  `combo_offer_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_reviews`
--

CREATE TABLE `book_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_point` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_reviews`
--

INSERT INTO `book_reviews` (`id`, `email`, `review_point`, `message`, `status`, `created_at`, `updated_at`, `deleted_at`, `book_id`, `user_id`) VALUES
(1, 'gosu@mailinator.com', 23, 'Ab architecto quos n', '1', '2021-06-24 01:07:07', '2021-06-24 01:07:07', NULL, 107, 4),
(2, 'bafabu@mailinator.com', 84, 'Id nulla libero sunt', '0', '2021-06-24 01:07:31', '2021-06-24 01:07:31', NULL, 94, 1),
(3, 'pajoleze@mailinator.com', 2, 'Corrupti facilis mo', '1', '2021-06-24 05:16:15', '2021-06-24 05:16:15', NULL, 104, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_withuses`
--

CREATE TABLE `bussiness_withuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bussiness_withuses`
--

INSERT INTO `bussiness_withuses` (`id`, `full_name`, `email`, `mobile`, `message`, `city_name`, `company_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bertha Mcdaniel', 'admin@admin.com', '18138534705', 'fsdfssfdfsf', 'Sit ipsam nisi esse', 'dsdasdasd', '1', '2021-06-23 01:10:06', '2021-06-23 01:10:06', NULL),
(2, 'Bertha Mcdaniel', 'admin@admin.com', '18138534705', 'dsada', 'Sit ipsam nisi esse', 'dsdasdasd', '1', '2021-06-23 01:11:37', '2021-06-23 01:11:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('sthula_cache5c785c036466adea360111aa28563bfd556b5fba', 'i:2;', 1624706026),
('sthula_cache5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1624706026;', 1624706026);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `collection_name`, `banner_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Octavius George', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/sliderImages/ZGT80HCDazCkqCGWJTwE5CaaGEAUJARCZ5wh81aU.jpg', '1', '2021-06-23 04:30:45', '2021-06-23 04:35:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `combo_offers`
--

CREATE TABLE `combo_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `discount_amount` decimal(15,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `full_name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tatyana Dale', 'admin@admin.com', NULL, 'sdasdasdas', '1', '2021-06-23 01:03:24', '2021-06-23 01:03:24', NULL),
(2, 'Bertha Mcdaniel', 'admin@admin.com', NULL, 'asdasdasd', '1', '2021-06-23 01:04:48', '2021-06-23 01:04:48', NULL),
(3, 'Tatyana Dale', 'admin@admin.com', '13237169461', 'ssdfsdf', '1', '2021-06-23 01:37:26', '2021-06-23 01:37:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_allow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_code`, `shipping_allow`, `shipping_charge`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'af', NULL, NULL, NULL, NULL, NULL),
(2, 'Albania', 'al', NULL, NULL, NULL, NULL, NULL),
(3, 'Algeria', 'dz', NULL, NULL, NULL, NULL, NULL),
(4, 'American Samoa', 'as', NULL, NULL, NULL, NULL, NULL),
(5, 'Andorra', 'ad', NULL, NULL, NULL, NULL, NULL),
(6, 'Angola', 'ao', NULL, NULL, NULL, NULL, NULL),
(7, 'Anguilla', 'ai', NULL, NULL, NULL, NULL, NULL),
(8, 'Antarctica', 'aq', NULL, NULL, NULL, NULL, NULL),
(9, 'Antigua and Barbuda', 'ag', NULL, NULL, NULL, NULL, NULL),
(10, 'Argentina', 'ar', NULL, NULL, NULL, NULL, NULL),
(11, 'Armenia', 'am', NULL, NULL, NULL, NULL, NULL),
(12, 'Aruba', 'aw', NULL, NULL, NULL, NULL, NULL),
(13, 'Australia', 'au', NULL, NULL, NULL, NULL, NULL),
(14, 'Austria', 'at', NULL, NULL, NULL, NULL, NULL),
(15, 'Azerbaijan', 'az', NULL, NULL, NULL, NULL, NULL),
(16, 'Bahamas', 'bs', NULL, NULL, NULL, NULL, NULL),
(17, 'Bahrain', 'bh', NULL, NULL, NULL, NULL, NULL),
(18, 'Bangladesh', 'bd', NULL, NULL, NULL, NULL, NULL),
(19, 'Barbados', 'bb', NULL, NULL, NULL, NULL, NULL),
(20, 'Belarus', 'by', NULL, NULL, NULL, NULL, NULL),
(21, 'Belgium', 'be', NULL, NULL, NULL, NULL, NULL),
(22, 'Belize', 'bz', NULL, NULL, NULL, NULL, NULL),
(23, 'Benin', 'bj', NULL, NULL, NULL, NULL, NULL),
(24, 'Bermuda', 'bm', NULL, NULL, NULL, NULL, NULL),
(25, 'Bhutan', 'bt', NULL, NULL, NULL, NULL, NULL),
(26, 'Bolivia', 'bo', NULL, NULL, NULL, NULL, NULL),
(27, 'Bosnia and Herzegovina', 'ba', NULL, NULL, NULL, NULL, NULL),
(28, 'Botswana', 'bw', NULL, NULL, NULL, NULL, NULL),
(29, 'Brazil', 'br', NULL, NULL, NULL, NULL, NULL),
(30, 'British Indian Ocean Territory', 'io', NULL, NULL, NULL, NULL, NULL),
(31, 'British Virgin Islands', 'vg', NULL, NULL, NULL, NULL, NULL),
(32, 'Brunei', 'bn', NULL, NULL, NULL, NULL, NULL),
(33, 'Bulgaria', 'bg', NULL, NULL, NULL, NULL, NULL),
(34, 'Burkina Faso', 'bf', NULL, NULL, NULL, NULL, NULL),
(35, 'Burundi', 'bi', NULL, NULL, NULL, NULL, NULL),
(36, 'Cambodia', 'kh', NULL, NULL, NULL, NULL, NULL),
(37, 'Cameroon', 'cm', NULL, NULL, NULL, NULL, NULL),
(38, 'Canada', 'ca', NULL, NULL, NULL, NULL, NULL),
(39, 'Cape Verde', 'cv', NULL, NULL, NULL, NULL, NULL),
(40, 'Cayman Islands', 'ky', NULL, NULL, NULL, NULL, NULL),
(41, 'Central African Republic', 'cf', NULL, NULL, NULL, NULL, NULL),
(42, 'Chad', 'td', NULL, NULL, NULL, NULL, NULL),
(43, 'Chile', 'cl', NULL, NULL, NULL, NULL, NULL),
(44, 'China', 'cn', NULL, NULL, NULL, NULL, NULL),
(45, 'Christmas Island', 'cx', NULL, NULL, NULL, NULL, NULL),
(46, 'Cocos Islands', 'cc', NULL, NULL, NULL, NULL, NULL),
(47, 'Colombia', 'co', NULL, NULL, NULL, NULL, NULL),
(48, 'Comoros', 'km', NULL, NULL, NULL, NULL, NULL),
(49, 'Cook Islands', 'ck', NULL, NULL, NULL, NULL, NULL),
(50, 'Costa Rica', 'cr', NULL, NULL, NULL, NULL, NULL),
(51, 'Croatia', 'hr', NULL, NULL, NULL, NULL, NULL),
(52, 'Cuba', 'cu', NULL, NULL, NULL, NULL, NULL),
(53, 'Curacao', 'cw', NULL, NULL, NULL, NULL, NULL),
(54, 'Cyprus', 'cy', NULL, NULL, NULL, NULL, NULL),
(55, 'Czech Republic', 'cz', NULL, NULL, NULL, NULL, NULL),
(56, 'Democratic Republic of the Congo', 'cd', NULL, NULL, NULL, NULL, NULL),
(57, 'Denmark', 'dk', NULL, NULL, NULL, NULL, NULL),
(58, 'Djibouti', 'dj', NULL, NULL, NULL, NULL, NULL),
(59, 'Dominica', 'dm', NULL, NULL, NULL, NULL, NULL),
(60, 'Dominican Republic', 'do', NULL, NULL, NULL, NULL, NULL),
(61, 'East Timor', 'tl', NULL, NULL, NULL, NULL, NULL),
(62, 'Ecuador', 'ec', NULL, NULL, NULL, NULL, NULL),
(63, 'Egypt', 'eg', NULL, NULL, NULL, NULL, NULL),
(64, 'El Salvador', 'sv', NULL, NULL, NULL, NULL, NULL),
(65, 'Equatorial Guinea', 'gq', NULL, NULL, NULL, NULL, NULL),
(66, 'Eritrea', 'er', NULL, NULL, NULL, NULL, NULL),
(67, 'Estonia', 'ee', NULL, NULL, NULL, NULL, NULL),
(68, 'Ethiopia', 'et', NULL, NULL, NULL, NULL, NULL),
(69, 'Falkland Islands', 'fk', NULL, NULL, NULL, NULL, NULL),
(70, 'Faroe Islands', 'fo', NULL, NULL, NULL, NULL, NULL),
(71, 'Fiji', 'fj', NULL, NULL, NULL, NULL, NULL),
(72, 'Finland', 'fi', NULL, NULL, NULL, NULL, NULL),
(73, 'France', 'fr', NULL, NULL, NULL, NULL, NULL),
(74, 'French Polynesia', 'pf', NULL, NULL, NULL, NULL, NULL),
(75, 'Gabon', 'ga', NULL, NULL, NULL, NULL, NULL),
(76, 'Gambia', 'gm', NULL, NULL, NULL, NULL, NULL),
(77, 'Georgia', 'ge', NULL, NULL, NULL, NULL, NULL),
(78, 'Germany', 'de', NULL, NULL, NULL, NULL, NULL),
(79, 'Ghana', 'gh', NULL, NULL, NULL, NULL, NULL),
(80, 'Gibraltar', 'gi', NULL, NULL, NULL, NULL, NULL),
(81, 'Greece', 'gr', NULL, NULL, NULL, NULL, NULL),
(82, 'Greenland', 'gl', NULL, NULL, NULL, NULL, NULL),
(83, 'Grenada', 'gd', NULL, NULL, NULL, NULL, NULL),
(84, 'Guam', 'gu', NULL, NULL, NULL, NULL, NULL),
(85, 'Guatemala', 'gt', NULL, NULL, NULL, NULL, NULL),
(86, 'Guernsey', 'gg', NULL, NULL, NULL, NULL, NULL),
(87, 'Guinea', 'gn', NULL, NULL, NULL, NULL, NULL),
(88, 'Guinea-Bissau', 'gw', NULL, NULL, NULL, NULL, NULL),
(89, 'Guyana', 'gy', NULL, NULL, NULL, NULL, NULL),
(90, 'Haiti', 'ht', NULL, NULL, NULL, NULL, NULL),
(91, 'Honduras', 'hn', NULL, NULL, NULL, NULL, NULL),
(92, 'Hong Kong', 'hk', NULL, NULL, NULL, NULL, NULL),
(93, 'Hungary', 'hu', NULL, NULL, NULL, NULL, NULL),
(94, 'Iceland', 'is', NULL, NULL, NULL, NULL, NULL),
(95, 'India', 'in', NULL, NULL, NULL, NULL, NULL),
(96, 'Indonesia', 'id', NULL, NULL, NULL, NULL, NULL),
(97, 'Iran', 'ir', NULL, NULL, NULL, NULL, NULL),
(98, 'Iraq', 'iq', NULL, NULL, NULL, NULL, NULL),
(99, 'Ireland', 'ie', NULL, NULL, NULL, NULL, NULL),
(100, 'Isle of Man', 'im', NULL, NULL, NULL, NULL, NULL),
(101, 'Israel', 'il', NULL, NULL, NULL, NULL, NULL),
(102, 'Italy', 'it', NULL, NULL, NULL, NULL, NULL),
(103, 'Ivory Coast', 'ci', NULL, NULL, NULL, NULL, NULL),
(104, 'Jamaica', 'jm', NULL, NULL, NULL, NULL, NULL),
(105, 'Japan', 'jp', NULL, NULL, NULL, NULL, NULL),
(106, 'Jersey', 'je', NULL, NULL, NULL, NULL, NULL),
(107, 'Jordan', 'jo', NULL, NULL, NULL, NULL, NULL),
(108, 'Kazakhstan', 'kz', NULL, NULL, NULL, NULL, NULL),
(109, 'Kenya', 'ke', NULL, NULL, NULL, NULL, NULL),
(110, 'Kiribati', 'ki', NULL, NULL, NULL, NULL, NULL),
(111, 'Kosovo', 'xk', NULL, NULL, NULL, NULL, NULL),
(112, 'Kuwait', 'kw', NULL, NULL, NULL, NULL, NULL),
(113, 'Kyrgyzstan', 'kg', NULL, NULL, NULL, NULL, NULL),
(114, 'Laos', 'la', NULL, NULL, NULL, NULL, NULL),
(115, 'Latvia', 'lv', NULL, NULL, NULL, NULL, NULL),
(116, 'Lebanon', 'lb', NULL, NULL, NULL, NULL, NULL),
(117, 'Lesotho', 'ls', NULL, NULL, NULL, NULL, NULL),
(118, 'Liberia', 'lr', NULL, NULL, NULL, NULL, NULL),
(119, 'Libya', 'ly', NULL, NULL, NULL, NULL, NULL),
(120, 'Liechtenstein', 'li', NULL, NULL, NULL, NULL, NULL),
(121, 'Lithuania', 'lt', NULL, NULL, NULL, NULL, NULL),
(122, 'Luxembourg', 'lu', NULL, NULL, NULL, NULL, NULL),
(123, 'Macau', 'mo', NULL, NULL, NULL, NULL, NULL),
(124, 'Macedonia', 'mk', NULL, NULL, NULL, NULL, NULL),
(125, 'Madagascar', 'mg', NULL, NULL, NULL, NULL, NULL),
(126, 'Malawi', 'mw', NULL, NULL, NULL, NULL, NULL),
(127, 'Malaysia', 'my', NULL, NULL, NULL, NULL, NULL),
(128, 'Maldives', 'mv', NULL, NULL, NULL, NULL, NULL),
(129, 'Mali', 'ml', NULL, NULL, NULL, NULL, NULL),
(130, 'Malta', 'mt', NULL, NULL, NULL, NULL, NULL),
(131, 'Marshall Islands', 'mh', NULL, NULL, NULL, NULL, NULL),
(132, 'Mauritania', 'mr', NULL, NULL, NULL, NULL, NULL),
(133, 'Mauritius', 'mu', NULL, NULL, NULL, NULL, NULL),
(134, 'Mayotte', 'yt', NULL, NULL, NULL, NULL, NULL),
(135, 'Mexico', 'mx', NULL, NULL, NULL, NULL, NULL),
(136, 'Micronesia', 'fm', NULL, NULL, NULL, NULL, NULL),
(137, 'Moldova', 'md', NULL, NULL, NULL, NULL, NULL),
(138, 'Monaco', 'mc', NULL, NULL, NULL, NULL, NULL),
(139, 'Mongolia', 'mn', NULL, NULL, NULL, NULL, NULL),
(140, 'Montenegro', 'me', NULL, NULL, NULL, NULL, NULL),
(141, 'Montserrat', 'ms', NULL, NULL, NULL, NULL, NULL),
(142, 'Morocco', 'ma', NULL, NULL, NULL, NULL, NULL),
(143, 'Mozambique', 'mz', NULL, NULL, NULL, NULL, NULL),
(144, 'Myanmar', 'mm', NULL, NULL, NULL, NULL, NULL),
(145, 'Namibia', 'na', NULL, NULL, NULL, NULL, NULL),
(146, 'Nauru', 'nr', NULL, NULL, NULL, NULL, NULL),
(147, 'Nepal', 'np', NULL, NULL, NULL, NULL, NULL),
(148, 'Netherlands', 'nl', NULL, NULL, NULL, NULL, NULL),
(149, 'Netherlands Antilles', 'an', NULL, NULL, NULL, NULL, NULL),
(150, 'New Caledonia', 'nc', NULL, NULL, NULL, NULL, NULL),
(151, 'New Zealand', 'nz', NULL, NULL, NULL, NULL, NULL),
(152, 'Nicaragua', 'ni', NULL, NULL, NULL, NULL, NULL),
(153, 'Niger', 'ne', NULL, NULL, NULL, NULL, NULL),
(154, 'Nigeria', 'ng', NULL, NULL, NULL, NULL, NULL),
(155, 'Niue', 'nu', NULL, NULL, NULL, NULL, NULL),
(156, 'North Korea', 'kp', NULL, NULL, NULL, NULL, NULL),
(157, 'Northern Mariana Islands', 'mp', NULL, NULL, NULL, NULL, NULL),
(158, 'Norway', 'no', NULL, NULL, NULL, NULL, NULL),
(159, 'Oman', 'om', NULL, NULL, NULL, NULL, NULL),
(160, 'Pakistan', 'pk', NULL, NULL, NULL, NULL, NULL),
(161, 'Palau', 'pw', NULL, NULL, NULL, NULL, NULL),
(162, 'Palestine', 'ps', NULL, NULL, NULL, NULL, NULL),
(163, 'Panama', 'pa', NULL, NULL, NULL, NULL, NULL),
(164, 'Papua New Guinea', 'pg', NULL, NULL, NULL, NULL, NULL),
(165, 'Paraguay', 'py', NULL, NULL, NULL, NULL, NULL),
(166, 'Peru', 'pe', NULL, NULL, NULL, NULL, NULL),
(167, 'Philippines', 'ph', NULL, NULL, NULL, NULL, NULL),
(168, 'Pitcairn', 'pn', NULL, NULL, NULL, NULL, NULL),
(169, 'Poland', 'pl', NULL, NULL, NULL, NULL, NULL),
(170, 'Portugal', 'pt', NULL, NULL, NULL, NULL, NULL),
(171, 'Puerto Rico', 'pr', NULL, NULL, NULL, NULL, NULL),
(172, 'Qatar', 'qa', NULL, NULL, NULL, NULL, NULL),
(173, 'Republic of the Congo', 'cg', NULL, NULL, NULL, NULL, NULL),
(174, 'Reunion', 're', NULL, NULL, NULL, NULL, NULL),
(175, 'Romania', 'ro', NULL, NULL, NULL, NULL, NULL),
(176, 'Russia', 'ru', NULL, NULL, NULL, NULL, NULL),
(177, 'Rwanda', 'rw', NULL, NULL, NULL, NULL, NULL),
(178, 'Saint Barthelemy', 'bl', NULL, NULL, NULL, NULL, NULL),
(179, 'Saint Helena', 'sh', NULL, NULL, NULL, NULL, NULL),
(180, 'Saint Kitts and Nevis', 'kn', NULL, NULL, NULL, NULL, NULL),
(181, 'Saint Lucia', 'lc', NULL, NULL, NULL, NULL, NULL),
(182, 'Saint Martin', 'mf', NULL, NULL, NULL, NULL, NULL),
(183, 'Saint Pierre and Miquelon', 'pm', NULL, NULL, NULL, NULL, NULL),
(184, 'Saint Vincent and the Grenadines', 'vc', NULL, NULL, NULL, NULL, NULL),
(185, 'Samoa', 'ws', NULL, NULL, NULL, NULL, NULL),
(186, 'San Marino', 'sm', NULL, NULL, NULL, NULL, NULL),
(187, 'Sao Tome and Principe', 'st', NULL, NULL, NULL, NULL, NULL),
(188, 'Saudi Arabia', 'sa', NULL, NULL, NULL, NULL, NULL),
(189, 'Senegal', 'sn', NULL, NULL, NULL, NULL, NULL),
(190, 'Serbia', 'rs', NULL, NULL, NULL, NULL, NULL),
(191, 'Seychelles', 'sc', NULL, NULL, NULL, NULL, NULL),
(192, 'Sierra Leone', 'sl', NULL, NULL, NULL, NULL, NULL),
(193, 'Singapore', 'sg', NULL, NULL, NULL, NULL, NULL),
(194, 'Sint Maarten', 'sx', NULL, NULL, NULL, NULL, NULL),
(195, 'Slovakia', 'sk', NULL, NULL, NULL, NULL, NULL),
(196, 'Slovenia', 'si', NULL, NULL, NULL, NULL, NULL),
(197, 'Solomon Islands', 'sb', NULL, NULL, NULL, NULL, NULL),
(198, 'Somalia', 'so', NULL, NULL, NULL, NULL, NULL),
(199, 'South Africa', 'za', NULL, NULL, NULL, NULL, NULL),
(200, 'South Korea', 'kr', NULL, NULL, NULL, NULL, NULL),
(201, 'South Sudan', 'ss', NULL, NULL, NULL, NULL, NULL),
(202, 'Spain', 'es', NULL, NULL, NULL, NULL, NULL),
(203, 'Sri Lanka', 'lk', NULL, NULL, NULL, NULL, NULL),
(204, 'Sudan', 'sd', NULL, NULL, NULL, NULL, NULL),
(205, 'Suriname', 'sr', NULL, NULL, NULL, NULL, NULL),
(206, 'Svalbard and Jan Mayen', 'sj', NULL, NULL, NULL, NULL, NULL),
(207, 'Swaziland', 'sz', NULL, NULL, NULL, NULL, NULL),
(208, 'Sweden', 'se', NULL, NULL, NULL, NULL, NULL),
(209, 'Switzerland', 'ch', NULL, NULL, NULL, NULL, NULL),
(210, 'Syria', 'sy', NULL, NULL, NULL, NULL, NULL),
(211, 'Taiwan', 'tw', NULL, NULL, NULL, NULL, NULL),
(212, 'Tajikistan', 'tj', NULL, NULL, NULL, NULL, NULL),
(213, 'Tanzania', 'tz', NULL, NULL, NULL, NULL, NULL),
(214, 'Thailand', 'th', NULL, NULL, NULL, NULL, NULL),
(215, 'Togo', 'tg', NULL, NULL, NULL, NULL, NULL),
(216, 'Tokelau', 'tk', NULL, NULL, NULL, NULL, NULL),
(217, 'Tonga', 'to', NULL, NULL, NULL, NULL, NULL),
(218, 'Trinidad and Tobago', 'tt', NULL, NULL, NULL, NULL, NULL),
(219, 'Tunisia', 'tn', NULL, NULL, NULL, NULL, NULL),
(220, 'Turkey', 'tr', NULL, NULL, NULL, NULL, NULL),
(221, 'Turkmenistan', 'tm', NULL, NULL, NULL, NULL, NULL),
(222, 'Turks and Caicos Islands', 'tc', NULL, NULL, NULL, NULL, NULL),
(223, 'Tuvalu', 'tv', NULL, NULL, NULL, NULL, NULL),
(224, 'U.S. Virgin Islands', 'vi', NULL, NULL, NULL, NULL, NULL),
(225, 'Uganda', 'ug', NULL, NULL, NULL, NULL, NULL),
(226, 'Ukraine', 'ua', NULL, NULL, NULL, NULL, NULL),
(227, 'United Arab Emirates', 'ae', NULL, NULL, NULL, NULL, NULL),
(228, 'United Kingdom', 'gb', NULL, NULL, NULL, NULL, NULL),
(229, 'United States', 'us', NULL, NULL, NULL, NULL, NULL),
(230, 'Uruguay', 'uy', NULL, NULL, NULL, NULL, NULL),
(231, 'Uzbekistan', 'uz', NULL, NULL, NULL, NULL, NULL),
(232, 'Vanuatu', 'vu', NULL, NULL, NULL, NULL, NULL),
(233, 'Vatican', 'va', NULL, NULL, NULL, NULL, NULL),
(234, 'Venezuela', 've', NULL, NULL, NULL, NULL, NULL),
(235, 'Vietnam', 'vn', NULL, NULL, NULL, NULL, NULL),
(236, 'Wallis and Futuna', 'wf', NULL, NULL, NULL, NULL, NULL),
(237, 'Western Sahara', 'eh', NULL, NULL, NULL, NULL, NULL),
(238, 'Yemen', 'ye', NULL, NULL, NULL, NULL, NULL),
(239, 'Zambia', 'zm', NULL, NULL, NULL, NULL, NULL),
(240, 'Zimbabwe', 'zw', '1', '100', NULL, '2021-06-24 00:59:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(15,2) NOT NULL,
  `minimum_amount` decimal(15,2) DEFAULT NULL,
  `coupon_discount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_flash_sale` tinyint(1) DEFAULT 0,
  `coupon_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency_conversions`
--

CREATE TABLE `currency_conversions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_date` date NOT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_conversions`
--

INSERT INTO `currency_conversions` (`id`, `from_date`, `to_date`, `rate`, `created_at`, `updated_at`, `deleted_at`, `country_id`) VALUES
(1, '2020-11-21', '2020-12-31', '70.00', NULL, NULL, NULL, 229),
(2, '2020-11-21', '2020-12-31', '83.00', NULL, NULL, NULL, 228);

-- --------------------------------------------------------

--
-- Table structure for table `default_currencies`
--

CREATE TABLE `default_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribers`
--

CREATE TABLE `email_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `faq_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `india_shipping_charges`
--

CREATE TABLE `india_shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taluk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hq_rate_per_kg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', '1', NULL, NULL, NULL),
(2, 'Hindi', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_ips`
--

CREATE TABLE `login_ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_ips`
--

INSERT INTO `login_ips` (`id`, `user`, `ip`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '127.0.0.1', '1', '2021-06-23 00:52:54', '2021-06-23 00:52:54', NULL),
(2, 'Nell Battle', '127.0.0.1', '1', '2021-06-23 00:53:35', '2021-06-23 00:53:35', NULL),
(3, 'Admin', '127.0.0.1', '1', '2021-06-23 00:53:57', '2021-06-23 00:53:57', NULL),
(4, 'Admin', '127.0.0.1', '1', '2021-06-24 00:54:21', '2021-06-24 00:54:21', NULL),
(5, 'Admin', '127.0.0.1', '1', '2021-06-24 04:30:13', '2021-06-24 04:30:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2020_09_08_130501_insert_categorydata', 1),
(8, '2020_09_08_140049_add_col_in_category', 1),
(9, '2020_09_08_140414_subcategorydatainsert', 1),
(10, '2020_09_08_141607_insert_binding_data', 1),
(11, '2020_09_08_141944_languageinsertdata', 1),
(12, '2020_09_09_144532_insertorserstatus', 1),
(13, '2020_11_12_152603_create_cache_table', 1),
(14, '2020_11_19_000001_create_media_table', 1),
(15, '2020_11_19_000002_create_audit_logs_table', 1),
(16, '2020_11_19_000003_create_default_currencies_table', 1),
(17, '2020_11_19_000004_create_coupons_table', 1),
(18, '2020_11_19_000005_create_orders_table', 1),
(19, '2020_11_19_000006_create_order_statuses_table', 1),
(20, '2020_11_19_000007_create_order_items_table', 1),
(21, '2020_11_19_000008_create_settings_table', 1),
(22, '2020_11_19_000009_create_recently_vieweds_table', 1),
(23, '2020_11_19_000010_create_india_shipping_charges_table', 1),
(24, '2020_11_19_000011_create_available_currencies_table', 1),
(25, '2020_11_19_000012_create_currency_conversions_table', 1),
(26, '2020_11_19_000013_create_collections_table', 1),
(27, '2020_11_19_000014_create_books_table', 1),
(28, '2020_11_19_000015_create_active_offers_table', 1),
(29, '2020_11_19_000016_create_price_blocks_table', 1),
(30, '2020_11_19_000017_create_block_offers_table', 1),
(31, '2020_11_19_000018_create_combo_offers_table', 1),
(32, '2020_11_19_000019_create_wish_lists_table', 1),
(33, '2020_11_19_000020_create_blog_categories_table', 1),
(34, '2020_11_19_000021_create_blogs_table', 1),
(35, '2020_11_19_000022_create_faq_categories_table', 1),
(36, '2020_11_19_000023_create_faqs_table', 1),
(37, '2020_11_19_000024_create_contactuses_table', 1),
(38, '2020_11_19_000025_create_book_reviews_table', 1),
(39, '2020_11_19_000026_create_bussiness_withuses_table', 1),
(40, '2020_11_19_000027_create_bindings_table', 1),
(41, '2020_11_19_000028_create_users_table', 1),
(42, '2020_11_19_000029_create_addresses_table', 1),
(43, '2020_11_19_000030_create_book_categories_table', 1),
(44, '2020_11_19_000031_create_countries_table', 1),
(45, '2020_11_19_000032_create_zones_table', 1),
(46, '2020_11_19_000033_create_publishers_table', 1),
(47, '2020_11_19_000034_create_login_ips_table', 1),
(48, '2020_11_19_000035_create_languages_table', 1),
(49, '2020_11_19_000036_create_email_subscribers_table', 1),
(50, '2020_11_19_000037_create_search_keywords_table', 1),
(51, '2020_11_19_000038_create_static_page_types_table', 1),
(52, '2020_11_19_000039_create_sliders_table', 1),
(53, '2020_11_19_000040_create_static_pages_table', 1),
(54, '2020_11_19_000041_create_authors_table', 1),
(55, '2020_11_19_000042_create_roles_table', 1),
(56, '2020_11_19_000043_create_permissions_table', 1),
(57, '2020_11_19_000044_create_stock_statuses_table', 1),
(58, '2020_11_19_000045_create_book_collection_pivot_table', 1),
(59, '2020_11_19_000046_create_binding_book_pivot_table', 1),
(60, '2020_11_19_000047_create_book_combo_offer_pivot_table', 1),
(61, '2020_11_19_000048_create_role_user_pivot_table', 1),
(62, '2020_11_19_000049_create_permission_role_pivot_table', 1),
(63, '2020_11_19_000050_add_relationship_fields_to_users_table', 1),
(64, '2020_11_19_000051_add_relationship_fields_to_faqs_table', 1),
(65, '2020_11_19_000052_add_relationship_fields_to_wish_lists_table', 1),
(66, '2020_11_19_000053_add_relationship_fields_to_blogs_table', 1),
(67, '2020_11_19_000054_add_relationship_fields_to_combo_offers_table', 1),
(68, '2020_11_19_000055_add_relationship_fields_to_zones_table', 1),
(69, '2020_11_19_000056_add_relationship_fields_to_book_categories_table', 1),
(70, '2020_11_19_000057_add_relationship_fields_to_addresses_table', 1),
(71, '2020_11_19_000058_add_relationship_fields_to_default_currencies_table', 1),
(72, '2020_11_19_000059_add_relationship_fields_to_currency_conversions_table', 1),
(73, '2020_11_19_000060_add_relationship_fields_to_recently_vieweds_table', 1),
(74, '2020_11_19_000061_add_relationship_fields_to_search_keywords_table', 1),
(75, '2020_11_19_000062_add_relationship_fields_to_order_items_table', 1),
(76, '2020_11_19_000063_add_relationship_fields_to_orders_table', 1),
(77, '2020_11_19_000064_add_relationship_fields_to_static_pages_table', 1),
(78, '2020_11_19_000065_add_relationship_fields_to_book_reviews_table', 1),
(79, '2020_11_19_000066_add_relationship_fields_to_books_table', 1),
(80, '2020_11_19_000067_add_relationship_fields_to_coupons_table', 1),
(81, '2020_11_19_072354__insert_predefined_value', 1),
(82, '2020_11_21_103539__insert_value_in_currencies', 2),
(83, '2020_11_21_104444__insert_value_in_currencies_1', 2),
(84, '2018_08_08_100000_create_telescope_entries_table', 3),
(85, '2020_11_22_020549_create_sessions_table', 3),
(86, '2020_11_22_045459__insert_in_block_offer', 4),
(87, '2020_11_22_050109__add_col_in_price_block', 5),
(88, '2020_11_22_050939__insert_value_in_price_blocked', 6),
(89, '2019_05_03_000001_create_customer_columns', 7),
(90, '2019_05_03_000002_create_subscriptions_table', 7),
(91, '2019_05_03_000003_create_subscription_items_table', 7),
(92, '2020_11_23_094852__add_col_in_books', 8),
(93, '2021_06_22_051344__add_col_to_user_tables', 9),
(94, '2021_06_22_095121__add_address_col', 10);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_completed` int(11) DEFAULT NULL,
  `order_amount` decimal(15,2) NOT NULL,
  `user_agent` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_book_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `order_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_no`, `invoice_prefix`, `shipping_charge`, `gst_amount`, `coupon`, `coupon_discount`, `payment_reference`, `ip`, `is_completed`, `order_amount`, `user_agent`, `total_book_amount`, `payment_method`, `payment_status`, `order_date`, `order_key`, `created_at`, `updated_at`, `deleted_at`, `order_status_id`, `address_id`, `date_modified`) VALUES
(3, '1', 'STHULA', NULL, '0', NULL, NULL, 'pay_GByrTPrMR26Eb2', '::1', 1, '1207.09', NULL, NULL, NULL, NULL, '2020-11-22', 'crGzdfFJzYQl9sgQ6ysRZKiJppWuHu7bXWorX1Nt', '2020-11-22 01:35:05', '2020-12-11 22:01:10', NULL, 1, NULL, NULL),
(5, '3', 'STHULA', NULL, '0', NULL, NULL, 'pay_HPypviRyyNVJsR', '127.0.0.1', 1, '671.00', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '671', '1', '1', '2021-06-22', 'x2pnXifMmtO5lUjA74FDMbUAURR2WGZ7CGCLv8JE', '2021-06-21 23:02:30', '2021-06-21 23:47:46', NULL, 1, NULL, '2021-06-22 05:17:46'),
(6, NULL, 'STHULA', NULL, NULL, NULL, NULL, NULL, '127.0.0.1', 0, '531.00', NULL, NULL, NULL, NULL, '2021-06-22', '3KFSE515eJ1DbKocenG8bMJ9lZcdWJ9qDeyzAci4', '2021-06-22 03:17:03', '2021-06-22 03:17:03', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(15,2) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `gst_amount` decimal(15,2) DEFAULT NULL,
  `total_amount` decimal(15,2) DEFAULT NULL,
  `cart_item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `combo_offer_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `unit_price`, `price`, `gst_amount`, `total_amount`, `cart_item_type`, `created_at`, `updated_at`, `deleted_at`, `order_id`, `book_id`, `combo_offer_id`) VALUES
(3, 1, '5.09', '5.09', NULL, '5.09', '1', '2020-11-22 01:35:05', '2020-11-22 01:35:05', NULL, 3, 9, NULL),
(4, 2, '671.00', '671.00', NULL, '1342.00', '1', '2020-11-22 03:06:51', '2020-11-22 03:06:51', NULL, 3, 8, NULL),
(5, 1, '531.00', '531.00', NULL, '531.00', '1', '2020-12-11 21:59:40', '2020-12-11 21:59:40', NULL, 3, 12, NULL),
(10, 1, '671.00', '671.00', NULL, '671.00', '1', '2021-06-21 23:02:31', '2021-06-21 23:02:31', NULL, 5, 8, NULL),
(11, 1, '531.00', '531.00', NULL, '531.00', '1', '2021-06-22 03:17:03', '2021-06-22 03:17:03', NULL, 6, 12, NULL),
(12, 1, '2.04', '2.04', NULL, '2.04', '1', '2021-06-24 04:01:24', '2021-06-24 04:01:24', NULL, 6, 5, NULL),
(13, 1, '356.00', '356.00', NULL, '356.00', '1', '2022-05-21 09:41:42', '2022-05-21 09:41:42', NULL, 6, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `title`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New', 'New', NULL, NULL, NULL),
(2, 'cancelled', 'cancelled', NULL, NULL, NULL),
(3, 'process', 'process', NULL, NULL, NULL),
(4, 'disputed', 'Disputed', NULL, NULL, NULL),
(5, 'Return', 'Return', NULL, NULL, NULL),
(6, 'Return Request', 'Return Request', NULL, NULL, NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'audit_log_show', NULL, NULL, NULL),
(18, 'audit_log_access', NULL, NULL, NULL),
(19, 'book_category_create', NULL, NULL, NULL),
(20, 'book_category_edit', NULL, NULL, NULL),
(21, 'book_category_show', NULL, NULL, NULL),
(22, 'book_category_delete', NULL, NULL, NULL),
(23, 'book_category_access', NULL, NULL, NULL),
(24, 'category_module_access', NULL, NULL, NULL),
(25, 'address_create', NULL, NULL, NULL),
(26, 'address_edit', NULL, NULL, NULL),
(27, 'address_show', NULL, NULL, NULL),
(28, 'address_delete', NULL, NULL, NULL),
(29, 'address_access', NULL, NULL, NULL),
(30, 'country_create', NULL, NULL, NULL),
(31, 'country_edit', NULL, NULL, NULL),
(32, 'country_show', NULL, NULL, NULL),
(33, 'country_delete', NULL, NULL, NULL),
(34, 'country_access', NULL, NULL, NULL),
(35, 'zone_create', NULL, NULL, NULL),
(36, 'zone_edit', NULL, NULL, NULL),
(37, 'zone_show', NULL, NULL, NULL),
(38, 'zone_delete', NULL, NULL, NULL),
(39, 'zone_access', NULL, NULL, NULL),
(40, 'location_module_access', NULL, NULL, NULL),
(41, 'login_ip_create', NULL, NULL, NULL),
(42, 'login_ip_edit', NULL, NULL, NULL),
(43, 'login_ip_show', NULL, NULL, NULL),
(44, 'login_ip_delete', NULL, NULL, NULL),
(45, 'login_ip_access', NULL, NULL, NULL),
(46, 'book_module_access', NULL, NULL, NULL),
(47, 'language_create', NULL, NULL, NULL),
(48, 'language_edit', NULL, NULL, NULL),
(49, 'language_show', NULL, NULL, NULL),
(50, 'language_delete', NULL, NULL, NULL),
(51, 'language_access', NULL, NULL, NULL),
(52, 'email_subscriber_create', NULL, NULL, NULL),
(53, 'email_subscriber_edit', NULL, NULL, NULL),
(54, 'email_subscriber_show', NULL, NULL, NULL),
(55, 'email_subscriber_delete', NULL, NULL, NULL),
(56, 'email_subscriber_access', NULL, NULL, NULL),
(57, 'search_keyword_edit', NULL, NULL, NULL),
(58, 'search_keyword_show', NULL, NULL, NULL),
(59, 'search_keyword_delete', NULL, NULL, NULL),
(60, 'search_keyword_access', NULL, NULL, NULL),
(61, 'slider_create', NULL, NULL, NULL),
(62, 'slider_edit', NULL, NULL, NULL),
(63, 'slider_show', NULL, NULL, NULL),
(64, 'slider_delete', NULL, NULL, NULL),
(65, 'slider_access', NULL, NULL, NULL),
(66, 'cms_module_access', NULL, NULL, NULL),
(67, 'author_create', NULL, NULL, NULL),
(68, 'author_edit', NULL, NULL, NULL),
(69, 'author_show', NULL, NULL, NULL),
(70, 'author_delete', NULL, NULL, NULL),
(71, 'author_access', NULL, NULL, NULL),
(72, 'order_module_access', NULL, NULL, NULL),
(73, 'static_page_type_create', NULL, NULL, NULL),
(74, 'static_page_type_edit', NULL, NULL, NULL),
(75, 'static_page_type_show', NULL, NULL, NULL),
(76, 'static_page_type_delete', NULL, NULL, NULL),
(77, 'static_page_type_access', NULL, NULL, NULL),
(78, 'static_page_create', NULL, NULL, NULL),
(79, 'static_page_edit', NULL, NULL, NULL),
(80, 'static_page_show', NULL, NULL, NULL),
(81, 'static_page_delete', NULL, NULL, NULL),
(82, 'static_page_access', NULL, NULL, NULL),
(83, 'stock_status_create', NULL, NULL, NULL),
(84, 'stock_status_edit', NULL, NULL, NULL),
(85, 'stock_status_show', NULL, NULL, NULL),
(86, 'stock_status_delete', NULL, NULL, NULL),
(87, 'stock_status_access', NULL, NULL, NULL),
(88, 'publisher_create', NULL, NULL, NULL),
(89, 'publisher_edit', NULL, NULL, NULL),
(90, 'publisher_show', NULL, NULL, NULL),
(91, 'publisher_delete', NULL, NULL, NULL),
(92, 'publisher_access', NULL, NULL, NULL),
(93, 'binding_create', NULL, NULL, NULL),
(94, 'binding_edit', NULL, NULL, NULL),
(95, 'binding_show', NULL, NULL, NULL),
(96, 'binding_delete', NULL, NULL, NULL),
(97, 'binding_access', NULL, NULL, NULL),
(98, 'book_create', NULL, NULL, NULL),
(99, 'book_edit', NULL, NULL, NULL),
(100, 'book_show', NULL, NULL, NULL),
(101, 'book_delete', NULL, NULL, NULL),
(102, 'book_access', NULL, NULL, NULL),
(103, 'book_review_create', NULL, NULL, NULL),
(104, 'book_review_edit', NULL, NULL, NULL),
(105, 'book_review_show', NULL, NULL, NULL),
(106, 'book_review_delete', NULL, NULL, NULL),
(107, 'book_review_access', NULL, NULL, NULL),
(108, 'coupon_create', NULL, NULL, NULL),
(109, 'coupon_edit', NULL, NULL, NULL),
(110, 'coupon_show', NULL, NULL, NULL),
(111, 'coupon_delete', NULL, NULL, NULL),
(112, 'coupon_access', NULL, NULL, NULL),
(113, 'order_create', NULL, NULL, NULL),
(114, 'order_edit', NULL, NULL, NULL),
(115, 'order_show', NULL, NULL, NULL),
(116, 'order_delete', NULL, NULL, NULL),
(117, 'order_access', NULL, NULL, NULL),
(118, 'order_status_create', NULL, NULL, NULL),
(119, 'order_status_edit', NULL, NULL, NULL),
(120, 'order_status_show', NULL, NULL, NULL),
(121, 'order_status_delete', NULL, NULL, NULL),
(122, 'order_status_access', NULL, NULL, NULL),
(123, 'order_item_create', NULL, NULL, NULL),
(124, 'order_item_edit', NULL, NULL, NULL),
(125, 'order_item_show', NULL, NULL, NULL),
(126, 'order_item_delete', NULL, NULL, NULL),
(127, 'order_item_access', NULL, NULL, NULL),
(128, 'setting_create', NULL, NULL, NULL),
(129, 'setting_edit', NULL, NULL, NULL),
(130, 'setting_show', NULL, NULL, NULL),
(131, 'setting_delete', NULL, NULL, NULL),
(132, 'setting_access', NULL, NULL, NULL),
(133, 'recently_viewed_edit', NULL, NULL, NULL),
(134, 'recently_viewed_show', NULL, NULL, NULL),
(135, 'recently_viewed_delete', NULL, NULL, NULL),
(136, 'recently_viewed_access', NULL, NULL, NULL),
(137, 'india_shipping_charge_create', NULL, NULL, NULL),
(138, 'india_shipping_charge_edit', NULL, NULL, NULL),
(139, 'india_shipping_charge_show', NULL, NULL, NULL),
(140, 'india_shipping_charge_delete', NULL, NULL, NULL),
(141, 'india_shipping_charge_access', NULL, NULL, NULL),
(142, 'available_currency_create', NULL, NULL, NULL),
(143, 'available_currency_edit', NULL, NULL, NULL),
(144, 'available_currency_show', NULL, NULL, NULL),
(145, 'available_currency_delete', NULL, NULL, NULL),
(146, 'available_currency_access', NULL, NULL, NULL),
(147, 'currency_conversion_create', NULL, NULL, NULL),
(148, 'currency_conversion_edit', NULL, NULL, NULL),
(149, 'currency_conversion_show', NULL, NULL, NULL),
(150, 'currency_conversion_delete', NULL, NULL, NULL),
(151, 'currency_conversion_access', NULL, NULL, NULL),
(152, 'default_currency_create', NULL, NULL, NULL),
(153, 'default_currency_edit', NULL, NULL, NULL),
(154, 'default_currency_show', NULL, NULL, NULL),
(155, 'default_currency_delete', NULL, NULL, NULL),
(156, 'default_currency_access', NULL, NULL, NULL),
(157, 'currency_module_access', NULL, NULL, NULL),
(158, 'collection_create', NULL, NULL, NULL),
(159, 'collection_edit', NULL, NULL, NULL),
(160, 'collection_show', NULL, NULL, NULL),
(161, 'collection_delete', NULL, NULL, NULL),
(162, 'collection_access', NULL, NULL, NULL),
(163, 'active_offer_create', NULL, NULL, NULL),
(164, 'active_offer_edit', NULL, NULL, NULL),
(165, 'active_offer_show', NULL, NULL, NULL),
(166, 'active_offer_delete', NULL, NULL, NULL),
(167, 'active_offer_access', NULL, NULL, NULL),
(168, 'price_block_create', NULL, NULL, NULL),
(169, 'price_block_edit', NULL, NULL, NULL),
(170, 'price_block_show', NULL, NULL, NULL),
(171, 'price_block_delete', NULL, NULL, NULL),
(172, 'price_block_access', NULL, NULL, NULL),
(173, 'block_offer_create', NULL, NULL, NULL),
(174, 'block_offer_edit', NULL, NULL, NULL),
(175, 'block_offer_show', NULL, NULL, NULL),
(176, 'block_offer_delete', NULL, NULL, NULL),
(177, 'block_offer_access', NULL, NULL, NULL),
(178, 'combo_offer_create', NULL, NULL, NULL),
(179, 'combo_offer_edit', NULL, NULL, NULL),
(180, 'combo_offer_show', NULL, NULL, NULL),
(181, 'combo_offer_delete', NULL, NULL, NULL),
(182, 'combo_offer_access', NULL, NULL, NULL),
(183, 'wish_list_create', NULL, NULL, NULL),
(184, 'wish_list_edit', NULL, NULL, NULL),
(185, 'wish_list_show', NULL, NULL, NULL),
(186, 'wish_list_delete', NULL, NULL, NULL),
(187, 'wish_list_access', NULL, NULL, NULL),
(188, 'blog_category_create', NULL, NULL, NULL),
(189, 'blog_category_edit', NULL, NULL, NULL),
(190, 'blog_category_show', NULL, NULL, NULL),
(191, 'blog_category_delete', NULL, NULL, NULL),
(192, 'blog_category_access', NULL, NULL, NULL),
(193, 'blog_create', NULL, NULL, NULL),
(194, 'blog_edit', NULL, NULL, NULL),
(195, 'blog_show', NULL, NULL, NULL),
(196, 'blog_delete', NULL, NULL, NULL),
(197, 'blog_access', NULL, NULL, NULL),
(198, 'blog_module_access', NULL, NULL, NULL),
(199, 'offers_module_access', NULL, NULL, NULL),
(200, 'faq_category_create', NULL, NULL, NULL),
(201, 'faq_category_edit', NULL, NULL, NULL),
(202, 'faq_category_show', NULL, NULL, NULL),
(203, 'faq_category_delete', NULL, NULL, NULL),
(204, 'faq_category_access', NULL, NULL, NULL),
(205, 'faq_module_access', NULL, NULL, NULL),
(206, 'faq_create', NULL, NULL, NULL),
(207, 'faq_edit', NULL, NULL, NULL),
(208, 'faq_show', NULL, NULL, NULL),
(209, 'faq_delete', NULL, NULL, NULL),
(210, 'faq_access', NULL, NULL, NULL),
(211, 'alert_module_access', NULL, NULL, NULL),
(212, 'contact_us_create', NULL, NULL, NULL),
(213, 'contact_us_edit', NULL, NULL, NULL),
(214, 'contact_us_show', NULL, NULL, NULL),
(215, 'contact_us_delete', NULL, NULL, NULL),
(216, 'contact_us_access', NULL, NULL, NULL),
(217, 'bussiness_with_us_create', NULL, NULL, NULL),
(218, 'bussiness_with_us_edit', NULL, NULL, NULL),
(219, 'bussiness_with_us_show', NULL, NULL, NULL),
(220, 'bussiness_with_us_delete', NULL, NULL, NULL),
(221, 'bussiness_with_us_access', NULL, NULL, NULL),
(222, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167),
(1, 168),
(1, 169),
(1, 170),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178),
(1, 179),
(1, 180),
(1, 181),
(1, 182),
(1, 183),
(1, 184),
(1, 185),
(1, 186),
(1, 187),
(1, 188),
(1, 189),
(1, 190),
(1, 191),
(1, 192),
(1, 193),
(1, 194),
(1, 195),
(1, 196),
(1, 197),
(1, 198),
(1, 199),
(1, 200),
(1, 201),
(1, 202),
(1, 203),
(1, 204),
(1, 205),
(1, 206),
(1, 207),
(1, 208),
(1, 209),
(1, 210),
(1, 211),
(1, 212),
(1, 213),
(1, 214),
(1, 215),
(1, 216),
(1, 217),
(1, 218),
(1, 219),
(1, 220),
(1, 221),
(1, 222),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(2, 91),
(2, 92),
(2, 93),
(2, 94),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 125),
(2, 126),
(2, 127),
(2, 128),
(2, 129),
(2, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 136),
(2, 137),
(2, 138),
(2, 139),
(2, 140),
(2, 141),
(2, 142),
(2, 143),
(2, 144),
(2, 145),
(2, 146),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151),
(2, 152),
(2, 153),
(2, 154),
(2, 155),
(2, 156),
(2, 157),
(2, 158),
(2, 159),
(2, 160),
(2, 161),
(2, 162),
(2, 163),
(2, 164),
(2, 165),
(2, 166),
(2, 167),
(2, 168),
(2, 169),
(2, 170),
(2, 171),
(2, 172),
(2, 173),
(2, 174),
(2, 175),
(2, 176),
(2, 177),
(2, 178),
(2, 179),
(2, 180),
(2, 181),
(2, 182),
(2, 183),
(2, 184),
(2, 185),
(2, 186),
(2, 187),
(2, 188),
(2, 189),
(2, 190),
(2, 191),
(2, 192),
(2, 193),
(2, 194),
(2, 195),
(2, 196),
(2, 197),
(2, 198),
(2, 199),
(2, 200),
(2, 201),
(2, 202),
(2, 203),
(2, 204),
(2, 205),
(2, 206),
(2, 207),
(2, 208),
(2, 209),
(2, 210),
(2, 211),
(2, 212),
(2, 213),
(2, 214),
(2, 215),
(2, 216),
(2, 217),
(2, 218),
(2, 219),
(2, 220),
(2, 221),
(2, 222);

-- --------------------------------------------------------

--
-- Table structure for table `price_blocks`
--

CREATE TABLE `price_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_blocks`
--

INSERT INTO `price_blocks` (`id`, `block_title`, `status`, `set_order`, `created_at`, `updated_at`, `deleted_at`, `price`) VALUES
(1, 'Buy Book under', '1', 1, NULL, NULL, NULL, '49.00'),
(2, 'Buy Book under', '1', 1, NULL, NULL, NULL, '99.00'),
(3, 'Buy Book under', '1', 1, NULL, NULL, NULL, '149.00'),
(4, 'Buy Book under', '1', 1, NULL, NULL, NULL, '199.00');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Everett Kunde', 'at', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(2, 'Roosevelt Jacobs', 'doloremque', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(3, 'Wanda Muller', 'eveniet', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(4, 'Prof. Deondre Lindgren I', 'deserunt', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(5, 'Ms. Amina Schiller IV', 'aperiam', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(6, 'Dr. Wyatt DuBuque', 'fugit', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(7, 'Roman Powlowski', 'ut', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(8, 'Domenica Morar', 'dolorem', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(9, 'Miss Madeline Bahringer', 'optio', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(10, 'Hank Stehr DVM', 'doloribus', '2020-11-21 02:15:39', '2020-11-21 02:15:39', NULL),
(11, 'Upkar', '1', '2020-11-24 01:00:40', '2020-11-24 01:00:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recently_vieweds`
--

CREATE TABLE `recently_vieweds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_times` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recently_vieweds`
--

INSERT INTO `recently_vieweds` (`id`, `date_time`, `url`, `ip`, `no_of_times`, `created_at`, `updated_at`, `deleted_at`, `book_id`, `user_id`) VALUES
(1, '2020-11-22 01:57:03', 'http://localhost/sthula/book/quod-aut-error-sed-molestiae', '::1', 3, '2020-11-21 20:27:03', '2020-11-21 20:29:56', NULL, 2, NULL),
(2, '2020-11-22 06:14:25', 'http://localhost/sthula/book/rerum-nisi-unde-sint-sit-esse-error-repellat-commodi', '::1', 19, '2020-11-22 00:44:25', '2020-11-22 01:11:45', NULL, 5, NULL),
(3, '2020-11-22 06:56:48', 'http://localhost/sthula/book/aspernatur-quidem-aut-doloremque', '::1', 3, '2020-11-22 01:26:48', '2020-11-22 03:06:39', NULL, 8, NULL),
(4, '2020-11-22 07:04:27', 'http://localhost/sthula/book/sapiente-eaque-explicabo-nobis-nulla', '::1', 1, '2020-11-22 01:34:27', '2020-11-22 01:34:27', NULL, 9, NULL),
(5, '2020-12-12 03:29:21', 'http://localhost/sthula/book/aliquam-qui-iusto-odit-consequatur-incidunt-ipsum-est', '::1', 1, '2020-12-11 21:59:21', '2020-12-11 21:59:21', NULL, 12, NULL),
(6, '2021-06-23 09:36:12', 'http://local.project3/book/aliquam-qui-iusto-odit-consequatur-incidunt-ipsum-est', '127.0.0.1', 2, '2021-06-23 04:06:12', '2021-06-23 04:06:45', NULL, 12, 1),
(7, '2021-06-24 06:38:58', 'http://local.project3/book/sapiente-eaque-explicabo-nobis-nulla', '127.0.0.1', 1, '2021-06-24 01:08:58', '2021-06-24 01:08:58', NULL, 9, 1),
(8, '2021-06-24 09:30:46', 'http://local.project3/book/rerum-nisi-unde-sint-sit-esse-error-repellat-commodi', '127.0.0.1', 2, '2021-06-24 04:00:46', '2021-06-24 04:01:13', NULL, 5, NULL),
(9, '2021-06-24 10:35:51', 'http://local.project3/book/aspernatur-quidem-aut-doloremque', '127.0.0.1', 9, '2021-06-24 05:05:51', '2021-06-24 05:18:16', NULL, 8, 1),
(10, '2022-05-21 15:09:16', 'http://127.0.0.1:8000/book/sapiente-eaque-explicabo-nobis-nulla', '127.0.0.1', 2, '2022-05-21 09:39:16', '2022-05-21 09:41:30', NULL, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `search_keywords`
--

CREATE TABLE `search_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `search_keywords`
--

INSERT INTO `search_keywords` (`id`, `keyword_name`, `ip`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'prof', '127.0.0.1', '2021-06-23 01:00:55', '2021-06-23 01:00:55', 1),
(2, 'Eiusmod', '127.0.0.1', '2021-06-23 01:02:37', '2021-06-23 01:02:37', 1),
(3, 'prof', '127.0.0.1', '2021-06-24 04:24:45', '2021-06-24 04:24:45', NULL),
(4, 'prof', '127.0.0.1', '2021-06-24 04:41:09', '2021-06-24 04:41:09', 1),
(5, 'prof', '127.0.0.1', '2021-06-24 04:41:20', '2021-06-24 04:41:20', 1);

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
('2GHDeMqAKqWAQEYh1P6cn0We9XKGyeiXni23yLUE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiODlRaVpBTHBLRGpnenZ4OEZuQmJTWnR6MkFmOGxERmw2THV3VHM4ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0My9jbGVhciI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzA6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0My93aXNobGlzdCI7fX0=', 1624526103),
('3OTSNSYtJGbpf3ZkgRPHOjBdxKoCFWiY5s5W9zaI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQTN5dm4zWmYwVHgzeFhIMWFYaUxva0RLbm1BUFFXZ21hYXo2UFNQQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbC5pbXMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1624692957),
('7i7lloRnC1Ny5QY3MXrw9YF4XC5om3VpTatTn25q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHRBWW5lNXFUTktKZ0RyQnhQNEljaXlPSHNFOTg3NTVKYkpJb3ExNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631162646),
('bW2Bt6naHUwOhHg0bWEOXwlgg3mZ6oO4sWmSiA4Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGxHME1vNVl0YVVSdUU2QWhibWJFN1BCUlRYekNRU1Y5dk8wcnFWZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1624533367),
('ivAw6Y3ZC61wdrG2UlDZgM2N3TSQSsV06qZNCEUO', NULL, '127.0.0.1', 'PostmanRuntime/7.28.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHdpZjRYdXFWT1NZOUR4clpZeXBOMFVwem54R09naldQenpUQzBhTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0My9hcGkvdGlja2V0L2dyb3VuZHN0YWZmIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1625729499),
('mjfVZo2o3OqNIxE3quO1ZoNF48U03zKcTkI2T6yg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRUMyRjlsbU1sdHhJQVdqREFpaGdXWGlFOGVmOWtHTmxXWG5LajJ3UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0My9ib29rL2FzcGVybmF0dXItcXVpZGVtLWF1dC1kb2xvcmVtcXVlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJjdXJyZW5jeSI7czo0OiJFVVJPIjtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1624531697),
('qqUoJ2I2rFt78zONciZg02Ir28lff7gUIFiav8ap', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3FsN3d4REp5bzRPYTBWcGFmeVc3QTRBQ2FRQzAzSUIxdjlYTGxlaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0My9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1624854922),
('RWVTdXH35kuSSfQt01JqMk32pLUyx4FCGJlpwCtx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaklUc1JhbDBPN2MyQVpDcEROVUFqb1c4Njgya2xibER5MUdKS2ZJcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653146766),
('seLt04uDYdeSeCTJztFDkLKSVx4hAobadO4Gmv0N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2xZcFdkTmhpeEtkMTlXcjBFYjJjcndVY0NGSmQzREtaM1pBT1Y1NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbC5wcm9qZWN0MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1624527427),
('UEylT6LAmuEWs2a6ZrdU7jBWy76EkdTWPGWEDyob', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieE5KdUNueUlPR3ozTzZzSzBkMFkyb1dwQkE2UXNaMFFONWl0WVdxMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1624692947),
('XN6JS6Yq4ULgISKIaeMduIzAhB9tAeZRWiz5XwWn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSk51VFo2VWt4RmlOWnB5dm9IUDBGeUhkamRveE5OcnVreEdUWkVYVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1624692935);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `slider_image`, `target_url`, `slider_position`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Prof. August Pollich DVM', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '1', '1', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(2, 'Prof. Adelia Ledner', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(3, 'Dr. Hailey Wisoky', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '1', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(4, 'Prof. Garrett King', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(5, 'Howard Jerde', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '2', '1', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(6, 'Ozella Graham V', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '1', '1', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(7, 'Ignacio Boehm', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '1', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(8, 'Bart Sporer', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(9, 'Timothy Langosh', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '1', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(10, 'Prof. Evelyn Sanford', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(11, 'Blanca Morissette', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(12, 'Prof. Marilie Turner III', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '1', '1', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(13, 'Esther O\'Kon Sr.', 'https://via.placeholder.com/407x225', 'https://via.placeholder.com/407x225', '2', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(14, 'Miss Aileen Wehner', 'https://via.placeholder.com/614x325', 'https://via.placeholder.com/614x325', '1', '0', '2020-11-21 02:12:07', '2020-11-21 02:12:07', NULL),
(15, 'Ayden Kihn', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/sliderImages/UrH3uSebR9HaPSmNAIE3uh5M8zVP7JBReY3MiD1s.jpg', 'https://via.placeholder.com/614x325', '2', '1', '2020-11-21 02:12:07', '2021-06-23 04:25:06', NULL),
(16, 'Illana Kent', 'https://sthulaimage.s3.ap-south-1.amazonaws.com/sliderImages/SwAw0XdduGnstyCxuKWtxZqhMAsx3tpB9DGX4h0x.png', 'Dolores lorem facere', '2', '0', '2021-06-23 04:21:58', '2021-06-23 04:21:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `static_page_type_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `static_page_types`
--

CREATE TABLE `static_page_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_statuses`
--

CREATE TABLE `stock_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_statuses`
--

INSERT INTO `stock_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'In Stock', NULL, NULL, NULL),
(2, 'out of Stock', NULL, NULL, NULL),
(3, 'Available in next 2-3 days', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_address` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_online` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `profile_photo`, `default_address`, `phone`, `is_online`, `created_at`, `updated_at`, `deleted_at`, `country_id`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$330CEHLOVWfqqmczBzQ3/uiS6PKJv5iLJ5Ah/JJhsbMHlAHQ5ASoG', NULL, NULL, 'https://sthulaimage.s3.ap-south-1.amazonaws.com/avatar/0RMaElPAxSA6s0O6s85v8uYO7eQrPZQllRp6PtvS.jpg', 8, '9013628322', NULL, NULL, '2021-06-24 05:03:38', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'hellosaif', 'sfvds@ds.com', NULL, '$2y$10$BGBEGcief1VATiU4aKT/2.qvf7ymfH4hNrh/lqYe/LV8.VAaC2d3i', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-22 01:48:09', '2020-11-22 01:48:09', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'hellosaif', 'saif@gmail.com', NULL, '$2y$10$TVSAzrmbAuomjt0DvZhToeVTOPK0YNW5se3rU6QFYw8KEix7xWKKm', NULL, '1', NULL, NULL, '09013628321', NULL, '2020-11-22 02:35:23', '2020-11-22 02:56:30', NULL, 95, NULL, NULL, NULL, NULL),
(4, 'saif', 'test@gmail.com', NULL, '$2y$10$6q1Lt2bwIQWtepoyWlUdTePs6vYqTEsoxJQVf4UVQxUEAVKm8bixy', NULL, '1', NULL, NULL, '9013628321', NULL, '2020-11-22 02:58:52', '2020-11-22 02:58:52', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Unity Humphrey', 'funyzem@mailinator.com', NULL, '$2y$10$GcA.I5Xm8Ek8z68sFmJZ1u8w7DWKpPKVu4nBB0pFCSHuTPR0mFezm', NULL, '1', NULL, NULL, '+1 (862) 574-5876', '1', '2021-06-21 01:27:03', '2021-06-21 01:27:03', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ashely Sellers', 'jemenugez@mailinator.com', NULL, '$2y$10$wm0S.Hh51kyftK6sVH8dJ.E82ylCebBmcBO9apjwXtauPeQM.hm.e', NULL, '1', NULL, NULL, '+1 (786) 511-8331', '1', '2021-06-21 06:43:24', '2021-06-21 06:43:24', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kaitlin Newman', 'xavez@mailinator.com', NULL, '$2y$10$tTRmS43PcSaJKk0VAAckgOY/Smr2h5CA8LegvxyOFBYuFZmZqiDt2', NULL, '1', NULL, NULL, '+1 (361) 464-2372', NULL, '2021-06-23 00:16:45', '2021-06-23 00:18:24', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Nell Battle', 'md.saif@outlook.com', NULL, '$2y$10$UAoF9XOy0lBrtmnuQ7mDXuPgMOv0ob9MlGJ8KIB.29H6WsTuFJDx6', NULL, '1', NULL, NULL, '+14544647854', '1', '2021-06-23 00:48:39', '2021-06-23 00:48:39', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `ip`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `book_id`) VALUES
(1, '127.0.0.1', '2021-06-21 05:48:30', '2021-06-21 06:23:20', '2021-06-21 06:23:20', 5, 8),
(2, '127.0.0.1', '2021-06-21 05:53:25', '2021-06-21 06:24:49', '2021-06-21 06:24:49', 5, 13),
(3, '127.0.0.1', '2021-06-21 05:53:31', '2021-06-21 06:26:04', '2021-06-21 06:26:04', 5, 12),
(4, '127.0.0.1', '2021-06-21 05:53:38', '2021-06-21 06:26:42', '2021-06-21 06:26:42', 5, 15),
(5, '127.0.0.1', '2021-06-21 06:27:03', '2021-06-21 06:46:32', '2021-06-21 06:46:32', 5, 12),
(6, '127.0.0.1', '2021-06-21 06:27:11', '2021-06-21 06:47:51', '2021-06-21 06:47:51', 5, 13),
(7, '127.0.0.1', '2021-06-21 06:27:38', '2021-06-21 06:49:42', '2021-06-21 06:49:42', 5, 13),
(8, '127.0.0.1', '2021-06-21 06:56:41', '2021-06-22 03:17:03', '2021-06-22 03:17:03', 6, 12),
(9, '127.0.0.1', '2021-06-21 06:57:05', '2021-06-22 06:12:50', '2021-06-22 06:12:50', 6, 13),
(10, '127.0.0.1', '2021-06-21 06:59:42', '2021-06-21 06:59:42', NULL, 6, 12),
(11, '127.0.0.1', '2021-06-21 06:59:45', '2021-06-21 06:59:45', NULL, 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`, `deleted_at`, `country_id`) VALUES
(1, 'Bihar', 'bh', '1', NULL, NULL, NULL, 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_offers`
--
ALTER TABLE `active_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_2078908` (`user_id`),
  ADD KEY `country_fk_2078909` (`country_id`),
  ADD KEY `zone_fk_2078910` (`zone_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_currencies`
--
ALTER TABLE `available_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bindings`
--
ALTER TABLE `bindings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binding_book`
--
ALTER TABLE `binding_book`
  ADD KEY `book_id_fk_2079162` (`book_id`),
  ADD KEY `binding_id_fk_2079162` (`binding_id`);

--
-- Indexes for table `block_offers`
--
ALTER TABLE `block_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_fk_2621497` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_title_unique` (`title`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_authors_fk_2079159` (`book_authors_id`),
  ADD KEY `publisher_fk_2079160` (`publisher_id`),
  ADD KEY `stock_status_fk_2079161` (`stock_status_id`),
  ADD KEY `language_fk_2079165` (`language_id`),
  ADD KEY `category_fk_2079166` (`category_id`),
  ADD KEY `sub_category_fk_2079167` (`sub_category_id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_category_fk_2621059` (`parent_category_id`);

--
-- Indexes for table `book_collection`
--
ALTER TABLE `book_collection`
  ADD KEY `collection_id_fk_2620979` (`collection_id`),
  ADD KEY `book_id_fk_2620979` (`book_id`);

--
-- Indexes for table `book_combo_offer`
--
ALTER TABLE `book_combo_offer`
  ADD KEY `combo_offer_id_fk_2621204` (`combo_offer_id`),
  ADD KEY `book_id_fk_2621204` (`book_id`);

--
-- Indexes for table `book_reviews`
--
ALTER TABLE `book_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_fk_2079249` (`book_id`),
  ADD KEY `user_fk_2079250` (`user_id`);

--
-- Indexes for table `bussiness_withuses`
--
ALTER TABLE `bussiness_withuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_offers`
--
ALTER TABLE `combo_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_2621199` (`category_id`),
  ADD KEY `sub_category_fk_2621200` (`sub_category_id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_fk_2621062` (`book_category_id`);

--
-- Indexes for table `currency_conversions`
--
ALTER TABLE `currency_conversions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk_2584820` (`country_id`);

--
-- Indexes for table `default_currencies`
--
ALTER TABLE `default_currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk_2584943` (`country_id`);

--
-- Indexes for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_category_fk_2621625` (`faq_category_id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `india_shipping_charges`
--
ALTER TABLE `india_shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_ips`
--
ALTER TABLE `login_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_fk_2086020` (`order_status_id`),
  ADD KEY `address_fk_2086021` (`address_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_fk_2086222` (`order_id`),
  ADD KEY `book_fk_2086224` (`book_id`),
  ADD KEY `combo_offer_fk_2621535` (`combo_offer_id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_statuses_title_unique` (`title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_2078735` (`role_id`),
  ADD KEY `permission_id_fk_2078735` (`permission_id`);

--
-- Indexes for table `price_blocks`
--
ALTER TABLE `price_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publishers_name_unique` (`name`);

--
-- Indexes for table `recently_vieweds`
--
ALTER TABLE `recently_vieweds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_fk_2086270` (`book_id`),
  ADD KEY `user_fk_2621706` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_2078744` (`user_id`),
  ADD KEY `role_id_fk_2078744` (`role_id`);

--
-- Indexes for table `search_keywords`
--
ALTER TABLE `search_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_2621705` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `static_page_type_fk_2079110` (`static_page_type_id`);

--
-- Indexes for table `static_page_types`
--
ALTER TABLE `static_page_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `static_page_types_name_unique` (`name`);

--
-- Indexes for table `stock_statuses`
--
ALTER TABLE `stock_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stock_statuses_name_unique` (`name`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_plan_unique` (`subscription_id`,`stripe_plan`),
  ADD KEY `subscription_items_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `country_fk_2621501` (`country_id`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_2621472` (`user_id`),
  ADD KEY `book_fk_2621474` (`book_id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk_2078913` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_offers`
--
ALTER TABLE `active_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `available_currencies`
--
ALTER TABLE `available_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bindings`
--
ALTER TABLE `bindings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `block_offers`
--
ALTER TABLE `block_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `book_reviews`
--
ALTER TABLE `book_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bussiness_withuses`
--
ALTER TABLE `bussiness_withuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `combo_offers`
--
ALTER TABLE `combo_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency_conversions`
--
ALTER TABLE `currency_conversions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `default_currencies`
--
ALTER TABLE `default_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `india_shipping_charges`
--
ALTER TABLE `india_shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_ips`
--
ALTER TABLE `login_ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `price_blocks`
--
ALTER TABLE `price_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `recently_vieweds`
--
ALTER TABLE `recently_vieweds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search_keywords`
--
ALTER TABLE `search_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `static_page_types`
--
ALTER TABLE `static_page_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_statuses`
--
ALTER TABLE `stock_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39337;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `country_fk_2078909` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `user_fk_2078908` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `zone_fk_2078910` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`);

--
-- Constraints for table `binding_book`
--
ALTER TABLE `binding_book`
  ADD CONSTRAINT `binding_id_fk_2079162` FOREIGN KEY (`binding_id`) REFERENCES `bindings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_id_fk_2079162` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blog_category_fk_2621497` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_authors_fk_2079159` FOREIGN KEY (`book_authors_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `category_fk_2079166` FOREIGN KEY (`category_id`) REFERENCES `book_categories` (`id`),
  ADD CONSTRAINT `language_fk_2079165` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `publisher_fk_2079160` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`),
  ADD CONSTRAINT `stock_status_fk_2079161` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_statuses` (`id`),
  ADD CONSTRAINT `sub_category_fk_2079167` FOREIGN KEY (`sub_category_id`) REFERENCES `book_categories` (`id`);

--
-- Constraints for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD CONSTRAINT `parent_category_fk_2621059` FOREIGN KEY (`parent_category_id`) REFERENCES `book_categories` (`id`);

--
-- Constraints for table `book_collection`
--
ALTER TABLE `book_collection`
  ADD CONSTRAINT `book_id_fk_2620979` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `collection_id_fk_2620979` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_combo_offer`
--
ALTER TABLE `book_combo_offer`
  ADD CONSTRAINT `book_id_fk_2621204` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `combo_offer_id_fk_2621204` FOREIGN KEY (`combo_offer_id`) REFERENCES `combo_offers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_reviews`
--
ALTER TABLE `book_reviews`
  ADD CONSTRAINT `book_fk_2079249` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `user_fk_2079250` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `combo_offers`
--
ALTER TABLE `combo_offers`
  ADD CONSTRAINT `category_fk_2621199` FOREIGN KEY (`category_id`) REFERENCES `book_categories` (`id`),
  ADD CONSTRAINT `sub_category_fk_2621200` FOREIGN KEY (`sub_category_id`) REFERENCES `book_categories` (`id`);

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `book_category_fk_2621062` FOREIGN KEY (`book_category_id`) REFERENCES `book_categories` (`id`);

--
-- Constraints for table `currency_conversions`
--
ALTER TABLE `currency_conversions`
  ADD CONSTRAINT `country_fk_2584820` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `default_currencies`
--
ALTER TABLE `default_currencies`
  ADD CONSTRAINT `country_fk_2584943` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faq_category_fk_2621625` FOREIGN KEY (`faq_category_id`) REFERENCES `faq_categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `address_fk_2086021` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `order_status_fk_2086020` FOREIGN KEY (`order_status_id`) REFERENCES `order_statuses` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `book_fk_2086224` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `combo_offer_fk_2621535` FOREIGN KEY (`combo_offer_id`) REFERENCES `combo_offers` (`id`),
  ADD CONSTRAINT `order_fk_2086222` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_2078735` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_2078735` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recently_vieweds`
--
ALTER TABLE `recently_vieweds`
  ADD CONSTRAINT `book_fk_2086270` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `user_fk_2621706` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_2078744` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_2078744` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `search_keywords`
--
ALTER TABLE `search_keywords`
  ADD CONSTRAINT `user_fk_2621705` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD CONSTRAINT `static_page_type_fk_2079110` FOREIGN KEY (`static_page_type_id`) REFERENCES `static_page_types` (`id`);

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `country_fk_2621501` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `book_fk_2621474` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `user_fk_2621472` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `country_fk_2078913` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
