-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 09:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `human_resource 1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `user_id`, `firstname`, `lastname`, `password`, `role`) VALUES
(9, 'admin', '34695', 'rey angelo', 'talap', '$2y$10$WG5BHItrbLnhS50NFtARTOfRPssdIQbidst1AFaej5amtz.5M6Kcy', ''),
(10, 'admin', '1585', 'rey angelo', 'talap', '$2y$10$s4JnfqV6uPcOM4H9z4Z73ul8A7gejfRAcCgtPINgTp9ash/tEWiTS', ''),
(11, 'errolpapas', '4003906889727653239', 'rey angelo', 'talap', '$2y$10$Ct9RtX5N4PHI6yU/bV2jzeM1ZAS1478FDKUfrJmzrAaK9riKLc7x2', ''),
(12, 'RCalisan', '0814', 'rey angelo', 'talap', '$2y$10$0GxZ4/j.ycn42zwFfmOiT.cQmF8h0APL1PEKVonEomXMamz8F0dhy', ''),
(13, 'Test12345', '9998031701128931', 'Test', 'talap', '$2y$10$KeXhGgX.VvnUb9iHxa6Vwe23/WNga3a0zTtNL26chtRyx5qH11hWC', ''),
(14, 'Test', '35669830070', 'Romer', 'Calisan', '$2y$10$Y4FnVZRzH4YE1Ps8YFZLlu1aB9kdTTV/V3dBB3RbMOnoDuGUN5gGS', ''),
(16, 'Hr1_112', '', 'Rey Angelo', 'Talap', 'Hr1_bypassme', 'Hr1 Admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_resume`
--

