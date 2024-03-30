-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 03:54 PM
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
-- Database: `acmed_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exit_survey`
--

CREATE TABLE `exit_survey` (
  `fullname` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `class_schedule` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `good` varchar(255) NOT NULL,
  `layk` varchar(255) NOT NULL,
  `interv` varchar(255) NOT NULL,
  `random_varchars` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exit_survey`
--

INSERT INTO `exit_survey` (`fullname`, `year`, `course`, `subject_name`, `subject_code`, `school_year`, `semester`, `term`, `class_schedule`, `room`, `good`, `layk`, `interv`, `random_varchars`) VALUES
('Lovely Joy Esma', '4th', 'BSIT', 'cce101', '78478', '2023-2024', '1st', '2nd', '1:00pm', 'CL2', 'Just average.', 'Yeah, it\'s fine.', 'Yes', 14),
('Jake Concoles', '4th', 'BSIT', 'CCE103', '1245', '2023-2024', '1st', '1st', '1:00pm', 'CL3', 'A little bit good.', 'No, not really.', 'Yes', 15),
('rhapsody entrina', '4th', 'BSIT', 'Database', '2312', '2023-2024', '1st', '2nd', '1:00pm', 'cl3', 'Not that good.', 'Yeah, its fine.', 'Yes', 17);

-- --------------------------------------------------------

--
-- Table structure for table `task2`
--

CREATE TABLE `task2` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `b` text DEFAULT NULL,
  `c` text DEFAULT NULL,
  `d` text DEFAULT NULL,
  `correct_answer` varchar(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `choice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task2`
--

INSERT INTO `task2` (`id`, `title`, `a`, `b`, `c`, `d`, `correct_answer`, `created_at`, `choice`) VALUES
(4, 'What is the primary purpose of relational databases?', 'To store complex hierarchical data structures.', ' To organize data into tables with relationships between them. ', 'To provide fast access to large amounts of unstructured data.', 'To manage real-time data streams efficiently.', 'b', 2147483647, ''),
(6, 'What is the purpose of using SQL JOINs?', 'To update multiple tables simultaneously.', 'To combine data from multiple tables based on specific conditions. ', 'To delete records from multiple tables efficiently.', 'To define relationships between tables without referencing columns.', 'b', 2147483647, ''),
(7, 'What is the syntax for selecting all data from a table named \"customers\" in SQL?', 'SELECT * FROM customers;', 'SHOW TABLE customers;', 'GET customers;', ' DISPLAY customers;', 'a', 2147483647, ''),
(8, 'What operator is used to filter records based on a specific date range in a column named \"order_date\"?', 'LIKE', ' WHERE ', 'SELECT', 'BETWEEN', 'b', 2147483647, ''),
(9, 'What is the difference between an UPDATE and a DELETE statement in SQL?', 'UPDATE modifies existing data, while DELETE removes entire rows. ', 'UPDATE is faster than DELETE.', 'UPDATE applies to specific columns, while DELETE applies to entire tables.', ' Both do the same thing, just written differently.', 'a', 2147483647, ''),
(10, 'What is the purpose of using indexes in a database?', 'To ensure data security and access control.', 'To improve query performance by speeding up data retrieval. ', 'To define relationships between tables based on specific columns.', ' To manage user accounts and permissions within the database.', 'b', 2147483647, ''),
(11, ' What is the difference between a transaction and a commit in a database?', 'A transaction is a single operation, while a commit applies changes permanently. ', 'A transaction requires user input, while a commit happens automatically.', 'A transaction is always successful, while a commit can fail.', 'Both are the same thing, just different terminology.', 'a', 2147483647, ''),
(12, 'What is the importance of data backups in database management?', 'To improve database performance and efficiency.', 'To recover data in case of system failures or accidental deletions. ', 'To enforce data integrity and prevent unauthorized modifications.', 'To manage user accounts and access permissions within the database.', 'b', 2147483647, ''),
(13, 'What operator combines data from two tables based on a shared column in SQL?', 'JOIN ', 'UNION', 'UPDATE', 'WHERE\r\n\r\n', 'a', 2147483647, ''),
(14, 'What statement permanently applies changes made within a transaction in SQL?', 'SAVE', 'END', 'ROLLBACK', 'COMMIT ', 'd', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `b` text DEFAULT NULL,
  `c` text DEFAULT NULL,
  `d` text DEFAULT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `created_at` text NOT NULL DEFAULT current_timestamp(),
  `choice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`id`, `title`, `a`, `b`, `c`, `d`, `correct_answer`, `created_at`, `choice`) VALUES
