-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 19, 2026 at 07:24 AM
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
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentor_requests`
--

CREATE TABLE `mentor_requests` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `college` varchar(150) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `career_interest` varchar(100) DEFAULT NULL,
  `preferred_mentor` varchar(100) DEFAULT NULL,
  `mentorship_reason` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `status` enum('Pending','Accepted','Rejected') DEFAULT 'Pending',
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor_requests`
--

INSERT INTO `mentor_requests` (`id`, `student_id`, `full_name`, `email`, `college`, `course`, `career_interest`, `preferred_mentor`, `mentorship_reason`, `skills`, `status`, `requested_at`) VALUES
(1, 1, 'Sreya Ghosh', 'anu@gmail.com', 'CCLMS', 'BCA', 'Artificial Intelligence', 'Abhranin Mandal', 'better', 'ai', 'Accepted', '2026-06-16 09:16:48'),
(2, 20, 'Tanushree Dey', 'dey.tanushree2@gmail.com', 'CCLMS', 'BCA', 'Web Development', 'Abhranin Mandal', 'For better Focus', 'ai', 'Accepted', '2026-06-16 12:56:14'),
(3, 21, 'Ananya Das', 'anna@gmail.com', 'CCLMS', 'BCA', 'Data Science', 'Anu Das', 'For better knowledge', 'Java', 'Pending', '2026-06-17 00:52:50'),
(4, 21, 'Ananya Das', 'anna@gmail.com', 'CCLMS', 'BCA', 'Data Science', 'Anu Das', 'For better knowledge', 'Java', 'Pending', '2026-06-17 00:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `opportunity_type` varchar(50) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `requirements` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `application_deadline` date DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `status` enum('Open','Closed') DEFAULT 'Open',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `title`, `company_name`, `opportunity_type`, `category`, `description`, `requirements`, `location`, `salary`, `application_deadline`, `posted_by`, `contact_email`, `status`, `created_at`) VALUES
(1, 'Frontend Developer Intern', 'Google', 'Internship', 'Web Development', 'Work on real frontend projects using React and modern UI tools.', 'HTML, CSS, JavaScript, React basics', 'Remote', '₹25,000/month', '2026-07-30', 1, 'hr@google.com', 'Open', '2026-06-17 00:56:00'),
(2, 'Data Analyst Job', 'TCS', 'Full Time', 'Data Science', 'Analyze business data and generate insights.', 'Python, SQL, Excel, Power BI', 'Kolkata', '₹5 LPA', '2026-08-15', 1, 'careers@tcs.com', 'Open', '2026-06-17 00:56:00'),
(3, 'Backend Developer Intern', 'Microsoft', 'Internship', 'Software Development', 'Work on backend APIs and cloud services.', 'Node.js, Express, MongoDB', 'Hybrid', '₹40,000/month', '2026-07-20', 1, 'jobs@microsoft.com', 'Open', '2026-06-17 00:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('student','alumni','admin') NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `bio` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `full_name`, `email`, `password`, `role`, `department`, `phone`, `profile_image`, `created_at`, `bio`, `designation`, `company`, `skills`) VALUES
(5, 'Anu Dash', 'abc1@gmail.com', 'abc123', 'admin', 'BCA', '9242483642', 'uploads/1781590608_IMG-20250823-WA0019.jpg', '2026-06-16 06:16:48', NULL, NULL, NULL, NULL),
(7, 'Sreya Ghosh', 'sreya@gmail.com', '$2y$10$7IKyKBVrV2jvs50PifdhcuBtFkI0cxCs.uvbC5BhMydHR3dLVbk06', 'student', 'BCA', '8001736625', 'uploads/1781595086_IMG-20250823-WA0018.jpg', '2026-06-16 07:31:26', NULL, NULL, NULL, NULL),
(13, 'Anu Das', 'anu@gmail.com', '$2y$10$RavZDRI44nYWHy2.TJpG3.wmIeVARB8CrfFaSJceHw31FIet4.Q2e', 'alumni', 'BCA', '7242493647', 'uploads/1781596318_IMG-20250823-WA0017.jpg', '2026-06-16 07:51:58', NULL, NULL, NULL, NULL),
(15, 'Tanushree Dey', 'dey.tanushree2006@gmail.com', '$2y$10$wwWAY/vLhPxQdRqgdsYJjeLESyA0dugd2a5a3dfI71Ft/BJwWVQUG', 'admin', 'BCA', '9001736625', 'uploads/1781607149_IMG-20250823-WA0018.jpg', '2026-06-16 10:52:29', NULL, NULL, NULL, NULL),
(16, 'Ananya Das', 'Ananya@gmail.com', '$2y$10$b9s42KJZc9FcJC1HFZJ7zeCriKnVkUYecu3TMjpI7FAJxKtvJh.gS', 'student', 'BCA', '9252683649', 'uploads/1781613434_IMG-20250823-WA0019.jpg', '2026-06-16 12:37:14', NULL, NULL, NULL, NULL),
(17, 'asc', 'asc@gmail.com', '$2y$10$I/De3vLDiFX4zOv7ycE70.TtJLcwlJfVs.8xHHDMvyyjnFvDYrF3W', 'student', 'BCA', '8001737629', 'uploads/1781613797_1779175572_cold5.jpg', '2026-06-16 12:43:17', NULL, NULL, NULL, NULL),
(19, 'Tanushree Dey', 'dey.tanushree200@gmail.com', '$2y$10$O5OgV/uNYYu7RM1YZ1JNK.1WOFlw3WuTXXHP.DQV.uKvZdEeVQaBa', 'student', 'BCA', '9242493647', 'uploads/1781614361_1779173652_coffee5.webp', '2026-06-16 12:52:41', NULL, NULL, NULL, NULL),
(20, 'Tanushree Dey', 'dey.tanushree2@gmail.com', '$2y$10$eMj6COhFFqkdfyYxuQZA5.iYGFAXKifPqLWNujnKwBGf5chCMuCPe', 'student', 'BCA', '7242683649', 'uploads/1781614506_IMG-20250823-WA0018.jpg', '2026-06-16 12:55:06', NULL, NULL, NULL, NULL),
(21, 'Ananya Das', 'anna@gmail.com', '$2y$10$tuYCJNU.XnLTMsIo09LZteHbeLuddim/kQ.IRQQsGq8.JMLvsgGSC', 'alumni', 'BCA', '5242483649', 'uploads/1781656723_IMG-20250823-WA0018.jpg', '2026-06-17 00:38:43', NULL, NULL, NULL, NULL),
(22, 'Abhranil Mandal', 'abhranil@gmail.com', '$2y$10$demoHashedPassword', 'alumni', 'Computer Science', '9876543210', 'uploads/abhra.jpeg', '2026-06-17 01:24:59', NULL, NULL, NULL, NULL),
(23, 'Madhushree Das', 'madhu@gmail.com', '$2y$10$demoHashedPassword', 'alumni', 'Information Technology', '9123456780', 'uploads/madhu.jpeg', '2026-06-17 01:24:59', NULL, NULL, NULL, NULL),
(24, 'abc ', 'asd@gmail.com', '$2y$10$PN2lD4HeycUejzxp.z0ygerQVDabq0RpCOxfJ6uVkByCkbQYEVzPq', 'student', 'BCA', '9942483649', 'uploads/1781833750_food1.jpg', '2026-06-19 01:49:10', NULL, NULL, NULL, NULL),
(25, 'Anu Roy', 'roy@gmail.com', '$2y$10$wc.vSQt.Mbt03BqHuhVgW.9UrChCFEJm7jKYHDI4uoxXXYGFF.7Km', 'alumni', 'BCA', '2001736625', 'uploads/1781833907_food3.jpg', '2026-06-19 01:51:47', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentor_requests`
--
ALTER TABLE `mentor_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentor_requests`
--
ALTER TABLE `mentor_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
