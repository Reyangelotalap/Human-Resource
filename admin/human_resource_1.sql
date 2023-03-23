-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:52 PM
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
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_resume`
--

CREATE TABLE `applicant_resume` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_resume`
--

INSERT INTO `applicant_resume` (`id`, `applicant_id`, `applied_job`, `applicant_name`, `email`, `resume_file`, `upload_date`) VALUES
(22, 37, 'Collector', 'rey angelo talap', 'reyangelotalap23@gmail.com', 'Ivan resume.pdf', '2023-02-23 00:24:44'),
(23, 37, 'Collector', 'rey angelo talap', 'reyangelotalap23@gmail.com', 'Emano-Keir-A._Resume.pdf', '2023-02-23 00:27:47'),
(24, 37, 'Collector', 'rey angelo talap', 'reyangelotalap23@gmail.com', 'Ivan resume.pdf', '2023-02-23 00:31:45'),
(25, 37, 'Collector', 'rey angelo talap', 'RGBCmicrofinance@gmail.com', 'resume-decastro.docx', '2023-02-23 00:36:41');

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
(63, 'reyangelotalap23@gmail.com', '76834', '1676889021');

-- --------------------------------------------------------

--
-- Table structure for table `ess_acounts`
--

CREATE TABLE `ess_acounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ess_acounts`
--