(4, ' What device connects individual devices on a network and forwards data packets?', 'Server', 'Router ', 'Switch', 'Modem', 'b', '2024-02-15 00:07:59', ''),
(5, ' What is the main function of the IP address in a network?', 'To identify the network type (e.g., LAN, WAN).', 'To uniquely identify devices on a network. ', ' To determine the data transmission speed.', 'To control access to network resources.', 'b', '2024-02-15 00:08:25', ''),
(6, 'What is the difference between TCP and UDP protocols?', 'TCP guarantees reliable data delivery, while UDP focuses on speed. ', 'TCP is used for web browsing, while UDP is used for streaming media.', 'TCP requires connection setup, while UDP is connectionless.', 'All of the above.', 'a', '2024-02-15 00:08:52', ''),
(7, 'What is the primary function of a firewall in a network?', ' To connect different networks together.', 'To control and filter incoming and outgoing network traffic. ', 'To provide internet access to devices on the network.', 'To translate private IP addresses to public IP addresses.', 'b', '2024-02-15 00:09:17', ''),
(8, ' What is the purpose of subnet masks in network addressing?', 'To define the network and host portions of an IP address. ', 'To assign unique identifiers to different devices on a network.', 'To determine the speed of data transmission on a network.', 'To encrypt data for secure communication.', 'a', '2024-02-15 00:09:42', ''),
(9, 'What is the difference between wired and wireless networks?', ' Wired networks use cables for data transmission, while wireless networks use radio waves. ', ' Wired networks are faster and more reliable, while wireless networks are more convenient.', 'Wired networks are only used for local connections, while wireless networks can be used for wide area connections.', 'All of the above.', 'a', '2024-02-15 00:10:10', ''),
(10, ' What is the role of DNS (Domain Name System) in the internet?', 'To route data packets between different networks.', 'To provide email services and messaging platforms.', 'To translate domain names into corresponding IP addresses. ', ' To store and share files and data online.', 'c', '2024-02-15 00:10:35', ''),
(11, 'What is the difference between Ethernet and Wi-Fi technologies?', 'Ethernet is used for local area networks, while Wi-Fi is used for wide area networks.', ' Ethernet offers higher speeds and reliability, while Wi-Fi is more convenient.', 'Ethernet uses wired connections, while Wi-Fi uses wireless connections. ', 'Both are the same technology with different names.', 'c', '2024-02-15 00:12:27', ''),
(12, ' What is the importance of network standards and protocols in communication?', ' They define the physical connections and cables used in networking.', 'They ensure compatibility and interoperability between different devices and networks. ', 'They determine the speed and performance of data transmission.', 'They are only relevant for large-scale internet infrastructure.', 'b', '2024-02-15 00:12:52', ''),
(13, 'What is the basic difference between procedural and object-oriented programming paradigms?', 'Procedural programming focuses on functions and procedures, while object-oriented programming revolves around objects with data and behavior. ', 'Procedural programming is simpler, while object-oriented programming is more complex.', 'Procedural programming is better for small projects, while object-oriented programming is ideal for large applications.', 'Both paradigms achieve the same outcome, just with different syntax.', 'a', '2024-02-15 00:15:02', '');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `b` text DEFAULT NULL,
  `c` text DEFAULT NULL,
  `d` text DEFAULT NULL,
  `correct_answer` char(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `choice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `a`, `b`, `c`, `d`, `correct_answer`, `created_at`, `choice`) VALUES
(116, 'What does the acronym HTML stand for?', ' Hyper Text Markup Language', 'High-Level Text Management Language', 'Hyperlink and Text Management Language', 'High-Level Markup Language', 'a', '2024-02-14 15:07:42', ''),
(117, 'What symbol is used to define a single-line comment in Java?', ' /* */', '//', '#', ';', 'b', '2024-02-14 15:39:49', ''),
(118, 'Which data type stores a single character in Python?', 'int', 'float', 'string', 'char ', 'd', '2024-02-14 15:40:19', ''),
(119, 'What is the keyword used to create a loop that runs a specific number of times in C++?', 'while', 'do-while', 'for ', 'if', 'c', '2024-02-14 15:40:52', ''),
(120, 'What data structure maintains order and allows duplicates in Java?', ' List ', ' Set', ' Map', 'Array', 'a', '2024-02-14 15:41:37', ''),
(121, 'What is the correct declaration of a public String variable in Java?', ' public var name;', 'public String name = \"value\"; ', 'public String name = \"value\"; ', 'public final name = \"value\";', 'c', '2024-02-14 15:43:36', ''),
(123, ' What is the primary function of a PHP loop like for or while?', 'To define functions and subroutines.', 'To repeat a block of code multiple times. ', 'To control the flow of execution based on conditions.', 'To store and manage data efficiently.\r\n\r\n', 'b', '2024-02-14 15:46:44', ''),
(124, 'What is the purpose of a PRIMARY KEY constraint in a database table?', 'To define relationships between tables.', ' To uniquely identify each row in a table. ', ' To enforce data integrity and validity.', 'To restrict the values allowed in a specific column.', 'b', '2024-02-14 15:49:10', ''),
(125, 'What command is used to select all data from a table named \"users\"?', 'SELECT * FROM users; ', 'SHOW TABLE users;', 'GET users;', 'DISPLAY users;', 'a', '2024-02-14 15:53:19', ''),
(126, 'What is the main purpose of using comments in code?', 'To define data types.', 'To improve code readability and documentation. ', 'To control the flow of execution.', ' To store and retrieve data.', 'b', '2024-02-14 15:53:57', ''),
(185, '2 + 2', '3', '4', '5', '6', 'b', '2024-02-21 15:06:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance`
--

CREATE TABLE `tbl_performance` (
  `user_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `program_head` varchar(255) NOT NULL,
  `dean` varchar(255) NOT NULL,
  `random_primay_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_performance`
--

INSERT INTO `tbl_performance` (`user_id`, `grade`, `subject`, `professor`, `subject_code`, `school_year`, `semester`, `term`, `program_head`, `dean`, `random_primay_key`) VALUES
(16, '93', 'CCE103', '', '', '', '', '', '', '', ''),
(1, '91', 'english', 'Sir Raven', '123', '2023-2024', '2nd', '1st', 'Sir Cyvil', 'Sir Eduard', '12312312adfasd'),
(1, '85', 'Filipino', 'Miss Ness', '12345', '2023-2024', '1st', '2nd', 'Sir Cyvil', 'Sir Eduard', '123adad21'),
(2, '100', 'Programming', 'Miss Joane', '0145', '2023', '2', '2', 'Cyvil', 'Pulvera', '45852852l'),
(9, '74', 'English', 'Sir Hernan', '504', '2023-2024', '1st', '2nd', 'Henry', 'Brenna', '654531asd32as'),
(2, '99', 'HTML', 'Sir Cyvil', '85487', '2023', '2nd', '1st', 'Sir Cyv', 'Sir Ed', 'asd4asd45as514da'),
(3, '100', 'Philosophy', 'Sir Arnie', '1234212', '2023-2024', '1st', '2nd', 'Sir Cyvil', 'Sir Eduard', 'asdasf12'),
(11, '85', 'IT24', 'Ms Jo', '34345', '2023', '1st', '2nd', 'Cyvil', 'Edward', 'dgdfxgdhh'),
(3, '99', 'Science', 'Sir Guard', '12452', 'this year', '1st ', '2nd', 'Sir Cyvil', 'Sir Eduard', 'vgbadfasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`) VALUES
(1, 'teacher'),
(2, 'student'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_undergo`
--

CREATE TABLE `tbl_undergo` (
  `stud_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `random_key` int(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_undergo`
--

INSERT INTO `tbl_undergo` (`stud_id`, `fullname`, `course`, `year`, `day`, `time`, `random_key`, `user_id`) VALUES
('53146', 'Rhapsody Entrina', 'BSIT', '3rd Year', 'Wednesday', '1:00pm - 3:00pm', 10, 0),
('043664', 'Jake Concoles', 'BSIT', '4th Year', 'Saturday', '1:00pm - 3:00pm', 11, 0),
('123', 'mark', 'BSIT', '3rd Year', 'Tuesday', '9:00am - 11:00am', 12, 0),
('123', 'dordor', 'BSIT', '4th Year', 'Tuesday', '9:00am - 11:00am', 13, 0),
('1234', 'Jake Concoles', 'BSIT', '2nd Year', 'Tuesday', '1:00pm - 3:00pm', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_uname` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `exam_score` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `exam_score2` varchar(255) NOT NULL,
  `cc102_1` varchar(255) NOT NULL,
  `cc102_2` varchar(255) NOT NULL,
  `elec` varchar(255) NOT NULL,
  `elec2` varchar(255) NOT NULL,
  `netw` varchar(255) NOT NULL,
  `netw2` varchar(255) NOT NULL,
  `integ` varchar(255) NOT NULL,
  `integ2` varchar(255) NOT NULL,
  `assur` varchar(255) NOT NULL,
  `assur2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_uname`, `user_pass`, `role_id`, `fullname`, `course`, `year`, `program`, `id_number`, `email`, `contact_number`, `address`, `birthday`, `gender`, `skills`, `image`, `exam_score`, `subject`, `exam_score2`, `cc102_1`, `cc102_2`, `elec`, `elec2`, `netw`, `netw2`, `integ`, `integ2`, `assur`, `assur2`) VALUES
(1, 'admin123', '12341234', '3', 'administrator', 'admin', 0, 'DTP', '0', 'no@gmail.com', 'basta', 'secret', 'secret', 'secret', 'secret', 'admin123 - 2024.01.26 - 02.51.55pm.png', '90', '', '74', '', '', '', '', '', '', '', '', '', ''),
(2, 'rhap123', '12341234', '2', 'Rhapsody Entrina', 'BSIT', 4, '', '53146', 'jalopentrina@gmail.com', '09512161420', '1335 Luna Extension', '07/18/92', 'male', 'resting', 'rhap123 - 2024.01.26 - 01.32.22pm.jpg', '85', '', '80', '', '', '', '', '', '', '', '', '', ''),
(4, 'prof123', '12341234', '1', 'Professor Teacher', 'Teacher', 0, '', '123123', 'prof123@gmail.com', '12312412', 'digos', '1/2/1', 'male', 'Explaining', 'prof123 - 2024.01.26 - 02.27.56pm.png', '90', '', '73', '', '', '', '', '', '', '', '', '', ''),
(7, 'king123', '12341234', '2', 'King Philipe Anduyo Agulo', 'BSIT', 1, '', '?', 'sample_king123@gmail.com', '?', '?', '?', 'Male', '', 'no_profile_pic.png', '74', '', '88', '82', '81', '', '', '', '', '', '', '', ''),
(8, 'aldave123', '12341234', '2', 'Aldave Xavier Salatan', 'BSIT', 0, '', '?', 'sample_aldave123@gmail.com', '?', '?', '?', 'Male', '', 'no_profile_pic.png', '79', '', '80', '', '', '', '', '', '', '', '', '', ''),
(9, 'jonnah123', '12341234', '2', 'Jonnah Varona Andoy', 'BSIT', 3, '', '?', 'sample_jonnah123@gmail.com', '?', '?', '?', 'Female', '', 'no_profile_pic.png', '72', '', '73', '', '', '', '', '', '', '', '', '', ''),
(10, 'avan123', '12341234', '2', 'Avanceña Jay Patonongon ', 'BSIT', 0, '', '?', 'sample_avan123@gmail.com', '?', '?', '?', 'Male', '', 'no_profile_pic.png', '79', '', '74', '', '', '', '', '', '', '', '', '', ''),
(11, 'raven123', '12341234', '1', 'Raven Manulat', 'Teacher', 0, '', '?', 'sample_raven123@gmail.com', '?', '?', '?', 'Male', '', 'no_profile_pic.png', '90', '', '85', '', '', '', '', '', '', '', '', '', ''),
(12, '?', '12341234', '2', 'Acedilla, Cesar Ryan', 'BSIT', 0, '', '?', 'acedilla@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '79', '', '71', '', '', '', '', '', '', '', '', '', ''),
(13, 'Antopina', 'Antopina, Khristen joy', '2', 'Antopina, Khristen joy', 'BSIT', 1, '', '?', 'Antopina@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '72', '', '71', '75', '74', '', '', '', '', '', '', '', ''),
(14, 'arnel123', '12341234', '2', 'Bandoja, Arnel', 'BSIT', 1, '', '?', 'Bandoja@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '87', '', '88', '90', '93', '', '', '', '', '', '', '', ''),
(15, '?', 'Calvo, Jonalyn', '2', 'Calvo, Jonalyn', 'BSIT', 1, '', '?', 'Calvo@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '74', '', '73', '72', '71', '', '', '', '', '', '', '', ''),
(16, '?', 'Camarillo, Jezel', '2', 'Camarillo, Jezel', 'BSIT', 1, '', '?', 'Camarillo@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '100.0', '', '99', '92', '93', '', '', '', '', '', '', '', ''),
(17, 'Cobol, Mark gil', 'Cobol, Mark gil', '2', 'Cobol, Mark gil', 'BSIT', 1, '', '?', 'Cobol@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '96.77', '', '74', '75', '76', '', '', '', '', '', '', '', ''),
(18, 'Cubol, Mark', 'Cubol, Mark', '2', 'Cubol, Mark', 'BSIT', 1, '', '?', 'Cubol@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '83.87', '', '72', '71', '72', '', '', '', '', '', '', '', ''),
(19, '?', 'Denuna, May Ann', '2', 'Denuna, May Ann', 'BSIT', 1, '', '?', 'Denuna@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '100.0', '', '95', '89', '88', '', '', '', '', '', '', '', ''),
(20, '?', 'Dumaguit, Jerald', '2', 'Dumaguit, Jerald', 'BSIT', 1, '', '?', 'Dumaguit@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '96.77', '', '95', '81', '82', '', '', '', '', '', '', '', ''),
(21, '?', 'Encallado, Mayville', '2', 'Encallado, Mayville', 'BSIT', 1, '', '?', 'Encallado@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '72', '', '73', '74', '73', '', '', '', '', '', '', '', ''),
(22, '74', 'Ferrer, Kenneth', '2', 'Ferrer, Kenneth', 'BSIT', 1, '', '?', 'Ferrer@gmail.com', '??', '?', '?', '?', '', 'no_profile_pic.png', '70', '', '71', '72', '73', '', '', '', '', '', '', '', ''),
(23, 'Gador, Chelly', 'Gador, Chelly', '2', 'Gador, Chelly', 'BSIT', 1, '', '?', 'Gador@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '73', '', '76', '74', '76', '', '', '', '', '', '', '', ''),
(24, 'jayson', '12341234', '2', 'Gultia, Jayson Joy', 'BSIT', 2, '', '?', 'Gultia@gmail.com', '?', '?', '?', 'M', '', 'no_profile_pic.png', '100.0', '', '99', '80', '81', '', '', '', '', '', '', '', ''),
(25, '?', '12341234', '2', 'Landero, Charmie', 'BSIT', 4, '', '?', 'Landero@gmai.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '72', '', '72', '', '', '', '', '', '', '', '', '', ''),
(26, 'jean', '12341234', '2', 'Latonio, Honey jean', 'BSIT', 2, '', '?', 'Latonio@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '93.55', '', '88', '86', '85', '', '', '', '', '', '', '', ''),
(27, '?', '12341234', '2', 'Mendez, Ralphjay', 'BSIT', 2, '', '?', 'Mendez@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '93.55', '', '97', '92', '93', '', '', '', '', '', '', '', ''),
(28, '?', '12341234', '2', 'Mirafuentes, Marc Ivan', 'BSIT', 2, '', '?', 'Mirafuentes@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '93.55', '', '89', '84', '82', '', '', '', '', '', '', '', ''),
(29, '?', '12341234', '2', 'Niervo, Jolly Maika', 'BSIT', 2, '', '?', 'Niervo@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '100.0', '', '99', '99', '98', '', '', '', '', '', '', '', ''),
(30, '?', '12341234', '2', 'Noynay, Ralph ian', 'BSIT', 2, '', '?', 'Noynay@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '96.77', '', '97', '90', '95', '', '', '', '', '', '', '', ''),
(31, 'yvon', '12341234', '2', 'Ramillano, Yvon mae', 'BSIT', 3, '', '?', 'Ramillano@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '93.55', '', '74', '85', '87', '', '', '', '', '', '', '', ''),
(32, '?', '12341234', '2', 'Rublico, Shayne', 'BSIT', 2, '', '?', 'Rublico@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '90.32', '', '95', '85', '86', '', '', '', '', '', '', '', ''),
(33, '?', '12341234', '2', 'Salas, Mark', 'BSIT', 2, '', '?', 'Salas@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '74', '', '73', '77', '76', '', '', '', '', '', '', '', ''),
(34, '?', '12341234', '2', 'Santos, Honey mae', 'BSIT', 2, '', '?', 'Santos@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '100.0', '', '86', '85', '86', '', '', '', '', '', '', '', ''),
(35, '?', '12341234', '2', 'Sarol, Charlene', 'BSIT', 2, '', '?', 'Sarol@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '80.65', '', '87', '90', '95', '', '', '', '', '', '', '', ''),
(36, 'stewart', '12341234', '2', 'Taub, Christ stewart', 'BSIT', 4, '', '?', 'Taub@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '73', '', '74.5', '78', '79', '', '', '', '', '', '', '', ''),
(37, '?', '12341234', '2', 'Ulan ulan, Fritz', 'BSIT', 0, '', '?', 'Ulanulan@Gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '76', '', '72.3', '', '', '', '', '', '', '', '', '', ''),
(38, '?', 'Alimento, Marvin', '2', 'Alimento, Marv', 'BSIT', 1, '', '?', 'Alimento@gmail.com', '?', '?', '?', '?', '', 'no_profile_pic.png', '97', '', '95', '88', '89', '', '', '', '', '', '', '', ''),
(187, 'maestra123', '12341234', '1', 'maestra', 'teacher', 0, '', '123', 'maestra123@gmail.com', '0912345456', 'digos', 'january 1 1995', 'female', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 'teacher123', '12341234', '1', 'teacher123', 'teacher', 0, '', '12345', 'teacher123@gmail.com', '12314123', 'digos', '01/01/1990', 'male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, 'prof1234', '12341234', '1', 'prof1234', 'teacher', 0, '', '12345', 'prof1234@gmail.com', '12345', 'Digos', '01/01/1990', 'Male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194, 'prof1', '12341234', '1', 'prof1', 'teacher', 0, '', '1234', 'prof1@gmail.com', '123412312', 'Digos', '01/01/1990', 'Male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'prof12', '12341234', '1', 'prof12', 'teacher', 0, '', '1234', 'prof12@gmail.com', '1234', 'Digos', '01/01/1990', 'Male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(198, 'prof0', '12341234', '1', 'Lovely', 'teacher', 0, '', '123', 'prof0@gmail.com', '123', 'Digos', '01/01/1990', 'Male', '', 'prof0 - 2024.02.21 - 03.00.38pm.jpg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(201, 'teacher', '12341234', '1', 'Sir Teacher', 'teacher', 0, '', '1234', 'teacher@gmail.com', '1234', 'Digos', '01/01/1990', 'Male', '', 'teacher - 2024.02.21 - 03.31.11pm.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(204, 'teacher99', '12341234', '1', 'teacher99', 'teacher', 0, '', '123', 'teacher99@gmail.com', '123', 'Digos', '01/01/1990', 'Male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(208, 'teach123', '12341234', '1', 'teach123', 'teacher', 0, '', '123', 'teach123@gmail.com', '123', 'Digos', '01/01/1990', 'Male', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(213, 'teach10', '12341234', '1', 'teach10', 'teacher', 0, '', '123', 'teach10@gmail.com', '123', 'Digos', '01/01/1990', 'Female', '', 'no_profile_pic.png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(232, '', '', '', 'christian', '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '80', '90', '', '', '', '', '', '', '', ''),
(246, '', '', '', 'ac', '', 2, '', '', '', '', '', '', '', '', '', '95', '', '94', '', '', '', '', '', '', '', '', '', ''),
(247, '', '', '', 'aba', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, '', '', '', 'caijo', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '73', '75', '', '', '', ''),
(250, '', '', '', 'Sheila', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '74', '73', '', ''),
(251, '', '', '', 'Menvic', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '72', '85'),
(261, '', '', '', 'a', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(262, '', '', '', 't', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(274, '', '', '', 'john peter', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '75', '77', '', '', '', '', '', ''),
(283, '', '', '', 'berae', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '80', '90', '', '', '', '', '', ''),
(284, '', '', '', 'bryan', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '76', '74', '', '', '', ''),
(285, '', '', '', 'Abakada, Peter Paul', '', 1, '', '', '', '', '', '', '', '', '', '85', '', '86', '', '', '', '', '', '', '', '', '', ''),
(286, '', '', '', 'Michelle', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '74', '73', '', '', '', '', '', ''),
(287, '', '', '', 'Aubrey', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '72', '71', '', '', '', '', '', ''),
(288, '', '', '', 'Sharon', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '74', '71', '', '', '', '', '', ''),
(289, '', '', '', 'james', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '71', '72', '', '', '', ''),
(290, '', '', '', 'michael', '', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '86', '73', '', '', '', ''),
(291, '', '', '', 'Renalyn', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '85', '73', '', ''),
(292, '', '', '', 'Hernan', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '84', '72', '', ''),
(293, '', '', '', 'henry', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '74', '98', '', ''),
(294, '', '', '', 'Gitalio ', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '72', '74'),
(295, '', '', '', 'Brenna', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '75', '90'),
(296, '', '', '', 'Thalia', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '86', '72');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearly`
--

CREATE TABLE `tbl_yearly` (
  `score` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `random_prim` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attempt` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_yearly`
--

INSERT INTO `tbl_yearly` (`score`, `name`, `random_prim`, `fullname`, `user_id`, `timestamp`, `attempt`) VALUES
(6, '', 103, 'Bandoja, Arnel', 14, '2024-03-09 10:42:40', 1),
(6, '', 104, 'King Philipe Anduyo Agulo', 7, '2024-03-09 10:43:25', 1),
(5, '', 105, 'Bandoja, Arnel', 14, '2024-03-09 10:44:08', 1),
(4, '', 106, 'Bandoja, Arnel', 14, '2024-03-09 10:52:23', 1),
(4, '', 107, 'King Philipe Anduyo Agulo', 7, '2024-03-09 11:35:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearly_four`
--

CREATE TABLE `tbl_yearly_four` (
  `name` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `random_prim` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attempt` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_yearly_four`
--

INSERT INTO `tbl_yearly_four` (`name`, `score`, `random_prim`, `fullname`, `user_id`, `timestamp`, `attempt`) VALUES
('', 5, 5, 'Rhapsody Entrina', 2, '2024-03-09 08:34:01', 1),
('', 8, 6, 'Rhapsody Entrina', 2, '2024-03-09 12:03:06', 1),
('', 6, 7, 'Taub, Christ stewart', 36, '2024-03-09 12:04:29', 1),
('', 2, 8, 'Taub, Christ stewart', 36, '2024-03-09 12:05:31', 1),
('', 3, 9, 'Taub, Christ stewart', 36, '2024-03-09 12:07:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearly_three`
--

CREATE TABLE `tbl_yearly_three` (
  `name` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `random_prim` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attempt` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_yearly_three`
--

INSERT INTO `tbl_yearly_three` (`name`, `score`, `random_prim`, `fullname`, `user_id`, `timestamp`, `attempt`) VALUES
('', 8, 4, 'Jonnah Varona Andoy', 9, '2024-03-09 08:33:32', 1),
('', 4, 5, 'Ramillano, Yvon mae', 31, '2024-03-09 11:58:01', 1),
('', 3, 6, 'Jonnah Varona Andoy', 9, '2024-03-09 11:59:51', 1),
('', 6, 7, 'Ramillano, Yvon mae', 31, '2024-03-09 12:01:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearly_two`
--

CREATE TABLE `tbl_yearly_two` (
  `name` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `random_prim` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attempt` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_yearly_two`
--

INSERT INTO `tbl_yearly_two` (`name`, `score`, `random_prim`, `fullname`, `user_id`, `timestamp`, `attempt`) VALUES
('', 7, 15, 'Latonio, Honey jean', 26, '2024-03-09 08:33:11', 1),
('', 3, 16, 'Latonio, Honey jean', 26, '2024-03-09 11:49:47', 1),
('', 8, 17, 'Latonio, Honey jean', 26, '2024-03-09 11:52:27', 1),
('', 5, 18, 'Gultia, Jayson Joy', 24, '2024-03-09 11:53:54', 1),
('', 4, 19, 'Gultia, Jayson Joy', 24, '2024-03-09 11:55:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unsaon`
--

CREATE TABLE `unsaon` (
  `anion` int(255) NOT NULL,
  `ingani` varchar(255) NOT NULL,
  `ana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_score2`
--

CREATE TABLE `user_score2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scores` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `over_score` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_score2`
--

INSERT INTO `user_score2` (`id`, `user_id`, `scores`, `timestamp`, `fullname`, `over_score`, `year`) VALUES
(14, 2, 2, '2024-02-21 05:21:27', 'Rhapsody Entrina', 10, 4),
(15, 13, 1, '2024-03-05 07:51:49', 'Antopina, Khristen joy', 10, 1),
(16, 17, 3, '2024-03-05 07:53:17', 'Cobol, Mark gil', 10, 1),
(17, 24, 4, '2024-03-05 07:55:54', 'Gultia, Jayson Joy', 10, 2),
(18, 26, 3, '2024-03-05 07:59:29', 'Latonio, Honey jean', 10, 2),
(19, 9, 2, '2024-03-05 08:01:22', 'Jonnah Varona Andoy', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_score3`
--

CREATE TABLE `user_score3` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scores` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `over_score` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_score3`
--

INSERT INTO `user_score3` (`id`, `user_id`, `scores`, `timestamp`, `fullname`, `over_score`, `year`) VALUES
(11, 2, 3, '2024-02-21 05:20:43', 'Rhapsody Entrina', 10, 4),
(12, 13, 3, '2024-03-05 07:52:08', 'Antopina, Khristen joy', 10, 1),
(13, 17, 5, '2024-03-05 07:53:36', 'Cobol, Mark gil', 10, 1),
(14, 24, 3, '2024-03-05 07:56:18', 'Gultia, Jayson Joy', 10, 2),
(15, 26, 2, '2024-03-05 07:59:57', 'Latonio, Honey jean', 10, 2),
(16, 9, 1, '2024-03-05 08:01:51', 'Jonnah Varona Andoy', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_scores`
--

CREATE TABLE `user_scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scores` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `over_score` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_scores`
--

INSERT INTO `user_scores` (`id`, `user_id`, `scores`, `timestamp`, `fullname`, `over_score`, `year`) VALUES
(71, 192, 5, '2024-02-21 13:41:49', 'Jake Concoles', 11, 0),
(72, 195, 4, '2024-02-21 13:41:49', 'student12', 11, 0),
(73, 197, 2, '2024-02-21 14:30:36', 'Jake', 11, 1),
(74, 200, 3, '2024-02-21 14:30:49', 'student', 11, 1),
(75, 13, 6, '2024-03-05 15:23:52', 'Antopina, Khristen joy', 11, 2),
(76, 17, 3, '2024-03-05 15:23:52', 'Cobol, Mark gil', 11, 2),
(77, 24, 3, '2024-03-05 15:23:52', 'Gultia, Jayson Joy', 11, 2),
(85, 26, 5, '2024-03-05 15:25:33', 'Latonio, Honey jean', 11, 2),
(86, 2, 4, '2024-03-05 15:31:58', 'Rhapsody Entrina', 11, 4),
(87, 9, 4, '2024-03-05 15:33:05', 'Jonnah Varona Andoy', 11, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exit_survey`
--
ALTER TABLE `exit_survey`
  ADD PRIMARY KEY (`random_varchars`),
  ADD UNIQUE KEY `random_varchars` (`random_varchars`);

--
-- Indexes for table `task2`
--
ALTER TABLE `task2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task3`
--
ALTER TABLE `task3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_performance`
--
ALTER TABLE `tbl_performance`
  ADD PRIMARY KEY (`random_primay_key`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_undergo`
--
ALTER TABLE `tbl_undergo`
  ADD PRIMARY KEY (`random_key`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_yearly`
--
ALTER TABLE `tbl_yearly`
  ADD PRIMARY KEY (`random_prim`);

--
-- Indexes for table `tbl_yearly_four`
--
ALTER TABLE `tbl_yearly_four`
  ADD PRIMARY KEY (`random_prim`);

--
-- Indexes for table `tbl_yearly_three`
--
ALTER TABLE `tbl_yearly_three`
  ADD PRIMARY KEY (`random_prim`);

--
-- Indexes for table `tbl_yearly_two`
--
ALTER TABLE `tbl_yearly_two`
  ADD PRIMARY KEY (`random_prim`);

--
-- Indexes for table `unsaon`
--
ALTER TABLE `unsaon`
  ADD PRIMARY KEY (`anion`);

--
-- Indexes for table `user_score2`
--
ALTER TABLE `user_score2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_score3`
--
ALTER TABLE `user_score3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_scores`
--
ALTER TABLE `user_scores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exit_survey`
--
ALTER TABLE `exit_survey`
  MODIFY `random_varchars` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `task2`
--
ALTER TABLE `task2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `task3`
--
ALTER TABLE `task3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tbl_undergo`
--
ALTER TABLE `tbl_undergo`
  MODIFY `random_key` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `tbl_yearly`
--
ALTER TABLE `tbl_yearly`
  MODIFY `random_prim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_yearly_four`
--
ALTER TABLE `tbl_yearly_four`
  MODIFY `random_prim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_yearly_three`
--
ALTER TABLE `tbl_yearly_three`
  MODIFY `random_prim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_yearly_two`
--
ALTER TABLE `tbl_yearly_two`
  MODIFY `random_prim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `unsaon`
--
ALTER TABLE `unsaon`
  MODIFY `anion` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_score2`
--
ALTER TABLE `user_score2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_score3`
--
ALTER TABLE `user_score3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_scores`
--
ALTER TABLE `user_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
