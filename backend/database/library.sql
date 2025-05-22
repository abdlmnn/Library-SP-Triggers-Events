-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 07:30 PM
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
-- Database: `library`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_check_login` (IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(255))   BEGIN
    DECLARE v_user_id INT DEFAULT NULL;

    SELECT user_id INTO v_user_id
    FROM users
    WHERE username = p_username AND password = p_password;

    IF v_user_id IS NOT NULL THEN
        INSERT INTO logs (action, table_name, performed_by, performed_at, description) 
        VALUES ('LOGIN_SUCCESS', 'users', v_user_id, NOW(), 'User logged in successfully');

        SELECT user_id, username, role
        FROM users
        WHERE user_id = v_user_id;
    ELSE
        INSERT INTO logs (action, table_name, performed_by, performed_at, description) 
        VALUES ('LOGIN_FAIL', 'users', NULL, NOW(), 'Failed login attempt');

        SELECT NULL AS user_id, NULL AS username, NULL AS role;
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `author` varchar(150) NOT NULL,
  `copies` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `status` enum('available','archived','','') NOT NULL DEFAULT 'available',
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `borrow_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `returned_at` datetime NOT NULL,
  `status` enum('borrowed','returned','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `performed_by` int(11) DEFAULT NULL,
  `performed_at` datetime NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `action`, `table_name`, `performed_by`, `performed_at`, `description`) VALUES
(22, 'LOGIN_SUCCESS', 'users', 1, '2025-05-17 23:58:39', 'User logged in successfully'),
(23, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:00:31', 'User logged in successfully'),
(24, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:00:59', 'User logged in successfully'),
(25, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:01:52', 'User logged in successfully'),
(26, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:19:19', 'User logged in successfully'),
(27, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:26:11', 'Failed login attempt'),
(28, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:27:21', 'Failed login attempt'),
(29, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:27:21', 'Failed login attempt'),
(30, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:27:22', 'Failed login attempt'),
(31, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:27:22', 'Failed login attempt'),
(32, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:27:22', 'Failed login attempt'),
(33, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:27:33', 'User logged in successfully'),
(34, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:30:26', 'Failed login attempt'),
(35, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:31:22', 'Failed login attempt'),
(36, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:32:48', 'Failed login attempt'),
(37, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:33:15', 'Failed login attempt'),
(38, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:33:19', 'Failed login attempt'),
(39, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:33:32', 'Failed login attempt'),
(40, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:34:07', 'Failed login attempt'),
(41, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:39:59', 'Failed login attempt'),
(42, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:43:12', 'Failed login attempt'),
(43, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:43:40', 'Failed login attempt'),
(44, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:44:10', 'Failed login attempt'),
(45, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:44:21', 'Failed login attempt'),
(46, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:44:24', 'User logged in successfully'),
(47, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:45:26', 'Failed login attempt'),
(48, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:46:54', 'Failed login attempt'),
(49, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:47:19', 'Failed login attempt'),
(50, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 00:49:28', 'Failed login attempt'),
(51, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:49:32', 'User logged in successfully'),
(52, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 00:54:12', 'User logged in successfully'),
(53, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 01:09:27', 'Failed login attempt'),
(54, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 01:14:50', 'Failed login attempt'),
(55, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:14:53', 'User logged in successfully'),
(56, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:17:10', 'User logged in successfully'),
(57, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:20:42', 'User logged in successfully'),
(58, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:23:19', 'User logged in successfully'),
(59, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:25:32', 'User logged in successfully'),
(60, 'LOGIN_SUCCESS', 'users', 1, '2025-05-18 01:25:38', 'User logged in successfully'),
(61, 'LOGIN_FAIL', 'users', NULL, '2025-05-18 01:29:20', 'Failed login attempt');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` enum('active','banned','','') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overdue_notifications`
--

CREATE TABLE `overdue_notifications` (
  `notification_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `notified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'admin',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'admin', 'admin123', 'admin', 'active', '2025-05-14 09:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`borrow_id`),
  ADD UNIQUE KEY `member_id` (`member_id`,`book_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `performed_by` (`performed_by`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `overdue_notifications`
--
ALTER TABLE `overdue_notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD UNIQUE KEY `member_id` (`member_id`,`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overdue_notifications`
--
ALTER TABLE `overdue_notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `performed_by` FOREIGN KEY (`performed_by`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
