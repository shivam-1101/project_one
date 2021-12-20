-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(20) NOT NULL,
  `article_tittle` varchar(150) NOT NULL,
  `article_body` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_tittle`, `article_body`, `user_id`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quod ea voluptatum aliquam et asperiores nobis suscipit exercitationem vitae. Quaerat esse fugiat illum vitae, velit nihil nostrum inventore soluta explicabo!', 1),
(2, 'aorem Ipsum', 'aorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quod ea voluptatum aliquam et asperiores nobis suscipit exercitationem vitae. Quaerat esse fugiat illum vitae, velit nihil nostrum inventore soluta explicabo!', 1),
(3, 'shivam', 'shivam', 1),
(4, 'nagpal', 'nagpal', 1),
(5, 'article', 'article', 2),
(6, 'ss', 'ss', 1),
(7, 'ss', 'ss', 1),
(8, 'ss', 'ss', 1),
(9, 'one', 'ghjbchufubus', 1),
(10, 'shivam', 'dfddd', 1),
(11, 'bottle', 'this is a new article', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'snagpal', 'snagpal', 'shivam', 'nagpal', 'shivanagpal56@gmail.com'),
(2, 'snagpal', '123456789', 'shivam', 'nagpal', 'shivanaggpal56@gmail.com'),
(3, 'snagpal', '123456789', 'shivam', 'nagpal', 'shivanagggpal56@gmail.com'),
(4, 'snagpal', 'snagpal333', 'shivam', 'nagpal', 'shivanaggggpal56@gmail.com'),
(5, 'shivam', '25f9e794323b453885f5181f1b624d0b', 'shivam', 'nagpal', 'shivampctebca19a@gmail.com'),
(7, 'nagpal', '25f9e794323b453885f5181f1b624d0b', 'shivam', 'nagpal', 'shivama@gmail.com'),
(8, 'shiva', 'a9e4747047e4211f698d66618eb9b957', 'shivam', 'nagpal', 'shivambca19a@gmail.com'),
(9, 'hardev', '25f9e794323b453885f5181f1b624d0b', 'hardev', 'singh', 'hardev@frappedev.co.in'),
(10, 'manpreet', '25f9e794323b453885f5181f1b624d0b', 'manpreet', 'kaur', 'manpreet@frappedev.co.in'),
(11, 'raju', '1702050f8ee1eefcc47d2058fbd535b9', 'raju', 'kumar', 'raju@frappedev.co.in'),
(12, 'raju', '0438edcd7d74f3c3a3ccb5a3d558cbd5', 'raju', 'kumar', 'raefju@frappedev.co.in'),
(13, 'raju', '$2y$10$ngD6KGsiVtgk0dtirFdPWuHeE88MtQiNMNOm0gI5Tv/03avcUMBIC', 'raju', 'kumar', 'raefjsdfu@frappedev.co.in'),
(14, 'bottle', '$2y$10$XA/9vg1yD8k1COLKQYm5wOdVrAY/hKg0Qvd6KvAARALc.rSdJMBeO', 'red', 'bottle', 'bottle@frappedev.co.in'),
(17, 'shivam', '$2y$10$X9udGfXGbJDUpXZPXs4AiuOzi366JZRVfTOZlODYO8cIWDSHaAHhS', 'shivam', 'nagpal', 'shivam@intern.frappedev.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
