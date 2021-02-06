-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 01:32 AM
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
  `account_verification` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `acct_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prf_account`
--

INSERT INTO `prf_account` (`id`, `username`, `password`, `role`, `position`, `name`, `department`, `account_verification`, `acct_level`) VALUES
(1, 'admin@admin.com', 'admin', 'administrator', 'staff', 'prince arce', 'IT', 'approved', 0),
(2, 'requestor@email.com', 'test', 'requestor', 'staff', 'juan dela cruz', 'IT', 'approved', 1),
(3, 'approver@email.com', 'test', 'approver', 'supervisor', 'prince', 'IT', 'approved', 2),
(5, 'it@email.com', 'test', 'approver', 'Manager', 'test', 'IT', 'approved', 3),
(7, 'eqd@email.com', 'test', 'approver', 'Staff', 'test', 'EQD', 'approved', 2),
(8, 'prince_arce01@outlook.com', 'test', 'verifier', 'Asst. Manager', '[RT manager name]', 'EQD', 'approved', 4),
(12, 'asdad', 'asdasd', 'requestor', 'Staff', 'dad', 'IT', 'approved', 1),
(13, 'hr@email.com', 'test', 'verifier', 'Department Manager', 'hrd-name', 'HR', 'approved', 5),
(14, 'hrdiv@email.com', 'test', 'verifier', 'Division Manager', 'hrd-division', 'HR', 'approved', 6),
(15, 'rt@email.com', 'test', 'verifier', 'Assistant Manager', 'president', 'HR', 'approved', 4),
(16, 'pres@email.com', 'test', 'verifier', 'Department Manager', 'president', 'HR', 'approved', 7),
(17, 'divina.amor.tumambing.detorres@furukawaelectric.com', 'test', 'verifier', 'Assistant Manager', 'Divina Amor de Torres', 'HR', 'approved', 4);

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
(1, 'Probationary'),
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
(2, 'Accounting Department', 'ACC'),
(3, 'Equipment Department', 'EQD'),
(4, 'G-Assist Team', 'G-ASSIST'),
(5, 'Human Resource Department', 'HR'),
(6, 'Information Technology Department', 'IT'),
(7, 'Material Procurement Department', 'MPD'),
(8, 'NF Kaizen Department', 'NF'),
(9, 'Production Design Center', 'PDC'),
(10, 'Production Engineering Department', 'PE'),
(11, 'Production Management Department', 'PMD'),
(13, 'Quality Assurance Department', 'QA'),
(14, 'Housekeeping', 'HouseKeeping'),
(15, 'Production 1', 'PD1'),
(16, 'Production 2', 'PD2'),
(17, 'Production 3', 'PD3'),
(18, 'Production 4', 'PD4'),
(19, 'Production 5', 'PD5'),
(20, 'Safety and Health Department', 'SHD');

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
  `president_verify` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cancel_remarks` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `step` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `verification_status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `request_date` datetime NOT NULL,
  `typeHiring` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sync_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `approve_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_request_mp`
--

