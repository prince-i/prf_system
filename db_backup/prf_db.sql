-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 06:07 AM
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
-- Table structure for table `falp_calendar`
--

CREATE TABLE `falp_calendar` (
  `id` int(14) NOT NULL,
  `date_value` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `falp_calendar`
--

INSERT INTO `falp_calendar` (`id`, `date_value`) VALUES
(1, '2021-01-04'),
(2, '2021-01-05'),
(3, '2021-01-06'),
(4, '2021-01-07'),
(5, '2021-01-08'),
(6, '2021-01-09'),
(7, '2021-01-11'),
(8, '2021-01-12'),
(9, '2021-01-13'),
(10, '2021-01-14'),
(11, '2021-01-15'),
(12, '2021-01-16'),
(13, '2021-01-18'),
(14, '2021-01-19'),
(15, '2021-01-20'),
(16, '2021-01-21'),
(17, '2021-01-22'),
(18, '2021-01-23'),
(19, '2021-01-25'),
(20, '2021-01-26'),
(21, '2021-01-27'),
(22, '2021-01-28'),
(23, '2021-01-29'),
(24, '2021-01-30'),
(25, '2021-02-01'),
(26, '2021-02-02'),
(27, '2021-02-03'),
(28, '2021-02-04'),
(29, '2021-02-05'),
(30, '2021-02-06'),
(31, '2021-02-08'),
(32, '2021-02-09'),
(33, '2021-02-10'),
(34, '2021-02-11'),
(35, '2021-02-12'),
(36, '2021-02-13'),
(37, '2021-02-15'),
(38, '2021-02-16'),
(39, '2021-02-17'),
(40, '2021-02-18'),
(41, '2021-02-19'),
(42, '2021-02-20'),
(43, '2021-02-22'),
(44, '2021-02-23'),
(45, '2021-02-24'),
(46, '2021-02-25'),
(47, '2021-02-26'),
(48, '2021-02-27'),
(49, '2021-03-01'),
(50, '2021-03-02'),
(51, '2021-03-03'),
(52, '2021-03-04'),
(53, '2021-03-05'),
(54, '2021-03-06'),
(55, '2021-03-08'),
(56, '2021-03-09'),
(57, '2021-03-10'),
(58, '2021-03-11'),
(59, '2021-03-12'),
(60, '2021-03-13'),
(61, '2021-03-15'),
(62, '2021-03-16'),
(63, '2021-03-17'),
(64, '2021-03-18'),
(65, '2021-03-19'),
(66, '2021-03-20'),
(67, '2021-03-22'),
(68, '2021-03-23'),
(69, '2021-03-24'),
(70, '2021-03-25'),
(71, '2021-03-26'),
(72, '2021-03-27'),
(73, '2021-03-29'),
(74, '2021-04-05'),
(75, '2021-04-06'),
(76, '2021-04-07'),
(77, '2021-04-08'),
(78, '2021-04-12'),
(79, '2021-04-13'),
(80, '2021-04-14'),
(81, '2021-04-15'),
(82, '2021-04-16'),
(83, '2021-04-17'),
(84, '2021-04-19'),
(85, '2021-04-20'),
(86, '2021-04-21'),
(87, '2021-04-22'),
(88, '2021-04-23'),
(89, '2021-04-24'),
(90, '2021-04-26'),
(91, '2021-04-27'),
(92, '2021-04-28'),
(93, '2021-04-29'),
(94, '2021-04-30'),
(95, '2021-05-03'),
(96, '2021-05-04'),
(97, '2021-05-05'),
(98, '2021-05-06'),
(99, '2021-05-07'),
(100, '2021-05-08'),
(101, '2021-05-10'),
(102, '2021-05-11'),
(103, '2021-05-12'),
(104, '2021-05-13'),
(105, '2021-05-14'),
(106, '2021-05-15'),
(107, '2021-05-17'),
(108, '2021-05-18'),
(109, '2021-05-19'),
(110, '2021-05-20'),
(111, '2021-05-21'),
(112, '2021-05-22'),
(113, '2021-05-24'),
(114, '2021-05-25'),
(115, '2021-05-26'),
(116, '2021-05-27'),
(117, '2021-05-28'),
(118, '2021-05-29'),
(119, '2021-05-31'),
(120, '2021-06-01'),
(121, '2021-06-02'),
(122, '2021-06-03'),
(123, '2021-06-04'),
(124, '2021-06-05'),
(125, '2021-06-07'),
(126, '2021-06-08'),
(127, '2021-06-09'),
(128, '2021-06-10'),
(129, '2021-06-11'),
(130, '2021-06-14'),
(131, '2021-06-15'),
(132, '2021-06-16'),
(133, '2021-06-17'),
(134, '2021-06-18'),
(135, '2021-06-19'),
(136, '2021-06-21'),
(137, '2021-06-22'),
(138, '2021-06-23'),
(139, '2021-06-24'),
(140, '2021-06-25'),
(141, '2021-06-26'),
(142, '2021-06-28'),
(143, '2021-06-29'),
(144, '2021-07-02'),
(145, '2021-07-03'),
(146, '2021-07-05'),
(147, '2021-07-06'),
(148, '2021-07-07'),
(149, '2021-07-08'),
(150, '2021-07-09'),
(151, '2021-07-10'),
(152, '2021-07-12'),
(153, '2021-07-13'),
(154, '2021-07-14'),
(155, '2021-07-15'),
(156, '2021-07-16'),
(157, '2021-07-17'),
(158, '2021-07-21'),
(159, '2021-07-22'),
(160, '2021-07-24'),
(161, '2021-07-26'),
(162, '2021-07-27'),
(163, '2021-07-28'),
(164, '2021-07-29'),
(165, '2021-07-30'),
(166, '2021-07-31'),
(167, '2021-08-02'),
(168, '2021-08-03'),
(169, '2021-08-04'),
(170, '2021-08-05'),
(171, '2021-08-06'),
(172, '2021-08-07'),
(173, '2021-08-09'),
(174, '2021-08-10'),
(175, '2021-08-11'),
(176, '2021-08-12'),
(177, '2021-08-13'),
(178, '2021-08-14'),
(179, '2021-08-16'),
(180, '2021-08-17'),
(181, '2021-08-18'),
(182, '2021-08-19'),
(183, '2021-08-20'),
(184, '2021-08-23'),
(185, '2021-08-24'),
(186, '2021-08-25'),
(187, '2021-08-26'),
(188, '2021-08-27'),
(189, '2021-08-28'),
(190, '2021-08-31'),
(191, '2021-09-01'),
(192, '2021-09-02'),
(193, '2021-09-03'),
(194, '2021-09-04'),
(195, '2021-09-06'),
(196, '2021-09-07'),
(197, '2021-09-08'),
(198, '2021-09-09'),
(199, '2021-09-10'),
(200, '2021-09-11'),
(201, '2021-09-13'),
(202, '2021-09-14'),
(203, '2021-09-15'),
(204, '2021-09-16'),
(205, '2021-09-17'),
(206, '2021-09-20'),
(207, '2021-09-21'),
(208, '2021-09-22'),
(209, '2021-09-23'),
(210, '2021-09-24'),
(211, '2021-09-25'),
(212, '2021-09-27'),
(213, '2021-09-28'),
(214, '2021-09-29'),
(215, '2021-10-04'),
(216, '2021-10-05'),
(217, '2021-10-06'),
(218, '2021-10-07'),
(219, '2021-10-08'),
(220, '2021-10-09'),
(221, '2021-10-11'),
(222, '2021-10-12'),
(223, '2021-10-13'),
(224, '2021-10-14'),
(225, '2021-10-15'),
(226, '2021-10-16'),
(227, '2021-10-18'),
(228, '2021-10-19'),
(229, '2021-10-20'),
(230, '2021-10-21'),
(231, '2021-10-22'),
(232, '2021-10-23'),
(233, '2021-10-25'),
(234, '2021-10-26'),
(235, '2021-10-27'),
(236, '2021-10-28'),
(237, '2021-10-29'),
(238, '2021-10-30'),
(239, '2021-11-03'),
(240, '2021-11-04'),
(241, '2021-11-05'),
(242, '2021-11-06'),
(243, '2021-11-08'),
(244, '2021-11-09'),
(245, '2021-11-10'),
(246, '2021-11-11'),
(247, '2021-11-12'),
(248, '2021-11-13'),
(249, '2021-11-15'),
(250, '2021-11-16'),
(251, '2021-11-17'),
(252, '2021-11-18'),
(253, '2021-11-19'),
(254, '2021-11-20'),
(255, '2021-11-22'),
(256, '2021-11-23'),
(257, '2021-11-24'),
(258, '2021-11-25'),
(259, '2021-11-26'),
(260, '2021-11-27'),
(261, '2021-11-29'),
(262, '2021-12-01'),
(263, '2021-12-02'),
(264, '2021-12-03'),
(265, '2021-12-04'),
(266, '2021-12-06'),
(267, '2021-12-07'),
(268, '2021-12-09'),
(269, '2021-12-10'),
(270, '2021-12-11'),
(271, '2021-12-13'),
(272, '2021-12-14'),
(273, '2021-12-15'),
(274, '2021-12-16'),
(275, '2021-12-17'),
(276, '2021-12-20'),
(277, '2021-12-21'),
(278, '2021-12-22'),
(279, '2021-12-23');

-- --------------------------------------------------------

--
-- Stand-in structure for view `fetchdetails`
-- (See below for the actual view)
--
CREATE TABLE `fetchdetails` (
`id` int(14)
,`date_value` date
);

-- --------------------------------------------------------

--
-- Table structure for table `hired_list_key`
--

CREATE TABLE `hired_list_key` (
  `id` int(14) NOT NULL,
  `prf_req_id` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prf_number` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hired_list_key`
--

INSERT INTO `hired_list_key` (`id`, `prf_req_id`, `prf_number`) VALUES
(25, '157', '19-004'),
(26, '159', '21-036'),
(27, '197', '21-037'),
(28, '197', '21-038'),
(29, '174', '21-039'),
(30, '162', '21-040'),
(31, '173', '21-041'),
(32, '157', '21-042');

-- --------------------------------------------------------

--
-- Table structure for table `prf_account`
--

CREATE TABLE `prf_account` (
  `id` int(14) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
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

INSERT INTO `prf_account` (`id`, `username`, `email`, `password`, `role`, `position`, `name`, `department`, `account_verification`, `acct_level`) VALUES
(2, '20008', 'requestor@email.com', '20008', 'requestor', 'staff', 'juan dela cruz', 'IT', 'approved', 1),
(3, '', 'approver@email.com', 'test', 'approver', 'supervisor', 'prince', 'IT', 'approved', 2),
(5, '', 'it@email.com', 'test', 'approver', 'Manager', 'test', 'IT', 'approved', 3),
(7, '', 'eqd@email.com', 'test', 'approver', 'Staff', 'test', 'EQD', 'approved', 2),
(12, '', 'asdad', 'asdasd', 'requestor', 'Staff', 'dad', 'IT', 'approved', 1),
(13, 'hr', 'hr@email.com', 'test', 'verifier', 'Department Manager', 'hrd-name', 'HR', 'approved', 5),
(14, '', 'hrdiv@email.com', 'test', 'verifier', 'Division Manager', 'hrd-division', 'HR', 'approved', 6),
(16, 'pres', 'pres@email.com', 'test', 'verifier', 'Department Manager', 'president', 'HR', 'approved', 7),
(17, 'rt', 'divina.amor.tumambing.detorres@furukawaelectric.com', 'test', 'verifier', 'Assistant Manager', 'Divina Amor de Torres', 'HR', 'approved', 4);

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_account`
--

CREATE TABLE `recruitment_account` (
  `id` int(14) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recruitment_account`
--

INSERT INTO `recruitment_account` (`id`, `username`, `password`, `email`, `name`, `user_role`) VALUES
(1, '0000', '0000', 'prince_arce01@outlook.com', 'Prince Arce', 'recruitment');

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
  `both_mp` int(14) DEFAULT NULL,
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

INSERT INTO `tb_request_mp` (`id`, `requestor`, `requestor_email`, `requesting_position`, `assigned_dept`, `female_num_mp`, `male_num_mp`, `both_mp`, `total_mp`, `contract_status`, `date_start`, `date_end`, `education`, `required_license`, `work_exp`, `other_qualification`, `job_duties`, `interview_need`, `interviewers`, `availability_for_interview`, `additional_mp`, `mp_plan`, `reorganization`, `promotion`, `retirement`, `replacement`, `replacement_mp_name`, `others`, `budget_source`, `budget_status`, `actual_mp_dept`, `actual_mp_section`, `plan_mp_dept`, `plan_mp_section`, `approve_check_by`, `approve_check_remarks`, `approve_noted_by`, `approve_noted_remarks`, `approval_status`, `verify_check_by`, `verify_check_remarks`, `verify_verifier_manager`, `verify_verifier_manager_remarks`, `verify_verifier_div_mgr`, `verify_verifier_div_mgr_remarks`, `president_verify`, `cancel_remarks`, `step`, `verification_status`, `request_date`, `typeHiring`, `sync_status`, `approve_date`) VALUES
(157, 'Test', 'approver@email.com', 'Associate', 'EQD-Equipment Engineering', 1, 0, NULL, 1, 'Probationary', '2021-02-15', '0000-00-00', 'Bachelors Degree', 'N/A', 'N?A', 'N?A', 'N?A', 'need', 'barjakul wakadu', '2021-02-05 10:00', '1', '1', '1', '0', '0', '0', '', '', 'EQD', 'EQD', 1, 1, 1, 1, 'Test', 'APPROVED', 'Test', NULL, 'APPROVED', NULL, NULL, 'hrd-name', 'APPROVED', 'APPROVED', NULL, 'President', 'APPROVED', '7', 'DONE', '2021-01-12 13:14:52', NULL, 'ok', '2021-03-18'),
(160, 'Mj', 'approver@email.com', 'fasfdsfsafdds', 'IT-Support Group', 1, 13, NULL, 14, 'Full Time', '0000-00-00', '0000-00-00', 'College Level', 'N/A', 'adsad', 'asdasd', 'asdsa', 'need', 'asdsad', '2020-12-31 18:42', '1', '1', '0', '0', '0', '0', '', '', 'G-ASSIST', 'G-ASSIST', 1, 1, 1, 1, 'Mj', 'APPROVED', NULL, 'DISAPPROVED (ayaw ni tanaka)', 'DISAPPROVED', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', 'DISAPPROVED', '2021-01-28 10:39:56', NULL, '', NULL),
(162, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT-Support Group', 0, 1, NULL, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', 'sdff', 'asf', 'sfsaf', 'need', 'asdsad', '2021-01-30 19:22', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 12, 12, 13, 13, 'Mj', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2021-01-30 11:20:50', NULL, 'ok', '2021-02-18'),
(163, 'Juan Dela Cruz', 'requestor@email.com', 'Assistant Manager', 'IT-System Group', NULL, 0, 1, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'N/A', '1 year', 'sdf', 'sfsfs', 'need', 'secret', '2021-02-01 19:41', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 1, 1, 1, 1, 'Mj', 'APPROVED', 'Test', 'APPROVED', 'APPROVED', '[RT manager name]', 'APPROVED', 'hrd-name', 'APPROVED', 'hrd-division', 'APPROVED', 'President', 'APPROVED', '7', 'DONE', '2021-02-01 11:39:03', 'internal', '', '2021-02-15'),
(215, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT-Support Group', 0, 1, NULL, 1, 'Probationary', '0000-00-00', '0000-00-00', 'Bachelors Degree', 'n', 'n', 'n', 'n', 'need', 'sdfsdfsd', '2021-02-15 10:00', '1', '1', '0', '0', '0', '0', '', '', 'IT', 'IT', 1, 1, 1, 1, 'Prince', 'APPROVED', NULL, NULL, 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2', 'PENDING', '2021-02-10 13:49:30', 'external', '', NULL),
(221, 'Juan Dela Cruz', 'requestor@email.com', 'Associate', 'IT-Support Group', 0, 0, 0, 0, 'Probationary', '0000-00-00', '0000-00-00', '', '', '', '', '', 'need', 'a', 'Monday - Wednesday 3-4pm', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-03-01 13:18:34', 'internal', '', NULL),
(228, 'Juan Dela Cruz', 'requestor@email.com', 'Assistant Manager', 'IT-Support Group', 0, 0, 0, 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '', 'noneed', 'N/A', 'N/A', '0', '0', '0', '0', '0', '0', '', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'FOR APPROVAL OF ASST. MNGR/SECTION MNGR.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1', 'PENDING', '2021-03-01 14:51:33', '', '', NULL);

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
(9, 'HR ', 'PD Technical Training'),
(10, 'HR', 'Non-PD Technical Training'),
(11, 'HR', 'General Affairs'),
(12, 'IT', 'Support Group'),
(13, 'IT', 'System Group'),
(14, 'IT', 'CAD Group'),
(15, 'MPD', 'Material Management'),
(16, 'MPD', 'Procurement'),
(17, 'MPD', 'FG Preparation'),
(18, 'NF', 'NF Kaizen'),
(19, 'EQD', 'Machine Data'),
(20, 'EQD', 'EM Initial (Corrective Maintenance)'),
(21, 'EQD', 'Fabrication'),
(22, 'EQD', 'EM Final (Corrective Maintenance)'),
(23, 'EQD', 'Spareparts'),
(24, 'EQD', 'Machinery Center'),
(25, 'EQD', 'EM Initial (Preventive Maintenance)'),
(26, 'EQD', 'EM Final (Preventive Maintenance)'),
(27, 'EQD', 'Calibration'),
(28, 'EQD', 'ISO/Document Control'),
(29, 'EQD', 'PCO'),
(30, 'EQD', 'N/A'),
(31, 'HR', 'Non-PD Technical Training'),
(32, 'HR', 'PD Technical Training'),
(33, 'MPD ', 'MH (WHSE)'),
(34, 'PE', 'AME'),
(35, 'PE', 'MPPD'),
(36, 'PE', 'PEC'),
(37, 'QA', 'Quality Control'),
(38, 'QA', 'Quality Assurance'),
(39, 'QA', 'Quality Management'),
(40, 'G-ASSIST', 'G-Assists'),
(41, 'PDC', 'PDC'),
(42, 'PMD', 'Production Control'),
(43, 'PMD', 'IMPEX'),
(44, 'PD1', 'Suzuki Final'),
(45, 'PD1', 'Suzuki Initial'),
(46, 'PD1', 'Mazda Initial'),
(47, 'PD1', 'Mazda Final'),
(48, 'PD1', 'Toyota Initial'),
(49, 'PD1', 'Toyota Final'),
(50, 'PD1', 'Daihatsu Initial'),
(51, 'PD1', 'Daihatsu Final'),
(52, 'PD1', 'Nissan Final'),
(53, 'PD2', 'Subaru Initial'),
(54, 'PD2', 'Subaru Final'),
(55, 'PD2', 'Honda Initial'),
(56, 'PD2', 'Honda Final'),
(57, 'PD2', 'PPET Initial'),
(58, 'PD2', 'SWAT Initial'),
(59, 'PD2', 'SWAT Final'),
(60, 'PD2', 'Tube Cutting'),
(61, 'PD2', 'Tube Making'),
(62, 'PD2', 'Repair Personel'),
(63, 'PD2', 'Distributor'),
(64, 'PD2', 'PPET Final'),
(65, 'SHD', 'Safety and Health Section'),
(66, 'SHD', 'N/A'),
(67, 'QA', 'FGI'),
(68, 'QA', 'QA - Final'),
(69, 'QA', 'QA - Initial'),
(70, 'QA', 'QA-PPG'),
(71, 'QA', 'QC - Dock Audit'),
(72, 'QA', 'QC I-ALERT'),
(73, 'QA', 'QC - Improvement'),
(74, 'QA', 'QM-CAG'),
(75, 'QA', 'QM-QMS');

-- --------------------------------------------------------

--
-- Structure for view `fetchdetails`
--
DROP TABLE IF EXISTS `fetchdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fetchdetails`  AS SELECT `falp_calendar`.`id` AS `id`, `falp_calendar`.`date_value` AS `date_value` FROM `falp_calendar` WHERE `falp_calendar`.`date_value` = '2021-02-16' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `falp_calendar`
--
ALTER TABLE `falp_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hired_list_key`
--
ALTER TABLE `hired_list_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prf_account`
--
ALTER TABLE `prf_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment_account`
--
ALTER TABLE `recruitment_account`
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
-- AUTO_INCREMENT for table `falp_calendar`
--
ALTER TABLE `falp_calendar`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `hired_list_key`
--
ALTER TABLE `hired_list_key`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `prf_account`
--
ALTER TABLE `prf_account`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recruitment_account`
--
ALTER TABLE `recruitment_account`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `tb_section`
--
ALTER TABLE `tb_section`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
