-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 12:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film-rega`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi_judul` varchar(500) NOT NULL,
  `tumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `deskripsi`, `deskripsi_judul`, `tumbnail`) VALUES
(11220001, 'Fairy Tail', 'The world of Earth-land is home to numerous guilds where wizards[b] apply their magic for paid job requests. Natsu Dragneel, a Dragon Slayer wizard from the Fairy Tail guild, explores the Kingdom of Fiore in search of his missing adoptive father, the dragon Igneel. During his journey, he befriends a young celestial wizard named Lucy Heartfilia and invites her to join Fairy Tail. Natsu, Lucy, and the cat-like Exceed Happy form a team, which is joined by other guild members: Gray Fullbuster, an ice wizard; Erza Scarlet, a magical knight; and Wendy Marvell and Carla, another Dragon Slayer and Exceed duo. The team embark on numerous missions together, which include subduing criminals, illegal dark guilds, and ancient Etherious demons created by Zeref, a wizard cursed with immortality and deadly power.', 'The world of Earth-land is home to numerous guilds where wizards[b] apply their magic for paid job requests. ', 'Fairy.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username_login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username_login`, `password`, `level`) VALUES
(2, 'admin', '$2y$10$EFDDLNbMQba9m64elOfRf.9rK7HvqRXZUWeB.cR4N84Vf1rxheSly', 'admin'),
(3, 'ghaida', '$2y$10$4g9hfE673IqoDesr14wVmuZcAMTewXTw881E5woa/e.GPy2mDKDSS', ''),
(4, 'chika', '$2y$10$we3.0UlJF2ZYwM5Bh4Y3H.OOnkjOmp508q21cNQrjxDvs0SV6mV5C', ''),
(5, 'reja', '$2y$10$Uw.9M563YKVYHhxTdO8zEusMfLv9V5k78Si3n355nW4jLdkEupgki', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11220002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