CREATE TABLE `applicant_resume` (
  `id` int(11) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_resume`
--

INSERT INTO `applicant_resume` (`id`, `applied_job`, `applicant_name`, `email`, `contact`, `resume_file`, `upload_date`, `status`, `reg_id`) VALUES
(316, 'Loan Manager', 'reyangelo talapp', 'reyangelotalap23@gmail.com', '09146647534', 'Recruitment  RGBC.pdf', '2023-03-20 04:07:24', '', 37);

-- --------------------------------------------------------

--
-- Table structure for table `attempt`
--

CREATE TABLE `attempt` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `time_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`id`, `ip_address`, `time_count`) VALUES
(199, '', 1676084033),
(200, '', 1676084095),
(202, '', 1676084217),
(203, '', 1676084220),
(204, '', 1676084221),
(205, '', 1676084222),
(206, '', 1676084230),
(207, '', 1676084234),
(208, '', 1676084254),
(209, '', 1676084259),
(210, '', 1676084326),
(211, '', 1676084334),
(218, '', 1676084481),
(219, '', 1676084513),
(220, '', 1676084542),
(222, '', 1676084833),
(223, '', 1676084845),
(224, '', 1676086324),
(225, '', 1676086674),
(226, '', 1676086730),
(227, '', 1676094404);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `expire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'RGBCmicrofinance@gmail.com', '14777', '1675073922'),
(2, 'reyangelotalap23@gmail.com', '15661', '1675074119'),
(3, 'reyangelotalap23@gmail.com', '94262', '1675074437'),
(4, 'reyangelotalap23@gmail.com', '38439', '1675074506'),
(5, 'reyangelotalap23@gmail.com', '56950', '1675074621'),
(6, 'reyangelotalap@gmail.com', '12236', '1675074639'),
(7, 'pernitio@gmail.com', '32460', '1675075908'),
(8, 'reyangelotalap23@gmail.com', '35952', '1675081679'),
(9, 'reyangelotalap23@gmail.com', '41598', '1675081689'),
(10, 'reyangelotalap23@gmail.com', '73220', '1675081917'),
(11, 'reyangelotalap23@gmail.com', '37753', '1675082007'),
(12, 'reyangelotalap23@gmail.com', '53634', '1675082089'),
(13, 'reyangelotalap23@gmail.com', '77787', '1675082138'),
(14, 'reyangelotalap23@gmail.com', '68073', '1675082160'),
(15, 'reyangelotalap23@gmail.com', '14003', '1675082317'),
(16, 'reyangelotalap23@gmail.com', '14121', '1675082516'),
(17, 'reyangelotalap23@gmail.com', '25848', '1675117290'),
(18, 'reyangelotalap23@gmail.com', '15733', '1675119076'),
(19, 'RGBCmicrofinance@gmail.com', '18744', '1675121081'),
(20, 'reyangelotalap23@gmail.com', '62554', '1675121168'),
(21, 'RGBCmicrofinance@gmail.com', '26542', '1675121204'),
(22, 'reyangelotalap23@gmail.com', '24738', '1675130365'),
(23, 'reyangelotalap23@gmail.com', '43507', '1675145072'),
(24, 'reyangelotalap23@gmail.com', '16992', '1675145503'),
(26, 'reyangelotalap23@gmail.com', '21600', '1675145876'),
(27, 'reyangelotalap23@gmail.com', '43282', '1675146024'),
(28, 'RGBCmicrofinance@gmail.com', '65658', '1675185340'),
(29, 'RGBCmicrofinance@gmail.com', '22401', '1675186867'),
(30, 'RGBCmicrofinance@gmail.com', '48575', '1675186880'),
(31, 'RGBCmicrofinance@gmail.com', '79215', '1675186889'),
(32, 'RGBCmicrofinance@gmail.com', '56112', '1675186978'),
(33, 'RGBCmicrofinance@gmail.com', '78823', '1675187213'),
(34, 'RGBCmicrofinance@gmail.com', '76979', '1675187224'),
(35, 'reyangelotalap23@gmail.com', '71563', '1675187245'),
(36, 'reyangelotalap23@gmail.com', '54287', '1675187276'),
(37, 'reyangelotalap23@gmail.com', '70245', '1675188110'),
(38, 'reyangelotalap23@gmail.com', '53709', '1675188187'),
(39, 'reyangelotalap23@gmail.com', '60873', '1675222216'),
(40, 'reyangelotalap23@gmail.com', '53146', '1675224349'),
(41, 'reyangelotalap23@gmail.com', '75504', '1675225006'),
(42, 'reyangelotalap23@gmail.com', '87934', '1675225021'),
(43, 'reyangelotalap23@gmail.com', '32922', '1675225044'),
(44, 'RGBCmicrofinance@gmail.com', '83904', '1675239571'),
(45, 'reyangelotalap23@gmail.com', '21356', '1675652438'),
(46, 'reyangelotalap23@gmail.com', '89797', '1675823355'),
(47, 'reyangelotalap23@gmail.com', '20766', '1675846426'),
(48, 'reyangelotalap23@gmail.com', '55801', '1675871435'),
(49, 'reyangelotalap23@gmail.com', '12927', '1675871500'),
(50, 'reyangelotalap23@gmail.com', '23922', '1675871510'),
(51, 'reyangelotalap23@gmail.com', '23519', '1675871513'),
(52, 'reyangelotalap23@gmail.com', '78016', '1676013772'),
(53, 'reyangelotalap23@gmail.com', '41701', '1676868510'),
(54, 'reyangelotalap23@gmail.com', '11958', '1676881498'),
(55, 'reyangelotalap23@gmail.com', '80095', '1676881755'),
(56, 'reyangelotalap23@gmail.com', '81099', '1676881775'),
(57, 'reyangelotalap23@gmail.com', '55700', '1676882251'),
(58, 'reyangelotalap23@gmail.com', '13222', '1676883269'),
(59, 'reyangelotalap23@gmail.com', '94630', '1676888456'),
(60, 'reyangelotalap23@gmail.com', '81753', '1676888931'),
(61, 'reyangelotalap23@gmail.com', '56368', '1676888934'),
(62, 'reyangelotalap23@gmail.com', '72131', '1676889016'),
(63, 'reyangelotalap23@gmail.com', '76834', '1676889021'),
(64, 'reyangelotalap23@gmail.com', '24606', '1677290928'),
(65, 'reyangelotalap23@gmail.com', '51530', '1677290986'),
(66, 'reyangelotalap23@gmail.com', '53049', '1677291148'),
(67, 'reyangelotalap23@gmail.com', '30397', '1677291230'),
(68, 'reyangelotalap23@gmail.com', '30078', '1677291382'),
(69, 'reyangelotalap23@gmail.com', '71881', '1677291580'),
(70, 'reyangelotalap23@gmail.com', '86084', '1677291583'),
(71, 'reyangelotalap23@gmail.com', '40655', '1677291810'),
(72, 'reyangelotalap23@gmail.com', '14290', '1677291975'),
(73, 'reyangelotalap23@gmail.com', '81019', '1677326913'),
(74, 'reyangelotalap23@gmail.com', '18361', '1677746063'),
(75, 'reyangelotalap23@gmail.com', '35377', '1677747637'),
(76, 'reyangelotalap23@gmail.com', '69532', '1677747710'),
(77, 'reyangelotalap23@gmail.com', '73865', '1678814497'),
(78, 'reyangelotalap23@gmail.com', '78307', '1678814726');

-- --------------------------------------------------------

--
-- Table structure for table `ess_acounts`
--

CREATE TABLE `ess_acounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_hired` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ess_acounts`
--

