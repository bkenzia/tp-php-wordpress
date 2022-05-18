-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2021 at 12:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cours-php-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `image`, `date`) VALUES
(1, 'Mon 1er article', 'Contenu du 1er article', '', '06/10/2021'),
(2, 'Mon 2ème article', 'Contenu du 2ème article :)', '', '06/10/2021'),
(3, 'Article vidéo', 'article avec une vidéo', '', '06/10/2021'),
(4, 'Article 2 avec vidéo', 'Contenu de l\'article avec vidéo', '', '06/10/2021'),
(6, 'Mon nouvel article', 'Contenu de mon nouvel article avec une image', 'entrees.jpg', '06/10/21'),
(7, 'Mon nouvel article avec une image', 'encore un article avec une image', 'desserts.jpg', '06/10/21'),
(8, 'Mon nouvel article', 'dfgdfgdf', 'plats.jpg', '06/10/21'),
(9, 'Mon nouvel article', 'ffdgfdgdfg', 'reservation.jpg', '06/10/21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