INSERT INTO `tb_request_mp` (`id`, `requestor`, `requestor_email`, `requesting_position`, `assigned_dept`, `female_num_mp`, `male_num_mp`, `total_mp`, `contract_status`, `date_start`, `date_end`, `education`, `required_license`, `work_exp`, `other_qualification`, `job_duties`, `interview_need`, `interviewers`, `availability_for_interview`, `additional_mp`, `mp_plan`, `reorganization`, `promotion`, `retirement`, `replacement`, `replacement_mp_name`, `others`, `budget_source`, `budget_status`, `actual_mp_dept`, `actual_mp_section`, `plan_mp_dept`, `plan_mp_section`, `approve_check_by`, `approve_check_remarks`, `approve_noted_by`, `approve_noted_remarks`, `approval_status`, `verify_check_by`, `verify_check_remarks`, `verify_verifier_manager`, `verify_verifier_manager_remarks`, `verify_verifier_div_mgr`, `verify_verifier_div_mgr_remarks`, `president_verify`, `cancel_remarks`, `step`, `verification_status`, `request_date`, `typeHiring`, `sync_status`, `approve_date`) VALUES
(72, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'test', 'kakarume', 'N/A', 'N/A', 'DISAPPROVED', '[RT manager name]', 'DISAPPROVED', 'hrd-division', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '0000-00-00 00:00:00', NULL, 'ok', '2021-02-02'),
(73, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'mj', 'APPROVED', 'test', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'APPROVED', 'APPROVED', 'N/A', 'President', 'DISAPPROVED(asdasdas)', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(74, 'Juan Dela Cruz', 'prince_arce01@outlook.com', 'Manager', 'IT', 2, 0, 2, 'Probationary', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'Mj', 'APPROVED', 'Test', 'N/A', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2021-01-01 22:27:00', NULL, 'ok', '2021-02-02'),
(90, 'Juan Dela Cruz', 'prince_arce01@outlook.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', '1 year experience in development', 'N/A', 'Develop System/Troubleshoot servers and system errors', 'N/A', 'Sample', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'Mj', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '0000-00-00 00:00:00', NULL, 'ok', '2021-02-02'),
(91, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'Mj', 'APPROVED', 'Test', 'N/A', 'APPROVED', '[RT manager name]', 'cvxcvxcv', 'hrd-name', 'asdadasd', 'N/A', 'N/A', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(92, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, NULL, 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'invalid request', 'N/A', 'N/A', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(108, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'DISAPPROVED (invalid request)', 'N/A', 'N/A', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(109, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'DISAPPROVED (invalid request)', 'N/A', 'N/A', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(110, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'APPROVED', 'N/A', 'N/A', '', '', '0', 'FOR HRD DIV. MNGR. APPROVAL', '0000-00-00 00:00:00', NULL, '', NULL),
(126, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'APPROVED', 'N/A', 'DISAPPROVED (invalid request)', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(127, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'DECLINED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'APPROVED', 'N/A', 'DISAPPROVED (invalid request)', '', '', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(128, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'ayaw ko lang', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-division', 'APPROVED', 'APPROVED', 'N/A', 'President', 'DISAPPROVED(sad)', '0', 'DISAPPROVED', '0000-00-00 00:00:00', NULL, '', NULL),
(144, 'Juan Dela Cruz', 'john.bernard.lim.jalla@furukawaelectric.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'Mj', 'APPROVED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-division', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2020-11-18 00:00:00', NULL, 'ok', '2021-02-02'),
(145, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'Mj', 'APPROVED', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2020-11-19 00:00:00', NULL, 'ok', '2021-02-03'),
(146, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'budget', 'N/A', 'N/A', 'APPROVED', 'N/A', 'N/A', 'hrd-division', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2020-11-20 00:00:00', NULL, 'ok', '2021-02-03'),
(150, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Full Time', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'N/A', '', 'it support', 'need', 'johnny sins', '2021-01-16 10:00', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 30, 30, 30, 30, '', 'asdsadsadasdasdsadas', NULL, NULL, 'APPROVED', NULL, NULL, 'hrd-name', 'DISAPPROVED (invalid requestasdasdasdas)', NULL, 'DISAPPROVED (invalid requestasdasdasdas)', '', '', '0', 'DISAPPROVED', '2021-01-06 16:11:36', NULL, '', NULL),
(157, 'Test', 'test', 'Associate', 'EQD-Equipment Engineering', 1, 0, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'N?A', 'N?A', 'N?A', 'need', 'barjakul wakadu', '2021-02-05 10:00', '1', '1', '1', '0', '0', '0', '', '', 'EQD', 'EQD', 1, 1, 1, 1, 'Test', 'APPROVED', 'Test', NULL, 'APPROVED', NULL, NULL, 'hrd-name', 'APPROVED', 'APPROVED', NULL, 'President', 'APPROVED', '7', 'DONE', '2021-01-12 13:14:52', NULL, 'ok', '2021-02-03'),
(158, 'Test', 'test', '', 'EQD- EUT', 0, 0, 0, 'Probationary', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, 'eutdin', NULL, NULL, 'APPROVED', NULL, NULL, 'hrd-name', 'APPROVED', 'APPROVED', NULL, 'President', 'DISAPPROVED(bastus)', '0', 'DISAPPROVED', '2021-01-16 08:34:53', NULL, '', NULL),
(159, 'Test', 'test', '', 'EQD-Machine', 0, 0, 0, 'Probationary', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Test', 'APPROVED', NULL, NULL, 'APPROVED', NULL, NULL, 'hrd-name', 'APPROVED', 'APPROVED', NULL, 'President', 'APPROVED', '7', 'DONE', '2021-01-16 08:35:06', NULL, 'ok', '2021-02-03'),
(160, 'Mj', 'approver@email.com', 'fasfdsfsafdds', 'IT-Support Group', 1, 13, 14, 'Full Time', '0000-00-00', '0000-00-00', 'College Level', 'N/A', 'adsad', 'asdasd', 'asdsa', 'need', 'asdsad', '2020-12-31 18:42', '1', '1', '0', '0', '0', '0', '', '', 'G-ASSIST', 'G-ASSIST', 1, 1, 1, 1, 'Mj', 'APPROVED', NULL, 'DISAPPROVED (ayaw ni tanaka)', 'DISAPPROVED', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', 'DISAPPROVED', '2021-01-28 10:39:56', NULL, '', NULL),
(162, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT-Support Group', 0, 1, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'sdff', 'asf', 'sfsaf', 'need', 'asdsad', '2021-01-30 19:22', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 12, 12, 13, 13, 'Mj', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '6', 'DONE', '2021-01-30 11:20:50', NULL, '', NULL),
(163, 'Juan Dela Cruz', 'requestor@email.com', 'Assistant Manager', 'IT-System Group', 1, 0, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', '1 year', 'sdf', 'sfsfs', 'need', 'secret', '2021-02-01 19:41', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 1, 1, 1, 1, 'Mj', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2021-02-01 11:39:03', NULL, 'ok', '2021-02-03'),
(173, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', '', '', '6', 'FOR PRESIDENT APPROVAL', '2021-02-02 11:37:20', NULL, '', NULL),
(174, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-CAD Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 11:38:36', NULL, '', NULL),
(175, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 11:41:18', NULL, '', NULL),
(176, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 11:41:52', NULL, '', NULL),
(177, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-CAD Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 11:49:22', NULL, '', NULL),
(179, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 11:52:42', NULL, '', NULL),
(180, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 11:53:14', NULL, '', NULL),
(181, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 13:04:28', NULL, '', NULL),
(182, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 13:04:46', NULL, '', NULL),
(183, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:08:16', NULL, '', NULL),
(184, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:09:46', NULL, '', NULL),
(185, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:12:01', NULL, '', NULL),
(186, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-CAD Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:17:24', NULL, '', NULL),
(187, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:18:12', NULL, '', NULL),
(188, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:18:50', NULL, '', NULL),
(189, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-02 13:21:10', NULL, '', NULL),
(190, 'Prince', 'approver@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 13:24:23', NULL, '', NULL),
(191, 'Prince', 'approver@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-02 13:29:26', NULL, '', NULL),
(192, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, 'Through Manpower Provider', '0000-00-00', '0000-00-00', '', '', '', '', '', 'need', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'Prince', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', 'president', 'APPROVED', 'hrd-division', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2021-02-03 16:28:13', NULL, 'ok', '2021-02-03'),
(193, 'Prince', 'approver@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-03 16:30:51', NULL, '', NULL),
(194, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT-System Group', 0, 1, 1, 'Through Manpower Provider', '0000-00-00', '0000-00-00', 'Highschool Diploma', 'NA', 'With experience in visual inspection', '19 years old and above', 'conduct visual inspection', 'need', 'Divine', '2021-02-09 14:52', '1', '0', '0', '0', '0', '0', '', '', 'IT', 'IT', 12, 10, 13, 10, 'Prince', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', 'president', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', '', '', '6', 'FOR PRESIDENT APPROVAL', '2021-02-04 13:51:15', NULL, '', NULL),
(195, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 13:31:36', 'external', '', NULL),
(196, 'Prince', 'approver@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:33:05', '', '', NULL),
(197, 'Prince', 'approver@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:43:46', '', '', NULL),
(198, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 13:51:12', '', '', NULL),
(199, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:51:50', '', '', NULL),
(200, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 13:52:01', '', '', NULL),
(201, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 13:53:21', '', '', NULL),
(202, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:54:01', '', '', NULL),
(203, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:54:09', '', '', NULL),
(204, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:56:18', '', '', NULL),
(205, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 13:56:31', '', '', NULL),
(206, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 13:57:29', '', '', NULL),
(207, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-Support Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-02-05 14:09:46', '', '', NULL),
(208, 'Juan Dela Cruz', 'requestor@email.com', '', 'IT-System Group', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 14:10:20', '', '', NULL),
(209, 'Prince', 'approver@email.com', 'Associate', 'IT-Support Group', 0, 1, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'experience in IT support', 'sff', 'afsfsdf', 'need', 'sadfaf', '2021-02-05 18:05', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 10, 10, 10, 10, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '3', 'PENDING', '2021-02-05 16:05:17', 'external', '', NULL),
(210, 'Prince', 'approver@email.com', 'Department Manager', 'IT-System Group', 0, 1, 1, 'Through Manpower Provider', '0000-00-00', '0000-00-00', 'College Level', 'da', 'dasda', 'sdasda', 'dadas', 'need', 'asdas', '2021-02-19 16:13', '1', '1', '0', '0', '0', '0', '', '', 'HR', 'HR', 10, 10, 10, 10, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '3', 'PENDING', '2021-02-05 16:10:38', 'external', '', NULL),
(211, 'Prince', 'approver@email.com', 'Associate', 'IT-Support Group', 1, 1, 2, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', '0', '0', '0', '0', 'noneed', 'N/A', '2021-02-27 08:40', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 32, 32, 32, 32, 'N/A', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./DIV. MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-05 16:17:07', 'internal', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_section`
--

CREATE TABLE `tb_section` (
  `id` int(14) NOT NULL,
  `department` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_section`
--

INSERT INTO `tb_section` (`id`, `department`, `section_name`) VALUES
(1, 'EQD', 'Management'),
(2, 'EQD', 'Equipment Management'),
(3, 'EQD', 'Equipment Engineering'),
(4, 'EQD', 'Facilities'),
(5, 'ACC', 'Accounting and Taxation'),
(6, 'Housekeeping', 'Housekeeping'),
(7, 'HR', 'Recruitment and Training'),
(8, 'HR', 'Human Resource'),
(9, 'HR', 'General Affairs'),
(10, 'IT', 'Support Group'),
(11, 'IT', 'System Group'),
(12, 'IT', 'CAD Group'),
(13, 'MPD', 'Material Management'),
(14, 'MPD', 'Procurement'),
(15, 'MPD', 'FG Preparation'),
(16, 'NF', 'NF Kaizen'),
(17, 'EQD', 'Machine Data'),
(18, 'EQD', 'EM Initial (Corrective Maintenance)'),
(19, 'EQD', 'Fabrication'),
(20, 'EQD', 'EM Final (Corrective Maintenance)'),
(21, 'EQD', 'Spareparts'),
(22, 'EQD', 'Machinery Center'),
(23, 'EQD', 'EM Initial (Preventive Maintenance)'),
(24, 'EQD', 'EM Final (Preventive Maintenance)'),
(25, 'EQD', 'Calibration'),
(26, 'EQD', 'ISO/Document Control'),
(27, 'EQD', 'PCO'),
(28, 'EQD', 'N/A'),
(29, 'HR', 'Non-PD Technical Training'),
(30, 'HR', 'PD Technical Training'),
(31, 'MPD ', 'MH (WHSE)'),
(32, 'PE', 'AME'),
(33, 'PE', 'MPPD'),
(34, 'PE', 'PEC'),
(35, 'QA', 'Quality Control'),
(36, 'QA', 'Quality Assurance'),
(37, 'QA', 'Quality Management'),
(38, 'G-ASSIST', 'G-Assists'),
(39, 'PDC', 'PDC'),
(40, 'PMD', 'Production Control'),
(41, 'PMD', 'IMPEX'),
(42, 'PD1', 'Battery Final'),
(43, 'PD1', 'Battery Initial'),
(44, 'PD1', 'Distributor'),
(45, 'PD1', 'PPET'),
(46, 'PD1', 'Repair Person'),
(47, 'PD1', 'PD1 Clerk'),
(48, 'PD1', 'SWAT Final'),
(49, 'PD1', 'SWAT Initial'),
(50, 'PD1', 'Tube Cutting'),
(51, 'PD1', 'Tube Making'),
(52, 'PD1', 'VS Laminating'),
(53, 'PD2', 'D01L Final'),
(54, 'PD2', 'D01L Initial'),
(55, 'PD2', 'D54L Final'),
(56, 'PD2', 'D54L Initial'),
(57, 'PD2', 'Daihatsu Final'),
(58, 'PD2', 'Daihatsu Initial'),
(59, 'PD2', 'Nissan Final'),
(60, 'PD2', 'Nissan Initial'),
(61, 'PD2', 'PD2 Clerk'),
(62, 'PD2', 'PPET'),
(63, 'PD3', 'Mazda J12 Final'),
(64, 'PD3', 'Mazda J12 Initial'),
(65, 'PD3', 'Mazda Merge Final'),
(66, 'PD3', 'Mazda Merge Initial'),
(67, 'PD3', 'PD3 Clerk'),
(68, 'PD3', 'PPET'),
(69, 'PD4', 'PD4 Clerk'),
(70, 'PD4', 'Suzuki Final'),
(71, 'PD4', 'Suzuki Initial'),
(72, 'PD4', 'Toyota Final'),
(73, 'PD4', 'Toyota Initial'),
(74, 'PD4', 'Y2R Final'),
(75, 'PD4', 'Y2R Initial'),
(76, 'PD4', 'PPET'),
(77, 'PD5', 'Honda Final'),
(78, 'PD5', 'Honda Initial'),
(79, 'PD5', 'PD5 Clerk'),
(80, 'PD5', 'Subaru Final'),
(81, 'PD5', 'Subaru Initial'),
(82, 'PD5', 'TKRA Final'),
(83, 'PD5', 'TKRA Initial'),
(84, 'PD5', 'PPET'),
(85, 'SHD', 'Safety and Health Section');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prf_account`
--
ALTER TABLE `prf_account`
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
-- Indexes for table `tb_section`
--
ALTER TABLE `tb_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prf_account`
--
ALTER TABLE `prf_account`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `tb_section`
--
ALTER TABLE `tb_section`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
