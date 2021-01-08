-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 06:08 AM
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
(3, 'approver@email.com', 'test', 'approver', 'supervisor', 'mj', 'IT', 'approved', 2);

-- --------------------------------------------------------

--
-- Table structure for table `section_prf`
--

CREATE TABLE `section_prf` (
  `COL 1` varchar(2) DEFAULT NULL,
  `COL 2` varchar(12) DEFAULT NULL,
  `COL 3` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_prf`
--

INSERT INTO `section_prf` (`COL 1`, `COL 2`, `COL 3`) VALUES
('id', 'EQD', 'Management'),
('', 'EQD', 'Equipment Management'),
('', 'EQD', 'Equipment Engineering'),
('', 'EQD', 'Facilities'),
('', 'ACC', 'Accounting and Taxation'),
('', 'Housekeeping', 'Housekeeping'),
('', 'HR', 'Recruitment and Training'),
('', 'HR', 'Human Resource'),
('', 'HR', 'General Affairs'),
('', 'IT', 'Support Group'),
('', 'IT', 'System Group'),
('', 'IT', 'CAD Group'),
('', 'MPD', 'Material Management'),
('', 'MPD', 'Procurement'),
('', 'MPD', 'FG Preparation'),
('', 'NF', 'NF Kaizen'),
('', 'EQD', 'Machine Data'),
('', 'EQD', 'EM Initial (Corrective Maintenance)'),
('', 'EQD', 'Fabrication'),
('', 'EQD', 'EM Final (Corrective Maintenance)'),
('', 'EQD', 'Spareparts'),
('', 'EQD', 'Machinery Center'),
('', 'EQD', 'EM Initial (Preventive Maintenance)'),
('', 'EQD', 'EM Final (Preventive Maintenance)'),
('', 'EQD', 'Calibration'),
('', 'EQD', 'ISO/Document Control'),
('', 'EQD', 'PCO'),
('', 'EQD', 'N/A'),
('', 'HR', 'Non-PD Technical Training'),
('', 'HR', 'PD Technical Training'),
('', 'MPD ', 'MH (WHSE)'),
('', 'PE', 'AME'),
('', 'PE', 'MPPD'),
('', 'PE', 'PEC'),
('', 'QA', 'Quality Control'),
('', 'QA', 'Quality Assurance'),
('', 'QA', 'Quality Management'),
('', 'G-ASSIST', 'G-Assists'),
('', 'PDC', 'PDC'),
('', 'PMD', 'Production Control'),
('', 'PMD', 'IMPEX'),
('', 'PD1', 'Battery Final'),
('', 'PD1', 'Battery Initial'),
('', 'PD1', 'Distributor'),
('', 'PD1', 'PPET'),
('', 'PD1', 'Repair Person'),
('', 'PD1', 'PD1 Clerk'),
('', 'PD1', 'SWAT Final'),
('', 'PD1', 'SWAT Initial'),
('', 'PD1', 'Tube Cutting'),
('', 'PD1', 'Tube Making'),
('', 'PD1', 'VS Laminating'),
('', 'PD2', 'D01L Final'),
('', 'PD2', 'D01L Initial'),
('', 'PD2', 'D54L Final'),
('', 'PD2', 'D54L Initial'),
('', 'PD2', 'Daihatsu Final'),
('', 'PD2', 'Daihatsu Initial'),
('', 'PD2', 'Nissan Final'),
('', 'PD2', 'Nissan Initial'),
('', 'PD2', 'PD2 Clerk'),
('', 'PD2', 'PPET'),
('', 'PD3', 'Mazda J12 Final'),
('', 'PD3', 'Mazda J12 Initial'),
('', 'PD3', 'Mazda Merge Final'),
('', 'PD3', 'Mazda Merge Initial'),
('', 'PD3', 'PD3 Clerk'),
('', 'PD3', 'PPET'),
('', 'PD4', 'PD4 Clerk'),
('', 'PD4', 'Suzuki Final'),
('', 'PD4', 'Suzuki Initial'),
('', 'PD4', 'Toyota Final'),
('', 'PD4', 'Toyota Initial'),
('', 'PD4', 'Y2R Final'),
('', 'PD4', 'Y2R Initial'),
('', 'PD4', 'PPET'),
('', 'PD5', 'Honda Final'),
('', 'PD5', 'Honda Initial'),
('', 'PD5', 'PD5 Clerk'),
('', 'PD5', 'Subaru Final'),
('', 'PD5', 'Subaru Initial'),
('', 'PD5', 'TKRA Final'),
('', 'PD5', 'TKRA Initial'),
('', 'PD5', 'PPET');

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
(19, 'Production 5', 'PD5');

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
  `step` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `verification_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_request_mp`
--

INSERT INTO `tb_request_mp` (`id`, `requestor`, `requestor_email`, `requesting_position`, `assigned_dept`, `female_num_mp`, `male_num_mp`, `total_mp`, `contract_status`, `date_start`, `date_end`, `education`, `required_license`, `work_exp`, `other_qualification`, `job_duties`, `interview_need`, `interviewers`, `availability_for_interview`, `additional_mp`, `mp_plan`, `reorganization`, `promotion`, `retirement`, `replacement`, `replacement_mp_name`, `others`, `budget_source`, `budget_status`, `actual_mp_dept`, `actual_mp_section`, `plan_mp_dept`, `plan_mp_section`, `approve_check_by`, `approve_check_remarks`, `approve_noted_by`, `approve_noted_remarks`, `approval_status`, `verify_check_by`, `verify_check_remarks`, `verify_verifier_manager`, `verify_verifier_manager_remarks`, `verify_verifier_div_mgr`, `verify_verifier_div_mgr_remarks`, `cancel_remarks`, `step`, `verification_status`, `request_date`) VALUES
(36, 'Juan Dela Cruz', '@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'Junior Highschool (New Curriculum)', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, 'waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'for_checking', NULL, '2020-11-18 00:00:00'),
(37, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 1, 1, 2, 'Full Time', '2020-12-07', '0000-00-00', 'Bachelors Degree', 'N/A', '', '', 'yamete', 'need', 'gem ibana', '2020-11-26 13:00', '1', '1', '0', '0', '0', '1', 'ann , aison cabusay', '', 'IT', 'IT', 35, 0, 38, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'verified', '2020-11-18 00:00:00'),
(38, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-11-18 00:00:00'),
(39, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-11-18 00:00:00'),
(40, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-11-18 00:00:00'),
(41, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-11-18 00:00:00'),
(42, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-11-18 00:00:00'),
(43, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-11-18 00:00:00'),
(44, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-11-18 00:00:00'),
(45, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT System', 0, 1, 0, 'Fulltime', '2020-12-31', '2021-03-31', 'College', 'N/A', 'Atleast 6 Months Exp', 'wala na', 'magbabatak mg LAN sa buong LIMA', 'need', 'jose marie chan', ' sabado', '1', '1', '1', '0', '1', '1', 'nigga', '', 'IT', 'On Budget', 0, 0, 0, 0, NULL, 'waiting', NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'for_checking', 'pending', '2020-12-09 00:00:00'),
(46, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-09 00:00:00'),
(47, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-09 03:32:30'),
(48, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-09 03:36:12'),
(49, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '0000-00-00 00:00:00'),
(50, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-09 14:13:45'),
(51, 'Juan Dela Cruz', '@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-10 15:26:17'),
(52, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-18 16:32:59'),
(53, 'Juan Dela Cruz', 'requestor@email.com', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '1 year', '', '', '', '', ' ', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'pending', '2020-12-18 16:33:07'),
(54, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT Support', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, '', 'waiting', 'N/A', 'N/A', 'pending', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'pending', '0000-00-00 00:00:00'),
(55, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'EQD', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(56, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(57, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(58, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(59, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(60, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(61, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(62, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(63, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(64, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(65, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(66, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(67, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(68, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(69, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(70, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(71, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(72, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(73, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(74, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(75, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(76, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(77, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(78, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(79, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(80, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(81, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(82, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(83, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(84, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(85, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(86, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(87, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(88, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(89, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(90, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(91, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(92, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(93, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(94, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(95, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(96, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(97, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(98, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(99, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(100, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(101, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(102, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(103, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(104, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(105, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(106, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(107, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(108, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(109, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(110, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(111, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(112, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(113, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(114, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(115, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(116, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(117, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(118, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(119, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(120, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(121, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(122, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(123, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(124, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(125, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(126, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(127, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(128, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(129, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(130, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(131, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0000-00-00 00:00:00'),
(132, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(133, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(134, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(135, '', '', '', '', 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(144, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-18 00:00:00'),
(145, 'Juan Dela Cruz', 'requestor@email.com', 'Supervisor', 'IT', 0, 1, 1, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-19 00:00:00'),
(146, 'Juan Dela Cruz', 'requestor@email.com', 'Manager', 'IT', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'IT', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-20 00:00:00'),
(147, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-21 00:00:00'),
(148, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-22 00:00:00'),
(149, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'EQD', 2, 0, 2, 'Fulltime', '0000-00-00', '0000-00-00', 'College', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', 'AISON', 'N/A', 'EQD', 'On Budget', 0, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2020-11-23 00:00:00'),
(150, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT', 0, 1, 1, 'Full Time', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'N/A', '', 'it support', 'need', 'johnny sins', '2021-01-16 10:00', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 30, 30, 30, 30, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'pending', '2021-01-06 16:11:36');

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
(84, 'PD5', 'PPET');

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tb_section`
--
ALTER TABLE `tb_section`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
