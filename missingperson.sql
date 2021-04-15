-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2021 at 08:08 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missingperson`
--

-- --------------------------------------------------------

--
-- Table structure for table `mia`
--

DROP TABLE IF EXISTS `mia`;
CREATE TABLE IF NOT EXISTS `mia` (
  `reporter` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` enum('Missing','Found') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `s_nameMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `f_nameMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `l_nameMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phoneMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `emailMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `addressMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `idMIA` int(50) NOT NULL,
  `genderMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nationalityMIA` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dobMIA` date NOT NULL,
  `s_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `f_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_no` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `time_zone` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  KEY `reporter` (`reporter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `position` enum('Administrator','DCI','Public') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_no` int(8) NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `s_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `f_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` enum('Male','Female','Hermaphrodite','Transgender') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`email`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`joined`, `img`, `email`, `position`, `pass`, `id_no`, `phone`, `s_name`, `f_name`, `l_name`, `gender`, `dob`) VALUES
('2021-04-08 22:40:00', 'admin.jpg', 'admin@admin.com', 'Administrator', 'admin', 12345678, '+254725795599', 'Ad', 'Adm', 'Admi', 'Male', '1991-10-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