INSERT INTO `ess_acounts` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'arjohn', 'palermo@gmail.com', '1ffc4c392da64dcc77eb94cb23138762', '2023-02-22 20:34:35'),
(2, 'rey', 'angelo', 'e4598a4f81d1431586e81c3b167c273f', '2023-02-22 21:14:34'),
(3, 'ador', 'piano', '21ec6379d30e841a77ab321787a4ee0e', '2023-02-22 21:17:41'),
(4, 'james', 'D', 'ee384a02e22087ee9ddcaacea9009b94', '2023-02-22 21:19:13'),
(5, 'frankie', 'mark', '96e95a62080965f1f24f5784145afdb7', '2023-02-22 21:29:02'),
(6, 'rico', 'gfds', 'bf642627c3d914c0935ef052e16f15fc', '2023-02-22 21:30:55'),
(7, 'pilip', 'james', '202cb962ac59075b964b07152d234b70', '2023-02-22 21:31:29'),
(8, 'arianejhvlh', 'hjvjh', '2cd01f209e0efce42e4f5e0c0a3180fd', '2023-02-22 21:31:51'),
(9, 'arianejhvlh', 'hjvjh', '2cd01f209e0efce42e4f5e0c0a3180fd', '2023-02-22 21:33:57'),
(10, 'banjo', 'eyy', '3feeafd7002a2eb3a370e0c5e29dece9', '2023-02-22 21:38:01'),
(12, 'hello', 'world', '202cb962ac59075b964b07152d234b70', '2023-02-22 23:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `Id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_info` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_vacancies`
--

INSERT INTO `job_vacancies` (`Id`, `employer_id`, `title`, `qualification`, `description`, `user_info`, `salary`, `email`, `phone`, `location`, `image`, `date`) VALUES
(36, 12, 'Roving', ' • Specific degree or professional designation or certification.\r\n • The number of years of experience.\r\n •  Proficiency with certain software programs.\r\n • Specific industry knowledge.\r\n • Ability to perform certain tasks such as lifting, standing or ext', 'A roving officer will patrol a designated area for the length of time they are on shift. Their job involves a mix of deterring crime by being visible and spotting incidents as, or even before, they happen. Some law enforcement agencies also use local volu', 'Rey angelo talap', '800k', 'reyangelotalap23@gmail.com', '9958737094', 'Quezon City', 'Business deal-rafiki.png', '2023-02-22 15:01:21'),
(37, 12, 'Recruiter', ' • Specific degree or professional designation or certification.\r\n • The number of years of experience.\r\n •  Proficiency with certain software programs.\r\n • Specific industry knowledge.\r\n • Ability to perform certain tasks such as lifting, standing or ext', 'A roving officer will patrol a designated area for the length of time they are on shift. Their job involves a mix of deterring crime by being visible and spotting incidents as, or even before, they happen. Some law enforcement agencies also use local volu', 'Rey angelo talap', '800k', 'reyangelotalap23@gmail.com', '9958737094', 'Quezon City', '260963133_414597900357202_228960167007493526_n.jpg', '2023-02-22 15:02:30'),
(38, 12, 'Recruiter', ' • Specific degree or professional designation or certification.\r\n • The number of years of experience.\r\n •  Proficiency with certain software programs.\r\n • Specific industry knowledge.\r\n • Ability to perform certain tasks such as lifting, standing or ext', 'A roving officer will patrol a designated area for the length of time they are on shift. Their job involves a mix of deterring crime by being visible and spotting incidents as, or even before, they happen. Some law enforcement agencies also use local volu', 'Rey angelo talap', '800k', 'reyangelotalap23@gmail.com', '9958737094', 'Quezon City', '260963133_414597900357202_228960167007493526_n.jpg', '2023-02-22 15:03:23'),
(39, 12, 'Recruiter', ' • Specific degree or professional designation or certification.\r\n • The number of years of experience.\r\n •  Proficiency with certain software programs.\r\n • Specific industry knowledge.\r\n • Ability to perform certain tasks such as lifting, standing or ext', 'A roving officer will patrol a designated area for the length of time they are on shift. Their job involves a mix of deterring crime by being visible and spotting incidents as, or even before, they happen. Some law enforcement agencies also use local volu', 'Rey angelo talap', '800k', 'reyangelotalap23@gmail.com', '9958737094', 'Quezon City', '260963133_414597900357202_228960167007493526_n.jpg', '2023-02-22 15:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `microfinance_tbl_user`
--

CREATE TABLE `microfinance_tbl_user` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_time` date NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `microfinance_tbl_user`
--

INSERT INTO `microfinance_tbl_user` (`id`, `user_id`, `fname`, `lname`, `username`, `password`, `created_time`, `role`) VALUES
(5, 0, 'Rey angelo', 'Talap', 'Angelotalap', 'Angelotalap', '2023-02-11', 'Admin'),
(6, 0, 'Rey angelo', 'Talap', 'Angelotalap', 'Angelotalap', '2023-02-11', 'Admin');

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
(32, 2147483647, 'rey angelo', 'talap', 'errolpapas', 'reyangelotalap23@gmail.com', '$2y$10$NSaX580T0StMcJDQI5W9YeHPWS25TFAkN/HYpDbqlem3HWEOGMfLy', 'images-4-01.jpeg'),
(33, 2147483647, 'Talap', 'Reyangelo', 'Reyangelotalap', 'test@gmail.com', '$2y$10$wU7OslJll5i9LEecECNteeLUgJtqa4vrNcTGZ5aAsEFDZFh2bckmu', 'images-4-01.jpeg'),
(34, 2147483647, 'Test', 'Test', 'TestTest', 'Test1@gmail.com', '$2y$10$0vA5t49W8e8jogKz2klIP.jeOwc37/6OGlvPbQlOX1wrkb8v7ceuO', 'images-4-01.jpeg'),
(35, 2147483647, 'James', 'Philip', 'James', 'james@gmail.com', '$2y$10$K93i8hqXzROJgnMqATix7uQ9MsRHXDdesVLbrCh4ALQm1IKzfqx2S', 'images-4-01.jpeg'),
(36, 2147483647, 'Reyangelo', 'talap', 'angelotalap', 'talap@gmail.com', '$2y$10$gMko.m9d.XJaKjblBZKGee5TYSea7el85fUlXcQi8aMgudaPv.eEK', 'images-4-01.jpeg'),
(37, 2147483647, 'reyangelo', 'talapp', 'akolangto', 'rj@gmail.com', '$2y$10$Hhw.ARjfW5Et20wmYovxh.9gK7ILqYt/lZKxwIBcMskUKBitFwowy', 'images-4-01.jpeg'),
(38, 89270, 'ador', 'molina', 'adormolina', 'adormolina@gmail.com', '$2y$10$hDW0Zaj4JmF5cKTI5NjkSu4sKhMCrkLlD4Qbuo69BipcWt7.d3/re', ''),
(39, 1357831, 'Ariane', 'Balomaga', 'ArianeBalomaga', 'arianemae@gmail.com', '$2y$10$B29K5.Wn5Y7oaz7GbceSz.5bfYzxIUBDjy.y.ReZJNgh3JKJXO40C', ''),
(41, 2147483647, 'Romer', 'Calisan', 'romer', 'reomer@gmail.com', '$2y$10$s1sM2il2brZ9Q5OoCikSD.WzMsDxgnG9LYetiUDXuu3APrqXPixwy', '');

-- --------------------------------------------------------

--
-- Table structure for table `regemployer`
--

CREATE TABLE `regemployer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regemployer`
--

INSERT INTO `regemployer` (`id`, `username`, `user_id`, `companyName`, `firstname`, `lastname`, `email`, `password`) VALUES
(9, 'admin', '34695', 'Test', 'rey angelo', 'talap', 'reyangelotalap23@gmail.com', '$2y$10$WG5BHItrbLnhS50NFtARTOfRPssdIQbidst1AFaej5amtz.5M6Kcy'),
(10, 'admin', '1585', 'Test', 'rey angelo', 'talap', 'pernitio@gmail.com', '$2y$10$s4JnfqV6uPcOM4H9z4Z73ul8A7gejfRAcCgtPINgTp9ash/tEWiTS'),
(11, 'errolpapas', '4003906889727653239', 'Test', 'rey angelo', 'talap', 'zkieval04@gmail.com', '$2y$10$Ct9RtX5N4PHI6yU/bV2jzeM1ZAS1478FDKUfrJmzrAaK9riKLc7x2'),
(12, 'RCalisan', '0814', 'Test', 'rey angelo', 'talap', 'ako@gmail.com', '$2y$10$0GxZ4/j.ycn42zwFfmOiT.cQmF8h0APL1PEKVonEomXMamz8F0dhy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

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
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `microfinance_tbl_user`
--
ALTER TABLE `microfinance_tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regapplicant`
--
ALTER TABLE `regapplicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regemployer`
--
ALTER TABLE `regemployer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ess_acounts`
--
ALTER TABLE `ess_acounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `microfinance_tbl_user`
--
ALTER TABLE `microfinance_tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regapplicant`
--
ALTER TABLE `regapplicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `regemployer`
--
ALTER TABLE `regemployer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_resume`
--
ALTER TABLE `applicant_resume`
  ADD CONSTRAINT `applicant_resume_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `regapplicant` (`id`);

--
-- Constraints for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD CONSTRAINT `job_vacancies_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `regemployer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
