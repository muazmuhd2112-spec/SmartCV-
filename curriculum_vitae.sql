-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2025 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curriculum_vitae`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `Rname` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `user_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `hobbies`, `Rname`, `rank`, `phone`, `user_id`) VALUES
(1, 'Reading', 'Dr. Yusuf Jibril', 'HOD LECTRICAL ENGINEERING Ahmadu Bello Univversity Zaria', '08133172990', '1'),
(2, 'Research', 'Abubakar Jibril Madigawa', 'C.E.O Sconnect ', '08133172990', '1'),
(3, 'Reading ', 'ALH. LAWAN KABIR', 'Deputy Treasurer Ministry for Local Government. Kano state', ' 08039246848', '3'),
(4, 'Reading', 'BELLO ADAMU', 'Lecturer Federal University, Dutse', '08037021340', '3');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `fName`, `birth`, `gender`, `marital`, `lga`, `state`, `nationality`, `address`, `email`, `phone`) VALUES
(1, 'MUHAMMAD MUAZ ISHAk', '2008-08-28', 'Male', 'single', 'GWALE', 'KANO', 'Nigeria', 'NO. 80 GYARANYA QUATERS  GWALE LOCAL GOVERNMENT', 'muazmuhammad2112@gmail.com', '07047869440'),
(2, 'MUHAMMAD MUAZ ISHAk', '2008-08-28', 'Male', 'single', 'GWALE', 'KANO', 'Nigeria', 'NO. 80 GYARANYA QUATERS  GWALE LOCAL GOVERNMENT', 'muazmuhammad2112@gmail.com', '07047869440'),
(3, 'YAHAYA LAWAN KABIR', '1990-11-23', 'Male', 'single', 'Dambatta LG', 'Kano', 'Nigeria', 'Address: No 25 Danbatta GRA Dambatta Local Government Kano.', 'abbacheerah@gmail.com', '08068554587,07041550066');

-- --------------------------------------------------------

--
-- Table structure for table `school_attendance`
--

CREATE TABLE `school_attendance` (
  `id` int(11) NOT NULL,
  `school_attendance` varchar(1000) NOT NULL,
  `optional` varchar(100) DEFAULT NULL,
  `sDate` varchar(30) NOT NULL,
  `qualifications` varchar(1000) NOT NULL,
  `career` varchar(1000) NOT NULL,
  `user_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_attendance`
--

INSERT INTO `school_attendance` (`id`, `school_attendance`, `optional`, `sDate`, `qualifications`, `career`, `user_id`) VALUES
(10, 'NAMATAZU SCIENCE ACADEMY', 'none', '1111-11-11', 'degreee', '			\r\n		Create professional CVs and resumes easily with ready-made templates, smart formatting, and instant downloads no design skills required. Turn your skills and experience into a professional resume that gets noticed. Build and download your CV all in one place. Our intelligent builder guides you step-by-step to craft a stunning, professional resume tailored to your dream job', '1'),
(11, 'NAMATAZU SCIENCE ACADEMY', '-', '3333-12-31', 'primary leaving ceertificate', '			\r\n		Create professional CVs and resumes easily with ready-made templates, smart formatting, and instant downloads no design skills required. Turn your skills and experience into a professional resume that gets noticed. Build and download your CV all in one place. Our intelligent builder guides you step-by-step to craft a stunning, professional resume tailored to your dream job', '1'),
(15, '', '', '2010 – 2013', 'Diploma In Banking and Finance', 'I am an enthusiastic and passionate person, who believed in dynamic environment where there is team\r\nwork, self-actualization and commitment to hard work and readiness to accept any positive change on\r\norder to provide quality professional services in this organization.			\r\n		', '3'),
(16, 'Government Secondary school, Dambatta ', '', '2001 – 2007', 'Senior secondary certificate (Neco)', 'I am an enthusiastic and passionate person, who believed in dynamic environment where there is team\r\nwork, self-actualization and commitment to hard work and readiness to accept any positive change on\r\norder to provide quality professional services in this organization.			\r\n		', '3'),
(17, ' Sabuwar Unguwa Primary School Dambatta', '', '1995 – 2000', 'Primary School Leaving Certificate ', 'I am an enthusiastic and passionate person, who believed in dynamic environment where there is team\r\nwork, self-actualization and commitment to hard work and readiness to accept any positive change on\r\norder to provide quality professional services in this organization.			\r\n		', '3');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `place_working` varchar(100) NOT NULL,
  `Post` varchar(100) NOT NULL,
  `eDate` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills`, `place_working`, `Post`, `eDate`, `user_id`) VALUES
(8, 'software development', 'S-connect Tech LTD', 'Programmer', '2016 - 2022', '1'),
(9, 'software development', 'S-connect Tech LTD', 'Programmer', '2016 - 2022', '1'),
(10, 'software development', 'S-connect Tech LTD', 'Programmer', '2016 - 2022', '1'),
(11, 'Core Value: transparency and self-motivation', 'PLATINUM PARKING MANAGEMENT SERVICE', 'Supervisor ', '2015', '3'),
(12, 'Language: English, Hausa', 'FOUNTAIN BASIC SCHOOL, R/ZAKI ', 'Classroom Teacher', '2014', '3'),
(13, 'Human Relations: Great Team Player and Ability To learn fast', ' SUFAYE INVESTMENT LIMITED ', 'Stamp Checkers', '2017', '3'),
(14, 'Photographer: Photographic designer', 'AXA MANSARD INSURANCE COMPANY', 'As Alpha Sales Force', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `template` varchar(1000) NOT NULL,
  `user_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `template`, `user_id`) VALUES
(7, 'Normal White  Paper', ''),
(8, 'Normal White  Paper', '1'),
(9, 'Normal White  Paper', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_attendance`
--
ALTER TABLE `school_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_attendance`
--
ALTER TABLE `school_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
