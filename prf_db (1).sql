-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 06:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `prf_account`
--

CREATE TABLE `prf_account` (
  `id` int(14) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_verification` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prf_account`
--

INSERT INTO `prf_account` (`id`, `username`, `password`, `role`, `position`, `name`, `department`, `account_verification`) VALUES
(1, 'admin@admin.com', 'admin', 'administrator', 'staff', 'prince arce', 'IT', 'approved'),
(2, 'requestor@email.com', 'test', 'requestor', 'staff', 'juan dela cruz', 'IT', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approval`
--

CREATE TABLE `tb_approval` (
  `id` int(14) NOT NULL,
  `request_id` int(14) NOT NULL,
  `check_by` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_remarks` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noted_by` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noted_remarks` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_date` date DEFAULT NULL,
  `noted_date` date DEFAULT NULL,
  `approval_status` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_certification`
--

CREATE TABLE `tb_certification` (
  `id` int(14) NOT NULL,
  `certDesc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_certification`
--

INSERT INTO `tb_certification` (`id`, `certDesc`) VALUES
(1, 'Driver License - Non Professional'),
(2, 'Driver License - Professional'),
(3, 'Driver License - Student Permit'),
(4, 'Carpentry NC II'),
(5, 'Carpentry NC III'),
(6, 'Computer Systems Servicing NC II'),
(7, 'Civil Service Certification'),
(8, 'CCNA - Cisco Certified Network Administrator'),
(9, 'Emergency Medical Services NC II'),
(10, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contract_status`
--

CREATE TABLE `tb_contract_status` (
  `id` int(14) NOT NULL,
  `contractDesc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contract_status`
--

INSERT INTO `tb_contract_status` (`id`, `contractDesc`) VALUES
(1, 'Full Time'),
(2, 'Through Manpower Provider'),
(3, 'Special Project Employee'),
(4, 'On-the-Job Training');

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `id` int(14) NOT NULL,
  `deptDesc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deptCode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`id`, `deptDesc`, `deptCode`) VALUES
(1, 'Accounting Department', 'ACC'),
(3, 'Equipment Department', 'EQD'),
(4, 'G-Assist Team', 'G-ASSIST'),
(6, 'Human Resource Department', 'HR'),
(7, 'Information Technology Department', 'IT'),
(8, 'Material Procurement Department', 'MPD'),
(9, 'NF Kaizen Department', 'NF'),
(11, 'Production Design Center', 'PDC'),
(12, 'Production Engineering Department', 'PE'),
(13, 'Production Management Department', 'PMD'),
(14, 'Production Department', 'PROD'),
(15, 'Quality Assurance Department', 'QA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_education`
--

CREATE TABLE `tb_education` (
  `id` int(14) NOT NULL,
  `educDesc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_education`
--

INSERT INTO `tb_education` (`id`, `educDesc`) VALUES
(1, 'Highschool Diploma'),
(2, 'Senior Highschool Diploma'),
(3, 'Junior Highschool (New Curriculum)'),
(4, 'College Level'),
(5, 'Bachelors Degree'),
(6, 'Masters Degree'),
(7, 'Doctoral Degree');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `id` int(14) NOT NULL,
  `position` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`id`, `position`) VALUES
(1, 'Assistant Manager'),
(2, 'Associate'),
(3, 'Coordinator'),
(4, 'Department Manager'),
(5, 'Division Manager'),
(6, 'Junior Staff'),
(7, 'Section Manager'),
(8, 'Staff'),
(9, 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_request_mp`
--

CREATE TABLE `tb_request_mp` (
  `id` int(14) NOT NULL,
  `requestor` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestor_email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `requesting_position` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_dept` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `female_num_mp` int(14) DEFAULT NULL,
  `male_num_mp` int(14) DEFAULT NULL,
  `total_mp` int(14) DEFAULT NULL,
  `contract_status` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `education` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `required_license` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `work_exp` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `other_qualification` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `job_duties` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `interview_need` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `interviewers` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `availability_for_interview` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `additional_mp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mp_plan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reorganization` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `promotion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `retirement` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `replacement` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `replacement_mp_name` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `budget_source` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `budget_status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `actual_mp_dept` int(14) NOT NULL,
  `actual_mp_section` int(14) NOT NULL,
  `plan_mp_dept` int(14) NOT NULL,
  `plan_mp_section` int(14) NOT NULL,
  `approve_check_by` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approve_check_remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approve_noted_by` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approve_noted_remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approval_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_check_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_check_remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_verifier_manager` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_verifier_manager_remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_verifier_div_mgr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_verifier_div_mgr_remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancel_remarks` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_request_mp`
--

INSERT INTO `tb_request_mp` (`id`, `requestor`, `requestor_email`, `requesting_position`, `assigned_dept`, `female_num_mp`, `male_num_mp`, `total_mp`, `contract_status`, `date_start`, `date_end`, `education`, `required_license`, `work_exp`, `other_qualification`, `job_duties`, `interview_need`, `interviewers`, `availability_for_interview`, `additional_mp`, `mp_plan`, `reorganization`, `promotion`, `retirement`, `replacement`, `replacement_mp_name`, `others`, `budget_source`, `budget_status`, `actual_mp_dept`, `actual_mp_section`, `plan_mp_dept`, `plan_mp_section`, `approve_check_by`, `approve_check_remarks`, `approve_noted_by`, `approve_noted_remarks`, `approval_status`, `verify_check_by`, `verify_check_remarks`, `verify_verifier_manager`, `verify_verifier_manager_remarks`, `verify_verifier_div_mgr`, `verify_verifier_div_mgr_remarks`, `cancel_remarks`, `verification_status`, `request_date`) VALUES
(36, 'Juan Dela Cruz', '@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'Junior Highschool (New Curriculum)', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(37, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 1, 1, 2, 'Full Time', '2020-12-07', '0000-00-00', 'Bachelors Degree', 'N/A', '', '', 'yamete', 'need', 'gem ibana', '2020-11-26 13:00', '1', '1', '0', '0', '0', '1', 'ann , aison cabusay', '', 'IT', 'IT', 35, 0, 38, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', '2020-11-18 00:00:00'),
(38, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(39, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(40, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(41, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(42, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 00:00:00'),
(43, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-11-18 00:00:00'),
(44, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-11-18 00:00:00'),
(45, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 0, 'Fulltime', '2020-12-31', '2021-03-31', 'College', 'N/A', 'Atleast 6 Months Exp', 'wala na', 'magbabatak mg LAN sa buong LIMA', 'need', 'jose marie chan', ' sabado', '1', '1', '1', '0', '1', '1', 'nigga', '', 'IT', 'On Budget', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-09 00:00:00'),
(46, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-09 00:00:00'),
(47, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-09 03:32:30'),
(48, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-09 03:36:12'),
(49, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '0000-00-00 00:00:00'),
(50, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-09 14:13:45'),
(51, 'Juan Dela Cruz', '@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-10 15:26:17'),
(52, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-18 16:32:59'),
(53, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '1 year', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2020-12-18 16:33:07'),
(54, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(55, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(56, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(57, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(58, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(59, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(60, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(61, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(62, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(63, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(64, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(65, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(66, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(67, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(68, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(69, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(70, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(71, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(72, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(73, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(74, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(75, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(76, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(77, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(78, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(79, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(80, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(81, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(82, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(83, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(84, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(85, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(86, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(87, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(88, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(89, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(90, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(91, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(92, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(93, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(94, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(95, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(96, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(97, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(98, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(99, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(100, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(101, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(102, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(103, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(104, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(105, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(106, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(107, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(108, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(109, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(110, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(111, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(112, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(113, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(114, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(115, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(116, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(117, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(118, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(119, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(120, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(121, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(122, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(123, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(124, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(125, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(126, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(127, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(128, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(129, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(130, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(131, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00 00:00:00'),
(132, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(133, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(134, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(135, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(136, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(137, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(138, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(139, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(140, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(141, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(142, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(143, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(144, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-18 00:00:00'),
(145, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-19 00:00:00'),
(146, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-20 00:00:00'),
(147, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-21 00:00:00'),
(148, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-22 00:00:00'),
(149, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-11-23 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prf_account`
--
ALTER TABLE `prf_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_certification`
--
ALTER TABLE `tb_certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contract_status`
--
ALTER TABLE `tb_contract_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_education`
--
ALTER TABLE `tb_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_request_mp`
--
ALTER TABLE `tb_request_mp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prf_account`
--
ALTER TABLE `prf_account`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_approval`
--
ALTER TABLE `tb_approval`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_certification`
--
ALTER TABLE `tb_certification`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_contract_status`
--
ALTER TABLE `tb_contract_status`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_education`
--
ALTER TABLE `tb_education`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_request_mp`
--
ALTER TABLE `tb_request_mp`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
