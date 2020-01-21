-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 21, 2020 at 10:44 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cielo_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `dob` date DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `color`, `created_at`, `updated_at`, `dob`, `is_deleted`) VALUES
(1, 'Jose Sieres', 'sieres.development@gmail.com', 'Purple', '2020-01-21 05:00:00', '2020-01-21 05:00:00', '1993-03-22', 0),
(2, 'John Johnny', 'johnny@example.com', 'Blue', '2020-01-21 05:00:00', '2020-01-21 05:00:00', '1987-12-14', 0),
(3, 'Billy Bob', 'billy@example.com', 'green', '2020-01-21 05:00:00', '2020-01-21 05:00:00', '2016-12-14', 1),
(4, 'abdac aoidjaoi', 'd@dd.net', 'Green', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(5, 'oaicaosic cojqcoijqwioj', 'joihn@jonjo.com', 'Blue', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(6, 'Jonathan Johnson', 'd@dd.net', 'Green', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(8, 'abcadefjio jqwdoidjqwio', 'jod@gmaikldaoc.com', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(9, 'abcadefjio jqwdoidjqwio', 'jod@gmaikldaoc.com', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(10, 'adoijaso jdqwiojdoiq', 'dojo@djojo.com', 'Red', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(11, 'dasopdapo pdqkwpokdqw', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(19, 'daskpdaso pokwdqpokd', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(21, 'asadb jaosjad', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(22, 'adqwdq Zayas-Bazan', 'jon@example.com', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(23, 'Bob Robinson', 'bobr@example.com', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1953-04-06', 0),
(24, 'Bob Roberts', 'dod@dod.com', 'Blue', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1932-03-29', 1),
(25, 'Bob Roberts', 'd@dd.net', 'Blue', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(26, 'Dod dob', 'dob@gmail.com', 'Pink', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(27, 'bob bobby', 'bob@dod.com', 'Green', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(28, 'bob baba', 'd@dd.net', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(29, 'dod emc', 'dod@net.com', 'White', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1399-03-22', 1),
(30, 'abcdefg badiu', 'oadjo@gmail.com', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(31, 'adada dadada', 'd@dd.net', 'Orange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(32, 'abcdefg abcdefg', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(33, 'abababa abababa', 'b@baba.com', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1934-03-31', 1),
(34, 'abcdefg abcdefg', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(35, 'abcdefgh abcdefgh', 'd@dd.net', 'Green', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-21', 1),
(36, 'abcdefg abcdefg', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(37, 'abcdefg abcadefg', 'd@dd.net', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1),
(38, 'John Test', 'John@test.com', 'Yellow', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1993-03-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
