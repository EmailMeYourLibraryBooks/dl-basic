-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2019 at 12:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

DROP TABLE IF EXISTS `dogs`;
CREATE TABLE IF NOT EXISTS `dogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dog_name` varchar(250) NOT NULL,
  `dog_type` int(11) DEFAULT NULL,
  `dog_gender` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `hours_of_sleep` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `dog_name`, `dog_type`, `dog_gender`, `age`, `hours_of_sleep`) VALUES
(1, 'Akuma', 1, 1, 12, 16),
(2, 'Percy', 1, 1, 7, 16),
(3, 'Sadie', 2, 2, 1, 13),
(4, 'Annie', 3, 2, 1, 12),
(14, 'Cash', 5, 1, 11, 15),
(13, 'Blackie', 4, 2, 4, 14),
(15, 'Bailey', 5, 2, 3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `dog_gender`
--

DROP TABLE IF EXISTS `dog_gender`;
CREATE TABLE IF NOT EXISTS `dog_gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dog_gender` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dog_gender`
--

INSERT INTO `dog_gender` (`id`, `dog_gender`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `dog_type`
--

DROP TABLE IF EXISTS `dog_type`;
CREATE TABLE IF NOT EXISTS `dog_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dog_type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dog_type`
--

INSERT INTO `dog_type` (`id`, `dog_type`) VALUES
(1, 'chocolate lab'),
(2, 'pit bull'),
(3, 'terrier/retriever mix'),
(4, 'Flat Coated Retriever'),
(5, 'Yellow Lab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'bob', '$2y$10$jz6IEpxSh2WxVPmzGLe7MeFMRtNEYMJu/iEBOAt1Bl..qU5y1e1g.', '2019-06-08 19:51:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
