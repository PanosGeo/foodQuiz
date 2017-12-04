-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 12:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

CREATE DATABASE IF NOT EXISTS `food_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `food_db`;

--
-- Δημιουργία user
--

CREATE USER IF NOT EXISTS 'myuser'@'localhost' IDENTIFIED BY 'mypass'; 

GRANT ALL PRIVILEGES ON food_db.* TO 'myuser'@'%';

--
-- Table structure for table `food_questions`
--

CREATE TABLE `food_questions` (
  `id` tinyint(2) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_questions`
--

INSERT INTO `food_questions` (`id`, `question`, `answer`) VALUES
(1, 'Hummus is served as a starter.', 1),
(2, 'The delicacy that people of Brussels accompany their fries is yogurt.', 0),
(3, 'Tope is mollusc.', 0),
(4, 'The meat with vegetables cooked in the pot is called entrada.', 1),
(5, 'The spanish soup \"gazpacho\" is served hot.', 0),
(6, 'The italic \"focaccia\" is bread.', 1),
(7, 'The traditional \"Hunkar Begendi\" contains meat and mashed potatoes.', 0),
(8, 'Peinirli in turkish means with ham.', 0),
(9, 'Savaren is cheese.', 0),
(10, 'Brie is fish.', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;