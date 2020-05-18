-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 08:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confess`
--

-- --------------------------------------------------------

--
-- Table structure for table `confessions`
--

CREATE TABLE `confessions` (
  `userConfessionId` int(11) NOT NULL,
  `confessedBy` varchar(255) NOT NULL,
  `confessTo` varchar(255) NOT NULL,
  `confession` varchar(255) NOT NULL,
  `confessTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confessions`
--

INSERT INTO `confessions` (`userConfessionId`, `confessedBy`, `confessTo`, `confession`, `confessTime`) VALUES
(12, 'Nainika', 'Lakshaya', 'l', '2020-05-17 06:36:41'),
(13, 'Nainika', 'Manas', 'm', '2020-05-17 06:36:51'),
(14, 'Manas', 'Lakshaya', 'laksh', '2020-05-17 06:37:38'),
(15, 'Manas', 'Shreyas', 'Teachers Favourite', '2020-05-17 06:58:32'),
(16, 'Manas', 'Nainika', 'no', '2020-05-17 06:58:59'),
(17, 'Manas', 'Nainika', 'SwagStorm', '2020-05-17 06:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userPic` varchar(255) NOT NULL,
  `userGender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassword`, `userPic`, `userGender`) VALUES
(5, 'Lakshaya', 'lakshaya@gmail.com', '$2y$10$OThtwPA4rSCPBk.lZlqTP.yW6.hAcuzxsVnOgEb3q5vU5hFnXaCEm', 'images/1.png', 'M'),
(6, 'Manas', 'joshimanassunil@gmail.com', '$2y$10$jo1ryhh8ECHTXbG94k0va.TWWgeiTs5CUIjoAJ.xDEvgtJUe4BhQK', 'images/1.png', 'M'),
(7, 'Nainika', 'nainika@gmail.com', '$2y$10$5GsooZYqa43q/mBJMcjeEejKLI8pQL6nd05lQgzJc0LLwh214FBae', 'images/2.png', 'F'),
(8, 'Shreyas', 'shreyas@gmail.com', '$2y$10$Pak1U9IJtos1gOSkMlkGUeg9qbBu8XjhVYyg.0dFUh0Ul6CYBiZLa', 'images/1.png', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confessions`
--
ALTER TABLE `confessions`
  ADD PRIMARY KEY (`userConfessionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confessions`
--
ALTER TABLE `confessions`
  MODIFY `userConfessionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
