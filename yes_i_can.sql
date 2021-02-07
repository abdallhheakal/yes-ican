-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 02:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yes i can`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `image`, `title`, `address`, `link`) VALUES
(1, 'images/teacher.jpg', 'teacher', '1 str haram', '#'),
(2, 'images/designer.jpg', 'designer', 'online', '#'),
(3, 'images/Painter.jpg', 'Painter', 'shehab street', '#'),
(4, 'images/Accountant.jpg', 'Accountant', 'fayoum', '#');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img1` longblob NOT NULL,
  `img2` longblob NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`name`, `title`, `img1`, `img2`, `url`) VALUES
('lesson (1)', ' addition', 0x696d616765732f6164642e6a7067, 0x696d616765732f616464322e706e67, 'https://youtu.be/AlEIbRXFOGc'),
('lesson (2)', 'substraction', 0x696d616765732f7375627374726163742e6a7067, 0x696d616765732f737562737472616374322e706e67, 'https://youtu.be/54tvyLqPTvo'),
('lesson (3)', 'multiplication', 0x696d616765732f6d756c7469322e6a7067, 0x696d616765732f6d756c74692e706e67, 'https://youtu.be/3ptSWBcKTwU'),
('lesson (4)', 'divide', 0x696d616765732f646976696465342e6a7067, 0x696d616765732f646976696465342e706e67, 'https://youtu.be/kIi2WxFjI_U');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `name` varchar(50) NOT NULL,
  `title1` varchar(50) NOT NULL,
  `img11` varchar(50) NOT NULL,
  `img12` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `img21` varchar(50) NOT NULL,
  `img22` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `title1`, `img11`, `img12`, `title2`, `img21`, `img22`) VALUES
('lesson (1)', 'letters and numbers', 'images/letters.jpg', 'images/numbers.jpg', 'study', 'images/study3.jpg', 'images/study2.png'),
('lesson (2)', 'father', 'images/father2.jpg', 'images/father.png', 'mother', 'images/mother.jpg', 'images/mother2.png'),
('lesson (3)', 'food', 'images/eat2.jpg', 'images/eat.jpg', 'drink', 'images/drink2.jpg', 'images/drink.jpg'),
('lesson (4)', 'Brushing his teeth', 'images/wash.jpg', 'images/wah2.png', 'sleep', 'images/sllep2.jpg', 'images/sleep.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