INSERT INTO `ess_acounts` (`id`, `username`, `email`, `password`, `date_hired`) VALUES
(312, 'EMP968', 'jpgomera19@gmail.com', '$2y$10$CS/cZ1ZJIOfPIsC/tOsDpezuaxpZwpA4bH/lW9lKbOtAkwVfcVkEu', '2023-03-19 18:34:46'),
(313, 'EMP182', 'reyangelotalap23@gmail.com', '$2y$10$9fzizsjF1iNhCjUfjnRTSO/YSGumdbdfhYC4XhWstfHR603RpDCfC', '2023-03-19 18:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `examination_status`
--

CREATE TABLE `examination_status` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `exam_score` int(11) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examination_status`
--

INSERT INTO `examination_status` (`id`, `applicant_name`, `email`, `contact`, `applied_job`, `exam_score`, `resume_file`, `status`) VALUES
(283, 'rey angelo talap', 'reyangelotalap23@gmail.com', '091325587854', 'fsherdfsdfdsd', 0, '', 'passed'),
(287, 'rey angelo talap', 'reyangelotalap23@gmail.com', '0916846346', 'fsherdfsdfdsd', 0, '', 'failed'),
(288, 'rey angelo talap', 'reyangelotalap23@gmail.com', '0916846346', 'fsherdfsdfdsd', 0, '', 'passed'),
(290, 'rey angelo talap', 'reyangelotalap23@gmail.com', '0916846346', 'fsherdfsdfdsd', 0, '', 'passed'),
(291, 'rey angelo talap', 'reyangelotalap23@gmail.com', '0916846346', 'fsherdfsdfdsd', 0, '', 'failed'),
(292, 'REY', 'flores_james36@yahoo.com', '0916846346', 'Loan Manager', 0, '', 'passed');

-- --------------------------------------------------------

--
-- Table structure for table `examination_tbl`
--

CREATE TABLE `examination_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examination_tbl`
--

INSERT INTO `examination_tbl` (`id`, `applicant_name`, `contact`, `email`, `applied_job`, `status`) VALUES
(278, 'James Russel Flores', '0916846346', 'flores_james36@yahoo.com', 'fsherdfsdfdsd', 'examination'),
(281, 'angelica mae jesus', '09138754414', 'angelicjesus@gmail.com', 'fsherdfsdfdsd', 'examination'),
(285, 'Test', '9999999999', 'test@gmail.com', 'fsherdfsdfdsd', 'examination'),
(292, 'Test', '9999999999', 'test@gmail.com', 'fsherdfsdfdsd', 'examination'),
(294, 'James Russel Flores', '09146647534', 'flores_james36@yahoo.com', 'TANGINAMO', 'examination'),
(307, 'mema2', '09146647534', 'flores_james36@yahoo.com', 'Loan Manager', 'examination');

-- --------------------------------------------------------

--
-- Table structure for table `finalfailed_tbl`
--

CREATE TABLE `finalfailed_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalfailed_tbl`
--

INSERT INTO `finalfailed_tbl` (`id`, `applicant_name`, `email`, `applied_job`, `contact`, `resume_file`, `status`) VALUES
(301, 'James Russel Flores', 'flores_james36@yahoo.com', 'Loan Manager', '09132558785', '', 'failed'),
(293, 'rey angelo talap', 'reyangelotalap23@gmail.com', 'fsherdfsdfdsd', '09132558785', '', 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `finalnterview_tbl`
--

CREATE TABLE `finalnterview_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalnterview_tbl`
--

INSERT INTO `finalnterview_tbl` (`id`, `applicant_name`, `email`, `applied_job`, `contact`, `resume_file`, `status`) VALUES
(289, 'rey angelo talap', 'reyangelotalap23@gmail.com', 'fsherdfsdfdsd', '09132558785', '', 'Final Interview'),
(293, 'rey angelo talap', 'reyangelotalap23@gmail.com', 'fsherdfsdfdsd', '09132558785', '', 'Final Interview Failed'),
(294, 'mema3', 'flores_james36@yahoo.com', 'Diko pa alam', '09132558785', '', 'Final Interview'),
(298, 'rey angelo talap', 'floresjames663@gmail.com', 'loan officer', '09132558785', '', 'Final Interview'),
(300, 'James Russel Flores', 'floresjames663@gmail.com', 'loan officer', '09132558785', '', 'Final Interview'),
(301, 'James Russel Flores', 'flores_james36@yahoo.com', 'Loan Manager', '09132558785', '', 'Final Interview'),
(312, 'james Philip gomera', 'jpgomera19@gmail.com', 'Loan Manager', '09132558785', '', 'Final Interview Passed'),
(313, 'james Philip gomera', 'reyangelotalap23@gmail.com', 'Diko pa alam', '09132558785', '', 'Final Interview Passed');

-- --------------------------------------------------------

--
-- Table structure for table `initialfailed_tbl`
--

CREATE TABLE `initialfailed_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initialratings`
--

CREATE TABLE `initialratings` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `initial_ratings` varchar(255) NOT NULL,
  `final_ratings` varchar(255) NOT NULL,
  `total_ratings` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `initialratings`
--

INSERT INTO `initialratings` (`id`, `applicant_id`, `initial_ratings`, `final_ratings`, `total_ratings`, `percentage`) VALUES
(1, 307, '3', '', '', 0),
(2, 308, '4', '', '', 0),
(3, 309, '3', '', '', 0),
(4, 310, '', '4', '4', 0),
(5, 300, '', '5', '5', 0),
(6, 301, '4', '1', '5', 0),
(7, 298, '4', '5', '9', 0),
(8, 293, '4', '3', '7', 133),
(9, 312, '5', '5', '10', 100),
(10, 313, '4', '5', '9', 80);

-- --------------------------------------------------------

--
-- Table structure for table `initial_interview`
--

CREATE TABLE `initial_interview` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `initial_interview`
--

INSERT INTO `initial_interview` (`id`, `applicant_name`, `email`, `contact`, `applied_job`, `resume_file`, `status`, `date`, `time`) VALUES
(293, 'rey angelo talap', 'reyangelotalap23@gmail.com', '9999999999', 'fsherdfsdfdsd', 'Ivan Carlo Talap_Resume.pdf', 'Initial Interview Passed', '', ''),
(298, 'rey angelo talap', 'floresjames663@gmail.com', '09146647534', 'loan officer', 'Application-Letter-CF.pdf', 'Initial Interview Passed', '', ''),
(300, 'James Russel Flores', 'floresjames663@gmail.com', '09146647534', 'loan officer', 'j.pdf', 'Initial Interview Passed', '', ''),
(301, 'James Russel Flores', 'flores_james36@yahoo.com', '09146647534', 'Loan Manager', 'j.pdf', 'Initial Interview Passed', '', ''),
(307, 'mema2', 'flores_james36@yahoo.com', '09146647534', 'Loan Manager', 'Recruitment  RGBC.pdf', 'Initial Interview', '', ''),
(308, 'mema3', 'flores_james36@yahoo.com', '09146647534', 'Diko pa alam', 'Roaquin-Clifford-C.-Resume.pdf', 'Initial Interview Passed', '', ''),
(309, 'REY', 'flores_james36@yahoo.com', '09146647534', 'Loan Manager', 'Application-Letter-CF.pdf', 'Initial Interview Passed', '', ''),
(310, 'REY', 'flores_james36@yahoo.com', '09146647534', 'Loan Manager', 'Recruitment  RGBC.pdf', 'Initial Interview Passed', '', ''),
(312, 'james Philip gomera', 'jpgomera19@gmail.com', '09101465183', 'Loan Manager', 'Application-Letter-CF.pdf', 'Initial Interview Passed', '', ''),
(313, 'james Philip gomera', 'reyangelotalap23@gmail.com', '09146647534', 'Diko pa alam', 'ilang-buwan-nalang-gragraduate-na-6.pdf', 'Initial Interview Passed', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `qualification` varchar(3000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `user_info` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_vacancies`
--

INSERT INTO `job_vacancies` (`Id`, `title`, `qualification`, `description`, `user_info`, `salary`, `email`, `phone`, `location`, `image`, `status`, `date`) VALUES
(137, 'Loan Manager', '<ul>\r\n	<li>Bachelor&#39;s degree in finance, accounting, economics, or a related field</li>\r\n	<li>At least 5 years of experience in banking or lending industry, with experience in underwriting and approving loans</li>\r\n	<li>Strong knowledge of lending practices and regulations, including credit analysis, loan structuring, collateral valuation, and risk management</li>\r\n	<li>Excellent analytical and problem-solving skills, with a keen eye for detail</li>\r\n	<li>Ability to lead and manage a team of loan officers, processors, and underwriters to achieve targets</li>\r\n	<li>Strong communication and interpersonal skills, with the ability to build relationships with customers, vendors, and internal stakeholders</li>\r\n	<li>Ability to develop and implement loan products and services that meet the needs of the target market</li>\r\n	<li>Proficiency in using financial software and tools, such as loan origination systems and credit scoring models</li>\r\n	<li>Ability to work in a fast-paced environment and manage multiple priorities</li>\r\n	<li>Strong work ethic, with a commitment to excellence and customer service</li>\r\n	<li>Ability to adapt to changes in the lending environment and implement new policies and procedures as needed.</li>\r\n</ul>\r\n', 'As a Loan Manager, you will be responsible for overseeing the lending operations of a financial institution or organization. Your main duties will include:\r\n\r\nDeveloping and implementing lending strateg', 'Flores, James russel', '10k', 'reyangelotalap23@gmail.com', '09517520778', 'Caloocan city', '328382502_587057833239964_6869792852766620855_n.jpg', 0, '2023-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `newlyhiredstatus_tbl`
--

CREATE TABLE `newlyhiredstatus_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_hired` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newlyhiredstatus_tbl`
--

INSERT INTO `newlyhiredstatus_tbl` (`id`, `applicant_name`, `applied_job`, `status`, `email`, `date_hired`) VALUES
(312, 'james Philip gomera', 'Loan Manager', 'hire', 'jpgomera19@gmail.com', '2023-03-19 18:50:25'),
(313, 'james Philip gomera', 'Diko pa alam', 'hire', 'reyangelotalap23@gmail.com', '2023-03-19 18:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `newlyhired_tbl`
--

CREATE TABLE `newlyhired_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newlyhired_tbl`
--

INSERT INTO `newlyhired_tbl` (`id`, `applicant_name`, `applied_job`, `email`) VALUES
(312, 'james Philip gomera', 'Loan Manager', 'jpgomera19@gmail.com'),
(313, 'james Philip gomera', 'Diko pa alam', 'reyangelotalap23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `passed_tbl`
--

CREATE TABLE `passed_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regapplicant`
--

CREATE TABLE `regapplicant` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regapplicant`
--

INSERT INTO `regapplicant` (`id`, `user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `image`) VALUES
(37, 2147483647, 'reyangelo', 'talapp', 'akolangto', 'rj@gmail.com', '$2y$10$Hhw.ARjfW5Et20wmYovxh.9gK7ILqYt/lZKxwIBcMskUKBitFwowy', '1283188.jpg'),
(46, 2147483647, 'Romer', 'Calisan', 'admin', 'romer@gmail.com', '$2y$10$VNZf0btwgm2v49c7k1wFwO9cANdZnKZeKUeK66BmCmYtXxbZ8E/ia', '1283188.jpg'),
(47, 2147483647, 'rey angelo', 'talap', 'admin', 'test@gmail.com', '$2y$10$VQiWP4hBp.RdL1z/vXrfLuqN1WaPEEQZedNaWfgwsnTqgJahPF/WC', '1283188.jpg'),
(48, 2147483647, 'rey angelo', 'talap', 'admin', 'reyangelotalap23@gmail.com', '$2y$10$5EEw3msseLzsgpEh.gObr.g.9D0MzDkutugckzzTz9QTyPLDvhKl6', '1283188.jpg'),
(49, 2147483647, 'rey angelo', 'talap', 'RCalisan', 'qwerty@gmail.com', '$2y$10$53.maP2AxaG62HwLbpNX0u7c9eCgD5olnnVqBcSCRZyaWw2hbpkbi', '1283188.jpg'),
(50, 2147483647, 'rey angelo', 'talap', 'admin', 'RGBCmicrofinance@gmail.com', '$2y$10$Pp3JJmsLdZiaO6fEYzPD9uDLD3fDE.wGC55dH9Bs.ckhU48w7dcPS', '1283188.jpg'),
(51, 94489914, 'Ariane', 'Balomaga', 'JamesPhilip', 'saberonmarkanthony46@gmail.com', '$2y$10$fV7JBjhuPjVkYam9eXB3/Orq01apx/7yF2hfx0htv.MzTMDWxH/hS', '1283188.jpg'),
(52, 280439167, 'James Philip', 'Gomera', 'jphi19', 'jpgomera19@gmail.com', '$2y$10$jwK93Eko0ahvFC6tjN2xVez7XEHhe029SinZB5Pm0rjlCTJNv/PqC', '1283188.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rejected_tbl`
--

CREATE TABLE `rejected_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rejected_tbl`
--

INSERT INTO `rejected_tbl` (`id`, `applicant_name`, `email`, `contact`, `resume_file`, `applied_job`, `status`) VALUES
(252, 'ador', 'reyangelotalap23@gmail.com', '0974627521', 'j.pdf', 'fsherdfsdfdsd', 'failed'),
(253, 'Test', 'Test@gmail.com', '0975382363', '', 'fsherdfsdfdsd', 'failed'),
(260, 'edaniolfranco@gmail.com', 'francoedaniol@gmail.com', '22222222222', '', 'fsherdfsdfdsd', 'failed'),
(279, 'Ador Molina', 'adormolina@gmail.com', '09263415551', 'initial', 'fsherdfsdfdsd', 'failed'),
(284, 'Arjhon Palermo', 'arjohnpalermo7@gmail.com', '9146647533', 'Certificate_of_Module_Completion - PUBLIC CLOUD.pdf', 'fsherdfsdfdsd', 'failed'),
(286, 'rey angelo talap', '', '', '', 'fsherdfsdfdsd', ''),
(296, 'James Russel Flores', 'flores_james36@yahoo.com', '09146647534', 'Recruitment  RGBC.pdf', 'www', 'failed'),
(299, 'Reymund Reyes', 'flores_james36@yahoo.com', '09146647534', 'Application-Letter-CF.pdf', 'Programmer', 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `traineesstatus_tbl`
--

CREATE TABLE `traineesstatus_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainees_tbl`
--

CREATE TABLE `trainees_tbl` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `ess_acounts`
--
ALTER TABLE `ess_acounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_status`
--
ALTER TABLE `examination_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_tbl`
--
ALTER TABLE `examination_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalnterview_tbl`
--
ALTER TABLE `finalnterview_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initialfailed_tbl`
--
ALTER TABLE `initialfailed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initialratings`
--
ALTER TABLE `initialratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `initialratings_ibfk_1` (`applicant_id`);

--
-- Indexes for table `initial_interview`
--
ALTER TABLE `initial_interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `newlyhiredstatus_tbl`
--
ALTER TABLE `newlyhiredstatus_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newlyhired_tbl`
--
ALTER TABLE `newlyhired_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passed_tbl`
--
ALTER TABLE `passed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regapplicant`
--
ALTER TABLE `regapplicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected_tbl`
--
ALTER TABLE `rejected_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traineesstatus_tbl`
--
ALTER TABLE `traineesstatus_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainees_tbl`
--
ALTER TABLE `trainees_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ess_acounts`
--
ALTER TABLE `ess_acounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `examination_status`
--
ALTER TABLE `examination_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `examination_tbl`
--
ALTER TABLE `examination_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `finalnterview_tbl`
--
ALTER TABLE `finalnterview_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `initialfailed_tbl`
--
ALTER TABLE `initialfailed_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initialratings`
--
ALTER TABLE `initialratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `initial_interview`
--
ALTER TABLE `initial_interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `newlyhiredstatus_tbl`
--
ALTER TABLE `newlyhiredstatus_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `newlyhired_tbl`
--
ALTER TABLE `newlyhired_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `passed_tbl`
--
ALTER TABLE `passed_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `regapplicant`
--
ALTER TABLE `regapplicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `rejected_tbl`
--
ALTER TABLE `rejected_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `traineesstatus_tbl`
--
ALTER TABLE `traineesstatus_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainees_tbl`
--
ALTER TABLE `trainees_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  ADD CONSTRAINT `applicant_resume_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `regapplicant` (`id`);

--
-- Constraints for table `initialratings`
--
ALTER TABLE `initialratings`
  ADD CONSTRAINT `initialratings_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `initial_interview` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
