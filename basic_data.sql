-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 09:28 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.4.28

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

--
-- Dumping data for table `account_other_costs`
--

INSERT INTO `account_other_costs` (`id`, `date`, `amount`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2023-05-09', 1000, 'some', NULL, '2023-05-09 05:25:39', '2023-05-09 05:25:39');

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
  `about_us` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_and_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(1, 2, 1, 1, 1, 1, 1, '2023-05-02 23:49:25', '2023-05-02 23:53:58');

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
(1, 1, 1, 100, 40, 60, '2023-05-02 23:47:01', '2023-05-02 23:47:01'),
(2, 1, 2, 100, 40, 60, '2023-05-02 23:47:01', '2023-05-02 23:47:01'),
(3, 1, 3, 100, 40, 60, '2023-05-02 23:47:01', '2023-05-02 23:47:01'),
(4, 2, 1, 100, 40, 60, '2023-05-02 23:47:29', '2023-05-02 23:47:29'),
(5, 2, 2, 100, 40, 60, '2023-05-02 23:47:29', '2023-05-02 23:47:29'),
(6, 2, 3, 100, 40, 60, '2023-05-02 23:47:29', '2023-05-02 23:47:29'),
(7, 3, 1, 100, 40, 60, '2023-05-02 23:47:56', '2023-05-02 23:47:56'),
(8, 3, 2, 100, 40, 60, '2023-05-02 23:47:56', '2023-05-02 23:47:56'),
(9, 3, 3, 100, 40, 60, '2023-05-02 23:47:56', '2023-05-02 23:47:56');

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
(1, 'Teacher', '2023-05-02 23:48:09', '2023-05-02 23:48:09'),
(2, 'Sr. Teacher', '2023-05-02 23:48:23', '2023-05-02 23:48:23'),
(3, 'Head Teacher', '2023-05-02 23:48:32', '2023-05-02 23:48:32');

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
(1, 1, 1, 200, '2023-05-02 23:49:25', '2023-05-02 23:49:25');

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
(1, 2023050001, 2, 'SSC', 'Jassor', '2015', 'Pass', '2', 'GPA', '3.25', 'Science', '2023-05-04 04:06:09', '2023-05-04 04:06:09'),
(2, 2023050001, 4, 'HSC', 'Jass', '2011', '25.2', '2', 'ok', '3.6', 'Sciencw', '2023-05-04 04:08:28', '2023-05-04 04:08:28'),
(3, 2023050001, 2, 'No', 'ok', 'k', 'kj', 'kj', 'kj', 'jk', 'kj', '2023-05-04 04:08:28', '2023-05-04 04:08:28');

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
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `employee_id`, `leave_purpose_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2023-05-03', '2023-05-04', '2023-05-02 23:57:41', '2023-05-02 23:57:41');

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
(1, 3, 10000, 10000, 0, '2023-05-03', '2023-05-02 23:55:09', '2023-05-02 23:55:09'),
(2, 3, 10000, 25000, 15000, '1970-01-01', '2023-05-09 05:32:30', '2023-05-09 05:32:30');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_off_infos`
--

INSERT INTO `emp_off_infos` (`id`, `employee_id`, `per_address`, `nid`, `tin`, `emp_father_contract`, `emp_mother_contract`, `emp_father_address`, `emp_mother_address`, `emp_spouse_contract`, `emp_spouse_address`, `bank_acc_no`, `bank_name`, `bank_branch`, `bank_routing_no`, `blood`, `pre_office_name`, `pre_office_address`, `created_at`, `updated_at`) VALUES
(1, 2023050001, 'lkhdfk', 'lhglk', 'lhdflk', 'lhkhl', 'khlkfsdhl', 'hlksdhfg', ';jlksfhd;l', 'khlkdh', 'qkhnlkfdh', NULL, '1lhdkh', '1;lhldfh', 'hlkgh', 'A-', 'dlfksjh', 'lkhdslk', '2023-05-05 23:01:15', '2023-05-05 23:01:15');

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
(1, 'Final', '2023-05-02 23:44:57', '2023-05-02 23:44:57'),
(2, 'First Semester Fee', '2023-05-02 23:45:21', '2023-05-02 23:45:21'),
(3, 'Middel Exam', '2023-05-02 23:45:41', '2023-05-02 23:45:41');

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
(1, 'Tuition Fee', '2023-05-02 23:24:40', '2023-05-02 23:24:40'),
(2, 'Medical Fee', '2023-05-02 23:24:58', '2023-05-02 23:24:58'),
(3, 'Sport Fee', '2023-05-02 23:25:08', '2023-05-02 23:25:08'),
(4, 'Students Welfare Fee', '2023-05-02 23:25:31', '2023-05-02 23:25:31'),
(5, 'Lab & Training Equipment & Maintenance Fee', '2023-05-02 23:26:29', '2023-05-02 23:26:29'),
(6, 'Center Fee', '2023-05-02 23:26:46', '2023-05-02 23:26:46'),
(7, 'Examine Fee', '2023-05-02 23:27:01', '2023-05-02 23:27:01'),
(8, 'Grade Sheet Fee', '2023-05-02 23:27:22', '2023-05-02 23:27:22'),
(9, 'Education Development Charge', '2023-05-02 23:27:52', '2023-05-02 23:27:52'),
(10, 'Course Reg. Fee', '2023-05-02 23:28:40', '2023-05-02 23:28:40'),
(11, 'School Development Charge', '2023-05-02 23:41:44', '2023-05-02 23:41:44'),
(12, 'Id Card', '2023-05-02 23:41:53', '2023-05-02 23:41:53'),
(13, 'Transport Fee', '2023-05-02 23:42:04', '2023-05-02 23:42:04');

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
(1, 1, 1, 100, '2023-05-02 23:43:06', '2023-05-02 23:43:06'),
(2, 1, 2, 100, '2023-05-02 23:43:06', '2023-05-02 23:43:06'),
(3, 1, 3, 200, '2023-05-02 23:43:06', '2023-05-02 23:43:06'),
(4, 2, 1, 200, '2023-05-02 23:43:33', '2023-05-02 23:43:33'),
(5, 2, 2, 250, '2023-05-02 23:43:33', '2023-05-02 23:43:33'),
(6, 2, 3, 300, '2023-05-02 23:43:33', '2023-05-02 23:43:33'),
(7, 3, 1, 100, '2023-05-02 23:44:05', '2023-05-02 23:44:05'),
(8, 3, 2, 150, '2023-05-02 23:44:05', '2023-05-02 23:44:05'),
(9, 3, 3, 200, '2023-05-02 23:44:05', '2023-05-02 23:44:05'),
(10, 3, 3, 100, '2023-05-02 23:44:26', '2023-05-02 23:44:26'),
(11, 3, 2, 120, '2023-05-02 23:44:26', '2023-05-02 23:44:26'),
(12, 3, 3, 150, '2023-05-02 23:44:26', '2023-05-02 23:44:26');

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
(2, 'Motin', 'Something', 1, 'Ok', '2023-05-04 00:54:55', '2023-05-04 00:54:55'),
(4, 'sOMER Update', 'ANOITHER', 1, 'ANOITHER', '2023-05-04 01:02:45', '2023-05-04 02:02:32');

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

--
-- Dumping data for table `leave_purposes`
--

INSERT INTO `leave_purposes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sisck', '2023-05-02 23:57:41', '2023-05-02 23:57:41');

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
(28, '2023_05_03_094016_create_app_master_data_table', 2),
(29, '2023_05_04_060708_create_institution_infos_table', 3),
(30, '2023_05_04_083307_create_edu_ins_dtls_table', 4),
(31, '2023_05_04_111626_create_emp_off_infos_table', 5),
(32, '2023_05_07_031639_create_std_attendances_table', 6);

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
(1, 'Bangla', '2023-05-02 23:46:00', '2023-05-02 23:46:00'),
(2, 'English', '2023-05-02 23:46:06', '2023-05-02 23:46:06'),
(3, 'Math', '2023-05-02 23:46:13', '2023-05-02 23:46:13');

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
('1fDmp2DhRt3INtVwOqVerPLA7dTjkMHsmabdVjwx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic3FaemF4YWUwaEpDeXNVcVh0eHB4amNBd2ZJejZuNjVMT09xUnpmMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2VtcGxveWVlcy9zYWxhcnkvZW1wbG95ZWUvdmlldyI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1683683787),
('3zyVXcoPeNVWIDyBCgsNZwXKopVvtURKPZttTT90', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHNObG1sYzVuQjhyNW4xSm1aQlgzNkJFYUpLaFg5ZVdtT0VkSkFSTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1683603810),
('aBYXvKBV9eD8Q1noDPBwCfQqp5hAYwRntAUXRXyI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRk9obHJFUEJGYkFKWnRUeU5PRk5BWkNab0Vmd3JzR0NjZkxhYU1neiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXBvcnRzL3N0dWRlbnQvaWRjYXJkL3ZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTERWYTl6VWFIV3VlOVBwTG5QdEFTdXRGY0hMTXpLeDBtbFJOemp6QUVFTm9GRHZCenQ2QTIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJExEVmE5elVhSFd1ZTlQcExuUHRBU3V0RmNITE16S3gwbWxSTnpqekFFRU5vRkR2Qnp0NkEyIjt9', 1683615376),
('iG1btxr6Z7KNWOGpZuDO3nqbgxkgLxqjTPvqLSeB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoic2hCajZIRmxrR29nZ2RJeEVnbFpvR0lPODNMbWt2eGMwTmtLc0E2dyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZW1wbG95ZWVzL3JlZy9lbXBsb3llZS9kZXRhaWxzLzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTERWYTl6VWFIV3VlOVBwTG5QdEFTdXRGY0hMTXpLeDBtbFJOemp6QUVFTm9GRHZCenQ2QTIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJExEVmE5elVhSFd1ZTlQcExuUHRBU3V0RmNITE16S3gwbWxSTnpqekFFRU5vRkR2Qnp0NkEyIjt9', 1683710493),
('j1E1JvqNEawG6f1CdNn9731hGhuD2GzVfu63RKHK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUVIzenRaNnpXbG1DTmI0MmFBM0NuZUxxSWk4SEI1cHJraFluTWRiSiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZW1wbG95ZWVzL3NhbGFyeS9lbXBsb3llZS92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJExEVmE5elVhSFd1ZTlQcExuUHRBU3V0RmNITE16S3gwbWxSTnpqekFFRU5vRkR2Qnp0NkEyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRMRFZhOXpVYUhXdWU5UHBMblB0QVN1dEZjSExNekt4MG1sUk56anpBRUVOb0ZEdkJ6dDZBMiI7fQ==', 1683632023);

-- --------------------------------------------------------

--
-- Table structure for table `std_attendances`
--

CREATE TABLE `std_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` int(11) NOT NULL COMMENT 'user_tabale (id_no = id_no)',
  `att_date` date NOT NULL,
  `att_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'P=present, A=absent, L=late, E=early',
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `std_attendances`
--

INSERT INTO `std_attendances` (`id`, `id_no`, `att_date`, `att_status`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-05-07', 'P', '2023-05-07 06:11:00', '2023-05-07 11:00:00', '2023-05-06 18:00:00', '2023-05-06 18:00:00'),
(2, 2, '2023-05-07', 'P', '2023-05-07 06:11:00', '2023-05-07 11:00:00', '2023-05-06 18:00:00', '2023-05-06 18:00:00');

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
(1, 'One', '2023-05-02 23:21:51', '2023-05-02 23:21:51'),
(2, 'Pre-School', '2023-05-02 23:22:06', '2023-05-02 23:22:06'),
(3, 'Stantder-School', '2023-05-02 23:22:25', '2023-05-02 23:22:25');

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
(1, 'A', '2023-05-02 23:22:53', '2023-05-02 23:22:53'),
(2, 'B', '2023-05-02 23:22:57', '2023-05-02 23:22:57'),
(3, 'C', '2023-05-02 23:23:04', '2023-05-02 23:23:04');

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
(1, 'Day', '2023-05-02 23:23:21', '2023-05-02 23:23:21'),
(2, 'Night', '2023-05-02 23:23:27', '2023-05-02 23:23:27'),
(3, 'Morning', '2023-05-02 23:23:33', '2023-05-02 23:23:33'),
(4, 'Evening', '2023-05-02 23:23:40', '2023-05-02 23:23:40'),
(5, 'After-noon', '2023-05-02 23:23:51', '2023-05-02 23:23:51');

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
(1, '2023', '2023-05-02 23:22:37', '2023-05-02 23:22:37'),
(2, '2022', '2023-05-02 23:22:43', '2023-05-02 23:22:43');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `profile_side_photo_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `profile_side_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'motin.mmk.jr@gmail.com', NULL, '$2y$10$LDVa9zUaHWue9PpLnPtASutFcHLMzKx0mlRNzjzAEENoFDvBzt6A2', NULL, NULL, '01936915657', 'Demo', 'Male', '202305030521istockphoto-1322277517-612x612.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, '', '2023-05-02 23:15:42', '2023-05-02 23:21:01'),
(2, 'Student', 'Demo', 'motin@gmail.com', NULL, '$2y$10$LDVa9zUaHWue9PpLnPtASutFcHLMzKx0mlRNzjzAEENoFDvBzt6A2', NULL, NULL, '316545', 'Demo', 'Male', '202305030606fantasy-2049567_960_720.jpg', 'Demo', 'Demo', 'Islam', '20230001', '2023-05-03', '9432', 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, '', '2023-05-02 23:49:25', '2023-05-03 00:06:29'),
(3, 'employee', 'Demo -Teacher', 'motin.mmk@gmail.com', NULL, '$2y$10$LDVa9zUaHWue9PpLnPtASutFcHLMzKx0mlRNzjzAEENoFDvBzt6A2', NULL, NULL, '132165465', '4654654dasf', 'Male', '202305030555istockphoto-1322277517-612x612.jpg', 'Demo', 'Demo', 'Islam', '2023050001', '2023-05-03', '8668', 'Developer', '2023-05-03', 1, 25000, 1, NULL, NULL, NULL, '', '2023-05-02 23:55:09', '2023-05-09 05:32:30');

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
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_subjects_name_unique` (`name`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_master_data`
--
ALTER TABLE `app_master_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edu_ins_dtls`
--
ALTER TABLE `edu_ins_dtls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_off_infos`
--
ALTER TABLE `emp_off_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `institution_infos`
--
ALTER TABLE `institution_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks_grades`
--
ALTER TABLE `marks_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `std_attendances`
--
ALTER TABLE `std_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
