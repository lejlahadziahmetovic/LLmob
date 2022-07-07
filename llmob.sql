-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2022 at 06:57 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `llmob`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `phone` varchar(20) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`, `phone`, `street`, `city`, `name`, `lastname`) VALUES
(1, 'arnizzo', 'arnizzo@gmail.com', '6c44beb03d74ad8012c2ce19d9c32cff', '2022-07-06 14:50:59', '', '', '', '', ''),
(16, 'Admin', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', '2022-07-06 17:50:40', 'Admin', 'admin@admin.com', 'Admin', 'Admin', 'Admin'),
(17, 'Lejla', 'Lejla', '31f6f2e495dd61e30ec0aea8f87c10f0', '2022-07-06 18:03:10', 'Lejla', 'Lejla', 'lejla', 'aa', 'aa'),
(18, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', '2022-07-06 18:03:45', 'aaa', 'aaa', 'aaa', 'aa', 'aa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
