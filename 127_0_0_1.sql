-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 12:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Web'),
(2, 'Programming'),
(3, 'Data Analytics'),
(4, 'Initial'),
(5, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `information` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `picture`, `information`, `cat_id`) VALUES
(2, 'Python Programming Masterclass', '149.99', 'In-depth Python programming course for beginners to advanced developers.', '2.jpg', 'Explore Python language features and develop practical skills.', '2'),
(3, 'Data Science Essentials', '249.99', 'A hands-on guide to data science with Python and popular data science libraries.', '4.jpg', 'Master data analysis, visualization, and machine learning.', '3'),
(5, 'Cloud Computing Basics', '199.99', 'Introduction to cloud computing platforms like AWS, Azure, and Google Cloud.', '6.webp', 'Learn to deploy and manage applications in the cloud.', '5'),
(6, 'Java Programming for Beginners', '129.99', 'Java programming course for beginners covering syntax, OOP, and Java applications.', '7.jpg', 'Build foundational Java programming skills.', '2'),
(8, 'Artificial Intelligence Essentials', '279.99', 'Explore the basics of artificial intelligence, machine learning, and neural networks.', '2.webp', 'Understand AI applications and development.', '3'),
(9, 'Mobile App Development with React Native', '159.99', 'Create cross-platform mobile apps using React Native framework.', '3.png', 'Build mobile apps for iOS and Android platforms.', '1'),
(10, 'Database Design and SQL Mastery', '169.99', 'Master the principles of database design and SQL for efficient data management.', '1.png', 'Design and optimize relational databases.', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
