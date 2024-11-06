-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 04:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id_role` int(255) NOT NULL,
  `id_permission` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id_role`, `id_permission`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 6),
(1, 7),
(1, 8),
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lessons`
--

CREATE TABLE `tbl_lessons` (
  `id` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `matter` varchar(255) NOT NULL DEFAULT 'Inactive',
  `ecosystem` varchar(255) NOT NULL DEFAULT 'Inactive',
  `motion` varchar(255) NOT NULL DEFAULT 'Inactive',
  `earth` varchar(255) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lessons`
--

INSERT INTO `tbl_lessons` (`id`, `section`, `matter`, `ecosystem`, `motion`, `earth`) VALUES
(1, 'Papaya', '2024-10-24', 'Inactive', 'Inactive', 'Inactive'),
(2, 'Mango', 'Inactive', 'Inactive', 'Inactive', 'Inactive'),
(3, 'Sampaloc', 'Inactive', 'Inactive', 'Inactive', 'Inactive'),
(4, 'Sampaguita', 'Inactive', 'Inactive', 'Inactive', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `name`) VALUES
(1, 'addStudent'),
(2, 'removeTeacher'),
(3, 'addTeacher'),
(4, 'addAdmin'),
(5, 'viewLesson'),
(6, 'removeStudents'),
(7, 'viewStudents'),
(8, 'editRoles'),
(9, 'removeAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_scores`
--

CREATE TABLE `tbl_quiz_scores` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `date_taken` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_scores`
--

INSERT INTO `tbl_quiz_scores` (`id`, `student_id`, `quiz_id`, `lesson`, `score`, `date_taken`) VALUES
(1, 39, 1, 'Matter', 1, '2024-10-21 03:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `name`, `section`, `username`, `status`) VALUES
(39, 'Amiel Carhyl', '', 'amiel06', 'Active'),
(77, 'Clarence Xavier Escoto', 'Papaya', 'clar', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL DEFAULT 'Papaya',
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`id`, `name`, `section`, `username`, `status`) VALUES
(43, 'Amiel Carhyl Lapid ', 'Papaya', 'amiel', 'Active'),
(52, 'hehe hello', 'Papaya', 'iawda', 'Inactive'),
(55, 'Darius Gavino', 'Papaya', 'lezgo', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL DEFAULT 'N/A',
  `firstName` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `role`, `section`, `firstName`, `lastname`) VALUES
(39, 'amiel06', '$2y$10$XsSrcD9QbVk2xtxpb0djEOzHpZlGaixDLuYbNWQP7xboflN1Y.JFC', 'Student', 'Papaya', 'Amiel Carhyl', 'Lapid'),
(43, 'amiel', '$2y$10$X5bgoxuB7bHCUCTj5A9k.O6YZbdg3KawkSXoshjLE1CxOFjgsXiOq', 'Teacher', 'Papaya', 'Amiel Carhyl', 'Lapid'),
(44, 'carhyl', '$2y$10$8/PaRvID1ggZ/STvoa4pIecLFWqF5MWiM3dOHUoUE8GuTRQj9rb9u', 'Admin', 'N/A', 'Amiel Carhyl', 'Lapid'),
(45, 'gelo', '$2y$10$JhssTY7Lmh02d5mJiWMyG.nWWuLEUgKIGDKunVNosOYyL1AuGRouq', 'Admin', 'N/A', 'Angelo', 'Zulueta'),
(46, 'jorenz', '$2y$10$gdQM6iNDmhtm1rumLmQF2ei2eWA4NbJISa8.3bpOngpBzZ1mgjsLG', 'Admin', 'N/A', 'Jorenz', 'Ferrer'),
(51, 'lezgo', '$2y$10$Mod/E36HlhzQ55ul16BbhOlpgGk2S6USgBzoby71gdBVOo9cns05q', 'Student', 'Papaya', 'Darius', 'Gavino'),
(52, 'iawda', '$2y$10$XR/a4Cw5.JVsVNNmcl0.8.mtUp4bnyxRywJiBtJm7QQUk6bGfb3Jy', 'Teacher', 'Papaya', 'hehe', 'hello'),
(55, 'lezgo', '$2y$10$8zVdZOuamAscyG3UiHoELeJqHJ3j04uKTmqFkxcnVnSqUQ9tJHMF2', 'Teacher', 'N/A', 'Darius', 'Gavino'),
(56, 'lezgo', '$2y$10$YCmaTyPRpDrVl.VdZSQxAesz9zd7ZVLbpJ8/9IRg94ePoTGPtIHFK', 'Student', 'Papaya', 'Darius', 'Gavino'),
(57, 'lezgo', '$2y$10$gO90wx1UB0XpF3TE7seuAewOAhAxRQGeLJsCdJ4j07IP/0qNc/aQy', 'Student', 'Papaya', 'Darius', 'Gavino'),
(58, 'lezgo', '$2y$10$gZts2a30rC5VY4Vy8uuvOOut.Gqg92wZKuVB/J4oTirLZSeJr.Bme', 'Student', 'Papaya', 'Darius', 'Gavino'),
(59, 'lezgo', '$2y$10$9tk5talsiNJUn8R404CobeQ.PswkhI0kqeaa/MeUxRB7ufWs2cskK', 'Student', 'Papaya', 'Darius', 'Gavino'),
(60, 'lezgo', '$2y$10$OkGnqV2rE1dZQie3xG9ACePYz7Szx8oCxdu/X3NzLtPUpOi9g1tbS', 'Student', 'Papaya', 'Darius', 'Gavino'),
(61, 'lezgo', '$2y$10$vgMkSe/hHMwJ.cRF635G1uoK1fQskXKopNlxMtlkv5EURmeYl6.Qq', 'Student', 'Papaya', 'Darius', 'Gavino'),
(62, 'lezgo', '$2y$10$AgYTSojBX5Z4bNaqhFd2x.1ipdzTTKz7TXhJs0mVxg8oyH.Zsgks2', 'Student', 'Papaya', 'Darius', 'Gavino'),
(63, 'lezgo', '$2y$10$y/2jmIdKXeQS/KfiC3m59uVRk8Ts1r/zVk.0Pxi8eFNQRXxm0BsQy', 'Student', 'Papaya', 'Darius', 'Gavino'),
(64, 'lezgo', '$2y$10$GbI37.3hREgW.AdfPZE0YOwp4QWJa4UQqbJWyqmV22KW16L7EVS.i', 'Student', 'Papaya', 'Darius', 'Gavino'),
(65, 'lezgo', '$2y$10$F2q17bCky1OxDh6mkWEmneSag7lJCD29w8qTVIxB94lKaBoT29g/2', 'Student', 'Papaya', 'Darius', 'Gavino'),
(66, 'lezgo', '$2y$10$0DRVMlRAN0onEjzGpFAzG.QaYvCTXdSmLezqUbU3yGWGNBZW6tYsm', 'Student', 'Papaya', 'Darius', 'Gavino'),
(67, 'lezgo', '$2y$10$nH3JCUL14jt0prxi0t8vf.Rq.jiBl4gakahdaaWISyGnBOoetuvy2', 'Student', 'Papaya', 'Darius', 'Gavino'),
(68, 'lezgo', '$2y$10$mRG59vAca3mjRPd7viApM.lmM1/sTl/t6S3Cc4CqsI3bYSb0EF1sm', 'Student', 'Papaya', 'Darius', 'Gavino'),
(69, 'lezgo', '$2y$10$0THS6.xP3P7MIMCIRsy32eUdn1.9R.xib.0vF..0cDeviS6XCROVa', 'Student', 'Papaya', 'Darius', 'Gavino'),
(70, 'lezgo', '$2y$10$tw237eUEpc/tV/Hj/hwLMuncrCtXQGPdfOP.x4xolCv61zfI/kdey', 'Student', 'Papaya', 'Darius', 'Gavino'),
(71, 'lezgo', '$2y$10$Sv.QLKpTl/AWLQ1JHKPYuOCmQXTbS7DJFQp4cQoXKLCHlho.gbNdC', 'Student', 'Papaya', 'Darius', 'Gavino'),
(72, 'lezgo', '$2y$10$ZvdPHr7C80sDm2vDFc9H/.jiNDosXIoPUVR96FbhVFvxyZ9pkhpMq', 'Student', 'Papaya', 'Darius', 'Gavino'),
(73, 'lezgo', '$2y$10$vBRiApDfc/uUPQK7aPasB.cB8cCIdsFeykPnE9bcCVfvmfgxJNeZC', 'Student', 'Papaya', 'Darius', 'Gavino'),
(74, 'lezgo', '$2y$10$/rOxRp2e7HLH4B4PS.9T6ONyFXOrhKQ6Zhgr74/AKjVqOfrxUH4.e', 'Student', 'Papaya', 'Darius', 'Gavino'),
(75, 'lezgo', '$2y$10$Tme5xiM5sDZoqsqddsEzNOzNOArXEn4clIHIcmycCvDaiOAzmmwi.', 'Student', 'Papaya', 'Darius', 'Gavino'),
(76, 'lezgo', '$2y$10$DprbM/pKFVAkmeSzLpQPt.JI4TlOcwzRDjV2GlrPQ98Pqlh/e8yN.', 'Student', 'Papaya', 'Darius', 'Gavino'),
(77, 'clar', '$2y$10$b9vQGeTXwW.KRyv7B9TtaeCtatvvP9b6vy06C3SjZdwvVXrqVDxFa', 'Student', 'Papaya', 'Clarence Xavier', 'Escoto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lessons`
--
ALTER TABLE `tbl_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lessons`
--
ALTER TABLE `tbl_lessons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  ADD CONSTRAINT `tbl_quiz_scores_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
