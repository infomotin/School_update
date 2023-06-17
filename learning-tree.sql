-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2023 at 08:45 AM
-- Server version: 5.7.24
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_employee_salaries`
--

CREATE TABLE `account_employee_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_other_costs`
--

CREATE TABLE `account_other_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_student_fees`
--

CREATE TABLE `account_student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_student_fees`
--

INSERT INTO `account_student_fees` (`id`, `year_id`, `class_id`, `student_id`, `fee_category_id`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 1, '2023-06', 13200, '2023-06-11 23:21:18', '2023-06-11 23:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `app_master_data`
--

CREATE TABLE `app_master_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_Stub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, 2, 1, '2023-06-11 23:18:55', '2023-06-12 22:44:14'),
(2, 4, 2, 1, 1, 1, 1, '2023-06-12 22:24:50', '2023-06-12 22:44:14'),
(3, 5, 3, 1, 1, 1, 1, '2023-06-12 22:36:12', '2023-06-12 22:44:14'),
(6, 8, 4, 1, 1, 1, 1, '2023-06-12 22:43:26', '2023-06-12 22:44:14'),
(7, 9, NULL, 1, 1, 2, 1, '2023-06-12 22:53:45', '2023-06-12 22:53:45'),
(8, 9, NULL, 2, 1, 2, 1, '2023-06-13 00:17:49', '2023-06-13 00:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100, 35, 50, '2023-06-11 21:39:18', '2023-06-11 21:39:18'),
(2, 1, 2, 80, 40, 50, '2023-06-11 21:39:18', '2023-06-11 21:39:18'),
(3, 1, 3, 100, 40, 50, '2023-06-11 21:39:37', '2023-06-11 21:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_root` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no,1=yes',
  `conversion_rate` double DEFAULT NULL,
  `conversion_currency_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency_name`, `is_root`, `conversion_rate`, `conversion_currency_id`, `created_at`, `updated_at`) VALUES
(1, 'Taka', 1, 1, NULL, '2023-06-15 01:30:12', '2023-06-15 01:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dep_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`, `created_at`, `updated_at`) VALUES
(1, 'Faculty', '2023-06-14 19:52:34', '2023-06-14 19:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', '2023-06-11 21:49:58', '2023-06-11 21:49:58'),
(2, 'Officer', '2023-06-11 21:50:14', '2023-06-11 21:50:14'),
(3, 'Co-Ordinator', '2023-06-11 21:50:49', '2023-06-11 21:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 5, '2023-06-12 23:58:49', '2023-06-13 00:12:44'),
(2, 7, 3, 5, '2023-06-12 23:58:49', '2023-06-13 00:12:44'),
(3, 7, 2, 5, '2023-06-13 00:12:21', '2023-06-13 00:12:44'),
(4, 8, 1, 5, '2023-06-13 00:17:49', '2023-06-13 00:17:49'),
(5, 8, 2, 5, '2023-06-13 00:17:49', '2023-06-13 00:17:49'),
(6, 8, 3, 5, '2023-06-13 00:17:49', '2023-06-13 00:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `edu_ins_dtls`
--

CREATE TABLE `edu_ins_dtls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `edu_ins_id` int(11) NOT NULL COMMENT 'edu_ins_id=edu_ins_id',
  `degree_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edu_ins_dtls`
--

INSERT INTO `edu_ins_dtls` (`id`, `employee_id`, `edu_ins_id`, `degree_name`, `board`, `passing_year`, `result`, `duration`, `achievement`, `cgpa`, `group`, `created_at`, `updated_at`) VALUES
(3, 2023050001, 3, 'SSC', 'Dhaka', '2007', '5.00', '10', 'na', 'na', 'Science', '2023-06-11 23:12:46', '2023-06-11 23:12:46'),
(4, 2023050001, 2, 'HSC', 'Dhaka', '2009', '5.00', '2', 'na', 'na', 'Science', '2023-06-11 23:12:46', '2023-06-11 23:12:46'),
(5, 2023050001, 1, 'BSc in CSE', 'National University', '2014', 'na', '4', 'na', '3.9', 'Science', '2023-06-11 23:12:46', '2023-06-11 23:12:46'),
(6, 2023050001, 1, 'SSC', 'Dhaka', '2007', '5.00', '10', 'na', 'na', 'Science', '2023-06-13 02:50:35', '2023-06-13 02:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE `employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` date NOT NULL,
  `attend_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `late_minute` int(11) DEFAULT NULL,
  `early_minute` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `leave_purpose_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_sallary_logs`
--

CREATE TABLE `employee_sallary_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=User_id',
  `previous_salary` int(11) DEFAULT NULL,
  `present_salary` int(11) DEFAULT NULL,
  `increment_salary` int(11) DEFAULT NULL,
  `effected_salary` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_sallary_logs`
--

INSERT INTO `employee_sallary_logs` (`id`, `employee_id`, `previous_salary`, `present_salary`, `increment_salary`, `effected_salary`, `created_at`, `updated_at`) VALUES
(1, 2, 60000, 60000, 0, '2023-05-01', '2023-06-11 23:05:49', '2023-06-11 23:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `emp_off_infos`
--

CREATE TABLE `emp_off_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `per_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'per_address=permanent_address',
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pre_address=present_address',
  `tin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'nid=nid',
  `emp_father_contract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_spouse_name=emp_spouse_name',
  `emp_mother_contract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_father_contract=emp_father_contract',
  `emp_father_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_mother_contract=emp_mother_contract',
  `emp_mother_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_father_address=emp_father_address',
  `emp_spouse_contract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_mother_address=emp_mother_address',
  `emp_spouse_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'emp_spouse_contract=emp_spouse_contract',
  `bank_acc_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tin=tin',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'bank_acc_no=bank_acc_no',
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'bank_name=bank_name',
  `bank_routing_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'bank_branch=bank_branch',
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'blood=blood',
  `pre_office_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pre_office_name=pre_office_name',
  `pre_office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pre_office_address=pre_office_address',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_shift_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tutorial', '2023-06-11 21:36:58', '2023-06-11 21:36:58'),
(2, 'Trimester', '2023-06-11 21:37:12', '2023-06-11 21:37:12'),
(3, 'Final', '2023-06-11 21:37:19', '2023-06-11 21:37:19');

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
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admission Fee', '2023-06-11 21:32:51', '2023-06-11 21:32:51'),
(2, 'Tuition Fee', '2023-06-11 21:33:09', '2023-06-11 21:33:09'),
(3, 'Exam Fee', '2023-06-11 21:33:18', '2023-06-11 21:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 15000, '2023-06-11 21:34:23', '2023-06-11 21:34:23'),
(2, 1, 2, 17000, '2023-06-11 21:34:23', '2023-06-11 21:34:23'),
(3, 1, 3, 20000, '2023-06-11 21:34:23', '2023-06-11 21:34:23'),
(4, 2, 1, 10000, '2023-06-11 21:35:00', '2023-06-11 21:35:00'),
(5, 2, 2, 12000, '2023-06-11 21:35:00', '2023-06-11 21:35:00'),
(6, 2, 3, 14000, '2023-06-11 21:35:00', '2023-06-11 21:35:00'),
(7, 3, 1, 1000, '2023-06-11 21:36:05', '2023-06-11 21:36:05'),
(8, 3, 2, 1200, '2023-06-11 21:36:27', '2023-06-11 21:36:27'),
(9, 3, 3, 1400, '2023-06-11 21:36:27', '2023-06-11 21:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `institution_infos`
--

CREATE TABLE `institution_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institution_infos`
--

INSERT INTO `institution_infos` (`id`, `name`, `short_name`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'National University', 'NU', 1, 'Gazipur', '2023-06-11 23:06:47', '2023-06-11 23:06:47'),
(2, 'Gazipur Shadar School And College', 'GSSC', 1, 'Gazipur', '2023-06-11 23:07:25', '2023-06-11 23:07:25'),
(3, 'Vogra Pilot School', 'VPS', 1, 'Gazipur', '2023-06-11 23:08:05', '2023-06-11 23:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `sub_category_id`, `item_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ball Pen', 1, '2023-06-15 03:40:48', '2023-06-15 03:40:48'),
(2, 1, 'Student Chair', 1, '2023-06-15 03:41:08', '2023-06-15 03:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `cat_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Furniture', 1, '2023-06-15 03:39:32', '2023-06-15 03:39:32'),
(2, 'Statinary', 1, '2023-06-15 03:39:37', '2023-06-15 03:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `item_sub_categories`
--

CREATE TABLE `item_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_sub_categories`
--

INSERT INTO `item_sub_categories` (`id`, `category_id`, `sub_cat_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chair', 1, '2023-06-15 03:39:52', '2023-06-15 03:39:52'),
(2, 2, 'Pen', 1, '2023-06-15 03:40:03', '2023-06-15 03:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `leave_purposes`
--

CREATE TABLE `leave_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_grades`
--

CREATE TABLE `marks_grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks_grades`
--

INSERT INTO `marks_grades` (`id`, `grade_name`, `grade_point`, `start_marks`, `end_marks`, `start_point`, `end_point`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'A+', '5', '80', '100', '5', '5', 'A+', '2023-06-11 23:26:54', '2023-06-11 23:26:54'),
(2, 'A', '4', '70', '79', '4', '4.9', 'A', '2023-06-11 23:29:00', '2023-06-11 23:31:26'),
(3, 'A-', '3.5', '60', '69', '3.5', '3.9', 'A-', '2023-06-11 23:29:44', '2023-06-11 23:31:14'),
(4, 'B', '3', '50', '59', '3', '3.49', 'B', '2023-06-11 23:30:21', '2023-06-11 23:32:07'),
(5, 'D', '1', '33', '39', '1', '1', 'D', '2023-06-11 23:32:36', '2023-06-11 23:32:36'),
(6, 'C', '2', '40', '49', '2', '2.9', 'C', '2023-06-11 23:33:04', '2023-06-11 23:33:04'),
(7, 'F', '0', '0', '32', '0', '0', 'F', '2023-06-11 23:36:09', '2023-06-11 23:36:09');

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
(6, '2020_11_23_192918_create_sessions_table', 1),
(7, '2020_11_27_191622_create_student_classes_table', 1),
(8, '2020_11_27_201955_create_student_years_table', 1),
(9, '2020_11_27_205317_create_student_groups_table', 1),
(10, '2020_11_27_212648_create_student_shifts_table', 1),
(11, '2020_11_28_184513_create_fee_categories_table', 1),
(12, '2020_11_28_193421_create_fee_category_amounts_table', 1),
(13, '2020_11_29_190907_create_exam_types_table', 1),
(14, '2020_11_29_193820_create_school_subjects_table', 1),
(15, '2020_11_30_192807_create_assign_subjects_table', 1),
(16, '2020_11_30_211919_create_designations_table', 1),
(17, '2020_12_02_191137_create_assign_students_table', 1),
(18, '2020_12_02_191735_create_discount_students_table', 1),
(19, '2020_12_09_192120_create_employee_sallary_logs_table', 1),
(20, '2020_12_11_205416_create_leave_purposes_table', 1),
(21, '2020_12_11_210033_create_employee_leaves_table', 1),
(22, '2020_12_13_192045_create_employee_attendances_table', 1),
(23, '2020_12_15_214223_create_student_marks_table', 1),
(24, '2020_12_16_202402_create_marks_grades_table', 1),
(25, '2020_12_18_191232_create_account_student_fees_table', 1),
(26, '2020_12_18_212912_create_account_employee_salaries_table', 1),
(27, '2020_12_20_192742_create_account_other_costs_table', 1),
(28, '2023_05_03_094016_create_app_master_data_table', 1),
(29, '2023_05_04_060708_create_institution_infos_table', 1),
(30, '2023_05_04_083307_create_edu_ins_dtls_table', 1),
(31, '2023_05_04_111626_create_emp_off_infos_table', 1),
(32, '2023_05_07_031639_create_std_attendances_table', 1),
(33, '2023_06_07_081642_create_item_categories_table', 1),
(34, '2023_06_07_081740_create_item_sub_categories_table', 1),
(35, '2023_06_07_081751_create_items_table', 1),
(36, '2023_06_10_081228_adding_time_emp_table', 1),
(37, '2023_06_10_093751_adding_late_emp_table', 1),
(38, '2023_06_12_083239_create_services_table', 2),
(39, '2023_06_12_085645_create_service_amounts_table', 2),
(40, '2023_06_12_090133_create_departments_table', 2),
(41, '2023_06_12_090146_create_sections_table', 2),
(42, '2023_06_13_035827_create_service_discounts_table', 3),
(47, '2023_06_15_040614_create_units_table', 5),
(48, '2023_06_15_050004_create_currencies_table', 6),
(50, '2023_06_15_020448_create_requisition_details_table', 7),
(51, '2023_06_15_030940_create_purchases_table', 8),
(52, '2023_06_17_041744_emp_office_info_update', 9),
(53, '2023_06_15_020430_create_requisition_heads_table', 10);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_details`
--

CREATE TABLE `requisition_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `req_main_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_qnty` double NOT NULL,
  `current_stock` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_heads`
--

CREATE TABLE `requisition_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `req_no` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `req_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending,1=approved,2=rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE `school_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bengali', '2023-06-11 21:37:28', '2023-06-11 21:37:28'),
(2, 'English', '2023-06-11 21:37:47', '2023-06-11 21:37:47'),
(3, 'Math', '2023-06-11 21:37:53', '2023-06-11 21:37:53'),
(4, 'Arabic', '2023-06-11 21:37:58', '2023-06-11 21:37:58'),
(5, 'Art', '2023-06-11 21:38:04', '2023-06-11 21:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `sec_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `department_id`, `sec_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Section', '2023-06-17 02:10:07', '2023-06-17 02:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tounge Twist', '2023-06-12 03:40:47', '2023-06-12 03:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `service_amounts`
--

CREATE TABLE `service_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_amounts`
--

INSERT INTO `service_amounts` (`id`, `service_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(10, 1, 1, 20000, '2023-06-12 21:15:44', '2023-06-12 21:15:44'),
(11, 1, 2, 25000, '2023-06-12 21:15:44', '2023-06-12 21:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_discounts`
--

CREATE TABLE `service_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_discounts`
--

INSERT INTO `service_discounts` (`id`, `assign_student_id`, `date`, `service_id`, `amount`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-06-13', 1, 500, 100, '2023-06-13 04:19:21', '2023-06-13 04:19:21'),
(2, 1, '2023-06-13', 1, 400, 200, '2023-06-13 04:19:21', '2023-06-13 04:19:21'),
(3, 1, '2023-06-13', 1, 300, 300, '2023-06-13 04:19:21', '2023-06-13 04:19:21'),
(4, 1, '2023-06-13', 1, 500, 100, '2023-06-13 04:29:05', '2023-06-13 04:29:05'),
(5, 1, '2023-06-13', 1, 400, 200, '2023-06-13 04:29:05', '2023-06-13 04:29:05'),
(6, 1, '2023-06-13', 1, 300, 300, '2023-06-13 04:29:05', '2023-06-13 04:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('y8QKjaOzARLg21avzspHSF5hEZt7u7h2uGT9PYfO', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNldkWTIyczRDTGE1cVJ5WWdSVm5MV1cwbjRzc0ZEaVU0R2g2VzdXUCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjg0OiJodHRwOi8vbG9jYWxob3N0L3NjaG9vbGxtcy9zY2hvb2wtbWFuYWdlbWV0LXN5c3RlbS9wdWJsaWMvc3R1ZGVudHMvcmVnL3NlcnZpY2UvYWRkLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkN0ouTi9nbWdFSndMWE4zakVxVGZET28yVHhkaWJpQWtmWXZWNVp5V1llZTUzTU9OaUVkaksiO30=', 1686991488);

-- --------------------------------------------------------

--
-- Table structure for table `std_attendances`
--

CREATE TABLE `std_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` int(11) NOT NULL COMMENT 'user_tabale (id = id_no)',
  `att_date` date NOT NULL,
  `att_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'P=present, A=absent, L=late, E=early',
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One', '2023-06-11 21:29:21', '2023-06-11 21:29:21'),
(2, 'Two', '2023-06-11 21:29:29', '2023-06-11 21:29:29'),
(3, 'Three', '2023-06-11 21:29:36', '2023-06-11 21:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL COMMENT 'assign_student_id=assign_student_id',
  `birth_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_need` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no,1=yes',
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergic_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccine_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_image` text COLLATE utf8mb4_unicode_ci,
  `cr_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_photo` text COLLATE utf8mb4_unicode_ci,
  `f_employment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_photo` text COLLATE utf8mb4_unicode_ci,
  `m_employment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_photo` text COLLATE utf8mb4_unicode_ci,
  `paf_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paf_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paf_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paf_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paf_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paf_photo` text COLLATE utf8mb4_unicode_ci,
  `pas_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `assign_student_id`, `birth_certificate`, `special_need`, `nationality`, `blood`, `alergic_info`, `vaccine_update`, `side_image`, `cr_name`, `cr_address`, `cr_relation`, `cr_contact`, `cr_nid`, `cr_photo`, `f_employment`, `f_address`, `f_contact`, `f_nid`, `f_photo`, `m_employment`, `m_address`, `m_contact`, `m_nid`, `m_photo`, `paf_name`, `paf_address`, `paf_relation`, `paf_contact`, `paf_nid`, `paf_photo`, `pas_name`, `pas_address`, `pas_relation`, `pas_contact`, `pas_nid`, `pas_photo`, `created_at`, `updated_at`) VALUES
(4, 7, 'eqweqwe', 0, 'Bangladesh', 'O+', 'adasdas', 'eqewqwe', NULL, 'dasdasd', 'dasdasdas', 'Mother', '2434234', '4234234', NULL, 'cxz\\c\\c', 'xzczxzcvxz', 'eqeqweqw', 'qeq', NULL, 'fsadfdsaf', 'fadsfsad', 'rwreewr', 'r553252352', NULL, 'cfsdfsdf', 'dsfsdf', 'Mother', '324234', '42342', NULL, 'fasdfasdf', 'rewrwer', 'GMother', '24234', '324234', NULL, '2023-06-14 12:42:09', '2023-06-14 12:42:09'),
(5, 1, 'qrqwerqwe', 0, 'Bangladesh', 'O+', 'ssdfsad', 'dfasfd', '202306141851Capture.PNG', 'sdfsadf', 'fasfd', 'Mother', 'wrwer', '3242342', '202306141851work procedure.PNG', 'fsdfsdf', 'dfsd', '345345', '435345', '202306141851work procedure.PNG', 'vcxbvcxb', 'cvbxcb', 'wr45353', '2452345', '202306141851work procedure.PNG', 'dsfgdf', 'gsdfgsdfg', 'Other', '53532', '235234', '202306141851work procedure.PNG', 'sdgdsfgsd', 'sdfgsdg', 'Other', '345325', '23525', '202306141851work procedure.PNG', '2023-06-14 12:51:35', '2023-06-14 12:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Typical', '2023-06-11 21:30:21', '2023-06-12 01:32:13'),
(2, 'Special', '2023-06-11 21:30:41', '2023-06-12 01:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `assign_subject_id` int(11) DEFAULT NULL,
  `exam_type_id` int(11) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `student_id`, `id_no`, `year_id`, `class_id`, `assign_subject_id`, `exam_type_id`, `marks`, `created_at`, `updated_at`) VALUES
(2, 3, '20230001', 1, 1, 2, 1, 50, '2023-06-11 23:28:06', '2023-06-11 23:28:06'),
(6, 3, '20230001', 1, 1, 1, 1, 35, '2023-06-11 23:35:46', '2023-06-11 23:35:46'),
(7, 3, '20230001', 1, 1, 3, 1, 60, '2023-06-11 23:36:45', '2023-06-11 23:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Morning', '2023-06-11 21:30:59', '2023-06-11 21:30:59'),
(2, 'Evening', '2023-06-11 21:31:05', '2023-06-11 21:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE `student_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2023', '2023-06-11 21:30:04', '2023-06-11 21:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_root` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no,1=yes',
  `conversion_rate` double DEFAULT NULL,
  `conversion_unit_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `is_root`, `conversion_rate`, `conversion_unit_id`, `created_at`, `updated_at`) VALUES
(7, 'Kg', 1, NULL, NULL, '2023-06-15 00:36:10', '2023-06-15 00:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator,user=employee super_admin=super admin',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `profile_side_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `profile_side_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Khandakar Md. Abdur Rahman', 'dcprottoy@gmail.com', NULL, '$2y$10$7J.N/gmgEJwLXN3jEqTfDOo2TxdibiAkfYvV5ZyWYee53MONiEdjK', NULL, NULL, '01749475141', 'Ashulia,Savar,Dhaka', 'Male', '20230612032801929399200-removebg-preview.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-11 21:06:56', '2023-06-11 21:28:44'),
(2, 'employee', 'Chayan Chandra majumdar', NULL, NULL, '$2y$10$otQ.AuvH4xpKpN6H2Zn89e0JcJkRFx.U5WZBy17k2xSJDa2iUSUuy', NULL, NULL, '01781861944', 'Gazipur', 'Male', '202306120505dg_sayedur_rahman.jpg', 'Manindro Majumdar', 'ABCDE', 'Hindu', '2023050001', '2023-06-01', '9293', NULL, '2023-05-01', 1, 60000, 1, NULL, NULL, NULL, NULL, '2023-06-11 23:05:49', '2023-06-11 23:05:49'),
(3, 'Student', 'Chayan Chandra majumdar', NULL, NULL, '$2y$10$OhRCrcMlryX8IoHvWKMGgudq0MH.edB9evjePt1Era6gfMGtxqCK2', NULL, NULL, '01748965', 'sadfasdf', 'Male', '202306130549Screenshot 2023-01-31 124534.png', 'sfsdf', 'sdfsdf', 'Islam', '20230001', '2023-06-13', '7659', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-11 23:18:55', '2023-06-12 23:49:59'),
(4, 'Student', 'Khandakar Md. Abdur Rahman', NULL, NULL, '$2y$10$GY1Odq/PDcnL00yWIIMSOe3/Z7h9nN.ZBrT3Hd46Z.wbsPRIhd/86', NULL, NULL, '01781861944', 'Ashulia,Savar,Dhaka', 'Male', '20230613042401929399200-removebg-preview.jpg', 'Kamal Uddin', 'Mili Begum', 'Islam', '20230004', '1994-10-07', '9755', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-12 22:24:50', '2023-06-12 22:24:50'),
(5, 'Student', 'Prottoy', NULL, NULL, '$2y$10$Pqoqf5ZqqXI2Id6BPz73wOYFD/NyQzBjUYv8gRzudDCTJw0edCrxy', NULL, NULL, '01781861944', 'Gazipur', 'Male', '202306130436dg_sayedur_rahman.jpg', 'Kamal Uddin', 'Mili Begum', 'Islam', '20230005', '2023-05-31', '4220', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-12 22:36:12', '2023-06-12 22:36:12'),
(8, 'Student', 'Khandakar Md. Abdur Rahman', NULL, NULL, '$2y$10$mFlPdAOQBTjtHLnEr7LmLejDp1GB6XjLyyAjOKv1MbwkE5cD7OChS', NULL, NULL, '01781861944', 'Ashulia,Savar,Dhaka', 'Male', '20230613044301929399200-removebg-preview.jpg', 'Kamal Uddin', 'Mili Begum', 'Islam', '20230006', '1994-10-07', '7001', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-12 22:43:26', '2023-06-12 22:43:26'),
(9, 'Student', 'adasd', NULL, NULL, '$2y$10$iZIELmwzVFBrnBxqxRNqTukToMqwYCVlGhy3zpYg7Xyt8ZtnOYH8e', NULL, NULL, '01781861944', 'asdasd', 'Male', '2023061304531_Rx6VownUbEXH5AZvRv3KhA-696x442.jpeg', 'asdas', 'asdasdasdas', 'Islam', '20230009', '2023-06-14', '1960', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-06-12 22:53:45', '2023-06-12 22:53:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_master_data`
--
ALTER TABLE `app_master_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currencies_currency_name_unique` (`currency_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_dep_name_unique` (`dep_name`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_ins_dtls`
--
ALTER TABLE `edu_ins_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_off_infos`
--
ALTER TABLE `emp_off_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution_infos`
--
ALTER TABLE `institution_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institution_infos_name_unique` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_sub_categories`
--
ALTER TABLE `item_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_purposes_name_unique` (`name`);

--
-- Indexes for table `marks_grades`
--
ALTER TABLE `marks_grades`
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
-- Indexes for table `requisition_details`
--
ALTER TABLE `requisition_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_heads`
--
ALTER TABLE `requisition_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_subjects_name_unique` (`name`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_sec_name_unique` (`sec_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`);

--
-- Indexes for table `service_amounts`
--
ALTER TABLE `service_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_discounts`
--
ALTER TABLE `service_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `std_attendances`
--
ALTER TABLE `std_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `student_years`
--
ALTER TABLE `student_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_years_name_unique` (`name`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_unit_name_unique` (`unit_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_master_data`
--
ALTER TABLE `app_master_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `edu_ins_dtls`
--
ALTER TABLE `edu_ins_dtls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_off_infos`
--
ALTER TABLE `emp_off_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `institution_infos`
--
ALTER TABLE `institution_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_sub_categories`
--
ALTER TABLE `item_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks_grades`
--
ALTER TABLE `marks_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requisition_details`
--
ALTER TABLE `requisition_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requisition_heads`
--
ALTER TABLE `requisition_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_amounts`
--
ALTER TABLE `service_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_discounts`
--
ALTER TABLE `service_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `std_attendances`
--
ALTER TABLE `std_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
